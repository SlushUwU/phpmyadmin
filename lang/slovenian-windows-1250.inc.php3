<?php
/* $Id$ */

/* By: uros kositer, agenda d.o.o. <urosh@agenda.si> */

$charset = 'windows-1250';
$allow_recoding = TRUE;
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Ned', 'Pon', 'Tor', 'Sre', '�et', 'Pet', 'Sob');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'Maj', 'Jun', 'Jul', 'Avg', 'Sep', 'Okt', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y ob %I:%M %p';

$strAPrimaryKey = 'Na %s je dodan primarni klju�';
$strAccessDenied = 'Dostop zavrnjen';
$strAction = 'Akcija';
$strAddDeleteColumn = 'Dodaj/Odstrani stolpec \'Polje\'';
$strAddDeleteRow = 'Dodaj/Odstrani vrstico \'Kriterij\'';
$strAddNewField = 'Dodaj novo polje';
$strAddPriv = 'Dodaj nov privilegij';
$strAddPrivMessage = 'Dodali ste nov privilegij.';
$strAddSearchConditions = 'Dodaj iskalne pogoje (telo "where" stavka):';
$strAddToIndex = 'Dodaj indeksu &nbsp;%s&nbsp;stolpec(ce)';
$strAddUser = 'Dodaj novega uporabnika';
$strAddUserMessage = 'Dodali ste novega uporabnika.';
$strAffectedRows = 'Spremenjene vrstice:';
$strAfter = 'Po %s';
$strAfterInsertBack = 'Nazaj na prej�njo stran';
$strAfterInsertNewInsert = 'Vstavi �e eno novo vrstico';
$strAll = 'Vse/Vsi';
$strAllTableSameWidth = 'prika�em vse tabele enake �irine?';
$strAlterOrderBy = 'Spremeni vrstni red prikaza tabele za';
$strAnIndex = 'Na %s je dodan indeks';
$strAnalyzeTable = 'Analiziraj tabelo';
$strAnd = 'In';
$strAny = 'Katerikoli';
$strAnyColumn = 'Katerikoli stolpec';
$strAnyDatabase = 'Katerakoli podatkovna baza';
$strAnyHost = 'Katerikoli gostitelj';
$strAnyTable = 'Katerakoli tabela';
$strAnyUser = 'Katerikoli uporabnik';
$strAscending = 'Nara��ajo�e';
$strAtBeginningOfTable = 'Na za�etku tabele';
$strAtEndOfTable = 'Na koncu tabele';
$strAttr = 'Atributi';

$strBack = 'Nazaj';
$strBeginCut = 'ZA�ETEK IZREZA';
$strBeginRaw = 'BEGIN RAW';
$strBinary = 'Binarno';
$strBinaryDoNotEdit = 'Binarno - ne urejaj';
$strBookmarkDeleted = 'Zaznamek je odstranjen.';
$strBookmarkLabel = 'Nalepka';
$strBookmarkQuery = 'Ozna�ena SQL-poizvedba';
$strBookmarkThis = 'Ozna�i to SQL-poizvedbo';
$strBookmarkView = 'Samo pogled';
$strBrowse = 'Prebrskaj';
$strBzip = '"bzipano"';

