ALLGEMEIN
=========
- Das Format der Datei config.php hat sich ge�ndert, daher m�ssen die Werte in
  der bereitgestellten config.php komplettiert werden. Zu beachten ist, dass die
  Base64-Kodierung nicht mehr verwendet wird und daher alle Angaben in reiner
  Textform zu erfolgen haben (Hintergrund ist, dass Base64 keine Verschl�sselung
  beinhaltet).

TEMPLATES
=========
- Die Plugin-Delimiter in den Modul-Templates m�ssen auf { und } ge�ndert werden.
  F�r Aufrufe von Variablen und Plugins innerhalb von JavaScript-Bl�cken
  (<script></script>) oder CSS-Bl�cken (<style></style>) gibt es die Alternativ-
  Varianten {{ und }}.

- Das pn-Pr�fix wurde bei allen Render- und Theme-Plugins entfernt. Das pndebug-
  Plugin wurde umbenannt in zdebug. Alle veralteten Plugins k�nnen im Verzeichnis
  lib/legacy/plugins angesehen werden. Bitte alle eigenen Templates entsprechend
  anpassen.

- Um einen einfachen �bergang zu den neuen Templates zu gew�hrleisten verwendet
  Zikula einen Prefilter, der die alten Delimiter in die neuen konvertiert und
  auch das pn-Pr�fix aus den Plugin-Aufrufen entfernt. Dies betrifft auch Module
  von Drittpartien, daher muss das pn-Pr�fix aus eigenen Plugins entfernt werden,
  damit selbige gefunden werden. Als Workaround kann man die Plugin-Datei kopieren
  und sie zusammen mit dem Funktionsnamen darin umbenennen.

- Das Plugin {gt} ben�tigt nun kein domain="" mehr, die Domain wird automatisch ermittelt.

- Statt dem Modifier 'pndate_format' muss nun 'dateformat' verwendet werden.

- Ausgabefilterung wird nun mit den Modifiern safetext und safehtml erledigt.

- Die Verwendung von pnML() und {ml} ist nun veraltet und wird nicht mehr funktionieren,
  da Zikula Define-basierte Sprachpakete nicht mehr unterst�tzt.
  Themes und Module m�ssen nun aktualisiert werden und Gettext nutzen.

- Template-Dateien sollten von *.htm umbenannt werden in *.tpl

- Wenn man Conditional Comments f�r Browserhacks nutzen muss, kann man nun einen Smarty-Block
  dazu verwenden, zum Beispiel
  {browserhack condition="if lte IE 7"}foo{/browserback}
  Dieser Block versteht auch den Parameter assign="var", damit man die Ausgabe zuweisen statt
  anzeigen kann.

- Das Plugin {addition_headers} funktioniert nicht mehr und muss daher aus allen Themes
  entfernt werden.

- Alle Vorkommen von "javascript/style.css" m�ssen ersetzt werden durch "styles/core.css".

- Das Plugin {pager} ben�tigt nun den Parameter shift nicht mehr.

- Es gibt nun eine Variable $metatags f�r allgemeine SEO-Zwecke.

- Themes sollten aktualisiert werden, damit sie {$metatags.description} und {$metatags.keywords}
  einsetzen.

- Der Titel einer Seite kommt nun von {pagegetvar name="title"} und nicht mehr {title}.

- Es gibt nun eine Variable $coredata f�r verschiedene Daten, die in Templates relevant sind.

- Es gibt nun eine Variable $modvars mit allen Modulvariablen.

- Die Variable $pncore ist veraltet, statt dessen ist $coredata zu nutzen.

- Die folgenden Variablen sind f�r die Klasse Zikula_View reserviert und d�rfen nicht zugewiesen werden.
  - servicemanager
  - eventmanager
  - metatags
  - coredata
  - zikula_view
  - zikula_core
  - modvars

- Das Plugin {configgetvar} ist veraltet, statt dessen kann {$modvars.ZConfig.<name>} verwendet werden.

- Das Plugin {blockshow} ben�tigt nun den Parameter "position".

- Die Page Variables f�r Themes wurden ein wenig ver�ndern. Alle Metatags k�nnen aus dem Array
  {$metatags.foo} gewonnen werden, das in allen Templates verf�gbar ist. Metatags k�nnen nach Belieben
  im Template ver�ndert werden �ber {setmetatag name='foo' value='bar'}. In Controllern geht es
  mit `$this->serviceManager['zikula_view.metatags][$foo] = $bar;`, eine spezielle API ist nicht
  notwendig.


