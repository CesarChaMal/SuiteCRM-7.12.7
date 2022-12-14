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
    'ERR_NO_OPPS' => 'Prosz?? utworzy?? jakie?? Szans?? sprzeda??y, aby zobaczy?? wykres Szans sprzeda??y.',
    'LBL_ALL_OPPORTUNITIES' => 'Ca??kowita liczba wszystkich szans sprzeda??y to',
    'LBL_CHART_TYPE' => 'Typ wykresu:',
    'LBL_CREATED_ON' => 'Ostatnio uruchamiane',
    'LBL_CLOSE_DATE_START' => 'Oczekiwana data zamknecia - Od:',
    'LBL_CLOSE_DATE_END' => 'Oczekiwana data zamkni??cia - Do:',
    'LBL_DATE_END' => 'Data Zako??czenia:',
    'LBL_DATE_RANGE_TO' => 'do',
    'LBL_DATE_RANGE' => 'Zakres daty to',
    'LBL_DATE_START' => 'Data rozp.:',
    'LBL_EDIT' => 'Edytuj',
    'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'Globalne, skumulowane wyniki dla wybranych ??r??de?? pozyskania klienta, wybranych u??ytkownik??w, w wybranym przedziale czasowym, dla wszystkich status??w procesu sprzeda??y.',
    'LBL_LEAD_SOURCE_BY_OUTCOME' => 'Wszystkie Szanse sprzeda??y Wed??ug Przychodu Potencjalnego Klienta',
    'LBL_LEAD_SOURCE_FORM_DESC' => 'Pokazuje zsumowane warto??ci Szans sprzeda??y dla wybranych potencjalnych klient??w dotycz??ce konkretnych u??ytkownik??w.',
    'LBL_LEAD_SOURCE_FORM_TITLE' => 'Wszystkie Okazje Wed??ug Namiaru',
    'LBL_LEAD_SOURCE_OTHER' => 'Inny',
    'LBL_LEAD_SOURCES' => '??r??d??a pochodzenia Potencjalnych Klient??w:',
    'LBL_MODULE_NAME' => 'Kokpit',
    'LBL_MODULE_TITLE' => 'Dashboard: Strona G????wna',
    'LBL_MONTH_BY_OUTCOME_DESC' => 'Globalne, skumulowane warto??ci przychod??w miesi??cznie, wg. projekt??w (dla wybranych u??ytkownik??w), dla kt??rych spodziewana data zako??czenia mie??ci si?? w wybranym przedziale czasowym. Wynik liczony jest dla projekt??w posiadaj??cy status Zako??czony sukcesem, zako??czony pora??k?? i pozosta??ych.',
    'LBL_OPP_SIZE' => 'Warto???? okazji w',
    'LBL_OPP_THOUSANDS' => 'K',
    'LBL_OPPS_IN_LEAD_SOURCE' => 'szanse sprzeda??y gdzie znajduje si?? ??r??d??o potencjalnego klienta',
    'LBL_OPPS_IN_STAGE' => ' w miejscu etapu sprzeda??y',
    'LBL_OPPS_OUTCOME' => ' w miejscu stopnia rezytlatu',
    'LBL_OPPS_WORTH' => 'wa??ne okazje',
    'LBL_PIPELINE_FORM_TITLE_DESC' => 'Pokazuje zsumowane warto??ci wg wybranych etap??w sprzeda??y Twoich okazji, gdy szacowana data zamkni??cia jest zawarta w ramach okre??lonego przedzia??u czasowego.',
    'LBL_REFRESH' => 'Od??wie??',
    'LBL_ROLLOVER_DETAILS' => 'Rozwi?? pasek (zada??) w celu uzyskania szczeg??????w.',
    'LBL_ROLLOVER_WEDGE_DETAILS' => 'Rozwi?? kraw??d?? dla uzyskania szczeg??????w.',
    'LBL_SALES_STAGE_FORM_DESC' => 'Warto???? skumulowana projekt??w wed??ug etap??w sprzeda??y dla wybranych u??ytkownik??w w okre??lonym przedziale czasowym. ',
    'LBL_SALES_STAGE_FORM_TITLE' => 'Wed??ug Etapu Sprzeda??y',
    'LBL_SALES_STAGES' => 'Etapy Sprzeda??y:',
    'LBL_TOTAL_PIPELINE' => 'Ca??y Wykres',
    'LBL_USERS' => 'U??ytkownicy:',
    'LBL_YEAR_BY_OUTCOME' => ' Wed??ug Miesi??ca i Przychodu',
    'LBL_YEAR' => 'Rok:',
    'LNK_NEW_ACCOUNT' => 'Utw??rz kontrahenta',
    'LNK_NEW_CALL' => 'Zaplanuj Rozmow?? telefoniczn??',
    'LNK_NEW_CASE' => 'Utw??rz Spraw??',
    'LNK_NEW_CONTACT' => 'Utw??rz Kontakt',
    'LNK_NEW_LEAD' => 'Utw??rz Potencjalnego Klienta',
    'LNK_NEW_MEETING' => 'Zaplanuj Spotkanie',
    'LNK_NEW_NOTE' => 'Utw??rz Notatk?? lub Za????cznik',
    'LNK_NEW_OPPORTUNITY' => 'Utw??rz Szans?? sprzeda??y',
    'LNK_NEW_TASK' => 'Utw??rz Zadanie',
    'NTC_NO_LEGENDS' => 'Brak',

    'LBL_TITLE' => 'Tytu??:',
    'LBL_MY_MODULES_USED_SIZE' => 'Liczba wej????',

    'LBL_CHART_PIPELINE_BY_SALES_STAGE' => 'Wed??ug Etapu Sprzeda??y',
    'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => '??r??d??a szansy sprzeda??y wed??ug wyniku',
    'LBL_CHART_OUTCOME_BY_MONTH' => 'Wynik wg miesi??ca',
    'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => 'Lejek sprzeda??owy wed??ug ??r??d??a potencjalnego klienta',
    'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => 'Wed??ug mojego etapu sprzeda??y',
    'LBL_CHART_MY_MODULES_USED_30_DAYS' => 'Moje u??ywane modu??y (30 dni)',
);