$strCantLoadMySQL = 'ni mogo�e nalo�iti MySQL ekstenzij,<br /> prosimo, preverite PHP konfiguracijo.';
$strCantLoadRecodeIconv = 'Ni mogo�e nalo�iti iconv ali recode ekstenzij, ki so potrebne za pretvorbe kodnih tabel, konfigurirajte php tako, da bo omogo�al uporabo teh ekstenzij ali onemogo�ite pretvarjanje kodnih tabel v phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Indeksa ni mogo�e preimenovati v PRIMARY!';
$strCantUseRecodeIconv = 'Ni mogo�e uporabljati iconv, libiconv ali recode_string funkcij, �eprav so ekstenzije normalno nalo�ene. Preverite konfiguracijo php.';
$strCardinality = 'Kardinalnost';
$strCarriage = 'Znak za pomik na za�etek vrste (Carriage return): \\r';
$strChange = 'Spremeni';
$strChangeDisplay = 'Izberite polje za prikaz';
$strChangePassword = 'Spremeni geslo';
$strCharsetOfFile = 'Nabor znakov datoteke:';
$strCheckAll = 'Ozna�i vse';
$strCheckDbPriv = 'Preveri privilegije podatkovne baze';
$strCheckTable = 'Preveri tabelo';
$strChoosePage = 'Izberite stran za urejanje';
$strColComFeat = 'Prikazovanje komentarjev stolpcev';
$strColumn = 'Stolpec';
$strColumnNames = 'Imena stolpcev';
$strComments = 'Komentarji';
$strCompleteInserts = 'Popolne \'insert\' poizvedbe';
$strCompression = 'Stiskanje';
$strConfigFileError = 'phpMyAdmin ni mogel prebrati konfiguracijske datoteke!<br />To se lahko zgodi, �e php pri prevajanju konfiguracijske datoteke najde napako ali pa ne najde datoteke.<br />Prosimo, odprite konfiguracijsko datoteko s povezavo, ki je navedena spodaj in preberite dobljeno sporo�ilo o napaki. V ve�ini primerov gre za manjkajo�i narekovaj ali podpi�je.<br />�e dobite prazno stran, je vse v redu.';
$strConfigureTableCoord = 'Prosimo, konfigurirajte koordinate za tabelo %s';
$strConfirm = 'Ali res �elite to storiti?';
$strCookiesRequired = '�e �elite �e dalje uporabljati program, morate omogo�iti pi�kotke.';
$strCopyTable = 'Kopiraj tabelo v (podatkovna_baza<b>.</b>tabela):';
$strCopyTableOK = 'Tabela %s je skopirana v %s.';
$strCreate = 'Ustvari';
$strCreateIndex = 'Ustvari indeks na&nbsp;%s&nbsp;stolpcih';
$strCreateIndexTopic = 'Ustvari nov indeks';
$strCreateNewDatabase = 'Ustvari novo podatkovno bazo';
$strCreateNewTable = 'Ustvari novo tabelo v podatkovni bazi %s';
$strCreatePage = 'Ustvari novo stran';
$strCreatePdfFeat = 'Ustvarjanje PDF datotek';
$strCriteria = 'Kriteriji';

$strData = 'Podatki';
$strDataDict = 'Podatkovni slovar';
$strDataOnly = 'Samo podatki';
$strDatabase = 'Podatkovna baza ';
$strDatabaseHasBeenDropped = 'Podatkovna baza %s je zavr�ena.';
$strDatabaseWildcard = 'Podatkovna baza (nadomestni znaki dovoljeni):';
$strDatabases = 'podatkovne baze';
$strDatabasesStats = 'Statistika podatkovnih baz';
$strDefault = 'Privzeto';
$strDelete = 'Izbri�i';
$strDeleteFailed = 'Brisanje ni uspelo!';
$strDeleteUserMessage = 'Izbrisali ste uporabnika %s.';
$strDeleted = 'Vrstica je izbrisana';
$strDeletedRows = 'Izbrisane vrstice:';
$strDescending = 'Padajo�e';
$strDisabled = 'Onemogo�eno';
$strDisplay = 'Prika�i';
$strDisplayFeat = 'Prika�i lastnosti';
$strDisplayOrder = 'Vrstni red prikaza:';
$strDisplayPDF = 'Prika�i PDF shemo';
$strDoAQuery = 'Izvedi "query by example" (nadomestni znak: "%")';
$strDoYouReally = 'Ali res �elite ';
$strDocu = 'Dokumentacija';
$strDrop = 'Zavr�i';
$strDropDB = 'Zavr�i podatkovno bazo %s';
$strDropTable = 'Zavr�i tabelo';
$strDumpXRows = 'Odlo�i %s vrstic, za�ni z zapisom # %s.';
$strDumpingData = 'Odlo�i podatke za tabelo';
$strDynamic = 'dinami�no';

