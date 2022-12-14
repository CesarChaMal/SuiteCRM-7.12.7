<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_BASIC' => 'Podstawowy',
    'LBL_BASIC_SEARCH' => 'Szybki filtr wyszukiwania',
    'LBL_ADVANCED_SEARCH' => 'Zaawansowany filtr wyszukiwania',
    'LBL_BASIC_TYPE' => 'Typ podstawowy',
    'LBL_ADVANCED_TYPE' => 'Typ zaawansowany',
    'LBL_SYSOPTS_2' => 'Jaki rodzaj bazy danych zostanie wykorzystany do instalacji SuiteCRM?',
    'LBL_SYSOPTS_DB' => 'Wybierz Typ Bazy Danych',
    'LBL_SYSOPTS_DB_TITLE' => 'Rodzaj Bazy Danych',
    'LBL_SYSOPTS_ERRS_TITLE' => 'Przed ropocz??ciem napraw nast??puj??ce b????dy: ',
    'ERR_DB_VERSION_FAILURE' => 'Nie mo??na sprawdzi?? wersji bazy danych.',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'Wprowad?? nazw?? u??ytkownika dla administratora SuiteCRM',
    'ERR_ADMIN_PASS_BLANK' => 'Wprowad?? Has??o administratora SuiteCRM',

    'ERR_CHECKSYS' => 'Wykryto b????dy podczas testu kompatybilno??ci. W celu zapewnienia prawid??owego dzia??ania Twojej instalacji SuiteCRM, wykonaj sugerowane kroki wymienione poni??ej, a nast??pnie jeszcze raz sprawd??, klikaj??c klawisz, lub przeprowad?? instalacj?? od pocz??tku.',
    'ERR_CHECKSYS_CALL_TIME' => 'Allow Call Time Pass Reference jest w????czone (opcja powinna by?? wy????czona w php.ini)',
    'ERR_CHECKSYS_CURL' => 'Nie znaleziono: Zadania cykliczne SuiteCRM b??d?? dzia??a?? z ograniczon?? funkcjonalno??ci??.',
    'ERR_CHECKSYS_IMAP' => 'Nie znaleziono: Wiadomo??ci przychodz??ce oraz kampanie (e-mail) wymagaj?? bibliotek IMAP. Bez nich modu??y nie b??d?? dzia??a??.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => 'Ustaw w ',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M lub wi??ksze w Twoim pliku php.ini)',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'Uwaga: Zapisywanie nie powiod??o si??',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Twoja wersja PHP nie jest obs??ugiwana przez SuiteCRM. Musisz zainstalowa?? wersj??, kt??ra jest kompatybilna z aplikacj?? SuiteCRM. Zapoznaj si?? z Matryc?? Kompatybilno??ci w notatkach do wydania dla obs??ugiwanych wersji PHP. Twoja wersja to ',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'Twoja wersja IIS nie jest obs??ugiwana przez SuiteCRM. Musisz zainstalowa?? wersj??, kt??ra jest kompatybilna z aplikacj?? SuiteCRM. Zapoznaj si?? z Matryc?? Kompatybilno??ci w notatkach o wersji dla obs??ugiwanych wersji IIS. Twoja wersja to ',
    'ERR_CHECKSYS_FASTCGI' => 'Wykryto, ??e nie korzystasz z FastCGI do obs??ugi PHP. Wymagane jest by zainstalowa??/skonfigurowa?? wersj??, kt??ra jest kompatybilna z aplikacj?? SuiteCRM.  Przejrzyj dane o kompatybilnosci w pliku opisuj??cym niniejsze wydanie SuiteCRM. Zapoznaj si?? z <a href="http://www.iis.net/php/" target="_blank">http://www.iis.net/php/</a> by uzyska?? wi??cej szczeg??????w na ten temat.',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'Dla optymalnego do??wiadczenia u??ywaj??c IIS/FastCGI sapi, ustaw fastcgi.logging na 0 w twoim pliku php.ini.',
    'LBL_DB_UNAVAILABLE' => 'Baza danych niedost??pna',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Nie znaleziono wspieranej bazy danych. Sprawd??, czy masz wszystkie niezb??dne sterowniki jednej z nast??puj??cych wspieranych typ??w baz danych: MySQL, MS SQLServer, lub Oracle.  By?? mo??e potrzebujesz odkomentowa?? odpowiednie rozszerzenia w pliku php.ini, lub przekompilowa?? odpowiedni plik binarny, zale??nie od Twojej wersji PHP. Wi??cej informacji na temat wspierania baz danych przez PHP znajdziesz w instrukcji PHP.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'Funkcje po????czone z bibliotekami parsera XML, kt??re s?? wymagane przez aplikacj?? SuiteCRM, nie zosta??y odnalezione. By?? mo??e musisz odkomentowa?? rozserzenia w pliku php.ini, lub przekompilowa?? z odpowiednimi plikami binarnymi, zale??nie od Twojej wersji PHP. Sprawd?? w manualu PHP, aby zasi??gn???? wi??cej informacji.',
    'ERR_CHECKSYS_MBSTRING' => 'Nie znaleziono: SuiteCRM nie mo??e przetworzy?? znak??w wielobajtowych. Wiadomo??ci przychodz??ce b??d?? przetwarzane w znakach innych ni?? UTF-8.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'Plik config istnieje, ale nie posiada praw do zapisu. Wykonaj niezb??dne kroki, w celu zapewnienia zapisu w tym folderze. <br>Zale??nie od Twojego systemu operacyjnego, mo??e to wymaga?? zmian praw dost??pu poprzez wykonanie komendy <b>chmod 766</b>, lub klikni??cia prawym klawiszem na nazwie pliku, wej??cia w zak??adk?? z prawami dost??pu i odznaczenia opcji <b>Tylko do odczytu</b>.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'Plik nadpisuj??cy konfiguracj?? istnieje, ale nie posiada praw do zapisu. Prosz?? wykona?? niezb??dne kroki aby umo??liwi?? zapis: w zale??no??ci od systemu operacyjnego konieczna mo??e by?? zmiana praw dost??pu poprzez wykonanie komendy chmod 766 lub klikni??cie prawym klawiszem na nazwie pliku, wej??cie w zak??adk?? z prawami dost??pu i odznaczenia opcji Tylko do odczytu.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'Katalog dla p??l w??asnych istnieje, ale nie posiada praw do zapisu. Wykonaj niezb??dne kroki, w celu zapewnienia zapisu w tym folderze.  <br>Zale??nie od Twojego systemu operacyjnego, mo??e to wymaga?? zmian praw dost??pu poprzez wykonanie komendy (chmod 766), lub klikni??cia prawym klawiszem na nazwie pliku, wej??cia w zak??adk?? z prawami dost??pu i odznaczenia opcji <b>Tylko do odczytu</b>.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "Wymienione poni??ej pliki i foldery nie posiadaj?? praw do zapisu. Zale??nie od Twojego systemu operacyjnego, mo??e to wymaga?? zmian praw dost??pu poprzez wykonanie komendy (chmod 755), lub klikni??cia prawym klawiszem na nazwie pliku, lub katalogu, wej??cia w zak??adk?? z prawami dost??pu i odznaczenia opcji <b>Tylko do odczytu</b>, dla wszystkich plik??w i katalog??w umieszczonych g????biej.",
    'ERR_CHECKSYS_JSON_NOT_AVAILABLE' => "Nie znaleziono funkcji powi??zanych z Bibliotekami Parsera JSON, kt??re s?? potrzebne w aplikacji SuiteCRM. Mo??e by?? konieczne odkomentowanie rozszerzenia w pliku php.ini lub ponowna kompilacja z poprawnym plikiem binarnym, w zale??no??ci od u??ywanej wersji PHP. Aby uzyska?? wi??cej informacji, zapoznaj si?? z manualem PHP.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'Konfiguracja nadpisana',
    'ERR_CHECKSYS_SAFE_MODE' => 'Tryb Bezpiecze??stwa jest w????czony (mo??esz od????czy?? w php.ini)',
    'ERR_CHECKSYS_ZLIB' => 'Nie znaleziono: SuiteCRM przynosi korzy??ci z kompresj?? zlib',
    'ERR_CHECKSYS_ZIP' => 'Nie znaleziono rozszerzenia obs??uguj??cego ZIP: SuiteCRM potrzebuje pomocy ZIP w celu przetworzenia skompresowanych plik??w.',
    'ERR_CHECKSYS_PCRE' => 'Biblioteka PCRE nie zosta???? odnaleziona: SuiteCRM potrzebuj?? biblioteki PCRE by przetwarza?? wyra??enia regularne w standardzie Perl.',
    'ERR_CHECKSYS_PCRE_VER' => 'Wersja Biblioteki PCRE: SuiteCRM wymaga biblioteki PCRE w wersji 7.0 lub nowszej by przetwarza?? wyra??enia regularne w standardzie Perl.',
    'ERR_DB_ADMIN' => 'B????dna nazwa u??ytkownika administratora lub/i has??a (B????d: ',
    'ERR_DB_ADMIN_MSSQL' => 'Wprowadzony login lub has??o administratora bazy danych s?? niepoprawne i po????czenie z baz?? nie mo??e zosta?? nawi??zane. Wprowad?? prawid??owe dane.',
    'ERR_DB_EXISTS_NOT' => 'Okre??lona baza danych nie istnije.',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'Baza danych z takimi danymi konfiguracji ju?? istnieje. W celu rozpocz??cia instalacji z u??yciem wybranej bazy danych, uruchom ponownie instalator i wybierz: "Czy skasowa?? i utworzy?? na nowo tabele SuiteCRM?". Do aktualizacji u??yj Kreatora Aktualizacji znajduj??cego si?? w Konsoli Administracyjnej. Kliknij <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new">tutaj</a> w celu zapoznania si?? z dokumentacj??.',
    'ERR_DB_EXISTS' => 'Nazwa Bazy Danych ju?? istnieje - wprowad?? inn?? nazw??.',
    'ERR_DB_EXISTS_PROCEED' => 'Wybrana nazwa bazy danych ju?? istnieje.  Mo??esz<br>1. Klikn???? klawisz <b>Z powrotem</b> i wybra?? inn?? nazw?? dla bazy <br>2. Klikn???? <b>Dalej</> i kontynuowa??, ale wtedy wszystkie istniej??ce tabele w tej bazie zostan?? usuni??te.  <strong>To oznacza, ??e wszystkie tabele i dane zostan?? bezpowrotnie usuni??te.</strong>',
    'ERR_DB_HOSTNAME' => 'Wprowad?? nazw?? serweba bazy danych.',
    'ERR_DB_INVALID' => 'Wybrano b????dn?? baz?? danych',
    'ERR_DB_LOGIN_FAILURE_SHORT' => 'B????d po????czenia z baz?? danych: Podana nazwa hosta bazy danych, nazwa u??ytkownika i/lub has??o s?? nieprawid??owe.',
    'ERR_DB_LOGIN_FAILURE' => 'Nieprawid??owe has??o i/lub nazwa u??ytkownika bazy danych SuiteCRM.',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'Niepoprawny u??ytkownik lub/oraz has??o  bazy danych SuitCRM.',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'Niepoprawny u??ytkownik lub/oraz has??o  bazy danych SuitCRM.',
    'ERR_DB_MYSQL_VERSION' => 'Twoja wersja MySQL (%s) nie jest wspierana przez aplikacj?? SuiteCRM. Musisz zainstalowa?? wersj??, kt??ra jest kompatybilna z aplikacj??.  Sprawd?? informacj?? na temat komptatybilno??ci w dokumencie opisuj??cym bie????ce wydanie aplikacji. Opisuje on, kt??re wersje MySQL s?? wspierane.',
    'ERR_DB_NAME' => 'Nazwa bazy danych nie mo??e by?? pusta.',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "Nazwa Bazy Danych nie mo??e zawiera?? '\\', '/', lub '.'",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "Nazwa bazy danych nie mo??e zaczyna?? si?? od liczby, '#' lub '@' oraz nie mo??e zawiera?? znak??w: '\"',\"'\",'*','/','\\','?',':','<','>','&','!' lub '-'",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "Nazwa bazy danych mo??e sk??ada?? si?? tylko ze znak??w alfanumerycznych oraz symboli: '#', '_' lub '$'",
    'ERR_DB_PASSWORD' => 'Nieprawid??owe has??o dla SuiteCRM.',
    'ERR_DB_PRIV_USER' => 'Wymagany jest u??ytkownik administracyjny bazy danych.',
    'ERR_DB_USER_EXISTS' => 'Podana nazwa u??ytkownika SsuiteCRM ju?? istnieje - wprowad?? inn?? nazw?? u??ytkownika.',
    'ERR_DB_USER' => 'Nazwa U??ytkownika SuiteCRM nie mo??e by?? pusta.',
    'ERR_DBCONF_VALIDATION' => 'Przed ropocz??ciem napraw wyst??puj??ce b????dy: ',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'Has??a wprowadzone dla u??ytkownika bazy danych SuiteCRM s?? niepoprawne. Prosz?? ponownie wprowadzi?? pasuj??ce do siebie has??a.',
    'ERR_ERROR_GENERAL' => 'Napotkano nast??puj??ce b????dy:',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'Nie mo??na usun???? pliku: ',
    'ERR_LANG_MISSING_FILE' => 'Nie mo??na znale???? pliku: ',
    'ERR_LANG_NO_LANG_FILE' => 'Nie znaleziono plik??w j??zykowych w katalogu include/language: ',
    'ERR_LANG_UPLOAD_1' => 'Wyst??pi?? problem podczas wysy??ania pliku. Spr??buj ponownie.',
    'ERR_LANG_UPLOAD_2' => 'Pakiet j??zykowy musi by?? w formacie archiwum ZIP',
    'ERR_LANG_UPLOAD_3' => 'PHP nie mo??e przenie???? pliku tymczasowego do katalogu aktualizacji.',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'Podany katalog log??w nie jest poprawny.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'Podany katalog log??w nie jest katalogiem zapisywalnym.',
    'ERR_NO_DIRECT_SCRIPT' => 'Nie mo??na bezpo??rednio przetwarza?? skryptu',
    'ERR_NO_SINGLE_QUOTE' => 'Nie u??ywaj apostrofu dla ',
    'ERR_PASSWORD_MISMATCH' => 'Nieprawid??owe has??o dla administratora SuiteCRM.',
    'ERR_PERFORM_CONFIG_PHP_1' => 'Nie mo??na zapisa?? do pliku config.php.',
    'ERR_PERFORM_CONFIG_PHP_2' => 'Mo??esz kontynuowa?? instalacj?? poprzez manualne utworzenie pliku config.php oraz za pomoc?? wklejenia do pliku config.php informacji dot. konfiguracji. Zanim przejdziesz dalej <strong>musisz</strong> utworzy?? plik config.php.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'Utworzy??e?? konfig. pliku php?',
    'ERR_PERFORM_CONFIG_PHP_4' => 'Uwaga: Nie uda??o si?? zapisa?? pliku config.php. Upewnij si?? czy taki istnieje.',
    'ERR_PERFORM_HTACCESS_1' => 'Nie mo??na zapisa?? do ',
    'ERR_PERFORM_HTACCESS_2' => ' plik.',
    'ERR_PERFORM_HTACCESS_3' => 'Je??eli chcesz, aby log plik nie by?? dost??pny przez przegl??dark??, utw??rz plik an .htaccess w Twoim katalogu log:',
    'ERR_PERFORM_NO_TCPIP' => '<b>Nie wykryto po????czenia internetowego.</b> Kiedy uzyskasz po????czenie wejd?? na stron?? <a href="https://www.suitecrm.com/">https://www.suitecrm.com/</a> aby si?? zarejestrowa?? na SuiteCRM. Poznaj??c Pa??stwa plany biznesowe b??dziemy mogli dostarcza?? rozwi??zania dostosowane do potrzeb Waszego biznesu.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'Podany katalog sesii nie jest poprawny.',
    'ERR_SESSION_DIRECTORY' => 'Podany katalog sesii nie jest katalogiem zapisywalnym.',
    'ERR_SESSION_PATH' => 'Wymagana ??cie??ka do folderu, je??li chcesz okre??li?? w??asn??.',
    'ERR_SI_NO_CONFIG' => 'Nie wstawiony config_si.php w katalogu dokumentu lub nie zdefiniowany $sugar_config_si w config.php',
    'ERR_SITE_GUID' => 'Je??li chcesz okre??li?? w??asn?? potrzebne jest ID aplikacji',
    'ERROR_SPRITE_SUPPORT' => "Nie jest mo??liwe zlokalizowanie biblioteki GD. Nie b??dzie mo??liwe korzystanie z funkcji CSS Sprites.",
    'ERR_UPLOAD_MAX_FILESIZE' => 'Uwaga: Konfiguracja PHP musi zosta?? zmieniona tak aby dozwolona wielko???? wysy??anych plik??w wynosi??a co najmniej 6MB.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'Wielko???? plik??w mo??liwych do za??adowania',
    'ERR_URL_BLANK' => 'URL nie mo??e by?? pusty.',
    'ERR_UW_NO_UPDATE_RECORD' => 'Nie mog?? zlokalizowa?? wpis??w instalacyjnych z',
    'ERROR_MANIFEST_TYPE' => 'Oznaczony plik musi okre??la?? typ kopii.',
    'ERROR_PACKAGE_TYPE' => 'Oznaczony plik okre??la nierozponawalny typ kopii',
    'ERROR_VERSION_INCOMPATIBLE' => 'Pobrany plik nie jest kompatybilny z SuiteCRM Suite: ',

    'LBL_BACK' => 'Powr??t',
    'LBL_CANCEL' => 'Anuluj',
    'LBL_ACCEPT' => 'Akceptuj??',
    'LBL_CHECKSYS_CACHE' => 'Zapisywalne katalogi bufora (cache)',
    'LBL_DROP_DB_CONFIRM' => 'Podana Nazwa Bazy Danych ju?? istnieje.<br>Mo??esz:<br>1.Klikn???? na przycisk Anuluj i wybra?? inn?? nazw??, lub<br>2.Klikn???? na przycisk Akceptuj i kontynuowa??. Wszystkie istniej??ce tabele zostan?? usuni??te. <strong>To znaczy, ??e wszystkie tabele oraz uprzednio istniej??ce dane zostan?? bezpowrotnie usuni??te.</strong>',
    'LBL_CHECKSYS_COMPONENT' => 'Element',
    'LBL_CHECKSYS_CONFIG' => 'Zapisywalna Konfiguracja Pliku SuiteCRM (config.php)',
    'LBL_CHECKSYS_CURL' => 'Modu?? cURL',
    'LBL_CHECKSYS_CUSTOM' => 'Zapisywalny Katalog Klienta',
    'LBL_CHECKSYS_DATA' => 'Zapisywalne Podkatalogi Danych',
    'LBL_CHECKSYS_IMAP' => 'Modu?? IMAP',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'Modu?? MB Strings',
    'LBL_CHECKSYS_MEM_OK' => 'OK (Bez Limitu)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'OK (Nieograniczone)',
    'LBL_CHECKSYS_MEM' => 'Limit Pami??ci PHP ',
    'LBL_CHECKSYS_MODULE' => 'Zapisywalne Podkatalogi Modu????w oraz Plik??w',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'Niedost??pny',
    'LBL_CHECKSYS_OK' => 'OK',
    'LBL_CHECKSYS_PHP_INI' => '<b>Uwaga:</b> Konfiguracja pliku PHP (php.ini) znajduje si??:',
    'LBL_CHECKSYS_PHP_OK' => 'OK (ver ',
    'LBL_CHECKSYS_PHPVER' => 'Wersja PHP',
    'LBL_CHECKSYS_IISVER' => 'Wersja IIS',
    'LBL_CHECKSYS_JSON' => 'JSON Parsing',
    'LBL_CHECKSYS_RECHECK' => 'Sprawd?? Ponownie',
    'LBL_CHECKSYS_STATUS' => 'Status',
    'LBL_CHECKSYS_TITLE' => 'System Sprawdzania Potwierdzenia',
    'LBL_CHECKSYS_XML' => 'Parsowanie XML',
    'LBL_CHECKSYS_ZLIB' => 'Kompresja Modu??u ZLIB',
    'LBL_CHECKSYS_ZIP' => 'Modu?? Obs??ugi ZIP',
    'LBL_CHECKSYS_PCRE' => 'Biblioteka PCRE',
    'LBL_CHECKSYS_FIX_FILES' => 'Przed rozpocz??ciem napraw nast??puj??ce pliki lub katalogi:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'Przed rozpocz??ciem napraw nast??puj??ce katalogi oraz znajduj??ce si?? w nich pliki modu??u: ',
    'LBL_CHECKSYS_UPLOAD' => 'Zapisywalny Katalog Przekazywanych Danych',
    'LBL_CLOSE' => 'Zamknij',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => 'Utworzone',
    'LBL_CONFIRM_DB_TYPE' => 'Rodzaj Bazy Danych',
    'LBL_CONFIRM_NOT' => 'nie',
    'LBL_CONFIRM_TITLE' => 'Potwierd?? Ustawienia',
    'LBL_CONFIRM_WILL' => 'b??dzie',
    'LBL_DBCONF_DB_DROP' => 'Usu?? Tabele',
    'LBL_DBCONF_DB_NAME' => 'Nazwa Bazy Danych',
    'LBL_DBCONF_DB_PORT' => 'Port bazy danych',
    'LBL_DBCONF_DB_PASSWORD' => 'Has??o Bazy Danych',
    'LBL_DBCONF_DB_PASSWORD2' => 'Wprowad?? Ponownie Has??o Bazy Danych',
    'LBL_DBCONF_DB_USER' => 'U??ytkownik bazy danych SuiteCRM',
    'LBL_DBCONF_SUITE_DB_USER' => 'U??ytkownik bazy danych SuiteCRM',
    'LBL_DBCONF_DB_ADMIN_USER' => 'Nazwa Administratora Bazy Danych',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'Has??o Administratora Bazy Danych',
    'LBL_DBCONF_COLLATION' => 'Metoda por??wnywania napis??w',
    'LBL_DBCONF_CHARSET' => 'Zestaw znak??w',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => 'Zaawansowana konfiguracja bazy danych',
    'LBL_DBCONF_DEMO_DATA' => 'Wstawi?? Dane Demo do Bazy Danych?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'Wybierz przyk??adowe dane',
    'LBL_DBCONF_HOST_NAME' => 'Nazwa hosta / Instancja hosta',
    'LBL_DBCONF_HOST_INSTANCE' => 'Instancja hosta',
    'LBL_DBCONFIG_SECURITY' => 'Z powod??w bezpiecze??stwa, mo??esz wyznaczy?? jednego u??ytkownika uprawnionego do po????czen z baz?? danych SuiteCRM. Ten u??ytkownik musi mie?? prawa do zapisu, uaktualniania danych, oraz odczytu danych z konkrentej bazy, kt??ra zostanie utworzona dla tej instancji.  U??ytkownik ten mo??e by?? administratorem bazy okre??lonym powy??ej, mo??esz utworzy?? nowego, lub wybra?? jednego z ju?? istniej??cych.',
    'LBL_DBCONFIG_PROVIDE_DD' => 'Podaj istniej??cego u??ytkownika',
    'LBL_DBCONFIG_CREATE_DD' => 'Okre??l u??ytkownika do utworzenia',
    'LBL_DBCONFIG_SAME_DD' => 'Taki jak Administrator',
    'LBL_DBCONF_TITLE' => 'Konfiguracja Bazy Danych',
    'LBL_DBCONF_TITLE_NAME' => 'Wprowad?? nazw?? bazy danych',
    'LBL_DBCONF_TITLE_USER_INFO' => 'Podaj Informacje U??ytkownika Bazy Danych',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'Has??o SMTP:',
    'LBL_DISABLED_DESCRIPTION_2' => 'Po dokonaniu zmian kliknij na poni??szy przycisk "Start" w celu rozpocz??cia instalacji. <I>Po zako??czeniu instalacji zmie?? warto???? z \'installer_locked\' na \'true\'</I>. ',
    'LBL_DISABLED_DESCRIPTION' => 'Instalator zosta?? ju?? raz uruchomiony. Ze wzgl??d??w bezpiecze??stwa wstrzymano instalacj?? rozpocz??t?? ponownie. Je??li chcesz rozpocz???? instalacj?? przejd?? do config.php file, znajd?? (lub dodaj) zmienn?? \'installer_locked\' a nast??pnie ustaw j?? na \'false\'. Linia kodu powinna wygl??da?? nast??puj??co:',
    'LBL_DISABLED_HELP_1' => 'W celu uzyskania pomocy wejd?? na stron?? SuiteCRM',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'Forum wsparcia',
    'LBL_APP_NOT_INSTALLED' => 'SuiteCRM nie jest zainstalowany. Punkt wej??cia wymaga zainstalowanego SuiteCRM - dokonaj instalacji.',
    'LBL_DISABLED_TITLE_2' => 'Instalacja SuiteCRM zosta??a uko??czona z b????dem',
    'LBL_HELP' => 'Pomoc',
    'LBL_INSTALL' => 'Zainstaluj',
    'LBL_INSTALL_TYPE_TITLE' => 'Opcje instalacji',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'Wybierz typ instalacji',
    'LBL_INSTALL_TYPE_TYPICAL' => '<b>Typowa instalacja</b>',
    'LBL_INSTALL_TYPE_CUSTOM' => '<b>Instalacja niestandardowa</b>',
    'LBL_INSTALL_TYPE_MSG2' => 'Wymaga minimum informacji do instalacji. Zalecane dla nowych u??ytkownik??w.',
    'LBL_INSTALL_TYPE_MSG3' => 'Wprowadza dodatkowe opcje instalacji. Po instalacji u??ytkownik ma dost??p do wi??kszo??ci z tych opcji w panelu administracyjnym. Zalecane dla zaawansowanych u??ytkownik??w. ',
    'LBL_LANG_1' => 'W celu zainstalowania pakietu j??zykowego US-English kliknij na przycisk "Dalej".',
    'LBL_LANG_BUTTON_COMMIT' => 'Zainstaluj',
    'LBL_LANG_BUTTON_REMOVE' => 'Usu??',
    'LBL_LANG_BUTTON_UNINSTALL' => 'Odinstaluj',
    'LBL_LANG_BUTTON_UPLOAD' => 'Za??aduj',
    'LBL_LANG_NO_PACKS' => 'brak',
    'LBL_LANG_PACK_INSTALLED' => 'Poni??szy pakiet j??zykowy zosta?? zainstalowany: ',
    'LBL_LANG_PACK_READY' => 'Poni??szy pakiet j??zykowy mo??e zosta?? zainstalowany: ',
    'LBL_LANG_SUCCESS' => 'Pakiet Plik??w J??zykowych zosta?? dodany pomy??lnie',
    'LBL_LANG_TITLE' => 'Pakiet J??zykowy',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'Instalowanie SuiteCRM. To mo??e potrwa?? kilka minut.',
    'LBL_SILENT_INSTALL_SUCCESS' => 'SuiteCRM zosta?? pomy??lnie zainstalowany.',
    'LBL_SILENT_INSTALL_FAILED' => 'Instalacja SuiteCRM nie powiod??a si??.',
    'LBL_LANG_UPLOAD' => 'Za????duj Pakiet J??zykowy',
    'LBL_LICENSE_ACCEPTANCE' => 'Akceptacja Licencji',
    'LBL_LICENSE_CHECKING' => 'Sprawdzanie zgodno??ci systemu.',
    'LBL_LICENSE_CHKENV_HEADER' => 'Sprawdzanie ??rodowiska',
    'LBL_LICENSE_CHKDB_HEADER' => 'Weryfikacja ustawie?? bazy danych.',
    'LBL_LICENSE_CHECK_PASSED' => 'Zgodno???? systemu zosta??a potwierdzona.',
    'LBL_CREATE_CACHE' => 'Przygotowanie instalacji...',
    'LBL_LICENSE_REDIRECT' => 'Przekierowanie za',
    'LBL_LICENSE_I_ACCEPT' => 'Akceptuj??',
    'LBL_LICENSE_PRINTABLE' => ' Podgl??d wydruku ',
    'LBL_PRINT_SUMM' => 'Drukuj Podsumowanie',
    'LBL_LICENSE_TITLE_2' => 'Licencja SuiteCRM',
    'LBL_LICENSE' => 'LICENCJA',

    'LBL_LOCALE_NAME_FIRST' => 'Jan',
    'LBL_LOCALE_NAME_LAST' => 'Kowalski',
    'LBL_LOCALE_NAME_SALUTATION' => 'Dr',

    'LBL_ML_ACTION' => 'Dzia??anie',
    'LBL_ML_DESCRIPTION' => 'Opis',
    'LBL_ML_INSTALLED' => 'Data Instalacji',
    'LBL_ML_NAME' => 'Nazwa',
    'LBL_ML_PUBLISHED' => 'Data Opublikowania',
    'LBL_ML_TYPE' => 'Typ',
    'LBL_ML_UNINSTALLABLE' => 'Nie do zainstalowania',
    'LBL_ML_VERSION' => 'Wersja',
    'LBL_MSSQL' => 'Serwer SQL',
    'LBL_MSSQL2' => 'Serwer SQL (FreeTDS)',
    'LBL_MSSQL_SQLSRV' => 'Serwer SQL (Microsoft SQL Server Driver dla PHP)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (rozszerzenie mysqli)',
    'LBL_NEXT' => 'Dalej',
    'LBL_NO' => 'Nie',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'Ustawianie Has??a Admin',
    'LBL_PERFORM_CONFIG_PHP' => 'Konfigurowanie Pliku SuiteCRM',
    'LBL_PERFORM_CREATE_DB_1' => 'Tworzenie Bazy Danych ',
    'LBL_PERFORM_CREATE_DB_2' => ' <b>na</b> ',
    'LBL_PERFORM_CREATE_DB_USER' => 'Tworzenie U??ytkownika Bazy Danych oraz Has??a...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'Tworzenie Domy??lnych Danych SuiteCRM',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'Tworzenie domy??lnego wykazu zada??',
    'LBL_PERFORM_DEFAULT_USERS' => 'Trwa Tworzenie U??ytkownik??w Domy??lnych',
    'LBL_PERFORM_DEMO_DATA' => 'Zape??nianie bazy danych za pomoc?? danych demontracyjnych...',
    'LBL_PERFORM_DONE' => 'wykonano<br>',
    'LBL_PERFORM_FINISH' => 'Koniec',
    'LBL_PERFORM_OUTRO_1' => 'Ustawienia SuiteCRM ',
    'LBL_PERFORM_OUTRO_2' => ' Uko??czone',
    'LBL_PERFORM_OUTRO_3' => '????czny Czas: ',
    'LBL_PERFORM_OUTRO_4' => ' sekundy.',
    'LBL_PERFORM_OUTRO_5' => 'Zaj??ta Pami???? Operacyjna: ',
    'LBL_PERFORM_OUTRO_6' => ' Bajty',
    'LBL_PERFORM_SUCCESS' => 'Pomy??lnie!',
    'LBL_PERFORM_TABLES' => 'Tworzenie tabel aplikacji SuiteCRM, audyt tabel i metadanych relacji',
    'LBL_PERFORM_TITLE' => 'Utw??rz Setup',
    'LBL_PRINT' => 'Wydruk',
    'LBL_REG_CONF_1' => 'Prosz?? zarejestrowa?? si?? na SuiteCRM wype??niaj??c poni??szy formularz. Informacje dotycz??ce sposobu u??ytkowania przez Pa??stwa SuiteCRM pozwol?? nam dostarcza?? odpowiednie produkty dostosowane do wymaga?? Pa??stwa firmy. Je??li jeste?? zainteresowany otrzymywaniem informacji na temat SuiteCRM dopisz si?? do naszej listy mailingowej.',
    'LBL_REG_CONF_3' => 'Dzi??kujemy za rejestracje. W celu zalogowania si?? na SuiteCRM  kliknij przycisk Zako??cz. Pierwsze logowanie wymaga u??ycia nazwy "admin" wraz has??em wprowadzonym w kroku 2.',
    'LBL_REG_TITLE' => 'Rejestracja',

    'LBL_REQUIRED' => '*Pole Wymagane',

    'LBL_SITECFG_ADMIN_Name' => 'SuiteCRM Nazwa U??ytkownika Administrator',
    'LBL_SITECFG_ADMIN_PASS_2' => 'Wprowad?? Ponownie Has??o Dost??pu SuiteCRM',
    'LBL_SITECFG_ADMIN_PASS' => 'Has??o Administratora SuiteCRM',
    'LBL_SITECFG_APP_ID' => 'Aplikacja ID',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'Przekroczy??e?? auto-generowane ID aplikacji, kt??ra zabezpiecza sesje SuiteCRM. Wszystkie klastry potrzebne do instalacji powinny  posiada?? takie same ID.',
    'LBL_SITECFG_CUSTOM_ID' => 'Wprowad?? Twoje ID Aplikacji',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'Przekroczy??e?? katalog domy??lny w miejscu SuiteCRM log. Dost??p przez przegl??dark?? b??dzie zastrze??ony przez .htaccess redirect.',
    'LBL_SITECFG_CUSTOM_LOG' => 'U??yj W??asnego Katalogu Dziennika',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'Okre??l bezpieczny folder do gromadzenia informacji dotycz??cych sesji - w celu zapobiegania dost??powi os??b niepowo??anych, szczeg??lnie na wsp????dzielonych serwerach.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'U??yj W??asnego Zarz??dzania Sesjami dla SuiteCRM',
    'LBL_SITECFG_FIX_ERRORS' => 'Przed ropocz??ciem napraw wyst??puj??ce b????dy. :',
    'LBL_SITECFG_LOG_DIR' => 'Katalog Dziennika',
    'LBL_SITECFG_SESSION_PATH' => 'Przenie?? do Zarz??dzania Sesjami (musi da?? si?? opisa??)',
    'LBL_SITECFG_SITE_SECURITY' => 'Zaawansowany System Bezpiecze??stwa',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => 'W przypadku zaznaczenia tej opcji, system cyklicznie skontroluje czy dost??pna jest zaktualizowana wersja aplikacji.',
    'LBL_SITECFG_SUITE_UP' => 'Automatycznie sprawdza?? dost??pno???? aktualizacji?',
    'LBL_SITECFG_TITLE' => 'Konfiguracja Strony',
    'LBL_SITECFG_TITLE2' => 'Znajd?? swoj?? instancj?? SuiteCRM',
    'LBL_SITECFG_SECURITY_TITLE' => 'Zabezpieczenia strony',
    'LBL_SITECFG_URL' => 'SuiteCRM URL',
    'LBL_SITECFG_ANONSTATS' => 'Wys??a?? Anonimowo Obecne Statystyki?',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => 'Je??li zaznaczone, SuiteCRM wy??le anonimowe statystyki dotycz??ce Pa??stwa instalacji do SuiteCRM. Informacja ta pomo??e nam udoskonali?? i lepiej zrozumie?? spos??b wykorzystywania aplikacji.',
    'LBL_SITECFG_URL_MSG' => 'Wprowad?? adres URL, pod kt??rym b??dzie mo??na zalogowa?? si?? do instancji SuiteCRM po zako??czeniu instalacji. Adres URL b??dzie r??wnie?? u??ywany jako bazowy dla innnych adres??w na stronach aplikacji. Adres URL powinien zawiera?? nazw?? serwera stron , nazw?? maszyny, lub adres IP.',
    'LBL_SITECFG_SYS_NAME_MSG' => 'Wprowad?? nazw?? dla Twojego systemu. Nazwa b??dzie wy??wietlana w pasku tytu??u przegl??darki u??ytkownika SuiteCRM.',
    'LBL_SITECFG_PASSWORD_MSG' => 'Po zako??czeniu instalacji, b??dziesz musia?? u??y?? danych administratora do zalogowania do aplikacji.  Wprowad?? has??o dla tego u??ytkownika administratora. To has??o mo??e zosta?? zmienione po pierwszym logowaniu.',
    'LBL_SITECFG_COLLATION_MSG' => 'Wybierz spos??b sortowania dla swojego systemu. Ta opcja utworzy tabele w bazie danych z obs??ug?? konkretnego j??zyka. Je??li tw??j j??zyk nie wymaga specjalnych ustawie?? u??yj ustawie?? domy??lnych.',
    'LBL_SPRITE_SUPPORT' => 'Wsparcie dla Sprite',
    'LBL_SYSTEM_CREDS' => 'Uwierzytelnianie systemu',
    'LBL_SYSTEM_ENV' => '??rodowisko systemu',
    'LBL_SHOW_PASS' => 'Poka?? has??a',
    'LBL_HIDE_PASS' => 'Ukryj has??a',
    'LBL_HIDDEN' => '<i>(ukryty)</i>',
    'LBL_STEP1' => 'Krok 1 z 2 - Wymagania systemu - analiza przed instalacj??',
    'LBL_STEP2' => 'Krok 2 z 2 - Konfiguracja',
    'LBL_STEP' => 'Krok',
    'LBL_TITLE_WELCOME' => 'Witamy w SuiteCRM ',
    'LBL_WELCOME' => 'Witamy w SuiteCRM',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'Gotowy do instalacji?',
    'REQUIRED_SYS_COMP' => 'Wymagane komponenty systemu',
    'REQUIRED_SYS_COMP_MSG' =>
        'Zanim rozpoczniesz, upewnij si??, ??e posiadasz wspierane wersje nast??puj??cych komponent??w systemu:<br>
 <ul>
