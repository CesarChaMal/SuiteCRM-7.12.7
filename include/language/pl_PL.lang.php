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

//the left value is the key stored in the db and the right value is ie display value
//to translate, only modify the right value in each key/value pair
$app_list_strings = array(
//e.g. auf Deutsch 'Contacts'=>'Contakten',
    'language_pack_name' => 'Polski (Poland) - pl_PL',
    'moduleList' => array(
        'Home' => 'Strona Główna',
        'ResourceCalendar' => 'Kalendarz zasobów',
        'Contacts' => 'Kontakty',
        'Accounts' => 'Kontrahenci',
        'Alerts' => 'Alerty',
        'Opportunities' => 'Szanse sprzedaży',
        'Cases' => 'Sprawy',
        'Notes' => 'Notatki',
        'Calls' => 'Rozmowy telefoniczne',
        'TemplateSectionLine' => 'Linia sekcji szablonu',
        'Calls_Reschedule' => 'Przełożenie rozmowy telefonicznej',
        'Emails' => 'Wiadomości e-mail',
        'EAPM' => 'EAPM - Moduł zewnętrznego API',
        'Meetings' => 'Spotkania',
        'Tasks' => 'Zadania',
        'Calendar' => 'Kalendarz',
        'Leads' => 'Potencjalni klienci',
        'Currencies' => 'Waluty',
        'Activities' => 'Działania',
        'Bugs' => 'Błędy',
        'Feeds' => 'RSS',
        'iFrames' => 'Moje Portale',
        'TimePeriods' => 'Przedziały czasowe',
        'ContractTypes' => 'Rodzaje umów',
        'Schedulers' => 'Zadania cykliczne',
        'Project' => 'Projekty',
        'ProjectTask' => 'Zadania Projektowe',
        'Campaigns' => 'Kampanie',
        'CampaignLog' => 'Kampania Log',
        'Documents' => 'Dokumenty',
        'DocumentRevisions' => 'Wersje dokumentu',
        'Connectors' => 'Łączniki',
        'Roles' => 'Profile uprawnień',
        'Notifications' => 'Powiadomienia',
        'Sync' => 'Synchronizuj',
        'Users' => 'Użytkownicy',
        'Employees' => 'Pracownicy',
        'Administration' => 'Administracja',
        'ACLRoles' => 'Profile uprawnień',
        'InboundEmail' => 'Poczta przychodząca',
        'Releases' => 'Wydania',
        'Prospects' => 'Docelowi odbiorcy',
        'Queues' => 'Kolejki',
        'EmailMarketing' => 'Mailing marketingowy',
        'EmailTemplates' => 'Szablony wiadomości e-mail',
        'ProspectLists' => 'Listy docelowych odbiorców',
        'SavedSearch' => 'Zapisane kryteria wyszukiwania',
        'UpgradeWizard' => 'Kreator uaktualniania',
        'Trackers' => 'Trakery',
        'TrackerSessions' => 'Sesje tropiciela',
        'TrackerQueries' => 'Zapytania tropiciela',
        'FAQ' => 'FAQ',
        'Newsletters' => 'Newsletter',
        'SugarFeed' => 'Kanał SuiteCRM',
        'SugarFavorites' => 'Ulubione SuiteCRM',

        'OAuthKeys' => 'OAuth - klucze klienta',
        'OAuthTokens' => 'Tokeny OAuth',
        'OAuth2Clients' => 'Klienci OAuth',
        'OAuth2Tokens' => 'Tokeny OAuth',
    ),

    'moduleListSingular' => array(
        'Home' => 'Strona Główna',
        'Dashboard' => 'Kokpit',
        'Contacts' => 'Kontakt',
        'Accounts' => 'Kontrahent',
        'Opportunities' => 'Szansa sprzedaży',
        'Cases' => 'Sprawa',
        'Notes' => 'Notatki',
        'Calls' => 'Rozmowy Telefoniczne',
        'Emails' => 'E-mail',
        'EmailTemplates' => 'Szablon e-mail',
        'Meetings' => 'Spotkania',
        'Tasks' => 'Zadania',
        'Calendar' => 'Kalendarz',
        'Leads' => 'Potencjalny klient',
        'Activities' => 'Działania',
        'Bugs' => 'Błąd',
        'KBDocuments' => 'Baza Wiedzy',
        'Feeds' => 'RSS',
        'iFrames' => 'Mój Portal',
        'TimePeriods' => 'Przedział  Czasu',
        'Project' => 'Projekty',
        'ProjectTask' => 'Zadania Projektowe',
        'Prospects' => 'Docelowy odbiorca',
        'Campaigns' => 'Kampanie',
        'Documents' => 'Dokumenty',
        'Sync' => 'Sync',
        'Users' => 'Użytkownicy',
        'SugarFavorites' => 'Ulubione SuiteCRM',

    ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'Tak',
        '2' => 'Nie',
    ),

    //e.g. en français 'Analyst'=>'Analyste',
    'account_type_dom' => array(
        '' => '',
        'Analyst' => 'Ekspert',
        'Competitor' => 'Konkurent',
        'Customer' => 'Klient',
        'Integrator' => 'Integrator',
        'Investor' => 'Inwestor',
        'Partner' => 'Partner',
        'Press' => 'Prasa',
        'Prospect' => 'Kandydat',
        'Reseller' => 'Pośrednik',
        'Other' => 'Inny',
    ),
    //e.g. en español 'Apparel'=>'Ropa',
    'industry_dom' => array(
        '' => '',
        'Apparel' => 'Branża Odzieżowa',
        'Banking' => 'Bankowość',
        'Biotechnology' => 'Biotechnologia',
        'Chemicals' => 'Branża Chemiczna',
        'Communications' => 'Branża Samochodowa',
        'Construction' => 'Budownictwo',
        'Consulting' => 'Doradztwo',
        'Education' => 'Edukacja/Szkolnictwo',
        'Electronics' => 'Branża Elektroniczna',
        'Energy' => 'Branża Energetyczna',
        'Engineering' => 'Inżynieria',
        'Entertainment' => 'Branża Rozrywkowa',
        'Environmental' => 'Ochrona Środowiska',
        'Finance' => 'Usługi Finansowe',
        'Government' => 'Instytucje Publiczne',
        'Healthcare' => 'Opieka Zdrowotna',
        'Hospitality' => 'Szpitale',
        'Insurance' => 'Ubezpieczenia',
        'Machinery' => 'Branża Maszynowa',
        'Manufacturing' => 'Drobna Wytwórczość',
        'Media' => 'Media',
        'Not For Profit' => 'Organizacje Non Profit',
        'Recreation' => 'Turystyka i Rekreacja',
        'Retail' => 'Handel Detaliczny',
        'Shipping' => 'Przesyłka',
        'Technology' => 'Branża IT',
        'Telecommunications' => 'Telekomunikacja',
        'Transportation' => 'Transport',
        'Utilities' => 'Użyteczność Publiczna',
        'Other' => 'Inny',
    ),
    'lead_source_default_key' => 'Self Generated',
    'lead_source_dom' => array(
        '' => '',
        'Cold Call' => 'Telemarketing',
        'Existing Customer' => 'Istniejący Klient',
        'Self Generated' => 'Samodzielne Pozyskanie',
        'Employee' => 'Pracownik',
        'Partner' => 'Partner',
        'Public Relations' => 'Public Relations',
        'Direct Mail' => 'Reklama Bezpośrednia',
        'Conference' => 'Uczestnik Konferencji',
        'Trade Show' => 'Uczestnik Prezentacji',
        'Web Site' => 'Ze strony www',
        'Word of mouth' => 'Z polecenia',
        'Email' => 'E-mail',
        'Campaign' => 'Kampania',
        'Other' => 'Inny',
    ),
    'opportunity_type_dom' => array(
        '' => '',
        'Existing Business' => 'Istniejący kontrahent',
        'New Business' => 'Nowy kontrahent',
    ),
    'roi_type_dom' => array(
        'Revenue' => 'Zysk',
        'Investment' => 'Inwestycja',
        'Expected_Revenue' => 'Szacowany Dochód',
        'Budget' => 'Budżet',

    ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
    'opportunity_relationship_type_dom' => array(
        '' => '',
        'Primary Decision Maker' => 'Główna osoba decyzyjna',
        'Business Decision Maker' => 'Osoba podejmująca decyzje biznesowe',
        'Business Evaluator' => 'Ewaluator Biznesu',
        'Technical Decision Maker' => 'Osoba podejmująca decyzje techniczne',
        'Technical Evaluator' => 'Osoba oceniająca rozwiązania techniczne',
        'Executive Sponsor' => 'Dyrektor projektu',
        'Influencer' => 'Osoba wpływowa',
        'Other' => 'Inny',
    ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Primary Contact',
    'case_relationship_type_dom' => array(
        '' => '',
        'Primary Contact' => 'Główny Kontakt',
        'Alternate Contact' => 'Alternatywny Kontakt',
    ),
    'payment_terms' => array(
        '' => '',
        'Net 15' => '15',
        'Net 30' => '30',
    ),
    'sales_stage_default_key' => 'Prospecting',
    'sales_stage_dom' => array(
        'Prospecting' => 'Badanie rynku',
        'Qualification' => 'Rozpoznanie',
        'Needs Analysis' => 'Wymaga analizy',
        'Value Proposition' => 'Wstępna wycena',
        'Id. Decision Makers' => 'Identyfikowanie osób decyzyjnych',
        'Perception Analysis' => 'Analiza potrzeb',
        'Proposal/Price Quote' => 'Propozycja/ Oferta cenowa',
        'Negotiation/Review' => 'Negocjacje/Przegląd',
        'Closed Won' => 'Zakończone sukcesem',
        'Closed Lost' => 'Odrzucone',
    ),
    'sales_probability_dom' => // keys must be the same as sales_stage_dom
        array(
            'Prospecting' => '10',
            'Qualification' => '20',
            'Needs Analysis' => '25',
            'Value Proposition' => '30',
            'Id. Decision Makers' => '40',
            'Perception Analysis' => '50',
            'Proposal/Price Quote' => '65',
            'Negotiation/Review' => '80',
            'Closed Won' => '100',
            'Closed Lost' => '0',
        ),
    'activity_dom' => array(
        'Call' => 'Rozmowa telefoniczna',
        'Meeting' => 'Spotkanie',
        'Task' => 'Zadanie',
        'Email' => 'E-mail',
        'Note' => 'Uwaga',
    ),
    'salutation_dom' => array(
        '' => '',
        'Mr.' => 'Sz. Pan',
        'Ms.' => 'Sz. Pani',
        'Mrs.' => 'Sz. Pani',
        'Miss' => 'Panna',
        'Dr.' => 'Dr',
        'Prof.' => 'Prof.',
    ),
    //time is in seconds; the greater the time the longer it takes;
    'reminder_max_time' => 90000,
    'reminder_time_options' => array(
        60 => '1 minuta przed',
        300 => '5 minut przed',
        600 => '10 minut przed',
        900 => '15 minut przed',
        1800 => '30 minut przed',
        3600 => '1 godzina przed',
        7200 => '2 godziny przed',
        10800 => '3 godziny przed',
        18000 => '5 godzin przed',
        86400 => '1 dzień przed',
    ),

    'task_priority_default' => 'Średni',
    'task_priority_dom' => array(
        'High' => 'Wysoki',
        'Medium' => 'Średni',
        'Low' => 'Niski',
    ),
    'task_status_default' => 'Nie rozpoczęte',
    'task_status_dom' => array(
        'Not Started' => 'Nie rozpoczęte',
        'In Progress' => 'W realizacji',
        'Completed' => 'Ukończone',
        'Pending Input' => 'Oczekujący',
        'Deferred' => 'Przełożone',
    ),
    'meeting_status_default' => 'Planned',
    'meeting_status_dom' => array(
        'Planned' => 'Zaplanowane',
        'Held' => 'Odbyte',
        'Not Held' => 'Nie odbyte',
    ),
    'extapi_meeting_password' => array(
        'WebEx' => 'WebEx',
    ),
    'meeting_type_dom' => array(
        'Other' => 'Inny',
        'Sugar' => 'SuiteCRM',
    ),
    'call_status_default' => 'Planned',
    'call_status_dom' => array(
        'Planned' => 'Zaplanowana',
        'Held' => 'Odbyta',
        'Not Held' => 'Nie odbyta',
    ),
    'call_direction_default' => 'Outbound',
    'call_direction_dom' => array(
        'Inbound' => 'Przychodząca',
        'Outbound' => 'Wychodząca',
    ),
    'lead_status_dom' => array(
        '' => '',
        'New' => 'Nowy',
        'Assigned' => 'Przypisano',
        'In Process' => 'W Trakcie Realizacji',
        'Converted' => 'Skonwertowany',
        'Recycled' => 'Przetworzony',
        'Dead' => 'Martwy',
    ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
        'P1' => 'Wysoki',
        'P2' => 'Średni',
        'P3' => 'Niski',
    ),
    'user_type_dom' => array(
        'RegularUser' => 'Normalny użytkownik',
        'Administrator' => 'Administrator',
    ),
    'user_status_dom' => array(
        'Active' => 'Aktywny',
        'Inactive' => 'Nieaktywny',
    ),
    'user_factor_auth_interface_dom' => array(
        'FactorAuthEmailCode' => 'Kod e-mail',
    ),
    'employee_status_dom' => array(
        'Active' => 'Aktywny',
        'Terminated' => 'Zakończony',
        'Leave of Absence' => 'Usprawiedliwiona Nieobecność',
    ),
    'messenger_type_dom' => array(
        '' => '',
        'MSN' => 'MSN',
        'Yahoo!' => 'Yahoo!',
        'AOL' => 'AOL',
    ),
    'project_task_priority_options' => array(
        'High' => 'Wysoki',
        'Medium' => 'Średni',
        'Low' => 'Niski',
    ),
    'project_task_priority_default' => 'Średni',

    'project_task_status_options' => array(
        'Not Started' => 'Nie rozpoczęte',
        'In Progress' => 'W realizacji',
        'Completed' => 'Ukończone',
        'Pending Input' => 'Oczekujący',
        'Deferred' => 'Przełożone',
    ),
    'project_task_utilization_options' => array(
        '0' => 'brak',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'Wersja Robocza',
        'In Review' => 'Rozpatrywane',
        'Underway' => 'W trakcie',
        'On_Hold' => 'Wstrzymane',
        'Completed' => 'Ukończone',
    ),
    'project_status_default' => 'Wersja Robocza',

    'project_duration_units_dom' => array(
        'Days' => 'Dni',
        'Hours' => 'godzin',
    ),

    'activity_status_type_dom' => array(
        '' => '--Brak--',
        'active' => 'Aktywny',
        'inactive' => 'Nieaktywny',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'Kontrahenci',
    'record_type_display' => array(
        '' => '',
        'Accounts' => 'Kontrahent',
        'Opportunities' => 'Szansa sprzedaży',
        'Cases' => 'Sprawa',
        'Leads' => 'Potencjalny Klient',
        'Contacts' => 'Kontakt', // cn (11/22/2005) added to support Emails

        'Bugs' => 'Błąd',
        'Project' => 'Projekty',

        'Prospects' => 'Docelowy odbiorca',
        'ProjectTask' => 'Zadania Projektowe',

        'Tasks' => 'Zadania',

        'AOS_Contracts' => 'Umowa',
        'AOS_Invoices' => 'Faktura',
        'AOS_Quotes' => 'Oferta',
        'AOS_Products' => 'Produkt',

    ),

    'record_type_display_notes' => array(
        'Accounts' => 'Kontrahent',
        'Contacts' => 'Kontakt',
        'Opportunities' => 'Szansa sprzedaży',
        'Campaigns' => 'Kampania',
        'Tasks' => 'Zadania',
        'Emails' => 'E-mail',

        'Bugs' => 'Błąd',
        'Project' => 'Projekty',
        'ProjectTask' => 'Zadania Projektowe',
        'Prospects' => 'Docelowy odbiorca',
        'Cases' => 'Sprawa',
        'Leads' => 'Potencjalny Klient',

        'Meetings' => 'Spotkania',
        'Calls' => 'Rozmowa telefoniczna',

        'AOS_Contracts' => 'Umowa',
        'AOS_Invoices' => 'Faktura',
        'AOS_Quotes' => 'Oferta',
        'AOS_Products' => 'Produkt',
    ),

    'parent_type_display' => array(
        'Accounts' => 'Kontrahent',
        'Contacts' => 'Kontakt',
        'Tasks' => 'Zadania',
        'Opportunities' => 'Szansa sprzedaży',

        'Bugs' => 'Błąd',
        'Cases' => 'Sprawa',
        'Leads' => 'Potencjalny klient',

        'Project' => 'Projekty',
        'ProjectTask' => 'Zadania Projektowe',

        'Prospects' => 'Docelowy odbiorca',

        'AOS_Contracts' => 'Umowa',
        'AOS_Invoices' => 'Faktura',
        'AOS_Quotes' => 'Oferta',
        'AOS_Products' => 'Produkt',

    ),
    'parent_line_items' => array(
        'AOS_Quotes' => 'Oferty',
        'AOS_Invoices' => 'Faktury',
        'AOS_Contracts' => 'Umowy',
    ),
    'issue_priority_default_key' => 'Średni',
    'issue_priority_dom' => array(
        'Urgent' => 'Pilny',
        'High' => 'Wysoki',
        'Medium' => 'Średni',
        'Low' => 'Niski',
    ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Zaakceptowano',
        'Duplicate' => 'Duplikat',
        'Closed' => 'Zamknięty',
        'Out of Date' => 'Nieaktualny',
        'Invalid' => 'Nieprawidłowy',
    ),

    'issue_status_default_key' => 'Nowy',
    'issue_status_dom' => array(
        'New' => 'Nowy',
        'Assigned' => 'Przypisano',
        'Closed' => 'Zamknięty',
        'Pending' => 'Oczekujący',
        'Rejected' => 'Odrzucony',
    ),

    'bug_priority_default_key' => 'Średni',
    'bug_priority_dom' => array(
        'Urgent' => 'Pilny',
        'High' => 'Wysoki',
        'Medium' => 'Średni',
        'Low' => 'Niski',
    ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Zaakceptowano',
        'Duplicate' => 'Duplikat',
        'Fixed' => 'Naprawiony',
        'Out of Date' => 'Nieaktualny',
        'Invalid' => 'Nieprawidłowy',
        'Later' => 'Przełożony',
    ),
    'bug_status_default_key' => 'Nowy',
    'bug_status_dom' => array(
        'New' => 'Nowy',
        'Assigned' => 'Przypisano',
        'Closed' => 'Zamknięty',
        'Pending' => 'Oczekujący',
        'Rejected' => 'Odrzucony',
    ),
    'bug_type_default_key' => 'Błąd',
    'bug_type_dom' => array(
        'Defect' => 'Defekt',
        'Feature' => 'Cecha',
    ),
    'case_type_dom' => array(
        'Administration' => 'Administracja',
        'Product' => 'Produkt',
        'User' => 'Użytkownik',
    ),

    'source_default_key' => '',
    'source_dom' => array(
        '' => '',
        'Internal' => 'Wewnętrzne',
        'Forum' => 'Forum',
        'Web' => 'Sieć',
        'InboundEmail' => 'E-mail',
    ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
        '' => '',
        'Accounts' => 'Kontrahenci',
        'Activities' => 'Działania',
        'Bugs' => 'Błędy',
        'Calendar' => 'Kalendarz',
        'Calls' => 'Rozmowy telefoniczne',
        'Campaigns' => 'Kampanie',
        'Cases' => 'Sprawy',
        'Contacts' => 'Kontakty',
        'Currencies' => 'Waluty',
        'Dashboard' => 'Kokpit',
        'Documents' => 'Dokumenty',
        'Emails' => 'Wiadomości e-mail',
        'Feeds' => 'Kanały',
        'Forecasts' => 'Prognozy',
        'Help' => 'Pomoc',
        'Home' => 'Strona Główna',
        'Leads' => 'Potencjalni klienci',
        'Meetings' => 'Spotkania',
        'Notes' => 'Notatki',
        'Opportunities' => 'Okazje',
        'Outlook Plugin' => 'Wtyczki Outlook ',
        'Projects' => 'Projekty',
        'Quotes' => 'Oferty',
        'Releases' => 'Publikacje',
        'RSS' => 'RSS',
        'Studio' => 'Edytor modułów',
        'Upgrade' => 'Aktualizacja',
        'Users' => 'Użytkownicy',
    ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
        '' => '',
        'Planning' => 'Planowanie',
        'Active' => 'Aktywny',
        'Inactive' => 'Nieaktywny',
        'Complete' => 'Zakończ',
        //'In Queue' => 'In Queue',
        //'Sending' => 'Sending',
    ),
    'campaign_type_dom' => array(
        '' => '',
        'Telesales' => 'Telesprzedaż',
        'Mail' => 'Przesyłka Pocztowa',
        'Email' => 'E-mail',
        'Print' => 'Wydruk',
        'Web' => 'Sieć',
        'Radio' => 'Radio',
        'Television' => 'Telewizja',
        'NewsLetter' => 'Newsletter',
        'Survey' => 'Ankieta',
    ),

    'newsletter_frequency_dom' => array(
        '' => '',
        'Weekly' => 'Tygodniowo',
        'Monthly' => 'Miesięczny',
        'Quarterly' => 'Kwartalny',
        'Annually' => 'Roczny',
    ),

    'notifymail_sendtype' => array(
        'SMTP' => 'SMTP',
    ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'Styczeń',
        '2' => 'Luty',
        '3' => 'Marzec',
        '4' => 'Kwiecień',
        '5' => 'Maj',
        '6' => 'Czerwiec',
        '7' => 'Lipiec',
        '8' => 'Sierpień',
        '9' => 'Wrzesień',
        '10' => 'Październik',
        '11' => 'Listopad',
        '12' => 'Grudzień',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'Sty',
        '2' => 'Lut',
        '3' => 'Mar',
        '4' => 'Kwi',
        '5' => 'Maj',
        '6' => 'Cze',
        '7' => 'Lip',
        '8' => 'Sie',
        '9' => 'Wrz',
        '10' => 'Paź',
        '11' => 'Lis',
        '12' => 'Gru',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => 'Niedziela',
        '2' => 'Poniedziałek',
        '3' => 'Wtorek',
        '4' => 'Środa',
        '5' => 'Czwartek',
        '6' => 'Piątek',
        '7' => 'Sobota',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'Niedziela',
        '2' => 'Poniedziałek',
        '3' => 'Wtorek',
        '4' => 'Środa',
        '5' => 'Czwartek',
        '6' => 'Piątek',
        '7' => 'Sobota',
    ),
    'dom_meridiem_lowercase' => array(
        'am' => 'am',
        'pm' => 'pm',
    ),
    'dom_meridiem_uppercase' => array(
        'AM' => 'AM',
        'PM' => 'PM',
    ),

    'dom_email_types' => array(
        'out' => 'Wysłane',
        'archived' => 'Zarchiwizowane',
        'draft' => 'W Roboczych',
        'inbound' => 'Przychodzące',
        'campaign' => 'Kampania',
    ),
    'dom_email_status' => array(
        'archived' => 'Zarchiwizowane',
        'closed' => 'Zamknięty',
        'draft' => 'W Roboczych',
        'read' => 'Przeczytane',
        'replied' => 'Z odpowiedzią',
        'sent' => 'Wysłane',
        'send_error' => 'Błąd',
        'unread' => 'Nieprzeczytane',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'Zarchiwizowane',
    ),

    'dom_email_server_type' => array(
        '' => '--Brak--',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '--Brak--',
        'createcase' => 'Utwórz Sprawę',
        'bounce' => 'Opcja Odbijania Wiadomości do Nadawcy',
    ),
    'dom_email_distribution' => array(
        '' => '--Brak--',
        'direct' => 'Przypisywanie Bezpośrednie',
        'roundRobin' => 'Algorytm karuzelowy (Round-Robin)',
        'leastBusy' => 'Pierwszy Wolny',
    ),
    'dom_email_errors' => array(
        1 => 'Podczas bezpośredniego przypisywania elementów wybierz tylko jednego użytkownika.',
        2 => 'Podczas bezpośredniego przypisywania elementów możesz przypisać wyłącznie elementy zaznaczone.',
    ),
    'dom_email_bool' => array(
        'bool_true' => 'Tak',
        'bool_false' => 'Nie',
    ),
    'dom_int_bool' => array(
        1 => 'Tak',
        0 => 'Nie',
    ),
    'dom_switch_bool' => array(
        'on' => 'Tak',
        'off' => 'Nie',
        '' => '--Brak--',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'Klient e-mail SuiteCRM',
        'mailto' => 'Zewnętrzna Poczta Klienta',
    ),

    'dom_editor_type' => array(
        'none' => 'Direct HTML',
        'tinymce' => 'Tiny MCE',
        'mozaik' => 'Mozaik',
    ),

    'dom_email_editor_option' => array(
        '' => 'Domyślny format e-maila',
        'html' => 'Wiadomość HTML',
        'plain' => 'E-mail jako zwykły tekst',
    ),

    'schedulers_times_dom' => array(
        'not run' => 'Minął Czas Wykonania/ Nie wykonano',
        'ready' => 'Gotowy',
        'in progress' => 'W realizacji',
        'failed' => 'Nieudany',
        'completed' => 'Ukończone',
        'no curl' => 'Nie można uruchomić: Niedostępny cURL',
    ),

    'scheduler_status_dom' => array(
        'Active' => 'Aktywny',
        'Inactive' => 'Nieaktywny',
    ),

    'scheduler_period_dom' => array(
        'min' => 'Minuty',
        'hour' => 'Godziny',
    ),
    'document_category_dom' => array(
        '' => '',
        'Marketing' => 'Marketing',
        'Knowledege Base' => 'Baza Wiedzy',
        'Sales' => 'Sprzedaż',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => 'Zarchiwizowane',
        // TODO: add more categories here...
    ),

    'document_subcategory_dom' => array(
        '' => '',
        'Marketing Collateral' => 'Marketing Dodatkowy',
        'Product Brochures' => 'Broszury Produktowe',
        'FAQ' => 'FAQ',
    ),

    'document_status_dom' => array(
        'Active' => 'Aktywny',
        'Draft' => 'Wersja Robocza',
        'FAQ' => 'FAQ',
        'Expired' => 'Przedawniony',
        'Under Review' => 'Rozpatrywane',
        'Pending' => 'Oczekujący',
    ),
    'document_template_type_dom' => array(
        '' => '',
        'mailmerge' => 'Korespondencja Seryjna',
        'eula' => 'Licencja',
        'nda' => 'NDA',
        'license' => 'Umowa Licencyjna',
    ),
    'dom_meeting_accept_options' => array(
        'accept' => 'Akceptować',
        'decline' => 'Odrzuć',
        'tentative' => 'Wstępnie zaakceptuj',
    ),
    'dom_meeting_accept_status' => array(
        'accept' => 'Zaakceptowano',
        'decline' => 'Odrzucony',
        'tentative' => 'Wstępnie zaakceptuj',
        'none' => 'Brak',
    ),
    'duration_intervals' => array(
        '0' => '00',
        '15' => '15',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => 'Brak',
        'Daily' => 'Dziennie',
        'Weekly' => 'Tygodniowo',
        'Monthly' => 'Miesięczny',
        'Yearly' => 'Rocznie',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'dzień(-ni)',
        'Weekly' => 'tydzień(-ni)',
        'Monthly' => 'miesiąc(-ęcy)',
        'Yearly' => 'rok(lat)',
    ),

    'duration_dom' => array(
        '' => 'Brak',
        '900' => '15 minut',
        '1800' => '30 minut',
        '2700' => '45 minut',
        '3600' => '1 godzina',
        '5400' => '1.5 godziny',
        '7200' => '2 godziny',
        '10800' => '3 godziny',
        '21600' => '6 godzin',
        '86400' => '1 dzień',
        '172800' => '2 dni',
        '259200' => '3 dni',
        '604800' => '1 tydzień',
    ),


//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => 'Domyślny',
        'seed' => 'Początkowe Namiary',
        'exempt_domain' => 'Lista Wykluczająca - Według Domeny',
        'exempt_address' => 'Lista wykluczająca - Według adresów e-mailowych',
        'exempt' => 'Lista Wykluczająca - Według Id',
        'test' => 'Lista Testowa',
    ),

    'email_settings_num_dom' => array(
        '10' => '10',
        '20' => '20',
        '50' => '50',
    ),
    'email_marketing_status_dom' => array(
        '' => '',
        'active' => 'Aktywny',
        'inactive' => 'Nieaktywny',
    ),

    'campainglog_activity_type_dom' => array(
        '' => '',
        'targeted' => 'Wiadomośc Wysłana/Próba Podjęta',
        'send error' => 'Wiadomości Zwrotne, Inne',
        'invalid email' => 'Wiadomości odrzucone, nieprawidłowy adres e-mail',
        'link' => 'Kliknij-na Link',
        'viewed' => 'Wiadomość Przejrzana',
        'removed' => 'Brak zgody na przetwarzanie danych osobowych',
        'lead' => 'Utworzono potencjalnych klientów',
        'contact' => 'Utworzono Kontakty',
        'blocked' => 'Zatrzymany przez adres lub domenę',
    ),

    'campainglog_target_type_dom' => array(
        'Contacts' => 'Kontakty',
        'Users' => 'Użytkownicy',
        'Prospects' => 'Docelowi odbiorcy',
        'Leads' => 'Potencjalni klienci',
        'Accounts' => 'Kontrahenci',
    ),
    'merge_operators_dom' => array(
        'like' => 'Zawiera',
        'exact' => 'Dokładnie',
        'start' => 'Zaczyna się z',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'Tak',
        'false' => 'Nie',
        'required' => 'Wymagane',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'Niedostępne',
        1 => 'Dostępne',
        2 => 'Filtr wyszukiwania',
        3 => 'Filtr domyślny',
        4 => 'Tylko filtuj',
    ),

    'projects_priority_options' => array(
        'high' => 'Wysoki',
        'medium' => 'Średni',
        'low' => 'Niski',
    ),

    'projects_status_options' => array(
        'notstarted' => 'Nie rozpoczęte',
        'inprogress' => 'W realizacji',
        'completed' => 'Ukończone',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'Rozwiń legendę',
        'collapselegend' => 'Zwiń legendę',
        'clickfordrilldown' => 'Kliknij, aby zobaczyć głębiej',
        'detailview' => 'Szczegóły...',
        'piechart' => 'Wykres kołowy',
        'groupchart' => 'Wykres grupowy',
        'stackedchart' => 'Wykres skumulowany słupkowy',
        'barchart' => 'Wykres słupkowy',
        'horizontalbarchart' => 'Wykres słupkowy poziomy',
        'linechart' => 'Wykres liniowy',
        'noData' => 'Dane nie są dostępne',
        'print' => 'Wydruk',
        'pieWedgeName' => 'sekcje',
    ),
    'release_status_dom' => array(
        'Active' => 'Aktywne',
        'Inactive' => 'Nieaktywne',
    ),
    'email_settings_for_ssl' => array(
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' => array(
        '\'' => 'Pojedynczy cudzysłów (&#39;)',
        '"' => 'Podwójny cudzysłów (&#34;)',
        '' => 'Brak',
        'other' => 'Inne:',
    ),
    'import_delimeter_options' => array(
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'Inne:',
    ),
    'link_target_dom' => array(
        '_blank' => 'Nowe okno',
        '_self' => 'W tym samym oknie',
    ),
    'dashlet_auto_refresh_options' => array(
        '-1' => 'Nie odświeżaj automatycznie',
        '30' => 'Co 30 sekund',
        '60' => 'Co 1 minutę',
        '180' => 'Co 3 minuty',
        '300' => 'Co 5 minut',
        '600' => 'Co 10 minut',
    ),
    'dashlet_auto_refresh_options_admin' => array(
        '-1' => 'Nigdy',
        '30' => 'Co 30 sekund',
        '60' => 'Co 1 minutę',
        '180' => 'Co 3 minuty',
        '300' => 'Co 5 minut',
        '600' => 'Co 10 minut',
    ),
    'date_range_search_dom' => array(
        '=' => 'równe',
        'not_equal' => 'Nie jest równe',
        'greater_than' => 'Po',
        'less_than' => 'Przed',
        'last_7_days' => 'Ostatnie 7 Dni',
        'next_7_days' => 'Następne 7 Dni',
        'last_30_days' => 'Ostatnie 30 Dni',
        'next_30_days' => 'Następne 30 Dni',
        'last_month' => 'Ostatni Miesiąc',
        'this_month' => 'W tym Miesiącu',
        'next_month' => 'Przyszły miesiąc',
        'last_year' => 'Ostatni Rok',
        'this_year' => 'Ten Rok',
        'next_year' => 'Następny Rok',
        'between' => 'pomiędzy',
    ),
    'numeric_range_search_dom' => array(
        '=' => 'równe',
        'not_equal' => 'nie jest równe',
        'greater_than' => 'Większe niż',
        'greater_than_equals' => 'większe lub równe',
        'less_than' => 'Mniejsze niż',
        'less_than_equals' => 'mniejsze lub równe',
        'between' => 'pomiędzy',
    ),
    'lead_conv_activity_opt' => array(
        'copy' => 'Kopiuj',
        'move' => 'Przenieś',
        'donothing' => 'Nie rób nic',
    ),
);

$app_strings = array(
    'LBL_SEARCH_REAULTS_TITLE' => 'Wyniki wyszukiwania',
    'ERR_SEARCH_INVALID_QUERY' => 'Wystąpił błąd podczas wyszukiwania. Składnia kwerendy może być nieprawidłowa.',
    'ERR_SEARCH_NO_RESULTS' => 'Brak wyników spełniających Twoje kryteria wyszukiwania. Spróbuj rozszerzyć wyszukiwanie.',
    'LBL_SEARCH_PERFORMED_IN' => 'Wyszukiwanie wykonywane w czasie ',
    'LBL_EMAIL_CODE' => 'Kod e-mail:',
    'LBL_SEND' => 'Wyślij',
    'LBL_LOGOUT' => 'Wyloguj',
    'LBL_LOGOUT_SUCCESS' => 'Wylogowano pomyślnie',
    'LBL_TOUR_NEXT' => 'Dalej',
    'LBL_TOUR_SKIP' => 'Pomiń',
    'LBL_TOUR_BACK' => 'Powrót',
    'LBL_TOUR_TAKE_TOUR' => 'Rozpocznij',
    'LBL_MOREDETAIL' => 'Więcej szczegółów' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Edytuj w linii' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'Podgląd' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'Filtr wyszukiwania' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'Dodaj' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD_EMAIL' => 'Dodaj adres e-mail' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'Ukryj/Pokaż' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Usuń' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'Wyczyść' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'Wizytówka vCard' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'Usuń' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE_EMAIL' => 'Usuń adres e-mail' /*for 508 compliance fix*/,
    'LBL_ID_FF_OPT_OUT' => 'Wypisz się',
    'LBL_ID_FF_INVALID' => 'Ustaw jako niewłaściwy',
    'LBL_ADD' => 'Dodaj' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'Logo firmy' /*for 508 compliance fix*/,
    'LBL_CONNECTORS_POPUPS' => 'Wyskakujące okienka konektorów',
    'LBL_CLOSEINLINE' => 'Zamknij',
    'LBL_VIEWINLINE' => 'Podgląd',
    'LBL_INFOINLINE' => 'Informacja',
    'LBL_PRINT' => 'Wydruk',
    'LBL_HELP' => 'Pomoc',
    'LBL_ID_FF_SELECT' => 'Wybierz',
    'DEFAULT' => 'Podstawowy',
    'LBL_SORT' => 'Sortuj',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Włączyć protokół SSL lub TLS dla SMTP?',
    'LBL_NO_ACTION' => 'Nie ma akcji o tej nazwie: %s',
    'LBL_NO_SHORTCUT_MENU' => 'Brak dostępnych czynności do wykonania.',
    'LBL_NO_DATA' => 'Brak danych',

    'LBL_ROUTING_FLAGGED' => 'flaga ustawiona',
    'LBL_ROUTING_TO' => 'do',
    'LBL_ROUTING_TO_ADDRESS' => 'do adresata',
    'LBL_ROUTING_WITH_TEMPLATE' => 'używając szablonu',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Występują wartości w polach Numer telefonu i Adres w Twoim formularzu. Aby nadpisać te wartości w formularzu Klienta, którego wybrałeś, kliknij [OK], aby zachować obecne wartości, kliknij [Anuluj]',
    'LBL_DROP_HERE' => '[Upuść tutaj]',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Gmail',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'Nazwa',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Ustawienia serwera poczty wychodzącej',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'Hasło SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'Port SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'Serwer SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'Nazwa Użytkownika SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'Domyślny',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Uwaga: Brak nazwy użytkownika i hasła dla konta poczty wychodzącej.',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'Skonfiguruj konto pocztowe aby widzieć pocztę przychodzącą.',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Wprowadź ustawienia serwera SMTP aby móc wysyłać wiadomości pocztowe.',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'Wykonano',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Wyczyść',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'Do:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'Do Wiadomości:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Ukryci Adresaci:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'Do/Kopia/Ukryta kopia',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'Adres e-mail',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Filtr wyszukiwania',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Nazwa',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Nie znaleziono adresu',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Zapisz i dodaj do książki adresowej',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'Wybierz odbiorców wiadomości',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Książka adresowa',
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Uwaga! Konto poczty wychodzącej jest powiązane z istniejącym kontem poczty przychodzącej. Czy chcesz je usunąć?',
    'LBL_EMAIL_ADDRESSES' => 'E-mail',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'Adres e-mail',
    'LBL_EMAIL_ADDRESS_OPT_IN' => 'Potwierdziłeś/aś zgodę na przetwarzanie danych osobowych dla adresu: ',
    'LBL_EMAIL_ADDRESS_OPT_IN_ERR' => 'Nie można potwierdzić adresu e-mail',
    'LBL_EMAIL_ARCHIVE_TO_SUITE' => 'Importuj do SuiteCRM',
    'LBL_EMAIL_ASSIGNMENT' => 'Przypisywanie',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Załącz',
    'LBL_EMAIL_ATTACHMENT' => 'Załącz',
    'LBL_EMAIL_ATTACHMENTS' => 'Z lokalnego systemu',
    'LBL_EMAIL_ATTACHMENTS2' => 'Z Dokumentów SuiteCRM',
    'LBL_EMAIL_ATTACHMENTS3' => 'Wzór załącznika',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'Nazwa Pliku',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Dokumenty',
    'LBL_EMAIL_BCC' => 'UDW',
    'LBL_EMAIL_CANCEL' => 'Anuluj',
    'LBL_EMAIL_CC' => 'DW',
    'LBL_EMAIL_CHARSET' => 'Zestaw znaków',
    'LBL_EMAIL_CHECK' => 'Sprawdź Maila',
    'LBL_EMAIL_CHECKING_NEW' => 'Odbieranie nowych wiadomości',
    'LBL_EMAIL_CHECKING_DESC' => 'Chwileczkę.... <br><br>Jeżeli jest to pierwsze sprawdzenie poczty może to chwilę potrwać.',
    'LBL_EMAIL_CLOSE' => 'Zamknij',
    'LBL_EMAIL_COFFEE_BREAK' => 'Sprawdzanie poczty. <br><br>W przypadku dużych kont pocztowych może to chwilę potrwać.',

    'LBL_EMAIL_COMPOSE' => 'E-mail',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Proszę podać odbiorcę(ów) tej wiadomości.',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'Brak treści wiadomości. Wysłać mimo to?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'Brak tematu wiadomości. Wysłać mimo to?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(brak tematu)',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Podaj poprawny adres e-mail w polach Do, Kopia oraz ukryta kopia',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'Odrzucić tą wiadomość?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'Czy na pewno usunąć tą sygnaturę?',

    'LBL_EMAIL_SENT_SUCCESS' => 'E-mail został wysłany',

    'LBL_EMAIL_CREATE_NEW' => '--Utwórz przy zapisie--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Wielokrotność',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Pusty',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Data wysłania przez nadawcę',
    'LBL_EMAIL_DATE_TODAY' => 'Dziś',
    'LBL_EMAIL_DELETE' => 'Usuń',
    'LBL_EMAIL_DELETE_CONFIRM' => 'Usunąć wybrane wiadomości?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'Wiadomość została usunięta.',
    'LBL_EMAIL_DELETING_MESSAGE' => 'Usuwanie wiadomości.',
    'LBL_EMAIL_DETAILS' => 'Szczegóły',

    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'Przy pracy z kontaktami będzie wykorzystywany tylko główny adres e-mail.',

    'LBL_EMAIL_EMPTYING_TRASH' => 'Opróżnianie kosza',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'Usuwanie serwera poczty wychodzącej.',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Usuwanie plików tymczasowych',
    'LBL_EMAIL_EMPTY_MSG' => 'Brak emaili do wyświetlenia.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'Brak adresów email do wyświetlenia.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Nazwa folderu musi być unikatowa i nie może być on pusty. Proszę spróbować ponownie.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Nie można usunąć folderu. Folder, podfoldery lub powiązana skrzynka pocztowa zawierają wiadomości.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'Nie mogę określić przeznaczenia folderu na podstawie kontekstu. Spróbuj jeszcze raz.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Proszę sprawdzić swoje ustawienia.',
    'LBL_EMAIL_ERROR_DESC' => 'Wykryto błędy:',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'Nie masz tutaj dostępu. Proszę skontaktować się z administratorem strony jeśli uważasz że powinieneś mieć dostęp.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'Nazwy Folderów SuiteCRM muszą być unikalne.',
    'LBL_EMAIL_ERROR_EMPTY' => 'Podaj kryteria wyszukiwania.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'Wystąpił błąd',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Wiadomość usunięta z serwera',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'Wiadomości zostały usunięte z serwera lub przeniesione do innego folderu',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'Błąd połączenia z serwerem pocztowym. Skontaktuj się z administratorem',
    'LBL_EMAIL_ERROR_MOVE' => 'Przenoszenie wiadomości między serwerami i/lub kontami pocztowymi nie jest możliwe w chwili obecnej.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Błąd przenoszenia',
    'LBL_EMAIL_ERROR_NAME' => 'Nazwa jest wymagana',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'Adres Od jest wymagany. Wprowadź poprawny adres e-mail.',
    'LBL_EMAIL_ERROR_NO_FILE' => 'Dodaj plik.',
    'LBL_EMAIL_ERROR_SERVER' => 'Adres serwera pocztowego jest wymagany.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'Konto pocztowe nie może zostać zapisane.',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'Wystąpił błąd podczas komunikacji z serwerem pocztowym.',
    'LBL_EMAIL_ERROR_USER' => 'Nazwa użytkownika jest wymagana.',
    'LBL_EMAIL_ERROR_PORT' => 'Port serwera pocztowego jest wymagany.',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'Protokół serwera pocztowego jest wymagany.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'Jest wymagany monitorowany folder.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'Folder Kosz jest wymagany.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Ta informacja nie jest dostępna.',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Brak wybranego serwera poczty wychodzącej.',
    'LBL_EMAIL_ERROR_SENDING' => 'Błąd wysyłania wiadomości e-mail. Aby uzyskać pomoc, skontaktuj się z administratorem.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, '.gif', '') . 'Foldery',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, '.gif', ''),
    'LBL_EMAIL_FOLDERS_ADD' => 'Dodaj',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Dodaj nowy folder',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Zmień nazwę folderu',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'Zapisz',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'Dodaj ten folder do',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Ten folder nie może zostać zmieniony',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'Czy na pewno usunąć ten folder?\n Usunięcie folderu nie będzie mogło być cofnięte. Usunięte zostaną rownież wszystkie podfoldery.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'Nowa nazwa folderu',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Przed wykonaniem tej czynności należy wybrać folder.',
    'LBL_EMAIL_FOLDERS_TITLE' => 'Zarządzanie folderami',

    'LBL_EMAIL_FORWARD' => 'Następny',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => 'Pobrano [[count]] z [[total]] wiadomości',
    'LBL_EMAIL_FROM' => 'Od',
    'LBL_EMAIL_GROUP' => 'grupa',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'Grupa',
    'LBL_EMAIL_HOME_FOLDER' => 'Start',
    'LBL_EMAIL_IE_DELETE' => 'Usuwanie konta pocztowego',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'Usuwanie sygnatury',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'Czy na pewno usunąć to konto pocztowe?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Usuwanie zostało zakończone pomyslnie',
    'LBL_EMAIL_IE_SAVE' => 'Zapisywanie informacji o koncie pocztowym',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'Importowanie wiadomości',
    'LBL_EMAIL_IMPORT_EMAIL' => 'Importuj do SuiteCRM',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'Importuj',
    'LBL_EMAIL_INVALID' => 'Nieprawidłowy',
    'LBL_EMAIL_LOADING' => 'Ładowanie...',
    'LBL_EMAIL_MARK' => 'Oznacz',
    'LBL_EMAIL_MARK_FLAGGED' => 'jako oflagowanie',
    'LBL_EMAIL_MARK_READ' => 'jako przeczytane',
    'LBL_EMAIL_MARK_UNFLAGGED' => 'jako nie oflagowane',
    'LBL_EMAIL_MARK_UNREAD' => 'jako nieprzeczytane',
    'LBL_EMAIL_ASSIGN_TO' => 'Przypisz do',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'Utwórz folder',
    'LBL_EMAIL_MENU_COMPOSE' => 'Utwórz',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Usuń folder',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Opróżnij kosz',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Synchronizuj',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Usuń pliki tymczasowe',
    'LBL_EMAIL_MENU_REMOVE' => 'Usuń',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Zmień nazwę folderu',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Zmienianie nazwy folderu',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Proszę dokonać wyboru przed próbą wykonania tej operacji',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Utwórz Folder (zdalny lub w SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Usuń Folder (zdalny lub w SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Opróżnij wszystkie kosze w Twoim koncie pocztowym',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Oznacz e-mail(e) jako przeczytane',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Zaznacz tę wiadomość(ci) jako nieoflagowaną',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Zmień nazwę Folderu (zdalnego lub w SuiteCRM)',

    'LBL_EMAIL_MESSAGES' => 'wiadomości',

    'LBL_EMAIL_ML_NAME' => 'Lista nazw',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'Wybrane adresy pocztowe',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'Dostępna lista adresów',

    'LBL_EMAIL_MULTISELECT' => '<b>Kliknij Ctrl/b> by wybrać więcej<br />(Użytkownicy Makówek <b>klikają CMD</b>)',

    'LBL_EMAIL_NO' => 'Nie',
    'LBL_EMAIL_NOT_SENT' => 'System nie jest w stanie przetworzyć Twojego zapytania. Skontaktuj się z administratorem systemu.',

    'LBL_EMAIL_OK' => 'OK',
    'LBL_EMAIL_ONE_MOMENT' => 'Proszę chwilę poczekać...',
    'LBL_EMAIL_OPEN_ALL' => 'Otwórz więcej wiadomości',
    'LBL_EMAIL_OPTIONS' => 'Opcje',
    'LBL_EMAIL_QUICK_COMPOSE' => 'Szybko utwórz',
    'LBL_EMAIL_OPT_OUT' => 'Rezygnacja',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Brak zgody na przetwarzanie danych osobowych i niepoprawny adres',
    'LBL_EMAIL_PERFORMING_TASK' => 'Przeprowadzam zadanie',
    'LBL_EMAIL_PRIMARY' => 'Pierwszy',
    'LBL_EMAIL_PRINT' => 'Wydruk',

    'LBL_EMAIL_QC_BUGS' => 'Błąd',
    'LBL_EMAIL_QC_CASES' => 'Sprawa',
    'LBL_EMAIL_QC_LEADS' => 'Potencjalny klient',
    'LBL_EMAIL_QC_CONTACTS' => 'Kontakt',
    'LBL_EMAIL_QC_TASKS' => 'Zadania',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'Szansa sprzedaży',
    'LBL_EMAIL_QUICK_CREATE' => 'Utwórz Szybko',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'Przebudowuję foldery',
    'LBL_EMAIL_RELATE_TO' => 'Powiązane',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'Podgląd zależności',
    'LBL_EMAIL_RECORD' => 'Wpis wiadomości e-mail',
    'LBL_EMAIL_REMOVE' => 'Usuń',
    'LBL_EMAIL_REPLY' => 'Odpowiedz',
    'LBL_EMAIL_REPLY_ALL' => 'Odpowiedz wszystkim',
    'LBL_EMAIL_REPLY_TO' => 'Odpowiedz do',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Odzyskiwanie wiadomości',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'Przeglądanie wiadomości pocztowych',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'Wybierz tylko jeden wpis wiadomości e-mail',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'Powrócić do poprzedniego Modułu?',
    'LBL_EMAIL_REVERT' => 'Odwróć',
    'LBL_EMAIL_RELATE_EMAIL' => 'Powiązane wiadomości',

    'LBL_EMAIL_RULES_TITLE' => 'Zarządznianie regułami',

    'LBL_EMAIL_SAVE' => 'Zapisz',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'Zapisz i odpowiedz',
    'LBL_EMAIL_SAVE_DRAFT' => 'Zapisz szkic',
    'LBL_EMAIL_DRAFT_SAVED' => 'Wersja robocza została zapisana',

    'LBL_EMAIL_SEARCH' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null,    '.gif', ''),
    'LBL_EMAIL_SEARCH_SHORT' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null,        null, '.gif', ''),
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'Od daty',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Do daty',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'Nie ma wyników, spełniających Twoje kryteria.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Wyszukaj Rezultaty',

    'LBL_EMAIL_SELECT' => 'Wybierz',

    'LBL_EMAIL_SEND' => 'Wyślij',
    'LBL_EMAIL_SENDING_EMAIL' => 'Wysyłanie wiadomości',

    'LBL_EMAIL_SETTINGS' => 'Ustawienia',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'Konta pocztowe',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Wyczyść Formularz',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Sprawdź, czy jest nowa poczta',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'Adres Od',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Adres e-mail dla powiadomieć testowych:',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'Od',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Odpowiedz na adres',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Synchronizuj wszystkie konta pocztowe',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'E-mail został wysłany do określonego adresu e-mail używając podanych ustawień poczty wychodzącej. Proszę sprawdź czy e-mail został otrzymany, aby zweryfikować poprawność ustawień.',
    'LBL_EMAIL_TEST_SEE_FULL_SMTP_LOG' => 'Zobacz pełny dziennik SMTP',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Przeprowadź pełną synchronizację? \nDla dużych kont pocztowych może to potrwać kilka minut.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Kliknij kalwisz Shift, lub Ctrl, aby wybrać więcej niż jeden folder.',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'Ogólny',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Tworzenie folderów grupowych',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Edytuj foldery grupy',

    'LBL_EMAIL_SETTINGS_NAME' => 'Nazwa',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Te ustawienia mogą wymagać odświeżenia strony, aby zaczęły działać.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Przywracanie konta pocztowego',
    'LBL_EMAIL_SETTINGS_SAVED' => 'Ustawienia zostały zapisane.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Wyślij wiadomość jako zwykły tekst',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'Liczba wiadomości na stronie',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Ustawienia wyglądu',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Ustawienia',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Dostępne foldery użytkownika',
    'LBL_EMAIL_ERROR_PREPEND' => 'Wystąpił błąd wiadomości e-mail:',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Serwer poczty wychodzącej wybrany dla konta pocztowego, którego używasz jest niepoprawny. Sprawdź ustawienia lub wybierz inny serwer poczty dla konta pocztowego.',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Serwer poczty wychodzącej nie jest skonfigurowany do wysyłania wiadmości. Proszę skonfiguruj serwer poczty wychodzącej lub wybierz serwer poczty wychodzącej dla konta pocztowego, którego używasz w Ustawienia >> Konto pocztowe.',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => 'Domyślny podpis',
    'LBL_EMAIL_SIGNATURES' => 'Podpisy',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Inny',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[ Foldery zdalne ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[ Foldery SuiteCRM ]',
    'LBL_EMAIL_SUBJECT' => 'Temat',
    'LBL_EMAIL_SUCCESS' => 'Zakończone powodzeniem',
    'LBL_EMAIL_SUITE_FOLDER' => 'Folder SuiteCRM',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'Brak treści szablonu wiadomości',
    'LBL_EMAIL_TEMPLATES' => 'Szablony',
    'LBL_EMAIL_TO' => 'Do',
    'LBL_EMAIL_VIEW' => 'Podgląd',
    'LBL_EMAIL_VIEW_HEADERS' => 'Wyświetl nagłówki',
    'LBL_EMAIL_VIEW_RAW' => 'Wyświetl źródło wiadomości',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'Ta funkcja nie jest wspierana przez POP3.',
    'LBL_DEFAULT_LINK_TEXT' => 'Domyślny tekst linku.',
    'LBL_EMAIL_YES' => 'Tak',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Wyślij wiadomość testową',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Wiadomość testowa została wysłana',
    'LBL_EMAIL_MESSAGE_NO' => 'Numer wiadomości',
    'LBL_EMAIL_IMPORT_SUCCESS' => 'Import zakończony pomyślnie',
    'LBL_EMAIL_IMPORT_FAIL' => 'Import nie powiódł się, ponieważ wiadomość została już zaimportowana, lub usunięta z serwera',

    'LBL_LINK_NONE' => 'Nie',
    'LBL_LINK_ALL' => 'Wszystko',
    'LBL_LINK_RECORDS' => 'Wpisy',
    'LBL_LINK_SELECT' => 'Wybierz',
    'LBL_LINK_ACTIONS' => 'AKCJE',
    'LBL_CLOSE_ACTIVITY_HEADER' => 'Potwierdź',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'Czy chcesz zamknąć ten #moduł#?',
    'LBL_INVALID_FILE_EXTENSION' => 'Nieprawidłowe rozszerzenie pliku',

    'ERR_AJAX_LOAD' => 'Wystąpił błąd',
    'ERR_AJAX_LOAD_FAILURE' => 'Wystąpił błąd podczas przetwarzania żądania użytkownika, proszę spróbować ponownie później.',
    'ERR_AJAX_LOAD_FOOTER' => 'Jeśli ten błąd będzie się powtarzał, poproś administratora o wyłączenie Ajax dla tego modułu',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'Separator dziesiętny nie może korzystać z tego samego charakteru co separator tysięczny .\n\n. Proszę zmienić wartość.',
    'ERR_DELETE_RECORD' => 'Numer zapisów musi być określona, aby usunąć kontakt.',
    'ERR_EXPORT_DISABLED' => 'Eksport wyłączony.',
    'ERR_EXPORT_TYPE' => 'Błąd podczas eksportu  ',
    'ERR_INVALID_EMAIL_ADDRESS' => 'nie ważny adres e-mail.',
    'ERR_INVALID_FILE_REFERENCE' => 'Plik Uszkodzony',
    'ERR_NO_HEADER_ID' => 'Ta funkcja nie jest dostępna w tym temacie.',
    'ERR_NOT_ADMIN' => 'Nieautoryzowany dostęp do modułu administracji.',
    'ERR_UNAUTHORIZED_PAGE_ACCESS' => 'Nie masz uprawnień do przeglądania tej strony. Skontaktuj się z administratorem systemu.',
    'ERR_UNAUTHORIZED_PAGE_ACCESS_TO_HOME_PAGE' => 'Nie masz uprawnień do przeglądania tej strony. Przekierowanie do strony głównej...',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Brakujące żądane pole',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Niepoprawne wymagane pole:',
    'ERR_INVALID_VALUE' => 'Niepoprawna Wartość:',
    'ERR_NO_SUCH_FILE' => 'Plik nie istnieje w systemie',
    'ERR_NO_SINGLE_QUOTE' => 'Bez używania cudzysłowu dla ',
    'ERR_NOTHING_SELECTED' => 'Proszę dokonać selekcji przed następną czynnością.',
    'ERR_SELF_REPORTING' => 'Użytkownik nie może raportować do siebie.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Nie pasuje do pola',
    'ERR_SQS_NO_MATCH' => 'Nie pasuje',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Określ indeks &#39;klucza&#39; w atrybucie displayParams definicji meta-danych',
    'ERR_EXISTING_PORTAL_USERNAME' => 'Błąd: Nazwa portalu została już przydzielona do innego kontaktu.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Wartości w polach nie są wyrażone z odpowiednią dokładnością.',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'Wystąpił błąd podczas próby zapisu do konta zewnętrznego.',
    'ERR_NO_DB' => 'Nie można połączyć się z bazą danych. Szczegóły zapisano w logu SuiteCRM (0).',
    'ERR_DB_FAIL' => 'Awaria bazy danych. Szczegóły zapisano w logu SuiteCRM.',
    'ERR_DB_VERSION' => 'Pliki SuiteCRM {0} mogą być używane tylko z bazą danych SuiteCRM {1}.',

    'LBL_ACCOUNT' => 'Kontrahent',
    'LBL_ACCOUNTS' => 'Kontrahenci',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Działania',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Podsumowanie',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Podsumowanie',
    'LBL_ADD_BUTTON' => 'Dodaj',
    'LBL_ADD_DOCUMENT' => 'Dodaj Dokument',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'F',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Dodaj do listy docelowych odbiorców',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'Dodawanie kontaktów do listy docelowych odbiorców',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Kliknij by Zamknąć',
    'LBL_ADDITIONAL_DETAILS' => 'Dodatkowe Detale',
    'LBL_ADMIN' => 'Administrator',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Archiwum',
    'LBL_ASSIGNED_TO_USER' => 'Przypisano do użytkownika',
    'LBL_ASSIGNED_TO' => 'Przypisane do:',
    'LBL_BACK' => 'Powrót',
    'LBL_BILLING_ADDRESS' => 'Adres do fakturowania',
    'LBL_QUICK_CREATE' => 'Utwórz ',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - Otwarty CRM',
    'LBL_BUGS' => 'Błędy',
    'LBL_BY' => 'przez',
    'LBL_CALLS' => 'Rozmowy telefoniczne',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Wyślij kolejkowane e-maile kampanii',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Zapisz',
    'LBL_CASE' => 'Sprawa',
    'LBL_CASES' => 'Sprawy',
    'LBL_CHANGE_PASSWORD' => 'Zmiana hasła',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHARTS' => 'Wykresy',
    'LBL_QUICK_CHARTS' => 'Szybkie wykresy',
    'LBL_QUICK_HISTORY' => 'Oś czasu',
    'LBL_CHECKALL' => 'Sprawdź Wszystkie',
    'LBL_CITY' => 'Miasto',
    'LBL_CLEAR_BUTTON_LABEL' => 'Wyczyść',
    'LBL_CLEAR_BUTTON_TITLE' => 'Wyczyść',
    'LBL_CLEARALL' => 'Usuń Wszystkie',
    'LBL_CLOSE_BUTTON_TITLE' => 'Zamknij',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Zamknij i Utwórz Nowe',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Zamknij i Utwórz Nowe',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Otwarte',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'F',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Napisz e-mail',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Napisz e-mail',
    'LBL_SEARCH_DROPDOWN_YES' => 'Tak',
    'LBL_SEARCH_DROPDOWN_NO' => 'Nie',
    'LBL_CONTACT_LIST' => 'Lista Kontaktów',
    'LBL_CONTACT' => 'Kontakt',
    'LBL_CONTACTS' => 'Kontakty',
    'LBL_CONTRACT' => 'Umowa',
    'LBL_CONTRACTS' => 'Umowy',
    'LBL_COUNTRY' => 'Kraj:',
    'LBL_CREATE_BUTTON_LABEL' => 'Utwórz',
    'LBL_CREATED_BY_USER' => 'Utworzony przez Użytkownika',
    'LBL_CREATED_USER' => 'Utworzony przez Użytkownika',
    'LBL_CREATED' => 'Utworzone przez',
    'LBL_CURRENT_USER_FILTER' => 'Moje elementy',
    'LBL_CURRENCY' => 'Waluta:',
    'LBL_DOCUMENTS' => 'Dokumenty',
    'LBL_DATE_ENTERED' => 'Data Utworzenia:',
    'LBL_DATE_MODIFIED' => 'Ostatnia Modyfikacja:',
    'LBL_EDIT_BUTTON' => 'Edytuj',
    'LBL_DUPLICATE_BUTTON' => 'Skopiuj',
    'LBL_DELETE_BUTTON' => 'Usuń',
    'LBL_DELETE' => 'Usuń',
    'LBL_DELETED' => 'Usunięte',
    'LBL_DIRECT_REPORTS' => 'Bezpośredni Raport',
    'LBL_DONE_BUTTON_LABEL' => 'Wykonano',
    'LBL_DONE_BUTTON_TITLE' => 'Wykonano',
    'LBL_FAVORITES' => 'Ulubione',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'Wybierz plik vCard',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard nie ma wszystkich wymaganych pól dla tego modułu. Zajrzyj do suitecrm.log po szczegóły.',
    'LBL_VCARD_ERROR_FILESIZE' => 'Przesłany plik przekracza limit rozmiaru 30000 bajtów, który został określony w formularzu HTML.',
    'LBL_VCARD_ERROR_DEFAULT' => 'Wystąpił błąd podczas przesyłania pliku vCard. Zajrzyj do suitecrm.log po szczegóły.',
    'LBL_IMPORT_VCARD' => 'Importuj vCard:',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Importuj vCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Importuj vCard',
    'LBL_VIEW_BUTTON' => 'Podgląd',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Wyślj w Formacie PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Wyślj w Formacie PDF',
    'LBL_EMAILS' => 'Wiadomości e-mail',
    'LBL_EMPLOYEES' => 'Pracownicy',
    'LBL_ENTER_DATE' => 'Wprowadź Datę',
    'LBL_EXPORT' => 'Eksportuj',
    'LBL_FAVORITES_FILTER' => 'Ulubione',
    'LBL_GO_BUTTON_LABEL' => 'Dalej',
    'LBL_HIDE' => 'Ukryj',
    'LBL_HISTORY' => 'Historia',
    'LBL_NEW' => 'Nowy',
    'LBL_ID' => 'ID',
    'LBL_IMPORT' => 'Importuj',
    'LBL_IMPORT_STARTED' => 'Import Rozpoczęty: ',
    'LBL_LAST_VIEWED' => 'Ostatnio Przeglądane',
    'LBL_LEADS' => 'Potencjalni Klienci',
    'LBL_LESS' => 'mniej',
    'LBL_CAMPAIGN' => 'Kampania:',
    'LBL_CAMPAIGNS' => 'Kampanie',
    'LBL_CAMPAIGNLOG' => 'Kampania Log',
    'LBL_CAMPAIGN_CONTACT' => 'Kampanie',
    'LBL_CAMPAIGN_ID' => 'campaign_id',
    'LBL_CAMPAIGN_NONE' => 'Brak',
    'LBL_THEME' => 'Szablon:',
    'LBL_FOUND_IN_RELEASE' => 'Znaleziono w wydaniu',
    'LBL_FIXED_IN_RELEASE' => 'Naprawiono w wydaniu',
    'LBL_LIST_ACCOUNT_NAME' => 'Nazwa kontrahenta',
    'LBL_LIST_ASSIGNED_USER' => 'Użytkownik',
    'LBL_LIST_CONTACT_NAME' => 'Nazwa kontaktu',
    'LBL_LIST_CONTACT_ROLE' => 'Funkcja',
    'LBL_LIST_DATE_ENTERED' => 'Data utworzenia',
    'LBL_LIST_EMAIL' => 'E-mail',
    'LBL_LIST_NAME' => 'Nazwa',
    'LBL_LIST_OF' => 'z',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_RELATED_TO' => 'Powiązany z',
    'LBL_LIST_USER_NAME' => 'Nazwa Użytkownika',
    'LBL_LISTVIEW_NO_SELECTED' => 'Proszę wybrać co najmniej 1 wpis w celu kontynuowania.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Wybierz co najmniej dwa wpisy, aby kontynuować.',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Wybrane wpisy',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Wybrane: ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'Jan',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Kowalski',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Sz. Pan',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Młodszy klepacz kodu',
    'LBL_CANCEL' => 'Anuluj',
    'LBL_VERIFY' => 'Weryfikuj',
    'LBL_RESEND' => 'Wyślij ponownie',
    'LBL_RECORD_DOES_NOT_EXIST' => 'Błąd wyszukiwania wpisu. Został on prawdopodobnie usunięty lub nie masz uprawnień, aby go zobaczyć.',
    'LBL_PROFILE' => 'Profil',
    'LBL_MAILMERGE' => 'Korespondencja Seryjna',
    'LBL_MASS_UPDATE' => 'Masowa Aktualizacja',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Nie ma pól dostępnych do przeprowadzenia masowej aktualizacji',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Główny adres bez zgody na przetwarzanie danych osobowych',
    'LBL_OPT_IN_FLAG_PRIMARY' => 'Główny adres',
    'LBL_MEETINGS' => 'Spotkania',
    'LBL_MEETING_GO_BACK' => 'Wróć do spotkania',
    'LBL_MEMBERS' => 'Członkowie',
    'LBL_MEMBER_OF' => 'Członek',
    'LBL_MODIFIED_BY_USER' => 'Zmodyfikowany przez Użytkownika',
    'LBL_MODIFIED_USER' => 'Zmodyfikowany przez Użytkownika',
    'LBL_MODIFIED' => 'Zmodyfikowane przez',
    'LBL_MODIFIED_NAME' => 'Nazwa użytkownika modyfikującego',
    'LBL_MORE' => 'Więcej',
    'LBL_MY_ACCOUNT' => 'Moje ustawienia',
    'LBL_NAME' => 'Nazwa',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Utwórz',
    'LBL_NEW_BUTTON_TITLE' => 'Utwórz',
    'LBL_EDIT' => 'Edytuj',
    'LBL_NEXT_BUTTON_LABEL' => 'Dalej',
    'LBL_NONE' => '--Brak--',
    'LBL_NOTES' => 'Notatki',
    'LBL_OPPORTUNITIES' => 'Szanse Sprzedaży',
    'LBL_OPPORTUNITY_NAME' => 'Nazwa Szansy sprzedaży',
    'LBL_OPPORTUNITY' => 'Szansa Sprzedaży',
    'LBL_OR' => 'lub',
    'LBL_PANEL_OVERVIEW' => 'Przegląd',
    'LBL_PANEL_ASSIGNMENT' => 'INNE',
    'LBL_PANEL_ADVANCED' => 'WIĘCEJ INFORMACJI',
    'LBL_PARENT_TYPE' => 'Typ Macierzysty',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_POSTAL_CODE' => 'Kod Pocztowy:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Główny Adres - Miasto:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Główny Adres - Kraj:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Główny Adres - Kod Pocztowy:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Główny Adres - Kraj:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Główny Adres - Ulica 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Główny Adres - Ulica 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Główny Adres - Ulica:',
    'LBL_PRIMARY_ADDRESS' => 'Główny Adres:',

    'LBL_PROSPECTS' => 'Perspektywy',
    'LBL_PRODUCTS' => 'Produkty',
    'LBL_PROJECT_TASKS' => 'Zadania Projektowe',
    'LBL_PROJECTS' => 'Projekty',
    'LBL_QUOTES' => 'Oferty',

    'LBL_RELATED' => 'Powiązany',
    'LBL_RELATED_RECORDS' => 'Powiązane wpisy',
    'LBL_REMOVE' => 'Usuń',
    'LBL_REPORTS_TO' => 'Raporty do',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Zaznaczone Wypełnij',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Wykonano',
    'LBL_FULL_FORM_BUTTON_KEY' => 'F',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Pełny formularz',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Pełny formularz',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Zapisz & Utwórz Nowe',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Zapisz & Utwórz Nowe',
    'LBL_SAVE_OBJECT' => 'Zapisz {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'Szukaj',
    'LBL_SEARCH_BUTTON_TITLE' => 'Szukaj',
    'LBL_FILTER' => 'Filtr wyszukiwania',
    'LBL_SEARCH' => 'Szukaj',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => 'więcej',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Błędny format pliku. Można wysłać tylko pliki graficzne.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Wybierz',
    'LBL_SELECT_BUTTON_TITLE' => 'Wybierz',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Przeglądaj dokumenty',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Przeglądaj dokumenty',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Wybierz Kontakt',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Wybierz Kontakt',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Wybierz z Raportów',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Wybierz Raporty',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Wybierz Użytkownika',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Wybierz Użytkownika',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Wyczyść zaznaczenie',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Wyczyść zaznaczenie',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Wyczyść zaznaczenie',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Wyczyść zaznaczenie',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Wybierz plik',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Wybierz plik',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Wyczyść plik',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Wyczyść plik',

    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Wybierz Użytkownika',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Wybierz Użytkownika',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Wyczyść użytkownika',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Wyczyść użytkownika',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Wybierz kontrahenta',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Wybierz kontrahenta',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Wyczyść Kontrahenta',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Wyczyść Kontrahenta',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'Wybierz kampanię',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'Wybierz kampanię',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Wyczyść kampanię',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Wyczyść kampanię',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Wybierz Kontakt',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Wybierz Kontakt',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Wyczyść kontakt',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Wyczyść kontakt',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Wybierz zespół',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Wybierz zespół',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Wyczyść zespół',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Wyczyść zespół',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Użyto źródeł do zbudowania tej strony (zapytania, pliki)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'sekundy.',
    'LBL_SERVER_RESPONSE_TIME' => 'Czas odpowiedzi Serwera',
    'LBL_SERVER_MEMORY_BYTES' => 'bajtów',
    'LBL_SERVER_MEMORY_USAGE' => 'Zużycie pamięci serwera: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Użycie: - moduł: {0} - działanie: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Szczytowe zużycie pamięci serwera: {0} ({1})',
    'LBL_SHIPPING_ADDRESS' => 'Adres dostawy',
    'LBL_SHOW' => 'Pokaż',
    'LBL_STATE' => 'Stan:',
    'LBL_STATUS_UPDATED' => 'Twój Status dla tego wydarzenia został zaktualizowany',
    'LBL_STATUS' => 'Status:',
    'LBL_STREET' => 'Ulica',
    'LBL_SUBJECT' => 'Temat',

    'LBL_INBOUNDEMAIL_ID' => 'ID przychodzących wiadomości e-mail',

    'LBL_SCENARIO_SALES' => 'Sprzedaż',
    'LBL_SCENARIO_MARKETING' => 'Marketing',
    'LBL_SCENARIO_FINANCE' => 'Usługi Finansowe',
    'LBL_SCENARIO_SERVICE' => 'Usługa',
    'LBL_SCENARIO_PROJECT' => 'Zarządzanie projektami',

    'LBL_SCENARIO_SALES_DESCRIPTION' => 'Ten scenariusz umożliwia zarządzanie pozycjami sprzedaży',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => 'Ten scenariusz umożliwia zarządzanie pozycjami marketingowymi',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => 'Ten scenariusz umożliwia zarządzanie pozycjami powiązanymi z finansami',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => 'Ten scenariusz umożliwia zarządzanie pozycjami powiązanymi z usługami',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => 'Ten scenariusz umożliwia zarządzanie pozycjami powiązanymi z projektami',

    'LBL_SYNC' => 'Synchronizuj',
    'LBL_TABGROUP_ALL' => 'Wszystko',
    'LBL_TABGROUP_ACTIVITIES' => 'Działania',
    'LBL_TABGROUP_COLLABORATION' => 'Współpraca',
    'LBL_TABGROUP_MARKETING' => 'Marketing',
    'LBL_TABGROUP_OTHER' => 'Inny',
    'LBL_TABGROUP_SALES' => 'Sprzedaż',
    'LBL_TABGROUP_SUPPORT' => 'Wsparcie',
    'LBL_TASKS' => 'Zadania',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archiwum e-mail',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archiwizuj email',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Nie Usuwaj',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Nie Usuwaj',
    'LBL_UNDELETE_BUTTON' => 'Nie Usuwaj',
    'LBL_UNDELETE' => 'Nie Usuwaj',
    'LBL_UNSYNC' => 'Wyłącz synchronizację',
    'LBL_UPDATE' => 'Aktualizuj',
    'LBL_USER_LIST' => 'Lista Użytkowników',
    'LBL_USERS' => 'Użytkownicy',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'Sprawdzanie możliwości duplikacji wprowadzanej wiadomości...',
    'LBL_VERIFY_PORTAL_NAME' => 'Sprawdzanie możliwośći duplikacji wprowadzanego portalu...',
    'LBL_VIEW_IMAGE' => 'zobacz',

    'LNK_ABOUT' => 'O programie',
    'LNK_ADVANCED_FILTER' => 'Zaawansowany filtr wyszukiwania',
    'LNK_BASIC_FILTER' => 'Szybki filtr wyszukiwania',
    'LBL_ADVANCED_SEARCH' => 'Zaawansowany filtr wyszukiwania',
    'LBL_QUICK_FILTER' => 'Szybki filtr wyszukiwania',
    'LBL_BASIC_FILTER' => 'Filtr podstawowy',
    'LBL_QUICK' => 'Szybkie',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Pokaż wszystko',
    'LNK_CLOSE' => 'Zamknij',
    'LBL_MODIFY_CURRENT_FILTER' => 'Zmodyfikuj bieżący filtr wyszukiwania',
    'LNK_SAVED_VIEWS' => 'Zapisz Wyniki Wyszukiwania & Layout',
    'LNK_DELETE' => 'Usuń',
    'LNK_EDIT' => 'Edytuj',
    'LNK_GET_LATEST' => 'Pobierz co najmniej',
    'LNK_GET_LATEST_TOOLTIP' => 'Zamień z ostatnią wersją',
    'LNK_HELP' => 'Pomoc',
    'LNK_CREATE' => 'Utwórz',
    'LNK_LIST_END' => 'Zakończ',
    'LNK_LIST_NEXT' => 'Dalej',
    'LNK_LIST_PREVIOUS' => 'Poprzednie',
    'LNK_LIST_RETURN' => 'Wróć do Listy',
    'LNK_LIST_START' => 'Start',
    'LNK_LOAD_SIGNED' => 'Znak',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'Zamień z podpisanym dokumentem',
    'LNK_PRINT' => 'Wydruk',
    'LNK_BACKTOTOP' => 'Na górę',
    'LNK_REMOVE' => 'Usuń',
    'LNK_RESUME' => 'Wznów',
    'LNK_VIEW_CHANGE_LOG' => 'Pokaż historię zmian',
    'LBL_CHANGE_LOG' => 'Historia Zmian',

    'NTC_CLICK_BACK' => 'Proszę kliknąć na wsteczny przycisk przeglądarki i naprawić błąd.',
    'NTC_DATE_FORMAT' => '(rrrr-mm-dd)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Jesteś pewny, że chcesz usunąć wybrany(e) wpis(y)?',
    'NTC_TEMPLATE_IS_USED' => 'Szablon jest używany w przynajmniej jednym wpisie e-maili marketingowych. Czy na pewno chcesz usunąć szablon?',
    'NTC_TEMPLATES_IS_USED' => 'Następujące szablony są używane w wpisach marketingu e-mailowego. Czy na pewno chcesz je usunąć?' . PHP_EOL,
    'NTC_DELETE_CONFIRMATION' => 'Czy na pewno chcesz usunąć ten zapis?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Czy na pewno chcesz usunąć',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Czy na pewno chcesz zaktualizować',
    'NTC_DELETE_SELECTED_RECORDS' => ' zaznaczony(ch) wpis(ów)?',
    'NTC_LOGIN_MESSAGE' => 'Proszę wprowadzić nazwę użytkownika i hasło.',
    'NTC_NO_ITEMS_DISPLAY' => 'brak',
    'NTC_REMOVE_CONFIRMATION' => 'Jesteś pewny że chcesz usunąć to powiązanie?',
    'NTC_REQUIRED' => 'Zaznaczone Wypełnij',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Witamy',
    'NTC_YEAR_FORMAT' => '(rrrr)',
    'WARN_UNSAVED_CHANGES' => 'Masz zamiar opuścić ten wpis bez zachowania zmian. Czy na pewno chcesz opuścić ten wpis?',
    'ERROR_NO_RECORD' => 'Błąd wyszukiwania wpisu. Został on prawdopodobnie usunięty lub nie masz uprawnień, aby go zobaczyć.',
    'WARN_BROWSER_VERSION_WARNING' => '<b>Ostrzeżenie:</b> Twoja wersja przeglądarki nie jest już obsługiwana lub używasz nieobsługiwanej przeglądarki. <p></p> Zalecane są następujące wersje przeglądarek: <p></p> <ul><li>Internet Explorer 10 (widok zgodności nie obsługiwany) <li>Firefox 32.0 <li>Safari 5.1 <li>Chrome 37</ul>',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>Ostrzeżenie:</b> Twoja przeglądarka jest w widoku zgodności IE, który nie jest obsługiwany.',
    'ERROR_TYPE_NOT_VALID' => 'Błąd. Ten typ jest niepoprawny.',
    'ERROR_NO_BEAN' => 'Nie udało się uzyskać zawartości (bean).',
    'LBL_DUP_MERGE' => 'Wyszukaj duplikaty',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'Zarządzaj Subskrypcjami',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Zarządzaj Subskrypcjami dla ',
    // Ajax status strings
    'LBL_LOADING' => 'Ładowanie...',
    'LBL_SEARCHING' => 'Wyszukiwanie...',
    'LBL_SAVING_LAYOUT' => 'Zapisz wygląd ...',
    'LBL_SAVED_LAYOUT' => 'Wygląd został zapisany.',
    'LBL_SAVED' => 'Zapisane',
    'LBL_SAVING' => 'Zapisuję',
    'LBL_DISPLAY_COLUMNS' => 'Wyświetl Kolumny',
    'LBL_HIDE_COLUMNS' => 'Ukryj Kolumny',
    'LBL_COLUMNS' => 'Kolumny',
    'LBL_SEARCH_CRITERIA' => 'Kryteria wyszukiwania',
    'LBL_SAVED_VIEWS' => 'Zapisane widoki',
    'LBL_PROCESSING_REQUEST' => 'Przetwarzanie...',
    'LBL_REQUEST_PROCESSED' => 'Wykonano',
    'LBL_AJAX_FAILURE' => 'Błąd Ajax',
    'LBL_MERGE_DUPLICATES' => 'Połącz Duplikaty',
    'LBL_SAVED_FILTER_SHORTCUT' => 'Moje filtry wyszukiwania',
    'LBL_SEARCH_POPULATE_ONLY' => 'Wyszukaj używając powyższego formularza',
    'LBL_DETAILVIEW' => 'Widok szczegółowy',
    'LBL_LISTVIEW' => 'Widok listy',
    'LBL_EDITVIEW' => 'Widok edycji',
    'LBL_BILLING_STREET' => 'Ulica:',
    'LBL_SHIPPING_STREET' => 'Ulica:',
    'LBL_SEARCHFORM' => 'Formularz Wyszukiwania',
    'LBL_SAVED_SEARCH_ERROR' => 'Wprowadź nazwę dla widoku.',
    'LBL_DISPLAY_LOG' => 'Wyświetl Log',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'System',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Wygaśnięcie Sesji',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Sesja wygaśnie w ciągu 2 minut. Proszę zapisać zmiany.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'Twoja sesja została zakończona.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "Agenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Spotkanie',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Rozmowa telefoniczna',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Czas: ',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Lokalizacja: ',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Opis:',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Status: ',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Powiązany z:',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nKliknij OK, aby zobaczyć tą rozmowę telefoniczną lub Anuluj, aby ignorować tę wiadomość.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "Kliknij OK, aby zobaczyć to spotkanie lub kliknij Anuluj, aby oddalić tą wiadomość.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Zdarzenie',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'Zdarzenie nie zostało ustawione.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'Lokalizacja nie jest ustawiona.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'Data początkowa nie jest zdefiniowana.',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'Brak wyników',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => 'Nie znaleziono wyników... Proszę zmienić kryteria wyszukiwania i spróbować ponownie.',
    'MSG_LIST_VIEW_NO_RESULTS' => 'Brak wyników dla <item1>',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Utwórz <item1> jako nowy <item2>',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'lub zmień kryteria wyszukiwania',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'Nie posiadasz aktualnie żadnych wpisów. <item2> lub <item3> je teraz.',

    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Dodaj do Moich Ulubionych',
    'LBL_CREATE_CONTACT' => 'Utwórz Kontakt',
    'LBL_CREATE_CASE' => 'Utwórz Sprawę',
    'LBL_CREATE_NOTE' => 'Utwórz Notatkę',
    'LBL_CREATE_OPPORTUNITY' => 'Utwórz Szansę sprzedaży',
    'LBL_SCHEDULE_CALL' => 'Utwórz Rozmowę telefoniczną',
    'LBL_SCHEDULE_MEETING' => 'Zaplanuj Spotkanie',
    'LBL_CREATE_TASK' => 'Utwórz Zadanie',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Okno Generowania',
    'LBL_SAVE_WEB_TO_LEAD_FORM' => 'Zapisz formularz sieci Web',
    'LBL_AVAILABLE_FIELDS' => 'Dostępne pola',
    'LBL_FIRST_FORM_COLUMN' => 'Pierwsza kolumna formularza',
    'LBL_SECOND_FORM_COLUMN' => 'Druga kolumna formularza',
    'LBL_ASSIGNED_TO_REQUIRED' => 'Brak wymaganego pola: Przypisane do',
    'LBL_RELATED_CAMPAIGN_REQUIRED' => 'Brak wymaganego pola: Powiązana kampania',
    'LBL_TYPE_OF_PERSON_FOR_FORM' => 'Formularz www do utworzenia ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC' => 'Wysłanie tego formularza spowoduje utworzenie ',

    'LBL_ADD_ALL_LEAD_FIELDS' => 'Dodaj Wszystkie Pola',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'Wyczyść wszystkie pola',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Usuń Wszystkie Pola',
    'LBL_NEXT_BTN' => 'Dalej',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Akceptowane są tylko załączniki obrazkowe',
    'LBL_TRAINING' => 'Forum wsparcia',
    'ERR_MSSQL_DB_CONTEXT' => 'Zmieniony kontekst bazy danych na',
    'ERR_MSSQL_WARNING' => 'Ostrzeżenie:',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Błąd: Nie można odnaleźć pliku [[file]] . Nie można utworzyć, ponieważ nie znaleziono właściwego pliku HTML.',
    'ERR_CANNOT_FIND_MODULE' => 'Błąd: Moduł [module] nie istnieje.',
    'LBL_ALT_ADDRESS' => 'Inny Adres:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Błąd: Różny numer argumentu dla elementów &#39;klucza&#39; i &#39;kopii&#39; macierzy displayParams.',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Ogólny',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtry wyszukiwania',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Tylko moje elementy',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Tytuł',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Wyświetl ',

    // MySugar status strings
    'LBL_MAX_DASHLETS_REACHED' => 'Osiągnięto maksymalną ustawioną przez administratora ilość widżetów SuiteCRM. Usuń któryś, by móc dodać kolejny.',
    'LBL_ADDING_DASHLET' => 'Dodawanie widżetu SuiteCRM...',
    'LBL_ADDED_DASHLET' => 'Widżet SuiteCRM został dodany',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Czy potwierdzasz usunięcie widżetu SuiteCRM?',
    'LBL_REMOVING_DASHLET' => 'Usuwanie widżetu SuiteCRM...',
    'LBL_REMOVED_DASHLET' => 'Widżet SuiteCRM została usunięty',

    // MySugar Menu Options

    'LBL_LOADING_PAGE' => 'Ładowanie strony, proszę czekać...',

    'LBL_RELOAD_PAGE' => '<a href="javascript: window.location.reload()">Przeładuj okno </a> w celu użycia widżetu SuiteCRM.',
    'LBL_ADD_DASHLETS' => 'Dodaj widżety',
    'LBL_CLOSE_DASHLETS' => 'Zamknij',
    'LBL_OPTIONS' => 'Opcje',
    'LBL_1_COLUMN' => '1 kolumna',
    'LBL_2_COLUMN' => '2 kolumny',
    'LBL_3_COLUMN' => '3 kolumny',
    'LBL_PAGE_NAME' => 'Nazwa strony',

    'LBL_SEARCH_RESULTS' => 'Wyszukaj Rezultaty',
    'LBL_SEARCH_MODULES' => 'Moduł',
    'LBL_SEARCH_TOOLS' => 'Narzędzia',
    'LBL_SEARCH_HELP_TITLE' => 'Praca z wielokrotnym wyborem i zapisywaniem widoków wyszukiwania',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Brak Zdjęcia',

    'LBL_MODULE' => 'Moduł',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Kopiuj adres z lewej:',
    'LBL_SAVE_AND_CONTINUE' => 'Zapisz i Kontynuuj',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong></strong></p><ul>Dokonywanie wielokrotnego wyboru<li>kliknij na wartości, aby wybrać atrybut.</li><li>Ctrl + kliknięcie&nbsp;aby&nbsp;wybierz opcję wielokrotnego wyboru. Użytkownicy komputerów Mac za pomocą CMD = kliknięcie.</li><li>Aby zaznaczyć wszystkie wartości między dwoma atrybutami,&nbsp; kliknij pierwszą wartość&nbsp;a następnie z wciśniętym klawiszem Shift kliknij ostatnią wartość.</li></ul><p><strong>Zaawansowane wyszukiwanie i opcje wyglądu</strong><br><br>za pomocą opcji <b>Zapisane wyszukiwania i wygląd</b>, można zapisać zestaw parametrów wyszukiwania i/lub wygląd niestandardowego widoku listy w celu szybkiego uzyskania wyników wyszukiwania w przyszłości. Można zapisać nieograniczoną liczbę wyszukiwań i widoków. Wszystkie zapisane wyszukiwania są wyświetlane na liście Zapisane Wyszukiwania, a ostatnio wykorzystane wyszukiwanie pojawia się na niej jako pierwsze.<br><br>Aby dostosować układ widoku listy, użyj sekcji Ukrywanie kolumn i Wyświetlanie kolumn zaznaczając pola, które mają być wyświetlane w wynikach wyszukiwania. Na przykład można wyświetlić lub ukryć w wyszukiwanych wynikach szczegóły takie jak nazwa wpisu, przypisany użytkownik czy zespół. Aby dodać kolumny do widoku listy, zaznacz interesujące cię pole z sekcji Ukryj kolumny i użyj strzałki w lewo, aby przenieść ją do sekcji Wyświetl kolumny. Aby usunąć kolumnę z widoku listy, zaznacz ją na liście wyświetlanych kolumn i użyj strzałki w prawo, aby przenieść ją do listy kolumn ukrytych.<br><br>Jeśli zapiszesz ustawienia układu, będzie można je załadować w dowolnym momencie aby wyświetlić wyniki wyszukiwania w niestandardowym układzie.<br><br>Aby zapisać i zaktualizować wyszukiwanie i/lub widok:<ol><li>wprowadź nazwę wyszukiwania w polu <b>Zapisz to wyszukiwanie jako</b> i kliknij<b>Zapisz</b>. Nazwa zostanie wyświetlona na liście zapisanych kryteriów wyszukiwania obok przycisku </b>Wyczyść<b>.</li><li>Aby wyświetlić zapisane wyszukiwanie, wybierz je z listy Zapisane wyszukiwania. Wyniki wyszukiwania są wyświetlane w widoku listy.</li><li>Aby zaktualizować właściwości zapisanych wyszukiwań, wybierz je z listy, wprowadź nowe kryteria wyszukiwania i/lub opcje widoku w sekcji Wyszukiwanie zaawansowane, a następnie kliknij przycisk <b>Aktualizacja</b> obok <b>Modyfikacji bieżącego wyszukiwania</b>.</li><li>Aby usunąć zapisane wyszukiwanie, wybierz je z listy, kliknij przycisk <b>Usuń</b> znajdujący się obok <b>Modyfikacji bieżącego wyszukiwania</b>, a następnie kliknij <b>OK</b>, aby potwierdzić usunięcie.</li></ol><p><strong>Porady</strong><br><br>Przy użyciu % jako symbolu wieloznacznego operatora możesz rozszerzać zakres wyszukiwania. Na przykład: zamiast wyszukiwać wyniku "dom" można zmienić wyszukiwanie na "dom%", co dopasuje wszystkie wyniki rozpoczynające się od ciągu znaków "dom", ale może zawierać różne inne znaki (domu, domek, domowy).</p>',

    //resource management
    'ERR_QUERY_LIMIT' => 'Błąd: Osiągnięto limit zapytania dla $limit zakresu dla modułu $module.',
    'ERROR_NOTIFY_OVERRIDE' => 'Błąd: Obserwator źródła ->notify() musi być nadpisany.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Błąd: Nie można utworzyć monitora, ponieważ plik meta jest pusty, lub nie istnieje.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Błąd: Nie skonfigurowano monitora dla zadanej nazwy',
    'ERR_UNDEFINED_METRIC' => 'Błąd: Nie można ustawić wartości dla niezidentyfikowanej jednostki miary',
    'ERR_STORE_FILE_MISSING' => 'Błąd: Nie można odnaleźć implementacji pliku składowania',

    'LBL_MONITOR_ID' => 'ID monitora',
    'LBL_USER_ID' => 'ID użytkownika',
    'LBL_MODULE_NAME' => 'Nazwa Modułu',
    'LBL_ITEM_ID' => 'ID przedmiotu',
    'LBL_ITEM_SUMMARY' => 'Podsumowanie dla przedmiotu',
    'LBL_ACTION' => 'Działanie',
    'LBL_SESSION_ID' => 'ID sesji',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack utworzony dla użytkownika o id {0}',
    'LBL_VISIBLE' => 'Wpis widoczny',
    'LBL_DATE_LAST_ACTION' => 'Data Ostatniego Działania',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'nie jest przed',
    'MSG_IS_MORE_THAN' => 'wynosi więcej niż',
    'MSG_SHOULD_BE' => 'powinna być',
    'MSG_OR_GREATER' => 'lub większa',

    'LBL_LIST' => 'Lista',
    'LBL_CREATE_BUG' => 'Utwórz Błąd',

    'LBL_OBJECT_IMAGE' => 'obraz obiektu',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Wybierz datę',

    'LBL_VALIDATE_RANGE' => 'nie mieści się we właściwym zakresie',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Proszę wybrać zarówno początkowy jak i końcowy zakres dat',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Proszę wybrać zarówno początkowy jak i końcowy zakres wpisów',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Wszystko',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Błąd: Liczba listków macierzy nie pasuje do liczby listków macierzy wyników.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Błąd: Nie odnaleziono danych mapowania dla modułu.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Błąd: Nie można pobrać danych dla łącznika.',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'Dla optymalizacji wrażeń podczas wykorzystania IIS/FastCGI sapi, ustaw fastcgi.logging na 0 w twoim pliku php.ini.',

    //Collection Field
    'LBL_COLLECTION_NAME' => 'Nazwa',
    'LBL_COLLECTION_PRIMARY' => 'Główny',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'Nieuzupełnione pole wymagane',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Przypisano do',
    'LBL_DESCRIPTION' => 'Opis',

    'LBL_YESTERDAY' => 'wczoraj',
    'LBL_TODAY' => 'Dziś',
    'LBL_TOMORROW' => 'Jutro',
    'LBL_NEXT_WEEK' => 'Przyszły tydzień',
    'LBL_NEXT_MONDAY' => 'w przyszły poniedziałek',
    'LBL_NEXT_FRIDAY' => 'w przyszły piątek',
    'LBL_TWO_WEEKS' => 'dwa tygodnie',
    'LBL_NEXT_MONTH' => 'Przyszły miesiąc',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'pierwszy dzień przyszłego miesiąca',
    'LBL_THREE_MONTHS' => 'trzy miesiące',
    'LBL_SIXMONTHS' => 'sześć miesięcy',
    'LBL_NEXT_YEAR' => 'w przyszłym roku',

    //Datetimecombo fields
    'LBL_HOURS' => 'Godziny',
    'LBL_MINUTES' => 'Minuty',
    'LBL_MERIDIEM' => 'Meridiem',
    'LBL_DATE' => 'Data',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Automatycznie odśwież',

    'LBL_DURATION_DAY' => 'dzień',
    'LBL_DURATION_HOUR' => 'godzina',
    'LBL_DURATION_MINUTE' => 'minuta',
    'LBL_DURATION_DAYS' => 'dni',
    'LBL_DURATION_HOURS' => 'Czas trwania (godziny)',
    'LBL_DURATION_MINUTES' => 'Czas trwania (minuty)',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Wybierz miesiąc',
    'LBL_ENTER_YEAR' => 'Wprowadź rok',
    'LBL_ENTER_VALID_YEAR' => 'Proszę wprowadź poprawny rok',

    //File write error label
    'ERR_FILE_WRITE' => 'Błąd: Nie można zapisać pliku {0}. Proszę wybierz system i uprawnienia web serwera.',
    'ERR_FILE_NOT_FOUND' => 'Błąd: Nie można załadować pliku {0}. Proszę wybierz system i uprawnienia web serwera.',

    'LBL_AND' => 'i',

    // File fields
    'LBL_SEARCH_EXTERNAL_API' => 'Plik z zewnętrznego źródła',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Bezpieczeństwo',

    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '
"To jest przykładowy plik importu, który zawiera wzór zawartości pliku, który jest gotowy do importu".
"Plik jest w formacie .csv rozdzielanym przecinkami, podwójne cudzysłowy są używane jako kwalifikatory pola."

"Wierszem nagłówka jest najwyższy wiersz w pliku, zawierający etykiety pól, które występują w aplikacji".
"Etykiety te są używane do mapowania danych w pliku z polami w aplikacji".

"Uwagi: Nazwy z bazy danych mogą być również użyte w wierszu nagłówka. To może być bardzo przydatne, gdy użyjesz phpMyAdmin lub innego narzędzia bazy danych, do wyeksportowania listy danych do zaimportowania."
"Kolejność kolumn nie ma znaczenia, ponieważ proces importowania mapuje dane w odpowiednie pola w oparciu o wiersz nagłówka".


"Aby używać tego pliku jako szablonu, wykonaj następujące czynności:"
"1. Usuń wiersze z danymi przykładowymi"
"2. Usuń tekst pomocy, który teraz czytasz"
"3. Wprowadź własne danych wejściowych w odpowiednich wierszach i kolumnach"
"4. Zapisz plik w znanej lokalizacji w systemie"
"5. Kliknij w aplikacji opcję Importuj z menu Akcje i wybierz plik do przesłania"   ',
    //define labels to be used for overriding local values during import/export

    'LBL_NOTIFICATIONS_NONE' => 'Nie ma bieżących powiadomień',
    'LBL_ALT_SORT_DESC' => 'Posortowane Malejąco',
    'LBL_ALT_SORT_ASC' => 'Posortowane Rosnąco',
    'LBL_ALT_SORT' => 'Sortuj',
    'LBL_ALT_SHOW_OPTIONS' => 'Pokaż Opcje',
    'LBL_ALT_HIDE_OPTIONS' => 'Ukryj opcje',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Przenieś wybrany wpis na listę z lewej strony',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Przenieś wybrany wpis na listę z prawej strony',
    'LBL_ALT_MOVE_COLUMN_UP' => 'Przenieś wybrany wpis w górę na wyświetlonej liście',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Przenieś wybrany wpis w dół na wyświetlonej liście',
    'LBL_ALT_INFO' => 'Informacje',
    'MSG_DUPLICATE' => 'Wpis {0}, który masz zamiar utworzyć może być duplikatem wpisu {0}, który już istnieje. Wpisy {1} zawierające podobne nazwy są wymienione poniżej. <br>Kliknij Utwórz {1} aby utworzyć nowy wpis {0}, lub wybierz istniejący wpis{0} z wymienionych poniżej.',
    'MSG_SHOW_DUPLICATES' => 'Wpis {0}, który masz zamiar utworzyć może być duplikatem wpisu {0}, który już istnieje. Wpisy {1} zawierające podobne nazwy są wymienione poniżej. Kliknij Zapisz aby utworzyć nowy wpis{0}, lub kliknij Anuluj aby przerwać tworzenie wpisu {0}.',
    'LBL_EMAIL_TITLE' => 'adres e-mail',
    'LBL_EMAIL_OPT_TITLE' => 'adres e-mail osoby wycofującej zgodę',
    'LBL_EMAIL_INV_TITLE' => 'nieprawidłowy adres e-mail',
    'LBL_EMAIL_PRIM_TITLE' => 'Ustaw jako główny adres e-mail',
    'LBL_SELECT_ALL_TITLE' => 'Wybierz wszystko',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Zaznacz ten wiersz',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'BŁĄD: Wystąpił błąd podczas przesyłania pliku. Kod błędu: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'Błąd: Wystąpił błąd podczas wysyłania. Kod błędu: {0} - {1}. Maksymalny rozmiar to {2} ',
    'UPLOAD_ERROR_HOME_TEXT' => 'Błąd: Wystąpił błąd podczas przesyłania, skontaktuj się z administratorem, aby uzyskać pomoc.',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'Rozmiar uploadu ({0} bajtów) przekracza dozwolone maksimum: {1} bajtów',
    'UPLOAD_REQUEST_ERROR' => 'Wystąpił błąd. Proszę odświeżyć stronę i spróbować ponownie.',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'i',
    'LBL_EDIT_BUTTON_LABEL' => 'Edytuj',
    'LBL_EDIT_BUTTON_TITLE' => 'Edytuj',
    'LBL_DUPLICATE_BUTTON_KEY' => 'u',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Skopiuj',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Skopiuj',
    'LBL_DELETE_BUTTON_KEY' => 'd',
    'LBL_DELETE_BUTTON_LABEL' => 'Usuń',
    'LBL_DELETE_BUTTON_TITLE' => 'Usuń',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'Akcje masowe',
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'Działanie',
    'LBL_TOO_FEW_SELECTED' => 'Wybrano nieprawidłową liczbę wpisów. Musisz wybrać co najmniej {min} wpisów.',
    'LBL_TOO_MANY_SELECTED' => 'Wybrano nieprawidłową liczbę wpisów. Możesz wybrać maksymalnie {max} wpisów.',
    'LBL_SELECT_ALL_NOT_ALLOWED' => 'Wybranie wszystkich wpisów nie jest dostępne dla tej akcji. Proszę wybrać poszczególne wpisy.',
    'LBL_MISSING_HANDLER_DATA' => 'Nieoczekiwany błąd. W odpowiedzi brakuje danych obsługi akcji masowej',
    'LBL_MISSING_HANDLER' => 'Nieoczekiwany błąd. Nie zdefiniowano obsługi dla wybranej akcji masowej',
    'LBL_MISSING_HANDLER_DATA_ROUTE' => 'Nieoczekiwany błąd. Brakuje trasy dla akcji masowej',
    'LBL_ACTION_ERROR' => 'Nieoczekiwany błąd podczas wywoływania akcji',
    'LBL_BULK_ACTION_ERROR' => 'Nieoczekiwany błąd podczas wywoływania akcji masowej',
    'LBL_BULK_ACTION_DELETE_SUCCESS' => 'Wpis(y) usunięty/e pomyślnie',
    'LBL_BULK_ACTION_MASS_UPDATE_CONFIRMATION' => 'Czy na pewno chcesz zaktualizować zaznaczone wpis(y)?',
    'LBL_BULK_ACTION_MASS_UPDATE_SUCCESS' => 'Wszystkie wpisy zostały pomyślnie zaktualizowane',
    'LBL_BULK_ACTION_MASS_UPDATE_PARTIAL_SUCCESS' => 'Częściowy sukces. Niektóre wpisy nie zostały zaktualizowane. Sprawdź dziennik',
    'LBL_BULK_ACTION_MASS_UPDATE_NO_FIELDS' => 'Brak pól do aktualizacji',
    'LBL_BULK_ACTION_MASS_UPDATE_NO_RECORDS' => 'Brak wpisów do aktualizacji',
    'LBL_BULK_ACTION_MASS_UPDATE_NO_ACLS' => 'Niewystarczające uprawnienia, zapis niemożliwy',
    'LBL_UNEXPECTED_ERROR' => 'Nieoczekiwany błąd. Nie można wykonać działania.',
    'LBL_RECORD_DELETE_SUCCESS' => 'Wpis usunięty pomyślnie',
    'LBL_ERROR_SAVING' => 'Podczas zapisywania wpisu wystąpił błąd',
    'LBL_SAVE_BUTTON_KEY' => 'a',
    'LBL_SAVE_BUTTON_LABEL' => 'Zapisz',
    'LBL_SAVE_BUTTON_TITLE' => 'Zapisz',
    'LBL_CANCEL_BUTTON_KEY' => 'X',
    'LBL_CANCEL_BUTTON_LABEL' => 'Anuluj',
    'LBL_CANCEL_BUTTON_TITLE' => 'Anuluj',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',

    'ANNUAL_REVENUE_BY_ACCOUNTS' => 'Roczne przychody według kontrahentów',
    'PIPELINE_BY_SALES_STAGE' => 'Lejkowy wykres etapów sprzedaży',
    'LEADS_BY_SOURCE' => 'Potencjalni Klienci według źródła',
    'LEADS_BY_STATUS' => 'Potencjalni Klienci według statusu',
    'ACCOUNT_TYPES_PER_MONTH' => 'Nowi kontrahenci według miesiąca',

    'ERR_CONNECTOR_NOT_ARRAY' => 'łącznik macierzy w {0} został niepoprawnie zdefiniowany lub jest pusty i nie może być używany.',
    'ERR_SUHOSIN' => 'Przesyłanie strumieni jest zablokowane przez Suhosin, należy dodać &quot;upload&quot; do suhosin.executor.include.whitelist (aby uzyskać więcej informacji zobacz suitecrm.log)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Błąd odpowiedzi serwera',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Oferta',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Cena sprzedaży',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => 'Ręcznie',
        '5' => 'Co 5 minut',
        '15' => 'Co 15 minut',
        '30' => 'Co 30 minut',
        '60' => 'Co godzinę',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'Przypomnienie jest puste lub nieprawidłowe.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Przypomnienie nie jest przypisane do żadnego powiadomienia wyskakującego lub powiadomienia e-mail.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'Brak zaproszonych dla przypomnienia.',
    'LBL_DELETE_REMINDER_CONFIRM' => 'Przypomnienie nie zawiera żadnych zaproszonych, czy chcesz usunąć przypomnienie?',
    'LBL_DELETE_REMINDER' => 'Skasuj Przypomnienie',
    'LBL_OK' => 'Ok',
    'LBL_PROCEED' => 'Dalej',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => 'Wybierz kolumny',
    'LBL_COLUMN_CHOOSER' => 'Wybór kolumny',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => 'Zapisz zmiany',
    'LBL_DISPLAYED' => 'Wyświetlone',
    'LBL_HIDDEN' => 'Ukryte',
    'ERR_EMPTY_COLUMNS_LIST' => 'Wymagany jest co najmniej jeden element',

    'LBL_FILTER_HEADER_TITLE' => 'Filtr wyszukiwania',

    'LBL_CATEGORY' => 'Kategoria',
    'LBL_LIST_CATEGORY' => 'Kategoria',
    'ERR_FACTOR_TPL_INVALID' => 'Nieprawidłowa wiadomość drugiego składnika uwierzytelnienia, skontaktuj się z administratorem.',
    'LBL_SUBTHEMES' => 'Styl',
    'LBL_SUBTHEME_OPTIONS_DAWN' => 'Świt',
    'LBL_SUBTHEME_OPTIONS_DAY' => 'Dzień',
    'LBL_SUBTHEME_OPTIONS_DUSK' => 'Zmierzch',
    'LBL_SUBTHEME_OPTIONS_NIGHT' => 'Noc',
    'LBL_SUBTHEME_OPTIONS_NOON' => 'Południe',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Odrzuć wersję roboczą',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'Ta operacja spowoduje usunięcie emaila, czy chcesz kontynuować?',
    'LBL_CONFIRM_DISREGARD_EMAIL_TITLE' => 'Zakończ tworzenie wiadomości',
    'LBL_CONFIRM_DISREGARD_EMAIL_BODY' => 'Zamykając to okno, utracisz wszystkie wprowadzone informacje. Czy chcesz kontynuować?',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Zastosuj szablon wiadomości E-mail',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'Ta operacja spowoduje zastąpienie pola tematu i treści e-mail, czy chcesz kontynuować?',

    'LBL_CONFIRM_OPT_IN_TITLE' => 'Zgoda na przetwarzanie danych osobowych potwierdzona',
    'LBL_OPT_IN_TITLE' => 'Zgoda na przetwarzanie danych osobowych',
    'LBL_CONFIRM_OPT_IN_DATE' => 'Data potwierdzenia zgody na przetwarzanie danych osobowych',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'Data wysłania potwierdzenia zgody na przetwarzanie danych osobowych',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Data niepowodzenia potwierdzenia zgody na przetwarzanie danych osobowych',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'Token potwierdzenia zgody',
    'ERR_OPT_IN_TPL_NOT_SET' => 'Szablon email dla wyrażenia zgody na przetwarzanie danych osobowych nie został skonfigurowany. Proszę skonfigurować ustawienia.',
    'ERR_OPT_IN_RELATION_INCORRECT' => 'W konfiguracji zgody na przetwarzanie danych osobowych konieczne jest powiązanie emaila z Kontrahentem/Kontaktem/Potencjalnym klientem/Docelowym odbiorcą',

    'LBL_SECURITYGROUP_NONINHERITABLE' => 'Grupa niedziedziczna',
    'LBL_PRIMARY_GROUP' => "Główna grupa",

    // footer
    'LBL_SUITE_TOP' => 'Na górę',
    'LBL_SUITE_SUPERCHARGED' => 'Udoskonalony przez SuiteCRM',
    'LBL_SUITE_POWERED_BY' => 'Wspierany przez SugarCRM',
    'LBL_SUITE_DESC1' => 'SuiteCRM został napisany i zmontowany przez <a href="https://salesagility.com"> SalesAgility</a>. Program jest dostarczane takim jak jest, bez gwarancji. Na licencji AGPLv3.',
    'LBL_SUITE_DESC2' => 'Ten program jest wolnym oprogramowaniem; można go rozpowszechniać i/lub modyfikować zgodnie z warunkami GNU Affero General Public License w wersji 3, opublikowanej przez Free Software Foundation, włączając w to dodatkowe pozwolenia określone w nagłówku kodu źródłowego.',
    'LBL_SUITE_DESC3' => 'SuiteCRM jest znakiem towarowym firmy SalesAgility Ltd. Wszystkie inne nazwy firm i produktów mogą być znakami towarowymi firm, z którymi są one skojarzone.',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Resetuj Hasło',
    'LBL_SEND_CONFIRM_OPT_IN_EMAIL' => 'Wyślij email potwierdzenia zgody na przetwarzanie danych osobowych',
    'LBL_CONFIRM_OPT_IN_ONLY_FOR_PERSON' => 'Wysyłka wiadomości email z potwierdzeniem zgody na przetwarzanie danych wyłącznie dla kontrahentów, kontaktów, potencjalnych klientów, perspektyw',
    'LBL_CONFIRM_OPT_IN_IS_DISABLED' => 'Wysyłka wiadomości email z potwierdzeniem zgody na przetwarzanie danych jest wyłączona. Włącz tę opcję w ustawieniach email lub skontaktuj się z administratorem.',
    'LBL_CONTACT_HAS_NO_PRIMARY_EMAIL' => 'Wysyłka wiadomości email z potwierdzeniem zgody na przetwarzanie danych jest niemożliwa, ponieważ kontakt nie posiada głównego adresu email',
    'LBL_CONFIRM_EMAIL_SENDING_FAILED' => 'Niepowodzenie wysyłki emaila potwierdzającego zgodę na przetwarzanie danych osobowych',
    'LBL_CONFIRM_EMAIL_SENT' => 'Wysyłka emaila potwierdzającego zgodę na przetwarzanie danych osobowych przebiegła pomyślnie',

    //List View Column Selector Modal
    'LBL_COLUMN_SELECTOR_DISPLAYED_COLS' => 'WYŚWIEETLANE',
    'LBL_COLUMN_SELECTOR_HIDDEN_COLS' => 'UKRYTE',
    'LBL_COLUMN_SELECTOR_CLOSE_BUTTON' => 'Data zamknięcia',
    'LBL_COLUMN_SELECTOR_SAVE_BUTTON' => 'Zapisz zmiany',
    'LBL_COLUMN_SELECTOR_MODAL_TITLE' => 'Wybierz kolumny'

);

