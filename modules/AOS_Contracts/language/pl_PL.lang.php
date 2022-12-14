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
    'LBL_ASSIGNED_TO_NAME' => 'Zarz??dzaj??cy umow??',
    'LBL_CONTRACT_ACCOUNT' => 'Kontrahent',
    'LBL_OPPORTUNITY' => 'Szansa sprzeda??y',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data utworzenia',
    'LBL_DATE_MODIFIED' => 'Data Modyfikacji:',
    'LBL_MODIFIED' => 'Zmodyfikowane przez',
    'LBL_MODIFIED_NAME' => 'Nazwa u??ytkownika modyfikuj??cego',
    'LBL_CREATED' => 'Utworzone przez',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_DELETED' => 'Usuni??te',
    'LBL_NAME' => 'Tytu?? umowy',
    'LBL_CREATED_USER' => 'Utworzony przez U??ytkownika',
    'LBL_MODIFIED_USER' => 'Zmodyfikowany przez U??ytkownika',
    'LBL_LIST_NAME' => 'Nazwa',
    'LBL_LIST_FORM_TITLE' => 'Lista um??w',
    'LBL_MODULE_NAME' => 'Umowy',
    'LBL_MODULE_TITLE' => 'Umowy: Strona g????wna',
    'LBL_HOMEPAGE_TITLE' => 'Moje umowy',
    'LNK_NEW_RECORD' => 'Utw??rz umow??',
    'LNK_LIST' => 'Przegl??daj umowy',
    'LBL_SEARCH_FORM_TITLE' => 'Szukaj Um??w',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Przegl??daj histori??',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Dzia??ania',
    'LBL_NEW_FORM_TITLE' => 'Nowa umowa',
    'LBL_CONTRACT_NAME' => 'Nazwa umowy',
    'LBL_REFERENCE_CODE ' => 'Kod referencyjny ',
    'LBL_START_DATE' => 'Data Rozpocz??cia',
    'LBL_END_DATE' => 'Data Zako??czenia',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Warto???? umowy',
    'LBL_STATUS' => 'Status',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Data podpisania przez klienta',
    'LBL_COMPANY_SIGNED_DATE' => 'Data podpisania przez firm??',
    'LBL_RENEWAL_REMINDER_DATE' => 'Data przypomnienia o odnowieniu umowy',
    'LBL_CONTRACT_TYPE' => 'Typ umowy',
    'LBL_CONTACT' => 'Kontakt',
    'LBL_ADD_GROUP' => 'Dodaj Grup??',
    'LBL_DELETE_GROUP' => 'Usu?? Grup??',
    'LBL_GROUP_NAME' => 'Nazwa Grupy',
    'LBL_GROUP_TOTAL' => 'Razem Grupa',
    'LBL_PRODUCT_QUANITY' => 'Ilo????',
    'LBL_PRODUCT_NAME' => 'Produkt',
    'LBL_PART_NUMBER' => 'Numer cz????ci',
    'LBL_PRODUCT_NOTE' => 'Notatki',
    'LBL_PRODUCT_DESCRIPTION' => 'Opis',
    'LBL_LIST_PRICE' => 'Lista',
    'LBL_DISCOUNT_AMT' => 'Rabat',
    'LBL_UNIT_PRICE' => 'Cena jednostkowa netto',
    'LBL_TOTAL_PRICE' => 'Warto???? brutto',
    'LBL_VAT' => 'Stawka VAT',
    'LBL_VAT_AMT' => 'Warto???? VAT',
    'LBL_SERVICE_NAME' => 'Us??uga',
    'LBL_SERVICE_LIST_PRICE' => 'Lista',
    'LBL_SERVICE_PRICE' => 'Cena Sprzeda??y',
    'LBL_SERVICE_DISCOUNT' => 'Rabat',
    'LBL_LINE_ITEMS' => 'Pozycje',
    'LBL_SUBTOTAL_AMOUNT' => 'Warto???? netto (po rabacie)',
    'LBL_DISCOUNT_AMOUNT' => 'Rabat',
    'LBL_TAX_AMOUNT' => 'Warto???? VAT',
    'LBL_SHIPPING_AMOUNT' => 'Przesy??ka',
    'LBL_TOTAL_AMT' => 'Razem: warto???? netto',
    'LBL_GRAND_TOTAL' => 'Suma',
    'LBL_SHIPPING_TAX' => 'VAT od przesy??ki',
    'LBL_SHIPPING_TAX_AMT' => 'VAT od przesy??ki',
    'LBL_ADD_PRODUCT_LINE' => 'Dodaj lini?? produkt??w',
    'LBL_ADD_SERVICE_LINE' => 'Dodaj lini?? us??ug ',
    'LBL_PRINT_AS_PDF' => 'Drukuj w Formacie PDF',
    'LBL_EMAIL_PDF' => 'Wy??lij PDF',
    'LBL_PDF_NAME' => 'Umowa',
    'LBL_EMAIL_NAME' => 'Umowa dla',
    'LBL_NO_TEMPLATE' => 'B????D\nNie znaleziono szablonu. Je??li nie utworzy??e?? szablonu umowy, przejd?? do Szablon??w PDF i stw??rz go',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Warto???? umowy (domy??lna waluta)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Warto???? netto (domy??lna waluta)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Rabat (domy??lna waluta)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Warto???? VAT (domy??lna waluta)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Przesy??ka (domy??lna waluta)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Razem: warto???? netto (domy??lna waluta)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'VAT od przesy??ki (domy??lna waluta)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Suma brutto (domy??lna waluta)',

    'LBL_CALL_ID' => 'Identyfikator rozmowy telefonicznej',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Grupy artyku????w',
    'LBL_AOS_PRODUCT_QUOTES' => 'Oferty produktowe',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Oferty: Umowy',
);
