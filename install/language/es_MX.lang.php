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
    'LBL_BASIC' => 'B??sica',
    'LBL_BASIC_SEARCH' => 'Filtro r??pido',
    'LBL_ADVANCED_SEARCH' => 'Filtro avanzado',
    'LBL_BASIC_TYPE' => 'Tipo B??sico',
    'LBL_ADVANCED_TYPE' => 'Tipo Avanzado',
    'LBL_SYSOPTS_2' => '??Qu?? tipo de base de datos ser?? utilizada para la instancia de SuiteCRM que est?? a punto de instalar?',
    'LBL_SYSOPTS_DB' => 'Especifique Tipo de Base de Datos',
    'LBL_SYSOPTS_DB_TITLE' => 'Tipo de Base de Datos',
    'LBL_SYSOPTS_ERRS_TITLE' => 'Por favor, corrija los siguientes errores antes de proceder:',
    'ERR_DB_VERSION_FAILURE' => 'No se puede verificar la versi??n de la base de datos.',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'Provea el nombre de usuario para el usuario administrador de SuiteCRM. ',
    'ERR_ADMIN_PASS_BLANK' => 'Provea una contrase??a para el usuario administrador de SuiteCRM. ',

    'ERR_CHECKSYS' => 'Se detectaron errores durante la verificaci??n de compatibilidad.  Para que su instalaci??n de SuiteCRM funcione correctamente, por favor realice los pasos necesarios para corregir los inconvenientes listados m??s abajo, y vuelva a presionar el bot??n volver a verificar, o vuelva a intentar realizar la instalaci??n nuevamente.',
    'ERR_CHECKSYS_CALL_TIME' => 'Permitir la referencia del tiempo de la llamada est?? activado. (esto deber??a estar desactivado en php.ini)',
    'ERR_CHECKSYS_CURL' => 'No encontrado: El Planificador de SuiteCRM tendr?? funcionalidad limitada.',
    'ERR_CHECKSYS_IMAP' => 'No encontrado: Correo Entrante y Campa??as (Correo Electr??nico) requieren las bibliotecas de IMAP. Ninguno ser?? funcional',
    'ERR_CHECKSYS_MEM_LIMIT_1' => '(Establ??zcalo a ',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M o m??s en su archivo php.ini)',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'Advertencia: No se puede escribir',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Su versi??n de PHP no es soportada por SuiteCRM. Deber?? instalar una versi??n que sea compatible con la aplicaci??n SuiteCRM. Por favor consulte la Matriz de Compatibilidad en las Notas de la Versi??n para conocer las versiones de PHP soportadas. Su versi??n es ',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'Su versi??n de IIS no es soportada por SuiteCRM. Deber?? instalar una versi??n que sea compatible con la aplicaci??n SuiteCRM. Por favor consulte la Matriz de Compatibilidad en las Notas de la Versi??n para conocer las versiones de IIS soportadas. Su versi??n es ',
    'ERR_CHECKSYS_FASTCGI' => 'Detectamos que no est?? utilizando un FastCGI handler mapping para PHP. Deber?? instalar/configurar una versi??n que sea compatible con SuiteCRM. Por favor consulte la Matriz de Compatibilidad en las Notas de la Versi??n para conocer las versiones soportadas. Vea <a href="http://www.iis.net/php/" target="_blank">http://www.iis.net/php/</a> para m??s detalles ',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'Para una mejor experiencia use IIS/FastCGI sapi, asigne fastcgi.logging en 0 en su archivo php.ini.',
    'LBL_DB_UNAVAILABLE' => 'Base de datos no disponible',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'No se encontr?? Soporte de Base de Datos. Por favor aseg??rese de tener los drivers necesarios para alguna de las siguientes Base de Datos soportadas: MySQL o MS SqlServer. Puede que sea necesario descomentar la extensi??n correspondiente en el archivo php.ini, o recompilar con el binario correspondiente, dependiendo de su versi??n de PHP. Por favor consulte el manual de PHP para m??s informaci??n sobre c??mo habilitar el Soporte de Base de Datos.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'No se encontraron las funciones de las librer??as de XML Parsing necesarias para ejecutar SuiteCRM. Puede que sea necesario descomentar la extensi??n correspondiente en el archivo php.ini, o recompilar con el binario correspondiente, dependiendo de su versi??n de PHP. Por favor consulte el manual de PHP para m??s informaci??n.',
    'ERR_CHECKSYS_MBSTRING' => 'No se encontraron las funciones asociadas con la extensi??n Multibyte Strings (mbstring) necesaria para ejecutar SuiteCRM. <br/><br/>Generalmente el m??dulo mbstring no est?? habilitado por defecto en PHP y debe ser activado con --enable-mbstring al momento de compilar PHP. Por favor consulte el manual de PHP para m??s informaci??n sobre c??mo habilitar mbstring.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'El archivo de configuraci??n existe pero no se puede escribir. Por favor realice los pasos necesarios para dar permisos de escritura. <br/>Dependiendo de su Sistema Operativo puede llegar a neccesitar cambiar los permisos ejecutando chmod 766, o con click derecho sobre el archivo para acceder al men?? propiedades y desactivar la opci??n "s??lo lectura".',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'El archivo config override existe pero no se puede escribir. Por favor realice los pasos necesarios para dar permisos de escritura. <br/>Dependiendo de su Sistema Operativo puede llegar a neccesitar cambiar los permisos ejecutando chmod 766, o con click derecho sobre el archivo para acceder al men?? propiedades y desactivar la opci??n "s??lo lectura".',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'El directorio Custom existe pero no se puede escribir. Por favor realice los pasos necesarios para dar permisos de escritura. <br/>Dependiendo de su Sistema Operativo puede llegar a neccesitar cambiar los permisos ejecutando chmod 766, o con click derecho sobre el archivo para acceder al men?? propiedades y desactivar la opci??n "s??lo lectura".',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "Los archivos o directorios listados m??s abajo no se pueden escribir. Dependiendo de su Sistema Operativo, corregir esto puede requerir que cambie los permisos de los archivos o directorio padre (chmod 755), o click derecho en la carpeta padre, desactivar la opci??n \"s??lo lectura\" y aplicarla a todas las subcarpetas. ",
    'ERR_CHECKSYS_JSON_NOT_AVAILABLE' => "Las funciones asociadas con las librer??as del Parser JSON que necesita SuiteCRM no se han encontrado. Posiblemente debas descomentar la extensi??n en el archivo php.ini,o recompilar con el binario correcto, dependiendo de tu versi??n de PHP. Busca en el manual de PHP para m??s informaci??n.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'Anulaci??n de la configuraci??n',
    'ERR_CHECKSYS_SAFE_MODE' => 'Safe Mode est?? activado (puede ser conveniente deshabilitarlo en php.ini)',
    'ERR_CHECKSYS_ZLIB' => 'ZLib no se encontr??: SuiteCRM alcanza grandes beneficios de performance con la compresi??n zlib.',
    'ERR_CHECKSYS_ZIP' => 'ZIP no se encontr??: SuiteCRM necesita soporte ZIP para procesar archivos comprimidos.',
    'ERR_CHECKSYS_PCRE' => 'PCRE no se encontr??: SuiteCRM necesita la librer??a PCRE para procesar expresiones regulares en el estilo Perl.',
    'ERR_CHECKSYS_PCRE_VER' => 'PCRE versi??n de librer??a: SuiteCRM necesita la versi??n 7.0 o superior de la librer??a PCRE para procesar expresiones regulares en el estilo Perl.',
    'ERR_DB_ADMIN' => 'El nombre de usuario o contrase??a del administrador de base de datos es inv??lido, y no se puede establecer la conexi??n con la base de datos. Por favor ingrese un nombre de usuario y contrase??a correctos. (Error: ',
    'ERR_DB_ADMIN_MSSQL' => 'El nombre de usuario o contrase??a del administrador de base de datos es inv??lido, y no se puede establecer la conexi??n con la base de datos. Por favor ingrese un nombre de usuario y contrase??a correctos.',
    'ERR_DB_EXISTS_NOT' => 'La base de datos especificada no existe.',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'La base de datos ya existe con informaci??n de configuraci??n. Para ejecutar una instalaci??n con la base de datos seleccionada vuelva a ejecutar la instalaci??n y seleccione "Eliminar las tablas existentes y volver a crearlas?". Para actualizar utilice el Asistente de Actualizaciones en la Consola de Administraci??n. Por favor lea la documentaci??n de actualizaci??n <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new">aqu??</a>.',
    'ERR_DB_EXISTS' => 'Ya existe una Base de Datos con el nombre provisto -- no se puede crear otra con el mismo nombre.',
    'ERR_DB_EXISTS_PROCEED' => 'Ya existe una Base de Datos con el nombre provisto.  Usted puede<br>1.  presionar el bot??n Atr??s y seleccionar un nuevo nombre de base de datos <br>2.  hacer click en Siguiente y continuar, aunque todas las tablas existentes en esta base de datos ser??n descartadas.  <strong>Esto significa que sus tablas e informaci??n ser??n eliminadas </strong>',
    'ERR_DB_HOSTNAME' => 'El nombre de equipo no puede estar vac??o',
    'ERR_DB_INVALID' => 'El tipo de base de datos seleccionado no es v??lido',
    'ERR_DB_LOGIN_FAILURE_SHORT' => 'Database Connection Error: The provided database hostname, port, username, and/or password is invalid.',
    'ERR_DB_LOGIN_FAILURE' => 'El host, nombre de usuario y/o contrase??a provistos no es v??lido, y no se puede establecer una conexi??n a la base de datos. Por favor ingrese un host, nombre de usuario y contrase??a v??lidos.',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'El host, nombre de usuario y/o contrase??a provistos no es v??lido, y no se puede establecer una conexi??n a la base de datos. Por favor ingrese un host, nombre de usuario y contrase??a v??lidos.',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'El host, nombre de usuario y/o contrase??a provistos no es v??lido, y no se puede establecer una conexi??n a la base de datos. Por favor ingrese un host, nombre de usuario y contrase??a v??lidos.',
    'ERR_DB_MYSQL_VERSION' => 'Su versi??n de MySQL (%s) no es soportada por SuiteCRM.  Deber?? instalar una versi??n que sea compatible con SuiteCRM. Por favor consulte la Matriz de Compatibilidad en las Notas de Versi??n para conocer las versiones soportadas.',
    'ERR_DB_NAME' => 'El nombre de base de datos no puede estar vac??o.',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "El nombre de base de datos no puede contener '\\', '/', o '.'",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "El nombre de base de datos no puede comenzar con un n??mero, '#', o '@' y no puede contener espacios, '\"', \"'\", '*', '/', '\\', '?', ':', '<', '>', '&', '!', o '-'",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "El nombre de base de datos s??lo puede estar formado por caracteres alfanum??ricos y los s??mbolos '#', '_' o '$'",
    'ERR_DB_PASSWORD' => 'Las contrase??as provistas para el administrador de base de datos no coinciden.  Por favor vuelva a ingresar las mismas contrase??as en los campos.',
    'ERR_DB_PRIV_USER' => 'Provea un nombre de usuario administrador de base de datos.  El usuario es requerido para la conexi??n inicial a la base de datos.',
    'ERR_DB_USER_EXISTS' => 'El nombre de usuario para la base de datos ya existe -- no se puede crear otro con el mismo nombre. Por favor ingrese un nuevo nombre de usuario.',
    'ERR_DB_USER' => 'Ingrese un nombre de usuario para el administrador de base de datos.',
    'ERR_DBCONF_VALIDATION' => 'Por favor corrija los siguientes errores antes de continuar:',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'Las contrase??as provistas para el administrador de base de datos no coinciden.  Por favor vuelva a ingresar las mismas contrase??as en los campos.',
    'ERR_ERROR_GENERAL' => 'Se encontraron los siguientes errores:',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'El archivo no puede ser eliminado: ',
    'ERR_LANG_MISSING_FILE' => 'El archivo no ha sido encontrado: ',
    'ERR_LANG_NO_LANG_FILE' => 'No se encontr?? archivo de traducci??n en include/language dentro de: ',
    'ERR_LANG_UPLOAD_1' => 'Hubo un problema con su upload.  Por favor vuelva a intentarlo.',
    'ERR_LANG_UPLOAD_2' => 'Los paquetes de idioma deben ser archivos ZIP.',
    'ERR_LANG_UPLOAD_3' => 'PHP no pudo mover el archivo temporal a la carpeta upgrade.',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'El directorio de trazas indicado no es un directorio v??lido',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'El directorio de trazas indicado no es un directorio escribible',
    'ERR_NO_DIRECT_SCRIPT' => 'No se ha podido procesar el script directamente',
    'ERR_NO_SINGLE_QUOTE' => 'No puede utilizarse las comillas simples para',
    'ERR_PASSWORD_MISMATCH' => 'Las contrase??as provistas para el usuario admin de SuiteCRM no coinciden.  Por favor vuelva a ingresar las mismas contrase??as en los campos.',
    'ERR_PERFORM_CONFIG_PHP_1' => 'No se puede escribir el archivo <span class=stop>config.php</span>.',
    'ERR_PERFORM_CONFIG_PHP_2' => 'Puedecontinuar con esta instalaci??n creando manualmente el archivo config.php y pegando la siguiente informaci??n de configuraci??n dentro del archivo.  De todos modos, usted <strong>deber??a </strong>crear el archivo config.php antes de continuar con el siguiente paso.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'Se acord?? de crear el archivo config.php?',
    'ERR_PERFORM_CONFIG_PHP_4' => 'Advertencia: No se pudo escribir el archivo config.php.  Aseg??rese de que existe.',
    'ERR_PERFORM_HTACCESS_1' => 'No ha podido escribirse en el archivo ',
    'ERR_PERFORM_HTACCESS_2' => ' archivo.',
    'ERR_PERFORM_HTACCESS_3' => 'Si desea proteger su archivo de log de ser accedido via navegador, cree un archivo .htaccess en su carpeta log con la l??nea:',
    'ERR_PERFORM_NO_TCPIP' => '<b>No hemos podido detectar una conexi??n a Internet.</b> Cuando tenga una conexi??n, por favor visite <a href="http://www.suitecrm.com/">http://www.suitecrm.com/</a> para registrarse con SuiteCRM. Si nos cuenta un poco c??mo su compa????a planea utilizar SuiteCRM podremos asegurarnos de entregarle la aplicaci??n correcta para las necesidades de su negocio.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'El directorio de Sesi??n provisto no es un directorio v??lido.',
    'ERR_SESSION_DIRECTORY' => 'El directorio de Sesi??n provisto no tiene permisos de escritura.',
    'ERR_SESSION_PATH' => 'Se requiere una ruta de Sesi??n, si es que desea especificar una.',
    'ERR_SI_NO_CONFIG' => 'No incluy?? el archivo config_si.php en el directorio ra??z, o no defini?? la variable $sugar_config_si en config.php',
    'ERR_SITE_GUID' => 'Se requiere un ID de Aplicaci??n si es que desea especificar uno.',
    'ERROR_SPRITE_SUPPORT' => "No hemos podido encontrar la librer??a GD, como resultado no podr?? utilizar la funcionalidad CSS Sprite.",
    'ERR_UPLOAD_MAX_FILESIZE' => 'Advertencia: Debe cambiar su configuraci??n de PHP para permitir la subida de archivos de al menos 6MB.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'Tama??o de Subida de Archivos',
    'ERR_URL_BLANK' => 'Provea la URL base para su instancia de SuiteCRM.',
    'ERR_UW_NO_UPDATE_RECORD' => 'No se pudo encontrar el registro de instalaci??n de ',
    'ERROR_MANIFEST_TYPE' => 'El archivo Manifest debe especificar el tipo de paquete.',
    'ERROR_PACKAGE_TYPE' => 'El archivo Manifest especifica un tipo de paquete no reconocido',
    'ERROR_VERSION_INCOMPATIBLE' => 'El archivo subido no es compatible con esta versi??n de SuiteCRM: ',

    'LBL_BACK' => 'Atr??s',
    'LBL_CANCEL' => 'Cancelar',
    'LBL_ACCEPT' => 'Acepto',
    'LBL_CHECKSYS_CACHE' => 'Sub-Directories de Cache Editables',
    'LBL_DROP_DB_CONFIRM' => 'El nombre de Base de Datos provisto ya existe. <br>Usted puede<br>1.  presionar el bot??n Atr??s y seleccionar un nuevo nombre de base de datos <br>2.  hacer click en Siguiente y continuar, aunque todas las tablas existentes en esta base de datos ser??n descartadas.  <strong>Esto significa que sus tablas e informaci??n ser??n eliminadas </strong>',
    'LBL_CHECKSYS_COMPONENT' => 'Componente',
    'LBL_CHECKSYS_CONFIG' => 'Archivo de Configuraci??n editable (config.php)',
    'LBL_CHECKSYS_CURL' => 'M??dulo cURL',
    'LBL_CHECKSYS_CUSTOM' => 'Directorio Custom editable',
    'LBL_CHECKSYS_DATA' => 'Subdirectorios de Data editables',
    'LBL_CHECKSYS_IMAP' => 'M??dulo IMAP',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'M??dulo MB Strings',
    'LBL_CHECKSYS_MEM_OK' => 'Correcto (Sin L??mite)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'Correcto (Sin L??mite)',
    'LBL_CHECKSYS_MEM' => 'L??mite de Memoria PHP',
    'LBL_CHECKSYS_MODULE' => 'Subdirectorios y Archivos de m??dulos editables',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'No disponible',
    'LBL_CHECKSYS_OK' => 'Aceptar',
    'LBL_CHECKSYS_PHP_INI' => 'Ubicaci??n de su archivo de configuraci??n PHP (php.ini):',
    'LBL_CHECKSYS_PHP_OK' => 'Correcto (ver ',
    'LBL_CHECKSYS_PHPVER' => 'Versi??n de PHP',
    'LBL_CHECKSYS_IISVER' => 'Versi??n de IIS',
    'LBL_CHECKSYS_JSON' => 'Analizador JSON',
    'LBL_CHECKSYS_RECHECK' => 'Volver a Verificar',
    'LBL_CHECKSYS_STATUS' => 'Estado',
    'LBL_CHECKSYS_TITLE' => 'Aceptaci??n de Verificaci??n del Sistema',
    'LBL_CHECKSYS_XML' => 'An??lisis XML',
    'LBL_CHECKSYS_ZLIB' => 'M??dulo de Compresi??n ZLIB',
    'LBL_CHECKSYS_ZIP' => 'M??dulo de manejo de ZIP',
    'LBL_CHECKSYS_PCRE' => 'Librer??a PCRE',
    'LBL_CHECKSYS_FIX_FILES' => 'Por favor corrija los siguientes archivos o directorios antes de continuar:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'Por favor corrija los siguientes directorios de m??dulos y archivos dentro de ellos antes de continuar:',
    'LBL_CHECKSYS_UPLOAD' => 'Directorio Upload Editable',
    'LBL_CLOSE' => 'Cerrar',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => 'creada',
    'LBL_CONFIRM_DB_TYPE' => 'Tipo de Base de datos',
    'LBL_CONFIRM_NOT' => 'no',
    'LBL_CONFIRM_TITLE' => 'Confirmar Configuraci??n',
    'LBL_CONFIRM_WILL' => 'ser??',
    'LBL_DBCONF_DB_DROP' => 'Eliminar Tablas',
    'LBL_DBCONF_DB_NAME' => 'Nombre de Base de datos',
    'LBL_DBCONF_DB_PORT' => 'Database Port',
    'LBL_DBCONF_DB_PASSWORD' => 'Contrase??a del Usuario de Base de Datos',
    'LBL_DBCONF_DB_PASSWORD2' => 'Vuelva a Ingresar Contrase??a del Usuario de Base de Datos',
    'LBL_DBCONF_DB_USER' => 'Nombre de Usuario de Base de Datos',
    'LBL_DBCONF_SUITE_DB_USER' => 'Nombre de Usuario de Base de Datos',
    'LBL_DBCONF_DB_ADMIN_USER' => 'Nombre de Usuario del Administrador de Base de Datos',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'Contrase??a del Administrador de Base de Datos',
    'LBL_DBCONF_COLLATION' => 'Ordenaci??n',
    'LBL_DBCONF_CHARSET' => 'Juego de caracteres',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => 'Configuraci??n avanzada de la Base de Datos',
    'LBL_DBCONF_DEMO_DATA' => 'Llenar la Base de Datos con Informaci??n de Prueba?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'Seleccionar Informaci??n de Prueba',
    'LBL_DBCONF_HOST_NAME' => 'Nombre del Host',
    'LBL_DBCONF_HOST_INSTANCE' => 'Instancia del Host',
    'LBL_DBCONFIG_SECURITY' => 'Por razones de seguridad, se puede especificar un usuario exclusivo para conectar a la base de datos de SuiteCRM. Este usuario debe ener permisos para escribir, modificar y recuperar informaci??n de la base de datos de SuiteCRM que ser?? creada para esta instancia. Este usuario puede ser el administrador de base de datos que se especific?? m??s arriba, usted puede proveer uno nuevo o uno existente.',
    'LBL_DBCONFIG_PROVIDE_DD' => 'Proveer usuario existente',
    'LBL_DBCONFIG_CREATE_DD' => 'Definir un usuario que se crear??',
    'LBL_DBCONFIG_SAME_DD' => 'El mismo que el Administrador',
    'LBL_DBCONF_TITLE' => 'Configuraci??n de la Base de Datos',
    'LBL_DBCONF_TITLE_NAME' => 'Provea un Nombre de Base de Datos',
    'LBL_DBCONF_TITLE_USER_INFO' => 'Provea la informaci??n del usuario de la base de datos',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'Contrase??a',
    'LBL_DISABLED_DESCRIPTION_2' => 'Despu??s de realizado este cambio, podr?? hacer click en el bot??n "Comenzar" de abajo para comenzar la instalaci??n. <i>Una vez finalizada la instalaci??n, puede cambiar el valor de \'installer_locked\' a \'true\'.</i>',
    'LBL_DISABLED_DESCRIPTION' => 'La instalaci??n ya se ejecut?? una vez. Como medida de seguridad se ha deshabilitado una segunda ejecuci??n. Si est?? absolutamente seguro de que quiere volver a ejecutarla, por favor vaya a su archivo config.php y encuentre (o agregue) una variable llamada \'installer_locked\' y col??quela en \'false\'. La l??nea deber??a quedar as??:',
    'LBL_DISABLED_HELP_1' => 'Para ayuda con la instalaci??n, por favor visite ',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'foros de soporte',
    'LBL_APP_NOT_INSTALLED' => 'SuiteCRM is not installed. Entry point needs an installed SuiteCRM, please install first.',
    'LBL_DISABLED_TITLE_2' => 'La Instalaci??n de SuiteCRM ha sido Deshabilitada',
    'LBL_HELP' => 'Ayuda',
    'LBL_INSTALL' => 'Instalar',
    'LBL_INSTALL_TYPE_TITLE' => 'Opciones de Instalaci??n',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'Seleccione el Tipo de Instalaci??n',
    'LBL_INSTALL_TYPE_TYPICAL' => ' <b>Instalaci??n T??pica</b>',
    'LBL_INSTALL_TYPE_CUSTOM' => ' <b>Instalaci??n Personalizada</b>',
    'LBL_INSTALL_TYPE_MSG2' => 'Requiere informaci??n m??nima para la instalaci??n. Recomendada para usuarios nuevos.',
    'LBL_INSTALL_TYPE_MSG3' => 'Provee opciones adicionales a establecer durante la instalaci??n. La mayor parte de estas opciones tambi??n est??n disponibles despu??s de la instalaci??n en la pantalla de administraci??n. Recomendada para usuarios avanzados.',
    'LBL_LANG_1' => 'Para usar otro idioma diferente al idioma por defecto (US-English), puede subir e instalar un paquete de idioma en este momento. Tambi??n podr?? subir e instalar paquetes de idioma desde adentro de la aplicaci??n. Si quiere omitir este paso, haga click en Siguiente.',
    'LBL_LANG_BUTTON_COMMIT' => 'Instalar',
    'LBL_LANG_BUTTON_REMOVE' => 'Quitar',
    'LBL_LANG_BUTTON_UNINSTALL' => 'Desinstalar',
    'LBL_LANG_BUTTON_UPLOAD' => 'Subir',
    'LBL_LANG_NO_PACKS' => 'ninguno',
    'LBL_LANG_PACK_INSTALLED' => 'Se instalaron los siguientes paquetes de idioma: ',
    'LBL_LANG_PACK_READY' => 'Los siguientes paquetes de idioma est??n listos para ser instalados: ',
    'LBL_LANG_SUCCESS' => 'Se subi?? correctamente el paquete de idioma.',
    'LBL_LANG_TITLE' => 'Paquete de Idioma',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'Instalando SuiteCRM.  Este proceso puede tomar unos minutos.',
    'LBL_SILENT_INSTALL_SUCCESS' => 'SuiteCRM is successfully installed.',
    'LBL_SILENT_INSTALL_FAILED' => 'SuiteCRM installation failed.',
    'LBL_LANG_UPLOAD' => 'Subir un Paquete de Idioma',
    'LBL_LICENSE_ACCEPTANCE' => 'Aceptaci??n de Licencia',
    'LBL_LICENSE_CHECKING' => 'Verificando la compatibilidad del sistema.',
    'LBL_LICENSE_CHKENV_HEADER' => 'Verificando el entorno',
    'LBL_LICENSE_CHKDB_HEADER' => 'Verificando las credenciales de BD.',
    'LBL_LICENSE_CHECK_PASSED' => 'El sistema cumpli?? los requisitos.',
    'LBL_CREATE_CACHE' => 'Preparando para instalar...',
    'LBL_LICENSE_REDIRECT' => 'Redireccionando en ',
    'LBL_LICENSE_I_ACCEPT' => 'Acepto',
    'LBL_LICENSE_PRINTABLE' => ' Versi??n Imprimible ',
    'LBL_PRINT_SUMM' => 'Imprimir Resumen',
    'LBL_LICENSE_TITLE_2' => 'Licencia de SuiteCRM',
    'LBL_LICENSE' => 'LICENCIA',

    'LBL_LOCALE_NAME_FIRST' => 'Juan',
    'LBL_LOCALE_NAME_LAST' => 'Marti',
    'LBL_LOCALE_NAME_SALUTATION' => 'Sr.',

    'LBL_ML_ACTION' => 'Acci??n',
    'LBL_ML_DESCRIPTION' => 'Descripci??n',
    'LBL_ML_INSTALLED' => 'Fecha de Instalaci??n',
    'LBL_ML_NAME' => 'Nombre',
    'LBL_ML_PUBLISHED' => 'Fecha de Publicaci??n',
    'LBL_ML_TYPE' => 'Tipo',
    'LBL_ML_UNINSTALLABLE' => 'Desinstalable',
    'LBL_ML_VERSION' => 'Versi??n',
    'LBL_MSSQL' => 'SQL Server',
    'LBL_MSSQL2' => 'SQL Server (FreeTDS)',
    'LBL_MSSQL_SQLSRV' => 'SQL Server (Microsoft SQL Server Driver para PHP)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (extensi??n mysqli)',
    'LBL_NEXT' => 'Siguiente',
    'LBL_NO' => 'No',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'Estableciendo la contrase??a del admin del sitio',
    'LBL_PERFORM_CONFIG_PHP' => 'Creando el archivo de configuraci??n de SuiteCRM',
    'LBL_PERFORM_CREATE_DB_1' => '<b>Creando la base de datos</b> ',
    'LBL_PERFORM_CREATE_DB_2' => ' <b>em</b> ',
    'LBL_PERFORM_CREATE_DB_USER' => 'Creando el usuario y la contrase??a de Base de datos...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'Creando informaci??n por defecto de SuiteCRM',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'Creando tareas planificadas por defecto',
    'LBL_PERFORM_DEFAULT_USERS' => 'Creando usuarios por defecto',
    'LBL_PERFORM_DEMO_DATA' => 'Llenando las tablas de la base de datos con Informaci??n de Prueba (esto puede tomar varios minutos)',
    'LBL_PERFORM_DONE' => 'listo<br>',
    'LBL_PERFORM_FINISH' => 'Finalizar',
    'LBL_PERFORM_OUTRO_1' => 'La configuraci??n de SuiteCRM ',
    'LBL_PERFORM_OUTRO_2' => ' ha finalizado!',
    'LBL_PERFORM_OUTRO_3' => 'Tiempo total:',
    'LBL_PERFORM_OUTRO_4' => ' segundos.',
    'LBL_PERFORM_OUTRO_5' => 'Memoria utilizada (aprox): ',
    'LBL_PERFORM_OUTRO_6' => 'bytes',
    'LBL_PERFORM_SUCCESS' => '??xito!',
    'LBL_PERFORM_TABLES' => 'Creando las tablas de la aplicaci??n, tablas de auditor??a y metadatos de relaciones',
    'LBL_PERFORM_TITLE' => 'Configurar',
    'LBL_PRINT' => 'Imprimir',
    'LBL_REG_CONF_1' => 'Por favor complete el breve formulario a continuaci??n para recibir anuncios de productos, novedades de capacitaciones, ofertas especiales e invitaciones epeciales a eventos de SuiteCRM. No vendemos, alquilamos, compartimos ni distribuimos de ninguna forma la informaci??n recolectada aqu??.',
    'LBL_REG_CONF_3' => 'Gracias por registrarse. Haga click en el bot??n Finalizar para ingresar a SuiteCRM. Necesitar?? ingresar por primera vez utilizando el nombre de usuario "admin" y la contrase??a que ingres?? en el paso 2.',
    'LBL_REG_TITLE' => 'Registraci??n',

    'LBL_REQUIRED' => '* Campo Requerido',

    'LBL_SITECFG_ADMIN_Name' => 'Nombre del Administrador de SuiteCRM',
    'LBL_SITECFG_ADMIN_PASS_2' => 'Vuelva a Ingresar la Contrase??a del Usuario Administrador',
    'LBL_SITECFG_ADMIN_PASS' => 'Contrase??a del Usuario Administrador',
    'LBL_SITECFG_APP_ID' => 'ID de la Aplicaci??n',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'Si se selecciona, deber?? proveer un ID de Aplicaci??n para sobreescribir el ID autogenerado. El ID asegura que las sesiones de una instancia de SuiteCRM no sean usadas por otras instancia. Si tiene un cluster de instalaciones de SuiteCRM, todas deber??an compartir el mismo ID de aplicaci??n.',
    'LBL_SITECFG_CUSTOM_ID' => 'Provea su propio ID de Aplicaci??n',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'Si se selecciona, deber?? especificar un directorio de logs para sobreescribir el directorio por defecto del log de SuiteCRM. Sin importar d??nde est?? ubicado el archivo de log, el acceso a trav??s de navegador se deber?? restringir utilizando una redirecci??n .htacces.',
    'LBL_SITECFG_CUSTOM_LOG' => 'Utilizar un Directorio Personalizado para Logs',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'Si se selecciona, deber?? proveer un directorio seguro para almacenar la informaci??n de sesiones de SuiteCRM. Esto se puede hacer para evitar que la informaci??n de la sesi??n sea vulnerada en servidores compartidos.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'Utilizar un Directorio Personalizado para las Sesiones de SuiteCRM',
    'LBL_SITECFG_FIX_ERRORS' => '<b>Por favor corrija los siguientes errores antes de continuar:</b>',
    'LBL_SITECFG_LOG_DIR' => 'Directorio de Log',
    'LBL_SITECFG_SESSION_PATH' => 'Ruta del Directorio de Sesiones<br>(debe ser editable)',
    'LBL_SITECFG_SITE_SECURITY' => 'Seleccionar Opciones de Seguridad',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => 'Si se selecciona, el sistema peri??dicamente verificar?? por actualizaciones de la aplicaci??n.',
    'LBL_SITECFG_SUITE_UP' => '??Verificar Autom??ticamente nuevas Actualizaciones?',
    'LBL_SITECFG_TITLE' => 'Configuraci??n del Sitio',
    'LBL_SITECFG_TITLE2' => 'Identificar el Usuario Administrador',
    'LBL_SITECFG_SECURITY_TITLE' => 'Seguridad del Sitio',
    'LBL_SITECFG_URL' => 'URL de la Instancia de SuiteCRM',
    'LBL_SITECFG_ANONSTATS' => '??Enviar estad??sticas an??nimas de uso?',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => 'Si se selecciona, SuiteCRM enviar?? estad??sticas <b>an??nimas</b> acerca de su instalaci??n a SuiteCRM Inc. cada vez que su sistema verifique nuevas versiones. Esta informaci??n nos ayudar?? a mejorar nuestra comprensi??n de c??mo la aplicaci??n es utilizada, y guiar?? las mejoras del producto.',
    'LBL_SITECFG_URL_MSG' => 'Ingrese la URL que ser?? utilizada para acceder a la instancia de SuiteCRM despu??s de la instalaci??n. La URL tambi??n va a ser utilizada como base para para las URL en las p??ginas de la aplicaci??n. La URL puede incluir el nombre del servidor web, nombre del equipo o direcci??n IP.',
    'LBL_SITECFG_SYS_NAME_MSG' => 'Ingrese un nombre para su sistema. El nombre se mostrar?? en la barra de t??tulo del navegador cuando los usuarios visiten la aplicaci??n SuiteCRM.',
    'LBL_SITECFG_PASSWORD_MSG' => 'Despu??s de la instalaci??n, necesitar?? utilizar el usuario administrador de SuiteCRM (nombre por defecto = admin) para ingresar a la instancia de SuiteCRM. Ingrese  una contrase??a para este usuario administrador. Esta contrase??a puede ser cambiada despu??s de ingresar por primera vez. Tambi??n puede ingresar otro nombre de usuario diferente al valor por defecto provisto.',
    'LBL_SITECFG_COLLATION_MSG' => 'Seleccione la configuraci??n de collation (ordenamiento de los datos) para su sistema. Esta configuraci??n crear?? las tablas con el idioma espec??fico que usted usa. En caso de que su idioma no requiera una configuraci??n especial, utilice el valor por defecto.',
    'LBL_SPRITE_SUPPORT' => 'Soporte de Sprite',
    'LBL_SYSTEM_CREDS' => 'Credenciales del Sistema',
    'LBL_SYSTEM_ENV' => 'Entorno del Sistema',
    'LBL_SHOW_PASS' => 'Mostrar Contrase??as',
    'LBL_HIDE_PASS' => 'Ocultar Contrase??as',
    'LBL_HIDDEN' => '<i>(oculto)</i>',
    'LBL_STEP1' => 'Paso 1 de 2 - Requisitos de preinstalaci??n',
    'LBL_STEP2' => 'Paso 2 de 2 - Configuraci??n',
    'LBL_STEP' => 'Paso',
    'LBL_TITLE_WELCOME' => 'Bienvenido a SuiteCRM ',
    'LBL_WELCOME' => 'Bienvenido a SuiteCRM',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'Est?? listo para instalar?',
    'REQUIRED_SYS_COMP' => 'Componentes de Sistema Requeridos',
    'REQUIRED_SYS_COMP_MSG' =>
        'Antes de comenzar, por favor aseg??rese de que tiene las versiones soportadas de los siguientes componentes del sistema:<br>
                      <ul>
                      <li> Base de Datos/Manejador de Sistema de Base de Datos (Ejemplos: MariaDB, MySQL or SQL Server)</li>
                      <li> Servidor Web (Apache, IIS)</li>
                      </ul>
                      Consulte la Matriz de Compatibilidad en las Notas de la Versi??n para encontrar los
                      componentes de sistema compatibles para la versi??n de SuiteCRM que est?? instalando<br>',
    'REQUIRED_SYS_CHK' => 'Chequeo Inicial del Sistema',
    'REQUIRED_SYS_CHK_MSG' =>
        'Cuando usted comienza el proceso de instalaci??n, se realizar?? una comprobaci??n del sistema en el servidor web donde se encuentran los archivos SuiteCRM para asegurarse de que el sistema est?? configurado correctamente y tiene todos los componentes necesarios para completar la instalaci??n. <br><br>El sistema verifica lo siguiente: <br><ul><li><b>versi??n de PHP</b> &#8211; debe ser compatible con la aplicaci??n</li> <li><b>Variables de sesi??n</b> &#8211; debe estar trabajando correctamente</li> <li><b>Cadenas MB</b> &#8211; debe ser instalado y habilitado en php.ini</li> <li><b>Apoyo de base de datos</b> &#8211; debe existir para MariaDB, MySQL o SQL Server</li> <li><b>Config.php</b> &#8211; debe existir y debe tener los permisos adecuados para que sea escribible</li> <li>los siguientes archivos de SuiteCRM deben ser escribible: <ul><li><b>/ aduana</li> <li>/ cache</li> <li>/ m??dulos</li> <li>/ subir</b></li></ul></li></ul> si la comprobaci??n falla, usted no ser?? capaz de proceder con la instalaci??n.                                    Se mostrar?? un mensaje de error, explicando por qu?? su sistema no pas?? la verificaci??n.                                   Despu??s de hacer los cambios necesarios, puede someterse a la comprobaci??n del sistema otra vez para continuar la instalaci??n. <br>',


    'REQUIRED_INSTALLTYPE' => 'Instalaci??n T??pica o Personalizada',
    'REQUIRED_INSTALLTYPE_MSG' =>
        'Despu??s de realizado el chequeo del sistema, puede seleccionar entre instalaci??n T??pica o Personalizada..<br><br>
                      Para ambas <b>T??pica</b> y <b>Personalizada</b>, necesitar?? saber lo siguiente:<br>
                      <ul>
                      <li> <b>Tipo de Base de Datos</b> que albergar?? la informaci??n de SuiteCRM <ul><li>Tipos de Base de Datos Compatibles: MariaDB, MySQL o SQL Server.<br><br></li></ul></li>
                      <li> <b>Nombre del servidor web</b> o equipo (host) en el cual se encuentra la base de datos
                      <ul><li>Puede ser <i>localhost</i> si la base de datos se encuentra en su equipo local, o en el mismo servidor web o equipo que los archivos de SuiteCRM.<br><br></li></ul></li>
                      <li><b>Nombre de la base de datos</b> que desea utilizar para albergar la informaci??n de SuiteCRM</li>
                        <ul>
                          <li> Quiz??s usted ya tenga una base de datos existente que desear??a utilizar. Si usted provee el nombre de una base de datos existente, se eliminar??n las tablas existentes de la base de datos durante la instalaci??n cuando se defina el nuevo esquema para la base de datos de SuiteCRM.</li>
                          <li> Si todav??a no posee una base de datos, el nombre que usted provea ser?? utilizado durante la instalaci??n para la nueva base de datos que sea creada para la instancia..<br><br></li>
                        </ul>
                      <li><b>Nombre y contrase??a del administrador de la base de datos</b> <ul><li>El administrador de baes de datos deber??a tener permisos para crear tablas, usuarios y escribir en la base de datos.</li><li>Puede que sea necesario contactar a su administrador de base de datos para que le provea esta informaci??n si la base de datos no se encuentra en su equipo local y/o si usted no es el administrador de base de datos.<br><br></ul></li></li>
                      <li> <b>Nombre de usuario de base de datos y contrase??a</b>
                      </li>
                        <ul>
                          <li> El usuario puede ser el administrador de la base de datos, o puede proveer el nombre de otro usuario existente de la base de datos. </li>
                          <li> Si desea crear un nuevo usuario de base de datos para este prop??sito, deber?? proveer un nuevo nombre de usuario y contrase??a, y el usuario ser?? creado durante la instalaci??n. </li>
                        </ul></ul><p>

                      Para la configuraci??n <b>Personalizada</b>, tambi??n deber?? saber lo siguiente:<br>
                      <ul>
                      <li> <b>URL que ser?? utilizada para acceder a la instancia de SuiteCRM</b> despu??s de ser instalada.
                      Esta URL puede incluir el nombre o direcci??n IP del servidor o equipo.<br><br></li>
                                  <li> [Opcional] <b>Ruta del directorio de sesi??n</b> si desea utilizar un directorio personalizado para la informaci??n de SuiteCRM con el objetivo de evitar vulnerabilidad en servidores compartidos.<br><br></li>
                                  <li> [Opcional] <b>Ruta personalizada del directorio de log</b> si desea sobreescribir el directorio por defecto utilizado para los archivos de log de SuiteCRM.<br><br></li>
                                  <li> [Opcional] <b>ID de Aplicaci??n</b> si desea sobreescribir el ID autogenerado para garantizar que las sesiones de una instancia de SuiteCRM no son utilizadas por otras instancias.<br><br></li>
                                  <li><b>Set de Caracteres</b> comunmente utilizado seg??n su zona.<br><br></li></ul>
                                  Para obtener informaci??n m??s detallada, por favor consulte la Gu??a de Instalaci??n.
                                ',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Por favor lea la siguiente informaci??n importante antes de continuar con la instalaci??n . La informaci??n le ayudar?? a determinar si est?? listo o no para instalar la aplicaci??n en este momento.',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => '<b>Seleccione su idioma</b>',
    'LBL_WELCOME_SETUP_WIZARD' => 'Asistente de Configuraci??n',
    'LBL_WIZARD_TITLE' => 'Asistente de Configuraci??n de SuiteCRM: ',
    'LBL_YES' => 'S??',

    'LBL_PATCHES_TITLE' => 'Instalar los Ultimos Parches',
    'LBL_MODULE_TITLE' => 'Instalar Paquetes de Idioma',
    'LBL_PATCH_1' => 'Si desea omitir este paso, haga click en Siguiente.',
    'LBL_PATCH_TITLE' => 'Parche del Sistema',
    'LBL_PATCH_READY' => 'Los siguientes parches est??n listos para ser instalados:',
    'LBL_SESSION_ERR_DESCRIPTION' => "SuiteCRM depende de las Sesiones de PHP para almacenar informaci??n importante mientras se conecta al servidor web. Su instalaci??n de PHP no tiene la informaci??n de Sesiones correctamente configurada. 
	<br><br>Un problema com??n de configuraci??n es que la directiva <b>'session.save_path'</b> no est?? se??alando un directorio v??lido. <br>
	<br> Por favor corrija su <a target=_new href='http://us2.php.net/manual/en/ref.session.php'>configuraci??n PHP</a> en el archivo php.ini ubicado a continuaci??n.",
    'LBL_SESSION_ERR_TITLE' => 'Error de Configuraci??n de Sesiones PHP',
    'LBL_SYSTEM_NAME' => 'Nombre del Sistema',
    'LBL_COLLATION' => 'Configuraci??n de Collation',
    'LBL_REQUIRED_SYSTEM_NAME' => 'Provea un Nombre de Sistema para su instancia SuiteCRM.',
    'LBL_PATCH_UPLOAD' => 'Seleccione un archivo de parche de su equipo local',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Se requiere Php versi??n 5 o superior.',
    'LBL_MINIMUM_PHP_VERSION' => 'La versi??n m??nima de PHP requerida es 5.1.0. La versi??n recomendada es 5.2.x.',
    'LBL_YOUR_PHP_VERSION' => '(Su versi??n actual es ',
    'LBL_RECOMMENDED_PHP_VERSION' => ' La versi??n recomendada es 5.2.x)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'El modo Compatibilidad con versiones anteriores de PHP est?? activado. Establezca zend.ze1_compatibility_mode en Off para poder continuar.',
    'LBL_STREAM' => 'PHP permite el uso de streaming',

    'advanced_password_new_account_email' => array(
        'subject' => 'Informaci??n de la Nueva Cuenta de Usuario',
        'type' => 'sistema',
        'description' => 'Esta plantilla es utilizada cuando un Administrador de Sistema env??a una nueva contrase??a a un usuario.',
        'body' => '<div><table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width="550" align=\\"\\&quot;\\&quot;center\\&quot;\\&quot;\\"><tbody><tr><td colspan=\\"2\\"><p>Aqu?? est?? su nuevo nombre de usuario y contrase??a temporal:</p><p>Nombre de Usuario : $contact_user_user_name </p><p>Contrase??a : $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>Despu??s de ingresar utilizando la contrase??a de arriba, puede que se le pida cambiar la contrase??a por una de su propia elecci??n.</p>   </td>         </tr><tr><td colspan=\\"2\\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Aqu?? est?? su nuevo nombre de usuario y contrase??a temporal:
Nombre de Usuario : $contact_user_user_name
Contrase??a : $contact_user_user_hash

$config_site_url

Despu??s de ingresar utilizando la contrase??a de arriba, puede que se le pida cambiar la contrase??a por una de su propia elecci??n.',
        'name' => 'Email de contrase??a generada por el sistema',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Reestablecer su contrase??a',
        'type' => 'sistema',
        'description' => "Esta plantilla es utilizada para enviarle un enlace al usuario que al cliquearse reestablece la contrase??a de la cuenta del usuario.",
        'body' => '<div><table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width="550" align=\\"\\&quot;\\&quot;center\\&quot;\\&quot;\\"><tbody><tr><td colspan=\\"2\\"><p>Recientemente ($contact_user_pwd_last_changed) ha requerido reestablecer la contrase??a de su cuenta. </p><p>Haga click en el siguiente enlace para reestablecer su contrase??a:</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\\"2\\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Recientemente ($contact_user_pwd_last_changed) ha requerido reestablecer la contrase??a de su cuenta.

Haga click en el siguiente enlace para reestablecer su contrase??a:

$contact_user_link_guid',
        'name' => 'Email de Contrase??a Olvidada',
    ),


    'two_factor_auth_email' => array(
        'subject' => 'C??digo de Autenticaci??n de dos factores',
        'type' => 'sistema',
        'description' => "Esta plantilla es usada para enviar al usuario un c??digo de autenticaci??n de dos factores.",
        'body' => '<div><table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width="550" align=\\"\\&quot;\\&quot;center\\&quot;\\&quot;\\"><tbody><tr><td colspan=\\"2\\"><p>C??digo de Autenticaci??n de Factor Doble es  <b>$code</b>.</p>  </td>         </tr><tr><td colspan=\\"2\\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            'C??digo de autenticaci??n de dos factores: $code.',
        'name' => 'Correo de autenticaci??n de dos factores',
    ),

    // SMTP settings

    'LBL_FROM_NAME' => 'Nombre del remitente:',
    'LBL_FROM_ADDR' => 'Direcci??n "De":',

    'LBL_WIZARD_SMTP_DESC' => 'Proporcione la cuenta de correo que se utilizar?? para enviar correos, como las notificaciones de asignaci??n y las contrase??as de nuevos usuarios. Los usuarios recibir??n correos de SuiteCRM, como si hubieran sido enviados desde la cuenta de correo especificada.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Elija su proveedor de Email:',

    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Correo Yahoo',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Otro',
    'LBL_MAIL_SMTP_SETTINGS' => 'Especificaci??n de Servidor SMTP',
    'LBL_MAIL_SMTPSERVER' => 'Servidor SMTP:',
    'LBL_MAIL_SMTPPORT' => 'Puerto SMTP:',
    'LBL_MAIL_SMTPAUTH_REQ' => '??Usar Autenticaci??n SMTP?',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => '??Habilitar SMTP sobre SSL o TLS?',
    'LBL_GMAIL_SMTPUSER' => 'Direcci??n de Email de Gmail:',
    'LBL_GMAIL_SMTPPASS' => 'Contrase??a de Gmail:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Permite a los usuarios utilizar esta cuenta para correo saliente:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Cuando esta opci??n est?? seleccionada, todos los usuarios podr??n enviar correos usando la misma cuenta de correo saliente para el env??o de notificaciones del sistema y alertas.  Si la opci??n no est?? seleccionada, los usuarios pueden usar el servidor de correo saliente tras proporcionar la informaci??n de su propia cuenta.',

    'LBL_YAHOOMAIL_SMTPPASS' => 'Contrase??a de Yahoo! Mail:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID de Yahoo! Mail:',

    'LBL_EXCHANGE_SMTPPASS' => 'Contrase??a de Exchange:',
    'LBL_EXCHANGE_SMTPUSER' => 'Nombre de usuario de Exchange:',
    'LBL_EXCHANGE_SMTPPORT' => 'Puerto de Servidor Exchange:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Servidor Exchange:',


    'LBL_MAIL_SMTPUSER' => 'Usuario SMTP:',
    'LBL_MAIL_SMTPPASS' => 'Contrase??a SMTP:',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'Imagen de marca',
    'LBL_WIZARD_SYSTEM_DESC' => 'Proporcione el nombre y logo de su organizaci??n para establecer la imagen de su marca en SuiteCRM.',
    'SYSTEM_NAME_WIZARD' => 'Nombre:',
    'SYSTEM_NAME_HELP' => '??ste es el nombre mostrado en la barra de t??tulo de su navegador.',
    'NEW_LOGO' => 'Seleccionar Logo:',
    'NEW_LOGO_HELP' => 'El formato del archivo de imagen puede ser tanto .png como .jpg. La altura m??xima es 170px, y la anchura m??xima es 450px. Cualquier imagen cargada que se sobrepase en alguna de las medidas ser?? modificada al tama??o indicado, seg??n la medida que exceda.',
    'COMPANY_LOGO_UPLOAD_BTN' => 'Subir',
    'CURRENT_LOGO' => 'Logo Actual:',
    'CURRENT_LOGO_HELP' => 'Este logotipo se desplegar?? en el centro de la pantalla de inicio de sesi??n de SuiteCRM.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'Selecci??n de escenario',
    'LBL_WIZARD_SCENARIO_DESC' => 'Esto es para permitir la personalizaci??n de los m??dulos mostrados seg??n sus requerimientos.  Cada uno de los m??dulos se puede activar tras la instalaci??n utilizando la p??gina de administraci??n.',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'No hay escenarios establecidos actualmente en el archivo de configuraci??n (config.php)',


    // System Local Settings


    'LBL_LOCALE_TITLE' => 'Configuraci??n Regional del Sistema',
    'LBL_WIZARD_LOCALE_DESC' => 'Especifique c??mo desea que los datos sean mostrados en SuiteCRM, bas??ndose en su ubicaci??n geogr??fica. La configuraci??n que proporcione aqu?? ser?? la utiliza por defecto. Los usuarios podr??n establecer sus propias prefer??ncias.',
    'LBL_DATE_FORMAT' => 'Formato de Fecha:',
    'LBL_TIME_FORMAT' => 'Formato de Hora:',
    'LBL_TIMEZONE' => 'Zona Horaria:',
    'LBL_LANGUAGE' => 'Idioma:',
    'LBL_CURRENCY' => 'Moneda:',
    'LBL_CURRENCY_SYMBOL' => 'S??mbolo de moneda:',
    'LBL_CURRENCY_ISO4217' => 'C??digo de moneda ISO 4217:',
    'LBL_NUMBER_GROUPING_SEP' => 'Separador de miles',
    'LBL_DECIMAL_SEP' => 'S??mbolo Decimal',
    'LBL_NAME_FORMAT' => 'Formato de Nombre:',
    'UPLOAD_LOGO' => 'Por favor espere, cargando logo..',
    'ERR_UPLOAD_FILETYPE' => 'Tipo de archivo no permitido, por favor cargue un jpg o png.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'Ocurri?? un error desconocido de cargue de archivo.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'El archivo subido excede el l??mite definido por la directiva upload_max_filesize en php.ini.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'El archivo subido excede el l??mite definido por la directiva MAX_FILE_SIZE especificada en el formulario HTML.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'El archivo ha sido s??lo parcialmente subido.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'No se ha subido ning??n archivo.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'Falta una carpeta temporal.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'Error al escribir el archivo.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'Una extensi??n PHP ha detenido la carga de ficheros. PHP no proporciona una manera de averiguar qu?? extensi??n ha causado la parada en la subida de ficheros.',

    'LBL_INSTALL_PROCESS' => 'Instalar...',

    'LBL_EMAIL_ADDRESS' => 'Correo electr??nico:',
    'ERR_ADMIN_EMAIL' => 'La direcci??n de correo electr??nico del administrador es incorrecta.',
    'ERR_SITE_URL' => 'La URL del sitio es necesaria.',

    'STAT_CONFIGURATION' => 'Relaciones de configuraci??n...',
    'STAT_CREATE_DB' => 'Crear base de datos...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'Crear valores predeterminados...',
    'STAT_INSTALL_FINISH' => 'Fin de la instalaci??n...',
    'STAT_INSTALL_FINISH_LOGIN' => 'El proceso de instalaci??n ha terminado, <a href="%s"> por favor, iniciar sesi??n...</a>',
    'LBL_LICENCE_TOOLTIP' => 'Por favor acepte la licencia primero',

    'LBL_MORE_OPTIONS_TITLE' => 'M??s opciones',
    'LBL_START' => '',
    'LBL_DB_CONN_ERR' => 'Error de base de datos',
    'LBL_OLD_PHP' => 'Se detecto una versi??n de PHP antig??a!',
    'LBL_OLD_PHP_MSG' => 'La versi??n de PHP recomendada para instalar SuiteCRM es %s <br />Aunque la versi??n m??nima de PHP requerida es %s, no se recomienda debido al gran n??mero de errores corregidos, incluyendo soluciones de seguridad, liberadas en las versiones m??s modernas.<br />Usted est?? usando la versi??n de PHP %s, que es EOL: <a href="http://php.net/eol.php">http://php.net/eol.php</a>.<br />Por favor considere actualizar su versi??n de PHP. Instrucciones en <a href="http://php.net/migration70"> http://php.net/migration70</a>. ',
    'LBL_OLD_PHP_OK' => 'Soy consciente de los riesgos y deseo continuar.',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'Usuario',
    'LBL_DBCONFIG_MSG3_LABEL' => 'Nombre de Base de datos',
    'LBL_DBCONFIG_MSG3' => 'Nombre de la base de datos que contendr?? la informaci??n de la instancia de SuiteCRM que est?? a punto de instalar:',
    'LBL_DBCONFIG_MSG2_LABEL' => 'Nombre del Host',
    'LBL_DBCONFIG_MSG2' => 'Nombre del servidor web o Host en el que se encuentra la Base de Datos (por ejemplo www.mydomain.com).Si est?? instalando localmente, es mejor utilizar \'localhost\' en lugar de \'127.0.0.1\', por razones de rendimiento.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'Para configurar la base de datos de SuiteCRM es necesario el nombre de usuario y contrase??a de un administrador de base de datos que pueda crear las tablas, usuarios y escribir en ella.',
    'LBL_SYS_CHECK_WARNING' => 'Ignore System Check Warnings',
    'LBL_PROCEED' => 'PROCEED',
    'LBL_CONFIG' => 'CONFIGURATION',
    'LBL_VALIDATION_ERRORS' => 'Hay errores de validaci??n, no se puede realizar la acci??n.'
);