$strEdit = 'Uredi';
$strEditPDFPages = 'Uredi PDF strani';
$strEditPrivileges = 'Uredi privilegije';
$strEffective = 'U�inkovito';
$strEmpty = 'Izprazni';
$strEmptyResultSet = 'MySQL je vrnil kot rezultat prazno mno�ico (npr. ni� vrstic).';
$strEnabled = 'Omogo�eno';
$strEnd = 'Konec';
$strEndCut = 'KONEC IZREZA';
$strEndRaw = 'END RAW';
$strEnglishPrivileges = ' Opomba: Imena MySQL privilegijev so zapisana v angle��ini ';
$strError = 'Napaka';
$strExplain = 'Razlo�i SQL stavek';
$strExport = 'Izvozi';
$strExportToXML = 'Izvozi v XML obliko';
$strExtendedInserts = 'Raz�irjene \'insert\' poizvedbe';
$strExtra = 'Dodatno';

$strField = 'Polje';
$strFieldHasBeenDropped = 'Polje %s je zavr�eno';
$strFields = 'Polja';
$strFieldsEmpty = ' �tevec polj je prazen! ';
$strFieldsEnclosedBy = 'Polja obdana z';
$strFieldsEscapedBy = 'Polja izognjena z';
$strFieldsTerminatedBy = 'Polja zaklju�ena z';
$strFixed = 'fiksno';
$strFlushTable = 'Po�isti tabelo ("FLUSH")';
$strFormEmpty = 'V obliki manjka vrednost !';
$strFormat = 'Oblika';
$strFullText = 'Polna besedila';
$strFunction = 'Funkcija';

$strGenBy = 'Ustvaril';
$strGenTime = '�as nastanka';
$strGeneralRelationFeat = 'Splo�ne lastnosti relacij';
$strGo = 'Izvedi';
$strGrants = 'Dovoljenja';
$strGzip = '"gzipano"';

$strHasBeenAltered = 'je bil spremenjen(a).';
$strHasBeenCreated = 'je bil ustvarjen(a).';
$strHaveToShow = 'Za prikaz morate izbrati morate vsaj en stolpec';
$strHome = 'Domov';
$strHomepageOfficial = 'Uradna doma�a stran phpMyAdmin';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin Download Page';
$strHost = 'Gostitelj';
$strHostEmpty = 'Ime gostitelja je prazno!';

$strIdxFulltext = 'Polno besedilo';
$strIfYouWish = '�e bi radi nalo�ili samo nekatere stolpce tabele, jih navedite v seznamu, kjer jih lo�ite z vejico.';
$strIgnore = 'Prezri';
$strImportDocSQL = 'Uvozi docSQL datoteke';
$strInUse = 'v uporabi';
$strIndex = 'Indeks';
$strIndexHasBeenDropped = 'Indeks %s je zavr�en';
$strIndexName = 'Ime indeksa&nbsp;:';
$strIndexType = 'Vrsta indeksa&nbsp;:';
$strIndexes = 'Indeksi';
$strInsecureMySQL = 'Konfiguracijska datoteka vsebuje nastavitve (uporabnik root brez gesla), ki odgovarjajo privzetemu privlegiranemu ra�unu MySQLa. MySQL stre�nik te�e s privzetimi nastavitvami, zato je izpostavljen vdorom. �imprej odpravite ti dve varnostni luknji.';
$strInsert = 'Vstavi';
$strInsertAsNewRow = 'Vstavi kot novo vrstico';
$strInsertNewRow = 'Vstavi novo vrstico';
$strInsertTextfiles = 'V tabelo vstavi podatke iz datoteke z besedilom';
$strInsertedRows = 'Vstavljene vrstice:';
$strInstructions = 'Navodila';
$strInvalidName = 'beseda "%s" je rezervirana, zato je ne morete uporabiti kot ime podatkovne baze/tabele/polja.';

