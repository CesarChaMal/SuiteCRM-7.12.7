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

    'LBL_ADMINISTRATION_MAIN' => 'Ustawienia ????cznika',
    'LBL_AVAILABLE' => 'Dost??pne',
    'LBL_BACK' => '< Z powrotem',
    'LBL_CONFIRM_CONTINUE_SAVE' => 'Niekt??re wymagane pola s?? puste. Kontynuowa?? zapisywanie zmian?',
    'LBL_CONNECTOR_FIELDS' => 'Pola ????cznika',
    'LBL_DATA' => 'Dane',
    'LBL_DEFAULT' => 'Domy??lne',
    'LBL_DISABLED' => 'Niedost??pne',
    'LBL_ENABLED' => 'W????czone',
    'LBL_EXTERNAL' => 'Pozw??l uzytkownikom utworzy?? rekordy kont zewn??trznych do tego ????cznika. Aby u??y?? tego ????cznika, nale??y ustawi?? w??a??ciwo??ci w ustawieniach w??a??ciwo??ci ????cznika.',
    'LBL_EXTERNAL_SET_PROPERTIES' => ' Aby korzysta?? z tego ????cznika, w??a??ciwo??ci powinny by?? ustawione w pliku w??a??ciwo??ci ustawie?? strony.',
    'LBL_MERGE' => 'Scal',
    'LBL_MODIFY_DISPLAY_TITLE' => 'W????cz ????czniki',
    'LBL_MODIFY_DISPLAY_DESC' => 'Wybierz, kt??re ????czniki zostan?? w????czone dla kt??rych modu????w.',
    'LBL_MODULE_FIELDS' => 'Pola modu??u',
    'LBL_MODIFY_MAPPING_TITLE' => 'Mapowanie p??l ????cznik??w',
    'LBL_MODIFY_MAPPING_DESC' => 'Mapuj pola ????cznik??w do p??l modu????w w celu okre??lnia, kt??re dane ????cznika b??d?? widoczne i po????czone z rekordami modu??u.',
    'LBL_MODIFY_PROPERTIES_TITLE' => 'Konfiguracja w??a??ciwo??ci ????cznika',
    'LBL_MODIFY_PROPERTIES_DESC' => 'Konfiguruj w??a??ciwo??ci dla ka??dego ????cznika,  r??wnie?? adresy URL i klucze API.',
    'LBL_MODIFY_SEARCH_TITLE' => 'Zarz??dzaj wyszukiwaniem w ????cznikach',
    'LBL_MODIFY_SEARCH' => 'Wyszukaj',
    'LBL_MODIFY_SEARCH_DESC' => 'Wybierz pola ????cznika, kt??re b??d?? przeszukiwane  dla ka??dego modu??u.',
    'LBL_MODULE_NAME' => '????czniki',
    'LBL_NO_PROPERTIES' => 'Nie ma konfigurowalnych w??a??ciwo??ci dla tego ????cznika.',
    'LBL_SAVE' => 'Zapisz',
    'LBL_SUMMARY' => 'Podsumowanie',
    'LBL_STEP1' => 'Wyszukaj i poka?? dane',
    'LBL_STEP2' => 'Scal rekordy z',
    'LBL_TEST_SOURCE' => 'Sprawd?? dzia??anie ????cznika',
    'LBL_TEST_SOURCE_FAILED' => 'Test nie powi??d?? si??',
    'LBL_TEST_SOURCE_SUCCESS' => 'Test zako??czony powodzeniem',
    'LBL_TITLE' => 'Scalanie danych',

    'ERROR_NO_ADDITIONAL_DETAIL' => 'B????d: Nie znaleziono dodatkowych szczeg??????w dla tego rekordu.',
    'ERROR_NO_SEARCHDEFS_DEFINED' => '??adne modu??y nie zosta??y w????czone dla tego ????cznika. Wybierz modu?? dla tego ????cznika na stronie <b>W????czanie ????cznik??w</b>.',
    'ERROR_NO_SEARCHDEFS_MAPPED' => 'B????d: Brak w????czonych ????cznik??w, kt??re maj?? okre??lone pola wyszukiwania.',
    'ERROR_NO_SEARCHDEFS_MAPPING' => 'B??ad: Nie ma zdefiniowanych p??l wyszukiwania dla modu??u i ????cznika. Skontaktuj si?? z administratorem systemu.',
    'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS' => 'B??ad: Nie ma zdefiniowanych p??l modu??u, kt??re zosta??y zamapowane do wy??wietlenia w wynikach . Skontaktuj si?? z administratorem systemu.',
    'LBL_INFO_INLINE' => 'Informacja' /*for 508 compliance fix*/,
    'LBL_CLOSE' => 'Zamknij' /*for 508 compliance fix*/,

);
