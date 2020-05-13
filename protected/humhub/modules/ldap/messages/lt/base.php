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
    'A TLS/SSL is strongly favored in production environments to prevent passwords from be transmitted in clear text.' => 'TLS/SSL ',
    'Base DN' => 'DN bazė',
    'Defines the filter to apply, when login is attempted. %s replaces the username in the login action. Example: &quot;(sAMAccountName=%s)&quot; or &quot;(uid=%s)&quot;' => 'Nurodo filtrą, kai bandoma prisijungti. %s pakeičia vartotojo vardą į prisijungimo veiksmą. Pavyzdys &quot;(sAMAccountName=%s)&quot; ar &quot;(uid=%s)&quot;',
    'Enable LDAP Support' => 'Leisti LDAP palaikymą',
    'Encryption' => 'kodavimas',
    'Fetch/Update Users Automatically' => 'Atnaujinti vartotojus automatiškai',
    'Hostname' => 'Pagrindinis kompiuteris',
    'LDAP' => 'LDAP',
    'Login Filter' => 'Prisijungimo filtras',
    'Password' => 'Slaptažodis',
    'Port' => 'Langas',
    'Status: Error! (Message: {message})' => 'Statusas: Klaida! (žinutė: {message})',
    'Status: OK! ({userCount} Users)' => 'Statusas: Gerai! ({userCount} Vartotojai)',
    'The default base DN used for searching for accounts.' => 'Numatytoji bazė DN, naudojama paskyrų paieškai.',
    'The default credentials password (used only with username above).' => 'Numatytasis įgaliojimų slaptažodis (naudojamas tik su vartotojo vardu)',
    'The default credentials username. Some servers require that this be in DN form. This must be given in DN form if the LDAP server requires a DN to bind and binding should be possible with simple usernames.' => 'Numatytasis įgaliojimų vardas. Kai kurie serveriai reikalauja, kad tai būtų DN formoje. Tai turi būti DN formoje, jei LDAP serveris reikalauja DN įpareigoti ir įpareigojimas turi būti galimas su paprastais vartotojų vardais.',
    'User Filer' => 'Vartotojo filtras',
    'Username' => 'Vartotojo vardas',
    'Username Attribute' => 'Vartotojo savybė',
    'E-Mail Address Attribute' => '',
    'ID Attribute' => '',
    'LDAP Attribute for E-Mail Address. Default: &quot;mail&quot;' => '',
    'LDAP Attribute for Username. Example: &quot;uid&quot; or &quot;sAMAccountName&quot;' => '',
    'Limit access to users meeting this criteria. Example: &quot;(objectClass=posixAccount)&quot; or &quot;(&(objectClass=person)(memberOf=CN=Workers,CN=Users,DC=myDomain,DC=com))&quot;' => '',
    'Not changeable LDAP attribute to unambiguously identify the user in the directory. If empty the user will be determined automatically by e-mail address or username. Examples: objectguid (ActiveDirectory) or uidNumber (OpenLDAP)' => '',
    'Specify your LDAP-backend used to fetch user accounts.' => '',
    'Status: Warning! (No users found using the ldap user filter!)' => '',
];