<?php
/**
 * PostNuke Application Framework
 *
 * @copyright (c) 2001, PostNuke Development Team
 * @link http://www.postnuke.com
 * @version $Id: core.php 20671 2006-11-29 17:28:16Z landseer $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 */

// date and time defines
define('_DATE','Datum');
define('_DATEBRIEF','%d. %b %Y');
define('_DATELONG','%A, %d. %B %Y');
define('_DATESTRING','%A, %d. %B %Y um %H:%M Uhr');
define('_DATETIMEBRIEF','%d.%m.%Y, %H:%M Uhr');
define('_DATETIMELONG','%A, %d. %B %Y, %H:%M Uhr');
define('_DATEINPUT', '%Y-%m-%d'); // Dateformat for input fields (parsable - do not try other formats!)
define('_DATETIMEINPUT', '%Y-%m-%d %H:%M'); // Date+time format for input fields (parsable - do not try other formats!)
define('_DATEFIRSTWEEKDAY', 0); // 0 = Sunday, 1 Monday and so on
define('_DAY_OF_WEEK_LONG','Sonntag Montag Dienstag Mittwoch Donnerstag Freitag Samstag');
define('_DAY_OF_WEEK_SHORT','Son Mon Die Mit Don Fre Sam');
define('_MONTH_LONG','Januar Februar M�rz April Mai Juni Juli August September Oktober November Dezember');
define('_MONTH_SHORT','Jan Feb Mar Apr May Jun Jul Aug Sep Oct Nov Dec');
define('_TIME', 'Zeit');
define('_TIMEBRIEF','%H:%M');
define('_TIMELONG','%T %p');
define('_TIMEFORMAT', 24);  // use 12/24 depending on country
define('_SECOND', 'Sekunde');
define('_SECONDS', 'Sekunden');
define('_MINUTE', 'Minute');
define('_MINUTES', 'Minuten');
define('_DAY', 'Tag');
define('_DAYS', 'Tage');
define('_WEEK', 'Woche');
define('_WEEKS', 'Wochen');
define('_MONTH', 'Monat');
define('_MONTHS', 'Monate');
define('_YEAR', 'Jahr');
define('_YEARS', 'Jahre');
define('_NOTAVALIDDATE', 'ung�ltiges Datum');
define('_NOTAVALIDINT', 'ung�ltige Zahl');
define('_NOTAVALIDNUMBER', 'ung�ltige Zahl');
define('_NOTAVALIDEMAIL', 'ung�ltige Emailadresse');
define('_NOTAVALIDURL', 'ung�ltige URL');

// time zone defines
define('_TIMEZONES','GMT-12 GMT-11 HST GMT-9:30 AKST PST MST CST EST AST GMT-3:30 GMT-3 GMT-2 GMT-1 GMT CET EET GMT+3 GMT+3:30 GMT+4 GMT+4:30 GMT+5 GMT+5:30 GMT+5:45 GMT+6 GMT+6:30 GMT+7 AWST ACDT JST ACST AEST GMT+11 GMT+11:30 GMT+12 GMT+12:45 GMT+13 GMT+14');
define('_TZOFFSETS','-12 -11 -10 -9.5 -9 -8 -7 -6 -5 -4 -3.5 -3 -2 -1 0 1 2 3 3.5 4 4.5 5 5.5 5.75 6 6.5 7 8 9 9.5 10 10.5 11 11.5 12 12.75 13 14');

// locale defines
define('_CHARSET','ISO-8859-15');
define('_LOCALE','de_DE');
define('_LOCALEWIN', 'deu');

// common footer defines
define('_CMSHOMELINK', '<a href="http://www.pn-cms.de">PostNuke CMS</a>');
define('_XHTMLVALIDATORLINK', '<a href="http://validator.w3.org/check?uri=referer">XHTML</a>');
define('_CSSVALIDATORLINK', '<a href="http://jigsaw.w3.org/css-validator/">CSS</a>');
define('_ISPOWEREDBY', 'is powered by');

