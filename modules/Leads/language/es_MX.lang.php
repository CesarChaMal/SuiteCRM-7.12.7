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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => 'Debe especificar un numero de resgistro para eliminar el cliente potencial.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Descripci??n de la cuenta',
    'LBL_ACCOUNT_ID' => 'ID de la cuenta',
    'LBL_ACCOUNT_NAME' => 'Nombre de cuenta:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Actividades',
    'LBL_ADDRESS_INFORMATION' => 'Informaci??n de direcci??n',
    'LBL_ALT_ADDRESS_CITY' => 'Ciudad (direccion alternativa)',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Pa??s (direcci??n alternativa)',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'C??digo postal (direcci??n alternativa)',
    'LBL_ALT_ADDRESS_STATE' => 'Estado/Provincia (direcci??n alternativa)',
    'LBL_ALT_ADDRESS_STREET_2' => 'Calle 2 (direcci??n alternativa)',
    'LBL_ALT_ADDRESS_STREET_3' => 'Calle 3 (direcci??n alternativa)',
    'LBL_ALT_ADDRESS_STREET' => 'Calle (direcci??n alternativa)',
    'LBL_ALTERNATE_ADDRESS' => 'Direcci??n alternativa:',
    'LBL_ALT_ADDRESS' => 'Otra direcci??n:',
    'LBL_ANY_ADDRESS' => 'Cualquier direcci??n:',
    'LBL_ANY_EMAIL' => 'Cualquier e-Mail:',
    'LBL_ANY_PHONE' => 'Cualquier tel??fono:',
    'LBL_ASSIGNED_TO_NAME' => 'Asignado a',
    'LBL_ASSIGNED_TO_ID' => 'Usuario asignado:',
    'LBL_CITY' => 'Ciudad:',
    'LBL_CONTACT_ID' => 'ID de contacto',
    'LBL_CONTACT_INFORMATION' => 'Informaci??n del cliente potencial', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Nombre del prospecto:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Cliente potencial-oportunidad:',
    'LBL_CONTACT_ROLE' => 'Rol:',
    'LBL_CONTACT' => 'Cliente potencial:',
    'LBL_CONVERTED_ACCOUNT' => 'Cuenta convertida:',
    'LBL_CONVERTED_CONTACT' => 'Contacto convertido:',
    'LBL_CONVERTED_OPP' => 'Oportunidad convertida:',
    'LBL_CONVERTED' => 'Convertido',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Convertir cliente potencial',
    'LBL_CONVERTLEAD' => 'Convertir cliente potencial',
    'LBL_CONVERTLEAD_WARNING' => 'Advertencia: este cliente potencial podr??a ya haber sido convertido',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' en un contacto:',
    'LBL_COUNTRY' => 'Pa??s:',
    'LBL_CREATED_NEW' => 'Crear nuevo',
    'LBL_CREATED_ACCOUNT' => 'Nueva cuenta creada',
    'LBL_CREATED_CALL' => 'Creada una nueva llamada',
    'LBL_CREATED_CONTACT' => 'Creado un nuevo contacto',
    'LBL_CREATED_MEETING' => 'Creada una nueva reuni??n',
    'LBL_CREATED_OPPORTUNITY' => 'Creada una nueva oportunidad',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Clientes potenciales',
    'LBL_DEPARTMENT' => 'Departamento:',
    'LBL_DESCRIPTION' => 'Descripci??n:',
    'LBL_DO_NOT_CALL' => 'No llamar:',
    'LBL_DUPLICATE' => 'Clientes potenciales similares',
    'LBL_EMAIL_ADDRESS' => 'e-Mail:',
    'LBL_EMAIL_OPT_OUT' => 'Rehusar e-Mail:',
    'LBL_EXISTING_ACCOUNT' => 'Usada una cuenta existente',
    'LBL_EXISTING_CONTACT' => 'Usado un contacto existente',
    'LBL_EXISTING_OPPORTUNITY' => 'Usada una oportunidad existente',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Nombre:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historial',
    'LBL_HOME_PHONE' => 'Tel??fono de casa:',
    'LBL_IMPORT_VCARD' => 'Importar una vCard',
    'LBL_VCARD' => 'VCard',
    'LBL_IMPORT_VCARDTEXT' => 'Crear un interesado autom??ticamente importando una vCard',
    'LBL_INVALID_EMAIL' => 'e-Mail inv??lido:',
    'LBL_INVITEE' => 'Reportar a',
    'LBL_LAST_NAME' => 'Apellido:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Descripci??n de cliente potencial:',
    'LBL_LEAD_SOURCE' => 'Origen de clientes potenciales:',
    'LBL_LIST_ACCEPT_STATUS' => 'Aceptar estado',
    'LBL_LIST_ACCOUNT_NAME' => 'Nombre de la cuenta',
    'LBL_LIST_CONTACT_NAME' => 'Nombre del prospecto',
    'LBL_LIST_CONTACT_ROLE' => 'Rol',
    'LBL_LIST_DATE_ENTERED' => 'Fecha de creaci??n',
    'LBL_LIST_EMAIL_ADDRESS' => 'e-Mail',
    'LBL_LIST_FIRST_NAME' => 'Nombre',
    'LBL_LIST_FORM_TITLE' => 'Lista de clientes potenciales',
    'LBL_LIST_LAST_NAME' => 'Apellido',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Descripci??n de cliente potencial',
    'LBL_LIST_LEAD_SOURCE' => 'Origen de clientes potenciales',
    'LBL_LIST_MY_LEADS' => 'Mis clientes potenciales',
    'LBL_LIST_NAME' => 'Nombre',
    'LBL_LIST_PHONE' => 'Tel??fono',
    'LBL_LIST_REFERED_BY' => 'Referido por',
    'LBL_LIST_STATUS' => 'Estado',
    'LBL_LIST_TITLE' => 'Cargo',
    'LBL_MOBILE_PHONE' => 'M??vil:',
    'LBL_MODULE_NAME' => 'Clientes potenciales',
    'LBL_MODULE_TITLE' => 'Clientes potenciales: Inicio',
    'LBL_NAME' => 'Nombre:',
    'LBL_NEW_FORM_TITLE' => 'Nuevo cliente potencial',
    'LBL_OFFICE_PHONE' => 'Tel??fono de oficina:',
    'LBL_OPP_NAME' => 'Nombre de la oportunidad:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Cantidad de la oportunidad:',
    'LBL_OPPORTUNITY_ID' => 'ID  de la oportunidad',
    'LBL_OPPORTUNITY_NAME' => 'Nombre de la oportunidad:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'e-Mail alternativo:',
    'LBL_OTHER_PHONE' => 'Tel??fono alternativo:',
    'LBL_PHONE' => 'Tel??fono:',
    'LBL_PORTAL_APP' => 'Aplicaci??n del portal',
    'LBL_PORTAL_INFORMATION' => 'Informaci??n del portal',
    'LBL_PORTAL_NAME' => 'Nombre del portal:',
    'LBL_POSTAL_CODE' => 'C??digo postal:',
    'LBL_STREET' => 'Calle',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Ciudad (direcci??n principal)',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Pa??s (direcci??n principal)',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'C??digo postal (direcci??n principal)',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Estado/Provincia (direcci??n principal)',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Calle 2 (direcci??n principal)',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Calle 3 (direcci??n principal)',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Calle (direcci??n principal)',
    'LBL_PRIMARY_ADDRESS' => 'Direcci??n principal:',
    'LBL_REFERED_BY' => 'Referido por:',
    'LBL_REPORTS_TO_ID' => 'Reporta a ID',
    'LBL_REPORTS_TO' => 'Reporta a:',
    'LBL_SALUTATION' => 'Saludo',
    'LBL_MODIFIED' => 'Modificado por',
    'LBL_CREATED' => 'Creado por',
    'LBL_SEARCH_FORM_TITLE' => 'B??squeda de clientes potenciales',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Seleccionar clientes potenciales marcados',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Seleccionar clientes potenciales marcados',
    'LBL_STATE' => 'Estado o Provincia:',
    'LBL_STATUS_DESCRIPTION' => 'Descripci??n del estado:',
    'LBL_STATUS' => 'Estado:',
    'LBL_TITLE' => 'Puesto de trabajo:',
    'LNK_IMPORT_VCARD' => 'Crear cliente potencial desde vCard',
    'LNK_LEAD_LIST' => 'Ver Clientes Potenciales',
    'LNK_NEW_ACCOUNT' => 'Crear cuenta',
    'LNK_NEW_APPOINTMENT' => 'Nueva cita',
    'LNK_NEW_CONTACT' => 'Nuevo contacto',
    'LNK_NEW_LEAD' => 'Nuevo cliente',
    'LNK_NEW_NOTE' => 'Nueva nota',
    'LNK_NEW_TASK' => 'Nueva tarea',
    'LNK_NEW_CASE' => 'Nuevo caso',
    'LNK_NEW_CALL' => 'Programar llamada',
    'LNK_NEW_MEETING' => 'Programar reuni??n',
    'LNK_NEW_OPPORTUNITY' => 'Nueva oportunidad',
    'LNK_SELECT_ACCOUNTS' => ' <b>o</b> Seleccione la cuenta',
    'LNK_SELECT_CONTACTS' => ' <b>O</b> Selecciona Contacto',
    'NTC_DELETE_CONFIRMATION' => '??Est?? seguro que desea eliminar este registro?',
    'NTC_REMOVE_CONFIRMATION' => '??Est?? seguro que desea quitar este cliente potencial del caso?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campa??as',
    'LBL_CAMPAIGN' => 'Campa??a:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuario asignado',
    'LBL_PROSPECT_LIST' => 'P??blico objetivo',
    'LBL_CAMPAIGN_LEAD' => 'Campa??as',
    'LBL_BIRTHDATE' => 'Fecha de nacimiento:',
    'LBL_ASSISTANT_PHONE' => 'Tel??fono asistente',
    'LBL_ASSISTANT' => 'Asistente',
    'LBL_CREATED_USER' => 'Usuario creado',
    'LBL_MODIFIED_USER' => 'Usuario modificado',
    'LBL_CAMPAIGNS' => 'Campa??as',
    'LBL_CONVERT_MODULE_NAME' => 'M??dulo',
    'LBL_CONVERT_REQUIRED' => 'Obligatorio',
    'LBL_CONVERT_SELECT' => 'Permitir selecci??n',
    'LBL_CONVERT_COPY' => 'Copiar datos',
    'LBL_CONVERT_EDIT' => 'Editar',
    'LBL_CONVERT_DELETE' => 'Eliminar',
    'LBL_CONVERT_ADD_MODULE' => 'Agregar m??dulo',
    'LBL_CREATE' => 'Crear',
    'LBL_SELECT' => ' <b>O</b> Seleccionar',
    'LBL_WEBSITE' => 'Sitio Web',
    'LNK_IMPORT_LEADS' => 'Importar clientes potenciales',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'El m??dulo en el que se crear?? un nuevo registro',
    'LBL_REQUIRED_TIP' => 'Los m??dulos obligatorios deben ser creados o seleccionados antes de que se realice la conversi??n',
    'LBL_COPY_TIP' => 'Si se elige, los campos del cliente potencial ser??n copiados a los campos con el mismo nombre en los nuevos registros creados',
    'LBL_SELECTION_TIP' => 'Los m??dulos con un campo relacionado en contactos pueden ser seleccionados antes de que sean creados durante el proceso de conversi??n de cliente potencial',
    'LBL_EDIT_TIP' => 'Modifique el dise??o de la conversi??n para este m??dulo',
    'LBL_DELETE_TIP' => 'Quitar este m??dulo del dise??o de conversi??n',

    'LBL_ACTIVITIES_MOVE' => 'Mover actividad a',
    'LBL_ACTIVITIES_COPY' => 'Copiar actividad a',
    'LBL_ACTIVITIES_MOVE_HELP' => "Seleccione el(los) registro(s) de actividad que quiera mover de los clientes potenciales. Tareas, llamadas, reuniones, notas y correos electr??nicos que ser??n trasladados al registro(s) seleccionado(s).",
    'LBL_ACTIVITIES_COPY_HELP' => "Selecciona el o los resgistros para cada copia creada de las actividades de los Clientes Potenciales. Las nuevas Tareas, Llamadas, Reuniones y Notas ser??n creadas para cada registro seleccionado. Los Emails se relacionar??n con los registros seleccionados.",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'ID de campa??a',
    'LBL_EDITLAYOUT' => 'Editar dise??o' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Introducir fecha' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Cargando' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Editar' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Eventos',
);
