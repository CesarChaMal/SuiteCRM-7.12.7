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
    'LBL_MODULE_NAME' => 'Strona g????wna',
    'LBL_NEW_FORM_TITLE' => 'Nowy Kontakt',
    'LBL_FIRST_NAME' => 'Imi??:',
    'LBL_LAST_NAME' => 'Nazwisko:',
    'LBL_LIST_LAST_NAME' => 'Nazwisko',
    'LBL_PHONE' => 'Telefon:',
    'LBL_EMAIL_ADDRESS' => 'Adres e-mail:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'M??j pipeline',
    'LBL_PIPELINE_FORM_TITLE' => 'Pipeline - etapy sprzeda??y',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'Lejkowy wykres etap??w sprzeda??y',
    'LNK_NEW_CONTACT' => 'Utw??rz Kontakt',
    'LNK_NEW_ACCOUNT' => 'Utw??rz kontrahenta',
    'LNK_NEW_OPPORTUNITY' => 'Utw??rz Szans?? sprzeda??y',
    'LNK_NEW_LEAD' => 'Utw??rz Potencjalnego Klienta',
    'LNK_NEW_CASE' => 'Utw??rz Spraw??',
    'LNK_NEW_NOTE' => 'Utw??rz Notatk?? lub Za????cznik',
    'LNK_NEW_CALL' => 'Utw??rz Rozmow?? telefoniczn??',
    'LNK_NEW_EMAIL' => 'Archiwum email',
    'LNK_NEW_MEETING' => 'Zaplanuj Spotkanie',
    'LNK_NEW_TASK' => 'Utw??rz Zadanie',
    'LNK_NEW_BUG' => 'Zg??o?? B????d',
    'LNK_NEW_SEND_EMAIL' => 'Napisz e-mail',
    'LBL_NO_ACCESS' => 'Nie masz dost??pu do tego obszaru. Skontaktuj si?? z administratorem, aby uzyska?? dost??p.',
    'LBL_NO_RESULTS_IN_MODULE' => '-- Brak wynik??w --',
    'LBL_NO_RESULTS' => '<h2>Nie by??o wynik??w wyszukiwania. Przeszukaj jeszcze raz.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Podpowied??:</h3><ul><li>Upewnij si??, ??e wybra??e?? odpowiedni?? kategori?? powy??ej</li><li>Okre??l swoje kryteria wyszukiwania.</li><li>Je??eli nadal nie mo??esz otrzyma?? ??adnych wynik??w, spr??buj zaawansowanego wyszukiwania w tym module.</li></ul>',

    'LBL_ADD_DASHLETS' => 'Dodaj wid??ety SuiteCRM',
    'LBL_WEBSITE_TITLE' => 'Strona www',
    'LBL_RSS_TITLE' => 'Aktualno??ci',
    'LBL_CLOSE_DASHLETS' => 'Zamknij',
    'LBL_OPTIONS' => 'Opcje',
    // dashlet search fields
    'LBL_TODAY' => 'Dzi??',
    'LBL_YESTERDAY' => 'Wczoraj',
    'LBL_TOMORROW' => 'Jutro',
    'LBL_NEXT_WEEK' => 'W nast??pnym tygodniu',
    'LBL_LAST_7_DAYS' => 'Ostatnie 7 dni',
    'LBL_NEXT_7_DAYS' => 'Nast??pne 7 dni',
    'LBL_LAST_MONTH' => 'Ostatni miesi??c',
    'LBL_NEXT_MONTH' => 'Nast??pny miesi??c',
    'LBL_LAST_YEAR' => 'Ostatni rok',
    'LBL_NEXT_YEAR' => 'Nast??pny rok',
    'LBL_LAST_30_DAYS' => 'Ostatnie 30 Dni',
    'LBL_NEXT_30_DAYS' => 'Nast??pne 30 dni',
    'LBL_THIS_MONTH' => 'Ten miesi??c',
    'LBL_THIS_YEAR' => 'Ten rok',

    'LBL_MODULES' => 'Modu??y',
    'LBL_CHARTS' => 'Wykresy',
    'LBL_TOOLS' => 'Narz??dzia',
    'LBL_WEB' => 'Sie??',
    'LBL_SEARCH_RESULTS' => 'Wyniki wyszukiwania',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'Widoki modu??u',
        'Portal' => 'Portal',
        'Charts' => 'Wykresy',
        'Tools' => 'Narz??dzia',
        'Miscellaneous' => 'R????ne'
    ),
    'LBL_ADDING_DASHLET' => 'Dodawanie wid??etu SuiteCRM...',
    'LBL_ADDED_DASHLET' => 'Wid??et SuiteCRM zosta??a dodany',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Czy potwierdzasz usuni??cie wid??etu SuiteCRM?',
    'LBL_REMOVING_DASHLET' => 'Usuwanie wid??etu SuiteCRM...',
    'LBL_REMOVED_DASHLET' => 'Wid??et SuiteCRM zosta??a usuni??ty',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Og??lne',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtry wyszukiwania',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Tylko moje elementy',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Tytu??',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Wy??wietl wiersze',

    'LBL_DASHLET_DELETE' => 'Usu?? wid??et SuiteCRM',
    'LBL_DASHLET_REFRESH' => 'Od??wie?? wid??etu SuiteCRM',
    'LBL_DASHLET_EDIT' => 'Edytuj wid??etu SuiteCRM',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'M??j CRM',
    'LBL_CLOSE_SITEMAP' => 'Zamknij',

    'LBL_SEARCH' => 'Szukaj',
    'LBL_CLEAR' => 'Wyczy????',

    'LBL_BASIC_CHARTS' => 'Podstawowe wykresy',

    'LBL_DASHLET_SEARCH' => 'Znajd?? wid??et SuiteCRM',

