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
// OOTB Scheduler Job Names:
    'LBL_OOTB_WORKFLOW' => 'Actions des Processus de Workflow',
    'LBL_OOTB_REPORTS' => 'Lancer les actions planifi??es de g??n??ration de rapports',
    'LBL_OOTB_IE' => 'V??rifier les bo??tes e-mails entrantes',
    'LBL_OOTB_BOUNCE' => 'Lancer le traitement nocturne de gestion des rebonds des campagnes E-mails',
    'LBL_OOTB_CAMPAIGN' => 'Lancer le traitement nocturne d\'envoi des Campagnes E-mails',
    'LBL_OOTB_PRUNE' => 'Purger la BDD le premier de chaque mois',
    'LBL_OOTB_TRACKER' => 'Purger les tables des Suivis',
    'LBL_OOTB_SUITEFEEDS' => 'Tables Prune SuiteCRM',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Ex??cuter les notifications par E-mail',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Nettoyer la file des jobs',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Suppression des documents du syst??me de fichier',
    'LBL_OOTB_GOOGLE_CAL_SYNC' => 'Synchronisation de Google Calendar',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Fr??quence',
    'LBL_LIST_LIST_ORDER' => 'Planificateurs :',
    'LBL_LIST_NAME' => 'Planificateur :',
    'LBL_LIST_RANGE' => 'Plage d&#39;activit??',
    'LBL_LIST_STATUS' => 'Statut :',
    'LBL_LIST_TITLE' => 'Liste des planifications :',
// human readable:
    'LBL_SUN' => 'Le dimanche',
    'LBL_MON' => 'Le lundi',
    'LBL_TUE' => 'Le mardi',
    'LBL_WED' => 'Le mercredi',
    'LBL_THU' => 'Le jeudi',
    'LBL_FRI' => 'Le vendredi',
    'LBL_SAT' => 'Le samedi',
    'LBL_ALL' => 'Tous les jours',
    'LBL_EVERY' => 'Tous',
    'LBL_FROM' => 'De',
    'LBL_ON_THE' => 'Toutes les',
    'LBL_RANGE' => '??',
    'LBL_AND' => 'et',
    'LBL_MINUTES' => 'minutes',
    'LBL_HOUR' => 'heures',
    'LBL_HOUR_SING' => 'heures',
    'LBL_OFTEN' => 'Aussi souvent que possible.',
    'LBL_MIN_MARK' => 'minutes',


// crontabs
    'LBL_MINS' => 'min',
    'LBL_HOURS' => 'hrs',
    'LBL_DAY_OF_MONTH' => 'date',
    'LBL_MONTHS' => 'mois',
    'LBL_DAY_OF_WEEK' => 'jour',
    'LBL_CRONTAB_EXAMPLES' => 'Les valeurs ci dessus utilisent les notations standard de la crontab.',
// Labels
    'LBL_ALWAYS' => '- toujours -',
    'LBL_CATCH_UP' => 'Relancer si manqu??',
    'LBL_CATCH_UP_WARNING' => 'D??cocher si cette action peut prendre du temps ?? s&#39;exectuer.',
    'LBL_DATE_TIME_END' => 'Date & heure de fin',
    'LBL_DATE_TIME_START' => 'Date & heure de d??marrage',
    'LBL_INTERVAL' => 'Intervalle',
    'LBL_JOB' => 'T??che',
    'LBL_JOB_URL' => 'URL du job',
    'LBL_LAST_RUN' => 'Derni??re ex??cution',
    'LBL_MODULE_NAME' => 'Planificateur SuiteCRM',
    'LBL_MODULE_TITLE' => 'Planificateurs',
    'LBL_NAME' => 'Nom du Job',
    'LBL_NEVER' => '- jamais -',
    'LBL_NEW_FORM_TITLE' => 'Nouvelle action planifi??e',
    'LBL_PERENNIAL' => '- jamais -',
    'LBL_SEARCH_FORM_TITLE' => 'Recherche action planifi??e',
    'LBL_SCHEDULER' => 'Planificateur :',
    'LBL_STATUS' => 'Statut',
    'LBL_TIME_FROM' => 'Actif de',
    'LBL_TIME_TO' => 'Actif jusqu ??',
    'LBL_WARN_CURL_TITLE' => 'Avertissement cURL :',
    'LBL_WARN_CURL' => 'Attention :',
    'LBL_WARN_NO_CURL' => 'Ce syst??me ne dispose pas des librairies cURL (activ??es/compil??es) dans le module PHP (--with-curl=/path/to/curl_library).  Veuillez contacter votre administrateur pour r??soudre ce probl??me.  Sans la fonctionnalit?? cURL, le planificateur ne pourra traiter ses jobs.',
    'LBL_BASIC_OPTIONS' => 'Param??trages Essentiels',
    'LBL_ADV_OPTIONS' => 'Options avanc??es',
    'LBL_TOGGLE_ADV' => 'Options avanc??es',
    'LBL_TOGGLE_BASIC' => 'Options de base',
