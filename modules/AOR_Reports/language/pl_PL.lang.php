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
    'LBL_ASSIGNED_TO_ID' => 'ID przydzielonego u??ytkownika',
    'LBL_ASSIGNED_TO_NAME' => 'Przypisano do',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data utworzenia',
    'LBL_DATE_MODIFIED' => 'Data Modyfikacji:',
    'LBL_MODIFIED' => 'Zmodyfikowane przez',
    'LBL_MODIFIED_NAME' => 'Nazwa u??ytkownika modyfikuj??cego',
    'LBL_CREATED' => 'Utworzone przez',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_DELETED' => 'Usuni??te',
    'LBL_NAME' => 'Nazwa',
    'LBL_CREATED_USER' => 'Utworzony przez U??ytkownika',
    'LBL_MODIFIED_USER' => 'Zmodyfikowany przez U??ytkownika',
    'LBL_LIST_NAME' => 'Nazwa',
    'LBL_EDIT_BUTTON' => 'Edytuj',
    'LBL_REMOVE' => 'Usu??',
    'LBL_LIST_FORM_TITLE' => 'Lista Raport??w',
    'LBL_MODULE_NAME' => 'Raporty',
    'LBL_MODULE_TITLE' => 'Raporty',
    'LBL_HOMEPAGE_TITLE' => 'Moje raporty',
    'LNK_NEW_RECORD' => 'Utw??rz Raport',
    'LNK_LIST' => 'Przegl??daj raporty',
    'LBL_SEARCH_FORM_TITLE' => 'Szukaj Raport??w',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Dzia??ania',
    'LBL_NEW_FORM_TITLE' => 'Nowy Raport',
    'LBL_REPORT_MODULE' => 'Raport z Modu??u',
    'LBL_GRAPHS_PER_ROW' => 'Wykres??w w wierszu',
    'LBL_FIELD_LINES' => 'Wy??wietlane Pola',
    'LBL_ADD_FIELD' => 'Dodaj Pole',
    'LBL_CONDITION_LINES' => 'Warunki',
    'LBL_ADD_CONDITION' => 'Dodaj warunek',
    'LBL_EXPORT' => 'Eksportuj',
    'LBL_DOWNLOAD_PDF' => 'Pobierz plik PDF',
    'LBL_ADD_TO_PROSPECT_LIST' => 'Dodaj do listy docelowych odbiorc??w',
    'LBL_AOR_MODULETREE_SUBPANEL_TITLE' => 'Drzewko modu????w',
    'LBL_AOR_FIELDS_SUBPANEL_TITLE' => 'Pola',
    'LBL_AOR_CONDITIONS_SUBPANEL_TITLE' => 'Warunki',
    'LBL_TOTAL' => 'Razem',
    'LBL_AOR_CHARTS_SUBPANEL_TITLE' => 'Wykresy',
    'LBL_ADD_CHART' => 'Dodaj wykres',
    'LBL_ADD_PARENTHESIS' => 'Wstaw nawias',
    'LBL_CHART_TITLE' => 'Tytu??',
    'LBL_CHART_TYPE' => 'Typ',
    'LBL_CHART_X_FIELD' => 'O?? X',
    'LBL_CHART_Y_FIELD' => 'O?? Y',
    'LBL_AOR_REPORTS_DASHLET' => 'Raporty',
    'LBL_DASHLET_TITLE' => 'Tytu??',
    'LBL_DASHLET_REPORT' => 'Raport',
    'LBL_DASHLET_CHOOSE_REPORT' => 'Wybierz raport',
    'LBL_DASHLET_SAVE' => 'Zapisz',
    'LBL_DASHLET_CHARTS' => 'Wykresy',
    'LBL_DASHLET_ONLY_CHARTS' => 'Poka?? tylko wykresy',
    'LBL_UPDATE_PARAMETERS' => 'Aktualizuj',
    'LBL_PARAMETERS' => 'Parametry',
    'LBL_TOOLTIP_DRAG_DROP_ELEMS' => 'Przeci??gnij i upu???? elementy w obszarze p??l lub warunk??w',
    'LBL_MAIN_GROUPS' => 'G????wna Grupa:',
    'LBL_CHAR_UNNAMED_DEFAULT_TITLE' => 'Nienazwany Wykres',
    'LBL_REPORT' => 'Raport',
);
