# encoding: utf-8

# package info
name = 'symmetrics_module_agreement'
tags = ('magento', 'config', 'german', 'symmetrics', 'agb', 'agreement')

# relations
requires = {
}
excludes = {
}

# who is responsible for this package?
team_leader = {
    'Sergej Braznikov': 'sb@symmetrics.de'
}

# who should check this package in the first place?
maintainer = {
    'Eugen Gitin': 'eg@symmetrics.de'
}

# relative installation path (e.g. app/code/local)
install_path = ''

# additional infos
info = 'Rendering füs AGB-Feld in der Bestellung'
summary = '''
	Fügt die Möglichkeit hinzu in den AGBs am Ende der Bestellung
	{{block ... }} Variablen zu verwenden. Sinnvoll ist die Verbindung
	zu dem Symmetrics_Impressum Modul
'''
notes = '''

'''
license = 'AFL 3.0'
authors = {
    'Eugen Gitin': 'eg@symmetrics.de'
}
homepage = 'http://www.symmetrics.de'

# files this package depends on
depends_on_files = (
	'app/code/core/Mage/Checkout/Block/Agreements.php',
	'app/code/core/Mage/Checkout/Model/Agreement.php'
)
