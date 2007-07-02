<?php
/**
 * PostNuke Application Framework
 *
 * @copyright (c) 2001, PostNuke Development Team
 * @link http://www.postnuke.com
 * @version $Id: admin.php 20640 2006-11-28 10:49:53Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package PostNuke_System_Modules
 * @subpackage  PostNuke_Groups
 */

 // general
define('_GROUPS_PENDINGACCEPT',                'Akzeptieren');
define('_GROUPS_PENDINGDENY',                  'Ablehnen');

// singular/plural
define('_GROUPS_GROUP',                         'Gruppe');
define('_GROUPS_GROUPS',                        'Gruppen');

// ajax interface
define('_GROUPS_ADDINGNEW',                    '--neue Gruppe--');
define('_GROUPS_DELETINGGROUP',                '...l�sche Gruppe...');
define('_GROUPS_UPDATINGGROUP',                '...aktualisiere Gruppe...');

// group states and types
define('_GROUPS_CLOSED',                       'geschlossen');
define('_GROUPS_CORE',                         'Core');
define('_GROUPS_NEWGROUPINDB',                 'Neue Gruppe in DB');
define('_GROUPS_OPEN',                         'offen');
define('_GROUPS_PRIVATESHORT',                 'Privat');
define('_GROUPS_PUBLICSHORT',                  '�ffentlich');
define('_GROUPS_TYPE',                         'Typ');

// notifation methods
define('_GROUPS_NOTIFYBYEMAIL',                'E-Mail-Adresse');
define('_GROUPS_NOTIFYBYPM',                   'Private Nachricht');
define('_GROUPS_NOTIFYNONE',                   'keine');

// view template
define('_GROUPS_APPEND',                       'Neue Gruppe hinzuf�gen');
define('_GROUPS_USERCOMMENT',                  'Kommentar');
define('_GROUPS_ISDEFAULTUSERGROUP',           '(*) = Startgruppe - kann nicht gel�scht werden');
define('_GROUPS_MEMBERSHIP',                   'Gruppen-Mitgliedschaft');
define('_GROUPS_NBUMAX',                       'Maximum');
define('_GROUPS_NBUSERS',                      'Mitglieder');
define('_GROUPS_PENDINGTITLE',                 'Ausstehende Bewerbungen');

// modify config template
define('_GROUPS_ADMMAILWARNING',               'E-Mail f�r neue Gruppen-Bewerbungen');
define('_GROUPS_DEFAULTGROUP',                 'Startgruppe f�r registrierte Benutzer');
define('_GROUPS_HIDECLOSEDGROUPS',             'Geschlossene Gruppen verstecken');

// group applications template
define('_GROUPS_DEFAULTACCEPTTEXT',            'Die Bewerbung f�r die Gruppe wurde akzeptiert, die entsprechenden Zugriffsrechte sind eingerichtet.');
define('_GROUPS_DEFAULTDENYREASON',            'Die Bewerbung f�r die Gruppe wurde leider nicht akzeptiert.');

// group membership template
define('_GROUPS_ADDUSER',                      'Benutzer zu Gruppe hinzuf�gen');
define('_GROUPS_NOMOREUSERS',                  'F�r die Gruppe verf�gbare Benutzer.');
define('_GROUPS_REMOVEUSER',                   'Benutzer entfernen');
define('_GROUPS_UID',                          'User ID');

// user pending template
define('_GROUPS_REASON',                       'Grund');
define('_GROUPS_SENDREASONBYMAIL',             'Grund/Benachrichtigung schicken');
define('_GROUPS_USERAPPLICATION',              'Benutzer Bewerbung');
define('_GROUPS_USERAPPLICATIONTEXT',          'Benutzer Text');

// errors/statuses
define('_GROUPS_ACCEPTTITLE',                  'Hinzugef�gt in die Gruppe ');
define('_GROUPS_ACCEPTUSERFAILED',             'Fehler beim Hinzuf�gen in die Gruppe');
define('_GROUPS_ADDERROR',                     'Fehler beim Einrichten der Gruppe');
define('_GROUPS_ALREADYEXISTS',                'Gruppe existiert bereits');
define('_GROUPS_DEFAULTGROUPCANNOTBEDELETED',  'Die Startgruppe kann nicht gel�scht werden');
define('_GROUPS_DELETEERROR',                  'Fehler beim L�schen der Gruppe ');
define('_GROUPS_DENYTITLE',                    'Fehler! Die Bewerbung wurde abgelehnt ');
define('_GROUPS_DENYUSERFAILED',               'Ablehnung fehlgeschlagen');
define('_GROUPS_MISSINGNAME',                  'Fehlender Gruppenname');
define('_GROUPS_USERADDED',                    'Benutzer zu Gruppe hinzugef�gt');
define('_GROUPS_USERDENIED',                   'Bewerbung abgelehnt');
define('_GROUPS_USERNOTADDED',                 'Benutzer nicht zur Gruppe hinzugef�gt');
define('_GROUPS_USERREMOVED',                  'Benutzer aus der Gruppe entfernt');
define('_GROUPS_USERREMOVEDERROR',             'Entfernen des Benutzers fehlgeschlagen');

?>