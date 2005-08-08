<?php
// $Id$
// Xanthia Theme Engine FOR PostNuke Content Management System
// Copyright (C) 2003 by the CorpNuke.com Development Team.
// Copyright is claimed only on changes to original files
// Modifications by: Larry E. Masters aka. PhpNut 
// nut@phpnut.com
// http://www.coprnuke.com/
// ----------------------------------------------------------------------
// Based on: Encompass Theme Engine - http://madhatt.info/
// Original Autoher: Brian K. Virgin (MADHATter7)
// ----------------------------------------------------------------------
// Based on:
// eNvolution Content Management System
// Copyright (C) 2002 by the eNvolution Development Team.
// http://www.envolution.com/
// ----------------------------------------------------------------------
// Based on:
// Postnuke Content Management System - www.postnuke.com
// PHP-NUKE Web Portal System - http://phpnuke.org/
// Thatware - http://thatware.org/
// ----------------------------------------------------------------------
// LICENSE
//
// This program is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License (GPL)
// as published by the Free Software Foundation; either version 2
// of the License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// To read the license please visit http://www.gnu.org/copyleft/gpl.html

/**
 * @package     Xanthia_Templating_Environment
 * @subpackage  Xanthia
 * @license http://www.gnu.org/copyleft/gpl.html
*/

// Global Defines
define('_XA_ADMINMENU','Administrations Men�');
define('_XA_ADDCOLOR','neue Theme Farbpalette hinzuf�gen');
if (!defined('_XA_ARGSERROR')) {
	define('_XA_ARGSERROR','Fehler bei Xanthia Argumenten');
}
if (!defined('_XA_APILOADFAILED')) {
	define('_XA_APILOADFAILED','Fehler beim �ffnen der Xanthia API');
}
if (!defined('_XA_ANERROROCCURED')) {
	define('_XA_ANERROROCCURED','schwerwiegender Xanthia-Fehler');
}
define('_XA_ACTIVE','aktiv');
define('_XA_EDITMODTEMPLATES','Modul Templates');
define('_XA_ALLMODULES','alle Module');