$strKeepPass = 'Ne spreminjaj gesla';
$strKeyname = 'Ime klju�a';
$strKill = 'Ubij proces';

$strLanguage = 'Jezik';
$strLength = 'Dol�ina';
$strLengthSet = 'Dol�ina/Vrednosti*';
$strLimitNumRows = '�tevilo vrstic na stran';
$strLineFeed = 'Pomik v novo vrsto (Linefeed): \\n';
$strLines = 'Vrstice';
$strLinesTerminatedBy = 'Vrstice zaklju�ene z';
$strLinkNotFound = 'Povezave ni mogo�e najti';
$strLinksTo = 'Povezave z';
$strLocationTextfile = 'Lokacija datoteke z besedilom';
$strLogPassword = 'Geslo:';
$strLogUsername = 'Uporabni�ko ime:';
$strLogin = 'Prijava';
$strLogout = 'Odjava';

$strMissingBracket = 'Manjkajo� oklepaj';
$strModifications = 'Spremembe so shranjene';
$strModify = 'Spremeni';
$strModifyIndexTopic = 'Spremeni indeks';
$strMoveTable = 'Premakni tabelo v (podatkovna_baza<b>.</b>tabela):';
$strMoveTableOK = 'Tabela %s je bila premaknjena v %s.';
$strMySQLCharset = 'MySQL kodna tabela';
$strMySQLReloaded = 'MySQL ponovno nalo�en.';
$strMySQLSaid = 'MySQL je vrnil: ';
$strMySQLServerProcess = 'MySQL %pma_s1% te�e na %pma_s2% kot %pma_s3%';
$strMySQLShowProcess = 'Poka�i procese';
$strMySQLShowStatus = 'Poka�i teko�e informacije o MySQL';
$strMySQLShowVars = 'Poka�i sistemske spremenljivke MySQL';

$strName = 'Ime';
$strNext = 'Naslednji';
$strNo = 'Ne';
$strNoDatabases = 'Brez podatkovnih baz';
$strNoDescription = 'brez opisa';
$strNoDropDatabases = '"DROP DATABASE" poizvedbe so izklju�ene.';
$strNoExplain = 'Presko�i razlago SQL stavka';
$strNoFrames = 'phpMyAdmin je prijaznej�i z brskalnikom, ki podpira okvirje.';
$strNoIndex = 'Ni definiranega indeksa!';
$strNoIndexPartsDefined = 'Ni definiranega dela indeksa!';
$strNoModification = 'Brez sprememb';
$strNoPassword = 'Brez gesla';
$strNoPhp = 'Brez kode PHP';
$strNoPrivileges = 'Brez privilegijev';
$strNoQuery = 'Brez SQL poizvedbe!';
$strNoRights = 'Nimate dovolj pravic, da bi bili sedaj tukaj!';
$strNoTablesFound = 'V podatkovni bazi ni mogo�e najti tabel.';
$strNoUsersFound = 'Ni mogo�e najti uporabnika(ov).';
$strNoValidateSQL = 'Presko�i preverjanje pravilnosti SQL stavka';
$strNone = 'Brez';
$strNotNumber = 'To ni �tevilo!';
$strNotOK = 'Ni v redu';
$strNotSet = 'Tabele <b>%s</b> ni mogo�e najti ali pa ni v %s';
$strNotValidNumber = ' ni veljavna �tevilka vrstice!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s zadetek(ov) v tabeli <i>%s</i>';
$strNumSearchResultsTotal = '<b>Skupaj:</b> <i>%s</i> zadetek(ov)';

$strOK = 'V redu';
$strOftenQuotation = 'Pogosti narekovaji. OPCIJSKO pomeni, da so samo polja tipa \'char\' in \'varchar\' obdana s temi znaki.';
$strOperations = 'Operacije';
$strOptimizeTable = 'Optimiraj tabelo';
$strOptionalControls = 'Opcijsko. Narekuje na�in pisanja in branja posebnih znakov.';
$strOptionally = 'OPCIJSKO';
$strOptions = 'Mo�nosti';
$strOr = 'Ali';
$strOverhead = 'Prese�ek';

