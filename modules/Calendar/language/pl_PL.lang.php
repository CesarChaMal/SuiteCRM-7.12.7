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

    'LBL_SHAREDWEEK' => 'Wsp????dzielony tydzie??',
    'LBL_SHAREDMONTH' => 'Wsp????dzielony miesi??c',

    'LBL_MODULE_NAME' => 'Kalendarz',
    'LBL_MODULE_TITLE' => 'Kalendarz',
    'LNK_NEW_CALL' => 'Zaplanuj rozmow?? telefoniczn??',
    'LNK_NEW_MEETING' => 'Zaplanuj spotkanie',
    'LNK_NEW_TASK' => 'Utw??rz zadanie',
    'LNK_CALL_LIST' => 'Rozmowy telefoniczne',
    'LNK_MEETING_LIST' => 'Spotkania',
    'LNK_TASK_LIST' => 'Zadania',
    'LNK_TASK' => 'Zadania',
    'LNK_TASK_VIEW' => 'Podgl??d zadania',
    'LNK_EVENT' => 'Zdarzenie',
    'LNK_EVENT_VIEW' => 'Zobacz wydarzenie',
    'LNK_VIEW_CALENDAR' => 'Dzi??',
    'LNK_IMPORT_CALLS' => 'Importuj rozmowy telefoniczne',
    'LNK_IMPORT_MEETINGS' => 'Importuj spotkania',
    'LNK_IMPORT_TASKS' => 'Importuj zadania',
    'LBL_MONTH' => 'Miesi??c',
    'LBL_AGENDADAY' => 'Dzie??',
    'LBL_YEAR' => 'Rok',

    'LBL_AGENDAWEEK' => 'Tygodniowy',
    'LBL_PREVIOUS_MONTH' => 'Poprzedni miesi??c',
    'LBL_PREVIOUS_DAY' => 'Poprzedni dzie??',
    'LBL_PREVIOUS_YEAR' => 'Poprzedni rok',
    'LBL_PREVIOUS_WEEK' => 'Poprzedni tydzie??',
    'LBL_NEXT_MONTH' => 'Nast??pny miesi??c',
    'LBL_NEXT_DAY' => 'Nast??pny dzie??',
    'LBL_NEXT_YEAR' => 'Nast??pny rok',
    'LBL_NEXT_WEEK' => 'Nast??pny tydzie??',
    'LBL_AM' => 'AM',
    'LBL_PM' => 'PM',
    'LBL_SCHEDULED' => 'Zaplanowany',
    'LBL_BUSY' => 'Zaj??ty',
    'LBL_CONFLICT' => 'Konflikt',
    'LBL_USER_CALENDARS' => 'Kalendarze u??ytkownik??w',
    'LBL_SHARED' => 'Wsp????dzielone',
    'LBL_PREVIOUS_SHARED' => 'Poprzedni',
    'LBL_NEXT_SHARED' => 'Nast??pny',
    'LBL_SHARED_CAL_TITLE' => 'Wsp????dzielony kalendarz',
    'LBL_USERS' => 'U??ytkownik',
    'LBL_REFRESH' => 'Od??wie??',
    'LBL_EDIT_USERLIST' => 'Lista U??ytkownik??w',
    'LBL_SELECT_USERS' => 'Wybierz u??ytkownik??w dla wy??wietlenia kalendarza',
    'LBL_FILTER_BY_TEAM' => 'Filtruj list?? u??ytkownik??w wed??ug zespo??u:',
    'LBL_ASSIGNED_TO_NAME' => 'Przypisano do',
    'LBL_DATE' => 'Data i Czas Rozpocz??cia',
    'LBL_CREATE_MEETING' => 'Zaplanuj Spotkanie',
    'LBL_CREATE_CALL' => 'Zaplanuj rozmow?? telefoniczn??',
    'LBL_HOURS_ABBREV' => 'godz.',
    'LBL_MINS_ABBREV' => 'min.',


    'LBL_YES' => 'Tak',
    'LBL_NO' => 'Nie',
    'LBL_SETTINGS' => 'Ustawienia',
    'LBL_CREATE_NEW_RECORD' => 'Utw??rz wydarzenie',
    'LBL_LOADING' => '??adowanie...',
    'LBL_SAVING' => 'Zapisywanie...',
    'LBL_SENDING_INVITES' => 'Zapisywanie i wysy??anie zaprosze??...',
    'LBL_CONFIRM_REMOVE' => 'Czy na pewno chcesz usun???? ten wpis?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Czy na pewno chcesz usun???? wszystkie cykliczne wpisy?',
    'LBL_EDIT_RECORD' => 'Edytuj wydarzenie',
    'LBL_ERROR_SAVING' => 'B????d przy zapisywaniu',
    'LBL_ERROR_LOADING' => 'B????d podczas ??adowania',
    'LBL_GOTO_DATE' => 'Id?? do daty',
    'NOTICE_DURATION_TIME' => 'Czas trwania musi by?? wi??kszy ni?? 0',
    'LBL_STYLE_BASIC' => 'Podstawowy', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'Zaawansowane', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => 'Brak dopasowania do pola: Przypisano do',
    'LBL_SUBJECT' => 'Temat',
    'LBL_DURATION' => 'Czas trwania',
    'LBL_STATUS' => 'Status',
    'LBL_PRIORITY' => 'Priorytet',

    'LBL_SETTINGS_TITLE' => 'Ustawienia',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Wy??wietlanie szczelin czasowych w widoku dziennym i tygodniowym:',
    'LBL_SETTINGS_TIME_STARTS' => 'Czas rozpocz??cia:',
    'LBL_SETTINGS_TIME_ENDS' => 'Czas zako??czenia:',
    'LBL_SETTINGS_CALLS_SHOW' => 'Poka?? rozmowy telefoniczne:',
    'LBL_SETTINGS_TASKS_SHOW' => 'Poka?? zadania:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Poka?? zako??czone spotkania, rozmowy telefoniczne i zadania:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'Separuj wsp????dzielony kalendarz:',

    'LBL_SAVE_BUTTON' => 'Zapisz',
    'LBL_DELETE_BUTTON' => 'Usu??',
    'LBL_APPLY_BUTTON' => 'Zastosuj',
    'LBL_SEND_INVITES' => 'Zapisz i wy??lij zaproszenia',
    'LBL_CANCEL_BUTTON' => 'Anuluj',
    'LBL_CLOSE_BUTTON' => 'Zamknij',

    'LBL_GENERAL_TAB' => 'Szczeg????y',
    'LBL_PARTICIPANTS_TAB' => 'Zaproszenia',
    'LBL_REPEAT_TAB' => 'Cykliczno????',

    'LBL_REPEAT_TYPE' => 'Powt??rz',
    'LBL_REPEAT_INTERVAL' => 'Ka??dy',
    'LBL_REPEAT_END' => 'Zako??cz',
    'LBL_REPEAT_END_AFTER' => 'przed',
    'LBL_REPEAT_OCCURRENCES' => 'powt??rzenia',
    'LBL_REPEAT_END_BY' => 'Przez',
    'LBL_REPEAT_DOW' => 'W????czony',
    'LBL_REPEAT_UNTIL' => 'Powtarzaj a?? do',
    'LBL_REPEAT_COUNT' => 'Liczba powt??rze??',
    'LBL_REPEAT_LIMIT_ERROR' => 'Twoje ????danie mia??o utworzy?? wi??cej ni?? $limit spotka??.',

    'LBL_EDIT_ALL_RECURRENCES' => 'Edytuj wszystkie powt??rzenia',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Usu?? wszystkie powt??rzenia',

    'LBL_DATE_END_ERROR' => 'Data zako??czenia wypada przed dat?? rozpocz??cia',
    'ERR_YEAR_BETWEEN' => 'Przepraszamy, kalendarz nie obs??uguje roku, kt??ry wprowadzono<br> Nale??y wybra?? rok pomi??dzy 1970 a 2037',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: nie zdefiniowane dla tego widoku',
    'LBL_NO_ITEMS_MOBILE' => 'Tw??j kalendarz jest pusty w tym tygodniu.',
    'LBL_GENERAL_SETTINGS' => 'Ustawienia og??lne',
    'LBL_COLOR_SETTINGS' => 'Ustawienia koloru',
    'LBL_MODULE' => 'Modu??',
    'LBL_BODY' => 'Tre????',
    'LBL_BORDER' => 'Obramowanie',
    'LBL_TEXT' => 'Tekst',
);


