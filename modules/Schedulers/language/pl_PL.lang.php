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
// OOTB Scheduler Job Names:
    'LBL_OOTB_WORKFLOW' => 'Przetw??rz zadania WorkFlow',
    'LBL_OOTB_REPORTS' => 'Wykonaj Raport z Wykonania Zaplanowanych Zada??',
    'LBL_OOTB_IE' => 'Sprawd?? Skrzynki Poczty Przychodz??cej',
    'LBL_OOTB_BOUNCE' => 'Wykonaj nocn?? wysy??k?? odbitej poczty kampanii',
    'LBL_OOTB_CAMPAIGN' => 'Wykonaj nocn?? masow?? wysy??k?? poczty kampanii',
    'LBL_OOTB_PRUNE' => 'Oczy???? baz?? danych 1-go dnia miesi??ca',
    'LBL_OOTB_TRACKER' => 'Oczy???? tabele tropiciela',
    'LBL_OOTB_SUITEFEEDS' => 'Przytnij  tabele SuiteCRM Feed',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Uruchom powiadomienia e-mail',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Wyczy???? Kolejk?? Zada??',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Us??wanie wszstkich dokument??w z systemu plik??w',
    'LBL_OOTB_GOOGLE_CAL_SYNC' => 'Synchronizacja z kalendarzem Google',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Interwa??:',
    'LBL_LIST_LIST_ORDER' => 'Zadanie cykliczne:',
    'LBL_LIST_NAME' => 'Harmonogram:',
    'LBL_LIST_RANGE' => 'Zakres:',
    'LBL_LIST_STATUS' => 'Status:',
    'LBL_LIST_TITLE' => 'Lista harmonogram??w:',
// human readable:
    'LBL_SUN' => 'Niedziela',
    'LBL_MON' => 'Poniedzia??ek',
    'LBL_TUE' => 'Wtorek',
    'LBL_WED' => '??roda',
    'LBL_THU' => 'Czwartek',
    'LBL_FRI' => 'Pi??tek',
    'LBL_SAT' => 'Sobota',
    'LBL_ALL' => 'Ka??dego dnia',
    'LBL_EVERY' => 'Ka??dego',
    'LBL_FROM' => 'Od',
    'LBL_ON_THE' => 'Co',
    'LBL_RANGE' => 'do',
    'LBL_AND' => 'i',
    'LBL_MINUTES' => 'minut',
    'LBL_HOUR' => 'godzin',
    'LBL_HOUR_SING' => 'godzina',
    'LBL_OFTEN' => 'Tak cz??sto, jak tylko mo??liwe.',
    'LBL_MIN_MARK' => 'minut',


// crontabs
    'LBL_MINS' => 'minuty',
    'LBL_HOURS' => 'godziny',
    'LBL_DAY_OF_MONTH' => 'dzie?? miesi??ca',
    'LBL_MONTHS' => 'miesi??c',
    'LBL_DAY_OF_WEEK' => 'dzie?? tygodnia',
    'LBL_CRONTAB_EXAMPLES' => 'Powy??ej u??yto notacji crontaba.',
// Labels
    'LBL_ALWAYS' => 'Zawsze',
    'LBL_CATCH_UP' => 'Przeprowad??, je??eli przegapiono',
    'LBL_CATCH_UP_WARNING' => 'Odznacz, je??eli to dzia??anie ma potrwa?? d??uzej.',
    'LBL_DATE_TIME_END' => 'Data i czas zako??czenia',
    'LBL_DATE_TIME_START' => 'Data i czas rozpocz??cia',
    'LBL_INTERVAL' => 'Interwa??',
    'LBL_JOB' => 'Praca',
    'LBL_JOB_URL' => 'Adres URL zadania',
    'LBL_LAST_RUN' => 'Ostanie wykonanie',
    'LBL_MODULE_NAME' => 'Harmonogramy SuiteCRM',
    'LBL_MODULE_TITLE' => 'Zadania cykliczne',
    'LBL_NAME' => 'Nazwa pracy',
    'LBL_NEVER' => 'Nigdy',
    'LBL_NEW_FORM_TITLE' => 'Nowy harmonogram',
    'LBL_PERENNIAL' => 'bez przerwy',
    'LBL_SEARCH_FORM_TITLE' => 'Szukanie harmonogramu',
    'LBL_SCHEDULER' => 'Zadanie cykliczne:',
    'LBL_STATUS' => 'Status',
    'LBL_TIME_FROM' => 'Aktywny od',
    'LBL_TIME_TO' => 'Aktywny do',
    'LBL_WARN_CURL_TITLE' => 'Ostrze??enie cURL:',
    'LBL_WARN_CURL' => 'Ostrze??enie:',
    'LBL_WARN_NO_CURL' => 'Ten system nie posiada bibliotek cURL w????czonych lub wkompilowanych w modu?? PHP (--with-curl=/path/to/curl_library).  Skontaktuj si?? z Administratorem, aby rozwi??za?? ten problem.  Bez cURL nie mo??na przeprowadzi?? harmonogramu.',
    'LBL_BASIC_OPTIONS' => 'Podstawowe ustawienia',
    'LBL_ADV_OPTIONS' => 'Opcje zaawansowane',
    'LBL_TOGGLE_ADV' => 'Opcje zaawansowane',
    'LBL_TOGGLE_BASIC' => 'Podstawowe ustawienia',
