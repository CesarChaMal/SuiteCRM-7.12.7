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
    'LBL_MODULE_NAME' => 'Docelowi odbiorcy',
    'LBL_MODULE_ID' => 'Docelowi odbiorcy',
    'LBL_INVITEE' => 'Raportowanie bezpo??rednie',
    'LBL_MODULE_TITLE' => 'Docelowi odbiorcy: Strona g????wna',
    'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie docelowego odbiorcy',
    'LBL_LIST_FORM_TITLE' => 'Lista docelowych odbiorc??w',
    'LBL_NEW_FORM_TITLE' => 'Utw??rz docelowego odbiorc??',
    'LBL_LIST_NAME' => 'Nazwa',
    'LBL_LIST_LAST_NAME' => 'Nazwisko',
    'LBL_LIST_TITLE' => 'Stanowisko',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-mail',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_FIRST_NAME' => 'Imi??',
    'LBL_ASSIGNED_TO_NAME' => 'Przypisano do',
    'LBL_ASSIGNED_TO_ID' => 'Przypisane do:',
    'LBL_CAMPAIGN_ID' => 'ID Kampanii reklamowej:',
    'LBL_EXISTING_ACCOUNT' => 'U??yto istniej??cego kontrahenta',
    'LBL_CREATED_ACCOUNT' => 'Utworzono nowego kontrahenta',
    'LBL_CREATED_CALL' => 'Utworzono now?? Rozmow?? telefoniczn??',
    'LBL_CREATED_MEETING' => 'Nowe spotkanie utworzone',
    'LBL_NAME' => 'Nazwa:',
    'LBL_PROSPECT_INFORMATION' => 'Przegl??d', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'Wi??cej informacji',
    'LBL_FIRST_NAME' => 'Imi??:',
    'LBL_OFFICE_PHONE' => 'Tel. s??u??bowy:',
    'LBL_ANY_PHONE' => 'Numer telefonu:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_LAST_NAME' => 'Nazwisko:',
    'LBL_MOBILE_PHONE' => 'Tel. kom??rkowy:',
    'LBL_HOME_PHONE' => 'Dom:',
    'LBL_OTHER_PHONE' => 'Dodatkowy numer telefonu:',
    'LBL_FAX_PHONE' => 'Faks:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Adres g????wny:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Miasto g????wne:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Kraj g????wny:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Wojew??dztwo g????wne:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Kod pocztowy g????wny:',
    'LBL_ALT_ADDRESS_STREET' => 'Adres dodatkowy:',
    'LBL_ALT_ADDRESS_CITY' => 'Miasto dodatkowe',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Kraj dodatkowy',
    'LBL_ALT_ADDRESS_STATE' => 'Wojew??dztwo dodatkowe:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Kod pocztowy dodatkowy',
    'LBL_TITLE' => 'Stanowisko:',
    'LBL_DEPARTMENT' => 'Dzia??:',
    'LBL_BIRTHDATE' => 'Data urodzin:',
    'LBL_EMAIL_ADDRESS' => 'Adres e-mail:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Dodatkowy adres e-mail:',
    'LBL_ANY_EMAIL' => 'Dowolny e-mail:',
    'LBL_ASSISTANT' => 'Asystent:',
    'LBL_ASSISTANT_PHONE' => 'Telefon asystenta:',
    'LBL_DO_NOT_CALL' => 'Nie dzwoni??:',
    'LBL_EMAIL_OPT_OUT' => 'Czy wy????czy?? system powiadomie??:',
    'LBL_PRIMARY_ADDRESS' => 'Adres g????wny:',
    'LBL_ALTERNATE_ADDRESS' => 'Adres dodatkowy:',
    'LBL_ANY_ADDRESS' => 'Dodatkowy Adres:',
    'LBL_CITY' => 'Miasto:',
    'LBL_STATE' => 'Wojew??dztwo:',
    'LBL_POSTAL_CODE' => 'Kod pocztowy:',
    'LBL_COUNTRY' => 'Kraj:',
    'LBL_ADDRESS_INFORMATION' => 'Informacje adresowe',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_OPP_NAME' => 'Nazwa Szansy sprzeda??y:',
    'LBL_IMPORT_VCARD' => 'Importuj vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatycznie tw??rz nowy kontakt z pliku vCard pobranego z Twojego sytemu.',
    'LBL_DUPLICATE' => 'Mo??liwa duplikaty docelowych odbiorc??w',
    'MSG_SHOW_DUPLICATES' => 'Docelowy odbiorca o podobnych dany ju?? istnieje w systemie. Lista z podobnymi danymi znajduje si?? poni??ej.<br>Kliknij przycisk Zapisz, aby kontynuowa?? tworzenie nowego Docelowego odbiorcy, lub przycisk Anuluj aby przerwa?? tworzenie.',
    'MSG_DUPLICATE' => 'Docelowy odbiorca o podobnych dany ju?? istnieje w systemie. Lista z podobnymi danymi znajduje si?? poni??ej.<br>Kliknij przycisk Zapisz, aby kontynuowa?? tworzenie, lub przycisk Anuluj lub przycisk Anuluj aby przerwa?? tworzenie.',
    'LNK_IMPORT_VCARD' => 'Utw??rz z vCard',
    'LNK_NEW_ACCOUNT' => 'Utw??rz Kontrahenta',
    'LNK_NEW_OPPORTUNITY' => 'Utw??rz Szans?? sprzeda??y',
    'LNK_NEW_CASE' => 'Utw??rz Spraw??',
    'LNK_NEW_NOTE' => 'Dodaj notatk??',
    'LNK_NEW_CALL' => 'Utw??rz po????czenie telefoniczne',
    'LNK_NEW_EMAIL' => 'Archiwum email',
    'LNK_NEW_MEETING' => 'Utw??rz spotkanie',
    'LNK_NEW_TASK' => 'Utw??rz zadanie',
    'LNK_NEW_APPOINTMENT' => 'Utw??rz termin spotkania',
    'LNK_IMPORT_PROSPECTS' => 'Importuj docelowych odbiorc??w',
    'NTC_DELETE_CONFIRMATION' => 'Czy na pewno chcesz usun???? ten wpis?',
    'NTC_REMOVE_CONFIRMATION' => 'Czy na pewno chcesz usun???? ten kontakt ze sprawy?',
    'ERR_DELETE_RECORD' => 'Aby usun???? Kontakt musisz okre??li?? numer wpisu.',
    'LBL_SALUTATION' => 'Forma grzeczno??ciowa',
    'LBL_CREATED_OPPORTUNITY' => 'Utworzono now?? Szans?? Sprzeda??y',
    'LNK_SELECT_ACCOUNT' => "Wybierz Kontrahenta",
    'LNK_NEW_PROSPECT' => 'Utw??rz docelowego odbiorc??',
    'LNK_PROSPECT_LIST' => 'Przegl??daj docelowych odbiorc??w',
    'LNK_NEW_CAMPAIGN' => 'Utw??rz kampani?? reklamow??',
    'LNK_CAMPAIGN_LIST' => 'Kampanie reklamowe',
    'LNK_NEW_PROSPECT_LIST' => 'Utw??rz grup?? docelowych odbiorc??w',
    'LNK_PROSPECT_LIST_LIST' => 'Lista docelowych odbiorc??w',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Wybierz zaznaczonych docelowych odbiorc??w',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Wybierz zaznaczonych docelowych odbiorc??w',
    'LBL_INVALID_EMAIL' => 'Niepoprawny adres e-mail:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Grupy docelowe',
    'LBL_PROSPECT_LIST' => 'Lista perspektyw',
    'LBL_CONVERT_BUTTON_TITLE' => 'Konwertuj docelowych odbiorc??w',
    'LBL_CONVERT_BUTTON_LABEL' => 'Konwertuj docelowych odbiorc??w',
    'LNK_NEW_CONTACT' => 'Dodaj Kontakt',
    'LBL_CREATED_CONTACT' => "Utworzono nowy kontakt",
    'LBL_CAMPAIGNS' => 'Kampanie reklamowe',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Historia kampanii',
    'LBL_TRACKER_KEY' => 'Klucz ??ledzenia',
    'LBL_LEAD_ID' => 'ID Potencjalnego Klienta',
    'LBL_CONVERTED_LEAD' => 'Przekonwertowani potencjalni klienci',
    'LBL_ACCOUNT_NAME' => 'Nazwa kontrahenta',
    'LBL_EDIT_ACCOUNT_NAME' => 'Nazwa Kontrahenta:',
    'LBL_CREATED_USER' => 'Utworzone przez u??ytkownika',
    'LBL_MODIFIED_USER' => 'U??ytkownik modyfikuj??cy',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Wydarzenia',
);
