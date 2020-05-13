<?php
/**
 * Message translations.
 *
 * This file is automatically generated by 'yii message/extract' command.
 * It contains the localizable messages extracted from source code.
 * You may modify this file by translating the extracted messages.
 *
 * Each array element represents the translation (value) of a message (key).
 * If the value is empty, the message is considered as not translated.
 * Messages that no longer need translation will have their translations
 * enclosed between a pair of '@@' marks.
 *
 * Message string can be used with plural forms format. Check i18n section
 * of the guide for details.
 *
 * NOTE: this file must be saved in UTF-8 encoding.
 */
return [
    'A TLS/SSL is strongly favored in production environments to prevent passwords from be transmitted in clear text.' => 'V produkčním prostředí je silně doporučeno používat TLS/SSL šifrování, aby hesla nebyla přenášena jako čistý text.',
    'Base DN' => 'Base DN',
    'Defines the filter to apply, when login is attempted. %s replaces the username in the login action. Example: &quot;(sAMAccountName=%s)&quot; or &quot;(uid=%s)&quot;' => 'Nastavení filtrů, které se mají aplikovat při pokusu o přihlášení. %s nahrazuje uživatelské jméno. Např.: &quot;(sAMAccountName=%s)&quot; nebo &quot;(uid=%s)&quot;',
    'E-Mail Address Attribute' => 'Atributy emailu',
    'Enable LDAP Support' => 'Povolit podporu LDAP',
    'Encryption' => 'Šifrování',
    'Fetch/Update Users Automatically' => 'Přenést/Aktualizovat uživatele automaticky',
    'Hostname' => 'Hostname',
    'LDAP' => 'LDAP',
    'Login Filter' => 'Filtr Loginů',
    'Password' => 'Heslo',
    'Port' => 'Port',
    'Specify your LDAP-backend used to fetch user accounts.' => 'Zadejte zálohu LDAP použitou pro načtení uživatelských účtů.',
    'Status: Error! (Message: {message})' => 'Stav: chyba! (Odpověď: {message})',
    'Status: OK! ({userCount} Users)' => 'Stav: OK! ({userCount} uživatelů)',
    'The default base DN used for searching for accounts.' => 'Výchozí hodnoty DN použité pro vyhledávání účtů.',
    'The default credentials password (used only with username above).' => 'Výchozí heslo pověření (používá se pouze s uživatelským jménem výše).',
    'The default credentials username. Some servers require that this be in DN form. This must be given in DN form if the LDAP server requires a DN to bind and binding should be possible with simple usernames.' => 'Výchozí uživatelské jméno pověření. Některé servery vyžadují, aby byly ve formátu DN. Musí být uvedeno ve formátu DN, pokud server LDAP vyžaduje vazbu DN a vazba by měla být možná s jednoduchými uživatelskými jmény.',
    'User Filer' => 'Uživatelský filtr',
    'Username' => 'Uživatelské jméno',
    'Username Attribute' => ' Atributy uživatelského jména',
    'ID Attribute' => '',
    'LDAP Attribute for E-Mail Address. Default: &quot;mail&quot;' => '',
    'LDAP Attribute for Username. Example: &quot;uid&quot; or &quot;sAMAccountName&quot;' => '',
    'Limit access to users meeting this criteria. Example: &quot;(objectClass=posixAccount)&quot; or &quot;(&(objectClass=person)(memberOf=CN=Workers,CN=Users,DC=myDomain,DC=com))&quot;' => '',
    'Not changeable LDAP attribute to unambiguously identify the user in the directory. If empty the user will be determined automatically by e-mail address or username. Examples: objectguid (ActiveDirectory) or uidNumber (OpenLDAP)' => '',
    'Status: Warning! (No users found using the ldap user filter!)' => '',
];