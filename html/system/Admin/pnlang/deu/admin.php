<?php
/**
 * PostNuke Application Framework
 *
 * @copyright (c) 2002, PostNuke Development Team
 * @link http://www.postnuke.com
 * @version $Id: admin.php 20628 2006-11-26 11:16:35Z landseer $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package     PostNuke_System_Modules
 * @subpackage  PostNuke_Admin
 */

// general defines
define('_ADMIN', 'Administration');
define('_ADMINPANEL', 'Administration');
define('_ADMIN_ONLINEMANUAL', 'Online-Handbuch');
define('_ADMIN_TITLE', 'Administration');
define('_ADMIN_PNSECURITYANALYZER', 'Warnungen der Sicherheitsanalyse');
define('_MODULESCATEGORIZATION', 'Modulkategorisierung');
define('_MODIFYADMINPANELCONFIG', 'Administration-Einstellungen');
define('_MODULECATEGORIESLISTVIEW', 'Liste der Modulkategorisierung');
define('_NEWMODULECATEGORY', 'Modulkategorie erstellen');
define('_ADMIN_NEWCATEGORY', 'Neue Modulkategorie');
define('_ADMIN_EXISTINGCATEGORY', 'Bestehende Modulkategorie');
// error messages
define('_ADMIN_DELETEFAILEDDEFAULT', 'Die Default-Kategorie kann nicht gel�scht werden');
define('_ADMIN_DELETEFAILEDSTART', 'Die Start-Kategorie kann nicht gels�cht werden');
define('_ADMIN_FAILEDADDMODTOCAT', 'Fehler! Modul konnte nicht zur Kategorie hinzugef�gt werden');
define('_ADMIN_NOADMINLINKS', 'Die Administrationskategorie ist leer. Sie sehen diese Meldung vermutlich, weil Sie administrativen Zugriff auf ein Modul besitzen, das nicht in der Standardkategorie der Administration eingeordnet ist.');

// modify config
define('_ADMIN_GENERALSETTINGS', 'Allgemein');
define('_ADMIN_DISPLAYICONS', 'Icons in der Administration anzeigen');
define('_ADMIN_IGNOREINSTALLERCHECK', 'Installer-Check deaktivieren');
define('_ADMIN_IGNOREINSTALLERCHECKWARNING', 'WARNUNG: nur in Entwicklungsumgebungen setzen!');
define('_ADMIN_PANELDISPLAYSETTINGS', 'Ansicht');
define('_ADMIN_MODULESPERPAGE', 'Module pro Seite');
define('_ADMIN_MODULESPERROW', 'Module pro Reihe');
define('_ADMIN_THEME', 'Theme f�r Administration');
define('_ADMIN_THEMESITE', 'Theme der Webseite nutzen');
define('_ADMIN_SKIN', 'Stylesheet f�r Administration');
define('_ADMIN_STARTCATEGORY', 'Start-Kategorie');
define('_ADMIN_DEFAULTCATEGORY', 'Default-Kategorie f�r neue Module');

// checks for install/upgrade files prior to admin panel being displayed
define('_ADMIN_PSAKWARNING', 'Warnung! Bitte das "Swiss army knife tool" im Root der Pr�senz l�schen');
define('_ADMIN_INSTALLWARNING','Warnung! Bitte die Datei "install.php" und den "install" Ordner im Root der Pr�senz l�schen');

// PostNuke Security Analyzer defines
define('_ADMIN_UPGRADE_PHP','Hinweis: upgrade.php im Root der Pr�senz sollte gel�scht werden!');
define('_ADMIN_UPGRADE76_PHP','Hinweis: upgrade76.php im Root der Pr�senz sollte gel�scht werden!');
define('_ADMIN_CONFIG_PHP','Hinweis: config/config.php ist beschreibbar (ggfs. chmod 644 oder chmod 444 setzen)!');
define('_ADMIN_MAGIC_QUOTES','Hinweis: <a href="http://php.net/magic_quotes">magic_quotes_gpc</a> ist aktiv!');
define('_ADMIN_REGISTER_GLOBALS','Hinweis: <a href="http://php.net/register_globals">register_globals</a> ist aktiv!');
define('_ADMIN_PNTEMP_HTACCESS','Hinweis: der /pnTemp-Ordner sollte mit einer .htaccess vor externem Zugriff gesch�tzt werden.');
define('_ADMIN_SAFEHTML', 'WARNUNG: Der <a href="index.php?module=SecurityCenter&type=admin&func=modifyconfig">SafeHTML-Outputfilter</a> sollte aktiviert werden');
define('_ADMIN_SECURITYCENTERNOTINSTALLED', 'WARNUNG: Das SecurityCenter Modul ist nicht installiert!');
define('_ADMIN_SECURITYCENTERNOTENABLED', 'WARNUNG: Das <a href="index.php?module=SecurityCenter&type=admin&func=modifyconfig">SecurityCenter</a> Modul ist nicht aktiv!');
define('_ADMIN_LEGACY_MODE','Hinweis: der "legacy-modus" ist aktiv!');

