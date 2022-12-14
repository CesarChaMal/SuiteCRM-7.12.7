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
    'ERR_UW_CANNOT_DETERMINE_GROUP' => 'Nie mo??na okre??li?? Grupy',
    'ERR_UW_CANNOT_DETERMINE_USER' => 'NIe mo??na okre??li?? w??a??ciciela',
    'ERR_UW_CONFIG_WRITE' => 'B????d uaktualnienia informacji o nowej wersji w pliku config.php.',
    'ERR_UW_CONFIG' => 'Uczy?? plik config.php zapisywalnym i za??aduj ponownie t?? stron??.',
    'ERR_UW_DIR_NOT_WRITABLE' => 'Niezapisywalny katalog',
    'ERR_UW_FILE_NOT_COPIED' => 'Plik nie zosta?? skopiowany',
    'ERR_UW_FILE_NOT_DELETED' => 'Problem z usuni??ciem pakietu',
    'ERR_UW_FILE_NOT_READABLE' => 'Plik nie mo??e by?? odczytany.',
    'ERR_UW_FILE_NOT_WRITABLE' => 'Plik nie mo??e zosta?? przesuni??ty, ani nadpisany',
    'ERR_UW_FLAVOR_2' => 'Ulepsz system:',
    'ERR_UW_FLAVOR' => 'SuiteCRM system:',
    'ERR_UW_LOG_FILE_UNWRITABLE' => 'Plik ./upgradeWizard.log nie m??g?? by?? stworzony/zapisany.  Popraw uprawnienia w Twoim katalogu SuiteCRM.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'Funkcja mbstring.func_overload ma ustawion?? warto???? na wi??cej ni?? 1.  Zmie?? j?? w twoim php.ini i prze??aduj server.',
    'ERR_UW_NO_FILE_UPLOADED' => 'Podaj nazw?? pliku i spr??buj ponownie!<br>\n',
    'ERR_UW_NO_FILES' => 'Wykryto b????d. Nie znaleziono plik??w do sprawdzenia.',
    'ERR_UW_NO_MANIFEST' => 'Archiwum zip nie zawiera pliku manifest.php. Nie mo??na kontynuowa??',
    'ERR_UW_NO_VIEW' => 'Okre??lono nieprawid??owy widok.',
    'ERR_UW_NOT_VALID_UPLOAD' => 'Nieprawid??owy plik do za??adownia.',
    'ERR_UW_NO_CREATE_TMP_DIR' => 'Nie moge utworzy?? katalogu tymczasowego. Sprawd?? prawa do plik??w.',
    'ERR_UW_ONLY_PATCHES' => 'Tylko na tej stronie mo??esz za??adowa?? poprawki.',
    'ERR_UW_PREFLIGHT_ERRORS' => 'Znaleziono b????dy podzczas wst??pnej instalacji',
    'ERR_UW_UPLOAD_ERR' => 'Wyst??pi?? b??ad podczas ??adownia pliku. Spr??buj jeszcze raz!<br>' . PHP_EOL,
    'ERR_UW_VERSION' => 'Wersja systemu SuiteCRM:',
    'ERR_UW_PHP_VERSION' => 'Wersja PHP: ',
    'ERR_UW_SUITECRM_VERSION' => 'Wersja systemu SuiteCRM:',
    'ERR_UW_WRONG_TYPE' => 'Ta strona nie mo??e by?? wy??wietlona',
    'LBL_BUTTON_BACK' => 'Powr??t',
    'LBL_BUTTON_CANCEL' => 'Anuluj',
    'LBL_BUTTON_DELETE' => 'Usu?? pakiet',
    'LBL_BUTTON_DONE' => 'Wykonano',
    'LBL_BUTTON_EXIT' => 'Wyjd??',
    'LBL_BUTTON_NEXT' => 'Dalej',
    'LBL_BUTTON_RECHECK' => 'Sprawd?? ponownie',
    'LBL_BUTTON_RESTART' => 'Uruchom ponownie',

    'LBL_UPLOAD_UPGRADE' => 'Przes??anie aktualizacji na serwer ',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'Kopia zapasowa pliku',
    'LBL_UW_BACKUP_FILES_EXIST' => 'Pliki backupu z tej aktualizacji znajduj?? si?? w',
    'LBL_UW_BACKUP' => 'Kopia zapasowa pliku',
    'LBL_UW_CANCEL_DESC' => 'Kreator aktualizacji zosta?? zatrzymany. Wszystkie pliki tymczasowe i za??adowanie archiwa zip zosta??y usuni??te.<br><br>Naci??nij Wykonano, aby wznowi?? dzia??anie kreatora.',
    'LBL_UW_CHECK_ALL' => 'Sprawd?? wszystko',
    'LBL_UW_CHECKLIST' => 'Etapy aktualizacji',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'Kopie zapasowe nadpisanych plik??w znajduj?? si?? w katalogu: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'R??czne scalanie nast??puj??cych plik??w: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_NAME' => 'Proces aktualizacji: R??czne dodawanie plik??w',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'U??yj najlepszej dla siebie metody por??wnania plik??w podczas scalania. Do czasu zako??czenia procesu aktualizacji Twoja instalacja SuiteCRM b??dzie niestabilna lub mo??e przesta?? dzia??a??.',
    'LBL_UW_COMPLETE' => 'Zako??czono',
    'LBL_UW_COMPLIANCE_ALL_OK' => 'Wszystkie wymagane ustawienia systemowe s?? w??a??ciwe',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'Ustawienia PHP: Wywo??anie poszczeg??lnych funkcji',
    'LBL_UW_COMPLIANCE_CURL' => 'Modu?? cURL',
    'LBL_UW_COMPLIANCE_IMAP' => 'Modu?? IMAP',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'Modu?? MBStrings',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'Parametr MBStrings mbstring.func_overload',
    'LBL_UW_COMPLIANCE_MEMORY' => 'Ustawienie PHP: Limit pami??ci',
    'LBL_UW_COMPLIANCE_STREAM' => 'Ustawienia PHP: strumie??',
    'LBL_UW_COMPLIANCE_DB' => 'Minimalna wersja bazy danych',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'Po??o??enie pliku php.ini',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => 'Minimalna wersja PHP',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'Ustawienie PHP: Tryb bezpieczny',
    'LBL_UW_COMPLIANCE_TITLE2' => 'Wykryte ustawienia',
    'LBL_UW_COMPLIANCE_XML' => 'Parser XML',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'Wsparcie dla plik??w ZIP',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'Wersja PCRE',
    'LBL_UW_COPIED_FILES_TITLE' => 'Pliki zosta??y skopiowane pomy??lnie',

    'LBL_UW_DB_CHOICE1' => 'Kreator aktualizacji skryptem SQL',
    'LBL_UW_DB_CHOICE2' => 'R??czne zapytania SQL',
    'LBL_UW_DB_ISSUES_PERMS' => 'Brak uprawnie??',
    'LBL_UW_DB_METHOD' => 'Metoda aktualizacji bazy',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'ALTER TABLE [table] ADD COLUMN [column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'ALTER TABLE [table] CHANGE COLUMN [column]',
    'LBL_UW_DB_NO_CREATE' => 'CREATE TABLE [table]',
    'LBL_UW_DB_NO_DELETE' => 'DELETE FROM [table]',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'ALTER TABLE [table] DROP COLUMN [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'DROP TABLE [table]',
    'LBL_UW_DB_NO_ERRORS' => 'Nie stwierdzono braku uprawnie??',
    'LBL_UW_DB_NO_INSERT' => 'INSERT INTO [table]',
    'LBL_UW_DB_NO_SELECT' => 'SELECT [x] FROM [table]',
    'LBL_UW_DB_NO_UPDATE' => 'UPDATE [table]',
    'LBL_UW_DB_PERMS' => 'Niezb??dne uprawnienia',

    'LBL_UW_DESC_MODULES_INSTALLED' => 'Nast??puj??ce aktualizacje zosta??y zainstalowane:',
    'LBL_UW_END_LOGOUT_PRE' => 'Aktualizacja zako??czona.',
    'LBL_UW_END_LOGOUT_PRE2' => 'Kliknij Wykonano, aby wyj???? z Kreatora aktualizacji.',
    'LBL_UW_END_LOGOUT' => 'Prosz?? si?? wylogowa?? i zalogowa?? ponownie, je??eli planujesz zainstalowa?? kolejn?? aktualizacj??.',

    'LBL_UW_FILE_DELETED' => 'zosta?? usuni??ty.<br>',
    'LBL_UW_FILE_GROUP' => 'Grupa',
    'LBL_UW_FILE_ISSUES_PERMS' => 'Prawa dost??pu dla pliku',
    'LBL_UW_FILE_NO_ERRORS' => 'Wszystkie zapisywalne pliki',
    'LBL_UW_FILE_OWNER' => 'W??a??ciciel',
    'LBL_UW_FILE_PERMS' => 'Prawa dost??pu',
    'LBL_UW_FILE_UPLOADED' => 'zosta?? za??adowany',
    'LBL_UW_FILE' => 'Nazwa pliku',
    'LBL_UW_FILES_QUEUED' => 'Nast??puj??ce aktualizacje s?? przygotowane do instalacji:',
    'LBL_UW_FILES_REMOVED' => 'Nast??puj??ce pliki zostan?? usuni??te z systemu:<br>' . PHP_EOL,
    'LBL_UW_NEXT_TO_UPLOAD' => 'Kliknij Dalej, aby za??adowa?? pakiety aktualizacji.',
    'LBL_UW_FROZEN' => 'Wymagane kroki musz?? by?? zako??czone, przed kontynuacj??.',
    'LBL_UW_HIDE_DETAILS' => 'Ukryj szczeg????y',
    'LBL_UW_IN_PROGRESS' => 'W trakcie',
    'LBL_UW_INCLUDING' => 'Zawiera',
    'LBL_UW_INCOMPLETE' => 'Niekompletny',
    'LBL_UW_MANUAL_MERGE' => 'R??czne scalanie',
    'LBL_UW_MODULE_READY' => 'Modu?? jest gotowy do zainstalowania. Kliknij przycisk Zatwierd??, aby kontynuowa?? instalacj??.',
    'LBL_UW_NO_INSTALLED_UPGRADES' => 'Nie wykryto zapisanych aktualizacji.',
    'LBL_UW_NONE' => 'Brak',
    'LBL_UW_OVERWRITE_DESC' => 'Wszystkie zmieniane pliki zostan?? nadpisane, ????cznie ze zmianami w kodzie i wzorcami stworzonymi przez Ciebie. Czy na pewno chcesz kontynuowa???',

    'LBL_UW_PREFLIGHT_ADD_TASK' => 'Utworzy?? zadanie dla ????czenia r??cznego?',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'Czy wys??a?? do siebie wiadomo???? e-mail przypominaj??c?? o r??cznym scaleniu?',
    'LBL_UW_PREFLIGHT_FILES_DESC' => 'Pliki wyminenione poni??ej zosta??y zmodfikowane. Odznacz elementy, kt??re wymagaj?? r??cznego scalenia. <i>Wszystkie wykryte zmiany wygl??du zostan?? automatycznie odznaczone; wszystkie zaznaczone zostan?? nadpisane.',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => 'Nie jest wymagane ??adne r??czne scalanie.',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'Nie wymagane.',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'Automatycznie zabezpieczone Pliki:',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'Wszystkie testy wst??pnej weryfikacji zosta??y wykonane poprawnie. Naci??nij Dalej, aby zatwierdzi?? te zmiany.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'Kliknij Dalej, aby skopiowa?? zaktualizowane pliki do systemu.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => '<b>Uwaga:</b> Dalszy proces aktualizacji jest obowi??zkowy i klikni??cie Dalej b??dzie wymaga??o zako??czenia procesu. Je??li nie chcesz kontynuowa??, kliknij przycisk Anuluj.',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'Zaznacz wszystkie pliki',

    'LBL_UW_REBUILD_TITLE' => 'Przebuduj rezultaty',
    'LBL_UW_SCHEMA_CHANGE' => 'Schemat zmian',

    'LBL_UW_SHOW_COMPLIANCE' => 'Poka?? wykryte ustawienia',
    'LBL_UW_SHOW_DB_PERMS' => 'Poka?? brakuj??ce prawa dost??pu do bazy',
    'LBL_UW_SHOW_DETAILS' => 'Poka?? szczeg????y',
    'LBL_UW_SHOW_DIFFS' => 'Poka?? pliki wymagaj??ce r??cznego scalenia',
    'LBL_UW_SHOW_NW_FILES' => 'Poka?? pliki z niew??a??ciwymi prawami dost??pu',
    'LBL_UW_SHOW_SCHEMA' => 'Poka?? skrypt zmian',
    'LBL_UW_SHOW_SQL_ERRORS' => 'Poka?? z??e zapytania',
    'LBL_UW_SHOW' => 'Poka??',

    'LBL_UW_SKIPPED_FILES_TITLE' => 'pomini??te pliki',
    'LBL_UW_SQL_RUN' => 'Sprawd?? kiedy SQL by?? uruchomiony r??cznie',
    'LBL_UW_START_DESC' => 'Ten kreator jest zaprojektowany, aby asystowa?? administratorom podczas aktualizacji SuiteCRM.',
    'LBL_UW_START_DESC2' => 'Uwaga: Jest wysoce zalecane, aby przed u??yciem pakietu aktualizacji utworzy?? kopi?? produkcyjnej instancji SuiteCRM i przetestowa?? now?? wersj?? w swoim ??rodowisku. Je??li zmieni??e?? plik "composer.json", uruchom nast??puj??c?? komend?? po zako??czeniu procesu aktualizacji:<br/><br/><pre>composer install --no-dev</pre>', // Keep the <pre>composer install --no-dev</pre> words at the end of the sentence and do not translate it
    'LBL_UW_START_DESC3' => 'Kliknij Dalej aby wykona?? weryfikacj?? systemu i upewni?? si??, ??e jest gotowy do aktualizacji. Sprawdzone zostan?? uprawnienia plik??w, bazy danych oraz ustawienia serwera.',
    'LBL_UW_START_UPGRADED_UW_DESC' => 'Nowy kreator b??dzie teraz kontynuowa?? proces aktualizacji. Kontynuuj.',
    'LBL_UW_START_UPGRADED_UW_TITLE' => 'Witamy w nowym kreatorze aktualizacji',

    'LBL_UW_TITLE_CANCEL' => 'Anuluj',
    'LBL_UW_TITLE_COMMIT' => 'Wykonywanie aktualizacji',
    'LBL_UW_TITLE_END' => 'Sprawozdanie',
    'LBL_UW_TITLE_PREFLIGHT' => 'Wst??pna weryfikacja',
    'LBL_UW_TITLE_START' => 'Start',
    'LBL_UW_TITLE_SYSTEM_CHECK' => 'Sprawdzanie systemu',
    'LBL_UW_TITLE_UPLOAD' => 'Za??aduj aktualizacj??',
    'LBL_UW_TITLE' => 'Kreator instalacji',
    'LBL_UW_UNINSTALL' => 'Odinstaluj',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => 'Zaakceptuj licencj??',
    'LBL_UW_CONVERT_THE_LICENSE' => 'Konwertuj Licencj??',

    'LBL_START_UPGRADE_IN_PROGRESS' => 'Rozpocz??to',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'Sprawdzanie systemu w toku',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => 'Sprawdzanie licencji w toku',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'Testowanie wst??pnej instalacji w toku',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'Kopiowanie pliku w toku',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'Trwa wykonywanie aktualizacji',
    'LBL_UW_COMMIT_DESC' => 'Kliknij Dalej, aby uruchomi?? skrypty aktualizacji.',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'Aktualizacja skrypt??w w toku',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'Tworzenie podsumowania aktualizacji',
    'LBL_UPGRADE_IN_PROGRESS' => 'w toku',
    'LBL_UPGRADE_TIME_ELAPSED' => 'Czas, kt??ry pozsota??',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'Aktualizacja zosta??a anulowana. Trwa czyszczenie',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'Ulepszanie mo??e zaj???? troch?? czasu',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'Testowanie po????czenia',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => 'Trwa pobieranie poprawek...',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'Kreator aktualizacji pomija stare schematy 451',
    'LBL_UW_DROP_SCHEMA_MANUAL' => 'R??czne usuni??cie starych schemat??w po instalacji',
    'LBL_UW_DROP_SCHEMA_METHOD' => 'Metoda usuni??cia starych schemat??w',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'Poka?? stare schematy, kt??re mog?? zosta?? usuni??te',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'Pomini??te zapytania',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Jest wymagana co najmniej wersja php 5.0.',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Twoja wersja PHP nie jest wspierana przez SuiteCRM. Musisz zainstalowa?? wersj??, kt??ra jest kompatybilna z aplikacj??. Sprawd?? w macierzy kompatybilno??ci w Uwagach do wydania dla wspieranych wersji PHP. Twoja wersja to',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Tryb wstecznej kompatybilno??ci php jest w????czony. Ustaw dyrektyw?? "zend.ze1_compatibility_mode" na "Off", aby kontynuowa??.',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => 'Akcja',
    'LBL_ML_CANCEL' => 'Anuluj',
    'LBL_ML_COMMIT' => 'Wykonaj',
    'LBL_ML_DESCRIPTION' => 'Opis',
    'LBL_ML_INSTALLED' => 'Data instalacji',
    'LBL_ML_NAME' => 'Nazwa',
    'LBL_ML_PUBLISHED' => 'Data publikacji',
    'LBL_ML_TYPE' => 'Typ',
    'LBL_ML_UNINSTALLABLE' => 'Nieodinstalowywalny',
    'LBL_ML_VERSION' => 'Wersja',
    'LBL_ML_INSTALL' => 'Zainstaluj',
    //adding the string used in tracker. copying from homepage
    'LBL_CURRENT_PHP_VERSION' => 'Twoja obecna wersja php to: ',
    'LBL_RECOMMENDED_PHP_VERSION_1' => 'Rekomendowana wersja php to ',
    'LBL_RECOMMENDED_PHP_VERSION_2' => ' lub wy??sza.',  // End of a sentence as in Recommended PHP version is version X.Y or above

    'LBL_MODULE_NAME' => 'Kreator aktualizacji',
    'LBL_UPLOAD_SUCCESS' => '??adowanie pakietu aktualizacja zako??czone pomy??lnie. Kliknij Dalej, aby wykona?? ostatnie sprawdzenie.',
    'LBL_UW_TITLE_LAYOUTS' => 'Potwierdzenie uk??adu stron',
    'LBL_LAYOUT_MODULE_TITLE' => 'Wygl??dy',
    'LBL_LAYOUT_MERGE_DESC' => 'Nowe pola, kt??re zosta??y dodane jako cz?????? tej aktualizacji mog?? by?? automatycznie dodane do poszczeg??lnych widok??w istniej??cych modu????w. Aby dowiedzie?? si?? wi??cej o nowych polach, prosz?? zapoznaj si?? z dokumentacj?? aktualizacji, kt??ra zosta??a zainstalowana. <br><br>Je??li nie chcesz dodawa?? nowych p??l, prosz?? odznacz modu??, a tw??j w??asny wygl??d pozostanie niezmieniony. Pola b??d?? dost??pne w Edytorze modu????w po aktualizacji.<br><br>',
    'LBL_LAYOUT_MERGE_TITLE' => 'Kliknij Dalej, aby potwierdzi?? zmiany i zako??czy?? aktualizacj??.',
    'LBL_LAYOUT_MERGE_TITLE2' => 'Kliknij Dalej, aby doko??czy?? aktualizacj??.',
    'LBL_UW_CONFIRM_LAYOUTS' => 'Potwierdzenie uk??adu stron',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Potwierd?? wyniki wygl??du',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Nast??puj??ce wygl??dy zosta??y pomy??lnie po????czone:',
    'LBL_SELECT_FILE' => 'Wybierz plik:',
    'ERROR_VERSION_INCOMPATIBLE' => 'Pobrany plik nie jest kompatybilny z SuiteCRM Suite: ',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => 'Za??adowany plik nie jest kompatybilny z Twoj?? wersj?? PHP: ',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => '??adowany plik nie jest kompatybilny z t?? wersj?? aplikacji: ',
    'LBL_LANGPACKS' => 'Pakiety J??zykowe' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => 'Instalator modu????w' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => 'Aktualizacje poprawek' /*for 508 compliance fix*/,
    'LBL_THEMES' => 'Theme' /*for 508 compliance fix*/,
    'LBL_WORKFLOW' => 'Workflow' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => 'Aktualizacja' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => 'Przetwarzanie' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => 'Kompatybilna wersja nie zosta??a ustawiona w pliku manoifestu',
    'LBL_UPGRD_CSTM_CHK' => 'Proces uaktualniania spowoduje zast??pienie niekt??rych plik??w, jednak niekt??re z nich wyst??puj?? r??wnie?? w folderze custom. Przejrzyj zmiany zanim przejdziesz dalej:',
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => '??adowane pliki przekraczaj?? dopuszczaln?? wielko????, okre??lon?? w dyrektywie upload_max_filesize w pliku php.ini.',
        2 => '??adowane pliki przekraczaj?? dopuszczaln?? wielko????, okre??lon?? w dyrektywie MAX_FILE_SIZE, okre??lon?? w formularzu HTML.',
        3 => 'Pliki zosta??y za??adowane cz????ciowo.',
        4 => 'Zadne pliki nie zosta??y za??adowane.',
        5 => 'Nieznany b????d.',
        6 => 'Brak foldera tymczasowego.',
        7 => 'Nie mo??na zapisa?? pliku na dysku.',
        8 => '??adowanie pliku zatrzymane z podowu rozszerzenia.',
    ),
    'LBL_PASSWORD_EXPIRATON_CHANGED' => 'Ostrze??enie: termin wyga??ni??cia has??a nie zosta?? ustawiony!',
    'LBL_PASSWORD_EXPIRATON_REDIRECT' => 'Prosz?? zaktualizowa?? ustawienia tutaj',
);
