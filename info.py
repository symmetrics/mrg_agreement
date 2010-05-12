# encoding: utf-8

# =============================================================================
# package info
# =============================================================================
NAME = 'symmetrics_module_agreement'

TAGS = ('magento', 'config', 'german', 'agb', 'agreement', 'germanconfig',
        'mrg', 'module', 'php')

LICENSE = 'AFL 3.0'

HOMEPAGE = 'http://www.symmetrics.de'

INSTALL_PATH = ''

# =============================================================================
# responsibilities
# =============================================================================
TEAM_LEADER = {
    'Torsten Walluhn': 'tw@symmetrics.de',
}

MAINTAINER = {
    'Eugen Gitin': 'eg@symmetrics.de',
    'Eric Reiche': 'er@symmetrics.de',
}

AUTHORS = {
    'Eugen Gitin': 'eg@symmetrics.de',
    'Eric Reiche': 'er@symmetrics.de',
    'Siegfried Schmitz': 'ss@symmetrics.de',
}

# =============================================================================
# additional infos
# =============================================================================
INFO = 'Rendering füs AGB-Feld in der Bestellung'

SUMMARY = '''
    Fügt die Möglichkeit hinzu in den AGBs am Ende der Bestellung
    {{block ... }} Variablen zu verwenden. Sinnvoll ist die Verbindung
    zu dem Symmetrics_Imprint Modul
'''

NOTES = '''
'''

# =============================================================================
# relations
# =============================================================================
REQUIRES = [
    {'magento': '*', 'magento_enterprise': '*'},
]

EXCLUDES = {
}

DEPENDS_ON_FILES = (
    'app/code/core/Mage/Checkout/Model/Agreement.php',
)

PEAR_KEY = ''

COMPATIBLE_WITH = {
    'magento': ['1.4.0.0'],
    'magento_enterprise': ['1.8.0.0'],
}