/* Defines for the Admin module's help page (davidnelson) */
define('_ADMINGENERALSETTINGSHELP', 'Es gibt derzeit nur eine Option im Abschnitt Allgemeine Einstellungen:');
define('_ADMINDISPLAYSETTINGSHELP', 'Es gibt sechs Einstellungen f�r die Anzeige:');
define('_ADMINCATEGORYCONFIGURATIONHELP', 'Im Abschnitt Modulkategorisierung k�nnen Sie zwei Optionen w�hlen:');
define('_ADMIN_DEFAULTCATEGORYEXPLAINED', '�ffnen Sie die Dropdownliste und w�hlen Sie die Modulkategorie aus, die f�r alle neu installierten und aktivierten Module gelten soll.');
define('_YOUGETTHEMESSAGE','Sie erhalten die Nachricht:');
define('_ADMINADDCATEGORYHELP','Hier k�nnen Sie eine neue Kategorie zu den bestehenden Kategorietabs hinzuf�gen. Geben Sie bei  \'Name\' die gew�nschte Bezeichnung des Tabs ein. Unter Beschreibung \'Description\' geben Sie eine aussagekr�ftige Umschreibung ein, die unterhalb des Namens eingeblendet wird, wenn die entsprechende Kategorie angezeigt wird.');
define('_ADMINADDCATEGORYHELP1', 'Geben Sie den Namen ein, der im Tabmen� angezeigt werden soll.');
define('_ADMINADDCATEGORYHELP2', 'Geben Sie eine informative Beschreibung ein, die unter dem Kategorienamen angezeigt wird, sobald die Kategorie in der Administration ausgew�hlt wird.');
define('_ADMINUPDATECATEGORY','Modulkategorie bearbeiten');
define('_ADMINUPDATECATEGORYHELP','Hier k�nnen Name und Beschreibung einer Modulkategorie bearbeitet werden.');
define('_ADMINDELETECATEGORY','Modulkategorie l�schen');
define('_ADMINDELETECATEGORYHELP','Hier kann eine Kategorie aus dem Tab-Men� gel�scht werden. Vor dem endg�ltigen L�schen muss diese Aktion best�tigt werden.');
define('_ADMINVIEW','Listenansicht der Modulkategorien');
define('_ADMINVIEWHELP','Zeigt eine Liste aller Kategorien an, die das Tab-Men� enth�lt.');
define('_ADMINMODIFYCONFIGHELP','Zu Beginn der Konfigurationsseite kann die Anzeige der Administration konfiguriert werden (das Theme und das CSS Stylesheet, die Anzahl anzuzeigender Module pro Seite.<br /><br />Weiter unten k�nnen Sie mit Dropdown-Listen f�r jedes installierte und aktivierte Modul eine entspechende Kategorie ausw�hlen.');
define('_MODULECATEGORIZATION', 'Auswahl der Modulkategorie');
define('_ADMIN_DISPLAYICONSEXPLAINED','Bei Auswahl dieser Option werden f�r jedes Modul Icons in der Administration angezeigt.');
define('_ADMIN_MODULESPERPAGEEXPLAINED','Geben Sie eine ganze Zahl f�r die Anzahl der Module ein, die auf einer Seite in der Administration angezeigt werden sollen.');
define('_ADMIN_MODULESPERROWEXPLAINED','Geben Sie eine ganze Zahl f�r die Anzahl der Module ein, die auf einer Zeile in der Administration angezeigt werden sollen.');
define('_ADMIN_THEMEEXPLAINED','�ffnen Sie die Dropdownliste und w�hlen Sie das Theme, das der Administration zugewiesen werden soll.');
define('_ADMIN_SKINNSEXPLAINED','�ffnen Sie die Dropdownliste und w�hlen Sie das Stylesheet, das der Administration zugewiesen werden soll.');
define('_ADMIN_STARTCATEGORYEXPLAINED','�ffnen Sie die Dropdownliste und w�hlen Sie die Modulkategorie aus, die in der Administration bei Erstbenutzung angezeigt werden soll.');
define('_ADMINIGNOREINSTALLERCHECKHELP','Diese Option erm�glicht die Deaktivierung der Sicherheitsanalyse, die pr�ft, ob die Installationsroutine noch im Wurzelverzeichnis vorhanden ist. Vorzugsweise sollte diese Option aktiviert bleiben. da sonst ein Sicherheitsrisiko entstehen k�nnte, falls das L�schen des Installationsskriptes nach Beendigung der vollst�ndigen Installation vergessen wurde.');
define('_ADMINSECURITYWARNINGSHELP','Falls die Sicherheitsanalyse potentielle Gefahren innerhalb der Installation erkennt, werden Sicherheitswarnungen angezeigt. Lesen Sie bitte die Dokumentation f�r weitere sicherheitsrelevante Informationen. Weiter unten stehen Erl�uterungen f�r jedes m�glicherweise identifizierte Sicherheitsrisiko. (Die sind nur Beispiele f�r m�gliche Sicherheitsl�cken und sie bedeuten nicht, dass diese tats�chlich entdeckt wurden. Um den Sicherheitsstatus dieser Website zu pr�fen, beachten Sie bitte - falls angezeigt - den Warnhinweis am Kopf der Administrationsseite. Sehen Sie keinen solchen Hinweis, wurden kein Sicherheitsrisiko entdeckt.)');
define('_ADMIN_INSTALLWARNING_HELP','Nach erfolgreicher Installtion sollte die Installationsdatei \'install.php\' sowie das Verzeichnis \'install\' unbedingt aus dem Wurzelverzeichnis gel�scht werden, insbesondere dann, wenn Sie Site online im Internet zur Verf�gung steht, da andernfalls eine Sicherheitsl�cke besteht. Wenn die Sicherheitsanalyse diese Gef�hrung erkennt, wird der Zugriff auf die Adminstration solange verhindert, bis die entsprechende Datei und das Verzeichnis gel�scht wurden. Lesen Sie bitte auch die Dokumentation zur optimalen Konfiguration dieser Site.');
define('_ADMIN_PSAKWARNING_HELP','Das Tool Swiss Army Knife (eine Datei namens \'psak.php\') ist ein n�tzliches Werkzeug, um bestimmte Probleme zu l�sen, aber es sollte niemals innerhalb eines Verzeichnis bleiben, auf das �ber das Internet zugegriffen werden kann, weil dies eine Sicherheitsl�cke darstellt. Wenn die Sicherheitsanalyse diese Gef�hrung erkennt, wird der Zugriff auf die Adminstration solange verhindert, bis die Datei \'psak.php\' gel�scht wurde.');
define('_ADMIN_CONFIG_PHP_HELP','Nach erfolgter Installation erzeugt das Installationsskript eine Konfigurationsdatei \'config.php\', die im Unterverzeichnis \'config\' des Wurzelverzeichnis zu finden ist. Falls diese Datei beschreibbar ist, stellt dies eine Sicherheitsl�cke dar. Sie sollten die Zugriffsrechte f�r diese Datei auf nur-lesbar (644 or 444) setzen. Lesen Sie bitte auch die Dokumentation zur optimalen Konfiguration dieser Site.');
define('_ADMIN_LEGACY_MODE_HELP','PostNuke erm�glicht die Unterst�tzung Module �lterer Versionen. Solche Module k�nnen jedoch Sicherheitsl�cher enthalten, die die Website kompromittieren k�nnen. Es wird dringend empfohlen, nur aktuelle Modulversionen zu verwenden, die konform zur alktuellen PostNuke API sind. In einem solchen Fall kann die Unterst�tzung �lterer Module angeschaltet werden (dies ist die Standardeinstellung nach der erstmaligen Installation).');
define('_ADMIN_MAGIC_QUOTES_HELP','In einigen Hostingumgebungen ist die PHP-Einstellung \'magic_quotes_gpc\' aktiv. Dies stellt jedoch eine potentielle Gef�hrdung dar. Falls das Web �ber das Internet verf�gbar ist, wird dringend empfohlen, sicher zu stellen, dass diese Einstellung f�r \'magic_quotes_gpc\' deaktiviert ist. Anleitungen hierzu finden Sie in der Dokumentation.');
define('_ADMIN_PNTEMP_HTACCESS_HELP','Nach erfolgter Installation enth�lt das Verzeichnis \'/pnTemp\' eine Datei \'.htaccess\'. Es gibt allerdings auch einige Verfahren der Dateiuploads, bei denen diese Datei nicht zum Webspace transferiert wird. In einem solchen Fall wird dringend empfohlen, eine solche Datei zu erzeugen (und sicher zu stellen, dass die Dateien \'.htaccess\' in einigen anderen Verzeichnissen ebenfalls existiert). Weitere Informationen hierzu finden Sie in der Dokumentation.');
define('_ADMIN_REGISTER_GLOBALS_HELP','In einigen Hostingumgebungen ist die PHP-Einstellung \'register_globals\' aktiv. Dies stellt jedoch eine potentielle Gef�hrdung dar. Falls das Web �ber das Internet verf�gbar ist, wird dringend empfohlen, sicher zu stellen, dass diese Einstellung f�r \'register_globals\' deaktiviert ist. Anleitungen hierzu finden Sie in der Dokumentation.');
define('_ADMIN_SAFEHTML_HELP','Der Ausgabefilter SafeHTML ist ein Feature des Security Center Moduls, dass die Sicherheit dieser Webiste erh�ht. Die Sicherheitsanalyse hat entdeckt, dass dieser Filter nicht aktiviert ist. Es wird empfohlen, diesen zu aktivieren. Diesen Hinweis wird auch angezeigt, wenn das Modul Seci�rity Center nicht installiert oder deaktiviert ist. Weitere Informationen k�nnen der Onlinehilfe des Security Centers entnommen werden.');
define('_ADMIN_SECURITYCENTERNOTINSTALLED_HELP','Nach der Installation ist das Security Center standardm��ig installiert und aktiviert. Sie sehen den obenstehenden Hinweis, falls das Security Center entfernt wurde. Es wird empfohlen, die Installation des Security Center nicht zu entfernen, da dies die Sicherheit der Site erh�ht.');
define('_ADMIN_SECURITYCENTERNOTENABLED_HELP','Nach der Installation ist das Security Center standardm��ig installiert und aktiviert. Sie sehen den obenstehenden Hinweis, falls das Security Center deaktiviert wurde. Es wird empfohlen, die das Security Center nicht zu deaktivieren, da dies die Sicherheit der Site erh�ht.');
define('_ADMIN_UPGRADE_PHP_HELP','Die Datei \'upgrade.php\' wird vom Installationsskript verwendet, falls eine bereits existierende Postnuke Site der Version 0.8x auf eine neuere Version aktualisiert wird. Nach erfolgreicher Aktualisierung sollte diese Datei Datei gel�scht werden, da sie nicht l�nger ben�tigt wird und ein m�gliches Sicherheitsrisiko darstellt.');
define('_ADMIN_UPGRADE76_PHP_HELP','Die Datei \'upgrade76.php\' wird vom Installationsskript verwendet, falls eine bereits existierende Postnuke Site der Version 0.76 auf eine neuere Version 0.8x aktualisiert wird. Nach erfolgreicher Aktualisierung sollte diese Datei Datei gel�scht werden, da sie nicht l�nger ben�tigt wird und ein m�gliches Sicherheitsrisiko darstellt.');
define('_ADMIN_MODULESCATEGORIZATIONEXPLAINED', 'Alle derzeit installierten und aktivierten Module werden aufgelistet. Neben jedem Modul kann anhand einer Dropdownliste ausgew�hlt werden, in welche Kategorie das jeweilige Module eingeordnet werden soll.');

?>