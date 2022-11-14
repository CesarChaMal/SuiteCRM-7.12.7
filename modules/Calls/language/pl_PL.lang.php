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
    'LBL_MODULE_TITLE' => 'Rozmowy Telefoniczne: Strona Główna',
    'LBL_SEARCH_FORM_TITLE' => 'Wyszukaj Rozmę telefoniczną',
    'LBL_LIST_FORM_TITLE' => 'Lista Rozmów telefonicznych',
    'LBL_NEW_FORM_TITLE' => 'Zaplanuj Rozmowę',
    'LBL_LIST_CLOSE' => 'Zamknij',
    'LBL_LIST_SUBJECT' => 'Temat',
    'LBL_LIST_CONTACT' => 'Kontakt',
    'LBL_LIST_RELATED_TO' => 'Powiązany z',
    'LBL_LIST_RELATED_TO_ID' => 'Powiązane z Id',
    'LBL_LIST_DATE' => 'Data Rozpoczęcia',
    'LBL_LIST_DIRECTION' => 'Kierunek',
    'LBL_SUBJECT' => 'Temat:',
    'LBL_REMINDER' => 'Przypomnienie:',
    'LBL_CONTACT_NAME' => 'Kontakt:',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_STATUS' => 'Status:',
    'LBL_DIRECTION' => 'Kierunek:',
    'LBL_DATE' => 'Data Rozpoczęcia:',
    'LBL_DURATION' => 'Czas trwania:',
    'LBL_DURATION_HOURS' => 'CzasTrwania (godziny):',
    'LBL_DURATION_MINUTES' => 'Czas trwania (minuty):',
    'LBL_HOURS_MINUTES' => '(godziny/minuty)',
    'LBL_DATE_TIME' => 'Data i Czas Rozpoczęcia: ',
    'LBL_TIME' => 'Czas Rozpoczęcia:',
    'LBL_HOURS_ABBREV' => 'godz.',
    'LBL_MINSS_ABBREV' => 'min.',
    'LNK_NEW_CALL' => 'Utwórz rozmowę telefoniczną',
    'LNK_NEW_MEETING' => 'Zaplanuj Spotkanie',
    'LNK_CALL_LIST' => 'Przeglądaj rozmowy telefoniczne',
    'LNK_IMPORT_CALLS' => 'Importuj rozmowy telefoniczne',
    'ERR_DELETE_RECORD' => 'Numer rekordu musi być określony do usunięcia Kontrahenta.',
    'LBL_INVITEE' => 'Zaproszenia',
    'LBL_RELATED_TO' => 'Powiązany z: ',
    'LNK_NEW_APPOINTMENT' => 'Utwórz Spotkanie',
    'LBL_SCHEDULING_FORM_TITLE' => 'Harmonogram',
    'LBL_ADD_INVITEE' => 'Dodaj Zaproszenia',
    'LBL_NAME' => 'Nazwa',
    'LBL_FIRST_NAME' => 'Imię',
    'LBL_LAST_NAME' => 'Nazwisko',
    'LBL_EMAIL' => 'E-mail',
    'LBL_PHONE' => 'Telefon',
    'LBL_REMINDER_POPUP' => 'Wyskakujące okienko',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Wyślij wszystkie zaproszenia',
    'LBL_EMAIL_REMINDER' => 'Wyslij przypomnienie',
    'LBL_EMAIL_REMINDER_TIME' => 'Czas e-maila z przypomnieniem',
    'LBL_SEND_BUTTON_TITLE' => 'Zapisz i wyślij zaproszenia',
    'LBL_SEND_BUTTON_LABEL' => 'Zapisz i wyślij zaproszenia',
    'LBL_DATE_END' => 'Data Zakończenia',
    'LBL_REMINDER_TIME' => 'Czas Przypomnienia',
    'LBL_EMAIL_REMINDER_SENT' => 'E-mail z przypomnieniem wysłany',
    'LBL_SEARCH_BUTTON' => 'Wyszukaj',
    'LBL_ADD_BUTTON' => 'Dodaj',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Rozmowy Telefoniczne',
    'LNK_SELECT_ACCOUNT' => 'Wybierz kontrahenta',
    'LNK_NEW_ACCOUNT' => 'Nowy kontrahent',
    'LNK_NEW_OPPORTUNITY' => 'Nowa Szansa sprzedaży',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Potencjalni Klienci',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_USERS_SUBPANEL_TITLE' => 'Użytkownicy',
    'LBL_OUTLOOK_ID' => 'Outlook ID',
    'LBL_MEMBER_OF' => 'Członek',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notatki',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Przypisano do',
    'LBL_LIST_MY_CALLS' => 'Moje Rozmowy telefoniczne',
    'LBL_ASSIGNED_TO_NAME' => 'Przypisano do',
    'LBL_ASSIGNED_TO_ID' => 'Użytkownik Przypisany',
    'NOTICE_DURATION_TIME' => 'Czas trwania musi być większy niż 0',
    'LBL_CALL_INFORMATION' => 'Przegląd', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Usuń',
    'LBL_ACCEPT_STATUS' => 'Status akceptacji',
    'LBL_ACCEPT_LINK' => 'Akceptuj link',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Utwórz uczestników',
    'LBL_CREATE_CONTACT' => 'Jako Kontakt',
    'LBL_CREATE_LEAD' => 'Jako Potencjalny Klient',
    'LBL_CREATE_AND_ADD' => 'Utwórz i dodaj',
    'LBL_CANCEL_CREATE_INVITEE' => 'Anuluj',
    'LBL_EMPTY_SEARCH_RESULT' => 'Przepraszam, nie znaleziono wyników. Proszę utworzyć uczestników poniżej.',
    'LBL_NO_ACCESS' => 'Nie masz dostępu do tworzenia $module',

    'LBL_REPEAT_TYPE' => 'Rodzaj powtórzeń',
    'LBL_REPEAT_INTERVAL' => 'Interwał powtarzania',
    'LBL_REPEAT_DOW' => 'Powtórz w',
    'LBL_REPEAT_UNTIL' => 'Powtarzaj aż do',
    'LBL_REPEAT_COUNT' => 'Liczba powtórzeń',
    'LBL_REPEAT_PARENT_ID' => 'Powtórz ID nadrzędnego rekordu',
    'LBL_RECURRING_SOURCE' => 'Cykliczne źródło',

    'LBL_SYNCED_RECURRING_MSG' => 'Ta rozmowa telefoniczna pochodzi z innego systemu i została zsynchronizowana z SuiteCRM. Aby dokonać zmian, przejdź do rozmowy w systemie źródłowym. Zmiany dokonane w innym systemie mogą być zsynchronizowane z tym rekordem.',

    // for reminders
    'LBL_REMINDERS' => 'Przypomnienia',
    'LBL_REMINDERS_ACTIONS' => 'Akcje:',
    'LBL_REMINDERS_POPUP' => 'Wyskakujące okienko',
    'LBL_REMINDERS_EMAIL' => 'Wyślij zaproszenie',
    'LBL_REMINDERS_WHEN' => 'Kiedy:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Usuń przypomnienie',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Dodaj Wszystkie Zaproszenia',
    'LBL_REMINDERS_ADD_REMINDER' => 'Dodaj przypomnienie',

    'LBL_RESCHEDULE' => 'Przełóż',
    'LBL_RESCHEDULE_COUNT' => 'Próby połączenia',
    'LBL_RESCHEDULE_DATE' => 'Data',
    'LBL_RESCHEDULE_REASON' => 'Powód',
    'LBL_RESCHEDULE_ERROR1' => 'Wybierz poprawną datę',
    'LBL_RESCHEDULE_ERROR2' => 'Proszę określić powód',
    'LBL_RESCHEDULE_PANEL' => 'Przełóż',
    'LBL_RESCHEDULE_HISTORY' => 'Historia Prób połączeń',
    'LBL_CANCEL' => 'Anuluj',
    'LBL_SAVE' => 'Zapisz',

    'LBL_CALLS_RESCHEDULE' => 'Przełożenie rozmowy telefonicznej',
    'LBL_LIST_STATUS'=>'Status',
    'LBL_LIST_DATE_MODIFIED'=>'Data Modyfikacji:',
    'LBL_LIST_DUE_DATE'=>'Data Wykonania',
    'LBL_RESCHEDULED_BY'=>'przez',
);
