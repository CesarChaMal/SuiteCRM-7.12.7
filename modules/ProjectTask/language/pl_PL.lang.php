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
    'LBL_MODULE_NAME' => 'Zadania projektu',
    'LBL_MODULE_TITLE' => 'Zadania Projektu: Strona g????wna',

    'LBL_ID' => 'ID:',
    'LBL_PROJECT_TASK_ID' => 'ID elementu Projektu:',
    'LBL_PROJECT_ID' => 'ID Projektu:',
    'LBL_DATE_ENTERED' => 'Data utworzenia:',
    'LBL_DATE_MODIFIED' => 'Data modyfikacji:',
    'LBL_ASSIGNED_USER_ID' => 'Przypisane do:',
    'LBL_MODIFIED_USER_ID' => 'ID u??ytkownika modyfikuj??cego:',
    'LBL_CREATED_BY' => 'Stworzony przez:',
    'LBL_NAME' => 'Nazwa:',
    'LBL_STATUS' => 'Status:',
    'LBL_DATE_DUE' => 'Data zako??czenia:',
    'LBL_TIME_DUE' => 'Czas trwania:',
    'LBL_PREDECESSORS' => 'Poprzednik:',
    'LBL_DATE_START' => 'Data rozpocz??cia:',
    'LBL_DATE_FINISH' => 'Data zako??czenia:',
    'LBL_TIME_START' => 'Czas rozpocz??cia:',
    'LBL_TIME_FINISH' => 'Czas zako??czenia:',
    'LBL_DURATION' => 'Czas trwania:',
    'LBL_DURATION_UNIT' => 'Jednostka czasu trwania:',
    'LBL_ACTUAL_DURATION' => 'Stan zaawansowania:',
    'LBL_PARENT_ID' => 'Realizacja:',
    'LBL_PARENT_TASK_ID' => 'ID nadrz??dnego elementu:',
    'LBL_PERCENT_COMPLETE' => 'Procent zaawansowania (%):',
    'LBL_PRIORITY' => 'Priorytet:',
    'LBL_DESCRIPTION' => 'Notatki:',
    'LBL_ORDER_NUMBER' => 'Kolejno????:',
    'LBL_TASK_NUMBER' => 'Numer Projektu:',
    'LBL_TASK_ID' => 'ID elementu:',
    'LBL_MILESTONE_FLAG' => 'Kamie?? milowy:',
    'LBL_ESTIMATED_EFFORT' => 'Spodziewana liczba roboczogodzin:',
    'LBL_ACTUAL_EFFORT' => 'Aktualna liczba roboczogodzin:',
    'LBL_UTILIZATION' => 'U??ycie (%):',
    'LBL_DELETED' => 'Usuni??ty:',
    'LBL_IMPORT_PROJECT_TASKS' => 'Importuj zadania projektu',

    'LBL_LIST_NAME' => 'Nazwa',
    'LBL_LIST_PARENT_NAME' => 'Projekt',
    'LBL_LIST_PERCENT_COMPLETE' => 'Zaawansowanie (%)',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Przypisano do',
    'LBL_LIST_DATE_DUE' => 'Okres trwania',
    'LBL_LIST_PRIORITY' => 'Priorytet',
    'LBL_LIST_CLOSE' => 'Zamknij',
    'LBL_PROJECT_NAME' => 'Nazwa Projektu',

    'LNK_NEW_PROJECT' => 'Utw??rz projekt',
    'LNK_PROJECT_LIST' => 'Lista projekt??w',
    'LNK_NEW_PROJECT_TASK' => 'Utw??rz zadanie Projektu',
    'LNK_PROJECT_TASK_LIST' => 'Elementy Projektu',

    'LBL_LIST_MY_PROJECT_TASKS' => 'Moje otwarte elementy Projektu',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'elementy Projektu',
    'LBL_NEW_FORM_TITLE' => 'Nowy element Projektu',

    'LBL_HISTORY_TITLE' => 'Historia',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Dzia??ania',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',

    'LBL_ASSIGNED_USER_NAME' => 'Przypisano do',
    'LBL_PARENT_NAME' => 'Nazwa Projektu',
    'LBL_EDITLAYOUT' => 'Edytuj Layout' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'O?? czasu',

    'LBL_SUBTASK' => 'Podzadanie',
    'LBL_LAG' => 'Op????nienie',
    'LBL_DAYS' => 'dni',
    'LBL_HOURS' => 'godziny',
    'LBL_RELATIONSHIP_TYPE' => 'Typ zale??no??ci',
);
