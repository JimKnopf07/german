<?php

// installer page language strings
define('_INSTALLER', 'PostNuke Installation');
define('_INSTALLERPLEASEREFERTOGUIDE', 'Bitte die <a style="color:red" href="docs/install.html" onclick="window.open(\'docs/install.html\');return false;">
Installationsanleitung</a> beachten. Weitere deutschsprachige Informationen gibt es auch unter <a href="http://support.pn-cms.de">support.pn-cms.de</a>.');
define('_INSTALLERQUALITY', 'HINWEIS: PostNuke-Download-Pakete sollten vor der Installation �ber die MD5 bzw. SHA1 Pr�fsummen validiert werden. Die entsprechenden Angaben dazu finden sich im Downloadbereich bei <a href="http://community.postnuke.com">community.postnuke.com</a> bzw. <a href="http://support.pn-cms.de">support.pn-cms.de</a>.');

// installer tasks
define('_INSTALLERTASKS', 'Installer Aufgaben');
define('_INSTALLERTASK0', 'Bestehendes Installations-Login');
define('_INSTALLERTASK1', 'Sprache w�hlen');
define('_INSTALLERTASK2', 'Lizenz akzeptieren');
define('_INSTALLERTASK3', 'Voraussetzungen');
define('_INSTALLERTASK4', 'Datenbank Information');
define('_INSTALLERTASK5', 'Installationstyp w�hlen');
define('_INSTALLERTASK6', 'Administrator anlegen');
define('_INSTALLERTASK7', 'Startseite w�hlen');
define('_INSTALLERTASK8', 'Theme w�hlen');
define('_INSTALLERTASK9', 'Fertig!');

// installer resources
define('_INSTALLERESOURCES', 'Zus�tzliche Informationen');
define('_INSTALLERGUIDE', 'Anleitung zur Installation');
define('_INSTALLERDOCS', 'PostNuke Dokumentation');
define('_INSTALLERFORUMS', 'Support Foren');

// standard buttons
define('_RECHECK', 'erneut pr�fen');

// task templates
// _lang.htm
define('_INSTALLERCHOOSELANG', 'Sprache w�hlen');

// _licence.htm
define('_INSTALLERTHISSCRIPT', 'Die Installationsroutine hilft bei der Grundeinrichtung einer neuen PostNuke Webseite.
Die Installation erfolgt in mehreren Schritten in ca. 5-10 Minuten.');
define('_INSTALLERLICENSE', 'Bitte vor der Installation die zugrundeliegende GNU General Public License durchlesen. PostNuke wird als "freie" Software entwickelt,
es gibt aber Richtlinien zur Verteilung und Bearbeitung.');
define('_INSTALLERGNUURL1', 'http://www.gnu.org/licenses/gpl.html');
define('_INSTALLERGNULINKTEXT1', 'GNU General Public License');
define('_INSTALLERGNUURL2', 'http://www.gnu.org/philosophy/');
define('_INSTALLERGNULINKTEXT2', 'Philosophie des GNU Projektes');
define('_ACCEPTLICENCE', 'Lizenz akzeptieren');

// _requirements.htm
define('_INSTALLERPHP', 'PHP');
define('_INSTALLERPHPMBSTRINGOK', 'In der PHP-Version ist die "multibyte string" Funktion verf�gbar.');
define('_INSTALLERPHPMBSTRINGNOTOK', 'In der PHP-Version ist die "multibyte string" Funktion nicht verf�gbar - diese Funktion ist aber Voraussetzung f�r das PostNuke AJAX System.');
define('_INSTALLERPHPTOKENOK', 'In der PHP-Version ist die "token" Funktion verf�gbar.');
define('_INSTALLERPHPTOKENNOTOK', 'In der PHP-Version ist die "token" Funktion nicht verf�gbar - diese Funktion ist aber Voraussetzung.');
define('_INSTALLERPHPVEROK', 'und erf�llt die Mindestanforderung (4.3.0).');
define('_INSTALLERPHPVERNOTOK', 'und erf�llt die Mindestanforderung (4.3.0) nicht.');
define('_INSTALLERFILESYSTEMPERMS', 'Datei Zugriffsrechte');
define('_INSTALLERFILEWRITABLE', '%f ist beschreibbar.');
define('_INSTALLERFILENOTWRITABLE', '%f kann nicht ver�ndert werden - bitte die Zugriffsrechte kontrollieren.');
define('_INSTALLERWPPERMISSIONURL', 'http://www.wikipedia.org/wiki/File_system_permissions');
define('_INSTALLERWPPERMISSIONLINKTEXT', 'Datei Zugriffsrechte');
define('_INSTALLERPERSONALCONFIG', 'Eigene Konfigurationsdatei');
define('_INSTALLERPERSONALCONFIGDOESNOTEXIST', '%f existiert nicht');
define('_INSTALLERPERSONALCONFIGEXISTS', '%f existiert. Bitte vor der Installation umbenennen');

// _dbinformation.htm
// database field labels
define('_INSTALLERDBTYPE', 'Datenbank');
define('_INSTALLERDBTABLETYPE', 'Tabellentyp (nur MySQL)');
define('_INSTALLERDBHOST', 'Datenbank-Server');
define('_INSTALLERDBUSERNAME', 'Name des Datenbank-Benutzers');
define('_INSTALLERDBPASSWORD', 'Kennwort des Datenbank-Benutzers');
define('_INSTALLERDBNAME', 'Name der Datenbank');
define('_INSTALLERTABLEPREFIX', 'Tabellenpr�fix (f�r Table-Sharing)');
define('_INSTALLERCREATEDB', 'Datenbank anlegen<br />Hinweis: Falls kein Root-Zugriff auf die Datenbank besteht, k�nnen in aller Regel auch keine neuen Datenbanken angelegt werden - in diesem Fall nur die Datenbank angeben, in die das Skript die erforderlichen Tabellen anlegen soll.');
define('_INSTALLERCREATEDBFAILED', 'Datenbank konnte nicht angelegt werden - bitte die Account-Informationen kontrollieren');
define('_INSTALLERDBINFOFROMHOST', 'Die entsprechenden Informationen liefert normalerweise der Provider bzw. Administrator.');
define('_INSTALLERCONNECTDBFAILED', 'Keine Verbindung zur Datenbank - bitte die Account-Informationen kontrollieren');

// _login.htm
define('_INSTALLERADMINLOGINREQUIRED', 'Es besteht bereits eine Installation. Bitte als Administrator anmelden.');
define('_INSTALLERLOGINUSERNAME', 'Name:');
define('_INSTALLERLOGINPASSWORD', 'Kennwort:');
define('_INSTALLERLOGINFAILED', 'Login fehlgeschlagen, bitte erneut probieren.');
define('_INSTALLERNOTADMINUSER', 'Der Benutzer hat keine administrativen Rechte.');


// _installationtype.htm
define('_INSTALLERSELECTTYPE', 'Installationstyp w�hlen');
define('_INSTALLERBASIC', 'Basis - nur Grundinstallation des Core');
define('_INSTALLERCOMPLETE', 'Komplett - alle verf�gbaren Module installieren');
define('_INSTALLERBLOG', 'Blogging Webseite');

// _createadmin.htm
define('_INSTALLERADMINNAME', 'Name');
define('_INSTALLERADMINUSERNAME', 'Benutzername');
define('_INSTALLERADMINPASSWORD', 'Kennwort');
define('_INSTALLERADMINRETYPEPASSWORD', 'Kennwort wiederholen');
define('_INSTALLERADMINEMAIL', 'E-Mail-Adresse');
define('_INSTALLERADMINURL', 'URL');
define('_INSTALLERPASSWORDCOMPAREFAILED', 'Adminbenutzer konnte nicht angelegt werden - bitte Eingaben �berpr�fen');
define('_INSTALLEREMAILVALIDATEFAILED', 'E-Mail-Adresse scheinbar ung�ltig - bitte Eingabe �berpr�fen');
define('_INSTALLERURLVALIDATECOMPAREFAILED', 'URL-Angabe scheinbar ung�ltig - bitte Eingabe �berpr�fen');
define('_INSTALLERUSERVALIDATECOMPAREFAILED', 'Im Benutzernamen sind Leerzeichen und Symbole nicht zu�ssig');

// _gotosite.htm
define('_INSTALLERCREDITS', 'Credits');
define('_INSTALLERTEAM', 'Das sind die Skripte und Personen, welche PostNuke ausmachen - wir freuen uns �ber jede Art von Feedback unserer Benutzer.<br />Wir k�nnen immer Hilfe gebrauchen - wer hier gelistet werden m�chte, sollte uns einfach kontaktieren.');
define('_INSTALLERPROBLEMS', 'Die PostNuke Installation ist abgeschlossen. Falls Probleme oder Schwierigkeiten aufgetreten sind bitte eine R�ckmeldung in den Support-Foren. Das install-Skript und der /install-Ordner sollten jetzt gel�scht werden.');
define('_INSTALLERGOTOSITE', 'Zur neu eingerichteten PostNuke-Seite');

// _selectmodule.htm
define('_INSTALLERSELECTMODULE', 'Modul f�r die Startseite w�hlen');
define('_INSTALLERMODULES', 'Module erweitern die Funktionalit�t einer Seite. Viele weitere Module sind im <a href="http://noc.postnuke.com/frs/?group_id=5">Value Addons Paket</a> verf�gbar und sind zudem in einer losen <a href="http://community.postnuke.com/module-Database-main-tid-3.htm">Modulliste</a> durch Drittanbieter verf�gbar. Bitte ein Standardmodul f�r die neue Seite w�hlen - dies kann sp�ter ge�ndert werden.');
define('_INSTALLERPNMODULESSURL', 'http://community.postnuke.com/module-Database-main-tid-3.htm');
define('_INSTALLERPNMODULES', 'Modulver�ffentlichungs-Datenbank');

// _selecttheme.htm
define('_INSTALLERSELECTHEME', 'Standard-Theme der Seite');
define('_INSTALLERTHEMES', 'Die Themes bestimmen das Aussehen der Webseite. In der PostNuke Grundinstallation sind nur einige Themes enthalten, weitere gibt es z.B. unter <a href="http://support.pn-cms.de">support.pn-cms.de</a>.<br />Bitte ein Theme f�r die Grundinstallation w�hlen, es kann sp�ter ver�ndert werden.');
define('_INSTALLERPNTHEMESURL', 'http://community.postnuke.com/module-Database-main-tid-4.htm');
define('_INSTALLERPNTHEMES', 'Theme Release Database');

// modify_config.php
define('_INSTALLERMODIFYFILE_1','Fehler: kein Lesezugriff:');
define('_INSTALLERMODIFYFILE_2','Fehler: kein Schreibzugriff:');
define('_INSTALLERMODIFYFILE_3','0 Zeilen ge�ndert, nicht gemacht');

// default blocks
define('_BLOCKS_00_b','Navigation');
define('_BLOCKS_00_c','a:5:{s:14:"displaymodules";i:0;s:5:"style";i:1;s:10:"stylesheet";s:0:"";s:8:"template";s:4:"menu";s:7:"content";s:199:"index.php|Startseite|Zur StartseiteLINESPLITuser.php|Profil|Individuelle ProfilseiteLINESPLITadmin.php|Administration|Administration der SeiteLINESPLIT{Users:logout}|Abmeldung|Abmeldung von der Seite";}');
define('_BLOCKS_01_b','Sprachen');
define('_BLOCKS_02_b','Admin-Nachrichten');
define('_USER_LOGINBLOCK_TITLE', 'Anmeldung');
define('_USER_ONLINEBLOCK_TITLE', 'Wer ist angemeldet');

?>