// common words
define('_POSTNUKE', 'PostNuke');
define('_ALL','Alle');
define('_AND','und');
define('_BY','von');
define('_DOWN','runter');
define('_FOR', 'f�r');
define('_NO','Nein');
define('_OF','von');
define('_OK','OK');
define('_ON','am');
define('_OR', 'oder');
define('_TO','an');
define('_UP','hoch');
define('_URL', 'URL');
define('_YES','Ja');

// on/off states
define('_ONOFF_ON','Ein');
define('_ONOFF_OFF', 'Aus');
define('_OFF_UC','Aus');
define('_ON_UC','Ein');

// standard permissions levels
define('_ACCESS_ADD','Hinzuf�gen');
define('_ACCESS_ADMIN','Administrieren');
define('_ACCESS_COMMENT','Kommentieren');
define('_ACCESS_DELETE','L�schen');
define('_ACCESS_EDIT','Editieren');
define('_ACCESS_MODERATE','Moderieren');
define('_ACCESS_NONE','Keine Rechte');
define('_ACCESS_OVERVIEW','�bersicht');
define('_ACCESS_READ','Lesen');

// extended (pnobjlib) permission levels
define('_PN_TEXT_PERMISSION_BASIC_PRIVATE', 'Privat');
define('_PN_TEXT_PERMISSION_BASIC_GROUP', 'Gruppe');
define('_PN_TEXT_PERMISSION_BASIC_PUBLIC', '�ffentlich');
define('_PN_TEXT_PERMISSION_BASIC_USER', 'Benutzer');
define('_PN_TEXT_PERMISSION_LEVEL_NONE', 'Keine');
define('_PN_TEXT_PERMISSION_LEVEL_READ', 'Lesen');
define('_PN_TEXT_PERMISSION_LEVEL_WRITE', 'Schreiben');
define('_PN_TEXT_NOAUTH_NONE', 'Keine Zugriffsrechte f�r dieses Modul.');
define('_PN_TEXT_NOAUTH_OVERVIEW', 'Keine Rechte zur �bersicht f�r dieses Modul.');
define('_PN_TEXT_NOAUTH_READ',  'Keine Leserechte f�r dieses Modul.');
define('_PN_TEXT_NOAUTH_COMMENT', 'Keine Rechte zur Kommentierung f�r dieses Modul.');
define('_PN_TEXT_NOAUTH_MODERATION', 'Keine Moderationsrechte f�r dieses Modul.');
define('_PN_TEXT_NOAUTH_EDIT', 'Keine Bearbeitungsrechte f�r dieses Modul.');
define('_PN_TEXT_NOAUTH_ADD', 'Keine Rechte zum Hinzuf�gen f�r dieses Modul.');
define('_PN_TEXT_NOAUTH_DELETE', 'Keine Rechte zum L�schen f�r dieses Modul.');
define('_PN_TEXT_NOAUTH_ADMIN', 'Keine Administrationsrechte f�r dieses Modul.');

