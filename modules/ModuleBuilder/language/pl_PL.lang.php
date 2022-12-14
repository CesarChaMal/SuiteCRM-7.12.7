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
    'LBL_LOADING' => '??adowanie' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Ukryj opcje' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Usu??' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => 'Wprowad?? <b>Nazw??</b> dla pakietu. Musi ona sk??ada?? si?? ze znak??w alfanumerycznych i nie zawiera?? spacji. (Przyk??ad: HR_Zarz??dzanie)<br/><br/> Mo??esz poda?? <b>Autora</b> i <b>Opis</b>, jako informacj?? o pakiecie. <br/><br/>Kliknij <b>Zapisz</b> aby utworzy?? pakiet.',
            'modify' => 'W??a??ciwo??ci i mo??liwe dzia??ania na <b>pakiecie</b> pojawiaj?? si?? <b>tutaj</b>. Mo??esz zmodyfikowa?? <b>Nazwisko</b>, <b>Autora</b> oraz  <b>Opis</b> pakietu, tak jak widok  pakietu, jak r??wnie?? wszystkie jego modu??y.<br><br>Mo??esz r??wnie?? <b>Publikowa??</b> i <b>Zamieszcza??</b> pakiet, jak r??wnie?? <b>Eksportowa??</b> presonalizacje w pakiecie.',
            'name' => 'To jest <b>Nazwa</b> bie????cego pakietu. <br/><br/>Nazwa, kt??r?? wprowadzasz musi by?? z??o??ona ze znak??w alfanumerycznych, rozpoczyna?? si?? od litery i nie zawiera?? spacji. (Przyk??ad: HR_Management)',
            'author' => 'To jest okre??lenie <b>Autora</b>, kt??re jest wy??wietlane podczas instalacji, jako podmiotu tworz??cego pakiet. Autor mo??e by?? zar??wno osob??, jak i organizacj??.',
            'description' => 'To jest <b>Opis</b> pakietu wy??wietlany podczas instalacji.',
            'publishbtn' => 'Kliknij <b>Publikuj</b>, aby zapisa?? wszystkie zmiany i utworzy?? plik .zip, kt??ry jest instalacyjn?? wersj?? pakietu.<br><br>U??yj <b>Instalatora modu????w</b> aby za??adowa?? plik .zip i zainstalowa?? pakiet.',
            'deploybtn' => 'Kliknij <b>Zainstaluj</b> aby zapisa?? wprowadzone dane i zainstalowa?? pakiet, zawieraj??cy wszystkie modu??y.',
            'duplicatebtn' => 'Kliknij <b>Duplikuj</b>, aby skopiowa?? zawarto???? pakietu do nowego i aby wy??wietli?? nowy pakiet. <br/><br/>Nazwa dla nowego pakietu zostanie wygenerowana automatycznie, poprzez dodanie numeru do nazwy pakietu, z kt??rego zosta?? utworzony. Mo??esz zmieni?? nazw?? nowego pakietu przez wprowadzenie nowej <b>Nazwy</b> i klikni??cie <b>Zapisz</b>.',
            'exportbtn' => 'Kliknij <b>Eksport</b> aby utworzy?? plik .zip, zawieraj??cy personalizacje u??yte przy tworzeniu pakietu.<br><br> Wygenerowany plik zawiera kod personalizacji dla pakietu i nie jest plikiem instalacyjnym pakietu.<br><br>U??yj <b>Instalatora modu????w</b> aby zaimportowa?? plik zip, i umo??liwi?? u??ycie personalizacji w nowych pakietach.',
            'deletebtn' => 'Kliknij <b>Usu??</b> aby usuna?? pakiet i wszystkie pliki powi??zane z nim.',
            'savebtn' => 'Kliknij <b>Zapisz</b> aby zapisa?? wszystkie wprowadzone dane powi??zane z pakietem.',
            'existing_module' => 'Kliknij <b>ikon?? modu??u</b>, aby edytowa?? warto??ci i dostosowa?? pola, zale??no??ci i wygl??dy, nale????ce do tego modu??u.',
            'new_module' => 'Kliknij <b>Nowy modu??</b>, aby utworzy?? nowy modu?? dla tego pakietu.',
            'key' => 'Ten 5-cio literowy, alfanumeryczny <b>Klucz</b> b??dzie u??ywany jako przedrostek w ka??dym katalogu, nazwie klasy  i tabeli, dla ka??dego modu??u tego pakietu.<br><br>Klucz jest u??ywany w celu osi??gni??cia unikalnych nazw dla tabel.',
            'readme' => 'Mo??esz doda?? tekst <b>Readme</b> do tego pakietu.<br><br>B??dzie on dost??pny podczas instalacji.',

        ),
        'main' => array(),
        'module' => array(
            'create' => 'Podaj <b>nazw??</b> dla modu??u. <b>Etykiety</b>, kt??re podasz pojawi?? si?? w zak??adce nawigacja <br/> <br/> Aby wy??wietli?? kart?? nawigacji dla modu??u, zaznacz okienko <b>Karty nawigacji</b>. <br/> <br/> Nast??pnie wybierz typ modu??u, kt??ry chcesz utworzy??. <br/> <br/> Wybierz typ szablonu. Ka??dy szablon zawiera zbi??r p??l, a tak??e wst??pnie zdefiniowanych uk??ad??w, kt??rych mo??na u??y?? jako podstawy dla danego modu??u. <br/> <br/> Kliknij przycisk <b>Zapisz</b>, aby utworzy?? modu??.',
            'modify' => 'Mo??na zmieni?? w??a??ciwo??ci modu??u lub dostosowa?? <b>pola</b>, <b>relacje</b> i <b>uk??ad??w</b> zwi??zanych z modu??em.',
            'importable' => 'Zaznaczenie pola <b>Importowalny</b> w??aczy mo??liwo???? imoportu dla tego modu??u.<br><br>Link do kreatora importu pojawi si?? w panelu skr??t??w w module. W??a??ciwo??ci kreatora importu pozwalaj?? wprowadza?? dane z zewn??trzynch ??rode?? do w??asnego modu??u.',
            'team_security' => 'Zaznaczenie pola <b>Bezpiecze??stwo zespo??u</b> w????czy funkcj?? bezpiecze??stwa zespo??u dla tego modu??u.  <br/><br/>Je??li funkcja bezpiecze??stwa zespo????w jest w????czona dla tego modu??u, pola wybor??w dla zespo????w pojawi?? si?? w widokach tego modu??u.',
            'reportable' => 'Zaznaczenie tego pola umo??liwi wykonanie raport??w z udzia??em tego modu??u.',
            'assignable' => 'Zaznaczenie tego pola umo??liwi przydzielanie rekord??w w tym module do poszczeg??lnych u??ytkownik??w.',
            'has_tab' => 'Zaznaczenie pola <b>Zak??adka nawigacyjna</b> wy??wietli zak??adk?? nawigacyjn?? w module.',
            'acl' => 'Zaznaczenie tego pola w????czy funkcj?? kontroli dost??pu w tym module, r??wnie?? bezpiecze??stwa dla p??l.',
            'studio' => 'Zaznaczenie tego pola zezwoli administratorom dostosowywa?? ten modu?? w Edytorze modu????w.',
            'audit' => 'Zaznaczenie tego pola w????czy zapisywanie zmian w tym module. Zmiany w poszczeg??lnych polach b??d?? rejestrowane i administratorzy b??d?? mogli zobaczy?? t?? histori??.',
            'viewfieldsbtn' => 'Kliknij <b>Zobacz pola</b> aby zobaczy?? pola powi??zane z tym modu??em i w celu tworzenia lub edycji w??asnych p??l.',
            'viewrelsbtn' => 'Kliknij <b>Zale??no??ci</b> aby zobaczy?? zale??no??ci powi??zane z tym modu??em oraz w celu tworzenia lub edycji zale??no??ci.',
            'viewlayoutsbtn' => 'Kliknij <b>Zobacz widoki</b> aby zobaczy?? widoki modu??u i ustawi?? w??asny uk??ad p??l w widokach modu??u.',
            'duplicatebtn' => 'Kliknij <b>Duplikuj</b> aby skopiowa?? w??a??ciwo??ci modu??u do nowo tworzonego modu??u i wy??wietli?? go. <br/><br/> Nazwa dla nowego modu??u jest generowana automatycznie, poprzez dodanie numeru na ko??cu nazwy modu??u pierwotnego.<br><br>Mo??esz zmieni?? nazw?? nowego modu??u, wprowadzaj??c now?? <b>Nazw??</b> i klikaj??c  <b>Zachowaj</b>.',
            'deletebtn' => 'Kliknij <b>Usu??</b>, aby usun???? ten modu??.',
            'name' => 'Jest to <b>Nazwa</b> bie????cego modu??u. <br/> <br/> Nazwa musi by?? ci??giem alfanumerycznym, musi zaczyna?? si?? liter?? i nie mo??e zawiera?? spacji. (Przyk??ad: HR_Zasoby_Ludzkie)',
            'label' => 'To jest <b>Etykieta</b>, kt??ra pojawia?? si?? b??dzie na zak??adce nawigacyjnej modu??u. ',
            'savebtn' => 'Kliknij <b>Zachowaj</b>, aby zachowa?? dane powi??zane z modu??em.',
            'type_basic' => '<b>Podstawowy</b> szablon, ma zdefiniowane domy??lnie takie nazwy p??l jak nazwa, przydzielone do, zesp????, data utworzenia i opis.',
            'type_company' => 'Szablon <b>Firma</b> zawiera pola specyfinczne dla okre??lenia organizacji, jak np. Nazwa firmy, typ dzia??alno??ci, adres fakturowania.<br/><br/>U??ywaj tego wzorca do tworzenia modu????w podobnych do modu??u Klienci.',
            'type_issue' => 'Szablon <b>Problem</b> zawiera pola typowe dla spraw i ??ledzenia b????d??w, takie jak numer, status, priorytet, opis.<br/><br/>U??ywaj tego wzorca do tworzenia modu????w podobnych do modu??u Sprawy, lub ??ledzenie b????d??w.',
            'type_person' => 'Szablon <b>Osoba</b> zawiera pola typowe dla okre??lenia osoby, takie jak pozdrowienie, tytu??, nazwisko, adres i numer telefonu.<br/><br/>U??ywaj tego wzorca do tworzenia modu????w podobnych do modu??u Kontakty, czy Potencjalni klienci.',
            'type_sale' => 'Szablon <b>Sprzeda??</b> zawiera pola typowe dla modu??u okre??laj??cego ofert?? - szans?? sprzeda??y, takie jak pochodzenie adresu/kontaktu, poziom zaawansowania, kwot?? transakcji i prawdopodobie??stwo. <br/><br/>U??ywaj tego wzorca do tworzenia modu????w podobnych do standardowego modu??u Oferty.',
            'type_file' => 'Szablon <b>Plik</b> zawiera pola typowe dla modu??u okre??laj??cego prac?? na dokumentach, takie jak nazwa pliku, typ dokument lub data publikacji.<br><br>U??ywaj tego wzorca do tworzenia modu????w podobnych do modu??u zarz??dzania dokumenty.',

        ),
        'dropdowns' => array(
            'default' => 'Tutaj znajduj?? si?? wszystkie <b>listy rozwijane</b> wyst??puj??ce w aplikacji.<br><br>Listy rozwijane mog?? zosta?? u??yte w dowolnym module.<br><br>Aby wprowadzi?? zmiany w istniej??cej li??cie rozwijanej kliknij na jej nazw??.<br><br>Kliknij <b>Dodaj list?? rozwijan??</b> aby utworzy?? now??.',
            'editdropdown' => 'Listy rozwijane mog?? by?? u??ywane dla standardowych i w??asnych p??l w dowolnym module.<br><br>Wprowad?? <b>Nazw??</b> dla listy.<br><br>Je??eli w aplikacji s?? zainstalowane pakiety j??zykowe, mo??esz okre??li?? <b>J??zyk</b> element??w listy.<br><br>W polu <b>Nazwa Elementu</b> wprowad?? nazw?? dla opcji na tej li??cie. Nazwa ta nie b??dzie widoczna na li??cie widocznej dla u??ytkownik??w.<br><br>W polu <b>Wy??wietl etykiet??</b> wprowad?? etykiet??, kt??ra pojawi si?? w s??owniku.<br><br>Po wprowadzeniu nazwy elementu i etykiety, kliknij <b>Dodaj</b>, aby doda?? nowy element do listy.<br><br>W celu zmiany kolejno??ci element??w listy, przeci??gnij i upu???? elementy w po????danym miejscu.<br><br>Aby edytowa?? etykiet?? elementu, kliknij na ikon??<b>Edytuj</b>, i wprowad?? now?? etykiet??. Aby usun???? element z listy, kliknij na ikonie <b>Usu??</b>.<br><br>Aby cofn???? zmiany wprowadzone w etykietach, kliknij <b>Cofnij</b>. Aby przywr??ci?? usuni??te uprzednio zmiany, kliknij <b>Przywr????</b>.<br><br>Kliknij <b>Zapisz</b> aby zatwierdzi?? aktualny wygl??d listy.',

        ),
        'subPanelEditor' => array(
            'modify' => 'Wszystkie pola, kt??re mog?? zosta?? wy??wietlone w <b>Subpanelach</b> pojawi?? si?? tutaj.<br><br><b>Domy??lna</b> kolumna zawiera pola, kt??re s?? wy??wietlone w Subpanelu.<br/><br/><b>Ukryta</b> kolumna zawiera pola, kt??re mog?? zosta?? dodane do kolumny Domy??lnej.'
        ,
            'savebtn' => 'Kliknij <b>Zapisz i zainstaluj</b> aby zapisa?? zmiany i uaktywni?? je w module.',
            'historyBtn' => 'Kliknij <b>Zobacz histori??</b> je??li chcesz przejrze?? i przywr??ci?? poprzednio zapisany wygl??d z historii.',
            'historyDefault' => 'Kliknij przycisk<b>Przywr???? domy??lne</b> aby przywr??ci?? do orginalny wygl??d.',
            'Hidden' => 'Pola <b>Ukryte</b> nie pojawi?? si?? w subpanel.',
            'Default' => '<b>Domy??lne</b> pojawi?? si?? w subpanel.',

        ),
        'listViewEditor' => array(
            'modify' => 'Wszystkie pola, kt??re mog?? zosta?? wy??wietlone w <b>Widoku listy</b> pojawi?? si?? tutaj.<br><br>Kolumna <b>Domy??lne</b> zawiera te pola, kt??re s?? wy??wietlone w Widoku listy domy??lnie.<br/><br/>Kolumna <b>Dost??pne</b> zawiera pola, kt??re mog?? zosta?? wybrane przez u??ytkownika w celu utworzenia w??asnego widoku listy. <br/><br/>Kolumna <b>Ukryte</b> zawiera pola, kt??re mog?? zosta?? dodane do kolumn Domy??lne lub Dost??pne.'
        ,
            'savebtn' => 'Kliknij <b>Zapisz i zainstaluj</b> aby zapisa?? zmiany i uaktywni?? je w module.',
            'historyBtn' => 'Kliknij <b>Zobacz histori??</b> je??li chcesz przejrze?? i przywr??ci?? poprzednio zapisany wygl??d z historii.',
            'historyDefault' => 'Kliknij Przywr???? domy??lne, aby przywr??ci?? widok do oryginalnego uk??adu.',
            'Hidden' => 'Pola <b>Ukryte</b> nie pojawi?? si?? w subpanelu.',
            'Available' => '<b>Dost??pne</b> pola nie s?? wy??wietlane domy??lnie, ale mog?? by?? dodawane do widoku listy przez u??ytkownik??w.',
            'Default' => '<b>Domy??lne</b> pojawi?? si?? w subpanelu.'
        ),
        'popupListViewEditor' => array(
            'modify' => 'Wszystkie pola, kt??re mog?? zosta?? wy??wietlone w <b>Widoku listy</b> pojawi?? si?? tutaj.<br><br>Kolumna <b>Domy??lne</b> zawiera te pola, kt??re s?? wy??wietlone w Widoku listy domy??lnie.<br/><br/>Kolumna <b>Dost??pne</b> zawiera pola, kt??re mog?? zosta?? wybrane przez u??ytkownika w celu utworzenia w??asnego widoku listy. <br/><br/>Kolumna <b>Ukryte</b> zawiera pola, kt??re mog?? zosta?? dodane do kolumn Domy??lne lub Dost??pne.'
        ,
            'savebtn' => 'Kliknij <b>Zapisz i zainstaluj</b> aby zapisa?? wykonane zmiany i uaktywni?? je w module.',
            'historyBtn' => 'Kliknij <b>Zobacz histori??</b>, aby zobaczy?? histori?? zmian, lub przywr??ci?? porzednio zachowany widok.',
            'historyDefault' => 'Kliknij Przywr???? domy??lne, aby przywr??ci?? widok do oryginalnego uk??adu.',
            'Hidden' => 'Pola <b>Ukryte</b> nie s?? obecnie dost??pne dla u??ytkownik??w w widoku listy.',
            'Default' => 'Pola <b>Domy??lne</b>, widoczne w widoku listy nie s?? edytowalne przez u??ytkownik??w.'
        ),
        'searchViewEditor' => array(
            'modify' => 'Wszystkie pola, kt??re mog?? by?? wy??wietlane w formularzu <b>Filtra</b> pojawi?? si?? tutaj<br>Kolumna <br><b>Domy??lne</b> zawiera pola, kt??re b??d?? wy??wietlane w formularzu wyszukiwania. <br/> <br/>Kolumna <b>Ukryte</b> zawiera pola dost??pne dla Ciebie jako administrator, kt??re mo??esz doda?? do formularza.'
        ,
            'savebtn' => 'Klikni??cie <b>Zachowaj i zainstaluj</b> zapisze wszystkie zmiany i uaktywni je',
            'Hidden' => 'Pola <b>Ukryte</b> nie pojawi?? si?? w "Wyszukaj".',
            'historyBtn' => 'Kliknij <b>Zobacz histori??</b>, aby zobaczy?? lub przywr??ci?? poprzednio zachowany wygl??d.',
            'historyDefault' => 'Kliknij Przywr??c domy??lne, aby przywr??ci?? widok do oryginalnego uk??adu.',
            'Default' => 'Pola <b>Domy??lne</b> pojawi?? si?? w "Wyszukaj".'
        ),
        'layoutEditor' => array(
            'defaultdetailview' => 'Obszar <b>Widoku</b> zawiera  pola, kt??re s?? obecnie wy??wietlone w <b>Widoku szczeg????owym</b>.<br/><br/><b>Skrzynka narz??dziowa</b> zawiera <b>Kosz</b>, oraz elementy widoku, kt??re mog?? zosta?? dodane do widoku.<br><br>Zmian w widoku dokonuje si?? przeci??gaj??c i upuszczaj??c elementy i pola pomi??dzy <b>Skrzynkk??</b> a <b>Widokiem</b> i samym widokiem.<br><br>Aby usun???? pola z widoku, przeci??gnij pola do <b>Kosza</b>. Pola b??d?? wtedy dost??pne w Skrzynce narz??dziowej i mo??liwe do dodania do widoku.',
            'defaultquickcreate' => 'Obszar <b>Widoku</b> zawiera pola, kt??re s?? obecnie wy??wietlone w formularzu <b>Szybkie tworzenie</b>.<br><br>Formularz ten pojawia si?? w subpanel dla modu??u, gdy przycisk Utw??rz jest klilkni??ty.<br/><br/><b>Skrzynka narz??dziowa</b> zawiera <b>Kosz</b>, pola i elementy widoku, kt??re mog?? zosta?? dodane do widoku.<br><br>Zmian w widoku dokonuje si?? przeci??gaj??c i upuszczaj??c elementy i pola pomi??dzy <b>Skrzynkk??</b> a <b>Widokiem</b> i samym widokiem.<br><br>Aby usun???? pola z widoku, przeci??gnij pola do <b>Kosza</b>. Pola b??d?? wtedy dost??pne w Skrzynce narz??dziowej i mo??liwe do dodania do widoku.',
            //this default will be used for edit view
            'default' => 'Obszar <b>Widoku</b> zawiera  pola, kt??re s?? obecnie wy??wietlone w <b>Widoku szczeg????owym</b>.<br/><br/><b>Skrzynka narz??dziowa</b> zawiera <b>Kosz</b>, oraz elementy widoku, kt??re mog?? zosta?? dodane do widoku.<br><br>Zmian w widoku dokonuje si?? przeci??gaj??c i upuszczaj??c elementy i pola pomi??dzy <b>Skrzynkk??</b> a <b>Widokiem</b> i samym widokiem.<br><br>Aby usun???? pola z widoku, przeci??gnij pola do <b>Kosza</b>. Pola b??d?? wtedy dost??pne w Skrzynce narz??dziowej i mo??liwe do dodania do widoku.',
            'saveBtn' => 'Kliknij <b>Zapisz</b>, aby zabezpieczy?? zmiany dokonane w wygl??dzie widoku od ostatniego zapisu.<br><br>Zmiany nie b??d?? wy??wietlone w module, dop??ki nie zostan?? zamieszczone.',
            'historyBtn' => 'Kliknij <b>Zobacz histori??</b>, aby zobaczy?? lub przywr??ci?? poprzednio zachowany widok.',
            'historyDefault' => 'Kliknij Przywr??c domy??lne, aby przywr??ci?? widok do oryginalnego uk??adu.',
            'publishBtn' => 'Klikni??cie <b>Zapisz i zainstaluj</b> by zapisa?? wszystkie zmiany od ostatniego zapisu i uaktywni je w module. <br><br>Widok b??dzie niezw??ocznie wy??wietlony w module.',
            'toolbox' => '<b>Skrzynka narz??dziowa</b> zawiera <b>Kosz</b>, dodatkowe elementy widoku i zestaw dost??pnych p??l do dodania do widoku.<br/><br/>Elementy widoku i pola w Skrzynce mog??  by?? przeci??gane i upuszcznane na widoku i vice versa.<br><br>Elementami widoku s?? <b>Panele</b> i <b>Wiersze</b>. Dodanie nowego wiersza lub panelu do widoku wprowadza dodatkowe miejsce dla p??l do widoku.<br/><br/>Przeci??gni??cie i upuszczenie p??l w obr??bie Skrzynki lub widoku na miejscu, zajmowanym ju?? przez inne pole, spowoduje zamian?? pozycji obu p??l.<br/><br/>Pole <b>Wype??niacz</b> tworzy pust?? przestrze?? w widoku, tam, gdzie zostanie umieszczone.',
            'panels' => 'Obszar <b>Widoku</b> przedstawia podgl??d tego, jak b??dzie wygl??da?? w module, gdy zmiany zostan?? zapisane i zamieszczone.<br/><br/>Mo??esz zmieni?? pozycj?? p??l, wierszy i paneli, przez przeci??gni??cie ich w porz??dane miejsce.<br/><br/>Usuwanie element??w nast??puje przez przeci??gni??cie i upuszczenie ich do <b>Kosza</b> w Skrzynce narz??dziowej. Dodawanie element??w do widoku odbywa si?? w odwrotnej kolejno??ci.',
            'delete' => 'Przeci??gnij i upu???? dowolny element, aby usun???? go z widoku',
            'property' => 'Edytuj etykiet??, dla tego pola. <br/><b>Kolejno???? zak??adek</b> kontrole w jakiej kolejno??ci klawisz Tab prze????cza pomi??dzy polami.',
        ),
        'fieldsEditor' => array(
            'default' => '<b>Pola</b>, kt??re s?? dost??pne dla modu??u s?? wymienione tutaj. <br><br>Pola niestandardowe utworzone dla modu??u s?? wy??wietlane powy??ej pola, kt??re s?? dost??pne dla modu??u domy??lnie. <br> <br>Aby edytowa?? i pola, kliknij <b>Nazw?? pola</b>. <br/> <br/> Aby utworzy?? nowe pole, kliknij przycisk <b>Dodaj pole</b>.',
            'mbDefault' => 'Nazwy <b>P??l</b>, dost??pnych w tym module s?? wymienione tutaj.<br><br>Aby utworzy?? niestandardowe pole z wzorca, kliknij na jego nazwie.<br><br>Aby utworzy?? nowe, kliknij <b>Dodaj pole</b>. Etykieta inne w??a??ciwo??ci utworzonego pola mog?? by?? edytowane p????niej przez klikni??cie na nazwy pola.<br><br>Gdy modu?? jest ju?? zamieszczony, pola utworzone za pomoc?? Konstruktora modu????w wygl??daj?? jak pola standardowe w Edytorze modu????w.',
            'addField' => 'Wybierz <b>Typ danych</b> dla nowego pola. Typ, kt??ry wybierzesz, okre??la rodzaj znak??w wprowadzanych do pola. Na przyk??ad tylko liczby ca??kowite mog?? zosta?? wprowadzone do pola typu integer.<br><br> Okre??l <b>Nazw??</b> dla pola.  Nazwa musi sk??ada?? si?? ze znak??w alfanumerycznych  i nie zawiera?? ??adnych spacji. Podkre??lenia s?? dozwolone.<br><br> <b>Etykieta wy??wietlana</b> to etykieta widoczna w widokach modu??u. <b>Etykieta systemowa</b> jest u??ywana do okre??lenia pola w kodzie.<br><br> Zale??enie od wybranego dla pola typu danych, niekt??re lub wszystkie z wymienionych w??a??ciwo??ci mog?? by?? okre??lone dla pola:<br><br> <b>Tekst pomocy</b> pojawia si?? okresowo, gdy u??ytkownik przeci??gnie wska??nik nad polem.<br><br> <b>Tekst komentarza</b> jest widziany tylko w Edytorze modu????w &/lub w Konstruktorze modu????w i mo??e opisywa?? przeznaczenie pola, przydatne dla administrator??w<br><br> <b>Warto???? domy??lna</b> jest widoczna w polu.  U??ytkownicy mog?? wprowadzi?? now?? warto????, lub u??y?? domy??lnej.<br><br> Zaznacz opcj?? <b>Masowa aktualizacja</b>, by m??c skorzysta?? z funkcji masowej aktualizacji dla danego pola.<br><br>Warto???? <b>Maksymalny rozmiar</b> determinuje najwi??ksz?? ilo???? znak??w, kt??re mog?? zosta?? wprowadzone do pola.<br><br> Zaznacz opcj?? <b>Pole wymagane</b>, aby dane pole by??o konieczne do wype??nienia. Wtedy trzeba b??dzie zawsze wprowadzi?? jak???? warto???? dla pola, aby m??c zapisa?? rekord zawieraj??cy to pole.<br><br> Wybierz opcj?? <b>Raportowalne</b> aby pole mog??o by?? u??yte w filtrach, oraz aby dane by??y wy??wietlane w Raportach.<br><br> Wybierz opcj?? <b>Audytu</b>, aby m??c ??ledzi?? zmiany danych pola Dzienniku zmian.<br><br>Dodatkowe w??a??ciwo??ci mog?? by?? okre??lane dla poszczeg??lnych typ??w danych.',
            'editField' => '<b>Etykieta wy??wietlana</b> pola mo??e by?? zmieniana. Inne w??a??ciwo??ci pola - nie.<br><br>Kliknij <b>Klonuj</b>, aby utworzy?? nowe pole z takimi samymi w??a??ciwo??ciami.',
            'mbeditField' => '<b>Etykieta wy??wietlana</b> pola wzorca  pola mo??e by?? zmieniana. Inne w??a??ciwo??ci pola - nie.<br><br>Kliknij <b>Klonuj</b>, aby utworzy?? nowe pole z takimi samymi w??a??ciwo??ciami.<br><br>Aby usun???? pole wzorca, tak aby nie by??o widoczne w module, usu?? je z odpowiedniego <b>Widoku</b>.'

        ),
        'exportcustom' => array(
            'exportHelp' => 'Zmiany w??asne dokonane za pomoc?? modu??u Edytora modu????w w tej instancji mog?? zosta?? spakowane i zamieszczone w innej za pomoc?? <b>Instalatora modu????w</b>. <br><br>Wprowad?? <b>Nazw?? pakietu</b>. W pakiecie mo??esz zamie??ci?? informacje o <b>Autorze</b> i <b>Opis</b>.<br><br>Wybierz modu??(y) przeznaczone do eksportu zawieraj??ce zmiany. Mo??esz wybra?? tylko modu??y zawieraj??ce te zmiany.<br><br>Kliknij <b>Eksport</b> aby stworzy?? plik .zip pakietu zawieraj??cego wykonane zmiany.',
            'exportCustomBtn' => 'Kliknij <b>Eksport</b>, aby utworzy?? plik .zip pakietu zawieraj??cego dostosowania, kt??re chcesz wyeksportowa??.',
            'name' => 'To jest <b>Nazwa</b> pakietu - zostanie wy??wietlona podczas instalacji.',
            'author' => 'Okre??lenie <b>Autor</b> to nazwa podmiotu tworz??cego pakiet. Autorem mo??e by?? zar??wno osoba jak i firma. Autor zostanie wy??wietlony podczas instalacji modu??u.',
            'description' => 'To jest <b>Opis</b> pakietu wy??wietlany podczas instalacji.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Witamy w strefie <b>Narz??dzia Programisty</b1>. <br/><br/>W tej strefie mo??esz u??ywa?? narz??dzi, aby tworzy?? i zarz??dza?? standardowymi i dostosowywanymi modu??ami i polami.',
            'studioBtn' => 'U??yj <b>Edytor modu????w</b> aby dostosowa?? zainstalowane modu??y, poprzez zmian?? aran??acji p??l, wyb??r, kt??re z nich maj?? by?? dost??pne i aby tworzy?? niestandardowe pola danych.',
            'mbBtn' => 'U??yj <b>Konstruktora modu????w</b> aby tworzy?? modu??y.',
            'sugarPortalBtn' => 'U??yj <b>Edytora portalu</b> do zarz??dznia i zmieniania portalu.',
            'dropDownEditorBtn' => 'U??yj <b>Edytora list rozwijanych</b> aby doda?? i edytowa?? globalne listy wyboru.',
            'appBtn' => 'Tryb aplikacji dzia??a, gdy chcesz dostosowa?? r????ne w??a??ciwo??ci programu, takie jak np. jak du??o TPS raport??w jest wy??wietlanych na stronie g????wnej.',
            'backBtn' => 'Powr??t do poprzedniego kroku.',
            'studioHelp' => 'U??yj <b>Edytor modu????w</b> aby okre??li?? co i jak informacje zostan?? wy??wietlone w modu??ach.',
            'moduleBtn' => 'Kliknij, aby edytowa?? ten modu??.',
            'moduleHelp' => 'Wybierz element modu??u, kt??ry chcesz edytowa??.',
            'fieldsBtn' => 'Zdecyduj, kt??re informacje s?? zapisywane w module, poprzez sterowanie <b>Polami</b> w module.<br/><br/>Tutaj mo??esz tak??e edytowa?? i tworzy?? niestandardowe pola.',
            'labelsBtn' => 'Edytuj <b>Etykiety</b>, kt??re s?? wy??wietlane dla p??l i innych tytu????w w module.',
            'relationshipsBtn' => 'Dodaj now??, lub obejrzyj istniej??ce <b>Zale??no??ci</b> dla modu??u.',
            'layoutsBtn' => 'Dostosuj <b>Wygl??dy</b> modu??u.  Wygl??dy s?? innymi widokami modu??u, zawieraj??cego pola.<br><br>Mo??esz ustali??, kt??re pola bed?? widoczne i jak zostan?? uszeregowane w ka??dym z wygl??d??w.',
            'subpanelBtn' => 'Ustal, kt??re pola pojawi?? si?? w  <b>subpanel</b> modu??u.',
            'portalBtn' => 'Dostosuj <b>Wygl??dy</b> modu??u, kt??re pojawi?? sie w <b>Portalu SuiteCRM</b>.',
            'layoutsHelp' => '<b>Wygl??dy</b> modu??u, kt??re mog?? by?? dostosowywane s?? pokazane tutaj<br><br>Wygl??dy wy??wietlaj?? pola i ich zawarto????<br><br>Kliknij na ikonie, aby wybra?? wygl??d do edycji.',
            'subpanelHelp' => '<b>subpanel</b> w module, kt??re mog?? by?? dostosowywane s?? widoczne tutaj.<br><br>Kliknij na ikonie, aby wybra?? modu?? do edycji.',
            'newPackage' => 'Kliknij <b>Nowy Pakiet</b> by utworzy?? nowy pakiet.',
            'exportBtn' => 'Kliknij  <b>Eksportuj dostosowania</b>, aby zbudowa?? pakiet zawieraj??cy niestandardowe modyfikacje, stworzone w Edytorze modu????w, dla okre??lonego modu??u.',
            'mbHelp' => '<b>Konstruktor modu????w</b> jest u??ywany do tworzenia pakiet??w zawieraj??cych dostosowane przez Ciebie modu??y, bazuj??ce na standardowych, lub w??asnych modu??ach.',
            'viewBtnEditView' => 'Dostosuj <b>Widok edycji</b> modu??u.<br><br>Ten widok to formularz zawieraj??cy pola zbieraj??ce dane wprowadzanie przez u??ytkownika.',
            'viewBtnDetailView' => 'Dostosuj <b>Widok szczeg????owy</b> modu??u.<br><br>Ten widok to formularz zawieraj??cy pola zbieraj??ce dane wprowadzanie przez u??ytkownika.',
            'viewBtnDashlet' => 'Dostosuj <b>Wid??ety SuiteCRM</b> modu??u, w????cznie z widokami listy i wyszukiwania.<br><br> Wid??et b??dzie mo??na doda?? do stron w module Strony g????wnej.',
            'viewBtnListView' => 'Dostosuj <b>Widok listy</b> modu??u.<br><br>Wynik wyszukiwania pojawi si?? w widoku listy.',
            'searchBtn' => 'Dostosuj widok <b>Szukaj</b>.<br><br>Okre??l jakie pola mog?? zosta?? u??yte do filtrowania rekord??w, kt??re pojawi?? si?? w widoku listy.',
            'viewBtnQuickCreate' => 'Dostosuj widok <b>Szybkie tworzenie</b>.<br><br>Formularz szybkiego tworzenia pojawia si?? w subpanel i w module poczty.',
            'addLayoutHelp' => "Aby utworzy?? niestandardowy uk??ad dla Grup bezpiecze??stwa, wybierz odpowiedni?? Grup?? i skopiuj uk??ad, kt??ry b??dzie podstaw?? do tworzenia uk??adu niestandardowego.",
            'searchHelp' => 'Tutaj pojawiaj?? si?? <b>Filtry</b> formularzy, kt??re mo??na dostosowa??. <br><br>Formularze filtr??w zawieraj?? pola do filtrowania rekord??w. <br><br>Kliknij ikon??, aby wybra?? uk??ad filtr??w do edycji.',
            'dashletHelp' => 'Wygl??dy <b>Wid??et??w</b>, kt??re mo??e zosta?? zmienione pojawi si?? tutaj.<br><br>Wid??ety b??d?? dost??pne do u??ytku pojawi?? si?? na Stronie g????wnej.',
            'DashletListViewBtn' => '<b>Widok listy wid??et??w</b> wy??wietla rekordy bazuj??c na filtrach wyszukiwania wid??et??w.',
            'DashletSearchViewBtn' => '<b>Znajd?? wid??et</b> filtruje rekordy do widoku listy wid??et??w.',
            'popupHelp' => '<b> Wyskakuj??ce </b> uk??ady, kt??re mog?? by?? indywidualizowane pojawiaj?? si?? tutaj.',
            'PopupListViewBtn' => '<b> Wyskakuj??cy widok listy </b> wy??wietla rekordy oparte na wyskakuj??cych widokach wyszukiwania.',
            'PopupSearchViewBtn' => '<b> Wyskakuj??ce okno wyszukiwania </b> wy??wietla rekordy dla wyskakuj??cego widoku listy.',
            'BasicSearchBtn' => 'Dostosuj formularz <b>Szybkiego filtrowania</b>, kt??ry pojawia si?? w karcie Szybki filtr w obszarze Filtr dla modu??u.',
            'AdvancedSearchBtn' => 'Dostosuj formularz <b>Filtr zaawansowany</b>, kt??ry pojawia si?? na karcie Filtr zaawansowany w obszarze Filtr dla modu??u.',
            'portalHelp' => 'Zarz??dzaj i dostosuj <b>Portal SuiteCRM</b>.',
            'SPUploadCSS' => 'Za??aduj <b>Arkusz styl??w</b> dla Portalu SuiteCRM.',
            'SPSync' => '<b>Synchronizuj</b> dostosowywane elementy z instancj?? Portalu SuiteCRM.',
            'Layouts' => 'Dostosuj <b>Wygl??d</b> modu????w portalu SuiteCRM.',
            'portalLayoutHelp' => 'Modu??y w Portalu pojawiaj?? si?? w tym obszarze.<br><br>Wybierz modu??, aby m??c edytowa?? <b>Wygl??d</b>.',
            'relationshipsHelp' => 'Wszystkie <b>Zale??no??ci</b>, kt??re istniej?? pomi??dzy modu??ami nadrz??dnymi i podleg??ymi pojawiaj?? si?? tutaj.<br><br><b>Nazwa</b> zale??no??ci jest generowana automatycznie przez system.<br><br><b>Modu?? Nadrz??dny</b> to modu??, do kt??rego nale???? wszystkie zale??no??ci. Na przyk??ad, wszystkie w??a??ciwo??ci, dla kt??rych modu?? Klienci jest modu??em nadrz??dnym, s?? przechowywane w tabelach bazy danych dla modu??u Klienci.<br><br>Kliknij wiersz w tabeli zale??no??ci, aby zobaczy?? jej w??a??ciwo??ci.<br><br>Kliknij <b>Dodaj zale??no????</b> w celu utworzenia nowej zale??no??ci.<br><br>Zale??no??ci mog?? by?? tworzone pomi??dzy dowolnymi zamieszczonymi ju?? modu??ami.',
            'relationshipHelp' => '<b>Zale??no??ci</b> tworz?? si?? pomi??dzy modu??em nadrz??dnym i innym opublikowanym modu??em.<br><br> Powi??zania s?? przedstawione wizualnie jako subpanel i po????czone pola w rekordach modu??u.<br><br> Je??li powi??zanie ju?? istnieje pomi??dzy dwoma modu??ami, ka??de nowe powi??zanie stworzona pomi??dzy nimi nie b??dzie dodatkowo uwidoczniona.<br><br> Wybierz jedn?? z nast??puj??cych zale??no??ci<b>Typy zale??no??ci</b> dla modu??u:<br><br> <b>Jeden-do-jednego</b> - oba rekordy w modu??ach b??d?? zawiera?? po????czone pola.<br><br> <b>Jeden-do-wielu</b> - Rekord modu??u nadrz??dnego b??dzie zawiera?? subpanel, a rekord modu??u podrz??dnego - po????czone pole.<br><br> <b>Wielu-do-Wielu</b> - W rekordach obu modu????w wy??wietl?? si?? subpanele.<br><br> Wybierz <b>Modu??y po????czone </b> dla powi??zania. <br><br> Je??eli typ zale??no??ci powoduje utworzenie subpaneli, wybierz rodzaj subpanelu dla w??a??ciwego modu??u.<br><br> Kliknij <b>Zapisz</b>, aby utworzy?? zale??no??ci.',
            'convertLeadHelp' => 'Tutaj mo??esz doda?? modu??y do konwertowania ekranu uk??adu i modyfikowania uk??ad??w istniej??cych modu????w. Mo??esz zmieni?? kolejno???? przesuwaj??c wiersze w tabeli.<br /><br /><b> Modu??: </b> Nazwa modu??u <br /><br /><b> Wymagane: </b> Wymagane modu??y musz?? by?? utworzone lub wybrane zanim Potencjalny Klient mo??e by?? skonwertowany.<br /><br /><b> Kopiuj dane: </b> Je??li zaznaczone, pola z Potencjalnego Klienta b??d?? skopiowane do p??l o tej samej nazwie w nowo utworzonych rekordach.<br /><br /><b> Pozw??l na selekcj??: </b> Modu??y z powi??zanym polem w Kontaktach mog?? by?? wybrane zamiast tworzone podczas procesu konwertowania Potencjalnego Klienta.<br /><br /><b> Edytuj: </b> Modyfikuj uk??ad konwertowania dla tego modu??u.<br /><br /><b> Usu??: </b> Usu?? ten modu?? z uk??adu konwertowania.',


            'editDropDownBtn' => 'Edytuj globalny s??ownik',
            'addDropDownBtn' => 'Dodaj now?? globaln?? list?? rozwijan??',
        ),
        'fieldsHelp' => array(
            'default' => '<b>Pola</b> w module s?? wymienione tutaj wed??ug nazw. <br><br>Szablon zawiera zestaw wst??pnie zdefiniowanych p??l. <br> <br>, Aby utworzy?? nowe pole, kliknij przycisk <b>Dodaj pole</b>. <br><br>Aby edytowa?? pola, kliknij <b>Nazw?? pola</b>. <br/> <br/> Po zako??czeniu wdro??enia modu??u, nowe pola utworzone w Konstruktorze modu????w, wraz z szablonami pola, b??d?? traktowane jako standardowe pola w Edytorze modu????w.',
        ),
        'relationshipsHelp' => array(
            'default' => '<b>Relacje</b>, kt??re zosta??y utworzone mi??dzy modu??em i innymi modu??ami pojawiaj?? si?? tutaj. <br><br><b>Nazwa</b> relacji jest generowana dla tej konkretnej relacji. <br> <br><b>Podstawowy modu??</b> to modu??, kt??ry jest w??a??cicielem relacji. W??a??ciwo??ci relacji s?? przechowywane w tabelach bazy danych nale????cych do modu??u podstawowego. <br><br><b>Typ</b> jest typem relacji istniej??cym pomi??dzy modu??em podstawowym i <b>Modu??em powi??zanym</b>. <br><br>kliknij kolumn?? Tytu??, aby sortowa?? wed??ug kolumny. <br><br>Kliknij wiersz w tabeli relacji aby wy??wietla?? i edytowa?? w??a??ciwo??ci skojarzonych z t?? relacj??. <br> <br>Kliknij przycisk <b>Dodaj relacj??</b>, aby utworzy?? now?? relacj??.',
            'addrelbtn' => 'przesu?? kursor myszy nad pomoc aby doda?? powi??zanie...',
            'addRelationship' => '<b>Powi??zania</b> mog?? by?? tworzone pomi??dzy modu??em i innym modu??e dostosowywanym, lub ju?? zamieszczonym.<br><br> Powi??zania s?? wyra??one wizualnie pomi??dzy subpanel i po????czonymi polami w rekordach modu??u.<br><br>Wybierz jedn?? z nast??puj??cych <b>Typ??w</b> powi??zania dla modu??u:<br><br> <b>Jeden-do-jednego</b> - Rekordy obu modu????w zawieraj?? po????czone pola.<br><br> <b>Jeden-do-wielu</b> - Rekord modu??u nadrz??dnego b??dzie zawiera?? subpanel, a rekordy modu????w po????czonych - po????czone pola.<br><br> <b>Wiele-do-wielu</b> - Rekordy obu modu????w b??d?? zawiera??y subpanel.<br><br> Wybierz <b>Po????czone modu??y</b> dla powi??zania. <br><br>Je??li powi??zanie jest skonstruowane z u??yciem subpanel, wybierz widok subpanel dla w??a??ciwych modu????w.<br><br> Kliknij <b>Zapisz</b> aby utworzy?? powi??zanie.',
        ),
        'labelsHelp' => array(
            'default' => '<b>Etykiety</b> p??l i innych tytu????w w module mog?? by?? zmieniane. <br><br>Edytuj etykiet?? klikaj??c w pole, wprowadzaj??c now?? etykiet?? i klikaj??c przycisk <b>Zapisz</b>. <br> <br>, Je??li wszystkie pakiety j??zykowe s?? zainstalowane w aplikacji, mo??na wybra?? <b>J??zyk</b> u??ywany dla etykiety.',
            'saveBtn' => 'Kliknij przycisk <b>Zapisz</b>, aby zapisa?? wszystkie zmiany.',
            'publishBtn' => 'Kliknij przycisk <b>Zapisz i publikuj</b> aby zapisa?? wszystkie zmiany i je uaktywni??.',
        ),
        'portalSync' => array(
            'default' => 'Wprowad?? <b>Adres URL portalu SuiteCRM</b> przeznaczonego do aktualizacji i kliknij przycisk <b>Id??</b>. <br><br>Nast??pnie wpisz nazw?? u??ytkownika, has??o i kliknij przycisk <b>Rozpocznij Synchronizacj??</b>. <br> <br>Dostosowania dokonane w <b>uk??adach</b> portalu SuiteCRM, wraz z <b>Arkuszem styl??w</b> je??li zosta?? za??adowany, zostan?? przeniesione do okre??lonej instancji portalu.',
        ),
        'portalStyle' => array(
            'default' => 'Mo??na dostosowa?? wygl??d portalu SuiteCRM przy u??yciu arkusza styl??w. <br><br>Wybierz <b>Arkusz styl??w</b> kt??rych chcesz za??adowa??. <br> <br>Arkusz styl??w zostanie wdro??ony w portalu SuiteCRM nast??pnym razem, gdy wykonywana b??dzie synchronizacja.',
        ),
    ),

    'assistantHelp' => array(
        'package' => array(
            //custom begin
            'nopackages' => 'Aby rozpocz???? nowy projekt, kliknij <b>Now?? paczk??</b>, aby stworzy?? miejsce na pliki Twojego modu??u. <br/><br/>Ka??da paczka mo??e zawiera?? jeden lub wi??cej modu????w.<br/>Dla instancji, mo??esz stworzy?? w??asn?? paczk??, zawieraj??c?? nowy modu?? po????czony ze standardowym modu??em Klienci. Mo??esz r??wnie?? stworzy?? paczk?? zawieraj??c?? kilka modu????w, pracuj??cych razem jako projekt i po????czonych z modu??ami istniej??cymi standardowo w aplikacji.',
            'somepackages' => '<b>Paczka</b> przechowuje stworzone przez u??ytkownika modu??y, kt??re wszystkie s?? sk??adnikami jednego projektu. Paczka mo??e zawiera?? jeden lub wi??cej stworzonych <b>modu????w</b>, kt??re mog?? by?? po????czone razem, lub z innymi modu??ami aplikacji.<br/><br/>Po utworzeniu paczki, mo??esz tworzy?? modu??y od razu, lub pozostawi?? j?? do p????niejszej edycji.<br><br>Gdy projekt jest sko??czony, mo??esz <b>Zamie??ci??</b> paczk??, tworz??c w??asny modu?? do zainstalowania w aplikacji.',
            'afterSave' => 'Paczka powinna zawiera?? przynajmniej jeden modu??. Mo??esz stworzy?? jeden lub wi??cej w??asnych modu????w w obr??bie jednej paczki.<br/><br/>Kliknij na <b>Nowy modu??</b>, aby utworzy?? w??asny modu?? dla tej paczki.<br/><br/> Po utworzeniu ostatniego modu??u, mo??esz opublikowa??, lub zamie??ci?? paczk??, co udost??pni j?? dla Twojej instancji i/lub u??ytkownik??w.<br/><br/> Aby zamie??ci?? paczk?? jednym ruchem w Twojej instancji, kliknij <b>Zamie????</b>.<br><br>Kliknij <b>Publikuj</b>, aby zapisa?? projekt w pliku .zip. Gdy zostanie on zachowany w Twoim systemie, u??yj <b>Instalatora modu????w</b>, aby za??adowa?? i zainstalowa?? paczk?? w Twoim systemie. <br/><br/>Mo??esz j?? dowolnie dystrybuowa?? pomi??dzy r????nymi instalacjami SuiteCRM.',
            'create' => '<b>Pakiet</b> dzia??a jako kontener dla niestandardowych modu????w, z kt??rych wszystkie s?? cz????ci?? jednego projektu. Pakiet mo??e zawiera?? jeden lub wi??cej niestandardowych <b>modu????w</b>, kt??re mog?? by?? zwi??zane ze sob?? lub z innymi modu??ami w aplikacji. <br/> <br/> Po utworzeniu pakietu dla swojego projektu, mo??na utworzy?? modu?? pakietu od razu, lub mo??na powr??ci?? do Kreatora modu????w w p????niejszym czasie w celu uko??czenia projektu.',
        ),
        'main' => array(
            'welcome' => 'U??yj <b>Narz??dzi developera</b> do tworzenia i zarz??dzania standardowymi i w??asnymi modu??ami i polami. <br/><br/>Do zarz??dzania modu??ami w aplikacji s??u??y stiudio <b>Edytor modu????w</b>. <br/><br/>Do tworzenia w??asnych modu????w - <b>Konstruktor modu????w</b>.',
            'studioWelcome' => 'Wszystkie zainstalowane obecnie modu??y, zar??wno standardowe, jak i obiekty ??adowane, s?? edytowalne w Edytorze modu????w.'
        ),
        'module' => array(
            'somemodules' => "Gdy tworzona paczka zawiera ju?? co najmniej jeden modu??, mo??esz <b>Zamie??ci??</b> go, jako paczk?? w instancji SuiteCRM, lub <b>Publikowa??</b> j?? jako pakiet do zainstalowania w tej, lub innej instancji, u??ywaj??c <b>Instalatora modu????w</b>.<br/><br/>Aby zainstalowa?? paczk?? bezpo??rednio w Twojej instancji SuiteCRM, kliknij <b>Zamie????</b>.<br><br>Aby utworzy?? paczk??, mo??liw?? do zainstalowania w r????nych instancjach, za pomoc?? <b>Instalatora modu????w</b>, musisz stworzy?? plik .zip, klikaj??c <b>Publikuj</b>.<br/><br/> Mo??esz budowa?? modu??y w paczce etapami i publikowa??, lub zamieszcza?? gdy tylko zechcesz. <br/><br/>Po publikacji lub zamieszczeniu paczki, mo??esz dalej dokonywa?? zmian i zmienia?? w??a??ciwo??ci modu????w. Potem ponownie dokonaj publikacji lub zamieszczenia, aby zaaprobowa?? zmiany.",
            'editView' => 'Tutaj mo??esz edytowa?? istniej??ce pola, lb w lewym panelu dodawa?? nowe.',
            'create' => 'Gdy wybierasz <b>Typ</b> modu??u, kt??ry chcesz stworzy??, jednocze??nie wybierasz typ p??l, kt??re znajd?? si?? w module. <br/><br/>Ka??dy wzorzec modu??u zawiera zestaw p??l w??a??ciwy dla konkretnego typu modu??u, okre??lony prze jego nazw??.<br/><br/><b>Podstawowy</b> - zawiera podstawowe pola, kt??re pojawiaj?? si?? w standardowych modu??ach. Te pola to np. Nazwa, Przydzielone do, Zesp????, Data utworzenia lub Opis.<br/><br/> <b>Firma</b> - Zawiera pola typowe dla okre??lenia organizacji, takie jak Nazwa firmy, jej adres i dane do fakturowania.  U??ywaj tego wzorca, do tworzenia modu????w podobnych do standardowego modu??u Klienci.<br/><br/> <b>Osoba</b> - Zawiera pola s??u????ce do okre??lenia os??b, takie jak Pozdrowienie, Tytu??, Imi??, Adres i numer telefonu.  U??ywaj tego wzorca, do tworzenia modu????w podobnych do standardowych modu????w Kontakty i Wizyt??wki.<br/><br/><b>Cecha</b> - Zawiera pola specyficzne dla modu??u Sprawy lub do okre??lenia b????d??w, takie jak numer, status, priorytet lub opis. U??ywaj tego wzorca, do tworzenia modu????w podobnych do standardowych modu????w Sprawy lub ??ledzenia b????d??w.<br/><br/>Uwaga: Po utworzeniu modu??u, mo??esz edytowa?? etykiety p??l wzorca, podobnie jak w??asnych p??l, dodanych do wygl??du modu??u.',
            'afterSave' => 'Dostosuj modu?? do w??asnych potrzeb poprzez edycj?? i tworzenie p??l, nawi??zywanie relacji z innymi modu??ami i rozmieszczanie p??l w poszczeg??lnych widokach. <br/> <br/> Aby wy??wietli?? pola szablonu i zarz??dza?? polami niestandardowymi w module, kliknij przycisk <b>Przegl??daj pola</b>. <br/> <br/> Aby tworzy?? i zarz??dza?? relacjami pomi??dzy modu??em a innymi modu??ami - niezale??nie czy s?? to modu??y istniej??ce, standardowe czy niestandardowe w ramach tego samego pakietu - kliknij przycisk <b>Przegl??daj relacje</b>. <br/> <br/> Aby edytowa?? widoki modu????w, kliknij przycisk <b>Przegl??daj widoki</b>. Mo??na zmieni?? widok szczeg????owy, widok edycji i widok listy w taki sam spos??b jak w przypadku modu????w dost??pnych w Edytorze modu????w. <br/> <br/> Aby utworzy?? modu?? z takimi samymi w??a??ciwo??ciami jak istniej??cy modu??, kliknij przycisk <b>Kopiuj</b>. Nast??pnie mo??esz dostosowa?? nowy modu?? wed??ug potrzeb.',
            'viewfields' => 'Pola w module mog?? by?? dowlnie edytowane.<br/><br/>Nie mo??esz usun???? standardowych p??l, ale mo??esz wy????czy?? je w widokach na stronie wygl??du. <br/><br/>Mo??esz natomiast edytowa?? etykiety p??l standardowych. Inne ich w??a??ciwo??ci nie mog?? by?? edytowane. Mo??esz poza tym szybko tworzy?? nowe pola, o podobnych w??a??ciwo??ciach poprzez klikni??cie  na nazwie pola, a nast??pnie na przycisku <b>Klonuj</b> w formularzu <b>W??a??wiwo??ci</b>.  Wprowad?? nowe w??a??ciwo??ci i kliknij <b>Zapisz</b>.<br/><br/>Je??li dostosowujesz nowy modu??, a zosta?? on ju?? zainstalowany, nie wszystkie z w??a??ciwo??ci p??l mog?? by?? edytowane.  Nale??y okre??li?? zatem wszystkie w??a??ciwo??ci dla p??l standardowych i w??asnych, zanim paczka zawieraj??ca modu?? zostanie opublikowana lub zainstalowana.',
            'viewrelationships' => 'Mo??esz towrzy?? powi??zania wiele-do-wielu pomi??dzy bie????cym modu??em, a innymi modu??ami w paczce i/lub pomi??dzy bie????cym modu??em, a modu??ami zainstalowanymi w aplikacji.<br><br> Aby utworzy?? powi??zanie jeden-do-wielu i jeden-do-jednego, kliknij <b>Po????czenie</b> i <b>Stw??rz po??aczenie</b> pomi??dzy polami w module.',
            'viewlayouts' => 'Mo??esz kontrolowa??, kt??re z p??l s?? dost??pne do gromadzenia danych w <b>Widoku edycji</b>.  Mo??esz tak??e kontrolowa?? jakie dane s?? wy??wietlane w <b>Widoku szczeg????owym</b>.  Widoki nie musz?? zawiera?? takich samych danych. <br/><br/>Formularz szybkiego tworzenia jest wy??wietlony, gdy klikniesz przycisk <b>Utw??rz</b> w subapnelu modu??u. Domy??lnie wygl??d formularza <b>Szybkiego tworzenia</b> jest taki sam, jak wygl??d <b>Widoku edycji</b>. Mo??esz dostosowywa?? formularz szybkiego tworzenia tak, aby zawiera?? mniej lub wi??cej p??l ni?? wygl??d widoku edycji. <br><br>Mo??esz dostosowa?? r??wnie?? poziom bezpiecze??stwa dla wygl??du, korzystaj??c z <b>Zarz??dzania Profilami uprawnie??</b>.<br><br>',
            'existingModule' => 'Po utworzeniu i dostosowaniu modu??u, mo??esz tworzy?? nast??pne modu??y, lub <b>Publikowa??</b> lub <b>Zamie??ci??</b> paczk??.<br><br>Aby utworzy?? dodatkowe modu??y, kliknij <b>Duplikuj</b>, w celu stworzenia modu??u o takich samych w??a??ciwo??ciach, jak bie????cy, lub cofnij si?? i kliknij <b>Nowy modu??</b>.<br><br> Je??li jeste?? gotowy do <b>Publikacji</b> lub <b>Zamieszczenia</b> paczki zawieraj??cej ten modu??, cofnij si?? do poziomu zarz??dzania paczk?? Mo??esz zamie??ci??, lub opublikowa?? paczk??, zawieraj??c?? co najmniej jeden modu??.',
            'labels' => 'Etykiety pol standardowych i w??asnych mog?? by?? zmieniane. Zmiana etykiet nie b??dzie mia??a wp??ywu na wprowadzone do nich dane.',
        ),
        'listViewEditor' => array(
            'modify' => 'Istniej?? trzy kolumny wy??wietlane po lewej stronie. Kolumna "Domy??lne" zawiera pola, kt??re s?? wy??wietlane w widoku listy domy??lnie. Kolumna "Dost??pne" zawiera pola, kt??re u??ytkownik mo??e u??ywa?? do tworzenia widoku listy niestandardowej, natomiast kolumna "Ukryty" zawiera pola dost??pne dla ciebie, jako administratora, kt??re mo??esz doda?? do kolumn Domy??lne i Dost??pne dla u??ytkownik??w, lecz obecnie s?? dla nich wy????czone.',
            'savebtn' => 'Klikni??cie <b>Zapisz</b> zachowa wszystkie zmiany i uaktywni je.',
            'Hidden' => 'Pola ukryte to pola, kt??re nie s?? obecnie dost??pne dla u??ytkownik??w w widoku listy.',
            'Available' => 'Pola dost??pne to pola, kt??re nie s?? widoczne domy??lnie, ale mog?? zosta?? w????czone przez u??ytkownik??w.',
            'Default' => 'Pola domy??lne s?? wy??wietlane u??ytkownikom, kt??rzy nie modyifkowali widok??w listy.'
        ),

        'searchViewEditor' => array(
            'modify' => 'Istniej?? dwie kolumny wy??wietlane po lewej stronie. Kolumna "Domy??lne" zawiera pola, kt??re b??d?? wy??wietlane w Widoku wyszukiwania, natomiast kolumna "Ukryte" zawiera pola, kt??re jako administrator mo??esz doda?? do widoku.',
            'savebtn' => 'Klikni??cie <b>Zachowaj i opublikuj</b> zachowa wszystkie zmiany i uaktywni je.',
            'Hidden' => 'Pola ukryte nie b??d?? wy??wietlane w widoku wyszukiwania.',
            'Default' => 'Pola domy??lne b??d?? wy??wietlane w widoku wyszukiwania.'
        ),
        'layoutEditor' => array(
            'default' => 'Po lewej stronie s?? wy??wietlone dwie kolumny. Prawa, oznaczona jako <b>Widok bie????cy</b> lub <b>Podgl??d widoku</b>, to miejsce, kt??rym mo??esz zmienia?? wygl??d modu??u. Lewa - <b>Szkynka narz??dziowa</b>, zawiera u??yteczne elementy i narz??dzia, przydatne w edycji wygl??du. <br/><br/>Je??li obszar edycji jest oznaczony jako <b>Bie????cy wygl??d</b>, pracujesz wtedy na kopii wy??wietlanego wygl??du.<br/><br/>Je??li jest to <b>Podgl??d Widoku</b>, to pracujesz na wygl??dze utworzonym, za pomoc?? klawisza <b>Zachowaj</b>. Mo??e to by?? wersja inna od tego, co widzielu u??ytkownicy.',
            'saveBtn' => 'Klikni??cie na klawisz zachowa wygl??d, mo??esz temu zapobiec. Gdy cofniesz si??, rozpoczniesz od tego zmienionego wygl??du. Tw??j utworzony widok, nie b??dzie widziany przez u??ytkownik??w modu??u dopuki nie klikniesz klawisz <b>Zachowaj</b> i <b>Publikuj</b>.',
            'publishBtn' => 'Kliknij klawisz, aby zamie??ci?? wygl??d. Oznacza to, ??e zostanie on niezw??ocznie wy??wietlony u??ytkoniwkom tego modu??u.',
            'toolbox' => '<b>Skrzynka narz??dziowa</b> zawiera przer????ne u??yteczne funkcje, s??u????ce do edycji wygl??du, takie jak obszar kosza, zestaw dodatkowych element??w i zestaw dost??pnych p??l. Ka??dy z nich mo??e by?? przeci??gni??ty i upuszczony na wygl??d.',
            'panels' => 'Ten obszar pokazuje jak b??dzie wygl??da?? Tw??j wygl??d, dla u??ytkownik??w modu??u, gdy zostanie zamieszczony.<br/><br/>Mo??esz przemieszcza?? elementy, takie jak pola, wiersze i panele,u??ywaj??c techniki <b>przeci??gnij i upu????</b>. W ten sam spos??b usuwasz elementy przesuwaj???? je nad obszar kosza w skrzynce narz??dziowej, lub dodajesz nowe, wyci??gaj??c je ze skrzynki i przesuwaj??c na po????dan?? pozycj?? w obszasze edycji widoku.'
        ),
        'dropdownEditor' => array(
            'default' => 'Po lewej stronie s?? wy??wietlone dwie kolumny. Prawa z nich, oznaczona jako Bie????cy widok, lub podgl??d widoku, to ta, w kt??rej zmieniasz widok modu??u. Lewa zawiera skrzynk?? narz??dziow??, z u??ytecznymi elementami i narz??dziami, kt??rych mo??na u??y?? do edycji wygl??du. <br/><br/>Je??li obszar wygl??du jest oznaczony jako bie????cy, pracujesz na kopii bie????cego wygl??du modu??u.<br/><br/>Je??li obszar jest oznaczony jako Podgl??d widoku, pracujesz na stworzonym wcze??niej -po naci??ni??ciu klawisza Zachowaj - zatem mo??e on by?? ju?? zmieniony w stosunku do tego, co widz?? U??ytkownicy.',
            'dropdownaddbtn' => 'Klikni??cie tego przycisku spowoduje dodanie nowej pozycji do listy rozwijanej.',

        ),
        'exportcustom' => array(
            'exportHelp' => 'Zmiany w??asne dokonane za pomoc?? Edytora modu????w w tej instancji mog?? zosta?? spakowane i zainstalowane w innej. <br><br>Wprowad?? <b>Nazw?? pakietu</b>. W pakiecie mo??esz zamie??ci?? informacje o <b>Autorze</b> i <b>Opis</b>.<br><br>Wybierz modu??(y),przeznaczone do eksportu,zawieraj??ce zmiany w??asne. (Mo??esz wybra?? tylko modu??y zawieraj??ce te zmiany)<br><br>Kliknij <b>Eksport</b>, aby stworzy?? plik .zip pakietu zawieraj??cego zmiany w??asne. Plik .zip mo??e zosta?? za??adowany do innej instancji za pomoc?? <b>Instalatora modu????w</b>.',
            'exportCustomBtn' => 'Kliknij <b>Eksport</b>, aby utworzy?? plik .zip pakietu zawieraj??cego dostosowania, kt??re chcesz wyeksportowa??.',
            'name' => '<b>Nazwa</b> pakietu zostanie wy??wietlona w Instalatorze modu????w, po tym jak pakiet zostanie przygotowany do instalacji w Edytorze modu????w.',
            'author' => 'Okre??lenie <b>Autor</b> to nazwa podmiotu tworz??cego pakiet. Autorem mo??e by?? zar??wno osoba jak i firma.<br><br>Autor zostanie wy??wietlony w Instalatorze modu????w, po tym, jak pakiet zostanie przygotowany do instalacji w Edytorze modu????w.',
            'description' => '<b>Opis</b> pakietu zostanie wy??wietlony w Instalatorze modu????w, po tym, jak pakiet zostanie przygotowany do instalacji w Edytorze modu????w.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Witamy w strefie <b>Narz??dzia Programisty</b>. <br/><br/>W tej strefie mo??esz u??ywa?? narz??dzi, aby tworzy?? i zarz??dza?? standardowymi i dostosowanymi modu??ami i polami.',
            'studioBtn' => 'U??yj <b>Edytora modu????w</b> aby dostosowa?? zainstalowane modu??y, poprzez zmian?? aran??acji p??l, wyb??r, kt??re z nich maj?? by?? dost??pne i tworzenie w??asnych p??l danych.',
            'mbBtn' => 'U??yj <b>Konstruktora modu????w</b> aby tworzy?? modu??y.',
            'appBtn' => 'U??yj trybu aplikacji aby dostosowa?? r????ne cechy programu, takie jak np. jak du??o raport??w TPS ma si?? pojawia?? na stronie g????wnej',
            'backBtn' => 'Powr??t do poprzedniego kroku.',
            'studioHelp' => 'U??yj <b>Edytora modu????w</b> aby dostosowa?? zainstalowane modu??y.',
            'moduleBtn' => 'Kliknij, aby edytowa?? ten modu??.',
            'moduleHelp' => 'Wybierz element modu??u, kt??ry chcesz edytowa??.',
            'fieldsBtn' => 'Zdecyduj, kt??re informacje s?? zapisywane w module, poprzez sterowanie <b>Polami</b> w module.<br/><br/>Tutaj mo??esz tak??e edytowa?? i tworzy?? w??asne pola.',
            'labelsBtn' => 'Edytuj <b>Etykiety</b> aby wy??wietli?? warto??ci dla tego modu??u.',
            'layoutsBtn' => 'Dostosuj <b>Wygl??dy</b> Widok??w edycji, szczeg??????w, listy i wyszukiwania.',
            'subpanelBtn' => 'Zdecyduj, jakie informacje maj?? pojawia?? si?? w subpanelach w tym module.',
            'layoutsHelp' => 'Wybierz <b>Widok do edycji</b>.<br/><br/> Aby zmieni?? widok, kt??ry zawiera pola do wprowadzania danych, kliknij przycisk <b>Edytuj widok</b>.<br/><br/> Aby zmieni?? uk??ad, kt??ry wy??wietla wprowadzane dane, kliknij przycisk <b>Widok szczeg????owy</b>.<br/><br/> Aby zmieni?? kolumny, kt??re pojawiaj?? si?? na li??cie domy??lnej, kliknij przycisk <b>Widok listy</b>.<br/><br/>Aby zmieni?? podstawowe i zaawansowane uk??ady formularzy wyszukiwania, kliknij przycisk <b>Wyszukaj</b>.',
            'subpanelHelp' => 'Wybierz <b>subpanel</b> do edycji.',
            'searchHelp' => 'Wybierz widok do edycji klikaj??c <b>Szukaj</b>.',
            'newPackage' => 'Kliknij <b>Nowy Pakiet</b> by utworzy?? nowy pakiet.',
            'mbHelp' => '<b>Witamy w Budowniczym Modu????w.</b><br/><br/><b>Budowniczy Modu????w</b> jest u??ywany do tworzenia pakiet??w zawieraj??cych dostosowywane modu??y, bazuj??ce na standardowych, lub w??asnych modu??ach. <br/><br/>Aby rozpocz????, kliknij <b>Nowy Pakiet</b> w celu utworzenia nowego pakietu, lub wybierz pakiet do edycji.<br/><br/> <b>Pakiet</b> mo??e by?? zbiorem w??asnych modu????w, kt??re s?? cz????ci?? jednego projektu. Pakiet mo??e wi??c zawiera?? wi??cej ni?? jeden modu?? w??asny, kt??ry mo??e by?? po????czony z dowolnym innym modu??em w aplikacji. <br/><br/>Przyk??ad: Mo??esz stworzy?? pakiet, zawieraj??cy jeden modu?? w??asny, kt??ry jest po????czony ze standardowym modu??em <b>Klienci</b>. lub  stworzy?? kilka modu????w, wsp????pracuj??cych ze sob??, jako projekt i b??d??cych zale??nymi od modu????w aplikacji.',
            'exportBtn' => 'Kliknij <b>Wyeksportuj dostosowania</b>, aby zbudowa?? pakiet dla okre??lonego modu??u zawieraj??cy elementy stworzone przez Ciebie w Edytorze modu????w.',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => 'Edytor list rozwijanych',

//STUDIO2
    'LBL_MODULEBUILDER' => 'Budowniczy Modu????w',
    'LBL_STUDIO' => 'Edytor modu????w',
    'LBL_DROPDOWNEDITOR' => 'Edytor list rozwijanych',
    'LBL_DEVELOPER_TOOLS' => 'Narz??dzia programisty',
    'LBL_SUITEPORTAL' => 'Edytor portalu SuiteCRM',
    'LBL_PACKAGE_LIST' => 'Lista pakiet??w',
    'LBL_HOME' => 'Powr??t do strony g????wnej',
    'LBL_NONE' => '-Brak-',
    'LBL_DEPLOYE_COMPLETE' => 'Publikacja zako??czona',
    'LBL_DEPLOY_FAILED' => 'Wyst??pi?? b????d podczas procesu publikacjim tw??j pakiet m??g?? nie zosta?? poprawnie zainstalowany.',
    'LBL_AVAILABLE_SUBPANELS' => 'Dost??pne subpanele',
    'LBL_ADVANCED' => 'Zaawansowane',
    'LBL_ADVANCED_SEARCH' => 'Zaawansowany filtr wyszukiwania',
    'LBL_BASIC' => 'Podstawowe',
    'LBL_BASIC_SEARCH' => 'Szybki filtr wyszukiwania',
    'LBL_CURRENT_LAYOUT' => 'Obecny wygl??d',
    'LBL_CURRENCY' => 'Waluta',
    'LBL_DASHLET' => 'Wid??et SuiteCRM',
    'LBL_DASHLETLISTVIEW' => 'Widok listy wid??et??w SuiteCRM',
    'LBL_POPUP' => 'Wyskakuj??ce okno widoku',
    'LBL_POPUPLISTVIEW' => 'Wyskakuj??ce okno widoku listy',
    'LBL_POPUPSEARCH' => 'Wyskakuj??ce okno wyszukiwania',
    'LBL_DASHLETSEARCHVIEW' => 'Wyszukiwanie wid??et??w SuiteCRM',
    'LBL_DETAILVIEW' => 'Widok szczeg????owy',
    'LBL_DROP_HERE' => '[Upu???? tutaj]',
    'LBL_EDIT' => 'Edytuj',
    'LBL_EDIT_LAYOUT' => 'Widok edycji',
    'LBL_EDIT_FIELDS' => 'Edytuj pola',
    'LBL_EDITVIEW' => 'Widok edycji',
    'LBL_FILLER' => '(wype??niacz)',
    'LBL_FIELDS' => 'Pola',
    'LBL_FAILED_TO_SAVE' => 'Nie mo??na zapisa??',
    'LBL_FAILED_PUBLISHED' => 'Nie mo??na opublikowa??',
    'LBL_HOMEPAGE_PREFIX' => 'Moja',
    'LBL_LAYOUT_PREVIEW' => 'Podgl??d wygl??du',
    'LBL_LAYOUTS' => 'Wygl??dy',
    'LBL_LISTVIEW' => 'Widok listy',
    'LBL_MODULES' => 'Modu??y:',
    'LBL_MODULE_TITLE' => 'Edytor modu????w',
    'LBL_NEW_PACKAGE' => 'Nowy pakiet',
    'LBL_NEW_PANEL' => 'Nowy panel',
    'LBL_NEW_ROW' => 'Nowy wiersz',
    'LBL_PACKAGE_DELETED' => 'Pakiet usuni??ty',
    'LBL_PUBLISHING' => 'Publikowanie...',
    'LBL_PUBLISHED' => 'Opublikowany',
    'LBL_SELECT_FILE' => 'Wybierz plik',
    'LBL_SUBPANELS' => 'Subpanele',
    'LBL_SUBPANEL' => 'Subpanel',
    'LBL_SUBPANEL_TITLE' => 'Tytu??:',
    'LBL_SEARCH_FORMS' => 'Filtr wyszukiwania',
    'LBL_SEARCH' => 'Szukaj',
    'LBL_SEARCH_BUTTON' => 'Szukaj',
    'LBL_FILTER' => 'Filtr wyszukiwania',
    'LBL_TOOLBOX' => 'Skrzynka narz??dziowa',
    'LBL_QUICKCREATE' => 'Szybkie tworzenie',
    'LBL_EDIT_DROPDOWNS' => 'Edytuj globaln?? list?? rozwijaln??',
    'LBL_ADD_DROPDOWN' => 'Dodaj now?? globaln?? list?? rozwijaln??',
    'LBL_BLANK' => '-czysto-',
    'LBL_TAB_ORDER' => 'Kolejno???? zak??adek',
    'LBL_TABDEF_TYPE' => 'Typ widoku',
    'LBL_TABDEF_TYPE_HELP' => 'Wybierz, jak ma by?? wy??wietlana ta sekcja. Ta opcja zadzia??a, je??li w tym widoku w????czona zosta??a obs??uga kart.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Zak??adka',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panel',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'Wybierz Panel aby wy??wietla?? dane w widokach w postaci panelu. Wybierz Zak??adka, aby dane tego panelu wy??wietlane by??y w osobnej zak??adce w poszczeg??lnych widokach. Gdy wybierzesz Zak??adk??, nast??puj??ce po niej panele z ustawieniem Panel b??d?? wy??wietlane w tej zak??adce. <br/> Nowa Zak??adka zostanie uruchomiona dla kolejnego panelu, dla kt??rego jest wybierzesz opcj?? Zak??adka. Je??eli wybierzesz opcj?? Zak??adka dla panelu nast??puj??cego bezpo??rednio po pierwszym, r??wnie?? pierwszy panel zostanie przekszta??cony w zak??adk??.',
    'LBL_TABDEF_COLLAPSE' => 'Zwi??',
    'LBL_TABDEF_COLLAPSE_HELP' => 'Zaznacz, aby panele by??y domy??lnie zminimalizowane.',
    'LBL_DROPDOWN_TITLE_NAME' => 'Nazwa',
    'LBL_DROPDOWN_LANGUAGE' => 'J??zyk',
    'LBL_DROPDOWN_ITEMS' => 'Lista element??w',
    'LBL_DROPDOWN_ITEM_NAME' => 'Nazwa elementu',
    'LBL_DROPDOWN_ITEM_LABEL' => 'Poka?? etykiet??',
    'LBL_SYNC_TO_DETAILVIEW' => 'Synchronizuj do widoku szczeg????owego',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Wybierz t?? opcj??, aby zsynchronizowa?? ten uk??ad widoku edycji z odpowiednim uk??adem widoku szczeg????owego. Pola w widoku edycji b??d?? automatycznie zsynchronizowane i zapisane w widoku szczeg????owym po klikni??ci Zapisz & Opublikuj w widoku edycji. Zmiany w uk??adzie nie b??d?? mozliwe do wykonania w widoku szczeg????owym.',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Ten widok szczeg????owy jest zsynchronizowany z odpowiednim widokiem edycji.<br> Pola w tym widoku szczeg????owym odzwierciedlaj?? pola w widoku edycji.<br> Zmiany w widoku szczeg????owym nie mog?? by?? zapisane lub opublikowane w ramach tej strony. Dokonaj zmian lub wy????cz synchronizacj?? uk??ad??w w widoku edycji. ',
    'LBL_COPY_FROM_EDITVIEW' => 'Kopiuj z widoku edycji',
    'LBL_DROPDOWN_BLANK_WARNING' => 'Warto??ci s?? wymagane dla nazwy pozycji i etykiety wy??wietlania. Aby doda?? pust?? pozycj??, kliknij Dodaj bez wprowadzania ??adnych warto??ci dla nazwy pozycji i etykiety wy??wietlania.',
    'LBL_DROPDOWN_KEY_EXISTS' => 'Klucz ju?? istnieje na li??cie',
    'LBL_NO_SAVE_ACTION' => 'Nie znaleziono akcji zapisu dla tego widoku.',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: niepoprawny format dokumentu',


//RELATIONSHIPS
    'LBL_MODULE' => 'Modu??',
    'LBL_LHS_MODULE' => 'Modu?? nadrz??dny',
    'LBL_CUSTOM_RELATIONSHIPS' => '* zale??no??ci tworzone w Edytorze modu????w lub Budowniczym modu????w',
    'LBL_RELATIONSHIPS' => 'Zale??no??ci',
    'LBL_RELATIONSHIP_EDIT' => 'Edytuj zwi??zek',
    'LBL_REL_NAME' => 'Nazwa',
    'LBL_REL_LABEL' => 'Etykieta',
    'LBL_REL_TYPE' => 'Typ',
    'LBL_RHS_MODULE' => 'Po????czone modu??y',
    'LBL_NO_RELS' => 'Brak zale??no??ci',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Warunki opcjonalne',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Kolumna',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'Warto????',
    'LBL_SUBPANEL_FROM' => 'Subpanel z',
    'LBL_RELATIONSHIP_ONLY' => 'Nie zostan?? utworzone ??adne widoczne elementy dla tej zale??no??ci je??li s?? ju?? istniej??ce widoczne zale??no??ci dla tych dw??ch modu????w.',
    'LBL_ONETOONE' => 'Jeden do jednego',
    'LBL_ONETOMANY' => 'Jeden do wielu',
    'LBL_MANYTOONE' => 'Wiele do jednego',
    'LBL_MANYTOMANY' => 'Wielu do wielu',


//STUDIO QUESTIONS
    'LBL_QUESTION_EDIT' => 'Wybierz modu?? do edycji.',
    'LBL_QUESTION_LAYOUT' => 'Wybierz wygl??d do edycji.',
    'LBL_QUESTION_SUBPANEL' => 'Wybierz subpanelpanel do edycji.',
    'LBL_QUESTION_SEARCH' => 'Wybierz wygl??d wyszukiwania do edycji.',
    'LBL_QUESTION_MODULE' => 'Wybierz element modu??u do edycji.',
    'LBL_QUESTION_PACKAGE' => 'Wybierz pakiet do edycji, lub utw??rz nowy.',
    'LBL_QUESTION_EDITOR' => 'Wybierz narz??dzie.',
    'LBL_QUESTION_DASHLET' => 'Wybierz wygl??d wid??etu do edycji.',
    'LBL_QUESTION_POPUP' => 'Wybierz wyskakuj??cy uk??ad do edycji.',
//CUSTOM FIELDS
    'LBL_NAME' => 'Nazwa',
    'LBL_LABELS' => 'Etykiety',
    'LBL_MASS_UPDATE' => 'Pe??na aktualizacja',
    'LBL_DEFAULT_VALUE' => 'Warto???? domy??lna',
    'LBL_REQUIRED' => 'Wymagane',
    'LBL_DATA_TYPE' => 'Typ',
    'LBL_HCUSTOM' => 'W??ASNY',
    'LBL_HDEFAULT' => 'DOMY??LNY',
    'LBL_LANGUAGE' => 'J??zyk:',
    'LBL_CUSTOM_FIELDS' => '* pole utworzone w Edytorze modu????w',

//SECTION
    'LBL_SECTION_EDLABELS' => 'Edytuj panele',
    'LBL_SECTION_PACKAGES' => 'Pakiety',
    'LBL_SECTION_PACKAGE' => 'Pakiet',
    'LBL_SECTION_MODULES' => 'Modu??y',
    'LBL_SECTION_DROPDOWNS' => 'Listy rozwijalne',
    'LBL_SECTION_PROPERTIES' => 'W??a??ciwo??ci',
    'LBL_SECTION_DROPDOWNED' => 'Edytor list rozwijalnych',
    'LBL_SECTION_HELP' => 'Pomoc',
    'LBL_SECTION_MAIN' => 'G????wny',
    'LBL_SECTION_FIELDEDITOR' => 'Edytor p??l',
    'LBL_SECTION_DEPLOY' => 'Zamieszczanie',
    'LBL_SECTION_MODULE' => 'Modu??',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'Domy??lne',
    'LBL_HIDDEN' => 'Ukryte',
    'LBL_AVAILABLE' => 'Dost??pne',
    'LBL_LISTVIEW_DESCRIPTION' => 'Poni??ej s?? wy??wietlone trzy kolumy; Kolumna <b>Domy??lne</b> zawieraj?? pola, kt??re s?? wy??wietlone poni??ej. Kolumna <b>Dodatkowe</b> zawiera pola, kt??rych U??ytkownik mo??e u??y?? podczas tworzenia w??asnego wygl??du.  Kolumna <b>Dost??pne</b> wy??wietla pola, kt??re s?? dost??pne dla Ciebie, jako administratora, a kt??re mo??esz doda?? do dost??pnych dla U??ytkownik??w.',
    'LBL_LISTVIEW_EDIT' => 'Edytor wygl??du listy',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'Podgl??d',
    'LBL_MB_RESTORE' => 'Przywr????',
    'LBL_MB_DELETE' => 'Usu??',
    'LBL_MB_DEFAULT_LAYOUT' => 'Domy??lny uk??ad',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'Dodaj',
    'LBL_BTN_SAVE' => 'Zapisz',
    'LBL_BTN_SAVE_CHANGES' => 'Zapisz zmiany',
    'LBL_BTN_DONT_SAVE' => 'Pomi?? zmiany',
    'LBL_BTN_CANCEL' => 'Anuluj',
    'LBL_BTN_CLOSE' => 'Zamknij',
    'LBL_BTN_SAVEPUBLISH' => 'Zapisz i zainstaluj',
    'LBL_BTN_CLONE' => 'Klonuj',
    'LBL_BTN_ADDROWS' => 'Dodaj wiersz',
    'LBL_BTN_ADDFIELD' => 'Dodaj pole',
    'LBL_BTN_ADDDROPDOWN' => 'Dodaj list?? rozwijaln??',
    'LBL_BTN_SORT_ASCENDING' => 'Sortuj rosn??co',
    'LBL_BTN_SORT_DESCENDING' => 'Sortuj malej??co',
    'LBL_BTN_EDLABELS' => 'Edytuj etykiety',
    'LBL_BTN_UNDO' => 'Cofnij',
    'LBL_BTN_REDO' => 'Przywr????',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Dodaj w??asne pole',
    'LBL_BTN_EXPORT' => 'Wyeksportuj w??asne dostosowania',
    'LBL_BTN_DUPLICATE' => 'Skopiuj',
    'LBL_BTN_PUBLISH' => 'Publikuj',
    'LBL_BTN_DEPLOY' => 'Zainstaluj',
    'LBL_BTN_EXP' => 'Eksport',
    'LBL_BTN_DELETE' => 'Usu??',
    'LBL_BTN_VIEW_LAYOUTS' => 'Zobacz wygl??dy',
    'LBL_BTN_VIEW_FIELDS' => 'Zobacz pola',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'Zobacz zale??no??ci',
    'LBL_BTN_ADD_RELATIONSHIP' => 'Dodaj zale??no??ci',
    'LBL_BTN_RENAME_MODULE' => 'Zmie?? nazw?? modu??u',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'B????d: Pole juz istnieje',
    'ERROR_INVALID_KEY_VALUE' => "B????d: Nieprawid??owa warto???? klucza: [']",
    'ERROR_NO_HISTORY' => 'Nie odnaleziono plik??w historii',
    'ERROR_MINIMUM_FIELDS' => 'Uk??ad musi zawiera?? przynajmniej jedno pole',
    'ERROR_GENERIC_TITLE' => 'Wyst??pi?? b????d',
    'ERROR_REQUIRED_FIELDS' => 'Czy na pewno chcesz kontynuowa??? W uk??adzie brakuje nast??puj??cych wymaganych p??l:',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Nazwa pakietu:',
    'LBL_MODULE_NAME' => 'Nazwa modu??u:',
    'LBL_AUTHOR' => 'Autor:',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_KEY' => 'Klucz:',
    'LBL_ADD_README' => 'Readme',
    'LBL_LAST_MODIFIED' => 'Ostatnio modyfikowany:',
    'LBL_NEW_MODULE' => 'Nowy modu??',
    'LBL_LABEL' => 'Etykieta:',
    'LBL_LABEL_TITLE' => 'Etykieta',
    'LBL_WIDTH' => 'Szeroko????',
    'LBL_PACKAGE' => 'Paczka:',
    'LBL_TYPE' => 'Typ:',
    'LBL_NAV_TAB' => 'Zak??adka nawigacyjna',
    'LBL_CREATE' => 'Utw??rz',
    'LBL_LIST' => 'Lista',
    'LBL_VIEW' => 'Zobacz',
    'LBL_HISTORY' => 'Historia',
    'LBL_RESTORE_DEFAULT' => 'Przywr???? domy??lne',
    'LBL_ACTIVITIES' => 'Dzia??ania',
    'LBL_NEW' => 'Nowy',
    'LBL_TYPE_BASIC' => 'podstawowy',
    'LBL_TYPE_COMPANY' => 'firma',
    'LBL_TYPE_PERSON' => 'osoba',
    'LBL_TYPE_ISSUE' => 'problem',
    'LBL_TYPE_SALE' => 'sprzeda??',
    'LBL_TYPE_FILE' => 'plik',
    'LBL_RSUB' => 'To jest subpanel, kt??ry b??dzie wy??wietlany w Twoim module',
    'LBL_MSUB' => 'To jest subpanel, kt??ry jest po????czony z modu??em do wy??wietlenia.',
    'LBL_MB_IMPORTABLE' => 'Importowanie',

// VISIBILITY EDITOR
    'LBL_PACKAGE_WAS_DELETED' => '[[package]] zosta?? usuni??ty',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'Wyeksportuj dostosowania',
    'LBL_EC_NAME' => 'Nazwa pakietu:',
    'LBL_EC_AUTHOR' => 'Autor:',
    'LBL_EC_DESCRIPTION' => 'Opis:',
    'LBL_EC_CHECKERROR' => 'Wybierz modu??.',
    'LBL_EC_CUSTOMFIELD' => 'pole dostosowane',
    'LBL_EC_CUSTOMLAYOUT' => 'wygl??d dostosowany',
    'LBL_EC_NOCUSTOM' => '??aden modu?? nie zosta?? dostosowany.',
    'LBL_EC_EMPTYCUSTOM' => 'nie posiada w??asnych dostosowa??.',
    'LBL_EC_EXPORTBTN' => 'Eksport',
    'LBL_MODULE_DEPLOYED' => 'Modu?? zosta?? zamieszczony.',
    'LBL_UNDEFINED' => 'niezidentyfikowany',
    'LBL_EC_VIEWS' => 'niestandardowy(e) widok(i)',
    'LBL_EC_SUITEFEEDS' => 'niestandardowe aktualno??ci',
    'LBL_EC_DASHLETS' => 'dostosowane wid??ety',
    'LBL_EC_CSS' => 'niestandardowe css',
    'LBL_EC_TPLS' => 'niestandardowe tpls',
    'LBL_EC_IMAGES' => 'niestandardowe obrazy',
    'LBL_EC_JS' => 'niestandardowe js',
    'LBL_EC_QTIP' => 'niestandardowe qtip',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => 'Nie mo??na przywr??ci?? danych',
    'LBL_AJAX_LOADING' => '??aduj??...',
    'LBL_AJAX_DELETING' => 'Usuwam...',
    'LBL_AJAX_BUILDPROGRESS' => 'Budowanie trwa...',
    'LBL_AJAX_DEPLOYPROGRESS' => 'Zamieszczanie trwa...',

    'LBL_AJAX_RESPONSE_TITLE' => 'Rezultat',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'Operacja zako??czona powodzeniem',
    'LBL_AJAX_LOADING_TITLE' => 'W toku..',
    'LBL_AJAX_LOADING_MESSAGE' => 'Prosz?? czeka??, trwa ??adowanie...',

//JS
    'LBL_JS_REMOVE_PACKAGE' => 'Czy na pewno chcesz usun???? ten pakiet? Spowoduje to trwa??e usuni??cie wszystkich plik??w skojarzonych z tym pakietem.',
    'LBL_JS_REMOVE_MODULE' => 'Czy na pewno chcesz usun???? ten modu??? Spowoduje to trwa??e usuni??cie wszystkich plik??w zwi??zanych z tym modu??em.',
    'LBL_JS_DEPLOY_PACKAGE' => 'Wszelkie modyfikacje, kt??re wprowadzono w Edytorze modu????w b??d?? nadpisane kiedy ten modu?? zostanie ponownie za??adowany. Czy na pewno chcesz kontynuowa???',

    'LBL_DEPLOY_IN_PROGRESS' => 'Zamieszczanie pakietu',
    'LBL_JS_VALIDATE_NAME' => 'Nazwa - musi sk??ada?? si?? ze znak??w alfanumerycznych, bez spacji i rozpoczyna?? si?? od litery',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'Nazwa pakietu ju?? istnieje',
    'LBL_JS_VALIDATE_KEY' => 'Klucz - musi sk??ada?? si?? ze znak??w alfanumerycznych, bez spacji i rozpoczyna?? si?? od litery',
    'LBL_JS_VALIDATE_LABEL' => 'Wprowad?? etykiete, kt??ra b??dzie u??yta jako nazwa tego modu??u',
    'LBL_JS_VALIDATE_TYPE' => 'Wybierz z listy rozwijalnej typ modu??u, kt??ry chcesz zbudowa??',
    'LBL_JS_VALIDATE_REL_LABEL' => 'Etykieta - wpisz etykiet??, kt??ra b??dzie wy??wietlana ponad subpanelem',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'Usuni??cie tego pola niestandardowego spowoduje zar??wno usuni??cie pola niestandardowego jak i wszystkich danych odnosz??cych si?? do pola niestandardowego w bazie danych. Pole nie pojawi ju?? si?? w ??adnych uk??addzie modu??u. \n\nCzy chcesz kontynuowa???',

    'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'Czy na pewno chcesz usun???? t?? zale??no?????',
    'LBL_CONFIRM_DONT_SAVE' => 'Zmiany, kt??re zosta??y wprowadzone od ostatniego zapisywania. Czy chcesz zapisa?? teraz?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Zachowa?? zmiany?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'Dane mog?? by?? okrojone i nie mo??na tego cofn????, czy na pewno chcesz kontynuowa???',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'Wybierz w??a??ciwy typ danych na informacji, kt??re chcesz wprowadza?? w tych polach.',
    'LBL_POPHELP_IMPORTABLE' => '<b>Tak</b>: Pole zostanie uwzgl??dnione w operacji importu.<br><b>Nie</b>: Pole nie b??dzie uwzgl??dnione podczas importowania.<br><b>Wymagane</b>: Warto???? pola musi by?? podana przy ka??dym imporcie.',
    'LBL_POPHELP_IMAGE_WIDTH' => 'Wprowad?? liczb?? okre??laj??c?? szeroko???? mierzon?? w pikselach.<br> Przes??any obraz zostanie przeskalowany do tej szeroko??ci.',
    'LBL_POPHELP_IMAGE_HEIGHT' => 'Wprowad?? liczb?? okre??laj??c?? wysoko???? mierzon?? w pikselach.<br> Przes??any obraz zostanie przeskalowany do tej wysoko??ci.',
    'LBL_POPHELP_DUPLICATE_MERGE' => '<b>Enabled</b>: The field will appear in the Merge Duplicates feature, but will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Disabled</b>: The field will not appear in the Merge Duplicates feature, and will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Filter</b>: The field will appear in the Merge Duplicates feature, and will be available to use for the filter conditions in the Find Duplicates feature.<br><b>Default selected filter</b>: The field will appear in the Merge Duplicates feature, and will be used by default for the filter conditions in the Find Duplicates feature.<br><b>Only filter</b>: The field will not appear in the Merge Duplicates feature, but will be available to use for the filter conditions in the Find Duplicates feature.',

//Revert Module labels
    'LBL_RESET' => 'Resetuj',
    'LBL_RESET_MODULE' => 'Resetuj modu??',
    'LBL_REMOVE_CUSTOM' => 'Usu?? personalizacje',
    'LBL_CLEAR_RELATIONSHIPS' => 'Wyczy???? zale??no??ci',
    'LBL_RESET_LABELS' => 'Resetuj etykiety',
    'LBL_RESET_LAYOUTS' => 'Resetuj uk??ady',
    'LBL_REMOVE_FIELDS' => 'Usu?? w??asne pola',
    'LBL_CLEAR_EXTENSIONS' => 'Wyczy???? rozszerzenia',
    'LBL_HISTORY_TIMESTAMP' => 'Znacznik czasu',
    'LBL_HISTORY_TITLE' => 'Historia',

    'fieldTypes' => array(
        'varchar' => 'Tekst',
        'int' => 'Liczba ca??kowita',
        'float' => 'Liczba zmiennoprzecinkowa',
        'bool' => 'Pole wyboru (prawda/fa??sz)',
        'enum' => 'Lista wyboru',
        'dynamicenum' => 'Dynamiczna lista wyboru',
        'multienum' => 'Lista multi-wyboru',
        'date' => 'Data',
        'phone' => 'Telefon',
        'currency' => 'Waluta',
        'html' => 'HTML tylko do odczytu (przestarza??e, u??yj TextBlock)',
        'radioenum' => 'Radio',
        'relate' => 'Powi??zane',
        'address' => 'Adres',
        'text' => 'Obszar tekstu',
        'textblock' => 'Blok tekstowy',
        'url' => 'Adres URL',
        'iframe' => 'Ramka IFrame',
        'datetimecombo' => 'Data i czas',
        'decimal' => 'Dziesi??tne',
        'image' => 'Obraz',
        'wysiwyg' => 'WYSIWYG',
    ),
    'labelTypes' => array(
        "frequently_used" => "Cz??sto u??ywane etykiety",
        "all" => "Wszystkie etykiety",
    ),

    'parent' => 'Wyb??r zale??no??ci',

    'LBL_CONFIRM_SAVE_DROPDOWN' => "Wybierasz ten element do usuni??cia z rozwijanej listy. Jakiekolwiek rozwijane pola u??ywaj??ce tej listy z tym elementem jako warto??ci??, nie b??dzie wy??wietla?? tej warto??ci, a warto???? nie b??dzie mo??liwa do zaznaczenia z rozwijanej listy. Czy na pewno chcesz kontynuowa???",

    'LBL_ALL_MODULES' => 'Wszystkie modu??y',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (powi??zane{1} ID)',
);
