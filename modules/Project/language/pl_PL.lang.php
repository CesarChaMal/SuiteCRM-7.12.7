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
    'LBL_MODULE_NAME' => 'Projekty',
    'LBL_MODULE_TITLE' => 'Projekty: Strona g????wna',
    'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie projekt??w',
    'LBL_LIST_FORM_TITLE' => 'Lista projekt??w',
    'LBL_HISTORY_TITLE' => 'Historia',
    'LBL_ID' => 'Id:',
    'LBL_DATE_ENTERED' => 'Data utworzenia:',
    'LBL_DATE_MODIFIED' => 'Data modyfikacji:',
    'LBL_ASSIGNED_USER_ID' => 'Przypisane do:',
    'LBL_ASSIGNED_USER_NAME' => 'Menad??er projektu:',
    'LBL_MODIFIED_USER_ID' => 'ID U??ytkownika modyfikuj??cego:',
    'LBL_CREATED_BY' => 'Utworzone przez:',
    'LBL_NAME' => 'Nazwa:',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_DELETED' => 'Usuni??ty:',
    'LBL_DATE' => 'Data:',
    'LBL_DATE_START' => 'Data rozpocz??cia:',
    'LBL_DATE_END' => 'Data zako??czenia:',
    'LBL_PRIORITY' => 'Priorytet:',
    'LBL_LIST_NAME' => 'Nazwa',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Ca??kowita liczba roboczogodzin:',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Aktualna liczba roboczogodzin:',
    'LBL_LIST_END_DATE' => 'Data zako??czenia',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekty',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Zadania projektu',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Szanse sprzeda??y',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'Brak',
    'LBL_ALL_PROJECTS' => 'Wszystkie projekty',
    'LBL_ALL_USERS' => 'Wszyscy u??ytkownicy',
    'LBL_ALL_CONTACTS' => 'Wszystkie Kontakty',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Nowy projekt',
    'LNK_NEW_PROJECT' => 'Utw??rz projekt',
    'LNK_PROJECT_LIST' => 'Przegl??daj list?? projekt??w',
    'LNK_NEW_PROJECT_TASK' => 'Utw??rz zadanie projektu',
    'LNK_PROJECT_TASK_LIST' => 'Przegl??daj list?? zada?? projektu',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projekty',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Wydarzenia',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Kontrahenci',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Szanse Sprzeda??y',
    'LBL_CASES_SUBPANEL_TITLE' => 'Sprawy',
    'LBL_BUGS_SUBPANEL_TITLE' => 'B????dy',
    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Nazwa zadania',
    'LBL_DURATION' => 'Czas trwania',
    'LBL_ACTUAL_DURATION' => 'Aktualny czas',
    'LBL_START' => 'Start',
    'LBL_FINISH' => 'Koniec',
    'LBL_PREDECESSORS' => 'Poprzednie',
    'LBL_PERCENT_COMPLETE' => 'Zaawansowanie (%)',
    'LBL_MORE' => 'Wi??cej...',
    'LBL_OPPORTUNITIES' => 'Szanse Sprzeda??y',
    'LBL_NEXT_WEEK' => 'Nast??pny',
    'LBL_PROJECT_INFORMATION' => 'Przegl??d projektu',
    'LBL_EDITLAYOUT' => 'Edycja wygladu' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Zadania projektu',
    'LBL_VIEW_GANTT_TITLE' => 'Widok wykresu Gantta',
    'LBL_VIEW_GANTT_DURATION' => 'Czas trwania',
    'LBL_TASK_TITLE' => 'Edytuj zadanie',
    'LBL_DURATION_TITLE' => 'Edytuj czas trwania',
    'LBL_LAG' => 'Op????nienie',
    'LBL_DAYS' => 'dni',
    'LBL_HOURS' => 'godzin??',
    'LBL_MONTHS' => 'Miesi??ce',
    'LBL_SUBTASK' => 'Zadania',
    'LBL_MILESTONE_FLAG' => 'Kamie?? milowy',
    'LBL_ADD_NEW_TASK' => 'Dodaj nowe zadanie',
    'LBL_DELETE_TASK' => 'Usu?? Zadanie',
    'LBL_EDIT_TASK_PROPERTIES' => 'Edytowanie w??a??ciwo??ci zadania.',
    'LBL_PARENT_TASK_ID' => 'Identyfikator zadania nadrz??dnego',
    'LBL_RESOURCE_CHART' => 'Kalendarz zasob??w',
    'LBL_RELATIONSHIP_TYPE' => 'Typ relacji',
    'LBL_ASSIGNED_TO' => 'Mened??er Projektu',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Szablon projektu',
    'LBL_STATUS' => 'Status:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Mened??er Projektu',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Projekty',
    'LBL_TOOLTIP_TASK_NAME' => 'Nazwa Etapu',
    'LBL_TOOLTIP_TITLE' => 'Zadania na ten dzie??',
    'LBL_TOOLTIP_TASK_DURATION' => 'Czas trwania',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Zas??b jest U??ytkownikiem',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Zas??b jest Kontaktem',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Poprzedni miesi??c',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Przysz??y miesi??c',
    'LBL_RESOURCE_CHART_WEEK' => 'Tygodniowy',
    'LBL_RESOURCE_CHART_DAY' => 'Dzienny',
    'LBL_RESOURCE_CHART_WARNING' => '??adne zasoby nie zosta??y przypisane do projektu.',
    'LBL_PROJECT_DELETE_MSG' => 'Jeste?? pewien, ??e chcesz usun???? ten Projekt i wszystkie jego Zadania?',
    'LBL_LIST_MY_PROJECT' => 'Moje projekty',
    'LBL_LIST_ASSIGNED_USER' => 'Mened??er Projektu',
    'LBL_UNASSIGNED' => 'Nieprzypisane',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Zasoby',

    'LBL_EMAIL' => 'E-mail',
    'LBL_PHONE' => 'Telefon do biura:',
    'LBL_ADD_BUTTON' => 'Dodaj',
    'LBL_ADD_INVITEE' => 'Dodaj Zas??b',
    'LBL_FIRST_NAME' => 'Imi??',
    'LBL_LAST_NAME' => 'Nazwisko',
    'LBL_SEARCH_BUTTON' => 'Szukaj',
    'LBL_EMPTY_SEARCH_RESULT' => 'Przepraszam, nie znaleziono wynik??w. Prosz?? utworzy?? uczestnik??w poni??ej.',
    'LBL_CREATE_INVITEE' => 'Utw??rz Zas??b',
    'LBL_CREATE_CONTACT' => 'Jako Kontakt',
    'LBL_CREATE_AND_ADD' => 'Utw??rz i dodaj',
    'LBL_CANCEL_CREATE_INVITEE' => 'Anuluj',
    'LBL_NO_ACCESS' => 'Nie masz dost??pu do tworzenia $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Lista Zasob??w',
    'LBL_REMOVE' => 'Usu??',
    'LBL_VIEW_DETAIL' => 'Zobacz szczeg????y',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Wzi???? pod uwag?? dni robocze',

    'LBL_IMPORT_PROJECTS' => 'Importuj projekty',
    
    'LBL_PROJECTS_SEARCH' => 'Szukaj projekt??w',
    'LBL_USERS_SEARCH' => 'Szukaj u??ytkownik??w',
    'LBL_CONTACTS_SEARCH' => 'Wybierz Kontakty',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Szukaj',

    'LBL_CHART_TYPE' => 'Typ',
    'LBL_CHART_WEEKLY' => 'Tygodniowo',
    'LBL_CHART_MONTHLY' => 'Miesi??czny',
    'LBL_CHART_QUARTERLY' => 'Kwartalny',

    'LBL_RESOURCE_CHART_MONTH' => 'Miesi??czny',
    'LBL_RESOURCE_CHART_QUARTER' => 'Kwarta??',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Kontakty projektu z tytu??u kontakt??w',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Szablony projektu: Projekt z tytu?? projektu',
    'LBL_AOS_QUOTES_PROJECT' => 'Oferty: Projekt',

);
