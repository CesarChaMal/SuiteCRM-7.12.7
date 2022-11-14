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
    'LBL_MODULE_NAME' => 'Błędy',
    'LBL_MODULE_TITLE' => 'Śledzenie błędów: Strona główna',
    'LBL_MODULE_ID' => 'Błedy',
    'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie błędów',
    'LBL_LIST_FORM_TITLE' => 'Lista błędów',
    'LBL_NEW_FORM_TITLE' => 'Nowy błąd',
    'LBL_SUBJECT' => 'Temat:',
    'LBL_NUMBER' => 'Numer:',
    'LBL_STATUS' => 'Status:',
    'LBL_PRIORITY' => 'Priorytet:',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_CONTACT_NAME' => 'Nazwa kontaktu:',
    'LBL_CONTACT_ROLE' => 'Profil uprawnień:',
    'LBL_LIST_NUMBER' => 'Numer',
    'LBL_LIST_SUBJECT' => 'Temat',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_PRIORITY' => 'Priotytet',
    'LBL_LIST_RESOLUTION' => 'Rozwiązanie',
    'LBL_LIST_LAST_MODIFIED' => 'Data modyfikacji',
    'LBL_INVITEE' => 'Kontakty',
    'LBL_TYPE' => 'Typ:',
    'LBL_LIST_TYPE' => 'Typ',
    'LBL_RESOLUTION' => 'Rozwiązanie:',
    'LBL_RELEASE' => 'Wydanie:',
    'LNK_NEW_BUG' => 'Zgłoś Błąd',
    'LNK_BUG_LIST' => 'Przeglądaj błędy',
    'ERR_DELETE_RECORD' => 'Aby usunąć błąd musisz określić numer wpisu.',
    'LBL_LIST_MY_BUGS' => 'Moje błędy',
    'LNK_IMPORT_BUGS' => 'Importuj błędy',
    'LBL_FOUND_IN_RELEASE' => 'Znalezione w wydaniu:',
    'LBL_FIXED_IN_RELEASE' => 'Naprawione w wydaniu:',
    'LBL_LIST_FIXED_IN_RELEASE' => 'Naprawione w wydaniu',
    'LBL_WORK_LOG' => 'Dziennik prac:',
    'LBL_SOURCE' => 'Źródło:',
    'LBL_PRODUCT_CATEGORY' => 'Kategoria:',

    'LBL_CREATED_BY' => 'Utworzone przez:',
    'LBL_MODIFIED_BY' => 'Ostatnio modyfikowane przez:',

    'LBL_LIST_EMAIL_ADDRESS' => 'Adres e-mail',
    'LBL_LIST_CONTACT_NAME' => 'Nazwa kontaktu',
    'LBL_LIST_ACCOUNT_NAME' => 'Nazwa kontrahenta',
    'LBL_LIST_PHONE' => 'Telefon',
    'NTC_DELETE_CONFIRMATION' => 'Czy na pewno chcesz usunąć ten kontakt z tego błedu?',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Śledzenie błędów',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Wydarzenia',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Kontrahenci',
    'LBL_CASES_SUBPANEL_TITLE' => 'Sprawy',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekty',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenty',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Przypisany użytkownik',
    'LBL_ASSIGNED_TO_NAME' => 'Przypisano do',

    'LBL_BUG_INFORMATION' => 'Przegląd', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

);
