----------------------------------------------------
Installation
----------------------------------------------------

1. Ordner Symmetrics/Agreement nach 
app/code/local oder app/code/community kopieren.

2. Datei app/etc/modules/Symmetrics_Agreement.xml
nach app/etc/modules/ kopieren.

3. Cache loeschen

4. Frontend aufrufen

5. Fertig!

----------------------------------------------------
Beschreibung
----------------------------------------------------

Das Modul erstellt Bestellbedingungen (AGBs und 
Widerrufsbelehrung), die vom Kunden am Ende der Bestellung
akzeptiert werden muessen. Zusaetzlich fuegt das Modul
die Moeglichkeit hinzu im Feld wo im Checkout die
Texte angezeigt werden Blockaufrufe wie {{block type ...}}
zu verwenden. Die Blocks selbst werden von diesem Modul
nicht erstellt. Diese muessen entweder manuell ueber
CMS - Static Blocks oder mithilfe des Moduls
Symmetrics_ConfigGermanTexts erstellt werden. Die 
Blocks (Identifier) muessen "sym_agb" und "sym_widerruf"
heissen. 

Symmetrics_Agreement erstellt auch die CMS-Seiten
AGB und Widerruf, die mit Symmetrics_ConfigGermanTexts
oder manuell mit Texten gefuellt werden.

Features:

- Erstellt Seiten AGB und Widerruf
- Fuegt Rendering fuer das Feld "Bestellbedingungen" im
Checkout hinzu, sodass Aufrufe wie {{block .. }} dort
verwendet werden koennen.

----------------------------------------------------
Funktonalitaet und Besonderheiten
----------------------------------------------------

Das Modul arbeitet eng mit dem Modul 
Symmetrics_ConfigGermanTexts zusammen und es ist
deswegen empfehlenswert dieses Modul zusammen mit
Symmetrics_Agreement zu nutzen.