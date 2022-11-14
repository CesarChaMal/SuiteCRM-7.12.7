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
    'LBL_ASSIGNED_TO_ID' => 'ID przydzielonego użytkownika',
    'LBL_ASSIGNED_TO_NAME' => 'Przypisano do',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data utworzenia',
    'LBL_DATE_MODIFIED' => 'Data modyfikacji',
    'LBL_MODIFIED' => 'Zmodyfikowane przez',
    'LBL_MODIFIED_NAME' => 'Nazwa użytkownika modyfikującego',
    'LBL_CREATED' => 'Utworzony przez',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_DELETED' => 'Usunięte',
    'LBL_NAME' => 'Nazwa',
    'LBL_SAVING' => 'Zapisywanie...',
    'LBL_SAVED' => 'Zapisano',
    'LBL_CREATED_USER' => 'Utworzony przez Użytkownika',
    'LBL_MODIFIED_USER' => 'Zmodyfikowane przez użytkownika',
    'LBL_LIST_FORM_TITLE' => 'Lista zakładek',
    'LBL_MODULE_NAME' => 'Historia aktywności',
    'LBL_MODULE_TITLE' => 'Historia aktywności',
    'LBL_DASHLET_DISABLED' => 'Uwaga: System historii aktywności jest wyłączony, nie można dodawać żadnych nowych wpisów, dopóki nie zostanie włączony',
    'LBL_RECORDS_DELETED' => 'Jeśli system historii aktywności SuiteCRM zostanie włączony, nowe wpisy zostaną wygenerowane automatycznie, a wszystkie poprzednio wprowadzone do historii aktywności zostaną usunięte.',
    'LBL_CONFIRM_DELETE_RECORDS' => 'Czy na pewno chcesz usunąć wszystkie wpisy historii aktywności?',
    'LBL_FLUSH_RECORDS' => 'Usuń wpisy',
    'LBL_ENABLE_FEED' => 'Włącz historię aktywności',
    'LBL_ENABLE_MODULE_LIST' => 'Aktywuj historię aktywności dla',
    'LBL_HOMEPAGE_TITLE' => 'Moja historia aktywności',
    'LNK_NEW_RECORD' => 'Nowa historia aktywności',
    'LNK_LIST' => 'Historia aktywności',
    'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie historii aktywności',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Wydarzenia',
    'LBL_NEW_FORM_TITLE' => 'Nowa historia aktywności',
    'LBL_ALL' => 'Wszystko',
    'LBL_USER_FEED' => 'Historia aktywności użytkownika',
    'LBL_ENABLE_USER_FEED' => 'Aktywuj historie aktywności użytkownika',
    'LBL_TO' => 'Widoczne dla zespołu',
    'LBL_IS' => 'jest',
    'LBL_DONE' => 'Wykonano',
    'LBL_TITLE' => 'Tytuł',
    'LBL_ROWS' => 'Wiersze',
    'LBL_CATEGORIES' => 'Moduły',
    'LBL_TIME_LAST_WEEK' => 'w zeszłym tygodniu',
    'LBL_TIME_WEEKS' => 'tygodni',
    'LBL_TIME_DAYS' => 'dni',
    'LBL_TIME_YESTERDAY' => 'wczoraj',
    'LBL_TIME_HOURS' => 'godziny',
    'LBL_TIME_HOUR' => 'godzinę',
    'LBL_TIME_MINUTES' => 'minut',
    'LBL_TIME_MINUTE' => 'minutę',
    'LBL_TIME_SECONDS' => 'sekundy',
    'LBL_TIME_SECOND' => 'sekundę',
    'LBL_TIME_AND' => 'oraz',
    'LBL_TIME_AGO' => 'temu',
// Activity stream
    'CREATED_CONTACT' => 'utworzył(a) <b>nowy</b> {0}',
    'CREATED_OPPORTUNITY' => 'utworzył(a) <b>nową</b> {0}',
    'CREATED_CASE' => 'utworzył(a) <b>nową</b> {0}',
    'CREATED_LEAD' => 'utworzył(a) <b>nową</b> {0}',
    'FOR' => 'o wartości', // Activity stream for cases
    'FOR_AMOUNT' => 'na kwotę', // Activity stream for cases
    'CLOSED_CASE' => '<b>zamknął(eła)</b> {0} ',
    'CONVERTED_LEAD' => '<b>przekonwertował(a)</b> {0}',
    'WON_OPPORTUNITY' => '<b>sfinalizował(a)</b> {0}',
    'WITH' => 'z',

    'LBL_LINK_TYPE_Link' => 'Łącze',
    'LBL_LINK_TYPE_Image' => 'Obraz',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => 'Wybierz',
    'LBL_POST' => 'Wyślij',
    'LBL_AUTHENTICATE' => 'Połącz z',
    'LBL_AUTHENTICATION_PENDING' => 'Nie wszystkie z zewnętrznych kont wybrane zostały uwierzytelnione. Kliknij Anuluj aby powrócić do okna Opcje w celu uwierzytelnienia zewnętrznych kont, lub kliknij OK przejść bez autoryzacji.',
    'LBL_ADVANCED_SEARCH' => 'Filtr zaawansowany' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'Pokaż więcej opcji',
    'LBL_HIDE_OPTIONS' => 'Ukryj opcje',
    'LBL_VIEW' => 'Podgląd',
    'LBL_POST_TITLE' => 'Status Aktualizacji dla ',
    'LBL_URL_LINK_TITLE' => 'Link URL do użytku',
);
