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
    'DEFAULT_DATE_FORMAT' => 'Domyślny format daty',
    'DEFAULT_DECIMAL_SEP' => 'Symbol dziesiętny',
    'DEFAULT_LANGUAGE' => 'Domyślny język',
    'DEFAULT_SYSTEM_SETTINGS' => 'Interfejs użytkownika',
    'DEFAULT_THEME' => 'Domyślny temat',
    'DEFAULT_TIME_FORMAT' => 'Domyślny format czasu',

    'DISPLAY_RESPONSE_TIME' => 'Wyświetlaj czas odpowiedzi serwera',

    'IMAGES' => 'Znaki graficzne',
    'LBL_ALLOW_USER_TABS' => 'Zezwalaj użytkownikom na ukrycie kart',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'Ustawienia systemowe',
    'LBL_LOGVIEW' => 'Zobacz log',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Czy używać autentykacji SMTP?',
    'LBL_MAIL_SMTPPASS' => 'Hasło SMTP:',
    'LBL_MAIL_SMTPPORT' => 'Port SMTP:',
    'LBL_MAIL_SMTPSERVER' => 'Serwer SMTP:',
    'LBL_MAIL_SMTPUSER' => 'Nazwa użytkownika SMTP:',
    'LBL_MAIL_SMTP_SETTINGS' => 'Specyfikacje serwera SMTP',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Wybierz dostawcę poczty e-mail:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Hasło Yahoo! Mail:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID Yahoo! Mail:',
    'LBL_GMAIL_SMTPPASS' => 'Hasło Gmail:',
    'LBL_GMAIL_SMTPUSER' => 'Adres e-mail na Gmailu:',
    'LBL_EXCHANGE_SMTPPASS' => 'Zamień hasło:',
    'LBL_EXCHANGE_SMTPUSER' => 'Zamień nazwę użytkownika:',
    'LBL_EXCHANGE_SMTPPORT' => 'Zamień port serwera:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Zamień serwer:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Pozwól użytkownikom korzystać z tego konta dla e-maili wychodzących:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Po wybraniu tej opcji, użytkownicy będą mogli wysyłać e-maile przy użyciu tego samego konta poczty wychodzącej używanego do wysyłania powiadomień systemu i alertów. Jeśli opcja nie jest wybrana, użytkownicy nadal mogą korzystać z serwera poczty wychodzącej po podaniu swoich danych konta.',
    'LBL_MAILMERGE' => 'Korespondencja Seryjna',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minimalny interwał automatycznego odświeżania widżetów',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'To jest minimalna wartość, którą można wybrać dla automatycznego odświeżania widżetów. Ustawienie "Nigdy" całkowicie wyłącza opcję odświeżania widżetów.',
    'LBL_MODULE_FAVICON' => 'Wyświetl ikonę modułu jako favicon (ikonę strony)',
    'LBL_MODULE_FAVICON_HELP' => 'Jeśli jesteś w module z ikoną, użyj ikony modułu jako favicon (ikonę strony), zamiast faviconu motywu, w karcie przeglądarki.',
    'LBL_MODULE_NAME' => 'Ustawienia systemowe',
    'LBL_MODULE_ID' => 'Konfigurator',
    'LBL_MODULE_TITLE' => 'Interfejs użytkownika',
    'LBL_NOTIFY_FROMADDRESS' => 'Adres "Od":',
    'LBL_NOTIFY_SUBJECT' => 'Temat listu:',

    'LBL_PROXY_AUTH' => 'Autentykacja?',
    'LBL_PROXY_HOST' => 'Proxy host',
    'LBL_PROXY_ON_DESC' => 'Konfiguruje adres serwera proxy i ustawienia autoryzacji',
    'LBL_PROXY_ON' => 'Czy użyć serwera proxy?',
    'LBL_PROXY_PASSWORD' => 'Hasło',
    'LBL_PROXY_PORT' => 'Port',
    'LBL_PROXY_TITLE' => 'Ustawienia proxy',
    'LBL_PROXY_USERNAME' => 'Nazwa użytkownika',
    'LBL_RESTORE_BUTTON_LABEL' => 'Przywracanie',
    'LBL_SYSTEM_SETTINGS' => 'Ustawienia systemowe',
    'LBL_USE_REAL_NAMES' => 'Pokaż pełną nazwę użytkownika (nie login)',
    'LBL_USE_REAL_NAMES_DESC' => 'Wyświetl pełne nazwy użytkowników, zamiast nazw użytkowników w polach zadań.',
    'LBL_DISALBE_CONVERT_LEAD' => 'Wyłącz opcję konwertowania dla już skonwertowanych potencjalnych klientów',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Jeśli Potencjalny Klient był już skonwertowany, włączenie tej opcji spowoduje usunięcie akcji konwertowania potencjalnego klienta.',
    'LBL_ENABLE_ACTION_MENU' => 'Wyświetlanie możliwych działań w menu',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Wybierz, aby wyświetlić akcje widoku szczegółowego i subpaneli w menu rozwijanym. Jeśli opcja nie zostanie zaznaczona akcje będą wyświetlane w postaci oddzielnych przycisków.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Włącz edycję w widoku listy',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Zaznacz, aby włączyć edycję pól w widoku szczegółowym. Jeśli pozostawisz niezaznaczone edycja pól w widoku szczegółowym będzie niemożliwa. ',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Włącz edycję w widoku szczegółowym',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Zaznacz, aby włączyć edycję pól w widoku szczegółowym. Jeśli pozostawisz niezaznaczone edycja pól w widoku szczegółowym będzie niemożliwa.',
    'LBL_HIDE_SUBPANELS' => 'Zwinięte subpanele',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Widok elementów listy na stronie',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Widok elementów subpaneli na stronie',
    'LOG_MEMORY_USAGE' => 'Dziennik użycia pamięci',
    'LOG_SLOW_QUERIES' => 'Dziennik szybkości wykonywania zapytań',
    'CURRENT_LOGO' => 'Bieżące logo',
    'CURRENT_LOGO_HELP' => 'To logo jest wyświetlane na środku ekranu logowania aplikacji SuiteCRM.',
    'NEW_LOGO' => 'Załaduj nowe logo',
    'NEW_LOGO_HELP' => 'Pliki obrazów mogą być przesyłane w formacie .png lub .jpg o maksymalnej wysokości 170px i szerokości 450px. Każdy obraz, który będzie większy, zostanie przeskalowany do tych wymiarów po przesłaniu na serwer.',
    'NEW_LOGO_HELP_NO_SPACE' => 'Pliki obrazów mogą być przesyłane w formacie .png lub .jpg o maksymalnej wysokości 170px i szerokości 450px. Każdy obraz, który będzie większy, zostanie przeskalowany do tych wymiarów po przesłaniu na serwer.',
    'SLOW_QUERY_TIME_MSEC' => 'Próg czasu dla szybkości wykonywania zapytań (msec)',
    'STACK_TRACE_ERRORS' => 'Wyświetlaj spis śladów błędów',
    'UPLOAD_MAX_SIZE' => 'Maksymalna wielkość ładowania',
    'VERIFY_CLIENT_IP' => 'Sprawdzaj numer IP użytkownika',
    'LOCK_HOMEPAGE' => 'Wyłącz opcję dostosowania wyglądu dla użytkownika',
    'LOCK_SUBPANELS' => 'Wyłącz opcję dostosowania subpaneli dla użytkownika',
    'MAX_DASHLETS' => 'Maksymalna liczba widżetów SuiteCRM na stronie głównej',
    'SYSTEM_NAME' => 'Nazwa systemu',
    'SYSTEM_NAME_WIZARD' => 'Nazwa:',
    'SYSTEM_NAME_HELP' => 'Jest to nazwa wyświetlana na pasku tytułowym twojej przeglądarki.',
    'LBL_LDAP_TITLE' => 'Wsparcie autentykacji porzez LDAP',
    'LBL_LDAP_ENABLE' => 'Włącz LDAP',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Serwer:',
    'LBL_LDAP_SERVER_PORT' => 'Numer portu:',
    'LBL_LDAP_ADMIN_USER' => 'Autentykowany użytkownik:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Używane do wyszukiwania użytkowników LDAP. Może być konieczność podania nazwy w pełni kwalifikowanej.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Hasło autentykacji:',
    'LBL_LDAP_AUTHENTICATION' => 'Uwierzytelnienie:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Utworzenia powiązania z serwerem LDAP przy użyciu poświadczeń określonych użytkowników. Jeśli nie zostaną podane powiązanie będzie anonimowe.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Automatyczne tworzenie użytkowników:',
    'LBL_LDAP_USER_DN' => 'Użytkownik DN:',
    'LBL_LDAP_GROUP_DN' => 'Grupa DN:',
    'LBL_LDAP_GROUP_DN_DESC' => 'Przykład: ou=groups,dc=example,dc=com',
    'LBL_LDAP_USER_FILTER' => 'Filtr użytkownika:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Członkostwo grupy:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Użytkownicy muszą być członkami określonej grupy',
    'LBL_LDAP_GROUP_USER_ATTR' => 'Atrybut użytkownika:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'Unikalny identyfikator osoby, który będzie używany, aby sprawdzić czy jest członkiem grupy. Przykład: uid',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'Atrybut grupy, który będzie używany do filtrowania  wobec atrybutu użytkownika. Przykład: memberUid',
    'LBL_LDAP_GROUP_ATTR' => 'Atrybut grupy:',
    'LBL_LDAP_USER_FILTER_DESC' => 'Każdy dodatkowy parametr filtr stosowany podczas uwierzytelniania użytkowników, np. <em>is_suitecrm_user = 1 lub (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Atrybut logowania:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Atrybut powiązany:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'Dla powiązania użytkownika LDAP [<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'Dla wyszukiwania użytkownika LDAP [<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Przykład: ldap.example.com lub ldaps://ldap.example.com for SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Przykład: <em>389 lub 636 dla SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'Nazwa grupy:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Przykład <em>cn = suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Przykład: ou=people,dc=example,dc=com',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Jeśli uwierzytelniony użytkownik nie istnieje zostanie utworzony.',
    'LBL_LDAP_ENC_KEY' => 'Klucz szyfrowania:',
    'DEVELOPER_MODE' => 'Tryb developerski',

    'SHOW_DOWNLOADS_TAB' => 'Wyświetl kartę Pliki do pobrania',
    'SHOW_DOWNLOADS_TAB_HELP' => 'Po wybraniu, w ustawieniach użytkownika pojawi się karta Pobierz i umożliwi użytkownikom dostęp do dodatków SuiteCRM i innych plików',
    'LBL_LDAP_ENC_KEY_DESC' => 'Dla auntentykacji SOAP authentication, kiedy LDAP jest używany.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'Rozszerzenie php_mcrypt musi być włączone w pliku php.ini.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'Rozszerzenie openssl musi być włączone w pliku php.ini.',
    'LBL_ALL' => 'Wszystko',
    'LBL_MARK_POINT' => 'Punkt zaznaczenia',
    'LBL_NEXT_' => 'Następny>>',
    'LBL_REFRESH_FROM_MARK' => 'Odśwież od znaku',
    'LBL_SEARCH' => 'Szukaj:',
    'LBL_REG_EXP' => 'Zarejestrowanie wygasa:',
    'LBL_IGNORE_SELF' => 'Samoczynne ignorowanie:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Zaznacz, od kiedy rozpocząć zapis dziennika',
    'LBL_DISPLAYING_LOG' => 'Wyświetl dziennik',
    'LBL_YOUR_PROCESS_ID' => 'ID Twojego procesu',
    'LBL_YOUR_IP_ADDRESS' => 'Twój adres IP to',
    'LBL_IT_WILL_BE_IGNORED' => 'będzie zignorowane',
    'LBL_LOG_NOT_CHANGED' => 'dziennik nie zmienił się',
    'LBL_ALERT_JPG_IMAGE' => 'Formatem pliku obrazka musi być jpg.  Nadpisz nowy plik z nowym rozszerzeniem .jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'Formatem pliku obrazka musi być jpg lub png.  Nadpisz nowy plik z nowym rozszerzeniem .jpg lub .png.',
    'LBL_ALERT_SIZE_RATIO' => 'Współczynnik zmniejszenia obrazka powinien wynosić od 1:1 do 10:1.  Obrazek zostanie przeskalowany.',
    'ERR_ALERT_FILE_UPLOAD' => 'Błąd podczas ładowania obrazka.',
    'LBL_LOGGER' => 'Ustawienia dziennika',
    'LBL_LOGGER_FILENAME' => 'Nazwa pliku dziennika',
    'LBL_LOGGER_FILE_EXTENSION' => 'Rozszerzenie',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Maksymalna wielkość pliku',
    'LBL_STACK_TRACE' => 'Włącz śledzenie stosu',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Domyślny format daty',
    'LBL_LOGGER_LOG_LEVEL' => 'Poziom dziennika',
    'LBL_LEAD_CONV_OPTION' => 'Opcje konwersji Potencjalnego Klienta',
    'LEAD_CONV_OPT_HELP' => "<b>Kopiuj</b> - tworzy i łączy kopie wszystkich aktywności Potencjalnego Klienta z nowymi rekordami, które są wybrane przez użytkownika podczas konwersji. Kopie są tworzone dla każdego z wybranych rekordów. <br><br><b>Przenieś</b> - przenosi wszystkie aktywności Potencjalnego Klienta do nowego rekordu, który jest wybrany przez użytkownika podczas konwersji. <br> <br><b>Nie rób nic</b> - nie robi nic z aktywnościami Potencjalnego Klienta podczas konwersji. Aktywności  pozostają powiązane tylko z Potencjalnym Klientem.",
    'LBL_CONFIG_AJAX' => 'Konfigurowanie interfejsu użytkownika AJAX',
    'LBL_CONFIG_AJAX_DESC' => 'Włączanie lub wyłączanie korzystania z AJAX UI dla konkretnych modułów.',
    'LBL_LOGGER_MAX_LOGS' => 'Maksymalna ilość dzienników (before rolling)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Dołącz po nazwie pliku',
    'LBL_VCAL_PERIOD' => 'Okres czasu uaktualniania vCal:',
    'LBL_IMPORT_MAX_RECORDS' => 'Import - Maksymalna liczba wierszy:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Określa, ile wierszy jest dozwolonych w obrębie importowanych plików. <br>Jeśli ta liczba przekracza liczbę wierszy w pliku importowanym, użytkownik zostanie ostrzeżony. <br>, Jeśli liczba nie została wprowadzona, dozwolona jest nieograniczona liczba wierszy.',
    'vCAL_HELP' => 'Użyj tego ustawienia, aby określić ile miesięcy naprzód (od dzisiejszej daty) system będzie podawał informacje o statusie Wolny/Zajęty dla rozmów telefonicznych.<BR>Aby wyłączyć ten status, zaznacz 0. Możesz wybrać liczbę miesięcy od 1 do 12.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Twoje scenariusze',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'Nie skonfigurowano żadnego scenariusza',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Wybierz, które scenariusze są odpowiednie dla tej instalacji. Te opcje można będzie zmienić po instalacji.',

    'LBL_WIZARD_TITLE' => 'Kreator admin',
    'LBL_WIZARD_WELCOME_TAB' => 'Witaj',
    'LBL_WIZARD_WELCOME_TITLE' => 'Witaj w SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Kliknij <b>Dalej</b> zmienić ustawienia twojej organizacji, ustawienia językowe i skonfigurować SuiteCRM. Jeśli chcesz skonfigurować SuiteCRM później, kliknij <b>Pomiń</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Dalej >',
    'LBL_WIZARD_BACK_BUTTON' => '< Wstecz',
    'LBL_WIZARD_SKIP_BUTTON' => 'Pomiń',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Kontynuuj',
    'LBL_WIZARD_FINISH_TITLE' => 'System podstawowy konfiguracji jest gotowy',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Brandowanie',
    'LBL_WIZARD_SYSTEM_DESC' => 'Podaj nazwę twojej organizacji i logo w celu dostosowania twojej wersji SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Określ, jak chcesz aby dane w aplikacji SuiteCRM były wyświetlane, na podstawie twojego położenia geograficznego. Ustawienia podane tutaj będą ustawieniami domyślnymi. Użytkownicy będą mogli ustawić swoje własne preferencje.',
    'LBL_WIZARD_SMTP_DESC' => 'Podaj konto e-mail, które będzie używane do wysyłania e-maili, takich jak powiadomienia do zadań i nowe hasła użytkownika. Użytkownicy będą otrzymywać e-maile od aplikacji SuiteCRM, jako wysłane z określonego konta e-mail.',
    'LBL_LOADING' => 'Ładowanie...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Usuń' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Witamy' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Pokaż e-maile powiązanego Kontaktu w panelu Historii dla modułów',
    'LBL_HISTORY_SUBPANEL' => 'Subpanel Historii',
);
