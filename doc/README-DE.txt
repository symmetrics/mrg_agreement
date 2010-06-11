* DOCUMENTATION

** INSTALLATION 
Extrahieren Sie den Inhalt dieses Archivs in Ihr Magento Verzeichnis. 
Ggf. ist das Leeren/Auffrischen des Magento-Caches notwendig.

** USAGE 
Das Modul erstellt Bestellbedingungen (AGBs und 
Widerrufsbelehrung), die vom Kunden am Ende der Bestellung 
akzeptiert werden müssen. Zusaetzlich fügt das Modul
 die Möglichkeit hinzu im Feld, in welchem im Checkout die
 Texte angezeigt werden, Blockaufrufe wie {{block type ...}}
zu verwenden. Die Blocks selbst werden von diesem Modul 
nicht erstellt. Diese müssen entweder manuell über 
CMS - Static Blocks oder mit Hilfe des Moduls
 Symmetrics_ConfigGermanTexts erstellt werden. Die 
Blocks (Identifier) muessen "mrg_business_terms"
und "mrg_revocation" heißen. 

Symmetrics_Agreement erstellt auch die CMS-Seiten 
AGB und Widerruf, die mit Symmetrics_ConfigGermanTexts
oder manuell mit Texten gefüllt werden.

** FUNCTIONALITY
*** A: Aktiviert die Agreements in der Systemkonfiguration
        System/Konfiguration/Verkäufe/Zur Kasse/Bezahloptionen/AGB aktivieren
*** B: Erstellt Seiten AGB und Widerruf
*** C: Erstellt Blöcke "mrg_business_terms" und
        "mrg_revocation"
*** D: Fügt Rendering für das Feld "Bestellbedingungen" im
        Checkout hinzu, sodass Aufrufe wie {{block .. }} dort
        verwendet werden koennen.
        Die Bestellbedingungen finden sich im Backend unter
        Verkäufe/Bestellbedimgungen
*** E: Bindet die unter b) erstellen Blöcke in den agreeements
        ein.

** TECHNICAL 
Überschreibt den Block Mage_Checkout_Model_Agreement und wendet 
den Standard Template-Filter auf den Inhalt der Agreements an. 
Via Migrationsskript werden die Seiten, Blöcke und Agreements 
erstellt.

* TESTCASES
** BASIC
*** A: Prüfen Sie ob die Option "Checkout/Options/Enable Agreements"
        aktiv ist und im Checkout-Review die entsprechenden Blöcke 
        angezeigt werden.
*** B: Prüfen Sie im Frontend und Backend die Existenz dieser Seiten
*** C: Prüfen Sie im Frontend und Backend die Existenz dieser Blöcke
*** D: Prüfen Sie, ob die {{block}} Aufrufe in den Agreements funktionieren,
        am besten zusammen mit Testcase d)
*** E: Prüfen Sie, ob in den Agreements die Blöcke "mrg_business_terms"
        und "mrg_revocation" via {{block}} Aufruf eingebunden werden und
        funktionieren.
