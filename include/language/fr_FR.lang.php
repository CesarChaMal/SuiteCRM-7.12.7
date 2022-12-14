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

//the left value is the key stored in the db and the right value is ie display value
//to translate, only modify the right value in each key/value pair
$app_list_strings = array(
//e.g. auf Deutsch 'Contacts'=>'Contakten',
    'language_pack_name' => 'Fran??ais (France) - fr_FR',
    'moduleList' => array(
        'Home' => 'Accueil',
        'ResourceCalendar' => 'Calendrier des ressources',
        'Contacts' => 'Contacts',
        'Accounts' => 'Comptes',
        'Alerts' => 'Alertes',
        'Opportunities' => 'Affaires',
        'Cases' => 'Tickets',
        'Notes' => 'Notes',
        'Calls' => 'Appels',
        'TemplateSectionLine' => 'Ligne de s??paration de section',
        'Calls_Reschedule' => 'Replanifier les appels',
        'Emails' => 'E-mails',
        'EAPM' => 'EAPM',
        'Meetings' => 'R??unions',
        'Tasks' => 'T??ches',
        'Calendar' => 'Calendrier',
        'Leads' => 'Prospects',
        'Currencies' => 'Devises',
        'Activities' => 'Activit??s',
        'Bugs' => 'Anomalies',
        'Feeds' => 'Flux RSS',
        'iFrames' => 'Mes sites',
        'TimePeriods' => 'P??riodes',
        'ContractTypes' => 'Types de contrat',
        'Schedulers' => 'Planificateurs',
        'Project' => 'Projets',
        'ProjectTask' => 'T??ches du Projet',
        'Campaigns' => 'Campagnes',
        'CampaignLog' => 'Log des campagnes',
        'Documents' => 'Documents',
        'DocumentRevisions' => 'Version des documents',
        'Connectors' => 'Connecteurs',
        'Roles' => 'R??les',
        'Notifications' => 'Notifications',
        'Sync' => 'Synchronisation',
        'Users' => 'Utilisateurs',
        'Employees' => 'Employ??s',
        'Administration' => 'Administration',
        'ACLRoles' => 'R??les',
        'InboundEmail' => 'E-mails entrants',
        'Releases' => 'Versions',
        'Prospects' => 'Cibles',
        'Queues' => 'Files d\'attente',
        'EmailMarketing' => 'E-mail marketing',
        'EmailTemplates' => 'Email - Mod??les',
        'ProspectLists' => 'Cibles - Listes',
        'SavedSearch' => 'Recherches sauvegard??es',
        'UpgradeWizard' => 'Assistant de mise ?? jour',
        'Trackers' => 'Suivis',
        'TrackerSessions' => 'Suivi des sessions',
        'TrackerQueries' => 'Suivi des requ??tes',
        'FAQ' => 'FAQ',
        'Newsletters' => 'Newsletters',
        'SugarFeed' => 'Flux activit??s internes',
        'SugarFavorites' => 'Favoris SuiteCRM',

        'OAuthKeys' => 'OAuth Cl?? Consommateur',
        'OAuthTokens' => 'Jetons OAuth',
        'OAuth2Clients' => 'Clients OAuth',
        'OAuth2Tokens' => 'Jetons OAuth',
    ),

    'moduleListSingular' => array(
        'Home' => 'Accueil',
        'Dashboard' => 'Tableau de bord',
        'Contacts' => 'Contact',
        'Accounts' => 'Compte',
        'Opportunities' => 'Affaires',
        'Cases' => 'Ticket',
        'Notes' => 'Notes',
        'Calls' => 'Appel',
        'Emails' => 'E-mail',
        'EmailTemplates' => 'Mod??le d\'E-mail',
        'Meetings' => 'R??union',
        'Tasks' => 'T??che',
        'Calendar' => 'Calendrier',
        'Leads' => 'Prospect',
        'Activities' => 'Activit??s',
        'Bugs' => 'Anomalie',
        'KBDocuments' => 'Base de connaissance',
        'Feeds' => 'Flux RSS',
        'iFrames' => 'Mon portail',
        'TimePeriods' => 'P??riodes',
        'Project' => 'Projets',
        'ProjectTask' => 'T??ches projet',
        'Prospects' => 'Cible',
        'Campaigns' => 'Campagnes',
        'Documents' => 'Documents',
        'Sync' => 'Synchronisation',
        'Users' => 'Utilisateurs',
        'SugarFavorites' => 'Favoris SuiteCRM',

    ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'Oui',
        '2' => 'Non',
    ),

    //e.g. en fran??ais 'Analyst'=>'Analyste',
    'account_type_dom' => array(
        '' => '',
        'Analyst' => 'Analyste',
        'Competitor' => 'Concurrent',
        'Customer' => 'Client',
        'Integrator' => 'Int??grateur',
        'Investor' => 'Investisseur',
        'Partner' => 'Partenaire',
        'Press' => 'Presse',
        'Prospect' => 'Prospect',
        'Reseller' => 'Revendeur',
        'Other' => 'Autre',
    ),
    //e.g. en espa??ol 'Apparel'=>'Ropa',
    'industry_dom' => array(
        '' => '',
        'Apparel' => 'Textile',
        'Banking' => 'Banque',
        'Biotechnology' => 'Biotechnologie',
        'Chemicals' => 'Industrie chimique',
        'Communications' => 'Communication',
        'Construction' => 'Construction - BTP',
        'Consulting' => 'Conseil',
        'Education' => 'Formation',
        'Electronics' => 'Informatique - Electronique',
        'Energy' => '??nergie',
        'Engineering' => 'Ing??nierie',
        'Entertainment' => 'Culture-Loisirs',
        'Environmental' => 'Environnement',
        'Finance' => 'Finance',
        'Government' => 'Administration',
        'Healthcare' => 'Sant??',
        'Hospitality' => 'Accueil',
        'Insurance' => 'Assurances',
        'Machinery' => 'Industrie lourde',
        'Manufacturing' => 'Production',
        'Media' => 'M??dia',
        'Not For Profit' => 'Sans but lucratif',
        'Recreation' => 'Loisir',
        'Retail' => 'Commerce de d??tail',
        'Shipping' => 'Transports',
        'Technology' => 'Technologie',
        'Telecommunications' => 'T??l??communications',
        'Transportation' => 'Transports',
        'Utilities' => 'Services',
        'Other' => 'Autre',
    ),
    'lead_source_default_key' => 'Auto-g??n??r??',
    'lead_source_dom' => array(
        '' => '',
        'Cold Call' => 'Appel de prospection',
        'Existing Customer' => 'Client existant',
        'Self Generated' => 'R??current',
        'Employee' => 'Employ??',
        'Partner' => 'Partenaire',
        'Public Relations' => 'Relation publique',
        'Direct Mail' => 'Mailing',
        'Conference' => 'Conf??rence',
        'Trade Show' => 'Salon',
        'Web Site' => 'Site web',
        'Word of mouth' => 'Recommand??',
        'Email' => 'E-mail',
        'Campaign' => 'Campagne',
        'Other' => 'Autre',
    ),
    'opportunity_type_dom' => array(
        '' => '',
        'Existing Business' => 'R??current',
        'New Business' => 'Nouvelle affaire',
    ),
    'roi_type_dom' => array(
        'Revenue' => 'Recettes',
        'Investment' => 'Investissement',
        'Expected_Revenue' => 'Recettes attendues',
        'Budget' => 'Budget',

    ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'D??cideur Principal',
    'opportunity_relationship_type_dom' => array(
        '' => '',
        'Primary Decision Maker' => 'D??cideur Principal',
        'Business Decision Maker' => 'Acheteur',
        'Business Evaluator' => 'Chef de projet',
        'Technical Decision Maker' => 'Responsable technique',
        'Technical Evaluator' => 'Utilisateur',
        'Executive Sponsor' => 'Sponsor',
        'Influencer' => 'Influenceur',
        'Other' => 'Autre',
    ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Contact principal',
    'case_relationship_type_dom' => array(
        '' => '',
        'Primary Contact' => 'Contact principal',
        'Alternate Contact' => 'Autre contact',
    ),
    'payment_terms' => array(
        '' => '',
        'Net 15' => '15 jours net',
        'Net 30' => '30 jours net',
    ),
    'sales_stage_default_key' => 'Prospection',
    'sales_stage_dom' => array(
        'Prospecting' => 'Prospection',
        'Qualification' => 'Qualification',
        'Needs Analysis' => 'Analyse des besoins',
        'Value Proposition' => 'Chiffrage',
        'Id. Decision Makers' => 'Identifier les d??cideurs',
        'Perception Analysis' => 'Evaluation',
        'Proposal/Price Quote' => 'Devis / Proposition',
        'Negotiation/Review' => 'N??gociation',
        'Closed Won' => 'Gagn??',
        'Closed Lost' => 'Perdu',
    ),
    'sales_probability_dom' => // keys must be the same as sales_stage_dom
        array(
            'Prospecting' => '10',
            'Qualification' => '20',
            'Needs Analysis' => '25',
            'Value Proposition' => '30',
            'Id. Decision Makers' => '40',
            'Perception Analysis' => '50',
            'Proposal/Price Quote' => '65',
            'Negotiation/Review' => '80',
            'Closed Won' => '100',
            'Closed Lost' => '0',
        ),
    'activity_dom' => array(
        'Call' => 'Appel',
        'Meeting' => 'R??union',
        'Task' => 'T??che',
        'Email' => 'E-mail',
        'Note' => 'Note',
    ),
    'salutation_dom' => array(
        '' => '',
        'Mr.' => 'Monsieur',
        'Ms.' => 'Mme',
        'Mrs.' => 'Madame',
        'Miss' => 'Mlle',
        'Dr.' => 'Docteur',
        'Prof.' => 'Professeur',
    ),
    //time is in seconds; the greater the time the longer it takes;
    'reminder_max_time' => 90000,
    'reminder_time_options' => array(
        60 => '1 minute avant',
        300 => '5 minutes avant',
        600 => '10 minutes avant',
        900 => '15 minutes avant',
        1800 => '30 minutes avant',
        3600 => '1 heure avant',
        7200 => '2 heures avant',
        10800 => '3 heures avant',
        18000 => '5 heures avant',
        86400 => '1 jour avant',
    ),

    'task_priority_default' => 'Moyenne',
    'task_priority_dom' => array(
        'High' => 'Haute',
        'Medium' => 'Moyenne',
        'Low' => 'Basse',
    ),
    'task_status_default' => 'Non d??marr??',
    'task_status_dom' => array(
        'Not Started' => 'Non d??marr??',
        'In Progress' => 'En cours',
        'Completed' => 'R??alis??e',
        'Pending Input' => 'En attente',
        'Deferred' => 'Report??e',
    ),
    'meeting_status_default' => 'Planifi??',
    'meeting_status_dom' => array(
        'Planned' => 'Planifi??e',
        'Held' => 'Tenue',
        'Not Held' => 'Annul??e',
    ),
    'extapi_meeting_password' => array(
        'WebEx' => 'WebEx',
    ),
    'meeting_type_dom' => array(
        'Other' => 'Autre',
        'Sugar' => 'SuiteCRM',
    ),
    'call_status_default' => 'Planifi??',
    'call_status_dom' => array(
        'Planned' => 'Planifi??e',
        'Held' => 'Tenue',
        'Not Held' => 'Annul??e',
    ),
    'call_direction_default' => 'Sortant',
    'call_direction_dom' => array(
        'Inbound' => 'Entrant',
        'Outbound' => 'Sortant',
    ),
    'lead_status_dom' => array(
        '' => '',
        'New' => 'Nouveau',
        'Assigned' => 'Assign??',
        'In Process' => 'En cours',
        'Converted' => 'Converti',
        'Recycled' => 'R??activ??',
        'Dead' => 'Mort',
    ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
        'P1' => 'Haute',
        'P2' => 'Moyenne',
        'P3' => 'Basse',
    ),
    'user_type_dom' => array(
        'RegularUser' => 'Utilisateur normal',
        'Administrator' => 'Administrateur',
    ),
    'user_status_dom' => array(
        'Active' => 'Activ??',
        'Inactive' => 'D??sactiv??',
    ),
    'user_factor_auth_interface_dom' => array(
        'FactorAuthEmailCode' => 'Code par E-mail',
    ),
    'employee_status_dom' => array(
        'Active' => 'Activ??',
        'Terminated' => 'Inactif',
        'Leave of Absence' => 'Absence temporaire',
    ),
    'messenger_type_dom' => array(
        '' => '',
        'MSN' => 'MSN',
        'Yahoo!' => 'Yahoo!',
        'AOL' => 'AOL',
    ),
    'project_task_priority_options' => array(
        'High' => 'Haute',
        'Medium' => 'Moyenne',
        'Low' => 'Basse',
    ),
    'project_task_priority_default' => 'Moyenne',

    'project_task_status_options' => array(
        'Not Started' => 'Non d??marr??',
        'In Progress' => 'En cours',
        'Completed' => 'R??alis??e',
        'Pending Input' => 'En attente',
        'Deferred' => 'Report??e',
    ),
    'project_task_utilization_options' => array(
        '0' => 'aucun',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'Brouillon',
        'In Review' => 'En relecture',
        'Underway' => 'En cours',
        'On_Hold' => 'Suspendu',
        'Completed' => 'R??alis??e',
    ),
    'project_status_default' => 'Brouillon',

    'project_duration_units_dom' => array(
        'Days' => 'Jours',
        'Hours' => 'Heures',
    ),

    'activity_status_type_dom' => array(
        '' => '--Aucun--',
        'active' => 'Activ??',
        'inactive' => 'Inactif',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'Comptes',
    'record_type_display' => array(
        '' => '',
        'Accounts' => 'Compte',
        'Opportunities' => 'Affaires',
        'Cases' => 'Tickets',
        'Leads' => 'Prospect',
        'Contacts' => 'Contacts', // cn (11/22/2005) added to support Emails

        'Bugs' => 'Anomalie',
        'Project' => 'Projets',

        'Prospects' => 'Cible',
        'ProjectTask' => 'T??ches projet',

        'Tasks' => 'T??che',

        'AOS_Contracts' => 'Contrat',
        'AOS_Invoices' => 'Facture',
        'AOS_Quotes' => 'Devis',
        'AOS_Products' => 'Produit',

    ),

    'record_type_display_notes' => array(
        'Accounts' => 'Compte',
        'Contacts' => 'Contact',
        'Opportunities' => 'Affaires',
        'Campaigns' => 'Campagnes',
        'Tasks' => 'T??che',
        'Emails' => 'E-mail',

        'Bugs' => 'Anomalie',
        'Project' => 'Projets',
        'ProjectTask' => 'T??ches projet',
        'Prospects' => 'Cible',
        'Cases' => 'Tickets',
        'Leads' => 'Prospect',

        'Meetings' => 'R??unions',
        'Calls' => 'Appels',

        'AOS_Contracts' => 'Contrat',
        'AOS_Invoices' => 'Facture',
        'AOS_Quotes' => 'Devis',
        'AOS_Products' => 'Produit',
    ),

    'parent_type_display' => array(
        'Accounts' => 'Compte',
        'Contacts' => 'Contact',
        'Tasks' => 'T??che',
        'Opportunities' => 'Affaires',

        'Bugs' => 'Bug',
        'Cases' => 'Tickets',
        'Leads' => 'Prospect',

        'Project' => 'Projets',
        'ProjectTask' => 'T??ches projet',

        'Prospects' => 'Cible',

        'AOS_Contracts' => 'Contrat',
        'AOS_Invoices' => 'Facture',
        'AOS_Quotes' => 'Devis',
        'AOS_Products' => 'Produit',

    ),
    'parent_line_items' => array(
        'AOS_Quotes' => 'Devis',
        'AOS_Invoices' => 'Factures',
        'AOS_Contracts' => 'Contrats',
    ),
    'issue_priority_default_key' => 'Moyenne',
    'issue_priority_dom' => array(
        'Urgent' => 'Urgent',
        'High' => 'Haute',
        'Medium' => 'Moyenne',
        'Low' => 'Basse',
    ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Accept??',
        'Duplicate' => 'Dupliquer',
        'Closed' => 'Ferm??',
        'Out of Date' => 'P??rim??',
        'Invalid' => 'Invalide',
    ),

    'issue_status_default_key' => 'Nouveau',
    'issue_status_dom' => array(
        'New' => 'Nouveau',
        'Assigned' => 'Assign??',
        'Closed' => 'Ferm??',
        'Pending' => 'En attente',
        'Rejected' => 'Rejet??',
    ),

    'bug_priority_default_key' => 'Moyenne',
    'bug_priority_dom' => array(
        'Urgent' => 'Urgent',
        'High' => 'Haute',
        'Medium' => 'Moyenne',
        'Low' => 'Basse',
    ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Accept??',
        'Duplicate' => 'Dupliquer',
        'Fixed' => 'Fix??',
        'Out of Date' => 'P??rim??',
        'Invalid' => 'Invalide',
        'Later' => 'Report??',
    ),
    'bug_status_default_key' => 'Nouveau',
    'bug_status_dom' => array(
        'New' => 'Nouveau',
        'Assigned' => 'Assign??',
        'Closed' => 'Ferm??',
        'Pending' => 'En attente',
        'Rejected' => 'Rejet??',
    ),
    'bug_type_default_key' => 'Anomalie',
    'bug_type_dom' => array(
        'Defect' => 'D??faut',
        'Feature' => 'Fonctionnalit??',
    ),
    'case_type_dom' => array(
        'Administration' => 'Administration',
        'Product' => 'Produit',
        'User' => 'Utilisateur',
    ),

    'source_default_key' => '',
    'source_dom' => array(
        '' => '',
        'Internal' => 'Interne',
        'Forum' => 'Forum',
        'Web' => 'Web',
        'InboundEmail' => 'E-mail',
    ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
        '' => '',
        'Accounts' => 'Comptes',
        'Activities' => 'Activit??s',
        'Bugs' => 'Anomalies',
        'Calendar' => 'Calendrier',
        'Calls' => 'Appels',
        'Campaigns' => 'Campagnes',
        'Cases' => 'Tickets',
        'Contacts' => 'Contacts',
        'Currencies' => 'Devises',
        'Dashboard' => 'Tableau de bord',
        'Documents' => 'Documents',
        'Emails' => 'E-mails',
        'Feeds' => 'Flux',
        'Forecasts' => 'Pr??visions',
        'Help' => 'Aide',
        'Home' => 'Accueil',
        'Leads' => 'Prospects',
        'Meetings' => 'R??unions',
        'Notes' => 'Notes',
        'Opportunities' => 'Affaires',
        'Outlook Plugin' => 'Plugin Outlook',
        'Projects' => 'Projets',
        'Quotes' => 'Devis',
        'Releases' => 'Versions',
        'RSS' => 'Flux RSS',
        'Studio' => 'Studio',
        'Upgrade' => 'Mise ?? Jour',
        'Users' => 'Utilisateurs',
    ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
        '' => '',
        'Planning' => 'Planifi??e',
        'Active' => 'Actif',
        'Inactive' => 'D??sactiv??',
        'Complete' => 'Termin??e',
        //'In Queue' => 'In Queue',
        //'Sending' => 'Sending',
    ),
    'campaign_type_dom' => array(
        '' => '',
        'Telesales' => 'T??l??prospection',
        'Mail' => 'Courrier',
        'Email' => 'E-mail',
        'Print' => 'Impression',
        'Web' => 'Web',
        'Radio' => 'Bouton Radio',
        'Television' => 'T??l??vision',
        'NewsLetter' => 'Newsletter',
        'Survey' => 'Sondage',
    ),

    'newsletter_frequency_dom' => array(
        '' => '',
        'Weekly' => 'Hebdomadaire',
        'Monthly' => 'Mensuel',
        'Quarterly' => 'Trimestrielle',
        'Annually' => 'Annuelle',
    ),

    'notifymail_sendtype' => array(
        'SMTP' => 'SMTP',
    ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'Janvier',
        '2' => 'F??vrier',
        '3' => 'Mars',
        '4' => 'Avril',
        '5' => 'Mai',
        '6' => 'Juin',
        '7' => 'Juillet',
        '8' => 'Ao??t',
        '9' => 'Septembre',
        '10' => 'Octobre',
        '11' => 'Novembre',
        '12' => 'D??cembre',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'Jan',
        '2' => 'F??v',
        '3' => 'Mars',
        '4' => 'Avr',
        '5' => 'Mai',
        '6' => 'Juin',
        '7' => 'Juil',
        '8' => 'Ao??t',
        '9' => 'Sept',
        '10' => 'Oct',
        '11' => 'Nov',
        '12' => 'D??c',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => 'Le dimanche',
        '2' => 'Le lundi',
        '3' => 'Le mardi',
        '4' => 'Le mercredi',
        '5' => 'Le jeudi',
        '6' => 'Le vendredi',
        '7' => 'Le samedi',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'Dim',
        '2' => 'Lun',
        '3' => 'Mar',
        '4' => 'Mer',
        '5' => 'Jeu',
        '6' => 'Ven',
        '7' => 'Sam',
    ),
    'dom_meridiem_lowercase' => array(
        'am' => 'am',
        'pm' => 'pm',
    ),
    'dom_meridiem_uppercase' => array(
        'AM' => 'AM',
        'PM' => 'PM',
    ),

    'dom_email_types' => array(
        'out' => 'Envoy??',
        'archived' => 'Archiv??',
        'draft' => 'Brouillon',
        'inbound' => 'Entrant',
        'campaign' => 'Campagne',
    ),
    'dom_email_status' => array(
        'archived' => 'Archiv??',
        'closed' => 'Ferm??',
        'draft' => 'Brouillon',
        'read' => 'Lu',
        'replied' => 'R??pondu',
        'sent' => 'Envoy??',
        'send_error' => 'Erreur Envoi',
        'unread' => 'Non Lu',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'Archiv??',
    ),

    'dom_email_server_type' => array(
        '' => '--Aucun(e)--',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '-- Aucun --',
        'createcase' => 'Cr??er un Ticket',
        'bounce' => 'Gestion des Rebonds',
    ),
    'dom_email_distribution' => array(
        '' => '--Aucun(e)--',
        'direct' => 'Assignation directe',
        'roundRobin' => 'Round-Robin',
        'leastBusy' => 'Moins charg??',
    ),
    'dom_email_errors' => array(
        1 => 'Ne s??lectionner qu???un seul utilisateur lors de l???affectation directe des ??l??ments.',
        2 => 'Vous devez affecter uniquement des ??l??ments contr??l??s lors de l???affectation directe des ??l??ments.',
    ),
    'dom_email_bool' => array(
        'bool_true' => 'Oui',
        'bool_false' => 'Non',
    ),
    'dom_int_bool' => array(
        1 => 'Oui',
        0 => 'Non',
    ),
    'dom_switch_bool' => array(
        'on' => 'Sur',
        'off' => 'Non',
        '' => '--Aucun(e)--',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'Client de messagerie SuiteCRM',
        'mailto' => 'Client E-mail Externe',
    ),

    'dom_editor_type' => array(
        'none' => 'Direct HTML',
        'tinymce' => 'TinyMCE',
        'mozaik' => 'Mozaik',
    ),

    'dom_email_editor_option' => array(
        '' => 'Format d\'E-mail par d??faut',
        'html' => 'E-mail HTML',
        'plain' => 'E-mail Texte Brut',
    ),

    'schedulers_times_dom' => array(
        'not run' => 'Temps d&#39;execution d??pass??, Non Execut??',
        'ready' => 'Pr??t',
        'in progress' => 'En cours',
        'failed' => 'Echec',
        'completed' => 'R??alis??e',
        'no curl' => 'Non ex??cut?? : cURL non disponible',
    ),

    'scheduler_status_dom' => array(
        'Active' => 'Activ??',
        'Inactive' => 'D??sactiv??',
    ),

    'scheduler_period_dom' => array(
        'min' => 'Minutes',
        'hour' => 'Heures',
    ),
    'document_category_dom' => array(
        '' => '',
        'Marketing' => 'Marketing',
        'Knowledege Base' => 'Base de connaissance',
        'Sales' => 'Ventes',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => 'Archiv??',
        // TODO: add more categories here...
    ),

    'document_subcategory_dom' => array(
        '' => '',
        'Marketing Collateral' => 'Marketing Secondaire',
        'Product Brochures' => 'Brochures des produits',
        'FAQ' => 'FAQ',
    ),

    'document_status_dom' => array(
        'Active' => 'Activ??',
        'Draft' => 'Brouillon',
        'FAQ' => 'FAQ',
        'Expired' => 'P??rim??',
        'Under Review' => 'En cours de r??vision',
        'Pending' => 'En attente',
    ),
    'document_template_type_dom' => array(
        '' => '',
        'mailmerge' => 'Fusion d\'E-mails',
        'eula' => 'Licence d\'utilisation',
        'nda' => 'Accord de confidentialit??',
        'license' => 'Termes de Licence',
    ),
    'dom_meeting_accept_options' => array(
        'accept' => 'Accepter',
        'decline' => 'D??cliner',
        'tentative' => 'Incertain',
    ),
    'dom_meeting_accept_status' => array(
        'accept' => 'Accept??',
        'decline' => 'Refus??',
        'tentative' => 'Incertain',
        'none' => 'Sans Pi??ce Jointe',
    ),
    'duration_intervals' => array(
        '0' => '00',
        '15' => '15',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => '--Aucun(e)--',
        'Daily' => 'Quotidien',
        'Weekly' => 'Hebdomadaire',
        'Monthly' => 'Mensuel',
        'Yearly' => 'Annuel',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'jour(s)',
        'Weekly' => 'semaine(s)',
        'Monthly' => 'mois',
        'Yearly' => 'ann??e(s)',
    ),

    'duration_dom' => array(
        '' => '--Aucun(e)--',
        '900' => '15 minutes',
        '1800' => '30??minutes',
        '2700' => '45 minutes',
        '3600' => '1 heure',
        '5400' => '1.5 heures',
        '7200' => '2 heures',
        '10800' => '3 heures',
        '21600' => '6 heures',
        '86400' => '1 jour',
        '172800' => '2 jours',
        '259200' => '3 jours',
        '604800' => '1 semaine',
    ),


//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => 'D??faut',
        'seed' => 'Financement',
        'exempt_domain' => 'Liste d\'exclusion par domaine',
        'exempt_address' => 'Liste d\'exclusion par adresses E-mails',
        'exempt' => 'Liste d\'exclusion par ID',
        'test' => 'Test',
    ),

    'email_settings_num_dom' => array(
        '10' => '10',
        '20' => '20',
        '50' => '50',
    ),
    'email_marketing_status_dom' => array(
        '' => '',
        'active' => 'Activ??',
        'inactive' => 'D??sactiv??',
    ),

    'campainglog_activity_type_dom' => array(
        '' => '',
        'targeted' => 'Messages envoy??s / tent??s',
        'send error' => 'Rebonds, Autres',
        'invalid email' => 'Rebonds, E-mails invalides',
        'link' => 'Liens cliqu??s',
        'viewed' => 'Message lus',
        'removed' => 'D??sinscrit',
        'lead' => 'Prospects cr????s',
        'contact' => 'Contacts cr????s',
        'blocked' => 'Supprim??s par adresse ou domaine',
    ),

    'campainglog_target_type_dom' => array(
        'Contacts' => 'Contacts',
        'Users' => 'Utilisateurs',
        'Prospects' => 'Cibles',
        'Leads' => 'Prospects',
        'Accounts' => 'Comptes',
    ),
    'merge_operators_dom' => array(
        'like' => 'contient',
        'exact' => 'est exactement',
        'start' => 'commence par',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'Oui',
        'false' => 'Non',
        'required' => 'Requis',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'D??sactiv??',
        1 => 'Activ??',
        2 => 'Filtre',
        3 => 'Filtre s??lectionn?? par d??faut',
        4 => 'Filtre uniquement',
    ),

    'projects_priority_options' => array(
        'high' => 'Haut',
        'medium' => 'Moyen',
        'low' => 'Bas',
    ),

    'projects_status_options' => array(
        'notstarted' => 'Non d??marr??',
        'inprogress' => 'En cours',
        'completed' => 'R??alis??e',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'Afficher la l??gende',
        'collapselegend' => 'Cacher la l??gende',
        'clickfordrilldown' => 'Cliquer pour d??velopper',
        'detailview' => 'Plus de d??tails...',
        'piechart' => 'Graphique en camembert',
        'groupchart' => 'Groupe de graphique',
        'stackedchart' => 'Graphique empil??',
        'barchart' => 'Histogramme',
        'horizontalbarchart' => 'Diagramme horizontal',
        'linechart' => 'Graphique courbe',
        'noData' => 'Donn??e non disponible',
        'print' => 'Imprimer',
        'pieWedgeName' => 'sections',
    ),
    'release_status_dom' => array(
        'Active' => 'Activ??',
        'Inactive' => 'D??sactiv??',
    ),
    'email_settings_for_ssl' => array(
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' => array(
        '\'' => 'Apostrophe (&#39;)',
        '"' => 'Guillemet double (&#34;)',
        '' => '--Aucun(e)--',
        'other' => 'Autre :',
    ),
    'import_delimeter_options' => array(
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'Autre :',
    ),
    'link_target_dom' => array(
        '_blank' => 'Nouvelle fen??tre',
        '_self' => 'Fen??tre courante',
    ),
    'dashlet_auto_refresh_options' => array(
        '-1' => '-1',
        '30' => 'Toutes les 30 secondes',
        '60' => 'Toutes les minutes',
        '180' => 'Toutes les 3 minutes',
        '300' => 'Toutes les 5 minutes',
        '600' => 'Toutes les 10 minutes',
    ),
    'dashlet_auto_refresh_options_admin' => array(
        '-1' => '- jamais -',
        '30' => 'Toutes les 30 secondes',
        '60' => 'Toutes les minutes',
        '180' => 'Toutes les 3 minutes',
        '300' => 'Toutes les 5 minutes',
        '600' => 'Toutes les 10 minutes',
    ),
    'date_range_search_dom' => array(
        '=' => 'Le',
        'not_equal' => 'Diff??rent du',
        'greater_than' => 'Apr??s le',
        'less_than' => 'Avant le',
        'last_7_days' => 'Dans les 7 derniers jours',
        'next_7_days' => 'Dans les 7 prochains jours',
        'last_30_days' => 'Dans les 30 derniers jours',
        'next_30_days' => 'Dans les 30 prochains jours',
        'last_month' => 'Le mois dernier',
        'this_month' => 'Ce mois-ci',
        'next_month' => 'Le mois prochain',
        'last_year' => 'L&#39;ann??e derni??re',
        'this_year' => 'Cette ann??e',
        'next_year' => 'L&#39;ann??e prochaine',
        'between' => 'Entre',
    ),
    'numeric_range_search_dom' => array(
        '=' => 'Le',
        'not_equal' => 'Diff??rent de',
        'greater_than' => 'Sup??rieur ??',
        'greater_than_equals' => 'Sup??rieur ou ??gal ??',
        'less_than' => 'Inf??rieur ??',
        'less_than_equals' => 'Inf??rieur ou ??gal ??',
        'between' => 'Entre',
    ),
    'lead_conv_activity_opt' => array(
        'copy' => 'Copier',
        'move' => 'D??placer',
        'donothing' => 'Ne rien faire',
    ),
);

$app_strings = array(
    'LBL_SEARCH_REAULTS_TITLE' => 'R??sultats',
    'ERR_SEARCH_INVALID_QUERY' => 'Erreur lors de la recherche. La syntaxe de votre requ??te peut ??tre incorrecte.',
    'ERR_SEARCH_NO_RESULTS' => 'Aucun r??sultat correspondant ?? vos crit??res. Essayez d\'??largir votre recherche.',
    'LBL_SEARCH_PERFORMED_IN' => 'Recherche effectu??e en',
    'LBL_EMAIL_CODE' => 'Code par E-mail :',
    'LBL_SEND' => 'Envoyer',
    'LBL_LOGOUT' => 'D??connexion',
    'LBL_LOGOUT_SUCCESS' => 'D??connexion r??ussie',
    'LBL_TOUR_NEXT' => 'Suivant',
    'LBL_TOUR_SKIP' => 'Passer',
    'LBL_TOUR_BACK' => 'Pr??c??dent',
    'LBL_TOUR_TAKE_TOUR' => 'Faire le tour',
    'LBL_MOREDETAIL' => 'Plus de d??tails' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Editer ?? la vol??e' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'Voir' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'Filtre' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'Ajouter' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD_EMAIL' => 'Ajouter une adresse E-mail' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'Masquer/Afficher' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Supprimer' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'Effacer' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'Supprimer' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE_EMAIL' => 'Supprimer l???adresse E-mail' /*for 508 compliance fix*/,
    'LBL_ID_FF_OPT_OUT' => 'D??sinscription',
    'LBL_ID_FF_INVALID' => 'Rendre non-valide',
    'LBL_ADD' => 'Ajouter' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'Logo soci??t??' /*for 508 compliance fix*/,
    'LBL_CONNECTORS_POPUPS' => 'Popups des connecteurs',
    'LBL_CLOSEINLINE' => 'Fermer',
    'LBL_VIEWINLINE' => 'Voir',
    'LBL_INFOINLINE' => 'Info',
    'LBL_PRINT' => 'Imprimer',
    'LBL_HELP' => 'Aide',
    'LBL_ID_FF_SELECT' => 'S??lectionner',
    'DEFAULT' => 'Basique',
    'LBL_SORT' => 'Trier',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Activer SMTP au travers de SSL ou TLS ?',
    'LBL_NO_ACTION' => 'Aucune action avec ce nom??: %s',
    'LBL_NO_SHORTCUT_MENU' => 'Aucune action n???est disponible.',
    'LBL_NO_DATA' => 'Aucune donn??e',

    'LBL_ROUTING_FLAGGED' => 'Ajouter un drapeau',
    'LBL_ROUTING_TO' => '??',
    'LBL_ROUTING_TO_ADDRESS' => '?? l&#39;adresse',
    'LBL_ROUTING_WITH_TEMPLATE' => 'avec le mod??le',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Vous avez des valeurs pour les champs num??ro de t??l??phone et adresse. Pour remplacer ces valeurs avec celles du compte que vous avez s??lectionn??, cliquez sur OK. Pour garder les valeurs actuelles, cliquez sur Annuler.',
    'LBL_DROP_HERE' => '[Posez ici]',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Mettre Gmail par d??faut',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'Nom',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Serveur SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'Mot de passe SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'Port SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'Serveur SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'Utilisateur SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'Par d??faut',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Vous avez oubli?? de d??finir l\'utilisateur et le mot de passe SMTP',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'D??finissez les param??tres des comptes E-mails que vous souhaitez visualiser dans votre CRM.',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'D??finissez les param??tres des serveurs SMTP disponibles pour les envois d\'E-mails depuis votre CRM.',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'Termin??',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Effacer',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'A :',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'Cc :',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Cci :',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'A / Cc / Cci',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'Adresse email',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Filtre',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Nom',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Aucune adresse trouv??e',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Sauvegarder et ajouter au carnet d\'adresse',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'Carnet d\'adresses',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Carnet d\'adresses',
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Attention, le SMTP que vous voulez supprimer est asssoci?? ?? un compte E-mail. Voulez-vous continuer ?',
    'LBL_EMAIL_ADDRESSES' => 'E-mail',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'Adresse email',
    'LBL_EMAIL_ADDRESS_OPT_IN' => 'Vous avez confirm?? que votre adresse E-mail a ??t?? ajout??e dans??: ',
    'LBL_EMAIL_ADDRESS_OPT_IN_ERR' => 'Incapable de confirmer l???adresse e-mail',
    'LBL_EMAIL_ARCHIVE_TO_SUITE' => 'Importer dans SuiteCRM',
    'LBL_EMAIL_ASSIGNMENT' => 'Assignation',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Pi??ce(s) jointe(s)',
    'LBL_EMAIL_ATTACHMENT' => 'Pi??ce(s) jointe(s)',
    'LBL_EMAIL_ATTACHMENTS' => 'Pi??ce(s) jointe(s)',
    'LBL_EMAIL_ATTACHMENTS2' => 'A partir des documents SuiteCRM',
    'LBL_EMAIL_ATTACHMENTS3' => 'Mod??les d\'attachements',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'Fichier',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Document',
    'LBL_EMAIL_BCC' => 'Cci',
    'LBL_EMAIL_CANCEL' => 'Annuler',
    'LBL_EMAIL_CC' => 'CC',
    'LBL_EMAIL_CHARSET' => 'Encodage',
    'LBL_EMAIL_CHECK' => 'Relever les E-mails',
    'LBL_EMAIL_CHECKING_NEW' => 'Relever les nouveaux E-mails',
    'LBL_EMAIL_CHECKING_DESC' => 'Un instant s???il vous pla??t... <br><br>S\'il s???agit de la premi??re v??rification pour le compte de messagerie, cela peut prendre un certain temps.',
    'LBL_EMAIL_CLOSE' => 'Fermer',
    'LBL_EMAIL_COFFEE_BREAK' => 'Recherche de nouveaux E-mails. Le traitement de bo??tes E-mails volumineuses prend plus de temps. Veuillez patienter.',

    'LBL_EMAIL_COMPOSE' => 'E-mail',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Votre E-mail est sans destinataire.',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'Le contenu du mail est vide. Envoyer tout de m??me ?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'Le sujet de votre E-mail est vide. Envoyer tout de m??me ?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(Aucun sujet)',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Veuillez saisir une adresse E-mail valide pour les champs A, CC et CCI',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'Supprimer cet E-mail?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'Voulez-vous vraiment supprimer cette signature ?',

    'LBL_EMAIL_SENT_SUCCESS' => 'E-mail envoy??',

    'LBL_EMAIL_CREATE_NEW' => '-- Cr??er depuis --',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Multiples',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Vide',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Date d\'envoi',
    'LBL_EMAIL_DATE_TODAY' => 'Aujourd\'hui',
    'LBL_EMAIL_DELETE' => 'Supprimer',
    'LBL_EMAIL_DELETE_CONFIRM' => 'Voulez-vous vraiment supprimer le(s) message(s) s??lectionn??(s) ?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'E-mail(s) supprim??(s) avec succ??s.',
    'LBL_EMAIL_DELETING_MESSAGE' => 'Suppression des messages',
    'LBL_EMAIL_DETAILS' => 'D??tails',

    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'Seule l\'adresse principale est utilis??e quand vous travaillez avec les contacts.',

    'LBL_EMAIL_EMPTYING_TRASH' => 'Vider la poubelle',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'Suppression des messages envoy??s',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Vidage des fichiers du cache',
    'LBL_EMAIL_EMPTY_MSG' => 'Aucun E-mail ?? afficher.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'Aucune adresse E-mail ?? afficher.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Le nom du dossier doit ??tre unique et non vide. Veuillez essayer ?? nouveau.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Impossible de supprimer le dossier. Ce dossier o?? l\'un de ses sous-dossier est associ?? ?? une bo??te E-mail.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'Ne peut pas d??terminer le dossier li?? au contexte. Essayer de nouveau.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'V??rifiez vos param??tres.',
    'LBL_EMAIL_ERROR_DESC' => 'Erreurs d??tect??es : ',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'Vous n&#39;avez pas acc??s ?? cette section. Veuillez contacter votre administrateur syst??me pour obtenir un acc??s.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'Les noms de dossier de SuiteCRM doivent ??tre uniques.',
    'LBL_EMAIL_ERROR_EMPTY' => 'Veuillez saisir des crit??res de recherche.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'Une erreur est survenue',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Message supprim?? du serveur',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'Chaque message est supprim?? du serveur ou d??plac?? vers un dossier diff??rent',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'Impossible d&#39;acc??der au Serveur Mail. Veuillez contacter un administrateur du Serveur Mail.',
    'LBL_EMAIL_ERROR_MOVE' => 'Le d??placement des E-mails entre serveurs et / ou comptes n\'est pas encore support??.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Erreur lors du d??placement',
    'LBL_EMAIL_ERROR_NAME' => 'Nom requis',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'Adresse ??metteur requise. Veuillez saisir une adresse valide.',
    'LBL_EMAIL_ERROR_NO_FILE' => 'Veuillez ajouter un fichier',
    'LBL_EMAIL_ERROR_SERVER' => 'L\'adresse du serveur E-mail est requise.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'Le compte mail n&#39;a pas pu ??tre sauvegard??.',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'Le serveur de mail a mis trop de temps ?? r??pondre',
    'LBL_EMAIL_ERROR_USER' => 'Identifiant de connexion requis',
    'LBL_EMAIL_ERROR_PORT' => 'Port du serveur mail requis',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'Protocole du serveur mail requis',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'Dossier monitor?? requis',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'Dossier Poubelle requis',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Information indisponible',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Le SMTP n&#39;est pas configur??.',
    'LBL_EMAIL_ERROR_SENDING' => 'Erreur envoi d???E-mail. S???il vous pla??t contactez votre administrateur pour assistance.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, '.gif', '') . 'Dossiers',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, '.gif', ''),
    'LBL_EMAIL_FOLDERS_ADD' => 'Ajouter',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Ajouter un dossier',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Renommer un dossier',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'Sauvegarder',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'Dossier Parent',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Ce dossier ne peut ??tre modifi??',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'Voulez-vous vraiment supprimer ce dossier ?\nCeci est irr??versible.\nLa suppression d&#39;un dossier entra??ne la suppression de tous ses sous-dossiers !',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'Nom du Dossier',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Veuillez s??lectionner un dossier pour effectuer cette action.',
    'LBL_EMAIL_FOLDERS_TITLE' => 'Gestion des dossiers',

    'LBL_EMAIL_FORWARD' => 'Transf??rer',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => 'T??l??chargement de l\'E-mail [[count]] sur [[total]]',
    'LBL_EMAIL_FROM' => 'De',
    'LBL_EMAIL_GROUP' => 'Groupe',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'Groupe',
    'LBL_EMAIL_HOME_FOLDER' => 'Accueil',
    'LBL_EMAIL_IE_DELETE' => 'Suppression du compte',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'Effacement de la signature',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'Voulez-vous vraiment supprimer ce compte ?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Suppression effectu??e.',
    'LBL_EMAIL_IE_SAVE' => 'Sauvegarde des infos',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'Importer l\'E-mail',
    'LBL_EMAIL_IMPORT_EMAIL' => 'Importer dans SuiteCRM',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'Import',
    'LBL_EMAIL_INVALID' => 'Invalide',
    'LBL_EMAIL_LOADING' => 'Chargement...',
    'LBL_EMAIL_MARK' => 'Marquer',
    'LBL_EMAIL_MARK_FLAGGED' => 'Avec Marquage',
    'LBL_EMAIL_MARK_READ' => 'Comme Lu',
    'LBL_EMAIL_MARK_UNFLAGGED' => 'Sans Marquage',
    'LBL_EMAIL_MARK_UNREAD' => 'Comme Non-lu',
    'LBL_EMAIL_ASSIGN_TO' => 'Assigner ??',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'Cr??er un dossier',
    'LBL_EMAIL_MENU_COMPOSE' => 'Envoy?? ??',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Supprimer le dossier',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Corbeille vide',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Synchroniser',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Nettoyer les fichiers de cache',
    'LBL_EMAIL_MENU_REMOVE' => 'Supprimer',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Renommer le dossier',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Renommer le dossier',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Veuillez effectuer une s??lection pour r??aliser cette action.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Cr??er un dossier (distant ou dans SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Supprimer un dossier (distant ou dans SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Vider toutes les corbeilles de ce compte',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Marquer ces E-mails comme lus',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Enlever les Drapeaux de ces E-mails',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Renommer un dossier (distant ou dans SuiteCRM)',

    'LBL_EMAIL_MESSAGES' => 'messages',

    'LBL_EMAIL_ML_NAME' => 'Nom de liste de diffusion',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'S??lectionner l\'adresse d\'une liste de diffusion',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'Adresse de liste de diffusion disponible',

    'LBL_EMAIL_MULTISELECT' => '<b>Ctrl-Clic</b> pour une s??lection multiple<br />(Pour Mac utiliser <b>CMD-Clic</b>)',

    'LBL_EMAIL_NO' => 'Non',
    'LBL_EMAIL_NOT_SENT' => 'Le syst??me est ne peut pas traiter votre demande. Veuillez contacter l\'administrateur.',

    'LBL_EMAIL_OK' => 'Ok',
    'LBL_EMAIL_ONE_MOMENT' => 'Veuillez patienter...',
    'LBL_EMAIL_OPEN_ALL' => 'Ouvrir dans un onglet',
    'LBL_EMAIL_OPTIONS' => 'Options',
    'LBL_EMAIL_QUICK_COMPOSE' => 'Cr??ation rapide',
    'LBL_EMAIL_OPT_OUT' => 'D??sinscrit',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'D??sinscrit et adresses invalides',
    'LBL_EMAIL_PERFORMING_TASK' => 'Action en cours',
    'LBL_EMAIL_PRIMARY' => 'Principal',
    'LBL_EMAIL_PRINT' => 'Imprimer',

    'LBL_EMAIL_QC_BUGS' => 'Anomalie',
    'LBL_EMAIL_QC_CASES' => 'Ticket',
    'LBL_EMAIL_QC_LEADS' => 'Prospect',
    'LBL_EMAIL_QC_CONTACTS' => 'Contact',
    'LBL_EMAIL_QC_TASKS' => 'T??che',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'Affaire',
    'LBL_EMAIL_QUICK_CREATE' => 'Cr??ation rapide',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'Mise ?? jour des dossiers',
    'LBL_EMAIL_RELATE_TO' => 'Relatif ??',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'Enregistrement(s) li??(s)',
    'LBL_EMAIL_RECORD' => 'Enregistrement de l\'E-mail',
    'LBL_EMAIL_REMOVE' => 'Supprimer',
    'LBL_EMAIL_REPLY' => 'R??pondre',
    'LBL_EMAIL_REPLY_ALL' => 'R??pondre ?? tous',
    'LBL_EMAIL_REPLY_TO' => 'R??pondre ??',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'R??cup??rer le message',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'R??cup??ration de l\'E-mail enregistr??',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'Merci de s??lectionner un seul enregistrement !',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'Retourner au module pr??c??dent ?',
    'LBL_EMAIL_REVERT' => 'Revenir',
    'LBL_EMAIL_RELATE_EMAIL' => 'E-mail reli??',

    'LBL_EMAIL_RULES_TITLE' => 'Gestion des r??gles',

    'LBL_EMAIL_SAVE' => 'Sauvegarder',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'Sauvegarder &amp; Refaire',
    'LBL_EMAIL_SAVE_DRAFT' => 'Enregistrer comme brouillon',
    'LBL_EMAIL_DRAFT_SAVED' => 'Le brouillon a ??t?? sauvegard??',

    'LBL_EMAIL_SEARCH' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null,    '.gif', ''),
    'LBL_EMAIL_SEARCH_SHORT' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null,        null, '.gif', ''),
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'Date de d??but',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Date de fin',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'Aucun r??sultat pour vos crit??res de recherche.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'R??sultats de recherche',

    'LBL_EMAIL_SELECT' => 'S??lectionner',

    'LBL_EMAIL_SEND' => 'Envoyer',
    'LBL_EMAIL_SENDING_EMAIL' => 'Envoi du Message',

    'LBL_EMAIL_SETTINGS' => 'Param??tres',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'Comptes E-mail',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Effacer le formulaire',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Relever les nouveaux e-mails',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'De (adresse)',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Adresse email pour la notification de test :',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'De (nom)',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'R??pondre',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Synchroniser tout les comptes',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'Un E-mail a ??t?? envoy??. V??rifiez si vous avez bien re??u cet E-mail.',
    'LBL_EMAIL_TEST_SEE_FULL_SMTP_LOG' => 'Voir le journal SMTP complet',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Voulez-vous effectuer une synchronisation compl??te ? Pour les comptes volumineux cela peut prendre plusieurs minutes.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Maintenez enfonc??e la touche Shift ou la touche Ctrl pour s??lectionner plusieurs dossiers',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'G??n??ral',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Cr??er un "dossier de groupe"',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => '??diter le "dossier de groupe"',

    'LBL_EMAIL_SETTINGS_NAME' => 'Nom du compte E-mail',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'D??finir le nombre d\'E-mails par page. Un rafraichissement de la page est n??cessaire pour visualiser la modification.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'R??cup??re les infos',
    'LBL_EMAIL_SETTINGS_SAVED' => 'Vos param??tres ont ??t?? enregistr??s.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Envoyer les E-mails en texte brut uniquement',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'Nombre d\'E-mails par page',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Affichage',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Pr??f??rences',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Dossier(s) "Perso" disponible(s)',
    'LBL_EMAIL_ERROR_PREPEND' => 'Une erreur email s\'est produite :',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Serveur SMTP s??lectionn?? invalide pour votre compte E-mail. Configurer le serveur SMTP ou en choisir un autre',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Vous n\'avez pas configur?? le serveur SMTP pour votre compte E-mail. Configurez ou choisissez un serveur SMTP pour le compte E-mail.',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => 'Signature par d??faut',
    'LBL_EMAIL_SIGNATURES' => 'Signatures',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Autre',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[ Dossiers distants ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[dossiers SuiteCRM]',
    'LBL_EMAIL_SUBJECT' => 'Sujet',
    'LBL_EMAIL_SUCCESS' => 'Succ??s',
    'LBL_EMAIL_SUITE_FOLDER' => 'Dossier SuiteCRM',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'Le mod??le d\'E-mail est vide',
    'LBL_EMAIL_TEMPLATES' => 'Mod??les',
    'LBL_EMAIL_TO' => 'A',
    'LBL_EMAIL_VIEW' => 'Voir',
    'LBL_EMAIL_VIEW_HEADERS' => 'Voir l\'en-t??te',
    'LBL_EMAIL_VIEW_RAW' => 'Voir format brut',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'Cette fonctionnalit?? n\'est pas support??e quand vous utilisez le protocole POP3.',
    'LBL_DEFAULT_LINK_TEXT' => 'Lien texte par d??faut.',
    'LBL_EMAIL_YES' => 'Oui',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Envoyer un E-mail de test',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'E-mail de test envoy?? !',
    'LBL_EMAIL_MESSAGE_NO' => 'Message N??',
    'LBL_EMAIL_IMPORT_SUCCESS' => 'Import termin??',
    'LBL_EMAIL_IMPORT_FAIL' => '??chec de l\'import. Le message est peut ??tre d??j?? import??, ou bien il a ??t?? supprim?? du serveur',

    'LBL_LINK_NONE' => 'Aucun',
    'LBL_LINK_ALL' => 'Tous',
    'LBL_LINK_RECORDS' => 'Enregister',
    'LBL_LINK_SELECT' => 'S??lectionner',
    'LBL_LINK_ACTIONS' => 'ACTIONS',
    'LBL_CLOSE_ACTIVITY_HEADER' => 'Confirmation',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'Souhaitez-vous vous terminer cette activit?? (#module#) ?',
    'LBL_INVALID_FILE_EXTENSION' => 'Extension de fichier invalide',

    'ERR_AJAX_LOAD' => 'Une erreur est survenue :',
    'ERR_AJAX_LOAD_FAILURE' => 'Il y a eu une erreur lors du traitement de votre demande, veuillez r??essayer ult??rieurement.',
    'ERR_AJAX_LOAD_FOOTER' => 'Si cette erreur persiste, veuillez demander ?? votre administrateur de d??sactiver Ajax pour ce module',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'Le s??parateur des d??cimales ne peut pas ??tre le m??me que celui des milliers.\n\n  Merci de modifier ces valeurs.',
    'ERR_DELETE_RECORD' => 'Un num??ro d&#39;enregistrement doit ??tre sp??cifi?? pour toute suppression.',
    'ERR_EXPORT_DISABLED' => 'Exports D??sactiv??s.',
    'ERR_EXPORT_TYPE' => 'Erreur d&#39;exportation',
    'ERR_INVALID_EMAIL_ADDRESS' => 'adresse E-mail invalide.',
    'ERR_INVALID_FILE_REFERENCE' => 'R??f??rence Fichier Invalide',
    'ERR_NO_HEADER_ID' => 'Cette fonctionnalit?? n&#39;est pas support??e dans ce th??me.',
    'ERR_NOT_ADMIN' => 'Acc??s non autoris?? ?? l&#39;administration.',
    'ERR_UNAUTHORIZED_PAGE_ACCESS' => 'Vous n\'??tes pas autoris?? ?? voir cette page. Veuillez contacter votre administrateur syst??me.',
    'ERR_UNAUTHORIZED_PAGE_ACCESS_TO_HOME_PAGE' => 'Vous n\'??tes pas autoris?? ?? voir cette page. Redirection vers la Page d\'Accueil...',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Champ(s) obligatoire(s) :',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Champ(s) obligatoire(s) invalide(s) :',
    'ERR_INVALID_VALUE' => 'Valeur incorrecte :',
    'ERR_NO_SUCH_FILE' => 'Le fichier n&#39;existe pas sur le syst??me',
    'ERR_NO_SINGLE_QUOTE' => 'Impossible d&#39;utiliser le simple guillemet pour',
    'ERR_NOTHING_SELECTED' => 'Merci de s??lectionner un ??l??ment pour continuer.',
    'ERR_SELF_REPORTING' => 'Un utilisateur ne peut pas se reporter ?? lui-m??me.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Pas de correspondance pour le champ : ',
    'ERR_SQS_NO_MATCH' => 'Pas de correspondance',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Veuillez sp??cifier une &#39;cl??&#39; d&#39;index dans les param??tres d&#39;affichage pour les Meta-donn??es',
    'ERR_EXISTING_PORTAL_USERNAME' => 'Erreur : Le nom du portail est d??j?? attribu?? ?? un autre contact.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'La valeur du champ n&#39;est pas compatible avec le format d??fini',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'Une erreur s&#39;est produite lorsque vous tentez de sauvegarder lien externe.',
    'ERR_NO_DB' => 'Connexion impossible ?? la base de donn??es. Veuillez consulter suitecrm.log pour plus de d??tails.',
    'ERR_DB_FAIL' => 'D??faillance de la base de donn??es. Veuillez consulter suitecrm.log pour plus de d??tails.',
    'ERR_DB_VERSION' => 'Les fichiers SuiteCRM {0} sont utilisables uniquement avec une base de donn??es SuiteCRM {1}.',

    'LBL_ACCOUNT' => 'Compte',
    'LBL_ACCOUNTS' => 'Comptes',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activit??s',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Voir r??sum??',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Voir r??sum??',
    'LBL_ADD_BUTTON' => 'Ajouter',
    'LBL_ADD_DOCUMENT' => 'Ajouter un Document',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Ajouter ?? la liste des cibles',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'Ajouter des Contacts ?? la liste des cibles',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Cliquer pour Fermer',
    'LBL_ADDITIONAL_DETAILS' => 'Informations compl??mentaires',
    'LBL_ADMIN' => 'Admin',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Archiver',
    'LBL_ASSIGNED_TO_USER' => 'Assign?? ?? l\'utilisateur',
    'LBL_ASSIGNED_TO' => 'Assign?? ?? :',
    'LBL_BACK' => 'Retour',
    'LBL_BILLING_ADDRESS' => 'Adresse de Facturation',
    'LBL_QUICK_CREATE' => 'Cr??er ',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - CRM Open Source',
    'LBL_BUGS' => 'Anomalies',
    'LBL_BY' => 'par',
    'LBL_CALLS' => 'Appels',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Envoyer les E-mails en file d\'attente',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Envoyer',
    'LBL_CASE' => 'Ticket',
    'LBL_CASES' => 'Tickets',
    'LBL_CHANGE_PASSWORD' => 'Changer le mot de passe',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHARTS' => 'Graphiques',
    'LBL_QUICK_CHARTS' => 'Graphiques rapides',
    'LBL_QUICK_HISTORY' => 'Ech??ancier',
    'LBL_CHECKALL' => 'Cocher tout',
    'LBL_CITY' => 'Ville',
    'LBL_CLEAR_BUTTON_LABEL' => 'Vider',
    'LBL_CLEAR_BUTTON_TITLE' => 'Effacer',
    'LBL_CLEARALL' => 'Tout effacer',
    'LBL_CLOSE_BUTTON_TITLE' => 'Fermer',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Fermer et cr??er un nouveau',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Fermer et cr??er un nouveau',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Ouvrir les articles',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'R??diger E-mail',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'R??diger E-mail',
    'LBL_SEARCH_DROPDOWN_YES' => 'Oui',
    'LBL_SEARCH_DROPDOWN_NO' => 'Non',
    'LBL_CONTACT_LIST' => 'Liste des Contacts',
    'LBL_CONTACT' => 'Contact',
    'LBL_CONTACTS' => 'Contacts',
    'LBL_CONTRACT' => 'Contrat',
    'LBL_CONTRACTS' => 'Contrats',
    'LBL_COUNTRY' => 'Pays :',
    'LBL_CREATE_BUTTON_LABEL' => 'Cr??er',
    'LBL_CREATED_BY_USER' => 'Cr???? par',
    'LBL_CREATED_USER' => 'Cr???? par',
    'LBL_CREATED' => 'Cr???? par',
    'LBL_CURRENT_USER_FILTER' => 'Mes ??l??ments',
    'LBL_CURRENCY' => 'Devise :',
    'LBL_DOCUMENTS' => 'Documents',
    'LBL_DATE_ENTERED' => 'Date de cr??ation :',
    'LBL_DATE_MODIFIED' => 'Date de modification :',
    'LBL_EDIT_BUTTON' => 'Modifier',
    'LBL_DUPLICATE_BUTTON' => 'Dupliquer',
    'LBL_DELETE_BUTTON' => 'Supprimer',
    'LBL_DELETE' => 'Supprimer',
    'LBL_DELETED' => 'Supprim??',
    'LBL_DIRECT_REPORTS' => 'Rapports directs',
    'LBL_DONE_BUTTON_LABEL' => 'Termin??',
    'LBL_DONE_BUTTON_TITLE' => 'Termin??',
    'LBL_FAVORITES' => 'Favoris',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'Veuillez s??lectionner un fichier vCard',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard ne dispose pas de tous les champs requis pour ce module. Veuillez vous r??f??rer ?? suitecrm.log pour plus de d??tails.',
    'LBL_VCARD_ERROR_FILESIZE' => 'Le fichier envoy?? d??passe la limite de 30000 bytes sp??cifi??e dans le formulaire HTML.',
    'LBL_VCARD_ERROR_DEFAULT' => 'Une erreur s\'est produite lors de l\'envoi du fichier vCard. Veuillez-vous r??f??rer ?? suitecrm.log pour plus de d??tails.',
    'LBL_IMPORT_VCARD' => 'Importer une vCard :',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Importer une vCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Importer une vCard',
    'LBL_VIEW_BUTTON' => 'Voir',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Email en PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Message en PDF',
    'LBL_EMAILS' => 'E-mails',
    'LBL_EMPLOYEES' => 'Employ??s',
    'LBL_ENTER_DATE' => 'Pr??ciser la date',
    'LBL_EXPORT' => 'Exporter',
    'LBL_FAVORITES_FILTER' => 'Mes favoris',
    'LBL_GO_BUTTON_LABEL' => 'D??marrer',
    'LBL_HIDE' => 'Masquer',
    'LBL_HISTORY' => 'Historique',
    'LBL_NEW' => 'Nouveau',
    'LBL_ID' => 'ID',
    'LBL_IMPORT' => 'Importer',
    'LBL_IMPORT_STARTED' => 'Import d??marr?? : ',
    'LBL_LAST_VIEWED' => 'Derni??res consultations',
    'LBL_LEADS' => 'Prospects',
    'LBL_LESS' => 'Moins',
    'LBL_CAMPAIGN' => 'Campagne :',
    'LBL_CAMPAIGNS' => 'Campagnes',
    'LBL_CAMPAIGNLOG' => 'Log des campagnes',
    'LBL_CAMPAIGN_CONTACT' => 'Campagnes',
    'LBL_CAMPAIGN_ID' => 'campaign_id',
    'LBL_CAMPAIGN_NONE' => 'Ind??fini',
    'LBL_THEME' => 'Th??me :',
    'LBL_FOUND_IN_RELEASE' => 'Trouv?? dans la Release',
    'LBL_FIXED_IN_RELEASE' => 'Corrig?? dans la Release',
    'LBL_LIST_ACCOUNT_NAME' => 'Nom du Compte',
    'LBL_LIST_ASSIGNED_USER' => 'Utilisateur',
    'LBL_LIST_CONTACT_NAME' => 'Nom du contact',
    'LBL_LIST_CONTACT_ROLE' => 'R??le Contact',
    'LBL_LIST_DATE_ENTERED' => 'Date de cr??ation',
    'LBL_LIST_EMAIL' => 'E-mail',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_LIST_OF' => 'sur',
    'LBL_LIST_PHONE' => 'T??l??phone',
    'LBL_LIST_RELATED_TO' => 'Relatif ??',
    'LBL_LIST_USER_NAME' => 'Nom d\'utilisateur',
    'LBL_LISTVIEW_NO_SELECTED' => 'Vous devez s??lectionner au moins 1 enregistrement.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Vous devez s??lectionner au moins 2 enregistrements.',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Enregistrements S??lectionn??s',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'S??lectionn??(s) : ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'Antoine',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Dupont',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Mr.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Code Monkey Extraordinaire',
    'LBL_CANCEL' => 'Annuler',
    'LBL_VERIFY' => 'V??rification',
    'LBL_RESEND' => 'Renvoyer',
    'LBL_RECORD_DOES_NOT_EXIST' => 'Erreur de r??cup??ration de l&#39;enregistrement. Cet enregistrement est peut ??tre supprim?? ou vous n&#39;avez pas le droit de le visualiser.',
    'LBL_PROFILE' => 'Profil',
    'LBL_MAILMERGE' => 'Fusion d\'E-mails',
    'LBL_MASS_UPDATE' => 'Mise ?? jour globale',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Il n&#39;y a pas de champs disponibles pour la mise ?? jour globale',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Opt-out E-mail principal',
    'LBL_OPT_IN_FLAG_PRIMARY' => 'Opt-out E-mail principal',
    'LBL_MEETINGS' => 'R??unions',
    'LBL_MEETING_GO_BACK' => 'Retourner ?? la r??union',
    'LBL_MEMBERS' => 'Membres',
    'LBL_MEMBER_OF' => 'Membre de',
    'LBL_MODIFIED_BY_USER' => 'Modifi?? par l\'utilisateur',
    'LBL_MODIFIED_USER' => 'Modifi?? par l\'utilisateur',
    'LBL_MODIFIED' => 'Modifi?? par',
    'LBL_MODIFIED_NAME' => 'Modifi?? par',
    'LBL_MORE' => 'plus',
    'LBL_MY_ACCOUNT' => 'Mon Compte',
    'LBL_NAME' => 'Nom',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Cr??er',
    'LBL_NEW_BUTTON_TITLE' => 'Cr??er',
    'LBL_EDIT' => 'Modifier',
    'LBL_NEXT_BUTTON_LABEL' => 'Suivant',
    'LBL_NONE' => '-aucun-',
    'LBL_NOTES' => 'Notes',
    'LBL_OPPORTUNITIES' => 'Affaires',
    'LBL_OPPORTUNITY_NAME' => 'Nom Affaire',
    'LBL_OPPORTUNITY' => 'Affaire',
    'LBL_OR' => 'OU',
    'LBL_PANEL_OVERVIEW' => 'Aper??u',
    'LBL_PANEL_ASSIGNMENT' => 'AUTRE',
    'LBL_PANEL_ADVANCED' => 'PLUS D\'INFORMATIONS',
    'LBL_PARENT_TYPE' => 'Type de parent',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_POSTAL_CODE' => 'Code postal :',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Ville (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Pays (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Code postal (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_STATE' => 'R??gion (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Rue 2 (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Rue 3 (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Rue (adresse principale) :',
    'LBL_PRIMARY_ADDRESS' => 'Adresse principale :',

    'LBL_PROSPECTS' => 'Prospects',
    'LBL_PRODUCTS' => 'Produits',
    'LBL_PROJECT_TASKS' => 'T??ches du projet',
    'LBL_PROJECTS' => 'Projets',
    'LBL_QUOTES' => 'Devis',

    'LBL_RELATED' => 'Rattach??',
    'LBL_RELATED_RECORDS' => 'Enregistrements rattach??s',
    'LBL_REMOVE' => 'Supprimer',
    'LBL_REPORTS_TO' => 'Rend compte ??',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Indique les champs obligatoires',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Termin??',
    'LBL_FULL_FORM_BUTTON_KEY' => 'F',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Vue Compl??te',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Vue Compl??te',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Enregistrer et cr??er un nouveau',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Enregistrer et cr??er un nouveau',
    'LBL_SAVE_OBJECT' => 'Sauvegarder {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'Rechercher',
    'LBL_SEARCH_BUTTON_TITLE' => 'Rechercher',
    'LBL_FILTER' => 'Filtre',
    'LBL_SEARCH' => 'Rechercher',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => 'suivant(s)',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Format de fichier invalide, seules des images peuvent ??tre t??l??charg??es.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'S??lectionner',
    'LBL_SELECT_BUTTON_TITLE' => 'S??lectionner',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Parcourir',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Parcourir',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'S??lectionner Contact',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'S??lectionner Contact',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'S??lectionner depuis un Rapport',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'S??lectionner Rapports',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U - majuscule',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'S??lectionner Utilisateur',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'S??lectionner Utilisateur',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Effacer la s??lection',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Effacer la s??lection',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Effacer la s??lection',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Effacer la s??lection',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'S??lectionnez un fichier',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'S??lectionnez un fichier',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Supprimer le fichier',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Supprimer le fichier',

    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U - majuscule',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'S??lectionner Utilisateur',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'S??lectionner Utilisateur',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Vider Utilisateur',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Vider Utilisateur',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'S??lectionner Compte',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'S??lectionner Compte',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Supprimer le compte',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Supprimer le compte',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'S??lectionner une campagne',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'S??lectionner une campagne',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Supprimer la campagne',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Supprimer la campagne',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'S??lectionner Contact',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'S??lectionner Contact',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Supprimer le contact',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Supprimer le contact',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'S??lectionner une ??quipe',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'S??lectionner une ??quipe',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Supprimer l\'??quipe',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Supprimer l\'??quipe',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Ressources utilis??es pour construire cette page (requ??tes, fichiers)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'secondes.',
    'LBL_SERVER_RESPONSE_TIME' => 'Temps de r??ponse du serveur :',
    'LBL_SERVER_MEMORY_BYTES' => 'octets',
    'LBL_SERVER_MEMORY_USAGE' => 'Utilisation de la m??moire serveur : {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Utilisation de la m??moire : - module : {0} - action {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Utilisation maximale de la m??moire serveur : {0} ({1})',
    'LBL_SHIPPING_ADDRESS' => 'Adresse de livraison',
    'LBL_SHOW' => 'Afficher',
    'LBL_STATE' => '??tat??:',
    'LBL_STATUS_UPDATED' => 'Votre statut pour cet ??v??nement a ??t?? mis ?? jour !',
    'LBL_STATUS' => 'Statut :',
    'LBL_STREET' => 'Rue',
    'LBL_SUBJECT' => 'Sujet',

    'LBL_INBOUNDEMAIL_ID' => 'Compte E-mail (ID)',

    'LBL_SCENARIO_SALES' => 'Ventes',
    'LBL_SCENARIO_MARKETING' => 'Marketing',
    'LBL_SCENARIO_FINANCE' => 'Finance',
    'LBL_SCENARIO_SERVICE' => 'Service',
    'LBL_SCENARIO_PROJECT' => 'Gestion de projet',

    'LBL_SCENARIO_SALES_DESCRIPTION' => 'Ce sc??nario facilite la gestion des articles en vente',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => 'Ce sc??nario facilite la gestion des ??l??ments li??s au marketing',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => 'Ce sc??nario facilite la gestion des ??l??ments li??s ?? la finance',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => 'Ce sc??nario facilite la gestion des ??l??ments li??s aux services',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => 'Ce sc??nario facilite la gestion des ??l??ments li??s aux projets',

    'LBL_SYNC' => 'Synchronisation',
    'LBL_TABGROUP_ALL' => 'Tous',
    'LBL_TABGROUP_ACTIVITIES' => 'Activit??s',
    'LBL_TABGROUP_COLLABORATION' => 'Collaboration',
    'LBL_TABGROUP_MARKETING' => 'Marketing',
    'LBL_TABGROUP_OTHER' => 'Autre',
    'LBL_TABGROUP_SALES' => 'Ventes',
    'LBL_TABGROUP_SUPPORT' => 'Assistance',
    'LBL_TASKS' => 'T??ches',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archiver E-mail',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archiver E-mail',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Restaurer',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Restaurer',
    'LBL_UNDELETE_BUTTON' => 'Restaurer',
    'LBL_UNDELETE' => 'Restaurer',
    'LBL_UNSYNC' => 'Dessynchroniser',
    'LBL_UPDATE' => 'Enregistrer',
    'LBL_USER_LIST' => 'Liste des Utilisateurs',
    'LBL_USERS' => 'Utilisateurs',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'V??rification parmi les messages existants...',
    'LBL_VERIFY_PORTAL_NAME' => 'V??rification parmi les noms de portail existants...',
    'LBL_VIEW_IMAGE' => 'voir',

    'LNK_ABOUT' => 'A propos',
    'LNK_ADVANCED_FILTER' => 'Filtre avanc??',
    'LNK_BASIC_FILTER' => 'Filtre rapide',
    'LBL_ADVANCED_SEARCH' => 'Filtre avanc??',
    'LBL_QUICK_FILTER' => 'Filtre rapide',
    'LBL_BASIC_FILTER' => 'Filtre basique',
    'LBL_QUICK' => 'Rapide',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Voir tous',
    'LNK_CLOSE' => 'Fermer',
    'LBL_MODIFY_CURRENT_FILTER' => 'Modifier le filtre en cours',
    'LNK_SAVED_VIEWS' => 'Options',
    'LNK_DELETE' => 'Supprimer',
    'LNK_EDIT' => 'Modifier',
    'LNK_GET_LATEST' => 'Obtenir le dernier',
    'LNK_GET_LATEST_TOOLTIP' => 'Remplacer par la derni??re version',
    'LNK_HELP' => 'Aide',
    'LNK_CREATE' => 'Cr??er',
    'LNK_LIST_END' => 'Fin',
    'LNK_LIST_NEXT' => 'Suivant',
    'LNK_LIST_PREVIOUS' => 'Pr??c??dent',
    'LNK_LIST_RETURN' => 'Retour ?? la Liste',
    'LNK_LIST_START' => 'D??but',
    'LNK_LOAD_SIGNED' => 'Sign??',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'Remplacer par le document sign??',
    'LNK_PRINT' => 'Imprimer',
    'LNK_BACKTOTOP' => 'Retour en Haut',
    'LNK_REMOVE' => 'Supprimer',
    'LNK_RESUME' => 'Reprise',
    'LNK_VIEW_CHANGE_LOG' => 'Voir Journal des modifications',
    'LBL_CHANGE_LOG' => 'Journal des modifications',

    'NTC_CLICK_BACK' => 'Merci de cliquer sur le bouton "Pr??c??dent" de votre navigateur et de corriger le probl??me.',
    'NTC_DATE_FORMAT' => '(aaaa-mm-jj)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Voulez-vous vraiment supprimer les enregistrements s??lectionn??s ?',
    'NTC_TEMPLATE_IS_USED' => 'Ce mod??le est utilis?? par au moins un E-mail li?? aux Campagnes. ??tes-vous s??r(e) de vouloir le supprimer ?',
    'NTC_TEMPLATES_IS_USED' => 'Les mod??les suivants sont utilis??s par des E-mails li??s aux Campagnes. ??tes-vous s??r(e) de vouloir les supprimer ?' . PHP_EOL,
    'NTC_DELETE_CONFIRMATION' => 'Voulez-vous vraiment supprimer cet enregistrement ?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Voulez-vous vraiment supprimer les ',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Voulez-vous vraiment mettre ?? jour tous les enregistrements s??lectionn??s (',
    'NTC_DELETE_SELECTED_RECORDS' => ' enregistrement(s) s??lectionn??(s) ?',
    'NTC_LOGIN_MESSAGE' => 'Merci de vous authentifier.',
    'NTC_NO_ITEMS_DISPLAY' => 'Aucun',
    'NTC_REMOVE_CONFIRMATION' => 'Voulez-vous vraiment supprimer cette relation?',
    'NTC_REQUIRED' => 'Indique les champs obligatoires',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Bienvenue',
    'NTC_YEAR_FORMAT' => '(aaaa)',
    'WARN_UNSAVED_CHANGES' => 'Vous ??tes sur le point de quitter cet enregistrement sans sauvegarder vos modifications. Etes-vous s??r de vouloir quitter cet enregistrement ?',
    'ERROR_NO_RECORD' => 'Erreur de r??cup??ration de l&#39;enregistrement. Cet enregistrement est peut ??tre supprim?? ou vous n&#39;avez pas le droit de le visualiser.',
    'WARN_BROWSER_VERSION_WARNING' => '<p><b>Attention :</b>Le navigateur ou la version du navigateur que vous utilisez n&#39;est pas support??.</p><p>Les navigateurs suivants sont recommand??s :</p><ul><li>Internet Explorer 9</li><li>Mozilla Firefox 14, 15 </li><li>Safari 6</li><li>Google Chrome 22 (ou derni??re version)</li></ul>',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>Attention :</b> Votre navigateur est en mode de compatibilit?? ce qui n&#39;est pas support??.',
    'ERROR_TYPE_NOT_VALID' => 'Erreur. Ce type n&#39;est pas valide.',
    'ERROR_NO_BEAN' => 'Echec pour obtenir un bean.',
    'LBL_DUP_MERGE' => 'Recherche de doublons',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'Abonnement aux Newsletters',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Gestion des Newsletters de',
    // Ajax status strings
    'LBL_LOADING' => 'Chargement...',
    'LBL_SEARCHING' => 'Recherche en cours...',
    'LBL_SAVING_LAYOUT' => 'Sauvegarde de la mise en page...',
    'LBL_SAVED_LAYOUT' => 'Nouvelle disposition sauvegard??e.',
    'LBL_SAVED' => 'Sauvegard??',
    'LBL_SAVING' => 'Sauvegarde en cours',
    'LBL_DISPLAY_COLUMNS' => 'Colonnes affich??es',
    'LBL_HIDE_COLUMNS' => 'Colonnes masqu??es',
    'LBL_COLUMNS' => 'Colonnes',
    'LBL_SEARCH_CRITERIA' => 'Crit??re de recherche',
    'LBL_SAVED_VIEWS' => 'Vues sauvegard??es',
    'LBL_PROCESSING_REQUEST' => 'Traitement en cours...',
    'LBL_REQUEST_PROCESSED' => 'Termin??',
    'LBL_AJAX_FAILURE' => 'Erreur Ajax',
    'LBL_MERGE_DUPLICATES' => 'Fusionner',
    'LBL_SAVED_FILTER_SHORTCUT' => 'Mes filtres',
    'LBL_SEARCH_POPULATE_ONLY' => 'Lancer une recherche en utilisant le formulaire de recherche ci-dessus',
    'LBL_DETAILVIEW' => 'Vue D??tail',
    'LBL_LISTVIEW' => 'Vue Liste',
    'LBL_EDITVIEW' => 'Vue Edition',
    'LBL_BILLING_STREET' => 'Rue (adresse facturation) :',
    'LBL_SHIPPING_STREET' => 'Rue (adresse livraison) :',
    'LBL_SEARCHFORM' => 'Formulaire de recherche',
    'LBL_SAVED_SEARCH_ERROR' => 'Merci de fournir un nom pour cette vue.',
    'LBL_DISPLAY_LOG' => 'Afficher les Logs',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'Syst??me',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Session Expir??e',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Votre session va expirer dans 2 minutes. Veuillez sauvegarder votre travail.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'Votre session a expir??.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nAgenda : ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'R??union',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Appel',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Heure : ',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Emplacement : ',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Description : ',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Statut : ',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Relatif ?? : ',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "Cliquez sur OK pour afficher cet appel ou cliquez sur Annuler pour fermer ce message.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "Cliquez sur OK pour afficher cette r??union ou cliquez sur Annuler pour fermer ce message.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Ev??nement',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'L?????v??nement n\'est pas configur??.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'L\'emplacement n\'est pas d??fini.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'La date de d??but n\'est pas d??finie.',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'Aucun r??sultat.',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => 'Aucun r??sultat trouv??... Peut-??tre en changeant un crit??re de recherche et essayer ?? nouveau ?',
    'MSG_LIST_VIEW_NO_RESULTS' => 'Aucun r??sultat pour <item1>',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Cr???? <item1> comme un nouveau <item2>',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'ou modifier vos crit??res de recherche',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'Vous n&#39;avez aucun r??sultat accessible. <item2> ou r??alisez un <item3> maintenant.',

    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Ajouter ?? mes favoris',
    'LBL_CREATE_CONTACT' => 'Cr??er un Contact',
    'LBL_CREATE_CASE' => 'Cr???? un Ticket',
    'LBL_CREATE_NOTE' => 'Cr??er une Note',
    'LBL_CREATE_OPPORTUNITY' => 'Cr??er une Affaire',
    'LBL_SCHEDULE_CALL' => 'Journal d\'appel',
    'LBL_SCHEDULE_MEETING' => 'Organiser une r??union',
    'LBL_CREATE_TASK' => 'Cr??er une t??che',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Afficher le Formulaire',
    'LBL_SAVE_WEB_TO_LEAD_FORM' => 'Enregistrer le formulaire Web',
    'LBL_AVAILABLE_FIELDS' => 'Champs disponibles',
    'LBL_FIRST_FORM_COLUMN' => 'Premi??re colonne du formulaire',
    'LBL_SECOND_FORM_COLUMN' => 'Seconde colonne du formulaire',
    'LBL_ASSIGNED_TO_REQUIRED' => 'Champ obligatoire manquant : attribu?? ??',
    'LBL_RELATED_CAMPAIGN_REQUIRED' => 'Champ obligatoire manquant : campagne associ??e',
    'LBL_TYPE_OF_PERSON_FOR_FORM' => 'Formulaire web ?? cr??er ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC' => 'Envoyer ce formulaire cr??era ',

    'LBL_ADD_ALL_LEAD_FIELDS' => 'Ajouter tous les champs',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'R??initialiser tous les champs',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Supprimer tous les champs',
    'LBL_NEXT_BTN' => 'Suivant',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Seuls les fichiers de type image peuvent ??tre joints : JPG, PNG.',
    'LBL_TRAINING' => 'Forum d\'Aide',
    'ERR_MSSQL_DB_CONTEXT' => 'modification du contexte de la base de donn??es en',
    'ERR_MSSQL_WARNING' => 'Attention :',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Erreur : Fichier [[file]] manquant.  Impossible de le cr??er car il n&#39;y a pas de fichier HTML correspondant.',
    'ERR_CANNOT_FIND_MODULE' => 'Erreur : Ce Module [module] n&#39;existe pas.',
    'LBL_ALT_ADDRESS' => 'Autres adresses :',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Erreur : Le nombre d&#39;arguments est diff??rent entre les ??l??ments &#39;key&#39; et &#39;copy&#39; dans le tableau des param??tres d&#39;affichage.',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'G??n??ral',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtrer',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Mes ??l??ments seulement',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Titre',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Afficher les lignes',

    // MySugar status strings
    'LBL_MAX_DASHLETS_REACHED' => 'Vous avez atteint le nombre maximal de dashlets autoris??s par votre administrateur. Merci de supprimer un dashlet pour en ajouter d\'autres.',
    'LBL_ADDING_DASHLET' => 'Ajout un dashlet...',
    'LBL_ADDED_DASHLET' => 'Dashlet ajout??',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Etes-vous s??r(e) de vouloir supprimer le Dashlet ?',
    'LBL_REMOVING_DASHLET' => 'Suppression du Dashlet...',
    'LBL_REMOVED_DASHLET' => 'Dashlet supprim??',

    // MySugar Menu Options

    'LBL_LOADING_PAGE' => 'Chargement en cours, veuillez patienter...',

    'LBL_RELOAD_PAGE' => 'Veuillez <a href="javascript: window.location.reload()"> recharger la fen??tre</a> pour utiliser ce Dashlet.',
    'LBL_ADD_DASHLETS' => 'Ajouter un Dashlet',
    'LBL_CLOSE_DASHLETS' => 'Fermer',
    'LBL_OPTIONS' => 'Options',
    'LBL_1_COLUMN' => '1 colonne',
    'LBL_2_COLUMN' => '2 colonnes',
    'LBL_3_COLUMN' => '3 colonnes',
    'LBL_PAGE_NAME' => 'Nom de l&#39;onglet',

    'LBL_SEARCH_RESULTS' => 'R??sultats de recherche',
    'LBL_SEARCH_MODULES' => 'Modules',
    'LBL_SEARCH_TOOLS' => 'Outils',
    'LBL_SEARCH_HELP_TITLE' => 'Conseils de recherche',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Pas d&#39;image',

    'LBL_MODULE' => 'Module',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Copier l&#39;adresse depuis la gauche :',
    'LBL_SAVE_AND_CONTINUE' => 'Sauvegarder et aller au suivant',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Gestion des Multi-s??lections</strong></p><ul><li>Cliquer sur les valeurs pour s??lectionner les attributs.</li><li>Ctrl-clic pour faire une s??lection multiple. Pour les utilisateurs Mac utiliser CMD-clic.</li><li>Pour s??lectionner toutes les valeurs entres deux attributs cliquer sur la premi??re valeur et cliquer sur la derni??re valeur en maintenant la touche shift enfonc??e.</li></ul><p><strong>Recherche avanc??e &amp; options de mise en page</strong><br><br>Utiliser les <b>Options</b> afin de sauvegarder un jeu de param??tres de recherche et/ou une mise en page personnalis??e en vue Liste pour obtenir rapidement la recherche d??sir??e les prochaines fois. Vous pouvez sauvegarder un nombre illimit?? de recherches et mises en page personnalis??es. Le nom de toutes les recherches sauvegard??es appara??t dans la liste des recherches sauvegard??es, avec la derni??re recherche en haut de la liste.<br><br>Pour personnaliser la mise en page de la Vue Liste, utiliser les colonnes cach??es &amp; colonnes visibles afin de s??lectionner les champs ?? afficher dans les r??sultats de recherche. Par exemple, vous pouvez afficher ou cacher des d??tails comme le nom de l&#39;enregistrement, l&#39;utilisateur assign?? et l&#39;??quipe assign??e dans les r??sultats de recherche. Pour ajouter une colonne ?? la vue Liste, s??lectionner les champs dans la liste colonnes cach??es et utiliser la fl??che gauche pour le d??placer dans la liste colonnes visibles. Pour supprimer une colonne de la vue Liste, s??lectionnez-la dans la liste des colonnes affich??es et utiliser la fl??che droite pour la d??placer dans la liste des colonnes cach??es.<br><br>Si vous sauvegardez les param??tres de mise en page, vous pourrez les charger ?? tout moment pour voir les r??sultats de recherche dans la mise en page personnalis??e.<br><br>Pour sauvegarder et mettre ?? jour une recherche et/ou une mise en page:<ol><li>Entrer un nom pour les r??sultats de recherche dans le champ <b>Sauvegarder cette recherche comme</b> et cliquer sur <b>Sauvegarder</b>. Le nom appara??t maintenant dans la liste des Recherches Sauvegard??es adjacente au bouton <b>Vider</b>.</li><li>Pour voir une recherche sauvegard??e, s??lectionnez-en une dans le liste des Recherches Sauvegard??es. Les r??sultats de recherche sont affich??s dans la Vue Liste.</li><li>Pour mettre ?? jour les propri??t??s d&#39;une recherche sauvegard??e, s??lectionnez l?? dans la liste, entrer le nouveau crit??re de recherche et/ou les options de mise en page dans la zone de Recherche Avanc??e, et cliquer sur <b>Mettre ?? jour</b> puis sur <b>Modifier la Recherche Courante</b>.</li><li>Pour supprimer une recherche sauvegard??e, s??lectionner-la dans la liste des Recherches Sauvegard??es, cliquer sur <b>Supprimer</b> puis sur <b>Modifier la Recherche Courante</b>, et ensuite cliquer sur <b>OK</b> pour confirmer la suppression.</li></ol>',

    //resource management
    'ERR_QUERY_LIMIT' => 'Erreur : Le nombre limite de requ??tes ($limit) a ??t?? atteint pour le module $module .',
    'ERROR_NOTIFY_OVERRIDE' => 'Erreur : ResourceObserver->notify() doit ??tre surcharg??.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Erreur : Impossible de faire un suivi car le fichier metadata est vide ou n&#39;existe pas.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Erreur : Aucun suivi n&#39;a ??t?? configur?? pour le nom demand??',
    'ERR_UNDEFINED_METRIC' => 'Erreur : Impossible de positionner une valeur pour une m??trique ind??finie',
    'ERR_STORE_FILE_MISSING' => 'Erreur : Impossible de trouver le fichier de stockage de l&#39;impl??mentation',

    'LBL_MONITOR_ID' => 'Identifiant de Suivi',
    'LBL_USER_ID' => 'Utilisateur (ID)',
    'LBL_MODULE_NAME' => 'Nom du module',
    'LBL_ITEM_ID' => 'Identifiant Enregistrement',
    'LBL_ITEM_SUMMARY' => 'Description Enregistrement',
    'LBL_ACTION' => 'Action',
    'LBL_SESSION_ID' => 'Identifiant Session',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack cr??e pour l\'ID utilisateur {0}',
    'LBL_VISIBLE' => 'Enregistrement Visible',
    'LBL_DATE_LAST_ACTION' => 'Date de derni??re action',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'n&#39;est pas avant',
    'MSG_IS_MORE_THAN' => 'est plus grand que',
    'MSG_SHOULD_BE' => 'devrait ??tre',
    'MSG_OR_GREATER' => 'ou plus grand que',

    'LBL_LIST' => 'Liste',
    'LBL_CREATE_BUG' => 'Cr???? un Bug',

    'LBL_OBJECT_IMAGE' => 'Image',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'S??lectionner une date',

    'LBL_VALIDATE_RANGE' => 'n&#39;est pas dans la plage valide',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Veuillez choisir ?? la fois une date de d??but et de fin',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Veuillez choisir ?? la fois des valeurs de d??but et de fin',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Tous',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Erreur : Le nombre d&#39;entr??es param??tr??es dans l&#39;objet ne correspond pas avec le nomdre d&#39;entr??es pr??sentes dans le r??sultat obtenu depuis le connecteur.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Erreur : Le mapping des champs pour ce module est manquant.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Erreur : Impossible de r??cup??rer les donn??es pour le connecteur {0}. Le service est peut ??tre inaccessible ou les param??tres de configuration que vous avez sp??cifi??s sont peut ??tre invalides. Message d\'erreur du connecteur : ({1}).',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'Pour une utilisation optimale de IIS/FastCGI, positionnez le param??tre fastcgi.logging ?? 0 dans votre fichier php.ini.',

    //Collection Field
    'LBL_COLLECTION_NAME' => 'Nom complet',
    'LBL_COLLECTION_PRIMARY' => 'Principale',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'Champ obligatoire vide',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Assign?? ??',
    'LBL_DESCRIPTION' => 'Description',

    'LBL_YESTERDAY' => 'hier',
    'LBL_TODAY' => 'aujourd&#39;hui',
    'LBL_TOMORROW' => 'demain',
    'LBL_NEXT_WEEK' => 'prochaine semaine',
    'LBL_NEXT_MONDAY' => 'prochain lundi',
    'LBL_NEXT_FRIDAY' => 'prochain vendredi',
    'LBL_TWO_WEEKS' => '2 semaines',
    'LBL_NEXT_MONTH' => 'prochain mois',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'premier jour du mois prochain',
    'LBL_THREE_MONTHS' => '3 mois',
    'LBL_SIXMONTHS' => '6 mois',
    'LBL_NEXT_YEAR' => 'ann??e prochaine',

    //Datetimecombo fields
    'LBL_HOURS' => 'Heures',
    'LBL_MINUTES' => 'Minutes',
    'LBL_MERIDIEM' => 'M??ridien',
    'LBL_DATE' => 'Date',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Rafra??chissement automatique',

    'LBL_DURATION_DAY' => 'jour',
    'LBL_DURATION_HOUR' => 'heure',
    'LBL_DURATION_MINUTE' => 'minute',
    'LBL_DURATION_DAYS' => 'jours',
    'LBL_DURATION_HOURS' => 'Dur??e (heures)',
    'LBL_DURATION_MINUTES' => 'Dur??e (minutes)',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Choisir le mois',
    'LBL_ENTER_YEAR' => 'Entrer l&#39;ann??e',
    'LBL_ENTER_VALID_YEAR' => 'Veuillez saisir une ann??e valide',

    //File write error label
    'ERR_FILE_WRITE' => 'Erreur : impossible d&#39;??crire le fichier {0}. Veuillez v??rifier les droits et permissions sur les fichiers.',
    'ERR_FILE_NOT_FOUND' => 'Erreur : impossible de charger le fichier {0}. Veuillez v??rifier les droits et permissions sur les fichiers.',

    'LBL_AND' => 'et',

    // File fields
    'LBL_SEARCH_EXTERNAL_API' => 'Fichier issu d\'une source externe',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'S??curit??',

    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '"Ceci est un fichier d&#39;import basique qui fournit un exemple du contenu attendu d&#39;un fichier pr??t ?? ??tre import??."<br />"Ce fichier est un fichier .csv d??limit?? par un point-virgule utilisant des guillemets comme qualificateur de champ."<br /><br />"La ligne d&#39;ent??te est la toute premi??re ligne du fichier et elle contient le nom des champs tels que vous les verriez dans l&#39;application."<br />"Ces libell??s sont utilis??s pour le mapping de donn??es du fichier avec les donn??es de votre SuiteCRM."<br /><br />"Remarques: Le noms des champs en base de donn??es peuvent aussi ??tre utilis??s en ligne d&#39;ent??te. Ceci est pratique si vous utilisez phpMyAdmin ou un autre outil de gestion de base de donn??es pour fournir des donn??es ?? importer."<br />"L&#39;ordre des champs n&#39;est pas critique puisque le process d&#39;import fait correspondre les donn??es ?? partir des champs d??finis dans la ligne d&#39;ent??te."<br /><br /><br />"Pour utiliser ce mod??le de fichier, faites les choses suivantes:"<br />"1. Enlever les donn??es d&#39;exemple"<br />"2. Enlever le texte d&#39;aide que vous ??tes en train de lire"<br />"3. Ins??rer vos propres donn??es dans les colonnes appropri??es"<br />"4. Sauvegarder le fichier sur votre ordinateur local"<br />"5. Cliquez sur les options d&#39;import du menu d&#39;actions dans l&#39;application et choisissez le fichier ?? transmettre"',
    //define labels to be used for overriding local values during import/export

    'LBL_NOTIFICATIONS_NONE' => 'Aucune notification',
    'LBL_ALT_SORT_DESC' => 'Tri descendant',
    'LBL_ALT_SORT_ASC' => 'Tri Ascendant',
    'LBL_ALT_SORT' => 'Tri',
    'LBL_ALT_SHOW_OPTIONS' => 'Afficher options',
    'LBL_ALT_HIDE_OPTIONS' => 'Masquer options',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'D??placer l&#39;entr??e vers la liste de gauche',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'D??placer l&#39;entr??e vers la liste de droite',
    'LBL_ALT_MOVE_COLUMN_UP' => 'D??placer l&#39;entr??e vers le haut de la liste',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'D??placer l&#39;entr??e vers le bas de la liste',
    'LBL_ALT_INFO' => 'Information',
    'MSG_DUPLICATE' => 'L&#39;enregistrement {0} que vous allez cr??er est probablement un doublon d&#39;un enregistrement {0} existant. Les enregistrements {1} contenant le m??me nom sont list??s ci-dessous.<br>Cliquez sur Cr??er {1} pour cr??er cet enregistrement {0}, ou s??lectionnez un enregistrement {0} list?? ci-dessous.',
    'MSG_SHOW_DUPLICATES' => 'L&#39;enregistrement {0} que vous allez cr??er est probablement un doublon d&#39;un enregistrement {0} existant. Les enregistrements {1} contenant le m??me nom sont list??s ci-dessous.  Cliquez sur Sauvegarder pour cr??er cet enregistrement {0}, ou sur Annuler pour retourner au module sans cr??er cet enregistrement.',
    'LBL_EMAIL_TITLE' => 'adresse e-mail',
    'LBL_EMAIL_OPT_TITLE' => 'adresse E-mail d??sinscrite',
    'LBL_EMAIL_INV_TITLE' => 'adresse E-mail invalide',
    'LBL_EMAIL_PRIM_TITLE' => 'Transformer en adresse E-mail principale',
    'LBL_SELECT_ALL_TITLE' => 'S??lectionner tous',
    'LBL_SELECT_THIS_ROW_TITLE' => 'S??lectionner cette ligne',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'ERREUR : Une erreur est survenue pendant le transfert. Code erreur : {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'ERREUR : Une erreur est survenue pendant le transfert. Code erreur : {0} - {1}. La variable PHP upload_maxsize a pour valeur {2} ',
    'UPLOAD_ERROR_HOME_TEXT' => 'ERREUR : Une erreur est survenue pendant votre transfert, veuillez contacter un administrateur pour obtenir de l&#39;aide.',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'La taille de l&#39;upload ({0} octets) d??passe le maximum autoris?? : {1} octets',
    'UPLOAD_REQUEST_ERROR' => 'Une erreur est survenue. Veuillez rafra??chir cette page et essayer de nouveau',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'i',
    'LBL_EDIT_BUTTON_LABEL' => 'Modifier',
    'LBL_EDIT_BUTTON_TITLE' => 'Modifier',
    'LBL_DUPLICATE_BUTTON_KEY' => 'u',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Dupliquer',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Dupliquer',
    'LBL_DELETE_BUTTON_KEY' => 'd',
    'LBL_DELETE_BUTTON_LABEL' => 'Supprimer',
    'LBL_DELETE_BUTTON_TITLE' => 'Supprimer',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'Action par lot',
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'Action',
    'LBL_TOO_FEW_SELECTED' => 'Nombre d\'enregistrements s??lectionn??s invalide. Vous devez s??lectionner au minimum {min} enregistrements.',
    'LBL_TOO_MANY_SELECTED' => 'Nombre d\'enregistrements s??lectionn??s invalide. Vous devez s??lectionner au maximum {max} enregistrements.',
    'LBL_SELECT_ALL_NOT_ALLOWED' => 'La s??lection de tous les enregistrements n\'est pas disponible pour cette action. Veuillez s??lectionner des enregistrements individuels.',
    'LBL_MISSING_HANDLER_DATA' => 'Erreur inattendue. Il manque des donn??es de gestion des actions de masse dans r??ponse',
    'LBL_MISSING_HANDLER' => 'Erreur inattendue. Aucun gestionnaire d??fini pour l\'action de s??lection en masse',
    'LBL_MISSING_HANDLER_DATA_ROUTE' => 'Erreur inattendue. Route d\'action de masse manquante',
    'LBL_ACTION_ERROR' => 'Erreur inattendue lors de l\'appel de l\'action',
    'LBL_BULK_ACTION_ERROR' => 'Erreur inattendue lors de l\'appel de l\'action',
    'LBL_BULK_ACTION_DELETE_SUCCESS' => 'Enregistrement(s) supprim??(s) avec succ??s',
    'LBL_BULK_ACTION_MASS_UPDATE_CONFIRMATION' => '??tes-vous s??r de vouloir mettre ?? jour les enregistrements s??lectionn??s ?',
    'LBL_BULK_ACTION_MASS_UPDATE_SUCCESS' => 'Tous les enregistrements ont ??t?? mis ?? jour avec succ??s',
    'LBL_BULK_ACTION_MASS_UPDATE_PARTIAL_SUCCESS' => 'Succ??s partiel. Certains enregistrements n\'ont pas ??t?? mis ?? jour. Veuillez v??rifier le journal',
    'LBL_BULK_ACTION_MASS_UPDATE_NO_FIELDS' => 'Aucun champ ?? mettre ?? jour',
    'LBL_BULK_ACTION_MASS_UPDATE_NO_RECORDS' => 'Aucun enregistrement ?? mettre ?? jour',
    'LBL_BULK_ACTION_MASS_UPDATE_NO_ACLS' => 'Privil??ge insuffisant, sauvegarde non autoris??e',
    'LBL_UNEXPECTED_ERROR' => 'Erreur inattendue. Impossible d\'effectuer l\'action.',
    'LBL_RECORD_DELETE_SUCCESS' => 'Enregistrement supprim?? avec succ??s',
    'LBL_ERROR_SAVING' => 'Une erreur s\'est produite lors de l\'enregistrement des donn??es.',
    'LBL_SAVE_BUTTON_KEY' => 'a',
    'LBL_SAVE_BUTTON_LABEL' => 'Sauvegarder',
    'LBL_SAVE_BUTTON_TITLE' => 'Sauvegarder',
    'LBL_CANCEL_BUTTON_KEY' => 'l',
    'LBL_CANCEL_BUTTON_LABEL' => 'Annuler',
    'LBL_CANCEL_BUTTON_TITLE' => 'Annuler',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',

    'ANNUAL_REVENUE_BY_ACCOUNTS' => 'Revenu annuel par comptes',
    'PIPELINE_BY_SALES_STAGE' => 'Portefeuille par phase de vente',
    'LEADS_BY_SOURCE' => 'Prospects par origine',
    'LEADS_BY_STATUS' => 'Prospects par statut',
    'ACCOUNT_TYPES_PER_MONTH' => 'Nouveaux comptes par mois',

    'ERR_CONNECTOR_NOT_ARRAY' => 'tableau du connecteur dans {0} d??fini incorrectement ou est vide et ne peut ??tre utilis??.',
    'ERR_SUHOSIN' => 'Le flux d&#39;upload est bloqu?? par Suhosin, veuillez ajouter &quot;upload&quot; au param??tre suhosin.executor.include.whitelist (cf. suitecrm.log pour plus d&#39;informations)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'R??ponse erron??e du serveur',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Devis',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Prix de vente',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => 'Manuellement',
        '5' => 'Toutes les 5 minutes',
        '15' => 'Toutes les 15 minutes',
        '30' => 'Toutes les 30 minutes',
        '60' => 'Toutes les heures',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'Erreur un rappel est vide ou incorrect',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Rappel par popup ou par E-mail non d??fini.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'Aucun invit?? pour ce rappel.',
    'LBL_DELETE_REMINDER_CONFIRM' => 'Le rappel n???inclut pas les invit??s, vous souhaitez supprimer le rappel???',
    'LBL_DELETE_REMINDER' => 'Supprimer le rappel',
    'LBL_OK' => 'Ok',
    'LBL_PROCEED' => 'Poursuivre',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => 'Choisissez les colonnes',
    'LBL_COLUMN_CHOOSER' => 'S??lecteur de colonne',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => 'Enregistrer les modifications',
    'LBL_DISPLAYED' => 'Affich??',
    'LBL_HIDDEN' => 'Cach??',
    'ERR_EMPTY_COLUMNS_LIST' => 'Au moins, un ??l??ment n??cessaire',

    'LBL_FILTER_HEADER_TITLE' => 'Filtre',

    'LBL_CATEGORY' => 'Cat??gorie',
    'LBL_LIST_CATEGORY' => 'Cat??gorie',
    'ERR_FACTOR_TPL_INVALID' => 'Le message d???authentification est invalide, veuillez contacter votre administrateur.',
    'LBL_SUBTHEMES' => 'Style',
    'LBL_SUBTHEME_OPTIONS_DAWN' => 'Aurore',
    'LBL_SUBTHEME_OPTIONS_DAY' => 'Jour',
    'LBL_SUBTHEME_OPTIONS_DUSK' => 'Cr??puscule',
    'LBL_SUBTHEME_OPTIONS_NIGHT' => 'Nuit',
    'LBL_SUBTHEME_OPTIONS_NOON' => 'Noon',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Ignorer ce brouillon',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'Cette op??ration supprimera le contenu du message, voulez-vous continuer???',
    'LBL_CONFIRM_DISREGARD_EMAIL_TITLE' => 'Fermer la fen??tre de composition',
    'LBL_CONFIRM_DISREGARD_EMAIL_BODY' => 'En fermant cette fen??tre, toutes les informations saisies seront perdues. ??tes-vous de vouloir continuer ?',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Appliquer un mod??le d\'E-mail',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'Cette op??ration remplacera le corps du message. Voulez-vous continuer???',

    'LBL_CONFIRM_OPT_IN_TITLE' => 'Confirmer l\'abonnement',
    'LBL_OPT_IN_TITLE' => 'Consentement',
    'LBL_CONFIRM_OPT_IN_DATE' => 'Date de la confirmation d\'activation',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'Date d\'envoi de confirmation d\'activation',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Date d\'??chec de l\'activation confirm??e',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'Confirmer le jeton d\'abonnement',
    'ERR_OPT_IN_TPL_NOT_SET' => 'Le mod??le de message pour l\'activation n\'est pas d??fini. Veuillez le configurer dans les param??tres de messagerie.',
    'ERR_OPT_IN_RELATION_INCORRECT' => 'L\'activation impose que l\'adresse ??lectronique soit li??e au compte / contact / prospect / cible',

    'LBL_SECURITYGROUP_NONINHERITABLE' => 'Groupe non h??ritable',
    'LBL_PRIMARY_GROUP' => "Groupe primaire",

    // footer
    'LBL_SUITE_TOP' => 'Retour en Haut',
    'LBL_SUITE_SUPERCHARGED' => 'Suraliment?? par SuiteCRM',
    'LBL_SUITE_POWERED_BY' => 'Propuls?? par SugarCRM',
    'LBL_SUITE_DESC1' => 'SuiteCRM a ??t?? ??crit et mont?? par <a href="https://salesagility.com"> SalesAgility</a>.  Le programme est fourni tel quel, sans garantie.  Sous licence AGPLv3.',
    'LBL_SUITE_DESC2' => 'Ce programme est un logiciel libre; vous pouvez le redistribuer et / ou le modifier selon les termes de la GNU Affero General Public License version 3 publi??e par Free Software Foundation, y compris l\'autorisation suppl??mentaire indiqu?? dans l\'en-t??te de code source.',
    'LBL_SUITE_DESC3' => 'SuiteCRM est une marque d??pos??e de SalesAgility Ltd. Tous les autres noms de produits et de la soci??t?? peuvent ??tre des marques d??pos??es des soci??t??s respectives auxquels ils sont associ??s.',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'R??initialiser le Mot de passe',
    'LBL_SEND_CONFIRM_OPT_IN_EMAIL' => 'Envoyer le mail de confirmation d\'activation',
    'LBL_CONFIRM_OPT_IN_ONLY_FOR_PERSON' => 'Confirmer l\'autorisation d\'envoi de messages uniquement pour les comptes/contacts/pistes/prospects',
    'LBL_CONFIRM_OPT_IN_IS_DISABLED' => 'L\'envoi de courriels de confirmation d\'OptIn est d??sactiv??, activez-le dans les param??tres de courriel ou contactez votre administrateur.',
    'LBL_CONTACT_HAS_NO_PRIMARY_EMAIL' => 'Impossible d\'envoyer le courriel de confirmation d\'OptIn car le contact n\'a aucune adresse courriel principale',
    'LBL_CONFIRM_EMAIL_SENDING_FAILED' => 'Erreur d\'envoi du courriel de confirmation d\'OptIn',
    'LBL_CONFIRM_EMAIL_SENT' => 'Courriel de confirmation d\'OptIn envoy?? avec succ??s',

    //List View Column Selector Modal
    'LBL_COLUMN_SELECTOR_DISPLAYED_COLS' => 'AFFICH??S',
    'LBL_COLUMN_SELECTOR_HIDDEN_COLS' => 'MASQUER',
    'LBL_COLUMN_SELECTOR_CLOSE_BUTTON' => 'Fermer',
    'LBL_COLUMN_SELECTOR_SAVE_BUTTON' => 'Enregistrer les modifications',
    'LBL_COLUMN_SELECTOR_MODAL_TITLE' => 'Choisir les colonnes'

);

$app_list_strings['moduleList']['Library'] = 'Librairie';
$app_list_strings['moduleList']['EmailAddresses'] = 'Adresse ??lectronique';
$app_list_strings['project_priority_default'] = 'Moyenne';
$app_list_strings['project_priority_options'] = array(
    'High' => 'Haute',
    'Medium' => 'Moyenne',
    'Low' => 'Basse',
);

//GDPR lawful basis options
$app_list_strings['lawful_basis_dom'] = array(
    '' => '',
    'consent' => 'Consentement',
    'contract' => 'Contrat',
    'legal_obligation' => 'Obligation l??gale',
    'protection_of_interest' => 'Protection des int??r??ts',
    'public_interest' => 'Int??r??t public',
    'legitimate_interest' => 'Int??r??t l??gitime',
    'withdrawn' => 'Retir??',
);
//End GDPR lawful basis options

//GDPR lawful basis source options
$app_list_strings['lawful_basis_source_dom'] = array(
    '' => '',
    'website' => 'Site web',
    'phone' => 'T??l??phone',
    'given_to_user' => 'Donn?? ?? l???utilisateur',
    'email' => 'E-mail',
    'third_party' => 'Tierce partie',
);
//End GDPR lawful basis source options

$app_list_strings['moduleList']['KBDocuments'] = 'Base de connaissance';

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => 'ABU DHABI',
    'ADEN' => 'ADEN',
    'AFGHANISTAN' => 'AFGHANISTAN',
    'ALBANIA' => 'ALBANIE',
    'ALGERIA' => 'ALG??RIE',
    'AMERICAN SAMOA' => 'SAMOA AM??RICAINES',
    'ANDORRA' => 'ANDORRE',
    'ANGOLA' => 'ANGOLA',
    'ANTARCTICA' => 'ANTARCTIQUE',
    'ANTIGUA' => 'ANTIGUA-ET-BARBUDA',
    'ARGENTINA' => 'ARGENTINE',
    'ARMENIA' => 'ARM??NIE',
    'ARUBA' => 'ARUBA',
    'AUSTRALIA' => 'AUSTRALIE',
    'AUSTRIA' => 'AUTRICHE',
    'AZERBAIJAN' => 'AZERBA??DJAN',
    'BAHAMAS' => 'BAHAMAS',
    'BAHRAIN' => 'BAHRE??N',
    'BANGLADESH' => 'BANGLADESH',
    'BARBADOS' => 'BARBADE',
    'BELARUS' => 'B??LARUS',
    'BELGIUM' => 'BELGIQUE',
    'BELIZE' => 'BELIZE',
    'BENIN' => 'B??NIN',
    'BERMUDA' => 'BERMUDES',
    'BHUTAN' => 'BHOUTAN',
    'BOLIVIA' => 'BOLIVIE',
    'BOSNIA' => 'BOSNIE-HERZ??GOVINE',
    'BOTSWANA' => 'BOTSWANA',
    'BOUVET ISLAND' => 'BOUVET, ??LE',
    'BRAZIL' => 'BR??SIL',
    'BRITISH ANTARCTICA TERRITORY' => 'TERRITOIRE BRITANNIQUE DE L\'ANTARCTIQUE',
    'BRITISH INDIAN OCEAN TERRITORY' => 'OC??AN INDIEN, TERRITOIRE BRITANNIQUE',
    'BRITISH VIRGIN ISLANDS' => '??LES VIERGES BRITANNIQUES',
    'BRITISH WEST INDIES' => 'ANTILLES BRITANNIQUES',
    'BRUNEI' => 'BRUN??I DARUSSALAM',
    'BULGARIA' => 'BULGARIE',
    'BURKINA FASO' => 'BURKINA FASO',
    'BURUNDI' => 'BURUNDI',
    'CAMBODIA' => 'CAMBODGE',
    'CAMEROON' => 'CAMEROUN',
    'CANADA' => 'CANADA',
    'CANAL ZONE' => 'Fuseaux horaires',
    'CANARY ISLAND' => '??LES CANARIES',
    'CAPE VERDI ISLANDS' => 'CAP-VERT',
    'CAYMAN ISLANDS' => 'CA??MANES, ??LES',
    'CHAD' => 'TCHAD',
    'CHANNEL ISLAND UK' => '??LES ANGLO-NORMANDES GB',
    'CHILE' => 'CHILI',
    'CHINA' => 'CHINE',
    'CHRISTMAS ISLAND' => 'CHRISTMAS, ??LE',
    'COCOS (KEELING) ISLAND' => 'COCOS (KEELING), ??LES',
    'COLOMBIA' => 'COLOMBIE',
    'COMORO ISLANDS' => 'COMORES',
    'CONGO' => 'CONGO',
    'CONGO KINSHASA' => 'CONGO, R??PUBLIQUE D??MOCRATIQUE DU',
    'COOK ISLANDS' => 'COOK, ??LES',
    'COSTA RICA' => 'COSTA RICA',
    'CROATIA' => 'CROATIE',
    'CUBA' => 'CUBA',
    'CURACAO' => 'CURACAO',
    'CYPRUS' => 'CHYPRE',
    'CZECH REPUBLIC' => 'TCH??QUE, R??PUBLIQUE',
    'DAHOMEY' => 'DAHOMEY',
    'DENMARK' => 'DANEMARK',
    'DJIBOUTI' => 'DJIBOUTI',
    'DOMINICA' => 'DOMINIQUE',
    'DOMINICAN REPUBLIC' => 'DOMINICAINE, R??PUBLIQUE',
    'DUBAI' => 'DUBAI',
    'ECUADOR' => '??QUATEUR',
    'EGYPT' => '??GYPTE',
    'EL SALVADOR' => 'Salvador',
    'EQUATORIAL GUINEA' => 'GUIN??E ??QUATORIALE',
    'ESTONIA' => 'ESTONIE',
    'ETHIOPIA' => '??THIOPIE',
    'FAEROE ISLANDS' => 'F??RO??, ??LES',
    'FALKLAND ISLANDS' => 'FALKLAND, ??LES (MALVINAS)',
    'FIJI' => 'FIDJI',
    'FINLAND' => 'FINLANDE',
    'FRANCE' => 'France',
    'FRENCH GUIANA' => 'GUYANE FRAN??AISE',
    'FRENCH POLYNESIA' => 'POLYN??SIE FRAN??AISE',
    'GABON' => 'Gabon',
    'GAMBIA' => 'GAMBIE',
    'GEORGIA' => 'G??ORGIE',
    'GERMANY' => 'ALLEMAGNE',
    'GHANA' => 'GHANA',
    'GIBRALTAR' => 'GIBRALTAR',
    'GREECE' => 'GR??CE',
    'GREENLAND' => 'GROENLAND',
    'GUADELOUPE' => 'GUADELOUPE',
    'GUAM' => 'GUAM',
    'GUATEMALA' => 'GUATEMALA',
    'GUINEA' => 'GUIN??E',
    'GUYANA' => 'GUYANE',
    'HAITI' => 'HA??TI',
    'HONDURAS' => 'HONDURAS',
    'HONG KONG' => 'HONG-KONG',
    'HUNGARY' => 'HONGRIE',
    'ICELAND' => 'ISLANDE',
    'IFNI' => 'IFNI',
    'INDIA' => 'INDE',
    'INDONESIA' => 'INDON??SIE',
    'IRAN' => 'IRAN, R??PUBLIQUE ISLAMIQUE',
    'IRAQ' => 'IRAK',
    'IRELAND' => 'IRLANDE',
    'ISRAEL' => 'ISRA??L',
    'ITALY' => 'ITALIE',
    'IVORY COAST' => 'C??TE D IVOIRE',
    'JAMAICA' => 'JAMA??QUE',
    'JAPAN' => 'JAPON',
    'JORDAN' => 'JORDANIE',
    'KAZAKHSTAN' => 'KASAKHSTAN',
    'KENYA' => 'KENYA',
    'KOREA' => 'COR??E, R??PUBLIQUE POPULAIRE D??MOCRATIQUE DE',
    'KOREA, SOUTH' => 'COR??E, R??PUBLIQUE DE',
    'KUWAIT' => 'KOWE??T',
    'KYRGYZSTAN' => 'KIRGHIZISTAN',
    'LAOS' => 'LAOS',
    'LATVIA' => 'LETTONIE',
    'LEBANON' => 'LIBAN',
    'LEEWARD ISLANDS' => '??LES SOUS-LE-VENT',
    'LESOTHO' => 'LESOTHO',
    'LIBYA' => 'LIBYENNE, JAMAHIRIYA ARABE',
    'LIECHTENSTEIN' => 'LIECHTENSTEIN',
    'LITHUANIA' => 'LITUANIE',
    'LUXEMBOURG' => 'LUXEMBOURG',
    'MACAO' => 'MACAO',
    'MACEDONIA' => 'MAC??DOINE, EX-R??PUBLIQUE YOUGOSLAVE',
    'MADAGASCAR' => 'MADAGASCAR',
    'MALAWI' => 'MALAWI',
    'MALAYSIA' => 'MALAISIE',
    'MALDIVES' => 'MALDIVES',
    'MALI' => 'MALI',
    'MALTA' => 'MALTE',
    'MARTINIQUE' => 'MARTINIQUE',
    'MAURITANIA' => 'MAURITANIE',
    'MAURITIUS' => 'MAURICE',
    'MELANESIA' => 'M??LAN??SIE',
    'MEXICO' => 'MEXIQUE',
    'MOLDOVIA' => 'MOLDOVA, R??PUBLIQUE DE',
    'MONACO' => 'MONACO',
    'MONGOLIA' => 'MONGOLIE',
    'MOROCCO' => 'MAROC',
    'MOZAMBIQUE' => 'MOZAMBIQUE',
    'MYANAMAR' => 'MYANMAR',
    'NAMIBIA' => 'NAMIBIE',
    'NEPAL' => 'N??PAL',
    'NETHERLANDS' => 'PAYS-BAS',
    'NETHERLANDS ANTILLES' => 'ANTILLES N??ERLANDAISES',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'ZONE NEUTRE DES ANTILLES HOLLANDAISES',
    'NEW CALADONIA' => 'NOUVELLE-CAL??DONIE',
    'NEW HEBRIDES' => 'NOUVELLES-H??BRIDES',
    'NEW ZEALAND' => 'NOUVELLE-Z??LANDE',
    'NICARAGUA' => 'NICARAGUA',
    'NIGER' => 'NIGER',
    'NIGERIA' => 'NIG??RIA',
    'NORFOLK ISLAND' => 'NORFOLK, ??LE',
    'NORWAY' => 'NORV??GE',
    'OMAN' => 'OMAN',
    'OTHER' => 'AUTRE',
    'PACIFIC ISLAND' => 'ILES DU PACIFIQUE',
    'PAKISTAN' => 'PAKISTAN',
    'PANAMA' => 'PANAMA',
    'PAPUA NEW GUINEA' => 'PAPOUASIE-NOUVELLE-GUIN??E',
    'PARAGUAY' => 'PARAGUAY',
    'PERU' => 'P??ROU',
    'PHILIPPINES' => 'PHILIPPINES',
    'POLAND' => 'POLOGNE',
    'PORTUGAL' => 'PORTUGAL',
    'PORTUGUESE TIMOR' => 'TIMOR ORIENTAL',
    'PUERTO RICO' => 'PORTO RICO',
    'QATAR' => 'QATAR',
    'REPUBLIC OF BELARUS' => 'B??LARUS',
    'REPUBLIC OF SOUTH AFRICA' => 'AFRIQUE DU SUD',
    'REUNION' => 'R??UNION',
    'ROMANIA' => 'ROUMANIE',
    'RUSSIA' => 'RUSSIE',
    'RWANDA' => 'RWANDA',
    'RYUKYU ISLANDS' => '??LES RY??KY??',
    'SABAH' => 'SABAH',
    'SAN MARINO' => 'SAINT-MARIN',
    'SAUDI ARABIA' => 'ARABIE SAOUDITE',
    'SENEGAL' => 'S??N??GAL',
    'SERBIA' => 'SERBIE',
    'SEYCHELLES' => 'SEYCHELLES',
    'SIERRA LEONE' => 'SIERRA LEONE',
    'SINGAPORE' => 'SINGAPOUR',
    'SLOVAKIA' => 'SLOVAQUIE',
    'SLOVENIA' => 'SLOV??NIE',
    'SOMALILIAND' => 'SOMALIE',
    'SOUTH AFRICA' => 'AFRIQUE DU SUD',
    'SOUTH YEMEN' => 'Y??MEN DU SUD',
    'SPAIN' => 'ESPAGNE',
    'SPANISH SAHARA' => 'SAHARA ESPAGNOL',
    'SRI LANKA' => 'SRI LANKA',
    'ST. KITTS AND NEVIS' => 'SAINT-KITTS-ET-NEVIS',
    'ST. LUCIA' => 'SAINTE-LUCIE',
    'SUDAN' => 'SOUDAN',
    'SURINAM' => 'SURINAME',
    'SW AFRICA' => 'NAMIBIE',
    'SWAZILAND' => 'SWAZILAND',
    'SWEDEN' => 'SU??DE',
    'SWITZERLAND' => 'SUISSE',
    'SYRIA' => 'SYRIENNE, R??PUBLIQUE ARABE',
    'TAIWAN' => 'TA??WAN, PROVINCE DE CHINE',
    'TAJIKISTAN' => 'TADJIKISTAN',
    'TANZANIA' => 'TANZANIE, R??PUBLIQUE-UNIE DE',
    'THAILAND' => 'THA??LANDE',
    'TONGA' => 'TONGA',
    'TRINIDAD' => 'TRINIT??-ET-TOBAGO',
    'TUNISIA' => 'TUNISIE',
    'TURKEY' => 'TURQUIE',
    'UGANDA' => 'OUGANDA',
    'UKRAINE' => 'UKRAINE',
    'UNITED ARAB EMIRATES' => '??MIRATS ARABES UNIS',
    'UNITED KINGDOM' => 'ROYAUME-UNI',
    'URUGUAY' => 'URUGUAY',
    'US PACIFIC ISLAND' => 'ILES DU PACIFIQUE (US)',
    'US VIRGIN ISLANDS' => '??LES VIERGES DES ??TATS-UNIS',
    'USA' => '??TATS-UNIS',
    'UZBEKISTAN' => 'OUZB??KISTAN',
    'VANUATU' => 'VANUATU',
    'VATICAN CITY' => 'SAINT-SI??GE (??TAT DE LA CIT?? DU VATICAN)',
    'VENEZUELA' => 'VENEZUELA',
    'VIETNAM' => 'VIET NAM',
    'WAKE ISLAND' => '??LE DE WAKE',
    'WEST INDIES' => 'WEST INDIES',
    'WESTERN SAHARA' => 'SAHARA OCCIDENTAL',
    'YEMEN' => 'Y??MEN',
    'ZAIRE' => 'REP. DEM. CONGO',
    'ZAMBIA' => 'ZAMBIE',
    'ZIMBABWE' => 'ZIMBABWE',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'BIG-5 (Ta??wan et Hong Kong)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'Cp1251 (MS Cyrillique)',
    'CP1252' => 'CP1252 (MS Europe occidentale et ??tats-Unis)',
    'EUC-CN' => 'EUC-CN (GB2312 Chinois simplifi??)',
    'EUC-JP' => 'EUC-JP (Japonais Unix)',
    'EUC-KR' => 'EUC-KR (Cor??e)',
    'EUC-TW' => 'EUC-TW (Taiwanais)',
    'ISO-2022-JP' => 'ISO-2022-JP (japonais)',
    'ISO-2022-KR' => 'ISO-2022-KR (Cor??en)',
    'ISO-8859-1' => 'ISO-8859-1 (Europe occidentale et ??tats-Unis)',
    'ISO-8859-2' => 'ISO-8859-2 (Europe centrale et orientale)',
    'ISO-8859-3' => 'ISO-8859-3 (Latin 3)',
    'ISO-8859-4' => 'ISO-8859-4 (Latin 4)',
    'ISO-8859-5' => 'ISO-8859-5 (Cyrillique)',
    'ISO-8859-6' => 'ISO-8859-6 (Arabe)',
    'ISO-8859-7' => 'ISO-8859-7 (Grec)',
    'ISO-8859-8' => 'ISO-8859-8 (H??breu)',
    'ISO-8859-9' => 'ISO-8859-9 (Latin 5)',
    'ISO-8859-10' => 'ISO-8859-10 (Latin 6)',
    'ISO-8859-13' => 'ISO-8859-13 (7 Latin)',
    'ISO-8859-14' => 'ISO-8859-14 (Latin 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Latin 9)',
    'KOI8-R' => 'KOI8-R (Russe Cyrillique)',
    'KOI8-U' => 'KOI8-U (Cyrillique Ukrainien)',
    'SJIS' => 'SJIS (MS japonais)',
    'UTF-8' => 'UTF-8',
);

$app_list_strings['timezone_dom'] = array(

    'Africa/Algiers' => 'Afrique/Alger',
    'Africa/Luanda' => 'Afrique/Luanda',
    'Africa/Porto-Novo' => 'Afrique / Porto-Novo',
    'Africa/Gaborone' => 'Afrique / Gaborone',
    'Africa/Ouagadougou' => 'Afrique / Ouagadougou',
    'Africa/Bujumbura' => 'Afrique / Bujumbura',
    'Africa/Douala' => 'Afrique/Douala',
    'Atlantic/Cape_Verde' => 'Atlantique/Cap-Vert',
    'Africa/Bangui' => 'Afrique/Bangui',
    'Africa/Ndjamena' => 'Afrique/Ndjamena',
    'Indian/Comoro' => 'Oc??an Indien/Comorres',
    'Africa/Kinshasa' => 'Afrique/Kinshasa',
    'Africa/Lubumbashi' => 'Afrique / Lubumbashi',
    'Africa/Brazzaville' => 'Afrique/Brazzaville',
    'Africa/Abidjan' => 'Afrique/Abidjan',
    'Africa/Djibouti' => 'Afrique/Djibouti',
    'Africa/Cairo' => 'Afrique/Le Caire',
    'Africa/Malabo' => 'Afrique/Malabo',
    'Africa/Asmera' => 'Afrique/Asmera',
    'Africa/Addis_Ababa' => 'Afrique/Addis-Abeba',
    'Africa/Libreville' => 'Afrique/Libreville',
    'Africa/Banjul' => 'Afrique/Banjul',
    'Africa/Accra' => 'Afrique/Accra',
    'Africa/Conakry' => 'Afrique/Conakry',
    'Africa/Bissau' => 'Afrique/Bissau',
    'Africa/Nairobi' => 'Afrique/Nairobi',
    'Africa/Maseru' => 'Afrique / Maseru',
    'Africa/Monrovia' => 'Afrique / Monrovia',
    'Africa/Tripoli' => 'Afrique/Tripoli',
    'Indian/Antananarivo' => 'Oc??an Indien/Antananarivo',
    'Africa/Blantyre' => 'Afrique / Blantyre',
    'Africa/Bamako' => 'Afrique/Bamako',
    'Africa/Nouakchott' => 'Afrique / Nouakchott',
    'Indian/Mauritius' => 'Oc??an Indien/Maurice',
    'Indian/Mayotte' => 'Oc??an Indien/Mayotte',
    'Africa/Casablanca' => 'Afrique/Casablanca',
    'Africa/El_Aaiun' => 'Afrique / El Aaiun',
    'Africa/Maputo' => 'Afrique / Maputo',
    'Africa/Windhoek' => 'Afrique / Windhoek',
    'Africa/Niamey' => 'Afrique/Niamey',
    'Africa/Lagos' => 'Afrique/Lagos',
    'Indian/Reunion' => 'Oc??an Indien/La R??union',
    'Africa/Kigali' => 'Afrique/Kigali',
    'Atlantic/St_Helena' => 'Atlantique/Sainte-H??l??ne',
    'Africa/Sao_Tome' => 'Afrique/Sao Tom??',
    'Africa/Dakar' => 'Afrique/Dakar',
    'Indian/Mahe' => 'Inde/Mah??',
    'Africa/Freetown' => 'Afrique/Libreville',
    'Africa/Mogadishu' => 'Afrique/Mogadicio',
    'Africa/Johannesburg' => 'Afrique/Johannesburg',
    'Africa/Khartoum' => 'Afrique / Khartoum',
    'Africa/Mbabane' => 'Afrique / Mbabane',
    'Africa/Dar_es_Salaam' => 'Afrique/Dar es Salaam',
    'Africa/Lome' => 'Afrique/Lom??',
    'Africa/Tunis' => 'Afrique/Tunis',
    'Africa/Kampala' => 'Afrique / Kampala',
    'Africa/Lusaka' => 'Afrique / Lusaka',
    'Africa/Harare' => 'Afrique/Harar??',
    'Antarctica/Casey' => 'Antartique / Casey',
    'Antarctica/Davis' => 'Antartique / Davis',
    'Antarctica/Mawson' => 'Antartique / Mawson',
    'Indian/Kerguelen' => 'Inde / Kerguelen',
    'Antarctica/DumontDUrville' => 'Antartique/DumontDUrville',
    'Antarctica/Syowa' => 'Antartique / Syowa',
    'Antarctica/Vostok' => 'Antartique / Vostok',
    'Antarctica/Rothera' => 'Antartique / Rothera',
    'Antarctica/Palmer' => 'Antartique / Palmer',
    'Antarctica/McMurdo' => 'Antartique / McMurdo',
    'Asia/Kabul' => 'Asie / Kabul',
    'Asia/Yerevan' => 'Asie /Yerevan',
    'Asia/Baku' => 'Asie/Baku',
    'Asia/Bahrain' => 'Asie/Bahrain',
    'Asia/Dhaka' => 'Asie /Dhaka',
    'Asia/Thimphu' => 'Asie /Thimphu',
    'Indian/Chagos' => 'Inde/Chagos',
    'Asia/Brunei' => 'Asie/Brunei',
    'Asia/Rangoon' => 'Asie /Rangoon',
    'Asia/Phnom_Penh' => 'Asie /Phnom Penh',
    'Asia/Beijing' => 'Asie/P??kin',
    'Asia/Harbin' => 'Asie /Harbin',
    'Asia/Shanghai' => 'Asie/Shanghai',
    'Asia/Chongqing' => 'Asie /Chongqing',
    'Asia/Urumqi' => 'Asie /Urumqi',
    'Asia/Kashgar' => 'Asie/Kashgar',
    'Asia/Hong_Kong' => 'Asie/Hong Kong',
    'Asia/Taipei' => 'Asie/Taipei',
    'Asia/Macau' => 'Asie/Macao',
    'Asia/Nicosia' => 'Asie/Nicosie',
    'Asia/Tbilisi' => 'Asie/Tbilisi',
    'Asia/Dili' => 'Asie/Dili',
    'Asia/Calcutta' => 'Asie/Calcutta',
    'Asia/Jakarta' => 'Asie/Jakarta',
    'Asia/Pontianak' => 'Asie/Pontianak',
    'Asia/Makassar' => 'Asie/Makassar',
    'Asia/Jayapura' => 'Asie/Jayapura',
    'Asia/Tehran' => 'Asie/T??h??ran',
    'Asia/Baghdad' => 'Asie/Bagdad',
    'Asia/Jerusalem' => 'Asie/J??rusalem',
    'Asia/Tokyo' => 'Asie/Tokyo',
    'Asia/Amman' => 'Asie/Amman',
    'Asia/Almaty' => 'Asie/Almaty',
    'Asia/Qyzylorda' => 'Asie/Kyzylorda',
    'Asia/Aqtobe' => 'Asie/Aqtobe',
    'Asia/Aqtau' => 'Asie/Aqta??',
    'Asia/Oral' => 'Asie/Oral',
    'Asia/Bishkek' => 'Asie/Bishkek',
    'Asia/Seoul' => 'Asie/S??oul',
    'Asia/Pyongyang' => 'Asie/Pyongyang',
    'Asia/Kuwait' => 'Asie/Kuwait',
    'Asia/Vientiane' => 'Asie/Vientiane',
    'Asia/Beirut' => 'Asie/Beyrouth',
    'Asia/Kuala_Lumpur' => 'Asie/Kuala Lumpur',
    'Asia/Kuching' => 'Asie/Kuching',
    'Indian/Maldives' => 'Oc??an Indien/Les Maldives',
    'Asia/Hovd' => 'Asie/Hovd',
    'Asia/Ulaanbaatar' => 'Asie/Ulaanbaatar',
    'Asia/Choibalsan' => 'Asie/Choybalsan',
    'Asia/Katmandu' => 'Asie/Katmandu',
    'Asia/Muscat' => 'Asie/Muscat',
    'Asia/Karachi' => 'Asie/Karachi',
    'Asia/Gaza' => 'Asie/Gaza',
    'Asia/Manila' => 'Asie/Manille',
    'Asia/Qatar' => 'Asie/Qatar',
    'Asia/Riyadh' => 'Asie/Riyadh',
    'Asia/Singapore' => 'Asie/Singapour',
    'Asia/Colombo' => 'Asie/Colombo',
    'Asia/Damascus' => 'Asie/Damas',
    'Asia/Dushanbe' => 'Asie/Dushanbe',
    'Asia/Bangkok' => 'Asie/Bangkok',
    'Asia/Ashgabat' => 'Asie/Ashgabat',
    'Asia/Dubai' => 'Asie/Duba??',
    'Asia/Samarkand' => 'Asie/Samarkand',
    'Asia/Tashkent' => 'Asie/Tashkent',
    'Asia/Saigon' => 'Asie/Saigon',
    'Asia/Aden' => 'Asie/Aden',
    'Australia/Darwin' => 'Australie/Darwin',
    'Australia/Perth' => 'Australie / Perth',
    'Australia/Brisbane' => 'Australie / Brisbane',
    'Australia/Lindeman' => 'Australie / Lindeman',
    'Australia/Adelaide' => 'Australie / Adelaide',
    'Australia/Hobart' => 'Australie / Hobart',
    'Australia/Currie' => 'Australie / Currie',
    'Australia/Melbourne' => 'Australie / Melbourne',
    'Australia/Sydney' => 'Australie / Sydney',
    'Australia/Broken_Hill' => 'Australie / Broken Hill',
    'Indian/Christmas' => 'Inde/Christmas',
    'Pacific/Rarotonga' => 'Pacifique/Rarotonga',
    'Indian/Cocos' => 'Inde/Cocos',
    'Pacific/Fiji' => 'Pacifique/Fidji',
    'Pacific/Gambier' => 'Pacifique/Gambier',
    'Pacific/Marquesas' => 'Pacifique/Marquesas',
    'Pacific/Tahiti' => 'Pacifique/Tahiti',
    'Pacific/Guam' => 'Pacifique/Guam',
    'Pacific/Tarawa' => 'Pacifique/Tarawa',
    'Pacific/Enderbury' => 'Pacifique/Enderbury',
    'Pacific/Kiritimati' => 'Pacifique/Kiritimati',
    'Pacific/Saipan' => 'Pacifique/Saipan',
    'Pacific/Majuro' => 'Pacifique/Majuro',
    'Pacific/Kwajalein' => 'Pacifique/Kwajalein',
    'Pacific/Truk' => 'Pacifique/Truk',
    'Pacific/Pohnpei' => 'Pacifique/Ponape',
    'Pacific/Kosrae' => 'Pacifique/Kosrae',
    'Pacific/Nauru' => 'Pacifique/Nauru',
    'Pacific/Noumea' => 'Pacifique/Noumea',
    'Pacific/Auckland' => 'Pacifique/Auckland',
    'Pacific/Chatham' => 'Pacifique/Chatham',
    'Pacific/Niue' => 'Pacifique/Niue',
    'Pacific/Norfolk' => 'Pacifique/Norfolk',
    'Pacific/Palau' => 'Pacifique/Palau',
    'Pacific/Port_Moresby' => 'Pacifique/Port Moresby',
    'Pacific/Pitcairn' => 'Pacifique/Pitcairn',
    'Pacific/Pago_Pago' => 'Pacifique/Pago Pago',
    'Pacific/Apia' => 'Pacifique/Apia',
    'Pacific/Guadalcanal' => 'Pacifique/Guadalcanal',
    'Pacific/Fakaofo' => 'Pacifique/Fakaofo',
    'Pacific/Tongatapu' => 'Pacifique/Tongatapu',
    'Pacific/Funafuti' => 'Pacifique/Funafuti',
    'Pacific/Johnston' => 'Pacifique/Johnston',
    'Pacific/Midway' => 'Pacifique/Midway',
    'Pacific/Wake' => 'Pacifique/Wake',
    'Pacific/Efate' => 'Pacifique/Efate',
    'Pacific/Wallis' => 'Pacifique/Wallis',
    'Europe/London' => 'Europe/Londres',
    'Europe/Dublin' => 'Europe/Dublin',
    'WET' => 'WET',
    'CET' => 'CET',
    'MET' => 'MET',
    'EET' => 'EET',
    'Europe/Tirane' => 'Europe/Tirana',
    'Europe/Andorra' => 'Europe/Andorre',
    'Europe/Vienna' => 'Europe/Vienne',
    'Europe/Minsk' => 'Europe/Minsk',
    'Europe/Brussels' => 'Europe/Bruxelles',
    'Europe/Sofia' => 'Europe/Sofia',
    'Europe/Prague' => 'Europe/Prague',
    'Europe/Copenhagen' => 'Europe/Copenhague',
    'Atlantic/Faeroe' => 'Atlantique/F??ro??',
    'America/Danmarkshavn' => 'Am??rique/Danmarkshavn',
    'America/Scoresbysund' => 'Am??rique/Scoresbysund',
    'America/Godthab' => 'Am??rique/Godthab',
    'America/Thule' => 'Am??rique/Thule',
    'Europe/Tallinn' => 'Europe/Tallinn',
    'Europe/Helsinki' => 'Europe/Helsinki',
    'Europe/Paris' => 'Europe/Paris',
    'Europe/Berlin' => 'Europe/Berlin',
    'Europe/Gibraltar' => 'Europe/Gibraltar',
    'Europe/Athens' => 'Europe/Ath??nes',
    'Europe/Budapest' => 'Europe/Budapest',
    'Atlantic/Reykjavik' => 'Atlantique/Reykjavik',
    'Europe/Rome' => 'Europe/Rome',
    'Europe/Riga' => 'Europe/Riga',
    'Europe/Vaduz' => 'Europe/Vaduz',
    'Europe/Vilnius' => 'Europe/Vilnius',
    'Europe/Luxembourg' => 'Europe/Luxembourg',
    'Europe/Malta' => 'Europe/Malte',
    'Europe/Chisinau' => 'Europe/Chi??in??u',
    'Europe/Monaco' => 'Europe/Monaco',
    'Europe/Amsterdam' => 'Europe/Amsterdam',
    'Europe/Oslo' => 'Europe/Oslo',
    'Europe/Warsaw' => 'Europe/Varsovie',
    'Europe/Lisbon' => 'Europe/Lisbone',
    'Atlantic/Azores' => 'Atlantique/A??ores',
    'Atlantic/Madeira' => 'Atlantique/Mad??re',
    'Europe/Bucharest' => 'Europe/Bucarest',
    'Europe/Kaliningrad' => 'Europe/Kaliningrad',
    'Europe/Moscow' => 'Europe/Moscou',
    'Europe/Samara' => 'Europe/Samara',
    'Asia/Yekaterinburg' => 'Asie/Yekaterinburg',
    'Asia/Omsk' => 'Asie/Omsk',
    'Asia/Novosibirsk' => 'Asie/Novosibirsk',
    'Asia/Krasnoyarsk' => 'Asie/Krasnoyarsk',
    'Asia/Irkutsk' => 'Asie/Irkutsk',
    'Asia/Yakutsk' => 'Asie/Yakutsk',
    'Asia/Vladivostok' => 'Asie/Vladivostok',
    'Asia/Sakhalin' => 'Asie/Sakhalin',
    'Asia/Magadan' => 'Asie/Magadan',
    'Asia/Kamchatka' => 'Asie/Kamchatka',
    'Asia/Anadyr' => 'Asie/Anadyr',
    'Europe/Belgrade' => 'Europe/Belgrade',
    'Europe/Madrid' => 'Europe/Madrid',
    'Africa/Ceuta' => 'Afrique / Ceuta',
    'Atlantic/Canary' => 'Atlantique/Canaries',
    'Europe/Stockholm' => 'Europe/Stockholm',
    'Europe/Zurich' => 'Europe/Zurich',
    'Europe/Istanbul' => 'Europe/Istanbul',
    'Europe/Kiev' => 'Europe/Kiev',
    'Europe/Uzhgorod' => 'Europe/Oujhorod',
    'Europe/Zaporozhye' => 'Europe/Zaporijia',
    'Europe/Simferopol' => 'Europe/Simferopol',
    'America/New_York' => 'Am??rique / New York',
    'America/Chicago' => 'Am??rique / Chicago',
    'America/North_Dakota/Center' => 'Am??rique/Dakota du Nord/Centre',
    'America/Denver' => 'Am??rique / Denver',
    'America/Los_Angeles' => 'Am??rique / Los Angeles',
    'America/Juneau' => 'Am??rique / Juneau',
    'America/Yakutat' => 'Am??rique / Yakutat',
    'America/Anchorage' => 'Am??rique / Anchorage',
    'America/Nome' => 'Am??rique/Nome',
    'America/Adak' => 'Am??rique/Adak',
    'Pacific/Honolulu' => 'Pacifique/Honolulu',
    'America/Phoenix' => 'Am??rique / Phoenix',
    'America/Boise' => 'Am??rique/Boise',
    'America/Indiana/Indianapolis' => 'Am??rique/Indiana/Indianapolis',
    'America/Indiana/Marengo' => 'Am??rique/Indiana/Marengo',
    'America/Indiana/Knox' => 'Am??rique/Indiana/Knox',
    'America/Indiana/Vevay' => 'Am??rique/Indiana/Vevay',
    'America/Kentucky/Louisville' => 'Am??rique/Kentucky/Louisville',
    'America/Kentucky/Monticello' => 'Am??rique/Kentucky/Monticello',
    'America/Detroit' => 'Am??rique/D??troit',
    'America/Menominee' => 'Am??rique/Menominee',
    'America/St_Johns' => 'Am??rique/St. Johns',
    'America/Goose_Bay' => 'Am??rique/Goose Bay',
    'America/Halifax' => 'Am??rique/Halifax',
    'America/Glace_Bay' => 'Am??rique/Glace Bay',
    'America/Montreal' => 'Am??rique/Montr??al',
    'America/Toronto' => 'Am??rique/Toronto',
    'America/Thunder_Bay' => 'Am??rique/Thunder Bay',
    'America/Nipigon' => 'Am??rique/Nipigon',
    'America/Rainy_River' => 'Am??rique/Rainy River',
    'America/Winnipeg' => 'Am??rique/Winnipeg',
    'America/Regina' => 'Am??rique/Regina',
    'America/Swift_Current' => 'Am??rique/Swift Current',
    'America/Edmonton' => 'Am??rique/Edmonton',
    'America/Vancouver' => 'Am??rique / Vancouver',
    'America/Dawson_Creek' => 'Am??rique/Dawson Creek',
    'America/Pangnirtung' => 'Am??rique/Pangnirtung',
    'America/Iqaluit' => 'Am??rique/Iqaluit',
    'America/Coral_Harbour' => 'Am??rique/Coral Harbour',
    'America/Rankin_Inlet' => 'Am??rique/Rankin Inlet',
    'America/Cambridge_Bay' => 'Am??rique/Cambridge Bay',
    'America/Yellowknife' => 'Am??rique/Yellowknife',
    'America/Inuvik' => 'Am??rique/Inuvik',
    'America/Whitehorse' => 'Am??rique/Whitehorse',
    'America/Dawson' => 'Am??rique/Dawson',
    'America/Cancun' => 'Am??rique/Cancun',
    'America/Merida' => 'Am??rique/Merida',
    'America/Monterrey' => 'Am??rique/Monterrey',
    'America/Mexico_City' => 'Am??rique/Mexique ville',
    'America/Chihuahua' => 'Am??rique/Chihuahua',
    'America/Hermosillo' => 'Am??rique/Hermosillo',
    'America/Mazatlan' => 'Am??rique/Mazatlan',
    'America/Tijuana' => 'Am??rique/Tijuana',
    'America/Anguilla' => 'Am??rique/Anguilla',
    'America/Antigua' => 'Am??rique/Antigua',
    'America/Nassau' => 'Am??rique/Nassau',
    'America/Barbados' => 'Am??rique/Barbados',
    'America/Belize' => 'Am??rique/B??lize',
    'Atlantic/Bermuda' => 'Atlantique/Bermudes',
    'America/Cayman' => 'Am??rique/Cayman',
    'America/Costa_Rica' => 'Am??rique/Costa Rica',
    'America/Havana' => 'Am??rique/La Havane',
    'America/Dominica' => 'Am??rique/Dominica',
    'America/Santo_Domingo' => 'Am??rique/Saint-Domingue',
    'America/El_Salvador' => 'Am??rique/El Salvador',
    'America/Grenada' => 'Am??rique/Grenada',
    'America/Guadeloupe' => 'Am??rique/Guadeloupe',
    'America/Guatemala' => 'Am??rique/Guatemala',
    'America/Port-au-Prince' => 'Am??rique/Port-au-Prince',
    'America/Tegucigalpa' => 'Am??rique/Tegucigalpa',
    'America/Jamaica' => 'Am??rique / Jama??que',
    'America/Martinique' => 'Am??rique/Martinique',
    'America/Montserrat' => 'Am??rique/Montserrat',
    'America/Managua' => 'Am??rique/Managua',
    'America/Panama' => 'Am??rique/Panama',
    'America/Puerto_Rico' => 'Am??rique/Puerto Rico',
    'America/St_Kitts' => 'Am??rique/St Kitts',
    'America/St_Lucia' => 'Am??rique/Ste Lucia',
    'America/Miquelon' => 'Am??rique/Miquelon',
    'America/St_Vincent' => 'Am??rique/Saint-Vincent',
    'America/Grand_Turk' => 'Am??rique/Grand Turk',
    'America/Tortola' => 'Am??rique/Tortola',
    'America/St_Thomas' => 'Am??rique/St. Thomas',
    'America/Argentina/Buenos_Aires' => 'Am??rique/Argentine/Buenos Aires',
    'America/Argentina/Cordoba' => 'Am??rique/Argentine/Cordoba',
    'America/Argentina/Tucuman' => 'Am??rique/Argentine/Tucuman',
    'America/Argentina/La_Rioja' => 'Am??rique/Argentine/La_Rioja',
    'America/Argentina/San_Juan' => 'Am??rique/Argentine/San Juan',
    'America/Argentina/Jujuy' => 'Am??rique/Argentine/Jujuy',
    'America/Argentina/Catamarca' => 'Am??rique/Argentine/Catamarca',
    'America/Argentina/Mendoza' => 'Am??rique/Argentine/Mendoza',
    'America/Argentina/Rio_Gallegos' => 'Am??rique/Argentine/Rio Gallegos',
    'America/Argentina/Ushuaia' => 'Am??rique/Argentine/Ushua??a',
    'America/Aruba' => 'Am??rique/Aruba',
    'America/La_Paz' => 'Am??rique/La Paz',
    'America/Noronha' => 'Am??rique/Noronha',
    'America/Belem' => 'Am??rique/Belem',
    'America/Fortaleza' => 'Am??rique/Fortaleza',
    'America/Recife' => 'Am??rique/Recife',
    'America/Araguaina' => 'Am??rique/Araguaina',
    'America/Maceio' => 'Am??rique/Maceio',
    'America/Bahia' => 'Am??rique/Bahia',
    'America/Sao_Paulo' => 'Am??rique/S??o Paulo',
    'America/Campo_Grande' => 'Am??rique/Campo Grande',
    'America/Cuiaba' => 'Am??rique/Cuiaba',
    'America/Porto_Velho' => 'Am??rique/Porto Velho',
    'America/Boa_Vista' => 'Am??rique/Boa Vista',
    'America/Manaus' => 'Am??rique/Manaus',
    'America/Eirunepe' => 'Am??rique/Eirunepe',
    'America/Rio_Branco' => 'Am??rique/Rio Branco',
    'America/Santiago' => 'Am??rique/Santiago',
    'Pacific/Easter' => 'Pacifique/Easter',
    'America/Bogota' => 'Am??rique/Bogota',
    'America/Curacao' => 'Am??rique/Curacao',
    'America/Guayaquil' => 'Am??rique/Guayaquil',
    'Pacific/Galapagos' => 'Pacifique/Galapagos',
    'Atlantic/Stanley' => 'Atlantique/Stanley',
    'America/Cayenne' => 'Am??rique / Cayenne',
    'America/Guyana' => 'Am??rique/Guyana',
    'America/Asuncion' => 'Am??rique/Asuncion',
    'America/Lima' => 'Am??rique / Lima',
    'Atlantic/South_Georgia' => 'Atlantique/Georgie du Sud',
    'America/Paramaribo' => 'Am??rique/Paramaribo',
    'America/Port_of_Spain' => 'Am??rique/Port d\'Espagne',
    'America/Montevideo' => 'Am??rique/Montevideo',
    'America/Caracas' => 'Am??rique/Caracas',
);

$app_list_strings['eapm_list'] = array(
    'Sugar' => 'SuiteCRM',
    'WebEx' => 'WebEx',
    'GoToMeeting' => 'GoToMeeting',
    'IBMSmartCloud' => 'IBM SmartCloud',
    'Google' => 'Google Docs',
    'Box' => 'Box.net',
    'Facebook' => 'Facebook',
    'Twitter' => 'Twitter',
);
$app_list_strings['eapm_list_import'] = array(
    'Google' => 'Contacts Google',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Google Drive',
);
$app_list_strings['token_status'] = array(
    1 => 'Demande',
    2 => 'Acc??s',
    3 => 'Invalide',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'Campagne',
    'email' => 'E-mail',
    'event' => 'Ev??nement',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'Campagne',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'Campagne',
    'email' => 'E-mail',
    'event' => 'Ev??nement',
    'system' => 'Syst??me',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'Base de connaissance';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'KB - Cat??gories';
$app_list_strings['aok_status_list']['Draft'] = 'Brouillon';
$app_list_strings['aok_status_list']['Expired'] = 'P??rim??';
$app_list_strings['aok_status_list']['In_Review'] = 'En relecture';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Priv??e';
$app_list_strings['aok_status_list']['published_public'] = 'Public';

$app_list_strings['moduleList']['FP_events'] = '??v??nements';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Localisations';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Invit??';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'Pas invit??';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'A particip??';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'N\'a pas particip??';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Accept??';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Refus??';
$app_list_strings['fp_event_status_dom']['No Response'] = 'Pas de r??ponse';

$app_strings['LBL_STATUS_EVENT'] = 'Statut de l\'invitation';
$app_strings['LBL_ACCEPT_STATUS'] = 'Statut acceptation';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Page courante';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Liste Compl??te';
$app_strings['LBL_LISTVIEW_NONE'] = 'Aucun';

$app_list_strings['moduleList']['AOP_Case_Events'] = '??v??nements du Cas';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Mises ?? jour du cas';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '=== Veuillez r??pondre au-dessus de cette ligne ===';

//aop
$app_list_strings['case_state_default_key'] = 'Ouvrir';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'Ouvrir',
        'Closed' => 'Ferm??',
    );
$app_list_strings['case_status_default_key'] = 'Ouvrir_Nouveau';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'Nouveau',
        'Open_Assigned' => 'Assign??',
        'Closed_Closed' => 'Ferm??',
        'Open_Pending Input' => 'En attente',
        'Closed_Rejected' => 'Rejet??',
        'Closed_Duplicate' => 'Dupliquer',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'Utilisateur unique',
        'Account' => 'Compte utilisateur',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'Utiliser les param??tres AOP par d??faut',
    'singleUser' => 'Utilisateur unique',
    'roundRobin' => 'Round-Robin',
    'leastBusy' => 'Moins charg??',
    'random' => 'Al??atoire',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Rapports';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Crit??res du Rapport';
$app_list_strings['moduleList']['AOR_Charts'] = 'Graphique de rapport';
$app_list_strings['moduleList']['AOR_Fields'] = 'Champs du Rapport';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Rapports planifi??s';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Egal ??';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Diff??rent de';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Sup??rieur ??';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Inf??rieur ??';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Sup??rieur ou ??gal ??';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Inf??rieur ou ??gal ??';
$app_list_strings['aor_operator_list']['Contains'] = 'contient';
$app_list_strings['aor_operator_list']['Starts_With'] = 'commence par';
$app_list_strings['aor_operator_list']['Ends_With'] = 'Fini par';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'A-m-j';
$app_list_strings['aor_format_options']['m-d-Y'] = 'm-j-A';
$app_list_strings['aor_format_options']['d-m-Y'] = 'j-m-A';
$app_list_strings['aor_format_options']['Y/m/d'] = 'A/m/j';
$app_list_strings['aor_format_options']['m/d/Y'] = 'm/j/A';
$app_list_strings['aor_format_options']['d/m/Y'] = 'j/m/A';
$app_list_strings['aor_format_options']['Y.m.d'] = 'A.m.j';
$app_list_strings['aor_format_options']['m.d.Y'] = 'm.j.A';
$app_list_strings['aor_format_options']['d.m.Y'] = 'j.m.A';
$app_list_strings['aor_format_options']['Ymd'] = 'Amj';
$app_list_strings['aor_format_options']['Y-m'] = 'A-m';
$app_list_strings['aor_format_options']['Y'] = 'A';
$app_list_strings['aor_condition_operator_list']['And'] = 'et';
$app_list_strings['aor_condition_operator_list']['OR'] = 'OU';
$app_list_strings['aor_condition_type_list']['Value'] = 'Valeur';
$app_list_strings['aor_condition_type_list']['Field'] = 'Champ';
$app_list_strings['aor_condition_type_list']['Date'] = 'Date';
$app_list_strings['aor_condition_type_list']['Multi'] = 'Un sur';
$app_list_strings['aor_condition_type_list']['Period'] = 'P??riode';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Utilisateur courant';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'Minutes';
$app_list_strings['aor_date_type_list']['hour'] = 'Heures';
$app_list_strings['aor_date_type_list']['day'] = 'Jours';
$app_list_strings['aor_date_type_list']['week'] = 'Semaine(s)';
$app_list_strings['aor_date_type_list']['month'] = 'Mois';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Heures ouvr??es';
$app_list_strings['aor_date_options']['now'] = 'Maintenant';
$app_list_strings['aor_date_options']['field'] = 'Ce champ';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Croissant';
$app_list_strings['aor_sort_operator']['DESC'] = 'D??croissant';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'D??compte';
$app_list_strings['aor_function_list']['MIN'] = 'Minimum';
$app_list_strings['aor_function_list']['MAX'] = 'Maximum';
$app_list_strings['aor_function_list']['SUM'] = 'Total';
$app_list_strings['aor_function_list']['AVG'] = 'Moyenne';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Nombre';
$app_list_strings['aor_total_options']['SUM'] = 'Total';
$app_list_strings['aor_total_options']['AVG'] = 'Moyenne';
$app_list_strings['aor_chart_types']['bar'] = 'Histogramme';
$app_list_strings['aor_chart_types']['line'] = 'Graphique courbe';
$app_list_strings['aor_chart_types']['pie'] = 'Graphique en camembert';
$app_list_strings['aor_chart_types']['radar'] = 'Graphique en radar';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Barres empil??es';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Barres group??es';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Mensuel';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Hebdomadaire';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Quotidien';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Activ??';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'D??sactiv??';
$app_list_strings['aor_email_type_list']['Email Address'] = 'E-mail';
$app_list_strings['aor_email_type_list']['Specify User'] = 'Utilisateur';
$app_list_strings['aor_email_type_list']['Users'] = 'Utilisateurs';
$app_list_strings['aor_assign_options']['all'] = 'TOUS les utilisateurs';
$app_list_strings['aor_assign_options']['role'] = 'TOUS les utilisateurs de r??le';
$app_list_strings['aor_assign_options']['security_group'] = 'TOUS les utilisateurs du groupe de s??curit??';
$app_list_strings['date_time_period_list']['today'] = 'Aujourd???hui';
$app_list_strings['date_time_period_list']['yesterday'] = 'Hier';
$app_list_strings['date_time_period_list']['this_week'] = 'Cette semaine';
$app_list_strings['date_time_period_list']['last_week'] = 'Derni??re Semaine';
$app_list_strings['date_time_period_list']['last_month'] = 'Le mois dernier';
$app_list_strings['date_time_period_list']['this_month'] = 'Ce mois-ci';
$app_list_strings['date_time_period_list']['this_quarter'] = 'Ce trimestre';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Le trimestre dernier';
$app_list_strings['date_time_period_list']['this_year'] = 'Cette ann??e';
$app_list_strings['date_time_period_list']['last_year'] = 'Ann??e derni??re';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'le';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'le';
$app_strings['LBL_CRON_AT'] = '??';
$app_strings['LBL_CRON_RAW'] = 'Avanc??';
$app_strings['LBL_CRON_MIN'] = 'Min';
$app_strings['LBL_CRON_HOUR'] = 'Heure';
$app_strings['LBL_CRON_DAY'] = 'Jour';
$app_strings['LBL_CRON_MONTH'] = 'Mois';
$app_strings['LBL_CRON_DOW'] = 'Jour de la semaine';
$app_strings['LBL_CRON_DAILY'] = 'Quotidien';
$app_strings['LBL_CRON_WEEKLY'] = 'Hebdomadaire';
$app_strings['LBL_CRON_MONTHLY'] = 'Mensuel';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Contrats';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Factures';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF - mod??les';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Produits- cat??gories';
$app_list_strings['moduleList']['AOS_Products'] = 'Produits';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Lignes de produits';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Groupes de lignes produits';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Devis';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Analyste';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Concurrent';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Client';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Int??grateur';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Investisseur';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Partenaire';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Presse';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Prospect';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Revendeur';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Autre';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Brouillon';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'N??gociation';
$app_list_strings['quote_stage_dom']['Delivered'] = 'D??livr??';
$app_list_strings['quote_stage_dom']['On Hold'] = 'Suspendu';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Confirm??';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Clos Accept??';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Perdu';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Clos Abandonn??';
$app_list_strings['quote_term_dom']['Net 15'] = 'Net 15 jours';
$app_list_strings['quote_term_dom']['Net 30'] = 'Net 30 jours';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'Valid??';
$app_list_strings['approval_status_dom']['Not Approved'] = 'Non valid??';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7,5%';
$app_list_strings['vat_list']['17.5'] = '17,5%';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = 'Pourcent';
$app_list_strings['discount_list']['Amount'] = 'Montant';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Analyste';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Concurrent';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Client';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Int??grateur';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Investisseur';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Partenaire';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Presse';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Prospect';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Revendeur';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Autre';
$app_list_strings['invoice_status_dom']['Paid'] = 'Pay??';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'Non pay??';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'Annul??';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'Non factur??';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'Factur??';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'Ordinateurs portables';
$app_list_strings['product_category_dom']['Desktops'] = 'Ordinateurs de bureau';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'Bon';
$app_list_strings['product_type_dom']['Service'] = 'Service';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Devis';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Factures';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Contrats';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Devis';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Factures';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Contrats';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Comptes';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Contacts';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Prospects';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Non d??marr??';
$app_list_strings['contract_status_list']['In Progress'] = 'En cours';
$app_list_strings['contract_status_list']['Signed'] = 'Sign??';
$app_list_strings['contract_type_list']['Type'] = 'Type';
$app_strings['LBL_PRINT_AS_PDF'] = 'Imprimer en PDF';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Veuillez s??lectionner un Template';
$app_strings['LBL_NO_TEMPLATE'] = 'ERREUR\nAucun template trouv??\nVeuillez aller ?? la section PDF Templates et cr??ez en un';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'Flux d\'activit??';
$app_list_strings['moduleList']['AOW_Conditions'] = 'Crit??res du WorkFlow';
$app_list_strings['moduleList']['AOW_Processed'] = 'Analyse du processus';
$app_list_strings['moduleList']['AOW_Actions'] = 'Actions du WorkFlow';
$app_list_strings['aow_status_list']['Active'] = 'Actif';
$app_list_strings['aow_status_list']['Inactive'] = 'D??sactiv??';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Egal ??';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Diff??rent de';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Sup??rieur ??';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Inf??rieur ??';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Sup??rieur ou ??gal ??';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Inf??rieur ou ??gal ??';
$app_list_strings['aow_operator_list']['Contains'] = 'contient';
$app_list_strings['aow_operator_list']['Starts_With'] = 'commence par';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Fini par';
$app_list_strings['aow_operator_list']['is_null'] = 'Est nul';
$app_list_strings['aow_process_status_list']['Complete'] = 'Termin??e';
$app_list_strings['aow_process_status_list']['Running'] = 'En cours d\'ex??cution';
$app_list_strings['aow_process_status_list']['Pending'] = 'En attente';
$app_list_strings['aow_process_status_list']['Failed'] = 'Echec';
$app_list_strings['aow_condition_operator_list']['And'] = 'et';
$app_list_strings['aow_condition_operator_list']['OR'] = 'OU';
$app_list_strings['aow_condition_type_list']['Value'] = 'Valeur';
$app_list_strings['aow_condition_type_list']['Field'] = 'Champ';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Tout changement';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'Dans le groupe de s??curit??';
$app_list_strings['aow_condition_type_list']['Date'] = 'Date';
$app_list_strings['aow_condition_type_list']['Multi'] = 'Un sur';
$app_list_strings['aow_action_type_list']['Value'] = 'Valeur';
$app_list_strings['aow_action_type_list']['Field'] = 'Champ';
$app_list_strings['aow_action_type_list']['Date'] = 'Date';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'A tour de r??le';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Moins charg??';
$app_list_strings['aow_action_type_list']['Random'] = 'Al??atoire';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Valeur';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Champ';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'Minutes';
$app_list_strings['aow_date_type_list']['hour'] = 'Heures';
$app_list_strings['aow_date_type_list']['day'] = 'Jours';
$app_list_strings['aow_date_type_list']['week'] = 'Semaine(s)';
$app_list_strings['aow_date_type_list']['month'] = 'Mois';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Heures ouvr??es';
$app_list_strings['aow_date_options']['now'] = 'Maintenant';
$app_list_strings['aow_date_options']['today'] = 'Aujourd???hui';
$app_list_strings['aow_date_options']['field'] = 'Ce champ';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'TOUS les utilisateurs';
$app_list_strings['aow_assign_options']['role'] = 'TOUS les utilisateurs de r??le';
$app_list_strings['aow_assign_options']['security_group'] = 'TOUS les utilisateurs du groupe de s??curit??';
$app_list_strings['aow_email_type_list']['Email Address'] = 'E-mail';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Enregistrer l\'E-mail';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Champ li??';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Utilisateur';
$app_list_strings['aow_email_type_list']['Users'] = 'Utilisateurs';
$app_list_strings['aow_email_to_list']['to'] = 'A';
$app_list_strings['aow_email_to_list']['cc'] = 'Cc';
$app_list_strings['aow_email_to_list']['bcc'] = 'Cci';
$app_list_strings['aow_run_on_list']['All_Records'] = 'Tous les enregistrements';
$app_list_strings['aow_run_on_list']['New_Records'] = 'Nouveaux enregistrements';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Enregistrements modifi??s';
$app_list_strings['aow_run_when_list']['Always'] = '- toujours -';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Seulement ?? l\'enregistrement';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Seulement dans le planificateur';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Projets - mod??les';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Mod??les de t??ches';
$app_list_strings['relationship_type_list']['FS'] = 'Finaliser pour d??marrer';
$app_list_strings['relationship_type_list']['SS'] = 'D??marrer pour commencer';
$app_list_strings['duration_unit_dom']['Days'] = 'Jours';
$app_list_strings['duration_unit_dom']['Hours'] = 'Heures';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'Voir le Gantt';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = 'Voir le d??tail';
$app_strings['LBL_CREATE_PROJECT'] = 'Cr??er Projet';

//gmaps
$app_strings['LBL_MAP'] = 'Carte';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Longitude';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Latitude';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Status G??ocode';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Adresse';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Cartes';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Cartes - Marqueurs';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Cartes - zones';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Cartes - cache des adresses';

$app_list_strings['moduleList']['jjwp_Partners'] = 'Partenaires JJWP';

$app_list_strings['map_unit_type_list']['mi'] = 'Km';
$app_list_strings['map_unit_type_list']['km'] = 'Kilom??tres';

$app_list_strings['map_module_type_list']['Accounts'] = 'Comptes';
$app_list_strings['map_module_type_list']['Contacts'] = 'Contacts';
$app_list_strings['map_module_type_list']['Cases'] = 'Tickets';
$app_list_strings['map_module_type_list']['Leads'] = 'Prospects';
$app_list_strings['map_module_type_list']['Meetings'] = 'R??unions';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Affaires';
$app_list_strings['map_module_type_list']['Project'] = 'Projets';
$app_list_strings['map_module_type_list']['Prospects'] = 'Cibles';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Compte';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Contacts';
$app_list_strings['map_relate_type_list']['Cases'] = 'Tickets';
$app_list_strings['map_relate_type_list']['Leads'] = 'Prospect';
$app_list_strings['map_relate_type_list']['Meetings'] = 'R??union';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Affaires';
$app_list_strings['map_relate_type_list']['Project'] = 'Projets';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Cible';

$app_list_strings['marker_image_list']['accident'] = 'Accident';
$app_list_strings['marker_image_list']['administration'] = 'Administration';
$app_list_strings['marker_image_list']['agriculture'] = 'Agriculture';
$app_list_strings['marker_image_list']['aircraft_small'] = 'Petit Avion';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Avion Tourisme';
$app_list_strings['marker_image_list']['airport'] = 'A??roport';
$app_list_strings['marker_image_list']['amphitheater'] = 'Amphith????tre';
$app_list_strings['marker_image_list']['apartment'] = 'Appartement';
$app_list_strings['marker_image_list']['aquarium'] = 'Aquarium';
$app_list_strings['marker_image_list']['arch'] = 'Arche';
$app_list_strings['marker_image_list']['atm'] = 'DAB';
$app_list_strings['marker_image_list']['audio'] = 'Audio';
$app_list_strings['marker_image_list']['bank'] = 'Banque';
$app_list_strings['marker_image_list']['bank_euro'] = 'Banque Euro';
$app_list_strings['marker_image_list']['bank_pound'] = 'Banque Livre';
$app_list_strings['marker_image_list']['bar'] = 'Bar';
$app_list_strings['marker_image_list']['beach'] = 'Plage';
$app_list_strings['marker_image_list']['beautiful'] = 'Belle';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'Stationnement pour v??los';
$app_list_strings['marker_image_list']['big_city'] = 'Grande ville';
$app_list_strings['marker_image_list']['bridge'] = 'Pont';
$app_list_strings['marker_image_list']['bridge_modern'] = 'Pont moderne';
$app_list_strings['marker_image_list']['bus'] = 'Bus';
$app_list_strings['marker_image_list']['cable_car'] = 'T??l??ph??rique';
$app_list_strings['marker_image_list']['car'] = 'Voiture';
$app_list_strings['marker_image_list']['car_rental'] = 'Location voiture';
$app_list_strings['marker_image_list']['carrepair'] = 'Garage';
$app_list_strings['marker_image_list']['castle'] = 'Ch??teau';
$app_list_strings['marker_image_list']['cathedral'] = 'Cath??drale';
$app_list_strings['marker_image_list']['chapel'] = 'Chapelle';
$app_list_strings['marker_image_list']['church'] = '??glise';
$app_list_strings['marker_image_list']['city_square'] = 'Place de la ville';
$app_list_strings['marker_image_list']['cluster'] = 'Groupe';
$app_list_strings['marker_image_list']['cluster_2'] = 'Groupe 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'Groupe 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'Groupe 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'Groupe 5';
$app_list_strings['marker_image_list']['coffee'] = 'Caf??';
$app_list_strings['marker_image_list']['community_centre'] = 'Centre communautaire';
$app_list_strings['marker_image_list']['company'] = 'Soci??t??';
$app_list_strings['marker_image_list']['conference'] = 'Conf??rence';
$app_list_strings['marker_image_list']['construction'] = 'Construction - BTP';
$app_list_strings['marker_image_list']['convenience'] = 'Magasin';
$app_list_strings['marker_image_list']['court'] = 'Cour';
$app_list_strings['marker_image_list']['cruise'] = 'Croisi??re';
$app_list_strings['marker_image_list']['currency_exchange'] = 'Bureau de change';
$app_list_strings['marker_image_list']['customs'] = 'Douanes';
$app_list_strings['marker_image_list']['cycling'] = 'Cyclisme';
$app_list_strings['marker_image_list']['dam'] = 'Barrage';
$app_list_strings['marker_image_list']['dentist'] = 'Dentiste';
$app_list_strings['marker_image_list']['deptartment_store'] = 'Grand magasin';
$app_list_strings['marker_image_list']['disability'] = 'Handicap';
$app_list_strings['marker_image_list']['disabled_parking'] = 'Parking handicap??';
$app_list_strings['marker_image_list']['doctor'] = 'M??decin';
$app_list_strings['marker_image_list']['dog_leash'] = 'Laisse chien';
$app_list_strings['marker_image_list']['down'] = 'Vers le bas';
$app_list_strings['marker_image_list']['down_left'] = 'Bas gauche';
$app_list_strings['marker_image_list']['down_right'] = 'Bas ?? droite';
$app_list_strings['marker_image_list']['down_then_left'] = 'Vers le bas puis gauche';
$app_list_strings['marker_image_list']['down_then_right'] = 'Vers le bas puis ?? droite';
$app_list_strings['marker_image_list']['drugs'] = 'M??dicaments';
$app_list_strings['marker_image_list']['elevator'] = 'Ascenseur';
$app_list_strings['marker_image_list']['embassy'] = 'Ambassade';
$app_list_strings['marker_image_list']['expert'] = 'Expert';
$app_list_strings['marker_image_list']['factory'] = 'Usine';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Chutes de pierres';
$app_list_strings['marker_image_list']['fast_food'] = 'Restauration rapide';
$app_list_strings['marker_image_list']['festival'] = 'Festival';
$app_list_strings['marker_image_list']['fjord'] = 'Fjord';
$app_list_strings['marker_image_list']['forest'] = 'For??t';
$app_list_strings['marker_image_list']['fountain'] = 'Fontaine';
$app_list_strings['marker_image_list']['friday'] = 'Le vendredi';
$app_list_strings['marker_image_list']['garden'] = 'Jardin';
$app_list_strings['marker_image_list']['gas_station'] = 'Pompe ?? essence';
$app_list_strings['marker_image_list']['geyser'] = 'Geyser';
$app_list_strings['marker_image_list']['gifts'] = 'Cadeaux';
$app_list_strings['marker_image_list']['gourmet'] = 'Gourmet';
$app_list_strings['marker_image_list']['grocery'] = '??picerie';
$app_list_strings['marker_image_list']['hairsalon'] = 'Salon de coiffure';
$app_list_strings['marker_image_list']['helicopter'] = 'H??licopt??re';
$app_list_strings['marker_image_list']['highway'] = 'Autoroute';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Quartier Historique';
$app_list_strings['marker_image_list']['home'] = 'Accueil';
$app_list_strings['marker_image_list']['hospital'] = 'H??pital';
$app_list_strings['marker_image_list']['hostel'] = 'H??tel';
$app_list_strings['marker_image_list']['hotel'] = 'H??tel';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'H??tel 1 ??toile';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'H??tel 2 ??toiles';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'H??tel 3 ??toiles';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'H??tel 4 ??toiles';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'H??tel 5 ??toiles';
$app_list_strings['marker_image_list']['info'] = 'Info';
$app_list_strings['marker_image_list']['justice'] = 'Justice';
$app_list_strings['marker_image_list']['lake'] = 'Lac';
$app_list_strings['marker_image_list']['laundromat'] = 'Laverie automatique';
$app_list_strings['marker_image_list']['left'] = 'Gauche';
$app_list_strings['marker_image_list']['left_then_down'] = 'Gauche puis Bas';
$app_list_strings['marker_image_list']['left_then_up'] = 'Gauche puis Haut';
$app_list_strings['marker_image_list']['library'] = 'Librairie';
$app_list_strings['marker_image_list']['lighthouse'] = 'Phare';
$app_list_strings['marker_image_list']['liquor'] = 'Alcool';
$app_list_strings['marker_image_list']['lock'] = 'Serrure';
$app_list_strings['marker_image_list']['main_road'] = 'Route principale';
$app_list_strings['marker_image_list']['massage'] = 'Massage';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Antenne Relais Mobile';
$app_list_strings['marker_image_list']['modern_tower'] = 'Tour moderne';
$app_list_strings['marker_image_list']['monastery'] = 'Monast??re';
$app_list_strings['marker_image_list']['monday'] = 'Le lundi';
$app_list_strings['marker_image_list']['monument'] = 'Monument';
$app_list_strings['marker_image_list']['mosque'] = 'Mosqu??e';
$app_list_strings['marker_image_list']['motorcycle'] = 'Moto';
$app_list_strings['marker_image_list']['museum'] = 'Mus??e';
$app_list_strings['marker_image_list']['music_live'] = 'Concert Live';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Chevalet de pompage';
$app_list_strings['marker_image_list']['pagoda'] = 'Pagode';
$app_list_strings['marker_image_list']['palace'] = 'Palais';
$app_list_strings['marker_image_list']['panoramic'] = 'Panoramique';
$app_list_strings['marker_image_list']['park'] = 'Parc';
$app_list_strings['marker_image_list']['park_and_ride'] = 'Parc relais';
$app_list_strings['marker_image_list']['parking'] = 'Stationnement';
$app_list_strings['marker_image_list']['photo'] = 'Photo';
$app_list_strings['marker_image_list']['picnic'] = 'Pic-Nic';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Endroits inconnus';
$app_list_strings['marker_image_list']['places_visited'] = 'Endroits visit??s';
$app_list_strings['marker_image_list']['playground'] = 'Terrain de jeux';
$app_list_strings['marker_image_list']['police'] = 'Police';
$app_list_strings['marker_image_list']['port'] = 'Port';
$app_list_strings['marker_image_list']['postal'] = 'Bo??te aux lettres';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Poteau ??lectrique';
$app_list_strings['marker_image_list']['power_plant'] = 'Centrale ??lectrique';
$app_list_strings['marker_image_list']['power_substation'] = 'Poste ??lectrique';
$app_list_strings['marker_image_list']['public_art'] = 'Art public';
$app_list_strings['marker_image_list']['rain'] = 'Pluie';
$app_list_strings['marker_image_list']['real_estate'] = 'Immobilier';
$app_list_strings['marker_image_list']['regroup'] = 'Regroupement';
$app_list_strings['marker_image_list']['resort'] = 'Station';
$app_list_strings['marker_image_list']['restaurant'] = 'Restaurant';
$app_list_strings['marker_image_list']['restaurant_african'] = 'Restaurant Africain';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'Restaurant grill';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'Restaurant buffet';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'Restaurant Chinois';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'Restaurant de poisson';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'Restaurant Fish and Chips';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'Restaurant gastronomique';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'Restaurant grec';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'Restaurant indien';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'Restaurant italien';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'Restaurant japonais';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'Kebab';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'Restaurant cor??en';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'Restaurant m??diterran??en';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'Restaurant mexicain';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'Restaurant romantique';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'Restaurant thai';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'Restaurant turc';
$app_list_strings['marker_image_list']['right'] = '?? droite';
$app_list_strings['marker_image_list']['right_then_down'] = '?? droite et en bas';
$app_list_strings['marker_image_list']['right_then_up'] = '?? droite et en haut';
$app_list_strings['marker_image_list']['saturday'] = 'Le samedi';
$app_list_strings['marker_image_list']['school'] = 'Ecole';
$app_list_strings['marker_image_list']['shopping_mall'] = 'Centre Commercial';
$app_list_strings['marker_image_list']['shore'] = 'Rivage';
$app_list_strings['marker_image_list']['sight'] = 'Vue';
$app_list_strings['marker_image_list']['small_city'] = 'Village';
$app_list_strings['marker_image_list']['snow'] = 'Neige';
$app_list_strings['marker_image_list']['spaceport'] = 'Base de lancement';
$app_list_strings['marker_image_list']['speed_100'] = 'Vitesse ?? 100';
$app_list_strings['marker_image_list']['speed_110'] = 'Vitesse ?? 110';
$app_list_strings['marker_image_list']['speed_120'] = 'Vitesse ?? 120';
$app_list_strings['marker_image_list']['speed_130'] = 'Vitesse ?? 130';
$app_list_strings['marker_image_list']['speed_20'] = 'Vitesse ?? 20';
$app_list_strings['marker_image_list']['speed_30'] = 'Vitesse ?? 30';
$app_list_strings['marker_image_list']['speed_40'] = 'Vitesse ?? 40';
$app_list_strings['marker_image_list']['speed_50'] = 'Vitesse ?? 50';
$app_list_strings['marker_image_list']['speed_60'] = 'Vitesse ?? 60';
$app_list_strings['marker_image_list']['speed_70'] = 'Vitesse ?? 70';
$app_list_strings['marker_image_list']['speed_80'] = 'Vitesse ?? 80';
$app_list_strings['marker_image_list']['speed_90'] = 'Vitesse ?? 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'Ralentisseur';
$app_list_strings['marker_image_list']['stadium'] = 'Stade';
$app_list_strings['marker_image_list']['statue'] = 'Statue';
$app_list_strings['marker_image_list']['steam_train'] = 'Train ?? vapeur';
$app_list_strings['marker_image_list']['stop'] = 'Stop';
$app_list_strings['marker_image_list']['stoplight'] = 'Feu';
$app_list_strings['marker_image_list']['subway'] = 'M??tro';
$app_list_strings['marker_image_list']['sun'] = 'Dim';
$app_list_strings['marker_image_list']['sunday'] = 'Le dimanche';
$app_list_strings['marker_image_list']['supermarket'] = 'Supermarch??';
$app_list_strings['marker_image_list']['synagogue'] = 'Synagogue';
$app_list_strings['marker_image_list']['tapas'] = 'Tapas';
$app_list_strings['marker_image_list']['taxi'] = 'Taxi';
$app_list_strings['marker_image_list']['taxiway'] = 'Voie r??serv??e aux taxis';
$app_list_strings['marker_image_list']['teahouse'] = 'Salon de Th??';
$app_list_strings['marker_image_list']['telephone'] = 'T??l??phone';
$app_list_strings['marker_image_list']['temple_hindu'] = 'Temple Hindou';
$app_list_strings['marker_image_list']['terrace'] = 'Terrasse';
$app_list_strings['marker_image_list']['text'] = 'Texte';
$app_list_strings['marker_image_list']['theater'] = 'Th????tre';
$app_list_strings['marker_image_list']['theme_park'] = 'Parc d\'Attractions';
$app_list_strings['marker_image_list']['thursday'] = 'Le jeudi';
$app_list_strings['marker_image_list']['toilets'] = 'Toilettes';
$app_list_strings['marker_image_list']['toll_station'] = 'P??age';
$app_list_strings['marker_image_list']['tower'] = 'Tour';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Cam??ra de surveillance routi??re';
$app_list_strings['marker_image_list']['train'] = 'Train';
$app_list_strings['marker_image_list']['tram'] = 'Tramway';
$app_list_strings['marker_image_list']['truck'] = 'Camion';
$app_list_strings['marker_image_list']['tuesday'] = 'Le mardi';
$app_list_strings['marker_image_list']['tunnel'] = 'Tunnel';
$app_list_strings['marker_image_list']['turn_left'] = 'Tourner ?? Gauche';
$app_list_strings['marker_image_list']['turn_right'] = 'Tourner ?? Droite';
$app_list_strings['marker_image_list']['university'] = 'Universit??';
$app_list_strings['marker_image_list']['up'] = 'En haut';
$app_list_strings['marker_image_list']['up_left'] = 'Haut gauche';
$app_list_strings['marker_image_list']['up_right'] = 'Haut droit';
$app_list_strings['marker_image_list']['up_then_left'] = 'En haut et ?? gauche';
$app_list_strings['marker_image_list']['up_then_right'] = 'En haut et ?? droite';
$app_list_strings['marker_image_list']['vespa'] = 'Vespa';
$app_list_strings['marker_image_list']['video'] = 'Vid??o';
$app_list_strings['marker_image_list']['villa'] = 'Maison';
$app_list_strings['marker_image_list']['water'] = 'Eau';
$app_list_strings['marker_image_list']['waterfall'] = 'Chute d\'eau';
$app_list_strings['marker_image_list']['watermill'] = 'Moulin ?? Eau';
$app_list_strings['marker_image_list']['waterpark'] = 'Parc Aquatique';
$app_list_strings['marker_image_list']['watertower'] = 'Ch??teau d\'eau';
$app_list_strings['marker_image_list']['wednesday'] = 'Le mercredi';
$app_list_strings['marker_image_list']['wifi'] = 'WiFi';
$app_list_strings['marker_image_list']['wind_turbine'] = 'Eolienne';
$app_list_strings['marker_image_list']['windmill'] = 'Moulin ?? vent';
$app_list_strings['marker_image_list']['winery'] = 'Chai';
$app_list_strings['marker_image_list']['work_office'] = 'Bureau';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'Site du patrimoine mondial';
$app_list_strings['marker_image_list']['zoo'] = 'Zoo';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'Absent du bureau';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'En r??union';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'Replanifier';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'Merci de saisir les informations de la replanification';
$app_strings['LBL_RESCHEDULE_DATE'] = 'Date :';
$app_strings['LBL_RESCHEDULE_REASON'] = 'Motif :';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'Veuillez s??lectionner une date valide';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'Merci de choisir la cause';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'Replanifier';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'Historique des tentatives d\'appel';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'Tentatives d\'appel';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = 'Gestion de la s??curit??';
$app_strings['LBL_SECURITYGROUP'] = 'Groupes de s??curit??';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'Comptes d\'E-mails sortants';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'D??tails des flux sociaux';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Filtre';

$app_strings['LBL_COLLECTION_TYPE'] = 'Type';

$app_strings['LBL_ADD_TAB'] = 'Ajouter un onglet';
$app_strings['LBL_EDIT_TAB'] = 'Modifier les onglets';
$app_strings['LBL_SUITE_DASHBOARD'] = 'Tableau de bord SuiteCRM';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Entrer le nom du tableau de bord :';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Nombre de colonnes :';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Etes-vous s??r de vouloir effacer ce';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'tableau de bord ?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Ajouter une page au tableau de bord';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Supprimer la page du tableau de bord en cours';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Renommer la page du tableau de bord';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'ACTIONS';

$app_list_strings['collection_temp_list'] = array(
    'Tasks' => 'T??ches',
    'Meetings' => 'R??unions',
    'Calls' => 'Appels',
    'Notes' => 'Notes',
    'Emails' => 'E-mails'
);

$app_list_strings['moduleList']['TemplateEditor'] = 'Editeur de mod??les';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "Vous avez cliqu?? en dehors du champ que vous ??ditiez sans l???enregistrer. Cliquez sur ok si vous voulez perdre vos modifications, ou sur annuler si vous souhaitez continuer l?????dition";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "Il y a eu une erreur lors du chargement du champ. Votre session peut avoir expir??. Veuillez vous connecter ?? nouveau pour r??soudre ce probl??me";

$app_list_strings['moduleList']['AOBH_BusinessHours'] = 'Heures ouvr??es';
$app_list_strings['business_hours_list']['0'] = '12:00';
$app_list_strings['business_hours_list']['1'] = '01:00';
$app_list_strings['business_hours_list']['2'] = '02:00';
$app_list_strings['business_hours_list']['3'] = '03:00';
$app_list_strings['business_hours_list']['4'] = '04:00';
$app_list_strings['business_hours_list']['5'] = '05:00';
$app_list_strings['business_hours_list']['6'] = '06:00';
$app_list_strings['business_hours_list']['7'] = '07:00';
$app_list_strings['business_hours_list']['8'] = '08:00';
$app_list_strings['business_hours_list']['9'] = '09:00';
$app_list_strings['business_hours_list']['10'] = '10:00';
$app_list_strings['business_hours_list']['11'] = '11:00';
$app_list_strings['business_hours_list']['12'] = '00:00';
$app_list_strings['business_hours_list']['13'] = '13:00';
$app_list_strings['business_hours_list']['14'] = '14:00';
$app_list_strings['business_hours_list']['15'] = '15:00';
$app_list_strings['business_hours_list']['16'] = '16:00';
$app_list_strings['business_hours_list']['17'] = '17:00';
$app_list_strings['business_hours_list']['18'] = '18:00';
$app_list_strings['business_hours_list']['19'] = '19:00';
$app_list_strings['business_hours_list']['20'] = '20:00';
$app_list_strings['business_hours_list']['21'] = '21:00';
$app_list_strings['business_hours_list']['22'] = '22:00';
$app_list_strings['business_hours_list']['23'] = '23:00';
$app_list_strings['day_list']['Monday'] = 'Le lundi';
$app_list_strings['day_list']['Tuesday'] = 'Le mardi';
$app_list_strings['day_list']['Wednesday'] = 'Le mercredi';
$app_list_strings['day_list']['Thursday'] = 'Le jeudi';
$app_list_strings['day_list']['Friday'] = 'Le vendredi';
$app_list_strings['day_list']['Saturday'] = 'Le samedi';
$app_list_strings['day_list']['Sunday'] = 'Le dimanche';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'Lettres';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'L??gal';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'Photo';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'Paysage';


$app_list_strings['moduleList']['SurveyResponses'] = 'R??ponses au sondage';
$app_list_strings['moduleList']['Surveys'] = 'Sondages';
$app_list_strings['moduleList']['SurveyQuestionResponses'] = 'R??ponses aux questions du sondage';
$app_list_strings['moduleList']['SurveyQuestions'] = 'Questions du sondage';
$app_list_strings['moduleList']['SurveyQuestionOptions'] = 'Options des questions du sondage';
$app_list_strings['survey_status_list']['Draft'] = 'Brouillon';
$app_list_strings['survey_status_list']['Public'] = 'Public';
$app_list_strings['survey_status_list']['Closed'] = 'Ferm??';
$app_list_strings['surveys_question_type']['Text'] = 'Texte';
$app_list_strings['surveys_question_type']['Textbox'] = 'Bo??te de saisie';
$app_list_strings['surveys_question_type']['Checkbox'] = 'Case ?? cocher';
$app_list_strings['surveys_question_type']['Radio'] = 'Bouton Radio';
$app_list_strings['surveys_question_type']['Dropdown'] = 'Liste d??roulante';
$app_list_strings['surveys_question_type']['Multiselect'] = 'S??lection multiple';
$app_list_strings['surveys_question_type']['Matrix'] = 'Matrice';
$app_list_strings['surveys_question_type']['DateTime'] = 'Date et heure';
$app_list_strings['surveys_question_type']['Date'] = 'Date';
$app_list_strings['surveys_question_type']['Scale'] = '??chelle';
$app_list_strings['surveys_question_type']['Rating'] = 'Evaluation';
$app_list_strings['surveys_matrix_options'][0] = 'Satisfait';
$app_list_strings['surveys_matrix_options'][1] = 'Ni satisfait ni insatisfait';
$app_list_strings['surveys_matrix_options'][2] = 'Insatisfait (e)';

$app_strings['LBL_OPT_IN_PENDING_EMAIL_NOT_SENT'] = 'Dans l\'attente de la confirmation opt-in, Confirmation opt-in non envoy??e';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_FAILED'] = 'Erreur d\'envoi de l\'e-mail de confirmation de consentement';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_SENT'] = 'Dans l\'attente de la confirmation opt-in, Confirmation opt-in envoy??e';
$app_strings['LBL_OPT_IN'] = 'Activ??';
$app_strings['LBL_OPT_IN_CONFIRMED'] = 'Confirmer l\'abonnement';
$app_strings['LBL_OPT_IN_OPT_OUT'] = 'D??sinscrit';
$app_strings['LBL_OPT_IN_INVALID'] = 'Invalide';

/** @see SugarEmailAddress */
$app_list_strings['email_settings_opt_in_dom'] = array(
    'not-opt-in' => 'D??sactiv??',
    'opt-in' => 'Consentement',
    'confirmed-opt-in' => 'Confirmer l\'abonnement'
);

$app_list_strings['email_confirmed_opt_in_dom'] = array(
    'not-opt-in' => 'Non activ??',
    'opt-in' => 'Consentement',
    'confirmed-opt-in' => 'Confirmer l\'abonnement'
);

$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL'] = 'L\'e-mail de confirmation de consentement a ??t?? ajout?? ?? la file d???attente de messagerie pour les adresses %s . ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_NOT_OPT_IN'] = 'Impossible d???envoyer des e-mails ?? %s adresse(s) e-mail, car elles ne sont pas activ??es. ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_MISSING_EMAIL_ADDRESS_ID'] = 'L\'adresse e-mail %s n\'a pas d\' id valide. ';