$strPHP40203 = 'Uporabljate PHP 4.2.3, ki ima resne te�ave z ve�bitnimi stavki (mbstring). Glej PHP poro�ilo o hro��u 19404. Ta verzija PHP ni priporo�ljiva za uporabo s phpMyAdmin.';
$strPHPVersion = 'Razli�ica PHP';
$strPageNumber = '�tevilka strani:';
$strPartialText = 'Delna besedila';
$strPassword = 'Geslo';
$strPasswordEmpty = 'Geslo je prazno!';
$strPasswordNotSame = 'Gesli se ne ujemata!';
$strPdfDbSchema = 'Shema podatkovne baze "%s" - Stran %s';
$strPdfInvalidPageNum = 'Nedefinirna �tevilka PDF strani!';
$strPdfInvalidTblName = 'Tabela "%s" ne obstaja!';
$strPdfNoTables = 'Ni tabel';
$strPhp = 'Ustvari PHP kodo';
$strPmaDocumentation = 'phpMyAdmin dokumentacija';
$strPmaUriError = 'Ukaz <tt>$cfg[\'PmaAbsoluteUri\']</tt> mora biti definiran v konfiguracijski datoteki!';
$strPos1 = 'Za�etek';
$strPrevious = 'Prej�nji';
$strPrimary = 'Primarni';
$strPrimaryKey = 'Primarni klju�';
$strPrimaryKeyHasBeenDropped = 'Primarni klju� je zavr�en';
$strPrimaryKeyName = 'Ime primarnega klju�a mora biti... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>mora</b> biti ime <b>samo</b> primarnega klju�a!)';
$strPrint = 'Natisni';
$strPrintView = 'Pogled postavitve tiskanja';
$strPrivileges = 'Privilegiji';
$strProperties = 'Lastnosti';
$strPutColNames = 'Postavi imena polj v prvo vrstico';

$strQBE = 'Poizvedba';
$strQBEDel = 'Bri�i';
$strQBEIns = 'Vstavi';
$strQueryOnDb = 'SQL-poizvedba na podatkovni bazi <b>%s</b>:';

