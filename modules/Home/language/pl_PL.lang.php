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
    'LBL_MODULE_NAME' => 'Strona główna',
    'LBL_NEW_FORM_TITLE' => 'Nowy Kontakt',
    'LBL_FIRST_NAME' => 'Imię:',
    'LBL_LAST_NAME' => 'Nazwisko:',
    'LBL_LIST_LAST_NAME' => 'Nazwisko',
    'LBL_PHONE' => 'Telefon:',
    'LBL_EMAIL_ADDRESS' => 'Adres e-mail:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Mój pipeline',
    'LBL_PIPELINE_FORM_TITLE' => 'Pipeline - etapy sprzedaży',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'Lejkowy wykres etapów sprzedaży',
    'LNK_NEW_CONTACT' => 'Utwórz Kontakt',
    'LNK_NEW_ACCOUNT' => 'Utwórz kontrahenta',
    'LNK_NEW_OPPORTUNITY' => 'Utwórz Szansę sprzedaży',
    'LNK_NEW_LEAD' => 'Utwórz Potencjalnego Klienta',
    'LNK_NEW_CASE' => 'Utwórz Sprawę',
    'LNK_NEW_NOTE' => 'Utwórz Notatkę lub Załącznik',
    'LNK_NEW_CALL' => 'Utwórz Rozmowę telefoniczną',
    'LNK_NEW_EMAIL' => 'Archiwum email',
    'LNK_NEW_MEETING' => 'Zaplanuj Spotkanie',
    'LNK_NEW_TASK' => 'Utwórz Zadanie',
    'LNK_NEW_BUG' => 'Zgłoś Błąd',
    'LNK_NEW_SEND_EMAIL' => 'Napisz e-mail',
    'LBL_NO_ACCESS' => 'Nie masz dostępu do tego obszaru. Skontaktuj się z administratorem, aby uzyskać dostęp.',
    'LBL_NO_RESULTS_IN_MODULE' => '-- Brak wyników --',
    'LBL_NO_RESULTS' => '<h2>Nie było wyników wyszukiwania. Przeszukaj jeszcze raz.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Podpowiedź:</h3><ul><li>Upewnij się, że wybrałeś odpowiednią kategorię powyżej</li><li>Określ swoje kryteria wyszukiwania.</li><li>Jeżeli nadal nie możesz otrzymać żadnych wyników, spróbuj zaawansowanego wyszukiwania w tym module.</li></ul>',

    'LBL_ADD_DASHLETS' => 'Dodaj widżety SuiteCRM',
    'LBL_WEBSITE_TITLE' => 'Strona www',
    'LBL_RSS_TITLE' => 'Aktualności',
    'LBL_CLOSE_DASHLETS' => 'Zamknij',
    'LBL_OPTIONS' => 'Opcje',
    // dashlet search fields
    'LBL_TODAY' => 'Dziś',
    'LBL_YESTERDAY' => 'Wczoraj',
    'LBL_TOMORROW' => 'Jutro',
    'LBL_NEXT_WEEK' => 'W następnym tygodniu',
    'LBL_LAST_7_DAYS' => 'Ostatnie 7 dni',
    'LBL_NEXT_7_DAYS' => 'Następne 7 dni',
    'LBL_LAST_MONTH' => 'Ostatni miesiąc',
    'LBL_NEXT_MONTH' => 'Następny miesiąc',
    'LBL_LAST_YEAR' => 'Ostatni rok',
    'LBL_NEXT_YEAR' => 'Następny rok',
    'LBL_LAST_30_DAYS' => 'Ostatnie 30 Dni',
    'LBL_NEXT_30_DAYS' => 'Następne 30 dni',
    'LBL_THIS_MONTH' => 'Ten miesiąc',
    'LBL_THIS_YEAR' => 'Ten rok',

    'LBL_MODULES' => 'Moduły',
    'LBL_CHARTS' => 'Wykresy',
    'LBL_TOOLS' => 'Narzędzia',
    'LBL_WEB' => 'Sieć',
    'LBL_SEARCH_RESULTS' => 'Wyniki wyszukiwania',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'Widoki modułu',
        'Portal' => 'Portal',
        'Charts' => 'Wykresy',
        'Tools' => 'Narzędzia',
        'Miscellaneous' => 'Różne'
    ),
    'LBL_ADDING_DASHLET' => 'Dodawanie widżetu SuiteCRM...',
    'LBL_ADDED_DASHLET' => 'Widżet SuiteCRM została dodany',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Czy potwierdzasz usunięcie widżetu SuiteCRM?',
    'LBL_REMOVING_DASHLET' => 'Usuwanie widżetu SuiteCRM...',
    'LBL_REMOVED_DASHLET' => 'Widżet SuiteCRM została usunięty',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Ogólne',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtry wyszukiwania',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Tylko moje elementy',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Tytuł',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Wyświetl wiersze',

    'LBL_DASHLET_DELETE' => 'Usuń widżet SuiteCRM',
    'LBL_DASHLET_REFRESH' => 'Odśwież widżetu SuiteCRM',
    'LBL_DASHLET_EDIT' => 'Edytuj widżetu SuiteCRM',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'Mój CRM',
    'LBL_CLOSE_SITEMAP' => 'Zamknij',

    'LBL_SEARCH' => 'Szukaj',
    'LBL_CLEAR' => 'Wyczyść',

    'LBL_BASIC_CHARTS' => 'Podstawowe wykresy',

    'LBL_DASHLET_SEARCH' => 'Znajdź widżet SuiteCRM',