$app_strings['ERR_TWO_FACTOR_FAILED'] = '??chec de l???authentification en deux ??tapes';
$app_strings['ERR_TWO_FACTOR_CODE_SENT'] = 'Code envoy?? pour l???authentification en deux ??tapes.';
$app_strings['ERR_TWO_FACTOR_CODE_FAILED'] = '??chec de l\'envoi du code pour l\'authentification ?? deux facteurs.';
$app_strings['LBL_THANKS_FOR_SUBMITTING'] = 'Merci pour votre int??r??t.';

$app_strings['ERR_IP_CHANGE'] = 'Votre session a ??t?? cl??tur??e ?? cause d\'un changement de votre adresse IP';
$app_strings['ERR_RETURN'] = 'Retour ?? l\'accueil';


$app_list_strings['oauth2_grant_type_dom'] = array(
    'password' => 'Attribution de mot de passe',
    'client_credentials' => 'Identifiants client',
    'implicit' => 'Implicite',
    'authorization_code' => 'Code d\'autorisation'
);

$app_list_strings['oauth2_duration_units'] = [
    'minute' => 'minutes',
    'hour' => 'heures',
    'day' => 'jours',
    'week' => 'semaines',
    'month' => 'mois',
];

$app_list_strings['search_controllers'] = [
    'Search' => 'Recherche (nouveau)',
    'UnifiedSearch' => 'Recherche unifi??e globale (ancien)'
];


