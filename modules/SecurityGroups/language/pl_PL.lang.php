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
    'LBL_ALL_MODULES' => 'Wszystkie',//rost fix
    'LBL_ASSIGNED_TO_ID' => 'ID przydzielonego użytkownika',
    'LBL_ASSIGNED_TO_NAME' => 'Przypisano do',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data utworzenia',
    'LBL_DATE_MODIFIED' => 'Data Modyfikacji',
    'LBL_MODIFIED' => 'Zmodyfikowane przez',
    'LBL_MODIFIED_NAME' => 'Nazwa użytkownika modyfikującego',
    'LBL_CREATED' => 'Utworzone przez',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_DELETED' => 'Usunięte',
    'LBL_NONINHERITABLE' => 'Niedziedziczne',
    'LBL_LIST_NONINHERITABLE' => 'Niedziedziczne',
    'LBL_NAME' => 'Nazwa',
    'LBL_CREATED_USER' => 'Utworzony przez Użytkownika',
    'LBL_MODIFIED_USER' => 'Zmodyfikowany przez Użytkownika',
    'LBL_LIST_FORM_TITLE' => 'Grupy bezpieczeństwa',
    'LBL_MODULE_NAME' => 'Zarządzanie Security Suite',
    'LBL_MODULE_TITLE' => 'Zarządzanie Security Suite',
    'LNK_NEW_RECORD' => 'Utwórz Grupę Bezpieczeństwa',
    'LNK_LIST' => 'Widok Listy',
    'LBL_SEARCH_FORM_TITLE' => 'Przeglądaj zarządzanie grupami bezpieczeństwa',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Działania',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Zarządzanie grupami bezpieczeństwa',
    'LBL_USERS' => 'Użytkownicy',
    'LBL_USERS_SUBPANEL_TITLE' => 'Użytkownicy',
    'LBL_ROLES_SUBPANEL_TITLE' => 'Profile uprawnień',
    'LBL_ROLES' => 'Profile uprawnień',

    'LBL_CONFIGURE_SETTINGS' => 'Konfiguruj',
    'LBL_ADDITIVE' => 'Prawa rozszerzone',
    'LBL_ADDITIVE_DESC' => "Użytkownik otrzymuje najszerszy zakres uprawnień ze wszystkich jego profili uprawnień lub grup, których jest członkiem",
    'LBL_STRICT_RIGHTS' => 'Uprawnienia rygorystyczne',
    'LBL_STRICT_RIGHTS_DESC' => "Jeśli użytkownik jest członkiem kilku grup, wyłącznie prawa powiązane z grupą przypisaną do bieżącego rekordu są wykorzystywane.",
    'LBL_USER_ROLE_PRECEDENCE' => 'Pierwszeństwo Profili uprawnień użytkownika',
    'LBL_USER_ROLE_PRECEDENCE_DESC' => 'Jeśli jakiś Profil uprawnień jest przypisany bezpośrednio Użytkownikowi, wówczas ten profil powinien mieć pierwszeństwo nad jakimkolwiek grupowym profilem uprawnień.',
    'LBL_INHERIT_TITLE' => 'Zasady Dziedziczenia Grup',
    'LBL_INHERIT_CREATOR' => 'Dziedzicz z Utworzone przez Użytkownika',
    'LBL_INHERIT_CREATOR_DESC' => 'Rekord będzie dziedziczyć wszystkie grupy przypisane do użytkownika, który go utworzył.',
    'LBL_INHERIT_PARENT' => 'Dziedzicz z Rekordu Nadrzędnego',
    'LBL_INHERIT_PARENT_DESC' => 'np. jeśli Sprawa jest tworzona dla Kontaktu, Sprawa będzie dziedziczyć grupy, związane z tym Kontaktem.',
    'LBL_USER_POPUP' => 'Nowe okienko wyskakujące Grupy użytkowników',
    'LBL_USER_POPUP_DESC' => 'Podczas tworzenia nowego użytkownika pokaż okienko wyskakujące Grup bezpieczeństwa, aby przypisać użytkownika do Grup(y).',
    'LBL_INHERIT_ASSIGNED' => 'Dziedziczenie z pola Przydzielone do użytkownika',
    'LBL_INHERIT_ASSIGNED_DESC' => 'Rekord będzie dziedziczyć wszystkie grupy przypisane do użytkownika rekordu. Inne grupy przypisane do rekordu NIE zostaną usunięte.',
    'LBL_POPUP_SELECT' => 'Użyj kreatora wyboru grupy',
    'LBL_POPUP_SELECT_DESC' => 'Gdy rekord jest tworzony przez użytkownika w więcej niż jednej Grupie, pokaż panel wyboru grupy na ekranie tworzenia. W przeciwnym razie nastąpi dziedziczenie tylko jednej Grupy bezpieczeństwa.',
    'LBL_FILTER_USER_LIST' => 'Filtruj listę użytkowników',
    'LBL_FILTER_USER_LIST_DESC' => "Użytkownicy bez uprawnień administratora mogą przypisać użytkowników tylko do tej samej grupy",

    'LBL_DEFAULT_GROUP_TITLE' => 'Grupa domyślna dla nowych rekordów',
    'LBL_ADD_BUTTON_LABEL' => 'Dodaj',
    'LBL_REMOVE_BUTTON_LABEL' => 'Usuń',
    'LBL_GROUP' => 'Grupa:',
    'LBL_MODULE' => 'Moduł:',

    'LBL_MASS_ASSIGN' => 'Grupy zabezpieczeń: Masowe przypisywanie',
    'LBL_ASSIGN' => 'Przypisanie',
    'LBL_REMOVE' => 'Usuń',
    'LBL_ASSIGN_CONFIRM' => 'Czy na pewno chcesz dodać tą grupę do',
    'LBL_REMOVE_CONFIRM' => 'Czy na pewno chcesz usunąć tą grupę z',
    'LBL_CONFIRM_END' => 'zaznaczonych rekordów?',

    'LBL_SECURITYGROUP_USER_FORM_TITLE' => 'Grupa bezpieczeństwa/Użytkownik',
    'LBL_USER_NAME' => 'Nazwa Użytkownika',
    'LBL_SECURITYGROUP_NAME' => 'Nazwa Grupy zabezpieczeń',
    'LBL_HOMEPAGE_TITLE' => 'Wiadomości grupowe',
    'LBL_TITLE' => 'Tytuł',
    'LBL_ROWS' => 'Wiersze',
    'LBL_POST' => 'Wyślij',
    'LBL_SELECT_GROUP_ERROR' => 'Proszę wybrać grupę i spróbować ponownie.',

    'LBL_GROUP_SELECT' => 'Wybierz grupy, które powinny mieć dostęp do tego rekordu',
    'LBL_ERROR_DUPLICATE' => 'Ze względu na możliwe duplikaty wykryte przez SuiteCRM będziesz musiał ręcznie dodać Grupy zabezpieczeń do nowo utworzonego rekordu.',
    'LBL_ERROR_EXPORT_WHERE_CHANGED' => 'Aktualizacja się nie powiodła ponieważ filtr wyszukiwania został zmieniony. Spróbuj ponownie.',

    'LBL_INBOUND_EMAIL' => 'Konto e-mail poczty przychodzącej',
    'LBL_INBOUND_EMAIL_DESC' => 'Umożliwia dostęp do konta e-mail tylko wtedy, gdy użytkownik należy do grupy, która jest przypisana do konta poczty.',
    'LBL_PRIMARY_GROUP' => 'Główna grupa',
    'LBL_CHECKMARK' => 'Zaznaczenie',

);
