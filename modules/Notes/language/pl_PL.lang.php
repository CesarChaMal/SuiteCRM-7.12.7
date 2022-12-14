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
    'ERR_DELETE_RECORD' => 'Numer rekordu musi by?? okre??lony, aby usun???? Kontrahenta.',
    'LBL_ACCOUNT_ID' => 'ID Kontrahenta:',
    'LBL_CASE_ID' => 'ID Sprawy:',
    'LBL_CLOSE' => 'Zamknij:',
    'LBL_CONTACT_ID' => 'ID Kontaktu:',
    'LBL_CONTACT_NAME' => 'Kontakt:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Notatki',
    'LBL_DESCRIPTION' => 'Notatka',
    'LBL_EMAIL_ADDRESS' => 'Adres e-mail:',
    'LBL_EMAIL_ATTACHMENT' => 'Za????cznik e-mail',
    'LBL_FILE_MIME_TYPE' => 'Typ [Mime]',
    'LBL_FILE_URL' => 'URL Pliku',
    'LBL_FILENAME' => 'Za????cznik:',
    'LBL_LEAD_ID' => 'ID Potencjalnego Klienta',
    'LBL_LIST_CONTACT_NAME' => 'Kontakt',
    'LBL_LIST_DATE_MODIFIED' => 'Data modyfikacji',
    'LBL_LIST_FILENAME' => 'Za????czniki',
    'LBL_LIST_FORM_TITLE' => 'Lista Notatek',
    'LBL_LIST_RELATED_TO' => 'Powi??zany z',
    'LBL_LIST_SUBJECT' => 'Temat',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_CONTACT' => 'Kontakt',
    'LBL_MODULE_NAME' => 'Notatki',
    'LBL_MODULE_TITLE' => 'Notatki: Strona g????wna',
    'LBL_NEW_FORM_TITLE' => 'Utw??rz notatk?? lub Dodaj za????cznik',
    'LBL_NOTE_STATUS' => 'Notatka',
    'LBL_NOTE_SUBJECT' => 'Temat:',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Za????czniki',
    'LBL_NOTE' => 'Notatki:',
    'LBL_OPPORTUNITY_ID' => 'ID szansy sprzeda??y',
    'LBL_PARENT_ID' => 'Identyfikator rodzica',
    'LBL_PARENT_TYPE' => 'Typ rodzica',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_FLAG' => '>Wy??wietl w portalu?',
    'LBL_EMBED_FLAG' => 'Umie??ci?? w wiadomo??ci e-mail?',
    'LBL_PRODUCT_ID' => 'ID produktu:',
    'LBL_QUOTE_ID' => 'ID oferty:',
    'LBL_RELATED_TO' => 'Powi??zany z:',
    'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie notatki',
    'LBL_STATUS' => 'Status',
    'LBL_SUBJECT' => 'Temat:',
    'LNK_IMPORT_NOTES' => 'Importuj notatki',
    'LNK_NEW_NOTE' => 'Dodaj notatk??',
    'LNK_NOTE_LIST' => 'Przegl??daj notatki',
    'LBL_MEMBER_OF' => 'Podlega pod:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Przydzielony u??ytkownik',
    'LBL_REMOVING_ATTACHMENT' => 'Usuwanie za????cznika ...',
    'ERR_REMOVING_ATTACHMENT' => 'B????d podczas Usuwania za????cznik??w...',
    'LBL_CREATED_BY' => 'Utworzony przez',
    'LBL_MODIFIED_BY' => 'Zmodyfikowane przez',
    'LBL_SEND_ANYWAYS' => 'Ta wiadomo???? nie ma tematu. Czy wys??a??/zachowa?? mimo to?',
    'LBL_NOTE_INFORMATION' => 'Przegl??d', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MY_NOTES_DASHLETNAME' => 'Moje Notatki',
    'LBL_EDITLAYOUT' => 'Edycja wygladu' /*for 508 compliance fix*/,
    //For export labels
    'LBL_FIRST_NAME' => 'Imi??',
    'LBL_LAST_NAME' => 'Nazwisko',
    'LBL_DATE_ENTERED' => 'Data utworzenia',
    'LBL_DATE_MODIFIED' => 'Data modyfikacji',
    'LBL_DELETED' => 'Usuni??te',
    'LBL_FILE_CONTENTS' => 'Zawarto???? pliku',
);
