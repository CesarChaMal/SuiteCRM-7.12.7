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
    'LBL_ASSIGNED_TO_ID' => 'ID przydzielonego u??ytkownika',
    'LBL_ASSIGNED_TO_NAME' => 'Przypisano do',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data utworzenia',
    'LBL_DATE_MODIFIED' => 'Data Modyfikacji',
    'LBL_MODIFIED' => 'Zmodyfikowane przez',
    'LBL_MODIFIED_NAME' => 'Nazwa u??ytkownika modyfikuj??cego',
    'LBL_CREATED' => 'Utworzone przez',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_DELETED' => 'Usuni??te',
    'LBL_NONINHERITABLE' => 'Niedziedziczne',
    'LBL_LIST_NONINHERITABLE' => 'Niedziedziczne',
    'LBL_NAME' => 'Nazwa',
    'LBL_CREATED_USER' => 'Utworzony przez U??ytkownika',
    'LBL_MODIFIED_USER' => 'Zmodyfikowany przez U??ytkownika',
    'LBL_LIST_FORM_TITLE' => 'Grupy bezpiecze??stwa',
    'LBL_MODULE_NAME' => 'Zarz??dzanie Security Suite',
    'LBL_MODULE_TITLE' => 'Zarz??dzanie Security Suite',
    'LNK_NEW_RECORD' => 'Utw??rz Grup?? Bezpiecze??stwa',
    'LNK_LIST' => 'Widok Listy',
    'LBL_SEARCH_FORM_TITLE' => 'Przegl??daj zarz??dzanie grupami bezpiecze??stwa',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Dzia??ania',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Zarz??dzanie grupami bezpiecze??stwa',
    'LBL_USERS' => 'U??ytkownicy',
    'LBL_USERS_SUBPANEL_TITLE' => 'U??ytkownicy',
    'LBL_ROLES_SUBPANEL_TITLE' => 'Profile uprawnie??',
    'LBL_ROLES' => 'Profile uprawnie??',

    'LBL_CONFIGURE_SETTINGS' => 'Konfiguruj',
    'LBL_ADDITIVE' => 'Prawa rozszerzone',
    'LBL_ADDITIVE_DESC' => "U??ytkownik otrzymuje najszerszy zakres uprawnie?? ze wszystkich jego profili uprawnie?? lub grup, kt??rych jest cz??onkiem",
    'LBL_STRICT_RIGHTS' => 'Uprawnienia rygorystyczne',
    'LBL_STRICT_RIGHTS_DESC' => "Je??li u??ytkownik jest cz??onkiem kilku grup, wy????cznie prawa powi??zane z grup?? przypisan?? do bie????cego rekordu s?? wykorzystywane.",
    'LBL_USER_ROLE_PRECEDENCE' => 'Pierwsze??stwo Profili uprawnie?? u??ytkownika',
    'LBL_USER_ROLE_PRECEDENCE_DESC' => 'Je??li jaki?? Profil uprawnie?? jest przypisany bezpo??rednio U??ytkownikowi, w??wczas ten profil powinien mie?? pierwsze??stwo nad jakimkolwiek grupowym profilem uprawnie??.',
    'LBL_INHERIT_TITLE' => 'Zasady Dziedziczenia Grup',
    'LBL_INHERIT_CREATOR' => 'Dziedzicz z Utworzone przez U??ytkownika',
    'LBL_INHERIT_CREATOR_DESC' => 'Rekord b??dzie dziedziczy?? wszystkie grupy przypisane do u??ytkownika, kt??ry go utworzy??.',
    'LBL_INHERIT_PARENT' => 'Dziedzicz z Rekordu Nadrz??dnego',
    'LBL_INHERIT_PARENT_DESC' => 'np. je??li Sprawa jest tworzona dla Kontaktu, Sprawa b??dzie dziedziczy?? grupy, zwi??zane z tym Kontaktem.',
    'LBL_USER_POPUP' => 'Nowe okienko wyskakuj??ce Grupy u??ytkownik??w',
    'LBL_USER_POPUP_DESC' => 'Podczas tworzenia nowego u??ytkownika poka?? okienko wyskakuj??ce Grup bezpiecze??stwa, aby przypisa?? u??ytkownika do Grup(y).',
    'LBL_INHERIT_ASSIGNED' => 'Dziedziczenie z pola Przydzielone do u??ytkownika',
    'LBL_INHERIT_ASSIGNED_DESC' => 'Rekord b??dzie dziedziczy?? wszystkie grupy przypisane do u??ytkownika rekordu. Inne grupy przypisane do rekordu NIE zostan?? usuni??te.',
    'LBL_POPUP_SELECT' => 'U??yj kreatora wyboru grupy',
    'LBL_POPUP_SELECT_DESC' => 'Gdy rekord jest tworzony przez u??ytkownika w wi??cej ni?? jednej Grupie, poka?? panel wyboru grupy na ekranie tworzenia. W przeciwnym razie nast??pi dziedziczenie tylko jednej Grupy bezpiecze??stwa.',
    'LBL_FILTER_USER_LIST' => 'Filtruj list?? u??ytkownik??w',
    'LBL_FILTER_USER_LIST_DESC' => "U??ytkownicy bez uprawnie?? administratora mog?? przypisa?? u??ytkownik??w tylko do tej samej grupy",

    'LBL_DEFAULT_GROUP_TITLE' => 'Grupa domy??lna dla nowych rekord??w',
    'LBL_ADD_BUTTON_LABEL' => 'Dodaj',
    'LBL_REMOVE_BUTTON_LABEL' => 'Usu??',
    'LBL_GROUP' => 'Grupa:',
    'LBL_MODULE' => 'Modu??:',

    'LBL_MASS_ASSIGN' => 'Grupy zabezpiecze??: Masowe przypisywanie',
    'LBL_ASSIGN' => 'Przypisanie',
    'LBL_REMOVE' => 'Usu??',
    'LBL_ASSIGN_CONFIRM' => 'Czy na pewno chcesz doda?? t?? grup?? do',
    'LBL_REMOVE_CONFIRM' => 'Czy na pewno chcesz usun???? t?? grup?? z',
    'LBL_CONFIRM_END' => 'zaznaczonych rekord??w?',

    'LBL_SECURITYGROUP_USER_FORM_TITLE' => 'Grupa bezpiecze??stwa/U??ytkownik',
    'LBL_USER_NAME' => 'Nazwa U??ytkownika',
    'LBL_SECURITYGROUP_NAME' => 'Nazwa Grupy zabezpiecze??',
    'LBL_HOMEPAGE_TITLE' => 'Wiadomo??ci grupowe',
    'LBL_TITLE' => 'Tytu??',
    'LBL_ROWS' => 'Wiersze',
    'LBL_POST' => 'Wy??lij',
    'LBL_SELECT_GROUP_ERROR' => 'Prosz?? wybra?? grup?? i spr??bowa?? ponownie.',

    'LBL_GROUP_SELECT' => 'Wybierz grupy, kt??re powinny mie?? dost??p do tego rekordu',
    'LBL_ERROR_DUPLICATE' => 'Ze wzgl??du na mo??liwe duplikaty wykryte przez SuiteCRM b??dziesz musia?? r??cznie doda?? Grupy zabezpiecze?? do nowo utworzonego rekordu.',
    'LBL_ERROR_EXPORT_WHERE_CHANGED' => 'Aktualizacja si?? nie powiod??a poniewa?? filtr wyszukiwania zosta?? zmieniony. Spr??buj ponownie.',

    'LBL_INBOUND_EMAIL' => 'Konto e-mail poczty przychodz??cej',
    'LBL_INBOUND_EMAIL_DESC' => 'Umo??liwia dost??p do konta e-mail tylko wtedy, gdy u??ytkownik nale??y do grupy, kt??ra jest przypisana do konta poczty.',
    'LBL_PRIMARY_GROUP' => 'G????wna grupa',
    'LBL_CHECKMARK' => 'Zaznaczenie',

);
