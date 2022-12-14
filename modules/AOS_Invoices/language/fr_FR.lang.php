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
    'LBL_NAME' => 'Titre',
    'LBL_CREATED_USER' => 'Cr???? par',
    'LBL_MODIFIED_USER' => 'Modifi?? par l\'utilisateur',
    'ERR_DELETE_RECORD' => 'Un num??ro d&#39;enregistrement doit ??tre sp??cifi?? pour toute suppression.',
    'LBL_ACCOUNT_NAME' => 'Titre',
    'LBL_ACCOUNT' => 'Soci??t?? :',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activit??s',
    'LBL_ADDRESS_INFORMATION' => 'Adresse',
    'LBL_ANNUAL_REVENUE' => 'Revenu annuel :',
    'LBL_ANY_ADDRESS' => 'Toutes les adresses :',
    'LBL_ANY_EMAIL' => 'Tous les E-mails :',
    'LBL_ANY_PHONE' => 'Tous les t??l??phones :',
    'LBL_RATING' => 'Evaluation',
    'LBL_ASSIGNED_USER' => 'Utilisateur',
    'LBL_BILLING_ADDRESS_CITY' => 'Facturation - Ville :',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Facturation - Pays :',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Facturation - Code Postal :',
    'LBL_BILLING_ADDRESS_STATE' => 'Facturation - R??gion :',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Facturation - Rue 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Facturation - Rue 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Facturation - Rue 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Facturation - Rue :',
    'LBL_BILLING_ADDRESS' => 'Facturation - Adresse :',
    'LBL_ACCOUNT_INFORMATION' => 'Aper??u',
    'LBL_CITY' => 'Ville :',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_COUNTRY' => 'Pays :',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Comptes',
    'LBL_DUPLICATE' => 'Doublon possible avec le(s) Compte(s)',
    'LBL_EMAIL' => 'E-mail :',
    'LBL_EMPLOYEES' => 'Employ??s :',
    'LBL_FAX' => 'Fax :',
    'LBL_INDUSTRY' => 'Secteur d\'activit?? :',
    'LBL_LIST_ACCOUNT_NAME' => 'Nom du Compte',
    'LBL_LIST_CITY' => 'Ville',
    'LBL_LIST_EMAIL_ADDRESS' => 'Adresse ??lectronique',
    'LBL_LIST_PHONE' => 'T??l??phone',
    'LBL_LIST_STATE' => 'R??gion',
    'LBL_MEMBER_OF' => 'Membre de :',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Compte(s) rattach??(s)',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Autre E-mail :',
    'LBL_OTHER_PHONE' => 'Autre t??l??phone :',
    'LBL_OWNERSHIP' => 'Propri??taire :',
    'LBL_PARENT_ACCOUNT_ID' => 'Identifiant du compte parent',
    'LBL_PHONE_ALT' => 'Autre t??l??phone :',
    'LBL_PHONE_FAX' => 'Fax :',
    'LBL_PHONE_OFFICE' => 'T??l??phone du bureau :',
    'LBL_PHONE' => 'T??l??phone :',
    'LBL_POSTAL_CODE' => 'Code postal :',
    'LBL_SAVE_ACCOUNT' => 'Sauvegarder le compte',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Livraison - Ville :',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Livraison - Pays :',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Livraison - Code Postal :',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Livraison - R??gion :',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Livraison - Rue 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Livraison - Rue 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Livraison - Rue 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Livraison - Rue :',
    'LBL_SHIPPING_ADDRESS' => 'Livraison - Adresse :',
    'LBL_STATE' => '??tat ou r??gion :',
    'LBL_TICKER_SYMBOL' => 'Symbole Tycker :',
    'LBL_TYPE' => 'Type :',
    'LBL_WEBSITE' => 'Site Web :',
    'LNK_ACCOUNT_LIST' => 'Comptes',
    'LNK_NEW_ACCOUNT' => 'Cr??er un compte',
    'MSG_DUPLICATE' => 'Cr??er ce compte peut r??sulter dans un doublon. Vous pouvez s??lectionner le compte dans la liste ci-dessous ou clicker sur "Sauvegarder pour continuer" avec les donn??es pr??c??demment entr??es.',
    'MSG_SHOW_DUPLICATES' => 'Cr??er ce compte peut r??sulter dans un doublon. Vous pouvez clicker sur "Sauvegarder pour continuer" avec les donn??es pr??c??demment entr??es ou clicker sur "Annuler".',
    'NTC_DELETE_CONFIRMATION' => 'Voulez-vous vraiment supprimer cet enregistrement ?',
    'LBL_LIST_FORM_TITLE' => 'Liste des factures',
    'LBL_MODULE_NAME' => 'Factures',
    'LBL_MODULE_TITLE' => 'Factures : Accueil',
    'LBL_HOMEPAGE_TITLE' => 'Mes factures',
    'LNK_NEW_RECORD' => 'Cr??er une facture',
    'LNK_LIST' => 'Voir les factures',
    'LBL_SEARCH_FORM_TITLE' => 'Recherche des factures',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Voir l&#39;Historique',
    'LBL_NEW_FORM_TITLE' => 'Nouvelle facture',
    'LBL_TERMS_C' => 'Conditions',
    'LBL_APPROVAL_ISSUE' => 'Probl??mes de validation',
    'LBL_APPROVAL_STATUS' => 'Statut de validation',
    'LBL_BILLING_ACCOUNT' => 'Compte',
    'LBL_BILLING_CONTACT' => 'Contact',
    'LBL_EXPIRATION' => 'Valide jusqu&#39;au',
    'LBL_INVOICE_NUMBER' => 'Num??ro de facture',
    'LBL_OPPORTUNITY' => 'Nom Affaire',
    'LBL_TEMPLATE_DDOWN_C' => 'Mod??les de factures',
    'LBL_STAGE' => 'Etape du devis',
    'LBL_TERM' => 'Conditions de paiement',
    'LBL_SUBTOTAL_AMOUNT' => 'Sous-total',
    'LBL_DISCOUNT_AMOUNT' => 'Remise',
    'LBL_TAX_AMOUNT' => 'Taxe',
    'LBL_SHIPPING_AMOUNT' => 'Transports',
    'LBL_TOTAL_AMT' => 'Total',
    'VALUE' => 'Titre',
    'LBL_EMAIL_ADDRESSES' => 'Adresses ??lectroniques',
    'LBL_LINE_ITEMS' => 'Lignes de produits',
    'LBL_GRAND_TOTAL' => 'Total global',
    'LBL_QUOTE_NUMBER' => 'Num??ro du devis',
    'LBL_QUOTE_DATE' => 'Date du devis',
    'LBL_INVOICE_DATE' => 'Date de facture',
    'LBL_DUE_DATE' => 'Date d&#39;??ch??ance',
    'LBL_STATUS' => 'Statut',
    'LBL_INVOICE_STATUS' => 'Statut de la facture',
    'LBL_PRODUCT_QUANITY' => 'Quantit??',
    'LBL_PRODUCT_NAME' => 'Produit',
    'LBL_PART_NUMBER' => 'Num??ro de pi??ce',
    'LBL_PRODUCT_NOTE' => 'Notes',
    'LBL_PRODUCT_DESCRIPTION' => 'Description',
    'LBL_LIST_PRICE' => 'Liste',
    'LBL_DISCOUNT_AMT' => 'Remise',
    'LBL_UNIT_PRICE' => 'Prix de vente',
    'LBL_TOTAL_PRICE' => 'Total',
    'LBL_VAT' => 'Taxe', //VAT
    'LBL_VAT_AMT' => 'Montant des taxes', //VAT
    'LBL_ADD_PRODUCT_LINE' => 'Ajoutez une ligne de produits',
    'LBL_SERVICE_NAME' => 'Service',
    'LBL_SERVICE_LIST_PRICE' => 'Liste',
    'LBL_SERVICE_PRICE' => 'Prix de vente',
    'LBL_SERVICE_DISCOUNT' => 'Remise',
    'LBL_ADD_SERVICE_LINE' => 'Ajouter une ligne de service',
    'LBL_REMOVE_PRODUCT_LINE' => 'Supprimer',
    'LBL_PRINT_AS_PDF' => 'Imprimer en PDF',
    'LBL_EMAIL_INVOICE' => 'Envoyer la facture par E-mail',
    'LBL_LIST_NUM' => 'Num',
    'LBL_PDF_NAME' => 'Facture',
    'LBL_EMAIL_NAME' => 'Facture pour',
    'LBL_NO_TEMPLATE' => 'ERREUR\nPas de mod??le trouv??. Si vous n\'avez pas encore cr???? de mod??le de facture, allez dans le module "mod??les PDF" et cr??ez en un.',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Sous-total + taxes',//pre shipping
    'LBL_EMAIL_PDF' => 'Envoyer le PDF par E-mail',
    'LBL_ADD_GROUP' => 'Ajouter un groupe',
    'LBL_DELETE_GROUP' => 'Supprimer un groupe',
    'LBL_GROUP_NAME' => 'Nom du groupe',
    'LBL_GROUP_TOTAL' => 'Total du groupe',
    'LBL_SHIPPING_TAX' => 'Taxes de transport',
    'LBL_SHIPPING_TAX_AMT' => 'Taxes de transport',
    'LBL_IMPORT_LINE_ITEMS' => 'Importer des ??l??ments de ligne',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Sous-total (devise par d??faut)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Remise (devise par d??faut)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Taxe (devise par d??faut)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Transport (devise par d??faut)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (devise par d??faut)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Taxe de transport (devise par d??faut)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Total global (devise par d??faut)',
    'LBL_INVOICE_TO' => 'Factur?? ??',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Rubrique groupes',
    'LBL_AOS_PRODUCT_QUOTES' => 'Devis des produits',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Devis : Factures',
);
