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
    'LBL_EMAIL_INFORMATION' => 'E-mail',
    'LBL_FW' => 'TR :',
    'LBL_RE' => 'RE :',

    'LBL_BUTTON_CREATE' => 'Créer',
    'LBL_BUTTON_EDIT' => 'Modifier',
    'LBL_BUTTON_EDIT_EDIT_DRAFT' => 'Modifier le brouillon',
    'LBL_QS_DISABLED' => '(La recherche rapide n&#39;est pas disponible pour ce module. Veuillez utiliser le bouton de sélection.)',
    'LBL_SIGNATURE_PREPEND' => 'Signature avant le mail original',
    'LBL_IMPORT' => 'Importer',
    'LBL_LOADING' => 'Chargement',
    'LBL_MARKING' => 'Marquer',
    'LBL_DELETING' => 'Suppression',

    'LBL_CONFIRM_DELETE_EMAIL' => 'Êtes-vous sûr de vouloir supprimer cet E-mail ?',
    'LBL_ENTER_FOLDER_NAME' => 'Veuillez saisir un nom de dossier',

    'LBL_ERROR_SELECT_MODULE' => 'Merci de sélectionner un module dans le champ : relatif à',

    'ERR_ARCHIVE_EMAIL' => 'ERREUR : Sélectionner les E-mails à archiver.',
    'ERR_DELETE_RECORD' => 'Un numéro d&#39;enregistrement doit être spécifié pour toute suppression.',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Comptes',
    'LBL_ADD_DASHLETS' => 'Ajouter des Dashlets',
    'LBL_ADD_DOCUMENT' => 'Ajouter des Documents',
    'LBL_ADD_ENTRIES' => 'Ajouter une entrée',
    'LBL_ADD_FILE' => 'Ajouter des Fichiers',
    'LBL_ATTACHMENTS' => 'Pièces jointes :',
    'LBL_ATTACH_FILES' => 'Joindre des fichiers',
    'LBL_ATTACH_DOCUMENTS' => 'Joindre des Documents',
    'LBL_HAS_ATTACHMENT' => 'Avec pièce jointe ?',
    'LBL_BCC' => 'Cci :',
    'LBL_BODY' => 'Corps :',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Anomalies',
    'LBL_CC' => 'Cc :',
    'LBL_COMPOSE_MODULE_NAME' => 'Rédiger E-mail',
    'LBL_CONTACT_NAME' => 'Contact :',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_CREATED_BY' => 'Créé par',
    'LBL_DATE_SENT_RECEIVED' => 'Date envoi/réception :',
    'LBL_DATE' => 'Date envoi :',
    'LBL_DELETE_FROM_SERVER' => 'Supprimer le message du serveur',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_EDIT_ALT_TEXT' => 'Editer le texte alternatif',
    'LBL_SEND_IN_PLAIN_TEXT' => 'Envoyer en texte brut',
    'LBL_SEND_CONFIRM_OPT_IN' => 'Envoyer l\'E-mail d\'activation',
    'LBL_EMAIL_ATTACHMENT' => 'Pièce jointe',
    'LBL_EMAIL_SELECTOR_SELECT' => 'Sélectionner',
    'LBL_EMAIL_SELECTOR_CLEAR' => 'Effacer',
    'LBL_EMAIL' => 'Adresse électronique :',
    'LBL_EMAILS_ACCOUNTS_REL' => 'E-mails : Comptes',
    'LBL_EMAILS_BUGS_REL' => 'E-mails : Anomalies',
    'LBL_EMAILS_CASES_REL' => 'E-mails : Tickets',
    'LBL_EMAILS_CONTACTS_REL' => 'E-mails : Contacts',
    'LBL_EMAILS_LEADS_REL' => 'E-mails : Prospects',
    'LBL_EMAILS_OPPORTUNITIES_REL' => 'E-mails : Affaires',
    'LBL_EMAILS_NOTES_REL' => 'E-mails : Notes',
    'LBL_EMAILS_PROJECT_REL' => 'E-mails : Projet',
    'LBL_EMAILS_PROJECT_TASK_REL' => 'E-mails : tâches de projet',
    'LBL_EMAILS_PROSPECT_REL' => 'E-mails : Prospect',
    'LBL_EMAILS_CONTRACTS_REL' => 'E-mails : Contrat',
    'LBL_EMAILS_TASKS_REL' => 'E-mails : Tâches',
    'LBL_EMAILS_USERS_REL' => 'E-mails : Utilisateurs',
    'LBL_EMPTY_FOLDER' => 'Aucun E-mail à afficher',
    'LBL_SELECT_FOLDER' => 'Sélectionner un dossier',
    'LBL_ERROR_SENDING_EMAIL' => 'Problème lors de l&#39;envoi de l\'E-mail',
    'LBL_ERROR_SAVING_DRAFT' => 'Erreur de sauvegarde du brouillon',
    'LBL_FROM_NAME' => 'Nom de',
    'LBL_FROM' => 'Expéditeur :',
    'LBL_REPLY_TO' => 'Répondre à :',
    'LBL_HTML_BODY' => 'Corps HTML',
    'LBL_INVITEE' => 'Destinataires',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Prospects',
    'LBL_MESSAGE_SENT' => 'Message envoyé',
    'LBL_MODIFIED_BY' => 'Modifié par',
    'LBL_MODULE_NAME' => 'Tous les E-mails',
    'LBL_MODULE_TITLE' => 'E-mails :',
    'LBL_MY_EMAILS' => 'E-mails',
    'LBL_NEW_FORM_TITLE' => 'Archiver E-mail',
    'LBL_NONE' => 'Aucun',
    'LBL_NOT_SENT' => 'Erreur Envoi',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Pièces jointes',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Affaires',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projets',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Tâches du Projet',
    'LBL_RAW' => 'E-mail texte brut',
    'LBL_SAVE_AS_DRAFT_BUTTON_TITLE' => 'Sauvegarder en brouillon',
    'LBL_DISREGARD_DRAFT_BUTTON_TITLE' => 'Ignorer ce brouillon',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher un E-mail',
    'LBL_SEND_ANYWAYS' => 'Le sujet de votre E-mail est vide. Enregistrer/envoyer tout de même ?',
    'LBL_SEND_BUTTON_LABEL' => 'Envoyer',
    'LBL_SEND_BUTTON_TITLE' => 'Envoyer',
    'LBL_SEND' => 'ENVOI',
    'LBL_SENT_MODULE_NAME' => 'Messages envoyés',
    'LBL_SHOW_ALT_TEXT' => 'Afficher le texte alternatif',
    'LBL_SIGNATURE' => 'Signature',
    'LBL_SUBJECT' => 'Sujet :',
    'LBL_TEXT_BODY' => 'Corps Texte',
    'LBL_TIME' => 'Heure envoi :',
    'LBL_TO_ADDRS' => 'A',
    'LBL_USERS_SUBPANEL_TITLE' => 'Utilisateurs',
    'LBL_USERS' => 'Utilisateurs',

    'LNK_CALL_LIST' => 'Appels',
    'LBL_EMAIL_RELATE' => 'Relatif à',
    'LNK_EMAIL_TEMPLATE_LIST' => 'Voir les modèles d\'e-mail',
    'LNK_MEETING_LIST' => 'Réunions',
    'LNK_NEW_CALL' => 'Journal d\'appel',
    'LNK_NEW_EMAIL_TEMPLATE' => 'Nouveau Modèle d\'E-mail',
    'LNK_NEW_EMAIL' => 'Envoyer un message',
    'LNK_NEW_MEETING' => 'Organiser une réunion',
    'LNK_NEW_NOTE' => 'Créer une note ou une pièce jointe',
    'LNK_NEW_SEND_EMAIL' => 'Rédiger',
    'LNK_NEW_TASK' => 'Créer Tâche',
    'LNK_NOTE_LIST' => 'Notes',
    'LNK_SENT_EMAIL_LIST' => 'Messages envoyés',
    'LNK_TASK_LIST' => 'Tâches',
    'LNK_VIEW_CALENDAR' => 'Aujourd&#39;hui',

    'LBL_LIST_ASSIGNED' => 'Assigné',
    'LBL_LIST_CONTACT_NAME' => 'Nom du contact',
    'LBL_LIST_DATE' => 'Date Envoi',
    'LBL_LIST_DATE_SENT_RECEIVED' => 'Date envoi/réception',
    'LBL_LIST_FORM_DRAFTS_TITLE' => 'Brouillon',
    'LBL_LIST_FORM_SENT_TITLE' => 'Messages envoyés',
    'LBL_LIST_FORM_TITLE' => 'Liste des E-mails',
    'LBL_LIST_FROM_ADDR' => 'Expéditeur',
    'LBL_LIST_RELATED_TO' => 'Type de destinataire',
    'LBL_LIST_SUBJECT' => 'Sujet',
    'LBL_LIST_TO_ADDR' => 'A',
    'LBL_LIST_TYPE' => 'Type',

    'WARNING_SETTINGS_NOT_CONF' => 'ATTENTION : Votre paramétrage des E-mails ne vous permet pas d\'envoyer d\'E-mails.',

    // for All emails
    'LBL_BUTTON_RAW_LABEL' => 'Voir texte brut',
    'LBL_BUTTON_RAW_LABEL_HIDE' => 'Masquer texte brut',

    // for InboundEmail
    'LBL_BUTTON_CHECK' => 'Relever les E-mails',
    'LBL_BUTTON_CHECK_TITLE' => 'Rafraîchir les messages',
    'LBL_BUTTON_FORWARD' => 'Transférer',
    'LBL_BUTTON_REPLY_TITLE' => 'Répondre',
    'LBL_BUTTON_REPLY_ALL' => 'Répondre à tous',
    'LBL_BUTTON_DELETE_IMAP' => 'Supprimer de IMAP',
    'LBL_CASES_SUBPANEL_TITLE' => 'Tickets',
    'LBL_INBOUND_TITLE' => 'E-mails entrants',
    'LBL_INTENT' => 'Intention',
    'LBL_MESSAGE_ID' => 'ID Message',
    'LBL_REPLY_HEADER_1' => 'De',
    'LBL_REPLY_HEADER_2' => 'a écrit :',
    'LBL_REPLY_TO_ADDRESS' => 'Adresse du reply-to',
    'LBL_REPLY_TO_NAME' => 'Nom du reply-to',

    'LBL_LIST_BUG' => 'Anomalies',
    'LBL_LIST_CASE' => 'Tickets',
    'LBL_LIST_CONTACT' => 'Contacts',
    'LBL_LIST_LEAD' => 'Prospects',
    'LBL_LIST_TASK' => 'Tâches',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilisateur attribué',

    // for Inbox
    'LBL_ALL' => 'Tous',
    'LBL_ASSIGN_WARN' => 'Assurez que les 3 options sont sélectionnés.',
    'LBL_BACK_TO_GROUP' => 'Retour vers la boite Groupe',
    'LBL_BUTTON_DISTRIBUTE_TITLE' => 'Assigner',
    'LBL_BUTTON_DISTRIBUTE' => 'Assigner',
    'LBL_BUTTON_GRAB_TITLE' => 'Récupérer du Groupe',
    'LBL_BUTTON_GRAB' => 'Récupérer du Groupe',
    'LBL_CREATE_BUG' => 'Créer Bug',
    'LBL_CREATE_CASE' => 'Créer Ticket',
    'LBL_CREATE_CONTACT' => 'Créer Contact',
    'LBL_CREATE_LEAD' => 'Créer un prospect',
    'LBL_CREATE_TASK' => 'Créer Tâche',
    'LBL_DIST_TITLE' => 'Affectation',
    'LBL_LOCK_FAIL_DESC' => 'Elément choisi indisponible actuellement.',
    'LBL_LOCK_FAIL_USER' => 'se l&#39;est approprié.',
    'LBL_MASS_DELETE_ERROR' => 'Aucun élément défini pour la suppression.',
    'LBL_NEW' => 'Nouveau',
    'LBL_NEXT_EMAIL' => 'Prochain Élément disponible',
    'LBL_REPLIED' => 'Répondu',
    'LBL_TO' => 'A :',
    'LBL_TOGGLE_ALL' => 'Basculer Tous/Aucun',
    'LBL_UNKNOWN' => 'Inconnu',
    'LBL_USE' => 'Assigner :',
    'LBL_ASSIGN_SELECTED_RESULTS_TO' => 'Assigner les résultats sélectionnés à :',
    'LBL_USER_SELECT' => 'Sélectionner Utilisateurs',
    'LBL_USING_RULES' => 'Utiliser les Régles :',
    'LBL_WARN_NO_DIST' => 'Aucune méthode de distribution sélectionnée',
    'LBL_WARN_NO_USERS' => 'Aucun Utilisateur sélectionné',
    'LBL_IMPORT_STATUS_TITLE' => 'Statut',
    'LBL_INDICATOR' => 'Indicateur',
    'LBL_LIST_STATUS' => 'Statut',
    'LBL_LIST_TITLE_GROUP_INBOX' => 'E-mails Groupés',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Brouillons',
    'LBL_LIST_TITLE_MY_INBOX' => 'Boîte de réception',
    'LBL_LIST_TITLE_MY_SENT' => 'Message envoyé',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'E-mails archivés',

    'LNK_MY_DRAFTS' => 'Brouillons',
    'LNK_MY_INBOX' => 'E-mail',
    'LNK_VIEW_MY_INBOX' => 'Voir l\'E-mail',
    'LNK_QUICK_REPLY' => 'Répondre',
    'LBL_EMAILS_NO_PRIMARY_TEAM_SPECIFIED' => 'Aucune équipe principale spécifiée',
    'LBL_INSERT_CONTACT_EMAIL' => 'Insérez l’adresse E-mail d’un Contact',
    'LBL_INSERT_ACCOUNT_EMAIL' => 'Insérez l’adresse E-mail d’un compte',
    'LBL_INSERT_TARGET_EMAIL' => 'Insérez l’adresse E-mail d’une cible',
    'LBL_INSERT_USER_EMAIL' => 'Insérez l’adresse E-mail d\'un utilisateur',
    'LBL_INSERT_LEAD_EMAIL' => 'Insérez l’adresse E-mail d’un prospect',
    'LBL_INSERT_ERROR_BLANK_EMAIL' => 'Adresse E-mail invalide',

    // advanced search
    'LBL_ASSIGNED_TO' => 'Assigné à :',
    'LBL_MEMBER_OF' => 'Parent',
    'LBL_QUICK_CREATE' => 'Créer Rapidement',
    'LBL_CREATE' => 'Créer',
    'LBL_STATUS' => 'Statut E-mail :',
    'LBL_EMAIL_FLAGGED' => 'Signalé :',
    'LBL_EMAIL_REPLY_TO_STATUS' => 'Répondre avec le statut :',
    'LBL_TYPE' => 'Type :',
    //#20680 EmialTemplate Ext.Message.show;
    'LBL_EMAILTEMPLATE_MESSAGE_SHOW_TITLE' => 'Merci de vérifier !',
    'LBL_EMAILTEMPLATE_MESSAGE_SHOW_MSG' => 'En sélectionnant ce modèle vous allez écraser toutes les données existantes dans le corps de l\'E-mail . Voulez vous continuer?',
    'LBL_EMAILTEMPLATE_MESSAGE_CLEAR_MSG' => 'En sélectionnant "Aucun", vous allez écraser toutes les données existantes dans le corps du message . Voulez-vous continuer ?',
    'LBL_EMAILTEMPLATE_MESSAGE_WARNING_TITLE' => 'Attention',
    'LBL_EMAILTEMPLATE_MESSAGE_MULTIPLE_RECIPIENTS' => 'Utilisation d&#39;un modèle d&#39;E-mail contenant des variables de contact, tels que le nom du contact. Envoyer des E-mails à plusieurs destinataires peut avoir des résultats inattendus. Il est recommandé d&#39;utiliser une campagne d&#39;E-mail pour les envois de masse.',
    'LBL_CHECK_ATTACHMENTS' => 'Vérifiez les pièces jointes!',
    'LBL_HAS_ATTACHMENTS' => 'Cet E-mail contient déjà une pièce jointe. Voulez-vous les conservez ?',
    'LBL_HAS_ATTACHMENT_INDICATOR' => 'Avec Pièce(s) Jointe(s)',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Champs Obligatoires Oubliés',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Champs Obligatoires Invalides',
    'LBL_FILTER_BY_RELATED_BEAN' => 'Voir les destinataires liés à :',
    'LBL_ADD_INBOUND_ACCOUNT' => 'Ajouter',
    'LBL_ADD_OUTBOUND_ACCOUNT' => 'Ajouter',
    'LBL_EMAIL_ACCOUNTS_INBOUND' => 'Paramètres compte E-mail',
    'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNT' => 'Serveur SMTP paramétré pour envoyer des E-mails',
    'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNTS' => 'Serveurs SMTP paramétrés pour envoyer des E-mails',
    'LBL_EMAIL_SETTINGS_INBOUND_ACCOUNTS' => 'Comptes E-mail',
    'LBL_EMAIL_SETTINGS_INBOUND' => 'E-mail Entrant',
    'LBL_EMAIL_SETTINGS_OUTBOUND' => 'Paramètres du compte de messages sortants',
    'LBL_ADD_CC' => 'Insérer Cc',
    'LBL_ADD_BCC' => 'Insérer Cci',
    'LBL_MOVE_TO_BCC' => 'Déplacer vers Bcc',
    'LBL_ADD_TO_ADDR' => 'Ajouter',
    'LBL_SELECTED_ADDR' => 'Sélectionné',
    'LBL_ADD_CC_BCC_SEP' => '|',
    'LBL_SEND_EMAIL_FAIL_TITLE' => 'Échec d\'envoi',
    'LBL_EMAIL_DETAIL_VIEW_SHOW' => 'Voir',
    'LBL_EMAIL_DETAIL_VIEW_MORE' => 'Plus',
    'LBL_MORE_OPTIONS' => 'Options',
    'LBL_LESS_OPTIONS' => 'Masquer Options',
    'LBL_MAILBOX_TYPE_PERSONAL' => 'Personnel',
    'LBL_MAILBOX_TYPE_GROUP' => 'Groupe',
    'LBL_MAILBOX_TYPE_GROUP_FOLDER' => 'Groupe - Import Automatique',
    'LBL_SEARCH_FOR' => 'Rechercher',
    'LBL_EMAIL_INBOUND_TYPE_HELP' => '<b>Personnel</b> : Compte E-mail personnel accessible et géré par l&#39;utilisateur.<br><b>Groupe</b> : Compte mail accessible et géré par les utilisateurs d&#39;une Equipe.<br><b>Groupe - Import Automatique</b> : Compte mail accessible par les utilisateurs d&#39;une Equipe. Les E-mails sont enregistrés automatiquement dans SuiteCRM.',
    'LBL_ADDRESS_BOOK_SEARCH_HELP' => 'Saisir une Adresse E-mail, un Nom, un Prénom ou un Compte pour trouver des Destinataires.',
    'LBL_TEST_SETTINGS' => 'Paramètres de Test',
    'LBL_EMPTY_EMAIL_BODY' => '<p><span style="color: #888888;"><em>Ce message est vide</em></span></p>',
    'LBL_HAS_EMPTY_EMAIL_SUBJECT' => 'Veuillez préciser le sujet',
    'LBL_HAS_EMPTY_EMAIL_BODY' => 'Veuillez saisir un message pour votre E-mail',
    'LBL_HAS_INVALID_EMAIL_CC' => 'Les adresses dans le champ Cc ne sont pas valides',
    'LBL_HAS_INVALID_EMAIL_BCC' => 'Les adresses dans le champ Bcc ne sont pas valides',
    'LBL_HAS_INVALID_EMAIL_TO' => 'Les adresses dans le champ "A :" ne sont pas valides',
    'LBL_TEST_EMAIL_SUBJECT' => 'Test d&#39;envoi d&#39;E-mail depuis SuiteCRM',
    'LBL_NO_SUBJECT' => '(Aucun object)',
    'LBL_CHECKING_ACCOUNT' => 'Vérification du compte de messagerie',
    'LBL_OF' => 'OFF',
    'LBL_TEST_EMAIL_BODY' => 'Ce mail a été envoyé afin de tester le serveur SMTP configuré dans SuiteCRM. Si vous lisez ceci c&#39;est que votre accès au serveur SMTP est correctement configuré.',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'L\'administrateur n\'a pas encore configuré de compte sortant par défaut. Impossible d\'envoyer l\'E-mail de test.',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Utiliser l\'authentification SMTP ?',
    'LBL_MAIL_SMTPPASS' => 'Mot de passe SMTP :',
    'LBL_MAIL_SMTPPORT' => 'Port SMTP :',
    'LBL_MAIL_SMTPSERVER' => 'Serveur SMTP :',
    'LBL_MAIL_SMTPUSER' => 'Nom d\'utilisateur SMTP :',
    'LBL_MAIL_SMTP_SETTINGS' => 'Spécification du serveur SMTP',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Choisissez votre fournisseur de messagerie :',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail - Mot de passe :',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail - Identifiant :',
    'LBL_GMAIL_SMTPPASS' => 'Gmail - Mot de passe :',
    'LBL_GMAIL_SMTPUSER' => 'Adresse E-mail Gmail :',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange - Mot de passe :',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange - Nom d\\\'utilisateur:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange - Port SMTP :',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange - Serveur :',

    'LBL_EDIT_LAYOUT' => 'Modifier la mise en page' /*for 508 compliance fix*/,
    'LBL_ATTACHMENT' => 'Pièce jointe' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Supprimer' /*for 508 compliance fix*/,
    'LBL_CREATE_CASES' => 'Créer Ticket' /*for 508 compliance fix*/,
    'LBL_CREATE_LEADS' => 'Créer des prospects' /*for 508 compliance fix*/,
    'LBL_CREATE_CONTACTS' => 'Créer Contact' /*for 508 compliance fix*/,
    'LBL_CREATE_BUGS' => 'Créer Bug' /*for 508 compliance fix*/,
    'LBL_CREATE_TASKS' => 'Créer Tâche' /*for 508 compliance fix*/,
    'LBL_CHECK_INLINE' => 'Valide' /*for 508 compliance fix*/,
    'LBL_CLOSE' => 'Fermer' /*for 508 compliance fix*/,
    'LBL_HELP' => 'Aide' /*for 508 compliance fix*/,
    'LBL_WAIT' => 'Patienter' /*for 508 compliance fix*/,
    'LBL_CHECKEMAIL' => 'Relever les messages' /*for 508 compliance fix*/,
    'LBL_COMPOSEEMAIL' => 'Rédiger E-mail' /*for 508 compliance fix*/,
    'LBL_EMAILSETTINGS' => 'Paramètres E-mails' /*for 508 compliance fix*/,

    // SNIP
    'LBL_EMAILS_MEETINGS_REL' => 'E-mails : Réunions',
    'LBL_DATE_MODIFIED' => 'Date de modification',

    'LBL_CATEGORY' => 'Catégorie',
    'LBL_LIST_CATEGORY' => 'Catégorie',
    'LBL_EMAIL_TEMPLATE' => 'Modèle d\'E-mail',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Ignorer ce brouillon',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'Cette opération supprimera le contenu du message. Voulez-vous continuer ?',
    'LBL_EMAIL_DRAFT_DELETED' => 'Le brouillon a été supprimé',
    'LBL_EMAIL_DRAFT_ERROR_DELETING' => 'Une erreur est survenue lors de la tentative d\'enregistrement du brouillon.',

    'LBL_QUICK_CREATE_SUCCESS1' => 'L\'enregistrement a bien été créé.',
    'LBL_QUICK_CREATE_SUCCESS2' => 'Cliquez sur OK pour afficher le nouvel enregistrement.',
    'LBL_QUICK_CREATE_SUCCESS3' => 'Cliquez sur Annuler pour revenir à l’E-mail.',

    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Appliquer un modèle d\'E-mail',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'Cette opération remplacera le corps du message. Voulez-vous continuer ?',

    'LBL_MAILBOX_ID' => 'Boîte aux lettres',
    'LBL_PARENT_ID' => 'Parent (ID)',
    'LBL_LAST_SYNCED' => 'Dernière synchronisation',
    'LBL_ORPHANED' => 'Orphelines',
    'LBL_IMAP_KEYWORDS' => 'Mots de passe IMAP',
    'LBL_ERROR_NO_FOLDERS' => 'Erreur : Il n’existe aucun dossier. S’il vous plaît vérifiez vos paramètres de messagerie.',
    'LBL_ORIGINAL_MESSAGE_SEPARATOR' => '---',


    'LBL_MARK_UNREAD' => 'Marquer comme non lu',
    'LBL_MARK_READ' => 'Marquer comme lu',
    'LBL_MARK_FLAGGED' => 'Marquer comme "signalé"',
    'LBL_MARK_UNFLAGGED' => 'Supprimer le marquage "signalé"',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'E-mail de consentement envoyé',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Échec de l\'envoi de l\'E-mail de consentement',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'Confirmer le jeton de consentement',

    'ERR_NO_RETURN_ID' => 'Pièce jointe introuvable.',

    'LBL_LIST_DATE_MODIFIED' => 'Dernière modification',
    'LNK_IMPORT_CAMPAIGNS' => 'Importer une campagne',
    
    // Email Validation Error messages. Typicaly for Email Validation:
    'ERR_FIELD_FROM_IS_NOT_SET' => 'Champ origine non défini.',
    'ERR_FIELD_FROM_IS_EMPTY' => 'Le champ origine est vide.',
    'ERR_FIELD_FROM_IS_INVALID' => 'Champ origine non valable.',
    'ERR_FIELD_FROM_ADDR_IS_NOT_SET' => 'Champ d\'adresse non défini.',
    'ERR_FIELD_FROM_ADDR_IS_EMPTY' => 'Le champ adresse est vite.',
    'ERR_FIELD_FROM_ADDR_IS_INVALID' => 'Champ adresse non valable.',
    'ERR_FIELD_FROMNAME_IS_NOT_SET' => 'Champ nom d\'expéditeur non défini.',
    'ERR_FIELD_FROMNAME_IS_EMPTY' => 'Champ d\'expéditeur vide.',
    'ERR_FIELD_FROMNAME_IS_INVALID' => 'Champ d\'expéditeur non valable.',
    'ERR_FIELD_FROM_NAME_IS_NOT_SET' => 'Champ nom d\'expéditeur non défini.',
    'ERR_FIELD_FROM_NAME_IS_EMPTY' => 'Champ d\'expéditeur vide.',
    'ERR_FIELD_FROM_NAME_IS_INVALID' => 'Champ d\'expéditeur non valable.',
    'ERR_FIELD_FROM_ADDR_NAME_IS_NOT_SET' => 'Le couple adresse et nom d\'expéditeur n\'est pas défini.',
    'ERR_FIELD_FROM_ADDR_NAME_IS_EMPTY' => 'Le couple adresse et nom d\'expéditeur est vide.',
    'ERR_FIELD_FROM_ADDR_NAME_IS_INVALID' => 'Le couple adresse et nom d\'expéditeur est incorrect.',
    'ERR_FIELD_FROM_ADDR_NAME_DOESNT_MATCH_REGEX' => 'Ensemble adresse et nom d\'expéditeur invalide. Ecrire sous la forme "de@adresse.org <Name of Person>".',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_NAME_PART' => 'Nom d\'expéditeur invalide dans l\'ensemble adresse et nom d\'expéditeur.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART' => 'Adresse invalide dans l\'ensemble adresse et nom d\'expéditeur.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART_TO_FIELD_FROM' => 'L\'adresse et le nom de l\'expéditeur ne correspondent pas au nom ou à l\'adresse d\'expéditeur.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART_TO_FIELD_FROM_ADDR' => 'L\'adresse et le nom de l\'expéditeur ne correspondent pas à l\'adresse d\'expéditeur.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART_TO_FIELD_FROMNAME' => 'L\'adresse et le nom de l\'expéditeur ne correspondent pas au champ d\'expéditeur.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART_TO_FIELD_FROM_NAME' => 'L\'adresse et le nom de l\'expéditeur ne correspondent pas au champ d\'expéditeur.',
);