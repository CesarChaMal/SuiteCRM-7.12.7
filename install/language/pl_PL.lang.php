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
    'LBL_SYSOPTS_ERRS_TITLE' => 'Przed ropoczęciem napraw następujące błędy: ',
    'ERR_DB_VERSION_FAILURE' => 'Nie można sprawdzić wersji bazy danych.',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'Wprowadź nazwę użytkownika dla administratora SuiteCRM',
    'ERR_ADMIN_PASS_BLANK' => 'Wprowadź Hasło administratora SuiteCRM',

    'ERR_CHECKSYS' => 'Wykryto błędy podczas testu kompatybilności. W celu zapewnienia prawidłowego działania Twojej instalacji SuiteCRM, wykonaj sugerowane kroki wymienione poniżej, a następnie jeszcze raz sprawdź, klikając klawisz, lub przeprowadź instalację od początku.',
    'ERR_CHECKSYS_CALL_TIME' => 'Allow Call Time Pass Reference jest włączone (opcja powinna był wyłączona w php.ini)',
    'ERR_CHECKSYS_CURL' => 'Nie znaleziono: Zadania cykliczne SuiteCRM będą działać z ograniczoną funkcjonalnością.',
    'ERR_CHECKSYS_IMAP' => 'Nie znaleziono: Wiadomości przychodzące oraz kampanie (e-mail) wymagają bibliotek IMAP. Bez nich moduły nie będą działać.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => 'Ustaw w ',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M lub większe w Twoim pliku php.ini)',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'Uwaga: Zapisywanie nie powiodło się',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Twoja wersja PHP nie jest obsługiwana przez SuiteCRM. Musisz zainstalować wersję, która jest kompatybilna z aplikacją SuiteCRM. Zapoznaj się z Matrycą Kompatybilności w notatkach do wydania dla obsługiwanych wersji PHP. Twoja wersja to ',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'Twoja wersja IIS nie jest obsługiwana przez SuiteCRM. Musisz zainstalować wersję, która jest kompatybilna z aplikacją SuiteCRM. Zapoznaj się z Matrycą Kompatybilności w notatkach o wersji dla obsługiwanych wersji IIS. Twoja wersja to ',
    'ERR_CHECKSYS_FASTCGI' => 'Wykryto, że nie korzystasz z FastCGI do obsługi PHP. Wymagane jest by zainstalować/skonfigurować wersję, która jest kompatybilna z aplikacją SuiteCRM.  Przejrzyj dane o kompatybilnosci w pliku opisującym niniejsze wydanie SuiteCRM. Zapoznaj się z <a href="http://www.iis.net/php/" target="_blank">http://www.iis.net/php/</a> by uzyskać więcej szczegółów na ten temat.',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'Dla optymalnego doświadczenia używając IIS/FastCGI sapi, ustaw fastcgi.logging na 0 w twoim pliku php.ini.',
    'LBL_DB_UNAVAILABLE' => 'Baza danych niedostępna',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Nie znaleziono wspieranej bazy danych. Sprawdź, czy masz wszystkie niezbędne sterowniki jednej z następujących wspieranych typów baz danych: MySQL, MS SQLServer, lub Oracle.  Być może potrzebujesz odkomentować odpowiednie rozszerzenia w pliku php.ini, lub przekompilować odpowiedni plik binarny, zależnie od Twojej wersji PHP. Więcej informacji na temat wspierania baz danych przez PHP znajdziesz w instrukcji PHP.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'Funkcje połączone z bibliotekami parsera XML, które są wymagane przez aplikację SuiteCRM, nie zostały odnalezione. Być może musisz odkomentować rozserzenia w pliku php.ini, lub przekompilować z odpowiednimi plikami binarnymi, zależnie od Twojej wersji PHP. Sprawdź w manualu PHP, aby zasięgnąć więcej informacji.',
    'ERR_CHECKSYS_MBSTRING' => 'Nie znaleziono: SuiteCRM nie może przetworzyć znaków wielobajtowych. Wiadomości przychodzące będą przetwarzane w znakach innych niż UTF-8.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'Plik config istnieje, ale nie posiada praw do zapisu. Wykonaj niezbędne kroki, w celu zapewnienia zapisu w tym folderze. <br>Zależnie od Twojego systemu operacyjnego, może to wymagać zmian praw dostępu poprzez wykonanie komendy <b>chmod 766</b>, lub kliknięcia prawym klawiszem na nazwie pliku, wejścia w zakładkę z prawami dostępu i odznaczenia opcji <b>Tylko do odczytu</b>.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'Plik nadpisujący konfigurację istnieje, ale nie posiada praw do zapisu. Proszę wykonać niezbędne kroki aby umożliwić zapis: w zależności od systemu operacyjnego konieczna może być zmiana praw dostępu poprzez wykonanie komendy chmod 766 lub kliknięcie prawym klawiszem na nazwie pliku, wejście w zakładkę z prawami dostępu i odznaczenia opcji Tylko do odczytu.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'Katalog dla pól własnych istnieje, ale nie posiada praw do zapisu. Wykonaj niezbędne kroki, w celu zapewnienia zapisu w tym folderze.  <br>Zależnie od Twojego systemu operacyjnego, może to wymagać zmian praw dostępu poprzez wykonanie komendy (chmod 766), lub kliknięcia prawym klawiszem na nazwie pliku, wejścia w zakładkę z prawami dostępu i odznaczenia opcji <b>Tylko do odczytu</b>.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "Wymienione poniżej pliki i foldery nie posiadają praw do zapisu. Zależnie od Twojego systemu operacyjnego, może to wymagać zmian praw dostępu poprzez wykonanie komendy (chmod 755), lub kliknięcia prawym klawiszem na nazwie pliku, lub katalogu, wejścia w zakładkę z prawami dostępu i odznaczenia opcji <b>Tylko do odczytu</b>, dla wszystkich plików i katalogów umieszczonych głębiej.",
    'ERR_CHECKSYS_JSON_NOT_AVAILABLE' => "Nie znaleziono funkcji powiązanych z Bibliotekami Parsera JSON, które są potrzebne w aplikacji SuiteCRM. Może być konieczne odkomentowanie rozszerzenia w pliku php.ini lub ponowna kompilacja z poprawnym plikiem binarnym, w zależności od używanej wersji PHP. Aby uzyskać więcej informacji, zapoznaj się z manualem PHP.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'Konfiguracja nadpisana',
    'ERR_CHECKSYS_SAFE_MODE' => 'Tryb Bezpieczeństwa jest włączony (możesz odłączyć w php.ini)',
    'ERR_CHECKSYS_ZLIB' => 'Nie znaleziono: SuiteCRM przynosi korzyści z kompresją zlib',
    'ERR_CHECKSYS_ZIP' => 'Nie znaleziono rozszerzenia obsługującego ZIP: SuiteCRM potrzebuje pomocy ZIP w celu przetworzenia skompresowanych plików.',
    'ERR_CHECKSYS_PCRE' => 'Biblioteka PCRE nie zostałą odnaleziona: SuiteCRM potrzebuję biblioteki PCRE by przetwarzać wyrażenia regularne w standardzie Perl.',
    'ERR_CHECKSYS_PCRE_VER' => 'Wersja Biblioteki PCRE: SuiteCRM wymaga biblioteki PCRE w wersji 7.0 lub nowszej by przetwarzać wyrażenia regularne w standardzie Perl.',
    'ERR_DB_ADMIN' => 'Błędna nazwa użytkownika administratora lub/i hasła (Błąd: ',
    'ERR_DB_ADMIN_MSSQL' => 'Wprowadzony login lub hasło administratora bazy danych są niepoprawne i połączenie z bazą nie może zostać nawiązane. Wprowadź prawidłowe dane.',
    'ERR_DB_EXISTS_NOT' => 'Określona baza danych nie istnije.',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'Baza danych z takimi danymi konfiguracji już istnieje. W celu rozpoczęcia instalacji z użyciem wybranej bazy danych, uruchom ponownie instalator i wybierz: "Czy skasować i utworzyć na nowo tabele SuiteCRM?". Do aktualizacji użyj Kreatora Aktualizacji znajdującego się w Konsoli Administracyjnej. Kliknij <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new">tutaj</a> w celu zapoznania się z dokumentacją.',
    'ERR_DB_EXISTS' => 'Nazwa Bazy Danych już istnieje - wprowadź inną nazwę.',
    'ERR_DB_EXISTS_PROCEED' => 'Wybrana nazwa bazy danych już istnieje.  Możesz<br>1. Kliknąć klawisz <b>Z powrotem</b> i wybrać inną nazwę dla bazy <br>2. Kliknąć <b>Dalej</> i kontynuować, ale wtedy wszystkie istniejące tabele w tej bazie zostaną usunięte.  <strong>To oznacza, że wszystkie tabele i dane zostaną bezpowrotnie usunięte.</strong>',
    'ERR_DB_HOSTNAME' => 'Wprowadź nazwę serweba bazy danych.',
    'ERR_DB_INVALID' => 'Wybrano błędną bazę danych',
    'ERR_DB_LOGIN_FAILURE_SHORT' => 'Błąd połączenia z bazą danych: Podana nazwa hosta bazy danych, nazwa użytkownika i/lub hasło są nieprawidłowe.',
    'ERR_DB_LOGIN_FAILURE' => 'Nieprawidłowe hasło i/lub nazwa użytkownika bazy danych SuiteCRM.',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'Niepoprawny użytkownik lub/oraz hasło  bazy danych SuitCRM.',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'Niepoprawny użytkownik lub/oraz hasło  bazy danych SuitCRM.',
    'ERR_DB_MYSQL_VERSION' => 'Twoja wersja MySQL (%s) nie jest wspierana przez aplikację SuiteCRM. Musisz zainstalować wersję, która jest kompatybilna z aplikacją.  Sprawdź informację na temat komptatybilności w dokumencie opisującym bieżące wydanie aplikacji. Opisuje on, które wersje MySQL są wspierane.',
    'ERR_DB_NAME' => 'Nazwa bazy danych nie może być pusta.',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "Nazwa Bazy Danych nie może zawierać '\\', '/', lub '.'",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "Nazwa bazy danych nie może zaczynać się od liczby, '#' lub '@' oraz nie może zawierać znaków: '\"',\"'\",'*','/','\\','?',':','<','>','&','!' lub '-'",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "Nazwa bazy danych może składać się tylko ze znaków alfanumerycznych oraz symboli: '#', '_' lub '$'",
    'ERR_DB_PASSWORD' => 'Nieprawidłowe hasło dla SuiteCRM.',
    'ERR_DB_PRIV_USER' => 'Wymagany jest użytkownik administracyjny bazy danych.',
    'ERR_DB_USER_EXISTS' => 'Podana nazwa użytkownika SsuiteCRM już istnieje - wprowadź inną nazwę użytkownika.',
    'ERR_DB_USER' => 'Nazwa Użytkownika SuiteCRM nie może być pusta.',
    'ERR_DBCONF_VALIDATION' => 'Przed ropoczęciem napraw występujące błędy: ',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'Hasła wprowadzone dla użytkownika bazy danych SuiteCRM są niepoprawne. Proszę ponownie wprowadzić pasujące do siebie hasła.',
    'ERR_ERROR_GENERAL' => 'Napotkano następujące błędy:',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'Nie można usunąć pliku: ',
    'ERR_LANG_MISSING_FILE' => 'Nie można znaleźć pliku: ',
    'ERR_LANG_NO_LANG_FILE' => 'Nie znaleziono plików językowych w katalogu include/language: ',
    'ERR_LANG_UPLOAD_1' => 'Wystąpił problem podczas wysyłania pliku. Spróbuj ponownie.',
    'ERR_LANG_UPLOAD_2' => 'Pakiet językowy musi być w formacie archiwum ZIP',
    'ERR_LANG_UPLOAD_3' => 'PHP nie może przenieść pliku tymczasowego do katalogu aktualizacji.',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'Podany katalog logów nie jest poprawny.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'Podany katalog logów nie jest katalogiem zapisywalnym.',
    'ERR_NO_DIRECT_SCRIPT' => 'Nie można bezpośrednio przetwarzać skryptu',
    'ERR_NO_SINGLE_QUOTE' => 'Nie używaj apostrofu dla ',
    'ERR_PASSWORD_MISMATCH' => 'Nieprawidłowe hasło dla administratora SuiteCRM.',
    'ERR_PERFORM_CONFIG_PHP_1' => 'Nie można zapisać do pliku config.php.',
    'ERR_PERFORM_CONFIG_PHP_2' => 'Możesz kontynuować instalację poprzez manualne utworzenie pliku config.php oraz za pomocą wklejenia do pliku config.php informacji dot. konfiguracji. Zanim przejdziesz dalej <strong>musisz</strong> utworzyć plik config.php.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'Utworzyłeś konfig. pliku php?',
    'ERR_PERFORM_CONFIG_PHP_4' => 'Uwaga: Nie udało się zapisać pliku config.php. Upewnij się czy taki istnieje.',
    'ERR_PERFORM_HTACCESS_1' => 'Nie można zapisać do ',
    'ERR_PERFORM_HTACCESS_2' => ' plik.',
    'ERR_PERFORM_HTACCESS_3' => 'Jeżeli chcesz, aby log plik nie był dostępny przez przeglądarkę, utwórz plik an .htaccess w Twoim katalogu log:',
    'ERR_PERFORM_NO_TCPIP' => '<b>Nie wykryto połączenia internetowego.</b> Kiedy uzyskasz połączenie wejdź na stronę <a href="https://www.suitecrm.com/">https://www.suitecrm.com/</a> aby się zarejestrować na SuiteCRM. Poznając Państwa plany biznesowe będziemy mogli dostarczać rozwiązania dostosowane do potrzeb Waszego biznesu.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'Podany katalog sesii nie jest poprawny.',
    'ERR_SESSION_DIRECTORY' => 'Podany katalog sesii nie jest katalogiem zapisywalnym.',
    'ERR_SESSION_PATH' => 'Wymagana ścieżka do folderu, jeśli chcesz określić własną.',
    'ERR_SI_NO_CONFIG' => 'Nie wstawiony config_si.php w katalogu dokumentu lub nie zdefiniowany $sugar_config_si w config.php',
    'ERR_SITE_GUID' => 'Jeśli chcesz określić własną potrzebne jest ID aplikacji',
    'ERROR_SPRITE_SUPPORT' => "Nie jest możliwe zlokalizowanie biblioteki GD. Nie będzie możliwe korzystanie z funkcji CSS Sprites.",
    'ERR_UPLOAD_MAX_FILESIZE' => 'Uwaga: Konfiguracja PHP musi zostać zmieniona tak aby dozwolona wielkość wysyłanych plików wynosiła co najmniej 6MB.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'Wielkość plików możliwych do załadowania',
    'ERR_URL_BLANK' => 'URL nie może być pusty.',
    'ERR_UW_NO_UPDATE_RECORD' => 'Nie mogę zlokalizować wpisów instalacyjnych z',
    'ERROR_MANIFEST_TYPE' => 'Oznaczony plik musi określać typ kopii.',
    'ERROR_PACKAGE_TYPE' => 'Oznaczony plik określa nierozponawalny typ kopii',
    'ERROR_VERSION_INCOMPATIBLE' => 'Pobrany plik nie jest kompatybilny z SuiteCRM Suite: ',

    'LBL_BACK' => 'Powrót',
    'LBL_CANCEL' => 'Anuluj',
    'LBL_ACCEPT' => 'Akceptuję',
    'LBL_CHECKSYS_CACHE' => 'Zapisywalne katalogi bufora (cache)',
    'LBL_DROP_DB_CONFIRM' => 'Podana Nazwa Bazy Danych już istnieje.<br>Możesz:<br>1.Kliknąć na przycisk Anuluj i wybrać inną nazwę, lub<br>2.Kliknąć na przycisk Akceptuj i kontynuować. Wszystkie istniejące tabele zostaną usunięte. <strong>To znaczy, że wszystkie tabele oraz uprzednio istniejące dane zostaną bezpowrotnie usunięte.</strong>',
    'LBL_CHECKSYS_COMPONENT' => 'Element',
    'LBL_CHECKSYS_CONFIG' => 'Zapisywalna Konfiguracja Pliku SuiteCRM (config.php)',
    'LBL_CHECKSYS_CURL' => 'Moduł cURL',
    'LBL_CHECKSYS_CUSTOM' => 'Zapisywalny Katalog Klienta',
    'LBL_CHECKSYS_DATA' => 'Zapisywalne Podkatalogi Danych',
    'LBL_CHECKSYS_IMAP' => 'Moduł IMAP',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'Moduł MB Strings',
    'LBL_CHECKSYS_MEM_OK' => 'OK (Bez Limitu)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'OK (Nieograniczone)',
    'LBL_CHECKSYS_MEM' => 'Limit Pamięci PHP ',
    'LBL_CHECKSYS_MODULE' => 'Zapisywalne Podkatalogi Modułów oraz Plików',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'Niedostępny',
    'LBL_CHECKSYS_OK' => 'OK',
    'LBL_CHECKSYS_PHP_INI' => '<b>Uwaga:</b> Konfiguracja pliku PHP (php.ini) znajduje się:',
    'LBL_CHECKSYS_PHP_OK' => 'OK (ver ',
    'LBL_CHECKSYS_PHPVER' => 'Wersja PHP',
    'LBL_CHECKSYS_IISVER' => 'Wersja IIS',
    'LBL_CHECKSYS_JSON' => 'JSON Parsing',
    'LBL_CHECKSYS_RECHECK' => 'Sprawdź Ponownie',
    'LBL_CHECKSYS_STATUS' => 'Status',
    'LBL_CHECKSYS_TITLE' => 'System Sprawdzania Potwierdzenia',
    'LBL_CHECKSYS_XML' => 'Parsowanie XML',
    'LBL_CHECKSYS_ZLIB' => 'Kompresja Modułu ZLIB',
    'LBL_CHECKSYS_ZIP' => 'Moduł Obsługi ZIP',
    'LBL_CHECKSYS_PCRE' => 'Biblioteka PCRE',
    'LBL_CHECKSYS_FIX_FILES' => 'Przed rozpoczęciem napraw następujące pliki lub katalogi:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'Przed rozpoczęciem napraw następujące katalogi oraz znajdujące się w nich pliki modułu: ',
    'LBL_CHECKSYS_UPLOAD' => 'Zapisywalny Katalog Przekazywanych Danych',
    'LBL_CLOSE' => 'Zamknij',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => 'Utworzone',
    'LBL_CONFIRM_DB_TYPE' => 'Rodzaj Bazy Danych',
    'LBL_CONFIRM_NOT' => 'nie',
    'LBL_CONFIRM_TITLE' => 'Potwierdź Ustawienia',
    'LBL_CONFIRM_WILL' => 'będzie',
    'LBL_DBCONF_DB_DROP' => 'Usuń Tabele',
    'LBL_DBCONF_DB_NAME' => 'Nazwa Bazy Danych',
    'LBL_DBCONF_DB_PORT' => 'Port bazy danych',
    'LBL_DBCONF_DB_PASSWORD' => 'Hasło Bazy Danych',
    'LBL_DBCONF_DB_PASSWORD2' => 'Wprowadź Ponownie Hasło Bazy Danych',
    'LBL_DBCONF_DB_USER' => 'Użytkownik bazy danych SuiteCRM',
    'LBL_DBCONF_SUITE_DB_USER' => 'Użytkownik bazy danych SuiteCRM',
    'LBL_DBCONF_DB_ADMIN_USER' => 'Nazwa Administratora Bazy Danych',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'Hasło Administratora Bazy Danych',
    'LBL_DBCONF_COLLATION' => 'Metoda porównywania napisów',
    'LBL_DBCONF_CHARSET' => 'Zestaw znaków',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => 'Zaawansowana konfiguracja bazy danych',
    'LBL_DBCONF_DEMO_DATA' => 'Wstawić Dane Demo do Bazy Danych?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'Wybierz przykładowe dane',
    'LBL_DBCONF_HOST_NAME' => 'Nazwa hosta / Instancja hosta',
    'LBL_DBCONF_HOST_INSTANCE' => 'Instancja hosta',
    'LBL_DBCONFIG_SECURITY' => 'Z powodów bezpieczeństwa, możesz wyznaczyć jednego użytkownika uprawnionego do połączen z bazą danych SuiteCRM. Ten użytkownik musi mieć prawa do zapisu, uaktualniania danych, oraz odczytu danych z konkrentej bazy, która zostanie utworzona dla tej instancji.  Użytkownik ten może być administratorem bazy określonym powyżej, możesz utworzyć nowego, lub wybrać jednego z już istniejących.',
    'LBL_DBCONFIG_PROVIDE_DD' => 'Podaj istniejącego użytkownika',
    'LBL_DBCONFIG_CREATE_DD' => 'Określ użytkownika do utworzenia',
    'LBL_DBCONFIG_SAME_DD' => 'Taki jak Administrator',
    'LBL_DBCONF_TITLE' => 'Konfiguracja Bazy Danych',
    'LBL_DBCONF_TITLE_NAME' => 'Wprowadź nazwę bazy danych',
    'LBL_DBCONF_TITLE_USER_INFO' => 'Podaj Informacje Użytkownika Bazy Danych',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'Hasło SMTP:',
    'LBL_DISABLED_DESCRIPTION_2' => 'Po dokonaniu zmian kliknij na poniższy przycisk "Start" w celu rozpoczęcia instalacji. <I>Po zakończeniu instalacji zmień wartość z \'installer_locked\' na \'true\'</I>. ',
    'LBL_DISABLED_DESCRIPTION' => 'Instalator został już raz uruchomiony. Ze względów bezpieczeństwa wstrzymano instalację rozpoczętą ponownie. Jeśli chcesz rozpocząć instalację przejdź do config.php file, znajdź (lub dodaj) zmienną \'installer_locked\' a następnie ustaw ją na \'false\'. Linia kodu powinna wyglądać następująco:',
    'LBL_DISABLED_HELP_1' => 'W celu uzyskania pomocy wejdź na stronę SuiteCRM',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'Forum wsparcia',
    'LBL_APP_NOT_INSTALLED' => 'SuiteCRM nie jest zainstalowany. Punkt wejścia wymaga zainstalowanego SuiteCRM - dokonaj instalacji.',
    'LBL_DISABLED_TITLE_2' => 'Instalacja SuiteCRM została ukończona z błędem',
    'LBL_HELP' => 'Pomoc',
    'LBL_INSTALL' => 'Zainstaluj',
    'LBL_INSTALL_TYPE_TITLE' => 'Opcje instalacji',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'Wybierz typ instalacji',
    'LBL_INSTALL_TYPE_TYPICAL' => '<b>Typowa instalacja</b>',
    'LBL_INSTALL_TYPE_CUSTOM' => '<b>Instalacja niestandardowa</b>',
    'LBL_INSTALL_TYPE_MSG2' => 'Wymaga minimum informacji do instalacji. Zalecane dla nowych użytkowników.',
    'LBL_INSTALL_TYPE_MSG3' => 'Wprowadza dodatkowe opcje instalacji. Po instalacji użytkownik ma dostęp do większości z tych opcji w panelu administracyjnym. Zalecane dla zaawansowanych użytkowników. ',
    'LBL_LANG_1' => 'W celu zainstalowania pakietu językowego US-English kliknij na przycisk "Dalej".',
    'LBL_LANG_BUTTON_COMMIT' => 'Zainstaluj',
    'LBL_LANG_BUTTON_REMOVE' => 'Usuń',
    'LBL_LANG_BUTTON_UNINSTALL' => 'Odinstaluj',
    'LBL_LANG_BUTTON_UPLOAD' => 'Załaduj',
    'LBL_LANG_NO_PACKS' => 'brak',
    'LBL_LANG_PACK_INSTALLED' => 'Poniższy pakiet językowy został zainstalowany: ',
    'LBL_LANG_PACK_READY' => 'Poniższy pakiet językowy może zostać zainstalowany: ',
    'LBL_LANG_SUCCESS' => 'Pakiet Plików Językowych został dodany pomyślnie',
    'LBL_LANG_TITLE' => 'Pakiet Językowy',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'Instalowanie SuiteCRM. To może potrwać kilka minut.',
    'LBL_SILENT_INSTALL_SUCCESS' => 'SuiteCRM został pomyślnie zainstalowany.',
    'LBL_SILENT_INSTALL_FAILED' => 'Instalacja SuiteCRM nie powiodła się.',
    'LBL_LANG_UPLOAD' => 'Załąduj Pakiet Językowy',
    'LBL_LICENSE_ACCEPTANCE' => 'Akceptacja Licencji',
    'LBL_LICENSE_CHECKING' => 'Sprawdzanie zgodności systemu.',
    'LBL_LICENSE_CHKENV_HEADER' => 'Sprawdzanie środowiska',
    'LBL_LICENSE_CHKDB_HEADER' => 'Weryfikacja ustawień bazy danych.',
    'LBL_LICENSE_CHECK_PASSED' => 'Zgodność systemu została potwierdzona.',
    'LBL_CREATE_CACHE' => 'Przygotowanie instalacji...',
    'LBL_LICENSE_REDIRECT' => 'Przekierowanie za',
    'LBL_LICENSE_I_ACCEPT' => 'Akceptuję',
    'LBL_LICENSE_PRINTABLE' => ' Podgląd wydruku ',
    'LBL_PRINT_SUMM' => 'Drukuj Podsumowanie',
    'LBL_LICENSE_TITLE_2' => 'Licencja SuiteCRM',
    'LBL_LICENSE' => 'LICENCJA',

    'LBL_LOCALE_NAME_FIRST' => 'Jan',
    'LBL_LOCALE_NAME_LAST' => 'Kowalski',
    'LBL_LOCALE_NAME_SALUTATION' => 'Dr',

    'LBL_ML_ACTION' => 'Działanie',
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
    'LBL_PERFORM_ADMIN_PASSWORD' => 'Ustawianie Hasła Admin',
    'LBL_PERFORM_CONFIG_PHP' => 'Konfigurowanie Pliku SuiteCRM',
    'LBL_PERFORM_CREATE_DB_1' => 'Tworzenie Bazy Danych ',
    'LBL_PERFORM_CREATE_DB_2' => ' <b>na</b> ',
    'LBL_PERFORM_CREATE_DB_USER' => 'Tworzenie Użytkownika Bazy Danych oraz Hasła...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'Tworzenie Domyślnych Danych SuiteCRM',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'Tworzenie domyślnego wykazu zadań',
    'LBL_PERFORM_DEFAULT_USERS' => 'Trwa Tworzenie Użytkowników Domyślnych',
    'LBL_PERFORM_DEMO_DATA' => 'Zapełnianie bazy danych za pomocą danych demontracyjnych...',
    'LBL_PERFORM_DONE' => 'wykonano<br>',
    'LBL_PERFORM_FINISH' => 'Koniec',
    'LBL_PERFORM_OUTRO_1' => 'Ustawienia SuiteCRM ',
    'LBL_PERFORM_OUTRO_2' => ' Ukończone',
    'LBL_PERFORM_OUTRO_3' => 'Łączny Czas: ',
    'LBL_PERFORM_OUTRO_4' => ' sekundy.',
    'LBL_PERFORM_OUTRO_5' => 'Zajęta Pamięć Operacyjna: ',
    'LBL_PERFORM_OUTRO_6' => ' Bajty',
    'LBL_PERFORM_SUCCESS' => 'Pomyślnie!',
    'LBL_PERFORM_TABLES' => 'Tworzenie tabel aplikacji SuiteCRM, audyt tabel i metadanych relacji',
    'LBL_PERFORM_TITLE' => 'Utwórz Setup',
    'LBL_PRINT' => 'Wydruk',
    'LBL_REG_CONF_1' => 'Proszę zarejestrować się na SuiteCRM wypełniając poniższy formularz. Informacje dotyczące sposobu użytkowania przez Państwa SuiteCRM pozwolą nam dostarczać odpowiednie produkty dostosowane do wymagań Państwa firmy. Jeśli jesteś zainteresowany otrzymywaniem informacji na temat SuiteCRM dopisz się do naszej listy mailingowej.',
    'LBL_REG_CONF_3' => 'Dziękujemy za rejestracje. W celu zalogowania się na SuiteCRM  kliknij przycisk Zakończ. Pierwsze logowanie wymaga użycia nazwy "admin" wraz hasłem wprowadzonym w kroku 2.',
    'LBL_REG_TITLE' => 'Rejestracja',

    'LBL_REQUIRED' => '*Pole Wymagane',

    'LBL_SITECFG_ADMIN_Name' => 'SuiteCRM Nazwa Użytkownika Administrator',
    'LBL_SITECFG_ADMIN_PASS_2' => 'Wprowadź Ponownie Hasło Dostępu SuiteCRM',
    'LBL_SITECFG_ADMIN_PASS' => 'Hasło Administratora SuiteCRM',
    'LBL_SITECFG_APP_ID' => 'Aplikacja ID',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'Przekroczyłeś auto-generowane ID aplikacji, która zabezpiecza sesje SuiteCRM. Wszystkie klastry potrzebne do instalacji powinny  posiadać takie same ID.',
    'LBL_SITECFG_CUSTOM_ID' => 'Wprowadź Twoje ID Aplikacji',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'Przekroczyłeś katalog domyślny w miejscu SuiteCRM log. Dostęp przez przeglądarkę będzie zastrzeżony przez .htaccess redirect.',
    'LBL_SITECFG_CUSTOM_LOG' => 'Użyj Własnego Katalogu Dziennika',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'Określ bezpieczny folder do gromadzenia informacji dotyczących sesji - w celu zapobiegania dostępowi osób niepowołanych, szczególnie na współdzielonych serwerach.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'Użyj Własnego Zarządzania Sesjami dla SuiteCRM',
    'LBL_SITECFG_FIX_ERRORS' => 'Przed ropoczęciem napraw występujące błędy. :',
    'LBL_SITECFG_LOG_DIR' => 'Katalog Dziennika',
    'LBL_SITECFG_SESSION_PATH' => 'Przenieś do Zarządzania Sesjami (musi dać się opisać)',
    'LBL_SITECFG_SITE_SECURITY' => 'Zaawansowany System Bezpieczeństwa',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => 'W przypadku zaznaczenia tej opcji, system cyklicznie skontroluje czy dostępna jest zaktualizowana wersja aplikacji.',
    'LBL_SITECFG_SUITE_UP' => 'Automatycznie sprawdzać dostępność aktualizacji?',
    'LBL_SITECFG_TITLE' => 'Konfiguracja Strony',
    'LBL_SITECFG_TITLE2' => 'Znajdź swoją instancję SuiteCRM',
    'LBL_SITECFG_SECURITY_TITLE' => 'Zabezpieczenia strony',
    'LBL_SITECFG_URL' => 'SuiteCRM URL',
    'LBL_SITECFG_ANONSTATS' => 'Wysłać Anonimowo Obecne Statystyki?',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => 'Jeśli zaznaczone, SuiteCRM wyśle anonimowe statystyki dotyczące Państwa instalacji do SuiteCRM. Informacja ta pomoże nam udoskonalić i lepiej zrozumieć sposób wykorzystywania aplikacji.',
    'LBL_SITECFG_URL_MSG' => 'Wprowadź adres URL, pod którym będzie można zalogować się do instancji SuiteCRM po zakończeniu instalacji. Adres URL będzie również używany jako bazowy dla innnych adresów na stronach aplikacji. Adres URL powinien zawierać nazwę serwera stron , nazwę maszyny, lub adres IP.',
    'LBL_SITECFG_SYS_NAME_MSG' => 'Wprowadź nazwę dla Twojego systemu. Nazwa będzie wyświetlana w pasku tytułu przeglądarki użytkownika SuiteCRM.',
    'LBL_SITECFG_PASSWORD_MSG' => 'Po zakończeniu instalacji, będziesz musiał użyć danych administratora do zalogowania do aplikacji.  Wprowadź hasło dla tego użytkownika administratora. To hasło może zostać zmienione po pierwszym logowaniu.',
    'LBL_SITECFG_COLLATION_MSG' => 'Wybierz sposób sortowania dla swojego systemu. Ta opcja utworzy tabele w bazie danych z obsługą konkretnego języka. Jeśli twój język nie wymaga specjalnych ustawień użyj ustawień domyślnych.',
    'LBL_SPRITE_SUPPORT' => 'Wsparcie dla Sprite',
    'LBL_SYSTEM_CREDS' => 'Uwierzytelnianie systemu',
    'LBL_SYSTEM_ENV' => 'Środowisko systemu',
    'LBL_SHOW_PASS' => 'Pokaż hasła',
    'LBL_HIDE_PASS' => 'Ukryj hasła',
    'LBL_HIDDEN' => '<i>(ukryty)</i>',
    'LBL_STEP1' => 'Krok 1 z 2 - Wymagania systemu - analiza przed instalacją',
    'LBL_STEP2' => 'Krok 2 z 2 - Konfiguracja',
    'LBL_STEP' => 'Krok',
    'LBL_TITLE_WELCOME' => 'Witamy w SuiteCRM ',
    'LBL_WELCOME' => 'Witamy w SuiteCRM',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'Gotowy do instalacji?',
    'REQUIRED_SYS_COMP' => 'Wymagane komponenty systemu',
    'REQUIRED_SYS_COMP_MSG' =>
        'Zanim rozpoczniesz, upewnij się, że posiadasz wspierane wersje następujących komponentów systemu:<br>
 <ul>