$app_list_strings['moduleList']['Library'] = 'Biblioteka';
$app_list_strings['moduleList']['EmailAddresses'] = 'Adres e-mail';
$app_list_strings['project_priority_default'] = 'Średni';
$app_list_strings['project_priority_options'] = array(
    'High' => 'Wysoki',
    'Medium' => 'Średni',
    'Low' => 'Niski',
);

//GDPR lawful basis options
$app_list_strings['lawful_basis_dom'] = array(
    '' => '',
    'consent' => 'Zgoda',
    'contract' => 'Umowa',
    'legal_obligation' => 'Zobowiązanie prawne',
    'protection_of_interest' => 'Ochrona interesu',
    'public_interest' => 'Interes publiczny',
    'legitimate_interest' => 'Uzasadniony interes',
    'withdrawn' => 'Wycofanie zgody',
);
//End GDPR lawful basis options

//GDPR lawful basis source options
$app_list_strings['lawful_basis_source_dom'] = array(
    '' => '',
    'website' => 'Strona www',
    'phone' => 'Telefon',
    'given_to_user' => 'Podana użytkownikowi',
    'email' => 'E-mail',
    'third_party' => 'Trzecia strona',
);
//End GDPR lawful basis source options

$app_list_strings['moduleList']['KBDocuments'] = 'Baza Wiedzy';

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => 'ABU DABI',
    'ADEN' => 'ADEN',
    'AFGHANISTAN' => 'AFGANISTAN',
    'ALBANIA' => 'ALBANIA',
    'ALGERIA' => 'ALGIERIA',
    'AMERICAN SAMOA' => 'SAMOA AMERYKAŃSKIE',
    'ANDORRA' => 'ANDORA',
    'ANGOLA' => 'ANGOLA',
    'ANTARCTICA' => 'ANTARKTYKA',
    'ANTIGUA' => 'ANTIGUA',
    'ARGENTINA' => 'ARGENTYNA',
    'ARMENIA' => 'ARMENIA',
    'ARUBA' => 'ARUBA',
    'AUSTRALIA' => 'AUSTRALIA',
    'AUSTRIA' => 'AUSTRIA',
    'AZERBAIJAN' => 'AZERBEJDŻAN',
    'BAHAMAS' => 'BAHAMY',
    'BAHRAIN' => 'BAHRAJN',
    'BANGLADESH' => 'BANGLADESZ',
    'BARBADOS' => 'BARBADOS',
    'BELARUS' => 'BIAŁORUŚ',
    'BELGIUM' => 'BELGIA',
    'BELIZE' => 'BELIZE',
    'BENIN' => 'BENIN',
    'BERMUDA' => 'BERMUDY',
    'BHUTAN' => 'BHUTAN',
    'BOLIVIA' => 'BOLIWIA',
    'BOSNIA' => 'BOŚNIA',
    'BOTSWANA' => 'BOTSWANA',
    'BOUVET ISLAND' => 'WYSPA BOUVETA',
    'BRAZIL' => 'BRAZYLIA',
    'BRITISH ANTARCTICA TERRITORY' => 'BRYTYJSKIE TERYTORIUM ANTARKTYCZNE',
    'BRITISH INDIAN OCEAN TERRITORY' => 'BRYTYJSKIE TERYTORIUM OCEANU INDYJSKIEGO',
    'BRITISH VIRGIN ISLANDS' => 'BRYTYJSKIE WYSPY DZIEWICZE',
    'BRITISH WEST INDIES' => 'BRYTYJSKIE INDIE ZACHODNIE',
    'BRUNEI' => 'BRUNEI',
    'BULGARIA' => 'BUŁGARIA',
    'BURKINA FASO' => 'BURKINA FASO',
    'BURUNDI' => 'BURUNDI',
    'CAMBODIA' => 'KAMBODŻA',
    'CAMEROON' => 'KAMERUN',
    'CANADA' => 'KANADA',
    'CANAL ZONE' => 'STREFA KANAŁU PANAMSKIEGO',
    'CANARY ISLAND' => 'WYSPY KANARYJSKIE',
    'CAPE VERDI ISLANDS' => 'REPUBLIKA ZIELONEGO PRZYLĄDKA',
    'CAYMAN ISLANDS' => 'KAJMANY',
    'CHAD' => 'CZAD',
    'CHANNEL ISLAND UK' => 'WYSPY KANAŁU LA MANCHE',
    'CHILE' => 'Chile',
    'CHINA' => 'CHINY',
    'CHRISTMAS ISLAND' => 'WYSPA BOŻEGO NARODZENIA',
    'COCOS (KEELING) ISLAND' => 'WYSPA KOKOSOWA',
    'COLOMBIA' => 'KOLUMBIA',
    'COMORO ISLANDS' => 'KOMORY',
    'CONGO' => 'KONGO',
    'CONGO KINSHASA' => 'REPUBLIKA KONGO',
    'COOK ISLANDS' => 'WYSPY COOKA',
    'COSTA RICA' => 'KOSTARYKA',
    'CROATIA' => 'CHORWACJA',
    'CUBA' => 'KUBA',
    'CURACAO' => 'CURACAO',
    'CYPRUS' => 'CYPR',
    'CZECH REPUBLIC' => 'CZECHY',
    'DAHOMEY' => 'DAHOMEJ',
    'DENMARK' => 'DANIA',
    'DJIBOUTI' => 'DŻIBUTI',
    'DOMINICA' => 'DOMINIKA',
    'DOMINICAN REPUBLIC' => 'DOMINIKANA',
    'DUBAI' => 'DUBAJ',
    'ECUADOR' => 'EKWADOR',
    'EGYPT' => 'EGIPT',
    'EL SALVADOR' => 'SALWADOR',
    'EQUATORIAL GUINEA' => 'GWINEA RÓWNIKOWA',
    'ESTONIA' => 'ESTONIA',
    'ETHIOPIA' => 'ETIOPIA',
    'FAEROE ISLANDS' => 'WYSPY OWCZE',
    'FALKLAND ISLANDS' => 'FALKLANDY',
    'FIJI' => 'FIDŻI',
    'FINLAND' => 'FINLANDIA',
    'FRANCE' => 'FRANCJA',
    'FRENCH GUIANA' => 'GUJANA FRANCUSKA',
    'FRENCH POLYNESIA' => 'POLINEZJA FRANCUSKA',
    'GABON' => 'GABON',
    'GAMBIA' => 'GAMBIA',
    'GEORGIA' => 'GRUZJA',
    'GERMANY' => 'NIEMCY',
    'GHANA' => 'GHANA',
    'GIBRALTAR' => 'GIBRALTAR',
    'GREECE' => 'GRECJA',
    'GREENLAND' => 'GRENLANDIA',
    'GUADELOUPE' => 'GWADELUPA',
    'GUAM' => 'GUAM',
    'GUATEMALA' => 'GWATEMALIA',
    'GUINEA' => 'GWINEA',
    'GUYANA' => 'GUJANA',
    'HAITI' => 'HAITI',
    'HONDURAS' => 'HONDURAS',
    'HONG KONG' => 'HONG KONG',
    'HUNGARY' => 'WĘGRY',
    'ICELAND' => 'ISLANDIA',
    'IFNI' => 'IFNI',
    'INDIA' => 'INDIE',
    'INDONESIA' => 'INDONEZJA',
    'IRAN' => 'IRAN',
    'IRAQ' => 'IRAK',
    'IRELAND' => 'IRLANDIA',
    'ISRAEL' => 'IZRAEL',
    'ITALY' => 'WŁOCHY',
    'IVORY COAST' => 'WYBRZEŻE KOŚCI SŁONIOWEJ',
    'JAMAICA' => 'JAMAJKA',
    'JAPAN' => 'JAPONIA',
    'JORDAN' => 'JORDANIA',
    'KAZAKHSTAN' => 'KAZACHSTAN',
    'KENYA' => 'KENIA',
    'KOREA' => 'KOREA',
    'KOREA, SOUTH' => 'KOREA POŁUDNIOWA',
    'KUWAIT' => 'KUWEJT',
    'KYRGYZSTAN' => 'KIRGISTAN',
    'LAOS' => 'LAOS',
    'LATVIA' => 'ŁOTWA',
    'LEBANON' => 'LIBAN',
    'LEEWARD ISLANDS' => 'WYSPY PODWIETRZNE',
    'LESOTHO' => 'LESOTHO',
    'LIBYA' => 'LIBIA',
    'LIECHTENSTEIN' => 'LIECHTENSTEIN',
    'LITHUANIA' => 'LITWA',
    'LUXEMBOURG' => 'LUKSEMBURG',
    'MACAO' => 'MAKAO',
    'MACEDONIA' => 'MACEDONIA',
    'MADAGASCAR' => 'MADAGASKAR',
    'MALAWI' => 'MALAWI',
    'MALAYSIA' => 'MALEZJA',
    'MALDIVES' => 'MALEDIWY',
    'MALI' => 'MALI',
    'MALTA' => 'MALTA',
    'MARTINIQUE' => 'MARTYNIKA',
    'MAURITANIA' => 'MAURETANIA',
    'MAURITIUS' => 'MAURITIUS',
    'MELANESIA' => 'MALANEZJA',
    'MEXICO' => 'MEKSYK',
    'MOLDOVIA' => 'MOŁDAWIA',
    'MONACO' => 'MONAKO',
    'MONGOLIA' => 'MONGOLIA',
    'MOROCCO' => 'MAROKO',
    'MOZAMBIQUE' => 'MOZAMBIK',
    'MYANAMAR' => 'MIJANMA',
    'NAMIBIA' => 'NAMIBIA',
    'NEPAL' => 'NEPAL',
    'NETHERLANDS' => 'NIDERLANDY',
    'NETHERLANDS ANTILLES' => 'ANTYLE HOLENDERSKIE',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'ANTYLE HOLENDERSKIE',
    'NEW CALADONIA' => 'NOWA KALEDONIA',
    'NEW HEBRIDES' => 'NOWE HEBRYDY',
    'NEW ZEALAND' => 'NOWA ZELANDIA',
    'NICARAGUA' => 'NIKARAGUA',
    'NIGER' => 'NIGER',
    'NIGERIA' => 'NIGERIA',
    'NORFOLK ISLAND' => 'NORFOLK',
    'NORWAY' => 'NORWEGIA',
    'OMAN' => 'OMAN',
    'OTHER' => 'INNE',
    'PACIFIC ISLAND' => 'WYSPY PACYFIKU',
    'PAKISTAN' => 'PAKISTAN',
    'PANAMA' => 'PANAMA',
    'PAPUA NEW GUINEA' => 'PAPUA NOWA GWINEA',
    'PARAGUAY' => 'PARAGWAY',
    'PERU' => 'PERU',
    'PHILIPPINES' => 'FILIPINY',
    'POLAND' => 'POLSKA',
    'PORTUGAL' => 'PORTUGALIA',
    'PORTUGUESE TIMOR' => 'TIMOR WSCHODNI',
    'PUERTO RICO' => 'PORTORYKO',
    'QATAR' => 'KATAR',
    'REPUBLIC OF BELARUS' => 'REPUBLIKA BIAŁORUSI',
    'REPUBLIC OF SOUTH AFRICA' => 'REPUBLIKA POŁUDNIOWEJ AFRYKI',
    'REUNION' => 'REUNION',
    'ROMANIA' => 'RUMUNIA',
    'RUSSIA' => 'ROSJA',
    'RWANDA' => 'RWANDA',
    'RYUKYU ISLANDS' => 'RIUKIU',
    'SABAH' => 'SABAH',
    'SAN MARINO' => 'SAN MARINO',
    'SAUDI ARABIA' => 'ARABIA SAUDYJSKA',
    'SENEGAL' => 'SENEGAL',
    'SERBIA' => 'SERBIA',
    'SEYCHELLES' => 'SESZELE',
    'SIERRA LEONE' => 'SIERRA LEONE',
    'SINGAPORE' => 'SINGAPUR',
    'SLOVAKIA' => 'SŁOWACJA',
    'SLOVENIA' => 'SŁOWENIA',
    'SOMALILIAND' => 'SOMALILIAND',
    'SOUTH AFRICA' => 'AFRYKA POŁUDNIOWA',
    'SOUTH YEMEN' => 'REPUBLIKA JEMENU',
    'SPAIN' => 'HISZPANIA',
    'SPANISH SAHARA' => 'SAHARA HISZPAŃSKA',
    'SRI LANKA' => 'SRI LANKA',
    'ST. KITTS AND NEVIS' => 'SAINT KITTS I NEVIS',
    'ST. LUCIA' => 'ST. LUCIA',
    'SUDAN' => 'SUDAN',
    'SURINAM' => 'SURINAM',
    'SW AFRICA' => 'AFRYKA POŁUDNIOWO ZACHODNIA',
    'SWAZILAND' => 'SUAZI',
    'SWEDEN' => 'SZWECJA',
    'SWITZERLAND' => 'SZWAJCARIA',
    'SYRIA' => 'SYRIA',
    'TAIWAN' => 'TAJWAN',
    'TAJIKISTAN' => 'TADŻYKISTAN',
    'TANZANIA' => 'TANZANIA',
    'THAILAND' => 'TAJLANDIA',
    'TONGA' => 'TONGA',
    'TRINIDAD' => 'TRYNIDAD',
    'TUNISIA' => 'TUNEZJA',
    'TURKEY' => 'TURCJA',
    'UGANDA' => 'UGANDA',
    'UKRAINE' => 'UKRAINA',
    'UNITED ARAB EMIRATES' => 'ZJEDNOCZONE EMIRATY ARABSKIE',
    'UNITED KINGDOM' => 'WIELKA BRYTANIA',
    'URUGUAY' => 'URUGWAJ',
    'US PACIFIC ISLAND' => 'WYSPY PACYFIKU',
    'US VIRGIN ISLANDS' => 'WYSPY DZIEWICZE',
    'USA' => 'USA',
    'UZBEKISTAN' => 'UZBEKISTAN',
    'VANUATU' => 'VANUATU',
    'VATICAN CITY' => 'WATYKAN',
    'VENEZUELA' => 'WENEZUELA',
    'VIETNAM' => 'WIETNAM',
    'WAKE ISLAND' => 'WAKE',
    'WEST INDIES' => 'INDIE ZACHODNIE',
    'WESTERN SAHARA' => 'SAHARA ZACHODNIA',
    'YEMEN' => 'JEMEN',
    'ZAIRE' => 'ZAIR',
    'ZAMBIA' => 'ZAMBIA',
    'ZIMBABWE' => 'ZIMBABWE',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'BIG-5 (Tajwan i Hong Kong)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'CP1251 (MS Cyrilica)',
    'CP1252' => 'CP1252 (MS Europa zachodnia & US)',
    'EUC-CN' => 'EUC-CN (Uporoszczony Chiński GB2312)',
    'EUC-JP' => 'EUC-JP (Japoński Unix)',
    'EUC-KR' => 'EUC-KR (Koreański)',
    'EUC-TW' => 'EUC-TW (Tajwański)',
    'ISO-2022-JP' => 'ISO-2022-JP (Japoński)',
    'ISO-2022-KR' => 'ISO-2022-KR (Koreański)',
    'ISO-8859-1' => 'ISO-8859-1 (Europa zachodnia i US)',
    'ISO-8859-2' => 'ISO-8859-2 (Europa Środkowa i Wschodnia)',
    'ISO-8859-3' => 'ISO-8859-3 (Latin 3)',
    'ISO-8859-4' => 'ISO-8859-4 (Latin 4)',
    'ISO-8859-5' => 'ISO-8859-5 (Cyrilica)',
    'ISO-8859-6' => 'ISO-8859-6 (Arabski)',
    'ISO-8859-7' => 'ISO-8859-7 (Grecki)',
    'ISO-8859-8' => 'ISO-8859-8 (Hebrajski)',
    'ISO-8859-9' => 'ISO-8859-9 (Latin 5)',
    'ISO-8859-10' => 'ISO-8859-10 (Latin 6)',
    'ISO-8859-13' => 'ISO-8859-13 (Latin 7)',
    'ISO-8859-14' => 'ISO-8859-14 (Latin 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Latin 9)',
    'KOI8-R' => 'KOI8-R (Rosyjska cyrylica)',
    'KOI8-U' => 'KOI8-U (Ukraińska cyrylica)',
    'SJIS' => 'SJIS (MS Japoński)',
    'UTF-8' => 'UTF-8',
);

