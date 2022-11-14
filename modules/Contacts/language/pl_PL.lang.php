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
    'ERR_DELETE_RECORD' => 'Aby usunąć Kontakt musisz określić numer rekordu.',
    'LBL_ACCOUNT_ID' => 'ID Kontrahenta:',
    'LBL_ACCOUNT_NAME' => 'Nazwa Kontrahenta:',
    'LBL_CAMPAIGN' => 'Kampania reklamowa:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Wydarzenia',
    'LBL_ADDRESS_INFORMATION' => 'Dane adresowe',
    'LBL_ALT_ADDRESS_CITY' => 'Miasto dodatkowe',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Kraj dodatkowy',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Kod pocztowy dodatkowy',
    'LBL_ALT_ADDRESS_STATE' => 'Województwo dodatkowe:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Adres dodatkowy:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Adres dodatkowy:',
    'LBL_ALT_ADDRESS_STREET' => 'Adres dodatkowy:',
    'LBL_ALTERNATE_ADDRESS' => 'Adres dodatkowy:',
    'LBL_ALT_ADDRESS' => 'Adres dodatkowy:',
    'LBL_ANY_ADDRESS' => 'Dodatkowy Adres:',
    'LBL_ANY_EMAIL' => 'Dowolny e-mail:',
    'LBL_ANY_PHONE' => 'Numer telefonu:',
    'LBL_ASSIGNED_TO_NAME' => 'Przydzielony do:',
    'LBL_ASSIGNED_TO_ID' => 'Przydzielony użytkownik',
    'LBL_ASSISTANT_PHONE' => 'Telefon asystenta:',
    'LBL_ASSISTANT' => 'Asystent:',
    'LBL_BIRTHDATE' => 'Data urodzin:',
    'LBL_CITY' => 'Miasto:',
    'LBL_CAMPAIGN_ID' => 'ID Kampanii reklamowej:',
    'LBL_CONTACT_INFORMATION' => 'Przegląd', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Nazwa kontaktu:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Kontakt-temat:',
    'LBL_CONTACT_ROLE' => 'Profil uprawnień:',
    'LBL_CONTACT' => 'Kontakt:',
    'LBL_COUNTRY' => 'Kraj:',
    'LBL_CREATED_ACCOUNT' => 'Utworzono nowego kontrahenta',
    'LBL_CREATED_CALL' => 'Utworzono nową rozmowę telefoniczną',
    'LBL_CREATED_CONTACT' => 'Utworzono kontakt',
    'LBL_CREATED_MEETING' => 'Utworzono spotkanie',
    'LBL_CREATED_OPPORTUNITY' => 'Utworzono nową szansę sprzedaży',
    'LBL_DATE_MODIFIED' => 'Data modyfikacji:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_DEPARTMENT' => 'Dział:',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Raportowanie bezpośrednie',
    'LBL_DO_NOT_CALL' => 'Nie dzwonić:',
    'LBL_DUPLICATE' => 'Znaleziono rekord o podobnych danych',
    'LBL_EMAIL_ADDRESS' => 'Adres e-mail:',
    'LBL_EMAIL_OPT_OUT' => 'Czy wyłączyć system powiadomień:',
    'LBL_EXISTING_ACCOUNT' => 'Użyto istniejcego kontrahenta',
    'LBL_EXISTING_CONTACT' => 'Użyto istniejcego kontaktu',
    'LBL_EXISTING_OPPORTUNITY' => 'Użyto istniejącej Szansy sprzedaży',
    'LBL_FAX_PHONE' => 'Faks:',
    'LBL_FIRST_NAME' => 'Imię:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_HOME_PHONE' => 'Dom:',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'Importuj vCard',
    'LBL_VCARD' => 'Wizytówka vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatycznie twórz nowy kontakt z pliku vCard pobranego z Twojego sytemu.',
    'LBL_INVALID_EMAIL' => 'Niepoprawny adres e-mail:',
    'LBL_INVITEE' => 'Raportowanie bezpośrednie',
    'LBL_LAST_NAME' => 'Nazwisko:',
    'LBL_LEAD_SOURCE' => 'Źródło pozyskania:',
    'LBL_LIST_ACCEPT_STATUS' => 'Status akceptacji',
    'LBL_LIST_ACCOUNT_NAME' => 'Nazwa kontrahenta',
    'LBL_LIST_CONTACT_NAME' => 'Nazwa kontaktu',
    'LBL_LIST_CONTACT_ROLE' => 'Profil uprawnień',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-mail',
    'LBL_LIST_FIRST_NAME' => 'Imię',
    'LBL_LIST_FORM_TITLE' => 'Lista Kontaków',
    'LBL_LIST_LAST_NAME' => 'Nazwisko',
    'LBL_LIST_NAME' => 'Nazwa',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_TITLE' => 'Stanowisko',
    'LBL_MOBILE_PHONE' => 'Tel. komórkowy:',
    'LBL_MODIFIED' => 'Zmodyfikowane przez:',
    'LBL_MODULE_NAME' => 'Kontakty',
    'LBL_MODULE_TITLE' => 'Kontakty: Strona główna',
    'LBL_NAME' => 'Nazwa:',
    'LBL_NEW_FORM_TITLE' => 'Dodaj Kontakt',
    'LBL_NOTE_SUBJECT' => 'Tytuł notatki',
    'LBL_OFFICE_PHONE' => 'Tel. służbowy:',
    'LBL_OPP_NAME' => 'Nazwa Szansy sprzedaży:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'ID powiązania szansy sprzedaży:',
    'LBL_OPPORTUNITY_ROLE' => 'Zależność szansy sprzedaży',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Dodatkowy adres e-mail:',
    'LBL_OTHER_PHONE' => 'Dodatkowy numer telefonu:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_APP' => 'Aplikacje Portalu:',
    'LBL_PORTAL_INFORMATION' => 'Informacje o portalu',
    'LBL_PORTAL_NAME' => 'Nazwa portalu:',
    'LBL_STREET' => 'Ulica',
    'LBL_POSTAL_CODE' => 'Kod pocztowy:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Miasto główne:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Kraj główny:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Kod pocztowy główny:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Województwo główne:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Adres główny:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Adres główny:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Adres główny:',
    'LBL_PRIMARY_ADDRESS' => 'Adres główny:',
    'LBL_PRODUCTS_TITLE' => 'Produkty',
    'LBL_REPORTS_TO_ID' => 'Raportuje do ID:',
    'LBL_REPORTS_TO' => 'Raportuje do:',
    'LBL_RESOURCE_NAME' => 'Nazwa źródła',
    'LBL_SALUTATION' => 'Forma grzecznościowa:',
    'LBL_SAVE_CONTACT' => 'Zapisz kontakt',
    'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie kontaktu',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Wybierz zaznaczone kontakty',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Wybierz zaznaczone kontakty',
    'LBL_STATE' => 'Województwo:',
    'LBL_SYNC_CONTACT' => 'Synchronizuj z Outlook&reg;:',
    'LBL_PROSPECT_LIST' => 'Lista perspektyw',
    'LBL_TITLE' => 'Stanowisko:',
    'LNK_CONTACT_LIST' => 'Przeglądaj kontakty',
    'LNK_IMPORT_VCARD' => 'Import vCard',
    'LNK_NEW_ACCOUNT' => 'Utwórz Kontrahenta',
    'LNK_NEW_APPOINTMENT' => 'Utwórz termin spotkania',
    'LNK_NEW_CALL' => 'Utwórz rozmowę telefoniczną',
    'LNK_NEW_CASE' => 'Utwórz Sprawę',
    'LNK_NEW_CONTACT' => 'Utwórz kontakt',
    'LNK_NEW_EMAIL' => 'Archiwum email',
    'LNK_NEW_MEETING' => 'Utwórz spotkanie',
    'LNK_NEW_NOTE' => 'Utwórz notatkę',
    'LNK_NEW_OPPORTUNITY' => 'Utwórz Szansę sprzedaży',
    'LNK_NEW_TASK' => 'Utwórz zadanie',
    'LNK_SELECT_ACCOUNT' => "Wybierz Kontrahenta",
    'NTC_DELETE_CONFIRMATION' => 'Czy na pewno chcesz usunąć ten rekord?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Tworzenie Szansy sprzedaży wymaga wybrania Kontrahenta. Wybierz już istniejącego, lub utwórz nowego.',
    'NTC_REMOVE_CONFIRMATION' => 'Czy na pewno chcesz usunąć ten kontakt ze sprawy?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Potencjalni Klienci',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Szanse Sprzedaży',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenty',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Skopiuj do głównego adresu',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Skopiuj do dodatkowego adresu',

    'LBL_CASES_SUBPANEL_TITLE' => 'Sprawy',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Błędy',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekty',
    'LBL_PROJECTS_RESOURCES' => 'Zasoby projektów',
    'LBL_CAMPAIGNS' => 'Kampanie reklamowe',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampanie reklamowe',
    'LBL_LIST_CITY' => 'Miasto',
    'LBL_LIST_STATE' => 'Woj.',
    'LBL_HOMEPAGE_TITLE' => 'Moje kontakty',
    'LBL_OPPORTUNITIES' => 'Szanse Sprzedaży',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekty',
    'LNK_IMPORT_CONTACTS' => 'Importuj kontakty',

    // SNIP
    'LBL_USER_SYNC' => 'Użytkownik do synchronizacji',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Wydarzenia',

    'LBL_AOP_CASE_UPDATES' => 'Aktualizacje Sprawy',
    'LBL_CREATE_PORTAL_USER' => 'Utwórz Użytkownika Portalu',
    'LBL_ENABLE_PORTAL_USER' => 'Włącz Użytkownika Portalu',
    'LBL_DISABLE_PORTAL_USER' => 'Zablokuj użytkownika portalu',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Nie udało się utworzyć użytkownika portalu',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Nie udało się włączyć użytkownika portalu',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Nie można wyłączyć użytkownika portalu',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Utworzony użytkownik portalu',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Włączony użytkownik portalu',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Wyłączony użytkownik portalu',
    'LBL_NO_JOOMLA_URL' => 'Nie określono URL portalu',
    'LBL_PORTAL_USER_TYPE' => 'Typ Użytkownika Portalu',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Konto wyłączone',
    'LBL_JOOMLA_ACCOUNT_ID' => 'ID Konta Joomla',

    'LBL_AOS_CONTRACTS' => 'Umowy',
    'LBL_AOS_INVOICES' => 'Faktury',
    'LBL_AOS_QUOTES' => 'Oferty',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Kontakty projektu z tytułu projektu',
    'LBL_LAST_MEETING' => 'Twoja ostatnia interakcja była spotkaniem dnia:',
    'LBL_LAST_CALL' => 'Twoja ostatnia interakcja była połączeniem dnia:',
    'LBL_LAST_EMAIL' => 'Twoja ostatnia interakcja była e-mailem dnia:',
    'LBL_NO_INTERACTION' => 'Nie masz jeszcze interakcji z tym kontaktem.',
);
