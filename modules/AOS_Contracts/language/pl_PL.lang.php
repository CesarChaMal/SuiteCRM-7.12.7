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
    'LBL_ASSIGNED_TO_NAME' => 'Zarządzający umową',
    'LBL_CONTRACT_ACCOUNT' => 'Kontrahent',
    'LBL_OPPORTUNITY' => 'Szansa sprzedaży',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data utworzenia',
    'LBL_DATE_MODIFIED' => 'Data Modyfikacji:',
    'LBL_MODIFIED' => 'Zmodyfikowane przez',
    'LBL_MODIFIED_NAME' => 'Nazwa użytkownika modyfikującego',
    'LBL_CREATED' => 'Utworzone przez',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_DELETED' => 'Usunięte',
    'LBL_NAME' => 'Tytuł umowy',
    'LBL_CREATED_USER' => 'Utworzony przez Użytkownika',
    'LBL_MODIFIED_USER' => 'Zmodyfikowany przez Użytkownika',
    'LBL_LIST_NAME' => 'Nazwa',
    'LBL_LIST_FORM_TITLE' => 'Lista umów',
    'LBL_MODULE_NAME' => 'Umowy',
    'LBL_MODULE_TITLE' => 'Umowy: Strona główna',
    'LBL_HOMEPAGE_TITLE' => 'Moje umowy',
    'LNK_NEW_RECORD' => 'Utwórz umowę',
    'LNK_LIST' => 'Przeglądaj umowy',
    'LBL_SEARCH_FORM_TITLE' => 'Szukaj Umów',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Przeglądaj historię',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Działania',
    'LBL_NEW_FORM_TITLE' => 'Nowa umowa',
    'LBL_CONTRACT_NAME' => 'Nazwa umowy',
    'LBL_REFERENCE_CODE ' => 'Kod referencyjny ',
    'LBL_START_DATE' => 'Data Rozpoczęcia',
    'LBL_END_DATE' => 'Data Zakończenia',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Wartość umowy',
    'LBL_STATUS' => 'Status',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Data podpisania przez klienta',
    'LBL_COMPANY_SIGNED_DATE' => 'Data podpisania przez firmę',
    'LBL_RENEWAL_REMINDER_DATE' => 'Data przypomnienia o odnowieniu umowy',
    'LBL_CONTRACT_TYPE' => 'Typ umowy',
    'LBL_CONTACT' => 'Kontakt',
    'LBL_ADD_GROUP' => 'Dodaj Grupę',
    'LBL_DELETE_GROUP' => 'Usuń Grupę',
    'LBL_GROUP_NAME' => 'Nazwa Grupy',
    'LBL_GROUP_TOTAL' => 'Razem Grupa',
    'LBL_PRODUCT_QUANITY' => 'Ilość',
    'LBL_PRODUCT_NAME' => 'Produkt',
    'LBL_PART_NUMBER' => 'Numer części',
    'LBL_PRODUCT_NOTE' => 'Notatki',
    'LBL_PRODUCT_DESCRIPTION' => 'Opis',
    'LBL_LIST_PRICE' => 'Lista',
    'LBL_DISCOUNT_AMT' => 'Rabat',
    'LBL_UNIT_PRICE' => 'Cena jednostkowa netto',
    'LBL_TOTAL_PRICE' => 'Wartość brutto',
    'LBL_VAT' => 'Stawka VAT',
    'LBL_VAT_AMT' => 'Wartość VAT',
    'LBL_SERVICE_NAME' => 'Usługa',
    'LBL_SERVICE_LIST_PRICE' => 'Lista',
    'LBL_SERVICE_PRICE' => 'Cena Sprzedaży',
    'LBL_SERVICE_DISCOUNT' => 'Rabat',
    'LBL_LINE_ITEMS' => 'Pozycje',
    'LBL_SUBTOTAL_AMOUNT' => 'Wartość netto (po rabacie)',
    'LBL_DISCOUNT_AMOUNT' => 'Rabat',
    'LBL_TAX_AMOUNT' => 'Wartość VAT',
    'LBL_SHIPPING_AMOUNT' => 'Przesyłka',
    'LBL_TOTAL_AMT' => 'Razem: wartość netto',
    'LBL_GRAND_TOTAL' => 'Suma',
    'LBL_SHIPPING_TAX' => 'VAT od przesyłki',
    'LBL_SHIPPING_TAX_AMT' => 'VAT od przesyłki',
    'LBL_ADD_PRODUCT_LINE' => 'Dodaj linię produktów',
    'LBL_ADD_SERVICE_LINE' => 'Dodaj linię usług ',
    'LBL_PRINT_AS_PDF' => 'Drukuj w Formacie PDF',
    'LBL_EMAIL_PDF' => 'Wyślij PDF',
    'LBL_PDF_NAME' => 'Umowa',
    'LBL_EMAIL_NAME' => 'Umowa dla',
    'LBL_NO_TEMPLATE' => 'BŁĄD\nNie znaleziono szablonu. Jeśli nie utworzyłeś szablonu umowy, przejdż do Szablonów PDF i stwórz go',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Wartość umowy (domyślna waluta)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Wartość netto (domyślna waluta)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Rabat (domyślna waluta)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Wartość VAT (domyślna waluta)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Przesyłka (domyślna waluta)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Razem: wartość netto (domyślna waluta)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'VAT od przesyłki (domyślna waluta)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Suma brutto (domyślna waluta)',

    'LBL_CALL_ID' => 'Identyfikator rozmowy telefonicznej',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Grupy artykułów',
    'LBL_AOS_PRODUCT_QUOTES' => 'Oferty produktowe',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Oferty: Umowy',
);