<li> Baza danych / System zarz??dzania baz?? (Przyk??ady: MariaDB, MySQL, SQL Server)</li>                      <li> Serwer WWW (Apache, IIS)</li>
</ul>
Sprawd?? w tablicy kompatybilno??ci w Uwagach do wydania, aby ustali?? kt??re komponenty systemu s?? wspierane przez wersj?? SuiteCRM, kt??r?? instalujesz.<br>',
    'REQUIRED_SYS_CHK' => 'Wst??pne Sprawdzenie Systemu',
    'REQUIRED_SYS_CHK_MSG' =>
        'Po rozpocz??ciu procesu instalacji, system dokona weryfikacji serwera na kt??rym znajduj?? si?? pliki SuiteCRM, aby upewni?? si??, ??e system jest skonfigurowany prawid??owo i ma wszystkie niezb??dne sk??adniki do pomy??lnego zako??czenia instalacji. <br><br>
System sprawdza, nast??puj??ce elementy: <br>
<ul>
<li><b>wersja PHP</b> &#8211; musi by?? zgodna z aplikacj??</li> 
<li><b>Zmienne sesji</b> &#8211; musz?? dzia??a?? poprawnie</li>
 <li><b>MB string</b> &#8211; musz?? by?? zainstalowane i w????czone w pliku php.ini</li>
 <li><b>Obs??uga bazy danych</b> &#8211; musi istnie?? dla SQLite, MySQL lub SQL Server</li>
 <li><b>Config.php</b> &#8211; musi istnie?? i musi mie?? odpowiednie uprawnienia, aby umo??liwi?? zapisywanie w nim</li>
 <li>nast??puj??ce pliki SuiteCRM musz?? by?? zapisywalne: <ul><li><b>/ custom</li> 