MODULE
======
- Die Ordnerstruktur in Modulen hat sich ge�ndert. Zun�chst sollte man daher einen Ordner lib/$modname
  innerhalb des Modulordners erstellen. Zum Beispiel f�r das Modul MyModule f�gt man die Ordner lib/
  und lib/MyModule/ hinzu.

    Die alten Ordner sind immer noch in der Abw�rtskompatibilit�t unterst�tzt, allerdings ist die neue
    wesentlich effizienter, weil das Dateisystem nicht gescannt werden muss.

    - Das Verzeichnis pndocs in docs umbenennen
    - Das Verzeichnis pnincludes in lib/ umbenennen, oder lib/vendor/ f�r 3rd Party Bibliotheken
    - Das Verzeichnis pnstyle in style umbenennen
    - Das Verzeichnis pnjavascript in javascript umbenennen
    - Das Verzeichnis pntemplates in templates umbenennen

- Die Datei pntables.php umbenennen in tables.php. Den Namen der Funktion �ndern in $modulename_tables().

- Der Hauptordner des Moduls MUSS nun mit einem Gro�buchstaben beginnen.

- Die Datei pnversion.php umbenennen in lib/MyModule/Version.php.
  Den Inhalt �ndern wie folgt:

    class MyModule_Version extends Zikula_Version
    {
        public function getMetaData()
        {
            $meta = array();
            $meta['displayname']    = $this->__('MyModule example');
            $meta['description']    = $this->__("Example MyModule description.");
            //! module name that appears in URL
            $meta['url']            = $this->__('mymodule');
            $meta['version']        = '1.5.3';
            $meta['capabilities']   = array('profile' => array('version' => '1.0'));
            $meta['securityschema'] = array('MyModule::' => '::');
            return $meta;
        }
    }

  HINWEIS: Versionsnummern m�ssen die Form 'a.b.c' haben, z.B. '1.0.0'.

  Zu beachten ist die neue Eigenschaft capabilities. Dies ist ein indiziertes Array mit Arrays.
  Es dient der Angabe, ob und welche besonderen F�higkeiten ein Modul unterst�tzt.
  array('profile' => array('version' => '1.0', 'anotherkey' => 'anothervalue')
        'message' => array('version' => '1.0', 'anotherkey' => 'anothervalue'));

  Die folgenden APIs k�nnen in dem Zusammenhang verwendet werden.
    ModUtil::getModulesCapableOf()
    ModUtil::isCapable()
    ModUtil::getCapabilitiesOf()
    {html_select_modules capability='...'}

(Man beachte in den folgenden Beispielen, dass $type immer mit einem Gro�buchstaben anfangen muss
 und alle weiteren Buchstaben klein sein m�ssen).

- Die Modul-Controller (pnuser.php, pnadmin.php etc) werden verschoben nach lib/$modname/Controller/$type
  z.B.
    pnuser.php => lib/MyModule/Controller/User.php

  In den Controllern werden die Funktionen gekapselt in einer Klasse
  class $modname_Controller_$type extends Zikula_Controller
  z.B.
    class MyModule_Controller_User extends Zikula_Controller

  Make all functions public which should be accessible from the browser.
  Internal methods which should not be accessible outside the class should be made
  protected or private.  If you subclass Zikula_Controller, inherited methods
  will not be accessible even if they are public.

- Die APIs (pnuserapi.php, pnadminapi.php etc) verschieben nach lib/$modname/Api/$type
  z.B.
    pnuserapi.php => lib/MyModule/Api/User.php

  Auch bei den APIs werden die Funktionen in Klassen gesetzt
  class $modname_Api_$type extends Zikula_Api
  z.B.
    class MyModule_Api_User extends Zikula_Api

  Alle Funktionen, die �ber ModUtil::apiFunc() erreichbar sein sollen, werden auf public gestellt.
  Interne Methoden, die nicht au�erhalb der Klasse aufgerufen werden sollen, sollten als protected
  oder private markiert werden.

- Die Bl�cke des Modules (pnblocks/foo.php etc) verschieben nach lib/$modname/$type
  z.B.
    blocks/foo.php => lib/MyModule/Block/Foo.php

  Die Block-Funktionen in Klassenmethoden umwandeln.
  class $modname_Block_$type extends Zikula_Block
  z.B.
    class MyModule_Block_Foo extends Zikula_Block

  Alle Funktionen, die au�erhalb der Klasse erreichbar sein sollen, werden auf public gestellt.
  Interne Methoden, die nicht au�erhalb der Klasse aufgerufen werden sollen, sollten als protected
  oder private markiert werden.

