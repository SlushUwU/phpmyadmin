<?php

declare(strict_types=1);

namespace PhpMyAdmin\Controllers\Table;

use PhpMyAdmin\Controllers\SqlController;
use PhpMyAdmin\Html\Generator;
use PhpMyAdmin\Response;
use PhpMyAdmin\Table\Partition;
use PhpMyAdmin\Template;
use PhpMyAdmin\Util;
use function sprintf;
use function strlen;

final class PartitionController extends AbstractController
{
    /** @var Partition */
    private $model;

    /**
     * @param Response  $response
     * @param string    $db
     * @param string    $table
     * @param Partition $partition
     */
    public function __construct($response, Template $template, $db, $table, $partition)
    {
        parent::__construct($response, $template, $db, $table);
        $this->model = $partition;
    }

    public function analyze(): void
    {
        $partitionName = $_POST['partition_name'] ?? '';

        if (strlen($partitionName) === 0) {
            return;
        }

        [$rows, $query] = $this->model->analyze($this->db, $this->table, $partitionName);

        $message = Generator::getMessage(
            __('Your SQL query has been executed successfully.'),
            $query,
            'success'
        );

        $this->render('table/partition/analyze', [
            'partition_name' => $partitionName,
            'message' => $message,
            'rows' => $rows,
        ]);
    }

    public function check(): void
    {
        $partitionName = $_POST['partition_name'] ?? '';

        if (strlen($partitionName) === 0) {
            return;
        }

        [$rows, $query] = $this->model->check($this->db, $this->table, $partitionName);

        $message = Generator::getMessage(
            __('Your SQL query has been executed successfully.'),
            $query,
            'success'
        );

        $this->render('table/partition/check', [
            'partition_name' => $partitionName,
            'message' => $message,
            'rows' => $rows,
        ]);
    }

    public function drop(): void
    {
        $partitionName = $_POST['partition_name'] ?? '';

        if (strlen($partitionName) === 0) {
            return;
        }

        [$result, $query] = $this->model->drop($this->db, $this->table, $partitionName);

        if ($result) {
            $message = Generator::getMessage(
                __('Your SQL query has been executed successfully.'),
                $query,
                'success'
            );
        } else {
            $message = Generator::getMessage(
                __('Error'),
                $query,
                'error'
            );
        }

        $this->render('table/partition/drop', [
            'partition_name' => $partitionName,
            'message' => $message,
        ]);
    }

    public function optimize(): void
    {
        $partitionName = $_POST['partition_name'] ?? '';

        if (strlen($partitionName) === 0) {
            return;
        }

        [$rows, $query] = $this->model->optimize($this->db, $this->table, $partitionName);

        $message = Generator::getMessage(
            __('Your SQL query has been executed successfully.'),
            $query,
            'success'
        );

        $this->render('table/partition/optimize', [
            'partition_name' => $partitionName,
            'message' => $message,
            'rows' => $rows,
        ]);
    }

    public function rebuild(): void
    {
        $partitionName = $_POST['partition_name'] ?? '';

        if (strlen($partitionName) === 0) {
            return;
        }

        [$result, $query] = $this->model->rebuild($this->db, $this->table, $partitionName);

        if ($result) {
            $message = Generator::getMessage(
                __('Your SQL query has been executed successfully.'),
                $query,
                'success'
            );
        } else {
            $message = Generator::getMessage(
                __('Error'),
                $query,
                'error'
            );
        }

        $this->render('table/partition/rebuild', [
            'partition_name' => $partitionName,
            'message' => $message,
        ]);
    }

    public function repair(): void
    {
        global $containerBuilder, $sql_query;

        $partitionName = $_POST['partition_name'] ?? '';

        if (strlen($partitionName) === 0) {
            return;
        }

        $sql_query = sprintf(
            'ALTER TABLE %s REPAIR PARTITION %s;',
            Util::backquote($this->table),
            Util::backquote($partitionName)
        );

        /** @var SqlController $controller */
        $controller = $containerBuilder->get(SqlController::class);
        $controller->index();
    }

    public function truncate(): void
    {
        global $containerBuilder, $sql_query;

        $partitionName = $_POST['partition_name'] ?? '';

        if (strlen($partitionName) === 0) {
            return;
        }

        $sql_query = sprintf(
            'ALTER TABLE %s TRUNCATE PARTITION %s;',
            Util::backquote($this->table),
            Util::backquote($partitionName)
        );

        /** @var SqlController $controller */
        $controller = $containerBuilder->get(SqlController::class);
        $controller->index();
    }
}
