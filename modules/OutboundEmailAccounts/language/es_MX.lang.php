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
    'LBL_ASSIGNED_TO_ID' => 'Asignado a usuario con Id',
    'LBL_ASSIGNED_TO_NAME' => 'Usuario',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Fecha de creaci??n',
    'LBL_DATE_MODIFIED' => 'Fecha de modificaci??n',
    'LBL_MODIFIED' => 'Modificado por',
    'LBL_MODIFIED_NAME' => 'Modificado por nombre',
    'LBL_CREATED' => 'Creado por',
    'LBL_DESCRIPTION' => 'Descripci??n',
    'LBL_DELETED' => 'Eliminado',
    'LBL_NAME' => 'Nombre',
    'LBL_CREATED_USER' => 'Creado por usuario',
    'LBL_MODIFIED_USER' => 'Modificado por usuario',
    'LBL_LIST_NAME' => 'Nombre',
    'LBL_EDIT_BUTTON' => 'Editar',
    'LBL_REMOVE' => 'Quitar',
    'LBL_LIST_FORM_TITLE' => 'Lista de cuentas de correo electr??nico saliente',
    'LBL_MODULE_NAME' => 'Cuentas de correo electr??nico saliente',
    'LBL_MODULE_TITLE' => 'Cuentas de correo electr??nico saliente',
    'LBL_HOMEPAGE_TITLE' => 'Mis cuentas de correo electr??nico saliente',
    'LNK_NEW_RECORD' => 'Crear cuentas de correo electr??nico saliente',
    'LNK_LIST' => 'Ver cuentas de correo electr??nico saliente',
    'LBL_SEARCH_FORM_TITLE' => 'Buscar cuentas de correo electr??nico saliente',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ver Historial',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Actividades',
    'LBL_NEW_FORM_TITLE' => 'Nueva cuenta de correo electr??nico saliente',
    'LBL_USERNAME' => 'Nombre de usuario',
    'LBL_PASSWORD' => 'Contrase??a',
    'LBL_SMTP_SERVERNAME' => 'Servidor SMTP',
    'LBL_SMTP_AUTH' => 'Autentificar SMTP',
    'LBL_SMTP_PORT' => 'Puerto SMTP',
    'LBL_SMTP_PROTOCOL' => 'Protocolo SMTP',
    'LBL_EDITVIEW_PANEL1' => 'Configuraci??n de cuenta',
    'LBL_CHANGE_PASSWORD' => 'Cambiar contrase??a',
    'LBL_SEND_TEST_EMAIL' => 'Enviar e-Mail de prueba',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'El administrador a??n no ha configurado la cuenta de e-Mail saliente predeterminada.  No es posible enviar el e-Mail de prueba',
    'LBL_MAIL_SMTPAUTH_REQ' => '??Usar Autenticaci??n SMTP?',
    'LBL_MAIL_SMTPPASS' => 'Contrase??a SMTP:',
    'LBL_MAIL_SMTPPORT' => 'Puerto SMTP:',
    'LBL_MAIL_SMTPSERVER' => 'Servidor SMTP:',
    'LBL_MAIL_SMTPUSER' => 'Usuario SMTP:',
    'LBL_MAIL_SMTP_SETTINGS' => 'Especificaci??n de Servidor SMTP',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Elija su proveedor de Email:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Contrase??a de Yahoo! Mail:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID de Yahoo! Mail:',
    'LBL_GMAIL_SMTPPASS' => 'Contrase??a de Gmail:',
    'LBL_GMAIL_SMTPUSER' => 'Direcci??n de Email de Gmail:',
    'LBL_EXCHANGE_SMTPPASS' => 'Contrase??a de Exchange:',
    'LBL_EXCHANGE_SMTPUSER' => 'Nombre de usuario de Exchange:',
    'LBL_EXCHANGE_SMTPPORT' => 'Puerto de Servidor Exchange:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Servidor Exchange:',

    'LBL_TYPE' => 'Tipo',
    'LBL_MAIL_SENDTYPE' => 'Mode de env??o de mail',
    'LBL_MAIL_SMTPSSL' => 'Mail SMTP/SSL',
    'LBL_SMTP_FROM_NAME' => 'Nombre del remitente',
    'LBL_SMTP_FROM_ADDR' => 'Direcci??n del Remitente',
);
