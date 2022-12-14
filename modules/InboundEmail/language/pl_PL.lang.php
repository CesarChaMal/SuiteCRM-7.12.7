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

    'ERR_BAD_LOGIN_PASSWORD' => 'Niew??a??ciwe has??o lub login',
    'ERR_INI_ZLIB' => 'Nie mo??na czasowo wy????czy?? kompresji Zlib. Testowanie ustawie?? mo??e si?? nie powie????.',
    'ERR_NO_IMAP' => 'Nie znaleziono bibliotek IMAP.  Nale??y rozwi??za?? ten problem przez kontynuowaniem konfiguracji poczty przychodz??cej',
    'ERR_NO_OPTS_SAVED' => 'Nie zapisano w??a??ciwych ustawie?? dla Twojej skrzynki pocztowej. Sprawd?? te ustawienia jeszcze raz.',
    'ERR_TEST_MAILBOX' => 'Sprawd?? ustawienia i spr??buj jeszcze raz.',

    'LBL_ASSIGN_TO_USER' => 'Przydziel do u??ytkownika',
    'LBL_AUTOREPLY' => 'Szablon autoodpowiedzi',
    'LBL_AUTOREPLY_HELP' => 'Wybierz automatyczn?? odpowied?? w celu powiadomienia e-mail nadawcy, ??e ich odpowiedzi zosta??y odebrane.',
    'LBL_BASIC' => 'Informacje o koncie poczty',
    'LBL_CASE_MACRO' => 'Makro Sprawy',
    'LBL_CASE_MACRO_DESC' => 'Ustaw macro, kt??re b??dzie u??ywane jako mechanizm importu wiadomo??ci przychodz??cych do spraw.',
    'LBL_CASE_MACRO_DESC2' => 'Ustaw dowoln?? warto????, ale nie u??ywaj <b>"%1"</b>.',
    'LBL_CLOSE_POPUP' => 'Zamknij okno',
    'LBL_CREATE_TEMPLATE' => 'Utw??rz',
    'LBL_DELETE_SEEN' => 'Usu?? przeczytane wiadomo??ci po imporcie',
    'LBL_EDIT_TEMPLATE' => 'Edytuj',
    'LBL_EMAIL_OPTIONS' => 'Opcje transportu poczty',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Opcje obs??ugi odrzuce??',
    'LBL_FILTER_DOMAIN_DESC' => 'Nie wysy??aj auto-odpowiedzi dla tej domeny.',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Zaznacz, aby automatycznie tworzy?? rekordy e-mail w SuiteCRM dla wszystkich przychodz??cych e-maili.',
    'LBL_FILTER_DOMAIN' => 'Brak auto-odpowiedzi dla domeny:',
    'LBL_FIND_SSL_WARN' => '<br>Testowanie SSL mo??e zaj???? troch?? czasu. Poczekaj chwil??.<br>',
    'LBL_FROM_ADDR' => 'Adres nadawcy',
    'LBL_FROM_ADDR_DESC' => 'Podany tutaj adres e-mail mo??e nie by?? wy??wietlany w sekcji &quot;Od&quot; wiadomo??ci ze wzgl??du na ograniczenia na??o??one przez dostawc?? us??ugi poczty e-mail. W takim przypadku wykorzystywany b??dzie adres e-mail zdefiniowany w ustawieniach serwera poczty wychodz??cej.', // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => 'Nazwa nadawcy',
    'LBL_GROUP_QUEUE' => 'Przydziel do u??ytkownika grupowego',
    'LBL_HOME' => 'Pulpit',
    'LBL_LIST_MAILBOX_TYPE' => 'Wykorzystanie skrzynki',
    'LBL_LIST_NAME' => 'Nazwa:',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Typ',
    'LBL_LIST_SERVER_URL' => 'Serwer poczty',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LOGIN' => 'Nazwa u??ytkownika',
    'LBL_MAILBOX_DEFAULT' => 'Skrzynka odbiorcza',
    'LBL_MAILBOX_SSL' => 'U??yj SSL',
    'LBL_MAILBOX_TYPE' => 'Mo??liwe akcje',
    'LBL_DISTRIBUTION_METHOD' => 'Metoda dystrybucji',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Utw??rz Szablon Odpowiedzi dla Spraw',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Wybierz automatyczn?? odpowied?? w celu powiadomienia nadawcy, ??e sprawa zosta??a utworzona. E-mail w temacie zawiera numer sprawy, kt??ry przylega do ci??gu z ustawienia makro dla spraw. Ta odpowied?? jest wys??ana wy????cznie przy pierwszym e-mailu otrzymanym od odbiorcy.',
    'LBL_MAILBOX' => 'Monitorowane foldery',
    'LBL_TRASH_FOLDER' => 'Folder kosza',
    'LBL_SENT_FOLDER' => 'Folder wys??ane',
    'LBL_SELECT' => 'Wybierz',
    'LBL_MARK_READ_NO' => 'Zaznaczona Poczta do usuni??cia po imporcie',
    'LBL_MARK_READ_YES' => 'Poczta pozostawiona na serwerze po imporcie',
    'LBL_MARK_READ' => 'Pozostaw kopie wiadomo??ci na serwerze',
    'LBL_MAX_AUTO_REPLIES' => 'Liczba autoodpowiedzi',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'Ustaw maksymaln?? liczb?? autoodpowiedzi do wys??ania na ten sam adres w przedziale 24 godzin.',
    'LBL_PERSONAL_MODULE_NAME' => 'Osobiste konto pocztowe',
    'LBL_CREATE_CASE' => 'Tworzenie sprawy z wiadomo??ci e-mail',
    'LBL_CREATE_CASE_HELP' => 'Wybierz aby automatycznie tworzy?? rekordy z przychodz??cych wiadomo??ci e-maili.',
    'LBL_MODULE_NAME' => 'Poczta przychodz??ca',
    'LBL_BOUNCE_MODULE_NAME' => 'Obs??uga skrzynki odrzuce??',
    'LBL_MODULE_TITLE' => 'Wiadomo??ci przychodz??ce',
    'LBL_NAME' => 'Nazwa',
    'LBL_NONE' => 'Brak',
    'LBL_ONLY_SINCE_NO' => 'Nie. Sprawd?? wszystkie wiadomo??ci na serwerze.',
    'LBL_ONLY_SINCE_YES' => 'Tak.',
    'LBL_PASSWORD' => 'Has??o',
    'LBL_POP3_SUCCESS' => 'Twoje po????czenie POP3 zosta??o nawi??zane pomy??lnie.',
    'LBL_POPUP_TITLE' => 'Testuj ustawienia',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Zaznacz foldery do subskrybcji',
    'LBL_SELECT_TRASH_FOLDERS' => 'Wybierz folder kosza',
    'LBL_SELECT_SENT_FOLDERS' => 'Wybierz folder wys??ane',
    'LBL_DELETED_FOLDERS_LIST' => '??aden z folder??w %s nie istnieje, lub zosta?? usuni??ty z serwera',
    'LBL_PORT' => 'Port serwera pocztowego',
    'LBL_REPLY_TO_NAME' => 'Nazwa"Odpowied?? do"',
    'LBL_REPLY_TO_ADDR' => 'Adres "Odpowiedz do"',
    'LBL_SAME_AS_ABOVE' => 'U??yj z Nazwa/Adres',
    'LBL_SERVER_OPTIONS' => 'Zaawansowane opcje serwera',
    'LBL_SERVER_TYPE' => 'Protoku?? serwera pocztowego',
    'LBL_SERVER_URL' => 'Adres serwera pocztowego',
    'LBL_SSL_DESC' => 'Je??eli Tw??j serwer poczty wspiera bezpieczne po????czenie, w????czenie tej funkcji spowoduje u??ycie SSL podczas importowania poczty.',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'Zaznaczony zesp???? ma dost??p do konta pocztowego.',
    'LBL_SSL' => 'U??yj SSL',
    'LBL_STATUS' => 'Status',
    'LBL_SYSTEM_DEFAULT' => 'Domy??lne ustawienia',
    'LBL_TEST_BUTTON_TITLE' => 'Lista Testowa',
    'LBL_TEST_SETTINGS' => 'Testuj ustawienia',
    'LBL_TEST_SUCCESSFUL' => 'Po????czenie zako??czone pomy??lnie.',
    'LBL_TEST_WAIT_MESSAGE' => 'Poczekaj chwil??...',
    'LBL_WARN_IMAP_TITLE' => 'Poczta przychodz??ca wy????czona',
    'LBL_WARN_IMAP' => 'Ostrze??enia:',
    'LBL_WARN_NO_IMAP' => 'Poczta przychodz??ca nie b??dzie dzia??ac bez w????czonych/skompilowanych bibliotek c-client w PHP. Skontatkuj si?? z administratorem, aby usun???? ten problem.',

    'LNK_LIST_CREATE_NEW_GROUP' => 'Nowe grupowe konto pocztowe',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'Nowe konto do zarz??dzania odrzuconymi wiadomo??ciami (bounce)',
    'LNK_LIST_MAILBOXES' => 'Wszystkie konta pocztowe',
    'LNK_LIST_SCHEDULER' => 'Zadania cykliczne',
    'LNK_SEED_QUEUES' => 'Wy??lij oczekuj??ce wiadomo??ci zespo????w',
    'LBL_GROUPFOLDER_ID' => 'Id grupowego folderu',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Pozw??l u??ytkownikom wysy??a?? e-maile za pomoc?? "OD" Nazwa i adres jako odpowied?? na adres',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Gdy ta opcja jest zaznaczona, Od Nazwa i Od adres e-mail zwi??zane z tym kontem pocztowym grupy pojawi si?? jako opcja dla od pola podczas pisania e-maili do u??ytkownik??w, kt??rzy maj?? dost??p do konta e-mail grupy.',
    'LBL_STATUS_ACTIVE' => 'Aktywny',
    'LBL_STATUS_INACTIVE' => 'Nieaktywny',
    'LBL_IS_PERSONAL' => 'Osobiste',
    'LBL_IS_GROUP' => 'Grupa',
    'LBL_ENABLE_AUTO_IMPORT' => 'Importuj wiadomo??ci e-mail automatycznie',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Ostrze??enie: Modyfikuj??c ustawienia automatycznego importu mo??esz spowodowa?? utrat?? danych.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Uwaga: Automatyczny import musi by?? w????czony, przy automatycznym tworzeniu spraw.',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Kopie robocze',
    'LBL_LIST_TITLE_MY_INBOX' => 'Skrzynka odbiorcza',
    'LBL_LIST_TITLE_MY_SENT' => 'Wys??ane wiadomo??ci',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'Archiwalne wiadomo???? e-mail',
    'LNK_MY_DRAFTS' => 'Kopie robocze',
    'LNK_MY_INBOX' => 'E-mail',
    'LNK_VIEW_MY_INBOX' => 'Wy??wietl wiadomo???? E-mail',
    'LNK_QUICK_REPLY' => 'Odpowiedz',
    'LNK_SENT_EMAIL_LIST' => 'Wys??ane wiadomo??ci',
    'LBL_EDIT_LAYOUT' => 'Edycja szablonu' /*for 508 compliance fix*/,

    'LBL_MODIFIED_BY' => 'Zmodyfikowane przez',
    'LBL_SERVICE' => 'Wsparcie',
    'LBL_STORED_OPTIONS' => 'Opcje zapisane',
    'LBL_GROUP_ID' => 'Identyfikator grupy',
);
