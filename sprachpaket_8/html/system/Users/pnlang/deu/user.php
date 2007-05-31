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

// general
define('_USERS', 'Registrierung und Anmeldung');

// view template
define('_USERS_REGISTER','Registrierung');
define('_USERS_REGISTRATIONANDLOGIN','Benutzeranmeldung');
define('_USERS_RETRIEVEPASS','Vergessenes Kennwort anfordern');
define('_USERS_SELECTOPTION','Bitte aus den folgenden Optionen w�hlen:');

// loginscreen template
define('_USERS_REMEMBERME', 'Cookie setzen');

// check age template
define('_USERS_CONSENT','(Best�tigung f�r das Mindestalter von %a% Jahren und �lter bzw. das Vorliegen der Erlaubnis der Erziehungsberechtigten.)');
define('_USERS_MUSTBE','Das Mindestalter f�r diese Seite ist %a% Jahre und �lter bzw. das Vorliegen einer Erlaubnis der Erziehungsberechtigten');
define('_USERS_OVERAGE','Ich bin %a% Jahre oder �lter bzw. das Einverst�ndnis der Erziehungsberechtigten liegt vor.');
define('_USERS_REGISTRATION','Willkommen bei der Benutzer-Registrierung von %s%');
define('_USERS_UNDERAGE','Ich bin j�nger als %a% Jahre und das Einverst�ndnis der Erziehungsberechtigten liegt nicht vor');

// registration page
define('_USERS_SUBMITREGISTRATION', 'Registrierung senden');
define('_USERS_ADDITIONALINFO', 'Optionale Informationen');
define('_USERS_ALLOWEMAILVIEW','E-Mail-Adresse im Profil anzeigen');
define('_USERS_COOKIEWARNING','Diese Seite verwendet f�r die Session-Authentifizierung und teilweise f�r individuelle Einstellungen Cookies');
define('_USERS_EMAILAGAIN','E-Mail-Adresse best�tigen');
define('_USERS_PASSWDAGAIN','Kennwort (Wiederholung)');
define('_USERS_PASSWILLSEND','Das Kennwort wird an die hinterlegte E-Mail-Adresse gesendet');
define('_USERS_REGNEWUSER','Benutzer-Registrierung');
define('_USERS_REGISTRATIONAGREEMENT','Einverst�ndniserkl�rung zu');
define('_USERS_REGISTRATIONCHECK', 'Angaben pr�fen');
// define('_USERS_REGISTERNOW','Jetzt registrieren!');
// define('_USERS_WEDONTGIVE','Pers�nliche Daten werden gem�� Bundesdatenschutzgesetz vertraulich behandelt.');
define('_USERS_REQUIREDTEXT','Mit (*) markierte Angaben sind erforderlich.');

// terms of use (tied to the legal module
define('_USERS_CONFIRMTERMSOFUSEHINT', 'Die Allgemeinen Nutzungsbedingungen wurden aktualisiert, bitte lesen und durch Markierung der Checkbox akzeptieren. Solange die Allgemeinen Nutzungsbedingungen nicht akzeptiert wurden ist keine Anmeldung m�glich.');
define('_USERS_CONFIRMTERMSOFUSE', 'Ich akzeptiere die <a href="index.php?module=Legal&amp;func=termsofuse">Allgemeinen Nutzungsbedingungen</a>');

// finished registration template
define('_USERS_RETURNTOSTART', 'Zur�ck zur Startseite');

// lost password template
define('_USERS_CONFIRMATIONCODE','Best�tigungs-Code');
define('_USERS_NOPROBLEM','Kein Problem! Einfach den Benutzernamen oder die hinterlegte E-Mail-Adresse angeben und \'Anforderung senden\' klicken. Es wird dann zur Verifizierung ein \'Best�tigungs-Code\' �ber E-Mail verschickt mit dem in einem zweiten Schritt auf dieser Seite ein neues Kennwort angefordert werden kann.');
define('_USERS_PASSWORDLOST','Vergessenes Kennwort?');
define('_USERS_SENDPASSWORD','Anforderung senden');

// login/logout templates
define('_USERS_LOGGINGREDIRECT', 'Falls keine Weiterleitung erfolgt bitte hier klicken');
define('_USERS_LOGGINGYOUIN','Anmeldung -- bitte warten!');
define('_USERS_YOUARELOGGEDOUT','Abmeldung erfolgt.');

