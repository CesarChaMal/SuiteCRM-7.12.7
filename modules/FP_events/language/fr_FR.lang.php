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
    'LBL_ASSIGNED_TO_ID' => 'Identifiant de l\'utilisateur assign??',
    'LBL_ASSIGNED_TO_NAME' => 'Assign?? ??',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Date de cr??ation',
    'LBL_DATE_MODIFIED' => 'Date de modification',
    'LBL_MODIFIED' => 'Modifi?? par',
    'LBL_MODIFIED_NAME' => 'Modifi?? par',
    'LBL_CREATED' => 'Cr???? par',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_DELETED' => 'Supprim??',
    'LBL_NAME' => 'Nom',
    'LBL_CREATED_USER' => 'Cr???? par',
    'LBL_MODIFIED_USER' => 'Modifi?? par l\'utilisateur',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_EDIT_BUTTON' => 'Modifier',
    'LBL_REMOVE' => 'Supprimer',
    'LBL_LIST_FORM_TITLE' => 'Liste des ??v??nements',
    'LBL_MODULE_NAME' => 'Ev??nement',
    'LBL_MODULE_TITLE' => 'Ev??nement',
    'LBL_HOMEPAGE_TITLE' => 'Mes ??v??nements',
    'LNK_NEW_RECORD' => 'Cr??er un ??v??nement',
    'LNK_LIST' => 'Voir les ??v??nements',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher des ??v??nements',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Voir l&#39;Historique',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activit??s',
    'LBL_NEW_FORM_TITLE' => 'Nouvel ??v??nement',
    'LBL_LOCATION' => 'Localisation',
    'LBL_START_DATE' => 'Date de d??but',
    'LBL_END_DATE' => 'Date/Heure de fin',
    'LBL_BUDGET' => 'Budget',
    'LBL_DATE' => 'Date de d??but',
    'LBL_DATE_END' => 'Date de fin',
    'LBL_DURATION' => 'Dur??e',
    'LBL_INVITE_TEMPLATES' => 'Mod??le d\'E-mail d\'invitation',
    'LBL_INVITE_PDF' => 'Envoyer les invitations',
    'LBL_EDITVIEW_PANEL1' => 'D??tails de l\'??v??nement',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'D??l??gue',
    'LBL_ACCEPT_REDIRECT' => 'Accepter la redirection URL',
    'LBL_DECLINE_REDIRECT' => 'Refuser la redirection d\'URL',
    'LBL_SELECT_DELEGATES' => 'S??lectionner les d??l??gu??s',
    'LBL_SELECT_DELEGATES_TITLE' => 'S??lectionner les d??l??gu??s : -',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'Liste des cibles',
    'LBL_SELECT_DELEGATES_TARGETS' => 'Cibles',
    'LBL_SELECT_DELEGATES_CONTACTS' => 'Contacts',
    'LBL_SELECT_DELEGATES_LEADS' => 'Prospects',
    'LBL_MANAGE_DELEGATES' => 'Gestion des d??l??gu??s',
    'LBL_MANAGE_DELEGATES_TITLE' => 'Gestion des d??l??gu??s : -',
    'LBL_MANAGE_ACCEPTANCES' => 'Gestion des acceptations',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => 'Gestion des acceptations : -',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => 'Accept??',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => 'Refus??',
    'LBL_MANAGE_POPUP_ERROR' => 'Aucun d??l??gu?? n\'a ??t?? s??lectionn??.',
    'LBL_MANAGE_DELEGATES_INVITED' => 'Invit??',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'Pas invit??',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'A particip??',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'N\'a pas particip??',
    'LBL_SUCCESS_MSG' => 'Toutes les invitations ont ??t?? envoy??es avec succ??s.',
    'LBL_ERROR_MSG_1' => 'Tous les contacts li??s ont d??j?? ??t?? invit??s.',
    'LBL_ERROR_MSG_2' => 'L\'envoi des E-mails d\'invitation ?? ??chou?? ! Veuillez v??rifier vos param??tres d\'E-mail.',
    'LBL_ERROR_MSG_3' => 'L\'??mission de plus de 10 E-mails a ??chou??e. Merci de v??rifier que tous les contacts que vous invitez ont une adresse E-mail valide. (Voir le log d\'erreur : SuiteCRM suitecrm.log)',
    'LBL_ERROR_MSG_4' => ' E-mails n\'ont pu ??tre envoy??s. Veuillez v??rifier que ces contacts disposent d\'une adresse E-mail valide (voir le fichier de log suitecrm.log)', // LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => 'Mod??le d\'E-mail non valide',
    'LBL_EMAIL_INVITE' => 'Envoyer l\'invitation par E-mail',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => 'Contacts',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => 'Lieux',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => 'Prospects',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => 'Cibles',

    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'D??l??gue',

    // Attendance report
    'LBL_CONTACT_NAME' => 'Nom',
    'LBL_ACCOUNT_NAME' => 'Soci??t??',
    'LBL_SIGNATURE' => 'Signature',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => 'Invit??',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => 'Statut',

    'LBL_ACTIVITY_STATUS' => 'Statut ',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'Lieux des ??v??nements ?? partir du nom de l\'??v??nement',
    // Email links
    'LBL_ACCEPT_LINK' => 'Accepter',
    'LBL_DECLINE_LINK' => 'D??cliner',
    
);