$app_list_strings['timezone_dom'] = array(

    'Africa/Algiers' => 'Afryka/Algieria',
    'Africa/Luanda' => 'Afryka/Luanda',
    'Africa/Porto-Novo' => 'Afryka/Porto-Novo',
    'Africa/Gaborone' => 'Afryka/Gaborone',
    'Africa/Ouagadougou' => 'Afryka/Ouagadougou',
    'Africa/Bujumbura' => 'Afryka/Bużumbura',
    'Africa/Douala' => 'Afryka/Duala',
    'Atlantic/Cape_Verde' => 'dzień(dni)',
    'Africa/Bangui' => 'Afryka/Bangi',
    'Africa/Ndjamena' => 'Afryka/Ndjamena',
    'Indian/Comoro' => 'Ocean_indyjski/Komory',
    'Africa/Kinshasa' => 'Afryka/Kinszasa',
    'Africa/Lubumbashi' => 'Afryka/Lubumbashi',
    'Africa/Brazzaville' => 'Afryka/Brazzaville',
    'Africa/Abidjan' => 'Afryka/Abidżan',
    'Africa/Djibouti' => 'Afryka/Dżibuti',
    'Africa/Cairo' => 'Afryka/Kair',
    'Africa/Malabo' => 'Afryka/Malabo',
    'Africa/Asmera' => 'Afryka/Asmera',
    'Africa/Addis_Ababa' => 'Afryka/Addis_Ababa',
    'Africa/Libreville' => 'Afryka/Libreville',
    'Africa/Banjul' => 'Afryka/Bandżul',
    'Africa/Accra' => 'Afryka/Akra',
    'Africa/Conakry' => 'Afryka/Konakry',
    'Africa/Bissau' => 'Afryka/Bissau',
    'Africa/Nairobi' => 'Afryka/Nairobi',
    'Africa/Maseru' => 'Afryka/Maseru',
    'Africa/Monrovia' => 'Afryka/Monrovia',
    'Africa/Tripoli' => 'Afryka/Trypolis',
    'Indian/Antananarivo' => 'Ocean_Indyjski/Antananarivo',
    'Africa/Blantyre' => 'Afryka/Blantyre',
    'Africa/Bamako' => 'Afryka/Bamako',
    'Africa/Nouakchott' => 'Afryka/Nouakchott',
    'Indian/Mauritius' => 'Ocean_Indyjski/Mauritius',
    'Indian/Mayotte' => 'Ocean_Indyjski/Majotty',
    'Africa/Casablanca' => 'Afryka/Casablanca',
    'Africa/El_Aaiun' => 'Afryka/El_Aaiun',
    'Africa/Maputo' => 'Afryka/Maputo',
    'Africa/Windhoek' => 'Afryka/Windhoek',
    'Africa/Niamey' => 'Afryka/Niamey',
    'Africa/Lagos' => 'Afryka/Lagos',
    'Indian/Reunion' => 'Ocean_Indyjski/Reunion',
    'Africa/Kigali' => 'Afryka/Kigali',
    'Atlantic/St_Helena' => 'Atlantyk/St_Helena',
    'Africa/Sao_Tome' => 'Afryka/Sao_Tome',
    'Africa/Dakar' => 'Afryka/Dakar',
    'Indian/Mahe' => 'Ocean_Indyjski/Mahe',
    'Africa/Freetown' => 'Afryka/Freetown',
    'Africa/Mogadishu' => 'Afryka/Mogadiszu',
    'Africa/Johannesburg' => 'Afryka/Johannesburg',
    'Africa/Khartoum' => 'Afryka/Khartoum',
    'Africa/Mbabane' => 'Afryka/Mbabane',
    'Africa/Dar_es_Salaam' => 'Afryka/Dar_es_Salaam',
    'Africa/Lome' => 'Afryka/Lome',
    'Africa/Tunis' => 'Afryka/Tunis',
    'Africa/Kampala' => 'Afryka/Kampala',
    'Africa/Lusaka' => 'Afryka/Lusaka',
    'Africa/Harare' => 'Afryka/Harare',
    'Antarctica/Casey' => 'Antarktyda/Casey',
    'Antarctica/Davis' => 'Antarktyda/Davis',
    'Antarctica/Mawson' => 'Antarktyda/Mawsona',
    'Indian/Kerguelen' => 'Ocean_Indyjski/Kerguelena',
    'Antarctica/DumontDUrville' => 'Antarktyda/DumontDUrville',
    'Antarctica/Syowa' => 'Antarktyda/Syowa',
    'Antarctica/Vostok' => 'Antarktyda/Wostok',
    'Antarctica/Rothera' => 'Antarktyda/Rothera',
    'Antarctica/Palmer' => 'Antarktyda/Palmer',
    'Antarctica/McMurdo' => 'Antarktyda/McMurdo',
    'Asia/Kabul' => 'Azja/Kabul',
    'Asia/Yerevan' => 'Azja/Yerevan',
    'Asia/Baku' => 'Azja/Baku',
    'Asia/Bahrain' => 'Azja/Bahrajn',
    'Asia/Dhaka' => 'Azja/Dhaka',
    'Asia/Thimphu' => 'Azja/Thimphu',
    'Indian/Chagos' => 'Ocean_Indyjski/Chagos',
    'Asia/Brunei' => 'Azja/Brunei',
    'Asia/Rangoon' => 'Azja/Rangun',
    'Asia/Phnom_Penh' => 'Azja/Phnom_Penh',
    'Asia/Beijing' => 'Azja/Pekin',
    'Asia/Harbin' => 'Azja/Harbin',
    'Asia/Shanghai' => 'Azja/Szanghaj',
    'Asia/Chongqing' => 'Azja/Chongqing',
    'Asia/Urumqi' => 'Azja/Urumqi',
    'Asia/Kashgar' => 'Azja/Kaszgar',
    'Asia/Hong_Kong' => 'Azja/Hong_Kong',
    'Asia/Taipei' => 'Azja/Tajpej',
    'Asia/Macau' => 'Azja/Makau',
    'Asia/Nicosia' => 'Azja/Nicosia',
    'Asia/Tbilisi' => 'Azja/Tbilisi',
    'Asia/Dili' => 'Azja/Dili',
    'Asia/Calcutta' => 'Azja/Kalkuta',
    'Asia/Jakarta' => 'Azja/Dżakarta',
    'Asia/Pontianak' => 'Azja/Pontianak',
    'Asia/Makassar' => 'Azja/Makassar',
    'Asia/Jayapura' => 'Azja/Jayapura',
    'Asia/Tehran' => 'Azja/Teheran',
    'Asia/Baghdad' => 'Azja/Bagdad',
    'Asia/Jerusalem' => 'Azja/Jerozolima',
    'Asia/Tokyo' => 'Azja/Tokio',
    'Asia/Amman' => 'Azja/Amman',
    'Asia/Almaty' => 'Azja/Ałma-Ata',
    'Asia/Qyzylorda' => 'Azja/Qyzylorda',
    'Asia/Aqtobe' => 'Azja/Aqtobe',
    'Asia/Aqtau' => 'Azja/Aqtau',
    'Asia/Oral' => 'Azja/Oral',
    'Asia/Bishkek' => 'Azja/Biszkek',
    'Asia/Seoul' => 'Azja/Seul',
    'Asia/Pyongyang' => 'Azja/Pyongyang',
    'Asia/Kuwait' => 'Azja/Kuwejt',
    'Asia/Vientiane' => 'Azja/Wientian',
    'Asia/Beirut' => 'Azja/Bejrut',
    'Asia/Kuala_Lumpur' => 'Azja/Kuala_Lumpur',
    'Asia/Kuching' => 'Azja/Kuching',
    'Indian/Maldives' => 'Ocean_Indyjski/Malediwy',
    'Asia/Hovd' => 'Azja/Hovd',
    'Asia/Ulaanbaatar' => 'Azja/Ułan_Bator',
    'Asia/Choibalsan' => 'Azja/Czojbalsan',
    'Asia/Katmandu' => 'Azja/Katmandu',
    'Asia/Muscat' => 'Azja/Maskat',
    'Asia/Karachi' => 'Azja/Karaczi',
    'Asia/Gaza' => 'Azja/Gaza',
    'Asia/Manila' => 'Azja/Manila',
    'Asia/Qatar' => 'Azja/Katar',
    'Asia/Riyadh' => 'Azja/Rijad',
    'Asia/Singapore' => 'Azja/Singapur',
    'Asia/Colombo' => 'Azja/Kolombo',
    'Asia/Damascus' => 'Azja/Damaszek',
    'Asia/Dushanbe' => 'Azja/Duszanbe',
    'Asia/Bangkok' => 'Azja/Bangkok',
    'Asia/Ashgabat' => 'Azja/Aszchabad',
    'Asia/Dubai' => 'Azja/Dubaj',
    'Asia/Samarkand' => 'Azja/Samarkanda',
    'Asia/Tashkent' => 'Azja/Taszkent',
    'Asia/Saigon' => 'Azja/Saigon',
    'Asia/Aden' => 'Azja/Aden',
    'Australia/Darwin' => 'Australia/Darwin',
    'Australia/Perth' => 'Australia/Perth',
    'Australia/Brisbane' => 'Australia/Brisbane',
    'Australia/Lindeman' => 'Australia/Lindeman',
    'Australia/Adelaide' => 'Australia/Adelaide',
    'Australia/Hobart' => 'Australia/Hobart',
    'Australia/Currie' => 'Australia/Currie',
    'Australia/Melbourne' => 'Australia/Melbourne',
    'Australia/Sydney' => 'Australia/Sydney',
    'Australia/Broken_Hill' => 'Australia/Broken Hill',
    'Indian/Christmas' => 'Ocean_Indyjski/Wyspa_Bożego_Narodzenia',
    'Pacific/Rarotonga' => 'Pacyfik/Rarotonga',
    'Indian/Cocos' => 'Ocean_Indyjski/Wyspy_Kokosowe',
    'Pacific/Fiji' => 'Pacyfik/Fidżi',
    'Pacific/Gambier' => 'Pacyfik/Gambier',
    'Pacific/Marquesas' => 'Pacyfik/Markizy',
    'Pacific/Tahiti' => 'Pacyfik/Tahiti',
    'Pacific/Guam' => 'Pacyfik/Guam',
    'Pacific/Tarawa' => 'Pacyfik/Tarawa',
    'Pacific/Enderbury' => 'Pacyfik/Enderbury',
    'Pacific/Kiritimati' => 'Pacyfik/Kiritimati',
    'Pacific/Saipan' => 'Pacyfik/Saipan',
    'Pacific/Majuro' => 'Pacyfik/Majuro',
    'Pacific/Kwajalein' => 'Pacyfik/Kwajalein',
    'Pacific/Truk' => 'Pacyfik/Truk',
    'Pacific/Pohnpei' => 'Pacific/Pohnpei',
    'Pacific/Kosrae' => 'Pacyfik/Kosrae',
    'Pacific/Nauru' => 'Pacyfik/Nauru',
    'Pacific/Noumea' => 'Pacyfik/Nouméa',
    'Pacific/Auckland' => 'Pacific/Auckland',
    'Pacific/Chatham' => 'Pacyfik/Chatham',
    'Pacific/Niue' => 'Pacyfik/Niue',
    'Pacific/Norfolk' => 'Pacyfik/Norfolk',
    'Pacific/Palau' => 'Pacyfik/Palau',
    'Pacific/Port_Moresby' => 'Pacyfik/Port_Moresby',
    'Pacific/Pitcairn' => 'Pacyfik/Pitcairn',
    'Pacific/Pago_Pago' => 'Pacyfik/Pago_Pago',
    'Pacific/Apia' => 'Pacyfik/Apia',
    'Pacific/Guadalcanal' => 'Pacyfik/Guadalcanal',
    'Pacific/Fakaofo' => 'Pacyfik/Fakaofo',
    'Pacific/Tongatapu' => 'Pacyfik/Tonga',
    'Pacific/Funafuti' => 'Pacyfik/Funafuti',
    'Pacific/Johnston' => 'Pacyfik/Johnston',
    'Pacific/Midway' => 'Pacyfik/Midway',
    'Pacific/Wake' => 'Pacyfik/Wake',
    'Pacific/Efate' => 'Pacyfik/Efate',
    'Pacific/Wallis' => 'Pacyfik/Wallis',
    'Europe/London' => 'Europa/Londyn',
    'Europe/Dublin' => 'Europa/Dublin',
    'WET' => 'Czas Zachodnioeuropejski',
    'CET' => 'Czas Środkowoeuropejski',
    'MET' => 'Czas Środkowoeuropejski',
    'EET' => 'Czas Wschodnioeuropejski',
    'Europe/Tirane' => 'Europa/Tirana',
    'Europe/Andorra' => 'Europa/Andora',
    'Europe/Vienna' => 'Europa/Wiedeń',
    'Europe/Minsk' => 'Europa/Mińsk',
    'Europe/Brussels' => 'Europa/Bruksela',
    'Europe/Sofia' => 'Europa/Sofia',
    'Europe/Prague' => 'Europa/Praga',
    'Europe/Copenhagen' => 'Europa/Kopenhaga',
    'Atlantic/Faeroe' => 'Atlantyk/Wyspy_Owcze',
    'America/Danmarkshavn' => 'Ameryka/Danmarkshavn',
    'America/Scoresbysund' => 'Ameryka/Scoresbysund',
    'America/Godthab' => 'Ameryka/Godthab',
    'America/Thule' => 'Ameryka/Thule',
    'Europe/Tallinn' => 'Europa/Tallinn',
    'Europe/Helsinki' => 'Europa/Helsinki',
    'Europe/Paris' => 'Europa/Paryż',
    'Europe/Berlin' => 'Europa/Berlin',
    'Europe/Gibraltar' => 'Europa/Gibraltar',
    'Europe/Athens' => 'Europa/Ateny',
    'Europe/Budapest' => 'Europa/Budapeszt',
    'Atlantic/Reykjavik' => 'Atlantyk/Reykjavik',
    'Europe/Rome' => 'Europa/Rzym',
    'Europe/Riga' => 'Europa/Ryga',
    'Europe/Vaduz' => 'Europa/Vaduz',
    'Europe/Vilnius' => 'Europa/Vilnius',
    'Europe/Luxembourg' => 'Europa/Luksemburg',
    'Europe/Malta' => 'Europa/Malta',
    'Europe/Chisinau' => 'Europa/Kiszyniów',
    'Europe/Monaco' => 'Europa/Monako',
    'Europe/Amsterdam' => 'Europa/Amsterdam',
    'Europe/Oslo' => 'Europa/Oslo',
    'Europe/Warsaw' => 'Europe/Warszawa',
    'Europe/Lisbon' => 'Europa/Lizbona',
    'Atlantic/Azores' => 'Atlantyk/Azory',
    'Atlantic/Madeira' => 'Atlantyk/Madera',
    'Europe/Bucharest' => 'Europa/Bukareszt',
    'Europe/Kaliningrad' => 'Europa/Kaliningrad',
    'Europe/Moscow' => 'Europa/Moskwa',
    'Europe/Samara' => 'Europa/Samara',
    'Asia/Yekaterinburg' => 'Azja/Jekaterynburg',
    'Asia/Omsk' => 'Azja/Omsk',
    'Asia/Novosibirsk' => 'Azja/Nowosybirsk',
    'Asia/Krasnoyarsk' => 'Azja/Krasnojarsk',
    'Asia/Irkutsk' => 'Azja/Irkuck',
    'Asia/Yakutsk' => 'Azja/Jakuck',
    'Asia/Vladivostok' => 'Azja/Władywostok',
    'Asia/Sakhalin' => 'Azja/Sachalin',
    'Asia/Magadan' => 'Azja/Magadan',
    'Asia/Kamchatka' => 'Azja/Kamczatka',
    'Asia/Anadyr' => 'Azja/Anadyr',
    'Europe/Belgrade' => 'Europa/Belgrad',
    'Europe/Madrid' => 'Europa/Madryt',
    'Africa/Ceuta' => 'Afryka/Ceuta',
    'Atlantic/Canary' => 'Atlantyk/Wyspy_Kanaryjskie',
    'Europe/Stockholm' => 'Europa/Sztokcholm',
    'Europe/Zurich' => 'Europa/Zurych',
    'Europe/Istanbul' => 'Europa/Istanbuł',
    'Europe/Kiev' => 'Europa/Kijów',
    'Europe/Uzhgorod' => 'Europa/Użgorod',
    'Europe/Zaporozhye' => 'Europa/Zaporozhye',
    'Europe/Simferopol' => 'Europa/Simferopol',
    'America/New_York' => 'Ameryka/Nowy Jork',
    'America/Chicago' => 'Ameryka/Chicago',
    'America/North_Dakota/Center' => 'Ameryka/Północna_Dakota/Center',
    'America/Denver' => 'Ameryka/Denver',
    'America/Los_Angeles' => 'Ameryka/Los_angeles',
    'America/Juneau' => 'Ameryka/Juneau',
    'America/Yakutat' => 'Ameryka/Yakutat',
    'America/Anchorage' => 'Ameryka/Anchorage',
    'America/Nome' => 'Ameryka/Nome',
    'America/Adak' => 'Ameryka/Adak',
    'Pacific/Honolulu' => 'Pacyfik/Honolulu',
    'America/Phoenix' => 'Ameryka/Phoenix',
    'America/Boise' => 'Ameryka/Boise',
    'America/Indiana/Indianapolis' => 'Ameryka/Indiana/Indianapolis',
    'America/Indiana/Marengo' => 'Ameryka/Indiana/Marengo',
    'America/Indiana/Knox' => 'Ameryka/Indiana/Knox',
    'America/Indiana/Vevay' => 'Ameryka/Indiana/Vevay',
    'America/Kentucky/Louisville' => 'Ameryka/Kentucky/Louisville',
    'America/Kentucky/Monticello' => 'Ameryka/Kentucky/Monticello',
    'America/Detroit' => 'Ameryka/Detroit',
    'America/Menominee' => 'Ameryka/Menominee',
    'America/St_Johns' => 'Ameryka/St. Johns',
    'America/Goose_Bay' => 'Ameryka/Goose_Bay',
    'America/Halifax' => 'Ameryka/Halifax',
    'America/Glace_Bay' => 'Ameryka/Glace_Bay',
    'America/Montreal' => 'Ameryka/Montreal',
    'America/Toronto' => 'Ameryka/Toronto',
    'America/Thunder_Bay' => 'Ameryka/Thunder_Bay',
    'America/Nipigon' => 'Ameryka/Nipigon',
    'America/Rainy_River' => 'Ameryka/Rainy_River',
    'America/Winnipeg' => 'Ameryka/Winnipeg',
    'America/Regina' => 'Ameryka/Regina',
    'America/Swift_Current' => 'Ameryka/Swift_Current',
    'America/Edmonton' => 'Ameryka/Edmonton',
    'America/Vancouver' => 'Ameryka/Vancouver',
    'America/Dawson_Creek' => 'Ameryka/Dawson_Creek',
    'America/Pangnirtung' => 'Ameryka/Pangnirtung',
    'America/Iqaluit' => 'Ameryka/Iqaluit',
    'America/Coral_Harbour' => 'Ameryka/Coral_Harbour',
    'America/Rankin_Inlet' => 'Ameryka/Rankin_Inlet',
    'America/Cambridge_Bay' => 'Ameryka/Cambridge_Bay',
    'America/Yellowknife' => 'Ameryka/Yellowknife',
    'America/Inuvik' => 'Ameryka/Inuvik',
    'America/Whitehorse' => 'Ameryka/Whitehorse',
    'America/Dawson' => 'Ameryka/Dawson',
    'America/Cancun' => 'Ameryka/Cancun',
    'America/Merida' => 'Ameryka/Merida',
    'America/Monterrey' => 'Ameryka/Monterrey',
    'America/Mexico_City' => 'Ameryka/Meksyk',
    'America/Chihuahua' => 'Ameryka/Chihuahua',
    'America/Hermosillo' => 'Ameryka/Hermosillo',
    'America/Mazatlan' => 'Ameryka/Mazatlan',
    'America/Tijuana' => 'Ameryka/Tijuana',
    'America/Anguilla' => 'Ameryka/Anguilla',
    'America/Antigua' => 'Ameryka/Antigua',
    'America/Nassau' => 'Ameryka/Nassau',
    'America/Barbados' => 'Ameryka/Barbados',
    'America/Belize' => 'Ameryka/Belize',
    'Atlantic/Bermuda' => 'Atlantic/Bermudy',
    'America/Cayman' => 'Ameryka/Kajmany',
    'America/Costa_Rica' => 'Ameryka/Costa_Rica',
    'America/Havana' => 'Ameryka/Havana',
    'America/Dominica' => 'Ameryka/Dominika',
    'America/Santo_Domingo' => 'Ameryka/Santo_Domingo',
    'America/El_Salvador' => 'Ameryka/El_Salvador',
    'America/Grenada' => 'Ameryka/Grenada',
    'America/Guadeloupe' => 'Ameryka/Guadeloupe',
    'America/Guatemala' => 'Ameryka/Gwatemali',
    'America/Port-au-Prince' => 'Ameryka/Port-au-Prince',
    'America/Tegucigalpa' => 'Ameryka/Tegucigalpa',
    'America/Jamaica' => 'Ameryka/Jamajka',
    'America/Martinique' => 'Ameryka/Martynika',
    'America/Montserrat' => 'Ameryka/Montserrat',
    'America/Managua' => 'Ameryka/Managua',
    'America/Panama' => 'Ameryka/Panama',
    'America/Puerto_Rico' => 'Ameryka/Puerto_Rico',
    'America/St_Kitts' => 'Ameryka/St_Kitts',
    'America/St_Lucia' => 'Ameryka/St_Lucia',
    'America/Miquelon' => 'Ameryka/Miquelon',
    'America/St_Vincent' => 'Ameryka/St_Vincent',
    'America/Grand_Turk' => 'Ameryka/Grand_Turk',
    'America/Tortola' => 'Ameryka/Tortola',
    'America/St_Thomas' => 'Ameryka/St_Thomas',
    'America/Argentina/Buenos_Aires' => 'Ameryka/Argentyna/Buenos_Aires',
    'America/Argentina/Cordoba' => 'Ameryka/Argentyna/Cordoba',
    'America/Argentina/Tucuman' => 'Ameryka/Argentyna/Tucuman',
    'America/Argentina/La_Rioja' => 'Ameryka/Argentyna/La_Rioja',
    'America/Argentina/San_Juan' => 'Ameryka/Argentyna/San_Juan',
    'America/Argentina/Jujuy' => 'Ameryka/Argentyna/Jujuy',
    'America/Argentina/Catamarca' => 'Ameryka/Argentyna/Catamarca',
    'America/Argentina/Mendoza' => 'Ameryka/Argentyna/Mendoza',
    'America/Argentina/Rio_Gallegos' => 'Ameryka/Argentyna/Rio_Gallegos',
    'America/Argentina/Ushuaia' => 'Ameryka/Argentyna/Ushuaia',
    'America/Aruba' => 'Ameryka/Aruba',
    'America/La_Paz' => 'Ameryka/La_Paz',
    'America/Noronha' => 'Ameryka/Noronha',
    'America/Belem' => 'Ameryka/Belem',
    'America/Fortaleza' => 'Ameryka/Fortaleza',
    'America/Recife' => 'Ameryka/Recife',
    'America/Araguaina' => 'Ameryka/Araguaina',
    'America/Maceio' => 'Ameryka/Maceio',
    'America/Bahia' => 'Ameryka/Bahia',
    'America/Sao_Paulo' => 'Ameryka/Sao_Paulo',
    'America/Campo_Grande' => 'Ameryka/Campo_Grande',
    'America/Cuiaba' => 'Ameryka/Cuiaba',
    'America/Porto_Velho' => 'Ameryka/Porto_Velho',
    'America/Boa_Vista' => 'Ameryka/Boa_Vista',
    'America/Manaus' => 'Ameryka/Manaus',
    'America/Eirunepe' => 'Ameryka/Eirunepe',
    'America/Rio_Branco' => 'Ameryka/Rio_Branco',
    'America/Santiago' => 'Ameryka/Santiago',
    'Pacific/Easter' => 'Pacyfik/Wyspa_Wielkanocna',
    'America/Bogota' => 'Ameryka/Bogota',
    'America/Curacao' => 'Ameryka/Curacao',
    'America/Guayaquil' => 'Ameryka/Guayaquil',
    'Pacific/Galapagos' => 'Pacyfik/Galapagos',
    'Atlantic/Stanley' => 'Atlantyk/Stanley',
    'America/Cayenne' => 'Ameryka/Kajenna',
    'America/Guyana' => 'Ameryka/Gujana',
    'America/Asuncion' => 'Ameryka/Asuncion',
    'America/Lima' => 'Ameryka/Lima',
    'Atlantic/South_Georgia' => 'Atlantyk/Georgia_Południowa_i_Sandwich_Południowy',
    'America/Paramaribo' => 'Ameryka/Paramaribo',
    'America/Port_of_Spain' => 'Ameryka/Port_of_Spain',
    'America/Montevideo' => 'Ameryka/Montevideo',
    'America/Caracas' => 'Ameryka/Caracas',
);