// status/error messages
define('_USERS_ACTIVATIONINFO','Use the link in the e-mail to activate your account.');
define('_USERS_AGEREQUIREMENTNOTMET','Error! Sorry! You must be %a% or over, or have parental permission to register here.');
define('_USERS_APPLICATIONRECEIVED', 'Thanks for registering! We will review your application soon.');
define('_USERS_CODEMAILED','Der Best�tigungscode f�r %uname% wurde gedendet.');
define('_USERS_EMAILDOMAINBANNED','Fehler! Domain ist f�r Registrierung gesperrt');
define('_USERS_EMAILREGISTERED','Fehler! Die E-Mail-Adresse wurde bereits registriert');
define('_USERS_EMAILSDIFF','Fehler! Die beiden E-Mail-Adressen sind unterschiedlich');
define('_USERS_ERRORINREQUIREDFIELDS', 'Fehler! Ein Pflichfeld ist leer bzw. nicht gesetzt');
define('_USERS_ERRORMUSTAGREE','Fehler! F�r die Registrierung mu� den Allgemeinen Nutzungsbedingungen und der Erkl�rung zum Datenschutz zugestimmt werden');
define('_USERS_INVALIDREGCODE','Error! Sorry! Invalid registration code');
define('_USERS_LOGININCOMPLETE', 'Anmeldung nicht vollst�ndig, bitte Hinweis lesen');
define('_USERS_LOGININCORRECT','Fehler! Falscher Benutzername bzw. ung�ltiges Kennwort...');
define('_USERS_MISSINGUSERNAME','Bitte Benutzernamen angeben.<br /><a href="javascript:history.back()">Hier klicken f�r vorherige Seite</a>');
define('_USERS_NOPROBLEMDETECTED', 'Kein Problem!');
define('_USERS_NOTALLOWREG','Registrierung deaktiviert');
define('_USERS_NOTALLOWREGREASONS','Begr�ndung:');
define('_USERS_NOUSERINFOFOUND','Error! Sorry! no corresponding user information was found');
define('_USERS_PASSWORDMAILED','Kennwort f�r %uname% wurde gesendet');
define('_USERS_PASSWORDREQUIRED','Bitte Kennwort eingeben');
define('_USERS_PPROFILEMODULENOTAVAILABLE','Error! Sorry! Please install PostNuke\'s Profile module first!');
define('_USERS_REGISTRATIONFAILED','Fehler! Registrierung nicht erfolgreich, bitte Seitenbetreiber verst�ndigen');
define('_USERS_USERACTIVATED','Der Account wurde aktiviert.');
define('_USERS_USERAGENTBANNED','Fehler! Der verwendete Useragent ist gesperrt');
define('_USERS_USERNAMEINVALID','Fehler! Der Benutzername kann nicht verwendet werden, Leerzeichen sind beispielsweise nicht erlaubt');
define('_USERS_USERNAMENOSPACES','Fehler! Der Benutzername darf keine Leerzeichen enthalten');
define('_USERS_USERNAMETAKEN','Fehler! Der Benutzername wurde bereits registriert');
define('_USERS_USERNAMERESERVED','Fehler! Der Benutzername ist nicht verf�gbar');
define('_USERS_USERNAMETOOLONG','ehler! Der Benutzername ist nicht zu lang. Er muss k�rzer als 25 Zeichen sein.');
define('_USERS_YOUAREREGISTERED','Registrierung abgeschlossen. Die Zugangsinformationen werden an die hinterlegt E-Mail-Adresse verschickt.');
define('_USERS_YOURPASSMUSTBETHISLONG','Fehler! Das Kennwort mu� mindestens %x% Zeichen lang sein');

// users block - these defines are here because the blockey is 'user'
// hence this file is loaded by the block
define('_USERS_USERSBLOCK', 'Benutzer-Block');
define('_USERS_USERSBLOCKCONFIG', 'Benutzer-Block konfigurieren');
define('_USERS_USERBLOCKENABLEHELP', 'Mit dieser Option kann ein individueller Block konfiguriert werden.');
define('_USERS_USERBLOCKENABLE', 'Benutzer-Block aktivieren');
//define('_USERS_USERBLOCKCONTENTTIP', 'Tipp: Es kann f�r Links etc. HTML verwendet werden');
define('_USERS_USERBLOCKUPDATED', 'Benutzer-Block aktualisiert');
define('_USERS_USERBLOCKMENUFOR', 'Block f�r %user%');

?>