- In allen Controllern, APIs und Bl�cken werden ferner die Gettext-Funktionsaufrufe ge�ndert.
  Module mit der objektorientierten Struktur haben Zugriff auf einfache Methoden, bei deren
  Verwendung die Domain automatisch berechnet wird.

    $this->__($msgid)
    $this->__f($msgid, $params)
    $this->_n($singular, $plural, $count)
    $this->_fn($sin, $plu, $n, $params)

  Alle Aufrufe von $dom = ZLanguage::getModuleDomain() k�nnen entfernt werden, au�er in der
  Datei version.php

- In allen Controllern und Bl�cken k�nnen Aufrufe von pnRender::getInstance() komplett entfernt
  werden. Das Objekt $this->view ist automatisch verf�gbar und man kann es wie gewohnt nutzen:
  $this->view->assign(), $this->view->fetch() etc.

- Die Datei pninit.php umbenennen und nach lib/MyModule/Installer.php verschieben.
  Alle Funktionen kapseln in der Klasse
  class $modname_Installer extends Zikula_Installer
  z.B.
    class MyModule_Installer extends Zikula_Installer
  
  Die Methode init() umbenennen in install().
  Die Methode delete() umbenennen in uninstall().

  Alle Funktionen, die von au�erhalb der Klasse erreichbar sein sollen, werden auf public gestellt, die �brigen
  protected oder private. Allgemein sollten nur install(), upgrade() und uninstall() mit public versehen werden.

  Wenn ein Modul nicht konform zu den vorherigen Standards ist, muss man folgende Schritte durchf�hren
  - In Version.php hinzuf�gen: $meta['oldnames'] = array(oldnames,....);
  - Bestehende Modulvariablen migrieren mit

        $modvars = ModUtil::getVar($oldname);
        if ($modvars) {
            foreach ($modvars as $key => $value) {
                $this->setVar($key, $value);
            }
            ModUtil::delVar($oldname);
        }

- Interaktive Installation/Aktualisierung/Deinstallation
  Falls es interaktive Installationsmethoden gibt, sollten diese hinzugef�gt werden zu lib/$modname/Controller/Interactiveinstaller.php
  z.B.
    lib/MyModule/Controller/Interactiveinstaller.php
    beinhaltet class MyModule_Controller_Interactiveinstaller extends Zikula_InteractiveInstaller
    (man beachte die Gro�- und Kleinschreibung dabei).

  Falls ein interaktiver Installer �ber eine Methode namens install()/upgrade()/uninstall() verf�gt,
  �berschreibt dies die gleichnamigen Methoden in der prim�ren Installer.php.  Man beachte, dass dieses
  Override nur f�r die initiale Installation, Aktualisierung und Deinstallation geschieht, wenn der Benutzer
  auf den entsprechenden Button geklickt hat. Im letzten Schritt des interaktiven Prozesses ruft der
  Installer die Methoden von Installer.php auf um den finalen Prozess durchzuf�hren.

  Nachfolgende Schritte k�nnen beliebig in der interaktiven Installer-Klasse benannt werden. Zum Beispiel k�nnte
  man folgende Methoden haben:
    upgrade_step1()
    upgrade_step2()
    etc.

  Aus Sicherheitsgr�nden wird eine Session-Variable namens 'interactive_process' gesetzt, sobald ein interaktiver
  Prozess startet. Wenn der interaktive Installer beendet wird, entweder erfolgreich oder auf Grund eines Fehlers,
  muss diese Variable wieder entfernt werden mit SessionUtil::delVar('interactive_process');

- Falls man irgendwelche allgemeinen Initialisierungsarbeiten durchf�hren m�chte, wie zum Beispiel die Bereit-
  stellung einer Bibliothek, kann man eine Datei bootstrap.php erstellen. Diese wird inkludiert, wenn das Modul
  das erste mal 'geladen' wird.

- Wenn an Kategorisierung nutzt, muss diese refaktorisiert werden und die folgenden Klassen nutzen:
    PNCategory => Categories_DBObject_Category
    PNCategoryArray => Categories_DBObject_CategoryArray
    PNCategoryRegistry => Categories_DBObject_Registry
    PNCategoryRegistryArray => Categories_DBObject_RegistryArray

    Alle Referenzen zu Loader::loadClassFromModule und Loader::loadClassFromModuleArray() sind zu entfernen.

- Falls man irgendwelche Filter f�r FilterUtil hat, darin alle Vorkommen von $this->pntable ersetzen durch
  $this->dbtable.

