<?php
/**
 * PostNuke Application Framework
 *
 * @copyright value4business GmbH
 * @link http://www.postnuke.com
 * @version $Id$
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @author Robert Gasch robert.gasch@value4business.com
 * @package PostNuke_Core
 */

// general
define('_CATEGORIES_IPATH',                  'IPfad');
define('_CATEGORIES_PATH',                   'Pfad');
define('_CATEGORIES_ROOTCAT',                'Stammkategorie');

// navigation
define('_CATEGORIES_REGISTRY',                'Kategoriezuweisung bearbeiten');
define('_CATEGORIES_VIEWCATEGORIES',          'Kategorien anzeigen');
define('_CATEGORIES_CREATECATEGORY',          'Kategorie anlegen');
define('_CATEGORIES_MODIFYCATEGORY',          'Kategorie bearbeiten');
define('_CATEGORIES_DELETECATEGORY',          'Kategorie l�schen');
define('_CATEGORIES_CONFIRMDELETECATEGORY',   'Soll die Kategorie wirklich gel�scht werden?');

// view template
define('_CATEGORIES_VIEW_TITLE',              'Alle Kategorien');

// user template
define('_CATEGORIES_EDIT_SUBCATEGORIES',    	'Kategorien f�r Modul bearbeiten');
define('_CATEGORIES_EDIT_USER',			          'Benutzerkategorien bearbeiten');
define('_CATEGORIES_EDIT_USER_DISABLED',     	'Die Bearbeitung von benutzereigenen Kategorien ist deaktiviert. Der Administrator kann diese Funktion aktivieren.');
define('_CATEGORIES_EDIT_USER_NOT_OWN',	    	'Die Bearbeitung von fremden Benutzerkategorien ist nicht m�glich. Diese Funktion kann nur vom Administrator durchgef�hrt werden.');

// new/edit template
define('_CATEGORIES_ADDITIONALDATA',          'Zus�tzliche Datenfelder');
define('_CATEGORIES_ADVANCED',                'Umschalten zum erweiterten Modus');
define('_CATEGORIES_ATTRIBUTES',              'Attribute');
define('_CATEGORIES_ATTRIBUTE_ADD',           'Attribut hinzuf�gen');
define('_CATEGORIES_ATTRIBUTE_NAME',          'Attributname');
define('_CATEGORIES_ATTRIBUTE_VALUE',         'Attributwert');
define('_CATEGORIES_BACK_TO_REFERER',	      	'Zur�ck zum verweisenden Modul');
define('_CATEGORIES_BASEINFO',                'Basisinformation zur Kategorie');
define('_CATEGORIES_CATEGORY_IS_LOCKED',    	'Diese Kategorie ist gesperrt und kann nur vom Administrator bearbeitet oder gel�scht werden.');
define('_CATEGORIES_CATEGORY_DELETE_CONFIRM', 'Soll die Kategorie wirklich gel�scht werden [');
define('_CATEGORIES_CATEGORY_DELETE_CONFIRM_QM','] ?');
define('_CATEGORIES_COPY_SUCCESS',            'Die Kategorie [%s] wurde erfolgreich kopiert'); 	 
define('_CATEGORIES_DELETE_SUCCESS',          'Die Kategorie [%s] wurde erfolgreich gel�scht');
define('_CATEGORIES_INSERT_SUCCESS',          'Die Kategorie [%s] wurde erfolgreich eingef�gt');
define('_CATEGORIES_IS_LEAF',		             	'Kategorie ist eine Unterkategorie');
define('_CATEGORIES_IS_LOCKED',		           	'Kategorie ist gesperrt');
define('_CATEGORIES_LOCALNAME_UNDEFINED',     'Lokalisierter Name nicht definiert');
define('_CATEGORIES_LOCALISATION',            'Lokalisierte Ausgabe');
define('_CATEGORIES_META',                    'Metadaten der Kategorie');
define('_CATEGORIES_MOVE_SUCCESS',            'Die Kategorie [%s] wurde erfolgreich verschoben');
define('_CATEGORIES_PARENT',                  'Parent');
define('_CATEGORIES_REBUILD_SUCCESS',         'Der Kategoriepfad wurde erfolgreich neu erstellt');
define('_CATEGORIES_ROOT_PARENT_LOCKED',	    'Die Stammkategorie eines Startknoten kann nicht ge�ndert werden.');
define('_CATEGORIES_SECURITY_DOMAIN',         'Sicherheitsdomain');
define('_CATEGORIES_SORT_VALUE',              'Sortierwert');
define('_CATEGORIES_STATUS',                  'Aktiv');
define('_CATEGORIES_SYSTEM_INFO',             'Kategorie Systeminformationen');
define('_CATEGORIES_UPDATE_SUCCESS',          'Die Kategorie [%s] wurde erfolgreich aktualisiert');
define('_CATEGORIES_VALUE',                   'Wert');

// preferences template
define('_CATEGORIES_PREFS',		               	'Einstellungen');
define('_CATEGORIES_PREFS_USERROOTCAT',		    'Stammkategorie f�r Benutzerkategorien');
define('_CATEGORIES_PREFS_ALLOWUSERCATEDIT',	'Benutzer erlauben, die eigenen Kategorien bearbeiten zu d�rfen');
define('_CATEGORIES_PREFS_AUTOCREATEUSERCAT',	'Automatisches Erstellen des Stammverzeichnis f�r Benutzerkategorien');
define('_CATEGORIES_PREFS_AUTOCREATEUSERDEFAULTCAT',	'Automatisches Erstellen der Standard-Benutzerkategorien');
define('_CATEGORIES_PREFS_USERDEFAULTCATNAME',	'Standard-Benutzerkategorien');
define('_CATEGORIES_PREFS_PERMISSIONSALL',   'Zugriff auf alle Kategorien f�r ein Element (relevant, wenn mehrere Kategorien in den Inhalten benutzt werden)');
define('_CATEGORIES_REBUILDPATHS', 	        	'Pfade neu erstellen');

