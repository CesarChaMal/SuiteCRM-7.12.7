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
    'LBL_SEND_DATE_TIME' => 'Fecha de env??o',
    'LBL_IN_QUEUE' => 'en proceso',
    'LBL_IN_QUEUE_DATE' => 'Fecha de puesta en cola',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Utilice ??nicamente valores enteros para especificar el n??mero de e-Mails enviados por lote',

    'LBL_ATTACHMENT_AUDIT' => ' ha sido enviado.  No se ha duplicado en local para minimizar la utilizaci??n de espacio en el disco duro',
    'LBL_CONFIGURE_SETTINGS' => 'Configurar',
    'LBL_CUSTOM_LOCATION' => 'Definido por el usuario',
    'LBL_DEFAULT_LOCATION' => 'Predeterminado',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'Eliminar archivos adjuntos y notas relacionadas junto a los e-Mails borrados',
    'LBL_EMAIL_WARNING_NOTIFICATIONS' => 'Correo electr??nico para notificaci??n de alertas',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'Configuraciones de Autorizaci??n',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'Enviar mensaje de autorizaci??n autom??ticamente',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'Plantilla de e-mail de confirmaci??n de autorizaci??n',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'Configuraci??n de e-Mail Saliente',
    'LBL_EMAILS_PER_RUN' => 'N??mero de e-Mmails enviados por lote:',
    'LBL_ID' => 'Id',
    'LBL_LIST_CAMPAIGN' => 'Campa??a',
    'LBL_LIST_FORM_TITLE' => 'Cola',
    'LBL_LIST_FROM_NAME' => 'Nombre del remitente',
    'LBL_LIST_IN_QUEUE' => 'en proceso',
    'LBL_LIST_MESSAGE_NAME' => 'Mensaje de marketing',
    'LBL_LIST_RECIPIENT_EMAIL' => 'e-Mail del destinatario',
    'LBL_LIST_RECIPIENT_NAME' => 'Nombre del destinatario',
    'LBL_LIST_SEND_ATTEMPTS' => 'Intentos de env??o',
    'LBL_LIST_SEND_DATE_TIME' => 'Enviar el',
    'LBL_LIST_USER_NAME' => 'Nombre de usuario',
    'LBL_LOCATION_ONLY' => 'Ubicaci??n',
    'LBL_LOCATION_TRACK' => 'Ubicaci??n de los archivos de seguimiento de campa??a (como campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY' => 'Guardar copias de los mensajes de la campa??a:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => '??Desea guardar copias completas de <bold>CADA</bold> mensaje de e-Mail enviado durante todas las campa??as?  <bold>Se recomienda el valor predeterminado de no hacerlo</bold>.  Si elige no, s??lo se guardar?? la plantilla enviada y las variables para recrear el mensaje individual',
    'LBL_MAIL_SENDTYPE' => 'Agente de transferencia de e-Mail (MTA):',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Usar autenticaci??n SMTP:',
    'LBL_MAIL_SMTPPASS' => 'Contrase??a:',
    'LBL_MAIL_SMTPPORT' => 'Puerto SMTP:',
    'LBL_MAIL_SMTPSERVER' => 'Servidor SMTP:',
    'LBL_MAIL_SMTPUSER' => 'Usuario:',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Elija su proveedor de e-Mail',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Contrase??a de Yahoo! Mail',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID de Yahoo! Mail',
    'LBL_GMAIL_SMTPPASS' => 'Contrase??a de Gmail',
    'LBL_GMAIL_SMTPUSER' => 'Usuario de Gmail',
    'LBL_EXCHANGE_SMTPPASS' => 'Contrase??a de Exchange',
    'LBL_EXCHANGE_SMTPUSER' => 'Nombre de usuario de Exchange',
    'LBL_EXCHANGE_SMTPPORT' => 'Puerto del servidor Exchange',
    'LBL_EXCHANGE_SMTPSERVER' => 'Servidor Exchange',
    'LBL_EMAIL_LINK_TYPE' => 'Cliente de mensajer??a a utilizar',
    'LBL_MARKETING_ID' => 'Id de marketing',
    'LBL_MODULE_ID' => 'e-Mail',
    'LBL_MODULE_NAME' => 'Configuraci??n de e-Mail',
    'LBL_MODULE_TITLE' => 'Administraci??n de cola de e-Mail saliente',
    'LBL_NOTIFICATION_ON_DESC' => 'Cuando est?? habilitado, se enviar??n e-Mails a los usuarios cuando se les asignen registros',
    'LBL_NOTIFY_FROMADDRESS' => 'Direcci??n remitente:',
    'LBL_NOTIFY_FROMNAME' => 'Nombre del remitente:',
    'LBL_NOTIFY_ON' => 'Notificaciones de asignaci??n',
    'LBL_NOTIFY_TITLE' => 'Opciones de e-Mail',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'Opciones de e-Mail saliente',
    'LBL_RELATED_ID' => 'Id relacionado',
    'LBL_RELATED_TYPE' => 'Tipo relacionado',
    'LBL_SEARCH_FORM_TITLE' => 'B??squeda en cola',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Valor en config.php para site_url',
    'TXT_REMOVE_ME_ALT' => 'Para borrar su suscripci??n a esta lista de e-Mail vaya a',
    'TXT_REMOVE_ME_CLICK' => 'haga click aqu??',
    'TXT_REMOVE_ME' => 'Para borrar su suscripci??n a esta lista de e-Mail',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'Enviar notificaci??n desde la direcci??n de correo electr??nico del usuario que asigna',

    'LBL_SECURITY_TITLE' => 'Configuraci??n de seguridad de e-Mail',
    'LBL_SECURITY_DESC' => 'Marque aquello que NO deber??a ser permitido en el e-Mail entrante o mostradas en el m??dulo de e-Mails',
    'LBL_SECURITY_APPLET' => 'Etiqueta Applet',
    'LBL_SECURITY_BASE' => 'Etiqueta Base',
    'LBL_SECURITY_EMBED' => 'Etiqueta Embed',
    'LBL_SECURITY_FORM' => 'Etiqueta Form',
    'LBL_SECURITY_FRAME' => 'Etiqueta Frame',
    'LBL_SECURITY_FRAMESET' => 'Etiqueta Drameset',
    'LBL_SECURITY_IFRAME' => 'Etiqueta iFrame',
    'LBL_SECURITY_IMPORT' => 'Etiqueta Import',
    'LBL_SECURITY_LAYER' => 'Etiqueta Layer',
    'LBL_SECURITY_LINK' => 'Etiqueta Link',
    'LBL_SECURITY_OBJECT' => 'Etiqueta Object',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'Seleccionar la configuraci??n m??nima de seguridad predeterminada en Outlook (errores en la visualizaci??n del contenido)',
    'LBL_SECURITY_STYLE' => 'Etiqueta Style',
    'LBL_SECURITY_TOGGLE_ALL' => 'Inverser toutes les options',
    'LBL_SECURITY_XMP' => 'Etiqueta Xmp',
    'LBL_YES' => 'S??',
    'LBL_NO' => 'No',
    'LBL_PREPEND_TEST' => '[Prueba]:',
    'LBL_SEND_ATTEMPTS' => 'Intentos de env??o',
    'LBL_OUTGOING_SECTION_HELP' => 'Configurar el servidor de e-Mail saliente predeterminado para enviar notificaciones de e-Mail, incluyendo alertas del flujo de trabajo',
    'LBL_ALLOW_DEFAULT_SELECTION' => "Los usuarios pueden enviar como identidad, esta cuenta:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Cuando esta opci??n est?? seleccionada, todos los usuarios podr??n enviar e-Mails utilizando la misma<br> cuenta de e-Mail saliente para enviar notificaciones del sistema y alertas.  Si la opci??n no est?? seleccionada,<br> los usuarios podr??n utilizar el servidor de e-Mail saliente una vez proporcionen la informaci??n sobre su propia cuenta',
    'LBL_FROM_ADDRESS_HELP' => 'Cuando est?? habilitada, el nombre de usuario de asignaci??n y el e-Mail ser??n inclu??dos en el campo "De" del e-Mail. Esta caracter??stica no funcionar?? con servidores SMTP que no permitan enviar de una cuenta diferente de e-Mail que la de la cuenta de dicho servidor',
    'LBL_HELP' => 'Ayuda' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'Ver cuentas de correo electr??nico saliente',
    'LBL_ALLOW_SEND_AS_USER' => 'Los usuarios pueden enviar como ellos mismos:',
    'LBL_ALLOW_SEND_AS_USER_DESC' => 'Cuando est?? habilitado, <b> todos </b> los usuarios pueden enviar correos electr??nicos utilizando el servidor de correo saliente, utilizando su propia direcci??n de correo electr??nico principal como &quot; De: &quot; direcci??n. <br> Es posible que esta funci??n no funcione con servidores SMTP que no permiten el env??o desde una cuenta de correo electr??nico diferente a la cuenta del servidor.',
);
