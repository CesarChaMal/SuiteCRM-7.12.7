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
    'LBL_MODULE_NAME' => 'Aktywno??ci',
    'LBL_MODULE_TITLE' => 'Aktywno??ci: Strona g????wna',
    'LBL_SEARCH_FORM_TITLE' => 'Wyszukaj dzia??ania',
    'LBL_LIST_FORM_TITLE' => 'Lista dzia??a??',
    'LBL_LIST_SUBJECT' => 'Temat',
    'LBL_OVERVIEW' => 'Przegl??d', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_TASKS' => 'Zadania', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETINGS' => 'Spotkania', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CALLS' => 'Rozmowy telefoniczne', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EMAILS' => 'Wiadomo??ci e-mail', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_NOTES' => 'Notatki', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_PRINT' => 'Drukuj', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETING_TYPE' => 'Spotkania',
    'LBL_CALL_TYPE' => 'Rozmowy telefoniczne',
    'LBL_EMAIL_TYPE' => 'E-mail',
    'LBL_NOTE_TYPE' => 'Notatki',
    'LBL_DATA_TYPE_START' => 'Start:',
    'LBL_DATA_TYPE_SENT' => 'Wys??ano:',
    'LBL_DATA_TYPE_MODIFIED' => 'Zmodyfikowano:',
    'LBL_LIST_CONTACT' => 'Kontakt',
    'LBL_LIST_RELATED_TO' => 'Powi??zany z',
    'LBL_LIST_DATE' => 'Data',
    'LBL_LIST_CLOSE' => 'Zamknij',
    'LBL_SUBJECT' => 'Temat:',
    'LBL_STATUS' => 'Status:',
    'LBL_LOCATION' => 'Lokalizacja:',
    'LBL_DATE_TIME' => 'Data i Czas Rozpocz??cia: ',
    'LBL_DATE' => 'Data Rozpocz??cia:',
    'LBL_TIME' => 'Czas Rozpocz??cia:',
    'LBL_DURATION' => 'Czas trwania:',
    'LBL_HOURS_MINS' => '(godziny/minuty)',
    'LBL_CONTACT_NAME' => 'Nazwa kontaktu: ',
    'LBL_DESCRIPTION' => 'Opis:',
    'LNK_NEW_CALL' => 'Utw??rz rozmow?? telefoniczn??',
    'LNK_NEW_MEETING' => 'Zaplanuj Spotkanie',
    'LNK_NEW_TASK' => 'Utw??rz Zadanie',
    'LNK_NEW_NOTE' => 'Utw??rz Notatk?? lub Za????cznik',
    'LNK_NEW_EMAIL' => 'Utw??rz Zarchiwizowan?? Wiadomo????',
    'LNK_CALL_LIST' => 'Przegl??daj rozmowy telefoniczne',
    'LNK_MEETING_LIST' => 'Przegl??daj spotkania',
    'LNK_TASK_LIST' => 'Przegl??daj zadania',
    'LNK_NOTE_LIST' => 'Przegl??daj notatki',
    'LBL_DELETE_ACTIVITY' => 'Czy na pewno chcesz usun???? to wydarzenie?',
    'ERR_DELETE_RECORD' => 'Aby usun???? Kontrahenta musisz okre??li?? numer wpisu.',
    'LBL_INVITEE' => 'Zaproszenia',
    'LBL_LIST_DIRECTION' => 'Kierunek',
    'LBL_DIRECTION' => 'Kierunek',
    'LNK_NEW_APPOINTMENT' => 'Nowe Spotkanie',
    'LNK_VIEW_CALENDAR' => 'Zobacz kalendarz',
    'LBL_OPEN_ACTIVITIES' => 'Otwarte Dzia??ania',
    'LBL_HISTORY' => 'Historia',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'Utw??rz Zadanie',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'Utw??rz Zadanie',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Zaplanuj Spotkanie',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Zaplanuj Spotkanie',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Zaplanuj rozmow?? telefoniczn??',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'Utw??rz Notatk?? lub Za????cznik',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'Utw??rz Notatk?? lub Za????cznik',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archiwum e-mail',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archiwum e-mail',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_DUE_DATE' => 'Data Wykonania',
    'LBL_LIST_LAST_MODIFIED' => 'Ostatnia Modyfikacja',
    'LNK_IMPORT_CALLS' => 'Importuj rozmowy telefoniczne',
    'LNK_IMPORT_MEETINGS' => 'Importuj spotkania',
    'LNK_IMPORT_TASKS' => 'Importuj zadania',
    'LNK_IMPORT_NOTES' => ' Importuj Zapis',
    'LBL_ACCEPT_THIS' => 'Akceptowa???',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Otwarte Dzia??ania',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'U??ytkownik Przypisany',

    'LBL_ACCEPT' => 'Akceptowa??' /*for 508 compliance fix*/,
);
