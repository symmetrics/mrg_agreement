* DOCUMENTATION

** INSTALLATION
Extrahieren Sie den Inhalt dieses Archivs in Ihr Magento Verzeichnis.

** USAGE
Das Modul erstellt Bestellbedingungen (AGBs und 
Widerrufsbelehrung), die vom Kunden am Ende der Bestellung
akzeptiert werden müssen. Zusützlich fügt das Modul
die Möglichkeit hinzu im Feld, in welchem im Checkout die
Texte angezeigt werden, Blockaufrufe wie {{block type ...}}
zu verwenden. Die Blocks selbst werden von diesem Modul
nicht erstellt. Diese müssen entweder manuell über
CMS - Static Blocks oder mithilfe des Moduls
Symmetrics_ConfigGermanTexts erstellt werden. Die 
Blocks (Identifier) muessen "sym_agb" und "sym_widerruf"
heissen. 

Symmetrics_Agreement erstellt auch die CMS-Seiten
AGB und Widerruf, die mit Symmetrics_ConfigGermanTexts
oder manuell mit Texten gefüllt werden.
Das Modul arbeitet eng mit dem Modul 



** FUNCTIONALITY
*** A: Erstellt Seiten AGB und Widerruf
*** B: Fügt Rendering für das Feld "Bestellbedingungen" im
        Checkout hinzu, sodass Aufrufe wie {{block .. }} dort
        verwendet werden koennen.

** TECHNINCAL



** PROBLEMS

* TESTCASES
** BASIC

** CATCHABLE

** STRESS