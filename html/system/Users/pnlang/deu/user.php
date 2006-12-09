<?php
/**
 * PostNuke Application Framework
 *
 * @copyright (c) 2001, PostNuke Development Team
 * @link http://www.postnuke.com
 * @version $Id: user.php 20667 2006-11-29 16:58:50Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package     PostNuke_System_Modules
 * @subpackage  PostNuke_Users
*/

define('_CONFIRMTERMSOFUSEHINT', 'Die Allgemeinen Nutzungsbedingungen wurden aktualisiert, bitte lesen und durch Markierung der Checkbox akzeptieren. Solange die Allgemeinen Nutzungsbedingungen nicht akzeptiert wurden ist keine Anmeldung m�glich.');
define('_CONFIRMTERMSOFUSE', 'Ich akzeptiere die <a href="index.php?module=Legal&amp;func=termsofuse">Allgemeinen Nutzungsbedingungen</a>');
define('_USERACTIVATION','Account Aktivierung');
define('_YOUACTIVATED','Der Account wurde aktiviert. Bitte <a href="index.php?module=Users&func=view&op=loginscreen">hier</a> anmelden.');
define('_ACTIVATIONFAILED','Fehler: Der Aktivierungslink ist ung�ltig.');

if (!defined('_CHARLONG')) {
  define('_CHARLONG','Zeichen lang');

}