- FilterUtil kann mit Doctrine zusammen arbeiten, wenn es den Namen der Record-Klasse im Konstruktor �bergeben
  bekommt. Zum Beispiel:

    [php]
    $query = Doctrine_Query::create()
         ->from('MyModule_Model_MyModel tbl');

    $filter = new FilterUtil('MyModule', 'MyModule_Model_MyModel', $filter_args);
    $fwhere = $filter->GetSQL();

    $query->where($where)
          ->addWhere($fwhere);

    Um FilterUtil �ber in der Doctrine Query vorhandene JOINs zu unterrichten, kann man das Alias der
    Haupttabelle sowie die Join-Informationen in $args �bergeben:

    [php]
    $joinInfo[] = array('join_table'         =>  'MyModule_Model_AnotherModel',
                        'join_alias'         =>  'another',
                        'join_field'         =>  array('fieldName1', 'fieldName2'),
                        'object_field_name'  =>  array('fieldAlias1', 'fieldAlias2'));

    $filter_args = array(
                         'varname' => 'filter',
                         'alias'   => 'tbl',
                         'join'    => $joinInfo
                        );

    $query->select('another.fieldName1 fieldAlias1, another.fieldName2 fieldAlias2')
          ->leftJoin('MyModule_Model_AnotherModel another ON another.id = tbl.another_id')

    Der JOIN kann dann auch zum Filtern verwendet werden mit filter=fieldAlias1:eq:value

- Alle Referenzen zu Loader::loadClass() entfernen - Klassen werden automatisch geladen.

- Nun kann an die folgenden Convenience-Methoden von OO-Controllern und APIs nutzen.
    (Details in lib/Zikula/Base.php)

    $this->throwNotFound()
    $this->throwNotFoundIf()
    $this->throwNotFoundUnless()

    $this->throwForbidden()
    $this->throwForbiddenIf()
    $this->throwForbiddenUnless()

    $this->redirect()
    $this->redirectIf()
    $this->redirectUnless()

HOOKS
=====
Hooks in Zikula 1.3.0 sind nicht kompatibel mit dem Legacy Hook-System aus fr�heren Zikula-Versionen.
Allgemein werden Module, die f�r Zikula 1.3.0 geschrieben wurden, das alte Hook-System nicht mehr aufrufen.
Das alte Hook-System wird auch nicht mehr funktionieren, wenn der Legacy-Modus ausgeschaltet ist. Mehr
Informationen lassen sich der HOOKS-Dokumentation entnehmen.

DBOBJECT
========
- Die Klassen unbenennen in $modname_DBObject_$type und verschieben nach lib/$modname/DBObject/$type.php
  z.B.
    MyModule_DBObject_Payments und verschieben nach lib/MyModule/DBObject/Payments.php
    MyModule_DBObject_PaymentsArray und verschieben nach lib/MyModule/DBObject/PaymentsArray.php

- Den Konstruktor der DBObjects (fr�her PNObject) von ClassName() zu __construct() �ndern und den Konstruktor
  der Oberklasse aufrufen. Au�erdem $this->PNObject() �ndern in parent::__construct().

- Die Methode Loader::loadClassFromModule nicht mehr verwenden um Klassennamen f�r DBObjects zu erhalten.
  Einfach den Klassennamen bauen oder hartkodieren.

DBUTIL
======
- DBUtil::executeSQL hat fr�her ein ADODB-Objekt zur�ckgeliefert, gibt nun aber ein PHP PDO Objekt zur�ck.
  Das hei�t, dass Code, der fr�her �ber das ADODB-Objekt iteriert hat, nun nicht mehr funktioniert.
  Man sollte DBUtil::marshallObjects() nach einem manuellen SELECT �ber DBUtil::executeSQL() nutzen, z.B.:

    [php]
    $res = DBUtil::executeSql ($sql);
    $objectArray = DBUtil::marshallObjects ($res, $ca, ...);

  Alternativ kann man das PDO-R�ckgabeobjekt nutzen. PDO ist in PHP eingebaut, daher kann der Zugriff auf
  ein PDO-Objekt als API-konform angesehen werden. Die Dokumentation zu PDO ist unter http://php.net/PDO
  verf�gbar.


VERSCHIEDENES
=============
- Die APIs theme_userapi_clear_compiled(), theme_userapi_clear_cache() sowie
  pnrender_userapi_clear_compiled() und pnrender_userapi_clear_cache() im Theme-Modul sind veraltet.
  Bitte nun Zikula_View::clear_compiled(), Zikula_View::clear_cache() und
  Theme::clear_compiled(), Theme::clear_cache() nutzen.

- Man kann nun einen Requirement Check f�r Bl�cke einbauen, so dass eine Nachricht im Admin-Bereich
  eingeblendet wird, falls notwendig. Zum Beispiel wird der Language Block nur sichtbar sein, sofern
  die Mehrsprachigkeit aktiviert ist. Daher wurde f�r diesen Block eine Requirement Nachricht hinzu-
  gef�gt um den Admin zu informieren, dass dieser Block nicht sichtbar sein wird, bis die Mehrsprachig-
  keit aktiviert wurde.

