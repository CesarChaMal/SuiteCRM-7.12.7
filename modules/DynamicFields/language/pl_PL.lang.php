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
    'LNK_NEW_CALL' => 'Utw??rz rozmow?? telefoniczn??',
    'LNK_NEW_MEETING' => 'Utw??rz spotkanie',
    'LNK_NEW_TASK' => 'Utw??rz zadanie',
    'LNK_NEW_NOTE' => 'Dodaj notatk??',
    'LNK_NEW_EMAIL' => 'Archiwum email',
    'LNK_CALL_LIST' => 'Rozmowy telefoniczne',
    'LNK_MEETING_LIST' => 'Spotkania',
    'LNK_TASK_LIST' => 'Zadania',
    'LNK_NOTE_LIST' => 'Lista notatek',
    'LBL_ADD_FIELD' => 'Dodaj pole:',
    'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie modu??u',
    'COLUMN_TITLE_NAME' => 'Nazwa pola',
    'COLUMN_TITLE_DISPLAY_LABEL' => 'Poka?? etykiet??',
    'COLUMN_TITLE_LABEL_VALUE' => 'Warto???? etykiety',
    'COLUMN_TITLE_LABEL' => 'Nazwa systemowa',
    'COLUMN_TITLE_DATA_TYPE' => 'Typ danych',
    'COLUMN_TITLE_MAX_SIZE' => 'Rozmiar maksymalny',
    'COLUMN_TITLE_HELP_TEXT' => 'Tekst pomocy',
    'COLUMN_TITLE_COMMENT_TEXT' => 'Tekst Komentarza',
    'COLUMN_TITLE_REQUIRED_OPTION' => 'Pole obowi??zkowe',
    'COLUMN_TITLE_DEFAULT_VALUE' => 'Warto???? domy??lna',
    'COLUMN_TITLE_FRAME_HEIGHT' => 'Wysoko???? ramki IFrame',
    'COLUMN_TITLE_HTML_CONTENT' => 'HTML',
    'COLUMN_TITLE_URL' => 'Domy??lny adres URL',
    'COLUMN_TITLE_AUDIT' => '??ledzenie zmian',
    'COLUMN_TITLE_MIN_VALUE' => 'Warto???? minimalna',
    'COLUMN_TITLE_MAX_VALUE' => 'Warto???? maksymalna',
    'COLUMN_TITLE_LABEL_ROWS' => 'Wiersze',
    'COLUMN_TITLE_LABEL_COLS' => 'Kolumny',
    'COLUMN_TITLE_DISPLAYED_ITEM_COUNT' => '# Element??w wy??wietlono',
    'COLUMN_TITLE_AUTOINC_NEXT' => 'Automatyczne Zwi??ksza Nast??pn?? warto???? ',
    'COLUMN_DISABLE_NUMBER_FORMAT' => 'Wy????cz format',
    'COLUMN_TITLE_ENABLE_RANGE_SEARCH' => 'W????cz przedzia?? wyszukiwania',
    'LBL_DROP_DOWN_LIST' => 'Lista wyboru',
    'LBL_RADIO_FIELDS' => 'Przyciski typu radio',
    'LBL_MULTI_SELECT_LIST' => 'Lista wielokrotnego wyboru',
    'COLUMN_TITLE_PRECISION' => 'Precyzja',
    'LBL_MODULE' => 'Modu??',
    'COLUMN_TITLE_MASS_UPDATE' => 'Masowa edycja',
    'COLUMN_TITLE_IMPORTABLE' => 'Importowalne',
    'COLUMN_TITLE_DUPLICATE_MERGE' => 'Scal duplikaty',
    'LBL_LABEL' => 'Etykieta',
    'LBL_DATA_TYPE' => 'Typ danych',
    'LBL_DEFAULT_VALUE' => 'Warto???? domy??lna',
    'ERR_RESERVED_FIELD_NAME' => "Zarezerwowane s??owa kluczowe",
    'ERR_SELECT_FIELD_TYPE' => 'Wybierz typ pola',
    'ERR_FIELD_NAME_ALREADY_EXISTS' => 'Pole ju?? istnieje',
    'LBL_BTN_ADD' => 'Dodaj',
    'LBL_BTN_EDIT' => 'Edytuj',
    'LBL_GENERATE_URL' => 'Generowanie URL',
    'LBL_CALCULATED' => 'Obliczona warto????',
    'LBL_LINK_TARGET' => 'Otw??rz link w',
    'LBL_IMAGE_WIDTH' => 'Szeroko????',
    'LBL_IMAGE_HEIGHT' => 'Wysoko????',
    'LBL_IMAGE_BORDER' => 'Obramowanie',
    'LBL_HELP' => 'Pomoc' /*for 508 compliance fix*/,
    'COLUMN_TITLE_INLINE_EDIT_TEXT' => 'Edycja poza widokiem edycji',
    'COLUMN_TITLE_PARENT_ENUM' => 'Macierzysta lista rozwijana',
);
