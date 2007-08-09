<?php
// $Id: global.php 59 2006-09-09 17:48:08Z landseer $
// ----------------------------------------------------------------------
// PostNuke Content Management System
// Copyright (C) 2001 by the PostNuke Development Team.
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
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// To read the license please visit http://www.gnu.org/copyleft/gpl.html
// ----------------------------------------------------------------------
// Original Author of file: Hinrich Donner
// changed to pn_bbsmile: larsneo
// ----------------------------------------------------------------------

// include smilie alternative text defines
@include_once('modules/pn_bbsmile/pnlang/deu/smilies.php');

//
// A
//
define('_PNBBSMILE_ADMIN_BTN_CANCEL', 'Abbrechen');
define('_PNBBSMILE_ADMIN_BTN_SUBMIT', '�bertragen');
define('_PNBBSMILE_ADMIN_CONFIGSAVED', 'pn_bbsmile Konfiguration ge�ndert');
define('_PNBBSMILE_ADMIN_CONFIRM_READFROMFILESYSTEM', 'Sollen die Smilies jetzt aktualisiert werden?');
define('_PNBBSMILE_ADMIN_EDITEDSMILIESSAVED', 'Die editierten Smilies wurden gespeichert');
define('_PNBBSMILE_ADMIN_HINT_IMAGEPATH', 'Verzeichnis (relativ), das die Smiliegrafiken enth�lt. Ohne / am Ende und ohne Backslashes!');
define('_PNBBSMILE_ADMIN_HINT_IMAGEPATH_AUTO', 'Verzeichnis (relativ), das die automatisch eingebundenen Smiliegrafiken enth�lt. Alle Dateien, die die Endung gif,jpg,jpeg oder png haben, werden aus diesem verzeichnis automatisch hinzugef�gt. Ohne / am Ende und ohne Backslashes!');
define('_PNBBSMILE_ADMIN_LABEL_ACTIVATE_AUTO', 'Soll das automatische Einbinden f�r Smilies aktiviert werden?');
define('_PNBBSMILE_ADMIN_LABEL_IMAGEPATH', 'Pfad zu den Smiliegrafiken');
define('_PNBBSMILE_ADMIN_LABEL_IMAGEPATH_AUTO', 'Pfad zu den automatisch eingebundenen Smiliegrafiken');
define('_PNBBSMILE_ADMIN_LABEL_READFROMFILESYSTEM', 'Mit dem Best�tigen werden alle Smilies aus dem unten genannten Verzeichnis eingelesen. Smilies, deren Bilder aus dem Verzeichnis gel�scht wurden, werden ebenfalls gel�scht. �nderung von schon bestehenden Smilies bleiben erhalten.');
define('_PNBBSMILE_ADMIN_LABEL_READSMILIESFROMFILESYSTEM', 'Lese Smilies vom Filesystem');
define('_PNBBSMILE_ADMIN_LABEL_REMOVE_INACTIVE', 'Inaktive Smiliek�rzel entfernen');
define('_PNBBSMILE_ADMIN_LABEL_SMILIETABLE', 'Definierte Smilies');
define('_PNBBSMILE_ADMIN_NOACCESS', 'Keine Berechtigung f�r dieses Modul');
define('_PNBBSMILE_ADMIN_SMILIESREADFROMFILESYSTEM', 'Smilies wurden neu eingelesen');
define('_PNBBSMILE_ADMIN_SMILIETABLE_ACTIVE', 'Aktiv');
define('_PNBBSMILE_ADMIN_SMILIETABLE_ALIAS', 'Aliase zu dem Smilie');
define('_PNBBSMILE_ADMIN_SMILIETABLE_ALIAS_HINT', 'Aliase k�nnen mit "," getrennt werden. Allerdings OHNE Leerstellen.');
define('_PNBBSMILE_ADMIN_SMILIETABLE_ALT', 'Alternativtext');
define('_PNBBSMILE_ADMIN_SMILIETABLE_FILENAME', 'Dateiname');
define('_PNBBSMILE_ADMIN_SMILIETABLE_SHORT', 'Abk�rzung/Trigger');
define('_PNBBSMILE_ADMIN_SMILIETABLE_SMILIE', 'Smilie');
define('_PNBBSMILE_ADMIN_TITLE', 'pn_bbsmile Administration');
define('_PNBBSMILE_ADMIN_TITLE_CONFIG', 'Konfiguration �ndern');
define('_PNBBSMILE_ADMIN_TITLE_EDITSMILIES', 'Editiere die aktuell definierten Smilies');
define('_PNBBSMILE_ADMIN_TITLE_READSMILIESFROMFILESYSTEM', 'Lese Smilies aus dem Ordner neu ein');
define('_PNBBSMILE_ADMIN_V1_HINT', 'Bitte beachten: Der pn_bbsmile-Hook muss f�r die Module, in denen die Funktion genutzt werden soll, <a href="index.php?name=Modules&type=admin&func=view">hier</a> erst aktiviert werden.');
define('_PNBBSMILE_ARGSERROR', '[pn_bbsmile] Interner Fehler! Parameter fehlen!');

//
// C
//
define('_PNBBSMILE_COULDNOTREGISTER', 'pn_bbsmile NICHT installiert!');
define('_PNBBSMILE_COULDNOTUNREGISTER', 'pn_bbsmile NICHT entfernt!');

//
// F
//
define('_PNBBSMILE_FORCERELOAD', 'Neuladen erzwingen, alle Smilieeinstellungen werden �berschrieben!');

//
// M
//
define('_PNBBSMILE_MORESMILIES', 'Weitere Smilies');

//
// N
//
define('_PNBBSMILE_NOAUTOSMILIES', 'Erweiterte Smilies sind noch nicht aktiviert!');
define('_PNBBSMILE_NOSCRIPTWARNING', 'Ihr Browser unterst�tzt kein Javascript oder Javascript ist deaktiviert. Das BBSmile-Interface ist daher nicht verf�gbar.');

//
// S
//
define('_PNBBSMILE_SHOWHIDE_SMILIES', 'Smilies ein-/ausblenden');

?>