- Man kann nun den Core mit Event Handlern anpassen. Diese k�nnen in config/EventHandlers geladen werden.
  Die Klassen sollten genauso hei�en wie der Dateiname und die Oberklasse CustomEventHandler erweitern.

- In Modulen kann man Event Handler automatisch laden durch Aufruf von
  EventManagerUtil::attachCustomHandlers($path), das ein Ordner mit Event Handlern sein sollte.
  Falls man statische Methoden hat, k�nnen sie direkt mit EventManagerUtil::attach($name, $callable)
  geladen werden [siehe ** unten].
  Diese Methode k�nnte benutzt werden um Event Handler dynamisch von einer ConfigVar() Methode zu laden,
  die ein array('name' => $name, 'callable' => $callable) enth�lt.

  ** Man beachte, dass ein Callable in dem folgenden Format vorliegen muss:
       Foo::bar() = array('Foo', 'bar')
       $foo->bar = array($foo, 'bar')
       myfunction() = 'myfunction'

- Der Name der Klassen lautet Modulename_$type (Gro�- und Kleinschreibung beachten).
  Das Argument $func entspricht den public-Methoden in den Klassen.
  Auch anschauen sollte man sich den Ordner EventHandlers, welcher zeigt, wie eine Methode
  zu einem Controller hinzugef�gt werden kann �ber notifyUntil() f�r Events namens
  'controller.method_not_found' und 'controllerapi.method_not_found' f�r APIs.

- OO-Module initialisieren automatisch einen AutoLoader, so dass ein Aufruf der Klasse
  Example_DBObject_Users die Datei module/Example/lib/Example/DBObject/Users.php l�dt -
  die enthaltene Klasse sollte Example_DBObject_Users hei�en.

  Zu beachten ist, dass durch die Nutzung von ModUtil::func() und ModUtil::apiFunc()
  die Benennung von Controller- und API-Klassen mit Camel Case erfolgen muss.
  Z.B. type = adminform bedeutet, dass die Datei Adminform genannt werden *muss* und
  NICHT AdminForm. Der Klassenname w�re dann Modulename_Adminform.

- Man kann nun optional eine Datei namens bootstrap.php im Hauptordner des Moduls anlegen.
  Diese wird beim Laden des Moduls mit ModUtil::load/ModUtil::loadGeneric() automatisch
  eingebunden.

- Man kann zus�tzliche AutoLoader mit ZLoader::addAutoloader($namespace, $path) registrieren,
  wobei $namespace der erste Teil des PEAR-Klassennamens und $path der Pfad zu dem
  beinhaltenden Ordner ist. Der geeignete Ort f�r solche Initialisierungen ist bootstrap.php.


API �NDERUNGEN
==============
Es gibt ein Shell-Skript im SVN-Verzeichnis tool/, mit dem man diese Umbenennungen automatisch
und pr�zise vornehmen kann.

- pnMod* ist veraltet, siehe ModUtil::*
- pnUser* ist veraltet, siehe UserUtil::*
- pnBlock ist veraltet, siehe BlockUtil::*
- pn* ist veraltet, siehe System::*
- Die Legacy-APIs zur Abw�rtskompatibilit�t liegen in legacy/Compat.php und legacy/Api.php.

- Die Pr�fixe sind NICHT verschwunden f�r funktionsbasierte Controller wie pnadmin etc.
  Dies ist beabsichtigt um den Wechsel zu den neuen Klassen schmackhafter zu machen.


WORKFLOW �NDERUNGEN
===================
- Wenn man WorkflowUtil benutzt, gibt es vier �nderungen f�r Zikula 1.3:
   - getActionsByStateArray:
       ist nun veraltet.
   - getActionsByState:
       liefert nun alle Action-Daten als array($action.id => $action),
       nicht mehr als array(id => id).
   - getActionTitlesByState:
       n�tzliche Methode zur Erstellung der Buttons f�r den aktuellen Zustand,
       liefert die erlaubten Actions als array($action.id => $action.title).
   - getActionsForObject:
       liefert nun das Ergebnis von getActionsByState.
   Wenn man Werte verwendet hat, ersetzt man diese mit den Result Keys, und
   kann die Vorteile nutzen, die sich daraus ergeben, dass die Daten der Actions
   nun verf�gbar sind.
- Workflow-Actions k�nnen zus�tzliche Parameter im XML definieren:
  <parameter className="z-bt-ok" titleText="Klick mich">Button</parameter>
  Dabei wird Gro�- und Kleinschreibung ber�cksichtigt.


AJAX WORKFLOW �NDERUNGEN
========================

Der Ajax-Workflow hat sich in Zikula 1.3 sowohl auf Seite von PHP als auch JavaScript
ver�ndert.

