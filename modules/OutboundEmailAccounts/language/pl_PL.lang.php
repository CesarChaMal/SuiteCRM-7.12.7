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
    'LBL_ASSIGNED_TO_NAME' => 'Przypisany Do',
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
    'LBL_LIST_FORM_TITLE' => 'Lista kont e-mail poczty wychodz??cej',
    'LBL_MODULE_NAME' => 'Konta poczty wychodz??cej',
    'LBL_MODULE_TITLE' => 'Konta poczty wychodz??cej',
    'LBL_HOMEPAGE_TITLE' => 'Moje konta poczty wychodz??cej',
    'LNK_NEW_RECORD' => 'Utw??rz konta e-mail poczty wychodz??cej',
    'LNK_LIST' => 'Przegl??daj konta poczty wychodz??cej',
    'LBL_SEARCH_FORM_TITLE' => 'Szukaj kont poczty wychodz??cej',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Wydarzenia',
    'LBL_NEW_FORM_TITLE' => 'Nowe konta e-mail poczty wychodz??cej',
    'LBL_USERNAME' => 'Nazwa u??ytkownika',
    'LBL_PASSWORD' => 'Has??o',
    'LBL_SMTP_SERVERNAME' => 'Nazwa serwera SMTP',
    'LBL_SMTP_AUTH' => 'SMTP Auth',
    'LBL_SMTP_PORT' => 'Port SMTP',
    'LBL_SMTP_PROTOCOL' => 'Protok???? SMTP',
    'LBL_EDITVIEW_PANEL1' => 'Ustawienia konta',
    'LBL_CHANGE_PASSWORD' => 'Zmiana has??a',
    'LBL_SEND_TEST_EMAIL' => 'Wy??lij wiadomo???? testow??',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Administator jeszcze nie ustawi?? domy??lnego wychodz??cego konta. Nie mo??na wys??a?? wiadomo???? testowych.',
    'LBL_MAIL_SMTPAUTH_REQ' => 'U??yj uwierzytelniania SMTP?',
    'LBL_MAIL_SMTPPASS' => 'Has??o SMTP:',
    'LBL_MAIL_SMTPPORT' => 'Port SMTP:',
    'LBL_MAIL_SMTPSERVER' => 'Serwer SMTP:',
    'LBL_MAIL_SMTPUSER' => 'Nazwa u??ytkownika SMTP:',
    'LBL_MAIL_SMTP_SETTINGS' => 'Specyfikacje serwera SMTP',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Wybierz dostawc?? poczty e-mail:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Has??o Yahoo! Mail:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID Yahoo! Mail:',
    'LBL_GMAIL_SMTPPASS' => 'Has??o Gmail:',
    'LBL_GMAIL_SMTPUSER' => 'Adres e-mail na Gmailu:',
    'LBL_EXCHANGE_SMTPPASS' => 'Zamie?? has??o:',
    'LBL_EXCHANGE_SMTPUSER' => 'Zamie?? nazw?? u??ytkownika:',
    'LBL_EXCHANGE_SMTPPORT' => 'Zamie?? port serwera:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Zamie?? serwer:',

    'LBL_TYPE' => 'Typ',
    'LBL_MAIL_SENDTYPE' => 'Typ wysy??ki poczty',
    'LBL_MAIL_SMTPSSL' => 'Poczta e-mail - SMTP/SSL',
    'LBL_SMTP_FROM_NAME' => 'Nazwa nadawcy',
    'LBL_SMTP_FROM_ADDR' => 'Adres "Od"',
);