$app_strings['LBL_DEFAULT_API_ERROR_TITLE'] = 'Erreur API JSON';
$app_strings['LBL_DEFAULT_API_ERROR_DETAIL'] = 'Une erreur API JSON est survenue.';
$app_strings['LBL_API_EXCEPTION_DETAIL'] = 'Version de l???API??: 8';
$app_strings['LBL_BAD_REQUEST_EXCEPTION_DETAIL'] = 'Veuillez compl??ter les champs obligatoires';
$app_strings['LBL_EMPTY_BODY_EXCEPTION_DETAIL'] = 'l\'API JSON attend une requ??te au format JSON';
$app_strings['LBL_INVALID_JSON_API_REQUEST_EXCEPTION_DETAIL'] = 'Impossible de valider la requ??te sur l\'API Json';
$app_strings['LBL_INVALID_JSON_API_RESPONSE_EXCEPTION_DETAIL'] = 'Impossible de valider la r??ponse de l\'API Json';
$app_strings['LBL_MODULE_NOT_FOUND_EXCEPTION_DETAIL'] = 'L\'API JSON ne peut pas trouver la ressource';
$app_strings['LBL_NOT_ACCEPTABLE_EXCEPTION_DETAIL'] = 'L\'en-t??te "Accept" attendu par l\'API Json devrait ??tre du type "application/vnd.api+json"';
$app_strings['LBL_UNSUPPORTED_MEDIA_TYPE_EXCEPTION_DETAIL'] = 'L\'en-t??te "Content-Type" attendu par l\'API Json devrait ??tre du type "application/vnd.api+json"';