Auf der JavaScript-Seite:
- Alle Requests sollten mit Zikula.Ajax.Request durchgef�hrt werden. Diese Klasse ist
  eine Erweiterung von dem Prototype Ajax.Request und erbt alle dessen Methoden,
  Optionen und Properties.
- F�r durch Zikula.Ajax.Request versendete Requests wurde ein neuer Parameter "authid"
  eingef�hrt. Wenn man die ID eines Elementes angibt, das den authid-Token enth�lt,
  wird dieser automatisch zum Request hinzugef�gt und auch aktualisiert, nachdem die
  Antwort empfangen wurde. Dies ist die empfohlene Methode zur Behandlung der
  Authentifizierungsschl�ssel in Ajax-Requests.
- Die von Zikula.Ajax.Request zur�ckgelieferte Response hat nun neue Methoden f�r die
  Daten-Kollektion:
    - getAuthid - liefert den neuen authid-Token - �blicherweise muss man diese Methode
      nicht manuell ansprechen, da die authid automatisch aktualisiert werden sollte.
    - getMessage - liefert die Fehler oder Status Nachricht (oder Liste von Nachrichten),
      die im Modul-Controller durch LogUtil registriert wurde.
    - getData - liefert die Hauptdaten, die durch den Modul-Controller bereitgestellt werden.
    - isSuccess - pr�ft, ob der Request erfolgreich war oder nicht.
- Die Verwendung dieser Methoden ist der einzige empfohlene Weg zum Auslesen der Response.
  Nat�rlich hat die Response immer noch alle Methode und Properties des originalen
  Ajax.Response-Objektes.
- In einigen F�llen werden Ajax-Aufrufe ohne Zikula.Ajax.Request durchgef�hrt (z.B. einige
  vordefinierte Skripte, wie etwa Ajax.InPlaceEditor etc.) und die zur�ckgelieferte
  Response wurde nicht mit den Methoden von Zikula.Ajax.Response erweitert.
  In solchen F�llen nutzt man die Methode Zikula.Ajax.Response.extend um die Response
  manuell zu erweitern.

Auf der PHP-Seite:
- Es wurde eine ganze Reihe von Klassen entwickelt, die Antworten an Ajax-Requests unterst�tzen.
  Auch die Fehlerbehandlung wurde dabei ver�ndert.
- Modul-Controller sollten im Erfolgsfall als Response immer einen oder zwei Typen von Objekten
  zur�ckliefern: Zikula_Response_Ajax_Base oder Zikula_Response_Ajax_Plain.
- Zikula_Response_Ajax_Base hat 3 Argumente:
      - $data - akzeptiert als Argument jeden Wert - eine einfache Variable oder ein Array,
        das Argument kann dann auf JS-Seite mit der Methode getData gelesen werden.
      - $message - optionaler Parameter, der die �bergabe einer Nachricht (oder eines Arrays
        mit Nachrichten) an die Response erlaubt; diese Nachricht werden als n�chstes mit
        m�glichen Nachrichten aus LogUtil verschmolzen.
      - $options - optionaler Parameter, der das Hinzuf�gen zus�tzlicher Daten zur Response
        erlaubt.
  In den meisten F�llen sollte das Modul eine Antwort von diesem Typ zur�ckliefern. Au�erdem
  wird diese Art von Response angenommen, wenn ein neuer authid-Token generiert wird.
- Falls es notwendig ist eine Response zu senden, die nur reinen Plain Text oder HTML enth�lt
  (zum Beispiel ben�tigen Ajax.Autocompleter von Scriptaculous solch eine Response), muss der
  Modul-Controller als Response ein Objekt der Klasse Zikula_Response_Ajax_Plain zur�ckgeben.
  Diese Klasse akzeptiert als $data Argument reinen Text. F�r diesen Response-Typ wird kein
  neuer authid-Token generiert.
- M�gliche Fehler (nicht bezogen auf Datenvalidierung) im Modul-Controller m�ssen mit Exceptions
  behandelt werden. Man kann zuerst eine Fehlermeldung mit LogUtil registrieren und dann eine
  Exception werfen (z.B. Zikula_Exception_Forbidden bei fehlenden Zugriffsrechten oder
  Zikula_Exception_Fatal f�r ung�ltige authid-Tokens). Man kann auch eine Fehlermeldung direkt
  an die Exception �bergeben.
- Falls der Modul-Controller einen Fehler auf Grund von Datenvalidierung deklarieren muss und/oder
  einige Daten an JS senden muss, dann sollte das Modul keine Exception werfen, sondern ein Objekt
  vom Typ Zikula_Response_Ajax_BadData zur�ckliefern. Diese Klasse erlaubt die �bergabe der gleichen
  Argumente wie die anderen Ajax-Response-Typen.

