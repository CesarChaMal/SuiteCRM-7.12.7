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

//the left value is the key stored in the db and the right value is ie display value
//to translate, only modify the right value in each key/value pair
$app_list_strings = array(
//e.g. auf Deutsch 'Contacts'=>'Contakten',
    'language_pack_name' => 'Espa??ol (Mexico) - es_MX',
    'moduleList' => array(
        'Home' => 'Inicio',
        'ResourceCalendar' => 'Calendario de recursos',
        'Contacts' => 'Contactos',
        'Accounts' => 'Cuentas',
        'Alerts' => 'Notificaciones',
        'Opportunities' => 'Oportunidades',
        'Cases' => 'Casos',
        'Notes' => 'Notas',
        'Calls' => 'Llamadas',
        'TemplateSectionLine' => 'L??nea de secci??n de plantilla',
        'Calls_Reschedule' => 'Reprogramaci??n de llamadas',
        'Emails' => 'e-Mails',
        'EAPM' => 'EAPM(m??dulo de api externo)',
        'Meetings' => 'Reuniones',
        'Tasks' => 'Tareas',
        'Calendar' => 'Calendario',
        'Leads' => 'Clientes potenciales',
        'Currencies' => 'Monedas',
        'Activities' => 'Actividades',
        'Bugs' => 'Incidencias',
        'Feeds' => 'RSS',
        'iFrames' => 'Mis sitios',
        'TimePeriods' => 'Per??odos de Tiempo',
        'ContractTypes' => 'Tipos de Contrato',
        'Schedulers' => 'Planificadores',
        'Project' => 'Proyectos',
        'ProjectTask' => 'Tareas de proyecto',
        'Campaigns' => 'Campa??as',
        'CampaignLog' => 'Registro de campa??as',
        'Documents' => 'Documentos',
        'DocumentRevisions' => 'Revisiones de documentos',
        'Connectors' => 'Conectores',
        'Roles' => 'Roles',
        'Notifications' => 'Notificaciones',
        'Sync' => 'Sincronizar',
        'Users' => 'Usuarios',
        'Employees' => 'Empleados',
        'Administration' => 'Administraci??n',
        'ACLRoles' => 'Roles',
        'InboundEmail' => 'Correo entrante',
        'Releases' => 'Lanzamientos',
        'Prospects' => 'P??blico Objetivo',
        'Queues' => 'Colas',
        'EmailMarketing' => 'Marketing por e-Mail',
        'EmailTemplates' => 'Correo electr??nico - Plantillas',
        'ProspectLists' => 'Objetivos - Listas',
        'SavedSearch' => 'B??squedas guardadas',
        'UpgradeWizard' => 'Asistente de Actualizaciones',
        'Trackers' => 'Monitorizaci??n',
        'TrackerSessions' => 'Monitorizaci??n de Sesiones',
        'TrackerQueries' => 'Consultas de Monitorizaci??n',
        'FAQ' => 'Preguntas Frecuentes',
        'Newsletters' => 'Boletines de noticias',
        'SugarFeed' => 'Alimentar SuiteCRM',
        'SugarFavorites' => 'Favoritos SuiteCRM',

        'OAuthKeys' => 'Claves del Consumidor OAuth',
        'OAuthTokens' => 'Claves OAuth',
        'OAuth2Clients' => 'Clientes OAuth',
        'OAuth2Tokens' => 'Claves OAuth',
    ),

    'moduleListSingular' => array(
        'Home' => 'Inicio',
        'Dashboard' => 'Cuadro de mando',
        'Contacts' => 'Contacto',
        'Accounts' => 'Cuenta',
        'Opportunities' => 'Oportunidad',
        'Cases' => 'Caso',
        'Notes' => 'Nota',
        'Calls' => 'Llamada',
        'Emails' => 'Email',
        'EmailTemplates' => 'Plantilla de e-Mail',
        'Meetings' => 'Reuni??n',
        'Tasks' => 'Tarea',
        'Calendar' => 'Calendario',
        'Leads' => 'Cliente Potencial',
        'Activities' => 'Actividad',
        'Bugs' => 'Incidencia',
        'KBDocuments' => 'Base de Conocimiento',
        'Feeds' => 'RSS',
        'iFrames' => 'Mis sitios',
        'TimePeriods' => 'Per??odo de Tiempo',
        'Project' => 'Proyecto',
        'ProjectTask' => 'Tarea de proyecto',
        'Prospects' => 'P??blico objetivo',
        'Campaigns' => 'Campa??a',
        'Documents' => 'Documento',
        'Sync' => 'Sincronizaci??n',
        'Users' => 'Usuario',
        'SugarFavorites' => 'Favoritos SuiteCRM',

    ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'S??',
        '2' => 'No',
    ),

    //e.g. en fran??ais 'Analyst'=>'Analyste',
    'account_type_dom' => array(
        '' => '',
        'Analyst' => 'Analista',
        'Competitor' => 'Competidor',
        'Customer' => 'Cliente',
        'Integrator' => 'Integrador',
        'Investor' => 'Inversionista',
        'Partner' => 'Socio',
        'Press' => 'Prensa',
        'Prospect' => 'Prospecto',
        'Reseller' => 'Revendedor',
        'Other' => 'Otro',
    ),
    //e.g. en espa??ol 'Apparel'=>'Ropa',
    'industry_dom' => array(
        '' => '',
        'Apparel' => 'Textile',
        'Banking' => 'Banca',
        'Biotechnology' => 'Biotecnolog??a',
        'Chemicals' => 'Qu??mica',
        'Communications' => 'Comunicaciones',
        'Construction' => 'Construcci??n',
        'Consulting' => 'Consultor??a',
        'Education' => 'Educaci??n',
        'Electronics' => 'Electr??nica',
        'Energy' => 'Energ??a',
        'Engineering' => 'Ingenier??a',
        'Entertainment' => 'Entretenimiento',
        'Environmental' => 'Medio ambiente',
        'Finance' => 'Finanzas',
        'Government' => 'Gobierno',
        'Healthcare' => 'Salud',
        'Hospitality' => 'Hospitalidad',
        'Insurance' => 'Seguros',
        'Machinery' => 'Maquinaria',
        'Manufacturing' => 'Fabricaci??n',
        'Media' => 'Medios de comunicaci??n',
        'Not For Profit' => 'Sin ??nimo de lucro',
        'Recreation' => 'Recreaci??n',
        'Retail' => 'Minoristas',
        'Shipping' => 'Env??os',
        'Technology' => 'Tecnolog??a',
        'Telecommunications' => 'Telecomunicaciones',
        'Transportation' => 'Transporte',
        'Utilities' => 'Servicios p??blicos',
        'Other' => 'Otro',
    ),
    'lead_source_default_key' => 'Self Generated',
    'lead_source_dom' => array(
        '' => '',
        'Cold Call' => 'Llamada en fr??o',
        'Existing Customer' => 'Cliente existente',
        'Self Generated' => 'Autogenerado',
        'Employee' => 'Empleado',
        'Partner' => 'Socio',
        'Public Relations' => 'Relaciones p??blicas',
        'Direct Mail' => 'Correo directo',
        'Conference' => 'Conferencia',
        'Trade Show' => 'Exposici??n',
        'Web Site' => 'Sitio Web',
        'Word of mouth' => 'Recomendaci??n',
        'Email' => 'e-Mail',
        'Campaign' => 'Campa??a',
        'Other' => 'Otro',
    ),
    'opportunity_type_dom' => array(
        '' => '',
        'Existing Business' => 'Negocio existente',
        'New Business' => 'Nuevo negocio',
    ),
    'roi_type_dom' => array(
        'Revenue' => 'Ingresos',
        'Investment' => 'Inversi??n',
        'Expected_Revenue' => 'Ingresos esperados',
        'Budget' => 'Presupuesto',

    ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
    'opportunity_relationship_type_dom' => array(
        '' => '',
        'Primary Decision Maker' => 'Tomador de Decisiones Principales',
        'Business Decision Maker' => 'Tomador de Decisiones de Negocios',
        'Business Evaluator' => 'Evaluador de Negocio',
        'Technical Decision Maker' => 'Tomador de Decisiones T??cnicas',
        'Technical Evaluator' => 'Evaluador T??cnico',
        'Executive Sponsor' => 'Patrocinador Ejecutivo',
        'Influencer' => 'Influenciador',
        'Other' => 'Otro',
    ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Primary Contact',
    'case_relationship_type_dom' => array(
        '' => '',
        'Primary Contact' => 'Contacto principal',
        'Alternate Contact' => 'Contacto secundario',
    ),
    'payment_terms' => array(
        '' => '',
        'Net 15' => 'Neto 15',
        'Net 30' => 'Neto 30',
    ),
    'sales_stage_default_key' => 'Prospecting',
    'sales_stage_dom' => array(
        'Prospecting' => 'Prospecto',
        'Qualification' => 'Calificaci??n',
        'Needs Analysis' => 'An??lisis de las necesidades',
        'Value Proposition' => 'Propuesta de Valor',
        'Id. Decision Makers' => 'Identificar a los tomadores de decisi??n',
        'Perception Analysis' => 'An??lisis de Percepci??n',
        'Proposal/Price Quote' => 'Propuesta/Presupuesto',
        'Negotiation/Review' => 'Negociaci??n/Revisi??n',
        'Closed Won' => 'Ganado',
        'Closed Lost' => 'Cerrado perdido',
    ),
    'sales_probability_dom' => // keys must be the same as sales_stage_dom
        array(
            'Prospecting' => '10',
            'Qualification' => '20',
            'Needs Analysis' => '25',
            'Value Proposition' => '30',
            'Id. Decision Makers' => '40',
            'Perception Analysis' => '50',
            'Proposal/Price Quote' => '65',
            'Negotiation/Review' => '80',
            'Closed Won' => '100',
            'Closed Lost' => '0',
        ),
    'activity_dom' => array(
        'Call' => 'Llamada',
        'Meeting' => 'Reuni??n',
        'Task' => 'Tarea',
        'Email' => 'e-Mail',
        'Note' => 'Nota',
    ),
    'salutation_dom' => array(
        '' => '',
        'Mr.' => 'Sr.',
        'Ms.' => 'Sra.',
        'Mrs.' => 'Sra.',
        'Miss' => 'Se??orita',
        'Dr.' => 'Sr.',
        'Prof.' => 'Prof.',
    ),
    //time is in seconds; the greater the time the longer it takes;
    'reminder_max_time' => 90000,
    'reminder_time_options' => array(
        60 => '1 minuto antes',
        300 => '5 minutos antes',
        600 => '10 minutos antes',
        900 => '15 minutos antes',
        1800 => '30 minutos antes',
        3600 => '1 hora antes',
        7200 => '2 horas antes',
        10800 => '3 horas antes',
        18000 => '5 horas antes',
        86400 => '1 d??a antes',
    ),

    'task_priority_default' => 'Media',
    'task_priority_dom' => array(
        'High' => 'Alta',
        'Medium' => 'Media',
        'Low' => 'Baja',
    ),
    'task_status_default' => 'No iniciada',
    'task_status_dom' => array(
        'Not Started' => 'No iniciada',
        'In Progress' => 'En progreso',
        'Completed' => 'Completada',
        'Pending Input' => 'Pendiente de informaci??n',
        'Deferred' => 'Retrasada',
    ),
    'meeting_status_default' => 'Planned',
    'meeting_status_dom' => array(
        'Planned' => 'Planeada',
        'Held' => 'Realizada',
        'Not Held' => 'No realizada',
    ),
    'extapi_meeting_password' => array(
        'WebEx' => 'WebEx',
    ),
    'meeting_type_dom' => array(
        'Other' => 'Otro',
        'Sugar' => 'SuiteCRM',
    ),
    'call_status_default' => 'Planificada',
    'call_status_dom' => array(
        'Planned' => 'Planeada',
        'Held' => 'Realizada',
        'Not Held' => 'No realizada',
    ),
    'call_direction_default' => 'Outbound',
    'call_direction_dom' => array(
        'Inbound' => 'Entrante',
        'Outbound' => 'Saliente',
    ),
    'lead_status_dom' => array(
        '' => '',
        'New' => 'Nuevo',
        'Assigned' => 'Asignado',
        'In Process' => 'En proceso',
        'Converted' => 'Convertido',
        'Recycled' => 'Reciclado',
        'Dead' => 'Abandonado',
    ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
        'P1' => 'Alta',
        'P2' => 'Media',
        'P3' => 'Baja',
    ),
    'user_type_dom' => array(
        'RegularUser' => 'Usuario normal',
        'Administrator' => 'Administrador',
    ),
    'user_status_dom' => array(
        'Active' => 'Activa',
        'Inactive' => 'Inactiva',
    ),
    'user_factor_auth_interface_dom' => array(
        'FactorAuthEmailCode' => 'C??digo de correo electr??nico',
    ),
    'employee_status_dom' => array(
        'Active' => 'Activa',
        'Terminated' => 'Despedido',
        'Leave of Absence' => 'Permiso de ausencia',
    ),
    'messenger_type_dom' => array(
        '' => '',
        'MSN' => 'MSN',
        'Yahoo!' => 'Yahoo!',
        'AOL' => 'AOL',
    ),
    'project_task_priority_options' => array(
        'High' => 'Alto',
        'Medium' => 'Media',
        'Low' => 'Baja',
    ),
    'project_task_priority_default' => 'Media',

    'project_task_status_options' => array(
        'Not Started' => 'No iniciada',
        'In Progress' => 'En progreso',
        'Completed' => 'Completada',
        'Pending Input' => 'Pendiente de informaci??n',
        'Deferred' => 'Retrasada',
    ),
    'project_task_utilization_options' => array(
        '0' => 'ninguno',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'Borrador',
        'In Review' => 'En revisi??n',
        'Underway' => 'En marcha',
        'On_Hold' => 'En espera',
        'Completed' => 'Completada',
    ),
    'project_status_default' => 'Borrador',

    'project_duration_units_dom' => array(
        'Days' => 'D??as',
        'Hours' => 'Horas',
    ),

    'activity_status_type_dom' => array(
        '' => '--Ninguno--',
        'active' => 'Activa',
        'inactive' => 'Inactiva',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'Cuentas',
    'record_type_display' => array(
        '' => '',
        'Accounts' => 'Cuenta',
        'Opportunities' => 'Oportunidad',
        'Cases' => 'Caso',
        'Leads' => 'Cliente Potencial',
        'Contacts' => 'Contacto', // cn (11/22/2005) added to support Emails

        'Bugs' => 'Incidencia',
        'Project' => 'Proyecto',

        'Prospects' => 'P??blico objetivo',
        'ProjectTask' => 'Tarea de proyecto',

        'Tasks' => 'Tarea',

        'AOS_Contracts' => 'Contrato',
        'AOS_Invoices' => 'Factura',
        'AOS_Quotes' => 'Cotizaci??n',
        'AOS_Products' => 'Producto',

    ),

    'record_type_display_notes' => array(
        'Accounts' => 'Cuenta',
        'Contacts' => 'Contacto',
        'Opportunities' => 'Oportunidad',
        'Campaigns' => 'Campa??a',
        'Tasks' => 'Tarea',
        'Emails' => 'e-Mails',

        'Bugs' => 'Incidencia',
        'Project' => 'Proyecto',
        'ProjectTask' => 'Tarea de proyecto',
        'Prospects' => 'P??blico objetivo',
        'Cases' => 'Caso',
        'Leads' => 'Clientes potenciales',

        'Meetings' => 'Reuniones',
        'Calls' => 'Llamadas',

        'AOS_Contracts' => 'Contrato',
        'AOS_Invoices' => 'Factura',
        'AOS_Quotes' => 'Cotizaci??n',
        'AOS_Products' => 'Producto',
    ),

    'parent_type_display' => array(
        'Accounts' => 'Cuenta',
        'Contacts' => 'Contactos',
        'Tasks' => 'Tarea',
        'Opportunities' => 'Oportunidad',

        'Bugs' => 'Bug',
        'Cases' => 'Caso',
        'Leads' => 'Cliente Potencial',

        'Project' => 'Proyecto',
        'ProjectTask' => 'Tarea de proyecto',

        'Prospects' => 'P??blico objetivo',

        'AOS_Contracts' => 'Contrato',
        'AOS_Invoices' => 'Factura',
        'AOS_Quotes' => 'Cotizaci??n',
        'AOS_Products' => 'Producto',

    ),
    'parent_line_items' => array(
        'AOS_Quotes' => 'Cotizaciones',
        'AOS_Invoices' => 'Facturas',
        'AOS_Contracts' => 'Contratos',
    ),
    'issue_priority_default_key' => 'Media',
    'issue_priority_dom' => array(
        'Urgent' => 'Urgente',
        'High' => 'Alto',
        'Medium' => 'Media',
        'Low' => 'Baja',
    ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Aceptada',
        'Duplicate' => 'Duplicar',
        'Closed' => 'Cerrada',
        'Out of Date' => 'Expirada',
        'Invalid' => 'Inv??lida',
    ),

    'issue_status_default_key' => 'Nuevo',
    'issue_status_dom' => array(
        'New' => 'Nuevo',
        'Assigned' => 'Asignada',
        'Closed' => 'Cerrada',
        'Pending' => 'Pendiente',
        'Rejected' => 'Rechazada',
    ),

    'bug_priority_default_key' => 'Media',
    'bug_priority_dom' => array(
        'Urgent' => 'Urgente',
        'High' => 'Alto',
        'Medium' => 'Media',
        'Low' => 'Baja',
    ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Aceptada',
        'Duplicate' => 'Duplicada',
        'Fixed' => 'Corregida',
        'Out of Date' => 'Expirada',
        'Invalid' => 'Inv??lida',
        'Later' => 'M??s tarde',
    ),
    'bug_status_default_key' => 'Nuevo',
    'bug_status_dom' => array(
        'New' => 'Nuevo',
        'Assigned' => 'Asignada',
        'Closed' => 'Cerrada',
        'Pending' => 'Pendiente',
        'Rejected' => 'Rechazada',
    ),
    'bug_type_default_key' => 'Incidencia',
    'bug_type_dom' => array(
        'Defect' => 'Defecto',
        'Feature' => 'Caracter??stica',
    ),
    'case_type_dom' => array(
        'Administration' => 'Administraci??n',
        'Product' => 'Producto',
        'User' => 'Usuario',
    ),

    'source_default_key' => '',
    'source_dom' => array(
        '' => '',
        'Internal' => 'Interno',
        'Forum' => 'Foro',
        'Web' => 'Sitio Web',
        'InboundEmail' => 'Correo entrante',
    ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
        '' => '',
        'Accounts' => 'Cuentas',
        'Activities' => 'Actividades',
        'Bugs' => 'Incidencias',
        'Calendar' => 'Calendario',
        'Calls' => 'Llamadas',
        'Campaigns' => 'Campa??as',
        'Cases' => 'Casos',
        'Contacts' => 'Contactos',
        'Currencies' => 'Monedas',
        'Dashboard' => 'Cuadro de mando',
        'Documents' => 'Documentos',
        'Emails' => 'e-Mails',
        'Feeds' => 'Fuentes RSS',
        'Forecasts' => 'Previsiones',
        'Help' => 'Ayuda',
        'Home' => 'Inicio',
        'Leads' => 'Clientes potenciales',
        'Meetings' => 'Reuniones',
        'Notes' => 'Notas',
        'Opportunities' => 'Oportunidades',
        'Outlook Plugin' => 'Plugin de Outlook',
        'Projects' => 'Proyectos',
        'Quotes' => 'Cotizaciones',
        'Releases' => 'Lanzamientos',
        'RSS' => 'Fuentes RSS',
        'Studio' => 'Estudio',
        'Upgrade' => 'Actualizaci??n',
        'Users' => 'Usuarios',
    ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
        '' => '',
        'Planning' => 'Planeaci??n',
        'Active' => 'Activa',
        'Inactive' => 'Inactiva',
        'Complete' => 'Completa',
        //'In Queue' => 'In Queue',
        //'Sending' => 'Sending',
    ),
    'campaign_type_dom' => array(
        '' => '',
        'Telesales' => 'Televenta',
        'Mail' => 'Correo',
        'Email' => 'e-Mail',
        'Print' => 'Imprenta',
        'Web' => 'Sitio Web',
        'Radio' => 'Radio',
        'Television' => 'Televisi??n',
        'NewsLetter' => 'Bolet??n de noticias',
        'Survey' => 'Encuesta',
    ),

    'newsletter_frequency_dom' => array(
        '' => '',
        'Weekly' => 'Semanalmente',
        'Monthly' => 'Mensualmente',
        'Quarterly' => 'Trimestralmente',
        'Annually' => 'Anualmente',
    ),

    'notifymail_sendtype' => array(
        'SMTP' => 'SMTP',
    ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'Enero',
        '2' => 'Febrero',
        '3' => 'Marzo',
        '4' => 'Abril',
        '5' => 'Mayo',
        '6' => 'Junio',
        '7' => 'Julio',
        '8' => 'Agosto',
        '9' => 'Septiembre',
        '10' => 'Octubre',
        '11' => 'Noviembre',
        '12' => 'Diciembre',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'Ene',
        '2' => 'Feb',
        '3' => 'Mar',
        '4' => 'Abr',
        '5' => 'May',
        '6' => 'Jun',
        '7' => 'Jul',
        '8' => 'Ago',
        '9' => 'Sep',
        '10' => 'Oct',
        '11' => 'Nov',
        '12' => 'Dic',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => 'Domingo',
        '2' => 'Lunes',
        '3' => 'Martes',
        '4' => 'Mi??rcoles',
        '5' => 'Jueves',
        '6' => 'Viernes',
        '7' => 'S??bado',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'Dom',
        '2' => 'Lun',
        '3' => 'Mar',
        '4' => 'Mie',
        '5' => 'Jue',
        '6' => 'Vie',
        '7' => 'Sab',
    ),
    'dom_meridiem_lowercase' => array(
        'am' => 'am',
        'pm' => 'pm',
    ),
    'dom_meridiem_uppercase' => array(
        'AM' => 'AM',
        'PM' => 'PM',
    ),

    'dom_email_types' => array(
        'out' => 'Enviado',
        'archived' => 'Archivado',
        'draft' => 'Borrador',
        'inbound' => 'Entrante',
        'campaign' => 'Campa??a',
    ),
    'dom_email_status' => array(
        'archived' => 'Archivado',
        'closed' => 'Cerrado',
        'draft' => 'Borrador',
        'read' => 'Le??do',
        'replied' => 'Respondido',
        'sent' => 'Enviado',
        'send_error' => 'Error de env??o',
        'unread' => 'No le??do',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'Archivado',
    ),

    'dom_email_server_type' => array(
        '' => '--Ninguno--',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '--Ninguno--',
        'createcase' => 'Nuevo caso',
        'bounce' => 'Gesti??n de rebotes',
    ),
    'dom_email_distribution' => array(
        '' => '--Ninguno--',
        'direct' => 'Asignaci??n Directa',
        'roundRobin' => 'Round-Robin',
        'leastBusy' => 'Menos-Ocupado',
    ),
    'dom_email_errors' => array(
        1 => 'Solo seleccione un usuario cuando los art??culos se asignen directamente.',
        2 => 'Debes asignar solamente art??culos seleccionados cuando estos se asignan de forma directa.',
    ),
    'dom_email_bool' => array(
        'bool_true' => 'S??',
        'bool_false' => 'No',
    ),
    'dom_int_bool' => array(
        1 => 'S??',
        0 => 'No',
    ),
    'dom_switch_bool' => array(
        'on' => 'S??',
        'off' => 'No',
        '' => 'No',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'Cliente de correo de SuiteCRM',
        'mailto' => 'Cliente de correo externo',
    ),

    'dom_editor_type' => array(
        'none' => 'HTML directo',
        'tinymce' => 'TinyMCE Editor',
        'mozaik' => 'Mozaik editor',
    ),

    'dom_email_editor_option' => array(
        '' => 'Formato de correo por defecto',
        'html' => 'e-Mail en HTML',
        'plain' => 'e-Mail en texto plano',
    ),

    'schedulers_times_dom' => array(
        'not run' => 'Hora de ejecuci??n pasada, no ejecutado',
        'ready' => 'Listo',
        'in progress' => 'En progreso',
        'failed' => 'Fall??',
        'completed' => 'Completado',
        'no curl' => 'No ejecutado: cURL no est?? disponible',
    ),

    'scheduler_status_dom' => array(
        'Active' => 'Activa',
        'Inactive' => 'Inactiva',
    ),

    'scheduler_period_dom' => array(
        'min' => 'Minutos',
        'hour' => 'Horas',
    ),
    'document_category_dom' => array(
        '' => '',
        'Marketing' => 'Mercadotecnia',
        'Knowledege Base' => 'Base de conocimiento',
        'Sales' => 'Ventas',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => 'Archivado',
        // TODO: add more categories here...
    ),

    'document_subcategory_dom' => array(
        '' => '',
        'Marketing Collateral' => 'Impresos de Marketing',
        'Product Brochures' => 'Folletos de producto',
        'FAQ' => 'Preguntas Frecuentes',
    ),

    'document_status_dom' => array(
        'Active' => 'Activa',
        'Draft' => 'Borrador',
        'FAQ' => 'Preguntas Frecuentes',
        'Expired' => 'Expirado',
        'Under Review' => 'En revisi??n',
        'Pending' => 'Pendiente',
    ),
    'document_template_type_dom' => array(
        '' => '',
        'mailmerge' => 'Combinar correspondencia',
        'eula' => 'CLUF',
        'nda' => 'Acuerdo de confidencialidad',
        'license' => 'Contrato de licencia',
    ),
    'dom_meeting_accept_options' => array(
        'accept' => 'Aceptar',
        'decline' => 'Rechazar',
        'tentative' => 'Tentativa',
    ),
    'dom_meeting_accept_status' => array(
        'accept' => 'Aceptado',
        'decline' => 'Rechaz??',
        'tentative' => 'Tentativa',
        'none' => 'Ninguno',
    ),
    'duration_intervals' => array(
        '0' => '00',
        '15' => '15',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => 'Ninguno',
        'Daily' => 'Diariamente',
        'Weekly' => 'Semanalmente',
        'Monthly' => 'Mensualmente',
        'Yearly' => 'Anual',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'd??a(s)',
        'Weekly' => 'semana(s)',
        'Monthly' => 'mes(es)',
        'Yearly' => 'a??o(s)',
    ),

    'duration_dom' => array(
        '' => 'Ninguna',
        '900' => '15 minutos',
        '1800' => '30 minutos',
        '2700' => '45 minutos',
        '3600' => '1 hora',
        '5400' => '1.5 horas',
        '7200' => '2 horas',
        '10800' => '3 horas',
        '21600' => '6 horas',
        '86400' => '1 d??a',
        '172800' => '2 d??as',
        '259200' => '3 d??as',
        '604800' => '1 semaine',
    ),


//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => 'Predeterminado',
        'seed' => 'Serie',
        'exempt_domain' => 'Lista de exclusi??n - Por dominio',
        'exempt_address' => 'Lista de exclusi??n - Por e-Mail',
        'exempt' => 'Lista de exclusi??n - Por Id',
        'test' => 'Probar',
    ),

    'email_settings_num_dom' => array(
        '10' => '10',
        '20' => '20',
        '50' => '50',
    ),
    'email_marketing_status_dom' => array(
        '' => '',
        'active' => 'Activo',
        'inactive' => 'Inactivo',
    ),

    'campainglog_activity_type_dom' => array(
        '' => '',
        'targeted' => 'Mensaje enviado/Intentado',
        'send error' => 'Mensajes rebotados,Otra causa',
        'invalid email' => 'Mensajes rebotados,e-Mail no v??lido',
        'link' => 'Enlace',
        'viewed' => 'Mensaje visto',
        'removed' => 'Descartado',
        'lead' => 'Clientes potenciales creados',
        'contact' => 'Contactos creados',
        'blocked' => 'Exclu??dos por direcci??n o dominio',
    ),

    'campainglog_target_type_dom' => array(
        'Contacts' => 'Contactos',
        'Users' => 'Usuarios',
        'Prospects' => 'P??blico Objetivo',
        'Leads' => 'Clientes potenciales',
        'Accounts' => 'Cuentas',
    ),
    'merge_operators_dom' => array(
        'like' => 'Contiene',
        'exact' => 'Exactamente',
        'start' => 'Inicia con',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'S??',
        'false' => 'No',
        'required' => 'Obligatorio',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'Deshabilitado',
        1 => 'Habilitado',
        2 => 'Filtro',
        3 => 'Filtro seleccionado por defecto',
        4 => 'S??lo filtro',
    ),

    'projects_priority_options' => array(
        'high' => 'Alta',
        'medium' => 'Media',
        'low' => 'Baja',
    ),

    'projects_status_options' => array(
        'notstarted' => 'No iniciado',
        'inprogress' => 'En progreso',
        'completed' => 'Completado',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'Expandir leyenda',
        'collapselegend' => 'Contraer leyenda',
        'clickfordrilldown' => 'Click para profundizar',
        'detailview' => 'M??s detalles...',
        'piechart' => 'Gr??fica circular',
        'groupchart' => 'Gr??fico Agrupado',
        'stackedchart' => 'Gr??fico Apilado',
        'barchart' => 'Gr??fico de Barras',
        'horizontalbarchart' => 'Gr??fico de Barras Horizontal',
        'linechart' => 'Gr??fico de L??neas',
        'noData' => 'Datos no disponibles',
        'print' => 'Imprimir',
        'pieWedgeName' => 'secciones',
    ),
    'release_status_dom' => array(
        'Active' => 'Activo',
        'Inactive' => 'Inactivo',
    ),
    'email_settings_for_ssl' => array(
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' => array(
        '\'' => 'Comillas simples (&#39;)',
        '"' => 'Comillas Dobles (&#34;)',
        '' => 'Ninguno',
        'other' => 'Otro:',
    ),
    'import_delimeter_options' => array(
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'Otro:',
    ),
    'link_target_dom' => array(
        '_blank' => 'Nueva ventana',
        '_self' => 'Misma ventana',
    ),
    'dashlet_auto_refresh_options' => array(
        '-1' => 'No actualizar autom??ticamente',
        '30' => 'Cada 30 segundos',
        '60' => 'Cada minuto',
        '180' => 'Cada 3 minutos',
        '300' => 'Cada 5 minutos',
        '600' => 'Cada 10 minutos',
    ),
    'dashlet_auto_refresh_options_admin' => array(
        '-1' => ' Nunca',
        '30' => 'Cada 30 segundos',
        '60' => 'Cada minuto',
        '180' => 'Cada 3 minutos',
        '300' => 'Cada 5 minutos',
        '600' => 'Cada 10 minutos',
    ),
    'date_range_search_dom' => array(
        '=' => 'Igual a',
        'not_equal' => 'Diferente de',
        'greater_than' => 'Despu??s',
        'less_than' => 'Antes',
        'last_7_days' => '??ltimos 7 D??as',
        'next_7_days' => 'Pr??ximos 7 d??as',
        'last_30_days' => '??ltimos 30 d??as',
        'next_30_days' => 'Pr??ximos 30 d??as',
        'last_month' => '??ltimo mes',
        'this_month' => 'Este Mes',
        'next_month' => 'Pr??ximo mes',
        'last_year' => '??ltimo a??o',
        'this_year' => 'Este a??o',
        'next_year' => 'Pr??ximo a??o',
        'between' => 'Est?? entre',
    ),
    'numeric_range_search_dom' => array(
        '=' => 'Igual a',
        'not_equal' => 'No es Igual',
        'greater_than' => 'Mayor que',
        'greater_than_equals' => 'Mayor o Igual que',
        'less_than' => 'Menor que',
        'less_than_equals' => 'Menor o Igual a',
        'between' => 'Est?? entre',
    ),
    'lead_conv_activity_opt' => array(
        'copy' => 'Copiar',
        'move' => 'Mover',
        'donothing' => 'No hacer nada',
    ),
);

$app_strings = array(
    'LBL_SEARCH_REAULTS_TITLE' => 'Resultados',
    'ERR_SEARCH_INVALID_QUERY' => 'Se ha producido un error al realizar la b??squeda. La sintaxis de su consulta podr??a no ser v??lida.',
    'ERR_SEARCH_NO_RESULTS' => 'No hay resultados para su b??squeda. Int??ntelo de nuevo con otros criterios.',
    'LBL_SEARCH_PERFORMED_IN' => 'B??squeda realizada',
    'LBL_EMAIL_CODE' => 'Codigo Email:',
    'LBL_SEND' => 'Enviar',
    'LBL_LOGOUT' => 'Cerrar sesi??n',
    'LBL_LOGOUT_SUCCESS' => 'Inicio de sesi??n correcto',
    'LBL_TOUR_NEXT' => 'Siguiente',
    'LBL_TOUR_SKIP' => 'Saltar',
    'LBL_TOUR_BACK' => 'Atr??s',
    'LBL_TOUR_TAKE_TOUR' => 'Visita guiada',
    'LBL_MOREDETAIL' => 'M??s Detalles' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Editar en l??nea' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'Ver' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'Filtro' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'A??adir' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD_EMAIL' => 'Agregar Correo Electr??nico' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'Ocultar/Mostrar' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Eliminar' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'Limpiar' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'Quitar' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE_EMAIL' => 'Eliminar Correo Electr??nico' /*for 508 compliance fix*/,
    'LBL_ID_FF_OPT_OUT' => 'Salida Opcional',
    'LBL_ID_FF_INVALID' => 'Hacer Inv??lido',
    'LBL_ADD' => 'A??adir' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'Logo de la Compa??ia' /*for 508 compliance fix*/,
    'LBL_CONNECTORS_POPUPS' => 'Conectores Popups',
    'LBL_CLOSEINLINE' => 'Cerrar',
    'LBL_VIEWINLINE' => 'Ver',
    'LBL_INFOINLINE' => 'Informaci??n',
    'LBL_PRINT' => 'Imprimir',
    'LBL_HELP' => 'Ayuda',
    'LBL_ID_FF_SELECT' => 'Seleccionar',
    'DEFAULT' => 'B??sica',
    'LBL_SORT' => 'Ordenar',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => '??Habilitar SMTP sobre SSL o TLS?',
    'LBL_NO_ACTION' => 'No hay ninguna acci??n para ese nombre: %s',
    'LBL_NO_SHORTCUT_MENU' => 'No hay acciones disponibles.',
    'LBL_NO_DATA' => 'Sin datos',

    'LBL_ROUTING_FLAGGED' => 'conjunto de marcas de seguimiento',
    'LBL_ROUTING_TO' => 'para',
    'LBL_ROUTING_TO_ADDRESS' => 'a la direcci??n',
    'LBL_ROUTING_WITH_TEMPLATE' => 'con la plantilla',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Los campos Tel??fono y Direcci??n de su formulario ya tienen valor asignado. Para sobrescribir dichos valores con el tel??fono/direcci??n de la Cuenta que ha seleccionado, haga clic en "Aceptar". Para mantener los valores actuales, haga clic en "Cancelar"',
    'LBL_DROP_HERE' => '[Soltar Aqu??]',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Establecer configuraci??n para Gmail&#153;',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'Nombre',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Propiedades del servidor de correo saliente',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'Contrase??a SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'Puerto SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'Servidor SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'Nombre de usuario SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'Predeterminado',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Aviso: Falta el nombre de usuario y la contrase??a para la cuenta de correo saliente',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'Configurar Cuentas de Correo para ver correos entrantes de sus cuentas de correo',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Proporcionar informaci??n del servidor de correo SMTP a utilizar para el correo saliente en Cuentas de Correo',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'Hecho',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Borrar',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'Para:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'Cc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Cco:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'Para/Cc/Cco',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'e-Mail',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Filtro',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Nombre',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'No se han encontrado ninguna direcci??n',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Guardar y Agregar a la Libreta de Direcciones',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'Seleccionar Destinatarios de Correo',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Libreta de Direcciones',
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => '??Aviso! La cuenta de correo saliente que est?? intentando eliminar est?? asociada a una cuenta de correo entrante existente.  ??Est?? seguro de que quiere continuar?',
    'LBL_EMAIL_ADDRESSES' => 'e-Mail',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'e-Mail',
    'LBL_EMAIL_ADDRESS_OPT_IN' => 'Ha confirmado que su direcci??n de correo ha sido habilitada: ',
    'LBL_EMAIL_ADDRESS_OPT_IN_ERR' => 'Imposible confirmar direcci??n de correo electr??nico',
    'LBL_EMAIL_ARCHIVE_TO_SUITE' => 'Importar a SuiteCRM',
    'LBL_EMAIL_ASSIGNMENT' => 'Asignaci??n',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Adjuntar',
    'LBL_EMAIL_ATTACHMENT' => 'Adjuntar',
    'LBL_EMAIL_ATTACHMENTS' => 'Desde el equipo local',
    'LBL_EMAIL_ATTACHMENTS2' => 'Desde Documentos SuiteCRM',
    'LBL_EMAIL_ATTACHMENTS3' => 'Adjuntos de Plantilla',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'Archivo',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Documento',
    'LBL_EMAIL_BCC' => 'CCO',
    'LBL_EMAIL_CANCEL' => 'Cancelar',
    'LBL_EMAIL_CC' => 'CC',
    'LBL_EMAIL_CHARSET' => 'Juego de caracteres',
    'LBL_EMAIL_CHECK' => 'Comprobar correo',
    'LBL_EMAIL_CHECKING_NEW' => 'Comprobando correo nuevo',
    'LBL_EMAIL_CHECKING_DESC' => 'Un momento, por favor... <br><br>Si es la primera comprobaci??n para esta cuenta de correo, puede tardar un poco',
    'LBL_EMAIL_CLOSE' => 'Cerrar',
    'LBL_EMAIL_COFFEE_BREAK' => 'Comprobando Correo Nuevo. <br><br>Las cuentas de correo con gran volumen pueden tardar una cantidad considerable de tiempo',

    'LBL_EMAIL_COMPOSE' => 'Correo',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Por favor, introduzca los destinatario(s) de este correo electr??nico.',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'El cuerpo de este mensaje est?? vac??o.  ??Enviar de todas formas?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'Este mensaje no tiene asunto.  ??Enviar de todas formas?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(sin asunto)',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Por favor, introduzca una direcci??n de correo v??lida para los campos Para, CC y CCO',

    'LBL_EMAIL_CONFIRM_CLOSE' => '??Descartar este correo?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => '??Est?? seguro de que desea eliminar esta firma?',

    'LBL_EMAIL_SENT_SUCCESS' => 'Correo electr??nico enviado',

    'LBL_EMAIL_CREATE_NEW' => '--Crear Al Guardar--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'M??ltiple',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Vac??o',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Fecha de Env??o por Remitente',
    'LBL_EMAIL_DATE_TODAY' => 'Hoy',
    'LBL_EMAIL_DELETE' => 'Eliminar',
    'LBL_EMAIL_DELETE_CONFIRM' => '??Eliminar mensajes seleccionados?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'e-Mail eliminado satisfactoriamente',
    'LBL_EMAIL_DELETING_MESSAGE' => 'Eliminando mensaje',
    'LBL_EMAIL_DETAILS' => 'Detalles',

    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'S??lo se utilizar?? la direcci??n principal de cada contacto',

    'LBL_EMAIL_EMPTYING_TRASH' => 'Vaciando papelera',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'Eliminando servidor saliente',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Limpiando archivos de la cach??',
    'LBL_EMAIL_EMPTY_MSG' => 'No hay correo electr??nico para mostrar.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'No hay direcciones de correo electr??nico para mostrar.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'El nombre de carpeta debe ser ??nico y no vac??o. Por favor, int??ntelo de nuevo.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'No puede borrarse la carpeta. O la carpeta o sus hijos tienen correos o una bandeja de correo asociada',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'No se ha podido determinar la carpeta pretendida a partir del contexto. Int??ntelo de nuevo',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Por favor, compruebe su configuraci??n',
    'LBL_EMAIL_ERROR_DESC' => 'Se han detectado errores: ',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'No tiene acceso a este ??rea. Contacte con el administrador del sitio para obtener acceso',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'Los nombres de carpetas SuiteCRM deben ser ??nicos.',
    'LBL_EMAIL_ERROR_EMPTY' => 'Por favor, introduzca alg??n criterio de b??squeda',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'Ha ocurrido un error',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Mensaje eliminado del servidor',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'O el mensaje se ha eliminado en el servidor o ha sido movido a otra carpeta',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'La conexi??n con el servidor de correo ha fallado. Por favor, contacte con su Administrador',
    'LBL_EMAIL_ERROR_MOVE' => 'De momento no est?? soportado el mover correo entre servidores y/o cuentas de correo',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Error al mover',
    'LBL_EMAIL_ERROR_NAME' => 'Se requiere un nombre.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'Se requiere la Direcci??n del Remitente. Por favor, introduzca una direcci??n de correo v??lida.',
    'LBL_EMAIL_ERROR_NO_FILE' => 'Por favor, proporcione un archivo.',
    'LBL_EMAIL_ERROR_SERVER' => 'Se requiere una direcci??n de servidor de correo.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'La cuenta de correo puede no haber sido guardada.',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'Ha ocurrido un error en la comunicaci??n con el servidor de correo.',
    'LBL_EMAIL_ERROR_USER' => 'Se requiere un nombre de inicio de sesi??n.',
    'LBL_EMAIL_ERROR_PORT' => 'Se requiere un puerto del servidor de correo.',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'Se requiere un protocolo en el servidor.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'Se requiere una Carpeta Monitorizada.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'Se requiere una Carpeta de Papelera.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Esta informaci??n no set?? disponible',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'No se ha especificado un servidor de correo saliente.',
    'LBL_EMAIL_ERROR_SENDING' => 'Error al enviar el correo electr??nico. P??ngase en contacto con su administrador para obtener ayuda.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, '.gif', '') . 'Carpetas',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, '.gif', ''),
    'LBL_EMAIL_FOLDERS_ADD' => 'Agregar',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Agregar nueva carpeta',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Renombrar carpeta',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'Guardar',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'Agregar esta carpeta a',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Esta carpeta no puede ser cambiada',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => '??Est?? seguro de que quiere eliminar esta carpeta?\nEste proceso no puede ser vuelto atr??s.\nLa eliminaci??n de carpetas se aplicar?? en cascada a todas las carpetas contenidas',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'Nombre de la nueva carpeta',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Por favor, seleccione una carpeta antes de realizar esta acci??n',
    'LBL_EMAIL_FOLDERS_TITLE' => 'Administraci??n de carpetas',

    'LBL_EMAIL_FORWARD' => 'Reenviar',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => '[[count]] de [[total]] emails descargados',
    'LBL_EMAIL_FROM' => 'De',
    'LBL_EMAIL_GROUP' => 'grupo',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'Grupo',
    'LBL_EMAIL_HOME_FOLDER' => 'Inicio',
    'LBL_EMAIL_IE_DELETE' => 'Eliminando cuenta de correo',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'Eliminando firma',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => '??Est?? seguro de que desea eliminar esta cuenta de correo?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Borrado satisfactorio.',
    'LBL_EMAIL_IE_SAVE' => 'Guardando informaci??n de cuenta de correo',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'Importando e-Mail',
    'LBL_EMAIL_IMPORT_EMAIL' => 'Importar en SuiteCRM',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'Configuraci??n de Importaci??n',
    'LBL_EMAIL_INVALID' => 'Inv??lido',
    'LBL_EMAIL_LOADING' => 'Cargando...',
    'LBL_EMAIL_MARK' => 'Marcar',
    'LBL_EMAIL_MARK_FLAGGED' => 'Como etiquetado',
    'LBL_EMAIL_MARK_READ' => 'Como le??do',
    'LBL_EMAIL_MARK_UNFLAGGED' => 'Como no etiquetado',
    'LBL_EMAIL_MARK_UNREAD' => 'Como no le??do',
    'LBL_EMAIL_ASSIGN_TO' => 'Asignar a',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'Crear carpeta',
    'LBL_EMAIL_MENU_COMPOSE' => 'Redactar para',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Eliminar carpeta',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Vaciar papelera',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Sincronizar',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Limpiar archivos de cach??',
    'LBL_EMAIL_MENU_REMOVE' => 'Quitar',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Renombrar carpeta',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Renombrando carpeta',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Por favor, realice una selecci??n antes de intentar esta operaci??n',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Crear una Carpeta (remota o en SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Eliminar una Carpeta (remota o en SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Vac??a todas las carpetas de Papelera de sus cuentas de correo',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Marcar estos emails como le??dos',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Marcar estos emails no etiquetados',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Renombrar una Carpeta (remota o en SuiteCRM)',

    'LBL_EMAIL_MESSAGES' => 'mensajes',

    'LBL_EMAIL_ML_NAME' => 'Nombre de la lista',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'Lista de Direcciones Seleccionada',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'Lista de direcciones  disponibles',

    'LBL_EMAIL_MULTISELECT' => '<b>Ctrl-Clic</b> para seleccionar m??ltiples<br />(los usuarios de Mac pueden usar <b>CMD-Clic</b>)',

    'LBL_EMAIL_NO' => 'No',
    'LBL_EMAIL_NOT_SENT' => 'El sistema no puede procesar su petici??n. Por favor, p??ngase en contacto con el administrador del sistema',

    'LBL_EMAIL_OK' => 'Aceptar',
    'LBL_EMAIL_ONE_MOMENT' => 'Un momento, por favor...',
    'LBL_EMAIL_OPEN_ALL' => 'Abrir m??ltiples mensajes',
    'LBL_EMAIL_OPTIONS' => 'Opciones',
    'LBL_EMAIL_QUICK_COMPOSE' => 'Redacci??n r??pida',
    'LBL_EMAIL_OPT_OUT' => 'Rehusado',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Rehusado e inv??lido',
    'LBL_EMAIL_PERFORMING_TASK' => 'Realizando tarea',
    'LBL_EMAIL_PRIMARY' => 'Principal',
    'LBL_EMAIL_PRINT' => 'Imprimir',

    'LBL_EMAIL_QC_BUGS' => 'Incidencia',
    'LBL_EMAIL_QC_CASES' => 'Caso',
    'LBL_EMAIL_QC_LEADS' => 'Cliente potencial',
    'LBL_EMAIL_QC_CONTACTS' => 'Contacto',
    'LBL_EMAIL_QC_TASKS' => 'Tarea',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'Oportunidad',
    'LBL_EMAIL_QUICK_CREATE' => 'Creaci??n R??pida',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'Reconstruyendo carpetas',
    'LBL_EMAIL_RELATE_TO' => 'Relacionar con',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'Ver relaciones',
    'LBL_EMAIL_RECORD' => 'Registro de e-Mail',
    'LBL_EMAIL_REMOVE' => 'Quitar',
    'LBL_EMAIL_REPLY' => 'Responder',
    'LBL_EMAIL_REPLY_ALL' => 'Responder a todos',
    'LBL_EMAIL_REPLY_TO' => 'Responder a',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Recuperando mensaje',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'Recuperando registro de e-Mail',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'Por favor, seleccione un ??nico registro de e-Mail',
    'LBL_EMAIL_RETURN_TO_VIEW' => '??Volver al m??dulo anterior?',
    'LBL_EMAIL_REVERT' => 'Revertir',
    'LBL_EMAIL_RELATE_EMAIL' => 'Relacionar e-Mail',

    'LBL_EMAIL_RULES_TITLE' => 'Administraci??n de reglas',

    'LBL_EMAIL_SAVE' => 'Guardar',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'Guardar y responder',
    'LBL_EMAIL_SAVE_DRAFT' => 'Guardar borrador',
    'LBL_EMAIL_DRAFT_SAVED' => 'El borrador ha sido guardado',

    'LBL_EMAIL_SEARCH' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null,    '.gif', ''),
    'LBL_EMAIL_SEARCH_SHORT' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null,        null, '.gif', ''),
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'Fecha desde',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Fecha hasta',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'No hay resultados para sus criterios de b??squeda',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Resultados de la b??squeda',

    'LBL_EMAIL_SELECT' => 'Seleccionar',

    'LBL_EMAIL_SEND' => 'Enviar',
    'LBL_EMAIL_SENDING_EMAIL' => 'Enviando e-Mail ',

    'LBL_EMAIL_SETTINGS' => 'Configuraci??n',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'Cuentas de correo',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Limpiar formulario',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Comprobar e-Mail nuevo',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'Direcci??n de remitente',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Direcci??n para notificaci??n de prueba:',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'Nombre del remitente',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Direcci??n de respuesta a',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Sincronizar Todas las cuentas de e-Mail',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'Se ha enviado un correo electr??nico a la direcci??n  utilizando la configuraci??n de correo saliente proporcionada. Por favor, compruebe si ha recibido el correo para verificar que la configuraci??n es correcta',
    'LBL_EMAIL_TEST_SEE_FULL_SMTP_LOG' => 'Ver registro de SMTP completo',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => '??Realizar una sincronizaci??n completa?\nPara cuentas de correo grandes, puede durar varios minutos',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Haga clic en la tecla Shift o en la tecla Ctrl para seleccionar carpetas m??ltiples',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'General',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Crear carpetas de grupo',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Editar carpetas de grupo',

    'LBL_EMAIL_SETTINGS_NAME' => 'Nombre de cuenta de e-Mail',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Seleccione el n??mero de correos por p??gina en la bandeja de entrada. Estas opciones pueden requerir de un refresco de p??gina para ser activadas',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Recuperando e-Mail de cuenta',
    'LBL_EMAIL_SETTINGS_SAVED' => 'Los ajustes han sido grabados.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Enviar s??lo e-Mails con texto plano',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'e-Mails por p??gina',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Configuraci??n visual',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Preferencias',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Carpetas de usuario disponibles',
    'LBL_EMAIL_ERROR_PREPEND' => 'Se produjo un error de correo electr??nico:',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'El servidor de correo saliente seleccionado para la cuenta de correo que est?? utilizando no es v??lido.  Compruebe la configuraci??n o seleccione un servidor de correo distinto para la cuenta',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'No se ha configurado un servidor de correo saliente para la cuenta de correo que est?? utilizando. Por favor, seleccione o agregue un servidor de correo saliente para la cuenta',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => 'Firma predeterminada',
    'LBL_EMAIL_SIGNATURES' => 'Firmas',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Correo Yahoo',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Otro',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[ Carpetas remotas ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[ Carpetas de SuiteCRM ]',
    'LBL_EMAIL_SUBJECT' => 'Asunto',
    'LBL_EMAIL_SUCCESS' => '??xito',
    'LBL_EMAIL_SUITE_FOLDER' => 'Carpeta de SuiteCRM',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'El cuerpo de la plantilla',
    'LBL_EMAIL_TEMPLATES' => 'Plantillas',
    'LBL_EMAIL_TO' => 'Para',
    'LBL_EMAIL_VIEW' => 'Ver',
    'LBL_EMAIL_VIEW_HEADERS' => 'Mostrar cabeceras',
    'LBL_EMAIL_VIEW_RAW' => 'Mostrar c??digo fuente del e-Mail',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'Esta caracter??stica no est?? soportada cuando se usa POP3',
    'LBL_DEFAULT_LINK_TEXT' => 'Texto de enlace predeterminado',
    'LBL_EMAIL_YES' => 'S??',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Enviar e-Mail de prueba',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'e-Mail de prueba enviado',
    'LBL_EMAIL_MESSAGE_NO' => 'Mensaje N??',
    'LBL_EMAIL_IMPORT_SUCCESS' => 'Importaci??n exitosa',
    'LBL_EMAIL_IMPORT_FAIL' => 'Importaci??n fallida debido a que el mensaje ya ha sido importado o eliminado del servidor',

    'LBL_LINK_NONE' => 'Ninguno',
    'LBL_LINK_ALL' => 'Todos',
    'LBL_LINK_RECORDS' => 'Registros',
    'LBL_LINK_SELECT' => 'Seleccionar',
    'LBL_LINK_ACTIONS' => 'ACCIONES',
    'LBL_CLOSE_ACTIVITY_HEADER' => 'Confirmar',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => '??Desea cerrar este #module#?',
    'LBL_INVALID_FILE_EXTENSION' => 'Extensi??n de archivo inv??lida',

    'ERR_AJAX_LOAD' => 'Ha ocurrido un error:',
    'ERR_AJAX_LOAD_FAILURE' => 'Ha ocurrido un error al procesar su petici??n, por favor int??nte de nuevo m??s tarde.',
    'ERR_AJAX_LOAD_FOOTER' => 'Si persiste el error, por favor solicite al administrador que deshabilite Ajax para este m??dulo',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'No puede utilizarse el mismo car??cter como separador decimal que el utilizado como separador de miles.\n\n  Por favor, cambie los valores.',
    'ERR_DELETE_RECORD' => 'Debe especificar un n??mero de registro para eliminar el contacto',
    'ERR_EXPORT_DISABLED' => 'Exportaci??n deshabilitada',
    'ERR_EXPORT_TYPE' => 'Error exportando',
    'ERR_INVALID_EMAIL_ADDRESS' => 'no es una direcci??n de correo v??lida',
    'ERR_INVALID_FILE_REFERENCE' => 'Referencia a archivo no v??lida',
    'ERR_NO_HEADER_ID' => 'Esta funcionalidad no est?? disponible con este tema',
    'ERR_NOT_ADMIN' => 'Acceso no autorizado a la administraci??n',
    'ERR_UNAUTHORIZED_PAGE_ACCESS' => 'No est?? autorizado a ver esta p??gina. P??ngase en contacto con el administrador del sistema.',
    'ERR_UNAUTHORIZED_PAGE_ACCESS_TO_HOME_PAGE' => 'No est?? autorizado a ver esta p??gina. Redirigiendo a la P??gina de Inicio...',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Falta campo requerido:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Campo requerido no v??lido:',
    'ERR_INVALID_VALUE' => 'Valor no v??lido:',
    'ERR_NO_SUCH_FILE' => 'El archivo no existe en el sistema',
    'ERR_NO_SINGLE_QUOTE' => 'No podemos utilizar las comillas simples para',
    'ERR_NOTHING_SELECTED' => 'Por favor, realice una selecci??n antes de proceder',
    'ERR_SELF_REPORTING' => 'Un usuario no puede ser informador de si mismo',
    'ERR_SQS_NO_MATCH_FIELD' => 'No se han encontrado coincidencias para el campo:',
    'ERR_SQS_NO_MATCH' => 'Sin coincidencias',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Por favor, especifique el ??ndice \'clave\' en el atributo displayParams para la definici??n de Meta-Datos',
    'ERR_EXISTING_PORTAL_USERNAME' => 'Error: El Nombre de Portal ya ha sido asignado a otro contacto',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'El valor del campo no es compatible con el tipo de precisi??n',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'Un error ha ocurrido cuando se intentaba guardar la cuenta externa',
    'ERR_NO_DB' => 'No se pudo conectar a la base de datos. Consulte suitecrm.log para obtener m??s informaci??n.',
    'ERR_DB_FAIL' => 'Falla de base de datos. Consulte suitecrm.log para obtener m??s informaci??n.',
    'ERR_DB_VERSION' => 'SuiteCRM {0} archivos s??lo pueden utilizarse con una base de datos de {1} de SuiteCRM.',

    'LBL_ACCOUNT' => 'Cuenta',
    'LBL_ACCOUNTS' => 'Cuentas',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Actividades',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Ver resumen',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Ver resumen',
    'LBL_ADD_BUTTON' => 'Agregar',
    'LBL_ADD_DOCUMENT' => 'Agregar Documento',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Agregar a lista de p??blico objetivo',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'Agregar contactos a lista P??blico objetivo',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Click para cerrar',
    'LBL_ADDITIONAL_DETAILS' => 'Detalles adicionales',
    'LBL_ADMIN' => 'Administrador',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Archivo',
    'LBL_ASSIGNED_TO_USER' => 'Asignado a usuario',
    'LBL_ASSIGNED_TO' => 'Asignado a:',
    'LBL_BACK' => 'Atr??s',
    'LBL_BILLING_ADDRESS' => 'Direcci??n de facturaci??n',
    'LBL_QUICK_CREATE' => 'Creada ',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - Open Source CRM',
    'LBL_BUGS' => 'Incidencias',
    'LBL_BY' => 'por',
    'LBL_CALLS' => 'Llamadas',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Enviar e-Mails de campa??a encolados',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Enviar',
    'LBL_CASE' => 'Caso',
    'LBL_CASES' => 'Casos',
    'LBL_CHANGE_PASSWORD' => 'Cambiar contrase??a',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHARTS' => 'Gr??ficos',
    'LBL_QUICK_CHARTS' => 'Gr??ficos r??pidos',
    'LBL_QUICK_HISTORY' => 'L??nea de tiempo',
    'LBL_CHECKALL' => 'Marcar Todos',
    'LBL_CITY' => 'Ciudad',
    'LBL_CLEAR_BUTTON_LABEL' => 'Limpiar',
    'LBL_CLEAR_BUTTON_TITLE' => 'Limpiar',
    'LBL_CLEARALL' => 'Desmarcar todos',
    'LBL_CLOSE_BUTTON_TITLE' => 'Cerrar',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Cerrar y crear nuevo',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Cerrar y crear nuevo',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Abrir elementos',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Redactar e-Mail',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Redactar e-Mail',
    'LBL_SEARCH_DROPDOWN_YES' => 'S??',
    'LBL_SEARCH_DROPDOWN_NO' => 'No',
    'LBL_CONTACT_LIST' => 'Lista de contactos',
    'LBL_CONTACT' => 'Contacto',
    'LBL_CONTACTS' => 'Contactos',
    'LBL_CONTRACT' => 'Contrato',
    'LBL_CONTRACTS' => 'Contratos',
    'LBL_COUNTRY' => 'Pa??s:',
    'LBL_CREATE_BUTTON_LABEL' => 'Nuevo',
    'LBL_CREATED_BY_USER' => 'Creado por usuario',
    'LBL_CREATED_USER' => 'Creado por usuario',
    'LBL_CREATED' => 'Creado por',
    'LBL_CURRENT_USER_FILTER' => 'Mis art??culos',
    'LBL_CURRENCY' => 'Moneda:',
    'LBL_DOCUMENTS' => 'Documentos',
    'LBL_DATE_ENTERED' => 'Fecha de creaci??n:',
    'LBL_DATE_MODIFIED' => 'Fecha de modificaci??n:',
    'LBL_EDIT_BUTTON' => 'Editar',
    'LBL_DUPLICATE_BUTTON' => 'Duplicar',
    'LBL_DELETE_BUTTON' => 'Eliminar',
    'LBL_DELETE' => 'Eliminar',
    'LBL_DELETED' => 'Eliminado',
    'LBL_DIRECT_REPORTS' => 'Informa a',
    'LBL_DONE_BUTTON_LABEL' => 'Hecho',
    'LBL_DONE_BUTTON_TITLE' => 'Hecho',
    'LBL_FAVORITES' => 'Favoritos',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'Por favor, seleccione un archivo vCard',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard no tiene todos los campos obligatorios de este m??dulo. Consulte suitecrm.log para obtener m??s informaci??n.',
    'LBL_VCARD_ERROR_FILESIZE' => 'El archivo excede el l??mite de tama??o de 30000 bytes que se especific?? en el formulario HTML.',
    'LBL_VCARD_ERROR_DEFAULT' => 'Hubo un error al subir el archivo vCard. Por favor consulte suitecrm.log para m??s detalles.',
    'LBL_IMPORT_VCARD' => 'Importar una vCard:',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Importar una vCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Importar una vCard',
    'LBL_VIEW_BUTTON' => 'Ver',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Enviar como PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Enviar como PDF',
    'LBL_EMAILS' => 'e-Mails',
    'LBL_EMPLOYEES' => 'Empleados',
    'LBL_ENTER_DATE' => 'Introducir fecha',
    'LBL_EXPORT' => 'Exportar',
    'LBL_FAVORITES_FILTER' => 'Mis Favoritos',
    'LBL_GO_BUTTON_LABEL' => 'Adelante',
    'LBL_HIDE' => 'Ocultar',
    'LBL_HISTORY' => 'Historial',
    'LBL_NEW' => 'Nuevo',
    'LBL_ID' => 'ID',
    'LBL_IMPORT' => 'Importar',
    'LBL_IMPORT_STARTED' => 'Importaci??n iniciada:',
    'LBL_LAST_VIEWED' => 'Recientes',
    'LBL_LEADS' => 'Clientes potenciales',
    'LBL_LESS' => 'menos',
    'LBL_CAMPAIGN' => 'Campa??a:',
    'LBL_CAMPAIGNS' => 'Campa??as',
    'LBL_CAMPAIGNLOG' => 'Registro de campa??as',
    'LBL_CAMPAIGN_CONTACT' => 'Campa??as',
    'LBL_CAMPAIGN_ID' => 'campaign_id',
    'LBL_CAMPAIGN_NONE' => 'Ninguno',
    'LBL_THEME' => 'Tema:',
    'LBL_FOUND_IN_RELEASE' => 'Encontrado en versi??n',
    'LBL_FIXED_IN_RELEASE' => 'Corregido en versi??n',
    'LBL_LIST_ACCOUNT_NAME' => 'Nombre de la cuenta',
    'LBL_LIST_ASSIGNED_USER' => 'Usuario',
    'LBL_LIST_CONTACT_NAME' => 'Nombre de contacto',
    'LBL_LIST_CONTACT_ROLE' => 'Rol de contacto',
    'LBL_LIST_DATE_ENTERED' => 'Fecha de creaci??n',
    'LBL_LIST_EMAIL' => 'e-Mail',
    'LBL_LIST_NAME' => 'Nombre',
    'LBL_LIST_OF' => 'de',
    'LBL_LIST_PHONE' => 'Tel??fono',
    'LBL_LIST_RELATED_TO' => 'Relacionado con',
    'LBL_LIST_USER_NAME' => 'Nombre de usuario',
    'LBL_LISTVIEW_NO_SELECTED' => 'Por favor, seleccione al menos 1 registro para proceder',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Por favor, seleccione al menos 2 registros para proceder',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Registros seleccionados',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Seleccionados: ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'Juan',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'P??rez',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Dr.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Mago del C??digo Fuente',
    'LBL_CANCEL' => 'Cancelar',
    'LBL_VERIFY' => 'Verificar',
    'LBL_RESEND' => 'Reenviar',
    'LBL_RECORD_DOES_NOT_EXIST' => 'Error al recuperar el registro.  Este registro ha sido eliminado o puede que no est?? autorizado para verlo',
    'LBL_PROFILE' => 'Perfil',
    'LBL_MAILMERGE' => 'Combinar correspondencia',
    'LBL_MASS_UPDATE' => 'Actualizaci??n masiva',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'No hay campos disponibles para la operaci??n de actualizaci??n masiva.',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Rehusar para e-Mail principal',
    'LBL_OPT_IN_FLAG_PRIMARY' => 'Autorizar con e-mail principal',
    'LBL_MEETINGS' => 'Reuniones',
    'LBL_MEETING_GO_BACK' => 'Volver a la reuni??n',
    'LBL_MEMBERS' => 'Miembros',
    'LBL_MEMBER_OF' => 'Miembro de',
    'LBL_MODIFIED_BY_USER' => 'Modificado por usuario',
    'LBL_MODIFIED_USER' => 'Modificado por usuario',
    'LBL_MODIFIED' => 'Modificado por',
    'LBL_MODIFIED_NAME' => 'Modificado por nombre',
    'LBL_MORE' => 'M??s',
    'LBL_MY_ACCOUNT' => 'Mi Configuraci??n',
    'LBL_NAME' => 'Nombre',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Nuevo',
    'LBL_NEW_BUTTON_TITLE' => 'Nuevo',
    'LBL_EDIT' => 'Editar',
    'LBL_NEXT_BUTTON_LABEL' => 'Siguiente',
    'LBL_NONE' => '-Ninguno-',
    'LBL_NOTES' => 'Notas',
    'LBL_OPPORTUNITIES' => 'Oportunidades',
    'LBL_OPPORTUNITY_NAME' => 'Nombre de oportunidad',
    'LBL_OPPORTUNITY' => 'Oportunidad',
    'LBL_OR' => 'O',
    'LBL_PANEL_OVERVIEW' => 'Informaci??n de la cuenta',
    'LBL_PANEL_ASSIGNMENT' => 'OTRO',
    'LBL_PANEL_ADVANCED' => 'M??S INFORMACI??N',
    'LBL_PARENT_TYPE' => 'Tipo de padre',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_POSTAL_CODE' => 'C??digo postal:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Ciudad de direcci??n principal:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Pa??s de direcci??n principal:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'C??digo postal de direcci??n principal:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Estado/Provincia de direcci??n principal:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Calle de direcci??n principal 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Calle de direcci??n principal 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Calle de direcci??n principal:',
    'LBL_PRIMARY_ADDRESS' => 'Direcci??n principal:',

    'LBL_PROSPECTS' => 'Prospectos',
    'LBL_PRODUCTS' => 'Productos',
    'LBL_PROJECT_TASKS' => 'Tareas de proyecto',
    'LBL_PROJECTS' => 'Proyectos',
    'LBL_QUOTES' => 'Cotizaciones',

    'LBL_RELATED' => 'Relacionado',
    'LBL_RELATED_RECORDS' => 'Registros relacionados',
    'LBL_REMOVE' => 'Quitar',
    'LBL_REPORTS_TO' => 'Informar a',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Indique un campo obligatorio',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Hecho',
    'LBL_FULL_FORM_BUTTON_KEY' => 'F',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Formulario completo',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Formulario completo',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Guardar y crear nuevo',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Guardar y crear nuevo',
    'LBL_SAVE_OBJECT' => 'Guardar {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'B??squeda',
    'LBL_SEARCH_BUTTON_TITLE' => 'B??squeda',
    'LBL_FILTER' => 'Filtro',
    'LBL_SEARCH' => 'B??squeda',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => 'm??s',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Formato de archivo inv??lido. S??lo archivos de imagen pueden ser subidos',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Seleccionar',
    'LBL_SELECT_BUTTON_TITLE' => 'Seleccionar',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Explorar documentos',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Explorar documentos',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Seleccionar contacto',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Seleccionar contacto',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Seleccionar desde reportes',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'S??lectionner reportes',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Seleccionar usuario',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Seleccionar usuario',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Limpiar selecci??n',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Limpiar selecci??n',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Limpiar selecci??n',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Limpiar selecci??n',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Seleccionar archivo',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Seleccionar archivo',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Limpiar archivo',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Limpiar archivo',

    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Seleccionar usuario',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Seleccionar usuario',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Limpiar usuario',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Limpiar usuairo',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Seleccionar cuenta',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Seleccionar cuenta',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Limpiar Cuenta',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Limpiar Cuenta',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'Seleccionar campa??a',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'Seleccionar campa??a',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Limpiar campa??a',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Limpiar campa??a',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Seleccionar contacto',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Seleccionar contacto',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Limpiar contacto',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Limpiar contacto',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Seleccionar equipo',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Seleccionar equipo',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Limpiar equipo',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Limpiar equipo',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Recursos usados para construir esta p??gina (consultas, archivos)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'segundos.',
    'LBL_SERVER_RESPONSE_TIME' => 'Tiempo de respuesta del servidor:',
    'LBL_SERVER_MEMORY_BYTES' => 'bytes',
    'LBL_SERVER_MEMORY_USAGE' => 'Uso de la memoria del servidor: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Uso: - modulo: {0} - acci??n: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Uso de la memoria m??xima del servidor: {0} ({1})',
    'LBL_SHIPPING_ADDRESS' => 'Direcci??n de env??o',
    'LBL_SHOW' => 'Mostrar',
    'LBL_STATE' => 'Estado:',
    'LBL_STATUS_UPDATED' => '??Su estado para este evento ha sido actualizado!',
    'LBL_STATUS' => 'Estado:',
    'LBL_STREET' => 'Calle',
    'LBL_SUBJECT' => 'Asunto',

    'LBL_INBOUNDEMAIL_ID' => 'ID de e-Mail entrante',

    'LBL_SCENARIO_SALES' => 'Ventas',
    'LBL_SCENARIO_MARKETING' => 'Mercadotecnia',
    'LBL_SCENARIO_FINANCE' => 'Finanzas',
    'LBL_SCENARIO_SERVICE' => 'Servicio',
    'LBL_SCENARIO_PROJECT' => 'Gerente de Proyecto',

    'LBL_SCENARIO_SALES_DESCRIPTION' => 'Este escenario facilita la administraci??n de los elementos de ventas',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => 'Este escenario facilita la adminstraci??n de los elementos de marketing',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => 'Este escenario facilita la administraci??n de los elementos relacionados a finanzas',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => 'Este escenario facilita la administraci??n de los elementos relacionados a servicio',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => 'Este escenario facilita la administraci??n de los elementos relacionados a proyectos',

    'LBL_SYNC' => 'Sincronizar',
    'LBL_TABGROUP_ALL' => 'Todo',
    'LBL_TABGROUP_ACTIVITIES' => 'Actividades',
    'LBL_TABGROUP_COLLABORATION' => 'Colaboraci??n',
    'LBL_TABGROUP_MARKETING' => 'Marketing',
    'LBL_TABGROUP_OTHER' => 'Otro',
    'LBL_TABGROUP_SALES' => 'Ventas',
    'LBL_TABGROUP_SUPPORT' => 'Soporte',
    'LBL_TASKS' => 'Tareas',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archivar e-Mail',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archivar e-Mail',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Restaurar',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Restaurar',
    'LBL_UNDELETE_BUTTON' => 'Restaurar',
    'LBL_UNDELETE' => 'Restaurar',
    'LBL_UNSYNC' => 'Desincronizar',
    'LBL_UPDATE' => 'Actualizar',
    'LBL_USER_LIST' => 'Lista de usuarios',
    'LBL_USERS' => 'Usuarios',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'Comprobando la entrada de correo actual...',
    'LBL_VERIFY_PORTAL_NAME' => 'Comprobando el nombre de portal actual...',
    'LBL_VIEW_IMAGE' => 'ver',

    'LNK_ABOUT' => 'Acerca de',
    'LNK_ADVANCED_FILTER' => 'Filtro avanzado',
    'LNK_BASIC_FILTER' => 'Filtro r??pido',
    'LBL_ADVANCED_SEARCH' => 'Filtro avanzado',
    'LBL_QUICK_FILTER' => 'Filtro r??pido',
    'LBL_BASIC_FILTER' => 'Filtro b??sico',
    'LBL_QUICK' => 'R??pido',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Mostrar todo',
    'LNK_CLOSE' => 'Fecha de cierre',
    'LBL_MODIFY_CURRENT_FILTER' => 'Modificar filtro actual',
    'LNK_SAVED_VIEWS' => 'Opciones de dise??o',
    'LNK_DELETE' => 'Eliminar',
    'LNK_EDIT' => 'Editar',
    'LNK_GET_LATEST' => 'Obtener ??ltima',
    'LNK_GET_LATEST_TOOLTIP' => 'Reemplazar con ??ltima versi??n',
    'LNK_HELP' => 'Ayuda',
    'LNK_CREATE' => 'Crear',
    'LNK_LIST_END' => 'Fin',
    'LNK_LIST_NEXT' => 'Siguiente',
    'LNK_LIST_PREVIOUS' => 'Anterior',
    'LNK_LIST_RETURN' => 'Volver a la lista',
    'LNK_LIST_START' => 'Inicio',
    'LNK_LOAD_SIGNED' => 'Firmar',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'Reemplazar con documento firmado',
    'LNK_PRINT' => 'Imprimir',
    'LNK_BACKTOTOP' => 'Ir arriba',
    'LNK_REMOVE' => 'Quitar',
    'LNK_RESUME' => 'Continuar',
    'LNK_VIEW_CHANGE_LOG' => 'Ver registro de cambios',
    'LBL_CHANGE_LOG' => 'Lista de cambios',

    'NTC_CLICK_BACK' => 'Por favor, presione el bot??n anterior del navegador y corrija el error',
    'NTC_DATE_FORMAT' => '(aaaa-mm-dd)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => '??Est?? seguro que desea eliminar los registros seleccionados?',
    'NTC_TEMPLATE_IS_USED' => 'La plantilla se est?? utilizando en al menos un registro de marketing por e-Mail. ??Est?? seguro de que desea eliminarla?',
    'NTC_TEMPLATES_IS_USED' => 'Las siguientes plantillas se utilizan en los registros de marketing por correo electr??nico. ??Seguro que quieres eliminarlos?' . PHP_EOL,
    'NTC_DELETE_CONFIRMATION' => '??Est?? seguro que desea eliminar este registro?',
    'NTC_DELETE_CONFIRMATION_NUM' => '??Est?? seguro que desea eliminar los ',
    'NTC_UPDATE_CONFIRMATION_NUM' => '??Est?? seguro de que desea actualizar los ',
    'NTC_DELETE_SELECTED_RECORDS' => 'registro(s) seleccionado(s)?',
    'NTC_LOGIN_MESSAGE' => 'Por favor, introduzca su nombre de usuario y contrase??a.',
    'NTC_NO_ITEMS_DISPLAY' => 'ninguno',
    'NTC_REMOVE_CONFIRMATION' => '??Est?? seguro que desea eliminar esta relaci??n? Solo la relaci??n se eliminara. El registro no ser?? borrado.',
    'NTC_REQUIRED' => 'Indica un campo requerido',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Bienvenido',
    'NTC_YEAR_FORMAT' => '(aaaa)',
    'WARN_UNSAVED_CHANGES' => 'Est?? a punto de abandonar este registro sin guardar los cambios que haya podido realizar. ??Est?? seguro de que desea salir de este registro?',
    'ERROR_NO_RECORD' => 'Error al recuperar el registro.  Este registro ha sido eliminado o puede que no est?? autorizado para verlo',
    'WARN_BROWSER_VERSION_WARNING' => '<p><b>Aviso: </b>Su navegador o la versi??n de su navegador no es compatible.</p><p>Se recomiendan las siguientes versiones de navegadores:</p><ul><li>Internet Explorer 10 (Vista en compatibilidad no soportada)</li><li>Mozilla Firefox 32.0 </li><li>Safari 6</li><li>Google Chrome 37 (o superior)</li></ul>',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>Advertencia:</b> Su navegador est?? en modo compatibilidad IE el cual no es soportado.',
    'ERROR_TYPE_NOT_VALID' => 'Error. Este tipo no es v??lido',
    'ERROR_NO_BEAN' => 'Fall?? la obtenci??n del bean',
    'LBL_DUP_MERGE' => 'Buscar duplicados',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'Administrar suscripciones',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Administrar suscripciones a',
    // Ajax status strings
    'LBL_LOADING' => 'Cargando...',
    'LBL_SEARCHING' => 'Buscando...',
    'LBL_SAVING_LAYOUT' => 'Guardando dise??o...',
    'LBL_SAVED_LAYOUT' => 'El dise??o ha sido guardado',
    'LBL_SAVED' => 'Guardado',
    'LBL_SAVING' => 'Guardando',
    'LBL_DISPLAY_COLUMNS' => 'Mostrar columnas',
    'LBL_HIDE_COLUMNS' => 'Ocultar columnas',
    'LBL_COLUMNS' => 'Columnas',
    'LBL_SEARCH_CRITERIA' => 'Criterios de b??squeda',
    'LBL_SAVED_VIEWS' => 'Vistas guardadas',
    'LBL_PROCESSING_REQUEST' => 'Procesando...',
    'LBL_REQUEST_PROCESSED' => 'Hecho',
    'LBL_AJAX_FAILURE' => 'Fallo de Ajax',
    'LBL_MERGE_DUPLICATES' => 'Combinar',
    'LBL_SAVED_FILTER_SHORTCUT' => 'Mis filtros',
    'LBL_SEARCH_POPULATE_ONLY' => 'Realizar una b??squeda utilizando el formulario de b??squeda anterior',
    'LBL_DETAILVIEW' => 'Vista de detalle',
    'LBL_LISTVIEW' => 'Vista de lista',
    'LBL_EDITVIEW' => 'Vista de edici??n',
    'LBL_BILLING_STREET' => 'Calle:',
    'LBL_SHIPPING_STREET' => 'Calle:',
    'LBL_SEARCHFORM' => 'Formulario de b??squeda',
    'LBL_SAVED_SEARCH_ERROR' => 'Por favor, introduzca un nombre para esta vista',
    'LBL_DISPLAY_LOG' => 'Mostrar registro',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'Sistema',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Cierre de sesi??n',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Su sesi??n va a expirar en 2 minutos. Por favor, guarde su trabajo.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'Su sesi??n ha expirado',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "Agenda:",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Reuni??n',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Llamada',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Hora:',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Lugar:',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Descripci??n:',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Estado:',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Relacionado A: ',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nClick en aceptar para ver esta llamada o click en cancelar para quitar este mensaje",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\nClick en aceptar para ver esta reuni??n o click en cancelar para quitar este mensaje.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Evento',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'Aun no se ha programado alg??n evento.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'La ubicaci??n aun no se ha configurado.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'A??n no se establece la fecha de inicio.',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'No se encontraron resultados.',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => 'No se encontraron resultados... Tal vez cambiar tu criterio de b??squeda e int??ntarlo de nuevo?',
    'MSG_LIST_VIEW_NO_RESULTS' => 'No se encontraron resultados para <item1>',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Crear <item1> como un nuevo <item2>',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'o cambia tu criterio de b??squeda',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'Actualmente no tiene registros guardados. <item2> o <item3> uno.',

    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Agregar a mis favoritos',
    'LBL_CREATE_CONTACT' => 'Nuevo contacto',
    'LBL_CREATE_CASE' => 'Nuevo caso',
    'LBL_CREATE_NOTE' => 'Nueva nota',
    'LBL_CREATE_OPPORTUNITY' => 'Nueva oportunidad',
    'LBL_SCHEDULE_CALL' => 'Programar llamada',
    'LBL_SCHEDULE_MEETING' => 'Programar reuni??n',
    'LBL_CREATE_TASK' => 'Nueva tarea',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Generar formulario ',
    'LBL_SAVE_WEB_TO_LEAD_FORM' => 'Guardar Formulario Web A Cliente Potencial',
    'LBL_AVAILABLE_FIELDS' => 'Campos disponibles',
    'LBL_FIRST_FORM_COLUMN' => 'Primera columna del Formulario',
    'LBL_SECOND_FORM_COLUMN' => 'Segunda Columna del Formulario',
    'LBL_ASSIGNED_TO_REQUIRED' => 'Falta campo obligatorio: Asignado a',
    'LBL_RELATED_CAMPAIGN_REQUIRED' => 'Falta campo obligatorio: Relacionado a la campa??a',
    'LBL_TYPE_OF_PERSON_FOR_FORM' => 'Crear formulario Web ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC' => 'El env??o de este formulario crear?? ',

    'LBL_ADD_ALL_LEAD_FIELDS' => 'Agregar todos los campos',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'Restablecer todos los campos',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Quitar todos los campos',
    'LBL_NEXT_BTN' => 'Siguiente',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'S??lo puede incluirse un adjunto de tipo imagen',
    'LBL_TRAINING' => 'Foro de Soporte',
    'ERR_MSSQL_DB_CONTEXT' => 'Cambiado el contexto de base de datos a ',
    'ERR_MSSQL_WARNING' => 'Aviso:',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Error: No existe el archivo [[file]].  No se ha podido crear porque el archivo con el HTML correspondiente no ha sido encontrado',
    'ERR_CANNOT_FIND_MODULE' => 'Error: El m??dulo [module] no existe',
    'LBL_ALT_ADDRESS' => 'Otra direcci??n:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Error: Hay un n??mero de argumentos desigual para los elementos \'key\' y \'copy\' en el array displayParams',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'General',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtros',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'S??lo mis elementos',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'T??tulo',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Mostrar filas',

    // MySugar status strings
    'LBL_MAX_DASHLETS_REACHED' => 'Ha alcanzado el m??ximo n??mero de dashlets establecido por su administrador. Por favor, quite un Dashlet para poder agregar m??s.',
    'LBL_ADDING_DASHLET' => 'Agregando SuiteCRM Dashlet ...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet Agregado',
    'LBL_REMOVE_DASHLET_CONFIRM' => '??Est?? seguro de que desea quitar el SuiteCRM Dashlet?',
    'LBL_REMOVING_DASHLET' => 'Quitando SuiteCRM Dashlet ...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet Quitado',

    // MySugar Menu Options

    'LBL_LOADING_PAGE' => 'Cargando p??gina, espere por favor...',

    'LBL_RELOAD_PAGE' => 'Por favor, <a href="javascript: window.location.reload()">recargue la ventana</a> para usar este SuiteCRM Dashlet.',
    'LBL_ADD_DASHLETS' => 'Agregar Dashlets',
    'LBL_CLOSE_DASHLETS' => 'Cerrar',
    'LBL_OPTIONS' => 'Opciones',
    'LBL_1_COLUMN' => '1 columna',
    'LBL_2_COLUMN' => '2 columna',
    'LBL_3_COLUMN' => '3 columnas',
    'LBL_PAGE_NAME' => 'Nombre de p??gina',

    'LBL_SEARCH_RESULTS' => 'Resultados de b??squeda',
    'LBL_SEARCH_MODULES' => 'M??dulos',
    'LBL_SEARCH_TOOLS' => 'Herramientas',
    'LBL_SEARCH_HELP_TITLE' => 'Consejos de B??squeda',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Sin imagen',

    'LBL_MODULE' => 'M??dulo',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Copiar direcci??n de la izquierda:',
    'LBL_SAVE_AND_CONTINUE' => 'Guardar y continuar',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Controles multiselecci??n</strong></p><ul><li>Haga clic en los valores para seleccionar un atributo.</li><li>Ctrl-clic&nbsp;para&nbsp;seleccionar m??ltiples. Los usuarios de Mac usan CMD-clic.</li><li>Para seleccionar todos los valores entre dos atributos,&nbsp; haga clic en el primer valor&nbsp;y despu??s shift-clic en el ??ltimo.</li></ul><p><strong>B??squeda Avanzada y Opciones de Presentaci??n</strong><br><br>Usando la opci??n <b>B??squedas Guardadas y Presentaci??n</b>, puede guardar un conjunto de criterios de b??squeda y/o un dise??o de Vista de Lista para r??pidamente obtener los resultados de b??squeda deseados en un futuro. Puede guardar un n??mero ilimitad de b??squedas y dise??os. Todas las b??squedas guardadas aparecen con su nombre en la lista de B??squedas Guardadas, con la ??ltima b??squeda guardada en la parte superior de la lista.<br><br>Para personalizar el dise??o de Vista de Lista, utilice los cuadros de Ocultar Columnas y Mostrar Columnas para seleccionar los campos a mostrar en los resultados de la b??squeda. Por ejemplo, puede ver u ocultar detalles como el nombre del registro, el usuario asignado y el equipo asignado en los resultados de la b??squeda. Para agregar una columna a la Vista de Lista, seleccione el campo de la lista Ocultar Columnas y utilice la flecha izquierda para moverlo a la lista de Mostrar Columnas. Para eliminar una columna de la Vista de Lista, selecci??nela de la lista Mostrar Columnas y utilice la flecha derecha para moverla a la lista Ocultar Columnas.<br><br>Si guarda la configuraci??n de dise??o, podr?? cargarla en cualquier momento para ver los resultados de la b??squeda con la presentaci??n personalizada.<br><br>Para guardar y actualizar una b??squeda y/o dise??o:<ol><li>Introduzca un nombre para los resultados de b??squeda en el campo <b>Guardar esta b??squeda como</b> y haga clic en <b>Guardar</b>.Tras esto, el nombre se mostrar?? en la lista de B??squedas Guardadas junto al bot??n <b>Limpiar</b>.</li><li>Para ver una b??squeda guardada, selecci??nela de la lista de B??squedas Guardadas. Los resultados de b??squeda se mostrar??n en la Vista de Lista.</li><li>Para actualizar las propiedades de una b??squeda guardada, seleccione la b??squeda guardada de la lista, introduzca los nuevos criterios de b??squeda y/o las opciones de dise??o en el ??rea de B??squeda Avanzada, y haga clic en<b>Actualizar</b> junto a <b>Modificar B??squeda Actual</b>.</li><li>Para eliminar una b??squeda guardada, selecci??nela en la lista de B??squedas Guardadas, haga clic en <b>Eliminar</b> junto a <b>Modificar B??squeda Actual</b>, y haga clic en <b>Aceptar</b> para confirmar el borrado.</li></ol>',

    //resource management
    'ERR_QUERY_LIMIT' => 'Error: Se ha alcanzado el l??mite $limit de consultas para el m??dulo $module',
    'ERROR_NOTIFY_OVERRIDE' => 'Error: ResourceObserver->notify() necesita ser reemplazado.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Error: No se ha podido crear un monitor porque el archivo de metadatos est?? vac??o o no existe',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Error: No hay ning??n monitor configurado para el nombre solicitado',
    'ERR_UNDEFINED_METRIC' => 'Error: No se ha podido establecer un valor para una m??trica no definida',
    'ERR_STORE_FILE_MISSING' => 'Error: No se ha podido encontrar el archivo de implementaci??n de almacenamiento',

    'LBL_MONITOR_ID' => 'Id de monitor',
    'LBL_USER_ID' => 'Id de usuario',
    'LBL_MODULE_NAME' => 'Nombre de m??dulo',
    'LBL_ITEM_ID' => 'Id de elemento',
    'LBL_ITEM_SUMMARY' => 'Resumen de elemento',
    'LBL_ACTION' => 'Acci??n',
    'LBL_SESSION_ID' => 'Id de sesi??n',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack creado para el usuario id {0}',
    'LBL_VISIBLE' => 'Registro visible',
    'LBL_DATE_LAST_ACTION' => 'Fecha de ??ltima acci??n',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'no es antes de',
    'MSG_IS_MORE_THAN' => 'es m??s que',
    'MSG_SHOULD_BE' => 'deber??a ser',
    'MSG_OR_GREATER' => 'o mayor',

    'LBL_LIST' => 'Lista',
    'LBL_CREATE_BUG' => 'Nueva incidencia',

    'LBL_OBJECT_IMAGE' => 'imagen de objeto',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Seleccione fecha',

    'LBL_VALIDATE_RANGE' => 'no est?? dentro del rango v??lido',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Por favor seleccione un rango de fecha inicial y un rango de fecha final',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Por favor seleccione un rango de entrada de inicio y de finalizaci??n',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Todo',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Error: El n??mero de Arrays del par??metro bean no coincide con el n??mero de Arrays de los resultados',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Error: Falta la entrada de mapeo para el m??dulo',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Error: No ha sido posible obtener los datos para el conector {0}.  Puede que el servicio no est?? accesible en estos momentos o que los par??metros de configuraci??n no sean v??lidos.  Mensaje de error del conector: ({1})',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'Para unos resultados ??ptimos al utilizar el sapi IIS/FastCGI, establezca fastcgi.logging a 0 en su archivo php.ini',

    //Collection Field
    'LBL_COLLECTION_NAME' => 'Nombre',
    'LBL_COLLECTION_PRIMARY' => 'Principal',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'Campo obligatorio vac??o',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Asignado a',
    'LBL_DESCRIPTION' => 'Descripci??n',

    'LBL_YESTERDAY' => 'ayer',
    'LBL_TODAY' => 'hoy',
    'LBL_TOMORROW' => 'ma??ana',
    'LBL_NEXT_WEEK' => 'pr??xima semana',
    'LBL_NEXT_MONDAY' => 'pr??ximo lunes',
    'LBL_NEXT_FRIDAY' => 'pr??ximo viernes',
    'LBL_TWO_WEEKS' => 'dos semanas',
    'LBL_NEXT_MONTH' => 'pr??ximo mes',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'primer d??a del pr??ximo mes',
    'LBL_THREE_MONTHS' => 'tres meses',
    'LBL_SIXMONTHS' => 'seis meses',
    'LBL_NEXT_YEAR' => 'pr??ximo a??o',

    //Datetimecombo fields
    'LBL_HOURS' => 'Horas',
    'LBL_MINUTES' => 'Minutos',
    'LBL_MERIDIEM' => 'Meridiem',
    'LBL_DATE' => 'Fecha',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Actualizaci??n autom??tica',

    'LBL_DURATION_DAY' => 'd??a',
    'LBL_DURATION_HOUR' => 'hora',
    'LBL_DURATION_MINUTE' => 'minuto',
    'LBL_DURATION_DAYS' => 'd??as',
    'LBL_DURATION_HOURS' => 'Duraci??n (Horas)',
    'LBL_DURATION_MINUTES' => 'Duraci??n (Minutos)',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Elija el mes',
    'LBL_ENTER_YEAR' => 'Introduzca un a??o',
    'LBL_ENTER_VALID_YEAR' => 'Por favor, poner un a??o valido',

    //File write error label
    'ERR_FILE_WRITE' => 'Error: No se pudo escribir el archivo {0}.  Por favor, verifique los permisos del sistema y del servidor web',
    'ERR_FILE_NOT_FOUND' => 'Error: No se pudo cargar el archivo {0}.  Por favor, verifique los permisos del sistema y del servidor web',

    'LBL_AND' => 'y',

    // File fields
    'LBL_SEARCH_EXTERNAL_API' => 'Archivo de fuente externa',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Seguridad',

    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '"Este es un archivo de importaci??n de muestra que es un ejemplo de los contenidos que se espera de un archivo que est?? listo para la importaci??n." "El archivo es uno delimitado por comas .csv, usando comillas como el calificador de campo." "La fila de encabezado es la fila de arriba la mayor??a en el archivo que contiene las etiquetas de campo como si fuera a ver en la aplicaci??n." "Estas etiquetas se utilizan para el mapeo de los datos en el archivo de los campos de la aplicaci??n." "Notas: Los nombres de base de datos tambi??n podr??an ser utilizados en la cabecera. Esto es ??til cuando usted est?? usando phpMyAdmin o cualquier otra herramienta de bases de datos para proporcionar una lista de exportaci??n de datos a importar." "El orden de las columnas no es cr??tico, el proceso de importaci??n coincide con los datos en los campos apropiados basados ??????en la fila de cabecera". "Para utilizar este archivo como plantilla, haga lo siguiente:" "1. Quitar las filas de la muestra de los datos" "2. Retire el texto de ayuda que usted est?? leyendo ahora mismo" "3. de entrada de sus propios datos en las filas correspondientes y columnas" " 4. Guarde el archivo en una ubicaci??n conocida de su sistema " " 5. Haga clic en la opci??n Importar en el men?? Acciones en la aplicaci??n y elegir el archivo a subir "',
    //define labels to be used for overriding local values during import/export

    'LBL_NOTIFICATIONS_NONE' => 'Sin notificaciones',
    'LBL_ALT_SORT_DESC' => 'Ordenado descendente',
    'LBL_ALT_SORT_ASC' => 'Ordenado ascendente',
    'LBL_ALT_SORT' => 'Ordenar',
    'LBL_ALT_SHOW_OPTIONS' => 'Mostrar opciones',
    'LBL_ALT_HIDE_OPTIONS' => 'Ocultar opciones',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Mover selecci??n a la lista de la izquierda',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Mover selecci??n a la lista de la derecha',
    'LBL_ALT_MOVE_COLUMN_UP' => 'Mover selecci??n hacia arriba en el orden de la lista',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Mover selecci??n hacia abajo en el orden de la lista',
    'LBL_ALT_INFO' => 'Informaci??n',
    'MSG_DUPLICATE' => 'El registro {0} que est?? a punto de crear puede ser un duplicado de un registro {0} que ya existe. {1} registros que contienen nombres similares se enumeran a continuaci??n.<br />Haga clic en Crear {1} para continuar la creaci??n de este nuevo {0}, o seleccionar un archivo {0} se enumeran a continuaci??n.',
    'MSG_SHOW_DUPLICATES' => 'El registro {0} que est?? a punto de crear puede ser un duplicado de un registro {0} que ya existe. {1} registros que contienen nombres similares se enumeran a continuaci??n. Haga clic en Guardar para continuar con la creaci??n de este nuevo {0}, o haga clic en Cancelar para volver al m??dulo sin necesidad de crear {0}.',
    'LBL_EMAIL_TITLE' => 'Direcci??n de Correo Electr??nico',
    'LBL_EMAIL_OPT_TITLE' => 'Email rehusado',
    'LBL_EMAIL_INV_TITLE' => 'email invalido',
    'LBL_EMAIL_PRIM_TITLE' => 'Designar como direcci??n de correo electr??nico principal',
    'LBL_SELECT_ALL_TITLE' => 'Seleccionar todo',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Seleccionar esta fila',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'ERROR: Hubo un error durante la subida. C??digo de error: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'ERROR: Hubo un error durante la subida. C??digo de error: {0} - {1}. El upload_maxsize es {2}',
    'UPLOAD_ERROR_HOME_TEXT' => 'ERROR: Se ha producido un error durante la subida, por favor p??ngase en contacto con un administrador para obtener ayuda.',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'El tama??o de la ({0} bytes) Super?? el m??ximo permitido: {1} bytes',
    'UPLOAD_REQUEST_ERROR' => 'Ocurri?? un error. Por favor actualice su p??gina y vuelva a intentarlo.',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'E',
    'LBL_EDIT_BUTTON_LABEL' => 'Editar',
    'LBL_EDIT_BUTTON_TITLE' => 'Editar',
    'LBL_DUPLICATE_BUTTON_KEY' => 'U',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Duplicar',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Duplicar',
    'LBL_DELETE_BUTTON_KEY' => 'D',
    'LBL_DELETE_BUTTON_LABEL' => 'Eliminar',
    'LBL_DELETE_BUTTON_TITLE' => 'Eliminar',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'Acci??n masiva',
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'Acci??n',
    'LBL_TOO_FEW_SELECTED' => 'N??mero inv??lido de registros seleccionados. Debe seleccionar un m??nimo de {min} registros.',
    'LBL_TOO_MANY_SELECTED' => 'N??mero inv??lido de registros seleccionados. Debe seleccionar un m??ximo de {max} registros.',
    'LBL_SELECT_ALL_NOT_ALLOWED' => 'La selecci??n de todos los registros no est?? disponible para esta acci??n. Por favor, seleccione registros individuales.',
    'LBL_MISSING_HANDLER_DATA' => 'Error inesperado. Falta datos del manejador de acci??n en masa de la respuesta',
    'LBL_MISSING_HANDLER' => 'Error inesperado. Ning??n manejador definido para la acci??n masiva de selecci??n',
    'LBL_MISSING_HANDLER_DATA_ROUTE' => 'Error inesperado. Falta la ruta de acci??n masiva',
    'LBL_ACTION_ERROR' => 'Error inesperado al llamar a la acci??n',
    'LBL_BULK_ACTION_ERROR' => 'Error inesperado al llamar a la acci??n masiva',
    'LBL_BULK_ACTION_DELETE_SUCCESS' => 'Registro (s) eliminado (s) correctamente',
    'LBL_BULK_ACTION_MASS_UPDATE_CONFIRMATION' => '??Est?? seguro de que desea actualizar los registros seleccionados?',
    'LBL_BULK_ACTION_MASS_UPDATE_SUCCESS' => 'Todos los registros actualizados correctamente',
    'LBL_BULK_ACTION_MASS_UPDATE_PARTIAL_SUCCESS' => '??xito parcial. Algunos registros no fueron actualizados. Por favor, compruebe el registro',
    'LBL_BULK_ACTION_MASS_UPDATE_NO_FIELDS' => 'No hay campos para actualizar',
    'LBL_BULK_ACTION_MASS_UPDATE_NO_RECORDS' => 'No hay campos para actualizar',
    'LBL_BULK_ACTION_MASS_UPDATE_NO_ACLS' => 'Privilegio insuficiente, no se permite guardar la acci??n',
    'LBL_UNEXPECTED_ERROR' => 'Error inesperado. No se pudo realizar la acci??n.',
    'LBL_RECORD_DELETE_SUCCESS' => 'Registro eliminado correctamente',
    'LBL_ERROR_SAVING' => 'Se produjo un error al guardar los datos',
    'LBL_SAVE_BUTTON_KEY' => 'S',
    'LBL_SAVE_BUTTON_LABEL' => 'Guardar',
    'LBL_SAVE_BUTTON_TITLE' => 'Guardar',
    'LBL_CANCEL_BUTTON_KEY' => 'X',
    'LBL_CANCEL_BUTTON_LABEL' => 'Cancelar',
    'LBL_CANCEL_BUTTON_TITLE' => 'Cancelar',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',

    'ANNUAL_REVENUE_BY_ACCOUNTS' => 'Ganancias Anuales Por Cuentas',
    'PIPELINE_BY_SALES_STAGE' => 'Proceso por Etapa de Ventas',
    'LEADS_BY_SOURCE' => 'Clientes Potenciales por Fuente',
    'LEADS_BY_STATUS' => 'Clientes Potenciales por Estado',
    'ACCOUNT_TYPES_PER_MONTH' => 'Nuevas cuentas por mes',

    'ERR_CONNECTOR_NOT_ARRAY' => 'conector serie en {0} se ha definido incorrectamente o est?? vac??o y no pudo ser usado.',
    'ERR_SUHOSIN' => 'El flujo de subida est?? bloqueado por Suhosin, a??ade un &quot;upload&quot; en suhosin.executor.include.whitelist (Ver suitecrm.log para m??s informaci??n)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Respuesta incorrecta del servidor',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Cotizaci??n',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Precio de Venta',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => 'Manualmente',
        '5' => 'Cada 5 minutos',
        '15' => 'Cada 15 minutos',
        '30' => 'Cada 30 minutos',
        '60' => 'Cada hora',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'Falta recordatorio o esta incorrecto.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'El recordatorio no ha sido definido ni en popup, ni en email.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'No hay invitados para recordatorio.',
    'LBL_DELETE_REMINDER_CONFIRM' => 'Recordatorio no incluye invitados, ??desea eliminar el recordatorio?',
    'LBL_DELETE_REMINDER' => 'Eliminar Recordatorio',
    'LBL_OK' => 'Aceptar',
    'LBL_PROCEED' => 'Continuar',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => 'Elegir columnas',
    'LBL_COLUMN_CHOOSER' => 'Selector de columna',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => 'Guardar Cambios',
    'LBL_DISPLAYED' => 'Mostrado',
    'LBL_HIDDEN' => 'Oculto',
    'ERR_EMPTY_COLUMNS_LIST' => 'Al menos un element es necesario',

    'LBL_FILTER_HEADER_TITLE' => 'Filtro',

    'LBL_CATEGORY' => 'Categor??a',
    'LBL_LIST_CATEGORY' => 'Categor??a',
    'ERR_FACTOR_TPL_INVALID' => 'El mensaje de C??digo de Autenticaci??n es inv??lido, por favor contacte al administrador.',
    'LBL_SUBTHEMES' => 'Estilo',
    'LBL_SUBTHEME_OPTIONS_DAWN' => 'Amanecer',
    'LBL_SUBTHEME_OPTIONS_DAY' => 'D??a',
    'LBL_SUBTHEME_OPTIONS_DUSK' => 'Crep??sculo',
    'LBL_SUBTHEME_OPTIONS_NIGHT' => 'Nocturno',
    'LBL_SUBTHEME_OPTIONS_NOON' => 'Mediod??a',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Descartar el borrador',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'Esta operaci??n eliminar?? este mensaje, ??desea continuar?',
    'LBL_CONFIRM_DISREGARD_EMAIL_TITLE' => 'Salir del cuadro de di??logo componer',
    'LBL_CONFIRM_DISREGARD_EMAIL_BODY' => 'Al abandonar el di??logo de redacci??n, se perder?? toda la informaci??n ingresada, ??desea continuar?',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Aplicar una plantilla de mensaje',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'Esta operaci??n borrar?? el campo cuerpo del mensaje, ??quiere continuar?',

    'LBL_CONFIRM_OPT_IN_TITLE' => 'Autorizaci??n Confirmada',
    'LBL_OPT_IN_TITLE' => 'Autorizado',
    'LBL_CONFIRM_OPT_IN_DATE' => 'Fecha de Confirmaci??n de Autorizaci??n',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'Fecha de env??o de confirmaci??n de autorizaci??n',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Fecha de falla en la confirmaci??n de autorizaci??n',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'Token de Confirmaci??n de Suscripci??n',
    'ERR_OPT_IN_TPL_NOT_SET' => 'La Plantila de email para autorizaci??n no est?? configurado. Por favor, config??relo en las configuraciones de e-mail.',
    'ERR_OPT_IN_RELATION_INCORRECT' => 'Autorizaci??n requiere que el e-mail est?? relacionado com una Cuenta/Contacto/Cliente Potencial/P??blico Objetivo',

    'LBL_SECURITYGROUP_NONINHERITABLE' => 'Grupo no heredable',
    'LBL_PRIMARY_GROUP' => "Grupo Principal",

    // footer
    'LBL_SUITE_TOP' => 'Ir arriba',
    'LBL_SUITE_SUPERCHARGED' => 'Recargado por SuiteCRM',
    'LBL_SUITE_POWERED_BY' => 'Powered By SugarCRM',
    'LBL_SUITE_DESC1' => 'SuiteCRM ha sido escrito y montado por <a href="https://salesagility.com">SalesAgility</a>. El programa se suministra, sin garant??a. Bajo licencia AGPLv3.',
    'LBL_SUITE_DESC2' => 'Este programa es software libre; Usted puede redistribuirlo y/o modificarlo bajo los t??rminos de la Licencia GNU Affero General Public License versi??n 3 publicada por la Free Software Foundation, incluyendo el permiso adicional en la cabecera del c??digo fuente.',
    'LBL_SUITE_DESC3' => 'SuiteCRM es una marca registrada de SalesAgility Ltd. Los Otros nombres empresas y productos pueden ser marcas registradas de las respectivas empresas con las que se asocian.',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Restablecer contrase??a',
    'LBL_SEND_CONFIRM_OPT_IN_EMAIL' => 'Enviar e-mail de Confirmaci??n de Autorizaci??n',
    'LBL_CONFIRM_OPT_IN_ONLY_FOR_PERSON' => 'Envio de e-mail de confirmaci??n de autorizaci??n s??lo para Cuentas/Contactos/Clientes Potenciales/Prospectos',
    'LBL_CONFIRM_OPT_IN_IS_DISABLED' => 'El env??o de email de confirmaci??n de la autorizaci??n est?? desactivado. Act??velo en Configuraciones de Email o contacte su administrador.',
    'LBL_CONTACT_HAS_NO_PRIMARY_EMAIL' => 'El env??o de e-mail de confirmaci??n de autorizaci??n no es posible porque el contacto no posee una direcci??n primario de e-mail registrada',
    'LBL_CONFIRM_EMAIL_SENDING_FAILED' => 'Env??o de e-mail de confirmaci??n fallado',
    'LBL_CONFIRM_EMAIL_SENT' => 'Confirmacion de Email Opt enviado existosamente',

    //List View Column Selector Modal
    'LBL_COLUMN_SELECTOR_DISPLAYED_COLS' => 'VISUALIZADO',
    'LBL_COLUMN_SELECTOR_HIDDEN_COLS' => 'OCULTO',
    'LBL_COLUMN_SELECTOR_CLOSE_BUTTON' => 'Fecha de cierre',
    'LBL_COLUMN_SELECTOR_SAVE_BUTTON' => 'Guardar cambios',
    'LBL_COLUMN_SELECTOR_MODAL_TITLE' => 'Elegir Columnas'

);

$app_list_strings['moduleList']['Library'] = 'Biblioteca';
$app_list_strings['moduleList']['EmailAddresses'] = 'Direcci??n de Email';
$app_list_strings['project_priority_default'] = 'Media';
$app_list_strings['project_priority_options'] = array(
    'High' => 'Alta',
    'Medium' => 'Media',
    'Low' => 'Baja',
);

//GDPR lawful basis options
$app_list_strings['lawful_basis_dom'] = array(
    '' => '',
    'consent' => 'Consentimiento',
    'contract' => 'Contrato',
    'legal_obligation' => 'Obligaci??n legal',
    'protection_of_interest' => 'Protecci??n del inter??s',
    'public_interest' => 'Inter??s p??blico',
    'legitimate_interest' => 'Inter??s leg??timo',
    'withdrawn' => 'Retirado',
);
//End GDPR lawful basis options

//GDPR lawful basis source options
$app_list_strings['lawful_basis_source_dom'] = array(
    '' => '',
    'website' => 'Sitio Web',
    'phone' => 'Tel??fono',
    'given_to_user' => 'Dado al Usuario',
    'email' => 'Email',
    'third_party' => 'Terceros',
);
//End GDPR lawful basis source options

$app_list_strings['moduleList']['KBDocuments'] = 'Base de conocimiento';

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => 'ABU DHABI',
    'ADEN' => 'ADEN',
    'AFGHANISTAN' => 'AFGHANISTAN',
    'ALBANIA' => 'ALBANIA',
    'ALGERIA' => 'ALGERIA',
    'AMERICAN SAMOA' => 'SAMOA AMERICANA',
    'ANDORRA' => 'ANDORRA',
    'ANGOLA' => 'ANGOLA',
    'ANTARCTICA' => 'ANT??RTIDA',
    'ANTIGUA' => 'ANTIGUA',
    'ARGENTINA' => 'ARGENTINA',
    'ARMENIA' => 'ARMENIA',
    'ARUBA' => 'ARUBA',
    'AUSTRALIA' => 'AUSTRALIA',
    'AUSTRIA' => 'AUSTRIA',
    'AZERBAIJAN' => 'AZERBAIJAN',
    'BAHAMAS' => 'BAHAMAS',
    'BAHRAIN' => 'BAHRAIN',
    'BANGLADESH' => 'BANGLADESH',
    'BARBADOS' => 'BARBADOS',
    'BELARUS' => 'BELARUS',
    'BELGIUM' => 'B??LGICA',
    'BELIZE' => 'BELICE',
    'BENIN' => 'BENIN',
    'BERMUDA' => 'BERMUDAS',
    'BHUTAN' => 'BHUTAN',
    'BOLIVIA' => 'BOLIVIA',
    'BOSNIA' => 'BOSNIA',
    'BOTSWANA' => 'BOTSWANA',
    'BOUVET ISLAND' => 'ISLA BOUVET',
    'BRAZIL' => 'BRASIL',
    'BRITISH ANTARCTICA TERRITORY' => 'TERRITORIO BRIT??NICO DE LA ANT??RTIDA',
    'BRITISH INDIAN OCEAN TERRITORY' => 'TERRITORIO BRIT??NICO DEL OC??ANO ??NDICO',
    'BRITISH VIRGIN ISLANDS' => 'ISLAS V??RGENES BRIT??NICAS',
    'BRITISH WEST INDIES' => 'INDIAS OCCIDENTALES BRIT??NICAS',
    'BRUNEI' => 'BRUNEI',
    'BULGARIA' => 'BULGARIA',
    'BURKINA FASO' => 'BURKINA FASO',
    'BURUNDI' => 'BURUNDI',
    'CAMBODIA' => 'CAMBODIA',
    'CAMEROON' => 'CAMER??N',
    'CANADA' => 'CANAD??',
    'CANAL ZONE' => 'ZONA DEL CANAL',
    'CANARY ISLAND' => 'ISLAS CANARIAS',
    'CAPE VERDI ISLANDS' => 'ISLAS CABO VERDE',
    'CAYMAN ISLANDS' => 'ISLAS CAIM??N',
    'CHAD' => 'CHAD',
    'CHANNEL ISLAND UK' => 'ISLAS DEL CANAL DE REINO UNIDO',
    'CHILE' => 'CHILE',
    'CHINA' => 'CHINA',
    'CHRISTMAS ISLAND' => 'ISLA NAVIDAD',
    'COCOS (KEELING) ISLAND' => 'ISLA DE COCOS (KEELING)',
    'COLOMBIA' => 'COLOMBIA',
    'COMORO ISLANDS' => 'ISLAS COMORO',
    'CONGO' => 'CONGO',
    'CONGO KINSHASA' => 'CONGO KINSHASA',
    'COOK ISLANDS' => 'ISLAS COOK',
    'COSTA RICA' => 'COSTA RICA',
    'CROATIA' => 'CROACIA',
    'CUBA' => 'CUBA',
    'CURACAO' => 'CURACAO',
    'CYPRUS' => 'CHIPRE',
    'CZECH REPUBLIC' => 'REP??BLICA CHECA',
    'DAHOMEY' => 'DAHOMEY',
    'DENMARK' => 'DINAMARCA',
    'DJIBOUTI' => 'YIBUTI',
    'DOMINICA' => 'DOMINICA',
    'DOMINICAN REPUBLIC' => 'REP??BLICA DOMINICANA',
    'DUBAI' => 'DUBAI',
    'ECUADOR' => 'ECUADOR',
    'EGYPT' => 'EGIPTO',
    'EL SALVADOR' => 'EL SALVADOR',
    'EQUATORIAL GUINEA' => 'GUINEA ECUATORIAL',
    'ESTONIA' => 'ESTONIA',
    'ETHIOPIA' => 'ETIOP??A',
    'FAEROE ISLANDS' => 'ISLAS FAROE',
    'FALKLAND ISLANDS' => 'ISLAS FALKLAND',
    'FIJI' => 'FIDJI',
    'FINLAND' => 'FINLANDIA',
    'FRANCE' => 'FRANCIA',
    'FRENCH GUIANA' => 'GUYANA FRANCESA',
    'FRENCH POLYNESIA' => 'POLINESIA FRANCESA',
    'GABON' => 'GABON',
    'GAMBIA' => 'GAMBIA',
    'GEORGIA' => 'GEORGIA',
    'GERMANY' => 'ALEMANIA',
    'GHANA' => 'GHANA',
    'GIBRALTAR' => 'GIBRALTAR',
    'GREECE' => 'GRECIA',
    'GREENLAND' => 'GROENLANDIA',
    'GUADELOUPE' => 'GUADALUPE',
    'GUAM' => 'GUAM',
    'GUATEMALA' => 'GUATEMALA',
    'GUINEA' => 'GUINEA',
    'GUYANA' => 'GUYANA',
    'HAITI' => 'HAITI',
    'HONDURAS' => 'HONDURAS',
    'HONG KONG' => 'HONG KONG',
    'HUNGARY' => 'HUNGR??A',
    'ICELAND' => 'ISLANDIA',
    'IFNI' => 'IFNI',
    'INDIA' => 'INDIA',
    'INDONESIA' => 'INDONESIA',
    'IRAN' => 'IR??N',
    'IRAQ' => 'IRAQ',
    'IRELAND' => 'IRLANDA',
    'ISRAEL' => 'ISRAEL',
    'ITALY' => 'ITALIA',
    'IVORY COAST' => 'COSTA DE MARFIL',
    'JAMAICA' => 'JAMAICA',
    'JAPAN' => 'JAP??N',
    'JORDAN' => 'JORDANIA',
    'KAZAKHSTAN' => 'KAZAJST??N',
    'KENYA' => 'KENIA',
    'KOREA' => 'COREA',
    'KOREA, SOUTH' => 'COREA DEL SUR',
    'KUWAIT' => 'KUWAIT',
    'KYRGYZSTAN' => 'KIRGUIST??N',
    'LAOS' => 'LAOS',
    'LATVIA' => 'LETONIA',
    'LEBANON' => 'L??BANO',
    'LEEWARD ISLANDS' => 'ISLAS LEEWARD',
    'LESOTHO' => 'LESOTHO',
    'LIBYA' => 'LIBIA',
    'LIECHTENSTEIN' => 'LIECHTENSTEIN',
    'LITHUANIA' => 'LITUANIA',
    'LUXEMBOURG' => 'LUXEMBURGO',
    'MACAO' => 'MACAO',
    'MACEDONIA' => 'MACEDONIA',
    'MADAGASCAR' => 'MADAGASCAR',
    'MALAWI' => 'MALAWI',
    'MALAYSIA' => 'MALASIA',
    'MALDIVES' => 'MALDIVAS',
    'MALI' => 'MALI',
    'MALTA' => 'MALTA',
    'MARTINIQUE' => 'MARTINICA',
    'MAURITANIA' => 'MAURITANIA',
    'MAURITIUS' => 'MAURICIO',
    'MELANESIA' => 'MELANESIA',
    'MEXICO' => 'M??XICO',
    'MOLDOVIA' => 'MOLDOVIA',
    'MONACO' => 'M??NACO',
    'MONGOLIA' => 'MONGOLIA',
    'MOROCCO' => 'MAROCO',
    'MOZAMBIQUE' => 'MOZAMBIQUE',
    'MYANAMAR' => 'MYANAMAR',
    'NAMIBIA' => 'NAMIBIA',
    'NEPAL' => 'NEPAL',
    'NETHERLANDS' => 'PA??SES BAJOS',
    'NETHERLANDS ANTILLES' => 'ANTILLAS DE PA??SES BAJOS',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'ZONA NEUTRAL DE LAS ANTILLAS DE PA??SES BAJOS',
    'NEW CALADONIA' => 'NUEVA CALEDONIA',
    'NEW HEBRIDES' => 'NUEVO HEBRIDES',
    'NEW ZEALAND' => 'NUEVA ZELANDA',
    'NICARAGUA' => 'NICARAGUA',
    'NIGER' => 'NIGER',
    'NIGERIA' => 'NIGERIA',
    'NORFOLK ISLAND' => 'ISLAS NORFOLK',
    'NORWAY' => 'NORUEGA',
    'OMAN' => 'OMAN',
    'OTHER' => 'OTRO',
    'PACIFIC ISLAND' => 'ISLAS DEL PAC??FICO',
    'PAKISTAN' => 'PAKIST??N',
    'PANAMA' => 'PANAM??',
    'PAPUA NEW GUINEA' => 'PAPUA NUEVA GUINEA',
    'PARAGUAY' => 'PARAGUAY',
    'PERU' => 'PER??',
    'PHILIPPINES' => 'FILIPINAS',
    'POLAND' => 'POLONIA',
    'PORTUGAL' => 'PORTUGAL',
    'PORTUGUESE TIMOR' => 'PORTUGUESE TIMOR',
    'PUERTO RICO' => 'PUERTO RICO',
    'QATAR' => 'QATAR',
    'REPUBLIC OF BELARUS' => 'REP??BLICA DE BIELORRUSIA',
    'REPUBLIC OF SOUTH AFRICA' => 'REP??BLICA DE SUD??FRICA',
    'REUNION' => 'REUNI??N',
    'ROMANIA' => 'RUMANIA',
    'RUSSIA' => 'RUSIA',
    'RWANDA' => 'RUANDA',
    'RYUKYU ISLANDS' => 'ISLAS RYUKYU',
    'SABAH' => 'SABAH',
    'SAN MARINO' => 'SAN MARINO',
    'SAUDI ARABIA' => 'ARABIA SAUDITA',
    'SENEGAL' => 'SENEGAL',
    'SERBIA' => 'SERBIA',
    'SEYCHELLES' => 'SEYCHELLES',
    'SIERRA LEONE' => 'SIERRA LEONA',
    'SINGAPORE' => 'SINGAPUR',
    'SLOVAKIA' => 'ESLOVAQUIA',
    'SLOVENIA' => 'ESLOVENIA',
    'SOMALILIAND' => 'SOMALIA',
    'SOUTH AFRICA' => 'SUD??FRICA',
    'SOUTH YEMEN' => 'YEMEN DEL SUR',
    'SPAIN' => 'ESPA??A',
    'SPANISH SAHARA' => 'SAHARA ESPA??OL',
    'SRI LANKA' => 'SRI LANKA',
    'ST. KITTS AND NEVIS' => 'SANTA KITTS Y NEVIS',
    'ST. LUCIA' => 'SANTA LUC??A',
    'SUDAN' => 'SUD??N',
    'SURINAM' => 'SURINAM',
    'SW AFRICA' => 'SW AFRICA',
    'SWAZILAND' => 'SWAZILAND',
    'SWEDEN' => 'SUECIA',
    'SWITZERLAND' => 'SUIZA',
    'SYRIA' => 'SIRIA',
    'TAIWAN' => 'TAIW??N',
    'TAJIKISTAN' => 'TAJIKIST??N',
    'TANZANIA' => 'TANZANIA',
    'THAILAND' => 'TAILANDIA',
    'TONGA' => 'TONGA',
    'TRINIDAD' => 'TRINIDAD',
    'TUNISIA' => 'TUNISIA',
    'TURKEY' => 'TURQU??A',
    'UGANDA' => 'UGANDA',
    'UKRAINE' => 'UCRANIA',
    'UNITED ARAB EMIRATES' => 'EMIRATOS ??RABES UNIDOS',
    'UNITED KINGDOM' => 'REINO UNIDO',
    'URUGUAY' => 'URUGUAY',
    'US PACIFIC ISLAND' => 'EE.UU. ISLA DEL PACIFICO',
    'US VIRGIN ISLANDS' => 'ISLAS V??RGENES DE EE.UU.',
    'USA' => 'EE.UU.',
    'UZBEKISTAN' => 'OUZBEKISTAN',
    'VANUATU' => 'VANUATU',
    'VATICAN CITY' => 'CIUDAD DEL VATICANO',
    'VENEZUELA' => 'VENEZUELA',
    'VIETNAM' => 'VIETNAM',
    'WAKE ISLAND' => 'ISLA WAKE',
    'WEST INDIES' => 'INDIA OCCIDENTAL',
    'WESTERN SAHARA' => 'SAHARA OCCIDENTAL',
    'YEMEN' => 'YEMEN',
    'ZAIRE' => 'ZAIRE',
    'ZAMBIA' => 'ZAMBIA',
    'ZIMBABWE' => 'ZIMBABWE',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'BIG-5 (Taiwan y Hong Kong)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'CP1251 (Cir??lico de MS)',
    'CP1252' => 'CP1252 (Europa occidental & EEUU de MS)',
    'EUC-CN' => 'EUC-CN (Chino simplificado GB2312)',
    'EUC-JP' => 'EUC-JP (Japon??s Unix)',
    'EUC-KR' => 'EUC-KR (Coreano)',
    'EUC-TW' => 'EUC-TW (Taiwan??s)',
    'ISO-2022-JP' => 'ISO-2022-JP (Japon??s)',
    'ISO-2022-KR' => 'ISO-2022-KR (Coreano)',
    'ISO-8859-1' => 'ISO-8859-1 (Europa Occidental y EEUU)',
    'ISO-8859-2' => 'ISO-8859-2 (Europa central y Europa del Este)',
    'ISO-8859-3' => 'ISO-8859-3 (Lat??n 3)',
    'ISO-8859-4' => 'ISO-8859-4 (Lat??n 4)',
    'ISO-8859-5' => 'ISO-8859-5 (Cir??lico)',
    'ISO-8859-6' => 'ISO-8859-6 (??rabe)',
    'ISO-8859-7' => 'ISO-8859-7 (Griego)',
    'ISO-8859-8' => 'ISO-8859-8 (Hebreo)',
    'ISO-8859-9' => 'ISO-8859-9 (Lat??n 5)',
    'ISO-8859-10' => 'ISO-8859-10 (Lat??n 6)',
    'ISO-8859-13' => 'ISO-8859-13 (Lat??n 7)',
    'ISO-8859-14' => 'ISO-8859-14 (Lat??n 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Lat??n 9)',
    'KOI8-R' => 'KOI8-R (Cir??lico Ruso)',
    'KOI8-U' => 'KOI8-U (Cir??lico Ucraniano)',
    'SJIS' => 'SJIS (Japon??s de MS)',
    'UTF-8' => 'UTF-8',
);

