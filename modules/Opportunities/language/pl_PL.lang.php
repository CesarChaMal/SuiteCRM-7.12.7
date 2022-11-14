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
    'LBL_MODULE_NAME' => 'Szanse sprzedaży',
    'LBL_MODULE_TITLE' => 'Szanse Sprzedaży: Strona główna',
    'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie Szans sprzedaży',
    'LBL_LIST_FORM_TITLE' => 'Lista Szans sprzedaży',
    'LBL_OPPORTUNITY_NAME' => 'Nazwa szansy sprzedaży:',
    'LBL_OPPORTUNITY' => 'Szansa Sprzedaży:',
    'LBL_NAME' => 'Nazwa Szansy sprzedaży',
    'LBL_INVITEE' => 'Kontakty',
    'LBL_CURRENCIES' => 'Waluty',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Nazwa',
    'LBL_LIST_ACCOUNT_NAME' => 'Nazwa kontrahenta',
    'LBL_LIST_AMOUNT' => 'Kwota Szansy sprzedaży',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Kwota',
    'LBL_LIST_DATE_CLOSED' => 'Data zamknięcia',
    'LBL_LIST_SALES_STAGE' => 'Etapy sprzedaży',
    'LBL_ACCOUNT_ID' => 'ID Kontrahenta',
    'LBL_CURRENCY_NAME' => 'Nazwa Waluty',
    'LBL_CURRENCY_SYMBOL' => 'Symbol Waluty',
    'LBL_DAYS_OPEN_FOR' => 'Ta Szansa Sprzedaży była otwarta przez',

    'UPDATE' => 'Szansa Sprzedaży - Aktualizacja walut',
    'LBL_ACCOUNT_NAME' => 'Nazwa Kontrahenta:',
    'LBL_AMOUNT' => 'Kwota szansy sprzedaży:',
    'LBL_AMOUNT_USDOLLAR' => 'Kwota:',
    'LBL_CURRENCY' => 'Waluta:',
    'LBL_DATE_CLOSED' => 'Oczekiwana data zamknięcia:',
    'LBL_TYPE' => 'Typ:',
    'LBL_CAMPAIGN' => 'Kampania reklamowa:',
    'LBL_NEXT_STEP' => 'Następny krok:',
    'LBL_LEAD_SOURCE' => 'Źródło pozyskania:',
    'LBL_SALES_STAGE' => 'Etap sprzedaży:',
    'LBL_PROBABILITY' => 'Szansa sukcesu(%):',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_DUPLICATE' => 'Znaleziono rekord o podobnych danych',
    'MSG_DUPLICATE' => 'Utworzenie tej szansy sprzedaży prawdopodobnie spowoduje powstanie duplikatu już istniejącej. Możesz wybrać istniejącą szansę sprzedaży z listy lub kontynuować klikając [Zapisz]. Operacja ta utworzy nową szansę sprzedaży wykorzystując dane, które wprowadziłeś za pomocą formularza.',
    'LBL_NEW_FORM_TITLE' => 'Utwórz Szanse Sprzedaży',
    'LNK_NEW_OPPORTUNITY' => 'Utwórz Szansę Sprzedaży',
    'LNK_OPPORTUNITY_LIST' => 'Przeglądaj szanse sprzedaży',
    'ERR_DELETE_RECORD' => 'Aby usunąć szanse sprzedaży musisz określić numer rekordu.',
    'LBL_TOP_OPPORTUNITIES' => 'Moje najlepsze trwające szanse sprzedaży',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Czy na pewno chcesz usunąć Szansę sprzedaży z projektu?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Szanse Sprzedaży',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Wydarzenia',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Potencjalni Klienci',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenty',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekty',
    'LBL_ASSIGNED_TO_NAME' => 'Przydzielony do:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Przydzielony użytkownik',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Moje zakończone szanse sprzedaży',
    'LBL_TOTAL_OPPORTUNITIES' => 'Wszystkie szanse sprzedaży',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Szanse sprzedaży zakończone powodzeniem',
    'LBL_ASSIGNED_TO_ID' => 'Przydzielony użytkownik:',
    'LBL_MODIFIED_NAME' => 'Zmodyfikowane przez użytkownika',
    'LBL_CREATED_USER' => 'Utworzone przez użytkownika',
    'LBL_MODIFIED_USER' => 'Użytkownik modyfikujący',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampanie reklamowe',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekty',
    'LNK_IMPORT_OPPORTUNITIES' => 'Importuj szanse sprzedaży',
    'LBL_EDITLAYOUT' => 'Edycja wygladu'
    /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => 'Umowy',
    'LBL_AOS_QUOTES' => 'Oferty',

    'LBL_SIZE_ANALYSIS' => 'Analiza rozmiaru',
    'LBL_POSITION' => 'Pozycja',
    'LBL_OUT_OF' => 'Brak',
);
