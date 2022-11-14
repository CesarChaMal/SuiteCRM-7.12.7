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
    'LBL_MODULE_NAME' => 'Zadania',
    'LBL_MODULE_TITLE' => ' Zadania: Strona główna',
    'LBL_SEARCH_FORM_TITLE' => ' Wyszukiwanie Zadania',
    'LBL_LIST_FORM_TITLE' => ' Lista zadań',
    'LBL_NEW_FORM_TITLE' => ' Utwórz zadanie',
    'LBL_LIST_CLOSE' => 'Zamknij',
    'LBL_LIST_SUBJECT' => 'Temat',
    'LBL_LIST_CONTACT' => 'Kontakt',
    'LBL_LIST_PRIORITY' => 'Priorytet',
    'LBL_LIST_RELATED_TO' => 'Powiązany z',
    'LBL_LIST_DUE_DATE' => 'Data ukończenia',
    'LBL_LIST_DUE_TIME' => 'Czas ukończenia',
    'LBL_SUBJECT' => 'Temat:',
    'LBL_STATUS' => 'Status:',
    'LBL_DUE_DATE' => 'Data ukończenia:',
    'LBL_DUE_TIME' => 'Czas ukończenia:',
    'LBL_PRIORITY' => 'Priorytet:',
    'LBL_DUE_DATE_AND_TIME' => 'Data i czas ukończenia:',
    'LBL_START_DATE_AND_TIME' => 'Data i Czas Rozpoczęcia: ',
    'LBL_START_DATE' => 'Data rozpoczęcia:',
    'LBL_LIST_START_DATE' => 'Data Rozpoczęcia',
    'LBL_START_TIME' => 'Czas rozpoczęcia:',
    'DATE_FORMAT' => '(rrrr-mm-dd)',
    'LBL_DAYS_UNTIL_DUE_TASK' => 'To zadanie jest wymagalne za',
    'LBL_DAYS_OVERDUE' => 'To zadanie jest zaległe przez ',
    'LBL_TASK_COMPLETED' => 'To zadanie zostało ukończone',
    'LBL_NONE' => 'Brak',
    'LBL_CONTACT' => 'Kontakt:',
    'LBL_EMAIL_ADDRESS' => 'Adres e-mail:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_EMAIL' => 'Adres e-mail:',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_NAME' => 'Nazwa:',
    'LBL_CONTACT_NAME' => 'Nazwa kontaktu ',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_DATE_DUE_FLAG' => 'Brak daty ukończenia',
    'LBL_DATE_START_FLAG' => 'Brak daty rozpoczęcia',
    'LBL_LIST_MY_TASKS' => 'Moje rozpoczęte zadania',
    'LNK_NEW_TASK' => 'Utwórz zadanie',
    'LNK_TASK_LIST' => 'Przeglądaj zadania',
    'LNK_IMPORT_TASKS' => 'Importuj zadania',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Przydzielony użytkownik',
    'LBL_ASSIGNED_TO_NAME' => 'Przydzielony do:',
    'LBL_LIST_DATE_MODIFIED' => 'Data modyfikacji',
    'LBL_CONTACT_ID' => 'ID Kontaktu:',
    'LBL_PARENT_ID' => 'Identyfikator rodzica',
    'LBL_CONTACT_PHONE' => 'Telefon kontaktu:',
    'LBL_PARENT_TYPE' => 'Typ rodzica:',
    'LBL_TASK_INFORMATION' => 'Przegląd zadań', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EDITLAYOUT' => 'Edycja wygladu' /*for 508 compliance fix*/,
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notatki',
    //For export labels
    'LBL_DATE_DUE' => 'Data ukończenia',
    'LBL_RELATED_TO' => 'Powiązany z:',
);