$app_list_strings['timezone_dom'] = array(

    'Africa/Algiers' => 'Africa/Algiers',
    'Africa/Luanda' => 'Africa/Luanda',
    'Africa/Porto-Novo' => 'Africa/Porto-Novo',
    'Africa/Gaborone' => 'Africa/Gaborone',
    'Africa/Ouagadougou' => 'Africa/Ouagadougou',
    'Africa/Bujumbura' => 'Africa/Bujumbura',
    'Africa/Douala' => 'Africa/Douala',
    'Atlantic/Cape_Verde' => 'Atlantic/Cape_Verde',
    'Africa/Bangui' => 'Africa/Bangui',
    'Africa/Ndjamena' => 'Africa/Ndjamena',
    'Indian/Comoro' => 'Indian/Comoro',
    'Africa/Kinshasa' => 'Africa/Kinshasa',
    'Africa/Lubumbashi' => 'Africa/Lubumbashi',
    'Africa/Brazzaville' => 'Africa/Brazzaville',
    'Africa/Abidjan' => 'Africa/Abidjan',
    'Africa/Djibouti' => 'Africa/Djibouti',
    'Africa/Cairo' => 'Africa/Cairo',
    'Africa/Malabo' => 'Africa/Malabo',
    'Africa/Asmera' => 'Africa/Asmera',
    'Africa/Addis_Ababa' => 'Africa/Addis_Ababa',
    'Africa/Libreville' => 'Africa/Libreville',
    'Africa/Banjul' => 'Africa/Banjul',
    'Africa/Accra' => 'Africa/Accra',
    'Africa/Conakry' => 'Africa/Conakry',
    'Africa/Bissau' => 'Africa/Bissau',
    'Africa/Nairobi' => 'Africa/Nairobi',
    'Africa/Maseru' => 'Africa/Maseru',
    'Africa/Monrovia' => 'Africa/Monrovia',
    'Africa/Tripoli' => 'Africa/Tripoli',
    'Indian/Antananarivo' => 'Indian/Antananarivo',
    'Africa/Blantyre' => 'Africa/Blantyre',
    'Africa/Bamako' => 'Africa/Bamako',
    'Africa/Nouakchott' => 'Africa/Nouakchott',
    'Indian/Mauritius' => 'Indian/Mauritius',
    'Indian/Mayotte' => 'Indian/Mayotte',
    'Africa/Casablanca' => 'Africa/Casablanca',
    'Africa/El_Aaiun' => 'Africa/El_Aaiun',
    'Africa/Maputo' => 'Africa/Maputo',
    'Africa/Windhoek' => 'Africa/Windhoek',
    'Africa/Niamey' => 'Africa/Niamey',
    'Africa/Lagos' => 'Africa/Lagos',
    'Indian/Reunion' => 'Indian/Reunion',
    'Africa/Kigali' => 'Africa/Kigali',
    'Atlantic/St_Helena' => 'Atlantic/St_Helena',
    'Africa/Sao_Tome' => 'Africa/Sao_Tome',
    'Africa/Dakar' => 'Africa/Dakar',
    'Indian/Mahe' => 'Indian/Mahe',
    'Africa/Freetown' => 'Africa/Freetown',
    'Africa/Mogadishu' => 'Africa/Mogadishu',
    'Africa/Johannesburg' => 'Africa/Johannesburg',
    'Africa/Khartoum' => 'Africa/Khartoum',
    'Africa/Mbabane' => 'Africa/Mbabane',
    'Africa/Dar_es_Salaam' => 'Africa/Dar_es_Salaam',
    'Africa/Lome' => 'Africa/Lome',
    'Africa/Tunis' => 'Africa/Tunis',
    'Africa/Kampala' => 'Africa/Kampala',
    'Africa/Lusaka' => 'Africa/Lusaka',
    'Africa/Harare' => 'Africa/Harare',
    'Antarctica/Casey' => 'Antarctica/Casey',
    'Antarctica/Davis' => 'Antarctica/Davis',
    'Antarctica/Mawson' => 'Antarctica/Mawson',
    'Indian/Kerguelen' => 'Indian/Kerguelen',
    'Antarctica/DumontDUrville' => 'Antarctica/DumontDUrville',
    'Antarctica/Syowa' => 'Antarctica/Syowa',
    'Antarctica/Vostok' => 'Antarctica/Vostok',
    'Antarctica/Rothera' => 'Antarctica/Rothera',
    'Antarctica/Palmer' => 'Antarctica/Palmer',
    'Antarctica/McMurdo' => 'Antarctica/McMurdo',
    'Asia/Kabul' => 'Asia/Kabul',
    'Asia/Yerevan' => 'Asia/Yerevan',
    'Asia/Baku' => 'Asia/Baku',
    'Asia/Bahrain' => 'Asia/Bahrain',
    'Asia/Dhaka' => 'Asia/Dhaka',
    'Asia/Thimphu' => 'Asia/Thimphu',
    'Indian/Chagos' => 'Indian/Chagos',
    'Asia/Brunei' => 'Asia/Brunei',
    'Asia/Rangoon' => 'Asia/Rangoon',
    'Asia/Phnom_Penh' => 'Asia/Phnom Penh',
    'Asia/Beijing' => 'Asia/P??kin',
    'Asia/Harbin' => 'Asia/Harbin',
    'Asia/Shanghai' => 'Asia/Shanghai',
    'Asia/Chongqing' => 'Asia/Chongqing',
    'Asia/Urumqi' => 'Asia/Urumqi',
    'Asia/Kashgar' => 'Asia/Kashgar',
    'Asia/Hong_Kong' => 'Asia/Hong Kong',
    'Asia/Taipei' => 'Asia/Taipei',
    'Asia/Macau' => 'Asia/Macau',
    'Asia/Nicosia' => 'Asia/Nicosia',
    'Asia/Tbilisi' => 'Asia/Tbilisi',
    'Asia/Dili' => 'Asia/Dili',
    'Asia/Calcutta' => 'Asia/Calcutta',
    'Asia/Jakarta' => 'Asia/Jakarta',
    'Asia/Pontianak' => 'Asia/Pontianak',
    'Asia/Makassar' => 'Asia/Makassar',
    'Asia/Jayapura' => 'Asia/Jayapura',
    'Asia/Tehran' => 'Asia/Tehran',
    'Asia/Baghdad' => 'Asia/Bagdad',
    'Asia/Jerusalem' => 'Asia/Jerusalem',
    'Asia/Tokyo' => 'Asia/Tokyo',
    'Asia/Amman' => 'Asia/Amman',
    'Asia/Almaty' => 'Asia/Almaty',
    'Asia/Qyzylorda' => 'Asia/Qyzylorda',
    'Asia/Aqtobe' => 'Asia/Aqtobe',
    'Asia/Aqtau' => 'Asia/Aqtau',
    'Asia/Oral' => 'Asia/Oral',
    'Asia/Bishkek' => 'Asia/Bishkek',
    'Asia/Seoul' => 'Asia/Seoul',
    'Asia/Pyongyang' => 'Asia/Pyongyang',
    'Asia/Kuwait' => 'Asia/Kuwait',
    'Asia/Vientiane' => 'Asia/Vientiane',
    'Asia/Beirut' => 'Asia/Beirut',
    'Asia/Kuala_Lumpur' => 'Asia/Kuala_Lumpur',
    'Asia/Kuching' => 'Asia/Kuching',
    'Indian/Maldives' => 'Indian/Maldives',
    'Asia/Hovd' => 'Asia/Hovd',
    'Asia/Ulaanbaatar' => 'Asia/Ulaanbaatar',
    'Asia/Choibalsan' => 'Asia/Choibalsan',
    'Asia/Katmandu' => 'Asia/Katmandu',
    'Asia/Muscat' => 'Asia/Muscat',
    'Asia/Karachi' => 'Asia/Karachi',
    'Asia/Gaza' => 'Asia/Gaza',
    'Asia/Manila' => 'Asia/Manila',
    'Asia/Qatar' => 'Asia/Qatar',
    'Asia/Riyadh' => 'Asia/Riyadh',
    'Asia/Singapore' => 'Asia/Singapore',
    'Asia/Colombo' => 'Asia/Colombo',
    'Asia/Damascus' => 'Asia/Damascus',
    'Asia/Dushanbe' => 'Asia/Dushanbe',
    'Asia/Bangkok' => 'Asia/Bangkok',
    'Asia/Ashgabat' => 'Asia/Ashgabat',
    'Asia/Dubai' => 'Asia/Dubai',
    'Asia/Samarkand' => 'Asia/Samarkand',
    'Asia/Tashkent' => 'Asia/Tashkent',
    'Asia/Saigon' => 'Asia/Saigon',
    'Asia/Aden' => 'Asia/Aden',
    'Australia/Darwin' => 'Australia/Darwin',
    'Australia/Perth' => 'Australia/Perth',
    'Australia/Brisbane' => 'Australia/Brisbane',
    'Australia/Lindeman' => 'Australia/Lindeman',
    'Australia/Adelaide' => 'Australia/Adelaide',
    'Australia/Hobart' => 'Australia/Hobart',
    'Australia/Currie' => 'Australia/Currie',
    'Australia/Melbourne' => 'Australia/Melbourne',
    'Australia/Sydney' => 'Australia/Sydney',
    'Australia/Broken_Hill' => 'Australia/Broken_Hill',
    'Indian/Christmas' => 'Indian/Christmas',
    'Pacific/Rarotonga' => 'Pacific/Rarotonga',
    'Indian/Cocos' => 'Indian/Cocos',
    'Pacific/Fiji' => 'Pacific/Fiji',
    'Pacific/Gambier' => 'Pacific/Gambier',
    'Pacific/Marquesas' => 'Pacific/Marquesas',
    'Pacific/Tahiti' => 'Pacific/Tahiti',
    'Pacific/Guam' => 'Pacific/Guam',
    'Pacific/Tarawa' => 'Pacific/Tarawa',
    'Pacific/Enderbury' => 'Pacific/Enderbury',
    'Pacific/Kiritimati' => 'Pacific/Kiritimati',
    'Pacific/Saipan' => 'Pacific/Saipan',
    'Pacific/Majuro' => 'Pacific/Majuro',
    'Pacific/Kwajalein' => 'Pacific/Kwajalein',
    'Pacific/Truk' => 'Pacific/Truk',
    'Pacific/Pohnpei' => 'Pac??fico/Pohnpei',
    'Pacific/Kosrae' => 'Pacific/Kosrae',
    'Pacific/Nauru' => 'Pacific/Nauru',
    'Pacific/Noumea' => 'Pacific/Noumea',
    'Pacific/Auckland' => 'Pacific/Auckland',
    'Pacific/Chatham' => 'Pacific/Chatham',
    'Pacific/Niue' => 'Pacific/Niue',
    'Pacific/Norfolk' => 'Pacific/Norfolk',
    'Pacific/Palau' => 'Pacific/Palau',
    'Pacific/Port_Moresby' => 'Pacific/Port_Moresby',
    'Pacific/Pitcairn' => 'Pacific/Pitcairn',
    'Pacific/Pago_Pago' => 'Pacific/Pago_Pago',
    'Pacific/Apia' => 'Pacific/Apia',
    'Pacific/Guadalcanal' => 'Pacific/Guadalcanal',
    'Pacific/Fakaofo' => 'Pacific/Fakaofo',
    'Pacific/Tongatapu' => 'Pacific/Tongatapu',
    'Pacific/Funafuti' => 'Pacific/Funafuti',
    'Pacific/Johnston' => 'Pacific/Johnston',
    'Pacific/Midway' => 'Pacific/Midway',
    'Pacific/Wake' => 'Pacific/Wake',
    'Pacific/Efate' => 'Pacific/Efate',
    'Pacific/Wallis' => 'Pacific/Wallis',
    'Europe/London' => 'Europe/Londres',
    'Europe/Dublin' => 'Europe/Dublin',
    'WET' => 'WET',
    'CET' => 'CET',
    'MET' => 'MET',
    'EET' => 'EET',
    'Europe/Tirane' => 'Europe/Tirane',
    'Europe/Andorra' => 'Europa/Andorra',
    'Europe/Vienna' => 'Europa/Viena',
    'Europe/Minsk' => 'Europe/Minsk',
    'Europe/Brussels' => 'Europa/Bruselas',
    'Europe/Sofia' => 'Europe/Sofia',
    'Europe/Prague' => 'Europe/Prague',
    'Europe/Copenhagen' => 'Europe/Copenhagen',
    'Atlantic/Faeroe' => 'Atlantic/Faeroe',
    'America/Danmarkshavn' => 'America/Danmarkshavn',
    'America/Scoresbysund' => 'America/Scoresbysund',
    'America/Godthab' => 'America/Godthab',
    'America/Thule' => 'America/Thule',
    'Europe/Tallinn' => 'Europe/Tallinn',
    'Europe/Helsinki' => 'Europe/Helsinki',
    'Europe/Paris' => 'Europe/Paris',
    'Europe/Berlin' => 'Europe/Berlin',
    'Europe/Gibraltar' => 'Europe/Gibraltar',
    'Europe/Athens' => 'Europa/Atenas',
    'Europe/Budapest' => 'Europe/Budapest',
    'Atlantic/Reykjavik' => 'Atlantic/Reykjavik',
    'Europe/Rome' => 'Europe/Rome',
    'Europe/Riga' => 'Europe/Riga',
    'Europe/Vaduz' => 'Europe/Vaduz',
    'Europe/Vilnius' => 'Europe/Vilnius',
    'Europe/Luxembourg' => 'Europe/Luxembourg',
    'Europe/Malta' => 'Europa/Malta',
    'Europe/Chisinau' => 'Europe/Chisinau',
    'Europe/Monaco' => 'Europe/Monaco',
    'Europe/Amsterdam' => 'Europe/Amsterdam',
    'Europe/Oslo' => 'Europe/Oslo',
    'Europe/Warsaw' => 'Europa/Varsovia',
    'Europe/Lisbon' => 'Europa/Lisboa',
    'Atlantic/Azores' => 'Atlantic/Azores',
    'Atlantic/Madeira' => 'Atlantico/Madeira',
    'Europe/Bucharest' => 'Europa/Bucarest',
    'Europe/Kaliningrad' => 'Europe/Kaliningrad',
    'Europe/Moscow' => 'Europa/Mosc??',
    'Europe/Samara' => 'Europe/Samara',
    'Asia/Yekaterinburg' => 'Asia/Yekaterinburg',
    'Asia/Omsk' => 'Asia/Omsk',
    'Asia/Novosibirsk' => 'Asia/Novosibirsk',
    'Asia/Krasnoyarsk' => 'Asia/Krasnoyarsk',
    'Asia/Irkutsk' => 'Asia/Irkutsk',
    'Asia/Yakutsk' => 'Asia/Yakutsk',
    'Asia/Vladivostok' => 'Asia/Vladivostok',
    'Asia/Sakhalin' => 'Asia/Sakhalin',
    'Asia/Magadan' => 'Asia/Magadan',
    'Asia/Kamchatka' => 'Asia/Kamchatka',
    'Asia/Anadyr' => 'Asia/Anadyr',
    'Europe/Belgrade' => 'Europe/Belgrade',
    'Europe/Madrid' => 'Europe/Madrid',
    'Africa/Ceuta' => 'Africa/Ceuta',
    'Atlantic/Canary' => 'Atlantic/Canary',
    'Europe/Stockholm' => 'Europe/Stockholm',
    'Europe/Zurich' => 'Europe/Zurich',
    'Europe/Istanbul' => 'Europe/Istanbul',
    'Europe/Kiev' => 'Europe/Kiev',
    'Europe/Uzhgorod' => 'Europe/Uzhgorod',
    'Europe/Zaporozhye' => 'Europe/Zaporozhye',
    'Europe/Simferopol' => 'Europe/Simferopol',
    'America/New_York' => 'America/New_York',
    'America/Chicago' => 'America/Chicago',
    'America/North_Dakota/Center' => 'America/North_Dakota/Center',
    'America/Denver' => 'America/Denver',
    'America/Los_Angeles' => 'America/Los_Angeles',
    'America/Juneau' => 'America/Juneau',
    'America/Yakutat' => 'America/Yakutat',
    'America/Anchorage' => 'America/Anchorage',
    'America/Nome' => 'America/Nome',
    'America/Adak' => 'America/Adak',
    'Pacific/Honolulu' => 'Pacific/Honolulu',
    'America/Phoenix' => 'America/Phoenix',
    'America/Boise' => 'America/Boise',
    'America/Indiana/Indianapolis' => 'America/Indiana/Indianapolis',
    'America/Indiana/Marengo' => 'America/Indiana/Marengo',
    'America/Indiana/Knox' => 'America/Indiana/Knox',
    'America/Indiana/Vevay' => 'America/Indiana/Vevay',
    'America/Kentucky/Louisville' => 'America/Kentucky/Louisville',
    'America/Kentucky/Monticello' => 'America/Kentucky/Monticello',
    'America/Detroit' => 'America/Detroit',
    'America/Menominee' => 'America/Menominee',
    'America/St_Johns' => 'America/St_Johns',
    'America/Goose_Bay' => 'America/Goose_Bay',
    'America/Halifax' => 'America/Halifax',
    'America/Glace_Bay' => 'America/Glace_Bay',
    'America/Montreal' => 'America/Montreal',
    'America/Toronto' => 'America/Toronto',
    'America/Thunder_Bay' => 'America/Thunder_Bay',
    'America/Nipigon' => 'America/Nipigon',
    'America/Rainy_River' => 'America/Rainy_River',
    'America/Winnipeg' => 'America/Winnipeg',
    'America/Regina' => 'America/Regina',
    'America/Swift_Current' => 'America/Swift_Current',
    'America/Edmonton' => 'America/Edmonton',
    'America/Vancouver' => 'America/Vancouver',
    'America/Dawson_Creek' => 'America/Dawson_Creek',
    'America/Pangnirtung' => 'America/Pangnirtung',
    'America/Iqaluit' => 'America/Iqaluit',
    'America/Coral_Harbour' => 'America/Coral_Harbour',
    'America/Rankin_Inlet' => 'America/Rankin_Inlet',
    'America/Cambridge_Bay' => 'America/Cambridge_Bay',
    'America/Yellowknife' => 'America/Yellowknife',
    'America/Inuvik' => 'America/Inuvik',
    'America/Whitehorse' => 'America/Whitehorse',
    'America/Dawson' => 'America/Dawson',
    'America/Cancun' => 'America/Cancun',
    'America/Merida' => 'America/Merida',
    'America/Monterrey' => 'America/Monterrey',
    'America/Mexico_City' => 'America/Mexico_City',
    'America/Chihuahua' => 'America/Chihuahua',
    'America/Hermosillo' => 'America/Hermosillo',
    'America/Mazatlan' => 'America/Mazatlan',
    'America/Tijuana' => 'America/Tijuana',
    'America/Anguilla' => 'America/Anguilla',
    'America/Antigua' => 'America/Antigua',
    'America/Nassau' => 'America/Nassau',
    'America/Barbados' => 'America/Barbados',
    'America/Belize' => 'America/Belize',
    'Atlantic/Bermuda' => 'Atlantic/Bermuda',
    'America/Cayman' => 'America/Cayman',
    'America/Costa_Rica' => 'America/Costa_Rica',
    'America/Havana' => 'America/Havana',
    'America/Dominica' => 'America/Dominica',
    'America/Santo_Domingo' => 'America/Santo_Domingo',
    'America/El_Salvador' => 'America/El_Salvador',
    'America/Grenada' => 'America/Grenada',
    'America/Guadeloupe' => 'America/Guadeloupe',
    'America/Guatemala' => 'America/Guatemala',
    'America/Port-au-Prince' => 'America/Port-au-Prince',
    'America/Tegucigalpa' => 'America/Tegucigalpa',
    'America/Jamaica' => 'America/Jamaica',
    'America/Martinique' => 'America/Martinique',
    'America/Montserrat' => 'America/Montserrat',
    'America/Managua' => 'America/Managua',
    'America/Panama' => 'America/Panama',
    'America/Puerto_Rico' => 'America/Puerto_Rico',
    'America/St_Kitts' => 'America/St_Kitts',
    'America/St_Lucia' => 'America/St_Lucia',
    'America/Miquelon' => 'America/Miquelon',
    'America/St_Vincent' => 'America/St_Vincent',
    'America/Grand_Turk' => 'America/Grand_Turk',
    'America/Tortola' => 'America/Tortola',
    'America/St_Thomas' => 'America/St_Thomas',
    'America/Argentina/Buenos_Aires' => 'America/Argentina/Buenos_Aires',
    'America/Argentina/Cordoba' => 'America/Argentina/Cordoba',
    'America/Argentina/Tucuman' => 'America/Argentina/Tucuman',
    'America/Argentina/La_Rioja' => 'America/Argentina/La_Rioja',
    'America/Argentina/San_Juan' => 'America/Argentina/San_Juan',
    'America/Argentina/Jujuy' => 'America/Argentina/Jujuy',
    'America/Argentina/Catamarca' => 'America/Argentina/Catamarca',
    'America/Argentina/Mendoza' => 'America/Argentina/Mendoza',
    'America/Argentina/Rio_Gallegos' => 'America/Argentina/Rio_Gallegos',
    'America/Argentina/Ushuaia' => 'America/Argentina/Ushuaia',
    'America/Aruba' => 'America/Aruba',
    'America/La_Paz' => 'America/La_Paz',
    'America/Noronha' => 'America/Noronha',
    'America/Belem' => 'America/Belem',
    'America/Fortaleza' => 'America/Fortaleza',
    'America/Recife' => 'America/Recife',
    'America/Araguaina' => 'America/Araguaina',
    'America/Maceio' => 'America/Maceio',
    'America/Bahia' => 'America/Bahia',
    'America/Sao_Paulo' => 'America/Sao_Paulo',
    'America/Campo_Grande' => 'America/Campo_Grande',
    'America/Cuiaba' => 'America/Cuiaba',
    'America/Porto_Velho' => 'America/Porto_Velho',
    'America/Boa_Vista' => 'America/Boa_Vista',
    'America/Manaus' => 'America/Manaus',
    'America/Eirunepe' => 'America/Eirunepe',
    'America/Rio_Branco' => 'America/Rio_Branco',
    'America/Santiago' => 'America/Santiago',
    'Pacific/Easter' => 'Pacific/Easter',
    'America/Bogota' => 'America/Bogota',
    'America/Curacao' => 'America/Curacao',
    'America/Guayaquil' => 'America/Guayaquil',
    'Pacific/Galapagos' => 'Pacific/Galapagos',
    'Atlantic/Stanley' => 'Atlantic/Stanley',
    'America/Cayenne' => 'America/Cayenne',
    'America/Guyana' => 'America/Guyana',
    'America/Asuncion' => 'America/Asuncion',
    'America/Lima' => 'America/Lima',
    'Atlantic/South_Georgia' => 'Atlantic/South_Georgia',
    'America/Paramaribo' => 'America/Paramaribo',
    'America/Port_of_Spain' => 'America/Port_of_Spain',
    'America/Montevideo' => 'America/Montevideo',
    'America/Caracas' => 'America/Caracas',
);