// common actions & results
define('_ACTIONS', 'Aktionen');
define('_ACTION', 'Aktion');
define('_ACTIVATE','Aktivieren');
define('_ACTIVE','Aktiv');
define('_ACTIVATED', 'aktiviert');
define('_ADD','Hinzuf�gen');
define('_BACK', 'zur�ck');
define('_CANCEL', 'Abbruch');
define('_CLEAR', 'L�schen');
define('_CLOSE', 'Schlie�en');
define('_CONFIRM', 'Best�tigen');
define('_CONTINUE', 'Weiter');
define('_COMMIT', 'Best�tigen');
define('_COPY', 'Kopieren');
define('_CREATE', 'Anlegen');
define('_DEACTIVATE','Deaktivieren');
define('_DEACTIVATED', 'deaktiviert');
define('_DEFAULT', 'Vorgabe');
define('_DEFAULTS', 'Vorgaben');
define('_DELETE','L�schen');
define('_DETAILS', 'Details');
define('_EDIT','Editieren');
define('_FORWARD', 'weiter');
define('_HELP', 'Hilfe');
define('_HELPPAGE', 'Hilfeseite');
define('_MESSAGESYOUMIGHTSEE', 'M�gliche Meldungen');
define('_CONFIRMATIONPROMPT', 'Best�tigungsaufforderung');
define('_IGNORE','Ignorieren');
define('_INACTIVE','Inaktiv');
define('_LOGIN','Anmelden');
define('_LOGIN_FLC','Anmelden');
define('_LOGOUT','Abmelden');
define('_MODIFY','Modifizieren');
define('_MOVE', 'Bewegen');
define('_NEW','Neu');
define('_NEXT', 'weiter');
define('_OPEN', '�ffnen');
define('_PREVIOUS', 'zur�ck');
define('_REMOVE', 'entfernen');
define('_RESET', 'Reset');
define('_SAVE', 'Speichern');
define('_SEARCH', 'Suchen');
define('_STATE','Status');
define('_SUBMIT','Abschicken');
define('_UPDATE', 'Aktualisieren');
define('_VIEW', 'Ansicht');

//common module names
define('_COMMENTS', 'Kommentare');
define('_DOWNLOADS', 'Downloads');
define('_SUBMITNEWS', 'News einreichen');
define('_USERSMANAGER', 'Benutzer');
define('_WEB_LINKS', 'Weblinks');

//common module fields
define('_PROPERTIES', 'Eigenschaften');
define('_CONTENT', 'Inhalt');
define('_DESCRIPTION', 'Beschreibung');
define('_EMAIL' ,'E-Mail-Adresse');
define('_ID', 'ID');
define('_LANGUAGE', 'Sprache');
define('_META', 'Metadata');
define('_META_FLC', 'Metadata');
define('_NAME', 'Name');
define('_OPTIONAL', 'Optional');
define('_OPTIONS', 'Optionen');
define('_PASSWORD', 'Kennwort');
define('_REQUIRED', 'Notwendig');
define('_TITLE', 'Titel');
define('_USERID', 'Benutzer ID');
define('_USERNAME' ,'Benutzername');
define('_USERNAME_FLC', 'Benutzername');
define('_VALUE', 'Wert');
define('_LINKSPERPAGE', 'Links pro Seite');

// permalinks system
define('_PERMALINKS', 'Permalinks');
define('_PERMALINKTITLE', 'URL (f�r Permalinks)');
define('_PERMALINKTITLEBLANK', 'Leer lassen f�r automatischen Permalink Titel');
define('_ADDCATEGORYTITLETOPERMALINK', 'Kategorietitel zum Permalink hinzuf�gen');

// member descriptors
define('_GUEST','Gast');
define('_GUEST0','G�ste');
define('_GUESTS','G�ste');
define('_MEMBER','registrierter Benutzer');
define('_MEMBER0','registrierte Benutzer');
define('_MEMBERS','registrierte Benutzer');

// member states
define('_ONLINE','online');
define('_OFFLINE','offline');

// common postnuke terms
define('_BLOCK' ,'Block');
define('_BLOCKS' ,'Bl�cke');
define('_CUSTOMARGS', 'Benutzderfinierte Argument');
define('_FUNCTIONTYPE', 'Funktionstyp');
define('_FUNCTIONTYPES', 'Funktionstyp(en)');
define('_FUNCTION', 'Funktion');
define('_FUNCTIONS', 'Funktionen');
define('_HOOK', 'Hook');
define('_HOOKS', 'Hooks');
define('_LEGACY', 'Legacy');
define('_MODULE', 'Modul');
define('_MODULES', 'Module');
define('_PARAMETERS', 'Parameter');
define('_PLUGIN', 'Plugin');
define('_PLUGINS', 'Plugins');
define('_TEMPLATE', 'Template');
define('_TEMPLATES', 'Templates');
define('_THEME', 'Theme');
define('_THEMES', 'Themes');

