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
    // DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_website' => 'LBL_LIST_WEBSITE',
    'db_billing_address_city' => 'LBL_LIST_CITY',
    // END DON'T CONVERT
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenty',
    // Dashlet Categories
    'LBL_CHARTS' => 'Wykresy',
    'LBL_DEFAULT' => 'Widoki',
    // END Dashlet Categories

    'ERR_DELETE_RECORD' => 'Aby usunąć Kontrahenta musisz określić numer wpisu.',
    'LBL_ACCOUNT_INFORMATION' => 'Przegląd', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_ACCOUNT_NAME' => 'Nazwa kontrahenta:',
    'LBL_ACCOUNT' => 'Kontrahent:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Wydarzenia',
    'LBL_ADDRESS_INFORMATION' => 'Informacje adresowe',
    'LBL_ANNUAL_REVENUE' => 'Roczne dochody:',
    'LBL_ANY_ADDRESS' => 'Dodatkowy Adres:',
    'LBL_ANY_EMAIL' => 'Dowolny e-mail:',
    'LBL_ANY_PHONE' => 'Telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Przydzielony do:',
    'LBL_ASSIGNED_TO_ID' => 'Przypisany Użytkownik:',
    'LBL_BILLING_ADDRESS_CITY' => 'Adres korespondencyjny - Miasto:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Adres korespondencyjny - Kraj:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Adres korespondencyjny - Kod pocztowy:',
    'LBL_BILLING_ADDRESS_STATE' => 'Adres korespondencyjny - Województwo:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Adres korespondencyjny - Ulica 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Adres korespondencyjny - Ulica 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Adres korespondencyjny - Ulica 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Adres korespondencyjny - Ulica:',
    'LBL_BILLING_ADDRESS' => 'Adres korespondencyjny:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Błędy',
    'LBL_CAMPAIGN_ID' => 'ID Kampanii reklamowej',
    'LBL_CASES_SUBPANEL_TITLE' => 'Sprawy',
    'LBL_CITY' => 'Miasto:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_COUNTRY' => 'Kraj:',
    'LBL_DATE_ENTERED' => 'Data utworzenia:',
    'LBL_DATE_MODIFIED' => 'Data modyfikacji:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kontrahenci',
    'LBL_DESCRIPTION_INFORMATION' => 'Dodatkowe informacje',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_DUPLICATE' => 'Możliwy duplikat kontrahenta',
    'LBL_EMAIL' => 'Adres e-mail:',
    'LBL_EMAIL_OPT_OUT' => 'Czy wyłączyć system powiadomień?',
    'LBL_EMAIL_ADDRESSES' => 'Adresy e-mail',
    'LBL_EMPLOYEES' => 'Pracownicy:',
    'LBL_FAX' => 'Faks:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_HOMEPAGE_TITLE' => 'Moi Kontrahenci',
    'LBL_INDUSTRY' => 'Branża:',
    'LBL_INVALID_EMAIL' => 'Niepoprawny adres email:',
    'LBL_INVITEE' => 'Kontakty',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Potencjalni Klienci',
    'LBL_LIST_ACCOUNT_NAME' => 'Nazwa Kontrahenta',
    'LBL_LIST_CITY' => 'Miasto',
    'LBL_LIST_CONTACT_NAME' => 'Nazwa kontaktu',
    'LBL_LIST_EMAIL_ADDRESS' => 'Adres e-mail',
    'LBL_LIST_FORM_TITLE' => 'Lista kontrahentów',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_STATE' => 'Województwo',
    'LBL_MEMBER_OF' => 'Członek/Udziałowiec:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Członek Organizacji',
    'LBL_MODULE_NAME' => 'Kontrahenci',
    'LBL_MODULE_TITLE' => 'Kontrahenci: Strona główna',
    'LBL_MODULE_ID' => 'Kontrahenci',
    'LBL_NAME' => 'Nazwa:',
    'LBL_NEW_FORM_TITLE' => 'Utwórz Kontrahenta',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Szanse Sprzedaży',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Dodatkowy adres e-mail:',
    'LBL_OTHER_PHONE' => 'Inny Telefon:',
    'LBL_OWNERSHIP' => 'Rodzaj Działalności Gospodarczej:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID konta nadrzędnego',
    'LBL_PHONE_ALT' => 'Alternatywny telefon:',
    'LBL_PHONE_FAX' => 'Faks:',
    'LBL_PHONE_OFFICE' => 'Telefon do biura:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_POSTAL_CODE' => 'Kod pocztowy:',
    'LBL_PRODUCTS_TITLE' => 'Produkty',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekty',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'Kopiuj do kontaktów',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'Kopiuj...',
    'LBL_RATING' => 'Ocena:',
    'LBL_SAVE_ACCOUNT' => 'Zapisz Kontrahenta',
    'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie kontrahenta',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Adres dostawy - Miasto:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Adres dostawy -  Kraj:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Adres dostawy -  Kod pocztowy:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Adres dostawy -  Województwo:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Adres dostawy -  Ulica 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Adres dostawy -  Ulica 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Adres dostawy -  Ulica 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Adres dostawy -  Ulica:',
    'LBL_SHIPPING_ADDRESS' => 'Adres dostawy:',
    'LBL_SIC_CODE' => 'Kod GLN:',
    'LBL_STATE' => 'Województwo:',
    'LBL_TICKER_SYMBOL' => 'Symbol giełdowy:',
    'LBL_TYPE' => 'Rodzaj Kontrahenta:',
    'LBL_WEBSITE' => 'Strona WWW:',
    'LBL_CAMPAIGNS' => 'Kampanie reklamowe',
    'LNK_ACCOUNT_LIST' => 'Przeglądaj kontrahentów',
    'LNK_NEW_ACCOUNT' => 'Utwórz Kontrahenta',
    'LNK_IMPORT_ACCOUNTS' => 'Importuj Kontrahentów',
    'MSG_DUPLICATE' => 'Kontrahent o podobnych danych już istnieje w systemie. Lista kontrahentów z podobnymi nazwami znajduje się poniżej.<br>Kliknij przycisk Utwórz kontrahenta, aby kontynuować tworzenie nowego wpisu, lub wybierz istniejącego kontrahenta z listy poniżej.',
    'MSG_SHOW_DUPLICATES' => 'Kontrahent o podobnych dany już istnieje w systemie. Lista z podobnymi danymi znajduje się poniżej.<br>Kliknij przycisk Zapisz, aby kontynuować tworzenie nowego Kontrahenta, lub przycisk Anuluj aby przerwać tworzenie.',
    'LBL_ASSIGNED_USER_NAME' => 'Przypisane do:',
    'LBL_PROSPECT_LIST' => 'Lista perspektyw',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Kontrahenci',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekty',
    //For export labels
    'LBL_PARENT_ID' => 'Identyfikator rodzica',
    // SNIP
    'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => 'Zakupione Produkty i Usługi',

    'LBL_AOS_CONTRACTS' => 'Umowy',
    'LBL_AOS_INVOICES' => 'Faktury',
    'LBL_AOS_QUOTES' => 'Oferty',
    'LBL_LIST_WEBSITE' => 'strona internetowa',
);