$app_list_strings['eapm_list'] = array(
    'Sugar' => 'SuiteCRM',
    'WebEx' => 'WebEx',
    'GoToMeeting' => 'GoToMeeting',
    'IBMSmartCloud' => 'IBM SmartCloud',
    'Google' => 'Google',
    'Box' => 'Box.net',
    'Facebook' => 'Facebook',
    'Twitter' => 'Twitter',
);
$app_list_strings['eapm_list_import'] = array(
    'Google' => 'Contactos de Google',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Documentos de Google',
);
$app_list_strings['token_status'] = array(
    1 => 'Solicitud',
    2 => 'Acceso',
    3 => 'Inv??lido',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'Campa??a',
    'email' => 'e-Mail',
    'event' => 'Evento',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'Campa??a',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'Campa??a',
    'email' => 'e-Mail',
    'event' => 'Evento',
    'system' => 'Sistema',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'Base de conocimiento';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'Base de conocimiento - Categor??as';
$app_list_strings['aok_status_list']['Draft'] = 'Borrador';
$app_list_strings['aok_status_list']['Expired'] = 'Expirado';
$app_list_strings['aok_status_list']['In_Review'] = 'En revisi??n';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Privado';
$app_list_strings['aok_status_list']['published_public'] = 'P??blico';

$app_list_strings['moduleList']['FP_events'] = 'Eventos';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Ubicaciones';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Invitado';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'No Invitado';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'Atendido';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'No Atendido';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Aceptada';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Rechaz??';
$app_list_strings['fp_event_status_dom']['No Response'] = 'Sin Respuesta';

$app_strings['LBL_STATUS_EVENT'] = 'Estado de Invitaci??n';
$app_strings['LBL_ACCEPT_STATUS'] = 'Estado de aceptaci??n';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Seleccionar P??gina Actual';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Seleccionar Todo';
$app_strings['LBL_LISTVIEW_NONE'] = 'Quitar Selecci??n';

$app_list_strings['moduleList']['AOP_Case_Events'] = 'Eventos de Casos';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Actualizaciones de Casos';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '========== Por favor, responda por encima de esta linea ==========';

//aop
$app_list_strings['case_state_default_key'] = 'Open';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'Abierto',
        'Closed' => 'Cerrada',
    );
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'Nuevo',
        'Open_Assigned' => 'Asignado',
        'Closed_Closed' => 'Cerrada',
        'Open_Pending Input' => 'Pendiente de informaci??n',
        'Closed_Rejected' => 'Rechazada',
        'Closed_Duplicate' => 'Duplicar',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'Usuario Simple',
        'Account' => 'Cuenta de Usuario',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'Utilice AOP por defecto',
    'singleUser' => 'Usuario Simple',
    'roundRobin' => 'Turno Rotatorio',
    'leastBusy' => 'Menos ocupado',
    'random' => 'Aleatorio',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Reportes';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Reportes Condiciones';