$strReType = 'Ponovno vnesi';
$strRecords = 'Zapisi';
$strReferentialIntegrity = 'Preveri referen�no integriteto:';
$strRelationNotWorking = 'Dodatne funkcije za delo s povezanimi tabelami so bile izkju�ene. �e �elite izvedeti zakaj, kliknite %stukaj%s.';
$strRelationView = 'Pogled relacij';
$strReloadFailed = 'Ponovno nalaganje MySQL ni uspelo.';
$strReloadMySQL = 'Ponovno nalo�i MySQL';
$strRememberReload = 'Ne pozabite ponovno nalo�iti stre�nika.';
$strRenameTable = 'Preimenuj tabelo v';
$strRenameTableOK = 'Tabela %s je preimenovana v %s';
$strRepairTable = 'Popravi tabelo';
$strReplace = 'Zamenjaj';
$strReplaceTable = 'Podatke v tabeli zamenjaj z datoteko';
$strReset = 'Ponastavi';
$strRevoke = 'Odvzemi';
$strRevokeGrant = 'Odvzemi dovoljenje';
$strRevokeGrantMessage = 'Odvzeli ste dovoljenje (Grant) za %s';
$strRevokeMessage = 'Odvzeli ste privilegije za %s';
$strRevokePriv = 'Odvzemi privilegije';
$strRowLength = 'Dol�ina vrstice';
$strRowSize = ' Velikost vrstice ';
$strRows = 'Vrstice';
$strRowsFrom = 'vrstice naprej od zapisa #';
$strRowsModeHorizontal = 'vodoravnem';
$strRowsModeOptions = 'v %s na�inu in ponovi glavo po %s celicah';
$strRowsModeVertical = 'navpi�nem';
$strRowsStatistic = 'Statistika vrstic';
$strRunQuery = 'Izvedi poizvedbo';
$strRunSQLQuery = 'Izvedi SQL poizvedbo/poizvedbe na podatkovni bazi %s';
$strRunning = 'te�e na %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'Obstaja mo�nost, da ste v SQL raz�lenjevalniku naleteli na hro��a. Temeljito preglejte poizvedbo in preverite, �e so citati pravilni in �e se ujemajo. Mo�no je tudi, da prena�ate binarno datoteko, ki je izven podro�ja besedila citata. Poizvedbo lahko preizkusite tudi na vmesniku ukazne vrstice MySQL. �e je stre�nik MySQL izpisal napako, vam le-ta lahko pomaga pri ugotavljanju te�av. �e se bodo te�ave nadaljevale, ali �e raz�lenjevalniku ne uspe tam, kjer vmesniku ukazne vrstice uspe, potem zmanj�ajte vne�eno SQL poizvedbo na tisto poizvedbo, ki povzro�a te�ave in po�ljite poro�ilo o napaki skupaj s podatki iz spodnjega odseka IZREZA.';
$strSQLParserUserError = 'Izgleda, da je v SQL poizvedbi pri�lo do napake. �e je stre�nik MySQL izpisal napako, vam le-ta lahko pomaga pri ugotavljanju te�av.';
$strSQLQuery = 'SQL-poizvedba';
$strSQLResult = 'Rezultat SQL';
$strSQPBugInvalidIdentifer = 'Neveljavni identifikator';
$strSQPBugUnclosedQuote = 'Odprt citat';
$strSQPBugUnknownPunctation = 'Neznan niz lo�il';
$strSave = 'Shrani';
$strScaleFactorSmall = 'Faktor pove�ava je premajhen, da bi spravili shemo na eno stran';
$strSearch = 'Iskanje';
$strSearchFormTitle = 'I��i v podatkovni bazi';
$strSearchInTables = 'V tabelah:';
$strSearchNeedle = 'Iskane besede ali vrednosti (nadomestni znak: "%"):';
$strSearchOption1 = 'katerokoli besedo';
$strSearchOption2 = 'vse besede';
$strSearchOption3 = 'to�no dolo�eno frazo';
$strSearchOption4 = 'kot \'regular expression\'';
$strSearchResultsFor = 'Rezultati iskanja "<i>%s</i>" %s:';
$strSearchType = 'Najdi:';
$strSelect = 'Izberi';
$strSelectADb = 'Prosimo, izberite podatkovno bazo';
$strSelectAll = 'Izberi vse';
$strSelectFields = 'Izberite polja (vsaj eno):';
$strSelectNumRows = 'in poizvedba';
$strSelectTables = 'Izberi tabele';
$strSend = 'Shrani kot datoteko';
$strServer = 'Stre�nik %s';
$strServerChoice = 'Izbira stre�nika';
$strServerVersion = 'Razli�ica stre�nika';
$strSetEnumVal = '�e je polje vrste "enum" ali "set", navedite vrednosti v obliki: \'a\',\'b\',\'c\'...<br /> �e �elite med vrednostmi uporabiti po�evnico ("\") ali enojni narekovaj ("\'"), pred tem znakom vnesite po�evnico (n.pr. \'\\\\xyz\' ali \'a\\\'b\').';
$strShow = 'Poka�i';
$strShowAll = 'Poka�i vse';
$strShowColor = 'Poka�i barvo';
$strShowCols = 'Poka�i stolpce';
$strShowGrid = 'Poka�i mre�o';
$strShowPHPInfo = 'Poka�i podatke o PHP';
$strShowTableDimension = 'Poka�i dimenzije tabel';
$strShowTables = 'Poka�i tabele';
$strShowThisQuery = ' Ponovno poka�i poizvedbo v tem oknu ';
$strShowingRecords = 'Prikazujem vrstice';
$strSingly = '(posamezno)';
$strSize = 'Velikost';
$strSort = 'Sortiraj';
$strSpaceUsage = 'Poraba prostora';
$strSplitWordsWithSpace = 'Besede so lo�ene s presledkom (" ").';
$strStatement = 'Izjave';
$strStrucCSV = 'CSV podatki';
$strStrucData = 'Struktura in podatki';
$strStrucDrop = 'Dodaj \'drop table\' poizvedbo';
$strStrucExcelCSV = 'CSV podatki za Ms Excel';
$strStrucOnly = 'Samo struktura';
$strStructPropose = 'Predlagaj strukturo tabele';
$strStructure = 'Struktura';
$strSubmit = 'Po�lji';
$strSuccess = 'SQL-poizvedba je bila uspe�no izvedena';
$strSum = 'Vsota';

