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
    'LBL_LOADING' => 'Ładowanie' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Ukryj opcje' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Usuń' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => 'Wprowadź <b>Nazwę</b> dla pakietu. Musi ona składać się ze znaków alfanumerycznych i nie zawierać spacji. (Przykład: HR_Zarządzanie)<br/><br/> Możesz podać <b>Autora</b> i <b>Opis</b>, jako informację o pakiecie. <br/><br/>Kliknij <b>Zapisz</b> aby utworzyć pakiet.',
            'modify' => 'Właściwości i możliwe działania na <b>pakiecie</b> pojawiają się <b>tutaj</b>. Możesz zmodyfikować <b>Nazwisko</b>, <b>Autora</b> oraz  <b>Opis</b> pakietu, tak jak widok  pakietu, jak również wszystkie jego moduły.<br><br>Możesz również <b>Publikować</b> i <b>Zamieszczać</b> pakiet, jak również <b>Eksportować</b> presonalizacje w pakiecie.',
            'name' => 'To jest <b>Nazwa</b> bieżącego pakietu. <br/><br/>Nazwa, którą wprowadzasz musi być złożona ze znaków alfanumerycznych, rozpoczynać się od litery i nie zawierać spacji. (Przykład: HR_Management)',
            'author' => 'To jest określenie <b>Autora</b>, które jest wyświetlane podczas instalacji, jako podmiotu tworzącego pakiet. Autor może być zarówno osobą, jak i organizacją.',
            'description' => 'To jest <b>Opis</b> pakietu wyświetlany podczas instalacji.',
            'publishbtn' => 'Kliknij <b>Publikuj</b>, aby zapisać wszystkie zmiany i utworzyć plik .zip, który jest instalacyjną wersją pakietu.<br><br>Użyj <b>Instalatora modułów</b> aby załadować plik .zip i zainstalować pakiet.',
            'deploybtn' => 'Kliknij <b>Zainstaluj</b> aby zapisać wprowadzone dane i zainstalować pakiet, zawierający wszystkie moduły.',
            'duplicatebtn' => 'Kliknij <b>Duplikuj</b>, aby skopiować zawartość pakietu do nowego i aby wyświetlić nowy pakiet. <br/><br/>Nazwa dla nowego pakietu zostanie wygenerowana automatycznie, poprzez dodanie numeru do nazwy pakietu, z którego został utworzony. Możesz zmienić nazwę nowego pakietu przez wprowadzenie nowej <b>Nazwy</b> i kliknięcie <b>Zapisz</b>.',
            'exportbtn' => 'Kliknij <b>Eksport</b> aby utworzyć plik .zip, zawierający personalizacje użyte przy tworzeniu pakietu.<br><br> Wygenerowany plik zawiera kod personalizacji dla pakietu i nie jest plikiem instalacyjnym pakietu.<br><br>Użyj <b>Instalatora modułów</b> aby zaimportować plik zip, i umożliwić użycie personalizacji w nowych pakietach.',
            'deletebtn' => 'Kliknij <b>Usuń</b> aby usunać pakiet i wszystkie pliki powiązane z nim.',
            'savebtn' => 'Kliknij <b>Zapisz</b> aby zapisać wszystkie wprowadzone dane powiązane z pakietem.',
            'existing_module' => 'Kliknij <b>ikonę modułu</b>, aby edytować wartości i dostosować pola, zależności i wyglądy, należące do tego modułu.',
            'new_module' => 'Kliknij <b>Nowy moduł</b>, aby utworzyć nowy moduł dla tego pakietu.',
            'key' => 'Ten 5-cio literowy, alfanumeryczny <b>Klucz</b> będzie używany jako przedrostek w każdym katalogu, nazwie klasy  i tabeli, dla każdego modułu tego pakietu.<br><br>Klucz jest używany w celu osiągnięcia unikalnych nazw dla tabel.',
            'readme' => 'Możesz dodać tekst <b>Readme</b> do tego pakietu.<br><br>Będzie on dostępny podczas instalacji.',

        ),
        'main' => array(),
        'module' => array(
            'create' => 'Podaj <b>nazwę</b> dla modułu. <b>Etykiety</b>, które podasz pojawią się w zakładce nawigacja <br/> <br/> Aby wyświetlić kartę nawigacji dla modułu, zaznacz okienko <b>Karty nawigacji</b>. <br/> <br/> Następnie wybierz typ modułu, który chcesz utworzyć. <br/> <br/> Wybierz typ szablonu. Każdy szablon zawiera zbiór pól, a także wstępnie zdefiniowanych układów, których można użyć jako podstawy dla danego modułu. <br/> <br/> Kliknij przycisk <b>Zapisz</b>, aby utworzyć moduł.',
            'modify' => 'Można zmienić właściwości modułu lub dostosować <b>pola</b>, <b>relacje</b> i <b>układów</b> związanych z modułem.',
            'importable' => 'Zaznaczenie pola <b>Importowalny</b> właczy możliwość imoportu dla tego modułu.<br><br>Link do kreatora importu pojawi się w panelu skrótów w module. Właściwości kreatora importu pozwalają wprowadzać dane z zewnętrzynch źrodeł do własnego modułu.',
            'team_security' => 'Zaznaczenie pola <b>Bezpieczeństwo zespołu</b> włączy funkcję bezpieczeństwa zespołu dla tego modułu.  <br/><br/>Jeśli funkcja bezpieczeństwa zespołów jest włączona dla tego modułu, pola wyborów dla zespołów pojawią się w widokach tego modułu.',
            'reportable' => 'Zaznaczenie tego pola umożliwi wykonanie raportów z udziałem tego modułu.',
            'assignable' => 'Zaznaczenie tego pola umożliwi przydzielanie rekordów w tym module do poszczególnych użytkowników.',
            'has_tab' => 'Zaznaczenie pola <b>Zakładka nawigacyjna</b> wyświetli zakładkę nawigacyjną w module.',
            'acl' => 'Zaznaczenie tego pola włączy funkcję kontroli dostępu w tym module, również bezpieczeństwa dla pól.',
            'studio' => 'Zaznaczenie tego pola zezwoli administratorom dostosowywać ten moduł w Edytorze modułów.',
            'audit' => 'Zaznaczenie tego pola włączy zapisywanie zmian w tym module. Zmiany w poszczególnych polach będą rejestrowane i administratorzy będą mogli zobaczyć tę historię.',
            'viewfieldsbtn' => 'Kliknij <b>Zobacz pola</b> aby zobaczyć pola powiązane z tym modułem i w celu tworzenia lub edycji własnych pól.',
            'viewrelsbtn' => 'Kliknij <b>Zależności</b> aby zobaczyć zależności powiązane z tym modułem oraz w celu tworzenia lub edycji zależności.',
            'viewlayoutsbtn' => 'Kliknij <b>Zobacz widoki</b> aby zobaczyć widoki modułu i ustawić własny układ pól w widokach modułu.',
            'duplicatebtn' => 'Kliknij <b>Duplikuj</b> aby skopiować właściwości modułu do nowo tworzonego modułu i wyświetlić go. <br/><br/> Nazwa dla nowego modułu jest generowana automatycznie, poprzez dodanie numeru na końcu nazwy modułu pierwotnego.<br><br>Możesz zmienić nazwę nowego modułu, wprowadzając nową <b>Nazwę</b> i klikając  <b>Zachowaj</b>.',
            'deletebtn' => 'Kliknij <b>Usuń</b>, aby usunąć ten moduł.',
            'name' => 'Jest to <b>Nazwa</b> bieżącego modułu. <br/> <br/> Nazwa musi być ciągiem alfanumerycznym, musi zaczynać się literą i nie może zawierać spacji. (Przykład: HR_Zasoby_Ludzkie)',
            'label' => 'To jest <b>Etykieta</b>, która pojawiać się będzie na zakładce nawigacyjnej modułu. ',
            'savebtn' => 'Kliknij <b>Zachowaj</b>, aby zachować dane powiązane z modułem.',
            'type_basic' => '<b>Podstawowy</b> szablon, ma zdefiniowane domyślnie takie nazwy pól jak nazwa, przydzielone do, zespół, data utworzenia i opis.',
            'type_company' => 'Szablon <b>Firma</b> zawiera pola specyfinczne dla określenia organizacji, jak np. Nazwa firmy, typ działalności, adres fakturowania.<br/><br/>Używaj tego wzorca do tworzenia modułów podobnych do modułu Klienci.',
            'type_issue' => 'Szablon <b>Problem</b> zawiera pola typowe dla spraw i śledzenia błędów, takie jak numer, status, priorytet, opis.<br/><br/>Używaj tego wzorca do tworzenia modułów podobnych do modułu Sprawy, lub Śledzenie błędów.',
            'type_person' => 'Szablon <b>Osoba</b> zawiera pola typowe dla określenia osoby, takie jak pozdrowienie, tytuł, nazwisko, adres i numer telefonu.<br/><br/>Używaj tego wzorca do tworzenia modułów podobnych do modułu Kontakty, czy Potencjalni klienci.',
            'type_sale' => 'Szablon <b>Sprzedaż</b> zawiera pola typowe dla modułu określającego ofertę - szansę sprzedaży, takie jak pochodzenie adresu/kontaktu, poziom zaawansowania, kwotę transakcji i prawdopodobieństwo. <br/><br/>Używaj tego wzorca do tworzenia modułów podobnych do standardowego modułu Oferty.',
            'type_file' => 'Szablon <b>Plik</b> zawiera pola typowe dla modułu określającego pracę na dokumentach, takie jak nazwa pliku, typ dokument lub data publikacji.<br><br>Używaj tego wzorca do tworzenia modułów podobnych do modułu zarządzania dokumenty.',

        ),
        'dropdowns' => array(
            'default' => 'Tutaj znajdują się wszystkie <b>listy rozwijane</b> występujące w aplikacji.<br><br>Listy rozwijane mogą zostać użyte w dowolnym module.<br><br>Aby wprowadzić zmiany w istniejącej liście rozwijanej kliknij na jej nazwę.<br><br>Kliknij <b>Dodaj listę rozwijaną</b> aby utworzyć nową.',
            'editdropdown' => 'Listy rozwijane mogą być używane dla standardowych i własnych pól w dowolnym module.<br><br>Wprowadź <b>Nazwę</b> dla listy.<br><br>Jeżeli w aplikacji są zainstalowane pakiety językowe, możesz określić <b>Język</b> elementów listy.<br><br>W polu <b>Nazwa Elementu</b> wprowadź nazwę dla opcji na tej liście. Nazwa ta nie będzie widoczna na liście widocznej dla użytkowników.<br><br>W polu <b>Wyświetl etykietę</b> wprowadź etykietę, która pojawi się w słowniku.<br><br>Po wprowadzeniu nazwy elementu i etykiety, kliknij <b>Dodaj</b>, aby dodać nowy element do listy.<br><br>W celu zmiany kolejności elementów listy, przeciągnij i upuść elementy w pożądanym miejscu.<br><br>Aby edytować etykietę elementu, kliknij na ikonę<b>Edytuj</b>, i wprowadź nową etykietę. Aby usunąć element z listy, kliknij na ikonie <b>Usuń</b>.<br><br>Aby cofnąć zmiany wprowadzone w etykietach, kliknij <b>Cofnij</b>. Aby przywrócić usunięte uprzednio zmiany, kliknij <b>Przywróć</b>.<br><br>Kliknij <b>Zapisz</b> aby zatwierdzić aktualny wygląd listy.',

        ),
        'subPanelEditor' => array(
            'modify' => 'Wszystkie pola, które mogą zostać wyświetlone w <b>Subpanelach</b> pojawią się tutaj.<br><br><b>Domyślna</b> kolumna zawiera pola, które są wyświetlone w Subpanelu.<br/><br/><b>Ukryta</b> kolumna zawiera pola, które mogą zostać dodane do kolumny Domyślnej.'
        ,
            'savebtn' => 'Kliknij <b>Zapisz i zainstaluj</b> aby zapisać zmiany i uaktywnić je w module.',
            'historyBtn' => 'Kliknij <b>Zobacz historię</b> jeśli chcesz przejrzeć i przywrócić poprzednio zapisany wygląd z historii.',
            'historyDefault' => 'Kliknij przycisk<b>Przywróć domyślne</b> aby przywrócić do orginalny wygląd.',
            'Hidden' => 'Pola <b>Ukryte</b> nie pojawią się w subpanel.',
            'Default' => '<b>Domyślne</b> pojawią się w subpanel.',

        ),
        'listViewEditor' => array(
            'modify' => 'Wszystkie pola, które mogą zostać wyświetlone w <b>Widoku listy</b> pojawią się tutaj.<br><br>Kolumna <b>Domyślne</b> zawiera te pola, które są wyświetlone w Widoku listy domyślnie.<br/><br/>Kolumna <b>Dostępne</b> zawiera pola, które mogą zostać wybrane przez użytkownika w celu utworzenia własnego widoku listy. <br/><br/>Kolumna <b>Ukryte</b> zawiera pola, które mogą zostać dodane do kolumn Domyślne lub Dostępne.'
        ,
            'savebtn' => 'Kliknij <b>Zapisz i zainstaluj</b> aby zapisać zmiany i uaktywnić je w module.',
            'historyBtn' => 'Kliknij <b>Zobacz historię</b> jeśli chcesz przejrzeć i przywrócić poprzednio zapisany wygląd z historii.',
            'historyDefault' => 'Kliknij Przywróć domyślne, aby przywrócić widok do oryginalnego układu.',
            'Hidden' => 'Pola <b>Ukryte</b> nie pojawią się w subpanelu.',
            'Available' => '<b>Dostępne</b> pola nie są wyświetlane domyślnie, ale mogą być dodawane do widoku listy przez użytkowników.',
            'Default' => '<b>Domyślne</b> pojawią się w subpanelu.'
        ),
        'popupListViewEditor' => array(
            'modify' => 'Wszystkie pola, które mogą zostać wyświetlone w <b>Widoku listy</b> pojawią się tutaj.<br><br>Kolumna <b>Domyślne</b> zawiera te pola, które są wyświetlone w Widoku listy domyślnie.<br/><br/>Kolumna <b>Dostępne</b> zawiera pola, które mogą zostać wybrane przez użytkownika w celu utworzenia własnego widoku listy. <br/><br/>Kolumna <b>Ukryte</b> zawiera pola, które mogą zostać dodane do kolumn Domyślne lub Dostępne.'
        ,
            'savebtn' => 'Kliknij <b>Zapisz i zainstaluj</b> aby zapisać wykonane zmiany i uaktywnić je w module.',
            'historyBtn' => 'Kliknij <b>Zobacz historię</b>, aby zobaczyć historię zmian, lub przywrócić porzednio zachowany widok.',
            'historyDefault' => 'Kliknij Przywróć domyślne, aby przywrócić widok do oryginalnego układu.',
            'Hidden' => 'Pola <b>Ukryte</b> nie są obecnie dostępne dla użytkowników w widoku listy.',
            'Default' => 'Pola <b>Domyślne</b>, widoczne w widoku listy nie są edytowalne przez użytkowników.'
        ),
        'searchViewEditor' => array(
            'modify' => 'Wszystkie pola, które mogą być wyświetlane w formularzu <b>Filtra</b> pojawią się tutaj<br>Kolumna <br><b>Domyślne</b> zawiera pola, które będą wyświetlane w formularzu wyszukiwania. <br/> <br/>Kolumna <b>Ukryte</b> zawiera pola dostępne dla Ciebie jako administrator, które możesz dodać do formularza.'
        ,
            'savebtn' => 'Kliknięcie <b>Zachowaj i zainstaluj</b> zapisze wszystkie zmiany i uaktywni je',
            'Hidden' => 'Pola <b>Ukryte</b> nie pojawią się w "Wyszukaj".',
            'historyBtn' => 'Kliknij <b>Zobacz historię</b>, aby zobaczyć lub przywrócić poprzednio zachowany wygląd.',
            'historyDefault' => 'Kliknij Przywróc domyślne, aby przywrócić widok do oryginalnego układu.',
            'Default' => 'Pola <b>Domyślne</b> pojawią się w "Wyszukaj".'
        ),
        'layoutEditor' => array(
            'defaultdetailview' => 'Obszar <b>Widoku</b> zawiera  pola, które są obecnie wyświetlone w <b>Widoku szczegółowym</b>.<br/><br/><b>Skrzynka narzędziowa</b> zawiera <b>Kosz</b>, oraz elementy widoku, które mogą zostać dodane do widoku.<br><br>Zmian w widoku dokonuje się przeciągając i upuszczając elementy i pola pomiędzy <b>Skrzynkką</b> a <b>Widokiem</b> i samym widokiem.<br><br>Aby usunąć pola z widoku, przeciągnij pola do <b>Kosza</b>. Pola będą wtedy dostępne w Skrzynce narzędziowej i możliwe do dodania do widoku.',
            'defaultquickcreate' => 'Obszar <b>Widoku</b> zawiera pola, które są obecnie wyświetlone w formularzu <b>Szybkie tworzenie</b>.<br><br>Formularz ten pojawia się w subpanel dla modułu, gdy przycisk Utwórz jest klilknięty.<br/><br/><b>Skrzynka narzędziowa</b> zawiera <b>Kosz</b>, pola i elementy widoku, które mogą zostać dodane do widoku.<br><br>Zmian w widoku dokonuje się przeciągając i upuszczając elementy i pola pomiędzy <b>Skrzynkką</b> a <b>Widokiem</b> i samym widokiem.<br><br>Aby usunąć pola z widoku, przeciągnij pola do <b>Kosza</b>. Pola będą wtedy dostępne w Skrzynce narzędziowej i możliwe do dodania do widoku.',
            //this default will be used for edit view
            'default' => 'Obszar <b>Widoku</b> zawiera  pola, które są obecnie wyświetlone w <b>Widoku szczegółowym</b>.<br/><br/><b>Skrzynka narzędziowa</b> zawiera <b>Kosz</b>, oraz elementy widoku, które mogą zostać dodane do widoku.<br><br>Zmian w widoku dokonuje się przeciągając i upuszczając elementy i pola pomiędzy <b>Skrzynkką</b> a <b>Widokiem</b> i samym widokiem.<br><br>Aby usunąć pola z widoku, przeciągnij pola do <b>Kosza</b>. Pola będą wtedy dostępne w Skrzynce narzędziowej i możliwe do dodania do widoku.',
            'saveBtn' => 'Kliknij <b>Zapisz</b>, aby zabezpieczyć zmiany dokonane w wyglądzie widoku od ostatniego zapisu.<br><br>Zmiany nie będą wyświetlone w module, dopóki nie zostaną zamieszczone.',
            'historyBtn' => 'Kliknij <b>Zobacz historię</b>, aby zobaczyć lub przywrócić poprzednio zachowany widok.',
            'historyDefault' => 'Kliknij Przywróc domyślne, aby przywrócić widok do oryginalnego układu.',
            'publishBtn' => 'Kliknięcie <b>Zapisz i zainstaluj</b> by zapisać wszystkie zmiany od ostatniego zapisu i uaktywni je w module. <br><br>Widok będzie niezwłocznie wyświetlony w module.',
            'toolbox' => '<b>Skrzynka narzędziowa</b> zawiera <b>Kosz</b>, dodatkowe elementy widoku i zestaw dostępnych pól do dodania do widoku.<br/><br/>Elementy widoku i pola w Skrzynce mogą  być przeciągane i upuszcznane na widoku i vice versa.<br><br>Elementami widoku są <b>Panele</b> i <b>Wiersze</b>. Dodanie nowego wiersza lub panelu do widoku wprowadza dodatkowe miejsce dla pól do widoku.<br/><br/>Przeciągnięcie i upuszczenie pól w obrębie Skrzynki lub widoku na miejscu, zajmowanym już przez inne pole, spowoduje zamianę pozycji obu pól.<br/><br/>Pole <b>Wypełniacz</b> tworzy pustą przestrzeń w widoku, tam, gdzie zostanie umieszczone.',
            'panels' => 'Obszar <b>Widoku</b> przedstawia podgląd tego, jak będzie wyglądał w module, gdy zmiany zostaną zapisane i zamieszczone.<br/><br/>Możesz zmienić pozycję pól, wierszy i paneli, przez przeciągnięcie ich w porządane miejsce.<br/><br/>Usuwanie elementów następuje przez przeciągnięcie i upuszczenie ich do <b>Kosza</b> w Skrzynce narzędziowej. Dodawanie elementów do widoku odbywa się w odwrotnej kolejności.',
            'delete' => 'Przeciągnij i upuść dowolny element, aby usunąć go z widoku',
            'property' => 'Edytuj etykietę, dla tego pola. <br/><b>Kolejność zakładek</b> kontrole w jakiej kolejności klawisz Tab przełącza pomiędzy polami.',
        ),
        'fieldsEditor' => array(
            'default' => '<b>Pola</b>, które są dostępne dla modułu są wymienione tutaj. <br><br>Pola niestandardowe utworzone dla modułu są wyświetlane powyżej pola, które są dostępne dla modułu domyślnie. <br> <br>Aby edytować i pola, kliknij <b>Nazwę pola</b>. <br/> <br/> Aby utworzyć nowe pole, kliknij przycisk <b>Dodaj pole</b>.',
            'mbDefault' => 'Nazwy <b>Pól</b>, dostępnych w tym module są wymienione tutaj.<br><br>Aby utworzyć niestandardowe pole z wzorca, kliknij na jego nazwie.<br><br>Aby utworzyć nowe, kliknij <b>Dodaj pole</b>. Etykieta inne właściwości utworzonego pola mogą być edytowane później przez kliknięcie na nazwy pola.<br><br>Gdy moduł jest już zamieszczony, pola utworzone za pomocą Konstruktora modułów wyglądają jak pola standardowe w Edytorze modułów.',
            'addField' => 'Wybierz <b>Typ danych</b> dla nowego pola. Typ, który wybierzesz, określa rodzaj znaków wprowadzanych do pola. Na przykład tylko liczby całkowite mogą zostać wprowadzone do pola typu integer.<br><br> Określ <b>Nazwę</b> dla pola.  Nazwa musi składać się ze znaków alfanumerycznych  i nie zawierać żadnych spacji. Podkreślenia są dozwolone.<br><br> <b>Etykieta wyświetlana</b> to etykieta widoczna w widokach modułu. <b>Etykieta systemowa</b> jest używana do określenia pola w kodzie.<br><br> Zależenie od wybranego dla pola typu danych, niektóre lub wszystkie z wymienionych właściwości mogą być określone dla pola:<br><br> <b>Tekst pomocy</b> pojawia się okresowo, gdy użytkownik przeciągnie wskaźnik nad polem.<br><br> <b>Tekst komentarza</b> jest widziany tylko w Edytorze modułów &/lub w Konstruktorze modułów i może opisywać przeznaczenie pola, przydatne dla administratorów<br><br> <b>Wartość domyślna</b> jest widoczna w polu.  Użytkownicy mogą wprowadzić nową wartość, lub użyć domyślnej.<br><br> Zaznacz opcję <b>Masowa aktualizacja</b>, by móc skorzystać z funkcji masowej aktualizacji dla danego pola.<br><br>Wartość <b>Maksymalny rozmiar</b> determinuje największą ilość znaków, które mogą zostać wprowadzone do pola.<br><br> Zaznacz opcję <b>Pole wymagane</b>, aby dane pole było konieczne do wypełnienia. Wtedy trzeba będzie zawsze wprowadzić jakąś wartość dla pola, aby móc zapisać rekord zawierający to pole.<br><br> Wybierz opcję <b>Raportowalne</b> aby pole mogło być użyte w filtrach, oraz aby dane były wyświetlane w Raportach.<br><br> Wybierz opcję <b>Audytu</b>, aby móc śledzić zmiany danych pola Dzienniku zmian.<br><br>Dodatkowe właściwości mogą być określane dla poszczególnych typów danych.',
            'editField' => '<b>Etykieta wyświetlana</b> pola może być zmieniana. Inne właściwości pola - nie.<br><br>Kliknij <b>Klonuj</b>, aby utworzyć nowe pole z takimi samymi właściwościami.',
            'mbeditField' => '<b>Etykieta wyświetlana</b> pola wzorca  pola może być zmieniana. Inne właściwości pola - nie.<br><br>Kliknij <b>Klonuj</b>, aby utworzyć nowe pole z takimi samymi właściwościami.<br><br>Aby usunąć pole wzorca, tak aby nie było widoczne w module, usuń je z odpowiedniego <b>Widoku</b>.'

        ),
        'exportcustom' => array(
            'exportHelp' => 'Zmiany własne dokonane za pomocą modułu Edytora modułów w tej instancji mogą zostać spakowane i zamieszczone w innej za pomocą <b>Instalatora modułów</b>. <br><br>Wprowadź <b>Nazwę pakietu</b>. W pakiecie możesz zamieścić informacje o <b>Autorze</b> i <b>Opis</b>.<br><br>Wybierz moduł(y) przeznaczone do eksportu zawierające zmiany. Możesz wybrać tylko moduły zawierające te zmiany.<br><br>Kliknij <b>Eksport</b> aby stworzyć plik .zip pakietu zawierającego wykonane zmiany.',
            'exportCustomBtn' => 'Kliknij <b>Eksport</b>, aby utworzyć plik .zip pakietu zawierającego dostosowania, które chcesz wyeksportować.',
            'name' => 'To jest <b>Nazwa</b> pakietu - zostanie wyświetlona podczas instalacji.',
            'author' => 'Określenie <b>Autor</b> to nazwa podmiotu tworzącego pakiet. Autorem może być zarówno osoba jak i firma. Autor zostanie wyświetlony podczas instalacji modułu.',
            'description' => 'To jest <b>Opis</b> pakietu wyświetlany podczas instalacji.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Witamy w strefie <b>Narzędzia Programisty</b1>. <br/><br/>W tej strefie możesz używać narzędzi, aby tworzyć i zarządzać standardowymi i dostosowywanymi modułami i polami.',
            'studioBtn' => 'Użyj <b>Edytor modułów</b> aby dostosować zainstalowane moduły, poprzez zmianę aranżacji pól, wybór, które z nich mają być dostępne i aby tworzyć niestandardowe pola danych.',
            'mbBtn' => 'Użyj <b>Konstruktora modułów</b> aby tworzyć moduły.',
            'sugarPortalBtn' => 'Użyj <b>Edytora portalu</b> do zarządznia i zmieniania portalu.',
            'dropDownEditorBtn' => 'Użyj <b>Edytora list rozwijanych</b> aby dodać i edytować globalne listy wyboru.',
            'appBtn' => 'Tryb aplikacji działa, gdy chcesz dostosować różne właściwości programu, takie jak np. jak dużo TPS raportów jest wyświetlanych na stronie głównej.',
            'backBtn' => 'Powrót do poprzedniego kroku.',
            'studioHelp' => 'Użyj <b>Edytor modułów</b> aby określić co i jak informacje zostaną wyświetlone w modułach.',
            'moduleBtn' => 'Kliknij, aby edytować ten moduł.',
            'moduleHelp' => 'Wybierz element modułu, który chcesz edytować.',
            'fieldsBtn' => 'Zdecyduj, które informacje są zapisywane w module, poprzez sterowanie <b>Polami</b> w module.<br/><br/>Tutaj możesz także edytować i tworzyć niestandardowe pola.',
            'labelsBtn' => 'Edytuj <b>Etykiety</b>, które są wyświetlane dla pól i innych tytułów w module.',
            'relationshipsBtn' => 'Dodaj nową, lub obejrzyj istniejące <b>Zależności</b> dla modułu.',
            'layoutsBtn' => 'Dostosuj <b>Wyglądy</b> modułu.  Wyglądy są innymi widokami modułu, zawierającego pola.<br><br>Możesz ustalić, które pola bedą widoczne i jak zostaną uszeregowane w każdym z wyglądów.',
            'subpanelBtn' => 'Ustal, które pola pojawią się w  <b>subpanel</b> modułu.',
            'portalBtn' => 'Dostosuj <b>Wyglądy</b> modułu, które pojawią sie w <b>Portalu SuiteCRM</b>.',
            'layoutsHelp' => '<b>Wyglądy</b> modułu, które mogą być dostosowywane są pokazane tutaj<br><br>Wyglądy wyświetlają pola i ich zawartość<br><br>Kliknij na ikonie, aby wybrać wygląd do edycji.',
            'subpanelHelp' => '<b>subpanel</b> w module, które mogą być dostosowywane są widoczne tutaj.<br><br>Kliknij na ikonie, aby wybrać moduł do edycji.',
            'newPackage' => 'Kliknij <b>Nowy Pakiet</b> by utworzyć nowy pakiet.',
            'exportBtn' => 'Kliknij  <b>Eksportuj dostosowania</b>, aby zbudować pakiet zawierający niestandardowe modyfikacje, stworzone w Edytorze modułów, dla określonego modułu.',
            'mbHelp' => '<b>Konstruktor modułów</b> jest używany do tworzenia pakietów zawierających dostosowane przez Ciebie moduły, bazujące na standardowych, lub własnych modułach.',
            'viewBtnEditView' => 'Dostosuj <b>Widok edycji</b> modułu.<br><br>Ten widok to formularz zawierający pola zbierające dane wprowadzanie przez użytkownika.',
            'viewBtnDetailView' => 'Dostosuj <b>Widok szczegółowy</b> modułu.<br><br>Ten widok to formularz zawierający pola zbierające dane wprowadzanie przez użytkownika.',
            'viewBtnDashlet' => 'Dostosuj <b>Widżety SuiteCRM</b> modułu, włącznie z widokami listy i wyszukiwania.<br><br> Widżet będzie można dodać do stron w module Strony głównej.',
            'viewBtnListView' => 'Dostosuj <b>Widok listy</b> modułu.<br><br>Wynik wyszukiwania pojawi się w widoku listy.',
            'searchBtn' => 'Dostosuj widok <b>Szukaj</b>.<br><br>Określ jakie pola mogą zostać użyte do filtrowania rekordów, które pojawią się w widoku listy.',
            'viewBtnQuickCreate' => 'Dostosuj widok <b>Szybkie tworzenie</b>.<br><br>Formularz szybkiego tworzenia pojawia się w subpanel i w module poczty.',
            'addLayoutHelp' => "Aby utworzyć niestandardowy układ dla Grup bezpieczeństwa, wybierz odpowiednią Grupę i skopiuj układ, który będzie podstawą do tworzenia układu niestandardowego.",
            'searchHelp' => 'Tutaj pojawiają się <b>Filtry</b> formularzy, które można dostosować. <br><br>Formularze filtrów zawierają pola do filtrowania rekordów. <br><br>Kliknij ikonę, aby wybrać układ filtrów do edycji.',
            'dashletHelp' => 'Wyglądy <b>Widżetów</b>, które może zostać zmienione pojawi się tutaj.<br><br>Widżety będą dostępne do użytku pojawią się na Stronie głównej.',
            'DashletListViewBtn' => '<b>Widok listy widżetów</b> wyświetla rekordy bazując na filtrach wyszukiwania widżetów.',
            'DashletSearchViewBtn' => '<b>Znajdź widżet</b> filtruje rekordy do widoku listy widżetów.',
            'popupHelp' => '<b> Wyskakujące </b> układy, które mogą być indywidualizowane pojawiają się tutaj.',
            'PopupListViewBtn' => '<b> Wyskakujący widok listy </b> wyświetla rekordy oparte na wyskakujących widokach wyszukiwania.',
            'PopupSearchViewBtn' => '<b> Wyskakujące okno wyszukiwania </b> wyświetla rekordy dla wyskakującego widoku listy.',
            'BasicSearchBtn' => 'Dostosuj formularz <b>Szybkiego filtrowania</b>, który pojawia się w karcie Szybki filtr w obszarze Filtr dla modułu.',
            'AdvancedSearchBtn' => 'Dostosuj formularz <b>Filtr zaawansowany</b>, który pojawia się na karcie Filtr zaawansowany w obszarze Filtr dla modułu.',
            'portalHelp' => 'Zarządzaj i dostosuj <b>Portal SuiteCRM</b>.',
            'SPUploadCSS' => 'Załaduj <b>Arkusz stylów</b> dla Portalu SuiteCRM.',
            'SPSync' => '<b>Synchronizuj</b> dostosowywane elementy z instancją Portalu SuiteCRM.',
            'Layouts' => 'Dostosuj <b>Wygląd</b> modułów portalu SuiteCRM.',
            'portalLayoutHelp' => 'Moduły w Portalu pojawiają się w tym obszarze.<br><br>Wybierz moduł, aby móc edytować <b>Wygląd</b>.',
            'relationshipsHelp' => 'Wszystkie <b>Zależności</b>, które istnieją pomiędzy modułami nadrzędnymi i podległymi pojawiają się tutaj.<br><br><b>Nazwa</b> zależności jest generowana automatycznie przez system.<br><br><b>Moduł Nadrzędny</b> to moduł, do którego należą wszystkie zależności. Na przykład, wszystkie właściwości, dla których moduł Klienci jest modułem nadrzędnym, są przechowywane w tabelach bazy danych dla modułu Klienci.<br><br>Kliknij wiersz w tabeli zależności, aby zobaczyć jej właściwości.<br><br>Kliknij <b>Dodaj zależność</b> w celu utworzenia nowej zależności.<br><br>Zależności mogą być tworzone pomiędzy dowolnymi zamieszczonymi już modułami.',
            'relationshipHelp' => '<b>Zależności</b> tworzą się pomiędzy modułem nadrzędnym i innym opublikowanym modułem.<br><br> Powiązania są przedstawione wizualnie jako subpanel i połączone pola w rekordach modułu.<br><br> Jeśli powiązanie już istnieje pomiędzy dwoma modułami, każde nowe powiązanie stworzona pomiędzy nimi nie będzie dodatkowo uwidoczniona.<br><br> Wybierz jedną z następujących zależności<b>Typy zależności</b> dla modułu:<br><br> <b>Jeden-do-jednego</b> - oba rekordy w modułach będą zawierać połączone pola.<br><br> <b>Jeden-do-wielu</b> - Rekord modułu nadrzędnego będzie zawierał subpanel, a rekord modułu podrzędnego - połączone pole.<br><br> <b>Wielu-do-Wielu</b> - W rekordach obu modułów wyświetlą się subpanele.<br><br> Wybierz <b>Moduły połączone </b> dla powiązania. <br><br> Jeżeli typ zależności powoduje utworzenie subpaneli, wybierz rodzaj subpanelu dla właściwego modułu.<br><br> Kliknij <b>Zapisz</b>, aby utworzyć zależności.',
            'convertLeadHelp' => 'Tutaj możesz dodać moduły do konwertowania ekranu układu i modyfikowania układów istniejących modułów. Możesz zmienić kolejność przesuwając wiersze w tabeli.<br /><br /><b> Moduł: </b> Nazwa modułu <br /><br /><b> Wymagane: </b> Wymagane moduły muszą być utworzone lub wybrane zanim Potencjalny Klient może być skonwertowany.<br /><br /><b> Kopiuj dane: </b> Jeśli zaznaczone, pola z Potencjalnego Klienta będą skopiowane do pól o tej samej nazwie w nowo utworzonych rekordach.<br /><br /><b> Pozwól na selekcję: </b> Moduły z powiązanym polem w Kontaktach mogą być wybrane zamiast tworzone podczas procesu konwertowania Potencjalnego Klienta.<br /><br /><b> Edytuj: </b> Modyfikuj układ konwertowania dla tego modułu.<br /><br /><b> Usuń: </b> Usuń ten moduł z układu konwertowania.',


            'editDropDownBtn' => 'Edytuj globalny słownik',
            'addDropDownBtn' => 'Dodaj nową globalną listę rozwijaną',
        ),
        'fieldsHelp' => array(
            'default' => '<b>Pola</b> w module są wymienione tutaj według nazw. <br><br>Szablon zawiera zestaw wstępnie zdefiniowanych pól. <br> <br>, Aby utworzyć nowe pole, kliknij przycisk <b>Dodaj pole</b>. <br><br>Aby edytować pola, kliknij <b>Nazwę pola</b>. <br/> <br/> Po zakończeniu wdrożenia modułu, nowe pola utworzone w Konstruktorze modułów, wraz z szablonami pola, będą traktowane jako standardowe pola w Edytorze modułów.',
        ),
        'relationshipsHelp' => array(
            'default' => '<b>Relacje</b>, które zostały utworzone między modułem i innymi modułami pojawiają się tutaj. <br><br><b>Nazwa</b> relacji jest generowana dla tej konkretnej relacji. <br> <br><b>Podstawowy moduł</b> to moduł, który jest właścicielem relacji. Właściwości relacji są przechowywane w tabelach bazy danych należących do modułu podstawowego. <br><br><b>Typ</b> jest typem relacji istniejącym pomiędzy modułem podstawowym i <b>Modułem powiązanym</b>. <br><br>kliknij kolumnę Tytuł, aby sortować według kolumny. <br><br>Kliknij wiersz w tabeli relacji aby wyświetlać i edytować właściwości skojarzonych z tą relacją. <br> <br>Kliknij przycisk <b>Dodaj relację</b>, aby utworzyć nową relację.',
            'addrelbtn' => 'przesuń kursor myszy nad pomoc aby dodać powiązanie...',
            'addRelationship' => '<b>Powiązania</b> mogą być tworzone pomiędzy modułem i innym modułe dostosowywanym, lub już zamieszczonym.<br><br> Powiązania są wyrażone wizualnie pomiędzy subpanel i połączonymi polami w rekordach modułu.<br><br>Wybierz jedną z następujących <b>Typów</b> powiązania dla modułu:<br><br> <b>Jeden-do-jednego</b> - Rekordy obu modułów zawierają połączone pola.<br><br> <b>Jeden-do-wielu</b> - Rekord modułu nadrzędnego będzie zawierał subpanel, a rekordy modułów połączonych - połączone pola.<br><br> <b>Wiele-do-wielu</b> - Rekordy obu modułów będą zawierały subpanel.<br><br> Wybierz <b>Połączone moduły</b> dla powiązania. <br><br>Jeśli powiązanie jest skonstruowane z użyciem subpanel, wybierz widok subpanel dla właściwych modułów.<br><br> Kliknij <b>Zapisz</b> aby utworzyć powiązanie.',
        ),
        'labelsHelp' => array(
            'default' => '<b>Etykiety</b> pól i innych tytułów w module mogą być zmieniane. <br><br>Edytuj etykietę klikając w pole, wprowadzając nową etykietę i klikając przycisk <b>Zapisz</b>. <br> <br>, Jeśli wszystkie pakiety językowe są zainstalowane w aplikacji, można wybrać <b>Język</b> używany dla etykiety.',
            'saveBtn' => 'Kliknij przycisk <b>Zapisz</b>, aby zapisać wszystkie zmiany.',
            'publishBtn' => 'Kliknij przycisk <b>Zapisz i publikuj</b> aby zapisać wszystkie zmiany i je uaktywnić.',
        ),
        'portalSync' => array(
            'default' => 'Wprowadź <b>Adres URL portalu SuiteCRM</b> przeznaczonego do aktualizacji i kliknij przycisk <b>Idź</b>. <br><br>Następnie wpisz nazwę użytkownika, hasło i kliknij przycisk <b>Rozpocznij Synchronizację</b>. <br> <br>Dostosowania dokonane w <b>układach</b> portalu SuiteCRM, wraz z <b>Arkuszem stylów</b> jeśli został załadowany, zostaną przeniesione do określonej instancji portalu.',
        ),
        'portalStyle' => array(
            'default' => 'Można dostosować wygląd portalu SuiteCRM przy użyciu arkusza stylów. <br><br>Wybierz <b>Arkusz stylów</b> których chcesz załadować. <br> <br>Arkusz stylów zostanie wdrożony w portalu SuiteCRM następnym razem, gdy wykonywana będzie synchronizacja.',
        ),
    ),

    'assistantHelp' => array(
        'package' => array(
            //custom begin
            'nopackages' => 'Aby rozpocząć nowy projekt, kliknij <b>Nową paczkę</b>, aby stworzyć miejsce na pliki Twojego modułu. <br/><br/>Każda paczka może zawierać jeden lub więcej modułów.<br/>Dla instancji, możesz stworzyć własną paczkę, zawierającą nowy moduł połączony ze standardowym modułem Klienci. Możesz również stworzyć paczkę zawierającą kilka modułów, pracujących razem jako projekt i połączonych z modułami istniejącymi standardowo w aplikacji.',
            'somepackages' => '<b>Paczka</b> przechowuje stworzone przez użytkownika moduły, które wszystkie są składnikami jednego projektu. Paczka może zawierać jeden lub więcej stworzonych <b>modułów</b>, które mogą być połączone razem, lub z innymi modułami aplikacji.<br/><br/>Po utworzeniu paczki, możesz tworzyć moduły od razu, lub pozostawić ją do późniejszej edycji.<br><br>Gdy projekt jest skończony, możesz <b>Zamieścić</b> paczkę, tworząc własny moduł do zainstalowania w aplikacji.',
            'afterSave' => 'Paczka powinna zawierać przynajmniej jeden moduł. Możesz stworzyć jeden lub więcej własnych modułów w obrębie jednej paczki.<br/><br/>Kliknij na <b>Nowy moduł</b>, aby utworzyć własny moduł dla tej paczki.<br/><br/> Po utworzeniu ostatniego modułu, możesz opublikować, lub zamieścić paczkę, co udostępni ją dla Twojej instancji i/lub użytkowników.<br/><br/> Aby zamieścić paczkę jednym ruchem w Twojej instancji, kliknij <b>Zamieść</b>.<br><br>Kliknij <b>Publikuj</b>, aby zapisać projekt w pliku .zip. Gdy zostanie on zachowany w Twoim systemie, użyj <b>Instalatora modułów</b>, aby załadować i zainstalować paczkę w Twoim systemie. <br/><br/>Możesz ją dowolnie dystrybuować pomiędzy różnymi instalacjami SuiteCRM.',
            'create' => '<b>Pakiet</b> działa jako kontener dla niestandardowych modułów, z których wszystkie są częścią jednego projektu. Pakiet może zawierać jeden lub więcej niestandardowych <b>modułów</b>, które mogą być związane ze sobą lub z innymi modułami w aplikacji. <br/> <br/> Po utworzeniu pakietu dla swojego projektu, można utworzyć moduł pakietu od razu, lub można powrócić do Kreatora modułów w późniejszym czasie w celu ukończenia projektu.',
        ),
        'main' => array(
            'welcome' => 'Użyj <b>Narzędzi developera</b> do tworzenia i zarządzania standardowymi i własnymi modułami i polami. <br/><br/>Do zarządzania modułami w aplikacji służy stiudio <b>Edytor modułów</b>. <br/><br/>Do tworzenia własnych modułów - <b>Konstruktor modułów</b>.',
            'studioWelcome' => 'Wszystkie zainstalowane obecnie moduły, zarówno standardowe, jak i obiekty ładowane, są edytowalne w Edytorze modułów.'
        ),
        'module' => array(
            'somemodules' => "Gdy tworzona paczka zawiera już co najmniej jeden moduł, możesz <b>Zamieścić</b> go, jako paczkę w instancji SuiteCRM, lub <b>Publikować</b> ją jako pakiet do zainstalowania w tej, lub innej instancji, używając <b>Instalatora modułów</b>.<br/><br/>Aby zainstalować paczkę bezpośrednio w Twojej instancji SuiteCRM, kliknij <b>Zamieść</b>.<br><br>Aby utworzyć paczkę, możliwą do zainstalowania w różnych instancjach, za pomocą <b>Instalatora modułów</b>, musisz stworzyć plik .zip, klikając <b>Publikuj</b>.<br/><br/> Możesz budować moduły w paczce etapami i publikować, lub zamieszczać gdy tylko zechcesz. <br/><br/>Po publikacji lub zamieszczeniu paczki, możesz dalej dokonywać zmian i zmieniać właściwości modułów. Potem ponownie dokonaj publikacji lub zamieszczenia, aby zaaprobować zmiany.",
            'editView' => 'Tutaj możesz edytować istniejące pola, lb w lewym panelu dodawać nowe.',
            'create' => 'Gdy wybierasz <b>Typ</b> modułu, który chcesz stworzyć, jednocześnie wybierasz typ pól, które znajdą się w module. <br/><br/>Każdy wzorzec modułu zawiera zestaw pól właściwy dla konkretnego typu modułu, określony prze jego nazwę.<br/><br/><b>Podstawowy</b> - zawiera podstawowe pola, które pojawiają się w standardowych modułach. Te pola to np. Nazwa, Przydzielone do, Zespół, Data utworzenia lub Opis.<br/><br/> <b>Firma</b> - Zawiera pola typowe dla określenia organizacji, takie jak Nazwa firmy, jej adres i dane do fakturowania.  Używaj tego wzorca, do tworzenia modułów podobnych do standardowego modułu Klienci.<br/><br/> <b>Osoba</b> - Zawiera pola służące do określenia osób, takie jak Pozdrowienie, Tytuł, Imię, Adres i numer telefonu.  Używaj tego wzorca, do tworzenia modułów podobnych do standardowych modułów Kontakty i Wizytówki.<br/><br/><b>Cecha</b> - Zawiera pola specyficzne dla modułu Sprawy lub do określenia błędów, takie jak numer, status, priorytet lub opis. Używaj tego wzorca, do tworzenia modułów podobnych do standardowych modułów Sprawy lub Śledzenia błędów.<br/><br/>Uwaga: Po utworzeniu modułu, możesz edytować etykiety pól wzorca, podobnie jak własnych pól, dodanych do wyglądu modułu.',
            'afterSave' => 'Dostosuj moduł do własnych potrzeb poprzez edycję i tworzenie pól, nawiązywanie relacji z innymi modułami i rozmieszczanie pól w poszczególnych widokach. <br/> <br/> Aby wyświetlić pola szablonu i zarządzać polami niestandardowymi w module, kliknij przycisk <b>Przeglądaj pola</b>. <br/> <br/> Aby tworzyć i zarządzać relacjami pomiędzy modułem a innymi modułami - niezależnie czy są to moduły istniejące, standardowe czy niestandardowe w ramach tego samego pakietu - kliknij przycisk <b>Przeglądaj relacje</b>. <br/> <br/> Aby edytować widoki modułów, kliknij przycisk <b>Przeglądaj widoki</b>. Można zmienić widok szczegółowy, widok edycji i widok listy w taki sam sposób jak w przypadku modułów dostępnych w Edytorze modułów. <br/> <br/> Aby utworzyć moduł z takimi samymi właściwościami jak istniejący moduł, kliknij przycisk <b>Kopiuj</b>. Następnie możesz dostosować nowy moduł według potrzeb.',
            'viewfields' => 'Pola w module mogą być dowlnie edytowane.<br/><br/>Nie możesz usunąć standardowych pól, ale możesz wyłączyć je w widokach na stronie wyglądu. <br/><br/>Możesz natomiast edytować etykiety pól standardowych. Inne ich właściwości nie mogą być edytowane. Możesz poza tym szybko tworzyć nowe pola, o podobnych właściwościach poprzez kliknięcie  na nazwie pola, a następnie na przycisku <b>Klonuj</b> w formularzu <b>Właświwości</b>.  Wprowadź nowe właściwości i kliknij <b>Zapisz</b>.<br/><br/>Jeśli dostosowujesz nowy moduł, a został on już zainstalowany, nie wszystkie z właściwości pól mogą być edytowane.  Należy określić zatem wszystkie właściwości dla pól standardowych i własnych, zanim paczka zawierająca moduł zostanie opublikowana lub zainstalowana.',
            'viewrelationships' => 'Możesz towrzyć powiązania wiele-do-wielu pomiędzy bieżącym modułem, a innymi modułami w paczce i/lub pomiędzy bieżącym modułem, a modułami zainstalowanymi w aplikacji.<br><br> Aby utworzyć powiązanie jeden-do-wielu i jeden-do-jednego, kliknij <b>Połączenie</b> i <b>Stwórz połaczenie</b> pomiędzy polami w module.',
            'viewlayouts' => 'Możesz kontrolować, które z pól są dostępne do gromadzenia danych w <b>Widoku edycji</b>.  Możesz także kontrolować jakie dane są wyświetlane w <b>Widoku szczegółowym</b>.  Widoki nie muszą zawierać takich samych danych. <br/><br/>Formularz szybkiego tworzenia jest wyświetlony, gdy klikniesz przycisk <b>Utwórz</b> w subapnelu modułu. Domyślnie wygląd formularza <b>Szybkiego tworzenia</b> jest taki sam, jak wygląd <b>Widoku edycji</b>. Możesz dostosowywać formularz szybkiego tworzenia tak, aby zawierał mniej lub więcej pól niż wygląd widoku edycji. <br><br>Możesz dostosować również poziom bezpieczeństwa dla wyglądu, korzystając z <b>Zarządzania Profilami uprawnień</b>.<br><br>',
            'existingModule' => 'Po utworzeniu i dostosowaniu modułu, możesz tworzyć następne moduły, lub <b>Publikować</b> lub <b>Zamieścić</b> paczkę.<br><br>Aby utworzyć dodatkowe moduły, kliknij <b>Duplikuj</b>, w celu stworzenia modułu o takich samych właściwościach, jak bieżący, lub cofnij się i kliknij <b>Nowy moduł</b>.<br><br> Jeśli jesteś gotowy do <b>Publikacji</b> lub <b>Zamieszczenia</b> paczki zawierającej ten moduł, cofnij się do poziomu zarządzania paczką Możesz zamieścić, lub opublikować paczkę, zawierającą co najmniej jeden moduł.',
            'labels' => 'Etykiety pol standardowych i własnych mogą być zmieniane. Zmiana etykiet nie będzie miała wpływu na wprowadzone do nich dane.',
        ),
        'listViewEditor' => array(
            'modify' => 'Istnieją trzy kolumny wyświetlane po lewej stronie. Kolumna "Domyślne" zawiera pola, które są wyświetlane w widoku listy domyślnie. Kolumna "Dostępne" zawiera pola, które użytkownik może używać do tworzenia widoku listy niestandardowej, natomiast kolumna "Ukryty" zawiera pola dostępne dla ciebie, jako administratora, które możesz dodać do kolumn Domyślne i Dostępne dla użytkowników, lecz obecnie są dla nich wyłączone.',
            'savebtn' => 'Kliknięcie <b>Zapisz</b> zachowa wszystkie zmiany i uaktywni je.',
            'Hidden' => 'Pola ukryte to pola, które nie są obecnie dostępne dla użytkowników w widoku listy.',
            'Available' => 'Pola dostępne to pola, które nie są widoczne domyślnie, ale mogą zostać włączone przez użytkowników.',
            'Default' => 'Pola domyślne są wyświetlane użytkownikom, którzy nie modyifkowali widoków listy.'
        ),

        'searchViewEditor' => array(
            'modify' => 'Istnieją dwie kolumny wyświetlane po lewej stronie. Kolumna "Domyślne" zawiera pola, które będą wyświetlane w Widoku wyszukiwania, natomiast kolumna "Ukryte" zawiera pola, które jako administrator możesz dodać do widoku.',
            'savebtn' => 'Kliknięcie <b>Zachowaj i opublikuj</b> zachowa wszystkie zmiany i uaktywni je.',
            'Hidden' => 'Pola ukryte nie będą wyświetlane w widoku wyszukiwania.',
            'Default' => 'Pola domyślne będą wyświetlane w widoku wyszukiwania.'
        ),
        'layoutEditor' => array(
            'default' => 'Po lewej stronie są wyświetlone dwie kolumny. Prawa, oznaczona jako <b>Widok bieżący</b> lub <b>Podgląd widoku</b>, to miejsce, którym możesz zmieniać wygląd modułu. Lewa - <b>Szkynka narzędziowa</b>, zawiera użyteczne elementy i narzędzia, przydatne w edycji wyglądu. <br/><br/>Jeśli obszar edycji jest oznaczony jako <b>Bieżący wygląd</b>, pracujesz wtedy na kopii wyświetlanego wyglądu.<br/><br/>Jeśli jest to <b>Podgląd Widoku</b>, to pracujesz na wyglądze utworzonym, za pomocą klawisza <b>Zachowaj</b>. Może to być wersja inna od tego, co widzielu użytkownicy.',
            'saveBtn' => 'Kliknięcie na klawisz zachowa wygląd, możesz temu zapobiec. Gdy cofniesz się, rozpoczniesz od tego zmienionego wyglądu. Twój utworzony widok, nie będzie widziany przez użytkowników modułu dopuki nie klikniesz klawisz <b>Zachowaj</b> i <b>Publikuj</b>.',
            'publishBtn' => 'Kliknij klawisz, aby zamieścić wygląd. Oznacza to, że zostanie on niezwłocznie wyświetlony użytkoniwkom tego modułu.',
            'toolbox' => '<b>Skrzynka narzędziowa</b> zawiera przeróżne użyteczne funkcje, służące do edycji wyglądu, takie jak obszar kosza, zestaw dodatkowych elementów i zestaw dostępnych pól. Każdy z nich może być przeciągnięty i upuszczony na wygląd.',
            'panels' => 'Ten obszar pokazuje jak będzie wyglądał Twój wygląd, dla użytkowników modułu, gdy zostanie zamieszczony.<br/><br/>Możesz przemieszczać elementy, takie jak pola, wiersze i panele,używając techniki <b>przeciągnij i upuść</b>. W ten sam sposób usuwasz elementy przesuwająć je nad obszar kosza w skrzynce narzędziowej, lub dodajesz nowe, wyciągając je ze skrzynki i przesuwając na pożądaną pozycję w obszasze edycji widoku.'
        ),
        'dropdownEditor' => array(
            'default' => 'Po lewej stronie są wyświetlone dwie kolumny. Prawa z nich, oznaczona jako Bieżący widok, lub podgląd widoku, to ta, w której zmieniasz widok modułu. Lewa zawiera skrzynkę narzędziową, z użytecznymi elementami i narzędziami, których można użyć do edycji wyglądu. <br/><br/>Jeśli obszar wyglądu jest oznaczony jako bieżący, pracujesz na kopii bieżącego wyglądu modułu.<br/><br/>Jeśli obszar jest oznaczony jako Podgląd widoku, pracujesz na stworzonym wcześniej -po naciśnięciu klawisza Zachowaj - zatem może on być już zmieniony w stosunku do tego, co widzą Użytkownicy.',
            'dropdownaddbtn' => 'Kliknięcie tego przycisku spowoduje dodanie nowej pozycji do listy rozwijanej.',

        ),
        'exportcustom' => array(
            'exportHelp' => 'Zmiany własne dokonane za pomocą Edytora modułów w tej instancji mogą zostać spakowane i zainstalowane w innej. <br><br>Wprowadź <b>Nazwę pakietu</b>. W pakiecie możesz zamieścić informacje o <b>Autorze</b> i <b>Opis</b>.<br><br>Wybierz moduł(y),przeznaczone do eksportu,zawierające zmiany własne. (Możesz wybrać tylko moduły zawierające te zmiany)<br><br>Kliknij <b>Eksport</b>, aby stworzyć plik .zip pakietu zawierającego zmiany własne. Plik .zip może zostać załadowany do innej instancji za pomocą <b>Instalatora modułów</b>.',
            'exportCustomBtn' => 'Kliknij <b>Eksport</b>, aby utworzyć plik .zip pakietu zawierającego dostosowania, które chcesz wyeksportować.',
            'name' => '<b>Nazwa</b> pakietu zostanie wyświetlona w Instalatorze modułów, po tym jak pakiet zostanie przygotowany do instalacji w Edytorze modułów.',
            'author' => 'Określenie <b>Autor</b> to nazwa podmiotu tworzącego pakiet. Autorem może być zarówno osoba jak i firma.<br><br>Autor zostanie wyświetlony w Instalatorze modułów, po tym, jak pakiet zostanie przygotowany do instalacji w Edytorze modułów.',
            'description' => '<b>Opis</b> pakietu zostanie wyświetlony w Instalatorze modułów, po tym, jak pakiet zostanie przygotowany do instalacji w Edytorze modułów.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Witamy w strefie <b>Narzędzia Programisty</b>. <br/><br/>W tej strefie możesz używać narzędzi, aby tworzyć i zarządzać standardowymi i dostosowanymi modułami i polami.',
            'studioBtn' => 'Użyj <b>Edytora modułów</b> aby dostosować zainstalowane moduły, poprzez zmianę aranżacji pól, wybór, które z nich mają być dostępne i tworzenie własnych pól danych.',
            'mbBtn' => 'Użyj <b>Konstruktora modułów</b> aby tworzyć moduły.',
            'appBtn' => 'Użyj trybu aplikacji aby dostosować różne cechy programu, takie jak np. jak dużo raportów TPS ma się pojawiać na stronie głównej',
            'backBtn' => 'Powrót do poprzedniego kroku.',
            'studioHelp' => 'Użyj <b>Edytora modułów</b> aby dostosować zainstalowane moduły.',
            'moduleBtn' => 'Kliknij, aby edytować ten moduł.',
            'moduleHelp' => 'Wybierz element modułu, który chcesz edytować.',
            'fieldsBtn' => 'Zdecyduj, które informacje są zapisywane w module, poprzez sterowanie <b>Polami</b> w module.<br/><br/>Tutaj możesz także edytować i tworzyć własne pola.',
            'labelsBtn' => 'Edytuj <b>Etykiety</b> aby wyświetlić wartości dla tego modułu.',
            'layoutsBtn' => 'Dostosuj <b>Wyglądy</b> Widoków edycji, szczegółów, listy i wyszukiwania.',
            'subpanelBtn' => 'Zdecyduj, jakie informacje mają pojawiać się w subpanelach w tym module.',
            'layoutsHelp' => 'Wybierz <b>Widok do edycji</b>.<br/><br/> Aby zmienić widok, który zawiera pola do wprowadzania danych, kliknij przycisk <b>Edytuj widok</b>.<br/><br/> Aby zmienić układ, który wyświetla wprowadzane dane, kliknij przycisk <b>Widok szczegółowy</b>.<br/><br/> Aby zmienić kolumny, które pojawiają się na liście domyślnej, kliknij przycisk <b>Widok listy</b>.<br/><br/>Aby zmienić podstawowe i zaawansowane układy formularzy wyszukiwania, kliknij przycisk <b>Wyszukaj</b>.',
            'subpanelHelp' => 'Wybierz <b>subpanel</b> do edycji.',
            'searchHelp' => 'Wybierz widok do edycji klikając <b>Szukaj</b>.',
            'newPackage' => 'Kliknij <b>Nowy Pakiet</b> by utworzyć nowy pakiet.',
            'mbHelp' => '<b>Witamy w Budowniczym Modułów.</b><br/><br/><b>Budowniczy Modułów</b> jest używany do tworzenia pakietów zawierających dostosowywane moduły, bazujące na standardowych, lub własnych modułach. <br/><br/>Aby rozpocząć, kliknij <b>Nowy Pakiet</b> w celu utworzenia nowego pakietu, lub wybierz pakiet do edycji.<br/><br/> <b>Pakiet</b> może być zbiorem własnych modułów, które są częścią jednego projektu. Pakiet może więc zawierać więcej niż jeden moduł własny, który może być połączony z dowolnym innym modułem w aplikacji. <br/><br/>Przykład: Możesz stworzyć pakiet, zawierający jeden moduł własny, który jest połączony ze standardowym modułem <b>Klienci</b>. lub  stworzyć kilka modułów, współpracujących ze sobą, jako projekt i będących zależnymi od modułów aplikacji.',
            'exportBtn' => 'Kliknij <b>Wyeksportuj dostosowania</b>, aby zbudować pakiet dla określonego modułu zawierający elementy stworzone przez Ciebie w Edytorze modułów.',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => 'Edytor list rozwijanych',

//STUDIO2
    'LBL_MODULEBUILDER' => 'Budowniczy Modułów',
    'LBL_STUDIO' => 'Edytor modułów',
    'LBL_DROPDOWNEDITOR' => 'Edytor list rozwijanych',
    'LBL_DEVELOPER_TOOLS' => 'Narzędzia programisty',
    'LBL_SUITEPORTAL' => 'Edytor portalu SuiteCRM',
    'LBL_PACKAGE_LIST' => 'Lista pakietów',
    'LBL_HOME' => 'Powrót do strony głównej',
    'LBL_NONE' => '-Brak-',
    'LBL_DEPLOYE_COMPLETE' => 'Publikacja zakończona',
    'LBL_DEPLOY_FAILED' => 'Wystąpił błąd podczas procesu publikacjim twój pakiet mógł nie zostać poprawnie zainstalowany.',
    'LBL_AVAILABLE_SUBPANELS' => 'Dostępne subpanele',
    'LBL_ADVANCED' => 'Zaawansowane',
    'LBL_ADVANCED_SEARCH' => 'Zaawansowany filtr wyszukiwania',
    'LBL_BASIC' => 'Podstawowe',
    'LBL_BASIC_SEARCH' => 'Szybki filtr wyszukiwania',
    'LBL_CURRENT_LAYOUT' => 'Obecny wygląd',
    'LBL_CURRENCY' => 'Waluta',
    'LBL_DASHLET' => 'Widżet SuiteCRM',
    'LBL_DASHLETLISTVIEW' => 'Widok listy widżetów SuiteCRM',
    'LBL_POPUP' => 'Wyskakujące okno widoku',
    'LBL_POPUPLISTVIEW' => 'Wyskakujące okno widoku listy',
    'LBL_POPUPSEARCH' => 'Wyskakujące okno wyszukiwania',
    'LBL_DASHLETSEARCHVIEW' => 'Wyszukiwanie widżetów SuiteCRM',
    'LBL_DETAILVIEW' => 'Widok szczegółowy',
    'LBL_DROP_HERE' => '[Upuść tutaj]',
    'LBL_EDIT' => 'Edytuj',
    'LBL_EDIT_LAYOUT' => 'Widok edycji',
    'LBL_EDIT_FIELDS' => 'Edytuj pola',
    'LBL_EDITVIEW' => 'Widok edycji',
    'LBL_FILLER' => '(wypełniacz)',
    'LBL_FIELDS' => 'Pola',
    'LBL_FAILED_TO_SAVE' => 'Nie można zapisać',
    'LBL_FAILED_PUBLISHED' => 'Nie można opublikować',
    'LBL_HOMEPAGE_PREFIX' => 'Moja',
    'LBL_LAYOUT_PREVIEW' => 'Podgląd wyglądu',
    'LBL_LAYOUTS' => 'Wyglądy',
    'LBL_LISTVIEW' => 'Widok listy',
    'LBL_MODULES' => 'Moduły:',
    'LBL_MODULE_TITLE' => 'Edytor modułów',
    'LBL_NEW_PACKAGE' => 'Nowy pakiet',
    'LBL_NEW_PANEL' => 'Nowy panel',
    'LBL_NEW_ROW' => 'Nowy wiersz',
    'LBL_PACKAGE_DELETED' => 'Pakiet usunięty',
    'LBL_PUBLISHING' => 'Publikowanie...',
    'LBL_PUBLISHED' => 'Opublikowany',
    'LBL_SELECT_FILE' => 'Wybierz plik',
    'LBL_SUBPANELS' => 'Subpanele',
    'LBL_SUBPANEL' => 'Subpanel',
    'LBL_SUBPANEL_TITLE' => 'Tytuł:',
    'LBL_SEARCH_FORMS' => 'Filtr wyszukiwania',
    'LBL_SEARCH' => 'Szukaj',
    'LBL_SEARCH_BUTTON' => 'Szukaj',
    'LBL_FILTER' => 'Filtr wyszukiwania',
    'LBL_TOOLBOX' => 'Skrzynka narzędziowa',
    'LBL_QUICKCREATE' => 'Szybkie tworzenie',
    'LBL_EDIT_DROPDOWNS' => 'Edytuj globalną listę rozwijalną',
    'LBL_ADD_DROPDOWN' => 'Dodaj nową globalną listę rozwijalną',
    'LBL_BLANK' => '-czysto-',
    'LBL_TAB_ORDER' => 'Kolejność zakładek',
    'LBL_TABDEF_TYPE' => 'Typ widoku',
    'LBL_TABDEF_TYPE_HELP' => 'Wybierz, jak ma być wyświetlana ta sekcja. Ta opcja zadziała, jeśli w tym widoku włączona została obsługa kart.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Zakładka',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panel',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'Wybierz Panel aby wyświetlać dane w widokach w postaci panelu. Wybierz Zakładka, aby dane tego panelu wyświetlane były w osobnej zakładce w poszczególnych widokach. Gdy wybierzesz Zakładkę, następujące po niej panele z ustawieniem Panel będą wyświetlane w tej zakładce. <br/> Nowa Zakładka zostanie uruchomiona dla kolejnego panelu, dla którego jest wybierzesz opcję Zakładka. Jeżeli wybierzesz opcję Zakładka dla panelu następującego bezpośrednio po pierwszym, również pierwszy panel zostanie przekształcony w zakładkę.',
    'LBL_TABDEF_COLLAPSE' => 'Zwiń',
    'LBL_TABDEF_COLLAPSE_HELP' => 'Zaznacz, aby panele były domyślnie zminimalizowane.',
    'LBL_DROPDOWN_TITLE_NAME' => 'Nazwa',
    'LBL_DROPDOWN_LANGUAGE' => 'Język',
    'LBL_DROPDOWN_ITEMS' => 'Lista elementów',
    'LBL_DROPDOWN_ITEM_NAME' => 'Nazwa elementu',
    'LBL_DROPDOWN_ITEM_LABEL' => 'Pokaż etykietę',
    'LBL_SYNC_TO_DETAILVIEW' => 'Synchronizuj do widoku szczegółowego',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Wybierz tą opcję, aby zsynchronizować ten układ widoku edycji z odpowiednim układem widoku szczegółowego. Pola w widoku edycji będą automatycznie zsynchronizowane i zapisane w widoku szczegółowym po kliknięci Zapisz & Opublikuj w widoku edycji. Zmiany w układzie nie będą mozliwe do wykonania w widoku szczegółowym.',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Ten widok szczegółowy jest zsynchronizowany z odpowiednim widokiem edycji.<br> Pola w tym widoku szczegółowym odzwierciedlają pola w widoku edycji.<br> Zmiany w widoku szczegółowym nie mogą być zapisane lub opublikowane w ramach tej strony. Dokonaj zmian lub wyłącz synchronizację układów w widoku edycji. ',
    'LBL_COPY_FROM_EDITVIEW' => 'Kopiuj z widoku edycji',
    'LBL_DROPDOWN_BLANK_WARNING' => 'Wartości są wymagane dla nazwy pozycji i etykiety wyświetlania. Aby dodać pustą pozycję, kliknij Dodaj bez wprowadzania żadnych wartości dla nazwy pozycji i etykiety wyświetlania.',
    'LBL_DROPDOWN_KEY_EXISTS' => 'Klucz już istnieje na liście',
    'LBL_NO_SAVE_ACTION' => 'Nie znaleziono akcji zapisu dla tego widoku.',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: niepoprawny format dokumentu',


//RELATIONSHIPS
    'LBL_MODULE' => 'Moduł',
    'LBL_LHS_MODULE' => 'Moduł nadrzędny',
    'LBL_CUSTOM_RELATIONSHIPS' => '* zależności tworzone w Edytorze modułów lub Budowniczym modułów',
    'LBL_RELATIONSHIPS' => 'Zależności',
    'LBL_RELATIONSHIP_EDIT' => 'Edytuj związek',
    'LBL_REL_NAME' => 'Nazwa',
    'LBL_REL_LABEL' => 'Etykieta',
    'LBL_REL_TYPE' => 'Typ',
    'LBL_RHS_MODULE' => 'Połączone moduły',
    'LBL_NO_RELS' => 'Brak zależności',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Warunki opcjonalne',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Kolumna',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'Wartość',
    'LBL_SUBPANEL_FROM' => 'Subpanel z',
    'LBL_RELATIONSHIP_ONLY' => 'Nie zostaną utworzone żadne widoczne elementy dla tej zależności jeśli są już istniejące widoczne zależności dla tych dwóch modułów.',
    'LBL_ONETOONE' => 'Jeden do jednego',
    'LBL_ONETOMANY' => 'Jeden do wielu',
    'LBL_MANYTOONE' => 'Wiele do jednego',
    'LBL_MANYTOMANY' => 'Wielu do wielu',


//STUDIO QUESTIONS
    'LBL_QUESTION_EDIT' => 'Wybierz moduł do edycji.',
    'LBL_QUESTION_LAYOUT' => 'Wybierz wygląd do edycji.',
    'LBL_QUESTION_SUBPANEL' => 'Wybierz subpanelpanel do edycji.',
    'LBL_QUESTION_SEARCH' => 'Wybierz wygląd wyszukiwania do edycji.',
    'LBL_QUESTION_MODULE' => 'Wybierz element modułu do edycji.',
    'LBL_QUESTION_PACKAGE' => 'Wybierz pakiet do edycji, lub utwórz nowy.',
    'LBL_QUESTION_EDITOR' => 'Wybierz narzędzie.',
    'LBL_QUESTION_DASHLET' => 'Wybierz wygląd widżetu do edycji.',
    'LBL_QUESTION_POPUP' => 'Wybierz wyskakujący układ do edycji.',
//CUSTOM FIELDS
    'LBL_NAME' => 'Nazwa',
    'LBL_LABELS' => 'Etykiety',
    'LBL_MASS_UPDATE' => 'Pełna aktualizacja',
    'LBL_DEFAULT_VALUE' => 'Wartość domyślna',
    'LBL_REQUIRED' => 'Wymagane',
    'LBL_DATA_TYPE' => 'Typ',
    'LBL_HCUSTOM' => 'WŁASNY',
    'LBL_HDEFAULT' => 'DOMYŚLNY',
    'LBL_LANGUAGE' => 'Język:',
    'LBL_CUSTOM_FIELDS' => '* pole utworzone w Edytorze modułów',

//SECTION
    'LBL_SECTION_EDLABELS' => 'Edytuj panele',
    'LBL_SECTION_PACKAGES' => 'Pakiety',
    'LBL_SECTION_PACKAGE' => 'Pakiet',
    'LBL_SECTION_MODULES' => 'Moduły',
    'LBL_SECTION_DROPDOWNS' => 'Listy rozwijalne',
    'LBL_SECTION_PROPERTIES' => 'Właściwości',
    'LBL_SECTION_DROPDOWNED' => 'Edytor list rozwijalnych',
    'LBL_SECTION_HELP' => 'Pomoc',
    'LBL_SECTION_MAIN' => 'Główny',
    'LBL_SECTION_FIELDEDITOR' => 'Edytor pól',
    'LBL_SECTION_DEPLOY' => 'Zamieszczanie',
    'LBL_SECTION_MODULE' => 'Moduł',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'Domyślne',
    'LBL_HIDDEN' => 'Ukryte',
    'LBL_AVAILABLE' => 'Dostępne',
    'LBL_LISTVIEW_DESCRIPTION' => 'Poniżej są wyświetlone trzy kolumy; Kolumna <b>Domyślne</b> zawierają pola, które są wyświetlone poniżej. Kolumna <b>Dodatkowe</b> zawiera pola, których Użytkownik może użyć podczas tworzenia własnego wyglądu.  Kolumna <b>Dostępne</b> wyświetla pola, które są dostępne dla Ciebie, jako administratora, a które możesz dodać do dostępnych dla Użytkowników.',
    'LBL_LISTVIEW_EDIT' => 'Edytor wyglądu listy',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'Podgląd',
    'LBL_MB_RESTORE' => 'Przywróć',
    'LBL_MB_DELETE' => 'Usuń',
    'LBL_MB_DEFAULT_LAYOUT' => 'Domyślny układ',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'Dodaj',
    'LBL_BTN_SAVE' => 'Zapisz',
    'LBL_BTN_SAVE_CHANGES' => 'Zapisz zmiany',
    'LBL_BTN_DONT_SAVE' => 'Pomiń zmiany',
    'LBL_BTN_CANCEL' => 'Anuluj',
    'LBL_BTN_CLOSE' => 'Zamknij',
    'LBL_BTN_SAVEPUBLISH' => 'Zapisz i zainstaluj',
    'LBL_BTN_CLONE' => 'Klonuj',
    'LBL_BTN_ADDROWS' => 'Dodaj wiersz',
    'LBL_BTN_ADDFIELD' => 'Dodaj pole',
    'LBL_BTN_ADDDROPDOWN' => 'Dodaj listę rozwijalną',
    'LBL_BTN_SORT_ASCENDING' => 'Sortuj rosnąco',
    'LBL_BTN_SORT_DESCENDING' => 'Sortuj malejąco',
    'LBL_BTN_EDLABELS' => 'Edytuj etykiety',
    'LBL_BTN_UNDO' => 'Cofnij',
    'LBL_BTN_REDO' => 'Przywróć',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Dodaj własne pole',
    'LBL_BTN_EXPORT' => 'Wyeksportuj własne dostosowania',
    'LBL_BTN_DUPLICATE' => 'Skopiuj',
    'LBL_BTN_PUBLISH' => 'Publikuj',
    'LBL_BTN_DEPLOY' => 'Zainstaluj',
    'LBL_BTN_EXP' => 'Eksport',
    'LBL_BTN_DELETE' => 'Usuń',
    'LBL_BTN_VIEW_LAYOUTS' => 'Zobacz wyglądy',
    'LBL_BTN_VIEW_FIELDS' => 'Zobacz pola',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'Zobacz zależności',
    'LBL_BTN_ADD_RELATIONSHIP' => 'Dodaj zależności',
    'LBL_BTN_RENAME_MODULE' => 'Zmień nazwę modułu',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'Błąd: Pole juz istnieje',
    'ERROR_INVALID_KEY_VALUE' => "Błąd: Nieprawidłowa wartość klucza: [']",
    'ERROR_NO_HISTORY' => 'Nie odnaleziono plików historii',
    'ERROR_MINIMUM_FIELDS' => 'Układ musi zawierać przynajmniej jedno pole',
    'ERROR_GENERIC_TITLE' => 'Wystąpił błąd',
    'ERROR_REQUIRED_FIELDS' => 'Czy na pewno chcesz kontynuować? W układzie brakuje następujących wymaganych pól:',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Nazwa pakietu:',
    'LBL_MODULE_NAME' => 'Nazwa modułu:',
    'LBL_AUTHOR' => 'Autor:',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_KEY' => 'Klucz:',
    'LBL_ADD_README' => 'Readme',
    'LBL_LAST_MODIFIED' => 'Ostatnio modyfikowany:',
    'LBL_NEW_MODULE' => 'Nowy moduł',
    'LBL_LABEL' => 'Etykieta:',
    'LBL_LABEL_TITLE' => 'Etykieta',
    'LBL_WIDTH' => 'Szerokość',
    'LBL_PACKAGE' => 'Paczka:',
    'LBL_TYPE' => 'Typ:',
    'LBL_NAV_TAB' => 'Zakładka nawigacyjna',
    'LBL_CREATE' => 'Utwórz',
    'LBL_LIST' => 'Lista',
    'LBL_VIEW' => 'Zobacz',
    'LBL_HISTORY' => 'Historia',
    'LBL_RESTORE_DEFAULT' => 'Przywróć domyślne',
    'LBL_ACTIVITIES' => 'Działania',
    'LBL_NEW' => 'Nowy',
    'LBL_TYPE_BASIC' => 'podstawowy',
    'LBL_TYPE_COMPANY' => 'firma',
    'LBL_TYPE_PERSON' => 'osoba',
    'LBL_TYPE_ISSUE' => 'problem',
    'LBL_TYPE_SALE' => 'sprzedaż',
    'LBL_TYPE_FILE' => 'plik',
    'LBL_RSUB' => 'To jest subpanel, który będzie wyświetlany w Twoim module',
    'LBL_MSUB' => 'To jest subpanel, który jest połączony z modułem do wyświetlenia.',
    'LBL_MB_IMPORTABLE' => 'Importowanie',

// VISIBILITY EDITOR
    'LBL_PACKAGE_WAS_DELETED' => '[[package]] został usunięty',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'Wyeksportuj dostosowania',
    'LBL_EC_NAME' => 'Nazwa pakietu:',
    'LBL_EC_AUTHOR' => 'Autor:',
    'LBL_EC_DESCRIPTION' => 'Opis:',
    'LBL_EC_CHECKERROR' => 'Wybierz moduł.',
    'LBL_EC_CUSTOMFIELD' => 'pole dostosowane',
    'LBL_EC_CUSTOMLAYOUT' => 'wygląd dostosowany',
    'LBL_EC_NOCUSTOM' => 'Żaden moduł nie został dostosowany.',
    'LBL_EC_EMPTYCUSTOM' => 'nie posiada własnych dostosowań.',
    'LBL_EC_EXPORTBTN' => 'Eksport',
    'LBL_MODULE_DEPLOYED' => 'Moduł został zamieszczony.',
    'LBL_UNDEFINED' => 'niezidentyfikowany',
    'LBL_EC_VIEWS' => 'niestandardowy(e) widok(i)',
    'LBL_EC_SUITEFEEDS' => 'niestandardowe aktualności',
    'LBL_EC_DASHLETS' => 'dostosowane widżety',
    'LBL_EC_CSS' => 'niestandardowe css',
    'LBL_EC_TPLS' => 'niestandardowe tpls',
    'LBL_EC_IMAGES' => 'niestandardowe obrazy',
    'LBL_EC_JS' => 'niestandardowe js',
    'LBL_EC_QTIP' => 'niestandardowe qtip',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => 'Nie można przywrócić danych',
    'LBL_AJAX_LOADING' => 'Ładuję...',
    'LBL_AJAX_DELETING' => 'Usuwam...',
    'LBL_AJAX_BUILDPROGRESS' => 'Budowanie trwa...',
    'LBL_AJAX_DEPLOYPROGRESS' => 'Zamieszczanie trwa...',

    'LBL_AJAX_RESPONSE_TITLE' => 'Rezultat',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'Operacja zakończona powodzeniem',
    'LBL_AJAX_LOADING_TITLE' => 'W toku..',
    'LBL_AJAX_LOADING_MESSAGE' => 'Proszę czekać, trwa ładowanie...',

//JS
    'LBL_JS_REMOVE_PACKAGE' => 'Czy na pewno chcesz usunąć ten pakiet? Spowoduje to trwałe usunięcie wszystkich plików skojarzonych z tym pakietem.',
    'LBL_JS_REMOVE_MODULE' => 'Czy na pewno chcesz usunąć ten moduł? Spowoduje to trwałe usunięcie wszystkich plików związanych z tym modułem.',
    'LBL_JS_DEPLOY_PACKAGE' => 'Wszelkie modyfikacje, które wprowadzono w Edytorze modułów będą nadpisane kiedy ten moduł zostanie ponownie załadowany. Czy na pewno chcesz kontynuować?',

    'LBL_DEPLOY_IN_PROGRESS' => 'Zamieszczanie pakietu',
    'LBL_JS_VALIDATE_NAME' => 'Nazwa - musi składać się ze znaków alfanumerycznych, bez spacji i rozpoczynać się od litery',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'Nazwa pakietu już istnieje',
    'LBL_JS_VALIDATE_KEY' => 'Klucz - musi składać się ze znaków alfanumerycznych, bez spacji i rozpoczynać się od litery',
    'LBL_JS_VALIDATE_LABEL' => 'Wprowadź etykiete, która będzie użyta jako nazwa tego modułu',
    'LBL_JS_VALIDATE_TYPE' => 'Wybierz z listy rozwijalnej typ modułu, który chcesz zbudować',
    'LBL_JS_VALIDATE_REL_LABEL' => 'Etykieta - wpisz etykietę, która będzie wyświetlana ponad subpanelem',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'Usunięcie tego pola niestandardowego spowoduje zarówno usunięcie pola niestandardowego jak i wszystkich danych odnoszących się do pola niestandardowego w bazie danych. Pole nie pojawi już się w żadnych układdzie modułu. \n\nCzy chcesz kontynuować?',

    'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'Czy na pewno chcesz usunąć tę zależność?',
    'LBL_CONFIRM_DONT_SAVE' => 'Zmiany, które zostały wprowadzone od ostatniego zapisywania. Czy chcesz zapisać teraz?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Zachować zmiany?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'Dane mogą być okrojone i nie można tego cofnąć, czy na pewno chcesz kontynuować?',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'Wybierz właściwy typ danych na informacji, które chcesz wprowadzać w tych polach.',
    'LBL_POPHELP_IMPORTABLE' => '<b>Tak</b>: Pole zostanie uwzględnione w operacji importu.<br><b>Nie</b>: Pole nie będzie uwzględnione podczas importowania.<br><b>Wymagane</b>: Wartość pola musi być podana przy każdym imporcie.',
    'LBL_POPHELP_IMAGE_WIDTH' => 'Wprowadź liczbę określającą szerokość mierzoną w pikselach.<br> Przesłany obraz zostanie przeskalowany do tej szerokości.',
    'LBL_POPHELP_IMAGE_HEIGHT' => 'Wprowadź liczbę określającą wysokość mierzoną w pikselach.<br> Przesłany obraz zostanie przeskalowany do tej wysokości.',
    'LBL_POPHELP_DUPLICATE_MERGE' => '<b>Enabled</b>: The field will appear in the Merge Duplicates feature, but will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Disabled</b>: The field will not appear in the Merge Duplicates feature, and will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Filter</b>: The field will appear in the Merge Duplicates feature, and will be available to use for the filter conditions in the Find Duplicates feature.<br><b>Default selected filter</b>: The field will appear in the Merge Duplicates feature, and will be used by default for the filter conditions in the Find Duplicates feature.<br><b>Only filter</b>: The field will not appear in the Merge Duplicates feature, but will be available to use for the filter conditions in the Find Duplicates feature.',

//Revert Module labels
    'LBL_RESET' => 'Resetuj',
    'LBL_RESET_MODULE' => 'Resetuj moduł',
    'LBL_REMOVE_CUSTOM' => 'Usuń personalizacje',
    'LBL_CLEAR_RELATIONSHIPS' => 'Wyczyść zależności',
    'LBL_RESET_LABELS' => 'Resetuj etykiety',
    'LBL_RESET_LAYOUTS' => 'Resetuj układy',
    'LBL_REMOVE_FIELDS' => 'Usuń własne pola',
    'LBL_CLEAR_EXTENSIONS' => 'Wyczyść rozszerzenia',
    'LBL_HISTORY_TIMESTAMP' => 'Znacznik czasu',
    'LBL_HISTORY_TITLE' => 'Historia',

    'fieldTypes' => array(
        'varchar' => 'Tekst',
        'int' => 'Liczba całkowita',
        'float' => 'Liczba zmiennoprzecinkowa',
        'bool' => 'Pole wyboru (prawda/fałsz)',
        'enum' => 'Lista wyboru',
        'dynamicenum' => 'Dynamiczna lista wyboru',
        'multienum' => 'Lista multi-wyboru',
        'date' => 'Data',
        'phone' => 'Telefon',
        'currency' => 'Waluta',
        'html' => 'HTML tylko do odczytu (przestarzałe, użyj TextBlock)',
        'radioenum' => 'Radio',
        'relate' => 'Powiązane',
        'address' => 'Adres',
        'text' => 'Obszar tekstu',
        'textblock' => 'Blok tekstowy',
        'url' => 'Adres URL',
        'iframe' => 'Ramka IFrame',
        'datetimecombo' => 'Data i czas',
        'decimal' => 'Dziesiętne',
        'image' => 'Obraz',
        'wysiwyg' => 'WYSIWYG',
    ),
    'labelTypes' => array(
        "frequently_used" => "Często używane etykiety",
        "all" => "Wszystkie etykiety",
    ),

    'parent' => 'Wybór zależności',

    'LBL_CONFIRM_SAVE_DROPDOWN' => "Wybierasz ten element do usunięcia z rozwijanej listy. Jakiekolwiek rozwijane pola używające tej listy z tym elementem jako wartością, nie będzie wyświetlać tej wartości, a wartość nie będzie możliwa do zaznaczenia z rozwijanej listy. Czy na pewno chcesz kontynuować?",

    'LBL_ALL_MODULES' => 'Wszystkie moduły',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (powiązane{1} ID)',
);