$app_list_strings['moduleList']['AOR_Charts'] = 'Gr??ficos de informe';
$app_list_strings['moduleList']['AOR_Fields'] = 'Reportes de Campos';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Reportes Programados';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Igual a';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'No igual a';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Mayor que';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Menor que';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Mayor que o igual a';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Menor que o igual a';
$app_list_strings['aor_operator_list']['Contains'] = 'Contiene';
$app_list_strings['aor_operator_list']['Starts_With'] = 'Inicia con';
$app_list_strings['aor_operator_list']['Ends_With'] = 'Termina con';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'A-m-d';
$app_list_strings['aor_format_options']['m-d-Y'] = 'm-d-Y';
$app_list_strings['aor_format_options']['d-m-Y'] = 'd-m-Y';
$app_list_strings['aor_format_options']['Y/m/d'] = 'Y/m/d';
$app_list_strings['aor_format_options']['m/d/Y'] = 'm/d/Y';
$app_list_strings['aor_format_options']['d/m/Y'] = 'd/m/A';
$app_list_strings['aor_format_options']['Y.m.d'] = 'Y.m.d';
$app_list_strings['aor_format_options']['m.d.Y'] = 'm.d.Y';
$app_list_strings['aor_format_options']['d.m.Y'] = 'd.m.Y';
$app_list_strings['aor_format_options']['Ymd'] = 'Amd';
$app_list_strings['aor_format_options']['Y-m'] = 'A-m';
$app_list_strings['aor_format_options']['Y'] = 'A';
$app_list_strings['aor_condition_operator_list']['And'] = 'y';
$app_list_strings['aor_condition_operator_list']['OR'] = 'O';
$app_list_strings['aor_condition_type_list']['Value'] = 'Valor';
$app_list_strings['aor_condition_type_list']['Field'] = 'Campo';
$app_list_strings['aor_condition_type_list']['Date'] = 'Fecha';
$app_list_strings['aor_condition_type_list']['Multi'] = 'Uno de';
$app_list_strings['aor_condition_type_list']['Period'] = 'Periodo';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Usuario Actual';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'Minutos';
$app_list_strings['aor_date_type_list']['hour'] = 'Horas';
$app_list_strings['aor_date_type_list']['day'] = 'D??as';
$app_list_strings['aor_date_type_list']['week'] = 'Semanas';
$app_list_strings['aor_date_type_list']['month'] = 'Meses';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Horas de Oficina';
$app_list_strings['aor_date_options']['now'] = 'Nuevo';
$app_list_strings['aor_date_options']['field'] = 'Este Campo';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Ascendente';
$app_list_strings['aor_sort_operator']['DESC'] = 'Descendente';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Total';
$app_list_strings['aor_function_list']['MIN'] = 'M??nimo';
$app_list_strings['aor_function_list']['MAX'] = 'M??ximo';
$app_list_strings['aor_function_list']['SUM'] = 'Suma';
$app_list_strings['aor_function_list']['AVG'] = 'Promedio';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Total';
$app_list_strings['aor_total_options']['SUM'] = 'Suma';
$app_list_strings['aor_total_options']['AVG'] = 'Promedio';
$app_list_strings['aor_chart_types']['bar'] = 'Gr??fico de Barras';
$app_list_strings['aor_chart_types']['line'] = 'Gr??fico de Lineas';
$app_list_strings['aor_chart_types']['pie'] = 'Gr??fico circular';
$app_list_strings['aor_chart_types']['radar'] = 'Gr??fico Radial';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Barra Apilada';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Barra Agrupada';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Mensualmente';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Semanalmente';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Diariamente';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Activa';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Inactiva';
$app_list_strings['aor_email_type_list']['Email Address'] = 'Email';
$app_list_strings['aor_email_type_list']['Specify User'] = 'Usuario';
$app_list_strings['aor_email_type_list']['Users'] = 'Usuarios';
$app_list_strings['aor_assign_options']['all'] = 'TODOS los usuarios';
$app_list_strings['aor_assign_options']['role'] = 'TODOS los usuarios en rol';
$app_list_strings['aor_assign_options']['security_group'] = 'TODOS los usuarios en grupo seguridad';
$app_list_strings['date_time_period_list']['today'] = 'Hoy';
$app_list_strings['date_time_period_list']['yesterday'] = 'Ayer';
$app_list_strings['date_time_period_list']['this_week'] = 'Esta Semana';
$app_list_strings['date_time_period_list']['last_week'] = '??ltima semana';
$app_list_strings['date_time_period_list']['last_month'] = '??ltimo mes';
$app_list_strings['date_time_period_list']['this_month'] = 'Este Mes';
$app_list_strings['date_time_period_list']['this_quarter'] = 'Este trimestre';
$app_list_strings['date_time_period_list']['last_quarter'] = '??ltimo trimestre';
$app_list_strings['date_time_period_list']['this_year'] = 'Este A??o';
$app_list_strings['date_time_period_list']['last_year'] = '??ltimo A??o';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'en el';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'en';
$app_strings['LBL_CRON_AT'] = 'hasta';
$app_strings['LBL_CRON_RAW'] = 'Avanzado';
$app_strings['LBL_CRON_MIN'] = 'Minuto';
$app_strings['LBL_CRON_HOUR'] = 'Hora';
$app_strings['LBL_CRON_DAY'] = 'D??a';
$app_strings['LBL_CRON_MONTH'] = 'Mes';
$app_strings['LBL_CRON_DOW'] = 'DOW';
$app_strings['LBL_CRON_DAILY'] = 'Diariamente';
$app_strings['LBL_CRON_WEEKLY'] = 'Semanalmente';
$app_strings['LBL_CRON_MONTHLY'] = 'Mensualmente';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Contratos';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Facturas';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF - Plantillas';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Productos - Categor??as';
$app_list_strings['moduleList']['AOS_Products'] = 'Productos';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Items por linea';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Items por Linea agrupados';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Cotizaciones';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Analista';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Competidor';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Cliente';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Integrador';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Inversionista';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Socio';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Prensa';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Prospecto';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Revendedor';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Otro';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Borrador';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'Negociaci??n';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Enviado';
$app_list_strings['quote_stage_dom']['On Hold'] = 'En espera';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Confirmado';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Cerrado aceptado';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Cerrado perdido';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Cerrado abandonado';
$app_list_strings['quote_term_dom']['Net 15'] = 'Neto 15';
$app_list_strings['quote_term_dom']['Net 30'] = 'Neto 30';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'Aprobado';
$app_list_strings['approval_status_dom']['Not Approved'] = 'No Aprobado';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7,5%';
$app_list_strings['vat_list']['17.5'] = '17,5%';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = 'Pct';
$app_list_strings['discount_list']['Amount'] = 'Amt';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Analista';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Competidor';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Cliente';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Integrador';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Inversionista';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Socio';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Prensa';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Prospecto';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Revendedor';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Otro';
$app_list_strings['invoice_status_dom']['Paid'] = 'Pagado';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'Impago';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'Cancelado';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'No Facturado';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'Facturado';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'Port??tiles';
$app_list_strings['product_category_dom']['Desktops'] = 'Escritorios';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'Bien';
$app_list_strings['product_type_dom']['Service'] = 'Servicio';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Cotizaciones';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Facturas';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Contratos';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Cotizaciones';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Facturas';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Contratos';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Cuentas';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Contactos';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Clientes potenciales';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'No iniciada';
$app_list_strings['contract_status_list']['In Progress'] = 'En progreso';
$app_list_strings['contract_status_list']['Signed'] = 'Firmado';
$app_list_strings['contract_type_list']['Type'] = 'Tipo';
$app_strings['LBL_PRINT_AS_PDF'] = 'Imprimir como PDF';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Por favor seleccionar plantilla';
$app_strings['LBL_NO_TEMPLATE'] = 'ERROR\nPlantilla No encontrada.\nPor favor ver m??dulo plantillas PDF y crear una';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'Flujo de Trabajo';
$app_list_strings['moduleList']['AOW_Conditions'] = 'Condiciones de Flujo de Trabajo';
$app_list_strings['moduleList']['AOW_Processed'] = 'Auditor??a de Procesos';
$app_list_strings['moduleList']['AOW_Actions'] = 'Acciones del Flujo de Trabajo';
$app_list_strings['aow_status_list']['Active'] = 'Activa';
$app_list_strings['aow_status_list']['Inactive'] = 'Inactiva';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Igual a';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'No igual a';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Mayor que';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Menor que';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Mayor que o igual a';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Menor que o igual a';
$app_list_strings['aow_operator_list']['Contains'] = 'Contiene';
$app_list_strings['aow_operator_list']['Starts_With'] = 'Inicia con';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Termina con';
$app_list_strings['aow_operator_list']['is_null'] = 'Es nulo';
$app_list_strings['aow_process_status_list']['Complete'] = 'Completa';
$app_list_strings['aow_process_status_list']['Running'] = 'En proceso';
$app_list_strings['aow_process_status_list']['Pending'] = 'Pendiente';
$app_list_strings['aow_process_status_list']['Failed'] = 'Fall??';
$app_list_strings['aow_condition_operator_list']['And'] = 'y';
$app_list_strings['aow_condition_operator_list']['OR'] = 'O';
$app_list_strings['aow_condition_type_list']['Value'] = 'Valor';
$app_list_strings['aow_condition_type_list']['Field'] = 'Campo';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Alg??n cambio';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'En SecurityGroup';
$app_list_strings['aow_condition_type_list']['Date'] = 'Fecha';
$app_list_strings['aow_condition_type_list']['Multi'] = 'Uno de';
$app_list_strings['aow_action_type_list']['Value'] = 'Valor';
$app_list_strings['aow_action_type_list']['Field'] = 'Campo';
$app_list_strings['aow_action_type_list']['Date'] = 'Fecha';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Turno Rotatorio';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Menos Ocupado';
$app_list_strings['aow_action_type_list']['Random'] = 'Aleatorio';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Valor';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Campo';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'Minutos';
$app_list_strings['aow_date_type_list']['hour'] = 'Horas';
$app_list_strings['aow_date_type_list']['day'] = 'D??as';
$app_list_strings['aow_date_type_list']['week'] = 'Semanas';
$app_list_strings['aow_date_type_list']['month'] = 'Meses';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Horas de Oficina';
$app_list_strings['aow_date_options']['now'] = 'Nuevo';
$app_list_strings['aow_date_options']['today'] = 'Hoy';
$app_list_strings['aow_date_options']['field'] = 'Este Campo';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'TODOS los usuarios';
$app_list_strings['aow_assign_options']['role'] = 'TODOS los usuarios en rol';
$app_list_strings['aow_assign_options']['security_group'] = 'TODOS los usuarios en grupo seguridad';
$app_list_strings['aow_email_type_list']['Email Address'] = 'Email';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Registro de Correo Electr??nico';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Campo Relacionado';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Usuario';
$app_list_strings['aow_email_type_list']['Users'] = 'Usuarios';
$app_list_strings['aow_email_to_list']['to'] = 'Para';
$app_list_strings['aow_email_to_list']['cc'] = 'Cc';
$app_list_strings['aow_email_to_list']['bcc'] = 'Cco';
$app_list_strings['aow_run_on_list']['All_Records'] = 'Todos los Registros';
$app_list_strings['aow_run_on_list']['New_Records'] = 'Nuevos Registros';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Registros Modificados';
$app_list_strings['aow_run_when_list']['Always'] = 'Siempre';
$app_list_strings['aow_run_when_list']['On_Save'] = 'S??lo al Guardar';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'S??lo en la Programaci??n';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Proyectos - Plantillas';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Plantillas de Tareas de Proyecto';
$app_list_strings['relationship_type_list']['FS'] = 'Finalizar para iniciar';
$app_list_strings['relationship_type_list']['SS'] = 'Iniciar para iniciar';
$app_list_strings['duration_unit_dom']['Days'] = 'D??as';
$app_list_strings['duration_unit_dom']['Hours'] = 'Horas';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'Vista de Gantt';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = 'Ver Detalle';
$app_strings['LBL_CREATE_PROJECT'] = 'Crear proyecto';