$app_list_strings['eapm_list'] = array(
    'Sugar' => 'SuiteCRM',
    'WebEx' => 'WebEx',
    'GoToMeeting' => 'Idź na spotkanie',
    'IBMSmartCloud' => 'IBM SmartCloud',
    'Google' => 'Google',
    'Box' => 'Box.NET',
    'Facebook' => 'Facebook',
    'Twitter' => 'Twitter',
);
$app_list_strings['eapm_list_import'] = array(
    'Google' => 'Kontakty Google',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Dysk Google',
);
$app_list_strings['token_status'] = array(
    1 => 'Żądanie',
    2 => 'Dostęp',
    3 => 'Nieprawidłowy',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'Kampania',
    'email' => 'E-mail',
    'event' => 'Zdarzenie',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'Kampania',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'Kampania',
    'email' => 'E-mail',
    'event' => 'Zdarzenie',
    'system' => 'System',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'Baza Wiedzy';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'Kategorie Bazy Wiedzy';
$app_list_strings['aok_status_list']['Draft'] = 'Wersja Robocza';
$app_list_strings['aok_status_list']['Expired'] = 'Przedawniony';
$app_list_strings['aok_status_list']['In_Review'] = 'Rozpatrywane';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Prywatny';
$app_list_strings['aok_status_list']['published_public'] = 'Publiczny';

$app_list_strings['moduleList']['FP_events'] = 'Wydarzenia';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Lokalizacja';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Zaproszenie';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'Nie zaproszony';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'Udział';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'Brak udziału';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Zaakceptowano';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Odrzucony';
$app_list_strings['fp_event_status_dom']['No Response'] = 'Brak odpowiedzi';

$app_strings['LBL_STATUS_EVENT'] = 'Status Zaproszenia';
$app_strings['LBL_ACCEPT_STATUS'] = 'Status akceptacji';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Strona Bieżąca';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Cała lista';
$app_strings['LBL_LISTVIEW_NONE'] = 'Odznacz wszystko';

$app_list_strings['moduleList']['AOP_Case_Events'] = 'Wydarzenia związane ze Sprawą';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Aktualizacje Sprawy';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '=== Proszę o odpowiedź powyżej tej linii ===';

//aop
$app_list_strings['case_state_default_key'] = 'Open';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'Otwórz',
        'Closed' => 'Zamknięta',
    );
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'Nowa',
        'Open_Assigned' => 'Przypisana',
        'Closed_Closed' => 'Zamknięta',
        'Open_Pending Input' => 'Oczekująca na informacje',
        'Closed_Rejected' => 'Odrzucona',
        'Closed_Duplicate' => 'Duplikuj',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'Pojedynczy użytkownik',
        'Account' => 'Konto użytkownika',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'Użyć AOP Domyślnych',
    'singleUser' => 'Pojedynczy użytkownik',
    'roundRobin' => 'Algorytm karuzelowy (Round-Robin)',
    'leastBusy' => 'Pierwszy Wolny',
    'random' => 'Dowolny',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Raporty';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Warunki Raportu';
