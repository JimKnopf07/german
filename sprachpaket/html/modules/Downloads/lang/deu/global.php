<?php // File: $Id$ $Name$
// ----------------------------------------------------------------------
// Purpose of file: downloads module language defines.
// ----------------------------------------------------------------------
//
// please post comments regarding german translation at
// http://www.pncommunity.de
// last changes: 2004/08/13 larsneo
//
$sitename = pnConfigGetVar('sitename');
$anonwaitdays = pnConfigGetVar('anonwaitdays');

define('_DOWNLOADSPAGE','Downloads pro Seite');
define('_ANONWAITDAYS','Tagesanzahl bis anonyme Benutzer einen Download bewerten k�nnen');
define('_OUTSIDEWAITDAYS','Tagesanzahl bis externe Benutzer Stimmen abgeben k�nnen');
define('_USEOUTSIDEVOTING', 'externe Stimmabgabe erlauben');
define('_ANONWEIGHT', 'Wieviele Stimmen unregistrierter Benutzer pro 1 Stimme registrierter Benutzer?');
define('_OUTSIDEWEIGHT', 'Wieviele externe Stimmen pro 1 Stimme registrierter Benutzer?');
define('_DETAILVOTEDECIMAL', 'Dezimalstellen bei detailiertem Abstimmungsergebnis');
define('_MAINVOTEDECIMAL', 'Dezimalstellen des Stimmergebnisses');
define('_TOPDOWNLOADSPERCENTRIGGER', '1 f�r Prozentsatz (ansonsten Anzahl)');
define('_TOPDOWNLOADS', 'Top Downloads: Anzahl oder Prozentsatz zur Anzeige');
define('_MOSTPOPDOWNLOADSPERCENTRIGGER', '1 f�r Prozentsatz (ansonsten Anzahl)');
define('_MOSTPOPDOWNLOADS', 'beliebteste Downloads: Anzahl oder Prozentsatz zur Anzeige');
define('_FEATUREBOX', 'Featured Link-Box auf der Hauptseite anzeigen?');
define('_LINKVOTEMIN', 'notwendige Stimmenanzahl f�r die \'Top 10\' Liste');
define('_BLOCKUNREGMODIFY', 'unregistrierten Benutzern das Vorschlagen von �nderungen verbieten?');
define('_TOBEPOPULAR', 'Hits f�r Beliebtheit');
define('_DOWNLOADSASNEW', 'Anzahl der neuen Downloads');
define('_DOWNLOADSASBEST', 'Anzahl der besten Downloads');
define('_DOWNLOADSINRES', 'Anzahl der Downloads in Suchergebnis');

