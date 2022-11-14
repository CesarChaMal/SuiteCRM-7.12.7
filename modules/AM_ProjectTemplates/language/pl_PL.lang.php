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
    'LBL_ASSIGNED_TO_ID' => 'ID przydzielonego użytkownika',
    'LBL_ASSIGNED_TO_NAME' => 'Menedżer Projektu',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data utworzenia',
    'LBL_DATE_MODIFIED' => 'Data Modyfikacji:',
    'LBL_MODIFIED' => 'Zmodyfikowane przez',
    'LBL_MODIFIED_NAME' => 'Nazwa użytkownika modyfikującego',
    'LBL_CREATED' => 'Utworzone przez',
    'LBL_DELETED' => 'Usunięte',
    'LBL_NAME' => 'Nazwa szablonu',
    'LBL_CREATED_USER' => 'Utworzony przez Użytkownika',
    'LBL_MODIFIED_USER' => 'Zmodyfikowany przez Użytkownika',
    'LBL_LIST_NAME' => 'Nazwa',
    'LBL_EDIT_BUTTON' => 'Edytuj',
    'LBL_REMOVE' => 'Usuń',
    'LBL_LIST_FORM_TITLE' => 'Lista szablonów projektu',
    'LBL_MODULE_NAME' => 'Szablony Projektu',
    'LBL_MODULE_TITLE' => 'Szablony Projektu',
    'LBL_HOMEPAGE_TITLE' => 'Moje szablony projektu',
    'LNK_NEW_RECORD' => 'Utwórz szablony projektu',
    'LNK_LIST' => 'Przeglądaj szablony projektu',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => 'Importuj Szablony Projektu',
    'LBL_SEARCH_FORM_TITLE' => 'Szukaj Szablonów Projektu',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Przeglądaj historię',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Działania',
    'LBL_NEW_FORM_TITLE' => 'Nowe szablony projektu',
    'LBL_STATUS' => 'Status',
    'LBL_PRIORITY' => 'Priorytet',
    'LBL_PROJECT_NAME' => 'Nazwa Projektu',
    'LBL_START_DATE' => 'Data Rozpoczęcia',
    'LBL_CREATE_PROJECT_TITLE' => 'Utworzyć nowy projekt z szablonu?',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'Szablony zadań',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => 'Użytkownicy',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => 'Kontakty',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => 'Wybierz Zasoby',
    'LBL_NEW_PROJECT_CREATED' => 'Nowy projekt został utworzony',
    'LBL_NEW_PROJECT' => 'Utwórz projekt',
    'LBL_CANCEL_PROJECT' => 'Anuluj',

    'LBL_SUBTASK' => 'Zadania',
    'LBL_MILESTONE_FLAG' => 'Kamień milowy',
    'LBL_RELATIONSHIP_TYPE' => 'Typ relacji',
    'LBL_LAG' => 'Opóźnienie',
    'LBL_DAYS' => 'dni',
    'LBL_HOURS' => 'godziny',
    'LBL_MONTHS' => 'Miesiące',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Zadania projektu',
    'LBL_VIEW_GANTT_TITLE' => 'Widok wykresu Gantta',
    'LBL_VIEW_GANTT_DURATION' => 'Czas trwania',
    'LBL_TASK_TITLE' => 'Edytuj zadanie',
    'LBL_DURATION_TITLE' => 'Edytuj czas trwania',
    'LBL_DESCRIPTION' => 'Notatki',
    'LBL_ASSIGNED_USER_ID' => 'Przypisane do:',

    'LBL_LIST_ASSIGNED_USER' => 'Menedżer Projektu',
    'LBL_UNASSIGNED' => 'Nieprzypisane',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Zasoby',
    'LBL_DELETE_TASK' => 'Usuń Zadanie',
    'LBL_VIEW_DETAIL' => 'Zobacz szczegóły',
    'LBL_ADD_NEW_TASK' => 'Dodaj Zadanie',
    'LBL_ASSIGNED_USER_NAME' => 'Menedżer projektu:',

    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Nazwa Etapu',
    'LBL_DURATION' => 'Czas trwania',
    'LBL_ACTUAL_DURATION' => 'Aktualny czas',
    'LBL_START' => 'Start',
    'LBL_FINISH' => 'Zakończ',
    'LBL_PREDECESSORS' => 'Poprzednie',
    'LBL_PERCENT_COMPLETE' => 'Zaawansowanie (%)',
    'LBL_EDIT_TASK_PROPERTIES' => 'Edytuj właściwości Zadania.',

    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Wziąć pod uwagę dni robocze',
    'LBL_COPY_ALL_TASKS' => 'Kopiuj wszystkie Zadania z zasobami',
    'LBL_COPY_SEL_TASKS' => 'Kopiuj wybrane Zadania z zasobami',
    'LBL_TOOLTIP_TITLE' => 'Podpowiedź',
    'LBL_TOOLTIP_TEXT' => 'Kopiuje wszystkie zadania z przydzielonymi użytkownikami',

    'LBL_EMAIL' => 'E-mail',
    'LBL_PHONE' => 'Telefon do biura:',
    'LBL_ADD_BUTTON' => 'Dodaj',
    'LBL_ADD_INVITEE' => 'Dodaj Zasób',
    'LBL_FIRST_NAME' => 'Imię',
    'LBL_LAST_NAME' => 'Nazwisko',
    'LBL_SEARCH_BUTTON' => 'Szukaj',
    'LBL_EMPTY_SEARCH_RESULT' => 'Przepraszam, nie znaleziono wyników. Proszę utworzyć uczestników poniżej.',
    'LBL_CREATE_INVITEE' => 'Utwórz Zasób',
    'LBL_CREATE_CONTACT' => 'Jako Kontakt',
    'LBL_CREATE_AND_ADD' => 'Utwórz i dodaj',
    'LBL_CANCEL_CREATE_INVITEE' => 'Anuluj',
    'LBL_NO_ACCESS' => 'Nie masz dostępu do tworzenia $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Lista Zasobów',
    'LBL_NONE' => 'Brak',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Szablony projektu: Projekt z tytuł projektu',


);
