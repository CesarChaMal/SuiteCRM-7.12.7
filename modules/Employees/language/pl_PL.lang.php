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
    'LBL_MODULE_NAME' => 'Pracownicy',
    'LBL_MODULE_TITLE' => 'Pracownicy: Strona g????wna',
    'LBL_SEARCH_FORM_TITLE' => 'Szukaj pracownika',
    'LBL_LIST_FORM_TITLE' => 'Pracownicy',
    'LBL_NEW_FORM_TITLE' => 'Nowy pracownik',
    'LBL_LOGIN' => 'Naza u??ytkownika',
    'LBL_RESET_PREFERENCES' => 'Zastosuj domy??lne ustawienia',
    'LBL_TIME_FORMAT' => 'Format czasu:',
    'LBL_DATE_FORMAT' => 'Format daty:',
    'LBL_TIMEZONE' => 'Czas bie????cy:',
    'LBL_CURRENCY' => 'Waluta:',
    'LBL_LIST_NAME' => 'Nazwa',
    'LBL_LIST_LAST_NAME' => 'Nazwisko',
    'LBL_LIST_EMPLOYEE_NAME' => 'Nazwa',
    'LBL_LIST_DEPARTMENT' => 'Dzia??',
    'LBL_LIST_REPORTS_TO_NAME' => 'Raportuje do',
    'LBL_LIST_EMAIL' => 'E-mail',
    'LBL_LIST_USER_NAME' => 'Nazwa u??ytkownika',
    'LBL_ERROR' => 'B????d:',
    'LBL_PASSWORD' => 'Has??o:',
    'LBL_USER_NAME' => 'Nazwa u??ytkownika:',
    'LBL_USER_TYPE' => 'Typ u??ytkownika',
    'LBL_FIRST_NAME' => 'Imi??:',
    'LBL_LAST_NAME' => 'Nazwisko:',
    'LBL_THEME' => 'Szablon:',
    'LBL_LANGUAGE' => 'J??zyk:',
    'LBL_ADMIN' => 'Administrator:',
    'LBL_EMPLOYEE_INFORMATION' => 'Informacje o pracowniku',
    'LBL_OFFICE_PHONE' => 'Tel. s??u??bowy:',
    'LBL_REPORTS_TO' => 'Raportuje do ID:',
    'LBL_REPORTS_TO_NAME' => 'Raportuje do:',
    'LBL_OTHER_PHONE' => 'Inny Telefon:',
    'LBL_NOTES' => 'Notatki:',
    'LBL_DEPARTMENT' => 'Dzia??:',
    'LBL_TITLE' => 'Stanowisko:',
    'LBL_ANY_ADDRESS' => 'Dodatkowy Adres:',
    'LBL_ANY_PHONE' => 'Numer telefonu:',
    'LBL_ANY_EMAIL' => 'Dowolny e-mail:',
    'LBL_ADDRESS' => 'Adres:',
    'LBL_CITY' => 'Miasto:',
    'LBL_STATE' => 'Wojew??dztwo:',
    'LBL_POSTAL_CODE' => 'Kod pocztowy:',
    'LBL_COUNTRY' => 'Kraj:',
    'LBL_NAME' => 'Nazwa:',
    'LBL_MOBILE_PHONE' => 'Tel. kom??rkowy:',
    'LBL_FAX' => 'Faks:',
    'LBL_EMAIL' => 'Adres e-mail:',
    'LBL_EMAIL_LINK_TYPE' => 'Klient poczty e-mail',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM klient poczty:</b> Wy??lij e-mail za pomoc?? klienta poczty w aplikacji SuiteCRM.<br><b>Zewn??trzny klient poczty:</b> Wy??lij e-mail za pomoc?? klienta poczty poza aplikacj?? SuiteCRM, takich jak Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'Telefon domowy:',
    'LBL_WORK_PHONE' => 'Telefon do pracy:',
    'LBL_EMPLOYEE_STATUS' => 'Status zatrudnienia:',
    'LBL_PRIMARY_ADDRESS' => 'Adres:',
    'LBL_SAVED_SEARCH' => 'Opcje szablonu',
    'LBL_MESSENGER_ID' => 'Identyfikator IM:',
    'LBL_MESSENGER_TYPE' => 'Typ IM:',
    'ERR_LAST_ADMIN_1' => 'Wybrany pracownik ',
    'ERR_LAST_ADMIN_2' => '" jest ostatnim u??ytkownikiem z prawami administratora. Co najmniej jeden pracownik musi by?? administratorem.',
    'LNK_NEW_EMPLOYEE' => 'Utw??rz pracownika',
    'LNK_EMPLOYEE_LIST' => 'Przegl??daj pracownik??w',
    'ERR_DELETE_RECORD' => 'Aby usun???? rekord musisz okre??li?? numer.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Status pracownika',

    'LBL_SUITE_LOGIN' => 'Pozwoli?? na logowanie?',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Wysy??anie powiadomie??',
    'LBL_IS_ADMIN' => 'Prawa administratora',
    'LBL_GROUP' => 'Nazwa grupy:',
    'LBL_PHOTO' => 'Zdj??cie',
    'LBL_DELETE_USER_CONFIRM' => 'Ten pracownik jest r??wnie?? u??ytkownikiem. Usuwanie rekordu Pracownik tak??e usunie rekord u??ytkownika, a U??ytkownik nie b??dzie m??g?? uzyska?? dost??p do aplikacji. Czy chcesz kontynuowa?? usuwanie tego rekordu?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Czy na pewno chcesz usun???? tego pracownika?',
    'LBL_ONLY_ACTIVE' => 'Aktywni pracownicy',
    'LBL_SELECT' => 'Wybierz' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'Id uwierzytelniania',
    'LBL_EXT_AUTHENTICATE' => 'Uwierzytelnianie zewn??trzne',
    'LBL_GROUP_USER' => 'Nazwa grupy:',
    'LBL_LIST_ACCEPT_STATUS' => 'Status akceptacji',
    'LBL_MODIFIED_BY' => 'Zmodyfikowane przez',
    'LBL_MODIFIED_BY_ID' => 'Zmodyfikowane przez ID',
    'LBL_CREATED_BY_NAME' => 'Utworzony przez', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Portal API u??ytkownika',
    'LBL_PSW_MODIFIED' => 'Ostatnia zmiana has??a',
    'LBL_SHOW_ON_EMPLOYEES' => 'Wy??wietl rekord pracownika',
    'LBL_USER_HASH' => 'Has??o',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Wygenerowane systemowo has??o',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_FAX_PHONE' => 'Faks',
    'LBL_STATUS' => 'Status',
    'LBL_ADDRESS_CITY' => 'Adres miasto',
    'LBL_ADDRESS_COUNTRY' => 'Adres kraj',
    'LBL_ADDRESS_INFORMATION' => 'Informacje adresowe',
    'LBL_ADDRESS_POSTALCODE' => 'Adres kod pocztowy',
    'LBL_ADDRESS_STATE' => 'Adres wojew??dztwo',
    'LBL_ADDRESS_STREET' => 'Adres ulica',

    'LBL_DATE_MODIFIED' => 'Data modyfikacji',
    'LBL_DATE_ENTERED' => 'Data wprowadzenia',
    'LBL_DELETED' => 'Usuni??te',

    'LBL_BUTTON_SELECT' => 'Wybierz',
    'LBL_BUTTON_CLEAR' => 'Wyczy????',

    'LBL_CONTACTS_SYNC' => 'Synchronizacja kontakt??w',
    'LBL_OAUTH_TOKENS' => 'Tokeny OAuth',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'U??ytkownicy projektu z tytu??u projektu',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Kontakty projektu z tytu??u kontakt??w',
    'LBL_ROLES' => 'Profile uprawnie??',
    'LBL_SECURITYGROUPS' => 'Grupy bezpiecze??stwa',
    'LBL_PROSPECT_LIST' => 'Lista perspektyw',
);
