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


    'LBL_RE' => 'Odpowiedz:',

    'ERR_BAD_LOGIN_PASSWORD' => 'Niewłaściwe hasło lub login',
    'ERR_INI_ZLIB' => 'Nie można czasowo wyłączyć kompresji Zlib. Testowanie ustawień może się nie powieść.',
    'ERR_NO_IMAP' => 'Nie znaleziono bibliotek IMAP.  Należy rozwiązać ten problem przez kontynuowaniem konfiguracji poczty przychodzącej',
    'ERR_NO_OPTS_SAVED' => 'Nie zapisano właściwych ustawień dla Twojej skrzynki pocztowej. Sprawdź te ustawienia jeszcze raz.',
    'ERR_TEST_MAILBOX' => 'Sprawdź ustawienia i spróbuj jeszcze raz.',

    'LBL_ASSIGN_TO_USER' => 'Przydziel do użytkownika',
    'LBL_AUTOREPLY' => 'Szablon autoodpowiedzi',
    'LBL_AUTOREPLY_HELP' => 'Wybierz automatyczną odpowiedź w celu powiadomienia e-mail nadawcy, że ich odpowiedzi zostały odebrane.',
    'LBL_BASIC' => 'Informacje o koncie poczty',
    'LBL_CASE_MACRO' => 'Makro Sprawy',
    'LBL_CASE_MACRO_DESC' => 'Ustaw macro, które będzie używane jako mechanizm importu wiadomości przychodzących do spraw.',
    'LBL_CASE_MACRO_DESC2' => 'Ustaw dowolną wartość, ale nie używaj <b>"%1"</b>.',
    'LBL_CLOSE_POPUP' => 'Zamknij okno',
    'LBL_CREATE_TEMPLATE' => 'Utwórz',
    'LBL_DELETE_SEEN' => 'Usuń przeczytane wiadomości po imporcie',
    'LBL_EDIT_TEMPLATE' => 'Edytuj',
    'LBL_EMAIL_OPTIONS' => 'Opcje transportu poczty',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Opcje obsługi odrzuceń',
    'LBL_FILTER_DOMAIN_DESC' => 'Nie wysyłaj auto-odpowiedzi dla tej domeny.',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Zaznacz, aby automatycznie tworzyć rekordy e-mail w SuiteCRM dla wszystkich przychodzących e-maili.',
    'LBL_FILTER_DOMAIN' => 'Brak auto-odpowiedzi dla domeny:',
    'LBL_FIND_SSL_WARN' => '<br>Testowanie SSL może zająć trochę czasu. Poczekaj chwilę.<br>',
    'LBL_FROM_ADDR' => 'Adres nadawcy',
    'LBL_FROM_ADDR_DESC' => 'Podany tutaj adres e-mail może nie być wyświetlany w sekcji &quot;Od&quot; wiadomości ze względu na ograniczenia nałożone przez dostawcę usługi poczty e-mail. W takim przypadku wykorzystywany będzie adres e-mail zdefiniowany w ustawieniach serwera poczty wychodzącej.', // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => 'Nazwa nadawcy',
    'LBL_GROUP_QUEUE' => 'Przydziel do użytkownika grupowego',
    'LBL_HOME' => 'Pulpit',
    'LBL_LIST_MAILBOX_TYPE' => 'Wykorzystanie skrzynki',
    'LBL_LIST_NAME' => 'Nazwa:',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Typ',
    'LBL_LIST_SERVER_URL' => 'Serwer poczty',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LOGIN' => 'Nazwa użytkownika',
    'LBL_MAILBOX_DEFAULT' => 'Skrzynka odbiorcza',
    'LBL_MAILBOX_SSL' => 'Użyj SSL',
    'LBL_MAILBOX_TYPE' => 'Możliwe akcje',
    'LBL_DISTRIBUTION_METHOD' => 'Metoda dystrybucji',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Utwórz Szablon Odpowiedzi dla Spraw',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Wybierz automatyczną odpowiedź w celu powiadomienia nadawcy, że sprawa została utworzona. E-mail w temacie zawiera numer sprawy, który przylega do ciągu z ustawienia makro dla spraw. Ta odpowiedź jest wysłana wyłącznie przy pierwszym e-mailu otrzymanym od odbiorcy.',
    'LBL_MAILBOX' => 'Monitorowane foldery',
    'LBL_TRASH_FOLDER' => 'Folder kosza',
    'LBL_SENT_FOLDER' => 'Folder wysłane',
    'LBL_SELECT' => 'Wybierz',
    'LBL_MARK_READ_NO' => 'Zaznaczona Poczta do usunięcia po imporcie',
    'LBL_MARK_READ_YES' => 'Poczta pozostawiona na serwerze po imporcie',
    'LBL_MARK_READ' => 'Pozostaw kopie wiadomości na serwerze',
    'LBL_MAX_AUTO_REPLIES' => 'Liczba autoodpowiedzi',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'Ustaw maksymalną liczbę autoodpowiedzi do wysłania na ten sam adres w przedziale 24 godzin.',
    'LBL_PERSONAL_MODULE_NAME' => 'Osobiste konto pocztowe',
    'LBL_CREATE_CASE' => 'Tworzenie sprawy z wiadomości e-mail',
    'LBL_CREATE_CASE_HELP' => 'Wybierz aby automatycznie tworzyć rekordy z przychodzących wiadomości e-maili.',
    'LBL_MODULE_NAME' => 'Poczta przychodząca',
    'LBL_BOUNCE_MODULE_NAME' => 'Obsługa skrzynki odrzuceń',
    'LBL_MODULE_TITLE' => 'Wiadomości przychodzące',
    'LBL_NAME' => 'Nazwa',
    'LBL_NONE' => 'Brak',
    'LBL_ONLY_SINCE_NO' => 'Nie. Sprawdź wszystkie wiadomości na serwerze.',
    'LBL_ONLY_SINCE_YES' => 'Tak.',
    'LBL_PASSWORD' => 'Hasło',
    'LBL_POP3_SUCCESS' => 'Twoje połączenie POP3 zostało nawiązane pomyślnie.',
    'LBL_POPUP_TITLE' => 'Testuj ustawienia',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Zaznacz foldery do subskrybcji',
    'LBL_SELECT_TRASH_FOLDERS' => 'Wybierz folder kosza',
    'LBL_SELECT_SENT_FOLDERS' => 'Wybierz folder wysłane',
    'LBL_DELETED_FOLDERS_LIST' => 'Żaden z folderów %s nie istnieje, lub został usunięty z serwera',
    'LBL_PORT' => 'Port serwera pocztowego',
    'LBL_REPLY_TO_NAME' => 'Nazwa"Odpowiedź do"',
    'LBL_REPLY_TO_ADDR' => 'Adres "Odpowiedz do"',
    'LBL_SAME_AS_ABOVE' => 'Użyj z Nazwa/Adres',
    'LBL_SERVER_OPTIONS' => 'Zaawansowane opcje serwera',
    'LBL_SERVER_TYPE' => 'Protokuł serwera pocztowego',
    'LBL_SERVER_URL' => 'Adres serwera pocztowego',
    'LBL_SSL_DESC' => 'Jeżeli Twój serwer poczty wspiera bezpieczne połączenie, włączenie tej funkcji spowoduje użycie SSL podczas importowania poczty.',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'Zaznaczony zespół ma dostęp do konta pocztowego.',
    'LBL_SSL' => 'Użyj SSL',
    'LBL_STATUS' => 'Status',
    'LBL_SYSTEM_DEFAULT' => 'Domyślne ustawienia',
    'LBL_TEST_BUTTON_TITLE' => 'Lista Testowa',
    'LBL_TEST_SETTINGS' => 'Testuj ustawienia',
    'LBL_TEST_SUCCESSFUL' => 'Połączenie zakończone pomyślnie.',
    'LBL_TEST_WAIT_MESSAGE' => 'Poczekaj chwilę...',
    'LBL_WARN_IMAP_TITLE' => 'Poczta przychodząca wyłączona',
    'LBL_WARN_IMAP' => 'Ostrzeżenia:',
    'LBL_WARN_NO_IMAP' => 'Poczta przychodząca nie będzie działac bez włączonych/skompilowanych bibliotek c-client w PHP. Skontatkuj się z administratorem, aby usunąć ten problem.',

    'LNK_LIST_CREATE_NEW_GROUP' => 'Nowe grupowe konto pocztowe',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'Nowe konto do zarządzania odrzuconymi wiadomościami (bounce)',
    'LNK_LIST_MAILBOXES' => 'Wszystkie konta pocztowe',
    'LNK_LIST_SCHEDULER' => 'Zadania cykliczne',
    'LNK_SEED_QUEUES' => 'Wyślij oczekujące wiadomości zespołów',
    'LBL_GROUPFOLDER_ID' => 'Id grupowego folderu',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Pozwól użytkownikom wysyłać e-maile za pomocą "OD" Nazwa i adres jako odpowiedź na adres',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Gdy ta opcja jest zaznaczona, Od Nazwa i Od adres e-mail związane z tym kontem pocztowym grupy pojawi się jako opcja dla od pola podczas pisania e-maili do użytkowników, którzy mają dostęp do konta e-mail grupy.',
    'LBL_STATUS_ACTIVE' => 'Aktywny',
    'LBL_STATUS_INACTIVE' => 'Nieaktywny',
    'LBL_IS_PERSONAL' => 'Osobiste',
    'LBL_IS_GROUP' => 'Grupa',
    'LBL_ENABLE_AUTO_IMPORT' => 'Importuj wiadomości e-mail automatycznie',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Ostrzeżenie: Modyfikując ustawienia automatycznego importu możesz spowodować utratę danych.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Uwaga: Automatyczny import musi być włączony, przy automatycznym tworzeniu spraw.',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Kopie robocze',
    'LBL_LIST_TITLE_MY_INBOX' => 'Skrzynka odbiorcza',
    'LBL_LIST_TITLE_MY_SENT' => 'Wysłane wiadomości',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'Archiwalne wiadomość e-mail',
    'LNK_MY_DRAFTS' => 'Kopie robocze',
    'LNK_MY_INBOX' => 'E-mail',
    'LNK_VIEW_MY_INBOX' => 'Wyświetl wiadomość E-mail',
    'LNK_QUICK_REPLY' => 'Odpowiedz',
    'LNK_SENT_EMAIL_LIST' => 'Wysłane wiadomości',
    'LBL_EDIT_LAYOUT' => 'Edycja szablonu' /*for 508 compliance fix*/,

    'LBL_MODIFIED_BY' => 'Zmodyfikowane przez',
    'LBL_SERVICE' => 'Wsparcie',
    'LBL_STORED_OPTIONS' => 'Opcje zapisane',
    'LBL_GROUP_ID' => 'Identyfikator grupy',
);
