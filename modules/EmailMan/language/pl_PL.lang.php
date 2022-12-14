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
    'LBL_SEND_DATE_TIME' => 'Wy??lij Dat??',
    'LBL_IN_QUEUE' => 'W kolejce?',
    'LBL_IN_QUEUE_DATE' => 'Data kolejkowania',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Tylko cyfry s?? dozwolone przy okre??laniu Liczby wiadomo??ci wysy??anych w serii',

    'LBL_ATTACHMENT_AUDIT' => ' zosta??y wys??ane. Nie zosta??y zduplikowane lokalnie, by nie zajmowa?? miejsca na dysku.',
    'LBL_CONFIGURE_SETTINGS' => 'Konfiguruj',
    'LBL_CUSTOM_LOCATION' => 'Definiowane przez u??ytkownika',
    'LBL_DEFAULT_LOCATION' => 'Domy??lne',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'Usu?? po????czone notatki i za????czniki po????czone z usuni??tymi e-mailami',
    'LBL_EMAIL_WARNING_NOTIFICATIONS' => 'Ostrze??enia e-mail',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'Ustawienia zgody na przetwarzanie danych osobowych',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'Automatycznie wy??lij e-mail w sprawie zgody na przetwarzanie danych osobowych',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'Szablon email potwierdzenia zgody na przetwarzanie danych osobowych',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'Konfiguracja poczty wychodz??cej',
    'LBL_EMAILS_PER_RUN' => 'Liczba wiadomo??ci wysy??anych w serii:',
    'LBL_ID' => 'Id',
    'LBL_LIST_CAMPAIGN' => 'Kampania reklamowa',
    'LBL_LIST_FORM_TITLE' => 'Oczekuj??ce',
    'LBL_LIST_FROM_NAME' => 'Nazwa nadawcy',
    'LBL_LIST_IN_QUEUE' => 'W trakcie',
    'LBL_LIST_MESSAGE_NAME' => 'Wiadomo???? marketingowa',
    'LBL_LIST_RECIPIENT_EMAIL' => 'Adres odbiorcy',
    'LBL_LIST_RECIPIENT_NAME' => 'Nazwa odbiorcy',
    'LBL_LIST_SEND_ATTEMPTS' => 'Pr??ba wys??ania',
    'LBL_LIST_SEND_DATE_TIME' => 'Wys??ane O',
    'LBL_LIST_USER_NAME' => 'Nazwa u??ytkownika',
    'LBL_LOCATION_ONLY' => 'Lokalizacja',
    'LBL_LOCATION_TRACK' => 'Lokalizacja pliku ??ledzenia trwania kampanii (jak campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY' => 'Zachowaj kopi?? wiadomo??ci kampanii:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'Czy chcesz zachowa?? kompletn?? kopi?? wiadomo??ci wys??anych podczas wszystkich kampani? <bold>Zaleca si?? pozostawienie opcji w domy??lnym ustawieniu - nie</bold>. Wybieraj??c nie, zachowane zostan?? wzory i niezb??dne zmienne wiadomo??ci, aby odtworzy?? indywidualn?? wiadomo????.',
    'LBL_MAIL_SENDTYPE' => 'Agenta przekazywania poczty MTA:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'U??yj uwierzytelniania SMTP:',
    'LBL_MAIL_SMTPPASS' => 'Has??o:',
    'LBL_MAIL_SMTPPORT' => 'Port SMTP:',
    'LBL_MAIL_SMTPSERVER' => 'Serwer poczty SMTP:',
    'LBL_MAIL_SMTPUSER' => 'Nazwa u??ytkownika SMTP:',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Wybierz dostawc?? poczty e-mail',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Has??o',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail u??ytkonika',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Has??o',
    'LBL_GMAIL_SMTPUSER' => 'Adres e-mail na Gmailu',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange Has??o',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange Nazwa u??ytkownika',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Port',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Serwer',
    'LBL_EMAIL_LINK_TYPE' => 'Klient poczty e-mail',
    'LBL_MARKETING_ID' => 'Marketing Id',
    'LBL_MODULE_ID' => 'EmailiMan',
    'LBL_MODULE_NAME' => 'Ustawienia poczty e-mail',
    'LBL_MODULE_TITLE' => 'Zarz??dzanie kolejkowaniem masowej wysy??ki',
    'LBL_NOTIFICATION_ON_DESC' => 'Wysy??aj powiadomienie e-mailem, gdy rekordy s?? przydzielane u??ytkownikowi.',
    'LBL_NOTIFY_FROMADDRESS' => 'Adres "Od":',
    'LBL_NOTIFY_FROMNAME' => 'Nazwa "Od":',
    'LBL_NOTIFY_ON' => 'Powiadomienia w????czone?',
    'LBL_NOTIFY_TITLE' => 'Opcje poczty e-mail',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'Opcje dla wiadomo??ci wychodz??cych',
    'LBL_RELATED_ID' => 'Powi??zany Id',
    'LBL_RELATED_TYPE' => 'Powi??zany typ',
    'LBL_SEARCH_FORM_TITLE' => 'Przeszukaj oczekuj??ce',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Warto???? zmiennej site_urlw pliku Config.php',
    'TXT_REMOVE_ME_ALT' => 'Aby usun???? siebie z listy wysy??kowej id?? do',
    'TXT_REMOVE_ME_CLICK' => 'kliknij tutaj',
    'TXT_REMOVE_ME' => 'Aby usun???? siebie z tej listy wysy??kowej ',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'Wy??lij powiadomienie z adresu e-mail u??ytkownika przypisuj??cego rekord',

    'LBL_SECURITY_TITLE' => 'Ustawienia zabezpiecze?? wiadomo??ci pocztowych',
    'LBL_SECURITY_DESC' => 'Poni??ej zaznacz elementy, kt??re NIE powinny by?? dozwolone w poczcie przychodz??cej, lub wy??wietlane w Module Poczty.',
    'LBL_SECURITY_APPLET' => 'Znacznik apletu',
    'LBL_SECURITY_BASE' => 'Znacznik podstawowy',
    'LBL_SECURITY_EMBED' => 'Znacznik osadzony',
    'LBL_SECURITY_FORM' => 'Znacznik formularza',
    'LBL_SECURITY_FRAME' => 'Znacznik ramki',
    'LBL_SECURITY_FRAMESET' => 'Znacznik zestawu ramek',
    'LBL_SECURITY_IFRAME' => 'Znacznik iFrame',
    'LBL_SECURITY_IMPORT' => 'Znacznik importu',
    'LBL_SECURITY_LAYER' => 'Znacznik warstwy',
    'LBL_SECURITY_LINK' => 'Znacznik linku',
    'LBL_SECURITY_OBJECT' => 'Znacznik obiektu',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'Wybierz domy??lne minimalne ??rodki bezpiecze??stwa Outlooka (b????dy na prawid??owo wy??wietlonej stronie).',
    'LBL_SECURITY_STYLE' => 'Znacznik stylu',
    'LBL_SECURITY_TOGGLE_ALL' => 'Zaznacz wszystko',
    'LBL_SECURITY_XMP' => 'Znacznik Xmp',
    'LBL_YES' => 'Tak',
    'LBL_NO' => 'Nie',
    'LBL_PREPEND_TEST' => '[Test]: ',
    'LBL_SEND_ATTEMPTS' => 'Pr??ba wys??ania',
    'LBL_OUTGOING_SECTION_HELP' => 'Konfiguracja domy??lna serwera poczty wychodz??cej do wysy??ania powiadomie??, w tym powiadomie?? obiegu informacji.',
    'LBL_ALLOW_DEFAULT_SELECTION' => "U??ytkownicy mog?? wysy??a?? u??ywaj??c to??samo??ci tego konta:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Kiedy ta opcja jest zaznaczona, u??ytkownicy b??d?? mogli wysy??a?? e-maile przy u??yciu tego samego konta poczty wychodz??cej, kt??re u??ywane jest do wysy??ania powiadomie?? systemowych i alert??w.<br> Je??li opcja nie jest zaznaczona, u??ytkownicy b??d?? mogli korzysta?? z serwera poczty wychodz??cej po podaniu swoich danych.',
    'LBL_FROM_ADDRESS_HELP' => 'Po w????czeniu tej opcji nazwisko i adres e-mail przydzielonych u??ytkownik??w zostanie uwzgl??dniony w polu Od wiadomo??ci e-mail. Ta funkcja mo??e nie dzia??a?? z serwerami SMTP, kt??re nie pozwalaj?? wysy??anie z innego konta e-mail ni?? konto serwera.',
    'LBL_HELP' => 'Pomoc' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'Przegl??daj konta poczty wychodz??cej',
    'LBL_ALLOW_SEND_AS_USER' => 'U??ytkownicy mog?? wysy??a?? jako oni sami:',
    'LBL_ALLOW_SEND_AS_USER_DESC' => 'Gdy opcja jest w????czona, <b>wszyscy</b> u??ytkownicy mog?? wysy??a?? wiadomo??ci e-mail, za pomoc?? serwera poczty wychodz??cej, przy u??yciu adresu e-mail jako &quot;od:&quot; adres.<br>Funkcja ta mo??e nie dzia??a?? z serwerami SMTP, kt??re nie zezwalaj?? na wysy??anie z innego konta e-mail ni?? konto serwera.',
);
