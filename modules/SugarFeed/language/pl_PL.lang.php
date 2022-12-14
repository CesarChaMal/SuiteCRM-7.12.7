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
    'LBL_ASSIGNED_TO_ID' => 'ID przydzielonego u??ytkownika',
    'LBL_ASSIGNED_TO_NAME' => 'Przypisano do',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data utworzenia',
    'LBL_DATE_MODIFIED' => 'Data modyfikacji',
    'LBL_MODIFIED' => 'Zmodyfikowane przez',
    'LBL_MODIFIED_NAME' => 'Nazwa u??ytkownika modyfikuj??cego',
    'LBL_CREATED' => 'Utworzony przez',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_DELETED' => 'Usuni??te',
    'LBL_NAME' => 'Nazwa',
    'LBL_SAVING' => 'Zapisywanie...',
    'LBL_SAVED' => 'Zapisano',
    'LBL_CREATED_USER' => 'Utworzony przez U??ytkownika',
    'LBL_MODIFIED_USER' => 'Zmodyfikowane przez u??ytkownika',
    'LBL_LIST_FORM_TITLE' => 'Lista zak??adek',
    'LBL_MODULE_NAME' => 'Historia aktywno??ci',
    'LBL_MODULE_TITLE' => 'Historia aktywno??ci',
    'LBL_DASHLET_DISABLED' => 'Uwaga: System historii aktywno??ci jest wy????czony, nie mo??na dodawa?? ??adnych nowych wpis??w, dop??ki nie zostanie w????czony',
    'LBL_RECORDS_DELETED' => 'Je??li system historii aktywno??ci SuiteCRM zostanie w????czony, nowe wpisy zostan?? wygenerowane automatycznie, a wszystkie poprzednio wprowadzone do historii aktywno??ci zostan?? usuni??te.',
    'LBL_CONFIRM_DELETE_RECORDS' => 'Czy na pewno chcesz usun???? wszystkie wpisy historii aktywno??ci?',
    'LBL_FLUSH_RECORDS' => 'Usu?? wpisy',
    'LBL_ENABLE_FEED' => 'W????cz histori?? aktywno??ci',
    'LBL_ENABLE_MODULE_LIST' => 'Aktywuj histori?? aktywno??ci dla',
    'LBL_HOMEPAGE_TITLE' => 'Moja historia aktywno??ci',
    'LNK_NEW_RECORD' => 'Nowa historia aktywno??ci',
    'LNK_LIST' => 'Historia aktywno??ci',
    'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie historii aktywno??ci',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Wydarzenia',
    'LBL_NEW_FORM_TITLE' => 'Nowa historia aktywno??ci',
    'LBL_ALL' => 'Wszystko',
    'LBL_USER_FEED' => 'Historia aktywno??ci u??ytkownika',
    'LBL_ENABLE_USER_FEED' => 'Aktywuj historie aktywno??ci u??ytkownika',
    'LBL_TO' => 'Widoczne dla zespo??u',
    'LBL_IS' => 'jest',
    'LBL_DONE' => 'Wykonano',
    'LBL_TITLE' => 'Tytu??',
    'LBL_ROWS' => 'Wiersze',
    'LBL_CATEGORIES' => 'Modu??y',
    'LBL_TIME_LAST_WEEK' => 'w zesz??ym tygodniu',
    'LBL_TIME_WEEKS' => 'tygodni',
    'LBL_TIME_DAYS' => 'dni',
    'LBL_TIME_YESTERDAY' => 'wczoraj',
    'LBL_TIME_HOURS' => 'godziny',
    'LBL_TIME_HOUR' => 'godzin??',
    'LBL_TIME_MINUTES' => 'minut',
    'LBL_TIME_MINUTE' => 'minut??',
    'LBL_TIME_SECONDS' => 'sekundy',
    'LBL_TIME_SECOND' => 'sekund??',
    'LBL_TIME_AND' => 'oraz',
    'LBL_TIME_AGO' => 'temu',
// Activity stream
    'CREATED_CONTACT' => 'utworzy??(a) <b>nowy</b> {0}',
    'CREATED_OPPORTUNITY' => 'utworzy??(a) <b>now??</b> {0}',
    'CREATED_CASE' => 'utworzy??(a) <b>now??</b> {0}',
    'CREATED_LEAD' => 'utworzy??(a) <b>now??</b> {0}',
    'FOR' => 'o warto??ci', // Activity stream for cases
    'FOR_AMOUNT' => 'na kwot??', // Activity stream for cases
    'CLOSED_CASE' => '<b>zamkn????(e??a)</b> {0} ',
    'CONVERTED_LEAD' => '<b>przekonwertowa??(a)</b> {0}',
    'WON_OPPORTUNITY' => '<b>sfinalizowa??(a)</b> {0}',
    'WITH' => 'z',

    'LBL_LINK_TYPE_Link' => '????cze',
    'LBL_LINK_TYPE_Image' => 'Obraz',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => 'Wybierz',
    'LBL_POST' => 'Wy??lij',
    'LBL_AUTHENTICATE' => 'Po????cz z',
    'LBL_AUTHENTICATION_PENDING' => 'Nie wszystkie z zewn??trznych kont wybrane zosta??y uwierzytelnione. Kliknij Anuluj aby powr??ci?? do okna Opcje w celu uwierzytelnienia zewn??trznych kont, lub kliknij OK przej???? bez autoryzacji.',
    'LBL_ADVANCED_SEARCH' => 'Filtr zaawansowany' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'Poka?? wi??cej opcji',
    'LBL_HIDE_OPTIONS' => 'Ukryj opcje',
    'LBL_VIEW' => 'Podgl??d',
    'LBL_POST_TITLE' => 'Status Aktualizacji dla ',
    'LBL_URL_LINK_TITLE' => 'Link URL do u??ytku',
);
