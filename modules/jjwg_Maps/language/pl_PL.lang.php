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

$mod_strings['LBL_MAP'] = 'Mapa';
$mod_strings['LBL_MODULE_NAME'] = 'Mapy';
$mod_strings['LBL_MODULE_TITLE'] = 'Mapy: Strona główna';
$mod_strings['LBL_MODULE_ID'] = 'Mapy';
$mod_strings['LBL_LIST_FORM_TITLE'] = 'Mapy';
$mod_strings['LBL_MAP_CUSTOM_MARKER'] = 'Znacznik niestandardowy';
$mod_strings['LBL_MAP_CUSTOM_AREA'] = 'Obszar niestandardowy';
$mod_strings['LBL_HOMEPAGE_TITLE'] = 'Mój wykaz map';

$mod_strings['LBL_FLEX_RELATE'] = 'Powiązane z (centrum):';
$mod_strings['LBL_MODULE_TYPE'] = 'Typ modułu do wyświetlenia:';
$mod_strings['LBL_DISTANCE'] = 'Odległość (Promień):';
$mod_strings['LBL_UNIT_TYPE'] = 'Typ jednostki:';

$mod_strings['LBL_MAP_DISPLAY'] = 'Wyświetlanie mapy';
$mod_strings['LBL_MAP_LEGEND'] = 'Legenda:';
$mod_strings['LBL_MAP_USER_GROUPS'] = 'Grupy:';
$mod_strings['LBL_MAP_GROUP'] = 'Grupa';
$mod_strings['LBL_MAP_TYPE'] = 'Typ';
$mod_strings['LBL_MAP_ASSIGNED_TO'] = 'Przypisane do:';
$mod_strings['LBL_MAP_GET_DIRECTIONS'] = 'Uzyskiwanie wskazówek';
$mod_strings['LBL_MAP_GOOGLE_MAPS_VIEW'] = 'Widok mapy Google';

$mod_strings['LNK_NEW_MAP'] = 'Dodaj nową mapę';
$mod_strings['LNK_NEW_RECORD'] = 'Dodaj nową mapę';
$mod_strings['LNK_MAP_LIST'] = 'Lista map';

$mod_strings['LBL_MAP_ADDRESS_TEST'] = 'Testuj geokodowanie';
$mod_strings['LBL_MAP_QUICK_RADIUS'] = 'Szybka mapa zasięgu';
$mod_strings['LBL_MAP_NULL_GROUP_NAME'] = 'Brak';
$mod_strings['LBL_MAP_ADDRESS'] = 'Adres';
$mod_strings['LBL_MAP_PROCESS'] = 'Przetwórz to!';

$mod_strings['LBL_MAP_LAST_STATUS'] = 'Ostatni status geokodowania';
$mod_strings['LBL_GEOCODED_COUNTS'] = 'Licznik geokodowania modułu';
$mod_strings['LBL_CRON_URL'] = 'Cron URL:';
$mod_strings['LBL_MODULE_HEADING'] = 'Moduł';

$mod_strings['LBL_N/A'] = 'N/D';
$mod_strings['LBL_ZERO_RESULTS'] = 'Brak wyników';
$mod_strings['LBL_OK'] = 'Ok';
$mod_strings['LBL_INVALID_REQUEST'] = 'Nieprawidłowe zapytanie';
$mod_strings['LBL_APPROXIMATE'] = 'Przybliżone';
$mod_strings['LBL_EMPTY'] = 'Pusty';

$mod_strings['LBL_MODULE_TOTAL_HEADING'] = 'Razem';
$mod_strings['LBL_MODULE_RESET_HEADING'] = 'Resetuj';
$mod_strings['LBL_GEOCODED_COUNTS_DESCRIPTION'] = 'W poniższej tabeli przedstawiono liczbę obiektów, które zostały zgeokodowane, pogrupowane według odpowiedzi geokodowania. Należy pamiętać, że standardowy limit wykorzystania Google Maps to 2500 żądań dziennie. Moduł ten będzie zapisywać w pamięci podręcznej informacje geokodowanie adresów podczas ich przetwarzania, aby zmniejszyć ogólną liczbę żądań.';

$mod_strings['LBL_CRON_INSTRUCTIONS'] = 'Do przetwarzania żądań geokodowania zaleca się skonfigurować nocne zadanie Cron. Punkt wejścia został utworzony w tym celu i można uzyskać do niego dostęp bez uwierzytelniania. Adres URL wyświetlany poniżej jest przeznaczony do użycia z poziomu zaplanowanych zadań administracyjnych. Prosimy o zapoznanie się z dokumentacją, aby uzyskać więcej informacji.';
$mod_strings['LBL_EXPORT_ADDRESS_URL'] = 'Eksportuj adresy URL';
$mod_strings['LBL_EXPORT_INSTRUCTIONS'] = 'Użyj poniższych linków, aby wyeksportować pełne adresy wymagających informacji geokodujących. Następnie użyj narzędzia geokodowania masowego (online lub offline) do geokodowania adresów. Po zakończeniu, należy zaimportować adresy do modułu Pamięci podręcznej adresów, aby zostały wykorzystane na mapie. Uwaga: moduł Pamięci podręcznej adresów jest opcjonalny. Wszystkie informacje geokodowania są przechowywane w odpowiednich modułach.';
$mod_strings['LBL_ADDRESS_CACHE'] = 'Pamięć podręczna adresów';
$mod_strings['LBL_ADD_TO_TARGET_LIST'] = 'Dodaj do Listy docelowych odbiorców';
$mod_strings['LBL_ADD_TO_TARGET_LIST_PROCESSING'] = 'Przetwarzanie...';


