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
    'LBL_NAME' => 'Tytu??',
    'LBL_CREATED_USER' => 'Utworzony przez U??ytkownika',
    'LBL_MODIFIED_USER' => 'Zmodyfikowany przez U??ytkownika',
    'ERR_DELETE_RECORD' => 'Numer wpisu musi by?? okre??lony w celu usuni??cia Kontrahenta.',
    'LBL_ACCOUNT_NAME' => 'Tytu??',
    'LBL_ACCOUNT' => 'Firma:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Dzia??ania',
    'LBL_ADDRESS_INFORMATION' => 'Informacja Adresowa',
    'LBL_ANNUAL_REVENUE' => 'Roczne Przychody:',
    'LBL_ANY_ADDRESS' => 'Adres:',
    'LBL_ANY_EMAIL' => 'Dowolny e-mail:',
    'LBL_ANY_PHONE' => 'Telefon:',
    'LBL_RATING' => 'Ocena',
    'LBL_ASSIGNED_USER' => 'U??ytkownik',
    'LBL_BILLING_ADDRESS_CITY' => 'Adres do Korespondencji - Miasto:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Adres do Korespondencji - Kraj:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Adres do Korespondencji - Kod Pocztowy:',
    'LBL_BILLING_ADDRESS_STATE' => 'Adres do Korespondencji - Woj.:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Adres do Korespondencji - Ulica 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Adres do Korespondencji - Ulica 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Adres do Korespondencji - Ulica 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Adres do Korespondencji - Ulica:',
    'LBL_BILLING_ADDRESS' => 'Adres do Korespondencji:',
    'LBL_ACCOUNT_INFORMATION' => 'Przegl??d',
    'LBL_CITY' => 'Miasto:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_COUNTRY' => 'Kraj:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kontrahenci',
    'LBL_DUPLICATE' => 'Mo??liwy duplikat kontrahenta',
    'LBL_EMAIL' => 'Adres e-mail:',
    'LBL_EMPLOYEES' => 'Pracownicy:',
    'LBL_FAX' => 'Faks:',
    'LBL_INDUSTRY' => 'Bran??a:',
    'LBL_LIST_ACCOUNT_NAME' => 'Nazwa kontrahenta',
    'LBL_LIST_CITY' => 'Miasto',
    'LBL_LIST_EMAIL_ADDRESS' => 'Adres e-mail',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_STATE' => 'Wojew??dztwo',
    'LBL_MEMBER_OF' => 'Cz??onek/Udzia??owiec:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Cz??onek Organizacji',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Dodatkowy adres e-mail:',
    'LBL_OTHER_PHONE' => 'Inny Telefon:',
    'LBL_OWNERSHIP' => 'Rodzaj Dzia??alno??ci Gospodarczej:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID konta nadrz??dnego',
    'LBL_PHONE_ALT' => 'Inny Telefon:',
    'LBL_PHONE_FAX' => 'Faks:',
    'LBL_PHONE_OFFICE' => 'Telefon do biura:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_POSTAL_CODE' => 'Kod Pocztowy:',
    'LBL_SAVE_ACCOUNT' => 'Zapisz Kontrahenta',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Adres Dostawy Miasto:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Adres Dostawy Kraj:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Adres Dostawy Kod Pocztowy:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Adres Dostawy Woj.:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Adres Wysy??kowy - Ulica2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Adres Wysy??kowy - Ulica3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Adres Wysy??kowy - Ulica4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Adres Dostawy Ulica:',
    'LBL_SHIPPING_ADDRESS' => 'Adres Dostawy:',
    'LBL_STATE' => 'Wojew??dztwo:',
    'LBL_TICKER_SYMBOL' => 'Wska??nik Gie??dowy Kursu:',
    'LBL_TYPE' => 'Typ:',
    'LBL_WEBSITE' => 'Strona www:',
    'LNK_ACCOUNT_LIST' => 'Kontrahenci',
    'LNK_NEW_ACCOUNT' => 'Utw??rz kontrahenta',
    'MSG_DUPLICATE' => 'Stworzenie tego wpisu mo??e skutkowa?? utworzeniem duplikatu. Mo??esz wybra?? wpis z poni??szej listy lub klikn???? Zapisz, aby kontynuowa?? tworzenie nowego wpisu z wcze??niej wprowadzonych danych.',
    'MSG_SHOW_DUPLICATES' => 'Stworzenie tego wpisu mo??e utworzy?? duplikat. Mo??esz klikn???? Zapisz, aby kontynuowa?? tworzenie nowego wpisu z wcze??niej wprowadzonymi danymi lub kliknij Cofnij.',
    'NTC_DELETE_CONFIRMATION' => 'Czy na pewno chcesz usun???? ten zapis?',
    'LBL_LIST_FORM_TITLE' => 'Lista Ofert',
    'LBL_MODULE_NAME' => 'Oferty',
    'LBL_MODULE_TITLE' => 'Oferty: Strona G????wna',
    'LBL_HOMEPAGE_TITLE' => 'Moje Oferty',
    'LNK_NEW_RECORD' => 'Utw??rz ofert??',
    'LNK_LIST' => 'Zobacz Oferty',
    'LBL_SEARCH_FORM_TITLE' => 'Szukaj Oferty',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_NEW_FORM_TITLE' => 'Nowa Oferta',
    'LBL_TERMS_C' => 'Warunki',
    'LBL_APPROVAL_ISSUE' => 'Pow??d braku Zatwierdzenia',
    'LBL_APPROVAL_STATUS' => 'Stan Zatwierdzenia',
    'LBL_BILLING_ACCOUNT' => 'Kontrahent',
    'LBL_BILLING_CONTACT' => 'Kontakt',
    'LBL_EXPIRATION' => 'Wa??ne do',
    'LBL_QUOTE_NUMBER' => 'Numer oferty',
    'LBL_OPPORTUNITY' => 'Szansa sprzeda??y',
    'LBL_TEMPLATE_DDOWN_C' => 'Szablon Oferty',
    'LBL_STAGE' => 'Etap Ofertowania',
    'LBL_TERM' => 'Termin P??atno??ci',
    'LBL_SUBTOTAL_AMOUNT' => 'Warto???? netto (po rabacie)',
    'LBL_DISCOUNT_AMOUNT' => 'Rabat',
    'LBL_TAX_AMOUNT' => 'Warto???? VAT',
    'LBL_SHIPPING_AMOUNT' => 'Przesy??ka',
    'LBL_TOTAL_AMT' => 'Razem',
    'VALUE' => 'Tytu??',
    'LBL_EMAIL_ADDRESSES' => 'Adresy e-mail',
    'LBL_LINE_ITEMS' => 'Pozycje',
    'LBL_GRAND_TOTAL' => 'Suma',
    'LBL_INVOICE_STATUS' => 'Status Faktury',
    'LBL_PRODUCT_QUANITY' => 'Ilo????',
    'LBL_PRODUCT_NAME' => 'Produkt',
    'LBL_PART_NUMBER' => 'Numer cz????ci',
    'LBL_PRODUCT_NOTE' => 'Notatki',
    'LBL_PRODUCT_DESCRIPTION' => 'Opis',
    'LBL_LIST_PRICE' => 'Cena katalogowa',
    'LBL_DISCOUNT_AMT' => 'Rabat',
    'LBL_UNIT_PRICE' => 'Cena jednostkowa netto',
    'LBL_TOTAL_PRICE' => 'Warto???? brutto',
    'LBL_VAT' => 'Podatek', // VAT
    'LBL_VAT_AMT' => 'Warto???? VAT', // VAT
    'LBL_ADD_PRODUCT_LINE' => 'Dodaj Produkt',
    'LBL_SERVICE_NAME' => 'Us??ugi',
    'LBL_SERVICE_LIST_PRICE' => 'Cena katalogowa',
    'LBL_SERVICE_PRICE' => 'Cena Sprzeda??y',
    'LBL_SERVICE_DISCOUNT' => 'Rabat',
    'LBL_ADD_SERVICE_LINE' => 'Dodaj Us??ug?? ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Usu??',
    'LBL_CONVERT_TO_INVOICE' => 'Konwertuj na Faktur??',
    'LBL_PRINT_AS_PDF' => 'Drukuj w Formacie PDF',
    'LBL_EMAIL_QUOTE' => 'Wy??lij Ofert?? e-mailem',
    'LBL_CREATE_CONTRACT' => 'Utw??rz umow??',
    'LBL_LIST_NUM' => 'Num.',
    'LBL_PDF_NAME' => 'Oferta',
    'LBL_EMAIL_NAME' => 'Oferta dla',
    'LBL_QUOTE_DATE' => 'Data oferty',
    'LBL_NO_TEMPLATE' => 'B????D\nNie znaleziono szablonu. Je??li nie utworzy??e?? szablonu Oferty, przejd?? do Szablon??w PDF i stw??rz go',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Suma cz????ciowa + podatek',//pre shipping
    'LBL_EMAIL_PDF' => 'Wy??lij PDF',
    'LBL_ADD_GROUP' => 'Dodaj Grup??',
    'LBL_DELETE_GROUP' => 'Usu?? Grup??',
    'LBL_GROUP_NAME' => 'Nazwa Grupy',
    'LBL_GROUP_TOTAL' => 'Razem Grupa',
    'LBL_SHIPPING_TAX' => 'VAT od przesy??ki',
    'LBL_SHIPPING_TAX_AMT' => 'VAT od przesy??ki',
    'LBL_IMPORT_LINE_ITEMS' => 'Importuj elementy',
    'LBL_CREATE_OPPORTUNITY' => 'Utw??rz Szans?? sprzeda??y',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Warto???? netto (domy??lna waluta)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Rabat (domy??lna waluta)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Warto???? VAT (domy??lna waluta)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Przesy??ka (domy??lna waluta)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Razem: warto???? netto (domy??lna waluta)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'VAT od przesy??ki (domy??lna waluta)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Suma brutto (domy??lna waluta)',
    'LBL_QUOTE_TO' => 'Oferta dla',

    'LBL_SUBTOTAL_TAX_AMOUNT_USDOLLAR' => 'Suma cz????ciowa + podatek (domy??lna waluta)',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Oferty: Umowy',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Oferty : Faktury',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Grupy artyku????w',
    'LBL_AOS_PRODUCT_QUOTES' => 'Oferty produktowe',
    'LBL_AOS_QUOTES_PROJECT' => 'Oferty: Projekt',
);
