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
    //module
    'LBL_MODULE_NAME' => 'Dokumenty',
    'LBL_MODULE_TITLE' => 'Dokumenty: Strona g????wna',
    'LNK_NEW_DOCUMENT' => 'Utw??rz dokument',
    'LNK_DOCUMENT_LIST' => 'Przegl??daj dokumenty',
    'LBL_DOC_REV_HEADER' => 'Liczba wersji dokumentu',
    'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie dokument??w',
    //vardef labels
    'LBL_NAME' => 'Nazwa dokumentu',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_CATEGORY' => 'Kategoria',
    'LBL_SUBCATEGORY' => 'Podkategoria',
    'LBL_STATUS' => 'Status',
    'LBL_CREATED_BY' => 'Utworzony przez',
    'LBL_DATE_ENTERED' => 'Data utworzenia',
    'LBL_DATE_MODIFIED' => 'Data modyfikacji',
    'LBL_DELETED' => 'Usuni??ty',
    'LBL_MODIFIED' => 'Zmodyfikowany przez ID',
    'LBL_MODIFIED_USER' => 'Zmodyfikowany przez',
    'LBL_CREATED' => 'Utworzony przez',
    'LBL_REVISIONS' => 'Wersje',
    'LBL_RELATED_DOCUMENT_ID' => 'ID dokument??w po????czonych',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'ID wersji dokumentu powi??zanego',
    'LBL_IS_TEMPLATE' => 'Jest szablonem',
    'LBL_TEMPLATE_TYPE' => 'Typ dokumentu',
    'LBL_ASSIGNED_TO_NAME' => 'Przydzielony do:',
    'LBL_REVISION_NAME' => 'Numer wersji',
    'LBL_MIME' => 'Typ mime',
    'LBL_REVISION' => 'Wersja',
    'LBL_DOCUMENT' => 'Dokument powi??zany',
    'LBL_LATEST_REVISION' => 'Najnowsza wersja',
    'LBL_CHANGE_LOG' => 'Dziennik zmian',
    'LBL_ACTIVE_DATE' => 'Data publikacji',
    'LBL_EXPIRATION_DATE' => 'Data wyganiecia',
    'LBL_FILE_EXTENSION' => 'Rozszerzenie pliku',
    'LBL_LAST_REV_MIME_TYPE' => 'Typ MIME ostatniej wersji',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Niesprecyzowany',
    'LBL_HOMEPAGE_TITLE' => 'Moje dokumenty',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Nowy dokument',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Nazwa dokumentu:',
    'LBL_FILENAME' => 'Nazwa pliku:',
    'LBL_LIST_FILENAME' => 'Nazwa pliku',
    'LBL_DOC_VERSION' => 'Wersja:',
    'LBL_FILE_UPLOAD' => 'Plik:',

    'LBL_CATEGORY_VALUE' => 'Kategoria:',
    'LBL_LIST_CATEGORY' => 'Kategoria',
    'LBL_SUBCATEGORY_VALUE' => 'Podkategoria:',
    'LBL_DOC_STATUS' => 'Status:',
    'LBL_LAST_REV_CREATOR' => 'Wersja utworzona przez:',
    'LBL_LASTEST_REVISION_NAME' => 'Nazwa ostatniej wersji:',
    'LBL_SELECTED_REVISION_NAME' => 'Nazwa wybranej wersji:',
    'LBL_CONTRACT_STATUS' => 'Status umowy:',
    'LBL_CONTRACT_NAME' => 'Nazwa umowy:',
    'LBL_DET_RELATED_DOCUMENT' => 'Dokument powi??zany:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "Wersja dokumentu powi??zanego:",
    'LBL_DET_IS_TEMPLATE' => 'Szablon? :',
    'LBL_DET_TEMPLATE_TYPE' => 'Typ dokumentu:',
    'LBL_DOC_DESCRIPTION' => 'Opis:',
    'LBL_DOC_ACTIVE_DATE' => 'Data publikacji:',
    'LBL_DOC_EXP_DATE' => 'Data wyga??ni??cia:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Lista dokument??w',
    'LBL_LIST_DOCUMENT' => 'Dokument',
    'LBL_LIST_SUBCATEGORY' => 'Podkategoria',
    'LBL_LIST_REVISION' => 'Wersja',
    'LBL_LIST_LAST_REV_CREATOR' => 'Opublikowany przez',
    'LBL_LIST_LAST_REV_DATE' => 'Data wersji',
    'LBL_LIST_VIEW_DOCUMENT' => 'Podgl??d',
    'LBL_LIST_ACTIVE_DATE' => 'Data publikacji',
    'LBL_LIST_EXP_DATE' => 'Data wyga??ni??cia',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LINKED_ID' => 'ID po????czone',
    'LBL_SELECTED_REVISION_ID' => 'ID wybranej wersji',
    'LBL_LATEST_REVISION_ID' => 'ID ostatniej wersji',
    'LBL_SELECTED_REVISION_FILENAME' => 'Nazwa pliku wybranej wersji',
    'LBL_FILE_URL' => 'URL pliku',

    //document search form.
    'LBL_SF_CATEGORY' => 'Kategoria:',
    'LBL_SF_SUBCATEGORY' => 'Podkategoria:',

    'DEF_CREATE_LOG' => 'Dokument utworzony przez',

    //error messages
    'ERR_DOC_NAME' => 'Nazwa dokumentu',
    'ERR_DOC_ACTIVE_DATE' => 'Data publikacji',
    'ERR_FILENAME' => 'Nazwa pliku',
    'ERR_DOC_VERSION' => 'Wersja dokumentu',
    'ERR_DELETE_CONFIRM' => 'Czy chcesz usun???? t?? wersj?? dokumentu?',
    'ERR_DELETE_LATEST_VERSION' => 'Nie jeste?? uprawiony do usuni??cia najnowszej wersji dokumentu.',
    'LNK_NEW_MAIL_MERGE' => 'Korespondencja Seryjna',
    'ERR_MISSING_FILE' => 'Ten dokument nie posiada pliku, najprawdopodobniej z powodu wyst??pienia b????du podczas wysy??ania na serwer.  Prosz?? ponowi?? pr??b?? przesy??ania pliku lub skontaktowa?? si?? z administratorem.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Nazwa',
    'LBL_LIST_IS_TEMPLATE' => 'Szablon?',
    'LBL_LIST_TEMPLATE_TYPE' => 'Typ dokumentu',
    'LBL_LAST_REV_CREATE_DATE' => 'Data utworzenia ostatniej wersji',
    'LBL_CONTRACTS' => 'Umowy',
    'LBL_CREATED_USER' => 'U??ytkownik tworz??cy',
    'LBL_DOCUMENT_INFORMATION' => 'Przegl??d', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'ID ??r??d??a dokumentu',
    'LBL_DOC_TYPE' => '??r??d??o',
    'LBL_DOC_TYPE_POPUP' => 'Wybierz ??r??d??o, do kt??rego ten dokument zostanie za??adowany i, z kt??rego b??dzie dost??pny.',
    'LBL_DOC_URL' => 'URL ??r??d??a dokumentu',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Nazwa pliku',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Lista 20 pierwszych ostatnio modyfikowanych plik??w jest wy??wietlana w kolejno??ci malej??cej w li??cie poni??ej. U??ywaj wyszukiwarki, aby znale???? inne pliki.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Nazwa pliku',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'U??ytkownik pr??bowa?? uzyska?? dost??p do nieprawid??owego zewn??trznego interfejsu API ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'Weryfikacja logowania do zewn??trznego interfejsu API nie powiod??a si?? ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Kontrahenci',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Szanse Sprzeda??y',
    'LBL_CASES_SUBPANEL_TITLE' => 'Sprawy',
    'LBL_BUGS_SUBPANEL_TITLE' => 'B????dy',

    'LBL_AOS_CONTRACTS' => 'Umowy',
);