$mod_strings['LBL_CONFIG_TITLE'] = 'Ustawienia konfiguracji';
$mod_strings['LBL_CONFIG_SAVED'] = 'Ustawienia zapisane pomyślnie!';
$mod_strings['LBL_BILLING_ADDRESS'] = 'Adres do fakturowania';
$mod_strings['LBL_SHIPPING_ADDRESS'] = 'Adres dostawy';
$mod_strings['LBL_PRIMARY_ADDRESS'] = 'Główny Adres';
$mod_strings['LBL_ALTERNATIVE_ADDRESS'] = 'Adres alternatywny';
$mod_strings['LBL_ADDRESS_FLEX_RELATE'] = 'Wybór zależności';
$mod_strings['LBL_ADDRESS_ADDRESS'] = 'Adres (prosty, użytkownicy)';
$mod_strings['LBL_ADDRESS_CUSTOM'] = 'Niestandardowe (Custom Controller Logic)';
$mod_strings['LBL_ENABLED'] = 'Dostępne';
$mod_strings['LBL_DISABLED'] = 'Niedostępne';
$mod_strings['LBL_DEFAULT'] = 'Domyślna:';
$mod_strings['LBL_CONFIG_DEFAULT'] = 'Domyślna:';

$mod_strings['LBL_CONFIG_VALID_GEOCODE_MODULES'] = 'Moduły właściwe dla geokodowania:';
$mod_strings['LBL_CONFIG_VALID_GEOCODE_TABLES'] = 'Tabele poprawnych geokodowań:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_SETTINGS_TITLE'] = "Ustawienia typu adresu: Definiuje typy adresów w modułach używane podczas geokodowania adresów. Dopuszczalne wartości: 'korespondencyjny'; 'wysyłkowy'; 'podstawowy'; 'alternatywny'; 'flex_relate'";
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR'] = 'Typ adresu do ';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_ACCOUNTS'] = 'Typ adresu dla kontrahentów:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CONTACTS'] = 'Typ adresu dla Kontaktów:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_LEADS'] = 'Typ Adresu dla Potencjalnych Klientów:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_OPPORTUNITIES'] = 'Typ adresu dla szans sprzedaży:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT'] = '(powiązanego Kontrahenta)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CASES'] = 'Typ Adresu dla Spraw:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROJECTS'] = 'Typ adresu dla projektów:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT_OPPORTUNITY'] = '(powiązanego Kontrahenta/Szansy sprzedaży)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_MEETINGS'] = 'Typ adresu dla spotkań:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROSPECTS'] = 'Typ adresu dla perspektyw/docelowych odbiorców:';
$mod_strings['LBL_CONFIG_RELATED_OBJECT_THRU_FLEX_RELATE'] = 'Obiekt powiązany przez pole Flex Relate';

$mod_strings['LBL_CONFIG_MARKER_GROUP_FIELD_SETTINGS_TITLE'] = "Pole grupy znaczników: Definiuje 'pole', służące jako parametr grupy podczas wyświetlania znaczników na mapie. Przykłady: assigned_user_name, industry, status, sales_stage, priority";
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR'] = 'Pole grupowe dla ';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_ACCOUNTS'] = 'Pola grup dla Kontrahentów:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CONTACTS'] = 'Pole Grupy dla Kontaktów:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_LEADS'] = 'Pole Grupowania dla Potencjalnych Klientów:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_OPPORTUNITIES'] = 'Pola grup dla Szans sprzedaży:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CASES'] = 'Pole Grupy dla Spraw:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROJECTS'] = 'Pole Grupy dla Projektów:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_MEETINGS'] = 'Pole Grupy dla Spotkań:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROSPECTS'] = 'Grupa pól dla perspektyw/docelowych odbiorców:';