//ABOUT page
    'LBL_VERSION' => 'Wersja',
    'LBL_BUILD' => 'Kompilacja',

    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - dostawca podstawy CE',

    'LBL_DASHLET_TITLE' => 'Moje strony',
    'LBL_DASHLET_OPT_TITLE' => 'Tytuł',
    'LBL_DASHLET_INCORRECT_URL' => 'Określono nieprawidłową lokalizację strony internetowej',
    'LBL_DASHLET_OPT_URL' => 'Lokalizacja strony www',
    'LBL_DASHLET_OPT_HEIGHT' => 'Wysokość widżetu (w pikselach)',
    'LBL_DASHLET_SUITE_NEWS' => 'Aktualności SuiteCRM',
    'LBL_DASHLET_DISCOVER_SUITE' => 'Odkryj SuiteCRM',
    'LBL_BASIC_SEARCH' => 'Szybki filtr wyszukiwania' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Zaawansowany filtr wyszukiwania' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Ikona strony głównej',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Szybko wrócić do strony głównej jednym kliknięciem.',
    'LBL_TOUR_MODULES' => 'Moduły',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'Wszystkie ważne moduły znajdziesz tutaj.',
    'LBL_TOUR_MORE' => 'Więcej Modułów',
    'LBL_TOUR_MORE_DESCRIPTION' => 'Twoje pozostałe moduły są tutaj.',
    'LBL_TOUR_SEARCH' => 'Wyszukiwanie Pełnotekstowe',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Wyszukiwanie jest teraz zdecydowanie lepsze.',
    'LBL_TOUR_NOTIFICATIONS' => 'Powiadomienia',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'Tu będą pojawiać się powiadomienia aplikacji SuiteCRM.',
    'LBL_TOUR_PROFILE' => 'Profil',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Profil dostępu, ustawienia i wylogowanie.',
    'LBL_TOUR_QUICKCREATE' => 'Utwórz Szybko',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Szybkie tworzenie rekordów bez utraty miejsca.',
    'LBL_TOUR_FOOTER' => 'Zwijana stopka',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Szybko rozwijaj i zwijaj stopkę.',
    'LBL_TOUR_CUSTOM' => 'Niestandardowe aplikacje',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Niestandardowe integracje znajdą się tutaj.',
    'LBL_TOUR_BRAND' => 'Twoja Marka',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Twoje logo znajdzie się tutaj. Aby uzyskać więcej informacji najedź myszą.',
    'LBL_TOUR_WELCOME' => 'Witamy w SuiteCRM',
    'LBL_TOUR_WATCH' => 'Zobacz co nowego w SuiteCRM',
    'LBL_TOUR_FEATURES' => '<ul style=""> <li class="icon-ok"> Nowy, uproszczony pasek nawigacji</li> <li class="icon-ok"> Nowe, zwijane stopki </li> <li class="icon-ok"> Ulepszone wyszukiwanie</li> <li class="icon-ok"> Zaktualizowane menu Akcje</li></ul> <p>i wiele innych!</p>',
    'LBL_TOUR_VISIT' => 'Aby uzyskać więcej informacji odwiedź',
    'LBL_TOUR_DONE' => 'Skończone!',
    'LBL_TOUR_REFERENCE_1' => 'Zawsze możesz odnieść się do naszej',
    'LBL_TOUR_REFERENCE_2' => 'poprzez łącze „Wsparcie” w zakładce profilu.',
    'LNK_TOUR_DOCUMENTATION' => 'dokumentację',
    'LBL_TOUR_CALENDAR_URL_1' => 'Czy udostępniasz swój kalendarz SuiteCRM w zewnętrznych aplikacjach, takich jak Microsoft Outlook lub Exchange? Jeśli tak, masz do tego celu nowy, bardziej bezpieczny adres URL zawierający klucz prywatny, który zapobiega nieupoważnionym na publikowanie twojego kalendarza.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Pobierz URL Twojego nowego udostępnionego kalendarza.',
    'LBL_CONTRIBUTORS' => 'Twórcy',
    'LBL_ABOUT_SUITE' => 'O SuiteCRM',
    'LBL_PARTNERS' => 'Partnerzy',
    'LBL_FEATURING' => 'Moduły AOS, AOW, AOR, AOP, AOE i Zmiana harmonogramu napisane przez SalesAgility.',
    'LBL_EDIT_ALL_RECURRENCES' => 'Edytuj wszystkie powtórzenia',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Usuń wszystkie powtórzenia',
    'LBL_CONFIRM_REMOVE' => 'Czy na pewno chcesz usunąć ten wpis?',

    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - otwarte oprogramowanie CRM dla świata',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite napisany przez Jasona Eggersa',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps napisany przez Jeffreya J. Waltersa',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM LOGO autorstwa Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Wkład do wersji SuiteCRM 7.3 - ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'Pola obliczane Workflow dostarczone przez diligent technology & business consulting GmbH',

    'LBL_LANGUAGE_ABOUT' => 'O tłumaczeniach SuiteCRM',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'Wspólne tłumaczenie przez społeczność SuiteCRM',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'Tłumaczenie za pomocą Crowdin',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM został opublikowany na licencji open source - AGPLv3',
    'LBL_ABOUT_SUITE_4' => 'Cały kod SuiteCRM zarządzany i rozwijany w tym projekcie zostanie wydany jako open source - AGPLv3',
    'LBL_ABOUT_SUITE_5' => 'Pomoc techniczna SuiteCRM jest dostępna w opcji darmowej jak i płatnej',

    'LBL_SUITE_PARTNERS' => 'Mamy lojalnych partnerów SuiteCRM, którzy są pasjonatami wolnego oprogramowania. Aby wyświetlić listę naszych partnerów, odwiedź naszą stronę internetową.',

    'LBL_SAVE_BUTTON' => 'Zapisz',
    'LBL_DELETE_BUTTON' => 'Usuń',
    'LBL_APPLY_BUTTON' => 'Zastosuj',
    'LBL_SEND_INVITES' => 'Zapisz i wyślij zaproszenia',
    'LBL_CANCEL_BUTTON' => 'Anuluj',
    'LBL_CLOSE_BUTTON' => 'Zamknij',

    'LBL_CREATE_NEW_RECORD' => 'Utwórz wydarzenie',
    'LBL_CREATE_CALL' => 'Zaplanuj rozmowę telefoniczną',
    'LBL_CREATE_MEETING' => 'Zaplanuj Spotkanie',

    'LBL_GENERAL_TAB' => 'Szczegóły',
    'LBL_PARTICIPANTS_TAB' => 'Zaproszenia',
    'LBL_REPEAT_TAB' => 'Cykliczność',

    'LBL_REPEAT_TYPE' => 'Powtórz',
    'LBL_REPEAT_INTERVAL' => 'Każdy',
    'LBL_REPEAT_END' => 'Zakończ',
    'LBL_REPEAT_END_AFTER' => 'Po',
    'LBL_REPEAT_OCCURRENCES' => 'powtórzenia',
    'LBL_REPEAT_END_BY' => 'Przez',
    'LBL_REPEAT_DOW' => 'Włączony',
    'LBL_REPEAT_UNTIL' => 'Powtarzaj aż do',
    'LBL_REPEAT_COUNT' => 'Liczba powtórzeń',
    'LBL_REPEAT_LIMIT_ERROR' => 'Twoje żądanie miało utworzyć więcej niż $limit spotkań.',

    //Events
    'LNK_EVENT' => 'Zdarzenie',
    'LNK_EVENT_VIEW' => 'Zobacz wydarzenie',
    'LBL_DATE' => 'Data: ',
    'LBL_DURATION' => 'Czas Trwania: ',
    'LBL_NAME' => 'Tytuł: ',
    'LBL_HOUR_ABBREV' => 'godzina',
    'LBL_HOURS_ABBREV' => 'godziny',
    'LBL_MINSS_ABBREV' => 'minut',
    'LBL_LOCATION' => 'Lokalizacja:',
    'LBL_STATUS' => 'Status',
    'LBL_DESCRIPTION' => 'Opis:',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'Wystąpił błąd podczas wyszukiwania. Składnia kwerendy może być nieprawidłowa.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'Nie można odnaleźć żądanego silnika wyszukiwania. Spróbuj ponowić wyszukiwanie.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Nie udało się połączyć z serwerem Elasticsearch.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'Wystąpił błąd wewnętrzny wyszukiwania.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'Wystąpił nieznany błąd podczas wykonywania wyszukiwania.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Jeśli problem będzie się powtarzał, skontaktuj się z administratorem. Więcej informacji w dziennikach (logach).',

    'LBL_ELASTIC_SEARCH_DEFAULT' => 'Brak wyników spełniających podane kryteria wyszukiwania. Spróbuj rozszerzyć wyszukiwanie.',

    'LNK_TASK_VIEW' => 'Podgląd zadania',
);