//gmaps
$app_strings['LBL_MAP'] = 'Mapa';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Longitud';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Latitud';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Estado del C??digo Geogr??fico';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Direcci??n';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Mapas';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Mapas - marcadores';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Mapas - ??reas';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Mapas - Cach?? de Direcciones';

$app_list_strings['moduleList']['jjwp_Partners'] = 'Socios JJWP';

$app_list_strings['map_unit_type_list']['mi'] = 'Millas';
$app_list_strings['map_unit_type_list']['km'] = 'Kilometros';

$app_list_strings['map_module_type_list']['Accounts'] = 'Cuentas';
$app_list_strings['map_module_type_list']['Contacts'] = 'Contactos';
$app_list_strings['map_module_type_list']['Cases'] = 'Casos';
$app_list_strings['map_module_type_list']['Leads'] = 'Clientes potenciales';
$app_list_strings['map_module_type_list']['Meetings'] = 'Reuniones';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Oportunidades';
$app_list_strings['map_module_type_list']['Project'] = 'Proyectos';
$app_list_strings['map_module_type_list']['Prospects'] = 'P??blico Objetivo';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Cuenta';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Contacto';
$app_list_strings['map_relate_type_list']['Cases'] = 'Caso';
$app_list_strings['map_relate_type_list']['Leads'] = 'Cliente Potencial';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Reuni??n';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Oportunidad';
$app_list_strings['map_relate_type_list']['Project'] = 'Proyecto';
$app_list_strings['map_relate_type_list']['Prospects'] = 'P??blico objetivo';

