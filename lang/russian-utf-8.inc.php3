<?php
/* $Id$ */

/**
 * Translated by Gosha Sakovich <gt2 at users.sourceforge.net>
 *               Artyom Rabzonov <tyomych at gmx.net>
 *               Nicolay Zakharov <aquarius@mobnav.com> 19-Nov-2002
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'sans-serif';
$right_font_family = 'sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Tera, Peta, Exa
$byteUnits = array('Байт', 'кБ', 'МБ', 'ГБ');

$day_of_week = array('Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб');
$month = array('Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн', 'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d %Y г., %H:%M';

$strAPrimaryKey = 'Был добавлен первичный ключ к %s';
$strAccessDenied = 'В доступе отказано';
$strAction = 'Действие';
$strAddDeleteColumn = 'Добавить/удалить столбец критерия';
$strAddDeleteRow = 'Добавить/удалить ряд критерия';
$strAddNewField = 'Добавить новое поле';
$strAddPriv = 'Добавить новые привилегии';
$strAddPrivMessage = 'Была добавлена новая привилегия';
$strAddSearchConditions = 'Добавить условия поиска (тело для условия "where"):';
$strAddToIndex = 'Добавить к индексу&nbsp;%s&nbsp;колоноку(и)';
$strAddUser = 'Добавить нового пользователя';
$strAddUserMessage = 'Был добавлен новый пользователь.';
$strAffectedRows = 'Затронутые ряды:';
$strAfter = 'После %s';
$strAfterInsertBack = 'Возврат';
$strAfterInsertNewInsert = 'Вставить новую запись';
$strAll = 'Все';
$strAllTableSameWidth = 'показать все таблицы с такой шириной?';
$strAlterOrderBy = 'Изменить порядок таблицы';
$strAnIndex = 'Был добавлен индекс для %s';
$strAnalyzeTable = 'Анализ таблицы';
$strAnd = 'И';
$strAny = 'Любой';
$strAnyColumn = 'Любая колонка';
$strAnyDatabase = 'Любая база данных';
$strAnyHost = 'Любой хост';
$strAnyTable = 'Любая таблица';
$strAnyUser = 'Любой пользователь';
$strAscending = 'По возрастанию';
$strAtBeginningOfTable = 'В начало таблицы';
$strAtEndOfTable = 'В конец таблицы';
$strAttr = 'Атрибуты';

$strBack = 'Назад';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinary = ' Двоичный ';
$strBinaryDoNotEdit = ' Двоичные данные - не редактируются ';
$strBookmarkDeleted = 'Закладка была удалена.';
$strBookmarkLabel = 'Метка';
$strBookmarkQuery = 'Закладка на SQL-запрос';
$strBookmarkThis = 'Закладка на данный SQL-запрос';
$strBookmarkView = 'Только просмотр';
$strBrowse = 'Обзор';
$strBzip = 'архивировать в bzip';

$strCantLoadMySQL = 'расширение MySQL не загружено,<br />проверьте конфигурацию PHP.';
$strCantLoadRecodeIconv = 'Не могу загрузить iconv или recode, необходимые для перекодирования символов. Проверьте php-конфигурацию и разрешите их использование или запретите перекодирование символов в phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Невозможно переименовать индекс в PRIMARY!';
$strCantUseRecodeIconv = 'Не могу использовать iconv функции: ни libiconv, ни recode_string, пока не будут загружены extension reports. Проверьте php-конфигурацию.';
$strCardinality = 'Количество элементов';
$strCarriage = 'Возврат каретки: \\r';
$strChange = 'Изменить';
$strChangeDisplay = 'Выберите поле для отображения';
$strChangePassword = 'Изменить пароль';
$strCharsetOfFile = 'Кодировка файла:';
$strCheckAll = 'Отметить все';
$strCheckDbPriv = 'Проверить привилегии БД';
$strCheckTable = 'Проверить таблицу';
$strChoosePage = 'Выберите страницу для редактирования';
$strColComFeat = 'Показать комментария столбцов';
$strColumn = 'Колонка';
$strColumnNames = 'Названия колонок';
$strComments = 'Комментарии';
$strCompleteInserts = 'Полная вставка';
$strCompression = 'Сжатие';
$strConfigFileError = 'phpMyAdmin не может прочитать данные из конфигурационного файла!  <br />Возможная причина - синтаксическая ошибка.<br />Вызовите этот файл (config.inc.php) непосредственно из браузера. Если будут сообщения об ошибках - исправьте их. Если пустая страница - все в порядке';
$strConfigureTableCoord = 'Измените координаты таблицы %s';
$strConfirm = 'Вы действительно хотите сделать это?';
$strCookiesRequired = 'Cookies должны быть включены после этого места.';
$strCopyTable = 'Скопировать таблицу в (база данных<b>.</b>таблица):';
$strCopyTableOK = 'Таблица %s была скопирована в %s.';
$strCreate = 'Создать';
$strCreateIndex = 'Создать индекс на&nbsp;%s&nbsp;колонках';
$strCreateIndexTopic = 'Создать новый индекс';
$strCreateNewDatabase = 'Создать новую БД';
$strCreateNewTable = 'Создать новую таблицу в БД %s';
$strCreatePage = 'Создать новую страницу';
$strCreatePdfFeat = 'Создание PDF-схемы';
$strCriteria = 'Критерий';

$strData = 'Данные';
$strDataDict = 'Словарь данных';
$strDataOnly = 'Только данные';
$strDatabase = 'БД ';
$strDatabaseHasBeenDropped = 'База данных %s была удалена.';
$strDatabaseWildcard = 'База данных (возможно использование шаблонов):';
$strDatabases = 'Базы Данных';
$strDatabasesStats = 'Статистика баз данных';
$strDefault = 'По умолчанию';
$strDelete = 'Удалить';
$strDeleteFailed = 'Неудачное удаление!';
$strDeleteUserMessage = 'Был удален пользователь %s.';
$strDeleted = 'Ряд был удален';
$strDeletedRows = 'Следующие ряды были удалены:';
$strDescending = 'По убыванию';
$strDisabled = 'Недоступно';
$strDisplay = 'Показать';
$strDisplayFeat = 'Показать дополнительные возможности';
$strDisplayOrder = 'Порядок просмотра:';
$strDisplayPDF = 'Показать PDF-схему';
$strDoAQuery = 'Выполнить "запрос по примеру" (символ подстановки: "%")';
$strDoYouReally = 'Вы действительно желаете ';
$strDocu = 'Документация';
$strDrop = 'Уничтожить';
$strDropDB = 'Уничтожить БД %s';
$strDropTable = 'Удалить таблицу';
$strDumpXRows = 'Дамп %s записей, начиная с %s.';
$strDumpingData = 'Дамп данных таблицы';
$strDynamic = 'динамический';

$strEdit = 'Правка';
$strEditPDFPages = 'Изменить PDF-страницы';
$strEditPrivileges = 'Редактирование привилегий';
$strEffective = 'Эффективность';
$strEmpty = 'Очистить';
$strEmptyResultSet = 'MySQL вернула пустой результат (т.е. ноль рядов).';
$strEnabled = 'Доступно';
$strEnd = 'Конец';
$strEndCut = 'END CUT';
$strEndRaw = 'END RAW';
$strEnglishPrivileges = ' Примечание: привилегии MySQL задаются по-английски ';
$strError = 'Ошибка';
$strExplain = 'Описать SQL';
$strExport = 'Экспорт';
$strExportToXML = 'Экспорт в XML-формат';
$strExtendedInserts = 'Расширенные вставки';
$strExtra = 'Дополнительно';

$strField = 'Поле';
$strFieldHasBeenDropped = 'Поле %s было удалено';
$strFields = 'Поля';
$strFieldsEmpty = ' Пустой счетчик полей! ';
$strFieldsEnclosedBy = 'Поля заключены в';
$strFieldsEscapedBy = 'Поля экранируются';
$strFieldsTerminatedBy = 'Поля разделены';
$strFixed = 'фиксированный';
$strFlushTable = 'Сбросить кэш таблицы ("FLUSH")';
$strFormEmpty = 'Требуется значение для формы!';
$strFormat = 'Формат';
$strFullText = 'Полные тексты';
$strFunction = 'Функция';

$strGenBy = 'Созданный';
$strGenTime = 'Время создания';
$strGeneralRelationFeat = 'Основные возможности связей';
$strGo = 'Пошел';
$strGrants = 'Права';
$strGzip = 'архивировать в gzip';

$strHasBeenAltered = 'была изменена.';
$strHasBeenCreated = 'была создана.';
$strHaveToShow = 'Вы должны выбрать не менее одной колонки для отображения';
$strHome = 'К началу';
$strHomepageOfficial = 'Официальная страница phpMyAdmin';
$strHomepageSourceforge = 'Загрузка phpMyAdmin на Sourceforge';
$strHost = 'Хост';
$strHostEmpty = 'Пустое имя хоста!';

$strIdxFulltext = 'ПолнТекст';
$strIfYouWish = 'Если Вы желаете загрузить только некоторые столбцы таблицы, укажите разделенный запятыми список полей.';
$strIgnore = 'Игнорировать';
$strImportDocSQL = 'Импорт docSQL файлов';
$strInUse = 'используется';
$strIndex = 'Индекс';
$strIndexHasBeenDropped = 'Индекс %s был удален';
$strIndexName = 'Имя индекса&nbsp;:';
$strIndexType = 'Тип индекса&nbsp;:';
$strIndexes = 'Индексы';
$strInsecureMySQL = 'Ваш конфигурационный файл содержит настройки (пользователь root без пароля), которые относятся к привилегированному пользователю MySQL (по умолчанию). Ваш MySQL сервер запущен с этими настройками по умолчанию, открытый для вторжений, поэтому Вам настоятельно рекомендуется устранить эту дыру в безопасности.';
$strInsert = 'Вставить';
$strInsertAsNewRow = 'Вставить новый ряд';
$strInsertNewRow = 'Вставить новый ряд';
$strInsertTextfiles = 'Вставить текстовые файлы в таблицу';
$strInsertedRows = 'Добавлены ряды:';
$strInstructions = 'Инструкции';
$strInvalidName = '"%s" - является зарезервированным словом, вы не можете использовать его в качестве имени базы данных/таблицы/поля.';

$strKeepPass = 'Не менять пароль';
$strKeyname = 'Имя ключа';
$strKill = 'Убить';

$strLength = 'Длина';
$strLengthSet = 'Длины/Значения*';
$strLimitNumRows = 'записей на страницу';
$strLineFeed = 'Символ окончания линии: \\n';
$strLines = 'Линии';
$strLinesTerminatedBy = 'Строки разделены';
$strLinkNotFound = 'Связь не найдена';
$strLinksTo = 'Связь с';
$strLocationTextfile = 'Месторасположение текстового файла';
$strLogPassword = 'Пароль:';
$strLogUsername = 'Пользователь:';
$strLogin = 'Вход в систему';
$strLogout = 'Выйти из системы';

$strMissingBracket = 'Пропущена скобка';
$strModifications = 'Модификации были сохранены';
$strModify = 'Изменить';
$strModifyIndexTopic = 'Изменить индекс';
$strMoveTable = 'Переместить таблицы в (база данных<b>.</b>таблица):';
$strMoveTableOK = 'Таблица %s была перемещена в %s.';
$strMySQLCharset = 'MySQL-кодировка';
$strMySQLReloaded = 'MySQL перезагружена.';
$strMySQLSaid = 'Ответ MySQL: ';
$strMySQLServerProcess = 'MySQL %pma_s1% на %pma_s2% как %pma_s3%';
$strMySQLShowProcess = 'Показать процессы';
$strMySQLShowStatus = 'Показать состояние MySQL';
$strMySQLShowVars = 'Показать системные переменные MySQL';

$strName = 'Имя';
$strNext = 'Далее';
$strNo = 'Нет';
$strNoDatabases = 'БД отсутствуют';
$strNoDescription = 'нет описания';
$strNoDropDatabases = 'Команда "Удалить БД" отключена.';
$strNoExplain = 'Прекратить описание SQL';
$strNoFrames = 'Для работы phpMyAdmin нужен браузер с поддержкой <b>фреймов</b>.';
$strNoIndex = 'Индекс не определен!';
$strNoIndexPartsDefined = 'Части индекса не определены!';
$strNoModification = 'Нет изменений';
$strNoPassword = 'Без пароля';
$strNoPhp = 'без PHP-кода';
$strNoPrivileges = 'Без привилегий';
$strNoQuery = 'Нет SQL-запроса!';
$strNoRights = 'Вы не имеете достаточно прав для этого!';
$strNoTablesFound = 'В БД не обнаружено таблиц.';
$strNoUsersFound = 'Не найден пользователь.';
$strNoValidateSQL = 'Не проверять SQL';
$strNone = 'Нет';
$strNotNumber = 'Это не число!';
$strNotOK = 'Не готово';
$strNotSet = 'Таблица <b>%s</b> не найдена';
$strNotValidNumber = ' недопустимое количество рядов!';
$strNull = 'Ноль';
$strNumSearchResultsInTable = '%s записи(ей) в таблице <i>%s</i>';
$strNumSearchResultsTotal = '<b>Итого:</b> <i>%s</i> записи(ей)';

$strOK = 'Готово';
$strOftenQuotation = 'Обычно кавычки. "По выбору" означает, что только поля char и varchar заключаются в кавычки.';
$strOperations = 'Операции';
$strOptimizeTable = 'Оптимизировать таблицу';
$strOptionalControls = 'По выбору. Контролирует как читать или писать специальные символы.';
$strOptionally = 'По выбору';
$strOptions = 'Опции';
$strOr = 'Или';
$strOverhead = 'Накладные расходы';

$strPHP40203 = 'Вы используете версию PHP 4.2.3, которая содержит серьезные ошибки при работе с много-байтовыми строками (mbstring). Смотрите PHP bug report 19404. Данная версия PHP не рекомендуется для использования с phpMyAdmin.';
$strPHPVersion = 'Версия PHP';
$strPageNumber = 'Номер страницы:';
$strPartialText = 'Частичные тексты';
$strPassword = 'Пароль';
$strPasswordEmpty = 'Пустой пароль!';
$strPasswordNotSame = 'Пароли не одинаковы!';
$strPdfDbSchema = 'Структура базы "%s" - страница %s';
$strPdfInvalidPageNum = 'Неопределенный номер PDF-страницы!';
$strPdfInvalidTblName = 'Таблица "%s" не существует!';
$strPdfNoTables = 'Нет таблиц';
$strPhp = 'Создать PHP-код';
$strPmaDocumentation = 'Документация по phpMyAdmin';
$strPmaUriError = 'Директива <tt>$cfg[\'PmaAbsoluteUri\']</tt> должна быть установлена в Вашем конфигурационном файле!';
$strPos1 = 'Начало';
$strPrevious = 'Назад';
$strPrimary = 'Первичный';
$strPrimaryKey = 'Первичный ключ';
$strPrimaryKeyHasBeenDropped = 'Первичный ключ был удален';
$strPrimaryKeyName = 'Имя первичного ключа должно быть PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>должно</b> быть признаком <b>только</b> первичного ключа!)';
$strPrint = 'Печать';
$strPrintView = 'Версия для печати';
$strPrivileges = 'Привилегии';
$strProperties = 'Свойства';
$strPutColNames = 'Укажите наименования полей в первой строке';

$strQBE = 'Запрос&nbsp;по&nbsp;примеру';
$strQBEDel = 'Удалить';
$strQBEIns = 'Вставить';
$strQueryOnDb = 'SQL-запрос БД <b>%s</b>:';

$strReType = 'Подтверждение';
$strRecords = 'Записи';
$strReferentialIntegrity = 'Проверить целостность данных:';
$strRelationNotWorking = 'Дополнительные возможности для работы со связанными таблицами недоступны. Для определения причины нажмите %sсюда%s.';
$strRelationView = 'Связанный вид';
$strReloadFailed = 'Не удалось перезагрузить MySQL.';
$strReloadMySQL = 'Перезагрузить MySQL';
$strRememberReload = 'Не забудьте перезагрузить сервер.';
$strRenameTable = 'Переименовать таблицу в';
$strRenameTableOK = 'Таблица %s была переименована в %s';
$strRepairTable = 'Починить таблицу';
$strReplace = 'Заместить';
$strReplaceTable = 'Заместить данные таблицы данными из файла';
$strReset = 'Переустановить';
$strRevoke = 'Отменить';
$strRevokeGrant = 'Отменить предоставление прав';
$strRevokeGrantMessage = 'Было отменено предоставление прав для %s';
$strRevokeMessage = 'Вы изменили привилегии для %s';
$strRevokePriv = 'Отменить привилегии';
$strRowLength = 'Длина ряда';
$strRowSize = ' Размер ряда ';
$strRows = 'Ряды';
$strRowsFrom = 'рядов от';
$strRowsModeHorizontal = 'горизонтальном';
$strRowsModeOptions = 'в %s режиме, заголовки после каждых %s ячеек';
$strRowsModeVertical = 'вертикальном';
$strRowsStatistic = 'Статистика ряда';
$strRunQuery = 'Выполнить Запрос';
$strRunSQLQuery = 'Выполнить SQL запрос(ы) на БД %ы';
$strRunning = 'на %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'Возможно у Вас ошибка в SQL-парсере. Пожалуйста, проверьте внимательно Ваш запрос и соответствие кавычек. Возможно также, что Вы пытаетесь закачать бинарный файл вне поля quoted text area. Вы можете попробовать выполнить свой запрос через интерфейс командной строки MySQL. Описание ошибки MySQL сервера дано ниже, возможно оно поможет понять, что же произошло. Если у Вас все равно возникают проблемы или если парсер выдает ошибки там, где интерфейс командной строки работает успешно, попробуйте изменить свой SQL запрос до простых запросов и определить, какой именно вызывает проблемы. Вы можете также прислать отчет об ошибке вместе с блоком данных (секция CUT):';
$strSQLParserUserError = 'Кажется возникла ошибка в Вашем SQL запросе. Описание ошибки от MySQL сервера дано ниже, возможно, оно поможет Вам разобраться';
$strSQLQuery = 'SQL-запрос';
$strSQLResult = 'SQL-результат';
$strSQPBugInvalidIdentifer = 'Неправильный идентификатор';
$strSQPBugUnclosedQuote = 'Незакрытая кавычка';
$strSQPBugUnknownPunctuation = 'Неизвестная строка с пунктуацией';
$strSave = 'Сохранить';
$strScaleFactorSmall = 'Масштаб слишком маленький для отображения всей таблицы на одной странице';
$strSearch = 'Искать';
$strSearchFormTitle = 'Искать в базе данных';
$strSearchInTables = 'В таблице(ах):';
$strSearchNeedle = 'Слово(а) или значение(я) для поиска (включая "%") в:';
$strSearchOption1 = 'хоть одно слово';
$strSearchOption2 = 'все слова';
$strSearchOption3 = 'точное соответствие';
$strSearchOption4 = 'регулярное выражение';
$strSearchResultsFor = 'Искать в "<i>%s</i>" %s:';
$strSearchType = 'Искать:';
$strSelect = 'Выбрать';
$strSelectADb = 'Выберите БД';
$strSelectAll = 'Отметить все';
$strSelectFields = 'Выбрать поля (минимум одно):';
$strSelectNumRows = 'по запросу';
$strSelectTables = 'Выберите таблицу(ы)';
$strSend = 'послать';
$strServer = 'Сервер %s';
$strServerChoice = 'Выбор сервера';
$strServerVersion = 'Версия сервера';
$strSetEnumVal = 'Для типов поля "enum" и "set", введите значения по этому формату: \'a\',\'b\',\'c\'...<br />Если вам понадобиться ввести обратную косую черту ("\"") или одиночную кавычку ("\'") среди этих значений, поставьте перед ними обратную косую черту (например, \'\\\\xyz\' или \'a\\\'b\').';
$strShow = 'Показать';
$strShowAll = 'Показать все';
$strShowColor = 'Показать цвет';
$strShowCols = 'Показать колонки';
$strShowGrid = 'Показать сетку';
$strShowPHPInfo = 'Показать информацию о PHP';
$strShowTableDimension = 'Показать размерность таблицы';
$strShowTables = 'Показать таблицы';
$strShowThisQuery = ' Показать данный запрос снова ';
$strShowingRecords = 'Показывает записи ';
$strSingly = '(отдельно)';
$strSize = 'Размер';
$strSort = 'Отсортировать';
$strSpaceUsage = 'Используемое пространство';
$strSplitWordsWithSpace = 'Слова, разделенные пробелом (" ").';
$strStatement = 'Выражения';
$strStrucCSV = 'CSV данные';
$strStrucData = 'Структура и данные';
$strStrucDrop = 'Добавить удаление таблицы';
$strStrucExcelCSV = 'CSV для данных Ms Excel';
$strStrucOnly = 'Только структуру';
$strStructPropose = 'Предлагаемая структура таблицы';
$strStructure = 'Структура';
$strSubmit = 'Выполнить';
$strSuccess = 'Ваш SQL-запрос был успешно выполнен';
$strSum = 'Всего';

$strTable = 'таблица ';
$strTableComments = 'Комментарий к таблице';
$strTableEmpty = 'Пустое название таблицы!';
$strTableHasBeenDropped = 'Таблица %s была удалена';
$strTableHasBeenEmptied = 'Таблица %s была очищена';
$strTableHasBeenFlushed = 'Был сброшен кэш таблицы %s';
$strTableMaintenance = 'Обслуживание таблицы';
$strTableStructure = 'Структура таблицы';
$strTableType = 'Тип таблицы';
$strTables = '%s таблиц(ы)';
$strTextAreaLength = ' Из-за большой длины,<br /> это поле не может быть отредактированно ';
$strTheContent = 'Содержимое файла было импортировано.';
$strTheContents = 'Содержимое файла замещает содержимое таблицы для рядов с идентичными первичными или уникальными ключами.';
$strTheTerminator = 'Символ окончания полей.';
$strTotal = 'всего';
$strType = 'Тип';

$strUncheckAll = 'Снять отметку со всех';
$strUnique = 'Уникальное';
$strUnselectAll = 'Снять отметку со всех';
$strUpdatePrivMessage = 'Были изменены привилегии для';
$strUpdateProfile = 'Обновить профиль:';
$strUpdateProfileMessage = 'Профиль был обновлен.';
$strUpdateQuery = 'Дополнить запрос';
$strUsage = 'Использование';
$strUseBackquotes = 'Обратные кавычки в названиях таблиц и полей';
$strUseTables = 'Использовать таблицы';
$strUser = 'Пользователь';
$strUserEmpty = 'Пустое имя пользователя!';
$strUserName = 'Имя пользователя';
$strUsers = 'Пользователи';

$strValidateSQL = 'Проверить SQL';
$strValidatorError = 'Проверка SQL не может быть инициализирована. Проверьте, установлены ли необходимые модули расширений для PHP, описанные в %sдокументации%s.';
$strValue = 'Значение';
$strViewDump = 'Просмотреть дамп таблицы';
$strViewDumpDB = 'Просмотреть дамп БД';

$strWebServerUploadDirectory = 'директория, куда помещаются закачанные файлы от web-сервера';
$strWebServerUploadDirectoryError = 'директория, которую Вы установили как "upload" не может быть открыта';
$strWelcome = 'Добро пожаловать в %s';
$strWithChecked = 'С отмеченными:';
$strWrongUser = 'Ошибочный логин/пароль. В доступе отказано.';

$strYes = 'Да';

$strZip = 'архивировать в zip';

// To translate
$strNumTables = 'Tables'; //to translate
$strTotalUC = 'Total'; //to translate
$strRelationalSchema = 'Relational schema';  //to translate
$strTableOfContents = 'Table of contents';  //to translate
?>
