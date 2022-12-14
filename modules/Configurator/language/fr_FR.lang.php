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
    /*'ADMIN_EXPORT_ONLY'=>'Admin export only',*/
    'ADVANCED' => 'Avanc??',
    'DEFAULT_CURRENCY_ISO4217' => 'Code devise ISO 4217',
    'DEFAULT_CURRENCY_NAME' => 'Nom de la devise',
    'DEFAULT_CURRENCY_SYMBOL' => 'Symbole de la devise',
    'DEFAULT_DATE_FORMAT' => 'Format de date par d??faut',
    'DEFAULT_DECIMAL_SEP' => 'Symbole d??cimal',
    'DEFAULT_LANGUAGE' => 'Langue par d??faut',
    'DEFAULT_SYSTEM_SETTINGS' => 'Interface utilisateur',
    'DEFAULT_THEME' => 'Th??me par d??faut',
    'DEFAULT_TIME_FORMAT' => 'Format de l\'heure par d??faut',

    'DISPLAY_RESPONSE_TIME' => 'Afficher les temps de r??ponse serveur',

    'IMAGES' => 'Logos',
    'LBL_ALLOW_USER_TABS' => 'Autoriser les utilisateurs ?? masquer les onglets',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'Param??tres syst??me',
    'LBL_LOGVIEW' => 'Voir le journal',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Utiliser l\'authentification SMTP ?',
    'LBL_MAIL_SMTPPASS' => 'Mot de passe SMTP :',
    'LBL_MAIL_SMTPPORT' => 'Port SMTP :',
    'LBL_MAIL_SMTPSERVER' => 'Serveur SMTP :',
    'LBL_MAIL_SMTPUSER' => 'Nom d\'utilisateur SMTP :',
    'LBL_MAIL_SMTP_SETTINGS' => 'Sp??cification du serveur SMTP',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Choisissez votre fournisseur de messagerie :',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail - Mot de passe :',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail - Identifiant :',
    'LBL_GMAIL_SMTPPASS' => 'Gmail - Mot de passe :',
    'LBL_GMAIL_SMTPUSER' => 'Adresse E-mail Gmail :',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange - Mot de passe :',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange - Nom d\\\'utilisateur:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange - Port SMTP :',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange - Serveur :',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Autoriser les utilisateurs ?? utiliser ces param??tres pour l\'envoi d\'E-mails :',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Lorsque cette option est s??lectionn??e, tous les utilisateurs seront en mesure d\'envoyer des E-mails en utilisant le m??me serveur d\'envoi d\'E-mails, ces param??tres sont aussi utilis?? pour envoyer les notifications et les alertes du syst??me. Si cette option n\'est pas s??lectionn??e, les utilisateurs pourront toujours utiliser le serveur d\'envoi d\'E-mails de leurs choix apr??s avoir fourni leurs informations dans leur compte utilisateur.',
    'LBL_MAILMERGE' => 'Fusion d\'E-mails',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Intervalle minimal de rafra??chissement des Dashlet',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Il s\'agit de la valeur minimale possible pour le rafra??chissement automatique des zones incrust??es. Configurer cette valeur ?? "Jamais" d??sactive enti??rement le rafra??chissement automatique des zones.',
    'LBL_MODULE_FAVICON' => 'Afficher l\'??cone du module comme favicon',
    'LBL_MODULE_FAVICON_HELP' => 'Si vous affichez un module comportant une ic??ne, utilisez l\'ic??ne du module dans l\'onglet du navigateur comme favicon, au lieu du favicon du th??me.',
    'LBL_MODULE_NAME' => 'Param??tres syst??me',
    'LBL_MODULE_ID' => 'Configurateur',
    'LBL_MODULE_TITLE' => 'Interface utilisateur',
    'LBL_NOTIFY_FROMADDRESS' => 'Adresse de l\'exp??diteur :',
    'LBL_NOTIFY_SUBJECT' => 'Sujet du message :',

    'LBL_PROXY_AUTH' => 'Le proxy n??cessite-t-il une authentification ?',
    'LBL_PROXY_HOST' => 'Adresse du proxy',
    'LBL_PROXY_ON_DESC' => 'D??finissez les param??tres du proxy.',
    'LBL_PROXY_ON' => 'Utiliser un serveur proxy ?',
    'LBL_PROXY_PASSWORD' => 'Mot de Passe',
    'LBL_PROXY_PORT' => 'Port',
    'LBL_PROXY_TITLE' => 'R??glages proxy',
    'LBL_PROXY_USERNAME' => 'Nom d\'utilisateur',
    'LBL_RESTORE_BUTTON_LABEL' => 'R??initialiser',
    'LBL_SYSTEM_SETTINGS' => 'Param??tres syst??me',
    'LBL_USE_REAL_NAMES' => 'Afficher les noms complets',
    'LBL_USE_REAL_NAMES_DESC' => 'Par d??faut voir le "Nom Complet" des utilisateurs dans les champs Assign?? ??',
    'LBL_DISALBE_CONVERT_LEAD' => 'D??sactiver l\'action de conversion de prospects pour les prospects convertis',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Si un prospect a d??j?? ??t?? converti, activer cette option supprimera l\'action de conversion.',
    'LBL_ENABLE_ACTION_MENU' => 'Afficher les actions dans les menus',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'S??lectionnez pour afficher les actions dans une liste de menu. Si d??-s??lectionn??, les actions seront affich??es dans des boutons ind??pendants.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Activer l\'??dition en ligne sur l\'affichage de la liste',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'S??lectionnez cette option pour activer l\'??dition en ligne des champs de la vue de d??tail. Si non s??lectionn??e, l\'??dition en ligne sera d??sactiv??e sur la vue de d??tail.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Activer l\'??dition en ligne sur la vue de d??tail',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'S??lectionnez cette option pour activer l\'??dition en ligne des champs de la vue de d??tail. Si non s??lectionn??e, l\'??dition en ligne sera d??sactiv??e sur la vue de d??tail.',
    'LBL_HIDE_SUBPANELS' => 'Sous-panneaux repli??s',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Nombre maximum d?????l??ments affich??s par page dans les vues de liste',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Nombre maximum d\'??lements affich??s dans les "Sous-Panels"',
    'LOG_MEMORY_USAGE' => 'Tracer l\'utilisation de la m??moire',
    'LOG_SLOW_QUERIES' => 'Tracer les requ??tes consid??r??es comme lentes',
    'CURRENT_LOGO' => 'Logo actuel :',
    'CURRENT_LOGO_HELP' => 'Ce logo est affich?? dans le milieu de l\'??cran de connexion de votre application SuiteCRM.',
    'NEW_LOGO' => 'S??lectionnez le logo :',
    'NEW_LOGO_HELP' => 'Le fichier d\'image doit ??tre au format .png ou .jpg. La hauteur maximale est de 170 pixels et la largeur maximale de 450 pixels. Les images aux dimensions sup??rieures ?? ces valeurs seront redimensionn??e aux valeurs maximales indiqu??es.',
    'NEW_LOGO_HELP_NO_SPACE' => 'Le fichier d\'image doit ??tre au format .png ou .jpg. La hauteur maximale est de 170 pixels et la largeur maximale de 450 pixels. Les images aux dimensions sup??rieures ?? ces valeurs seront redimensionn??e aux valeurs maximales indiqu??es.',
    'SLOW_QUERY_TIME_MSEC' => 'Seuil des requ??tes consid??r??es comme lentes (en millisecondes)',
    'STACK_TRACE_ERRORS' => 'Afficher les erreurs de trace de la pile',
    'UPLOAD_MAX_SIZE' => 'Taille maximale des t??l??chargements',
    'VERIFY_CLIENT_IP' => 'Valider l\'adresse IP de l\'utilisateur',
    'LOCK_HOMEPAGE' => 'Brider la personnalisation de la page d\'accueil',
    'LOCK_SUBPANELS' => 'Brider la personnalisation de la position des sous-panels',
    'MAX_DASHLETS' => 'Nombre maximal de zones affich??es sur la page d\'accueil',
    'SYSTEM_NAME' => 'Nom du syst??me :',
    'SYSTEM_NAME_WIZARD' => 'Nom :',
    'SYSTEM_NAME_HELP' => 'C\'est le nom qui s\'affiche dans la barre de titre de votre navigateur.',
    'LBL_LDAP_TITLE' => 'Authentification LDAP',
    'LBL_LDAP_ENABLE' => 'Activer le support de LDAP',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Serveur :',
    'LBL_LDAP_SERVER_PORT' => 'Num??ro du port :',
    'LBL_LDAP_ADMIN_USER' => 'Nom d\'utilisateur :',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Utilis?? pour rechercher l???utilisateur LDAP. Peut-??tre ?? sp??cifier compl??tement.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Mot de passe :',
    'LBL_LDAP_AUTHENTICATION' => 'Authentification :',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Connecter au serveur LDAP avec les informations d\'identification d\'utilisateur sp??cifiques. Sinon l\'acc??s sera anonyme.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Cr??ation automatique des utilisateurs :',
    'LBL_LDAP_USER_DN' => 'DN Utilisateur :',
    'LBL_LDAP_GROUP_DN' => 'DN Groupe :',
    'LBL_LDAP_GROUP_DN_DESC' => 'Exemple : <em>ou=groups,dc=example,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'Filtre Utilisateur :',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Membre du groupe :',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Les utilisateurs doivent ??tre membre d\'un groupe sp??cifique',
    'LBL_LDAP_GROUP_USER_ATTR' => 'Attribut Utilisateur :',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'L\'identifiant unique de la personne qui sera utilis?? pour v??rifier si celle-ci est membre du groupe. Exemple : <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'L\'attribut de Groupe qui sera utilis?? pour filtrer en plus de l\'attribut Utilisateur. Exemple : <em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'Attribut de Groupe :',
    'LBL_LDAP_USER_FILTER_DESC' => 'Appliquer les options de filtrage suppl??mentaire lors de la connexion d\'un utilisateur exemple <em>nis_suitecrm_user=1 ou (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Attribut du Login :',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Attribut de connexion :',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'Exemples pour lier des utilisateurs LDAP??: [<b>AD??:</b>&nbsp;userPrincipalName] [<b>openLDAP??:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;x??:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'Exemples pour rechercher des utilisateurs LDAP??: [<b>AD??:</b>&nbsp;userPrincipalName] [<b>openLDAP??:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;x??:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Exemple : ldap.example.com ou ldaps://ldap.example.com pour une connexion SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Exemple : <em>389 ou 636 pour du SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'Nom du groupe :',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Exemple <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Exemple : <em>ou=people,dc=example,dc=com</eM>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Si un utilisateur authentifi?? n\'est pas connu, il sera automatiquement cr??e.',
    'LBL_LDAP_ENC_KEY' => 'Cl?? de chiffrement :',
    'DEVELOPER_MODE' => 'Mode d??veloppeur',

    'SHOW_DOWNLOADS_TAB' => 'Afficher l\'onglet "T??l??chargement"',
    'SHOW_DOWNLOADS_TAB_HELP' => 'Lorsque s??lectionn??, l???onglet de t??l??chargement appara??tra dans les param??tres utilisateur et fournira aux utilisateurs un acc??s aux plug-ins de SuiteCRM ainsi qu\'aux autres fichiers disponibles',
    'LBL_LDAP_ENC_KEY_DESC' => 'Pour l\'authentification SOAP utilisant LDAP et les Plugins.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'L\'extension php_mcrypt doit ??tre activ??e dans votre fichier php.ini.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'L\'extension openssl doit ??tre activ?? dans le fichier php.ini.',
    'LBL_ALL' => 'Tous',
    'LBL_MARK_POINT' => 'Marqueur',
    'LBL_NEXT_' => 'Suivant >>',
    'LBL_REFRESH_FROM_MARK' => 'Rafra??chir depuis le Marqueur',
    'LBL_SEARCH' => 'Rechercher :',
    'LBL_REG_EXP' => 'Expression r??guli??re :',
    'LBL_IGNORE_SELF' => 'Ignorer :',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Marquer l\'endroit o?? commancer les logs',
    'LBL_DISPLAYING_LOG' => 'Afficher les logs',
    'LBL_YOUR_PROCESS_ID' => 'Votre identifiant de process',
    'LBL_YOUR_IP_ADDRESS' => 'Votre adresse IP est',
    'LBL_IT_WILL_BE_IGNORED' => 'elle sera ignor??e',
    'LBL_LOG_NOT_CHANGED' => 'Les logs n\'ont pas chang??',
    'LBL_ALERT_JPG_IMAGE' => 'Le format de fichier d\'image doit ??tre JPEG. T??l??chargez un nouveau fichier avec une extension .jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'Le format de fichier d\'image doit ??tre JPEG ou PNG. T??l??chargez un nouveau fichier avec l???extension .jpg ou .png.',
    'LBL_ALERT_SIZE_RATIO' => 'Le rapport hauteur/largeur de l\'image doit ??tre compris entre 1:1 et 10:1. L\'image sera ajust??e.',
    'ERR_ALERT_FILE_UPLOAD' => 'Erreur durant le chargement de l\'image.',
    'LBL_LOGGER' => 'Fichier de logs',
    'LBL_LOGGER_FILENAME' => 'Nom du fichier journal',
    'LBL_LOGGER_FILE_EXTENSION' => 'Extension',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Taille maximale du fichier journal',
    'LBL_STACK_TRACE' => 'Activer la trace de la pile',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Format de la date stock??e dans le fichier journal',
    'LBL_LOGGER_LOG_LEVEL' => 'Niveau des Logs',
    'LBL_LEAD_CONV_OPTION' => 'Options pour la conversion des prospects',
    'LEAD_CONV_OPT_HELP' => "<b>Copier</b> - Cr??e et lie les copies de toutes les activit??s du prospect aux nouveaux enregistrements s??lectionn??s par l'utilisateur durant la conversion du prospect. Les copies sont cr????es pour chacun des enregistrement s??lectionn??s.<br><br><b>D??placer</b> - D??place toutes les activit??s du prospect vers le nouvel enregistrement qui est s??lectionn?? par l'utilisateur durant la conversion..<br><br><b>Ne rien faire</b> - Ne fais rien avec les activit??s du prospect durant la conversion. Les activit??s restent attach??es seulement au prospect.",
    'LBL_CONFIG_AJAX' => 'Configurer l\'interface utilisateur en AJAX',
    'LBL_CONFIG_AJAX_DESC' => 'Activer ou d??sactiver l\'utilisation de l\'interface utilisateur en AJAX pour certains modules',
    'LBL_LOGGER_MAX_LOGS' => 'Nombre maximal de fichiers de journaux avant rotation',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Ajouter apr??s nom de fichier',
    'LBL_VCAL_PERIOD' => 'P??riode de mise ?? jour vCal :',
    'LBL_IMPORT_MAX_RECORDS' => 'Import - Nombre maximum de lignes :',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Pr??cise le nombre de lignes autoris?? dans les fichiers d\'importation.<br>Si le nombre de lignes dans un fichier ?? importer d??passe ce nombre, l\'utilisateur est alert??.<br>Si aucun nombre n\'est pr??cis??, il n\'y a pas de limite pour l\'import.',
    'vCAL_HELP' => 'Nombre de mois futurs ?? afficher depuis la date actuelle pour la disponibilit?? des utilisateurs.<BR>Pour d??sactiver cette fonctionnalit??, entrez 0. Le minimum ??tant 1 mois, le maximum 12 mois.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Vos sc??narios',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'Aucun sc??nario n???a ??t?? configur??',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Choisir quels sc??narios sont adapt??s ?? votre installation.  Ces options peuvent ??tre modifi??es apr??s installation.',

    'LBL_WIZARD_TITLE' => 'Assistant d\'administration',
    'LBL_WIZARD_WELCOME_TAB' => 'Bienvenue',
    'LBL_WIZARD_WELCOME_TITLE' => 'Bienvenue dans SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Cliquez sur <b>suivant</b> pour logoter, localiser et configurer SuiteCRM. Si vous d??sirez configurer SuiteCRM plus tard, cliquez sur <b>Ignorer</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Suivant >',
    'LBL_WIZARD_BACK_BUTTON' => '< Pr??c??dent',
    'LBL_WIZARD_SKIP_BUTTON' => 'Passer',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Continuer',
    'LBL_WIZARD_FINISH_TITLE' => 'La configuration de base de votre application est termin??e',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Identit?? visuelle',
    'LBL_WIZARD_SYSTEM_DESC' => 'Fournissez le nom et le logo de votre organisation afin de personnaliser votre SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Pr??cisez comment vous souhaitez afficher vos donn??es dans SuiteCRM, bas?? sur votre situation g??ographique. Les param??tres que vous fournissez ici seront les param??tres par d??faut. Les utilisateurs pourront d??finir leurs propres pr??f??rences dans Mon compte.',
    'LBL_WIZARD_SMTP_DESC' => 'Fournissez le compte de messagerie qui sera utilis?? pour envoyer des messages, tels que les avertissements d\'attribution et les mots de passe des nouveaux utilisateurs. Les utilisateurs recevront les messages de SuiteCRM envoy??s ?? partir du compte de messagerie indiqu??.',
    'LBL_LOADING' => 'Chargement...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Supprimer' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Bienvenue' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Voir les E-mails des Contacts li??s dans le sous panel historique des modules',
    'LBL_HISTORY_SUBPANEL' => 'Sous panel historique',
);
