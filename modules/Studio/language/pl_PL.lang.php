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
    'LBL_EDIT_LAYOUT' => 'Edytuj Uk??ad',
    'LBL_EDIT_FIELDS' => 'Edytuj Pola Osobiste',
    'LBL_SELECT_FILE' => 'Wybierz Plik',
    'LBL_MODULE_TITLE' => 'Edytor modu????w',
    'LBL_TOOLBOX' => 'Narz??dzia',
    'LBL_SUITE_FIELDS_STAGE' => 'SuiteCRM pola (kliknij elementy aby je doda?? do obszaru tymczasowego)',
    'LBL_VIEW_SUITE_FIELDS' => 'Przegl??daj pola SuiteCRM',
    'LBL_FAILED_TO_SAVE' => 'Zapisywanie Nie powiod??o si??',
    'LBL_CONFIRM_UNSAVE' => 'Wszystkie zmiany zostan?? pomini??te. Czy na pewno chcesz kontynuowa???',
    'LBL_PUBLISHING' => 'Publikowanie...',
    'LBL_PUBLISHED' => 'Opublikowany',
    'LBL_FAILED_PUBLISHED' => 'Udost??pnianie Nie Powiod??o si?? ',
    'LBL_DROP_HERE' => '[Upu???? tutaj]',

//CUSTOM FIELDS
    'LBL_NAME' => 'Nazwa',
    'LBL_LABEL' => 'Etykieta',
    'LBL_MASS_UPDATE' => 'Masowa Aktualizacja',
    'LBL_DEFAULT_VALUE' => 'Warto???? domy??lna',
    'LBL_REQUIRED' => 'Wymagane',
    'LBL_DATA_TYPE' => 'Typ',


    'LBL_HISTORY' => 'Historia',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => '<h2>Witamy w Edytorze modu????w!</h2><br> Co chcia??by?? dzi?? zrobi???<br><b> Wybierz poni??sze opcje.</b>',
    'LBL_SW_EDIT_MODULE' => 'Edytuj Modu??',
    'LBL_SW_EDIT_DROPDOWNS' => 'Edytuj Listy Drop-Down',
    'LBL_SW_EDIT_TABS' => 'Konfiguruj Zak??adki',
    'LBL_SW_RENAME_TABS' => 'Zmie?? Nazwy Zak??adek',
    'LBL_SW_EDIT_GROUPTABS' => 'Konfiguruj Zak??adki Grupowe ',
    'LBL_SW_EDIT_PORTAL' => 'Edytuj Portal',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => 'Napraw Pola Osobiste',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => 'Przenie?? Pola Osobiste',

//Manager Backups History
    'LBL_MB_DELETE' => 'Usu??',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => 'Utw??rz List?? Drop Down',
    'LBL_DROPDOWN_NAME' => 'Nazwa Dropdown:',
    'LBL_DROPDOWN_LANGUAGE' => 'J??zyk Dropdown:',
    'LBL_TABGROUP_LANGUAGE' => 'J??zyk:',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => 'Wy??wietl Warto????',
    'LBL_DD_DATABASEVALUE' => 'Warto??ci Bazy Danych',
    'LBL_DD_ALL' => 'Wszystko',

//BUTTONS
    'LBL_BTN_SAVE' => 'Zapisz',
    'LBL_BTN_CANCEL' => 'Anuluj',
    'LBL_BTN_SAVEPUBLISH' => 'Zapisz i zainstaluj',
    'LBL_BTN_HISTORY' => 'Historia',
    'LBL_BTN_ADDROWS' => 'Dodaj Wiersze',
    'LBL_BTN_UNDO' => 'Cofnij',
    'LBL_BTN_REDO' => 'Przywr????',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Dodaj Pole Osobiste',
    'LBL_BTN_TABINDEX' => 'Edytuj Tabbing Order',

//TABS
    'LBL_MODULES' => 'Modu??y',
    'LBL_MODULE_NAME' => 'Administrator',
    'LBL_CONFIGURE_GROUP_TABS' => 'Konfiguracja filtr??w menu modu????w',
    'LBL_GROUP_TAB_WELCOME' => 'Poni??sze filtry b??d?? wy??wietlane na li??cie Wi??cej w menu modu??u aby u??ytkownicy mogli przegl??da?? grupy zak??adek w menu. Przeci??gnij i upu???? modu??y do i z filtr??w. Uwaga: puste filtry nie b??d?? wy??wietlane w menu.',
    'LBL_RENAME_TAB_WELCOME' => 'Aby zmieni?? nazw?? zak??adki, kliknij na dowoln?? zak??adk??, wy??wietlisz jej zawarto???? w tabelce poni??ej.',
    'LBL_DELETE_MODULE' => 'Usu??&nbsp;modu??&nbsp;<br />z&nbsp;filtra',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Wybierz dost??pny j??zyk, edytuj etykiety grupy i kliknij Zapisz i Udost??pnij, aby zastosowa?? etykiety w wybranym j??zyku.',
    'LBL_ADD_GROUP' => 'Dodaj Filtr',
    'LBL_NEW_GROUP' => 'Nowa Grupa',
    'LBL_RENAME_TABS' => 'Zmie?? Nazwy Zak??adek',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "B????d: Niewa??ny Klucz: [']",

//SUGAR PORTAL
    'LBL_SAVE' => 'Zapisz' /*for 508 compliance fix*/,
    'LBL_UNDO' => 'Cofnij' /*for 508 compliance fix*/,
    'LBL_REDO' => 'Przywr????' /*for 508 compliance fix*/,
    'LBL_INLINE' => 'W linii' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Usu??' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => 'Dodaj Pole' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => 'Maksymalizuj' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => 'Minimalizuj' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => 'publikuj' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => 'Dodaj Wiersze' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => 'Dodaj Pole' /*for 508 compliance fix*/,
    'LBL_EDIT' => 'Edytuj' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => 'Wybierz j??zyk do edycji.',
    'LBL_SINGULAR' => 'Pojedyncza Etykieta',
    'LBL_PLURAL' => 'Liczba mnoga dla etykiety',
    'LBL_RENAME_MOD_SAVE_HELP' => 'Kliknij <b>Zapisz</b> aby zatwierdzi?? zmiany.'

);