// other common terms
define('_DIRECTORY', 'Verzeichnis');
define('_POWEREDBY', 'Powered by <a title="PostNuke Application Framework" href="http://www.pn-cms.de">PostNuke</a>');
define('_VERSION', 'Version');
define('_COPYRIGHT', 'Copyright 2007');
define('_VALIDXHTML', 'Valid XHTML');
define('_VALIDCSS', 'Valid CSS');
define('_MOREINFOHERE_LC', 'weitere Informationen hier');
define('_MOREINFOHERE_UC', 'Weitere Informationen hier');
define('_PERMITTEDHTMLTAGSREMINDER', '(Optional. Maximal 255 Zeichen. Erlaubte HTML Tags:');
define('_PERMITTEDHTMLTAGSSHORTREMINDER', 'HTML erlaubt');
define('_PUNC_PERIOD', '.');
define('_PUNC_COLON', ':');
define('_PUNC_SEMICOLON', ';');
define('_PUNC_QUESTIONMARK', '?');
define('_PUNC_OPENPARENTHESIS','(');
define('_PUNC_CLOSEPARENTHESIS', ')');
define('_PUNC_OPENDOUBLEQUOTE', '"');
define('_PUNC_CLOSEDOUBLEQUOTE', '"');
define('_PUNC_OPENSINGLEQUOTE', '\'');
define('_PUNC_CLOSESINGLEQUOTE', '\'');