define('_XA_BLOCK','Block');
define('_XA_BCDEACTIVATEALL','Block-Kontrolle f�r Module ausschalten');
define('_XA_BCCONTROL','Block-Kontrolle');
define('_XA_BCZONES','Block Zonen');
define('_XA_BLOCKUPDATED','Block Zonen aktualisiert');
define('_XA_BCSTART','Aus der Liste ein Modul zum konfigurieren w�hlen');
define('_XA_BCQUESTIONBC','Falls die Block-Kontrolle auf alle <b>derzeitigen Module</b> angewendet werden soll, die entsprechende Option anw�hlen<br />
Nach der Aktivierung m�ssen die Bl�cke individuell f�r jedes Modul hinzugef�gt werden');
define('_XA_BCACTIVATEALL','Block-Kontrolle f�r Module einschalten');
define('_XA_BCCHOOSEBLOCKS','Bl�cke aus der Liste w�hlen um sie zum Modul hinzuzuf�gen<b>Mehrfachselektion durch dr�cken der <CTRL>-Taste');
define('_XA_BCTURNOFFBC','Falls die Block-Kontrolle auf derzeit aktive Module ausgeschaltet werden soll, die entsprechende Option anw�hlen<br />
Nach der Deaktivierung muss die Block-Kontrolle individuell f�r die Module gesetzt werden');
define('_XA_BLOCKMANAGE','Block-Kontrolle konfigurieren f�r &nbsp;');
if (!defined('_XA_BADAUTHKEY')) {
	define('_XA_BADAUTHKEY','keine Autorisierung f�r diese Aktion');
}

if (!defined('_XA_COMPASSNOAUTH')) {
	define('_XA_COMPASSNOAUTH','keine Autorisierung f�r den Xanthia-Konfigurator');
}
if (!defined('_XA_COMPASSAPINOAUTH')) {
	define('_XA_COMPASSAPINOAUTH','keine Autorisierung f�r die Xanthia Admin API.');
}
define('_XA_CONFIGURE_SHORTURL','Short URLs aktivieren'); 
define('_XA_CONFIGURE_TRIMWHITESPACE', 'trimwhitespace Ausgabefilter');
define('_XA_COMPASSEDIT','Xanthia Theme Engine');
define('_XA_COLORSCONFIG','Farb-Einstellungen');
define('_XA_COMMIT','best�tigen');
define('_XA_CHANGE','�ndern');
define('_XA_COMMASEPERATED', 'getrennt mit Komma');
define('_XA_CACHETHEMESETTINGS', 'Config-Cache generieren');

define('_XA_DELETE','l�schen');
define('_XA_DTSCONFIG','DTS Einstellungen');

define('_XA_EDITTHEMEZONES','Theme Zonen');

define('_XA_GENERALCONFIG','allgemeine Einstellungen');

define('_XA_INACTIVE','inaktiv');

if (!defined('_XA_LOADADDONFAIL')) {
	define('_XA_LOADADDONFAIL','ein Addon f�r das Skin konnte nicht geladen werden');
}

define('_XA_MAIN','Hauptmen�');
define('_XA_MODULES','Module');
define('_XA_MODULE','Modul');
define('_XA_MODULES_NOCACHE', 'Module die vom Caching ausgenommen sind');

define('_XA_NEW', 'neu');	
define('_XA_NEWTHEME','neues Theme erstellen');
define('_XA_NEWMASTERMODULES', 'neues Master f�r Modul');
if (!defined('_XA_NOMODINFO')) {
	define('_XA_NOMODINFO','Xanthia Modul-Info nicht gefunden');
}
define('_XA_NOTHEMESAVAILABLE', 'keine Xanthia-Themes verf�gbar');
if (!defined('_XA_NOZONEFOUND')) {
	define('_XA_NOZONEFOUND','keine Zonen gefunden');
}

define('_XA_POSITION','Position');

define('_XA_REMOVE','entfernen');

define('_XA_SHORTURL_EXTENSION', 'Erweiterung f�r Short URLs (ohne .)');
define('_XA_SHOWACTIVETHEMES','aktive Themes anzeigen');
define('_XA_SHOWALLTHEMES','alle Themes anzeigen');

define('_XA_THEME_TEMPLATE', 'Theme Template');
define('_XA_TEMPLATE_NAME', 'Template Name');
define('_XA_TEMPLATE_NAME_INSTRUCTIONS', 'ES MUSS EIN NAME F�R DAS TEMPLATE ANGEGEBEN WERDEN!');
define('_XA_TEMPLATE_NAME_VALIDATION', 'Der Template-Name fehlt. \n Bitte den Namen angeben');
define('_XA_TEMPLATE_SOURCE_VALIDATION', 'Die Template-Quelle fehlt. \n Bitte die Datei angeben');
define('_XA_THEMEZONES','Theme Zonen');
define('_XA_THEMECOLORS','Theme Farben');
define('_XA_THEMECONFIGURE','Theme Einstellungen');
define('_XA_THEMECACHEGENERATED', 'Config-Cache generiert');
define('_XA_THEMECACHENOTGENERATED', 'Config-Cache konnte nicht generiert werden');

define('_XA_VIEWTHEMES','Themes anzeigen');

define('_XA_ZONECONFIG','Zonen-Einstellungen');


define('_XA_THEMEREMOVEFAILURE', 'Das Theme kann nicht entfernt werden, da es das Default-Theme ist');
define('_XA_BLOCKS', 'neuer Skin f�r Block');
define('_XA_BACK', 'zur�ck');


// Block control defines
define('_XA_BLOCCO1','<B>verf�gbare Bl�cke</B>');
define('_XA_ADMINBLOCK','Bl�cke modifizieren');
define('_XA_NOMORECONFIG','<b>konfigurieren</b>');
define('_XA_NOMOREAUTO','<b>Logic Plus</b> aus Default in jedem neuen Modul aktivieren');
define('_XA_NOMOREHELP','Einen oder mehrere Bl�cke w�hlen<br /> und <B>best�tigen</B><br />&nbsp;');
define('_XA_NOMOREHELP1','(<I>[0]</I> aktiver Block <I>[1]</I> nicht aktiver Block)<br />');
define('_XA_RELOAD','Seite neu laden');
define('_XA_CHIUDI','schliessen');
define('_XA_BLOCCO','Block');
define('_XA_RIGHT','rechts');
define('_XA_LEFT','links');
define('_XA_CENTER','Mitte');
define('_XA_INNER','Inner');
define('_XA_REMOVEBLOCK','Block entfernen');
define('_XA_NEWTHEMETEMPLATE', 'neues Theme-Template');
define('_XA_NEWBLOCKTEMPLATE', 'neues Block-Template');
define('_XA_NEWMODULETEMPLATE', 'neues Module-Template');
define('_XA_TEMPLATERELOADSUCESSFUL', 'Templates aus dem Filesystem neu geladen');
define('_XA_TEMPLATERELOADFAILED', 'Templates konnten nicht aus dem Filesystem geladen werden');
define('_XA_THEMEINSTALLFAILED', 'Theme konnte nicht installiert werden');
define('_XA_TEMPLATENOCONTENT', 'Template-Inhalt nicht gesetzt');
define('_XA_TEMPLATEDBINSERTFAILED', 'Fehler beim einf�gen der Theme-Template-Dateien in die DB');
define('_XA_COULDNOTSETBLOCKCONTROL', 'Block-Kontrolle konnte nicht gesetzt werden');
define('_XA_ZONEDEFAULT', 'Default Template');

define("_XA_MASTER","Master Zone");
define("_XA_OPENTABLE1","OpenTable1");
define("_XA_OPENTABLE2","OpenTable2");
define("_XA_LEFTSIDEB","Left Sidebox");
define("_XA_RIGHTSIDEB","Right Sidebox");
define("_XA_NEWSINDEX","News-Index (std)");
define("_XA_NEWSART","News-article");
define("_XA_NEWSINDEX2","News-index (2col)");
define("_XA_TOPCENTERBLOCK","Top CenterBlock");
define("_XA_TOPCENTERBOX","TopCenter Box");
define("_XA_BOTCENTERBLOCK","Bottom CenterBlock");
define("_XA_BOTCENTERBOX","BotCenter Box");
define("_XA_DEFAULTSIDEB","InnerBlock SideBox");
define("_XA_MAINMENUB","Main Menu Block");
define("_XA_DEFAULTSIDE","Default Sidebox");
define("_XA_CENTERBLOCK","Center Block");

// Theme Related Defines
define('_XA_THEMECONFIG','Theme Konfiguration');
define('_XA_AVAILABLETHEMES','alle Xanthia Themes');
define('_XA_RELOADTEMPLATES', 'Templates neu laden');
define('_XA_RELOADTEMPLATE', 'Template neu laden');
define('_XA_REMOVETHEME','Theme entfernen');
define('_XA_THEMECREDITS', 'Credits');
define('_XA_THEMENAME','Theme Name');
//define('_XA_CREATETHEME','Create Template From this Theme');
define('_XA_EDITTEMPLATES','Theme Templates');
define('_XA_EDITTEMPLATEFILE', 'Template-Form editiern');
define('_XA_VIEWTHEME','Theme anzeigen');
define('_XA_ADDTHEME','Theme hinzuf�gen');
define('_XA_EDITTHEME','Theme editieren');
define('_XA_THEMEREMOVED','Das Theme wurde erfolgreich aus der DB entfernt und sollte jetzt aus dem Theme-Verzeichnis gel�scht werden');
define('_XA_THEMEADDED','Das Theme wurde erfolgreich in die DB geschrieben<br />zur Konfiguration das Theme in den Einstellungen anw�hlen und in der Xanthia-Administration bearbeiten');

// Zone Related Defines
define('_XA_ZONENAME','Zone Name');
define('_XA_ZONELABEL','Zone Label');
define('_XA_ZONETYPE','Zone Typ');
define('_XA_ISACTIVE','aktiv ?');
define('_XA_ACTIONS','Aktion');
define('_XA_REQUIRED','notwendig');
define('_XA_OPTIONAL','Addon');
define('_XA_ACTIVATE','aktivieren');
define('_XA_DEACTIVATE','deaktivieren');
define('_XA_CONFIGURE','konfigurieren');
define('_XA_ADDZONE','neue Zone hinzuf�gen');
define('_XA_ZONEMAINMENU','Zonen-Men�');
define('_XA_CREATEZONE','neue Zone erstellen');
define('_XA_ZONECREATED','Zone erstellt');
define('_XA_ZONEDELETED',' Zone gel�scht');
define('_XA_ZONEDEACTIVATED','Zone deaktiviert');
define('_XA_ZONEACTIVATED','Zone aktiviert');
define('_XA_ZONEEXISTS','das Zonen-Lable existiert schon');
define('_XA_ZONENODELTE','Zone konnte nicht gel�scht werden');
define('_XA_ZONEINFO','Tipps und Hinweise f�r die Theme Zone Sektion, mehr Info bei http://www.post-nuke.net');
define('_XA_ZONENEWINFO','Beim Erstellen einer neuen Zone beachten, dass der Zonen-Name die Langfassung und das Zonen-Label die Kurzfassung ist, die von
Xanthia benutzt wird. Als Beispiel: falls eine neue rechte InnerBlock-Zone erstellt werden soll, k�nnte man den Zonen-Namen als rechter InnerBlock und das Zonen-Label als
rinblock setzen. Ebenfalls k�nnen hier spezifische Templates f�r bestimmte Bl�cke gesetzt werden. Als Beispiel: um ein spezielles Template f�r den Umfrage-Block zu setzen, 
den Zonen-Name als Umfrage-Block, das Zonen-Label as umfrage setzen. Block Zonen-Labels sind der Block Titel in Kleinbuchstaben ohne Sonderzeichen. (z.B. Umfrage:PostNuke ist
umfragepostnuke, weitere Artikel ist weitereartikel... etc) Sobald eine neue Zone erstellt ist, wird sie inaktive gesetzt und hat noch kein zugewiesenes Template. 
Einfach der Zone das gew�nschte Template zuweisen und aktivieren');
if (!defined('_XA_COMPASSNOZONES')) {
	define('_XA_COMPASSNOZONES','keine Zone in den API Argumenten angegeben');
}
define('_XA_ZONENODELETE','Zone konnte nicht gel�scht werden');
if (!defined('_XA_INZONE')) {
	define('_XA_INZONE','in Zone');
}
if (!defined('_XA_MAINZONENOTPL')) {
	define('_XA_MAINZONENOTPL','ein notwendiges Zonen-Template wurde entweder nicht gefunden oder konnte nicht geladen werden');
}
// Template Related Defines
define('_XA_TEMPLATE','Template');
define('_XA_TPLNOTSET','kein Template zugewiesen');
define('_XA_CONFIGTEMPLATES','Templates konfigurieren');
define('_XA_TPLUPDATED','Template aktualisiert');
define('_XA_TPLINFO','Einfach das gew�nschte Template f�r die Zone w�hlen und best�tigen, die �nderungen werden sofort wirksam. Beachten: obwohl theoretisch
jedes Template auf jede Zone angewendet werden kann, sind die meisten Templates untereinander nicht kompatibel (z.B. wird das News-index Template nicht f�r den TopCenter Block funktionieren,
etc) Eine Ausnahme bilden dabei die Block-Templates (rsblock, lsblock, isblock, dsblock, tcblock and bcblock) - sie sind, zumindestens weitesgehend, in den meistens Skins austauschbar');

// Colors Related Defines
define('_XA_ADDCOLORS','neues Colorset hinzuf�gen');
define('_XA_DELCOLORS','Colorset l�schen');
define('_XA_CONFIGCOLORS','Farben einstellen');
define('_XA_BGCOLOR1','Color 1');
define('_XA_BGCOLOR2','Color 2');
define('_XA_BGCOLOR3','Color 3');
define('_XA_BGCOLOR4','Color 4');
define('_XA_BGCOLOR5','Color 5');
define('_XA_BGCOLOR6','Color 6');
define('_XA_SEPCOLOR','Seperator');
define('_XA_TEXTCOLOR1','Text 1');
define('_XA_TEXTCOLOR2','Text 2');

define('_XA_BACKGROUNDC','Background');
define('_XA_SEPERATORC','Seperator');
define('_XA_TEXT1C','Text1');
define('_XA_TEXT2C','Text2');
define('_XA_LINKC','Link');
define('_XA_VLINKC','Vlink');
define('_XA_HOVERC','hover');
define('_XA_COLOR1C','Color 1');
define('_XA_COLOR2C','Color 2');
define('_XA_COLOR3C','Color 3');
define('_XA_COLOR4C','Color 4');
define('_XA_COLOR5C','Color 5');
define('_XA_COLOR6C','Color 6');
define('_XA_COLOR7C','Color 7');
define('_XA_COLOR8C','Color 8');

define('_XA_COLORSMAINMENU','Farb-Men�');
define('_XA_COLORSUPDATED','Farben aktualisiert');
define('_XA_COLORSINFO','Die Farben sollten im HEX-Format definiert werden, inklusive #. Beispielsweise f�r schwarz #000000 und f�r weiss #FFFFFF. Es stehen sechs verschieden Background-Farben, eine Seperator Farbe und zwei Text-Farben zur Verf�gung. 
Einfach die Werte entsprechend anpassen und auf best�tigen klicken - die �nderungen werden sofort wirksam');

// Skins Related Defines
define('_XA_SKINNAME','Skin Name');
define('_XA_SKININSTALL','neues Skin installieren');
define('_XA_SKINDELETE','Skin deinstallieren');

// Config Related Defines
define('_XA_ADDCONFIG','neue Konfiguration hinzuf�gen');
define('_XA_DELCONFIG','Konfiguration l�schen');
define('_XA_CONFIGNAME','Name');
define('_XA_CONFIGCONFIGS','Allgemeine Konfiguration bearbeiten');
define('_XA_CONFIGDESCRIPT','Beschreibung');
define('_XA_CONFIGSETTING','Einstellung');
define('_XA_CONFIGMAINMENU','Konfigurations-Men�');
define('_XA_CREATECONFIG','neue allgemeine Konfiguration hinzuf�gen');
define('_XA_CONFIGCREATED','Konfiguration erstellt');
define('_XA_CONFIGDELETED','Konfiguration gel�scht');
define('_XA_CONFIGUPDATED','Einstellung aktualisiert');
define('_XA_CONFIGEXISTS','gew�hlter Konfigurationsname besteht bereits');
define('_XA_CONFIGINFO','Einfach die neuen Werte in die Textarea eingeben und best�tigen, die �nderungen werden sofort wirksam.');
define('_XA_CONFIGNEWINFO','Tipps und Hinweise f�r das Erstellen der allgemeinen Konfiguration - siehe auch http://www.post-nuke.net');
define('_XA_FILE', 'Datei');
define('_XA_ACTION', 'Aktion');

// DTS Related Defines
//define('_XA_FLUSHCACHE','Flush Cache Files');
//define('_XA_DTSMAINMENU','DTS Menu');

//NEWZONE
define('_XA_NZID','Zonen ID');
define('_XA_NZDESC','Zonen Beschreibung');
define('_XA_NZTAG','im Theme zu verwendendes Tag');
define('_XA_NZACTION','Aktion');
define('_XA_NZREMOVE','entfernen');
define('_XA_NZUPDATE','neu laden');
define('_XA_NZOKREMOVE','Zone entfernt');
define('_XA_NZOKADD','Zone hinzugef�gt');
define('_XA_NZTITLE','neue Zone hinzuf�gen');
define('_XA_NZWARNING','ACHTUNG! Die Zone hat noch zugewiesene Bl�cke und wurde nicht entfernt');

//Main Configuration
define('_XA_BLOCKTEMPLATES','Block Templates');
define('_XA_CHOOSEUPLOAD','<b>Ein Theme Paket f�r den Upload w�hlen</b><br /><span style="color:#ff0000;">Es muss eine tar.gz/.tar Datei mit einer g�ltigen Xanthia-Themeset-Struktur sein</span>');
define('_XA_CONFIGUREBLOCKCONTROL','Block-Kontrolle konfigurieren');
define('_XA_CONFIGURENOHTACCESS', '.htaccess nicht im Webroot gefunden');
define('_XA_CONFIGURE_TITLE','Haupt-Konfiguration');
define('_XA_CONFIGURE_VBA','Visual Block Editor benutzen');
define('_XA_CONFIGURE_XANTHIA','Xanthia konfigurieren');
define('_XA_CONFIGURE_USECACHE','Caching nutzen');
define('_XA_CONFIGURE_CACHETYPE','Datenbank-Caching nutzen');
define('_XA_CONFIGURE_DBCOMPILE','Templates kompilieren f�r DB (noch nicht aktiv)');
define('_XA_CONFIGURE_TEMPLATECHECK','auf aktualisierte Templates pr�fen');
define('_XA_CONFIGURE_FORCETEMPLATECHECK', 'erneutes Kompilieren der Templates erzwingen');
define('_XA_CONFIGURE_CACHETIME','Dauer f�r das Caching');
define('_XA_CONFIGURE_USEDB','Caching auf aktualisierte Datenbank beziehen (ben�tigt pnCache)');
define('_XA_CONFIGURE_DBTEMPLATES','Templates in die Datenbank schreiben');
define('_XA_COPYTEMPLATE','Kopie erstellen');
define('_XA_CREATETEMPLATE','neues Template erstellen');
define('_XA_CHOOSEINNER','Block f�r den InnerBlock w�hlen');
define('_XA_DATETCREATED','Templates erstellt');
define('_XA_DOWNTEMPLATE','Template downloaden');
define('_XA_DOWNTHEME','Theme f�r Distribution downloaden');
define('_XA_EDITTEMPLATE','EDITIEREN');
define('_XA_MODULETEMPLATES','Modul-Templates');
define('_XA_THEMETEMPLATES','Theme-Templates');
define('_XA_UPLOADTHEME','neues Theme-Paket uploaden');
define('_XA_UPLOADNAME','<b>Neuer Theme-Name</b><br />Namen f�r das Theme angeben, keine Angabe f�r automatische Erkennung');
//define('_XA_INNERUPDATED','Set Inner Block');
//define('_XA_CONFIGUREADDONS','Configure TopCenter Box and BotCenter Box');

/** Xanthia Help Menu Defines
 *  These are used for te help icons dislpayed within Xanthia
 *  Adminsistartion Menu
 */
define('_XA_BCCONTROLHELP','Block-Kontrolle Hilfe');
define('_XA_COLORSHELP','Farb-Einstellungen Hilfe');
define('_XA_CREATETHEMEHELP', 'Theme-Bearbeitung Hilfe');
define('_XA_EDITTHEMEHELP','Theme-Bearbeitung Hilfe');
define('_XA_EDITTEMPLATEHELP','Templates-Bearbeitung Hilfe');
define('_XA_FILECONTENTNOTSET', 'File_content nicht gesetzt');
define('_XA_HELP','Xanthia Hilfe');
define('_XA_THEMECONTIGHELP','Theme-Konfiguration Hilfe');
define('_XA_THEMEZONESHELP','Theme-Zonen Hilfe');

// defines for theme credits function - add additional ones to themes/themename/lang/code/xaninfo.php
define('_XA_API', 'API');
define('_XA_AUTHOR', 'Autor');
define('_XA_DOWNLOAD', 'URL');
define('_XA_NAME', 'Name');
define('_XA_XHTMLSUPPORT', 'XHTML Support');

?>