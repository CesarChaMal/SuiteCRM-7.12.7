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

    'ERR_DELETE_RECORD' => 'Aby usun???? Potencjalnego Klienta musisz okre??li?? numer rekordu.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Opis Kontrahenta',
    'LBL_ACCOUNT_ID' => 'ID Kontrahenta',
    'LBL_ACCOUNT_NAME' => 'Nazwa Kontrahenta:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Wydarzenia',
    'LBL_ADDRESS_INFORMATION' => 'Informacje adresowe',
    'LBL_ALT_ADDRESS_CITY' => 'Miasto dodatkowe',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Kraj dodatkowy',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Kod pocztowy dodatkowy',
    'LBL_ALT_ADDRESS_STATE' => 'Wojew??dztwo dodatkowe:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Adres dodatkowy:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Adres dodatkowy:',
    'LBL_ALT_ADDRESS_STREET' => 'Adres dodatkowy:',
    'LBL_ALTERNATE_ADDRESS' => 'Adres dodatkowy:',
    'LBL_ALT_ADDRESS' => 'Adres dodatkowy:',
    'LBL_ANY_ADDRESS' => 'Dodatkowy Adres:',
    'LBL_ANY_EMAIL' => 'Dowolny e-mail:',
    'LBL_ANY_PHONE' => 'Numer telefonu:',
    'LBL_ASSIGNED_TO_NAME' => 'Przypisano do',
    'LBL_ASSIGNED_TO_ID' => 'Przydzielony u??ytkownik:',
    'LBL_CITY' => 'Miasto:',
    'LBL_CONTACT_ID' => 'ID Kontaktu',
    'LBL_CONTACT_INFORMATION' => 'Przegl??d', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Nazwa Potencjalnego Klienta:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Potencjalny Klient-Szanse Sprzeda??y:',
    'LBL_CONTACT_ROLE' => 'Profil uprawnie??:',
    'LBL_CONTACT' => 'Potencjalny Klient:',
    'LBL_CONVERTED_ACCOUNT' => 'Przekonwertowani Kontrahenci:',
    'LBL_CONVERTED_CONTACT' => 'Przekonwertowane Kontakty:',
    'LBL_CONVERTED_OPP' => 'Przekonwertowane Szanse Sprzeda??y:',
    'LBL_CONVERTED' => 'Skonwertowany',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Konwertuj Potencjalnego Klienta',
    'LBL_CONVERTLEAD' => 'Konwertuj Potencjalnego Klienta',
    'LBL_CONVERTLEAD_WARNING' => 'Uwaga: status Potencjalnego Klienta kt??rych chcesz konwertowa?? jest "Zkonwertowany". Kontakt i / lub dokumenty ksi??gowe mog?? by?? utworzone z Potencjalnego Klienta. Je??li chcesz kontynuowa?? przekszta??cenia Potencjalnego Klienta, kliknij przycisk Zapisz. Aby powr??ci?? do Potencjalnego Klienta bez konwertowania, kliknij przycisk Anuluj.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' Mo??liwy Kontakt: ',
    'LBL_COUNTRY' => 'Kraj:',
    'LBL_CREATED_NEW' => 'Utworzono nowy(??)',
    'LBL_CREATED_ACCOUNT' => 'Utworzono nowego Kontrahenta',
    'LBL_CREATED_CALL' => 'Utworzono now?? rozmow?? telefoniczn??',
    'LBL_CREATED_CONTACT' => 'Utworzono nowy kontakt',
    'LBL_CREATED_MEETING' => 'Utworzono nowe spotkanie',
    'LBL_CREATED_OPPORTUNITY' => 'Utworzono now?? Szans?? Sprzeda??y',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Potencjalni Klienci',
    'LBL_DEPARTMENT' => 'Dzia??:',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_DO_NOT_CALL' => 'Nie dzwoni??:',
    'LBL_DUPLICATE' => 'Znaleziono rekord o podobnych danych',
    'LBL_EMAIL_ADDRESS' => 'Adres e-mail:',
    'LBL_EMAIL_OPT_OUT' => 'Czy wy????czy?? system powiadomie??:',
    'LBL_EXISTING_ACCOUNT' => 'U??yj istniej??cego kontrahenta',
    'LBL_EXISTING_CONTACT' => 'U??yto istniejcego kontaktu',
    'LBL_EXISTING_OPPORTUNITY' => 'U??yto istniej??cej Szansy sprzeda??y',
    'LBL_FAX_PHONE' => 'Faks:',
    'LBL_FIRST_NAME' => 'Imi??:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_HOME_PHONE' => 'Telefon domowy:',
    'LBL_IMPORT_VCARD' => 'Importuj vCard',
    'LBL_VCARD' => 'Wizyt??wka vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatycznie tw??rz Potencjalnego Klienta z pliku vCard pobranego z Twojego sytemu.',
    'LBL_INVALID_EMAIL' => 'Niepoprawny adres e-mail:',
    'LBL_INVITEE' => 'Raportowanie bezpo??rednie',
    'LBL_LAST_NAME' => 'Nazwisko:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Opis ??r??d??a Pozyskania Potencjalnego Klienta:',
    'LBL_LEAD_SOURCE' => '??r??d??o pozyskania:',
    'LBL_LIST_ACCEPT_STATUS' => 'Status akceptacji',
    'LBL_LIST_ACCOUNT_NAME' => 'Nazwa kontrahenta',
    'LBL_LIST_CONTACT_NAME' => 'Nazwa Potencjalnego Klienta',
    'LBL_LIST_CONTACT_ROLE' => 'Profil uprawnie??',
    'LBL_LIST_DATE_ENTERED' => 'Data utworzenia',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-mail',
    'LBL_LIST_FIRST_NAME' => 'Imi??',
    'LBL_LIST_FORM_TITLE' => 'Lista Potencjalnych Klient??w',
    'LBL_LIST_LAST_NAME' => 'Nazwisko',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Opis ??r??d??a Potencjalnego Klienta',
    'LBL_LIST_LEAD_SOURCE' => '??r??d??o pozyskania',
    'LBL_LIST_MY_LEADS' => 'Moi Potencjalni Klienci',
    'LBL_LIST_NAME' => 'Nazwa',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_REFERED_BY' => 'Polecony przez',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'Stanowisko',
    'LBL_MOBILE_PHONE' => 'Tel. kom??rkowy:',
    'LBL_MODULE_NAME' => 'Potencjalni Klienci',
    'LBL_MODULE_TITLE' => 'Potencjalni Klienci: Strona g????wna',
    'LBL_NAME' => 'Nazwa:',
    'LBL_NEW_FORM_TITLE' => 'Dodaj Potencjalnego Klienta',
    'LBL_OFFICE_PHONE' => 'Tel. s??u??bowy:',
    'LBL_OPP_NAME' => 'Nazwa Szansy sprzeda??y:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Kwota Szansy sprzeda??y:',
    'LBL_OPPORTUNITY_ID' => 'ID Szansy sprzeda??y',
    'LBL_OPPORTUNITY_NAME' => 'Nazwa Szansy sprzeda??y:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Dodatkowy adres e-mail:',
    'LBL_OTHER_PHONE' => 'Dodatkowy numer telefonu:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_APP' => 'Aplikacje Portalu',
    'LBL_PORTAL_INFORMATION' => 'Informacje o portalu',
    'LBL_PORTAL_NAME' => 'Nazwa portalu:',
    'LBL_POSTAL_CODE' => 'Kod pocztowy:',
    'LBL_STREET' => 'Ulica',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Miasto g????wne',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Kraj g????wny',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Kod pocztowy g????wny',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Wojew??dztwo g????wne',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Adres g????wny',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Adres g????wny',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Adres g????wny',
    'LBL_PRIMARY_ADDRESS' => 'Adres g????wny:',
    'LBL_REFERED_BY' => 'Polecony przez:',
    'LBL_REPORTS_TO_ID' => 'Raporty do ID',
    'LBL_REPORTS_TO' => 'Raportuje do:',
    'LBL_SALUTATION' => 'Forma grzeczno??ciowa',
    'LBL_MODIFIED' => 'Zmodyfikowane przez',
    'LBL_CREATED' => 'Utworzony przez',
    'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie Potencjalnego Klienta',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Wybierz zaznaczonych Potencjalnych Klient??w',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Wybierz zaznaczonych Potencjalnych Klient??w',
    'LBL_STATE' => 'Wojew??dztwo:',
    'LBL_STATUS_DESCRIPTION' => 'Opis Statusu:',
    'LBL_STATUS' => 'Status:',
    'LBL_TITLE' => 'Stanowisko:',
    'LNK_IMPORT_VCARD' => 'Utw??rz Potencjalnego Klienta z vCard',
    'LNK_LEAD_LIST' => 'Przegl??daj potencjalnych klient??w',
    'LNK_NEW_ACCOUNT' => 'Utw??rz Kontrahenta',
    'LNK_NEW_APPOINTMENT' => 'Utw??rz termin spotkania',
    'LNK_NEW_CONTACT' => 'Utw??rz kontakt',
    'LNK_NEW_LEAD' => 'Utw??rz Potencjalnego Klienta',
    'LNK_NEW_NOTE' => 'Utw??rz notatk??',
    'LNK_NEW_TASK' => 'Utw??rz zadanie',
    'LNK_NEW_CASE' => 'Utw??rz Spraw??',
    'LNK_NEW_CALL' => 'Utw??rz po????czenie telefoniczne',
    'LNK_NEW_MEETING' => 'Utw??rz spotkanie',
    'LNK_NEW_OPPORTUNITY' => 'Utw??rz Szans?? sprzeda??y',
    'LNK_SELECT_ACCOUNTS' => ' <b>LUB</b> Wybierz Kontrahent??w',
    'LNK_SELECT_CONTACTS' => ' <b>LUB</b> wybierz kontakt',
    'NTC_DELETE_CONFIRMATION' => 'Czy na pewno chcesz usun???? ten rekord?',
    'NTC_REMOVE_CONFIRMATION' => 'Czy na pewno chcesz usun???? wybranego Potencjalnego Klienta z tej Sprawy?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampanie reklamowe',
    'LBL_CAMPAIGN' => 'Kampania reklamowa:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Przydzielony u??ytkownik',
    'LBL_PROSPECT_LIST' => 'Lista perspektyw',
    'LBL_CAMPAIGN_LEAD' => 'Kampanie reklamowe',
    'LBL_BIRTHDATE' => 'Data urodzin:',
    'LBL_ASSISTANT_PHONE' => 'Telefon asystenta',
    'LBL_ASSISTANT' => 'Asystent',
    'LBL_CREATED_USER' => 'Utworzone przez u??ytkownika',
    'LBL_MODIFIED_USER' => 'U??ytkownik modyfikuj??cy',
    'LBL_CAMPAIGNS' => 'Kampanie reklamowe',
    'LBL_CONVERT_MODULE_NAME' => 'Modu??',
    'LBL_CONVERT_REQUIRED' => 'Wymagany',
    'LBL_CONVERT_SELECT' => 'Zezwalaj na wyb??r',
    'LBL_CONVERT_COPY' => 'Kopiowanie danych',
    'LBL_CONVERT_EDIT' => 'Edytuj',
    'LBL_CONVERT_DELETE' => 'Usu??',
    'LBL_CONVERT_ADD_MODULE' => 'Dodaj modu??',
    'LBL_CREATE' => 'Utw??rz',
    'LBL_SELECT' => ' <b>LUB</b> Wybierz',
    'LBL_WEBSITE' => 'Strona internetowa',
    'LNK_IMPORT_LEADS' => 'Import Potencjalnych Klient??w',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'Modu?? do tworzenia nowego rekordu w.',
    'LBL_REQUIRED_TIP' => 'Wymagane modu??y musz?? by?? utworzone lub wybrane przed konwertowaniem potencjalnego klienta.',
    'LBL_COPY_TIP' => 'Je??li zaznaczone s?? pola z potencjalnego klienta to zostan?? skopiowane pola o tej samej nazwie w nowo utworzonym rekordzie.',
    'LBL_SELECTION_TIP' => 'Modu??y z zale??nym polem Kontaktu mog?? raczej zosta?? wybrane, ni?? utworzone, podczas procesu konwersji Potencjalnego Klienta.',
    'LBL_EDIT_TIP' => 'Zmieni?? uk??ad konwersji dla tego modu??u.',
    'LBL_DELETE_TIP' => 'Usu?? ten modu?? z uk??adem konwersji.',

    'LBL_ACTIVITIES_MOVE' => 'Przenie?? wydarzenia do',
    'LBL_ACTIVITIES_COPY' => 'Kopiuj wydarzenia do',
    'LBL_ACTIVITIES_MOVE_HELP' => "Wybierz rekord do kt??rego chcesz przenie???? aktywno??ci Potencjalnego Klienta. Zadania, Spotkania, Notatki i Wiadomo??ci E-mail zostan?? przeniesione do wybranego rekordu(??w).",
    'LBL_ACTIVITIES_COPY_HELP' => "Wybierz rekord(y) dla kt??rych utworzy?? kopi?? aktywno??ci Potencjalnego Klienta. Nowe Zadania, Telefony, Spotkania i Notatki zostan?? utworzone dla ka??dego wybranego rekordu(??w). Wiadomo??ci E-mail zostan?? powi??zane do wybranego rekordu(??w).",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'ID Kampanii reklamowej:',
    'LBL_EDITLAYOUT' => 'Edycja wygladu' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Wprowad?? dat??' /*for 508 compliance fix*/,
    'LBL_LOADING' => '??adowanie' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Edytuj' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Wydarzenia',
);