define('_1WEEK','1 Woche');
define('_2WEEKS','2 Wochen');
define('_30DAYS','30 Tage');
define('_ACCEPT','akzeptieren');
define('_ADD','hinzuf�gen');
define('_ADDADOWNLOAD','neuen Download hinzuf�gen');
define('_ADDDOWNLOAD','Download hinzuf�gen');
define('_ADDEDITORIAL','Beschreibung hinzuf�gen');
define('_ADDEDON','hinzugef�gt am');
define('_ADDITIONALDET','weitere Details');
define('_ADDMAINCATEGORY','Hauptkategorie hinzuf�gen');
define('_ADDNEWDOWNLOAD','neuen Download hinzuf�gen');
define('_ADDSUBCATEGORY','Unter-Kategorie hinzuf�gen');
define('_ADDTHISFILE','Datei hinzuf�gen');
define('_ADDURL','URL hinzuf�gen');
define('_ALLFILES','alle Dateien');
define('_ALLOWTORATE','anderen die Bewertung erm�glichen!');
define('_ALREADYEXIST','existiert bereits!');
define('_AND','und');
define('_ANONPOSTDOWNLOADS','Anmeldung durch anonyme Benutzer?');
define('_ASCENDING','aufsteigend');
define('_AUTHOR','Autor');
define('_AUTHOREMAIL','E-Mail Autor');
define('_AUTHORNAME','Name Autor');
define('_BEPATIENT','(bitte einen Augenblick Geduld)');
define('_BREAKDOWNBYVAL','Durchschnittliche Wertung');
define('_BROKENDOWNLOADSREP','als defekt gemeldete Downloads');
define('_BUTTONLINK','Button Link');
define('_CATEGORIES','Kategorien');
define('_CATEGORY','Kategorie');
define('_CHECK','pr�fen');
define('_CHECKALLDOWNLOADS','ALLE Downloads pr�fen');
define('_CHECKCATEGORIES','Kategorie pr�fen');
define('_CHECKFORIT','Keine E-Mail-Adresse angegeben - der Eintrag wird trotzdem bearbeitet.');
define('_CHECKSUBCATEGORIES','Unter-Kategorien pr�fen');
define('_CLEANDOWNLOADSDB','Abstimmungsliste zur�cksetzen');
define('_COMMENTS','Kommentare');
define('_CREATIONDATE','Erstellungsdatum');
define('_DATEWRITTEN','geschrieben am');
define('_DAYS','Tage');
define('_DBESTRATED','bestbewertete Downloads');
define('_DCATLAST3DAYS','in den letzten drei Tagen neu in dieser Kategorie hinzugef�gte Downloads');
define('_DCATNEWTODAY','heute neu in dieser Kategorie hinzugef�gte Downloads');
define('_DCATTHISWEEK','in dieser Woche in dieser Kategorie neu hinzugef�gte Downloads');
define('_DDATE1','Datum (�lteste Eintr�ge zuerst)');
define('_DDATE2','Datum (neueste Eintr�ge zuerst)');
define('_DDELCATWARNING','WARNUNG: Wirklich die Kategorie und ALLE darin befindlichen Downloads l�schen?');
define('_DDELETEINFO','l�schen (l�scht <strong><em>defekte Downloads</em></strong> und <strong><em>Meldungen</em></strong> f�r einen Download)');
define('_DESCENDING','absteigend');
define('_DESCRIPTION','Beschreibung');
define('_DESCRIPTION255','Beschreibung: (max. 255 Zeichen)');
define('_DETAILS','Details');
define('_DIGNOREINFO','ignorieren (l�scht alle <strong><em>Meldungen</em></strong> f�r einen Download)');
define('_DISPLAYFILTERED','Sortierung nach');
define('_DLALSOAVAILABLE','Downloads ebenfalls verf�gbar in');
define('_DLETSDECIDE','Angaben von Benutzern helfen die Downloads besser bewerten zu k�nnen.');
define('_DLOADPAGETITLE','Downloads');
define('_DNOREPORTEDBROKEN','keine als defekt gemeldete Downloads.');
define('_DONLYREGUSERSMODIFY','nur registrierte Benutzer k�nnen einen Download modifizieren');
define('_DOWNLOAD','Download');
define('_DOWNLOADALREADYEXT','FEHLER: Die URL ist bereits in der Datenbank eingetragen!');
define('_DOWNLOADCOMMENTS','Download Kommentare');
define('_DOWNLOADID','Download-ID');
define('_DOWNLOADMODREQUEST','gemeldete �nderungsw�nsche');
define('_DOWNLOADNAME','Name');
define('_DOWNLOADNODESC','FEHLER: Beschreibung f�r die URL angeben!');
define('_DOWNLOADNOTITLE','FEHLER: Titel f�r die URL angeben!');
define('_DOWNLOADNOURL','FEHLER: Pfad der URL angeben!');
define('_DOWNLOADNOW','Datei downloaden');
define('_DOWNLOADOWNER','Download-Besitzer');
define('_DOWNLOADPROFILE','Download-Profil');
define('_DOWNLOADRATING','Downloads-Wertung');
define('_DOWNLOADRATINGDET','Download-Wertungsdetails');
define('_DOWNLOADRECEIVED','Wir haben die Meldung erhalten - Vielen Dank!');
define('_DOWNLOADS','Downloads');
define('_DOWNLOADSACCESSNOAUTH', 'Keine Authorisierung f�r Downloads');
define('_DOWNLOADSADDNOAUTH', 'Keine Authorisierung, Downloads hinzuzuf�gen');
define("_DOWNLOADSCATADDNOAUTH","Keine Authorisierung, Download-Kategorie hinzuzuf�gen");
define("_DOWNLOADSCATDELNOAUTH","Keine Authorisierung, Download-Kategorie zu l�schen");
define("_DOWNLOADSCATEDITNOAUTH","Keine Authorisierung, Download-Kategorie zu editieren");
define('_DOWNLOADSCONF','Download Konfiguration');
define('_DOWNLOADSECTION','Download-Bereich');
define('_DOWNLOADSINDB','Downloads in der Datenbank');
define('_DOWNLOADSMAIN','Download-Index');
define('_DOWNLOADSMAINCAT','Download-Kategorien');
define('_DOWNLOADSNOCATS','Keine Download-Kategorien verf�gbar - Download deaktiviert');
define('_DOWNLOADSNOTUSER1','Derzeit nicht angemeldet');
define('_DOWNLOADSNOTUSER2','Registrierte Benutzer k�nnen Downloads hinzuf�gen');
define('_DOWNLOADSNOTUSER3','Die Registrierung ist einfach, kostenfrei und schnell erledigt.');
define('_DOWNLOADSNOTUSER4','Warum eine Registrierung f�r einige Funktionen notwendig ist?');
define('_DOWNLOADSNOTUSER5','Nur so k�nnen wir auch sicherstellen, bei R�ckfragen');
define('_DOWNLOADSNOTUSER6','Kontakt aufnehmen zu k�nnen.');
define('_DOWNLOADSNOTUSER7','Wir m�chten bestm�gliche und abgepr�fte Inhalte bieten.');
define('_DOWNLOADSNOTUSER8','<a href=\'user.php\'>Registrierung</a>');
define('_DOWNLOADSWAITINGVAL','auf Freischaltung wartende Downloads');
define('_DOWNLOADTITLE','Download-Titel');
define('_DOWNLOADVALIDATION','Download-Freischaltung');
define('_DOWNLOADVOTE','bewerten!');
define('_DPOSTPENDING','alle Meldungen erscheinen erst nach Freischaltung');
define('_DRATENOTE4','<a href=\'index.php?name=Downloads&amp;req=TopRated\'>Liste der bestbewerteten Downloads</a>.');
define('_DSUBMITONCE','Downloads bitte nur einmal melden');
define('_DTOTALFORLAST','Downloads der letzten');
define('_DUSERMODREQUEST','�nderungsw�nsche f�r Downloads');
define('_DUSERREPBROKEN','als defekt gemeldete Downloads');
define('_DWEAPPROVED','Der Download ist freigeschaltet.');
define('_EDITORIAL','Editorial');
define('_EDITORIALADDED','Editorial hinzugef�gt');
define('_EDITORIALBY','Editorial von');
define('_EDITORIALMODIFIED','Editorial modifiziert');
define('_EDITORIALREMOVED','Editorial entfernt');
define('_EDITORIALTEXT','Editorial-Text');
define('_EDITORIALTITLE','Editorial-Titel');
define('_EDITORREVIEW','Beschreibung des Autors');
define('_EDITTHISDOWNLOAD','Download editieren');
define('_ERRORNODESCRIPTION','FEHLER: Beschreibung f�r den Download angeben!');
define('_ERRORNOTITLE','FEHLER: Titel f�r den Download angeben!');
define('_ERRORNOURL','FEHLER: URL f�r den Download angeben!');
define('_ERRORTHECATEGORY','FEHLER: die Kategorie');
define('_ERRORTHESUBCATEGORY','FEHLER: die Unter-Kategorie');
define('_ERRORURLEXIST','FEHLER: Die URL existiert bereits in der Datenbank!');
define('_FAILED','fehlgeschlagen!');
define('_FEELFREE2ADD','Kommentar zum Download hinzuf�gen');
define('_FILEINFO','Datei-Information');
define('_FILESIZE','Dateigr�sse');
define('_FILEURL','Dateipfad');
define('_FUNCTIONS','Funktionen');
define('_HIGHRATING','h�chste Wertung');
define('_HITS','Hits');
define('_HOMEPAGE','Homepage');
define('_HTMLCODE1','Der ben�tigte HTML-Code lautet:');
define('_HTMLCODE2','Der Sourcecode f�r den Button lautet:');
define('_HTMLCODE3','Die Benutzung dieses Formulars erlaubt es Besuchern, direkt von einer anderen Seite aus abzustimmen. Wir erhalten die Bewertung und f�gen sie in unsere Datenbank ein. Das obige Beispiel ist deaktiviert, aber in eine Seite eingebaut wird es funktionieren, wenn der HTML-Code genau �bernommen wird. Hier nun der HTML-Code:');
define('_IDREFER','im Code entspricht der Seiten-ID in der '.$sitename.'-Datenbank. Bitte darauf achten, dass diese Nummer angegeben ist.');
define('_IDREFER1','im Code entspricht der Seiten-ID in der');
define('_IDREFER2','-Datenbank. Bitte darauf achten, dass diese Nummer angegeben ist.');
define('_IFYOUWEREREG','Registrierte Benutzer k�nnen Kommentare verfassen.');
define('_IGNORE','ignorieren');
define('_IN','in');
define('_INBYTES','in Bytes');
define('_INCLUDESUBCATEGORIES','(Inklusive Unter-Kategorien)');
define('_INDB','in der Datenbank');
define('_INFO','Info');
define('_INOTHERSENGINES','in anderen Suchmaschinen');
define('_INSTRUCTIONS','Anleitung:');
define('_ISTHISYOURSITE','Inhaber?');
define('_LAST30DAYS','letzte 30 Tage');
define('_LASTWEEK','letzte Woche');
define('_LDESCRIPTION','Beschreibung: (max. 255 Zeichen)');
define('_LINEBREAKWARN','Warnung! Der Zeilenumbruch innerhalb der URL liegt an der Formularfunktion. URL\'s sollten einzeilige Eingaben enthalten. Der Zeilenumbruch dient nur der Lesbarkeit');
define('_LOOKTOREQUEST','Die Anfrage wird in K�rze bearbeitet.');
define('_LOWRATING','niedrigste Wertung');
define('_LTOTALVOTES','Gesamtstimmen');
define('_LVOTES','Stimmen');
define('_MAIN','Link-Index');
define('_MODCATEGORY','Kategorie modifizieren');
define('_MODDOWNLOAD','Download modifizieren');
define('_MODIFY','modifizieren');
define('_MOSTPOPULAR','Prozentsatz der beliebtesten');
define('_NAME','Name');
define('_NEW','neue');
define('_NEWDOWNLOADADDED','Download wurde in die Datenbank aufgenommen');
define('_NEWDOWNLOADS','neue Downloads');
define('_NEWLAST3DAYS','neu in den letzten 3 Tagen');
define('_NEWTHISWEEK','neu in dieser Woche');
define('_NEWTODAY','heute neu');
define('_NEXT','n�chster');
define('_NOEDITORIAL','kein Editorial f�r diesen Download');
define('_NOMODREQUESTS','derzeit keine �nderungsw�nsche');
define('_NONE','keine');
define('_NOOUTSIDEVOTES','keine Wertungen von fremden Seiten');
define('_NOREGUSERSVOTES','keine Wertungen von registrierten Benutzern');
define('_NOSUCHFILE','Datei existiert nicht...');
define('_NOUNREGUSERSVOTES','keine Wertungen von unregistrierten Benutzern');
define('_NUMBEROFRATINGS','Anzahl der Bewertungen');
define('_NUMOFCOMMENTS','Anzahl der Kommentare');
define('_NUMRATINGS','der Stimmen');
define('_OF','von');
define('_OFALL','von allen');
define('_ONLYREGUSERSMODIFY','nur registrierte Benutzer k�nnen �nderungsw�nsche melden. Bitte <a href=\'user.php\'>registrieren bzw. anmelden</a>.');
define('_ORIGINAL','Original');
define('_OUTSIDEVOTERS','externe Stimmen');
define('_OVERALLRATING','insgesamt bewertet');
define('_OWNER','Eigent�mer');
define('_PAGETITLE','Seitentitel');
define('_PAGEURL','URL');
define('_POPULAR','beliebte');
define('_POPULARITY','Beliebtheit');
define('_POPULARITY1','Beliebtheit (aufsteigend)');
define('_POPULARITY2','Beliebtheit (absteigend)');
define('_POSTPENDING','Alle Downloads werden vor der Freischaltung �berpr�ft.');
define('_PREVIOUS','vorheriger');
define('_PROGRAMNAME','Name');
define('_PROMOTE01','Wir bieten \'Bewerte meine Webseite\'-Boxen an - diese erlauben das platzieren eines Bildes (oder eines Stimmformulars) direkt auf anderen Webseiten, um die Anzahl der Stimmen zu erh�hen. Einfach aus den unten gegebenen M�glichkeiten eine passende ausw�hlen:');
define('_PROMOTE02','Ein m�glicher Verweis auf das Wertungsformular ist ein einfacher Text-Link:');
define('_PROMOTE03','Ebenfalls m�glich ist ein Buttonlink:');
define('_PROMOTE04','Externe Stimmen werden besonders gepr�ft - bei Missbrauch wird der Eintrag komplett entfernt. So k�nnte die individuelle Box aussehen:');
define('_PROMOTE05','Vielen Dank und viel Erfolg bei der Abstimmung!');
define('_PROMOTEYOURSITE','Downloads bewerben');
define('_PROPOSED','vorgeschlagene �nderung');
define('_RATEIT','Download bewerten!');
define('_RATENOTE1','Bitte nicht mehrfach bei einem Download abstimmen.');
define('_RATENOTE2','Die Skala reicht von 1 - 10, 1 bedeutet schlecht und 10 exzellent.');
define('_RATENOTE3','Bitte m�glichst objektiv bewerten.');
define('_RATENOTE4','<a href=\'index.php?name='.(empty($ModName) ? '' : $ModName).'&amp;req=TopRated\'>bestbewertete Eintr�ge</a>.');
define('_RATENOTE5','Bitte nicht f�r den eigenen Eintrag abstimmen.');
define('_RATENOTE1ERROR','Abstimmung erfolgreich!');
define('_RATENOTE2ERROR','Es erfolgte bereits eine Stimmabgabe in den letzten '.$anonwaitdays.' Tagen.');
define('_RATENOTE2ERROR1','Es erfolgte bereits eine Stimmabgabe in den letzten');
define('_RATENOTE2ERROR2','Tagen.');
define('_RATENOTE3ERROR','Nur einmal f�r einen Download abstimmen.<br />Alle Stimmen werden geloggt.');
define('_RATENOTE4ERROR','Es kann nicht f�r eigene Downloads gestimmt werden.<br />Alle Stimmen werden geloggt.');
define('_RATENOTE5ERROR','Keine Wertung gew�hlt');
define('_RATERESOURCE','Eintrag bewerten');
define('_RATETHISSITE','Download bewerten');
define('_RATING','Bewertung');
define('_RATING1','Bewertung (aufsteigend)');
define('_RATING2','Bewertung (absteigend)');
define('_REGISTEREDUSERS','registrierte Benutzer');
define('_REMOTEFORM','externes Bewertungsformular');
define('_REPORTBROKEN','defekten Link melden');
define('_REQUESTDOWNLOADMOD','�nderung vorschlagen');
define('_RESSORTED','Eintr�ge derzeit sortiert nach');
define('_RETURNTO','zur�ck zu');
define('_SEARCHRESULTS4','Suchergebnisse f�r');
define('_SECURITYBROKEN','aus Sicherheitsgr�nden werden Benutzername und IP kurzfristig aufgezeichnet');
define('_SELECTCATEGORY','Kategorieordner w�hlen');
define('_SELECTPAGE','Seite w�hlen');
define('_SENDREQUEST','Anforderung senden');
define('_SHOW','zeige');
define('_SHOWTOP','zeige Top');
define('_SORTDOWNLOADSBY','Downloads sortieren nach');
define('_SORTED','sortiert');
define('_STAFF','Staff');
define('_STATUS','Status');
define('_SUBCATEGORIES','Unter-Kategorien');
define('_SUBCATEGORY','Unter-Kategorie');
define('_SUBMITONCE','Downloads nur einmal einreichen');
define('_SUBMITTER','eingereicht von');
define('_TEXTLINK','Text Link');
define('_THANKSBROKEN','Vielen Dank f�r die Hilfe!');
define('_THANKSFORINFO','Vielen Dank f�r die Information!');
define('_THANKSTOTAKETIME','Vielen Dank f�r die Bewertung bei');
define('_THENUMBER','die Nummer');
define('_THEREARE','es gibt');
define('_TITLE','Titel');
define('_TITLEAZ','Titel (A-Z)');
define('_TITLEZA','Titel (Z-A)');
define('_TOPRATED','bestbewertete');
define('_TOTALNEWDOWNLOADS','neue Downloads insgesamt');
define('_TOTALOF','insgesamt');
define('_TOTALVOTES','Gesamtstimmen:');
define('_TRATEDDOWNLOADS','insgesamt bewertete Downloads');
define('_TRY2SEARCH','Starte Suche nach');
define('_TVOTESREQ','Stimmen mindestens ben�tigt');
define('_UDOWNLOADS','Downloads');
define('_UNKNOWN','unbekannt');
define('_UNREGISTEREDUSERS','unregistrierte Benutzer');
define('_UPLOADDATE','Upload-Datum');
define('_USER','Benutzer');
define('_USERANDIP','Benutzername und IP werden aufgezeichnet');
define('_USERAVGRATING','durchschnittliche Benutzerwertung');
define('_USERRATING','Benutzerwertung');
define('_USUBCATEGORIES','Unter-Kategorien');
define('_VALIDATEDOWNLOADS','�berpr�fe Downloads');
define('_VALIDATINGCAT','�berpr�fte Kategorie (inkl. Unter-Kategorie');
define('_VALIDATINGSUBCAT','�berpr�fte Unter-Kategorie');
define('_VERSION','Version');
define('_VISIT','Besuche');
define('_VOTE4THISSITE','Download bewerten!');
if (!defined('_VOTE')) {
    define('_VOTE','Stimme');
}
define('_VOTES','Stimmen');
define('_WEBDOWNLOADSADMIN','Download-Administration');
define('_WEIGHNOTE','* Achtung: Wir bewerten Stimmen von registrierten Benutzern zu unregistrierten Benutzern im Verh�ltnis');
define('_WEIGHOUTNOTE','* Achtung: Wir bewerten interne zu externen Stimmen im Verh�ltnis');
define('_YOUARENOTREGGED','Derzeit nicht registriert oder nicht angemeldet.');
define('_YOUAREREGGED','Derzeit als registrierter Benutzer angemeldet.');
define('_YOURDOWNLOADAT','Download bei');
?>