// module system
define('_BADAUTHKEY', 'Ung�ltiger Authkey:  M�gliche Fehlerquellen: Navigation via Browser-Back oder aber der "Authkey" ist abgelaufen. Bitte die Seite neu laden und erneut probieren.');
define('_CANCELDELETE', 'L�schen abbrechen');
define('_CANCELEDIT', 'Bearbeiten abbrechen');
define('_CONFIGUPDATED', 'Modulkonfiguration aktualisiert');
define('_CONFIGUPDATEFAILED', 'Modulkonfiguration konnte nicht aktualisiert werden');
define('_CONFIRMDELETE', 'L�schen best�tigen');
define('_CONFIRMDELETEITEM', 'L�schen best�tigen von: %i%');
define('_CREATEDBY', 'Angelegt von %username%');
define('_CREATEDBYON', 'Angelegt von %username% on %date%');
define('_CREATEDON', 'Angelegt am %date%');
define('_CREATEITEM', '%i% anlegen');
define('_CREATEFAILED','Fehler! Anlegen fehlgeschlagen');
define('_CREATEINDEXFAILED', 'Fehler! Index konnte nicht angelegt werden');
define('_CREATEITEMSUCCEDED','%i% angelegt.');
define('_CREATESUCCEDED','Eintrag angelegt');
define('_CREATETABLEFAILED','Fehler! Tabelle konnte nicht angelegt werden');
define('_DELETEITEM', '%i% l�schen');
define('_DELETEFAILED','Fehler! Eintrag konnte nicht gel�scht werden');
define('_DELETEITEMSUCCEDED','%i% gel�scht.');
define('_DELETESUCCEDED','Eintrag gel�scht.');
define('_DELETETABLEFAILED','Fehler! Tabelle konnte nicht gel�scht werden');
define('_DROPCOLUMNFAILED', 'Fehler! Feld konnte nicht gel�scht werden');
define('_DROPINDEXFAILED', 'Fehler! Der Index konnte nicht gel�scht werden');
define('_FAILEDTOLOADMODULE', 'Modul <strong>%m%<strong> konnte nicht geladen werden');
define('_FAILEDTOLOADMODULEATFUNC', 'Modul <strong>%m%</strong> konnte nicht geladen werden (Funktion: <strong>%f%</strong>)');
define('_GETFAILED', 'Fehler! Eintrag konnte nicht geladen werden');
define('_GETITEMSFAILED', 'Fehler! %i% konnte nicht geladen werden');
define('_GENERALSETTINGS', 'Allgemeine Einstellungen');
define('_LOADAPIFAILED', 'Fehler! Beim Laden der API ist ein Problem aufgetreten');
define('_LOADFAILED','Fehler! Beim Laden des Moduls ist ein Fehler aufgetreten');
define('_MODARGSERROR','Fehler! Variablen wurden von der API Funktion nicht akzeptiert');
define('_MODIFYCONFIG', 'Konfiguration modifizieren');
define('_MODIFYCONFIGITEM', '%1% Konfiguration');
define('_MODIFYITEM', '%i% modifizieren');
define('_MODULENOAUTH', 'Fehler! Keine Berechtigung f�r das Modul');
define('_MODULENODIRECTACCESS', 'Fehler! Das Modul kann nicht direkt aufgerufen werden');
define('_MODULENOTAVAILABLE', 'Modul <strong>%m%</strong> nicht verf�gbar');
define('_MODULERETURNED', 'Funktion <strong>%f%</strong> im Modul <strong>%m%</strong> abgeschlossen.');
define('_MUSTBENUMERIC', 'Die \'%s%\' Einstellung muss numerisch sein.');
define('_NEWITEM', 'Neu %i%');
define('_NOITEMSFOUND', 'Keine Eintr�ge gefunden');
define('_NOFOUND', 'Kein %i% gefunden');
define('_NOSUCHITEM', 'Keine entsprechenden Eintr�ge');
define('_NOSUCHITEMFOUND', 'Kein %i%');
define('_REGISTERFAILED', 'Fehler! Hook konnte nicht registriert werden');
define('_RENAMECOLUMNFAILED', 'Fehler! Feld konnte nicht umbenannt werden');
define('_RENAMETABLEFAILED', 'Fehler! Tabelle konnte nicht umbenannt werden');
define('_SEARCHITEMS', 'Suche nach %i%');
define('_SEARCHRESULTSFOUND', '%x% Ergebnis(se) gefunden.');
define('_SEARCHRESULTSNOITEMSFOUND', 'Kein %i% gefunden.');
define('_TEMPLATENOTAVAILABLE', 'Template <strong>%t%</strong> f�r Modul <strong>%m%</strong> nicht gefunden');
define('_TRANSACTIONFAILED', 'Transaction fehlgeschlagen ... Rollback erfolgt!<br />');
define('_UNKNOWNFUNC', 'Fehler: Unbekannte Funktion');
define('_UNKNOWNUSER', 'unbekannter Benutzer');
define('_UNREGISTERFAILED', 'Fehler: Hook konnte nicht unregistriert werden');
define('_UPDATEITEM', 'Aktualisiere %i%');
define('_UPDATECONFIG', 'Aktualisieren');
define('_UPDATEDBY', 'Aktualisiert von %username%');
define('_UPDATEDBYON', 'Aktualisiert von %username% am %date%');
define('_UPDATEDON', 'Aktualisiert am %date%');
define('_UPDATEFAILED','Fehler! Aktualisierungsversuch fehlgeschlagen');
define('_UPDATETABLEFAILED','Fehler! Tabellenaktualisierung fehlgeschlagen');
define('_UPDATEITEMSUCCEDED','%i% aktualisiert');
define('_UPDATESUCCEDED','Eintrag aktualisiert');
define('_VIEWCONFIG', 'Konfiguration anzeigen');
define('_VIEWITEMS', 'Zeige %i%');

// Central administration define
define('_ADMINMENU','Administration');