$app_list_strings['marker_image_list']['accident'] = 'Accidente';
$app_list_strings['marker_image_list']['administration'] = 'Administraci??n';
$app_list_strings['marker_image_list']['agriculture'] = 'Agricultura';
$app_list_strings['marker_image_list']['aircraft_small'] = 'Avi??n Peque??o';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Avi??n de Turismo';
$app_list_strings['marker_image_list']['airport'] = 'Aeropuerto';
$app_list_strings['marker_image_list']['amphitheater'] = 'Anfiteatro';
$app_list_strings['marker_image_list']['apartment'] = 'Apartamento';
$app_list_strings['marker_image_list']['aquarium'] = 'Acuario';
$app_list_strings['marker_image_list']['arch'] = 'Arco';
$app_list_strings['marker_image_list']['atm'] = 'Atm';
$app_list_strings['marker_image_list']['audio'] = 'Sonido';
$app_list_strings['marker_image_list']['bank'] = 'Banco';
$app_list_strings['marker_image_list']['bank_euro'] = 'Banco Euro';
$app_list_strings['marker_image_list']['bank_pound'] = 'Banco Libra';
$app_list_strings['marker_image_list']['bar'] = 'Barra';
$app_list_strings['marker_image_list']['beach'] = 'Playa';
$app_list_strings['marker_image_list']['beautiful'] = 'Belleza';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'Estacionamiento de Bicicletas';
$app_list_strings['marker_image_list']['big_city'] = 'Gran Ciudad';
$app_list_strings['marker_image_list']['bridge'] = 'Puente';
$app_list_strings['marker_image_list']['bridge_modern'] = 'Puente Moderno';
$app_list_strings['marker_image_list']['bus'] = 'Autobus';
$app_list_strings['marker_image_list']['cable_car'] = 'Autom??vil de cable';
$app_list_strings['marker_image_list']['car'] = 'Autom??vil';
$app_list_strings['marker_image_list']['car_rental'] = 'Alquiler de Autom??viles';
$app_list_strings['marker_image_list']['carrepair'] = 'Taller Automotriz';
$app_list_strings['marker_image_list']['castle'] = 'Castillo';
$app_list_strings['marker_image_list']['cathedral'] = 'Catedral';
$app_list_strings['marker_image_list']['chapel'] = 'Capilla';
$app_list_strings['marker_image_list']['church'] = 'Iglesia';
$app_list_strings['marker_image_list']['city_square'] = 'Area Central';
$app_list_strings['marker_image_list']['cluster'] = 'Cl??ster';
$app_list_strings['marker_image_list']['cluster_2'] = 'Cl??ster 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'Cl??ster 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'Cl??ster 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'Cl??ster 5';
$app_list_strings['marker_image_list']['coffee'] = 'Caf??';
$app_list_strings['marker_image_list']['community_centre'] = 'Centro Comunitario';
$app_list_strings['marker_image_list']['company'] = 'Compa????a';
$app_list_strings['marker_image_list']['conference'] = 'Conferencia';
$app_list_strings['marker_image_list']['construction'] = 'Construcci??n';
$app_list_strings['marker_image_list']['convenience'] = 'Conveniencia';
$app_list_strings['marker_image_list']['court'] = 'Juzgado';
$app_list_strings['marker_image_list']['cruise'] = 'Crucero';
$app_list_strings['marker_image_list']['currency_exchange'] = 'Cambio de Moneda';
$app_list_strings['marker_image_list']['customs'] = 'Aduana';
$app_list_strings['marker_image_list']['cycling'] = 'Ciclismo';
$app_list_strings['marker_image_list']['dam'] = 'Represa';
$app_list_strings['marker_image_list']['dentist'] = 'Dentista';
$app_list_strings['marker_image_list']['deptartment_store'] = 'Tienda por Departamentos';
$app_list_strings['marker_image_list']['disability'] = 'Discapacidad';
$app_list_strings['marker_image_list']['disabled_parking'] = 'Estacionamiento p/Discapacitados';
$app_list_strings['marker_image_list']['doctor'] = 'M??dico';
$app_list_strings['marker_image_list']['dog_leash'] = 'Correa p/Perros';
$app_list_strings['marker_image_list']['down'] = 'Abajo';
$app_list_strings['marker_image_list']['down_left'] = 'Abajo a la izquierda';
$app_list_strings['marker_image_list']['down_right'] = 'Abajo a la derecha';
$app_list_strings['marker_image_list']['down_then_left'] = 'Abajo luego a la izquierda';
$app_list_strings['marker_image_list']['down_then_right'] = 'Abajo luego a la derecha';
$app_list_strings['marker_image_list']['drugs'] = 'Medicamentos';
$app_list_strings['marker_image_list']['elevator'] = 'Elevador';
$app_list_strings['marker_image_list']['embassy'] = 'Embajada';
$app_list_strings['marker_image_list']['expert'] = 'Experto';
$app_list_strings['marker_image_list']['factory'] = 'F??brica';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Zona de Derrumbes';
$app_list_strings['marker_image_list']['fast_food'] = 'Comida R??pida';
$app_list_strings['marker_image_list']['festival'] = 'Festival';
$app_list_strings['marker_image_list']['fjord'] = 'Fiordo';
$app_list_strings['marker_image_list']['forest'] = 'Bosque';
$app_list_strings['marker_image_list']['fountain'] = 'Fuente';
$app_list_strings['marker_image_list']['friday'] = 'Viernes';
$app_list_strings['marker_image_list']['garden'] = 'Jard??n';
$app_list_strings['marker_image_list']['gas_station'] = 'Estaci??n de Combustible';
$app_list_strings['marker_image_list']['geyser'] = 'G??iser';
$app_list_strings['marker_image_list']['gifts'] = 'Regalos';
$app_list_strings['marker_image_list']['gourmet'] = 'Gourmet';
$app_list_strings['marker_image_list']['grocery'] = 'Almac??n';
$app_list_strings['marker_image_list']['hairsalon'] = 'Estilista';
$app_list_strings['marker_image_list']['helicopter'] = 'Helic??ptero';
$app_list_strings['marker_image_list']['highway'] = 'Autopista';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Casco Hist??rico';
$app_list_strings['marker_image_list']['home'] = 'Inicio';
$app_list_strings['marker_image_list']['hospital'] = 'Hospital';
$app_list_strings['marker_image_list']['hostel'] = 'Hostal';
$app_list_strings['marker_image_list']['hotel'] = 'Hotel';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'Hotel 1 Estrella';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'Hotel 2 Estrellas';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'Hotel 3 Estrellas';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'Hotel 4 Estrellas';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'Hotel 5 Estrellas';
$app_list_strings['marker_image_list']['info'] = 'Informaci??n';
$app_list_strings['marker_image_list']['justice'] = 'Juzgado';
$app_list_strings['marker_image_list']['lake'] = 'Lago';
$app_list_strings['marker_image_list']['laundromat'] = 'Lavander??a';
$app_list_strings['marker_image_list']['left'] = 'Izquierda';
$app_list_strings['marker_image_list']['left_then_down'] = 'Izquierda Luego Abajo';
$app_list_strings['marker_image_list']['left_then_up'] = 'Izquierda Luego Arriba';
$app_list_strings['marker_image_list']['library'] = 'Biblioteca';
$app_list_strings['marker_image_list']['lighthouse'] = 'Faro';
$app_list_strings['marker_image_list']['liquor'] = 'Licor';
$app_list_strings['marker_image_list']['lock'] = 'Candado';
$app_list_strings['marker_image_list']['main_road'] = 'Camino Principal';
$app_list_strings['marker_image_list']['massage'] = 'Masaje';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Torre de telefon??a m??vil';
$app_list_strings['marker_image_list']['modern_tower'] = 'Torre Moderna';
$app_list_strings['marker_image_list']['monastery'] = 'Monasterio';
$app_list_strings['marker_image_list']['monday'] = 'Lunes';
$app_list_strings['marker_image_list']['monument'] = 'Monumento';
$app_list_strings['marker_image_list']['mosque'] = 'Mezquita';
$app_list_strings['marker_image_list']['motorcycle'] = 'Motocicleta';
$app_list_strings['marker_image_list']['museum'] = 'Museo';
$app_list_strings['marker_image_list']['music_live'] = 'M??sica en Vivo';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Gato de bomba de aceite';
$app_list_strings['marker_image_list']['pagoda'] = 'Pagoda';
$app_list_strings['marker_image_list']['palace'] = 'Palacio';
$app_list_strings['marker_image_list']['panoramic'] = 'Panor??mica';
$app_list_strings['marker_image_list']['park'] = 'Parque';
$app_list_strings['marker_image_list']['park_and_ride'] = 'Parque y Camiata';
$app_list_strings['marker_image_list']['parking'] = 'Estacionamiento';
$app_list_strings['marker_image_list']['photo'] = 'Foto';
$app_list_strings['marker_image_list']['picnic'] = 'D??a de campo';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Lugares no Visitados';
$app_list_strings['marker_image_list']['places_visited'] = 'Lugares Visitados';
$app_list_strings['marker_image_list']['playground'] = 'Zona de juegos';
$app_list_strings['marker_image_list']['police'] = 'Polic??a';
$app_list_strings['marker_image_list']['port'] = 'Puerto';
$app_list_strings['marker_image_list']['postal'] = 'Postal';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Poste de L??nea El??ctrica';
$app_list_strings['marker_image_list']['power_plant'] = 'Planta de Energ??a';
$app_list_strings['marker_image_list']['power_substation'] = 'Subestaci??n de Energ??a';
$app_list_strings['marker_image_list']['public_art'] = 'Arte P??blico';
$app_list_strings['marker_image_list']['rain'] = 'Lluvia';
$app_list_strings['marker_image_list']['real_estate'] = 'Bienes ra??ces';
$app_list_strings['marker_image_list']['regroup'] = 'Reagrupar';
$app_list_strings['marker_image_list']['resort'] = 'Complejo';
$app_list_strings['marker_image_list']['restaurant'] = 'Restaurante';
$app_list_strings['marker_image_list']['restaurant_african'] = 'Restaurante africano';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'Restaurante barbacoa';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'Restaurante Buffet';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'Restaurante chino';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'Restaurant Mariscos';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'Restaurante pescado patatas fritas';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'Restaurante Gourmet';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'Restaurante griego';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'Restaurante indio';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'Restaurante italiano';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'Restaurante japon??s';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'Restaurante de Kebab';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'Restaurante coreano';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'Restaurante mediterr??neo';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'Restaurante mexicano';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'Restaurante rom??ntico';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'Restaurante tailand??s';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'Restaurante Turco';
$app_list_strings['marker_image_list']['right'] = 'Derecha';
$app_list_strings['marker_image_list']['right_then_down'] = 'A la derecha luego hacia abajo';
$app_list_strings['marker_image_list']['right_then_up'] = 'A la derecha luego hacia abajo';
$app_list_strings['marker_image_list']['saturday'] = 'S??bado';
$app_list_strings['marker_image_list']['school'] = 'Escuela';
$app_list_strings['marker_image_list']['shopping_mall'] = 'Centro comercial';
$app_list_strings['marker_image_list']['shore'] = 'Costa';
$app_list_strings['marker_image_list']['sight'] = 'Vista';
$app_list_strings['marker_image_list']['small_city'] = 'Ciudad Peque??a';
$app_list_strings['marker_image_list']['snow'] = 'Nieve';
$app_list_strings['marker_image_list']['spaceport'] = 'Puerto Espacial';
$app_list_strings['marker_image_list']['speed_100'] = 'Velocidad 100';
$app_list_strings['marker_image_list']['speed_110'] = 'Velocidad 110';
$app_list_strings['marker_image_list']['speed_120'] = 'Velocidad 120';
$app_list_strings['marker_image_list']['speed_130'] = 'Velocidad 130';
$app_list_strings['marker_image_list']['speed_20'] = 'Velocidad 20';
$app_list_strings['marker_image_list']['speed_30'] = 'Velocidad 30';
$app_list_strings['marker_image_list']['speed_40'] = 'Velocidad 40';
$app_list_strings['marker_image_list']['speed_50'] = 'Velocidad 50';
$app_list_strings['marker_image_list']['speed_60'] = 'Velocidad 60';
$app_list_strings['marker_image_list']['speed_70'] = 'Velocidad 70';
$app_list_strings['marker_image_list']['speed_80'] = 'Velocidad 80';
$app_list_strings['marker_image_list']['speed_90'] = 'Velocidad 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'Tope';
$app_list_strings['marker_image_list']['stadium'] = 'Estadio';
$app_list_strings['marker_image_list']['statue'] = 'Estatua';
$app_list_strings['marker_image_list']['steam_train'] = 'Tren a Vapor';
$app_list_strings['marker_image_list']['stop'] = 'Parar';
$app_list_strings['marker_image_list']['stoplight'] = 'Sem??foro';
$app_list_strings['marker_image_list']['subway'] = 'Metro';
$app_list_strings['marker_image_list']['sun'] = 'Dom';
$app_list_strings['marker_image_list']['sunday'] = 'Domingo';
$app_list_strings['marker_image_list']['supermarket'] = 'Supermercado';
$app_list_strings['marker_image_list']['synagogue'] = 'Sinagoga';
$app_list_strings['marker_image_list']['tapas'] = 'Tapas';
$app_list_strings['marker_image_list']['taxi'] = 'Taxi';
$app_list_strings['marker_image_list']['taxiway'] = 'V??a p/Taxis';
$app_list_strings['marker_image_list']['teahouse'] = 'Casa de T??';
$app_list_strings['marker_image_list']['telephone'] = 'Tel??fono';
$app_list_strings['marker_image_list']['temple_hindu'] = 'Templo Hind??';
$app_list_strings['marker_image_list']['terrace'] = 'Terraza';
$app_list_strings['marker_image_list']['text'] = 'Texto';
$app_list_strings['marker_image_list']['theater'] = 'Teatro';
$app_list_strings['marker_image_list']['theme_park'] = 'Parque Tem??tico';
$app_list_strings['marker_image_list']['thursday'] = 'Jueves';
$app_list_strings['marker_image_list']['toilets'] = 'Escusados';
$app_list_strings['marker_image_list']['toll_station'] = 'Estaci??n de peaje';
$app_list_strings['marker_image_list']['tower'] = 'Torres';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Aplicaci??n de la c??mara de tr??fico';
$app_list_strings['marker_image_list']['train'] = 'Tren';
$app_list_strings['marker_image_list']['tram'] = 'Tranv??a';
$app_list_strings['marker_image_list']['truck'] = 'Cami??n';
$app_list_strings['marker_image_list']['tuesday'] = 'Martes';
$app_list_strings['marker_image_list']['tunnel'] = 'T??nel';
$app_list_strings['marker_image_list']['turn_left'] = 'Girar a la izquierda';
$app_list_strings['marker_image_list']['turn_right'] = 'Girar a la derecha';
$app_list_strings['marker_image_list']['university'] = 'Universidad';
$app_list_strings['marker_image_list']['up'] = 'Arriba';
$app_list_strings['marker_image_list']['up_left'] = 'Arriba Izquierda';
$app_list_strings['marker_image_list']['up_right'] = 'Arriba Derecha';
$app_list_strings['marker_image_list']['up_then_left'] = 'Arriba y luego izquierda';
$app_list_strings['marker_image_list']['up_then_right'] = 'Arriba y luego derecha';
$app_list_strings['marker_image_list']['vespa'] = 'Vespa';
$app_list_strings['marker_image_list']['video'] = 'Video';
$app_list_strings['marker_image_list']['villa'] = 'Villa';
$app_list_strings['marker_image_list']['water'] = 'Agua';
$app_list_strings['marker_image_list']['waterfall'] = 'Cascada';
$app_list_strings['marker_image_list']['watermill'] = 'Molino de Agua';
$app_list_strings['marker_image_list']['waterpark'] = 'Parque Acu??tico';
$app_list_strings['marker_image_list']['watertower'] = 'Torre de Agua';
$app_list_strings['marker_image_list']['wednesday'] = 'Mi??rcoles';
$app_list_strings['marker_image_list']['wifi'] = 'WiFi';
$app_list_strings['marker_image_list']['wind_turbine'] = 'Turbina de Viento';
$app_list_strings['marker_image_list']['windmill'] = 'Molino de Viento';
$app_list_strings['marker_image_list']['winery'] = 'Viner??a';
$app_list_strings['marker_image_list']['work_office'] = 'Oficina';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'Patrimonio de la Humanidad';
$app_list_strings['marker_image_list']['zoo'] = 'Zool??gico';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'Fuera de la Oficina';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'En una reunion';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'Reprogramaci??n';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'Por favor ingrese la informaci??n para reprogramar';
$app_strings['LBL_RESCHEDULE_DATE'] = 'Fecha';
$app_strings['LBL_RESCHEDULE_REASON'] = 'Raz??n:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'Por favor, seleccione una fecha v??lida';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'Por favor seleccione el motivo';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'Reprogramaci??n';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'Historial de Intentos de Llamada';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'Intentos de Llamada';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = 'Gesti??n de la Suite de seguridad';
$app_strings['LBL_SECURITYGROUP'] = 'Grupo de seguridad';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'Cuentas de correo electr??nico saliente';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Detalles de la actividad Social';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Filtro';

