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
    'LBL_ACCEPT_THIS' => 'Zaakceptowa???',
    'LBL_ADD_BUTTON' => 'Dodaj',
    'LBL_ADD_INVITEE' => 'Dodaj Zaproszenia',
    'LBL_CONTACT_NAME' => 'Kontakt:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_CREATED_BY' => 'Utworzone przez',
    'LBL_DATE_END' => 'Data Zako??czenia',
    'LBL_DATE_TIME' => 'Data i Czas Rozpocz??cia: ',
    'LBL_DATE' => 'Data Rozpocz??cia:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Spotkania',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_DIRECTION' => 'Kierunek:',
    'LBL_DURATION_HOURS' => 'Czas trwania (godziny):',
    'LBL_DURATION_MINUTES' => 'Czas trwania (minuty):',
    'LBL_DURATION' => 'Czas trwania:',
    'LBL_EMAIL' => 'E-mail',
    'LBL_FIRST_NAME' => 'Imi??',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notatki',
    'LBL_HOURS_ABBREV' => 'godz.',
    'LBL_HOURS_MINS' => '(godziny/minuty)',
    'LBL_INVITEE' => 'Zaproszenia',
    'LBL_LAST_NAME' => 'Nazwisko',
    'LBL_ASSIGNED_TO_NAME' => 'Przypisane do:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'U??ytkownik Przypisany',
    'LBL_LIST_CLOSE' => 'Zamknij',
    'LBL_LIST_CONTACT' => 'Kontakt',
    'LBL_LIST_DATE_MODIFIED' => 'Data Modyfikacji:',
    'LBL_LIST_DATE' => 'Data Rozpocz??cia',
    'LBL_LIST_DIRECTION' => 'Kierunek',
    'LBL_LIST_DUE_DATE' => 'Data Wykonania',
    'LBL_LIST_FORM_TITLE' => 'Lista Spotka??',
    'LBL_LIST_MY_MEETINGS' => 'Moje Spotkania',
    'LBL_LIST_RELATED_TO' => 'Powi??zany z',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_SUBJECT' => 'Temat',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Potencjalni Klienci',
    'LBL_LOCATION' => 'Lokalizacja:',
    'LBL_MINSS_ABBREV' => 'min.',
    'LBL_MODIFIED_BY' => 'Zmodyfikowane przez',
    'LBL_MODULE_NAME' => 'Spotkania',
    'LBL_MODULE_TITLE' => 'Spotkania: Strona G????wna',
    'LBL_NAME' => 'Nazwa',
    'LBL_NEW_FORM_TITLE' => 'Zaplanuj Spotkanie',
    'LBL_OUTLOOK_ID' => 'Identyfikator programu Outlook',
    'LBL_SEQUENCE' => 'Sekwencja aktualizacji spotkania',
    'LBL_PHONE' => 'Telefon do biura:',
    'LBL_REMINDER_TIME' => 'Czas Przypomnienia',
    'LBL_EMAIL_REMINDER_SENT' => 'E-mail z przypomnieniem wys??any',
    'LBL_REMINDER' => 'Przypomnienie:',
    'LBL_REMINDER_POPUP' => 'Wyskakuj??ce okienko',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Wy??lij wszystkie zaproszenia',
    'LBL_EMAIL_REMINDER' => 'Wyslij przypomnienie',
    'LBL_EMAIL_REMINDER_TIME' => 'Czas e-maila z przypomnieniem',
    'LBL_REMOVE' => 'Usu??',
    'LBL_SCHEDULING_FORM_TITLE' => 'Harmonogram',
    'LBL_SEARCH_BUTTON' => 'Wyszukaj',
    'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie Spotka??',
    'LBL_SEND_BUTTON_LABEL' => 'Zapisz i wy??lij zaproszenia',
    'LBL_SEND_BUTTON_TITLE' => 'Zapisz i wy??lij zaproszenia',
    'LBL_STATUS' => 'Status:',
    'LBL_TYPE' => 'Typ spotkania',
    'LBL_PASSWORD' => 'Has??o spotkania',
    'LBL_URL' => 'Rozpocznij/Do????cz spotkanie/do spotkania',
    'LBL_HOST_URL' => 'Adres URL hosta',
    'LBL_DISPLAYED_URL' => 'Poka?? URL',
    'LBL_CREATOR' => 'Kreator spotkania',
    'LBL_EXTERNALID' => 'ID zewn??trznej aplikacji',
    'LBL_SUBJECT' => 'Temat:',
    'LBL_TIME' => 'Czas Rozpocz??cia:',
    'LBL_USERS_SUBPANEL_TITLE' => 'U??ytkownicy',
    'LBL_PARENT_TYPE' => 'Typ Macierzysty',
    'LBL_PARENT_ID' => 'ID Rodzica',
    'LNK_MEETING_LIST' => 'Przegl??daj spotkania',
    'LNK_NEW_APPOINTMENT' => 'Utw??rz Spotkanie',
    'LNK_NEW_MEETING' => 'Zaplanuj Spotkanie',
    'LNK_IMPORT_MEETINGS' => 'Importuj spotkania',

    'LBL_CREATED_USER' => 'Utworzonego u??ytkownika',
    'LBL_MODIFIED_USER' => 'Zmodyfikowany u??ytkownika',
    'NOTICE_DURATION_TIME' => 'Czas trwania musi by?? wi??kszy ni?? 0',
    'LBL_MEETING_INFORMATION' => 'Przegl??d', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_LIST_JOIN_MEETING' => 'Do????cz do spotkania',
    'LBL_ACCEPT_STATUS' => 'Status akceptacji',
    'LBL_ACCEPT_LINK' => 'Akceptuj link',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'Nie mo??esz do????czy?? do tego spotkania, poniewa?? nie jeste?? zaproszony.',
    'LBL_EXTNOT_RECORD_LINK' => 'Zobacz spotkanie',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'Nie mo??esz rozpocz???? spotkania, poniewa?? nie jeste?? administratorem lub w??a??cicielem tego spotkania.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Utw??rz uczestnik??w',
    'LBL_CREATE_CONTACT' => 'Jako Kontakt',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'Jako Potencjalny Klient',  // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'Utw??rz i dodaj',  // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'Anuluj',
    'LBL_EMPTY_SEARCH_RESULT' => 'Przepraszam, nie znaleziono wynik??w. Prosz?? utworzy?? uczestnik??w poni??ej.',
    'LBL_NO_ACCESS' => 'Nie masz dost??pu do tworzenia $module',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'Rodzaj powt??rze??',
    'LBL_REPEAT_INTERVAL' => 'Interwa?? powtarzania',
    'LBL_REPEAT_DOW' => 'Powt??rz w',
    'LBL_REPEAT_UNTIL' => 'Powtarzaj a?? do',
    'LBL_REPEAT_COUNT' => 'Liczba powt??rze??',
    'LBL_REPEAT_PARENT_ID' => 'Powt??rz ID nadrz??dnego rekordu',
    'LBL_RECURRING_SOURCE' => 'Cykliczne ??r??d??o',

    'LBL_SYNCED_RECURRING_MSG' => 'To spotkanie zosta??o utworzone w innym systemie i zosta??o zsynchronizowane z SuiteCRM. Aby dokona?? zmian nale??y przej???? do innego systemu i dokona?? edycji Spotkania. Zmiany wprowadzone w innym systemie zostan?? zsynchronizowane do tego rekordu.',
    'LBL_RELATED_TO' => 'Powi??zane z: ',

    // for reminders
    'LBL_REMINDERS' => 'Przypomnienia',
    'LBL_REMINDERS_ACTIONS' => 'Akcje:',
    'LBL_REMINDERS_POPUP' => 'Wyskakuj??ce okienko',
    'LBL_REMINDERS_EMAIL' => 'Wy??lij zaproszenie',
    'LBL_REMINDERS_WHEN' => 'Kiedy:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Usu?? przypomnienie',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Dodaj Wszystkie Zaproszenia',
    'LBL_REMINDERS_ADD_REMINDER' => 'Dodaj przypomnienie',

    // for google sync
    'LBL_GSYNC_ID' => 'Identyfikator zdarze?? Google',
    'LBL_GSYNC_LASTSYNC' => 'Sygnatura czasowa ostatniej synchronizacji z Google',
);