$app_list_strings['moduleList']['AOR_Charts'] = 'Wykresy raportu';
$app_list_strings['moduleList']['AOR_Fields'] = 'Pola raportu';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Raporty zaplanowane';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Jest równe';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Jest różne od';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Większe niż';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Mniejsze niż';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Większe lub równe ';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Mniejsze lub równe';
$app_list_strings['aor_operator_list']['Contains'] = 'Zawiera';
$app_list_strings['aor_operator_list']['Starts_With'] = 'Zaczyna się z';
$app_list_strings['aor_operator_list']['Ends_With'] = 'Kończy się na';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'R-m-d';
$app_list_strings['aor_format_options']['m-d-Y'] = 'm-d-R';
$app_list_strings['aor_format_options']['d-m-Y'] = 'd-m-R';
$app_list_strings['aor_format_options']['Y/m/d'] = 'R/m/d';
$app_list_strings['aor_format_options']['m/d/Y'] = 'm/d/R';
$app_list_strings['aor_format_options']['d/m/Y'] = 'd/m/R';
$app_list_strings['aor_format_options']['Y.m.d'] = 'R.m.d';
$app_list_strings['aor_format_options']['m.d.Y'] = 'm.d.R';
$app_list_strings['aor_format_options']['d.m.Y'] = 'd.m.R';
$app_list_strings['aor_format_options']['Ymd'] = 'Rmd';
$app_list_strings['aor_format_options']['Y-m'] = 'R-m';
$app_list_strings['aor_format_options']['Y'] = 'R';
$app_list_strings['aor_condition_operator_list']['And'] = 'i';
$app_list_strings['aor_condition_operator_list']['OR'] = 'lub';
$app_list_strings['aor_condition_type_list']['Value'] = 'Wartość';
$app_list_strings['aor_condition_type_list']['Field'] = 'Pole';
$app_list_strings['aor_condition_type_list']['Date'] = 'Data';
$app_list_strings['aor_condition_type_list']['Multi'] = 'Jeden z';
$app_list_strings['aor_condition_type_list']['Period'] = 'Okres';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Bieżący użytkownik';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'minut';
$app_list_strings['aor_date_type_list']['hour'] = 'godzinę';
$app_list_strings['aor_date_type_list']['day'] = 'dni';
$app_list_strings['aor_date_type_list']['week'] = 'tygodni';
$app_list_strings['aor_date_type_list']['month'] = 'Miesiące';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Godziny pracy';
$app_list_strings['aor_date_options']['now'] = 'Teraz';
$app_list_strings['aor_date_options']['field'] = 'To pole';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Rosnąco';
$app_list_strings['aor_sort_operator']['DESC'] = 'Malejąco';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Ilość';
$app_list_strings['aor_function_list']['MIN'] = 'Minimum';
$app_list_strings['aor_function_list']['MAX'] = 'Maksimum';
$app_list_strings['aor_function_list']['SUM'] = 'Suma';
$app_list_strings['aor_function_list']['AVG'] = 'Średnia';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Ilość';
$app_list_strings['aor_total_options']['SUM'] = 'Suma';
$app_list_strings['aor_total_options']['AVG'] = 'Średnia';
$app_list_strings['aor_chart_types']['bar'] = 'Wykres słupkowy';
$app_list_strings['aor_chart_types']['line'] = 'Wykres liniowy';
$app_list_strings['aor_chart_types']['pie'] = 'Wykres kołowy';
$app_list_strings['aor_chart_types']['radar'] = 'Wykres radarowy';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Wykres skumulowany słupkowy';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Wykres zgrupowany';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Miesięczny';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Tygodniowo';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Dziennie';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Aktywny';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Nieaktywny';
$app_list_strings['aor_email_type_list']['Email Address'] = 'E-mail';
$app_list_strings['aor_email_type_list']['Specify User'] = 'Przydzielony do';
$app_list_strings['aor_email_type_list']['Users'] = 'Użytkownicy';
$app_list_strings['aor_assign_options']['all'] = 'Wszyscy użytkownicy';
$app_list_strings['aor_assign_options']['role'] = 'Wszyscy użytkownicy w Profilu uprawnień';
$app_list_strings['aor_assign_options']['security_group'] = 'Wszyscy użytkownicy w grupie zabezpieczeń';
$app_list_strings['date_time_period_list']['today'] = 'Dziś';
$app_list_strings['date_time_period_list']['yesterday'] = 'wczoraj';
$app_list_strings['date_time_period_list']['this_week'] = 'Ten Tydzień';
$app_list_strings['date_time_period_list']['last_week'] = 'w zeszłym tygodniu';
$app_list_strings['date_time_period_list']['last_month'] = 'Ostatni Miesiąc';
$app_list_strings['date_time_period_list']['this_month'] = 'W tym Miesiącu';
$app_list_strings['date_time_period_list']['this_quarter'] = 'Ten kwartał';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Ostatni kwartał';
$app_list_strings['date_time_period_list']['this_year'] = 'Ten Rok';
$app_list_strings['date_time_period_list']['last_year'] = 'Ubiegły Rok';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'na';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'na';
$app_strings['LBL_CRON_AT'] = 'w';
$app_strings['LBL_CRON_RAW'] = 'Zaawansowane';
$app_strings['LBL_CRON_MIN'] = 'Min';
$app_strings['LBL_CRON_HOUR'] = 'Godzina';
$app_strings['LBL_CRON_DAY'] = 'Dzień';
$app_strings['LBL_CRON_MONTH'] = 'Miesięczny';
$app_strings['LBL_CRON_DOW'] = 'DOW (dzień tygodnia)';
$app_strings['LBL_CRON_DAILY'] = 'Dziennie';
$app_strings['LBL_CRON_WEEKLY'] = 'Tygodniowo';
$app_strings['LBL_CRON_MONTHLY'] = 'Miesięczny';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Umowy';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Faktury';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'Szablony PDF';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Kategorie produktów';
$app_list_strings['moduleList']['AOS_Products'] = 'Produkty';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Pozycje';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Elementy pozycji';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Oferty';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Ekspert';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Konkurent';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Klient';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Integrator';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Inwestor';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Partner';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Prasa';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Kandydat';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Pośrednik';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Inny';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Wersja Robocza';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'Negocjacje';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Dostarczone';
$app_list_strings['quote_stage_dom']['On Hold'] = 'Wstrzymane';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Potwierdzone';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Zaakceptowana i zamknięta';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Odrzucone';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Zamknięte Niedostępne';
$app_list_strings['quote_term_dom']['Net 15'] = 'Netto 15';
$app_list_strings['quote_term_dom']['Net 30'] = 'Netto 30';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'Zaakceptowany';
$app_list_strings['approval_status_dom']['Not Approved'] = 'Nie zaakceptowany';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7,5%';
$app_list_strings['vat_list']['17.5'] = '17,5%';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = 'Procentowy';
$app_list_strings['discount_list']['Amount'] = 'Kwotowy';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Ekspert';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Konkurent';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Klient';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Integrator';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Inwestor';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Partner';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Prasa';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Kandydat';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Pośrednik';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Inny';
$app_list_strings['invoice_status_dom']['Paid'] = 'Opłacona';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'Niezapłacona';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'Anulowane';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'Niezafakturowane';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'Zafakturowane';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'Laptopy';
$app_list_strings['product_category_dom']['Desktops'] = 'Desktopy';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'Produkty';
$app_list_strings['product_type_dom']['Service'] = 'Wsparcie';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Oferty';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Faktury';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Umowy';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Oferty';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Faktury';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Umowy';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Kontrahenci';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Kontakty';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Potencjalni klienci';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Nie rozpoczęta';
$app_list_strings['contract_status_list']['In Progress'] = 'W realizacji';
$app_list_strings['contract_status_list']['Signed'] = 'Podpisana';
$app_list_strings['contract_type_list']['Type'] = 'Typ';
$app_strings['LBL_PRINT_AS_PDF'] = 'Drukuj w Formacie PDF';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Proszę wybrać szablon';
$app_strings['LBL_NO_TEMPLATE'] = 'Błąd\nNie znaleziono szablonu.\nProszę przejść do Szablonów PDF i utworzyć szablon.';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'Workflow';
$app_list_strings['moduleList']['AOW_Conditions'] = 'Warunki workflow';
$app_list_strings['moduleList']['AOW_Processed'] = 'Audyt procesu';
$app_list_strings['moduleList']['AOW_Actions'] = 'Workflow - działania';
$app_list_strings['aow_status_list']['Active'] = 'Aktywny';
$app_list_strings['aow_status_list']['Inactive'] = 'Nieaktywny';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Jest równe';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Jest różne od';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Większe niż';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Mniejsze niż';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Większe lub równe ';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Mniejsze lub równe';
$app_list_strings['aow_operator_list']['Contains'] = 'Zawiera';
$app_list_strings['aow_operator_list']['Starts_With'] = 'Zaczyna się z';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Kończy się na';
$app_list_strings['aow_operator_list']['is_null'] = 'Jest pusty';
$app_list_strings['aow_process_status_list']['Complete'] = 'Zakończ';
$app_list_strings['aow_process_status_list']['Running'] = 'Uruchomiony';
$app_list_strings['aow_process_status_list']['Pending'] = 'Oczekujący';
$app_list_strings['aow_process_status_list']['Failed'] = 'Nieudany';
$app_list_strings['aow_condition_operator_list']['And'] = 'i';
$app_list_strings['aow_condition_operator_list']['OR'] = 'lub';
$app_list_strings['aow_condition_type_list']['Value'] = 'Wartość';
$app_list_strings['aow_condition_type_list']['Field'] = 'Pole';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Jakakolwiek zmiana';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'W SecurityGroup';
$app_list_strings['aow_condition_type_list']['Date'] = 'Data';
$app_list_strings['aow_condition_type_list']['Multi'] = 'Jeden z';
$app_list_strings['aow_action_type_list']['Value'] = 'Wartość';
$app_list_strings['aow_action_type_list']['Field'] = 'Pole';
$app_list_strings['aow_action_type_list']['Date'] = 'Data';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Algorytm karuzelowy (Round-Robin)';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Najmniej zajęty';
$app_list_strings['aow_action_type_list']['Random'] = 'Dowolny';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Wartość';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Pole';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'minut';
$app_list_strings['aow_date_type_list']['hour'] = 'godzin';
$app_list_strings['aow_date_type_list']['day'] = 'dni';
$app_list_strings['aow_date_type_list']['week'] = 'tygodni';
$app_list_strings['aow_date_type_list']['month'] = 'Miesiące';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Godziny pracy';
$app_list_strings['aow_date_options']['now'] = 'Teraz';
$app_list_strings['aow_date_options']['today'] = 'Dziś';
$app_list_strings['aow_date_options']['field'] = 'To pole';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'Wszyscy użytkownicy';
$app_list_strings['aow_assign_options']['role'] = 'Wszyscy użytkownicy w Profilu uprawnień';
$app_list_strings['aow_assign_options']['security_group'] = 'Wszyscy użytkownicy w grupie zabezpieczeń';
$app_list_strings['aow_email_type_list']['Email Address'] = 'E-mail';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Wpis E-mail';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Powiązane pole';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Przydzielony do';
$app_list_strings['aow_email_type_list']['Users'] = 'Użytkownicy';
$app_list_strings['aow_email_to_list']['to'] = 'Do';
$app_list_strings['aow_email_to_list']['cc'] = 'Kopia';
$app_list_strings['aow_email_to_list']['bcc'] = 'Ukryta kopia';
$app_list_strings['aow_run_on_list']['All_Records'] = 'Wszystkie wpisy';
$app_list_strings['aow_run_on_list']['New_Records'] = 'Nowe wpisy';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Zmodyfikowane wpisy';
$app_list_strings['aow_run_when_list']['Always'] = 'Zawsze';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Tylko Przy Zapisie';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Tylko w Zadaniach cyklicznych';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Szablony projektów';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Szablony zadań projektu';
$app_list_strings['relationship_type_list']['FS'] = 'Koniec - początek';
$app_list_strings['relationship_type_list']['SS'] = 'Początek - początek';
$app_list_strings['duration_unit_dom']['Days'] = 'dni';
$app_list_strings['duration_unit_dom']['Hours'] = 'godziny';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'Widok wykresu Gantta';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = 'Przeglądaj szczegóły';
$app_strings['LBL_CREATE_PROJECT'] = 'Utwórz projekt';