$app_strings['LBL_COLLECTION_TYPE'] = 'Tipo';

$app_strings['LBL_ADD_TAB'] = 'A??adir pesta??a';
$app_strings['LBL_EDIT_TAB'] = 'Editar pesta??as';
$app_strings['LBL_SUITE_DASHBOARD'] = 'DASHBOARD DE SUITECRM';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Introduzca el nombre del tablero de control:';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'N??mero de columnas:';
$app_strings['LBL_DELETE_DASHBOARD1'] = '??Seguro que desea eliminar';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'panel de Control?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Agregar una p??gina de panel de control';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Eliminar p??gina actual de panel de control';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Cambiar el nombre de p??gina de Tablero de Control';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'ACCIONES';

$app_list_strings['collection_temp_list'] = array(
    'Tasks' => 'Tareas',
    'Meetings' => 'Reuniones',
    'Calls' => 'Llamadas',
    'Notes' => 'Notas',
    'Emails' => 'e-Mails'
);

$app_list_strings['moduleList']['TemplateEditor'] = 'Editor de Segmento de Plantilla';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "Usted ha hecho clic afuera sin guardar. Haga clic en aceptar si desea Perder sus cambios, o cancelar si desea seguir editando";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "Hubo un error al cargar el campo. La sesi??n puede haber expirado. Inicia sesi??n nuevamente para solucionar este problema";