// Links
    'LNK_LIST_SCHEDULER' => 'Zadania cykliczne',
    'LNK_NEW_SCHEDULER' => 'Utw??rz Zadanie cykliczne',
// Messages
    'ERR_CRON_SYNTAX' => 'Niew??a??ciwa sk??adnia Crona',
    'NTC_LIST_ORDER' => 'Kolejno???? wykonywania tego Harmonogramu pojawi si?? na li??cie rozwijalnej',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Aby ustawi?? Harmonogram Windows',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Aby ustawi?? Crontab',
    'LBL_CRON_LINUX_DESC1' => 'Aby uruchomi?? zadania cykliczne SuiteCRM, nale??y edytowa?? plik u??ytkownika crontab dodaj??c nast??puj??ce polecenie: ',
    'LBL_CRON_LINUX_DESC2' => '... i dodaj nast??puj??cy wiersz do pliku crontab:',
    'LBL_CRON_LINUX_DESC3' => 'Nale??y to zrobi?? dopiero po zako??czeniu instalacji.',
    'LBL_CRON_WINDOWS_DESC' => 'Uwaga: Aby uruchomi?? Harmonogramy SuiteCRM, nale??y utw??rzy?? plik wsadowy do uruchomienia przy u??yciu Zaplanowanych zada?? systemu Windows. Plik wsadowy powinien zawiera?? nast??puj??ce polecenia:',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'Dziennik zada??',
    'LBL_EXECUTE_TIME' => 'Czas Wykonania',

//jobstrings
    'LBL_REFRESHJOBS' => 'Od??wie?? akcje',
    'LBL_POLLMONITOREDINBOXES' => 'Sprawdzanie kont poczty przychodz??cej',
    'LBL_PERFORMFULLFTSINDEX' => 'System indeksowania w wyszukiwaniu pe??notekstowym',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Wykonaj nocn?? masow?? wysy??k?? poczty kampanii',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Wykonaj nocn?? wysy??k?? odbitej poczty kampanii',
    'LBL_PRUNEDATABASE' => 'Oczy???? baz?? danych 1-go dnia miesi??ca',
    'LBL_TRIMTRACKER' => 'Oczy???? tabele tropiciela',
    'LBL_TRIMSUGARFEEDS' => 'Wyczy???? tabele kana????w SuiteCRM',
    'LBL_SENDEMAILREMINDERS' => 'Uruchomi?? wysy??anie przypomnie?? poczt?? E-mail',
    'LBL_CLEANJOBQUEUE' => 'Wyczy???? kolejk?? zada??',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'Us??wanie wszstkich dokument??w z systemu plik??w',

    'LBL_POLLMONITOREDINBOXESAOP' => 'Skrzynki email monitororowane przez AOP (Advanced Open Portal)',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'Uruchamianie raport??w zaplanowanych',
    'LBL_PROCESSAOW_WORKFLOW' => 'Przetwarzaj procesy WorkFlow AOW (Advanced Open Workflow)',

    'LBL_RUNELASTICSEARCHINDEXERSCHEDULER' => 'Indeksator elasticsearch',

    'LBL_SCHEDULER_TIMES' => 'Terminy Zada?? cyklicznych',
    'LBL_SYNCGOOGLECALENDAR' => 'Synchronizacja kalendarzy Google',
);

global $sugar_config;
