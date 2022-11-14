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
    'LBL_ASSIGNED_TO_NAME' => 'Użytkownik',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data utworzenia',
    'LBL_DATE_MODIFIED' => 'Data modyfikacji',
    'LBL_MODIFIED' => 'Zmodyfikowane przez',
    'LBL_MODIFIED_NAME' => 'Nazwa użytkownika modyfikującego',
    'LBL_CREATED' => 'Utworzony przez',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_DELETED' => 'Usunięte',
    'LBL_NAME' => 'Nazwa użytkownika aplikacji',
    'LBL_CREATED_USER' => 'Utworzony przez Użytkownika',
    'LBL_MODIFIED_USER' => 'Zmodyfikowane przez użytkownika',
    'LBL_LIST_NAME' => 'Nazwa',
    'LBL_LIST_FORM_TITLE' => 'Lista kont zewnętrznych',
    'LBL_MODULE_NAME' => 'Konto zewnętrzne',
    'LBL_MODULE_TITLE' => 'Konta zewnętrzne',
    'LBL_HOMEPAGE_TITLE' => 'Moje Konta zewnętrzne',
    'LNK_NEW_RECORD' => 'Utwórz konto zewnętrzne',
    'LNK_LIST' => 'Przeglądaj konta zewnętrzne',
    'LBL_SEARCH_FORM_TITLE' => 'Szukaj zewnętrzne źródło',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Wydarzenia',
    'LBL_NEW_FORM_TITLE' => 'Nowe konto zewnętrzne',
    'LBL_PASSWORD' => 'Hasło aplikacji',
    'LBL_USER_NAME' => 'Nazwa użytkownika aplikacji',
    'LBL_URL' => 'Adres URL',
    'LBL_APPLICATION' => 'Aplikacja',
    'LBL_API_DATA' => 'Dane API',
    'LBL_API_CONSKEY' => 'Klucz konsumenta (API)',
    'LBL_API_CONSSECRET' => 'Hasło konsumenta',
    'LBL_API_OAUTHTOKEN' => 'OAuth Token',
    'LBL_AUTH_UNSUPPORTED' => "Ta metoda autoryzacji nie jest obsługiwana przez aplikację",
    'LBL_AUTH_ERROR' => 'Próba połączenia z tym kontem nie powiodła się.',
    'LBL_VALIDATED' => 'Podłączony',
    'LBL_ACTIVE' => 'Aktywny',
    'LBL_OAUTH_NAME' => '%s',
    'LBL_CONNECT_BUTTON_TITLE' => 'Podłącz',
    'LBL_NOTE' => 'Należy pamiętać',
    'LBL_CONNECTED' => 'Podłączony',

    'LBL_ERR_NO_AUTHINFO' => 'Brak informacji uwierzytelniania dla tego konta.',
    'LBL_ERR_NO_TOKEN' => 'Nie ma prawidłowych tokenów logowania dla tego konta.',

    'LBL_ERR_FAILED_QUICKCHECK' => 'Obecnie nie jesteś podłączony do {0} konta. Kliknij OK aby zalogować się na konto i ponownie uaktywnić połączenie.',

    'LBL_CLICK_TO_EDIT' => 'Kliknij aby edytować',

    // Various strings used throughout the external account modules
    'LBL_REAUTHENTICATE_LABEL' => 'Ponowne uwierzytelnienie',
    'LBL_APPLICATION_FOUND_NOTICE' => 'Konto dla tej aplikacji już istnieje.',
    'LBL_OMIT_URL' => '( http:// lub https://)',
    'LBL_OAUTH_SAVE_NOTICE' => 'Kliknij <b>Podłącz</b> należy kierować do strony aby podać informacje o koncie i zezwolenia na dostęp do konta przez SuiteCRM. Po połączeniu, użytkownik zostanie przekierowany z powrotem do SuiteCRM.',
    'LBL_BASIC_SAVE_NOTICE' => 'Kliknij <b>Podłącz</b> aby połączyć się do SuiteCRM.',
    'LBL_ERR_POPUPS_DISABLED' => 'Proszę włączyć obsługę wyskakujących okienek w przeglądarce lub dodać stronę "{0}" do listy wyjątków.',

    'LBL_API_OAUTHSECRET' => 'Hasło API OAuth',
);
