<?php
// $Id$
// ----------------------------------------------------------------------
// PostNuke Content Management System
// Copyright (C) 2003 by the PostNuke Development Team.
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
// Purpose of file:  legal language defines
// ----------------------------------------------------------------------
$privacyurl = pnVarPrepHTMLDisplay(pnModURL('legal', 'user', 'privacy'));
$termsofuseurl = pnVarPrepHTMLDisplay(pnModURL('legal','user','termsofuse'));

define('_TOUNOTACTIVE', 'Allgemeine Nutzungsbedingungen nicht aktiviert');
define('_PPNOTACTIVE', 'Erkl�rung zum Datenschutz nicht aktiviert');
define('_ASNOTACTIVE', 'Accessibility statement not activated');

define("_PPTOPTEXT","<strong>Erkl�rung zum Datenschutz (Privacy Policy) v1.03 f�r ".pnConfigGetVar('sitename')."</strong>");
define('_PPTITLEINTRO','<strong>Vorwort</strong>');
define("_PPTEXTINTRO","Die Betreiber von ".pnConfigGetVar('sitename')." nehmen den Schutz der privaten Daten ernst. Die besondere Beachtung der Privatsph�re bei der Verarbeitung pers�nlicher Daten ist ein wichtiges Anliegen. Pers�nliche Daten werden gem�ss den Bestimmungen des Bundesdatenschutzgesetzes BDSG verwendet; die Betreiber dieser Website verpflichten sich zur Verschwiegenheit. Diese Webseiten k�nnen Links zu Webseiten anderer Anbieter enthalten, auf die sich diese Datenschutzerkl�rung nicht erstreckt. Weitere wichtige Informationen finden sich auch in den <a href=\"".$termsofuseurl."\">Allgemeinen Nutzungsbedingungen</a>.");
define('_PPTITLE1','<strong>1. Personenbezogene Daten</strong>');
define('_PPTEXT1','Personenbezogene Daten sind Informationen, die dazu genutzt werden k�nnen, die Identit�t zu erfahren. Darunter fallen Informationen wie richtiger Name, Adresse, Postanschrift, Telefonnummer. Informationen, die nicht direkt mit der wirklichen Identit�t in Verbindung gebracht werden (wie zum Beispiel favorisierte Webseiten oder Anzahl der Nutzer einer Site) fallen nicht darunter.<br /> 
Man kann unser Online-Angebot grunds�tzlich ohne Offenlegung der Identit�t nutzen. Wenn man sich f�r eine Registrierung entscheidet, sich also als Mitglied (registrierter Benutzer) anmeldet, kann man im individuellen Benutzerprofil pers�nlichen Informationen hinterlegen. Es unterliegt der freien Entscheidung, ob diese Daten eingegeben werden. Da versucht wird, f�r eine Nutzung des Angebots so wenig wie m�glich personenbezogene Daten zu erheben, reicht f�r eine Registrierung die Angabe eines Namens - unter dem man als Mitglied gef�hrt wird und der nicht mit dem realen Namen �bereinstimmen muss - und die Angabe der E-Mail-Adresse, an die das Kennwort geschickt wird, aus. In Verbindung mit dem Zugriff auf unsere Seiten werden serverseitig Daten (zum Beispiel IP-Adresse, Datum, Uhrzeit und betrachtete Seiten) gespeichert. Es findet keine personenbezogene Verwertung statt. Die statistische Auswertung anonymisierter Datens�tze bleibt vorbehalten.<br />
Wir nutzen die pers�nlichen Daten zu Zwecken der technischen Administration der Webseiten und zur Kundenverwaltung nur im jeweils daf�r erforderlichen Umfang.
Dar�ber hinaus werden pers�nliche Daten nur dann gespeichert, wenn diese freiwillig angegeben werden.');
define('_PPTITLE2','<strong>2. Weitergabe personenbezogener Daten</strong>');
define('_PPTEXT2','Wir verwenden personenbezogene Informationen nur f�r diese Webseite. Wir geben die Informationen nicht ohne ausdr�ckliches Einverst�ndnis an Dritte weiter. Sollten im Rahmen der Auftragsdatenverarbeitung Daten an Dienstleister weitergegeben werden, so sind diese an das Bundesdatenschutzgesetz BDSG, andere gesetzliche Vorschriften und an diese Privacy Policy gebunden.<br /> Erhebungen beziehungsweise �bermittlungen pers�nlicher Daten an staatliche Einrichtungen und Beh�rden erfolgen nur im Rahmen zwingender Rechtsvorschriften.');
define('_PPTITLE3','<strong>3. Einsatz von Cookies</strong>');
define('_PPTEXT3','Wir setzen Cookies - kleine Dateien mit Konfigurationsinformationen - ein. Sie helfen dabei, benutzerindividuelle Einstellungen zu ermitteln und spezielle Benutzerfunktionen zu realisieren. Wir erfassen keine personenbezogenen Daten �ber Cookies. S�mtliche Funktionen der Website sind auch ohne Cookies einsetzbar, einige benutzerdefinierte Eigenschaften und Einstellungen sind dann allerdings nicht verf�gbar.');
define('_PPTITLE4','<strong>4. Kinder</strong>');
define("_PPTEXT4","Personen unter 18 Jahren sollten ohne Zustimmung der Eltern oder Erziehungsberechtigten keine personenbezogenen Daten an uns �bermitteln. Wir fordern keine personenbezogenen Daten von Kindern an, sammeln diese nicht und geben sie nicht an Dritte weiter.");
define('_PPTITLE5','<strong>5. Recht auf Widerruf</strong>');
define("_PPTEXT5","Wenn Sie uns personenbezogene Daten �berlassen haben, k�nnen Sie diese jederzeit im <a href=\"user.php\">Benutzerprofil</a> wieder �ndern und l�schen. F�r eine vollst�ndige L�schung des Accounts bitte an den <a href=\"mailto:".pnVarPrepHTMLDisplay(pnConfigGetVar('adminmail'))."\">Webmaster</a> wenden. Bis zu diesem Zeitpunkt erfolgte Beitr�ge in Foren, Kommentaren, Terminank�ndigungen und Artikeln bleiben allerdings unter Umst�nden erhalten - Informationen dazu auch bei den <a href=\"".$termsofuseurl."\">Allgemeinen Nutzungsbedingungen</a>.");
define('_PPTITLE6','<strong>6. Links zu anderen Websites</strong>');
define('_PPTEXT6','Unser Online-Angebot enth�lt Links zu anderen Websites. Wir haben keinen Einfluss darauf, dass deren Betreiber die Datenschutzbestimmungen einhalten.');
define('_PPTITLE7','<strong>7. Beitr�ge</strong>');
define('_PPTEXT7','Die Beitr�ge auf unserer Seite sind f�r jeden zug�nglich. Beitr�ge sollten vor der Ver�ffentlichung sorgf�ltig darauf �berpr�ft werden, ob sie Angaben enthalten, die nicht f�r die �ffentlichkeit bestimmt sind. Die Beitr�ge werden m�glicherweise in Suchmaschinen erfasst und auch ohne gezielten Aufruf dieser Website weltweit zugreifbar.');
define('_PPTITLE8','<strong>8. Fragen und Kommentare</strong>');
define("_PPTEXT8","Bei Fragen und f�r Anregungen und Kommentare zum Thema Datenschutz bitte per Mail an den <a href=\"mailto:".pnVarPrepHTMLDisplay(pnConfigGetVar('adminmail'))."\">Webmaster</a> von ".pnConfigGetVar('sitename')." wenden.");

define("_TOUTOPTEXT","<strong>Allgemeine Nutzungsbedingungen v1.04<br />f�r ".pnConfigGetVar('sitename')."</strong>");
define('_TOUTITLE1','<strong>1. Informationen zum Urheberrecht</strong>');
define('_TOUTEXT1','Alle Informationen dieser Web-Seite werden wie angegeben ohne Anspruch auf Richtigkeit, Vollst�ndigkeit oder Aktualit�t zur Verf�gung gestellt.<br />
Wenn nicht ausdr�cklich anderweitig in dieser Publikation zu verstehen gegeben, und zwar in Zusammenhang mit einem bestimmten Ausschnitt, einer Datei, oder einem Dokument, ist jedermann dazu berechtigt, dieses Dokument anzusehen, zu kopieren, zu drucken und zu verteilen, unter den folgenden Bedingungen:<br /> 
Das Dokument darf nur f�r nichtkommerzielle Informationszwecke genutzt werden. Jede Kopie dieses Dokuments oder eines Teils davon muss diese urheberrechtliche Erkl�rung und das urheberrechtliche Schutzzeichen des Betreibers enthalten. Das Dokument, jede Kopie des Dokuments oder eines Teils davon d�rfen nicht ohne schriftliche Zustimmung des Betreibers ver�ndert werden. Der Betreiber beh�lt sich das Recht vor, diese Genehmigung jederzeit zu widerrufen, und jede Nutzung muss sofort eingestellt werden, sobald eine schriftliche Bekanntmachung seitens des Betreibers ver�ffentlicht wird.');
define('_TOUTITLE2','<strong>2. Vertragliche Zusicherungen und Verzichterkl�rungen</strong>');
define('_TOUTEXT2',"Die Website �".pnConfigGetVar('sitename')."� steht Ihnen - soweit nicht anders vereinbart - kostenlos zur Verf�gung. Die Betreiber �bernehmen keinerlei Gew�hr f�r Richtigkeit der enthaltenen Informationen, Verf�gbarkeit der Dienste, Verlust von auf ".pnConfigGetVar('sitename')." abgespeicherten Daten oder Nutzbarkeit f�r irgendeinen bestimmten Zweck.<br /> 
Die Betreiber haften auch nicht f�r Folgesch�den, die auf einer Nutzung des Angebotes beruhen. <br />
Soweit ein Haftungsausschluss nicht in Betracht kommt, haften die Betreiber lediglich f�r grobe Fahrl�ssigkeit und Vorsatz. Produkt- und Firmennamen sind Marken der jeweiligen Eigent�mer und werden auf diesen Seiten ausschliesslich zu Informationszwecken eingesetzt. <br />
Diese Publikation k�nnte technische oder andere Ungenauigkeiten enthalten oder Schreib- oder Tippfehler. Von Zeit zu Zeit werden der vorliegenden Information �nderungen hinzugef�gt; diese �nderungen werden in neuen Ausgaben der Publikation eingef�gt. Der Betreiber kann jederzeit Verbesserungen und/oder Ver�nderungen an den Angeboten vornehmen, die in dieser Publikation beschrieben werden.");
define('_TOUTITLE3','<strong>3. Meinungs�usserungen bei Kommentaren und im Forum</strong>');
define("_TOUTEXT3","Aufgrund der sich st�ndig ver�ndernden Inhalte bei Kommentaren und im Forum ist es dem Betreiber nicht m�glich, alle Beitr�ge l�ckenlos zu sichten, inhaltlich zu pr�fen und die unmittelbare aktive Kontrolle dar�ber auszu�ben. Es wird keine Verantwortung f�r den Inhalt, die Korrektheit und die Form der eingestellten Beitr�ge �bernommen.");
define('_TOUTITLE4','<strong>3a. Spezielle Bestimmungen f�r angemeldete Nutzer</strong>');
define("_TOUTEXT4","Mit der Anmeldung bei �".pnConfigGetVar('sitename')."� erkl�rt sich der Nutzer - nachfolgend �Mitglied� gegen�ber dem Betreiber mit folgenden Nutzungsbedingungen einverstanden:<br />
Mitglieder, die sich an Diskussionsforen und Kommentaren beteiligen, verpflichten sich dazu,<br />
<strong>&nbsp;&middot;&nbsp;</strong>1. Sich in Ihren Beitr�gen jeglicher Beleidigungen, strafbarer Inhalte, Pornographie und grober Ausdrucksweise zu enthalten,<br />
<strong>&nbsp;&middot;&nbsp;</strong>2. Die alleinige Verantwortung f�r die von ihnen eingestellten Inhalte zu tragen, Rechte Dritter (insbesondere Marken-, Urheber- und Pers�nlichkeitsrechte) nicht zu verletzen und die Betreiber von �".pnConfigGetVar('sitename')."� von durch ihre Beitr�ge ausgel�sten Anspr�chen Dritter vollst�ndig freizustellen.<br />
<strong>&nbsp;&middot;&nbsp;</strong>3. Weder in Foren noch in Kommentaren Werbung irgendwelcher Art einzustellen oder Foren und Kommentare zu irgendeiner Art gewerblicher T�tigkeit zu nutzen. Insbesondere gilt das f�r die Ver�ffentlichung von �0190�-Rufnummern zu irgendeinem Zweck.<br />
Es besteht keinerlei Anspruch auf Ver�ffentlichung von eingereichten Kommentaren oder Forenbeitr�gen. Die Betreiber von �".pnConfigGetVar('sitename')."� behalten sich vor, Kommentare und Forenbeitr�ge nach eigenem Ermessen zu editieren oder zu l�schen. Bei Verletzungen der Pflichten unter 1), 2) und 3) behalten sich die Betreiber ferner vor, die Mitgliedschaft zeitlich begrenzt zu sperren oder dauernd zu l�schen.");
define('_TOUTITLE5','<strong>4. Einreichen von Beitr�gen und Artikeln</strong>');
define('_TOUTEXT5',"Soweit das Mitglied von der M�glichkeit Gebrauch macht, eigene Beitr�ge f�r redaktionellen Teil von �".pnConfigGetVar('sitename')."� einzureichen, gilt Folgendes:<br />
Voraussetzung f�r das Posten eigener Beitr�ge ist, dass das Mitglied seinen vollst�ndigen und korrekten Vor- und Nachnamen in sein �".pnConfigGetVar('sitename')."� - Benutzerprofil eingetragen hat
oder nach dem Einreichen des Artikels dort eintr�gt. Mit dem dort eingetragenen Namen wird der eingereichte Beitrag bei Ver�ffentlichung (�ffentlich) gekennzeichnet.<br />
Das Mitglied gibt f�r alle Beitr�ge, die von ihm oder ihr zuk�nftig auf �".pnConfigGetVar('sitename')."� eingereicht werden, folgende Erkl�rungen ab:<br />
<strong>&nbsp;&middot;&nbsp;</strong>1. Das Mitglied versichert, dass die eingereichten Beitr�ge frei von Rechten Dritter, insbesonders Urheber-, Marken- oder Pers�nlichkeitsrechten sind. Dies gilt f�r alle eingereichten Beitr�ge und Bildwerke.<br />
<strong>&nbsp;&middot;&nbsp;</strong>2. Das Mitglied r�umt den Betreibern von �".pnConfigGetVar('sitename')."� ein uneingeschr�nktes Nutzungsrecht an den eingereichten Beitr�gen ein. Dieses umfasst die Ver�ffentlichung im Internet auf �".pnConfigGetVar('sitename')."� sowie auf anderen Internetservern, in Newslettern, Printmedien und anderen Publikationen.<br />
<strong>&nbsp;&middot;&nbsp;</strong>3. Eingereichte Beitr�ge werden auf Verlangen des Mitgliedes per Email an die Adresse des <a href=\"mailto:".pnVarPrepHTMLDisplay(pnConfigGetVar('adminmail'))."\">Webmasters</a> wieder gel�scht bzw. anonymisiert. Die L�schung bzw. Anonymisierung erfolgt innerhalb von 7 Tagen nach der Mitteilung. F�r Folgesch�den, die dem Mitglied aus der versp�teten L�schung des Beitrages entstehen haften die Betreiber nur insoweit, als sie nicht auf einer Pflichtverletzung des Mitgliedes (oben unter 1), 2) und 3) ) und soweit sie dar�ber hinaus auf grobem Verschulden oder Vorsatz der Betreiber von �".pnConfigGetVar('sitename')."� beruhen. Wir weisen in diesem Zusammenhang ausdr�cklich darauf hin, dass �".pnConfigGetVar('sitename')."� regelm��ig von Suchmaschinen indexiert wird, und dass wir keinen Einfluss darauf haben, ob, wo und wie lange bei uns ver�ffentlichte Beitr�ge m�glicherweise auch nach L�schung bei �".pnConfigGetVar('sitename')."� in Datenbanken von Suchmaschinen und Webkatalogen gespeichert werden und abrufbar sind.<br />
<strong>&nbsp;&middot;&nbsp;</strong>4. Es besteht keinerlei Anspruch auf Speicherung, Ver�ffentlichung oder Archivierung der eingereichten Beitr�ge. Die Betreiber behalten sich vor, eingereichte Beitr�ge ohne Angabe von Gr�nden nicht zu ver�ffentlichen, vor Ver�ffentlichung zu editieren oder nach Ver�ffentlichung nach freiem Ermessen wieder zu l�schen.<br />
<strong>&nbsp;&middot;&nbsp;</strong>5. Durch die Ver�ffentlichung eingereichter Beitr�ge entstehen keinerlei Verg�tungsanspr�che (Honorare, Lizenzgeb�hren, Aufwendungsentsch�digungen oder �hnliches) des Mitgliedes gegen�ber �".pnConfigGetVar('sitename')."�. Die Mitarbeit ist ehrenamtlich (unentgeltlich).");
define('_TOUTITLE6','<strong>5. Erkl�rung zum Datenschutz (Privacy Policy)</strong>');
define("_TOUTEXT6","Sofern innerhalb des Internetangebotes die M�glichkeit zur Eingabe pers�nlicher oder gesch�ftlicher Daten genutzt wird, so erfolgt die Preisgabe dieser Daten seitens des Nutzers auf ausdr�cklich freiwilliger Basis. Die Inanspruchnahme unseres Dienstes ist - soweit technisch m�glich und zumutbar - auch ohne Angabe solcher Daten bzw. unter Angabe anonymisierter Daten oder eines Pseudonyms gestattet. Weitere wichtige Informationen zum Thema Datenschutz finden sich in unserer <a href=\"".$privacyurl."\">Erkl�rung zum Datenschutz (Privacy Policy)</a>.");
define('_TOUTEXT6MORE','');
define('_TOUTITLE7','<strong>6. Registrierung und Passwort</strong>');
define('_TOUTEXT7','Der Benutzer ist verpflichtet, die Kombination Benutzername/Passwort vertraulich zu behandeln und nicht an Dritte weiterzugeben. Bei Verdacht auf Missbrauch der Zugangsdaten ist der Betreiber zu informieren.');
define('_TOUTITLE8','<strong>7. Hinweis gem�ss Teledienstgesetz</strong>');
define('_TOUTEXT8','F�r Internetseiten Dritter, auf die die dieses Angebot durch sog. Links verweist, tragen die jeweiligen Anbieter die Verantwortung. Der Betreiber ist f�r den Inhalt solcher Seiten Dritter nicht verantwortlich. Desweiteren kann die Web-Seite ohne unser Wissen von anderen Seiten mittels sog. Links angelinkt werden. Der Betreiber �bernimmt keine Verantwortung f�r Darstellungen, Inhalt oder irgendeine Verbindung zu dieser Web-Seite in Web-Seiten Dritter. F�r fremde Inhalte ist der Betreiber nur dann verantwortlich, wenn von ihnen (d.h. auch von einem rechtswidrigen oder strafbaren Inhalt) positive Kenntnis vorliegt und es technisch m�glich und zumutbar ist, deren Nutzung zu verhindern. Der Betreiber ist nach dem Teledienstgesetz jedoch nicht verpflichtet, die fremden Inhalte st�ndig zu �berpr�fen.');
define('_TOUTITLE9','<strong>Kontakt</strong>');
define('_TOUTEXT9','Fragen rund um '.pnConfigGetVar('sitename').' bitte an den <a href="mailto:'.pnVarPrepHTMLDisplay(pnConfigGetVar('adminmail')).'">Webmaster</a> richten.');
define('_TOUTITLE10','<strong>Rechtswirksamkeit</strong>');
define('_TOUTEXT10','Diese Allgemeinen Nutzungsbedingungen beziehen sich auf '.pnConfigGetVar('sitename').'.<br />
Sofern Teile oder einzelne Formulierungen dieses Textes der geltenden Rechtslage nicht, nicht mehr oder nicht vollst�ndig entsprechen sollten, bleiben die �brigen Teile des Dokumentes in ihrem Inhalt und ihrer G�ltigkeit davon unber�hrt.');
define('_TOUTEXT10MORE','');
define('_TOUTEXT10MORE1','');

/* ZUSATZINFORMATION IN BEZUG AUF DIE ANGABE EINES IMPRESSUMS:
Nach Paragraph 6 Teledienstgesetz ist jeder Diensteanbieter verpflichtet, folgende Informationen auf einer gesch�ftsm�ssg betriebenen Website erkennbar, unmittelbar erreichbar und st�ndig verf�gbar zu halten:
- Namen und Anschrift, bei juristischen Personen zus�tzlich den Vertretungsberechtigen. Nicht ausreichend ist die Angabe eines Postfaches;
- Angaben, die eine schnelle elektronische Kommunikation und unmittelbare Kommunikation mit dem Diensteanbieter erm�glichen, also zumindest eine Telefonnummer sowie eine E-Mail-Adresse
- Angaben zur st�ndigen Aufsichtsbeh�rde, soweit der Teledienst im Rahmen einer T�tigkeit angeboten oder erbracht wird, die der beh�rdlichen Zulassung bedarf. Diese Vorschrift betrifft insbesondere Betreiber von Anlagen und Einrichtungen die �ffentlich-rechtlicher Genehmigung bed�rfen
- Das Handelsregister, Vereinsregister, Partnerschaftsregister oder Genossenschaftsregister, in das der Diensteanbieter eingetragen ist sowie die die entsprechende Registernummer
- Besondere Informationspflichten gelten f�r sogenannte "reglementierte Berufe" im Sinne der europ�ischen Diplomanerkennungsrichtlinien, um f�r den jeweiligen Nutzer die Qualifikation, Befugnisse und gegebenenfalls besondere Pflichtenstellung des Diensteanbieters transparent zu machen
- Falls vorhanden, die Umsatzsteueridentifikationsnummer nach Paragraph 27a des Umsatzsteuergesetzes

Als Empfehlung zur Erstellung eines Impressums: http://www.digi-info.de/webimpressum/ 
*/

define('_TOUTITLE11','');
define('_TOUTEXT11','');   
define('_TOUTEXT11MORE','');
define('_TOUTITLE12','');
define('_TOUTEXT12','');
define('_TOUTITLE13','');
define("_TOUTEXT13",""); 
define('_TOUTITLE14','');
define("_TOUTEXT14","");
define('_TOUTITLE15','');
define("_TOUTEXT15","");

define('_ASTITLE1', 'Barrierefreiheit');
define('_ASTEXT1', 'Um den Anforderungen m�glichst vieler Besucherinnen und Besucher unserer Website gerecht zu werden, bem�hen wir uns, diese Website barrierefrei zu gestalten. Der Gesetzgeber hat f�r Website von �ffentlichen Einrichtungen, Beh�rden und �mtern rechtliche Vorgaben geschaffen, die die Barrierefreiheit garantieren sollen.<br />
Wir fallen zwar nicht direkt unter diese Auflagen, m�chten uns aber dennoch daran orientieren.<br />
Sollten dennoch konkrete Schwierigkeiten bei der barrierefreien Nutzung dieser Website auftreten, bitten wir um eine kurze Mitteilung. Wir sind f�r Hinweise dankbar und versuchen, nach Kr�ften zu helfen.<br />
Wenden Sie sich bitte per Email an '.pnConfigGetVar('adminmail').'.');
define('_ASTITLE2', '');
define('_ASTEXT2', '');
define('_ASTEXT3', '');
define('_ASTITLE3', '');
define('_ASTEXT4', '');
define('_ASTEXT5', '');
define('_ASTEXT6', '');
define('_ASTEXT7', '');
define('_ASTEXT8', '');
define('_ASTITLE4', '');
define('_ASTEXT9', '');
define('_ASTEXT10', '');
define('_ASTITLE5', '');
define('_ASTEXT11', '');
define('_ASTEXT12', '');
define('_ASTITLE6', '');
define('_ASTEXT13', '');
define('_ASTEXT14', '');
define('_ASTITLE7', '');
define('_ASTEXT15', '');
define('_ASTEXT16', '');
define('_ASTEXT17', '');

define('_LEGAL', 'Nutzungsbedingungen');
define('_LEGALTERMSOFUSE', 'Allgemeine Nutzungsbedingungen');
define('_LEGALPRIVACYPOLICY', 'Erkl�rung zum Datenschutz');
define('_LEGALACCESIBILITYSTATEMENT', 'Erkl�rung zur Barrierefreiheit');

?>