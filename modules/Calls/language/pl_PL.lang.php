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
    'LBL_BLANK' => ' ',
    'LBL_MODULE_NAME' => 'Rozmowy telefoniczne',
    'LBL_MODULE_TITLE' => 'Rozmowy Telefoniczne: Strona G????wna',
    'LBL_SEARCH_FORM_TITLE' => 'Wyszukaj Rozm?? telefoniczn??',
    'LBL_LIST_FORM_TITLE' => 'Lista Rozm??w telefonicznych',
    'LBL_NEW_FORM_TITLE' => 'Zaplanuj Rozmow??',
    'LBL_LIST_CLOSE' => 'Zamknij',
    'LBL_LIST_SUBJECT' => 'Temat',
    'LBL_LIST_CONTACT' => 'Kontakt',
    'LBL_LIST_RELATED_TO' => 'Powi??zany z',
    'LBL_LIST_RELATED_TO_ID' => 'Powi??zane z Id',
    'LBL_LIST_DATE' => 'Data Rozpocz??cia',
    'LBL_LIST_DIRECTION' => 'Kierunek',
    'LBL_SUBJECT' => 'Temat:',
    'LBL_REMINDER' => 'Przypomnienie:',
    'LBL_CONTACT_NAME' => 'Kontakt:',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_STATUS' => 'Status:',
    'LBL_DIRECTION' => 'Kierunek:',
    'LBL_DATE' => 'Data Rozpocz??cia:',
    'LBL_DURATION' => 'Czas trwania:',
    'LBL_DURATION_HOURS' => 'CzasTrwania (godziny):',
    'LBL_DURATION_MINUTES' => 'Czas trwania (minuty):',
    'LBL_HOURS_MINUTES' => '(godziny/minuty)',
    'LBL_DATE_TIME' => 'Data i Czas Rozpocz??cia: ',
    'LBL_TIME' => 'Czas Rozpocz??cia:',
    'LBL_HOURS_ABBREV' => 'godz.',
    'LBL_MINSS_ABBREV' => 'min.',
    'LNK_NEW_CALL' => 'Utw??rz rozmow?? telefoniczn??',
    'LNK_NEW_MEETING' => 'Zaplanuj Spotkanie',
    'LNK_CALL_LIST' => 'Przegl??daj rozmowy telefoniczne',
    'LNK_IMPORT_CALLS' => 'Importuj rozmowy telefoniczne',
    'ERR_DELETE_RECORD' => 'Numer rekordu musi by?? okre??lony do usuni??cia Kontrahenta.',
    'LBL_INVITEE' => 'Zaproszenia',
    'LBL_RELATED_TO' => 'Powi??zany z: ',
    'LNK_NEW_APPOINTMENT' => 'Utw??rz Spotkanie',
    'LBL_SCHEDULING_FORM_TITLE' => 'Harmonogram',
    'LBL_ADD_INVITEE' => 'Dodaj Zaproszenia',
    'LBL_NAME' => 'Nazwa',
    'LBL_FIRST_NAME' => 'Imi??',
    'LBL_LAST_NAME' => 'Nazwisko',
    'LBL_EMAIL' => 'E-mail',
    'LBL_PHONE' => 'Telefon',
    'LBL_REMINDER_POPUP' => 'Wyskakuj??ce okienko',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Wy??lij wszystkie zaproszenia',
    'LBL_EMAIL_REMINDER' => 'Wyslij przypomnienie',
    'LBL_EMAIL_REMINDER_TIME' => 'Czas e-maila z przypomnieniem',
    'LBL_SEND_BUTTON_TITLE' => 'Zapisz i wy??lij zaproszenia',
    'LBL_SEND_BUTTON_LABEL' => 'Zapisz i wy??lij zaproszenia',
    'LBL_DATE_END' => 'Data Zako??czenia',
    'LBL_REMINDER_TIME' => 'Czas Przypomnienia',
    'LBL_EMAIL_REMINDER_SENT' => 'E-mail z przypomnieniem wys??any',
    'LBL_SEARCH_BUTTON' => 'Wyszukaj',
    'LBL_ADD_BUTTON' => 'Dodaj',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Rozmowy Telefoniczne',
    'LNK_SELECT_ACCOUNT' => 'Wybierz kontrahenta',
    'LNK_NEW_ACCOUNT' => 'Nowy kontrahent',
    'LNK_NEW_OPPORTUNITY' => 'Nowa Szansa sprzeda??y',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Potencjalni Klienci',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_USERS_SUBPANEL_TITLE' => 'U??ytkownicy',
    'LBL_OUTLOOK_ID' => 'Outlook ID',
    'LBL_MEMBER_OF' => 'Cz??onek',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notatki',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Przypisano do',
    'LBL_LIST_MY_CALLS' => 'Moje Rozmowy telefoniczne',
    'LBL_ASSIGNED_TO_NAME' => 'Przypisano do',
    'LBL_ASSIGNED_TO_ID' => 'U??ytkownik Przypisany',
    'NOTICE_DURATION_TIME' => 'Czas trwania musi by?? wi??kszy ni?? 0',
    'LBL_CALL_INFORMATION' => 'Przegl??d', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Usu??',
    'LBL_ACCEPT_STATUS' => 'Status akceptacji',
    'LBL_ACCEPT_LINK' => 'Akceptuj link',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Utw??rz uczestnik??w',
    'LBL_CREATE_CONTACT' => 'Jako Kontakt',
    'LBL_CREATE_LEAD' => 'Jako Potencjalny Klient',
    'LBL_CREATE_AND_ADD' => 'Utw??rz i dodaj',
    'LBL_CANCEL_CREATE_INVITEE' => 'Anuluj',
    'LBL_EMPTY_SEARCH_RESULT' => 'Przepraszam, nie znaleziono wynik??w. Prosz?? utworzy?? uczestnik??w poni??ej.',
    'LBL_NO_ACCESS' => 'Nie masz dost??pu do tworzenia $module',

    'LBL_REPEAT_TYPE' => 'Rodzaj powt??rze??',
    'LBL_REPEAT_INTERVAL' => 'Interwa?? powtarzania',
    'LBL_REPEAT_DOW' => 'Powt??rz w',
    'LBL_REPEAT_UNTIL' => 'Powtarzaj a?? do',
    'LBL_REPEAT_COUNT' => 'Liczba powt??rze??',
    'LBL_REPEAT_PARENT_ID' => 'Powt??rz ID nadrz??dnego rekordu',
    'LBL_RECURRING_SOURCE' => 'Cykliczne ??r??d??o',

    'LBL_SYNCED_RECURRING_MSG' => 'Ta rozmowa telefoniczna pochodzi z innego systemu i zosta??a zsynchronizowana z SuiteCRM. Aby dokona?? zmian, przejd?? do rozmowy w systemie ??r??d??owym. Zmiany dokonane w innym systemie mog?? by?? zsynchronizowane z tym rekordem.',

    // for reminders
    'LBL_REMINDERS' => 'Przypomnienia',
    'LBL_REMINDERS_ACTIONS' => 'Akcje:',
    'LBL_REMINDERS_POPUP' => 'Wyskakuj??ce okienko',
    'LBL_REMINDERS_EMAIL' => 'Wy??lij zaproszenie',
    'LBL_REMINDERS_WHEN' => 'Kiedy:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Usu?? przypomnienie',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Dodaj Wszystkie Zaproszenia',
    'LBL_REMINDERS_ADD_REMINDER' => 'Dodaj przypomnienie',

    'LBL_RESCHEDULE' => 'Prze??????',
    'LBL_RESCHEDULE_COUNT' => 'Pr??by po????czenia',
    'LBL_RESCHEDULE_DATE' => 'Data',
    'LBL_RESCHEDULE_REASON' => 'Pow??d',
    'LBL_RESCHEDULE_ERROR1' => 'Wybierz poprawn?? dat??',
    'LBL_RESCHEDULE_ERROR2' => 'Prosz?? okre??li?? pow??d',
    'LBL_RESCHEDULE_PANEL' => 'Prze??????',
    'LBL_RESCHEDULE_HISTORY' => 'Historia Pr??b po????cze??',
    'LBL_CANCEL' => 'Anuluj',
    'LBL_SAVE' => 'Zapisz',

    'LBL_CALLS_RESCHEDULE' => 'Prze??o??enie rozmowy telefonicznej',
    'LBL_LIST_STATUS'=>'Status',
    'LBL_LIST_DATE_MODIFIED'=>'Data Modyfikacji:',
    'LBL_LIST_DUE_DATE'=>'Data Wykonania',
    'LBL_RESCHEDULED_BY'=>'przez',
);