//gmaps
$app_strings['LBL_MAP'] = 'Mapa';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Długość geograficzna';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Szerokość geograficzna';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Status geokodu';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Adres';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Mapy';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Znaczniki mapy';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Obszary mapy';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Pamięć podręczna adresów';

$app_list_strings['moduleList']['jjwp_Partners'] = 'JJWP Partners';

$app_list_strings['map_unit_type_list']['mi'] = 'Mile';
$app_list_strings['map_unit_type_list']['km'] = 'Kilometry';

$app_list_strings['map_module_type_list']['Accounts'] = 'Kontrahenci';
$app_list_strings['map_module_type_list']['Contacts'] = 'Kontakty';
$app_list_strings['map_module_type_list']['Cases'] = 'Sprawy';
$app_list_strings['map_module_type_list']['Leads'] = 'Potencjalni klienci';
$app_list_strings['map_module_type_list']['Meetings'] = 'Spotkania';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Szanse Sprzedaży';
$app_list_strings['map_module_type_list']['Project'] = 'Projekty';
$app_list_strings['map_module_type_list']['Prospects'] = 'Docelowi odbiorcy';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Kontrahent';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Kontakt';
$app_list_strings['map_relate_type_list']['Cases'] = 'Sprawa';
$app_list_strings['map_relate_type_list']['Leads'] = 'Potencjalny klient';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Spotkania';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Szansa sprzedaży';
$app_list_strings['map_relate_type_list']['Project'] = 'Projekty';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Docelowy odbiorca';