Beispiel (aus dem Permissions-Modul):
Einen Request von JS senden:
    // build parameters object
    var pars = {pid: permid};
    // call request class
    new Zikula.Ajax.Request(
        "ajax.php?module=permissions&func=deletepermission",
        {
            method: 'get',
            parameters: pars,
            authid 'permissionsauthid', // value of "permissionsauthid" will be
                                           added to request as authid and with
                                           response arrive it will be updated
            onComplete: permdelete_response
        }
    );

Den Request im Modul-Controller verarbeiten:
    // test permissions and throw an exception on failure
    if (!SecurityUtil::checkPermission('Permissions::','::', ACCESS_ADMIN)) {
        LogUtil::registerPermissionError(null, true);
        throw new Zikula_Exception_Forbidden();
    }

    // test authid and throw an exception on failure
    if (!SecurityUtil::confirmAuthKey()) {
        LogUtil::registerAuthidError();
        throw new Zikula_Exception_Fatal();
    }

    // when controller needs to return failure due to data validation:
    return new Zikula_Response_Ajax_BadData($data, 'message');

    // throw an exception from some other reason
    throw new Zikula_Exception_Fatal($this->__f('Error! Could not delete permission rule with ID %s.', $pid));

    // return response
    return new Zikula_Response_Ajax(array('pid' => $ pid));

Die Response in JS einlesen:
    // check if request was successful
    if (!req.isSuccess()) {
        Zikula.showajaxerror(req.getMessage());
        return;
    }
    // get data returned by module
    // if you passed eg array('pid'=>123), then you will have data.pid = 123
    var date = req.getData();

    // when ajax call was made without Zikula.Ajax.Request you have to
    // manually extend response
    transport = Zikula.Ajax.Response.extend(transport);
    // no you have access to new methods:
    transport.getData();


PAGEADDVAR �NDERUNGEN
=====================
Diese API wurde mit verschiedenen Funktionen erweitert. Die �nderungen sind komplett
abw�rtskompatibel, aber man wird bemerken, dass die inkludierten Dateien sich ver�ndert
haben im Vergleich zu fr�heren Referenzen.

Prototype und Scriptaculous wurden in eine gemeinsame komprimierte Datei kombiniert.
Nur validation.js und unittest.js wurden nicht mit einbezogen.

Das einfache Einbinden von Prototype inkludiert diese kombinierte Version. Man muss nun
Ajax, Prototype und Scriptaculous nicht mehr separat angeben, sondern spezifiziert nur
noch 'prototype'.

Um Livepipe hinzuzuf�gen, gibt man einfach 'livepipe' an. Alle Livepipe-Dateien wurden in
eine einzige komprimiert.

Um jQuery hinzuzuf�gen, gibt man einfach 'jquery' an. Dies setzt auch jQuery.noConflict()
automatisch, um die parallele Nutzung mit Prototype zu erm�glichen.

Seit Zikula 1.3 ist es empfohlen Core-Skripte mit definierten Shortcuts zu laden.
Auf diesem Weg werden alle Abh�ngigkeiten aufgel�st (und auch ben�tigte Stylesheets
werden geladen). Hier ist eine Liste der aktuell unterst�tzten Shortcuts:
- prototype,
- livepipe,
- zikula,
- zikula.ui,
- zikula.imageviewer,
- zikula.itemlist,
- zikula.tree,
- validation,
- jquery


ZIKULA_VIEW / ZIKULA_THEME KLASSEN
==================================
Dutzende von Getter- und Setter-Funktionen wurden hinzugef�gt um einige Dinge besser zu kapseln
und eines Tages eine einfache Migration weg von Smarty 2 zu erlauben. Man sollte von direkten
Zugriffen auf Eigenschaften ablassen und immer die Getter/Setter verwenden.

Zikula_View (und damit auch Zikula_Theme, Form_View etc.) benutzen nun alle Zikula_Translatable,
was bedeutet, dass die Methoden zur �bersetzung immer verf�gbar und f�r die korrekte Domain
vorkonfiguriert sind (z.B. $this->__() usw.).

Innerhalb eines Template-Plugins nutzt man einfach $view->__() etc.


FORMS
=====
Es gab einige sehr wichtige und m�chtige �nderungen im Forms-Framework.

Form-Handler
------------
Das Interface Form_Handler wird nun erzwungen, daher m�ssen Handler von Form_Handler erben.