define('_ADDITIONALINFO', 'Optionale Informationen');
define('_ALLOWEMAILVIEW','E-Mail-Adresse im Profil anzeigen');
define('_ANDCONNECTOR','und');
define('_ASREG1','');
define('_ASREG2','');
define('_ASREG3','');
define('_ASREG4','');
define('_ASREG5','');
define('_ASREG6','');
define('_ASREG7','');
define('_ASREGUSER','');
if (!defined('_CANKNOWABOUT')) {
    define('_CANKNOWABOUT','(Informationen �ber sich eingeben - maximal 255 Zeichen)');
}
define('_CODEFOR','Best�tigungs-Code f�r');
define('_CONFIRMATIONCODE','Best�tigungs-Code');
define('_CONSENT','(Best�tigung f�r das Mindestalter von %a% Jahren und �lter bzw. das Vorliegen der Erlaubnis der Erziehungsberechtigten.)');
define('_COOKIEWARNING','Diese Seite verwendet f�r die Session-Authentifizierung und teilweise f�r individuelle Einstellungen Cookies');
define('_EMAILAGAIN','E-Mail-Adresse best�tigen');
define('_EMAILDOMAINBANNED','Fehler! Domain ist f�r Registrierung gesperrt');
define('_EMAILREGISTERED','Fehler! Die E-Mail-Adresse wurde bereits registriert');
define('_EMAILSDIFF','Fehler! Die beiden E-Mail-Adressen sind unterschiedlich');
define('_ERRORINREQUIREDFIELDS', 'Fehler! Ein Pflichfeld ist leer bzw. nicht gesetzt');
define('_ERRORINVEMAIL','Fehler! Die E-Mail-Adresse scheint ung�ltig zu sein');
define('_ERRORINVNICK','Fehler! Der Benutzername kann nicht verwendet werden, Leerzeichen sind beispielsweise nicht erlaubt');
define('_ERRORMUSTAGREE','Fehler! F�r die Registrierung mu� den Allgemeinen Nutzungsbedingungen und der Erkl�rung zum Datenschutz zugestimmt werden');
define('_LOGINSITE','Anmeldung');
define('_LOGGINGREDIRECT', 'Falls keine Weiterleitung erfolgt bitte hier klicken');
define('_LOGGINGYOU','Anmeldung -- bitte warten!');
define('_LOGININCOR','Fehler! Falscher Benutzername bzw. ung�ltiges Kennwort...');
define('_LOGININCOMPLETE', 'Anmeldung nicht vollst�ndig, bitte Hinweis lesen');
if (!defined('_HERE')) {
  define('_HERE','hier');
}
define('_MAILED','gemailed.');
define('_MISSINGUSERNAME','Bitte Benutzernamen angeben.<br /><a href="javascript:history.back()">Hier klicken f�r vorherige Seite</a>');
define('_MODERATEDREGSAVED', 'Vielen Dank f�r die Anmeldung, die Daten werden in K�rze freigeschaltet.');
define('_MUSTBE','Das Mindestalter f�r diese Seite ist %a% Jahre und �lter bzw. das Vorliegen einer Erlaubnis der Erziehungsberechtigten');
define('_NAMERESERVED','Fehler! Der Benutzername ist nicht verf�gbar');
define('_NEWUSER', 'Account anlegen');
define('_NICK2LONG','Fehler! Der Benutzername ist zu lang');
define('_NICKNAME', 'Benutzername');
define('_NICKNOSPACES','Fehler! Der Benutzername darf keine Leerzeichen enthalten');
define('_NICKTAKEN','Fehler! Der Benutzername wurde bereits registriert');
define('_NOPROBLEM','Kein Problem! Einfach den Benutzernamen oder die hinterlegte E-Mail-Adresse angeben und \'Anforderung senden\' klicken. Es wird dann zur Verifizierung ein \'Best�tigungs-Code\' �ber E-Mail verschickt mit dem in einem zweiten Schritt auf dieser Seite ein neues Kennwort angefordert werden kann.');
define('_NOPROBLEMDETECTED', 'Kein Problem!');
define('_NOTALLOWREG','Registrierung deaktiviert');
define('_OPTION', 'Option');
define('_OPTIONALITEMS','Optionale Angaben');
define('_OVERAGE','Ich bin %a% Jahre oder �lter bzw. das Einverst�ndnis der Erziehungsberechtigten liegt vor.');
define('_PASSDIFFERENT','Fehler! Das Kennwort ist unterschiedlich');
define('_PASSWDAGAIN','Kennwort (Wiederholung)');
define('_PASSWDNEEDED','Bitte Kennwort eingeben');
define('_PASSWORD4','Kennwort f�r');
define('_PASSWORDLOST','Vergessenes Kennwort?');
define('_PASSWILLSEND','Das Kennwort wird an die hinterlegte E-Mail-Adresse gesendet');
define('_PLEASEINSTALLPROFILE','Fehler! Das Profil-Modul ist nicht verf�gbar!');
define('_PRIVACYPOLICY','Erkl�rung zum Datenschutz');
define('_REASONS','Hinweis:');
define('_REGISTER','Registrierung');
define('_REGISTERNOW','Jetzt registrieren!');
define('_REGISTRATION','Willkommen bei der Benutzer-Registrierung von %s%');
define('_REGISTRATIONAGREEMENT','Einverst�ndniserkl�rung zu');
define('_REGISTRATIONCHECK', 'Angaben pr�fen');
define('_REGISTRATIONFAILED','Fehler! Registrierung nicht erfolgreich, bitte Seitenbetreiber verst�ndigen');
define('_REGNEWUSER','Benutzer-Registrierung');
define('_REMEMBERME', 'Cookie setzen');
define('_RETRIEVEPASS','Vergessenes Kennwort anfordern');
define('_RETURN','um zur�ckzugehen');
define('_SELECTOPTION','Bitte aus den folgenden Optionen w�hlen:');
define('_SENDPASSWORD','Anforderung senden');
define('_SORRY','Sorry.');
define('_SORRYNOUSERINFO','Fehler! Keine zugeh�rige Benutzer-Information gefunden');
define('_TERMSOFUSE','Allgemeinen Nutzungsbedingungen');
define('_WEDONTGIVE','Pers�nliche Daten werden gem�� Bundesdatenschutzgesetz vertraulich behandelt.');
define('_UNDERAGE','Ich bin j�nger als %a% Jahre und das Einverst�ndnis der Erziehungsberechtigten liegt nicht vor');
define('_USERAGENTBANNED','Fehler! Der verwendete Useragent ist gesperrt');
define('_USERLOGIN','Benutzername');
define('_USERREGLOGIN','Registrierung und Anmeldung');
define('_YOUARELOGGEDOUT','Abmeldung erfolgt.');
define('_YOUAREREGISTERED','Registrierung abgeschlossen. Die Zugangsinformationen werden an die hinterlegt E-Mail-Adresse verschickt.');
define('_YOURPASSMUSTBETHISLONG','Fehler! Das Kennwort mu� mindestens %x% Zeichen lang sein');
define('_USERS', 'Registrierung und Anmeldung');
define('_USERSUSERACTIVATED','Account aktiviert');
define('_USERSCLICKHETETOLOGIN','Anmeldung');
define('_USERSINVALIDREGCODE','Ung�ltiger Registrierungs-Code');
// user profile defines
define('_USERSUSERPROFILE', 'Benutzer-Profil f�r');
define('_USERSNOSUCHUSER', 'Benutzer nicht gefunden');

define('_USERS_USERSBLOCK', 'Benutzer-Block');
define('_USERS_USERSBLOCKCONFIG', 'Benutzer-Block konfigurieren');
define('_USERS_USERBLOCKENABLEHELP', 'Mit dieser Option kann ein individueller Block konfiguriert werden.');
define('_USERS_USERBLOCKENABLE', 'Benutzer-Block aktivieren');
define('_USERS_USERBLOCKCONTENTTIP', 'Tipp: Es kann f�r Links etc. HTML verwendet werden');
define('_USERS_USERBLOCKUPDATED', 'Benutzer-block aktualisiert');
define('_USERS_USERBLOCKMENUFOR', 'Block f�r');

?>