$app_strings['MSG_BROWSER_NOTIFICATIONS_ENABLED'] = 'Les notifications de bureau sont maintenant activ??es pour ce navigateur web.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_DISABLED'] = 'Les notifications de bureau sont d??sactiv??es pour ce navigateur web. Utilisez les pr??f??rences de votre navigateur afin de les r??-activer.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_UNSUPPORTED'] = 'Ce navigateur ne supporte pas les notifications de bureau.';

$app_strings['LBL_GOOGLE_SYNC_ERR'] = 'ERREUR - SuiteCRM / Google Sync';
$app_strings['LBL_THERE_WAS_AN_ERR'] = 'Une erreur s\'est produite : ';
$app_strings['LBL_CLICK_HERE'] = 'Cliquer ici';
$app_strings['LBL_TO_CONTINUE'] = ' pour continuer.';
$app_strings['LBL_OPT_OUT'] = 'D??sinscription';
$app_strings['LBL_INVALID_EMAIL'] = 'Invalide';
$app_strings['LBL_PRIMARY'] = 'Principal';
$app_strings['LBL_EMAIL_ADDRESS'] = 'Adresse ??lectronique';

$app_strings['IMAP_HANDLER_ERROR'] = 'ERREUR : {error}; la cl?? ??tait: "{key}".';
$app_strings['IMAP_HANDLER_SUCCESS'] = 'OK : r??glages de test modifier en "{key}???';
$app_strings['IMAP_HANDLER_ERROR_INVALID_REQUEST'] = 'Requ??te non valide. Utilisez la valeur "{var}".';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN_BY_KEY'] = 'Une erreur inconnue s\'est produite, la cl?? "{key}" n\'a pas ??t?? enregistr??e.';
$app_strings['IMAP_HANDLER_ERROR_NO_TEST_SET'] = 'Il n???existe pas de param??tres de test.';
$app_strings['IMAP_HANDLER_ERROR_NO_KEY'] = 'Cl?? introuvable.';
$app_strings['IMAP_HANDLER_ERROR_KEY_SAVE'] = 'Erreur d\'enregistrement de cl??.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN'] = 'Erreur inconnue';
$app_strings['LBL_SEARCH_TITLE']                   = 'Rechercher';
$app_strings['LBL_SEARCH_TEXT_FIELD_TITLE_ATTR']   = 'Crit??re de recherche';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_TITLE_ATTR'] = 'Rechercher';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_VALUE']      = 'Rechercher';
$app_strings['LBL_SEARCH_QUERY']                   = 'Requ??te de recherche : ';
$app_strings['LBL_SEARCH_RESULTS_PER_PAGE']        = 'Nombre de r??sultats par page : ';
$app_strings['LBL_SEARCH_ENGINE']                  = 'Moteur:';
$app_strings['LBL_SEARCH_TOTAL'] = 'R??sultat(s) : ';
$app_strings['LBL_SEARCH_PREV'] = 'Pr??c??dent';
$app_strings['LBL_SEARCH_NEXT'] = 'Suivant';
$app_strings['LBL_SEARCH_PAGE'] = 'Page ';
$app_strings['LBL_SEARCH_OF'] = ' sur ';
$app_strings['LBL_INSIGHTS'] = 'Insights';
$app_strings['LBL_CHARTS'] = 'Graphiques';
$app_strings['LBL_CHART_NOT_FOUND'] = 'Graphique introuvable';
$app_strings['LBL_NO_DATA'] = 'Aucune donn??e';
$app_strings['LBL_ERROR_FETCHING_METADATA'] = 'Une erreur s\'est produite lors de la r??cup??ration des m??tadonn??es';
$app_strings['LBL_TOTAL'] = 'Total';
$app_strings['LBL_ACTIONS'] = 'Actions';
$app_strings['LBL_SELECT_SUBPANEL_BANNER'] = 'S??lectionnez les sous-panneaux ?? afficher';
$app_strings['LBL_SELECT_ITEM'] = 'S??lectionner un ??l??ment';
$app_strings['LBL_WIDGET_NOT_FOUND'] = 'Widget introuvable';
$app_strings['LBL_BAD_CONFIG'] = 'Configuration incorrecte';
$app_strings['LBL_CONFIG_BAD_CONTEXT'] = 'Configuration incorrecte : le contexte n\'est pas correctement configur??';
$app_strings['LBL_CONFIG_NO_CONFIG'] = 'Configuration incorrecte : configuration manquante';
$app_strings['LBL_CONFIG_NO_STATISTICS_KEY'] = 'Configuration incorrecte : cl?? de statistiques manquante';
$app_strings['LBL_STATISTIC_ERROR'] = 'Erreur lors du chargement des statistiques';
$app_strings['LBL_STATISTIC_ERROR_DESC'] = 'Erreur lors du chargement des statistiques';
$app_strings['LBL_STATISTIC_ERROR_DESC_TOOLTIP'] = 'Erreur lors du chargement des statistiques. Veuillez contacter votre administrateur';
$app_strings['LBL_AVERAGE_CLOSED_WON_PER_YEAR'] = 'Moyenne des affaires gagn??es par an';
$app_strings['LBL_OPPORTUNITIES_TOTAL'] = 'Valeur totale de l\'affaire';
$app_strings['LBL_CASE_TOTAL_DAYS_OPEN'] = 'Nombre total de jours d\'ouverture';
$app_strings['LBL_DAYS_OPEN'] = 'Jours Ouverts';
$app_strings['LBL_DAYS_IN_SALE_STAGE'] = 'Cette affaire a ??t?? dans cette phase de vente pour';
$app_strings['LBL_STAT_DAYS'] = 'Jour(s)';
$app_strings['LBL_CLOSED_PER_YEAR'] = 'Ferm?? par an';
$app_strings['LBL_WAS_OPEN'] = 'Ce dossier ??tait ouvert pour';
$app_strings['LBL_HAS_BEEN_OPEN'] = 'Ce dossier ??tait ouvert pour';
$app_strings['LBL_NUMBER_OF_CASES_PER_ACCOUNT'] = 'Nombre de dossiers par compte';
$app_strings['LBL_TOTAL_CASES_FOR_THIS_ACCOUNT'] = 'Total des dossiers pour ce compte : ';
$app_strings['LBL_NONE_OUTSTANDING'] = 'Sans Pi??ce Jointe';
$app_strings['LBL_VALIDATION_ERROR_REQUIRED'] = 'Champ obligatoire manquant : {{fields.field.label}}';
$app_strings['LBL_VALIDATION_ERROR_CURRENCY_FORMAT'] = "Format de devise invalide. Requis: '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_INT_FORMAT'] = "Format d'entier non valide. Requis: '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_FLOAT_FORMAT'] = "Format de float invalide. Requis : '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_DATE_FORMAT'] = "Format de date invalide. Requis: '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_DATETIME_FORMAT'] = "Format de date et heure invalide. Requis: '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_EMAIL_FORMAT'] = "Format d'e-mail invalide. Requis: '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_PHONE_FORMAT'] = "Format de t??l??phone invalide.";
$app_strings['LBL_VALIDATION_ERROR_MIN'] = "Valeur invalide. La valeur doit ??tre sup??rieure ou ??gale ?? '{{context.min}}'";
$app_strings['LBL_VALIDATION_ERROR_MAX'] = "Valeur invalide. La valeur doit ??tre inf??rieure ou ??gale ?? '{{context.max}}'";
$app_strings['LBL_MULTIPLE_PRIMARY_EMAIL_VALIDATION_ERROR'] = "Une seule adresse e-mail peut ??tre marqu??e comme principale";
$app_strings['LBL_DUPLICATE_EMAIL_VALIDATION_ERROR'] = "Les doublons d'adresses ??lectroniques ne sont pas autoris??s";
$app_strings['LBL_NO_PRIMARY_EMAIL_VALIDATION_ERROR'] = "Une adresse e-mail doit ??tre marqu??e comme principale";
$app_strings['LBL_VALIDATION_ERRORS'] = 'Il y a des erreurs de validation, impossible d\'effectuer l\'action.';
$app_strings['LBL_TYPE_TO_SEARCH'] = 'Tapez pour rechercher...';
$app_strings['LBL_SEARCHING'] = 'Recherche ...';
$app_strings['LBL_NOT_FOUND'] = 'Introuvable';
$app_strings['LBL_SEARCH_ERROR'] = 'Erreur de recherche.';
$app_strings['LBL_FOUND'] = 'Trouv??';
$app_strings['LBL_GET_RECORD_LIST_ERROR'] = 'Une erreur s\'est produite lors de la r??cup??ration des enregistrements';
$app_strings['LBL_NUMBER_OF_RECORDS'] = 'Le nombre d\'enregistrements';
$app_strings['LBL_FORWARD_SLASH'] = '/';
$app_strings['LBL_CASES_INSIGHT'] = ' {{fields.cases.value}} ( {{fields.default.value}} )';
$app_strings['LBL_INVOICES_INSIGHT'] = ' {{fields.invoices.value}} ( {{fields.default.value}} )';
$app_strings['LBL_CONTRACT_RENEWAL_TOOLTIP'] = 'Date du renouvellement du prochain contrat';
$app_strings['LBL_INVOICES_OVERDUE_TOOLTIP'] = 'Nombre total de factures en retard';
$app_strings['LBL_ACTIVITIES_NEXT_DATE_TOOLTIP'] = 'Date de la prochaine interaction';
$app_strings['LBL_CAMPAIGN_LAST_RECEIVED_TOOLTIP'] = 'Date de r??ception de la campagne la plus r??cente';
$app_strings['LBL_OPEN_CASES_COUNT_TOOLTIP'] = 'Nombre total de dossiers ouverts';
$app_strings['LBL_EVENTS_LAST_DATE_TOOLTIP'] = 'Date de l\'??v??nement le plus r??cent';
$app_strings['LBL_HISTORY_LAST_DATE_TOOLTIP'] = 'Date de l\'interaction la plus r??cente';
$app_strings['LBL_OPPORTUNITIES_TOTAL_SUM_TOOLTIP'] = 'Somme totale des affaires';
$app_strings['LBL_QUOTES_EXPIRY_TOOLTIP'] = 'Date d\'expiration du devis suivant';
$app_strings['LBL_DEFAULT_TOTAL_TOOLTIP'] = 'Nombre total d\'enregistrements';
$app_strings['LBL_CONTRACT_RENEWAL'] = 'Date de renouvellement';
$app_strings['LBL_INVOICES_OVERDUE'] = 'Total d\'overdue';
$app_strings['LBL_ACTIVITIES_NEXT_DATE'] = 'Date de l\'activit?? suivante';
$app_strings['LBL_CAMPAIGN_LAST_RECEIVED'] = 'Derni??re participation';
$app_strings['LBL_OPEN_CASES_COUNT'] = 'Dossiers ouverts';
$app_strings['LBL_EVENTS_LAST_DATE'] = 'Dernier ??v??nement auquel vous avez particip??';
$app_strings['LBL_HISTORY_LAST_DATE'] = 'Dernier point de contact';
$app_strings['LBL_OPPORTUNITIES_TOTAL_SUM'] = 'Valeur Totale';
$app_strings['LBL_QUOTES_EXPIRY'] = 'Prochaine date d\'expiration';
$app_strings['LBL_DEFAULT_TOTAL'] = 'Total';
$app_strings['AOS_Contracts'] = 'Contrats';
$app_strings['AOS_Quotes'] = 'Devis';
$app_strings['AOS_Invoices'] = 'Factures';
$app_strings['LBL_PHOTO'] = 'Photo';
$app_strings['LBL_CASE_UPDATES'] = 'Mises ?? jour du cas';
$app_strings['LBL_CASE_UPDATE_SUBMITTED'] = 'Mise ?? jour de dossier envoy??e';
$app_strings['LBL_SUMMARY_DEFAULT'] = "{{fields.name.value}}";
$app_strings['LBL_SUMMARY_PERSON'] = "{{fields.salutation.value}} {{fields.first_name.value}} {{fields.last_name.value}}";
$app_strings['LBL_CREATE'] = 'Cr??er';
$app_strings['LBL_SAVED_FILTER_SAVED'] = 'Filtre enregistr?? avec succ??s';
$app_strings['LBL_FILTER_ID_NOT_DEFINED'] = 'Identifiant de filtre non d??fini';
$app_strings['LBL_GENERIC_CONFIRMATION'] = 'Voulez-vous poursuivre l\'action?';
$app_strings['LBL_SHOW_MORE'] = 'Afficher plus';
$app_strings['LBL_SHOW_LESS'] = 'Afficher moins';
$app_strings['LBL_LOAD_MORE'] = 'Charger plus';
$app_strings['LBL_EMPTY'] = '-- Vide -- ';
$app_strings['LBL_OPERATOR'] = 'Op??rateur';
$app_strings['LBL_START'] = 'D??but';
$app_strings['LBL_END'] = 'Fin';
$app_strings['LBL_LINE_ITEMS_FIELD_CONFIG'] = 'Mauvaise configuration';


