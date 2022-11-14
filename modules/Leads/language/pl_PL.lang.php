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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => 'Aby usunąć Potencjalnego Klienta musisz określić numer rekordu.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Opis Kontrahenta',
    'LBL_ACCOUNT_ID' => 'ID Kontrahenta',
    'LBL_ACCOUNT_NAME' => 'Nazwa Kontrahenta:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Wydarzenia',
    'LBL_ADDRESS_INFORMATION' => 'Informacje adresowe',
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
    'LBL_ASSIGNED_TO_NAME' => 'Przypisano do',
    'LBL_ASSIGNED_TO_ID' => 'Przydzielony użytkownik:',
    'LBL_CITY' => 'Miasto:',
    'LBL_CONTACT_ID' => 'ID Kontaktu',
    'LBL_CONTACT_INFORMATION' => 'Przegląd', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Nazwa Potencjalnego Klienta:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Potencjalny Klient-Szanse Sprzedaży:',
    'LBL_CONTACT_ROLE' => 'Profil uprawnień:',
    'LBL_CONTACT' => 'Potencjalny Klient:',
    'LBL_CONVERTED_ACCOUNT' => 'Przekonwertowani Kontrahenci:',
    'LBL_CONVERTED_CONTACT' => 'Przekonwertowane Kontakty:',
    'LBL_CONVERTED_OPP' => 'Przekonwertowane Szanse Sprzedaży:',
    'LBL_CONVERTED' => 'Skonwertowany',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Konwertuj Potencjalnego Klienta',
    'LBL_CONVERTLEAD' => 'Konwertuj Potencjalnego Klienta',
    'LBL_CONVERTLEAD_WARNING' => 'Uwaga: status Potencjalnego Klienta których chcesz konwertować jest "Zkonwertowany". Kontakt i / lub dokumenty księgowe mogą być utworzone z Potencjalnego Klienta. Jeśli chcesz kontynuować przekształcenia Potencjalnego Klienta, kliknij przycisk Zapisz. Aby powrócić do Potencjalnego Klienta bez konwertowania, kliknij przycisk Anuluj.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' Możliwy Kontakt: ',
    'LBL_COUNTRY' => 'Kraj:',
    'LBL_CREATED_NEW' => 'Utworzono nowy(ą)',
    'LBL_CREATED_ACCOUNT' => 'Utworzono nowego Kontrahenta',
    'LBL_CREATED_CALL' => 'Utworzono nową rozmowę telefoniczną',
    'LBL_CREATED_CONTACT' => 'Utworzono nowy kontakt',
    'LBL_CREATED_MEETING' => 'Utworzono nowe spotkanie',
    'LBL_CREATED_OPPORTUNITY' => 'Utworzono nową Szansę Sprzedaży',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Potencjalni Klienci',
    'LBL_DEPARTMENT' => 'Dział:',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_DO_NOT_CALL' => 'Nie dzwonić:',
    'LBL_DUPLICATE' => 'Znaleziono rekord o podobnych danych',
    'LBL_EMAIL_ADDRESS' => 'Adres e-mail:',
    'LBL_EMAIL_OPT_OUT' => 'Czy wyłączyć system powiadomień:',
    'LBL_EXISTING_ACCOUNT' => 'Użyj istniejącego kontrahenta',
    'LBL_EXISTING_CONTACT' => 'Użyto istniejcego kontaktu',
    'LBL_EXISTING_OPPORTUNITY' => 'Użyto istniejącej Szansy sprzedaży',
    'LBL_FAX_PHONE' => 'Faks:',
    'LBL_FIRST_NAME' => 'Imię:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_HOME_PHONE' => 'Telefon domowy:',
    'LBL_IMPORT_VCARD' => 'Importuj vCard',
    'LBL_VCARD' => 'Wizytówka vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatycznie twórz Potencjalnego Klienta z pliku vCard pobranego z Twojego sytemu.',
    'LBL_INVALID_EMAIL' => 'Niepoprawny adres e-mail:',
    'LBL_INVITEE' => 'Raportowanie bezpośrednie',
    'LBL_LAST_NAME' => 'Nazwisko:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Opis Źródła Pozyskania Potencjalnego Klienta:',
    'LBL_LEAD_SOURCE' => 'Źródło pozyskania:',
    'LBL_LIST_ACCEPT_STATUS' => 'Status akceptacji',
    'LBL_LIST_ACCOUNT_NAME' => 'Nazwa kontrahenta',
    'LBL_LIST_CONTACT_NAME' => 'Nazwa Potencjalnego Klienta',
    'LBL_LIST_CONTACT_ROLE' => 'Profil uprawnień',
    'LBL_LIST_DATE_ENTERED' => 'Data utworzenia',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-mail',
    'LBL_LIST_FIRST_NAME' => 'Imię',
    'LBL_LIST_FORM_TITLE' => 'Lista Potencjalnych Klientów',
    'LBL_LIST_LAST_NAME' => 'Nazwisko',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Opis źródła Potencjalnego Klienta',
    'LBL_LIST_LEAD_SOURCE' => 'Źródło pozyskania',
    'LBL_LIST_MY_LEADS' => 'Moi Potencjalni Klienci',
    'LBL_LIST_NAME' => 'Nazwa',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_REFERED_BY' => 'Polecony przez',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'Stanowisko',
    'LBL_MOBILE_PHONE' => 'Tel. komórkowy:',
    'LBL_MODULE_NAME' => 'Potencjalni Klienci',
    'LBL_MODULE_TITLE' => 'Potencjalni Klienci: Strona główna',
    'LBL_NAME' => 'Nazwa:',
    'LBL_NEW_FORM_TITLE' => 'Dodaj Potencjalnego Klienta',
    'LBL_OFFICE_PHONE' => 'Tel. służbowy:',
    'LBL_OPP_NAME' => 'Nazwa Szansy sprzedaży:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Kwota Szansy sprzedaży:',
    'LBL_OPPORTUNITY_ID' => 'ID Szansy sprzedaży',
    'LBL_OPPORTUNITY_NAME' => 'Nazwa Szansy sprzedaży:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Dodatkowy adres e-mail:',
    'LBL_OTHER_PHONE' => 'Dodatkowy numer telefonu:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_APP' => 'Aplikacje Portalu',
    'LBL_PORTAL_INFORMATION' => 'Informacje o portalu',
    'LBL_PORTAL_NAME' => 'Nazwa portalu:',
    'LBL_POSTAL_CODE' => 'Kod pocztowy:',
    'LBL_STREET' => 'Ulica',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Miasto główne',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Kraj główny',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Kod pocztowy główny',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Województwo główne',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Adres główny',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Adres główny',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Adres główny',
    'LBL_PRIMARY_ADDRESS' => 'Adres główny:',
    'LBL_REFERED_BY' => 'Polecony przez:',
    'LBL_REPORTS_TO_ID' => 'Raporty do ID',
    'LBL_REPORTS_TO' => 'Raportuje do:',
    'LBL_SALUTATION' => 'Forma grzecznościowa',
    'LBL_MODIFIED' => 'Zmodyfikowane przez',
    'LBL_CREATED' => 'Utworzony przez',
    'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie Potencjalnego Klienta',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Wybierz zaznaczonych Potencjalnych Klientów',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Wybierz zaznaczonych Potencjalnych Klientów',
    'LBL_STATE' => 'Województwo:',
    'LBL_STATUS_DESCRIPTION' => 'Opis Statusu:',
    'LBL_STATUS' => 'Status:',
    'LBL_TITLE' => 'Stanowisko:',
    'LNK_IMPORT_VCARD' => 'Utwórz Potencjalnego Klienta z vCard',
    'LNK_LEAD_LIST' => 'Przeglądaj potencjalnych klientów',
    'LNK_NEW_ACCOUNT' => 'Utwórz Kontrahenta',
    'LNK_NEW_APPOINTMENT' => 'Utwórz termin spotkania',
    'LNK_NEW_CONTACT' => 'Utwórz kontakt',
    'LNK_NEW_LEAD' => 'Utwórz Potencjalnego Klienta',
    'LNK_NEW_NOTE' => 'Utwórz notatkę',
    'LNK_NEW_TASK' => 'Utwórz zadanie',
    'LNK_NEW_CASE' => 'Utwórz Sprawę',
    'LNK_NEW_CALL' => 'Utwórz połączenie telefoniczne',
    'LNK_NEW_MEETING' => 'Utwórz spotkanie',
    'LNK_NEW_OPPORTUNITY' => 'Utwórz Szansę sprzedaży',
    'LNK_SELECT_ACCOUNTS' => ' <b>LUB</b> Wybierz Kontrahentów',
    'LNK_SELECT_CONTACTS' => ' <b>LUB</b> wybierz kontakt',
    'NTC_DELETE_CONFIRMATION' => 'Czy na pewno chcesz usunąć ten rekord?',
    'NTC_REMOVE_CONFIRMATION' => 'Czy na pewno chcesz usunąć wybranego Potencjalnego Klienta z tej Sprawy?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampanie reklamowe',
    'LBL_CAMPAIGN' => 'Kampania reklamowa:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Przydzielony użytkownik',
    'LBL_PROSPECT_LIST' => 'Lista perspektyw',
    'LBL_CAMPAIGN_LEAD' => 'Kampanie reklamowe',
    'LBL_BIRTHDATE' => 'Data urodzin:',
    'LBL_ASSISTANT_PHONE' => 'Telefon asystenta',
    'LBL_ASSISTANT' => 'Asystent',
    'LBL_CREATED_USER' => 'Utworzone przez użytkownika',
    'LBL_MODIFIED_USER' => 'Użytkownik modyfikujący',
    'LBL_CAMPAIGNS' => 'Kampanie reklamowe',
    'LBL_CONVERT_MODULE_NAME' => 'Moduł',
    'LBL_CONVERT_REQUIRED' => 'Wymagany',
    'LBL_CONVERT_SELECT' => 'Zezwalaj na wybór',
    'LBL_CONVERT_COPY' => 'Kopiowanie danych',
    'LBL_CONVERT_EDIT' => 'Edytuj',
    'LBL_CONVERT_DELETE' => 'Usuń',
    'LBL_CONVERT_ADD_MODULE' => 'Dodaj moduł',
    'LBL_CREATE' => 'Utwórz',
    'LBL_SELECT' => ' <b>LUB</b> Wybierz',
    'LBL_WEBSITE' => 'Strona internetowa',
    'LNK_IMPORT_LEADS' => 'Import Potencjalnych Klientów',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'Moduł do tworzenia nowego rekordu w.',
    'LBL_REQUIRED_TIP' => 'Wymagane moduły muszą być utworzone lub wybrane przed konwertowaniem potencjalnego klienta.',
    'LBL_COPY_TIP' => 'Jeśli zaznaczone są pola z potencjalnego klienta to zostaną skopiowane pola o tej samej nazwie w nowo utworzonym rekordzie.',
    'LBL_SELECTION_TIP' => 'Moduły z zależnym polem Kontaktu mogą raczej zostać wybrane, niż utworzone, podczas procesu konwersji Potencjalnego Klienta.',
    'LBL_EDIT_TIP' => 'Zmienić układ konwersji dla tego modułu.',
    'LBL_DELETE_TIP' => 'Usuń ten moduł z układem konwersji.',

    'LBL_ACTIVITIES_MOVE' => 'Przenieś wydarzenia do',
    'LBL_ACTIVITIES_COPY' => 'Kopiuj wydarzenia do',
    'LBL_ACTIVITIES_MOVE_HELP' => "Wybierz rekord do którego chcesz przenieść aktywności Potencjalnego Klienta. Zadania, Spotkania, Notatki i Wiadomości E-mail zostaną przeniesione do wybranego rekordu(ów).",
    'LBL_ACTIVITIES_COPY_HELP' => "Wybierz rekord(y) dla których utworzyć kopię aktywności Potencjalnego Klienta. Nowe Zadania, Telefony, Spotkania i Notatki zostaną utworzone dla każdego wybranego rekordu(ów). Wiadomości E-mail zostaną powiązane do wybranego rekordu(ów).",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'ID Kampanii reklamowej:',
    'LBL_EDITLAYOUT' => 'Edycja wygladu' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Wprowadź datę' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Ładowanie' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Edytuj' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Wydarzenia',
);