<li> Baza danych / System zarządzania bazą (Przykłady: MariaDB, MySQL, SQL Server)</li>                      <li> Serwer WWW (Apache, IIS)</li>
</ul>
Sprawdź w tablicy kompatybilności w Uwagach do wydania, aby ustalić które komponenty systemu są wspierane przez wersję SuiteCRM, którą instalujesz.<br>',
    'REQUIRED_SYS_CHK' => 'Wstępne Sprawdzenie Systemu',
    'REQUIRED_SYS_CHK_MSG' =>
        'Po rozpoczęciu procesu instalacji, system dokona weryfikacji serwera na którym znajdują się pliki SuiteCRM, aby upewnić się, że system jest skonfigurowany prawidłowo i ma wszystkie niezbędne składniki do pomyślnego zakończenia instalacji. <br><br>
System sprawdza, następujące elementy: <br>
<ul>
<li><b>wersja PHP</b> &#8211; musi być zgodna z aplikacją</li> 
<li><b>Zmienne sesji</b> &#8211; muszą działać poprawnie</li>
 <li><b>MB string</b> &#8211; muszą być zainstalowane i włączone w pliku php.ini</li>
 <li><b>Obsługa bazy danych</b> &#8211; musi istnieć dla SQLite, MySQL lub SQL Server</li>
 <li><b>Config.php</b> &#8211; musi istnieć i musi mieć odpowiednie uprawnienia, aby umożliwić zapisywanie w nim</li>
 <li>następujące pliki SuiteCRM muszą być zapisywalne: <ul><li><b>/ custom</li> 