<li>/ cache</li> 
<li>/ modules</li>
 <li>/ upload</b></li></ul></li></ul>
 Je??li sprawdzenie nie powiedzie si??, instalacja nie b??dzie mog??a by?? kontynuowana. Pojawi si?? komunikat o b????dzie wyja??niaj??cy dlaczego system nie przeszed?? weryfikacji. Po wprowadzeniu niezb??dnych zmian, mo??na dokona?? ponownej kontroli systemu i kontynuowa?? instalacj??. <br>',


    'REQUIRED_INSTALLTYPE' => 'Typowa lub niestandardowa instalacja',
    'REQUIRED_INSTALLTYPE_MSG' =>
        'Po przeprowadzeniu testu, mo??esz wybra?? typowy lub niestandardowy tryb instalacji.<br><br><br />                      Dla obu  - <b>Typowego</b> i <b>Niestandardowego</b>, b??dziesz potrzebowa?? nast??puj??cych informacji:<br><br />                      <ul><br />                      <li> <b>Silnika bazy danych</b>, kt??ry b??dzie nap??dza??  aplikacj?? <ul><li>Kompatybilne bazy danych to: MySQL, MS SQL Server, Oracle.<br><br></li></ul></li><br />                      <li> <b>Nazwy serwera stron</b> lub maszyny (hosta) na kt??rym umieszczona jest baza danych<br />                      <ul><li>Mo??e to by?? <i>localhost</i>, je??li baza danych jest umieszczona na Twoim lokalnym komputerze, lub na tym samym serwerze, na kt??rym s?? pliki aplikacji.<br><br></li></ul></li><br />                      <li><b>Nazwy bazy danych</b>, kt??rej zamierzasz u??y?? do przechowywania danych aplikacji SuiteCRM</li><br />                        <ul><br />                          <li> Mo??esz mie?? ju?? baz?? danych, kt??rej zamierzasz u??y??. Je??li wprowadzisz nazw?? istniej??cej bazy, jej tabele zostan?? usuni??te podczas instalacji, gdy b??dzie definiowany nowy schemat dla bazy SuiteCRM.</li><br />                          <li> Je??li nie masz bazy danych, podczas instalacji nazwa, kt??r?? wprowadzisz b??dzie u??yta do stworzenia nowej bazy..<br><br></li><br />                        </ul><br />                      <li><b>Nazwy i has??a u??ytkownika - administratora serwera bazy danych</b> <ul><li>Administrator bazy powinien m??c tworzy?? tabele i u??ytkownik??w i m??c zapisywa?? do bazy danych.</li><li>By?? mo??e b??dziesz musia?? skontaktowa?? si?? z Twoim administratorem, w celu ustalenia, czy baza danych znajduje si?? na Twoim lokalnym komputerze, i/lub czy jeste?? administratorem serwera bazy danych.<br><br></ul></li></li><br />                      <li> <b>Nazwy i has??a dla u??ytkownika bazy danych SuiteCRM</b><br />                      </li><br />                        <ul><br />                          <li> U??ytkownik mo??e by?? jednocze??nie administratorem serwera bazy danych, lub mo??esz okre??li?? nazw?? innego istniej??cego u??ytkownika. </li><br />                          <li> Je??li chcesz, mo??esz te?? utworzy?? nowego u??ytkownika bazy danych. W tym celu b??dziesz musia?? poda?? jego nazw??, oraz has??o. Ten u??ytkownik zostanie utworzony podczas instalacji. </li><br />                        </ul></ul><p><br /><br />                      Dodatkowo, dla trybu <b>Niestandardowego</b> musisz posiada?? nast??puj??ce informacje:<br><br />                      <ul><br />                      <li> <b>Adres URL</b>, pod kt??rym b??dzie mo??na zalogowa?? si?? do aplikacji, po jej zainstalowaniu. Ten adres URL powinien zawiera?? nazw?? serwera stron, lub nazw?? maszyny, lub adres IP.<br><br></li><br />                                  <li> [Opcjonalnie] <b>??cie??k?? do katalogu sesji</b> je??li chcesz, mo??esz u??y?? w??asnego katalogu sesji dla aplikacji SuiteCRM, w celu zapobiegni??cia mieszania si?? danych z innych instancji, gdy wiele aplikacji jest instalowanych na wsp????dzielonych serwerach.<br><br></li><br />                                  <li> [Opcjonalnie] <b>??cie??k?? w??asnego katalogu dziennika</b>. Je??li chcesz mo??esz nadpisa?? domy??lny katalog dla dziennika aplikacji.<br><br></li><br />                                  <li> [Opcjonalnie] <b>ID Aplikacji</b>. Je??li chcesz, mo??esz nadpisa?? automatycznie wygenerowane ID, aby mie?? pewno????, ??e sesje z jednej instancji SuiteCRM nie zostan?? u??yte w innej.<br><br></li><br />                                  <li><b>Zestaw znak??w</b> najcz????ciej u??ywany w Twoich ustawieniach lokalnych.<br><br></li></ul><br />                                  W celu uzyskania bardziej szczeg????owych informacji, si??gnij do Instrukcji instalacji.',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Przeczytaj poni??sze wa??ne informacje, zanim rozpoczniesz instalacj??. Informacje te pomog?? Ci okre??li??, czy jeste?? obecnie przygotowany do zainstalowania aplikacji.',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => 'Wybierz J??zyk',
    'LBL_WELCOME_SETUP_WIZARD' => 'Kreator Konfiguracji',
    'LBL_WIZARD_TITLE' => 'Kreator Konfiguracji SuiteCRM: Krok',
    'LBL_YES' => 'Tak',

    'LBL_PATCHES_TITLE' => 'Zainstaluj Ostatnie ??cie??ki',
    'LBL_MODULE_TITLE' => 'Pobierz & Zainstaluj Pakiety J??zykowe',
    'LBL_PATCH_1' => 'Je??li chcesz przej???? do nast??pnego kroku kliknij Dalej.',
    'LBL_PATCH_TITLE' => '??cie??ka Systemu',
    'LBL_PATCH_READY' => 'Poni??sze ??cie??ki s?? gotowe do instalacji',
    'LBL_SESSION_ERR_DESCRIPTION' => "SuiteCRM jest oparty na sesjach PHP umo??liwiaj??cych zapisywanie wa??nych informacji podczas po????czenia z tym serwerem. Twoja instalacja PHP nie ma poprawnie skonfigurowanych informacji sesji.Powszechny b????d: 'session.save_path' nie nale??y do obowi??zuj??cego katalogu. Prosz?? poprawi?? <a target=\"_new\" href=\"http://us2.php.net/manual/en/ref.session.php\">konfiguracj?? PHP</a> w poni??szym pliku php.ini",
    'LBL_SESSION_ERR_TITLE' => 'B????d Konfiguracyjny Sesji PHP',
    'LBL_SYSTEM_NAME' => 'Nazwa Systemu',
    'LBL_COLLATION' => 'Ustawienia Por??wna??',
    'LBL_REQUIRED_SYSTEM_NAME' => 'Pole Nazwa Systemu nie mo??e by?? puste',
    'LBL_PATCH_UPLOAD' => 'Za??aduj ??cie??k??',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Wymagana wersja PHP 5 lub nowsza.',
    'LBL_MINIMUM_PHP_VERSION' => 'Minimalnie wymagana wersja PHP 5.1.0. Zalecana wersja PHP 5.2.x.',
    'LBL_YOUR_PHP_VERSION' => '(Twoja aktualna wersja php to',
    'LBL_RECOMMENDED_PHP_VERSION' => 'Rekomendowana wersja php to 5.2.x)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Funkcja wstecznej kompatybilno??ci PHP jest w????czona. Ustaw zend.ze1_compatibility_mode na Off aby przej???? dalej',
    'LBL_STREAM' => 'PHP pozwala na korzystanie ze strumieni',

    'advanced_password_new_account_email' => array(
        'subject' => 'Informacje o nowym koncie',
        'type' => 'system',
        'description' => 'Ten szablon jest u??ywany, gdy Administrator systemu wysy??a u??ytkownikowi nowe has??o.',
        'body' => '<div><table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width="550" align=\\"\\&quot;\\&quot;center\\&quot;\\&quot;\\"><tbody><tr><td colspan=\\"2\\"><p>Oto Twoja nazwa u??ytkownika i tymczasowe has??o:</p><p>Nazwa u??ytkownika : $contact_user_user_name </p><p>Has??o : $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>Po zalogowaniu z u??yciem powy??szego has??a nale??y zmieni?? has??o na w??asne. </p>   </td>         </tr><tr><td colspan=\\"2\\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Oto Twoja nazwa u??ytkownika i tymczasowe has??o:
Nazwa u??ytkownika : $contact_user_user_name
Has??o : $contact_user_user_hash 

$config_site_url

Po zalogowaniu z u??yciem powy??szego has??a nale??y zmieni?? has??o na w??asne.',
        'name' => 'E-mail z wygenerowanym przez system has??em',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Zresetuj has??o swojego konta',
        'type' => 'system',
        'description' => "Ten szablon jest u??ywany podczas wysy??ki linka s??u????cego do resetowania has??a u??ytkownika.",
        'body' => '<div><table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width="550" align=\\"\\&quot;\\&quot;center\\&quot;\\&quot;\\"><tbody><tr><td colspan=\\"2\\"><p>Ostatnio poprosi??e??/a?? w $contact_user_pwd_last_changed o zresetowanie has??a u??ytkownika. </p><p>Kliknij w poni??szy link aby zresetowa?? has??o:</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\\"2\\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Ostatnio poprosi??e??/a?? w $contact_user_pwd_last_changed o zresetowanie has??a u??ytkownika.

Kliknij w poni??szy link aby zresetowa?? has??o

$contact_user_link_guid',
        'name' => 'E-mail w sprawie zapomnianego has??a',
    ),


    'two_factor_auth_email' => array(
        'subject' => 'Kod uwierzytelniania dwusk??adnikowego',
        'type' => 'system',
        'description' => "Ten szablon jest u??ywany do wysy??ki kodu uwierzytelniania dwusk??adnikowego.",
        'body' => '<div><table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width="550" align=\\"\\&quot;\\&quot;center\\&quot;\\&quot;\\"><tbody><tr><td colspan=\\"2\\"><p>Kod uwierzytelniania dwusk??adnikowego to <b>$code</b>.</p>  </td>         </tr><tr><td colspan=\\"2\\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            'Kod uwierzytelniania dwusk??adnikowego to $code.',
        'name' => 'Email do dwusk??adnikowego uwierzytelniania',
    ),

    // SMTP settings

    'LBL_FROM_NAME' => 'Nazwa "Od":',
    'LBL_FROM_ADDR' => 'Adres "Od":',

    'LBL_WIZARD_SMTP_DESC' => 'Podaj konto e-mail, kt??re b??dzie u??ywane do wysy??ania e-maili, takich jak powiadomienia do zada?? i nowe has??a u??ytkownika. U??ytkownicy b??d?? otrzymywa?? e-maile od aplikacji SuiteCRM, jako wys??ane z okre??lonego konta e-mail.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Wybierz dostawc?? poczty e-mail:',

    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Inny',
    'LBL_MAIL_SMTP_SETTINGS' => 'Specyfikacje serwera SMTP',
    'LBL_MAIL_SMTPSERVER' => 'Serwer SMTP:',
    'LBL_MAIL_SMTPPORT' => 'Port SMTP:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'U??y?? uwierzytelnienia SMTP?',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'W????czy?? protok???? SSL lub TLS dla SMTP?',
    'LBL_GMAIL_SMTPUSER' => 'Adres e-mail na Gmailu:',
    'LBL_GMAIL_SMTPPASS' => 'Has??o Gmail:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Pozw??l u??ytkownikom korzysta?? z tego konta dla e-maili wychodz??cych:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Po wybraniu tej opcji, u??ytkownicy b??d?? mogli wysy??a?? e-maile przy u??yciu tego samego konta poczty wychodz??cej u??ywanego do wysy??ania powiadomie?? systemu i alert??w. Je??li opcja nie jest wybrana, u??ytkownicy nadal mog?? korzysta?? z serwera poczty wychodz??cej po podaniu swoich danych konta.',

    'LBL_YAHOOMAIL_SMTPPASS' => 'Has??o Yahoo! Mail:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID Yahoo! Mail:',

    'LBL_EXCHANGE_SMTPPASS' => 'Zamie?? has??o:',
    'LBL_EXCHANGE_SMTPUSER' => 'Zamie?? nazw?? u??ytkownika:',
    'LBL_EXCHANGE_SMTPPORT' => 'Zamie?? port serwera:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Zamie?? serwer:',


    'LBL_MAIL_SMTPUSER' => 'Nazwa u??ytkownika SMTP:',
    'LBL_MAIL_SMTPPASS' => 'Has??o SMTP:',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'Brandowanie',
    'LBL_WIZARD_SYSTEM_DESC' => 'Podaj nazw?? twojej organizacji i logo w celu dostosowania twojej wersji SuiteCRM.',
    'SYSTEM_NAME_WIZARD' => 'Nazwa:',
    'SYSTEM_NAME_HELP' => 'Jest to nazwa wy??wietlana na pasku tytu??owym twojej przegl??darki.',
    'NEW_LOGO' => 'Za??aduj nowe logo',
    'NEW_LOGO_HELP' => 'Pliki obraz??w mog?? by?? przesy??ane w formacie .png lub .jpg o maksymalnej wysoko??ci 170px i szeroko??ci 450px. Ka??dy obraz, kt??ry b??dzie wi??kszy, zostanie przeskalowany do tych wymiar??w po przes??aniu na serwer.',
    'COMPANY_LOGO_UPLOAD_BTN' => 'Za??aduj',
    'CURRENT_LOGO' => 'Bie????ce logo',
    'CURRENT_LOGO_HELP' => 'To logo jest wy??wietlane na ??rodku ekranu logowania aplikacji SuiteCRM.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'Wyb??r scenariusza',
    'LBL_WIZARD_SCENARIO_DESC' => 'Ma to umo??liwi?? dostosowanie wy??wietlanych modu????w, w zale??no??ci od wymaga??.  Ka??dy z modu????w mo??e by?? w????czona po instalacji za pomoc?? Panelu administracyjnego.',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'Aktualnie w pliku konfiguracyjnym nie ma skonfigurowanych ??adnych scenariuszy (config.php)',


    // System Local Settings


    'LBL_LOCALE_TITLE' => 'Ustawienia regionalne systemu',
    'LBL_WIZARD_LOCALE_DESC' => 'Okre??l, jak chcesz aby dane w aplikacji SuiteCRM by??y wy??wietlane, na podstawie twojego po??o??enia geograficznego. Ustawienia podane tutaj b??d?? ustawieniami domy??lnymi. U??ytkownicy b??d?? mogli ustawi?? swoje w??asne preferencje.',
    'LBL_DATE_FORMAT' => 'Format daty:',
    'LBL_TIME_FORMAT' => 'Format czasu:',
    'LBL_TIMEZONE' => 'Strefa czsasowa:',
    'LBL_LANGUAGE' => 'J??zyk:',
    'LBL_CURRENCY' => 'Waluta',
    'LBL_CURRENCY_SYMBOL' => 'Symbol Waluty:',
    'LBL_CURRENCY_ISO4217' => 'Symbol Waluty ISO 4217:',
    'LBL_NUMBER_GROUPING_SEP' => 'Separator tysi??cy',
    'LBL_DECIMAL_SEP' => 'Symbol dziesi??tny',
    'LBL_NAME_FORMAT' => 'Format Nazwy:',
    'UPLOAD_LOGO' => 'Prosimy czeka??, wgrywamy logotyp...',
    'ERR_UPLOAD_FILETYPE' => 'Ten typ pliku nie jest dozwolony. U??yj plik??w jpeg lub png.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'Wyst??pi?? nieznany b????d podczas wgrywania pliku.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => '??adowane pliki przekraczaj?? dopuszczaln?? wielko????, okre??lon?? w dyrektywie upload_max_filesize w pliku php.ini.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => '??adowane pliki przekraczaj?? dopuszczaln?? wielko????, okre??lon?? w dyrektywie MAX_FILE_SIZE, okre??lon?? w formularzu HTML.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'Pliki zosta??y za??adowane cz????ciowo.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'Zadne pliki nie zosta??y za??adowane.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'Brak foldera tymczasowego.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'Nie mo??na zapisa?? pliku na dysku.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'PHP przesta??o wgrywa?? plik. PHP nie udost??pnia danch, kt??re pozwalaja na ustalenie powodu dlaczego wgrywanie zosta??o zatrzymane.',

    'LBL_INSTALL_PROCESS' => 'Instalowanie...',

    'LBL_EMAIL_ADDRESS' => 'Adres e-mail:',
    'ERR_ADMIN_EMAIL' => 'Adres e-mail administratora jest niepoprawny.',
    'ERR_SITE_URL' => 'Wymagany jest adres URL strony.',

    'STAT_CONFIGURATION' => 'Konfigurowanie zale??no??ci...',
    'STAT_CREATE_DB' => 'Tworzenie bazy danych...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'Tworzenie domy??lnuch ustawie??...',
    'STAT_INSTALL_FINISH' => 'Instalacja zako??czona...',
    'STAT_INSTALL_FINISH_LOGIN' => 'Proces instalacji zosta?? zako??czony, <a href="%s">Zaloguj si??...</a>',
    'LBL_LICENCE_TOOLTIP' => 'Prosz?? zaakceptuj najpierw licencj??.',

    'LBL_MORE_OPTIONS_TITLE' => 'Wi??cej opcji',
    'LBL_START' => '',
    'LBL_DB_CONN_ERR' => 'B????d bazy danych',
    'LBL_OLD_PHP' => 'Wykryto star?? wersj?? PHP!',
    'LBL_OLD_PHP_MSG' => 'Zalecana wersja PHP do zainstalowania SuiteCRM jest %s < br /> chocia?? minimalna wersja PHP wymagane jest %s, nie jest zalecane ze wzgl??du na du???? liczb?? sta??ych b????d??w, w tym poprawki zabezpiecze??, wydany w bardziej nowoczesne wersje. < br /> u??ywasz PHP w wersji %s, kt??ry jest EOL: <a href="http://php.net/eol.php"> http://php.net/eol.php</a>. < br /> Uaktualnij swoj?? wersj?? PHP. Instrukcje na <a href="http://php.net/migration70"> http://php.net/migration70</a>. ',
    'LBL_OLD_PHP_OK' => 'Jestem ??wiadomy ryzyka i chc?? kontynuowa??.',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'Przydzielony do',
    'LBL_DBCONFIG_MSG3_LABEL' => 'Nazwa Bazy Danych',
    'LBL_DBCONFIG_MSG3' => 'Nazwa bazy danych, kt??ra b??dzie zawiera??a dane SuiteCRM:',
    'LBL_DBCONFIG_MSG2_LABEL' => 'Nazwa hosta / Instancja hosta',
    'LBL_DBCONFIG_MSG2' => 'Nazwa serwera sieci web lub maszyny (hosta), na kt??rych znajduje si?? baza danych (na przyk??ad www.mydomain.com). Je??li jest zainstalowana lokalnie, ze wzgl??du na wydajno????, lepiej u??ywa?? \'localhost\' ni?? \'127.0.0.1\'.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'Has??o oraz nazwa u??ytkownika administratora bazy danych, kt??ry jest uprawniony do tworzenia tabel i u??ytkownik??w s?? konieczne do poprawnej konfiguracji bazy danych SuiteCRM.',
    'LBL_SYS_CHECK_WARNING' => 'Ignoruj ostrze??enia podczas sprawdzania systemu',
    'LBL_PROCEED' => 'DALEJ',
    'LBL_CONFIG' => 'KONFIGURACJA',
    'LBL_VALIDATION_ERRORS' => 'Istniej?? b????dy walidacji, nie mo??na wykona?? akcji.'
);
