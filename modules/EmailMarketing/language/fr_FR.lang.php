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
    'LBL_REPLY_ADDR' => 'Adresse de "R??pondre-??" : ',
    'LBL_REPLY_NAME' => 'Nom du "R??pondre ??":',

    'LBL_MODULE_NAME' => 'E-mail marketing',
    'LBL_MODULE_TITLE' => 'Marketing par E-mail',
    'LBL_LIST_FORM_TITLE' => 'Campagnes de Marketing par E-mail',
    'LBL_NAME' => 'Nom : ',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_LIST_FROM_ADDR' => 'E-mail de',
    'LBL_LIST_DATE_START' => 'Date de d??but d&#39;envoi',
    'LBL_LIST_TEMPLATE_NAME' => 'Mod??le d\'E-mail',
    'LBL_LIST_STATUS' => 'Statut',
    'LBL_STATUS' => 'Statut',
    'LBL_STATUS_TEXT' => 'Statut :',
    'LBL_TEMPLATE_NAME' => 'Nom du mod??le',
    'LBL_DATE_ENTERED' => 'Date de cr??ation',
    'LBL_DATE_MODIFIED' => 'Date de modification',
    'LBL_MODIFIED' => 'Modifi?? par : ',
    'LBL_CREATED' => 'Cr???? par : ',
    'LBL_MESSAGE_FOR' => 'Destinataires :',

    'LBL_FROM_NAME' => 'Nom de l&#39;exp??diteur : ',
    'LBL_FROM_ADDR' => 'E-mail de l\'exp??diteur : ',
    'LBL_DATE_START' => 'Date de d??but',
    'LBL_TIME_START' => 'Heure d??but',
    'LBL_START_DATE_TIME' => 'D??but de l&#39;envoi : ',
    'LBL_TEMPLATE' => 'Mod??le d\'E-mail : ',

    'LBL_MODIFIED_BY' => 'Modifi?? par : ',
    'LBL_CREATED_BY' => 'Cr???? par : ',

    'LNK_NEW_CAMPAIGN' => 'Nouvelle Campagne',
    'LNK_CAMPAIGN_LIST' => 'Campagnes',
    'LNK_NEW_PROSPECT_LIST' => 'Cr??er Liste de cibles',
    'LNK_PROSPECT_LIST_LIST' => 'Listes de Cibles',
    'LNK_NEW_PROSPECT' => 'Cr??er la cible',
    'LNK_PROSPECT_LIST' => 'Cibles',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'E-mail marketing',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Cr??er',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'Modifier',
    'LBL_FROM_MAILBOX' => 'Depuis boite',
    'LBL_FROM_MAILBOX_NAME' => 'Bo??te utilis??e pour l&#39;envoi :',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Compte E-mail sortant :',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Listes de cibles',
    'LBL_ALL_PROSPECT_LISTS' => 'S??lectionnez cette option pour choisir toutes les listes de cible pour cette campagne.',
    'LBL_RELATED_PROSPECT_LISTS' => 'Toutes les listes de cibles li??es ?? ce message.',
    'LBL_PROSPECT_LIST_NAME' => 'Nom de la liste cible',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'Listes cibl??es',
    'LBL_MODULE_SEND_TEST' => 'Campagne : Envoyer test',
    'LBL_MODULE_SEND_EMAILS' => 'Campagne : Envoyer E-mails',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'Merci de s??lectionner les messages de Campagne ?? tester :',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'Merci de s??lectionner les messages de Campagne ?? planifier pour une distribution ?? la date et heure de d??but sp??cifi??e :',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'Envoyer',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'Envoyer',
    'LBL_ERROR_ON_MARKETING' => 'Champ(s) obligatoire(s) manquant',

    'LBL_CAMPAIGN_ID' => 'Identifiant de campagne',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'Compte E-mail sortant',
    'LBL_EMAIL_TEMPLATE' => 'Mod??le d\'E-mail',
    'LBL_PROSPECT_LISTS' => 'Listes de prospects',

);