<li>/ cache</li> 
<li>/ modules</li>
 <li>/ upload</b></li></ul></li></ul>
 Jeśli sprawdzenie nie powiedzie się, instalacja nie będzie mogła być kontynuowana. Pojawi się komunikat o błędzie wyjaśniający dlaczego system nie przeszedł weryfikacji. Po wprowadzeniu niezbędnych zmian, można dokonać ponownej kontroli systemu i kontynuować instalację. <br>',


    'REQUIRED_INSTALLTYPE' => 'Typowa lub niestandardowa instalacja',
    'REQUIRED_INSTALLTYPE_MSG' =>
        'Po przeprowadzeniu testu, możesz wybrać typowy lub niestandardowy tryb instalacji.<br><br><br />                      Dla obu  - <b>Typowego</b> i <b>Niestandardowego</b>, będziesz potrzebował następujących informacji:<br><br />                      <ul><br />                      <li> <b>Silnika bazy danych</b>, który będzie napędzał  aplikację <ul><li>Kompatybilne bazy danych to: MySQL, MS SQL Server, Oracle.<br><br></li></ul></li><br />                      <li> <b>Nazwy serwera stron</b> lub maszyny (hosta) na którym umieszczona jest baza danych<br />                      <ul><li>Może to być <i>localhost</i>, jeśli baza danych jest umieszczona na Twoim lokalnym komputerze, lub na tym samym serwerze, na którym są pliki aplikacji.<br><br></li></ul></li><br />                      <li><b>Nazwy bazy danych</b>, której zamierzasz użyć do przechowywania danych aplikacji SuiteCRM</li><br />                        <ul><br />                          <li> Możesz mieć już bazę danych, której zamierzasz użyć. Jeśli wprowadzisz nazwę istniejącej bazy, jej tabele zostaną usunięte podczas instalacji, gdy będzie definiowany nowy schemat dla bazy SuiteCRM.</li><br />                          <li> Jeśli nie masz bazy danych, podczas instalacji nazwa, którą wprowadzisz będzie użyta do stworzenia nowej bazy..<br><br></li><br />                        </ul><br />                      <li><b>Nazwy i hasła użytkownika - administratora serwera bazy danych</b> <ul><li>Administrator bazy powinien móc tworzyć tabele i użytkowników i móc zapisywać do bazy danych.</li><li>Być może będziesz musiał skontaktować się z Twoim administratorem, w celu ustalenia, czy baza danych znajduje się na Twoim lokalnym komputerze, i/lub czy jesteś administratorem serwera bazy danych.<br><br></ul></li></li><br />                      <li> <b>Nazwy i hasła dla użytkownika bazy danych SuiteCRM</b><br />                      </li><br />                        <ul><br />                          <li> Użytkownik może być jednocześnie administratorem serwera bazy danych, lub możesz określić nazwę innego istniejącego użytkownika. </li><br />                          <li> Jeśli chcesz, możesz też utworzyć nowego użytkownika bazy danych. W tym celu będziesz musiał podać jego nazwę, oraz hasło. Ten użytkownik zostanie utworzony podczas instalacji. </li><br />                        </ul></ul><p><br /><br />                      Dodatkowo, dla trybu <b>Niestandardowego</b> musisz posiadać następujące informacje:<br><br />                      <ul><br />                      <li> <b>Adres URL</b>, pod którym będzie można zalogować się do aplikacji, po jej zainstalowaniu. Ten adres URL powinien zawierać nazwę serwera stron, lub nazwę maszyny, lub adres IP.<br><br></li><br />                                  <li> [Opcjonalnie] <b>Ścieżkę do katalogu sesji</b> jeśli chcesz, możesz użyć własnego katalogu sesji dla aplikacji SuiteCRM, w celu zapobiegnięcia mieszania się danych z innych instancji, gdy wiele aplikacji jest instalowanych na współdzielonych serwerach.<br><br></li><br />                                  <li> [Opcjonalnie] <b>Ścieżkę własnego katalogu dziennika</b>. Jeśli chcesz możesz nadpisać domyślny katalog dla dziennika aplikacji.<br><br></li><br />                                  <li> [Opcjonalnie] <b>ID Aplikacji</b>. Jeśli chcesz, możesz nadpisać automatycznie wygenerowane ID, aby mieć pewność, że sesje z jednej instancji SuiteCRM nie zostaną użyte w innej.<br><br></li><br />                                  <li><b>Zestaw znaków</b> najczęściej używany w Twoich ustawieniach lokalnych.<br><br></li></ul><br />                                  W celu uzyskania bardziej szczegółowych informacji, sięgnij do Instrukcji instalacji.',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Przeczytaj poniższe ważne informacje, zanim rozpoczniesz instalację. Informacje te pomogą Ci określić, czy jesteś obecnie przygotowany do zainstalowania aplikacji.',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => 'Wybierz Język',
    'LBL_WELCOME_SETUP_WIZARD' => 'Kreator Konfiguracji',
    'LBL_WIZARD_TITLE' => 'Kreator Konfiguracji SuiteCRM: Krok',
    'LBL_YES' => 'Tak',

    'LBL_PATCHES_TITLE' => 'Zainstaluj Ostatnie Ścieżki',
    'LBL_MODULE_TITLE' => 'Pobierz & Zainstaluj Pakiety Językowe',
    'LBL_PATCH_1' => 'Jeśli chcesz przejść do następnego kroku kliknij Dalej.',
    'LBL_PATCH_TITLE' => 'Ścieżka Systemu',
    'LBL_PATCH_READY' => 'Poniższe ścieżki są gotowe do instalacji',
    'LBL_SESSION_ERR_DESCRIPTION' => "SuiteCRM jest oparty na sesjach PHP umożliwiających zapisywanie ważnych informacji podczas połączenia z tym serwerem. Twoja instalacja PHP nie ma poprawnie skonfigurowanych informacji sesji.Powszechny błąd: 'session.save_path' nie należy do obowiązującego katalogu. Proszę poprawić <a target=\"_new\" href=\"http://us2.php.net/manual/en/ref.session.php\">konfigurację PHP</a> w poniższym pliku php.ini",
    'LBL_SESSION_ERR_TITLE' => 'Błąd Konfiguracyjny Sesji PHP',
    'LBL_SYSTEM_NAME' => 'Nazwa Systemu',
    'LBL_COLLATION' => 'Ustawienia Porównań',
    'LBL_REQUIRED_SYSTEM_NAME' => 'Pole Nazwa Systemu nie może być puste',
    'LBL_PATCH_UPLOAD' => 'Załaduj Ścieżkę',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Wymagana wersja PHP 5 lub nowsza.',
    'LBL_MINIMUM_PHP_VERSION' => 'Minimalnie wymagana wersja PHP 5.1.0. Zalecana wersja PHP 5.2.x.',
    'LBL_YOUR_PHP_VERSION' => '(Twoja aktualna wersja php to',
    'LBL_RECOMMENDED_PHP_VERSION' => 'Rekomendowana wersja php to 5.2.x)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Funkcja wstecznej kompatybilności PHP jest włączona. Ustaw zend.ze1_compatibility_mode na Off aby przejść dalej',
    'LBL_STREAM' => 'PHP pozwala na korzystanie ze strumieni',

    'advanced_password_new_account_email' => array(
        'subject' => 'Informacje o nowym koncie',
        'type' => 'system',
        'description' => 'Ten szablon jest używany, gdy Administrator systemu wysyła użytkownikowi nowe hasło.',
        'body' => '<div><table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width="550" align=\\"\\&quot;\\&quot;center\\&quot;\\&quot;\\"><tbody><tr><td colspan=\\"2\\"><p>Oto Twoja nazwa użytkownika i tymczasowe hasło:</p><p>Nazwa użytkownika : $contact_user_user_name </p><p>Hasło : $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>Po zalogowaniu z użyciem powyższego hasła należy zmienić hasło na własne. </p>   </td>         </tr><tr><td colspan=\\"2\\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Oto Twoja nazwa użytkownika i tymczasowe hasło:
Nazwa użytkownika : $contact_user_user_name
Hasło : $contact_user_user_hash 

$config_site_url

Po zalogowaniu z użyciem powyższego hasła należy zmienić hasło na własne.',
        'name' => 'E-mail z wygenerowanym przez system hasłem',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Zresetuj hasło swojego konta',
        'type' => 'system',
        'description' => "Ten szablon jest używany podczas wysyłki linka służącego do resetowania hasła użytkownika.",
        'body' => '<div><table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width="550" align=\\"\\&quot;\\&quot;center\\&quot;\\&quot;\\"><tbody><tr><td colspan=\\"2\\"><p>Ostatnio poprosiłeś/aś w $contact_user_pwd_last_changed o zresetowanie hasła użytkownika. </p><p>Kliknij w poniższy link aby zresetować hasło:</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\\"2\\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Ostatnio poprosiłeś/aś w $contact_user_pwd_last_changed o zresetowanie hasła użytkownika.

Kliknij w poniższy link aby zresetować hasło

$contact_user_link_guid',
        'name' => 'E-mail w sprawie zapomnianego hasła',
    ),


    'two_factor_auth_email' => array(
        'subject' => 'Kod uwierzytelniania dwuskładnikowego',
        'type' => 'system',
        'description' => "Ten szablon jest używany do wysyłki kodu uwierzytelniania dwuskładnikowego.",
        'body' => '<div><table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width="550" align=\\"\\&quot;\\&quot;center\\&quot;\\&quot;\\"><tbody><tr><td colspan=\\"2\\"><p>Kod uwierzytelniania dwuskładnikowego to <b>$code</b>.</p>  </td>         </tr><tr><td colspan=\\"2\\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            'Kod uwierzytelniania dwuskładnikowego to $code.',
        'name' => 'Email do dwuskładnikowego uwierzytelniania',
    ),

    // SMTP settings

    'LBL_FROM_NAME' => 'Nazwa "Od":',
    'LBL_FROM_ADDR' => 'Adres "Od":',

    'LBL_WIZARD_SMTP_DESC' => 'Podaj konto e-mail, które będzie używane do wysyłania e-maili, takich jak powiadomienia do zadań i nowe hasła użytkownika. Użytkownicy będą otrzymywać e-maile od aplikacji SuiteCRM, jako wysłane z określonego konta e-mail.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Wybierz dostawcę poczty e-mail:',

    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Inny',
    'LBL_MAIL_SMTP_SETTINGS' => 'Specyfikacje serwera SMTP',
    'LBL_MAIL_SMTPSERVER' => 'Serwer SMTP:',
    'LBL_MAIL_SMTPPORT' => 'Port SMTP:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Użyć uwierzytelnienia SMTP?',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Włączyć protokół SSL lub TLS dla SMTP?',
    'LBL_GMAIL_SMTPUSER' => 'Adres e-mail na Gmailu:',
    'LBL_GMAIL_SMTPPASS' => 'Hasło Gmail:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Pozwól użytkownikom korzystać z tego konta dla e-maili wychodzących:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Po wybraniu tej opcji, użytkownicy będą mogli wysyłać e-maile przy użyciu tego samego konta poczty wychodzącej używanego do wysyłania powiadomień systemu i alertów. Jeśli opcja nie jest wybrana, użytkownicy nadal mogą korzystać z serwera poczty wychodzącej po podaniu swoich danych konta.',

    'LBL_YAHOOMAIL_SMTPPASS' => 'Hasło Yahoo! Mail:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID Yahoo! Mail:',

    'LBL_EXCHANGE_SMTPPASS' => 'Zamień hasło:',
    'LBL_EXCHANGE_SMTPUSER' => 'Zamień nazwę użytkownika:',
    'LBL_EXCHANGE_SMTPPORT' => 'Zamień port serwera:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Zamień serwer:',


    'LBL_MAIL_SMTPUSER' => 'Nazwa użytkownika SMTP:',
    'LBL_MAIL_SMTPPASS' => 'Hasło SMTP:',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'Brandowanie',
    'LBL_WIZARD_SYSTEM_DESC' => 'Podaj nazwę twojej organizacji i logo w celu dostosowania twojej wersji SuiteCRM.',
    'SYSTEM_NAME_WIZARD' => 'Nazwa:',
    'SYSTEM_NAME_HELP' => 'Jest to nazwa wyświetlana na pasku tytułowym twojej przeglądarki.',
    'NEW_LOGO' => 'Załaduj nowe logo',
    'NEW_LOGO_HELP' => 'Pliki obrazów mogą być przesyłane w formacie .png lub .jpg o maksymalnej wysokości 170px i szerokości 450px. Każdy obraz, który będzie większy, zostanie przeskalowany do tych wymiarów po przesłaniu na serwer.',
    'COMPANY_LOGO_UPLOAD_BTN' => 'Załaduj',
    'CURRENT_LOGO' => 'Bieżące logo',
    'CURRENT_LOGO_HELP' => 'To logo jest wyświetlane na środku ekranu logowania aplikacji SuiteCRM.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'Wybór scenariusza',
    'LBL_WIZARD_SCENARIO_DESC' => 'Ma to umożliwić dostosowanie wyświetlanych modułów, w zależności od wymagań.  Każdy z modułów może być włączona po instalacji za pomocą Panelu administracyjnego.',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'Aktualnie w pliku konfiguracyjnym nie ma skonfigurowanych żadnych scenariuszy (config.php)',


    // System Local Settings


    'LBL_LOCALE_TITLE' => 'Ustawienia regionalne systemu',
    'LBL_WIZARD_LOCALE_DESC' => 'Określ, jak chcesz aby dane w aplikacji SuiteCRM były wyświetlane, na podstawie twojego położenia geograficznego. Ustawienia podane tutaj będą ustawieniami domyślnymi. Użytkownicy będą mogli ustawić swoje własne preferencje.',
    'LBL_DATE_FORMAT' => 'Format daty:',
    'LBL_TIME_FORMAT' => 'Format czasu:',
    'LBL_TIMEZONE' => 'Strefa czsasowa:',
    'LBL_LANGUAGE' => 'Język:',
    'LBL_CURRENCY' => 'Waluta',
    'LBL_CURRENCY_SYMBOL' => 'Symbol Waluty:',
    'LBL_CURRENCY_ISO4217' => 'Symbol Waluty ISO 4217:',
    'LBL_NUMBER_GROUPING_SEP' => 'Separator tysięcy',
    'LBL_DECIMAL_SEP' => 'Symbol dziesiętny',
    'LBL_NAME_FORMAT' => 'Format Nazwy:',
    'UPLOAD_LOGO' => 'Prosimy czekać, wgrywamy logotyp...',
    'ERR_UPLOAD_FILETYPE' => 'Ten typ pliku nie jest dozwolony. Użyj plików jpeg lub png.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'Wystąpił nieznany błąd podczas wgrywania pliku.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'Ładowane pliki przekraczają dopuszczalną wielkość, określoną w dyrektywie upload_max_filesize w pliku php.ini.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'Ładowane pliki przekraczają dopuszczalną wielkość, określoną w dyrektywie MAX_FILE_SIZE, określoną w formularzu HTML.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'Pliki zostały załadowane częściowo.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'Zadne pliki nie zostały załadowane.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'Brak foldera tymczasowego.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'Nie można zapisać pliku na dysku.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'PHP przestało wgrywać plik. PHP nie udostępnia danch, które pozwalaja na ustalenie powodu dlaczego wgrywanie zostało zatrzymane.',

    'LBL_INSTALL_PROCESS' => 'Instalowanie...',

    'LBL_EMAIL_ADDRESS' => 'Adres e-mail:',
    'ERR_ADMIN_EMAIL' => 'Adres e-mail administratora jest niepoprawny.',
    'ERR_SITE_URL' => 'Wymagany jest adres URL strony.',

    'STAT_CONFIGURATION' => 'Konfigurowanie zależności...',
    'STAT_CREATE_DB' => 'Tworzenie bazy danych...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'Tworzenie domyślnuch ustawień...',
    'STAT_INSTALL_FINISH' => 'Instalacja zakończona...',
    'STAT_INSTALL_FINISH_LOGIN' => 'Proces instalacji został zakończony, <a href="%s">Zaloguj się...</a>',
    'LBL_LICENCE_TOOLTIP' => 'Proszę zaakceptuj najpierw licencję.',

    'LBL_MORE_OPTIONS_TITLE' => 'Więcej opcji',
    'LBL_START' => '',
    'LBL_DB_CONN_ERR' => 'Błąd bazy danych',
    'LBL_OLD_PHP' => 'Wykryto starą wersję PHP!',
    'LBL_OLD_PHP_MSG' => 'Zalecana wersja PHP do zainstalowania SuiteCRM jest %s < br /> chociaż minimalna wersja PHP wymagane jest %s, nie jest zalecane ze względu na dużą liczbę stałych błędów, w tym poprawki zabezpieczeń, wydany w bardziej nowoczesne wersje. < br /> używasz PHP w wersji %s, który jest EOL: <a href="http://php.net/eol.php"> http://php.net/eol.php</a>. < br /> Uaktualnij swoją wersję PHP. Instrukcje na <a href="http://php.net/migration70"> http://php.net/migration70</a>. ',
    'LBL_OLD_PHP_OK' => 'Jestem świadomy ryzyka i chcę kontynuować.',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'Przydzielony do',
    'LBL_DBCONFIG_MSG3_LABEL' => 'Nazwa Bazy Danych',
    'LBL_DBCONFIG_MSG3' => 'Nazwa bazy danych, która będzie zawierała dane SuiteCRM:',
    'LBL_DBCONFIG_MSG2_LABEL' => 'Nazwa hosta / Instancja hosta',
    'LBL_DBCONFIG_MSG2' => 'Nazwa serwera sieci web lub maszyny (hosta), na których znajduje się baza danych (na przykład www.mydomain.com). Jeśli jest zainstalowana lokalnie, ze względu na wydajność, lepiej używać \'localhost\' niż \'127.0.0.1\'.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'Hasło oraz nazwa użytkownika administratora bazy danych, który jest uprawniony do tworzenia tabel i użytkowników są konieczne do poprawnej konfiguracji bazy danych SuiteCRM.',
    'LBL_SYS_CHECK_WARNING' => 'Ignoruj ostrzeżenia podczas sprawdzania systemu',
    'LBL_PROCEED' => 'DALEJ',
    'LBL_CONFIG' => 'KONFIGURACJA',
    'LBL_VALIDATION_ERRORS' => 'Istnieją błędy walidacji, nie można wykonać akcji.'
);
