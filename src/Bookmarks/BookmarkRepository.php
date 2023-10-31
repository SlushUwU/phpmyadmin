<?php
/**
 * Handles bookmarking SQL queries
 */

declare(strict_types=1);

namespace PhpMyAdmin\Bookmarks;

use PhpMyAdmin\Config;
use PhpMyAdmin\ConfigStorage\Features\BookmarkFeature;
use PhpMyAdmin\ConfigStorage\Relation;
use PhpMyAdmin\DatabaseInterface;
use PhpMyAdmin\Dbal\Connection;
use PhpMyAdmin\Identifiers\DatabaseName;
use PhpMyAdmin\Util;

/**
 * Handles bookmarking SQL queries
 */
final class BookmarkRepository
{
    private BookmarkFeature|null $bookmarkFeature;

    public function __construct(private DatabaseInterface $dbi, Relation $relation)
    {
        $this->bookmarkFeature = $relation->getRelationParameters()->bookmarkFeature;
    }

    /**
     * Creates a Bookmark object from the parameters
     *
     * @param bool $shared whether to make the bookmark available for all users
     */
    public function createBookmark(
        string $sqlQuery,
        string $label,
        string $user,
        string $database,
        bool $shared = false,
    ): Bookmark|false {
        if ($this->bookmarkFeature === null) {
            return false;
        }

        if ($sqlQuery === '' || $label === '') {
            return false;
        }

        if (! Config::getInstance()->settings['AllowSharedBookmarks']) {
            $shared = false;
        }

        if (! $shared && $user === '') {
            return false;
        }

        return new Bookmark($this->dbi, $this->bookmarkFeature, $database, $shared ? '' : $user, $label, $sqlQuery);
    }

    /**
     * Gets the list of bookmarks defined for the current database
     *
     * @param string       $user Current user
     * @param string|false $db   the current database name or false
     *
     * @return Bookmark[] the bookmarks list
     *
     * @infection-ignore-all
     */
    public function getList(
        string $user,
        string|false $db = false,
    ): array {
        if ($this->bookmarkFeature === null) {
            return [];
        }

        $exactUserMatch = ! Config::getInstance()->settings['AllowSharedBookmarks'];

        $query = 'SELECT * FROM ' . Util::backquote($this->bookmarkFeature->database)
            . '.' . Util::backquote($this->bookmarkFeature->bookmark)
            . ' WHERE (`user` = ' . $this->dbi->quoteString($user);
        if (! $exactUserMatch) {
            $query .= " OR `user` = ''";
        }

        $query .= ')';

        if ($db !== false) {
            $query .= ' AND dbase = ' . $this->dbi->quoteString($db);
        }

        $query .= ' ORDER BY label ASC';

        $result = $this->dbi->fetchResult($query, null, null, Connection::TYPE_CONTROL);

        $bookmarks = [];
        foreach ($result as $row) {
            $bookmarks[] = $this->createFromRow($row);
        }

        return $bookmarks;
    }

    /**
     * Retrieve a specific bookmark
     */
    public function get(
        string|null $user,
        int $id,
    ): Bookmark|null {
        if ($this->bookmarkFeature === null) {
            return null;
        }

        $query = 'SELECT * FROM ' . Util::backquote($this->bookmarkFeature->database)
            . '.' . Util::backquote($this->bookmarkFeature->bookmark)
            . ' WHERE `id` = ' . $id;

        if ($user !== null) {
            $query .= ' AND (user = ' . $this->dbi->quoteString($user);

            $exactUserMatch = ! Config::getInstance()->settings['AllowSharedBookmarks'];
            if (! $exactUserMatch) {
                $query .= " OR user = ''";
            }

            $query .= ')';
        }

        $query .= ' LIMIT 1';

        $result = $this->dbi->fetchSingleRow($query, DatabaseInterface::FETCH_ASSOC, Connection::TYPE_CONTROL);
        if ($result !== null) {
            return $this->createFromRow($result);
        }

        return null;
    }

    /**
     * Retrieve a specific bookmark by its label
     */
    public function getByLabel(
        string $user,
        DatabaseName $db,
        string $label,
    ): Bookmark|null {
        if ($this->bookmarkFeature === null) {
            return null;
        }

        $query = 'SELECT * FROM ' . Util::backquote($this->bookmarkFeature->database)
            . '.' . Util::backquote($this->bookmarkFeature->bookmark)
            . ' WHERE `label`'
            . ' = ' . $this->dbi->quoteString($label)
            . ' AND dbase = ' . $this->dbi->quoteString($db->getName())
            . ' AND user = ' . $this->dbi->quoteString($user)
            . ' LIMIT 1';

        $result = $this->dbi->fetchSingleRow($query, DatabaseInterface::FETCH_ASSOC, Connection::TYPE_CONTROL);
        if ($result !== null) {
            return $this->createFromRow($result);
        }

        return null;
    }

    /** @param string[] $row Resource used to build the bookmark */
    private function createFromRow(array $row): Bookmark
    {
        return new Bookmark(
            $this->dbi,
            $this->bookmarkFeature,
            $row['dbase'],
            $row['user'],
            $row['label'],
            $row['query'],
            (int) $row['id'],
        );
    }
}
