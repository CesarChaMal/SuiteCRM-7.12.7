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
    'LBL_MODULE_NAME' => 'P??blico Objetivo',
    'LBL_MODULE_ID' => 'P??blico Objetivo',
    'LBL_INVITEE' => 'Informa directamente',
    'LBL_MODULE_TITLE' => 'P??blico objetivo: Inicio',
    'LBL_SEARCH_FORM_TITLE' => 'B??squeda de p??blico objetivo',
    'LBL_LIST_FORM_TITLE' => 'Lista de p??blico objetivo',
    'LBL_NEW_FORM_TITLE' => 'Nuevo p??blico objetivo',
    'LBL_LIST_NAME' => 'Nombre',
    'LBL_LIST_LAST_NAME' => 'Apellido',
    'LBL_LIST_TITLE' => 'Cargo',
    'LBL_LIST_EMAIL_ADDRESS' => 'e-Mail',
    'LBL_LIST_PHONE' => 'Tel??fono',
    'LBL_LIST_FIRST_NAME' => 'Nombre',
    'LBL_ASSIGNED_TO_NAME' => 'Asignado a',
    'LBL_ASSIGNED_TO_ID' => 'Asignado a:',
    'LBL_CAMPAIGN_ID' => 'ID de campa??a',
    'LBL_EXISTING_ACCOUNT' => 'Usada una cuenta existente',
    'LBL_CREATED_ACCOUNT' => 'Nueva cuenta creada',
    'LBL_CREATED_CALL' => 'Nueva llamada creada',
    'LBL_CREATED_MEETING' => 'Nueva reuni??n creada',
    'LBL_NAME' => 'Nombre:',
    'LBL_PROSPECT_INFORMATION' => 'Informaci??n del p??blico objetivo', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'M??s informaci??n',
    'LBL_FIRST_NAME' => 'Nombre:',
    'LBL_OFFICE_PHONE' => 'Tel??fono de oficina:',
    'LBL_ANY_PHONE' => 'Tel??fono:',
    'LBL_PHONE' => 'Tel??fono:',
    'LBL_LAST_NAME' => 'Apellido:',
    'LBL_MOBILE_PHONE' => 'M??vil:',
    'LBL_HOME_PHONE' => 'Casa:',
    'LBL_OTHER_PHONE' => 'Tel??fono alternativo:',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Calle (direcci??n principal):',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Ciudad (direcci??n principal):',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Pa??s (direcci??n principal):',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Estado/Provinvia (direcci??n principal):',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'C??digo postal (direcci??n principal):',
    'LBL_ALT_ADDRESS_STREET' => 'Calle (direcci??n alternativa):',
    'LBL_ALT_ADDRESS_CITY' => 'Ciudad (direcci??n alternativa):',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Pa??s (direcci??n alternativa):',
    'LBL_ALT_ADDRESS_STATE' => 'Estado/Provincia (direcci??n alternativa):',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'C??digo postal (direcci??n alternativa):',
    'LBL_TITLE' => 'Puesto de trabajo:',
    'LBL_DEPARTMENT' => 'Departamento:',
    'LBL_BIRTHDATE' => 'Fecha de nacimiento:',
    'LBL_EMAIL_ADDRESS' => 'e-Mail:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'e-Mail alternativo:',
    'LBL_ANY_EMAIL' => 'Cualquier e-Mail:',
    'LBL_ASSISTANT' => 'Asistente:',
    'LBL_ASSISTANT_PHONE' => 'Tel??fono asistente:',
    'LBL_DO_NOT_CALL' => 'No llamar:',
    'LBL_EMAIL_OPT_OUT' => 'Rehusar e-Mail:',
    'LBL_PRIMARY_ADDRESS' => 'Direcci??n principal:',
    'LBL_ALTERNATE_ADDRESS' => 'Direcci??n alternativa:',
    'LBL_ANY_ADDRESS' => 'Cualquier direcci??n:',
    'LBL_CITY' => 'Ciudad:',
    'LBL_STATE' => 'Estado o Provincia:',
    'LBL_POSTAL_CODE' => 'C??digo postal:',
    'LBL_COUNTRY' => 'Pa??s:',
    'LBL_ADDRESS_INFORMATION' => 'Informaci??n de direcci??n',
    'LBL_DESCRIPTION' => 'Descripci??n:',
    'LBL_OPP_NAME' => 'Nombre de la oportunidad:',
    'LBL_IMPORT_VCARD' => 'Importar vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Crear un nuevo contacto autom??ticamente importando una vCard',
    'LBL_DUPLICATE' => 'Posible p??blico objetivo duplicado',
    'MSG_SHOW_DUPLICATES' => 'El registro para el prospecto que va a crear podr??a ser un duplicado de otro registro de prospecto existente. Los registros de prospectos con nombres y/o direcciones de correo similares se listan a continuaci??n.<br>Haga click en guardar para continuar con la creaci??n de este prospecto, o en cancelar para volver al m??dulo sin crear el prospecto',
    'MSG_DUPLICATE' => 'El registro para el prospecto que va a crear podr??a ser un duplicado de otro registro de prospecto existente. Los registros de prospectos con nombres y/o direcciones de correo similares se listan a continuaci??n.<br>Haga click en guardar para continuar con la creaci??n de este prospecto, o en cancelar para volver al m??dulo sin crear el prospecto',
    'LNK_IMPORT_VCARD' => 'Crear desde vCard',
    'LNK_NEW_ACCOUNT' => 'Crear cuenta',
    'LNK_NEW_OPPORTUNITY' => 'Crear oportunidad',
    'LNK_NEW_CASE' => 'Crear caso',
    'LNK_NEW_NOTE' => 'Crear nota o adjunto',
    'LNK_NEW_CALL' => 'Programar llamada',
    'LNK_NEW_EMAIL' => 'Archivar e-Mail',
    'LNK_NEW_MEETING' => 'Programar reuni??n',
    'LNK_NEW_TASK' => 'Crear tarea',
    'LNK_NEW_APPOINTMENT' => 'Crear cita',
    'LNK_IMPORT_PROSPECTS' => 'Importar p??blico objetivo',
    'NTC_DELETE_CONFIRMATION' => '??Est?? seguro que desea eliminar este registro?',
    'NTC_REMOVE_CONFIRMATION' => '??Est?? seguro que desea quitar este contacto del caso?',
    'ERR_DELETE_RECORD' => 'Debe especificar un n??mero de registro para eliminar el contacto',
    'LBL_SALUTATION' => 'Saludo',
    'LBL_CREATED_OPPORTUNITY' => 'Crear una nueva oportunidad',
    'LNK_SELECT_ACCOUNT' => "Seleccionar cuenta",
    'LNK_NEW_PROSPECT' => 'Crear p??blico objetivo',
    'LNK_PROSPECT_LIST' => 'Ver P??blicos objetivo',
    'LNK_NEW_CAMPAIGN' => 'Crear campa??a',
    'LNK_CAMPAIGN_LIST' => 'Campa??as',
    'LNK_NEW_PROSPECT_LIST' => 'Crear lista de p??blico objetivo',
    'LNK_PROSPECT_LIST_LIST' => 'Listas de p??blico objetivo',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Seleccione p??blico objetivo marcado',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Seleccione p??blico objetivo marcado',
    'LBL_INVALID_EMAIL' => 'e-Mail no v??lido:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'P??blico objetivo',
    'LBL_PROSPECT_LIST' => 'P??blico objetivo',
    'LBL_CONVERT_BUTTON_TITLE' => 'Convertir p??blico objetivo',
    'LBL_CONVERT_BUTTON_LABEL' => 'Convertir p??blico objetivo',
    'LNK_NEW_CONTACT' => 'Nuevo contacto',
    'LBL_CREATED_CONTACT' => "Se ha creado un nuevo contacto",
    'LBL_CAMPAIGNS' => 'Campa??as',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Registro de campa??as',
    'LBL_TRACKER_KEY' => 'Clave de seguimiento',
    'LBL_LEAD_ID' => 'ID de cliente potencial',
    'LBL_CONVERTED_LEAD' => 'Cliente potencial convertido',
    'LBL_ACCOUNT_NAME' => 'Nombre de la cuenta',
    'LBL_EDIT_ACCOUNT_NAME' => 'Nombre de la cuenta:',
    'LBL_CREATED_USER' => 'Creado por',
    'LBL_MODIFIED_USER' => 'Usuario modificado',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historial',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Eventos',
);