Die Klasse Form_Handler wurde mit einigen praktischen Zus�tzen versehen.
  - Form_View::execute() konfiguriert nun den Handler
    - Injiziert die Form_View in die view-Property des Handlers
    - Konfiguriert den Handler mit der Domain der Form_View.
    - Ruft den setup()-Hook im Handler auf.
    - Der Handler f�hrt nun preInitialize() und postInitialize() vor und nach der Methode
      initialize() aus.
    - Form-Handler implementieren nun Zikula_Translatable, daher kann man einfach
      $this->__() etc. nutzen. Die Methoden werden mit der Domain des Handlers konfiguriert.
  
Plugins
-------
Das Interface Form_Plugin wird nun erzwungen, daher m�ssen Plugins von Form_Plugin erben.

Die Klasse Form_Plugin hat ebenfalls neue Erweiterungen bekommen.
    - Form_View::registerPlugin() konfiguriert die Plugins nach Instantiierung.
    - Injiziert die Form_View in die view-Property des Plugins.
    - Konfiguriert das plugin mit der Domain der Form_View.
    - Ruft den setup()-Hook im Handler auf.
    - Die Hooks preInitialize() und postInitialize() werden vor und nach der Methode
      initialize() aufgerufen.
    - Form-Plugins implementieren nun Zikula_Translatable, daher kann man auch hier
      die Gettext-Funktionen einfach nutzen. Sie werden mit der Domain des Plugins konfiguriert.

In einigen F�llen, in denen Plugins wiederverwendet werden, ist zu beachten, dass sie mit
ihrer eigenen Domain konfiguriert werden m�ssen, hartkodiert in setup() wie etwa
`$this->domain = 'foo';`. Hintergrund ist, dass sie per Standard die Charakteristika der
View, von der sie aufgerufen wurden, �bernehmen.

Plugins, Handler und Template-Plugins sollten nun alle separiert voneinander sein. Alles wird
�ber AutoLoading geladen.

Beispiel-Layout:

lib/Foo/Form/Handler/Admin/Config.php      Foo_Form_Handler_Admin_Config
lib/Foo/Form/Handler/User/View.php         Foo_Form_Handler_User_Config
lib/Foo/Form/Plugin/Youtube.php            Foo_Form_Plugin_Youtube
templates/plugins/function.formyoutube.php Das eigentliche Template-Plugin.

Ein Parameter 'zparameters' wurde hinzugef�gt und stellt einen direkten Weg bereit, um die Werte
der Attribute der Form-Plugins zuzuweisen. Zum Beispiel:
$attributes = {class:z-bt-ok; confirmMessage:Sind Sie sicher?}
{formbutton commandName='delete' __text='L�schen' zparameters=$attributes}

Der {linkbutton} unterst�tzt nun ein Bild (durch das {img}-Plugin) und nutzt dabei die
neuen Parameter 'imgset' und 'imgsrc'. imgset ist per Standard 'icons/extrasmall'.
Beispiele:
{linkbutton commandName='edit' __text='Edit' imgsrc='edit.gif'}
oder mit dem Core-CSS:
{linkbutton commandName='edit' __text='Edit' class='z-icon-es-edit'}
{button commandName='cancel' __text='Cancel' class='z-bt-cancel'}

API KONFORMIT�T
===============
Die folgende Liste von Dingen werden als nicht Zikula-API-konform angesehen. Falls man sich auf
sie verl�sst, gibt es keine Garantie, dass sie weiter so funktionieren, sogar bei kleinen Upgrades
zwischen Bugfix-Releases.

  - Zugriff auf Klasseneigenschaften der Klassen Smarty, Zikula_View, Zikula_View_* ist komplett
verboten, aber immer noch m�glich, da Smarty viele Zugriffe erlaubt. Wir haben Getter und Setter
sowie neue Methoden in Zikula_View hinzugef�gt um Einstellungen ver�ndern zu k�nnen.
  - Die gleichen Regeln gelten f�r das Forms-Framework. Bitte alles �ber die bereitgestellten
    Getter und Setter ansprechen.
  - $GLOBALS['ZConfig'] und $GLOBALS['ZRuntime'].
  - Das von DBUtil::executeSQL() zur�ckgelieferte Zikula_Adapter_AdodbStatement.

VERSCHIEDENES
=============
Wenn man irgendwelche Front-Controller hat, sollte man beachten, dass der Bootstrapping-Prozess
sich ge�ndert hat. Siehe index.php f�r ein Beispiel.

SICHERHEIT
==========
Man MUSS Eingabe-Variablen validieren und reinigen. Bitte NIE annehmen, dass etwas valide oder sicher
ist, nur weil es �ber FormUtil::getPassedValues() erhalten wurde.
FormUtil::getPassedValues() kann nun Filter und Bereinigungen mit den nativen PHP filter_* Funktionen
vornehmen oder man kann es auch manuell machen.
