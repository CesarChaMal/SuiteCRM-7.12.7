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
    'LBL_REPLY_ADDR' => 'Adres "Odpowied?? do": ',
    'LBL_REPLY_NAME' => 'Nazwa "Odpowied?? do": ',

    'LBL_MODULE_NAME' => 'Mailing marketingowy',
    'LBL_MODULE_TITLE' => 'Mailing marketingowy: Strona g????wna',
    'LBL_LIST_FORM_TITLE' => 'Mailing marketingowy kampanie',
    'LBL_NAME' => 'Nazwa: ',
    'LBL_LIST_NAME' => 'Nazwa',
    'LBL_LIST_FROM_ADDR' => 'Adres nadawcy',
    'LBL_LIST_DATE_START' => 'Data Rozpocz??cia',
    'LBL_LIST_TEMPLATE_NAME' => 'Szablon e-mail',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_STATUS' => 'Status',
    'LBL_STATUS_TEXT' => 'Status:',
    'LBL_TEMPLATE_NAME' => 'Nazwa szablonu',
    'LBL_DATE_ENTERED' => 'Data wprowadzenia',
    'LBL_DATE_MODIFIED' => 'Data modyfikacji',
    'LBL_MODIFIED' => 'Zmodyfikowane przez: ',
    'LBL_CREATED' => 'Utworzone przez: ',
    'LBL_MESSAGE_FOR' => 'Wy??lij t?? wiadomo???? do:',

    'LBL_FROM_NAME' => 'Nazwa nadawcy: ',
    'LBL_FROM_ADDR' => 'Adres "Od": ',
    'LBL_DATE_START' => 'Data Rozpocz??cia',
    'LBL_TIME_START' => 'Czas rozpocz??cia',
    'LBL_START_DATE_TIME' => 'Data i Czas Rozpocz??cia: ',
    'LBL_TEMPLATE' => 'Szablon e-mail: ',

    'LBL_MODIFIED_BY' => 'Zmodyfikowane przez: ',
    'LBL_CREATED_BY' => 'Utworzone przez: ',

    'LNK_NEW_CAMPAIGN' => 'Utw??rz kampani?? reklamow??',
    'LNK_CAMPAIGN_LIST' => 'Kampanie reklamowe',
    'LNK_NEW_PROSPECT_LIST' => 'Utw??rz grup?? docelow??',
    'LNK_PROSPECT_LIST_LIST' => 'Lista grup docelowych',
    'LNK_NEW_PROSPECT' => 'Utw??rz docelowego odbiorc??',
    'LNK_PROSPECT_LIST' => 'Grupy docelowe',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Mailing marketingowy',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Utw??rz',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'Edytuj',
    'LBL_FROM_MAILBOX' => 'Ze Skrzynki',
    'LBL_FROM_MAILBOX_NAME' => 'U??yj skrzynki pocztowej:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Konto poczty wychodz??cej:',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Grupy docelowe',
    'LBL_ALL_PROSPECT_LISTS' => 'Wszystkie listy grup odbiorc??w w kampanii reklamowej.',
    'LBL_RELATED_PROSPECT_LISTS' => 'Wszystkie listy grup odbiorc??w powi??zane z t?? wiadmo??ci??.',
    'LBL_PROSPECT_LIST_NAME' => 'Nazwa grupy docelowej',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'Listy docelowych odbiorc??w',
    'LBL_MODULE_SEND_TEST' => 'Kampania: wy??lij wiadomo???? testow??',
    'LBL_MODULE_SEND_EMAILS' => 'Kampania: wy??lij wiadomo??ci email',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'Wybierz wiadomo??ci kampanii, kt??re chcesz przetestowa??:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'Wybierz wiadomo??ci kampanii, dla kt??rych chcesz zaplanowa?? wysy??k?? z okre??lon?? dat?? i godzin?? rozpocz??cia:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'Wy??lij',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'Wy??lij',
    'LBL_ERROR_ON_MARKETING' => 'Brakuj??ce pola wymagane',

    'LBL_CAMPAIGN_ID' => 'ID Kampanii reklamowej',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'ID konta e-mail poczty wychodz??cej',
    'LBL_EMAIL_TEMPLATE' => 'Szablon e-mail',
    'LBL_PROSPECT_LISTS' => 'Lista perspektyw',

);
