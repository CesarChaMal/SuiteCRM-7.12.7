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
    /*'ADMIN_EXPORT_ONLY'=>'Admin export only',*/
    'ADVANCED' => 'Zaawansowane',
    'DEFAULT_CURRENCY_ISO4217' => 'Symbol waluty wg ISO 4217',
    'DEFAULT_CURRENCY_NAME' => 'Nazwa waluty',
    'DEFAULT_CURRENCY_SYMBOL' => 'Symbol waluty',
    'DEFAULT_DATE_FORMAT' => 'Domy??lny format daty',
    'DEFAULT_DECIMAL_SEP' => 'Symbol dziesi??tny',
    'DEFAULT_LANGUAGE' => 'Domy??lny j??zyk',
    'DEFAULT_SYSTEM_SETTINGS' => 'Interfejs u??ytkownika',
    'DEFAULT_THEME' => 'Domy??lny temat',
    'DEFAULT_TIME_FORMAT' => 'Domy??lny format czasu',

    'DISPLAY_RESPONSE_TIME' => 'Wy??wietlaj czas odpowiedzi serwera',

    'IMAGES' => 'Znaki graficzne',
    'LBL_ALLOW_USER_TABS' => 'Zezwalaj u??ytkownikom na ukrycie kart',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'Ustawienia systemowe',
    'LBL_LOGVIEW' => 'Zobacz log',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Czy u??ywa?? autentykacji SMTP?',
    'LBL_MAIL_SMTPPASS' => 'Has??o SMTP:',
    'LBL_MAIL_SMTPPORT' => 'Port SMTP:',
    'LBL_MAIL_SMTPSERVER' => 'Serwer SMTP:',
    'LBL_MAIL_SMTPUSER' => 'Nazwa u??ytkownika SMTP:',
    'LBL_MAIL_SMTP_SETTINGS' => 'Specyfikacje serwera SMTP',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Wybierz dostawc?? poczty e-mail:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Has??o Yahoo! Mail:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID Yahoo! Mail:',
    'LBL_GMAIL_SMTPPASS' => 'Has??o Gmail:',
    'LBL_GMAIL_SMTPUSER' => 'Adres e-mail na Gmailu:',
    'LBL_EXCHANGE_SMTPPASS' => 'Zamie?? has??o:',
    'LBL_EXCHANGE_SMTPUSER' => 'Zamie?? nazw?? u??ytkownika:',
    'LBL_EXCHANGE_SMTPPORT' => 'Zamie?? port serwera:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Zamie?? serwer:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Pozw??l u??ytkownikom korzysta?? z tego konta dla e-maili wychodz??cych:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Po wybraniu tej opcji, u??ytkownicy b??d?? mogli wysy??a?? e-maile przy u??yciu tego samego konta poczty wychodz??cej u??ywanego do wysy??ania powiadomie?? systemu i alert??w. Je??li opcja nie jest wybrana, u??ytkownicy nadal mog?? korzysta?? z serwera poczty wychodz??cej po podaniu swoich danych konta.',
    'LBL_MAILMERGE' => 'Korespondencja Seryjna',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minimalny interwa?? automatycznego od??wie??ania wid??et??w',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'To jest minimalna warto????, kt??r?? mo??na wybra?? dla automatycznego od??wie??ania wid??et??w. Ustawienie "Nigdy" ca??kowicie wy????cza opcj?? od??wie??ania wid??et??w.',
    'LBL_MODULE_FAVICON' => 'Wy??wietl ikon?? modu??u jako favicon (ikon?? strony)',
    'LBL_MODULE_FAVICON_HELP' => 'Je??li jeste?? w module z ikon??, u??yj ikony modu??u jako favicon (ikon?? strony), zamiast faviconu motywu, w karcie przegl??darki.',
    'LBL_MODULE_NAME' => 'Ustawienia systemowe',
    'LBL_MODULE_ID' => 'Konfigurator',
    'LBL_MODULE_TITLE' => 'Interfejs u??ytkownika',
    'LBL_NOTIFY_FROMADDRESS' => 'Adres "Od":',
    'LBL_NOTIFY_SUBJECT' => 'Temat listu:',

    'LBL_PROXY_AUTH' => 'Autentykacja?',
    'LBL_PROXY_HOST' => 'Proxy host',
    'LBL_PROXY_ON_DESC' => 'Konfiguruje adres serwera proxy i ustawienia autoryzacji',
    'LBL_PROXY_ON' => 'Czy u??y?? serwera proxy?',
    'LBL_PROXY_PASSWORD' => 'Has??o',
    'LBL_PROXY_PORT' => 'Port',
    'LBL_PROXY_TITLE' => 'Ustawienia proxy',
    'LBL_PROXY_USERNAME' => 'Nazwa u??ytkownika',
    'LBL_RESTORE_BUTTON_LABEL' => 'Przywracanie',
    'LBL_SYSTEM_SETTINGS' => 'Ustawienia systemowe',
    'LBL_USE_REAL_NAMES' => 'Poka?? pe??n?? nazw?? u??ytkownika (nie login)',
    'LBL_USE_REAL_NAMES_DESC' => 'Wy??wietl pe??ne nazwy u??ytkownik??w, zamiast nazw u??ytkownik??w w polach zada??.',
    'LBL_DISALBE_CONVERT_LEAD' => 'Wy????cz opcj?? konwertowania dla ju?? skonwertowanych potencjalnych klient??w',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Je??li Potencjalny Klient by?? ju?? skonwertowany, w????czenie tej opcji spowoduje usuni??cie akcji konwertowania potencjalnego klienta.',
    'LBL_ENABLE_ACTION_MENU' => 'Wy??wietlanie mo??liwych dzia??a?? w menu',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Wybierz, aby wy??wietli?? akcje widoku szczeg????owego i subpaneli w menu rozwijanym. Je??li opcja nie zostanie zaznaczona akcje b??d?? wy??wietlane w postaci oddzielnych przycisk??w.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'W????cz edycj?? w widoku listy',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Zaznacz, aby w????czy?? edycj?? p??l w widoku szczeg????owym. Je??li pozostawisz niezaznaczone edycja p??l w widoku szczeg????owym b??dzie niemo??liwa. ',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'W????cz edycj?? w widoku szczeg????owym',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Zaznacz, aby w????czy?? edycj?? p??l w widoku szczeg????owym. Je??li pozostawisz niezaznaczone edycja p??l w widoku szczeg????owym b??dzie niemo??liwa.',
    'LBL_HIDE_SUBPANELS' => 'Zwini??te subpanele',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Widok element??w listy na stronie',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Widok element??w subpaneli na stronie',
    'LOG_MEMORY_USAGE' => 'Dziennik u??ycia pami??ci',
    'LOG_SLOW_QUERIES' => 'Dziennik szybko??ci wykonywania zapyta??',
    'CURRENT_LOGO' => 'Bie????ce logo',
    'CURRENT_LOGO_HELP' => 'To logo jest wy??wietlane na ??rodku ekranu logowania aplikacji SuiteCRM.',
    'NEW_LOGO' => 'Za??aduj nowe logo',
    'NEW_LOGO_HELP' => 'Pliki obraz??w mog?? by?? przesy??ane w formacie .png lub .jpg o maksymalnej wysoko??ci 170px i szeroko??ci 450px. Ka??dy obraz, kt??ry b??dzie wi??kszy, zostanie przeskalowany do tych wymiar??w po przes??aniu na serwer.',
    'NEW_LOGO_HELP_NO_SPACE' => 'Pliki obraz??w mog?? by?? przesy??ane w formacie .png lub .jpg o maksymalnej wysoko??ci 170px i szeroko??ci 450px. Ka??dy obraz, kt??ry b??dzie wi??kszy, zostanie przeskalowany do tych wymiar??w po przes??aniu na serwer.',
    'SLOW_QUERY_TIME_MSEC' => 'Pr??g czasu dla szybko??ci wykonywania zapyta?? (msec)',
    'STACK_TRACE_ERRORS' => 'Wy??wietlaj spis ??lad??w b????d??w',
    'UPLOAD_MAX_SIZE' => 'Maksymalna wielko???? ??adowania',
    'VERIFY_CLIENT_IP' => 'Sprawdzaj numer IP u??ytkownika',
    'LOCK_HOMEPAGE' => 'Wy????cz opcj?? dostosowania wygl??du dla u??ytkownika',
    'LOCK_SUBPANELS' => 'Wy????cz opcj?? dostosowania subpaneli dla u??ytkownika',
    'MAX_DASHLETS' => 'Maksymalna liczba wid??et??w SuiteCRM na stronie g????wnej',
    'SYSTEM_NAME' => 'Nazwa systemu',
    'SYSTEM_NAME_WIZARD' => 'Nazwa:',
    'SYSTEM_NAME_HELP' => 'Jest to nazwa wy??wietlana na pasku tytu??owym twojej przegl??darki.',
    'LBL_LDAP_TITLE' => 'Wsparcie autentykacji porzez LDAP',
    'LBL_LDAP_ENABLE' => 'W????cz LDAP',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Serwer:',
    'LBL_LDAP_SERVER_PORT' => 'Numer portu:',
    'LBL_LDAP_ADMIN_USER' => 'Autentykowany u??ytkownik:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'U??ywane do wyszukiwania u??ytkownik??w LDAP. Mo??e by?? konieczno???? podania nazwy w pe??ni kwalifikowanej.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Has??o autentykacji:',
    'LBL_LDAP_AUTHENTICATION' => 'Uwierzytelnienie:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Utworzenia powi??zania z serwerem LDAP przy u??yciu po??wiadcze?? okre??lonych u??ytkownik??w. Je??li nie zostan?? podane powi??zanie b??dzie anonimowe.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Automatyczne tworzenie u??ytkownik??w:',
    'LBL_LDAP_USER_DN' => 'U??ytkownik DN:',
    'LBL_LDAP_GROUP_DN' => 'Grupa DN:',
    'LBL_LDAP_GROUP_DN_DESC' => 'Przyk??ad: ou=groups,dc=example,dc=com',
    'LBL_LDAP_USER_FILTER' => 'Filtr u??ytkownika:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Cz??onkostwo grupy:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'U??ytkownicy musz?? by?? cz??onkami okre??lonej grupy',
    'LBL_LDAP_GROUP_USER_ATTR' => 'Atrybut u??ytkownika:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'Unikalny identyfikator osoby, kt??ry b??dzie u??ywany, aby sprawdzi?? czy jest cz??onkiem grupy. Przyk??ad: uid',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'Atrybut grupy, kt??ry b??dzie u??ywany do filtrowania  wobec atrybutu u??ytkownika. Przyk??ad: memberUid',
    'LBL_LDAP_GROUP_ATTR' => 'Atrybut grupy:',
    'LBL_LDAP_USER_FILTER_DESC' => 'Ka??dy dodatkowy parametr filtr stosowany podczas uwierzytelniania u??ytkownik??w, np. <em>is_suitecrm_user = 1 lub (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Atrybut logowania:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Atrybut powi??zany:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'Dla powi??zania u??ytkownika LDAP [<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'Dla wyszukiwania u??ytkownika LDAP [<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Przyk??ad: ldap.example.com lub ldaps://ldap.example.com for SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Przyk??ad: <em>389 lub 636 dla SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'Nazwa grupy:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Przyk??ad <em>cn = suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Przyk??ad: ou=people,dc=example,dc=com',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Je??li uwierzytelniony u??ytkownik nie istnieje zostanie utworzony.',
    'LBL_LDAP_ENC_KEY' => 'Klucz szyfrowania:',
    'DEVELOPER_MODE' => 'Tryb developerski',

    'SHOW_DOWNLOADS_TAB' => 'Wy??wietl kart?? Pliki do pobrania',
    'SHOW_DOWNLOADS_TAB_HELP' => 'Po wybraniu, w ustawieniach u??ytkownika pojawi si?? karta Pobierz i umo??liwi u??ytkownikom dost??p do dodatk??w SuiteCRM i innych plik??w',
    'LBL_LDAP_ENC_KEY_DESC' => 'Dla auntentykacji SOAP authentication, kiedy LDAP jest u??ywany.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'Rozszerzenie php_mcrypt musi by?? w????czone w pliku php.ini.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'Rozszerzenie openssl musi by?? w????czone w pliku php.ini.',
    'LBL_ALL' => 'Wszystko',
    'LBL_MARK_POINT' => 'Punkt zaznaczenia',
    'LBL_NEXT_' => 'Nast??pny>>',
    'LBL_REFRESH_FROM_MARK' => 'Od??wie?? od znaku',
    'LBL_SEARCH' => 'Szukaj:',
    'LBL_REG_EXP' => 'Zarejestrowanie wygasa:',
    'LBL_IGNORE_SELF' => 'Samoczynne ignorowanie:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Zaznacz, od kiedy rozpocz???? zapis dziennika',
    'LBL_DISPLAYING_LOG' => 'Wy??wietl dziennik',
    'LBL_YOUR_PROCESS_ID' => 'ID Twojego procesu',
    'LBL_YOUR_IP_ADDRESS' => 'Tw??j adres IP to',
    'LBL_IT_WILL_BE_IGNORED' => 'b??dzie zignorowane',
    'LBL_LOG_NOT_CHANGED' => 'dziennik nie zmieni?? si??',
    'LBL_ALERT_JPG_IMAGE' => 'Formatem pliku obrazka musi by?? jpg.  Nadpisz nowy plik z nowym rozszerzeniem .jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'Formatem pliku obrazka musi by?? jpg lub png.  Nadpisz nowy plik z nowym rozszerzeniem .jpg lub .png.',
    'LBL_ALERT_SIZE_RATIO' => 'Wsp????czynnik zmniejszenia obrazka powinien wynosi?? od 1:1 do 10:1.  Obrazek zostanie przeskalowany.',
    'ERR_ALERT_FILE_UPLOAD' => 'B????d podczas ??adowania obrazka.',
    'LBL_LOGGER' => 'Ustawienia dziennika',
    'LBL_LOGGER_FILENAME' => 'Nazwa pliku dziennika',
    'LBL_LOGGER_FILE_EXTENSION' => 'Rozszerzenie',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Maksymalna wielko???? pliku',
    'LBL_STACK_TRACE' => 'W????cz ??ledzenie stosu',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Domy??lny format daty',
    'LBL_LOGGER_LOG_LEVEL' => 'Poziom dziennika',
    'LBL_LEAD_CONV_OPTION' => 'Opcje konwersji Potencjalnego Klienta',
    'LEAD_CONV_OPT_HELP' => "<b>Kopiuj</b> - tworzy i ????czy kopie wszystkich aktywno??ci Potencjalnego Klienta z nowymi rekordami, kt??re s?? wybrane przez u??ytkownika podczas konwersji. Kopie s?? tworzone dla ka??dego z wybranych rekord??w. <br><br><b>Przenie??</b> - przenosi wszystkie aktywno??ci Potencjalnego Klienta do nowego rekordu, kt??ry jest wybrany przez u??ytkownika podczas konwersji. <br> <br><b>Nie r??b nic</b> - nie robi nic z aktywno??ciami Potencjalnego Klienta podczas konwersji. Aktywno??ci  pozostaj?? powi??zane tylko z Potencjalnym Klientem.",
    'LBL_CONFIG_AJAX' => 'Konfigurowanie interfejsu u??ytkownika AJAX',
    'LBL_CONFIG_AJAX_DESC' => 'W????czanie lub wy????czanie korzystania z AJAX UI dla konkretnych modu????w.',
    'LBL_LOGGER_MAX_LOGS' => 'Maksymalna ilo???? dziennik??w (before rolling)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Do????cz po nazwie pliku',
    'LBL_VCAL_PERIOD' => 'Okres czasu uaktualniania vCal:',
    'LBL_IMPORT_MAX_RECORDS' => 'Import - Maksymalna liczba wierszy:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Okre??la, ile wierszy jest dozwolonych w obr??bie importowanych plik??w. <br>Je??li ta liczba przekracza liczb?? wierszy w pliku importowanym, u??ytkownik zostanie ostrze??ony. <br>, Je??li liczba nie zosta??a wprowadzona, dozwolona jest nieograniczona liczba wierszy.',
    'vCAL_HELP' => 'U??yj tego ustawienia, aby okre??li?? ile miesi??cy naprz??d (od dzisiejszej daty) system b??dzie podawa?? informacje o statusie Wolny/Zaj??ty dla rozm??w telefonicznych.<BR>Aby wy????czy?? ten status, zaznacz 0. Mo??esz wybra?? liczb?? miesi??cy od 1 do 12.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Twoje scenariusze',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'Nie skonfigurowano ??adnego scenariusza',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Wybierz, kt??re scenariusze s?? odpowiednie dla tej instalacji. Te opcje mo??na b??dzie zmieni?? po instalacji.',

    'LBL_WIZARD_TITLE' => 'Kreator admin',
    'LBL_WIZARD_WELCOME_TAB' => 'Witaj',
    'LBL_WIZARD_WELCOME_TITLE' => 'Witaj w SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Kliknij <b>Dalej</b> zmieni?? ustawienia twojej organizacji, ustawienia j??zykowe i skonfigurowa?? SuiteCRM. Je??li chcesz skonfigurowa?? SuiteCRM p????niej, kliknij <b>Pomi??</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Dalej >',
    'LBL_WIZARD_BACK_BUTTON' => '< Wstecz',
    'LBL_WIZARD_SKIP_BUTTON' => 'Pomi??',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Kontynuuj',
    'LBL_WIZARD_FINISH_TITLE' => 'System podstawowy konfiguracji jest gotowy',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Brandowanie',
    'LBL_WIZARD_SYSTEM_DESC' => 'Podaj nazw?? twojej organizacji i logo w celu dostosowania twojej wersji SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Okre??l, jak chcesz aby dane w aplikacji SuiteCRM by??y wy??wietlane, na podstawie twojego po??o??enia geograficznego. Ustawienia podane tutaj b??d?? ustawieniami domy??lnymi. U??ytkownicy b??d?? mogli ustawi?? swoje w??asne preferencje.',
    'LBL_WIZARD_SMTP_DESC' => 'Podaj konto e-mail, kt??re b??dzie u??ywane do wysy??ania e-maili, takich jak powiadomienia do zada?? i nowe has??a u??ytkownika. U??ytkownicy b??d?? otrzymywa?? e-maile od aplikacji SuiteCRM, jako wys??ane z okre??lonego konta e-mail.',
    'LBL_LOADING' => '??adowanie...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Usu??' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Witamy' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Poka?? e-maile powi??zanego Kontaktu w panelu Historii dla modu????w',
    'LBL_HISTORY_SUBPANEL' => 'Subpanel Historii',
);