// Links
    'LNK_LIST_SCHEDULER' => 'Planificateurs',
    'LNK_NEW_SCHEDULER' => 'Nouvelle action planifi??e',
// Messages
    'ERR_CRON_SYNTAX' => 'Syntaxe de l&#39;action planifi??e invalide',
    'NTC_LIST_ORDER' => 'L&#39;ordre de cette planification va apparaitre dans les listes d??roulantes du planificateur',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Pour configurer le planificateur Windows',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Pour configurer la Crontab',
    'LBL_CRON_LINUX_DESC1' => 'Afin d???ex??cuter les planifications SuiteCRM, ajoutez ?? votre fichier crontab cette commande??:',
    'LBL_CRON_LINUX_DESC2' => '... et ajoutez la ligne suivante dans le fichier crontab??:',
    'LBL_CRON_LINUX_DESC3' => 'Vous devriez faire ceci uniquement lorsque l\'installation sera termin??e.',
    'LBL_CRON_WINDOWS_DESC' => 'Remarque : Afin de lancer les planificateurs de SuiteCRM, cr??ez un fichier batch pour ex??cuter les t??ches planifi??es ?? l\'aide du planificateur de t??ches de Windows. Le fichier batch devrait inclure les commandes suivantes :',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'Journal des t??ches',
    'LBL_EXECUTE_TIME' => 'Date d&#39;execution',

//jobstrings
    'LBL_REFRESHJOBS' => 'Actualiser les actions',
    'LBL_POLLMONITOREDINBOXES' => 'V??rifier les bo??tes e-mails entrantes',
    'LBL_PERFORMFULLFTSINDEX' => 'Syst??me d???indexation de recherche en texte int??gral',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Lancer le traitement nocturne d\'envoi des Campagnes E-mails',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Lancer le traitement nocturne de gestion des rebonds des campagnes E-mails',
    'LBL_PRUNEDATABASE' => 'Purger la BDD le premier de chaque mois',
    'LBL_TRIMTRACKER' => 'Purger les tables des Suivis',
    'LBL_TRIMSUGARFEEDS' => 'Tables Prune SuiteCRM',
    'LBL_SENDEMAILREMINDERS' => 'Ex??cuter l\'envoi des rappels par e-mail',
    'LBL_CLEANJOBQUEUE' => 'Nettoyer la liste des jobs en attente',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'Suppression des documents du syst??me de fichier',

    'LBL_POLLMONITOREDINBOXESAOP' => 'Interrogation des messageries contr??l??es par Joomla',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'Ex??cuter les rapports planifi??s',
    'LBL_PROCESSAOW_WORKFLOW' => 'Process d\'AOS Workflow',

    'LBL_RUNELASTICSEARCHINDEXERSCHEDULER' => 'Planificateur d\'indexation d\'Elasticsearch',

    'LBL_SCHEDULER_TIMES' => 'Plannificateur',
    'LBL_SYNCGOOGLECALENDAR' => 'Synchronise les calendriers Google',
);

global $sugar_config;