// list template
define('_CATEGORIES_RESEQUENCE',              'Index erneuern');

// delete template
define('_CATEGORIES_SUBCATS_DELETE',         'Unterkategorien l�schen');
define('_CATEGORIES_SUBCATS_MOVE',           'In folgende Kategorie verschieben');
define('_CATEGORIES_SUBCATS_STATUS',         'Diese Kategorie enth�lt %c% direkte Unterkategorie(n).');
define('_CATEGORIES_SUBCATS_WARNING',        'Was soll mit den Unterkategorien dieser Kategorie passieren?');

// module registry template
define('_CATEGORIES_REGISTRY_PROPERTY',       'Name der Eigenschaft');
define('_CATEGORIES_REGISTRY_DELETE_SUCCESS', 'Kategoriezuweisung wurde erfolgreich gel�scht'); 	 
define('_CATEGORIES_REGISTRY_SAVE_SUCCESS',   'Kategoriezuweisung wurde erfolgreich gespeichert');
define('_CATEGORIES_REGISTRY_TABLE',          'Tabelle');

// move template
define('_CATEGORIES_MOVE_TITLE',              'Kategorie verschieben');

// copy template
define('_CATEGORIES_COPY_DESCRIPTION',        'Diese Kategorie und ihre Unterkategorien unter folgende Kategorie kopieren');
define('_CATEGORIES_COPY_TITLE',              'Kategorie kopieren');

// modify config template
define('_CATEGORIES_CONFIG_REBUILD',          'Hier k�nnen alle systeminternen Pfade neu erstellt werden');
define('_CATEGORIES_CONFIG_REBUILD_INFO', 	  '<br /><br />Via Submit-Button die Aktion starten - je nach Anzahl der Kategorien k�nnte ein Time-Out auftreten oder das PHP-Speicherlimit �berschritten werden.');
define('_CATEGORIES_CONFIG_REBUILD_PATHS',    'Pfade neu erstellen');

// user editing
define('_CATEGORIES_YOURCATEGORIES',          'Eigene Kategorien');

// error/status messages
define('_CATEGORIES_DOCROOT_CANT_RETRIEVE',   'Kann docroot nicht laden');
define('_CATEGORIES_DOCROOT_INVALID',         'Ung�ltiger docroot Parameter im URL');
define('_CATEGORIES_EDITCAT_INVALID',         'Ung�ltige Kategorie kann nicht editiert werden');
define('_CATEGORIES_EDITCAT_NOT_LEAF',        'Angegebene Kategorie ist keine �bergeordnete Werte-Kategorie');
define('_CATEGORIES_EDITCAT_NOT_SUBCAT',      'Angegebene Kategorie ist keine Unterkateogorie von docroot');
define('_CATEGORIES_INVALID_CID',             'Fehler! Eine ung�ltige Kategorie-ID wurde empfangen');
define('_CATEGORIES_INVALID_DIRECTION',       'Fehler! Eine ung�ltige Direction wurde empfangen');
define('_CATEGORIES_INVALID_DOCROOT',         'Fehler! Ein ung�ltiger Benutzerstammknoten wurde empfangen');
define('_CATEGORIES_NAME_EMPTY',              'Name darf nicht leer sein');
define('_CATEGORIES_NO_USERCATNAME',		      'Fehler! Der Name des Stammknoten f�r die Benutzerkategorie konnte nicht ermittelt werden');
define('_CATEGORIES_ROOT_CANT_EDIT',          'Fehler! Das Stammverzeichnis kann nicht im Benutzermodus editiert werden');
define('_CATEGORIES_UNABLE_TO_RETRIEVE',      'Fehler! Kann Kategorie mit ID [%d] nicht ermitteln');
define('_CATEGORIES_USERCAT_NOAUTOCREATE',  	'Fehler! Der Benutzerstammknoten f�r diesen Benutzer existiert nicht und das automatische Erstellung ist nicht gesetzt.');
define('_CATEGORIES_USERCAT_LOGGED_IN',	    	'Fehler! Das Bearbeiten der Benutzerkategorien ist nur f�r angemeldete Benutzer m�glich');
define('_CATEGORIES_USERDOCROOT_EMPTY',	    	'Fehler! Der Benutzerstammknoten konnte nicht ermittelt werden');
define('_CATEGORIES_USERDOCROOT_INVALID',   	'Fehler! Der Benutzerstammknoten scheint auf eine ung�ltige Kategorie zu verweisen');
define('_CATEGORIES_VALUE_EMPTY',             'Wert darf nicht leer sein');
define('_CATEGORIES_REGISTRY_MODULE_EMPTY',   'Fehler! Es muss ein Modul ausgew�hlt werden');
define('_CATEGORIES_REGISTRY_TABLE_EMPTY',    'Fehler! Es muss eine Modultabelle ausgew�hlt werden');
define('_CATEGORIES_REGISTRY_PROPERTY_EMPTY', 'Fehler! Es muss ein Name der Eigenschaft angegeben werden');
define('_CATEGORIES_REGISTRY_CATEGORY_EMPTY', 'Fehler! Es muss eine Kategorie ausgew�hlt werden');
define('_CATEGORIES_REGISTRY_PROPERTY_DUPLICATE','Fehler! Der Name der Eigenschaft existiert bereits f�r das angegebene Modul/Tabelle');
