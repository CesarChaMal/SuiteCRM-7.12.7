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
    'LBL_ASSIGNED_TO_NAME' => 'Manager du projet',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Date de cr??ation',
    'LBL_DATE_MODIFIED' => 'Date de modification',
    'LBL_MODIFIED' => 'Modifi?? par',
    'LBL_MODIFIED_NAME' => 'Modifi?? par',
    'LBL_CREATED' => 'Cr???? par',
    'LBL_DELETED' => 'Supprim??',
    'LBL_NAME' => 'Nom du mod??le',
    'LBL_CREATED_USER' => 'Cr???? par',
    'LBL_MODIFIED_USER' => 'Modifi?? par l\'utilisateur',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_EDIT_BUTTON' => 'Modifier',
    'LBL_REMOVE' => 'Supprimer',
    'LBL_LIST_FORM_TITLE' => 'Liste des mod??les de projets',
    'LBL_MODULE_NAME' => 'Mod??les de projets',
    'LBL_MODULE_TITLE' => 'Mod??les de projets',
    'LBL_HOMEPAGE_TITLE' => 'Mes mod??les de projets',
    'LNK_NEW_RECORD' => 'Cr??er des mod??les de projets',
    'LNK_LIST' => 'Voir les mod??les de projets',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => 'Importer des mod??les de projets',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher des mod??les de projets',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Voir l&#39;Historique',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activit??s',
    'LBL_NEW_FORM_TITLE' => 'Nouveau mod??le de projet',
    'LBL_STATUS' => 'Statut',
    'LBL_PRIORITY' => 'Priorit??',
    'LBL_PROJECT_NAME' => 'Nom du projet',
    'LBL_START_DATE' => 'Date de d??but',
    'LBL_CREATE_PROJECT_TITLE' => 'Cr??er un nouveau projet ?? partir de ce mod??le ?',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'Mod??les de t??che',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => 'Utilisateurs',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => 'Contacts',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => 'S??lectionner des ressources',
    'LBL_NEW_PROJECT_CREATED' => 'Nouveau projet cr????',
    'LBL_NEW_PROJECT' => 'Cr??er Projet',
    'LBL_CANCEL_PROJECT' => 'Annuler',

    'LBL_SUBTASK' => 'T??che',
    'LBL_MILESTONE_FLAG' => 'Etape',
    'LBL_RELATIONSHIP_TYPE' => 'Type de relation',
    'LBL_LAG' => 'Retard',
    'LBL_DAYS' => 'Jours',
    'LBL_HOURS' => 'Heures',
    'LBL_MONTHS' => 'Mois',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'T??ches du Projet',
    'LBL_VIEW_GANTT_TITLE' => 'Voir le Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Dur??e',
    'LBL_TASK_TITLE' => 'Modifier la t??che',
    'LBL_DURATION_TITLE' => 'Modifier la dur??e',
    'LBL_DESCRIPTION' => 'Notes',
    'LBL_ASSIGNED_USER_ID' => 'Assign?? ?? :',

    'LBL_LIST_ASSIGNED_USER' => 'Manager du projet',
    'LBL_UNASSIGNED' => 'Non assign??',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Ressources',
    'LBL_DELETE_TASK' => 'Supprimer la t??che',
    'LBL_VIEW_DETAIL' => 'Retour ?? la Campagne',
    'LBL_ADD_NEW_TASK' => 'Ajouter une nouvelle t??che',
    'LBL_ASSIGNED_USER_NAME' => 'Manager du projet :',

    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Nom de la T??che',
    'LBL_DURATION' => 'Dur??e',
    'LBL_ACTUAL_DURATION' => 'Dur??e en cours',
    'LBL_START' => 'D??but',
    'LBL_FINISH' => 'Terminer',
    'LBL_PREDECESSORS' => 'Pr??d??cesseurs',
    'LBL_PERCENT_COMPLETE' => 'Progression (%)',
    'LBL_EDIT_TASK_PROPERTIES' => 'Modifier les propri??t??s de la t??che.',

    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Tenir compte des jours ouvrables',
    'LBL_COPY_ALL_TASKS' => 'Copier toutes les t??ches avec leurs ressources',
    'LBL_COPY_SEL_TASKS' => 'Copier les t??ches s??lectionn??es avec leurs ressources',
    'LBL_TOOLTIP_TITLE' => 'Aide',
    'LBL_TOOLTIP_TEXT' => 'Copier toutes les t??ches avec les utilisateurs assign??s',

    'LBL_EMAIL' => 'E-mail',
    'LBL_PHONE' => 'T??l??phone du bureau :',
    'LBL_ADD_BUTTON' => 'Ajouter',
    'LBL_ADD_INVITEE' => 'Ajouter une ressource',
    'LBL_FIRST_NAME' => 'Pr??nom',
    'LBL_LAST_NAME' => 'Nom de Famille',
    'LBL_SEARCH_BUTTON' => 'Rechercher',
    'LBL_EMPTY_SEARCH_RESULT' => 'D??sol??, aucun r??sultat trouv??. Veuillez cr??er un invit?? ci-dessous.',
    'LBL_CREATE_INVITEE' => 'Cr??er une ressource',
    'LBL_CREATE_CONTACT' => 'Comme un Contact',
    'LBL_CREATE_AND_ADD' => 'Cr??er et Ajouter',
    'LBL_CANCEL_CREATE_INVITEE' => 'Annuler',
    'LBL_NO_ACCESS' => 'Vous n&#39;avez aucun acc??s pour cr??er $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Liste des ressources',
    'LBL_NONE' => 'Ind??fini',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Mod??les de projet??: projet du nom de projet',


);