$app_strings['LBL_ACTION_SUCCESS'] = 'Action r??ussie';

$app_strings['LBL_YES'] = 'Oui';
$app_strings['LBL_NO'] = 'Non';

$app_list_strings['sort_order'] = [];
$app_list_strings['sort_order']['asc'] = 'Croissant';
$app_list_strings['sort_order']['desc'] = 'D??croissant';

// Labels used by subpanel unlink relationship process
$app_strings['LBL_LINK'] = 'Lien';
$app_strings['LBL_UNLINK_RECORD'] = 'D??lier l\'enregistrement';
$app_strings['LBL_EDIT_RECORD'] = 'Modifier l\'enregistrement';
$app_strings['LBL_UNLINK_RELATIONSHIP_CONFIRM'] = '??tes-vous s??r de vouloir dissocier cet enregistrement ? Seule la relation sera dissoci??e. L\'enregistrement ne sera pas supprim??.';
$app_strings['LBL_UNLINK_RELATIONSHIP_SUCCESS'] = 'L\'enregistrement a ??t?? dissoci?? avec succ??s.';
$app_strings['LBL_UNLINK_RELATIONSHIP_FAILED'] = 'Une erreur s\'est produite lors de la dissociation de cet enregistrement.';
$app_strings['LBL_LINK_RELATIONSHIP_SUCCESS'] = 'Relation li??e avec succ??s.';
$app_strings['LBL_LINK_RELATIONSHIP_FAILED'] = 'Une erreur s\'est produite lors de la liaison de cette relation.';
$app_strings['LBL_MODULE_NOT_FOUND'] = 'Module introuvable.';
$app_strings['LBL_RECORD_NOT_FOUND'] = 'Impossible de charger l\'enregistrement';
$app_strings['LBL_RELATIONSHIP_LOAD_ERROR'] = 'Impossible de charger la relation';
$app_strings['LBL_NOT_LINKED'] = 'Impossible de d??lier le lien. Les enregistrements ne sont pas li??s';
$app_strings['LBL_ACCESS_DENIED'] = 'Acc??s refus??';
$app_strings['LBL_ADD_RECORDS_TO_TARGET_LIST_SUCCESS'] = 'Enregistrements ajout??s ?? la liste de cibles avec succ??s.';
$app_strings['LBL_ADD_RECORDS_TO_TARGET_LIST_FAILED'] = 'Une erreur s\'est produite lors de l\'ajout d\'enregistrements sur la liste de cibles.';
$app_strings['LBL_ADD_CONTACTS_TO_TARGET_LIST_SUCCESS'] = 'Les contacts ont ??t?? ajout??s ?? la liste de cibles avec succ??s.';
$app_strings['LBL_ADD_CONTACTS_TO_TARGET_LIST_FAILED'] = 'Une erreur s\'est produite lors de l\'ajout de contacts sur la liste de cibles.';
$app_strings['LBL_CHANGED_TO_TEXT'] = 'chang?? en';
$app_strings['LBL_RECORD_CHANGED'] = 'Enregistrement mis ?? jour';
$app_strings['LBL_CREATE'] = "Cr??er";
$app_strings['LBL_USE_ADVANCED_SEARCH'] = 'Utiliser la recherche avanc??e';
$app_strings['LBL_USE_BASIC_SEARCH'] = 'Utiliser la recherche simple';
$app_strings['LBL_NO_MODULE_SELECTED'] = 'Aucun module s??lectionn??';
$app_strings['LBL_CLOSE_MENU'] = 'Fermer le menu';
$app_strings['LOGIN_INCORRECT'] = 'Identifiants incorrects, veuillez r??essayer.';
$app_strings['LOGIN_TOO_MANY_FAILED'] = 'Trop de tentatives de connexion infructueuses. Veuillez r??essayer plus tard.';

// PDF Engines
$app_strings['LBL_LEGACY_MPDF_ENGINE'] = 'Moteur MPDF h??rit??';
$app_strings['LBL_TCPDF_ENGINE'] = 'Moteur TCPDF';


$app_strings['ERR_INVALID_FILE_NAME'] = 'Nom de fichier invalide :';
$app_strings['LBL_LOGGER_VALID_FILENAME_CHARACTERS'] = 'Ne peuvent ??tre que des caract??res alphanum??riques, \'.\', \'-\' et \'_\'';
$app_strings['LBL_LOGGER_INVALID_FILENAME'] = 'Nom de fichier d\'importation invalide';