$strTable = 'Tabela';
$strTableComments = 'Komentar tabele';
$strTableEmpty = 'Ime tabele je prazno!';
$strTableHasBeenDropped = 'Tabela %s je zavr�ena';
$strTableHasBeenEmptied = 'Tabela %s je izpraznjena';
$strTableHasBeenFlushed = 'Tabela %s je osve�ena';
$strTableMaintenance = 'Vzdr�evanje tabele';
$strTableStructure = 'Struktura tabele';
$strTableType = 'Vrsta tabele';
$strTables = '%s tabel';
$strTextAreaLength = ' Zaradi njegove dol�ine<br /> polja ne bo mogo�e urejati ';
$strTheContent = 'Vsebina datoteke je vne�ena.';
$strTheContents = 'Vsebina datoteke zamenja vsebino izbrane tabele v vrsticah z identi�nim primarnim ali unikatnim klju�em.';
$strTheTerminator = 'Zaklju�ni znak polj.';
$strTotal = 'skupaj';
$strType = 'Vrsta';

$strUncheckAll = 'Odzna�i vse';
$strUnique = 'Unikaten';
$strUnselectAll = 'Prekli�i izbor vsega';
$strUpdatePrivMessage = 'Posodobili ste privilegije za %s.';
$strUpdateProfile = 'Posodobi profil:';
$strUpdateProfileMessage = 'Profil je posodobljen.';
$strUpdateQuery = 'Osve�i poizvedbo';
$strUsage = 'Uporaba';
$strUseBackquotes = 'Obdaj imena tabel in polj z enojnimi po�evnimi narekovaji';
$strUseTables = 'Uporabi tabele';
$strUser = 'Uporabnik';
$strUserEmpty = 'Uporabni�ko ime je prazno!';
$strUserName = 'Uporabni�ko ime';
$strUsers = 'Uporabniki';

$strValidateSQL = 'Preveri pravilnost SQL stavka';
$strValidatorError = 'Ne morem inicializirati SQL validatorja. Prosim preverite, �e so name��eni vsi php raz�iritve, kot je navedeno v %dokumenaciji%.';
$strValue = 'Vrednost';
$strViewDump = 'Preglej dump (shemo) tabele';
$strViewDumpDB = 'Preglej dump (shemo) podatkovne baze';

$strWebServerUploadDirectory = 'imenik za nalaganje datotek';
$strWebServerUploadDirectoryError = 'Imenik, ki ste ga dolo�ili za nalaganje, je nedosegljiv';
$strWelcome = 'Dobrodo�li v %s';
$strWithChecked = 'Z ozna�enim:';
$strWrongUser = 'Napa�no uporabni�ko ime/geslo. Dostop zavrnjen.';

$strYes = 'Da';

$strZip = '"zipano"';

// To translate
$strNumTables = 'Tables'; //to translate
$strTotalUC = 'Total'; //to translate

$strRelationalSchema = 'Relational schema';  //to translate
$strTableOfContents = 'Table of contents';  //to translate
?>
