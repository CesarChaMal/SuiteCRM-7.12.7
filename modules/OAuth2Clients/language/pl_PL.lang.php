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

$mod_strings = [
    'LBL_MODULE_NAME' => 'Klienci OAuth2',
    'LBL_MODULE_TITLE' => 'Klienci OAuth2',
    'LBL_MODULE_ID' => 'Klienci OAuth2',
    'LBL_IS_CONFIDENTIAL' => 'Jest poufne',
    'LBL_SECRET' => 'Hasło',
    'LBL_SECRET_HASHED' => 'Zmień hasło',
    'LBL_LEAVE_BLANK' => 'Pozostaw puste, chyba że dokonujesz zmiany',
    'LBL_REMEMBER_SECRET' => 'Proszę zapamiętać hasło, ponieważ nie będzie dostępne po dokonaniu zapisu.',
    'LBL_REDIRECT_URL' => 'Przekierowanie URL',
    'LBL_ALLOWED_GRANT_TYPE' => 'Dozwolony typ dostępu',
    'LBL_DURATION_AMOUNT' => 'Czas trwania (okres)',
    'LBL_DURATION_UNIT' => 'Czas trwania (jednostka)',
    'LBL_USER' => 'Powiązany użytkownik',

    'LBL_OAUTHTOKENS_SUBPANEL_TITLE' => 'Aktywne tokeny uwierzytelniania OAuth2',
    'LBL_TOKEN_ID' => 'Token',
    'LBL_DATE_ENTERED' => 'Data utworzenia',
    'LBL_ACCESS_TOKEN_EXPIRES' => 'Wygaśnięcia tokenu dostępu',
    'LBL_REFRESH_TOKEN_EXPIRES' => 'Odświeżania wygaśnięcia tokenu',

    'LNK_OAUTH2_TOKEN_LIST'=> 'Lista tokenów uwierzytelniania OAuth2',
    'LNK_OAUTH2_CLIENT_LIST' => 'Lista klientów OAuth2',

    'LNK_NEW_OAUTH2_CLIENT' => 'Utwórz klienta OAuth2',
    'LNK_NEW_OAUTH2_PASSWORD_CLIENT' => 'Nowe hasło klienta',
    'LNK_NEW_OAUTH2_CREDENTIALS_CLIENT' => 'Nowy klient poświadczeń',
    'LNK_NEW_OAUTH2_IMPLICIT_CLIENT' => 'Nowy klient niejawny',
    'LNK_NEW_OAUTH2_AUTHORIZATION_CLIENT' => 'Nowy klient autoryzacyjny',

];
