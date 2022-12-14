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
    'LBL_ASSIGNED_TO_NAME' => 'U??ytkownik',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data utworzenia',
    'LBL_DATE_MODIFIED' => 'Data modyfikacji',
    'LBL_MODIFIED' => 'Zmodyfikowane przez',
    'LBL_MODIFIED_NAME' => 'Nazwa u??ytkownika modyfikuj??cego',
    'LBL_CREATED' => 'Utworzony przez',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_DELETED' => 'Usuni??te',
    'LBL_NAME' => 'Nazwa u??ytkownika aplikacji',
    'LBL_CREATED_USER' => 'Utworzony przez U??ytkownika',
    'LBL_MODIFIED_USER' => 'Zmodyfikowane przez u??ytkownika',
    'LBL_LIST_NAME' => 'Nazwa',
    'LBL_LIST_FORM_TITLE' => 'Lista kont zewn??trznych',
    'LBL_MODULE_NAME' => 'Konto zewn??trzne',
    'LBL_MODULE_TITLE' => 'Konta zewn??trzne',
    'LBL_HOMEPAGE_TITLE' => 'Moje Konta zewn??trzne',
    'LNK_NEW_RECORD' => 'Utw??rz konto zewn??trzne',
    'LNK_LIST' => 'Przegl??daj konta zewn??trzne',
    'LBL_SEARCH_FORM_TITLE' => 'Szukaj zewn??trzne ??r??d??o',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Wydarzenia',
    'LBL_NEW_FORM_TITLE' => 'Nowe konto zewn??trzne',
    'LBL_PASSWORD' => 'Has??o aplikacji',
    'LBL_USER_NAME' => 'Nazwa u??ytkownika aplikacji',
    'LBL_URL' => 'Adres URL',
    'LBL_APPLICATION' => 'Aplikacja',
    'LBL_API_DATA' => 'Dane API',
    'LBL_API_CONSKEY' => 'Klucz konsumenta (API)',
    'LBL_API_CONSSECRET' => 'Has??o konsumenta',
    'LBL_API_OAUTHTOKEN' => 'OAuth Token',
    'LBL_AUTH_UNSUPPORTED' => "Ta metoda autoryzacji nie jest obs??ugiwana przez aplikacj??",
    'LBL_AUTH_ERROR' => 'Pr??ba po????czenia z tym kontem nie powiod??a si??.',
    'LBL_VALIDATED' => 'Pod????czony',
    'LBL_ACTIVE' => 'Aktywny',
    'LBL_OAUTH_NAME' => '%s',
    'LBL_CONNECT_BUTTON_TITLE' => 'Pod????cz',
    'LBL_NOTE' => 'Nale??y pami??ta??',
    'LBL_CONNECTED' => 'Pod????czony',

    'LBL_ERR_NO_AUTHINFO' => 'Brak informacji uwierzytelniania dla tego konta.',
    'LBL_ERR_NO_TOKEN' => 'Nie ma prawid??owych token??w logowania dla tego konta.',

    'LBL_ERR_FAILED_QUICKCHECK' => 'Obecnie nie jeste?? pod????czony do {0} konta. Kliknij OK aby zalogowa?? si?? na konto i ponownie uaktywni?? po????czenie.',

    'LBL_CLICK_TO_EDIT' => 'Kliknij aby edytowa??',

    // Various strings used throughout the external account modules
    'LBL_REAUTHENTICATE_LABEL' => 'Ponowne uwierzytelnienie',
    'LBL_APPLICATION_FOUND_NOTICE' => 'Konto dla tej aplikacji ju?? istnieje.',
    'LBL_OMIT_URL' => '( http:// lub https://)',
    'LBL_OAUTH_SAVE_NOTICE' => 'Kliknij <b>Pod????cz</b> nale??y kierowa?? do strony aby poda?? informacje o koncie i zezwolenia na dost??p do konta przez SuiteCRM. Po po????czeniu, u??ytkownik zostanie przekierowany z powrotem do SuiteCRM.',
    'LBL_BASIC_SAVE_NOTICE' => 'Kliknij <b>Pod????cz</b> aby po????czy?? si?? do SuiteCRM.',
    'LBL_ERR_POPUPS_DISABLED' => 'Prosz?? w????czy?? obs??ug?? wyskakuj??cych okienek w przegl??darce lub doda?? stron?? "{0}" do listy wyj??tk??w.',

    'LBL_API_OAUTHSECRET' => 'Has??o API OAuth',
);
