<?php
/**
 * PostNuke Application Framework
 * @copyright (c) 2002, PostNuke Development Team
 * @link http://www.postnuke.com
 * @version $Id: admin.php 20039 2006-09-15 12:51:12Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package PostNuke_System_Modules
 * @subpackage  PostNuke_Modules
*/

// hooks
define('_MODULES_ENABLEHOOKSEXTENDED', 'F�r das Modul verf�gbare Hooks (erweiterte Einstellungen)');
define('_MODULES_ENABLEHOOKS', 'F�r das Modul verf�gbare Hooks');
define('_MODULES_EXTENDEDHOOKS', 'Erweiterte Hook Einstellungen');
define('_MODULES_EXTENDEDHOOKSWARNING', 'Achtung! Hier k�nnen einzelne Hooks aktiviert werden und auch deren Reihenfolge. Diese Konfiguration sollte nur von erfahrenen Anwendern individuell vorgenommen werden.<br /><br />Innerhalb des jeweilige Bereiches k�nnen die Hooks via "Drag and Drop" angeordnet werden. Das Verschieben in andere Gruppen wird nicht unterst�tzt.');
define('_MODULES_STANDARDHOOKS', 'Standard Hook Einstellungen');

// module dependencies
define('_MODULES_DEPENDENCYSTATE', 'Level');
define('_MODULES_DEPENDENCY_NOTFOUND', 'Nicht im System gefunden');
define('_MODULES_DEPENDENCY_NOTFOUNDREGENERATE', 'Sicherstellen, dass das Modul im System verf�gbar ist (und die Liste regeneriert wird!)');
define('_MODULES_DEPENDENCY_REQUIRED', 'notwendig');
define('_MODULES_DEPENDENCY_RECOMMENDED', 'empfohlen');
define('_MODULES_HASDEPENDENCIES', 'Das Modul hat Abh�ngigkeiten die vom derzeitigen System nicht erf�llt werden.');
define('_MODULES_REMOVEDEPENDENTS', 'Das Modul ist mit anderen Modulen verkn�pft. Module die als notwendige Abh�ngigkeit gelistet sind werden bei Entfernung des Moduls ebenfalls entfernt.');

// errors, warnings and statuses
define('_MODULES_MODULEISSTARTMODULE', 'Das Modul kann nicht deaktiviert werden, weil es als Systemstart-Modul eingestellt ist.');
define('_MODULES_ACTIVATED', 'Modul aktiviert');
define('_MODULES_BLOCKSEXIST', 'Modul kann nicht entfernt werden weil noch zugeh�rige Bl�cke aktiv sind.');
define('_MODULES_CONFIRMDELETE', 'WARNUNG: Dies l�scht unwiederruflich ALLE Daten des Moduls und der zugeordneten Hooks!');
define('_MODULES_DEACTIVATED', 'Modul deaktiviert');
define('_MODULES_DUPLICATEDISPLAYNAME', 'Display Info kann nicht aktualisiert werden - der Displayname existiert bereits!');
define('_MODULES_FILESMISSING', 'Dateien fehlen');
define('_MODULES_INITIALISED', 'Modul installiert');
define('_MODULES_ITEMSPERPAGENUMERIC', 'Die Einstellung \'Eintr�ge pro Seite\' mu� eine positive Zahl sein. Der eingetragene Wert wurde korrigiert.');
define('_MODULES_NOHOOKS', 'Keine Hooks installiert');
define('_MODULES_NOSUCHMODID', 'Fehler! Keine solche Modul ID');
define('_MODULES_NOMODID', 'Keine Modul ID �bergeben');
define('_MODULES_NOMODS', 'Keine Module verf�gbar');
define('_MODULES_UPGRADED', 'Neue Version installiert');
define('_MODULES_REGENERATED', 'Modul-Liste mit Dateisystem abgeglichen');
define('_MODULES_REMOVED', 'Modul entfernt');
define('_MODULES_UPDATEDINFORMATION', 'Modul-Information aktualisiert');

define('_MODULES_ERRORS', 'Die Modulliste konnte nicht neu erzeugt werden');
define('_MODULES_ERRORS_EXPLAIN', 'Die Modulliste konnte nicht neu erzeugt werden, da die folgenden Fehler im Dateisystem gefunden wurden. Bevor Sie fortfahren, m�ssen diese beseitigt werden.');
define('_MODULES_ERRORS_MODULENAMES', 'Die folgende Tabelle zeigt eine Liste der Modulnamen, die scheinbar in mehr als einem Verzeichnis auftauchen. Sie m�ssen eines davon l�schen.');
define('_MODULES_ERRORS_DISPLAYNAMES', 'Die folgende Tabelle zeigt eine Liste der Anzeigenamen von Modulen, die scheinbar in mehr als einem Verzeichnis auftauchen. Sie m�ssen eines davon l�schen.');

// interface components
define('_MODULES_ADMIN', 'Zur Administration');
define('_MODULES_CONFIRMINITIALISE', 'Initialisierung best�tigen');
define('_MODULES_DELETE', 'Modul entfernen');
define('_MODULES_DISPNAME', 'Anzeigename');
define('_MODULES_GENERATE', 'Modul-Liste neu generieren');
define('_MODULES_INITIALISE', 'Installieren');
define('_MODULES_FILTERBYSTATE', 'Filter auf Status');
define('_MODULES_INVALID', 'ung�ltig');
define('_MODULES_LOADLEGACY', 'Legacy-Unterst�tzung f�r Module');
define('_MODULES_MODIFY', 'Modul modifizieren');
define('_MODULES_NAME', 'Modulname');
define('_MODULES_NEWDESCRIPTION', 'Neue Beschreibung');
define('_MODULES_NEWNAME', 'Neuer Name');
define('_MODULES_REGENERATE', 'Liste mit Dateisystem abgleichen');
define('_MODULES_UNINIT', 'nicht installiert');
define('_MODULES_UPGRADE', 'Upgrade');
define('_MODULES_REMOVE', 'Modul entfernen');
define('_MODULES_STATE', 'Status');
define('_MODULES_VERSION', 'Version');

?>