$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            '0' => "Niedziela",
            '1' => "Poniedzia??ek",
            '2' => "Wtorek",
            '3' => "??roda",
            '4' => "Czwartek",
            '5' => "Pi??tek",
            '6' => "Sobota",
        ),
    'dom_cal_weekdays_long' =>
        array(
            '0' => "Niedziela",
            '1' => "Poniedzia??ek",
            '2' => "Wtorek",
            '3' => "??roda",
            '4' => "Czwartek",
            '5' => "Pi??tek",
            '6' => "Sobota",
        ),
    'dom_cal_month' =>
        array(
            '0' => "",
            '1' => "Sty",
            '2' => "Lut",
            '3' => "Mar",
            '4' => "Kwi",
            '5' => "Maj",
            '6' => "Cze",
            '7' => "Lip",
            '8' => "Sie",
            '9' => "Wrz",
            '10' => "Pa??",
            '11' => "Lis",
            '12' => "Gru",
        ),
    'dom_cal_month_long' =>
        array(
            '0' => "",
            '1' => "Stycze??",
            '2' => "Luty",
            '3' => "Marzec",
            '4' => "Kwiecie??",
            '5' => "Maj",
            '6' => "Czerwiec",
            '7' => "Lipiec",
            '8' => "Sierpie??",
            '9' => "Wrzesie??",
            '10' => "Pa??dziernik",
            '11' => "Listopad",
            '12' => "Grudzie??",
        ),
);
