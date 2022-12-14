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
    'LBL_NAME' => 'Nazwa',
    'LBL_CREATED_USER' => 'Utworzony przez U??ytkownika',
    'LBL_MODIFIED_USER' => 'Zmodyfikowany przez U??ytkownika',
    'LBL_LIST_NAME' => 'Nazwa',
    'LBL_EDIT_BUTTON' => 'Edytuj',
    'LBL_REMOVE' => 'Usu??',
    'LBL_LIST_FORM_TITLE' => 'Lista Zdarze??',
    'LBL_MODULE_NAME' => 'Zdarzenie',
    'LBL_MODULE_TITLE' => 'Wydarzenie',
    'LBL_HOMEPAGE_TITLE' => 'Moje Wydarzenia',
    'LNK_NEW_RECORD' => 'Utw??rz Zdarzenie',
    'LNK_LIST' => 'Przegl??daj wydarzenia',
    'LBL_SEARCH_FORM_TITLE' => 'Szukaj wydarzenia',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Dzia??ania',
    'LBL_NEW_FORM_TITLE' => 'Nowe zdarzenie',
    'LBL_LOCATION' => 'Lokalizacja',
    'LBL_START_DATE' => 'data pocz??tkowa',
    'LBL_END_DATE' => 'Data/Czas Zako??czenia',
    'LBL_BUDGET' => 'Bud??et',
    'LBL_DATE' => 'Data Rozpocz??cia',
    'LBL_DATE_END' => 'Data Zako??czenia',
    'LBL_DURATION' => 'Czas trwania',
    'LBL_INVITE_TEMPLATES' => 'Szablon zaproszenia e-mail',
    'LBL_INVITE_PDF' => 'Wy??lij zaproszenia',
    'LBL_EDITVIEW_PANEL1' => 'Szczeg????y wydarzenia',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Delegaci',
    'LBL_ACCEPT_REDIRECT' => 'Zaakceptuj URL przekierowania',
    'LBL_DECLINE_REDIRECT' => 'Odrzu?? przekierowanie URL',
    'LBL_SELECT_DELEGATES' => 'Wybierz delegat??w',
    'LBL_SELECT_DELEGATES_TITLE' => 'Wybierz delegat??w:-',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'Lista docelowych odbiorc??w',
    'LBL_SELECT_DELEGATES_TARGETS' => 'Docelowi odbiorcy',
    'LBL_SELECT_DELEGATES_CONTACTS' => 'Kontakty',
    'LBL_SELECT_DELEGATES_LEADS' => 'Potencjalni Klienci',
    'LBL_MANAGE_DELEGATES' => 'Zarz??dzanie delegatami',
    'LBL_MANAGE_DELEGATES_TITLE' => 'Zarz??dzanie delegatami:-',
    'LBL_MANAGE_ACCEPTANCES' => 'Zarz??dzanie zgodami',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => 'Zarz??dzanie zgodami:-',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => 'Zaakceptowano',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => 'Odrzucony',
    'LBL_MANAGE_POPUP_ERROR' => 'Nie wybrano delegat??w.',
    'LBL_MANAGE_DELEGATES_INVITED' => 'Zaproszenie',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'Nie zaproszony',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'Udzia??',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'Brak udzia??u',
    'LBL_SUCCESS_MSG' => 'Wszystkie zaproszenia zosta??y pomy??lnie wys??ane.',
    'LBL_ERROR_MSG_1' => 'Wszystkie powi??zane kontakty zosta??y ju?? zaproszone.',
    'LBL_ERROR_MSG_2' => 'Wysy??anie wiadomo??ci z zaproszeniem nie powiod??o si??! Sprawd?? ustawienia poczty e-mail.',
    'LBL_ERROR_MSG_3' => 'Wi??cej ni?? 10 e-maili nie uda??o si?? wys??a??. Prosz?? sprawdzi??, czy wszystkie kontakty, kt??re zapraszasz posiadaj?? prawid??owy adres e-mail. (Zobacz suitecrm.log)',
    'LBL_ERROR_MSG_4' => ' e-maili nie uda??o si?? wys??a??. Prosz?? sprawdzi??, czy wszystkie kontakty, kt??re zapraszasz posiadaj?? prawid??owy adres e-mail. (Zobacz suitecrm.log)', // LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => 'Nieprawid??owy szablon E-mail',
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
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'Lokalizacje wydarze?? z tytu??u wydarzenia',
    // Email links
    'LBL_ACCEPT_LINK' => 'Akceptowa??',
    'LBL_DECLINE_LINK' => 'Odrzu??',
    
);
