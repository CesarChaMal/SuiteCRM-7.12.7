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
    'ERR_NO_OPPS' => 'Veuillez cr??er des Affaires avant de visualiser le graphique des Affaires.',
    'LBL_ALL_OPPORTUNITIES' => 'Total du portefeuille',
    'LBL_CHART_TYPE' => 'Type de Graphique :',
    'LBL_CREATED_ON' => 'Derni??re exc??cution',
    'LBL_CLOSE_DATE_START' => 'Date de cl??ture attendue - Du :',
    'LBL_CLOSE_DATE_END' => 'Date de cl??ture attendue - Au :',
    'LBL_DATE_END' => 'Date de fin :',
    'LBL_DATE_RANGE_TO' => 'de',
    'LBL_DATE_RANGE' => 'Plage de date est',
    'LBL_DATE_START' => 'Date de d??but :',
    'LBL_EDIT' => 'Modifier',
    'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'Affiche le montant cumul?? des Affaires filtr?? par Origine Principale et par Utilisaeur, et selon le r??sultat actuel de l&#39;Affaire. Le r??sultat est bas?? sur les diff??rentes Phases de Vente : Gagn??, Perdu ou toute autre Phase.',
    'LBL_LEAD_SOURCE_BY_OUTCOME' => 'Toutes les Affaires par R??sultat',
    'LBL_LEAD_SOURCE_FORM_DESC' => 'Affiche le montant cumul?? des Affaires filtr?? par Origine Principale et par Utilisateur.',
    'LBL_LEAD_SOURCE_FORM_TITLE' => 'Toutes les Affaires par Origine Principale',
    'LBL_LEAD_SOURCE_OTHER' => 'Autre',
    'LBL_LEAD_SOURCES' => 'Origines du prospect :',
    'LBL_MODULE_NAME' => 'Tableau de bord',
    'LBL_MODULE_TITLE' => 'Tableau de bord??: Accueil',
    'LBL_MONTH_BY_OUTCOME_DESC' => 'Affiche le montant cumul?? des Affaires filtr?? par Utilisateur dont la date de cl??ture pr??vue est comprise dans l&#39;ann??e sp??cifi??e. Le r??sultat est bas?? sur les diff??rentes Phases de Vente : Gagn??, Perdu ou toute autre Phase.',
    'LBL_OPP_SIZE' => 'Echelle de l&#39;Affaire',
    'LBL_OPP_THOUSANDS' => 'K',
    'LBL_OPPS_IN_LEAD_SOURCE' => 'Affaires dont l&#39;Origine Principale est ',
    'LBL_OPPS_IN_STAGE' => ' o?? la Phase de Vente est ',
    'LBL_OPPS_OUTCOME' => ' o?? le R??sultat est ',
    'LBL_OPPS_WORTH' => 'Affaires pour un total de',
    'LBL_PIPELINE_FORM_TITLE_DESC' => 'Affiche le montant cumul?? de VOS Affaires par Phase de Vente dont la date de cl??ture pr??vue est comprise dans la plage de dates sp??cifi??es.',
    'LBL_REFRESH' => 'Rafra??chir',
    'LBL_ROLLOVER_DETAILS' => 'Survoler avec la souris un ??l??ment du graphique pour obtenir des informations suppl??mentaires.',
    'LBL_ROLLOVER_WEDGE_DETAILS' => 'Survoler avec la souris un secteur pour obtenir des informations suppl??mentaires.',
    'LBL_SALES_STAGE_FORM_DESC' => 'Affiche le montant cumul?? des Affaires par Phase de Vente filtr?? par utilisateur et dont la date de cl??ture pr??vue est comprise dans la plage de dates sp??cifi??es.',
    'LBL_SALES_STAGE_FORM_TITLE' => 'Portefeuille par Phase de Vente',
    'LBL_SALES_STAGES' => 'Phases de Vente:',
    'LBL_TOTAL_PIPELINE' => 'Total du portefeuille',
    'LBL_USERS' => 'Utilisateurs :',
    'LBL_YEAR_BY_OUTCOME' => 'Portefeuille par Mois par R??sultat',
    'LBL_YEAR' => 'Ann??e :',
    'LNK_NEW_ACCOUNT' => 'Cr??er un compte',
    'LNK_NEW_CALL' => 'Journal d\'appel',
    'LNK_NEW_CASE' => 'Cr??er Ticket',
    'LNK_NEW_CONTACT' => 'Cr??er Contact',
    'LNK_NEW_LEAD' => 'Cr??er un prospect',
    'LNK_NEW_MEETING' => 'Organiser une r??union',
    'LNK_NEW_NOTE' => 'Cr??er une note ou une pi??ce jointe',
    'LNK_NEW_OPPORTUNITY' => 'Cr??er Affaire',
    'LNK_NEW_TASK' => 'Cr??er T??che',
    'NTC_NO_LEGENDS' => 'Ind??fini',

    'LBL_TITLE' => 'Titre :',
    'LBL_MY_MODULES_USED_SIZE' => 'Nombre d&#39;acc??s',

    'LBL_CHART_PIPELINE_BY_SALES_STAGE' => 'Portefeuille par phase de vente',
    'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => 'Prospect par origine principale',
    'LBL_CHART_OUTCOME_BY_MONTH' => 'Affaires par Mois',
    'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => 'Portefeuille par source de prospect',
    'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => 'Mon portefeuille par phase de vente',
    'LBL_CHART_MY_MODULES_USED_30_DAYS' => 'Mes modules utilis??s (30 derniers jours)',
);
