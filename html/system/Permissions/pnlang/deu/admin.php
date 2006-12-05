<?php
/**
 * PostNuke Application Framework
 * @copyright (c) 2002, PostNuke Development Team
 * @link http://www.postnuke.com
 * @version $Id: admin.php 19260 2006-06-12 13:08:15Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package PostNuke_System_Modules
 * @subpackage  PostNuke_Permissions
*/

define('_PERM_ERRORUPDATINGCONFIG', 'Fehler beim Aktualisieren der Konfiguration: unbekannte ID');
define('_PERM_PERMISSIONLOCKED', 'Dieses Zugriffsrecht ist fixiert, erst in der Konfiguration freigeben');
define('_PERM_ADMINPERMISSIONID', 'ID der generischen Admin-Berechtigung');
define('_PERM_LOCKADMINPERMISSION', 'Generische Admin-Berechtigung fixieren');
define('_PERM_LOCKADMINLOCKEDHINT','Die in der Konfiguration definierte generische Admin-Berechtigung (in der Liste hervorgehoben) ist <strong>fixiert</strong>, kann also nicht editiert, verschoben oder gel�scht werden. Falls notwendig die Freigabe in der Konfiguration erteilen.');
define('_PERM_LOCKADMINUNLOCKEDHINT','Die in der Konfiguration definierte generische Admin-Berechtigung (in der Liste hervorgehoben) ist <strong>nicht fixiert</strong>, kann also editiert, verschoben oder gel�scht werden. In der Konfiguration sollte die Fixierung aktiviert werden um Konfigurationsprobleme zu vermeiden.');
define('_PERM_DRAGANDDROPHINT','Die Zugriffsrechte k�nnen via "Drag and Drop" sortiert werden. Die Reihenfolge ist sofort g�ltig.');
define('_PERM_YOUCANNOTDELETETHEMAINADMINPERMISSION', 'Achtung: Die generische Admin-Berechtigung kann nicht gel�scht werden');
define('_PERM_UPDATINGPERMISSION', '...aktualisiere Zugriffsrecht...');
define('_PERM_DELETINGPERMISSION', '...l�sche Zugriffsrecht...');
define('_PERM_TESTINGPERMISSION', '...teste Zugriffsrecht...');

define('_PERM_APPEND', 'Zugriffsrecht hinzuf�gen');
define('_PERM_CHECKRESULT', 'Ergebnis der Pr�fung');
define('_PERM_GRANTED', 'Zugriffsrecht');
define('_PERM_NOTGRANTED', 'kein Zugriffsrecht');
define('_PERM_UNKNOWNUSER', 'unbekannter Benutzer');
define('_PERM_CHECKPERMISSIONS', 'Benutzer-Berechtigung pr�fen');
define('_PERM_CHECKCOMPONENT', 'Komponente');
define('_PERM_CHECKINSTANCE', 'Instanz');
define('_PERM_CHECKUSER', 'Benutzer');
define('_PERM_CHECKLEVEL', 'Zugriffsrecht');
define('_PERM_CHECK', 'pr�fen');
define('_PERMISSIONS','Zugriffsrechte');
define('_ALLGROUPS','Alle Gruppen');
define('_ALLREALMS','Alle Realms'); // Realms defines until they get their own home
define('_ALLUSERS','Alle Benutzer');
define('_REALM','Realm');
define('_INSTANCE','Instanz');
define('_COMPONENT','Komponente');
define('_GROUPPERMS','Gruppe');
define('_VIEWGROUPPERMS','Zugriffsrechte');
define('_MODIFYPERM','modifizieren');
define('_MODIFYGROUPPERM','Zugriffsrechte modifizieren');
define('_NEWPERM',' hinzuf�gen ');
define('_NEWGROUPPERM','Neues Zugriffsrecht');
define('_PERMLEVEL','Zugriffsrecht');
define('_PERMOPS','Operations');
define('_SEQUENCE','Seq.');
define('_UNREGISTEREDGROUP','G�ste');
define('_UNREGISTEREDUSER','unregistrierte (Benutzer)');
define('_PERMISSIONINFO','Information');
define('_REGISTEREDCOMP','Komponente');
define('_INSTANCETEMP','Instanz Vorlage');

// MMaes: Removed some hard-coded text
define('_PERM_INC','Zugriffsrecht h�her platziert');
define('_PERM_DEC','Zugriffsrecht niedriger platziert');
define('_PERM_UPD','Zugriffsrecht aktualisiert');
define('_PERM_CREATED','Zugriffsrecht angelegt');
define('_PERM_DEL','Zugriffsrecht gel�scht');
define('_PERM_DECINCERR_NOID','Fehler! Keine ID f�r Zugriffsrecht: ');
define('_PERM_DECERR_NOSWAP','Kein Zugriffsrecht direkt unterhalb dieser Berechtigung');
define('_PERM_INCERR_NOSWAP','Kein Zugriffsrecht direkt oberhalb dieser Berechtigung');
// MMaes: Direct Insert capability
// define('_PERM_THINS','Ins.');
define('_PERMINSBEFORE_ALTTXT','Zugriffsrecht oberhalb einf�gen');
define('_PERM_INSERR','Fehler! Anordnung der Zugriffsrechte konnte nicht akutalisiert werden');
define('_PERM_INSNOTIFY','Zugriffsrecht eingef�gt an Position ');
// MMaes: Only show permissions applying to a group
define('_SEQ_ADJUST','Bewegen');
define('_PERM_VWSHOWONLY','Nur Zugriffsrechte anzeigen f�r: ');
define('_PERM_VWFILTER','Filter');
define('_PERM_WARN_FILTERACTIVE','<strong>- TEIL-ANSICHT -</strong>');
define('_PERM_PARTLY','Zugriffsliste wirde nicht vollst�ndig anzeigt, Filter aktiv');
define('_PERM_SHOWING','Gruppe: ');
define('_PERM_DECINCERR_NOSWAPPART','Fehler! Sorry! In der Teilansicht k�nnen nur sichtbare Zugriffsrechte beeinflusst werden. Bitte den Filter deaktivieren');
// MMaes: ListEdit-function, editing in the mainview
define('_PERM_LISTNONEFOUND','Fehler! Keine solches Zugriffsrecht vorhanden, ggfs. zuerst anlegen');
define('_PERM_COMP_INPUTERR',' [Ung�ltige Angabe in der Komponente!] ');
define('_PERM_INST_INPUTERR',' [Ung�ltige Angabe in der Instanz!] ');
// MMaes: Module-settings
define('_PERM_ENABLEFILTER','Filter in der Ansicht aktivieren');
define('_PERM_DISPLAYWARNING','Infonmeldung bei aktivem Filter anzeigen');
define('_PERM_ROWHEIGHTVIEW','Zeilenh�he in Ansicht (min, in Pixel)');
define('_PERM_ROWHEIGHTEDIT','Zeilenh�he in Beabeitung (min, in Pixel)');
define('_PERMISSIONSDELETE', 'Zugriffsrecht l�schen');
define('_PERMISSIONSCONFIRMDELETE', 'L�schen des Zugriffsrechtes best�tigen');

?>