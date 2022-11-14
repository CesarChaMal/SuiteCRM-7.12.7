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
    'ERR_DELETE_RECORD' => 'Należy podać numer wpisu aby usunąć kontrahenta.',
    'LBL_ACCOUNT_NAME' => 'Nazwa firmy:',
    'LBL_ACCOUNT' => 'Firma:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Działania',
    'LBL_ADDRESS_INFORMATION' => 'Informacja Adresowa',
    'LBL_ANNUAL_REVENUE' => 'Roczne Przychody:',
    'LBL_ANY_ADDRESS' => 'Adres:',
    'LBL_ANY_EMAIL' => 'Dowolny e-mail:',
    'LBL_EMAIL_NON_PRIMARY' => 'E-maile dodatkowe',
    'LBL_ANY_PHONE' => 'Telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Przypisane do:',
    'LBL_RATING' => 'Ocena',
    'LBL_ASSIGNED_TO' => 'Przypisane do:',
    'LBL_ASSIGNED_USER' => 'Przypisane do:',
    'LBL_ASSIGNED_TO_ID' => 'Przypisane do:',
    'LBL_BILLING_ADDRESS_CITY' => 'Adres do Korespondencji - Miasto:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Adres do Korespondencji - Kraj:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Adres do Korespondencji - Kod Pocztowy:',
    'LBL_BILLING_ADDRESS_STATE' => 'Adres do Korespondencji - Woj.:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Adres do Korespondencji - Ulica 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Adres do Korespondencji - Ulica 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Adres do Korespondencji - Ulica 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Adres do Korespondencji - Ulica:',
    'LBL_BILLING_ADDRESS' => 'Adres do Korespondencji:',
    'LBL_ACCOUNT_INFORMATION' => 'Informacje o firmie',
    'LBL_CITY' => 'Miasto:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_COUNTRY' => 'Kraj:',
    'LBL_DATE_ENTERED' => 'Data utworzenia:',
    'LBL_DATE_MODIFIED' => 'Data modyfikacji:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kontrahenci',
    'LBL_DESCRIPTION_INFORMATION' => 'Informacja Opisowa',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_DUPLICATE' => 'Możliwość duplikacji Kontrahenta',
    'LBL_EMAIL' => 'Adres e-mail:',
    'LBL_EMPLOYEES' => 'Pracownicy:',
    'LBL_FAX' => 'Faks:',
    'LBL_INDUSTRY' => 'Branża:',
    'LBL_LIST_ACCOUNT_NAME' => 'Nazwa kontrahenta',
    'LBL_LIST_CITY' => 'Miasto',
    'LBL_LIST_EMAIL_ADDRESS' => 'Adres e-mail',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_STATE' => 'Stan',
    'LBL_MEMBER_OF' => 'Członek/Udziałowiec:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Członek Organizacji',
    'LBL_NAME' => 'Nazwa:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Dodatkowy adres e-mail:',
    'LBL_OTHER_PHONE' => 'Inny Telefon:',
    'LBL_OWNERSHIP' => 'Rodzaj Działalności Gospodarczej:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID konta nadrzędnego',
    'LBL_PHONE_ALT' => 'Inny Telefon:',
    'LBL_PHONE_FAX' => 'Faks:',
    'LBL_PHONE_OFFICE' => 'Telefon Biurowy:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_EMAIL_ADDRESS' => 'Adres e-mail',
    'LBL_EMAIL_ADDRESSES' => 'Adres(y) e-mail',
    'LBL_POSTAL_CODE' => 'Kod Pocztowy:',
    'LBL_SAVE_ACCOUNT' => 'Zapisz Kontrahenta',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Adres Dostawy Miasto:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Adres Dostawy Kraj:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Adres Dostawy Kod Pocztowy:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Adres Dostawy Woj.:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Adres Wysyłkowy - Ulica2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Adres Wysyłkowy - Ulica3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Adres Wysyłkowy - Ulica4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Adres Dostawy Ulica:',
    'LBL_SHIPPING_ADDRESS' => 'Adres Dostawy:',

    'LBL_STATE' => 'Stan:',
    'LBL_TICKER_SYMBOL' => 'Wskaźnik Giełdowy Kursu:',
    'LBL_TYPE' => 'Typ:',
    'LBL_WEBSITE' => 'Strona www:',

    'LNK_ACCOUNT_LIST' => 'Kontrahenci',
    'LNK_NEW_ACCOUNT' => 'Utwórz Kontrahenta',

    'MSG_DUPLICATE' => 'Utworzenie tego kontrahenta może spowodować powstanie duplikatu. Możesz wybrać kontrahenta z poniższej listy<br>Kliknij Zapisz, aby kontynuować tworzenie nowego kontrahenta wraz z uprzednio wprowadzonymi danymi.',
    'MSG_SHOW_DUPLICATES' => 'Utworzenie tego kontrahenta może spowodować powstanie duplikatu istniejącego wpisu. <br>Możesz kliknąć na Zapisz, aby kontynuować tworzenie nowego kontrahenta wraz z uprzednio wprowadzonymi danymi lub kliknąć na Anuluj.',

    'NTC_DELETE_CONFIRMATION' => 'Czy na pewno chcesz usunąć ten zapis?',

    'LBL_EDIT_BUTTON' => 'Edytuj',
    'LBL_REMOVE' => 'Usuń',

);
