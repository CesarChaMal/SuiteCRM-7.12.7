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
    'LBL_MODULE_NAME' => 'Empleados',
    'LBL_MODULE_TITLE' => 'Empleados : Inicio',
    'LBL_SEARCH_FORM_TITLE' => 'B??squeda de empleados',
    'LBL_LIST_FORM_TITLE' => 'Empleados',
    'LBL_NEW_FORM_TITLE' => 'Nuevo empleado',
    'LBL_LOGIN' => 'Iniciar sesi??n',
    'LBL_RESET_PREFERENCES' => 'Restablecer preferencias predeterminadas',
    'LBL_TIME_FORMAT' => 'Formato de hora:',
    'LBL_DATE_FORMAT' => 'Formato de fecha:',
    'LBL_TIMEZONE' => 'Zona horaria:',
    'LBL_CURRENCY' => 'Divisa:',
    'LBL_LIST_NAME' => 'Nombre',
    'LBL_LIST_LAST_NAME' => 'Apellido',
    'LBL_LIST_EMPLOYEE_NAME' => 'Nombre del empleado',
    'LBL_LIST_DEPARTMENT' => 'Departamento',
    'LBL_LIST_REPORTS_TO_NAME' => 'Reportar a',
    'LBL_LIST_EMAIL' => 'e-Mail',
    'LBL_LIST_USER_NAME' => 'Nombre de usuario',
    'LBL_ERROR' => 'Error:',
    'LBL_PASSWORD' => 'Contrase??a:',
    'LBL_USER_NAME' => 'Nombre de usuario:',
    'LBL_USER_TYPE' => 'Tipo de usuario',
    'LBL_FIRST_NAME' => 'Nombre:',
    'LBL_LAST_NAME' => 'Apellido:',
    'LBL_THEME' => 'Tema:',
    'LBL_LANGUAGE' => 'Idioma:',
    'LBL_ADMIN' => 'Administrador:',
    'LBL_EMPLOYEE_INFORMATION' => 'Informaci??n del empleado',
    'LBL_OFFICE_PHONE' => 'Tel. oficina:',
    'LBL_REPORTS_TO' => 'Reportar a ID:',
    'LBL_REPORTS_TO_NAME' => 'Reportar a',
    'LBL_OTHER_PHONE' => 'Otro tel??fono:',
    'LBL_NOTES' => 'Notas:',
    'LBL_DEPARTMENT' => 'Departamento:',
    'LBL_TITLE' => 'Puesto de trabajo:',
    'LBL_ANY_ADDRESS' => 'Cualquier direcci??n:',
    'LBL_ANY_PHONE' => 'Cualquier tel??fono:',
    'LBL_ANY_EMAIL' => 'Cualquier e-Mail:',
    'LBL_ADDRESS' => 'Direcci??n:',
    'LBL_CITY' => 'Ciudad:',
    'LBL_STATE' => 'Estado o Provincia:',
    'LBL_POSTAL_CODE' => 'C??digo postal:',
    'LBL_COUNTRY' => 'Pa??s:',
    'LBL_NAME' => 'Nombre:',
    'LBL_MOBILE_PHONE' => 'M??vil:',
    'LBL_FAX' => 'Fax:',
    'LBL_EMAIL' => 'e-Mail:',
    'LBL_EMAIL_LINK_TYPE' => 'Cliente de e-Mail',
    'LBL_EMAIL_LINK_TYPE_HELP' => 'Cliente de correo de SuiteCRM <b>:</b> enviar mensajes de correo electr??nico mediante el cliente de correo electr??nico en la aplicaci??n de SuiteCRM. Cliente de correo externo<br><b>:</b> enviar correo electr??nico utilizando un cliente de correo electr??nico fuera de la aplicaci??n de SuiteCRM, como Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'Tel??fono de casa:',
    'LBL_WORK_PHONE' => 'Tel??fono de oficina:',
    'LBL_EMPLOYEE_STATUS' => 'Estado del empleado:',
    'LBL_PRIMARY_ADDRESS' => 'Direcci??n principal:',
    'LBL_SAVED_SEARCH' => 'Opciones de dise??o',
    'LBL_MESSENGER_ID' => 'Nombre mensajer??a instant??nea:',
    'LBL_MESSENGER_TYPE' => 'Tipo de mensajer??a instant??nea:',
    'ERR_LAST_ADMIN_1' => 'El nombre del empleado "',
    'ERR_LAST_ADMIN_2' => '" es el ??ltimo empleado con permisos de administrador.  Al menos un empleado debe ser un administrador',
    'LNK_NEW_EMPLOYEE' => 'Crear empleado',
    'LNK_EMPLOYEE_LIST' => 'Empleados',
    'ERR_DELETE_RECORD' => 'Debe especificar un n??mero de registro para eliminar el empleado',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Estado del empleado',

    'LBL_SUITE_LOGIN' => 'Es usuario',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Notificar al ser asignado',
    'LBL_IS_ADMIN' => 'Es administrador',
    'LBL_GROUP' => 'Usuario de grupo',
    'LBL_PHOTO' => 'Foto',
    'LBL_DELETE_USER_CONFIRM' => 'Este empleado es tambi??n un usuario. Eliminando el registro de empleado eliminar?? el registro de usuario y el usuario ya no tendr?? acceso a la aplicaci??n. ??Est?? seguro que desea proceder a eliminar este registro?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => '??Est?? seguro que desea eliminar este empleado?',
    'LBL_ONLY_ACTIVE' => 'Empleados activos',
    'LBL_SELECT' => 'Seleccionar' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'ID de autenticaci??n',
    'LBL_EXT_AUTHENTICATE' => 'Autenticaci??n externa',
    'LBL_GROUP_USER' => 'Usuario del grupo',
    'LBL_LIST_ACCEPT_STATUS' => 'Estado de aceptaci??n',
    'LBL_MODIFIED_BY' => 'Modificado por',
    'LBL_MODIFIED_BY_ID' => 'Modificado por ID',
    'LBL_CREATED_BY_NAME' => 'Creado por', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Usuario del API de Portal',
    'LBL_PSW_MODIFIED' => 'contrase??a cambiada por ??ltima vez',
    'LBL_SHOW_ON_EMPLOYEES' => 'Mostrar Registro de Empleado',
    'LBL_USER_HASH' => 'Contrase??a',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Contrase??a generada por el sistema',
    'LBL_DESCRIPTION' => 'Descripci??n',
    'LBL_FAX_PHONE' => 'Fax',
    'LBL_STATUS' => 'Estado',
    'LBL_ADDRESS_CITY' => 'Ciudad',
    'LBL_ADDRESS_COUNTRY' => 'Pa??s',
    'LBL_ADDRESS_INFORMATION' => 'Informaci??n de direcci??n',
    'LBL_ADDRESS_POSTALCODE' => 'C??digo postal',
    'LBL_ADDRESS_STATE' => 'Estado/Provincia',
    'LBL_ADDRESS_STREET' => 'Calle',

    'LBL_DATE_MODIFIED' => 'Fecha de modificaci??n',
    'LBL_DATE_ENTERED' => 'Fecha de creaci??n',
    'LBL_DELETED' => 'Eliminado',

    'LBL_BUTTON_SELECT' => 'Seleccionar',
    'LBL_BUTTON_CLEAR' => 'Limpiar',

    'LBL_CONTACTS_SYNC' => 'Sincronizaci??n de contacto',
    'LBL_OAUTH_TOKENS' => 'Claves OAuth',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Usuarios del projecto a partir del nombre del proyecto',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Contactos del proyecto a partir del nombre de contactos',
    'LBL_ROLES' => 'Roles',
    'LBL_SECURITYGROUPS' => 'Grupos de Seguridad',
    'LBL_PROSPECT_LIST' => 'Lista de p??blico objetivo',
);