// defines for the pager plugin
define('_FIRSTPAGE', 'Erste');
define('_FIRSTPAGE_TITLE', 'Erste Seite');
define('_ITEMSPERPAGE', 'Eintr�ge pro Seite');
define('_PREVIOUSPAGE', 'Vorherige');
define('_PREVIOUSPAGE_TITLE', 'Vorherige Seite');
define('_LASTPAGE', 'Letzte');
define('_LASTPAGE_TITLE', 'Letzte Seite');
define('_NEXTPAGE', 'N�chste');
define('_NEXTPAGE_TITLE', 'N�chste Seite');
define('_NONEXTPAGE', 'Keine weiteren Seiten');
define('_NOPREVIOUSPAGE', 'Keine vorherige Seiten');
define('_PAGE', 'Seite');
define('_PERPAGE', '%i% pro Seite');
define('_TOTAL', 'Insgesamt');

// defines for other pnRender/Theme plugns
define('_ALLOWEDHTML', 'Erlaubte HTML Tags');
define('_HTMLPERMITTED', 'HTML erlaubt');

// WorkflowUtil
define('_PNWF_STATEERROR', 'Workflow Statusfehler');

// Form utilities
define('_PNFORM_MANDATORYERROR', 'Bitte dieses Feld ausf�llen');
define('_PNFORM_MANDATORYSELECTERROR', 'Bitte etwas ausw�hlen');
define('_PNFORM_MAXLENGTHERROR', 'Text darf maximal %s Zeichen lang sein');
define('_PNFORM_SELECTDATE', 'Datum w�hlen');
define('_PNFORM_RANGEERROR', 'Der Wert ist nicht im g�ltigen Bereich');
define('_PNFORM_RANGEMINERROR', 'Der Wert muss gr��er oder gleich %i% sein');
define('_PNFORM_RANGEMAXERROR', 'Der Wert muss kleiner oder gleich %i% sein');
define('_PNFORM_UPLOADERROR', 'Fehler beim Upload der Datei.');

// categories system
define('_ALLCATEGORIES', '-- Alle --');
define('_CATEGORY', 'Kategorie');
define('_CATEGORY_LC', 'Kategorie');
define('_CATEGORIES', 'Kategorien');
define('_CATEGORIESMAPPINGS', 'Multi-Kategorie Mappings');
define('_CATEGORIESMAPPINGSCOUNT', 'Anzahl der Multi-Kategorie Mappings');
define('_CHOOSECATEGORY', '-- w�hlen --');
define('_CHOOSEMODULE', 'Modul w�hlen');
define('_CHOOSETABLE', 'Tabelle w�hlen');
define('_CHOOSEONE', 'Bitte ausw�hlen');
define('_ENABLECATEGORISATION', 'Kategorisierung aktivieren');
define('_MODULECATEGORY', 'Modulkategorie');
define('_MODULECATEGORY_LC', 'Modulkategorie');
define('_MODULECATEGORIES', 'Modulkategorien');
define('_CATEGORIZATION', 'Kategorisierung');

// 'templates' for error message
define('_ERROR_ADMIN', '%message% %func% in Zeile %line% in Datei %file%.');

// userlinks plugin
define('_YOURACCOUNT', 'Profil');
define('_CREATEACCOUNT', 'Profil anlegen');

// onlune plugin
define('_CURRENTLYONLINE', 'Zur Zeit sind %numguests% %gueststext% und %numusers% %userstext% online.');

// user welcome plugin
define('_WELCOMEUSER', 'Willkommen %username%');

// login/logout procedure
define('_UNABLETOSAVELOGINDATE', 'Anmeldedatum konnte nicht gespeichert werden');
define('_LOGOUTFORCED', 'Es erfolgte eine Abmeldung durch einen Administrator. Bitte neu anmelden');

// jscalendar
define('_DATE_SELECTOR', 'Datum w�hlen');

// mailer
define('_ERROR_SENDINGMAIL', 'Beim Senden einer Mail ist ein Fehler aufgetreten');
define('_ERROR_SENDINGMAIL_ADMINLOG', 'Beim Senden einer Mail von %fromname% (%fromaddress%) an %toname% (%toaddress%) mit dem Betreff \'%subject\' ist ein Fehler aufgetreten: %errorinfo%');
define('_ERROR_UNKNOWNMAILERERROR', 'Unbekannter Fehler beim Mailversand');
