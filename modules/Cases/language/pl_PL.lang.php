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
    'ERR_DELETE_RECORD' => 'Numer rekordu musi być określony, aby usunąć Kontrahenta.',
    'LBL_TOOL_TIP_BOX_TITLE' => 'Sugestie Modułu Baza Wiedzy',
    'LBL_TOOL_TIP_TITLE' => 'Tytuł:',
    'LBL_TOOL_TIP_BODY' => 'Treść:',
    'LBL_TOOL_TIP_INFO' => 'Dodatkowe Informacje:',
    'LBL_TOOL_TIP_USE' => 'Użyj jako:',
    'LBL_SUGGESTION_BOX' => 'Sugestie',
    'LBL_NO_SUGGESTIONS' => 'Brak propozycji',
    'LBL_RESOLUTION_BUTTON' => 'Rozwiązanie',
    'LBL_SUGGESTION_BOX_STATUS' => 'Status',
    'LBL_SUGGESTION_BOX_TITLE' => 'Tytuł',
    'LBL_SUGGESTION_BOX_REL' => 'Poziom ważności',


    'LBL_ACCOUNT_ID' => 'ID Kontrahenta',
    'LBL_ACCOUNT_NAME' => 'Kontrahent:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Kontrahenci',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Działania',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Błędy',
    'LBL_CASE_NUMBER' => 'Numer Sprawy:',
    'LBL_CASE' => 'Sprawa:',
    'LBL_CONTACT_NAME' => 'Nazwa kontaktu:',
    'LBL_CONTACT_ROLE' => 'Profil uprawnień:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Sprawy',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_INVITEE' => 'Kontakty',
    'LBL_MEMBER_OF' => 'Kontrahent',
    'LBL_MODULE_NAME' => 'Sprawy',
    'LBL_MODULE_TITLE' => 'Sprawy: Strona Główna',
    'LBL_NEW_FORM_TITLE' => 'Nowa Sprawa',
    'LBL_NUMBER' => 'Numer:',
    'LBL_PRIORITY' => 'Priorytet:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekty',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenty',
    'LBL_RESOLUTION' => 'Rozwiązanie:',
    'LBL_SEARCH_FORM_TITLE' => 'Wyszukaj',
    'LBL_STATUS' => 'Status:',
    'LBL_SUBJECT' => 'Temat:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Użytkownik Przypisany',
    'LBL_LIST_ACCOUNT_NAME' => 'Nazwa kontrahenta',
    'LBL_LIST_ASSIGNED' => 'Przypisano do',
    'LBL_LIST_CLOSE' => 'Zamknij',
    'LBL_LIST_FORM_TITLE' => 'Lista Spraw',
    'LBL_LIST_LAST_MODIFIED' => 'Ostatnia Modyfikacja',
    'LBL_LIST_MY_CASES' => 'Moje Otwarte Sprawy',
    'LBL_LIST_NUMBER' => 'Nr.',
    'LBL_LIST_PRIORITY' => 'Priorytet',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_SUBJECT' => 'Temat',

    'LNK_CASE_LIST' => 'Przeglądaj sprawy',
    'LNK_NEW_CASE' => 'Utwórz Sprawę',
    'LBL_LIST_DATE_CREATED' => 'Data utworzenia',
    'LBL_ASSIGNED_TO_NAME' => 'Przypisano do',
    'LBL_TYPE' => 'Typ',
    'LBL_WORK_LOG' => 'Dziennik pracy',
    'LNK_IMPORT_CASES' => 'Importuj Sprawy',

    'LBL_CREATED_USER' => 'Utworzonego użytkownika',
    'LBL_MODIFIED_USER' => 'Zmodyfikowany użytkownika',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekty',
    'LBL_CASE_INFORMATION' => 'Przegląd', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'Tekst aktualizacji', //Field for Case updates with text only
    'LBL_INTERNAL' => 'Wewnętrzna aktualizacja',
    'LBL_AOP_CASE_UPDATES' => 'Aktualizacje Sprawy',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Aktualizacje Sprawy',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'Zwiń wszystkie',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Rozwiń wszystkie',
    'LBL_AOP_CASE_ATTACHMENTS' => 'Załączniki:',

    'LBL_AOP_CASE_EVENTS' => 'Wydarzenia związane ze Sprawą',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Załączniki do Sprawy:',
    'LBL_ADD_CASE_FILE' => 'Dodaj plik',
    'LBL_REMOVE_CASE_FILE' => 'Usuń plik',
    'LBL_SELECT_CASE_DOCUMENT' => 'Wybierz dokument',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Wyczyść dokument',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'Wewnętrzny dokument CRM',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'Zewnętrzny plik',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Stworzone przez',
    'LBL_CONTACT_CREATED_BY' => 'Utworzone przez',
    'LBL_CASE_UPDATE_FORM' => 'Aktualizacje - formularz załącznika', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => 'Nieznany kontakt',
);
