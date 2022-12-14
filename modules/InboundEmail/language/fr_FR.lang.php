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


    'LBL_RE' => 'RE :',

    'ERR_BAD_LOGIN_PASSWORD' => 'Utilisateur ou mot de passe incorrect',
    'ERR_INI_ZLIB' => 'Impossible de d??sactiver temporairement la compression Zlib. "Tester Param??trage" peut ??chouer.',
    'ERR_NO_IMAP' => 'Librairie IMAP non trouv??e. Merci de r??soudre le probl??me avant de poursuivre le param??trage des E-mails entrants',
    'ERR_NO_OPTS_SAVED' => 'Pas de param??tres optimaux sauvegard??s avec votre bo??te E-mail entrante. Merci de revoir les param??trages',
    'ERR_TEST_MAILBOX' => 'Merci de v??rifier vos Param??tres et essayer ?? nouveau.',

    'LBL_ASSIGN_TO_USER' => 'Assigner ?? l&#39;utilisateur',
    'LBL_AUTOREPLY' => 'Mod??le de r??ponse automatique',
    'LBL_AUTOREPLY_HELP' => 'S??lectionner une r??ponse automatique de notification de r??ception.',
    'LBL_BASIC' => 'Param??trages essentiels',
    'LBL_CASE_MACRO' => 'Mot cl?? Ticket',
    'LBL_CASE_MACRO_DESC' => 'Ce mot cl?? sera analys?? et utilis?? lors de la r??ception des E-mails entrants pour lier les E-mails dont le titre contient ce mot cl??, au Ticket dont le num??ro sera ??gal ?? la valeur de %1.',
    'LBL_CASE_MACRO_DESC2' => 'Choisir la cha??ne de caract??res souhait??e, mais pr??server le <b>"%1"</b>.',
    'LBL_CLOSE_POPUP' => 'Fermer fen??tre',
    'LBL_CREATE_TEMPLATE' => 'Cr??er',
    'LBL_DELETE_SEEN' => 'Supprimer les E-mails lus apr??s l\'import.',
    'LBL_EDIT_TEMPLATE' => 'Modifier',
    'LBL_EMAIL_OPTIONS' => 'Param??tres optionnels',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Options de gestion des rebonds',
    'LBL_FILTER_DOMAIN_DESC' => 'Le domaine sp??cifi?? ne recevra pas de "R??ponse automatique"',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'S??lectionnez pour enregistrer automatiquement les E-mails dans SuiteCRM pour tous les E-mails entrants.',
    'LBL_FILTER_DOMAIN' => 'Pas de "R??ponse automatique" pour le domaine',
    'LBL_FIND_SSL_WARN' => '<br>Le test SSL peut prendre un certain temps. Merci de patienter.<br>',
    'LBL_FROM_ADDR' => 'E-mail de l\'exp??diteur',
    'LBL_FROM_ADDR_DESC' => 'L\'adresse e-mail renseign??e ici peut ne pas appara??tre dans le champ "De" de l\'e-mail envoy?? ?? cause des restrictions impos??es par votre fournisseur de service e-mail. Dans ce cas, l\'adresse e-mail d??finie pour le serveur d\'e-mail sortant sera utilis??e.', // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => 'Nom de l&#39;exp??diteur',
    'LBL_GROUP_QUEUE' => 'Assigner ?? un Groupe',
    'LBL_HOME' => 'Accueil',
    'LBL_LIST_MAILBOX_TYPE' => 'Utilisation du compte E-mail',
    'LBL_LIST_NAME' => 'Nom :',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Type&nbsp;de&nbsp;Bo??te',
    'LBL_LIST_SERVER_URL' => 'Serveur',
    'LBL_LIST_STATUS' => 'Statut',
    'LBL_LOGIN' => 'Nom d\'utilisateur',
    'LBL_MAILBOX_DEFAULT' => 'Boite de r??ception',
    'LBL_MAILBOX_SSL' => 'Utiliser SSL',
    'LBL_MAILBOX_TYPE' => 'Actions possibles',
    'LBL_DISTRIBUTION_METHOD' => 'M??htode de Distribution',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Mod??le de R??ponse pour une cr??ation de Ticket',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'S??lectionnez une r??ponse automatique pour avertir les exp??diteurs qu???un cas a ??t?? cr????. L\'E-mail contient le num??ro de dossier dans son sujet et respecte les param??tres g??n??raux du cas. Cette r??ponse n???est envoy??e qu\'apr??s r??ception d\'un premier E-mail du demandeur.',
    'LBL_MAILBOX' => 'Dossier Contr??l??',
    'LBL_TRASH_FOLDER' => 'Dossier Poubelle',
    'LBL_SENT_FOLDER' => 'Dossier Envoy??',
    'LBL_SELECT' => 'S??lectionner',
    'LBL_MARK_READ_NO' => 'E-mail marqu?? effac?? apr??s Import',
    'LBL_MARK_READ_YES' => 'E-mail laiss?? sur le Serveur apr??s Import',
    'LBL_MARK_READ' => 'Laisser les Messages sur le Seveur',
    'LBL_MAX_AUTO_REPLIES' => 'Nombre de "R??ponses Automatiques"',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'Nombre maximum de "R??ponses Automatiques" envoy??es par 24 heures ?? une m??me adresse E-mail.',
    'LBL_PERSONAL_MODULE_NAME' => 'Compte E-mail personnel',
    'LBL_CREATE_CASE' => 'Cr??er un Ticket',
    'LBL_CREATE_CASE_HELP' => 'S??lectionnez cette option pour cr??er automatiquement des enregistrements dans SuiteCRM depuis des E-mails entrants.',
    'LBL_MODULE_NAME' => 'Compte E-mail Groupe',
    'LBL_BOUNCE_MODULE_NAME' => 'Compte E-mail de gestion des rebonds',
    'LBL_MODULE_TITLE' => 'E-mails entrants',
    'LBL_NAME' => 'Nom',
    'LBL_NONE' => 'Aucun',
    'LBL_ONLY_SINCE_NO' => 'Non. V??rifier tous les E-mails sur le serveur E-mail.',
    'LBL_ONLY_SINCE_YES' => 'Oui.',
    'LBL_PASSWORD' => 'Mot de Passe',
    'LBL_POP3_SUCCESS' => 'Test de connexion POP3 --> r??ussi.',
    'LBL_POPUP_TITLE' => 'Test du Param??trage',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'S??lectionner les Dossiers sousscrits',
    'LBL_SELECT_TRASH_FOLDERS' => 'S??lectionner le Dossier Poubelle',
    'LBL_SELECT_SENT_FOLDERS' => 'S??lectionner le Dossier Envoy??',
    'LBL_DELETED_FOLDERS_LIST' => 'Le dossier %s n&#39;existe pas ou a ??t?? supprim?? du serveur',
    'LBL_PORT' => 'Port du serveur Mail',
    'LBL_REPLY_TO_NAME' => 'Nom du "R??pondre ??"',
    'LBL_REPLY_TO_ADDR' => 'Adresse E-mail du "R??pondre ??"',
    'LBL_SAME_AS_ABOVE' => 'Utiliser adresse/nom ??metteur',
    'LBL_SERVER_OPTIONS' => 'Options du Serveur Mail',
    'LBL_SERVER_TYPE' => 'Protocole du Serveur Mail',
    'LBL_SERVER_URL' => 'Serveur Mail',
    'LBL_SSL_DESC' => 'Si votre Serveur E-mail supporte les connexions s??curis??es, les activer forcera l\'utilisation de connexions SSL quand vous importerez vos E-mails.',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'L\'??quipe s??lectionn??e a acc??s au compte E-mail. Si un Dossier de Groupe est s??lectionn??, l\'??quipe d??sign??e pour le Dossier de Groupe surcharge l\'??quipe s??lectionn??e.',
    'LBL_SSL' => 'Activer SSL',
    'LBL_STATUS' => 'Statut',
    'LBL_SYSTEM_DEFAULT' => 'Syst??me par d??faut',
    'LBL_TEST_BUTTON_TITLE' => 'Test',
    'LBL_TEST_SETTINGS' => 'Tester la connexion au Serveur Mail',
    'LBL_TEST_SUCCESSFUL' => 'Test de connexion r??ussi.',
    'LBL_TEST_WAIT_MESSAGE' => 'Veuillez patienter...',
    'LBL_WARN_IMAP_TITLE' => 'E-mail entrant d??sactiv??',
    'LBL_WARN_IMAP' => 'Avertissements :',
    'LBL_WARN_NO_IMAP' => 'Le syst??me n\'a pas les librairies c-client IMAP activ??es / compil??es dans le module PHP (--with-imap=/path/to/imap_c-client_library). Veuillez contacter votre administrateur syst??me pour activer cette librairie.',

    'LNK_LIST_CREATE_NEW_GROUP' => 'Nouvelle bo??te de groupe',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'Nouvelle bo??te de gestion de rebonds',
    'LNK_LIST_MAILBOXES' => 'Liste des bo??tes E-mail',
    'LNK_LIST_SCHEDULER' => 'Planificateurs',
    'LNK_SEED_QUEUES' => 'Renseigner les files d&#39;attente depuis les ??quipes',
    'LBL_GROUPFOLDER_ID' => 'ID du Dossier de Groupe',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Autoriser les utilisateurs ?? envoyer des E-mails en utilisant les informations du "De" nom et adresse en adresse de r??ponse (reply-to).',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Lorsque cette option est s??lectionn??e, les informations "De" nom et adresse associ??e avec ce compte E-mail de groupe apparaitront en option pour le champ "De" lorsque les utilisateurs qui ont acc??s ?? cette boite composeront un E-mail.',
    'LBL_STATUS_ACTIVE' => 'Activ??',
    'LBL_STATUS_INACTIVE' => 'D??sactiv??',
    'LBL_IS_PERSONAL' => 'Personnel',
    'LBL_IS_GROUP' => 'Groupe',
    'LBL_ENABLE_AUTO_IMPORT' => 'Importer automatiquement les E-mails',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Attention: Vous allez modifier la configuration des imports automatiques. Vous risquez de perdre des donn??es.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Attention : L\'import automatique des E-mails doit ??tre activ?? pour la cr??ation automatique de tickets.',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Brouillons',
    'LBL_LIST_TITLE_MY_INBOX' => 'Bo??te de r??ception',
    'LBL_LIST_TITLE_MY_SENT' => 'Message envoy??',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'E-mails archiv??s',
    'LNK_MY_DRAFTS' => 'Brouillons',
    'LNK_MY_INBOX' => 'E-mail',
    'LNK_VIEW_MY_INBOX' => 'Voir l\'E-mail',
    'LNK_QUICK_REPLY' => 'R??pondre',
    'LNK_SENT_EMAIL_LIST' => 'Messages envoy??s',
    'LBL_EDIT_LAYOUT' => 'Modifier la mise en page' /*for 508 compliance fix*/,

    'LBL_MODIFIED_BY' => 'Modifi?? par',
    'LBL_SERVICE' => 'Service',
    'LBL_STORED_OPTIONS' => 'Options stock??es',
    'LBL_GROUP_ID' => 'ID Groupe',
);