//ABOUT page
    'LBL_VERSION' => 'Wersja',
    'LBL_BUILD' => 'Kompilacja',

    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - dostawca podstawy CE',

    'LBL_DASHLET_TITLE' => 'Moje strony',
    'LBL_DASHLET_OPT_TITLE' => 'Tytu??',
    'LBL_DASHLET_INCORRECT_URL' => 'Okre??lono nieprawid??ow?? lokalizacj?? strony internetowej',
    'LBL_DASHLET_OPT_URL' => 'Lokalizacja strony www',
    'LBL_DASHLET_OPT_HEIGHT' => 'Wysoko???? wid??etu (w pikselach)',
    'LBL_DASHLET_SUITE_NEWS' => 'Aktualno??ci SuiteCRM',
    'LBL_DASHLET_DISCOVER_SUITE' => 'Odkryj SuiteCRM',
    'LBL_BASIC_SEARCH' => 'Szybki filtr wyszukiwania' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Zaawansowany filtr wyszukiwania' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Ikona strony g????wnej',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Szybko wr??ci?? do strony g????wnej jednym klikni??ciem.',
    'LBL_TOUR_MODULES' => 'Modu??y',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'Wszystkie wa??ne modu??y znajdziesz tutaj.',
    'LBL_TOUR_MORE' => 'Wi??cej Modu????w',
    'LBL_TOUR_MORE_DESCRIPTION' => 'Twoje pozosta??e modu??y s?? tutaj.',
    'LBL_TOUR_SEARCH' => 'Wyszukiwanie Pe??notekstowe',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Wyszukiwanie jest teraz zdecydowanie lepsze.',
    'LBL_TOUR_NOTIFICATIONS' => 'Powiadomienia',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'Tu b??d?? pojawia?? si?? powiadomienia aplikacji SuiteCRM.',
    'LBL_TOUR_PROFILE' => 'Profil',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Profil dost??pu, ustawienia i wylogowanie.',
    'LBL_TOUR_QUICKCREATE' => 'Utw??rz Szybko',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Szybkie tworzenie rekord??w bez utraty miejsca.',
    'LBL_TOUR_FOOTER' => 'Zwijana stopka',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Szybko rozwijaj i zwijaj stopk??.',
    'LBL_TOUR_CUSTOM' => 'Niestandardowe aplikacje',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Niestandardowe integracje znajd?? si?? tutaj.',
    'LBL_TOUR_BRAND' => 'Twoja Marka',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Twoje logo znajdzie si?? tutaj. Aby uzyska?? wi??cej informacji najed?? mysz??.',
    'LBL_TOUR_WELCOME' => 'Witamy w SuiteCRM',
    'LBL_TOUR_WATCH' => 'Zobacz co nowego w SuiteCRM',
    'LBL_TOUR_FEATURES' => '<ul style=""> <li class="icon-ok"> Nowy, uproszczony pasek nawigacji</li> <li class="icon-ok"> Nowe, zwijane stopki </li> <li class="icon-ok"> Ulepszone wyszukiwanie</li> <li class="icon-ok"> Zaktualizowane menu Akcje</li></ul> <p>i wiele innych!</p>',
    'LBL_TOUR_VISIT' => 'Aby uzyska?? wi??cej informacji odwied??',
    'LBL_TOUR_DONE' => 'Sko??czone!',
    'LBL_TOUR_REFERENCE_1' => 'Zawsze mo??esz odnie???? si?? do naszej',
    'LBL_TOUR_REFERENCE_2' => 'poprzez ????cze ???Wsparcie??? w zak??adce profilu.',
    'LNK_TOUR_DOCUMENTATION' => 'dokumentacj??',
    'LBL_TOUR_CALENDAR_URL_1' => 'Czy udost??pniasz sw??j kalendarz SuiteCRM w zewn??trznych aplikacjach, takich jak Microsoft Outlook lub Exchange? Je??li tak, masz do tego celu nowy, bardziej bezpieczny adres URL zawieraj??cy klucz prywatny, kt??ry zapobiega nieupowa??nionym na publikowanie twojego kalendarza.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Pobierz URL Twojego nowego udost??pnionego kalendarza.',
    'LBL_CONTRIBUTORS' => 'Tw??rcy',
    'LBL_ABOUT_SUITE' => 'O SuiteCRM',
    'LBL_PARTNERS' => 'Partnerzy',
    'LBL_FEATURING' => 'Modu??y AOS, AOW, AOR, AOP, AOE i Zmiana harmonogramu napisane przez SalesAgility.',
    'LBL_EDIT_ALL_RECURRENCES' => 'Edytuj wszystkie powt??rzenia',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Usu?? wszystkie powt??rzenia',
    'LBL_CONFIRM_REMOVE' => 'Czy na pewno chcesz usun???? ten wpis?',

    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - otwarte oprogramowanie CRM dla ??wiata',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite napisany przez Jasona Eggersa',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps napisany przez Jeffreya J. Waltersa',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM LOGO autorstwa Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Wk??ad do wersji SuiteCRM 7.3 - ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'Pola obliczane Workflow dostarczone przez diligent technology & business consulting GmbH',

    'LBL_LANGUAGE_ABOUT' => 'O t??umaczeniach SuiteCRM',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'Wsp??lne t??umaczenie przez spo??eczno???? SuiteCRM',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'T??umaczenie za pomoc?? Crowdin',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM zosta?? opublikowany na licencji open source - AGPLv3',
    'LBL_ABOUT_SUITE_4' => 'Ca??y kod SuiteCRM zarz??dzany i rozwijany w tym projekcie zostanie wydany jako open source - AGPLv3',
    'LBL_ABOUT_SUITE_5' => 'Pomoc techniczna SuiteCRM jest dost??pna w opcji darmowej jak i p??atnej',

    'LBL_SUITE_PARTNERS' => 'Mamy lojalnych partner??w SuiteCRM, kt??rzy s?? pasjonatami wolnego oprogramowania. Aby wy??wietli?? list?? naszych partner??w, odwied?? nasz?? stron?? internetow??.',

    'LBL_SAVE_BUTTON' => 'Zapisz',
    'LBL_DELETE_BUTTON' => 'Usu??',
    'LBL_APPLY_BUTTON' => 'Zastosuj',
    'LBL_SEND_INVITES' => 'Zapisz i wy??lij zaproszenia',
    'LBL_CANCEL_BUTTON' => 'Anuluj',
    'LBL_CLOSE_BUTTON' => 'Zamknij',

    'LBL_CREATE_NEW_RECORD' => 'Utw??rz wydarzenie',
    'LBL_CREATE_CALL' => 'Zaplanuj rozmow?? telefoniczn??',
    'LBL_CREATE_MEETING' => 'Zaplanuj Spotkanie',

    'LBL_GENERAL_TAB' => 'Szczeg????y',
    'LBL_PARTICIPANTS_TAB' => 'Zaproszenia',
    'LBL_REPEAT_TAB' => 'Cykliczno????',

    'LBL_REPEAT_TYPE' => 'Powt??rz',
    'LBL_REPEAT_INTERVAL' => 'Ka??dy',
    'LBL_REPEAT_END' => 'Zako??cz',
    'LBL_REPEAT_END_AFTER' => 'Po',
    'LBL_REPEAT_OCCURRENCES' => 'powt??rzenia',
    'LBL_REPEAT_END_BY' => 'Przez',
    'LBL_REPEAT_DOW' => 'W????czony',
    'LBL_REPEAT_UNTIL' => 'Powtarzaj a?? do',
    'LBL_REPEAT_COUNT' => 'Liczba powt??rze??',
    'LBL_REPEAT_LIMIT_ERROR' => 'Twoje ????danie mia??o utworzy?? wi??cej ni?? $limit spotka??.',

    //Events
    'LNK_EVENT' => 'Zdarzenie',
    'LNK_EVENT_VIEW' => 'Zobacz wydarzenie',
    'LBL_DATE' => 'Data: ',
    'LBL_DURATION' => 'Czas Trwania: ',
    'LBL_NAME' => 'Tytu??: ',
    'LBL_HOUR_ABBREV' => 'godzina',
    'LBL_HOURS_ABBREV' => 'godziny',
    'LBL_MINSS_ABBREV' => 'minut',
    'LBL_LOCATION' => 'Lokalizacja:',
    'LBL_STATUS' => 'Status',
    'LBL_DESCRIPTION' => 'Opis:',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'Wyst??pi?? b????d podczas wyszukiwania. Sk??adnia kwerendy mo??e by?? nieprawid??owa.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'Nie mo??na odnale???? ????danego silnika wyszukiwania. Spr??buj ponowi?? wyszukiwanie.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Nie uda??o si?? po????czy?? z serwerem Elasticsearch.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'Wyst??pi?? b????d wewn??trzny wyszukiwania.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'Wyst??pi?? nieznany b????d podczas wykonywania wyszukiwania.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Je??li problem b??dzie si?? powtarza??, skontaktuj si?? z administratorem. Wi??cej informacji w dziennikach (logach).',

    'LBL_ELASTIC_SEARCH_DEFAULT' => 'Brak wynik??w spe??niaj??cych podane kryteria wyszukiwania. Spr??buj rozszerzy?? wyszukiwanie.',

    'LNK_TASK_VIEW' => 'Podgl??d zadania',
);
