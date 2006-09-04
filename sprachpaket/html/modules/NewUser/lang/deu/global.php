<?php
// Generated: $d$ by $id$
// ----------------------------------------------------------------------
// PostNuke Content Management System
// Copyright (C) 2001 by The PostNuke Development Team.
// http://www.postnuke.com/
// ----------------------------------------------------------------------
// Based on:
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
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
// GNU General Public License for more details.
//
// To read the license please visit http://www.gnu.org/copyleft/gpl.html
// ----------------------------------------------------------------------
// Original Author of file: Andreas Krapohl <larsneo@postnuke.com>
// Purpose of file: Translation files
// Translation team: Read credits in /docs/CREDITS.txt
// ----------------------------------------------------------------------
$minage = pnConfigGetVar('minage');
define('_REGQUESTIONFAILED', 'Die Frage wurde nicht korrekt beantwortet!');
define('_USERAGENTINVALID', 'Useragent nicht erlaubt');
define('_2CHANGEINFO','Um die Informationen zu �ndern');
define('_ALLOWEMAILVIEW','E-Mail-Adresse �ffentlich anzeigen');
define('_ANDCONNECTOR','und');
define('_ASREG1','Kommentare unter dem Benutzernamen verfassen');
define('_ASREG2','Beitr�ge unter dem Benutzernamen verfassen');
define('_ASREG3','einen benutzerdefinierten Block auf der Startseite erstellen');
define('_ASREG4','die Anzahl der Beitr�ge auf der Startseite einstellen');
define('_ASREG5','die Anzeige der Kommentare bestimmen');
define('_ASREG6','das Seitendesign individuell einstellen');
define('_ASREG7','und eine Menge mehr...');
define('_ASREGUSER','Als ein registrierter Benutzer kann man:');
define('_CREATEGROUP','direkte Gruppenmitgliedschaft anlegen: ');
//define('_CONSENT1','(Mit dem Klick auf den Link wird ein Mindestalter von<br />');
//define('_CONSENT2','Jahren best�tigt bzw. das Vorliegen einer Erlaubnis der Erziehungsberechtigten.)');

define('_CONSENT','(Mit dem Klick auf den Link wird ein Mindestalter von<br />'.$minage.' Jahren best�tigt bzw. das Vorliegen einer Erlaubnis der Erziehungsberechtigten.)');

define('_COOKIEWARNING','ANMERKUNG: Benutzereinstellungen sind Cookie-basiert.<br />');
define('_EMAILAGAIN','E-Mail-Adresse best�tigen');
define('_EMAILSDIFF','die beiden E-Mail-Adressen sind unterschiedlich');
define('_EMAILINVALIDDOMAIN', 'Diese E-Mail-Adresse ist gesperrt');
define("_ERRORMUSTAGREE","F�r die Registrierung muss den Nutzungsbedingungen zugestimmt werden!");
define('_FINISH','fertig');
define('_FOLLOWINGMEM','Benutzerinformationen:');
define('_GETGROUP','Gruppenmitgliedschaft: ');
define('_HERE','hier');

//define('_MUSTBE1','F�r dieses Portal ist ein Mindestalter von');
//define('_MUSTBE2','Jahren bzw. das Einverst�ndnis der Erziehungsberechtigten erforderlich.');

define('_MUSTBE','F�r dieses Portal ist ein Mindestalter von '.$minage.' Jahren bzw. das Einverst�ndnis der Erziehungsberechtigten erforderlich.');

define('_NOTIFYEMAILCONT1','Eine neue Registrierung! Der Benutzername ');
define("_NOTIFYEMAILCONT2"," wurde soeben auf der Webseite ".pnConfigGetVar('sitename')." registriert.");
define('_NOTIFYEMAILSUB','Ein neuer Benutzer hat sich auf der WebSite registriert!');
define('_OPTIONALITEMS','freiwillige Angaben');

//define('_OVER13a','Ich bin mindestens');
//define('_OVER13b','Jahre oder besitze das Einverst�ndnis meiner Erziehungsberechtigten.');

define('_OVER13','Ich bin mindestens '.$minage.' Jahre oder besitze das Einverst�ndnis meiner Erziehungsberechtigten.');

define('_PASSWILLSEND','Das Kennwort wird an die eingetragene E-Mail-Adresse gesendet');
//define('_PASSWORD','Kennwort');
define('_PASSWDAGAIN','Kennwort best�tigen');
define('_PASSWDNEEDED','bitte ein Kennwort angeben');
define("_PRIVACYPOLICY","Erkl�rung zum Datenschutz");
define('_REASONS','Anmerkung:');
define('_REGISTERDISABLED','Benutzer-Registrierung deaktiviert!');
define('_REGISTERNOW','Jetzt kostenfrei registrieren');
define('_REGISTRATION','Registrierung.');
define('_REGISTRATIONAGREEMENT','Einverst�ndniserkl�rung f�r');
define('_REGNEWUSER','Benutzer anlegen');
define('_RETURN','zur�ck zur Hauptseite.');
define('_SORRY','Sorry');
define("_TERMSOFUSE","Allgemeinen Nutzungsbedingungen");
define('_TOREGISTER','wurde ein Account angemeldet bei');

//define('_UNDER13a','Ich bin j�nger als');
//define('_UNDER13b','Jahre und habe keine Einverst�ndniserkl�rung meiner Erziehungsberechtigten.');

define('_UNDER13','Ich bin j�nger als '.$minage.' Jahre und habe keine Einverst�ndniserkl�rung meiner Erziehungsberechtigten.');

define('_UNICKNAME','Benutzername:');
define('_UPASSWORD','Kennwort:');
define('_USERPASS4','Kennwort von');
define('_USERPASS42',''); //Add for non eng translation
define('_WEDONTGIVE','Die Daten werden gem�ss Bundesdatenschutzgesetz vertraulich behandelt.<br /><a href=\'index.php?name=legal\'>Allgemeine Nutzungsbedingungen</a> und <a href=\'index.php?name=legal&amp;file=privacy\'>Erkl�rung zum Datenschutz</a>');
define('_YOUAREREGISTERED','Die Registrierung war erfolgreich - das Kennwort wird per E-Mail �bermittelt.');
define('_YOURPASSIS','Das Kennwort lautet:');
define('_YOUUSEDEMAIL','Mit der E-Mail-Adresse');
?>