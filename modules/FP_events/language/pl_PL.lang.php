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
    'LBL_ASSIGNED_TO_ID' => 'ID przydzielonego użytkownika',
    'LBL_ASSIGNED_TO_NAME' => 'Przypisano do',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data utworzenia',
    'LBL_DATE_MODIFIED' => 'Data Modyfikacji:',
    'LBL_MODIFIED' => 'Zmodyfikowane przez',
    'LBL_MODIFIED_NAME' => 'Nazwa użytkownika modyfikującego',
    'LBL_CREATED' => 'Utworzone przez',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_DELETED' => 'Usunięte',
    'LBL_NAME' => 'Nazwa',
    'LBL_CREATED_USER' => 'Utworzony przez Użytkownika',
    'LBL_MODIFIED_USER' => 'Zmodyfikowany przez Użytkownika',
    'LBL_LIST_NAME' => 'Nazwa',
    'LBL_EDIT_BUTTON' => 'Edytuj',
    'LBL_REMOVE' => 'Usuń',
    'LBL_LIST_FORM_TITLE' => 'Lista Zdarzeń',
    'LBL_MODULE_NAME' => 'Zdarzenie',
    'LBL_MODULE_TITLE' => 'Wydarzenie',
    'LBL_HOMEPAGE_TITLE' => 'Moje Wydarzenia',
    'LNK_NEW_RECORD' => 'Utwórz Zdarzenie',
    'LNK_LIST' => 'Przeglądaj wydarzenia',
    'LBL_SEARCH_FORM_TITLE' => 'Szukaj wydarzenia',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Działania',
    'LBL_NEW_FORM_TITLE' => 'Nowe zdarzenie',
    'LBL_LOCATION' => 'Lokalizacja',
    'LBL_START_DATE' => 'data początkowa',
    'LBL_END_DATE' => 'Data/Czas Zakończenia',
    'LBL_BUDGET' => 'Budżet',
    'LBL_DATE' => 'Data Rozpoczęcia',
    'LBL_DATE_END' => 'Data Zakończenia',
    'LBL_DURATION' => 'Czas trwania',
    'LBL_INVITE_TEMPLATES' => 'Szablon zaproszenia e-mail',
    'LBL_INVITE_PDF' => 'Wyślij zaproszenia',
    'LBL_EDITVIEW_PANEL1' => 'Szczegóły wydarzenia',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Delegaci',
    'LBL_ACCEPT_REDIRECT' => 'Zaakceptuj URL przekierowania',
    'LBL_DECLINE_REDIRECT' => 'Odrzuć przekierowanie URL',
    'LBL_SELECT_DELEGATES' => 'Wybierz delegatów',
    'LBL_SELECT_DELEGATES_TITLE' => 'Wybierz delegatów:-',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'Lista docelowych odbiorców',
    'LBL_SELECT_DELEGATES_TARGETS' => 'Docelowi odbiorcy',
    'LBL_SELECT_DELEGATES_CONTACTS' => 'Kontakty',
    'LBL_SELECT_DELEGATES_LEADS' => 'Potencjalni Klienci',
    'LBL_MANAGE_DELEGATES' => 'Zarządzanie delegatami',
    'LBL_MANAGE_DELEGATES_TITLE' => 'Zarządzanie delegatami:-',
    'LBL_MANAGE_ACCEPTANCES' => 'Zarządzanie zgodami',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => 'Zarządzanie zgodami:-',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => 'Zaakceptowano',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => 'Odrzucony',
    'LBL_MANAGE_POPUP_ERROR' => 'Nie wybrano delegatów.',
    'LBL_MANAGE_DELEGATES_INVITED' => 'Zaproszenie',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'Nie zaproszony',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'Udział',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'Brak udziału',
    'LBL_SUCCESS_MSG' => 'Wszystkie zaproszenia zostały pomyślnie wysłane.',
    'LBL_ERROR_MSG_1' => 'Wszystkie powiązane kontakty zostały już zaproszone.',
    'LBL_ERROR_MSG_2' => 'Wysyłanie wiadomości z zaproszeniem nie powiodło się! Sprawdź ustawienia poczty e-mail.',
    'LBL_ERROR_MSG_3' => 'Więcej niż 10 e-maili nie udało się wysłać. Proszę sprawdzić, czy wszystkie kontakty, które zapraszasz posiadają prawidłowy adres e-mail. (Zobacz suitecrm.log)',
    'LBL_ERROR_MSG_4' => ' e-maili nie udało się wysłać. Proszę sprawdzić, czy wszystkie kontakty, które zapraszasz posiadają prawidłowy adres e-mail. (Zobacz suitecrm.log)', // LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => 'Nieprawidłowy szablon E-mail',
    'LBL_EMAIL_INVITE' => 'Zaproszenie e-mail',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => 'Kontakty',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => 'Lokalizacja',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => 'Potencjalni klienci',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => 'Docelowi odbiorcy',

    'LBL_HOURS_ABBREV' => 'godz.',
    'LBL_MINSS_ABBREV' => 'min.',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'Delegaci',

    // Attendance report
    'LBL_CONTACT_NAME' => 'Nazwa',
    'LBL_ACCOUNT_NAME' => 'Firma',
    'LBL_SIGNATURE' => 'Podpis',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => 'Zaproszenie',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => 'Status',

    'LBL_ACTIVITY_STATUS' => 'Status wydarzenia',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'Lokalizacje wydarzeń z tytułu wydarzenia',
    // Email links
    'LBL_ACCEPT_LINK' => 'Akceptować',
    'LBL_DECLINE_LINK' => 'Odrzuć',
    
);