$app_list_strings['marker_image_list']['accident'] = 'Wypadek';
$app_list_strings['marker_image_list']['administration'] = 'Administracja';
$app_list_strings['marker_image_list']['agriculture'] = 'Rolnictwo';
$app_list_strings['marker_image_list']['aircraft_small'] = 'Mały samolot';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Turystyka lotnicza';
$app_list_strings['marker_image_list']['airport'] = 'Lotnisko';
$app_list_strings['marker_image_list']['amphitheater'] = 'Amfiteatr';
$app_list_strings['marker_image_list']['apartment'] = 'Apartament';
$app_list_strings['marker_image_list']['aquarium'] = 'Akwarium';
$app_list_strings['marker_image_list']['arch'] = 'Łuk';
$app_list_strings['marker_image_list']['atm'] = 'Bankomat';
$app_list_strings['marker_image_list']['audio'] = 'Dźwięk';
$app_list_strings['marker_image_list']['bank'] = 'Bank';
$app_list_strings['marker_image_list']['bank_euro'] = 'Bank Euro';
$app_list_strings['marker_image_list']['bank_pound'] = 'Bank Funt';
$app_list_strings['marker_image_list']['bar'] = 'Bar';
$app_list_strings['marker_image_list']['beach'] = 'Plaża';
$app_list_strings['marker_image_list']['beautiful'] = 'Piękny';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'Parking rowerowy';
$app_list_strings['marker_image_list']['big_city'] = 'Duże miasto';
$app_list_strings['marker_image_list']['bridge'] = 'Most';
$app_list_strings['marker_image_list']['bridge_modern'] = 'Most Nowoczesny';
$app_list_strings['marker_image_list']['bus'] = 'Autobus';
$app_list_strings['marker_image_list']['cable_car'] = 'Kolejka linowa';
$app_list_strings['marker_image_list']['car'] = 'Samochód';
$app_list_strings['marker_image_list']['car_rental'] = 'Wypożyczalnia samochodów';
$app_list_strings['marker_image_list']['carrepair'] = 'Warsztat samochodowy';
$app_list_strings['marker_image_list']['castle'] = 'Zamek';
$app_list_strings['marker_image_list']['cathedral'] = 'Katedra';
$app_list_strings['marker_image_list']['chapel'] = 'Kaplica';
$app_list_strings['marker_image_list']['church'] = 'Kościół';
$app_list_strings['marker_image_list']['city_square'] = 'Rynek';
$app_list_strings['marker_image_list']['cluster'] = 'Grupa';
$app_list_strings['marker_image_list']['cluster_2'] = 'Grupa 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'Grupa 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'Grupa 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'Grupa 5';
$app_list_strings['marker_image_list']['coffee'] = 'Kawa';
$app_list_strings['marker_image_list']['community_centre'] = 'Ośrodek Kultury';
$app_list_strings['marker_image_list']['company'] = 'Firma';
$app_list_strings['marker_image_list']['conference'] = 'Uczestnik Konferencji';
$app_list_strings['marker_image_list']['construction'] = 'Budownictwo';
$app_list_strings['marker_image_list']['convenience'] = 'Sklep Spożywczy';
$app_list_strings['marker_image_list']['court'] = 'Sąd';
$app_list_strings['marker_image_list']['cruise'] = 'Rejs';
$app_list_strings['marker_image_list']['currency_exchange'] = 'Kantor';
$app_list_strings['marker_image_list']['customs'] = 'Urząd Celny';
$app_list_strings['marker_image_list']['cycling'] = 'Jazda na rowerze';
$app_list_strings['marker_image_list']['dam'] = 'Tama';
$app_list_strings['marker_image_list']['dentist'] = 'Dentysta';
$app_list_strings['marker_image_list']['deptartment_store'] = 'Dom Towarowy';
$app_list_strings['marker_image_list']['disability'] = 'Niepełnosprawność';
$app_list_strings['marker_image_list']['disabled_parking'] = 'Parking dla niepełnosprawnych';
$app_list_strings['marker_image_list']['doctor'] = 'Lekarz';
$app_list_strings['marker_image_list']['dog_leash'] = 'Smycz dla Psa';
$app_list_strings['marker_image_list']['down'] = 'W dół';
$app_list_strings['marker_image_list']['down_left'] = 'Dół lewo';
$app_list_strings['marker_image_list']['down_right'] = 'Dół prawo';
$app_list_strings['marker_image_list']['down_then_left'] = 'W doł, a następnie w lewo';
$app_list_strings['marker_image_list']['down_then_right'] = 'W dół, a następnie w prawo';
$app_list_strings['marker_image_list']['drugs'] = 'Leki';
$app_list_strings['marker_image_list']['elevator'] = 'Winda';
$app_list_strings['marker_image_list']['embassy'] = 'Ambasada';
$app_list_strings['marker_image_list']['expert'] = 'Ekspert';
$app_list_strings['marker_image_list']['factory'] = 'Fabryka';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Osypiska skalne';
$app_list_strings['marker_image_list']['fast_food'] = 'Fast Food';
$app_list_strings['marker_image_list']['festival'] = 'Festiwal';
$app_list_strings['marker_image_list']['fjord'] = 'Fiord';
$app_list_strings['marker_image_list']['forest'] = 'Las';
$app_list_strings['marker_image_list']['fountain'] = 'Fontanna';
$app_list_strings['marker_image_list']['friday'] = 'Piątek';
$app_list_strings['marker_image_list']['garden'] = 'Ogród';
$app_list_strings['marker_image_list']['gas_station'] = 'Stacja benzynowa';
$app_list_strings['marker_image_list']['geyser'] = 'Gejzer';
$app_list_strings['marker_image_list']['gifts'] = 'Prezenty';
$app_list_strings['marker_image_list']['gourmet'] = 'Smakołyki';
$app_list_strings['marker_image_list']['grocery'] = 'Sklep spożywczy';
$app_list_strings['marker_image_list']['hairsalon'] = 'Fryzjer';
$app_list_strings['marker_image_list']['helicopter'] = 'Helikopter';
$app_list_strings['marker_image_list']['highway'] = 'Autostrada';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Dzielnica Zabytkowa';
$app_list_strings['marker_image_list']['home'] = 'Strona Główna';
$app_list_strings['marker_image_list']['hospital'] = 'Szpital';
$app_list_strings['marker_image_list']['hostel'] = 'Hostel';
$app_list_strings['marker_image_list']['hotel'] = 'Hotel';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'Hotel 1-gwiazdkowy';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'Hotel 2-gwiazdkowy';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'Hotel 3-gwiazdkowy';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'Hotel 4-gwiazdkowy';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'Hotel 5-gwiazdkowy';
$app_list_strings['marker_image_list']['info'] = 'Informacja';
$app_list_strings['marker_image_list']['justice'] = 'Sąd';
$app_list_strings['marker_image_list']['lake'] = 'Jezioro';
$app_list_strings['marker_image_list']['laundromat'] = 'Pralnia samoobsługowa';
$app_list_strings['marker_image_list']['left'] = 'W lewo';
$app_list_strings['marker_image_list']['left_then_down'] = 'W lewo, a następnie w dół';
$app_list_strings['marker_image_list']['left_then_up'] = 'W lewo, a następnie w górę';
$app_list_strings['marker_image_list']['library'] = 'Biblioteka';
$app_list_strings['marker_image_list']['lighthouse'] = 'Latarnia';
$app_list_strings['marker_image_list']['liquor'] = 'Monopolowy';
$app_list_strings['marker_image_list']['lock'] = 'Blokada';
$app_list_strings['marker_image_list']['main_road'] = 'Główna droga';
$app_list_strings['marker_image_list']['massage'] = 'Masaż';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Wieża GSM';
$app_list_strings['marker_image_list']['modern_tower'] = 'Nowoczesna wieża';
$app_list_strings['marker_image_list']['monastery'] = 'Klasztor';
$app_list_strings['marker_image_list']['monday'] = 'Poniedziałek';
$app_list_strings['marker_image_list']['monument'] = 'Pomnik';
$app_list_strings['marker_image_list']['mosque'] = 'Meczet';
$app_list_strings['marker_image_list']['motorcycle'] = 'Motocykl';
$app_list_strings['marker_image_list']['museum'] = 'Muzeum';
$app_list_strings['marker_image_list']['music_live'] = 'Muzyka na żywo';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Pompa oleju';
$app_list_strings['marker_image_list']['pagoda'] = 'Pagoda';
$app_list_strings['marker_image_list']['palace'] = 'Pałac';
$app_list_strings['marker_image_list']['panoramic'] = 'Punkt widokowy';
$app_list_strings['marker_image_list']['park'] = 'Park';
$app_list_strings['marker_image_list']['park_and_ride'] = 'Parkuj i jedź';
$app_list_strings['marker_image_list']['parking'] = 'Parking';
$app_list_strings['marker_image_list']['photo'] = 'Zdjęcie';
$app_list_strings['marker_image_list']['picnic'] = 'Piknik';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Nieodwiedzone miejsca';
$app_list_strings['marker_image_list']['places_visited'] = 'Odwiedzone miejsca';
$app_list_strings['marker_image_list']['playground'] = 'Plac zabaw';
$app_list_strings['marker_image_list']['police'] = 'Policja';
$app_list_strings['marker_image_list']['port'] = 'Port';
$app_list_strings['marker_image_list']['postal'] = 'Poczta';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Słup energetyczny';
$app_list_strings['marker_image_list']['power_plant'] = 'Elektrownia';
$app_list_strings['marker_image_list']['power_substation'] = 'Podstacja energetyczna';
$app_list_strings['marker_image_list']['public_art'] = 'Sztuka Publiczna';
$app_list_strings['marker_image_list']['rain'] = 'Deszcz';
$app_list_strings['marker_image_list']['real_estate'] = 'Nieruchomości';
$app_list_strings['marker_image_list']['regroup'] = 'Przegrupowanie';
$app_list_strings['marker_image_list']['resort'] = 'Ośrodek wypoczynkowy';
$app_list_strings['marker_image_list']['restaurant'] = 'Restauracja';
$app_list_strings['marker_image_list']['restaurant_african'] = 'Restauracja afrykańska';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'Restauracja grillowa';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'Bar';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'Restauracja chińska';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'Restauracja rybna';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'Restauracja z Rybą i Frytkami';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'Restauracja dla smakoszy';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'Restauracja grecka';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'Restauracja indiańska';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'Restauracja włoska';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'Restauracja japońska';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'Restauracja kebab';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'Restauracja koreańska';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'Restauracja śródziemnomorska';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'Restauracja meksykańska';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'Restauracja romantyczna';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'Restauracja tajska';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'Restauracja turecka';
$app_list_strings['marker_image_list']['right'] = 'W prawo';
$app_list_strings['marker_image_list']['right_then_down'] = 'W prawo potem w dół';
$app_list_strings['marker_image_list']['right_then_up'] = 'W prawo potem w górę';
$app_list_strings['marker_image_list']['saturday'] = 'Sobota';
$app_list_strings['marker_image_list']['school'] = 'Szkoła';
$app_list_strings['marker_image_list']['shopping_mall'] = 'Centrum handlowe';
$app_list_strings['marker_image_list']['shore'] = 'Brzeg';
$app_list_strings['marker_image_list']['sight'] = 'Widok';
$app_list_strings['marker_image_list']['small_city'] = 'Miasteczko';
$app_list_strings['marker_image_list']['snow'] = 'Śnieg';
$app_list_strings['marker_image_list']['spaceport'] = 'Centrum lotów kosmicznych';
$app_list_strings['marker_image_list']['speed_100'] = 'Prędkość 100';
$app_list_strings['marker_image_list']['speed_110'] = 'Prędkość 110';
$app_list_strings['marker_image_list']['speed_120'] = 'Prędkość 120';
$app_list_strings['marker_image_list']['speed_130'] = 'Prędkość 130';
$app_list_strings['marker_image_list']['speed_20'] = 'Prędkość 20';
$app_list_strings['marker_image_list']['speed_30'] = 'Prędkość 30';
$app_list_strings['marker_image_list']['speed_40'] = 'Prędkość 40';
$app_list_strings['marker_image_list']['speed_50'] = 'Prędkość 50';
$app_list_strings['marker_image_list']['speed_60'] = 'Prędkość 60';
$app_list_strings['marker_image_list']['speed_70'] = 'Prędkość 70';
$app_list_strings['marker_image_list']['speed_80'] = 'Prędkość 80';
$app_list_strings['marker_image_list']['speed_90'] = 'Prędkość 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'Próg zwalniający';
$app_list_strings['marker_image_list']['stadium'] = 'Stadion';
$app_list_strings['marker_image_list']['statue'] = 'Statua';
$app_list_strings['marker_image_list']['steam_train'] = 'Pociąg parowy';
$app_list_strings['marker_image_list']['stop'] = 'Znak STOP';
$app_list_strings['marker_image_list']['stoplight'] = 'Światła';
$app_list_strings['marker_image_list']['subway'] = 'Metro';
$app_list_strings['marker_image_list']['sun'] = 'Niedziela';
$app_list_strings['marker_image_list']['sunday'] = 'Niedziela';
$app_list_strings['marker_image_list']['supermarket'] = 'Supermarket';
$app_list_strings['marker_image_list']['synagogue'] = 'Synagoga';
$app_list_strings['marker_image_list']['tapas'] = 'Przekąski';
$app_list_strings['marker_image_list']['taxi'] = 'Taksówka';
$app_list_strings['marker_image_list']['taxiway'] = 'Pas dla taksówek';
$app_list_strings['marker_image_list']['teahouse'] = 'Herbaciarnia';
$app_list_strings['marker_image_list']['telephone'] = 'Telefon';
$app_list_strings['marker_image_list']['temple_hindu'] = 'Świątynia Hindu';
$app_list_strings['marker_image_list']['terrace'] = 'Taras';
$app_list_strings['marker_image_list']['text'] = 'Tekst';
$app_list_strings['marker_image_list']['theater'] = 'Teatr';
$app_list_strings['marker_image_list']['theme_park'] = 'Park tematyczny';
$app_list_strings['marker_image_list']['thursday'] = 'Czwartek';
$app_list_strings['marker_image_list']['toilets'] = 'WC';
$app_list_strings['marker_image_list']['toll_station'] = 'Punkt opłat';
$app_list_strings['marker_image_list']['tower'] = 'Wieża';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Fotoradar';
$app_list_strings['marker_image_list']['train'] = 'Pociąg';
$app_list_strings['marker_image_list']['tram'] = 'Tramwaj';
$app_list_strings['marker_image_list']['truck'] = 'Ciężarówka';
$app_list_strings['marker_image_list']['tuesday'] = 'Wtorek';
$app_list_strings['marker_image_list']['tunnel'] = 'Tunel';
$app_list_strings['marker_image_list']['turn_left'] = 'Skręć w lewo';
$app_list_strings['marker_image_list']['turn_right'] = 'Skręć w prawo';
$app_list_strings['marker_image_list']['university'] = 'Uniwersytet';
$app_list_strings['marker_image_list']['up'] = 'W górę';
$app_list_strings['marker_image_list']['up_left'] = 'W górę i w lewo';
$app_list_strings['marker_image_list']['up_right'] = 'W górę i w prawo';
$app_list_strings['marker_image_list']['up_then_left'] = 'W górę, potem w lewo';
$app_list_strings['marker_image_list']['up_then_right'] = 'W górę, potem w prawo';
$app_list_strings['marker_image_list']['vespa'] = 'Vespa';
$app_list_strings['marker_image_list']['video'] = 'Wideo';
$app_list_strings['marker_image_list']['villa'] = 'Willa';
$app_list_strings['marker_image_list']['water'] = 'Woda';
$app_list_strings['marker_image_list']['waterfall'] = 'Wodospad';
$app_list_strings['marker_image_list']['watermill'] = 'Młyn wodny';
$app_list_strings['marker_image_list']['waterpark'] = 'Park wodny';
$app_list_strings['marker_image_list']['watertower'] = 'Wieża wodna';
$app_list_strings['marker_image_list']['wednesday'] = 'Środa';
$app_list_strings['marker_image_list']['wifi'] = 'WiFi';
$app_list_strings['marker_image_list']['wind_turbine'] = 'Elektrownia wiatrowa';
$app_list_strings['marker_image_list']['windmill'] = 'Młyn';
$app_list_strings['marker_image_list']['winery'] = 'Winiarnia';
$app_list_strings['marker_image_list']['work_office'] = 'Biuro';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'Światowego Dziedzictwa UNESCO';
$app_list_strings['marker_image_list']['zoo'] = 'ZOO';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'Poza biurem';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'Na spotkaniu';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'Przełóż';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'Wprowadź informację o zmianie';
$app_strings['LBL_RESCHEDULE_DATE'] = 'Data:';
$app_strings['LBL_RESCHEDULE_REASON'] = 'Powód:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'Wybierz poprawną datę';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'Proszę określić powód';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'Przełóż';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'Historia prób połączeń';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'Próby połączenia';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = 'Zarządzanie Security Suite';
$app_strings['LBL_SECURITYGROUP'] = 'Grupa bezpieczeństwa';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'Konta poczty wychodzącej';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Szczegóły Kanału Społecznościowego ';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Filtr wyszukiwania';

$app_strings['LBL_COLLECTION_TYPE'] = 'Typ';

$app_strings['LBL_ADD_TAB'] = 'Dodaj Zakładkę';
$app_strings['LBL_EDIT_TAB'] = 'Edytuj zakładki';
$app_strings['LBL_SUITE_DASHBOARD'] = 'PULPIT SUITECRM';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Wpisz nazwę pulpitu';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Liczba Kolumn';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Czy na pewno chcesz usunąć';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'pulpit?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Dodaj stronę pulpitu';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Usuń aktualną stronę pulpitu';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Zmień nazwę strony pulpitu';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'AKCJE';

$app_list_strings['collection_temp_list'] = array(
    'Tasks' => 'Zadania',
    'Meetings' => 'Spotkania',
    'Calls' => 'Połączenia telefoniczne',
    'Notes' => 'Notatki',
    'Emails' => 'Wiadomości e-mail'
);

$app_list_strings['moduleList']['TemplateEditor'] = 'Edytor Części Szablonu';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "Kliknięto poza edytowanym polem bez zapisywania go. Kliknij przycisk Ok, jeśli nie przeszkadza ci, że utracisz wprowadzone zmiany, lub Anuluj, jeśli chcesz kontynuować edycję";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "Wystąpił błąd podczas ładowania pola. Prawdopodobnie upłynął limit czasu sesji. Proszę zalogować się ponownie, aby rozwiązać ten problem";