$app_list_strings['moduleList']['AOBH_BusinessHours'] = 'Horas de Oficina';
$app_list_strings['business_hours_list']['0'] = '12:00 am';
$app_list_strings['business_hours_list']['1'] = '1: 00 Am';
$app_list_strings['business_hours_list']['2'] = '2:00 am';
$app_list_strings['business_hours_list']['3'] = '3:00 am';
$app_list_strings['business_hours_list']['4'] = '4:00 am';
$app_list_strings['business_hours_list']['5'] = '5:00 am';
$app_list_strings['business_hours_list']['6'] = '6:00 am';
$app_list_strings['business_hours_list']['7'] = '7:00 AM';
$app_list_strings['business_hours_list']['8'] = '8:00 AM';
$app_list_strings['business_hours_list']['9'] = '9:00 AM';
$app_list_strings['business_hours_list']['10'] = '10:00 AM';
$app_list_strings['business_hours_list']['11'] = '11:00 AM';
$app_list_strings['business_hours_list']['12'] = '12:00 AM';
$app_list_strings['business_hours_list']['13'] = '1:00 PM';
$app_list_strings['business_hours_list']['14'] = '2:00 PM';
$app_list_strings['business_hours_list']['15'] = '3pm';
$app_list_strings['business_hours_list']['16'] = '4pm';
$app_list_strings['business_hours_list']['17'] = '5pm';
$app_list_strings['business_hours_list']['18'] = '6pm';
$app_list_strings['business_hours_list']['19'] = '7pm';
$app_list_strings['business_hours_list']['20'] = '8pm';
$app_list_strings['business_hours_list']['21'] = '9pm';
$app_list_strings['business_hours_list']['22'] = '10pm';
$app_list_strings['business_hours_list']['23'] = '11pm';
$app_list_strings['day_list']['Monday'] = 'Lunes';
$app_list_strings['day_list']['Tuesday'] = 'Martes';
$app_list_strings['day_list']['Wednesday'] = 'Mi??rcoles';
$app_list_strings['day_list']['Thursday'] = 'Jueves';
$app_list_strings['day_list']['Friday'] = 'Viernes';
$app_list_strings['day_list']['Saturday'] = 'S??bado';
$app_list_strings['day_list']['Sunday'] = 'Domingo';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'Carta';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'Oficio';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'Vertical';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'Horizontal';


$app_list_strings['moduleList']['SurveyResponses'] = 'Respuestas de Encuestas';
$app_list_strings['moduleList']['Surveys'] = 'Encuestas';
$app_list_strings['moduleList']['SurveyQuestionResponses'] = 'Respuestas de preguntas de encuesta';
$app_list_strings['moduleList']['SurveyQuestions'] = 'Preguntas de la encuesta';
$app_list_strings['moduleList']['SurveyQuestionOptions'] = 'Opciones de pregunta en la encuesta';
$app_list_strings['survey_status_list']['Draft'] = 'Borrador';
$app_list_strings['survey_status_list']['Public'] = 'P??blico';
$app_list_strings['survey_status_list']['Closed'] = 'Cerrada';
$app_list_strings['surveys_question_type']['Text'] = 'Texto';
$app_list_strings['surveys_question_type']['Textbox'] = 'Cuadro de texto';
$app_list_strings['surveys_question_type']['Checkbox'] = 'Casilla de Verificaci??n';
$app_list_strings['surveys_question_type']['Radio'] = 'Radio';
$app_list_strings['surveys_question_type']['Dropdown'] = 'Men?? desplegable';
$app_list_strings['surveys_question_type']['Multiselect'] = 'MultiSelect';
$app_list_strings['surveys_question_type']['Matrix'] = 'Matrix';
$app_list_strings['surveys_question_type']['DateTime'] = 'Fecha y hora';
$app_list_strings['surveys_question_type']['Date'] = 'Fecha';
$app_list_strings['surveys_question_type']['Scale'] = 'Escala';
$app_list_strings['surveys_question_type']['Rating'] = 'Percepci??n';
$app_list_strings['surveys_matrix_options'][0] = 'Satisfecho';
$app_list_strings['surveys_matrix_options'][1] = 'Ni satisfecho ni insatisfecho';
$app_list_strings['surveys_matrix_options'][2] = 'Insatisfecho';

$app_strings['LBL_OPT_IN_PENDING_EMAIL_NOT_SENT'] = 'Autorizaci??n pendiente. Confirmaci??n no enviada';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_FAILED'] = 'Env??o de e-mail de confirmaci??n fallido';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_SENT'] = 'Autorizaci??n pendiente. Confirmaci??n enviada';
$app_strings['LBL_OPT_IN'] = 'Autorizado';
$app_strings['LBL_OPT_IN_CONFIRMED'] = 'Autorizaci??n Confirmada';
$app_strings['LBL_OPT_IN_OPT_OUT'] = 'Descartado';
$app_strings['LBL_OPT_IN_INVALID'] = 'Inv??lida';

/** @see SugarEmailAddress */
$app_list_strings['email_settings_opt_in_dom'] = array(
    'not-opt-in' => 'Deshabilitado',
    'opt-in' => 'Autorizado',
    'confirmed-opt-in' => 'Autorizaci??n Confirmada'
);

$app_list_strings['email_confirmed_opt_in_dom'] = array(
    'not-opt-in' => 'No autorizado',
    'opt-in' => 'Autorizado',
    'confirmed-opt-in' => 'Autorizaci??n Confirmada'
);

$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL'] = 'El e-mail de confirmaci??n de autorizaci??n ha sido agregado a la cola de mensajes para %s direcci??n(es). ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_NOT_OPT_IN'] = 'No se puede enviar e-mail a %s correo(s) porque la(s) direcci??n(es) no est??(n) autorizada(s) a recibir mensajes. ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_MISSING_EMAIL_ADDRESS_ID'] = 'La %s direcci??n de correo electr??nico no tiene un id v??lido. ';

$app_strings['ERR_TWO_FACTOR_FAILED'] = 'Fall?? la Autenticaci??n de dos factores';
$app_strings['ERR_TWO_FACTOR_CODE_SENT'] = 'Se ha enviado c??digo de Autenticaci??n de dos factores.';
$app_strings['ERR_TWO_FACTOR_CODE_FAILED'] = 'El env??o del c??digo de autenticaci??n en dos factores ha fallado.';
$app_strings['LBL_THANKS_FOR_SUBMITTING'] = 'Gracias por enviar su inter??s.';

$app_strings['ERR_IP_CHANGE'] = 'Hemos finalizado su sesi??n debido a un cambio significativo en su direcci??n IP';
$app_strings['ERR_RETURN'] = 'Volver al Inicio';


$app_list_strings['oauth2_grant_type_dom'] = array(
    'password' => 'Otorgar Contrase??a',
    'client_credentials' => 'Credenciales de cliente',
    'implicit' => 'Impl??cito',
    'authorization_code' => 'C??digo de autorizaci??n'
);

$app_list_strings['oauth2_duration_units'] = [
    'minute' => 'minutos',
    'hour' => 'horas',
    'day' => 'd??as',
    'week' => 'semanas',
    'month' => 'meses',
];

$app_list_strings['search_controllers'] = [
    'Search' => 'B??squeda (nueva)',
    'UnifiedSearch' => 'B??squeda global unificada (obsoleta)'
];


$app_strings['LBL_DEFAULT_API_ERROR_TITLE'] = 'Error en API JSON';
$app_strings['LBL_DEFAULT_API_ERROR_DETAIL'] = 'Error en API JSON.';
$app_strings['LBL_API_EXCEPTION_DETAIL'] = 'Versi??n de API: 8';
$app_strings['LBL_BAD_REQUEST_EXCEPTION_DETAIL'] = 'Por favor, aseg??rese de rellenar todos los campos requeridos';
$app_strings['LBL_EMPTY_BODY_EXCEPTION_DETAIL'] = 'Json API espera que el cuerpo de la solicitud sea JSON';
$app_strings['LBL_INVALID_JSON_API_REQUEST_EXCEPTION_DETAIL'] = 'No se puede validar la solicitud de carga ??til Json Api';
$app_strings['LBL_INVALID_JSON_API_RESPONSE_EXCEPTION_DETAIL'] = 'No se puede validar la respuesta de carga ??til Json Api';
$app_strings['LBL_MODULE_NOT_FOUND_EXCEPTION_DETAIL'] = 'Json API no puede encontrar recursos';
$app_strings['LBL_NOT_ACCEPTABLE_EXCEPTION_DETAIL'] = 'JSON API espera el encabezado "Accept" para ser application/vnd.api+json';
$app_strings['LBL_UNSUPPORTED_MEDIA_TYPE_EXCEPTION_DETAIL'] = 'JSON API espera el encabezado "Content-Type" que application/vnd.api+json';

$app_strings['MSG_BROWSER_NOTIFICATIONS_ENABLED'] = 'Las notificaciones de escritorio est??n ahora habilitadas para este navegador web.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_DISABLED'] = 'Las notificaciones de escritorio est??n desactivadas para este navegador web. Utilice las preferencias de su navegador para habilitarlas otra vez.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_UNSUPPORTED'] = 'Este navegador no es compatible con las notificaciones de escritorio.';

$app_strings['LBL_GOOGLE_SYNC_ERR'] = 'Error SuiteCRM Google Sync';
$app_strings['LBL_THERE_WAS_AN_ERR'] = 'Se ha producido un error: ';
$app_strings['LBL_CLICK_HERE'] = 'Haga clic aqu??';
$app_strings['LBL_TO_CONTINUE'] = ' para continuar.';
$app_strings['LBL_OPT_OUT'] = 'Salida Opcional';
$app_strings['LBL_INVALID_EMAIL'] = 'Inv??lida';
$app_strings['LBL_PRIMARY'] = 'Principal';
$app_strings['LBL_EMAIL_ADDRESS'] = 'e-Mail';

$app_strings['IMAP_HANDLER_ERROR'] = 'ERROR: {error}; la clave era: "{key}".';
$app_strings['IMAP_HANDLER_SUCCESS'] = 'OK: configuraci??n de prueba cambiada a "{key}"';
$app_strings['IMAP_HANDLER_ERROR_INVALID_REQUEST'] = 'Solicitud inv??lida, use el valor "{var}".';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN_BY_KEY'] = 'Se produjo un error desconocido, la clave "{key}" no fue guardada.';
$app_strings['IMAP_HANDLER_ERROR_NO_TEST_SET'] = 'Las configuraciones de prueba no existen.';
$app_strings['IMAP_HANDLER_ERROR_NO_KEY'] = 'Clave no encontrada.';
$app_strings['IMAP_HANDLER_ERROR_KEY_SAVE'] = 'Error al guardar la clave.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN'] = 'Error desconocido';
$app_strings['LBL_SEARCH_TITLE']                   = 'B??squeda';
$app_strings['LBL_SEARCH_TEXT_FIELD_TITLE_ATTR']   = 'Criterios de b??squeda';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_TITLE_ATTR'] = 'B??squeda';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_VALUE']      = 'B??squeda';
$app_strings['LBL_SEARCH_QUERY']                   = 'B??squeda: ';
$app_strings['LBL_SEARCH_RESULTS_PER_PAGE']        = 'Resultados por p??gina: ';
$app_strings['LBL_SEARCH_ENGINE']                  = 'Buscador: ';
$app_strings['LBL_SEARCH_TOTAL'] = 'Resultados Totales: ';
$app_strings['LBL_SEARCH_PREV'] = 'Anterior';
$app_strings['LBL_SEARCH_NEXT'] = 'Siguiente';
$app_strings['LBL_SEARCH_PAGE'] = 'P??gina ';
$app_strings['LBL_SEARCH_OF'] = ' de ';
$app_strings['LBL_INSIGHTS'] = 'Perspectivas';
$app_strings['LBL_CHARTS'] = 'Gr??ficos';
$app_strings['LBL_CHART_NOT_FOUND'] = 'Gr??fico no encontrado';
$app_strings['LBL_NO_DATA'] = 'Sin datos';
$app_strings['LBL_ERROR_FETCHING_METADATA'] = 'Ocurri?? un error al recuperar metadatos';
$app_strings['LBL_TOTAL'] = 'Total';
$app_strings['LBL_ACTIONS'] = 'Acciones';
$app_strings['LBL_SELECT_SUBPANEL_BANNER'] = 'Seleccionar qu?? subpaneles ver';
$app_strings['LBL_SELECT_ITEM'] = 'Seleccione un elemento';
$app_strings['LBL_WIDGET_NOT_FOUND'] = 'Widget no encontrado';
$app_strings['LBL_BAD_CONFIG'] = 'Configuraci??n incorrecta';
$app_strings['LBL_CONFIG_BAD_CONTEXT'] = 'Configuraci??n incorrecta: contexto no configurado correctamente';
$app_strings['LBL_CONFIG_NO_CONFIG'] = 'Configuraci??n incorrecta: falta la configuraci??n';
$app_strings['LBL_CONFIG_NO_STATISTICS_KEY'] = 'Configuraci??n incorrecta: falta la clave de estad??sticas';
$app_strings['LBL_STATISTIC_ERROR'] = 'Error al cargar estad??stica';
$app_strings['LBL_STATISTIC_ERROR_DESC'] = 'Error al cargar estad??stica';
$app_strings['LBL_STATISTIC_ERROR_DESC_TOOLTIP'] = 'Error al cargar estad??sticas. P??ngase en contacto con su administrador';
$app_strings['LBL_AVERAGE_CLOSED_WON_PER_YEAR'] = 'Promedio de oportunidades ganadas por a??o';
$app_strings['LBL_OPPORTUNITIES_TOTAL'] = 'Oportunidad Valor';
$app_strings['LBL_CASE_TOTAL_DAYS_OPEN'] = 'D??as totales abiertos';
$app_strings['LBL_DAYS_OPEN'] = 'D??as abiertos';
$app_strings['LBL_DAYS_IN_SALE_STAGE'] = 'Esta oportunidad ha estado en esta etapa de ventas para';
$app_strings['LBL_STAT_DAYS'] = 'D??a(s)';
$app_strings['LBL_CLOSED_PER_YEAR'] = 'Cerrado por a??o';
$app_strings['LBL_WAS_OPEN'] = 'Este caso fue abierto para';
$app_strings['LBL_HAS_BEEN_OPEN'] = 'Este caso ha sido abierto para';
$app_strings['LBL_NUMBER_OF_CASES_PER_ACCOUNT'] = 'N??mero de casos por cuenta';
$app_strings['LBL_TOTAL_CASES_FOR_THIS_ACCOUNT'] = 'Casos totales para esta cuenta: ';
$app_strings['LBL_NONE_OUTSTANDING'] = 'Ninguno';
$app_strings['LBL_VALIDATION_ERROR_REQUIRED'] = 'Falta el campo obligatorio: {{fields.field.label}}';
$app_strings['LBL_VALIDATION_ERROR_CURRENCY_FORMAT'] = "Formato de moneda no v??lido. Esperado: '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_INT_FORMAT'] = "Formato de int no v??lido. Esperado: '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_FLOAT_FORMAT'] = "Formato decimal no v??lido. Esperado: '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_DATE_FORMAT'] = "Formato de fecha no v??lido. Esperado: '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_DATETIME_FORMAT'] = "Formato de fecha no v??lido. Esperado: '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_EMAIL_FORMAT'] = "Formato de correo electr??nico no v??lido. Esperado: '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_PHONE_FORMAT'] = "Formato de tel??fono inv??lido.";
$app_strings['LBL_VALIDATION_ERROR_MIN'] = "Valor no v??lido. El valor debe ser mayor o igual a '{{context.min}}'";
$app_strings['LBL_VALIDATION_ERROR_MAX'] = "Valor no v??lido. El valor debe ser menor o igual a '{{context.max}}'";
$app_strings['LBL_MULTIPLE_PRIMARY_EMAIL_VALIDATION_ERROR'] = "S??lo una direcci??n de correo electr??nico puede ser marcada como principal";
$app_strings['LBL_DUPLICATE_EMAIL_VALIDATION_ERROR'] = "No se permiten direcciones de correo electr??nico duplicadas";
$app_strings['LBL_NO_PRIMARY_EMAIL_VALIDATION_ERROR'] = "Una direcci??n de correo electr??nico debe ser marcada como principal";
$app_strings['LBL_VALIDATION_ERRORS'] = 'Hay errores de validaci??n, no se puede realizar la acci??n.';
$app_strings['LBL_TYPE_TO_SEARCH'] = 'Escriba para buscar...';
$app_strings['LBL_SEARCHING'] = 'buscando...';
$app_strings['LBL_NOT_FOUND'] = 'No encontrado.';
$app_strings['LBL_SEARCH_ERROR'] = 'Error de b??squeda.';
$app_strings['LBL_FOUND'] = 'Encontrado';
$app_strings['LBL_GET_RECORD_LIST_ERROR'] = 'Se produjo un error al guardar los datos';
$app_strings['LBL_NUMBER_OF_RECORDS'] = 'N??mero total de registros';
$app_strings['LBL_FORWARD_SLASH'] = '/';
$app_strings['LBL_CASES_INSIGHT'] = ' {{fields.cases.value}} ( {{fields.default.value}} )';
$app_strings['LBL_INVOICES_INSIGHT'] = ' {{fields.invoices.value}} ( {{fields.default.value}} )';
$app_strings['LBL_CONTRACT_RENEWAL_TOOLTIP'] = 'Fecha de la pr??xima renovaci??n de contrato';
$app_strings['LBL_INVOICES_OVERDUE_TOOLTIP'] = 'N??mero total de facturas atrasadas';
$app_strings['LBL_ACTIVITIES_NEXT_DATE_TOOLTIP'] = 'Fecha de la siguiente interacci??n';
$app_strings['LBL_CAMPAIGN_LAST_RECEIVED_TOOLTIP'] = 'Fecha de la campa??a m??s reciente recibida';
$app_strings['LBL_OPEN_CASES_COUNT_TOOLTIP'] = 'N??mero total de Casos Abiertos';
$app_strings['LBL_EVENTS_LAST_DATE_TOOLTIP'] = 'Fecha del evento m??s reciente';
$app_strings['LBL_HISTORY_LAST_DATE_TOOLTIP'] = 'Fecha de la interacci??n m??s reciente';
$app_strings['LBL_OPPORTUNITIES_TOTAL_SUM_TOOLTIP'] = 'Suma total de oportunidades';
$app_strings['LBL_QUOTES_EXPIRY_TOOLTIP'] = 'Fecha del pr??ximo vencimiento del presupuesto';
$app_strings['LBL_DEFAULT_TOTAL_TOOLTIP'] = 'N??mero total de registros';
$app_strings['LBL_CONTRACT_RENEWAL'] = 'Fecha de renovaci??n';
$app_strings['LBL_INVOICES_OVERDUE'] = 'Total Vencido';
$app_strings['LBL_ACTIVITIES_NEXT_DATE'] = 'Pr??xima fecha de actividad';
$app_strings['LBL_CAMPAIGN_LAST_RECEIVED'] = '??ltima participaci??n';
$app_strings['LBL_OPEN_CASES_COUNT'] = 'Casos abiertos';
$app_strings['LBL_EVENTS_LAST_DATE'] = '??ltimo evento atendido';
$app_strings['LBL_HISTORY_LAST_DATE'] = '??ltimo Tochpoint';
$app_strings['LBL_OPPORTUNITIES_TOTAL_SUM'] = 'Valor total';
$app_strings['LBL_QUOTES_EXPIRY'] = 'Pr??xima fecha de vencimiento';
$app_strings['LBL_DEFAULT_TOTAL'] = 'Total';
$app_strings['AOS_Contracts'] = 'Contratos';
$app_strings['AOS_Quotes'] = 'Cotizaciones';
$app_strings['AOS_Invoices'] = 'Facturas';
$app_strings['LBL_PHOTO'] = 'Foto';
$app_strings['LBL_CASE_UPDATES'] = 'Actualizaciones de Casos';
$app_strings['LBL_CASE_UPDATE_SUBMITTED'] = 'Actualizaci??n de Caso Enviada';
$app_strings['LBL_SUMMARY_DEFAULT'] = "{{fields.name.value}}";
$app_strings['LBL_SUMMARY_PERSON'] = "{{fields.salutation.value}} {{fields.first_name.value}} {{fields.last_name.value}}";
$app_strings['LBL_CREATE'] = 'Nuevo';
$app_strings['LBL_SAVED_FILTER_SAVED'] = 'Filtro guardado correctamente';
$app_strings['LBL_FILTER_ID_NOT_DEFINED'] = 'Id de filtro no definido';
$app_strings['LBL_GENERIC_CONFIRMATION'] = '??Desea continuar con la acci??n?';
$app_strings['LBL_SHOW_MORE'] = 'Mostrar m??s';
$app_strings['LBL_SHOW_LESS'] = 'Mostrar menos';
$app_strings['LBL_LOAD_MORE'] = 'Cargar m??s';
$app_strings['LBL_EMPTY'] = '-- Vac??o -- ';
$app_strings['LBL_OPERATOR'] = 'Operador';
$app_strings['LBL_START'] = 'Inicio';
$app_strings['LBL_END'] = 'Fin';
$app_strings['LBL_LINE_ITEMS_FIELD_CONFIG'] = 'Configuraci??n incorrecta';


$app_strings['LBL_ACTION_SUCCESS'] = 'Acci??n exitosa';

$app_strings['LBL_YES'] = 'S??';
$app_strings['LBL_NO'] = 'No';

$app_list_strings['sort_order'] = [];
$app_list_strings['sort_order']['asc'] = 'Ascendente';
$app_list_strings['sort_order']['desc'] = 'Descendente';

// Labels used by subpanel unlink relationship process
$app_strings['LBL_LINK'] = 'Enlace';
$app_strings['LBL_UNLINK_RECORD'] = 'Desvincular registro';
$app_strings['LBL_EDIT_RECORD'] = 'Editar registro';
$app_strings['LBL_UNLINK_RELATIONSHIP_CONFIRM'] = '??Est?? seguro que desea desvincular este registro? S??lo la relaci??n se desvincular??. El registro no se eliminar??.';
$app_strings['LBL_UNLINK_RELATIONSHIP_SUCCESS'] = 'Registro desvinculado correctamente.';
$app_strings['LBL_UNLINK_RELATIONSHIP_FAILED'] = 'Se ha producido un error al desvincular este registro.';
$app_strings['LBL_LINK_RELATIONSHIP_SUCCESS'] = 'Relaci??n enlazada con ??xito.';
$app_strings['LBL_LINK_RELATIONSHIP_FAILED'] = 'Se ha producido un error al vincular esta relaci??n.';
$app_strings['LBL_MODULE_NOT_FOUND'] = 'M??dulo no encontrado.';
$app_strings['LBL_RECORD_NOT_FOUND'] = 'No se puede cargar el registro';
$app_strings['LBL_RELATIONSHIP_LOAD_ERROR'] = 'No se puede cargar la relaci??n';
$app_strings['LBL_NOT_LINKED'] = 'No se puede desenlazar. Los registros no est??n enlazados';
$app_strings['LBL_ACCESS_DENIED'] = 'Acceso Denegado';
$app_strings['LBL_ADD_RECORDS_TO_TARGET_LIST_SUCCESS'] = 'Registros a??adidos a la lista de destino con ??xito.';
$app_strings['LBL_ADD_RECORDS_TO_TARGET_LIST_FAILED'] = 'Hubo un error al a??adir registros a la lista de destino.';
$app_strings['LBL_ADD_CONTACTS_TO_TARGET_LIST_SUCCESS'] = 'Contactos a??adidos a la lista de P??blico Objetivo con ??xito.';
$app_strings['LBL_ADD_CONTACTS_TO_TARGET_LIST_FAILED'] = 'Hubo un error al a??adir contactos a la lista P??blico Objetivo.';
$app_strings['LBL_CHANGED_TO_TEXT'] = 'cambiado a';
$app_strings['LBL_RECORD_CHANGED'] = 'Registro actualizado';
$app_strings['LBL_CREATE'] = "Nuevo";
$app_strings['LBL_USE_ADVANCED_SEARCH'] = 'Usar b??squeda avanzada';
$app_strings['LBL_USE_BASIC_SEARCH'] = 'Usar b??squeda b??sica';
$app_strings['LBL_NO_MODULE_SELECTED'] = 'Ning??n m??dulo seleccionado';
$app_strings['LBL_CLOSE_MENU'] = 'Cerrar men??';
$app_strings['LOGIN_INCORRECT'] = 'Datos de inicio de sesi??n incorrectos; vuelve a intentarlo.';
$app_strings['LOGIN_TOO_MANY_FAILED'] = 'Demasiados intentos de inicio de sesi??n incorrectos. Intente de nuevo m??s tarde.';

// PDF Engines
$app_strings['LBL_LEGACY_MPDF_ENGINE'] = 'Motor MPDF antiguo';
$app_strings['LBL_TCPDF_ENGINE'] = 'Motor TCPDF';


$app_strings['ERR_INVALID_FILE_NAME'] = 'Nombre de archivo inv??lido:';
$app_strings['LBL_LOGGER_VALID_FILENAME_CHARACTERS'] = 'Esto s??lo puede ser caracteres alfanum??ricos, m??s \'.\', \'-\' y \'_\'';
$app_strings['LBL_LOGGER_INVALID_FILENAME'] = 'Nombre de archivo de importaci??n no v??lido';