$mod_strings['LBL_CONFIG_GEOCODING_SETTINGS_TITLE'] = 'Geokodowanie/ustawienia Google:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_TITLE'] = 'URL do API geokodowania:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_DESC'] = 'Adres URL Google Maps API V3 lub serwera Proxy';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_TITLE'] = 'Hasło dla proxy:';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_DESC'] = 'Hasło do wykorzystania przez porównanie MD5 proxy.';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_TITLE'] = 'Limit geokodowania:';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_DESC'] = "'geocoding_limit' ustawia limit kwerendy podczas wybierania rekordów do geokodowania.";
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_TITLE'] = 'Limit geokodowania Google:';
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_DESC'] = "'google_geocoding_limit' ustawia ograniczenia zapytań podczas geokodowania za pomocą interfejsu API Google Maps.";
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_TITLE'] = 'Limit eksportu adresów:';
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_DESC'] = "'export_addresses_limit' ustawia limit kwerendy, podczas wyboru rekordów do eksportu.";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_TITLE'] = "Umożliwić \"przybliżone\" typy lokalizacji:";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_DESC'] = "'allow_approximate_location_type' - umożliwia aby lokalizacje typu 'APPROXIMATE' (przybliżonego) uznano w wynikach geokodowania jako posiadające status 'OK'.";

$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SETTINGS_TITLE'] = 'Ustawienia pamięci podręcznej adresów:';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_TITLE'] = 'Włączenie pamięci podręcznej adresu (Get):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_DESC'] = "'address_cache_get_enabled' umożliwia modułowi Pamięci podręcznej adresów na pobieranie danych z tabeli pamięci podręcznej.";
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_TITLE'] = 'Włącz zapisywanie pamięci podręcznej adresów (Zapisz):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_DESC'] = "'address_cache_get_enabled' umożliwia modułowi Pamięci podręcznej adresów na zapisywanie danych do tabeli pamięci podręcznej.";

$mod_strings['LBL_CONFIG_LOGIC_HOOKS_SETTINGS_TITLE'] = 'Ustawienia logic hooks:';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_TITLE'] = 'Włączyć wszystkie logic hooks: ';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_DESC'] = "'logic_hooks_enabled' umożliwia logic hooks automatyczną aktualizację w oparciu o powiązane obiekty. Zalecane jest wyłączenie tej opcji podczas uaktualniania twojego SuiteCRM.";

$mod_strings['LBL_CONFIG_MARKER_MAPPING_SETTINGS_TITLE'] = 'Ustawienia znaczników/mapowania:';
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_TITLE'] = "Limit znaczników mapy:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_DESC'] = "'map_markers_limit' ustawia limit kwerendy podczas wybierania rekordów do wyświetlania na mapie.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_TITLE'] = "Domyślna centralna szerokość geograficzna mapy:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_DESC'] = "'map_default_center_latitude' ustawia domyślną centralną szerokość geograficzną mapy.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_TITLE'] = "Domyślna centralna długość geograficzna mapy:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_DESC'] = "'map_default_center_latitude' ustawia domyślną centralną długość geograficzną mapy:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_TITLE'] = "Domyślna jednostka mapy:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_DESC'] = "'map_default_unit_type' ustawia typ domyślnej jednostki miary dla kalkulacji dystansu. Wartości: 'mi' (mile) lub 'km' (km).";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_TITLE'] = "Domyślna odległość mapy:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_DESC'] = "'map_default_distance' ustawia domyślną odległość dla map bazujących na odległości.";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_TITLE'] = "Dostosowanie duplikatów znaczników mapy:";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_DESC'] = "'map_duplicate_marker_adjustment' ustawia przesunięcia jakie mają zostać dodane do długości i szerokości geograficznej w przypadku zduplikowanych znaczników pozycji.";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_TITLE'] = "Rozmiar siatki agregatorów znaczników mapy:";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_DESC'] = "'map_clusterer_grid_size' jest używana do ustawiania rozmiaru siatki do obliczenia agregatorów znaczników mapy.";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_TITLE'] = "Maksymalne zbliżenie agregatorów znaczników mapy:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_DESC'] = "'map_clusterer_max_zoom' jest używane do ustawiania poziomu maksymalnego powiększenia w których grupowanie nie będzie stosowane.";
$mod_strings['LBL_CONFIG_CUSTOM_CONTROLLER_DESC'] = "Ważna uwaga: Wszystkie zapisane ustawienia można znaleźć w tabeli 'config' w kategorii 'jjwg'. Uwaga, plik niestandardowy controller.php Nie powinien być wykorzystywany aby nadpisywać ustawienia.";
$mod_strings['LBL_JJWG_MAPS_JJWG_AREAS_FROM_JJWG_AREAS_TITLE'] = 'Obszary';
$mod_strings['LBL_JJWG_MAPS_JJWG_MARKERS_FROM_JJWG_MARKERS_TITLE'] = 'Znaczniki';
$mod_strings['LBL_PARENT_ID'] = 'ID Rodzica';
$mod_strings['LBL_JJWP_PARTNERS'] = 'JJWP Partners';
$mod_strings['LBL_GET_GOOGLE_API_KEY'] = 'Uzyskaj klucz';
$mod_strings['LBL_GOOGLE_API_KEY'] = 'Klucz Google Api';
$mod_strings['LBL_ERROR_NO_GOOGLE_API_KEY'] = 'Ustaw klucz Api Google w panelu administracyjnym Google Maps.';
