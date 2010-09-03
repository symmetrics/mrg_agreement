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
AGB und Widerrufsbelehrung, die mit Symmetrics_ConfigGermanTexts
oder manuell mit Texten gefüllt werden.

** FUNCTIONALITY
*** A: Aktiviert die Agreements in der Systemkonfiguration
        unter "System -> Konfiguration -> Verkäufe -> Zur Kasse
        -> Bezahloptionen -> Enable Terms and Conditions"
*** B: Erstellt Seiten AGB und Widerrufsbelehrung
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
*** A:Prüfen Sie ob die Option unter "System -> Konfiguration -> 
        Verkäufe -> Zur Kasse -> Bezahloptionen -> Enable Terms and 
        Conditions" aktiv ist und im Checkout-Review (letzer Schritt) die 
        entsprechenden Blöcke angezeigt werden.
*** B: Prüfen Sie im Frontend und Backend die Existenz dieser Seiten
*** C: Prüfen Sie im Frontend und Backend die Existenz dieser Blöcke
*** D: Versuchen Sie verschiedene Aufrufe in den Agreements und prüfen Sie,
        ob diese dann so im Checkout/Review Step erscheinen.
        Beispiele:
        {{block type="cms/block" block_id="cms_block_name"}}
        Wobei cms_block_name einem vorhandenen CMS Block Identifier
        entsprechen muss.
*** E: 1. Das Migrationsskript sollte Agreements mit folgenden Inhalten anlegen:
           {{block type="cms/block" block_id="mrg_revocation"}} für die
           Widerrufsbelehrung und
           {{block type="cms/block" block_id="mrg_business_terms"}} für die
           AGB.
       2. Prüfen Sie im Backend, ob sich dieser Inhalt in den Agreements
           befindet.
       3. Prüfen Sie im Frontend im Checkout/Review Step, ob diese Blöcke
           tatsächlich dem entsprechen, was im Backend unter CMS/Blöcke für die
           Blöcke mrg_revocation bzw. mrg_business_terms eingetragen ist.
