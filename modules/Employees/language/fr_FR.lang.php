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
    'LBL_MODULE_NAME' => 'Employ??s',
    'LBL_MODULE_TITLE' => 'Employ??s??: Accueil',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher un Employ??',
    'LBL_LIST_FORM_TITLE' => 'Employ??s',
    'LBL_NEW_FORM_TITLE' => 'Nouvel Employ??',
    'LBL_LOGIN' => 'Identification',
    'LBL_RESET_PREFERENCES' => 'R??tablir les Param??tres par d??faut',
    'LBL_TIME_FORMAT' => 'Format Heure :',
    'LBL_DATE_FORMAT' => 'Format de la date :',
    'LBL_TIMEZONE' => 'Heure actuelle :',
    'LBL_CURRENCY' => 'Devise :',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_LIST_LAST_NAME' => 'Nom',
    'LBL_LIST_EMPLOYEE_NAME' => 'Nom Employ??',
    'LBL_LIST_DEPARTMENT' => 'Service',
    'LBL_LIST_REPORTS_TO_NAME' => 'Rend compte ??',
    'LBL_LIST_EMAIL' => 'E-mail',
    'LBL_LIST_USER_NAME' => 'Nom d\'utilisateur',
    'LBL_ERROR' => 'Erreur :',
    'LBL_PASSWORD' => 'Mot de passe :',
    'LBL_USER_NAME' => 'Nom d\'utilisateur :',
    'LBL_USER_TYPE' => 'Type d&#39;utilisateur',
    'LBL_FIRST_NAME' => 'Pr??nom :',
    'LBL_LAST_NAME' => 'Nom de famille :',
    'LBL_THEME' => 'Th??me :',
    'LBL_LANGUAGE' => 'Langue :',
    'LBL_ADMIN' => 'Administrateur :',
    'LBL_EMPLOYEE_INFORMATION' => 'Information Employ??',
    'LBL_OFFICE_PHONE' => 'T??l??phone du bureau :',
    'LBL_REPORTS_TO' => 'Rend compte ?? (ID) :',
    'LBL_REPORTS_TO_NAME' => 'Rend compte ??',
    'LBL_OTHER_PHONE' => 'Autre t??l??phone :',
    'LBL_NOTES' => 'Notes :',
    'LBL_DEPARTMENT' => 'Service :',
    'LBL_TITLE' => 'Intitul?? du poste :',
    'LBL_ANY_ADDRESS' => 'Toutes les adresses :',
    'LBL_ANY_PHONE' => 'Tous les t??l??phones :',
    'LBL_ANY_EMAIL' => 'Tous les E-mails :',
    'LBL_ADDRESS' => 'Adresse :',
    'LBL_CITY' => 'Ville :',
    'LBL_STATE' => '??tat ou r??gion :',
    'LBL_POSTAL_CODE' => 'Code postal :',
    'LBL_COUNTRY' => 'Pays :',
    'LBL_NAME' => 'Nom :',
    'LBL_MOBILE_PHONE' => 'T??l??phone mobile :',
    'LBL_FAX' => 'Fax :',
    'LBL_EMAIL' => 'Adresse ??lectronique :',
    'LBL_EMAIL_LINK_TYPE' => 'Client E-mail utilis??',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b> Messagerie SuiteCRM : </b> Envoyer des E-mails en utilisant le client de messagerie interne de SuiteCRM <br> <b>Messagerie Externe : </b> Envoyer des E-mails en utilisant un client de messagerie externe ?? SuiteCRM , comme Microsoft Outlook .',
    'LBL_HOME_PHONE' => 'T??l??phone (domicile) :',
    'LBL_WORK_PHONE' => 'T??l??phone professionnel :',
    'LBL_EMPLOYEE_STATUS' => 'Statut Employ??:',
    'LBL_PRIMARY_ADDRESS' => 'Adresse principale :',
    'LBL_SAVED_SEARCH' => 'Recherches sauvegard??es',
    'LBL_MESSENGER_ID' => 'Nom IM :',
    'LBL_MESSENGER_TYPE' => 'Type IM :',
    'ERR_LAST_ADMIN_1' => 'Le nom de l&#39;employ??',
    'ERR_LAST_ADMIN_2' => '" est le dernier employ?? disposant de droits administrateur.  Au moins un employ?? doit ??tre un administrateur.',
    'LNK_NEW_EMPLOYEE' => 'Cr??er Employ??',
    'LNK_EMPLOYEE_LIST' => 'Employ??s',
    'ERR_DELETE_RECORD' => 'Un num??ro d&#39;enregistrement doit ??tre sp??cifi?? pour toute suppression.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Statut de l&#39;employ??',

    'LBL_SUITE_LOGIN' => 'Est un utilisateur',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Notifier sur assignation',
    'LBL_IS_ADMIN' => 'Administrateur ?',
    'LBL_GROUP' => 'Groupe de l&#39;Utilisateur',
    'LBL_PHOTO' => 'Photo',
    'LBL_DELETE_USER_CONFIRM' => 'Cet employ?? est aussi un utilisateur. Effacer cet employ?? effacera ??galement l&#39;utilisateur, et l&#39;utilisateur ne pourra plus acc??der ?? l&#39;application. Souhaitez-vous vraiment supprimer cet enregistrement ?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Etes vous s??r de vouloir supprimer cet employ?? ?',
    'LBL_ONLY_ACTIVE' => 'Employ??s actifs',
    'LBL_SELECT' => 'S??lectionner' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'ID d&#39;authentification',
    'LBL_EXT_AUTHENTICATE' => 'Authentification externe',
    'LBL_GROUP_USER' => 'Utilisateur groupe',
    'LBL_LIST_ACCEPT_STATUS' => 'Statut d&#39;acceptation',
    'LBL_MODIFIED_BY' => 'Modifi?? par',
    'LBL_MODIFIED_BY_ID' => 'Modifi?? par (ID)',
    'LBL_CREATED_BY_NAME' => 'Cr???? par', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Utilisateur API Portail',
    'LBL_PSW_MODIFIED' => 'Dernier changement du Mot de passe',
    'LBL_SHOW_ON_EMPLOYEES' => 'Afficher l&#39;information de l&#39;employ??',
    'LBL_USER_HASH' => 'Mot de passe',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Mot de passe g??n??r?? par le syst??me',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_FAX_PHONE' => 'Fax',
    'LBL_STATUS' => 'Statut',
    'LBL_ADDRESS_CITY' => 'Adresse Ville',
    'LBL_ADDRESS_COUNTRY' => 'Adresse Pays',
    'LBL_ADDRESS_INFORMATION' => 'Adresse',
    'LBL_ADDRESS_POSTALCODE' => 'Adresse Code Postal',
    'LBL_ADDRESS_STATE' => 'Adresse R??gion',
    'LBL_ADDRESS_STREET' => 'Adresse Rue',

    'LBL_DATE_MODIFIED' => 'Date de modification',
    'LBL_DATE_ENTERED' => 'Date de cr??ation',
    'LBL_DELETED' => 'Supprim??',

    'LBL_BUTTON_SELECT' => 'S??lectionner',
    'LBL_BUTTON_CLEAR' => 'Effacer',

    'LBL_CONTACTS_SYNC' => 'Synchronisation de contacts',
    'LBL_OAUTH_TOKENS' => 'Jetons OAuth',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Utilisateurs du projet depuis le nom du projet',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Contacts du projet depuis le nom des contacts',
    'LBL_ROLES' => 'R??les',
    'LBL_SECURITYGROUPS' => 'Groupes de s??curit??',
    'LBL_PROSPECT_LIST' => 'Liste des prospects',
);