$app_list_strings['moduleList']['AOBH_BusinessHours'] = 'Godziny pracy';
$app_list_strings['business_hours_list']['0'] = '00:00';
$app_list_strings['business_hours_list']['1'] = '1:00';
$app_list_strings['business_hours_list']['2'] = '2:00';
$app_list_strings['business_hours_list']['3'] = '3:00';
$app_list_strings['business_hours_list']['4'] = '4:00';
$app_list_strings['business_hours_list']['5'] = '5:00';
$app_list_strings['business_hours_list']['6'] = '6:00';
$app_list_strings['business_hours_list']['7'] = '7:00';
$app_list_strings['business_hours_list']['8'] = '8:00';
$app_list_strings['business_hours_list']['9'] = '9:00';
$app_list_strings['business_hours_list']['10'] = '10:00';
$app_list_strings['business_hours_list']['11'] = '11:00';
$app_list_strings['business_hours_list']['12'] = '12:00';
$app_list_strings['business_hours_list']['13'] = '13:00';
$app_list_strings['business_hours_list']['14'] = '14:00';
$app_list_strings['business_hours_list']['15'] = '15:00';
$app_list_strings['business_hours_list']['16'] = '16:00';
$app_list_strings['business_hours_list']['17'] = '17:00';
$app_list_strings['business_hours_list']['18'] = '18:00';
$app_list_strings['business_hours_list']['19'] = '19:00';
$app_list_strings['business_hours_list']['20'] = '20:00';
$app_list_strings['business_hours_list']['21'] = '21:00';
$app_list_strings['business_hours_list']['22'] = '22:00';
$app_list_strings['business_hours_list']['23'] = '23:00';
$app_list_strings['day_list']['Monday'] = 'Poniedziałek';
$app_list_strings['day_list']['Tuesday'] = 'Wtorek';
$app_list_strings['day_list']['Wednesday'] = 'Środa';
$app_list_strings['day_list']['Thursday'] = 'Czwartek';
$app_list_strings['day_list']['Friday'] = 'Piątek';
$app_list_strings['day_list']['Saturday'] = 'Sobota';
$app_list_strings['day_list']['Sunday'] = 'Niedziela';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'Letter';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'Legal';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'Widok pionowy';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'Widok poziony';


$app_list_strings['moduleList']['SurveyResponses'] = 'Odpowiedzi z ankiet';
$app_list_strings['moduleList']['Surveys'] = 'Ankiety';
$app_list_strings['moduleList']['SurveyQuestionResponses'] = 'Odpowiedzi na pytania ankietowe';
$app_list_strings['moduleList']['SurveyQuestions'] = 'Pytania ankietowe';
$app_list_strings['moduleList']['SurveyQuestionOptions'] = 'Opcje pytań ankietowych';
$app_list_strings['survey_status_list']['Draft'] = 'Wersja Robocza';
$app_list_strings['survey_status_list']['Public'] = 'Publiczny';
$app_list_strings['survey_status_list']['Closed'] = 'Zamknięte';
$app_list_strings['surveys_question_type']['Text'] = 'Tekst';
$app_list_strings['surveys_question_type']['Textbox'] = 'Pole tekstowe';
$app_list_strings['surveys_question_type']['Checkbox'] = 'Pole wyboru (prawda/fałsz)';
$app_list_strings['surveys_question_type']['Radio'] = 'Radio';
$app_list_strings['surveys_question_type']['Dropdown'] = 'Menu rozwijane';
$app_list_strings['surveys_question_type']['Multiselect'] = 'Pole wielokrotnego wyboru';
$app_list_strings['surveys_question_type']['Matrix'] = 'Macierz';
$app_list_strings['surveys_question_type']['DateTime'] = 'Data/Czas';
$app_list_strings['surveys_question_type']['Date'] = 'Data';
$app_list_strings['surveys_question_type']['Scale'] = 'Skala';
$app_list_strings['surveys_question_type']['Rating'] = 'Ocena';
$app_list_strings['surveys_matrix_options'][0] = 'Zadowolony/a';
$app_list_strings['surveys_matrix_options'][1] = 'Ani zadowolony/a, ani niezadowolony/a';
$app_list_strings['surveys_matrix_options'][2] = 'Niezadowolony/a';

$app_strings['LBL_OPT_IN_PENDING_EMAIL_NOT_SENT'] = 'Oczekuje na potwierdzenie zgody na przetwarzanie danych osobowych, potwierdzenie nie wysłane';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_FAILED'] = 'Niepowodzenie wysyłki emaila potwierdzającego zgodę na przetwarzanie danych osobowych';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_SENT'] = 'Oczekuje na potwierdzenie zgody na przetwarzanie danych osobowych, wysłano potwierdzenie';
$app_strings['LBL_OPT_IN'] = 'Zgoda na przetwarzanie danych osobowych wyrażona';
$app_strings['LBL_OPT_IN_CONFIRMED'] = 'Zgoda na przetwarzanie danych osobowych potwierdzona';
$app_strings['LBL_OPT_IN_OPT_OUT'] = 'Brak zgody na przetwarzanie danych osobowych';
$app_strings['LBL_OPT_IN_INVALID'] = 'Nieprawidłowy';

/** @see SugarEmailAddress */
$app_list_strings['email_settings_opt_in_dom'] = array(
    'not-opt-in' => 'Niedostępne',
    'opt-in' => 'Zgoda na przetwarzanie danych osobowych',
    'confirmed-opt-in' => 'Zgoda na przetwarzanie danych osobowych potwierdzona'
);

$app_list_strings['email_confirmed_opt_in_dom'] = array(
    'not-opt-in' => 'Brak zgody na przetwarzanie danych osobowych',
    'opt-in' => 'Zgoda na przetwarzanie danych osobowych',
    'confirmed-opt-in' => 'Zgoda na przetwarzanie danych osobowych potwierdzona'
);

$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL'] = 'Email w sprawie zgody na przetwarzanie danych osobowych został dodany do kolejki %s adresów. ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_NOT_OPT_IN'] = 'Nie można wysłać e-mail na %s adresu(ów), bo nie zarejestrowano dla nich zgody na przetwarzanie danych osobowych. ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_MISSING_EMAIL_ADDRESS_ID'] = '%s adres(ów) e-mail nie ma prawidłowego identyfikatora. ';

$app_strings['ERR_TWO_FACTOR_FAILED'] = 'Uwierzytelnianie dwuskładnikowe nie powiodło się';
$app_strings['ERR_TWO_FACTOR_CODE_SENT'] = 'Kod uwierzytelniania dwuskładnikowego został wysłany.';
$app_strings['ERR_TWO_FACTOR_CODE_FAILED'] = 'Kod uwierzytelniania dwuskładnikowego nie został wysłany.';
$app_strings['LBL_THANKS_FOR_SUBMITTING'] = 'Dziękujemy za przesłanie swojej opinii.';

$app_strings['ERR_IP_CHANGE'] = 'Twoja sesja został zakończona z powodu znaczącej zmiany twojego adresu IP';
$app_strings['ERR_RETURN'] = 'Powrót do strony głównej';


$app_list_strings['oauth2_grant_type_dom'] = array(
    'password' => 'Password grant',
    'client_credentials' => 'Poświadczenia klienta',
    'implicit' => 'Implicit grant',
    'authorization_code' => 'Kod autoryzacji'
);

$app_list_strings['oauth2_duration_units'] = [
    'minute' => 'minut',
    'hour' => 'godziny',
    'day' => 'dni',
    'week' => 'tygodni',
    'month' => 'miesiące',
];

$app_list_strings['search_controllers'] = [
    'Search' => 'Szukaj (nowe)',
    'UnifiedSearch' => 'Wyszukiwanie globalne Unified Search (starsze)'
];


$app_strings['LBL_DEFAULT_API_ERROR_TITLE'] = 'Błąd JSON API';
$app_strings['LBL_DEFAULT_API_ERROR_DETAIL'] = 'Wystąpił błąd API JSON.';
$app_strings['LBL_API_EXCEPTION_DETAIL'] = 'Wersja API: 8';
$app_strings['LBL_BAD_REQUEST_EXCEPTION_DETAIL'] = 'Proszę upewnić się, że pola wymagane zostały uzupełnione';
$app_strings['LBL_EMPTY_BODY_EXCEPTION_DETAIL'] = 'JSON API oczekuje, że treść żądania wysłana zostanie w formie JSON';
$app_strings['LBL_INVALID_JSON_API_REQUEST_EXCEPTION_DETAIL'] = 'Nie można sprawdzić poprawności Json Api Payload Request';
$app_strings['LBL_INVALID_JSON_API_RESPONSE_EXCEPTION_DETAIL'] = 'Nie można sprawdzić poprawności odpowiedzi Json Api Payload';
$app_strings['LBL_MODULE_NOT_FOUND_EXCEPTION_DETAIL'] = 'JSON API nie może odnaleźć zasobu';
$app_strings['LBL_NOT_ACCEPTABLE_EXCEPTION_DETAIL'] = 'JSON API oczekuje, że nagłówek "Akceptuj" będzie application/vnd.api+json';
$app_strings['LBL_UNSUPPORTED_MEDIA_TYPE_EXCEPTION_DETAIL'] = 'JSON API oczekuje, że nagłówek "Content-Type" będzie application/vnd.api+json';

$app_strings['MSG_BROWSER_NOTIFICATIONS_ENABLED'] = 'Powiadomienia na pulpicie zostały włączone dla tej przeglądarki.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_DISABLED'] = 'Powiadomienia na pulpicie zostały wyłączone dla tej przeglądarki. Ich ponowne włączenie jest możliwe w ustawieniach przeglądarki.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_UNSUPPORTED'] = 'Ta przeglądarka nie obsługuje powiadomień na pulpicie.';

$app_strings['LBL_GOOGLE_SYNC_ERR'] = 'BŁĄD synchronizacji SuiteCRM z Google';
$app_strings['LBL_THERE_WAS_AN_ERR'] = 'Wystąpił błąd: ';
$app_strings['LBL_CLICK_HERE'] = 'Kliknij tutaj';
$app_strings['LBL_TO_CONTINUE'] = ' aby kontynuować.';
$app_strings['LBL_OPT_OUT'] = 'Wypisz się';
$app_strings['LBL_INVALID_EMAIL'] = 'Nieprawidłowy';
$app_strings['LBL_PRIMARY'] = 'Pierwszy';
$app_strings['LBL_EMAIL_ADDRESS'] = 'Adres e-mail';

$app_strings['IMAP_HANDLER_ERROR'] = 'Błąd: {error}; klucz był: "{key}".';
$app_strings['IMAP_HANDLER_SUCCESS'] = 'OK: Przetestuj ustawienia, które zmieniono na "{key}"';
$app_strings['IMAP_HANDLER_ERROR_INVALID_REQUEST'] = 'Nieprawidłowe żądanie, użyj wartości "{var}".';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN_BY_KEY'] = 'Wystąpił nieznany błąd, klucz "{key}", nie został zapisany.';
$app_strings['IMAP_HANDLER_ERROR_NO_TEST_SET'] = 'Ustawienia testu nie istnieją.';
$app_strings['IMAP_HANDLER_ERROR_NO_KEY'] = 'Nie odnaleziono klucza.';
$app_strings['IMAP_HANDLER_ERROR_KEY_SAVE'] = 'Błąd zapisu klucza.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN'] = 'Nieznany błąd';
$app_strings['LBL_SEARCH_TITLE']                   = 'Szukaj';
$app_strings['LBL_SEARCH_TEXT_FIELD_TITLE_ATTR']   = 'Wprowadź kryteria wyszukiwania';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_TITLE_ATTR'] = 'Szukaj';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_VALUE']      = 'Szukaj';
$app_strings['LBL_SEARCH_QUERY']                   = 'Szukane wyrażenie: ';
$app_strings['LBL_SEARCH_RESULTS_PER_PAGE']        = 'Wyników na stronę: ';
$app_strings['LBL_SEARCH_ENGINE']                  = 'Silnik wyszukiwania: ';
$app_strings['LBL_SEARCH_TOTAL'] = 'Wszystkich wyników: ';
$app_strings['LBL_SEARCH_PREV'] = 'Poprzednie';
$app_strings['LBL_SEARCH_NEXT'] = 'Dalej';
$app_strings['LBL_SEARCH_PAGE'] = 'Strona ';
$app_strings['LBL_SEARCH_OF'] = ' z ';
$app_strings['LBL_INSIGHTS'] = 'Spostrzeżenia';
$app_strings['LBL_CHARTS'] = 'Wykresy';
$app_strings['LBL_CHART_NOT_FOUND'] = 'Nie znaleziono wykresu';
$app_strings['LBL_NO_DATA'] = 'Brak danych';
$app_strings['LBL_ERROR_FETCHING_METADATA'] = 'Wystąpił błąd podczas pobierania metadanych';
$app_strings['LBL_TOTAL'] = 'Razem';
$app_strings['LBL_ACTIONS'] = 'Działania';
$app_strings['LBL_SELECT_SUBPANEL_BANNER'] = 'Wybierz podpanele do wyświetlenia';
$app_strings['LBL_SELECT_ITEM'] = 'Wybierz element';
$app_strings['LBL_WIDGET_NOT_FOUND'] = 'Nie znaleziono widżetu';
$app_strings['LBL_BAD_CONFIG'] = 'Nieprawidłowa konfiguracja';
$app_strings['LBL_CONFIG_BAD_CONTEXT'] = 'Nieprawidłowa konfiguracja: kontekst skonfigurowany niepoprawnie';
$app_strings['LBL_CONFIG_NO_CONFIG'] = 'Nieprawidłowa konfiguracja: brakuje konfiguracji';
$app_strings['LBL_CONFIG_NO_STATISTICS_KEY'] = 'Nieprawidłowa konfiguracja: brak klucza statystycznego';
$app_strings['LBL_STATISTIC_ERROR'] = 'Błąd ładowania statystyki';
$app_strings['LBL_STATISTIC_ERROR_DESC'] = 'Błąd ładowania statystyki';
$app_strings['LBL_STATISTIC_ERROR_DESC_TOOLTIP'] = 'Błąd ładowania statystyki. Skontaktuj się z administratorem';
$app_strings['LBL_AVERAGE_CLOSED_WON_PER_YEAR'] = 'Średnia zrealizowanych szans sprzedaży w roku';
$app_strings['LBL_OPPORTUNITIES_TOTAL'] = 'Całkowita wartość Szansy Sprzedaży';
$app_strings['LBL_CASE_TOTAL_DAYS_OPEN'] = 'Całkowity czas od otwarcia (dni)';
$app_strings['LBL_DAYS_OPEN'] = 'Otwarta (dni)';
$app_strings['LBL_DAYS_IN_SALE_STAGE'] = 'Ta Szansa sprzedaży jest na tym etapie sprzedaży przez';
$app_strings['LBL_STAT_DAYS'] = 'dni';
$app_strings['LBL_CLOSED_PER_YEAR'] = 'Zamkniętych w roku';
$app_strings['LBL_WAS_OPEN'] = 'Ta sprawa była otwarta przez';
$app_strings['LBL_HAS_BEEN_OPEN'] = 'Ta sprawa jest otwarta przez';
$app_strings['LBL_NUMBER_OF_CASES_PER_ACCOUNT'] = 'Liczba spraw na kontrahenta';
$app_strings['LBL_TOTAL_CASES_FOR_THIS_ACCOUNT'] = 'Suma spraw dla tego kontrahenta: ';
$app_strings['LBL_NONE_OUTSTANDING'] = 'Brak';
$app_strings['LBL_VALIDATION_ERROR_REQUIRED'] = 'Brakuje wymaganego pola: {{fields.field.label}}';
$app_strings['LBL_VALIDATION_ERROR_CURRENCY_FORMAT'] = "Nieprawidłowy format waluty. Oczekiwano: '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_INT_FORMAT'] = "Nieprawidłowy format int. Oczekiwano: '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_FLOAT_FORMAT'] = "Nieprawidłowy format zmiennoprzecinkowy. Oczekiwano: '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_DATE_FORMAT'] = "Nieprawidłowy format daty. Oczekiwano: '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_DATETIME_FORMAT'] = "Nieprawidłowy format daty i czasu. Oczekiwano: '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_EMAIL_FORMAT'] = "Nieprawidłowy format e-mail. Oczekiwano: '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_PHONE_FORMAT'] = "Nieprawidłowy format numeru telefonu.";
$app_strings['LBL_VALIDATION_ERROR_MIN'] = "Nieprawidłowa wartość. Wartość musi być większa lub równa '{{context.min}}'";
$app_strings['LBL_VALIDATION_ERROR_MAX'] = "Nieprawidłowa wartość. Wartość musi być mniejsza lub równa '{{context.max}}'";
$app_strings['LBL_MULTIPLE_PRIMARY_EMAIL_VALIDATION_ERROR'] = "Tylko jeden adres e-mail może być oznaczony jako podstawowy";
$app_strings['LBL_DUPLICATE_EMAIL_VALIDATION_ERROR'] = "Zduplikowane adresy e-mail nie są dozwolone";
$app_strings['LBL_NO_PRIMARY_EMAIL_VALIDATION_ERROR'] = "Jeden adres e-mail powinien być oznaczony jako podstawowy";
$app_strings['LBL_VALIDATION_ERRORS'] = 'Istnieją błędy walidacji, nie można wykonać akcji.';
$app_strings['LBL_TYPE_TO_SEARCH'] = 'Wpisz aby wyszukać...';
$app_strings['LBL_SEARCHING'] = 'wyszukiwanie...';
$app_strings['LBL_NOT_FOUND'] = 'Nie znaleziono.';
$app_strings['LBL_SEARCH_ERROR'] = 'Błąd wyszukiwania.';
$app_strings['LBL_FOUND'] = 'Znaleziono';
$app_strings['LBL_GET_RECORD_LIST_ERROR'] = 'Wystąpił błąd podczas pobierania wpisów';
$app_strings['LBL_NUMBER_OF_RECORDS'] = 'Liczba wpisów';
$app_strings['LBL_FORWARD_SLASH'] = '/';
$app_strings['LBL_CASES_INSIGHT'] = ' {{fields.cases.value}} ( {{fields.default.value}} )';
$app_strings['LBL_INVOICES_INSIGHT'] = ' {{fields.invoices.value}} ( {{fields.default.value}} )';
$app_strings['LBL_CONTRACT_RENEWAL_TOOLTIP'] = 'Data najbliższego przedłużenia umowy';
$app_strings['LBL_INVOICES_OVERDUE_TOOLTIP'] = 'Całkowita liczba zaległych faktur';
$app_strings['LBL_ACTIVITIES_NEXT_DATE_TOOLTIP'] = 'Data następnej interakcji';
$app_strings['LBL_CAMPAIGN_LAST_RECEIVED_TOOLTIP'] = 'Data otrzymania ostatniej kampanii';
$app_strings['LBL_OPEN_CASES_COUNT_TOOLTIP'] = 'Łączna liczba otwartych spraw';
$app_strings['LBL_EVENTS_LAST_DATE_TOOLTIP'] = 'Data ostatniego wydarzenia';
$app_strings['LBL_HISTORY_LAST_DATE_TOOLTIP'] = 'Data ostatniej interakcji';
$app_strings['LBL_OPPORTUNITIES_TOTAL_SUM_TOOLTIP'] = 'Suma Szans Sprzedaży';
$app_strings['LBL_QUOTES_EXPIRY_TOOLTIP'] = 'Data wygaśnięcia oferty';
$app_strings['LBL_DEFAULT_TOTAL_TOOLTIP'] = 'Całkowita liczba wpisów';
$app_strings['LBL_CONTRACT_RENEWAL'] = 'Data odnowienia';
$app_strings['LBL_INVOICES_OVERDUE'] = 'Łącznie zaległe';
$app_strings['LBL_ACTIVITIES_NEXT_DATE'] = 'Data następnej aktywności';
$app_strings['LBL_CAMPAIGN_LAST_RECEIVED'] = 'Ostatnio uczestniczono';
$app_strings['LBL_OPEN_CASES_COUNT'] = 'Otwarte Sprawy';
$app_strings['LBL_EVENTS_LAST_DATE'] = 'Ostatnie uczestnictwo w wydarzeniu';
$app_strings['LBL_HISTORY_LAST_DATE'] = 'Ostatni punkt kontaktu z klientem';
$app_strings['LBL_OPPORTUNITIES_TOTAL_SUM'] = 'Wartość całkowita';
$app_strings['LBL_QUOTES_EXPIRY'] = 'Następna data ważności';
$app_strings['LBL_DEFAULT_TOTAL'] = 'Razem';
$app_strings['AOS_Contracts'] = 'Umowy';
$app_strings['AOS_Quotes'] = 'Oferty';
$app_strings['AOS_Invoices'] = 'Faktury';
$app_strings['LBL_PHOTO'] = 'Zdjęcie';
$app_strings['LBL_CASE_UPDATES'] = 'Aktualizacje Sprawy';
$app_strings['LBL_CASE_UPDATE_SUBMITTED'] = 'Wprowadzono aktualizację sprawy';
$app_strings['LBL_SUMMARY_DEFAULT'] = "{{fields.name.value}}";
$app_strings['LBL_SUMMARY_PERSON'] = "{{fields.salutation.value}} {{fields.first_name.value}} {{fields.last_name.value}}";
$app_strings['LBL_CREATE'] = 'Utwórz';
$app_strings['LBL_SAVED_FILTER_SAVED'] = 'Filtr zapisany pomyślnie';
$app_strings['LBL_FILTER_ID_NOT_DEFINED'] = 'Nie zdefiniowano identyfikatora filtra';
$app_strings['LBL_GENERIC_CONFIRMATION'] = 'Czy chcesz kontynuować czynność?';
$app_strings['LBL_SHOW_MORE'] = 'Pokaż więcej';
$app_strings['LBL_SHOW_LESS'] = 'Pokaż mniej';
$app_strings['LBL_LOAD_MORE'] = 'Wczytaj więcej';
$app_strings['LBL_EMPTY'] = '-- Puste -- ';
$app_strings['LBL_OPERATOR'] = 'Operator';
$app_strings['LBL_START'] = 'Start';
$app_strings['LBL_END'] = 'Zakończ';
$app_strings['LBL_LINE_ITEMS_FIELD_CONFIG'] = 'Błędna konfiguracja';


$app_strings['LBL_ACTION_SUCCESS'] = 'Akcja zakończona sukcesem';

$app_strings['LBL_YES'] = 'Tak';
$app_strings['LBL_NO'] = 'Nie';

$app_list_strings['sort_order'] = [];
$app_list_strings['sort_order']['asc'] = 'Rosnąco';
$app_list_strings['sort_order']['desc'] = 'Malejąco';

// Labels used by subpanel unlink relationship process
$app_strings['LBL_LINK'] = 'Łącze';
$app_strings['LBL_UNLINK_RECORD'] = 'Odłącz wpis';
$app_strings['LBL_EDIT_RECORD'] = 'Edytuj wpis';
$app_strings['LBL_UNLINK_RELATIONSHIP_CONFIRM'] = 'Czy na pewno chcesz odłączyć ten wpis? Zlikwidowane zostaną tylko relacje, ale sam wpis nie zostanie usunięty.';
$app_strings['LBL_UNLINK_RELATIONSHIP_SUCCESS'] = 'Wpis odłączony pomyślnie.';
$app_strings['LBL_UNLINK_RELATIONSHIP_FAILED'] = 'Wystąpił błąd podczas odłączania tego wpisu.';
$app_strings['LBL_LINK_RELATIONSHIP_SUCCESS'] = 'Relacja powiązana pomyślnie.';
$app_strings['LBL_LINK_RELATIONSHIP_FAILED'] = 'Wystąpił błąd podczas łączenia tej relacji.';
$app_strings['LBL_MODULE_NOT_FOUND'] = 'Nie znaleziono modułu.';
$app_strings['LBL_RECORD_NOT_FOUND'] = 'Nie można załadować wpisu';
$app_strings['LBL_RELATIONSHIP_LOAD_ERROR'] = 'Nie można załadować relacji';
$app_strings['LBL_NOT_LINKED'] = 'Nie można odłączyć. Wpisy nie są powiązane';
$app_strings['LBL_ACCESS_DENIED'] = 'Odmowa dostępu';
$app_strings['LBL_ADD_RECORDS_TO_TARGET_LIST_SUCCESS'] = 'Wpisy pomyślnie dodane do listy docelowej.';
$app_strings['LBL_ADD_RECORDS_TO_TARGET_LIST_FAILED'] = 'Wystąpił błąd podczas dodawania wpisów do listy docelowej.';
$app_strings['LBL_ADD_CONTACTS_TO_TARGET_LIST_SUCCESS'] = 'Kontakty pomyślnie dodane do listy docelowej.';
$app_strings['LBL_ADD_CONTACTS_TO_TARGET_LIST_FAILED'] = 'Wystąpił błąd podczas dodawania kontaktów do listy docelowej.';
$app_strings['LBL_CHANGED_TO_TEXT'] = 'zmienione na';
$app_strings['LBL_RECORD_CHANGED'] = 'Wpis zaktualizowany';
$app_strings['LBL_CREATE'] = "Utwórz";
$app_strings['LBL_USE_ADVANCED_SEARCH'] = 'Użyj zaawansowanego wyszukiwania';
$app_strings['LBL_USE_BASIC_SEARCH'] = 'Użyj podstawowego wyszukiwania';
$app_strings['LBL_NO_MODULE_SELECTED'] = 'Nie wybrano żadnego modułu';
$app_strings['LBL_CLOSE_MENU'] = 'Zamknij menu';
$app_strings['LOGIN_INCORRECT'] = 'Login credentials incorrect, please try again.';
$app_strings['LOGIN_TOO_MANY_FAILED'] = 'Too many failed login attempts, please try again later.';

// PDF Engines
$app_strings['LBL_LEGACY_MPDF_ENGINE'] = 'Starszy silnik MPDF';
$app_strings['LBL_TCPDF_ENGINE'] = 'Silnik TCPDF';


$app_strings['ERR_INVALID_FILE_NAME'] = 'Nieprawidłowa nazwa pliku:';
$app_strings['LBL_LOGGER_VALID_FILENAME_CHARACTERS'] = 'Można wykorzystać wyłącznie znaki alfanumeryczne, a także \'.\' , \'-\' oraz \'_\'';
$app_strings['LBL_LOGGER_INVALID_FILENAME'] = 'Nieprawidłowa nazwa pliku importu';
