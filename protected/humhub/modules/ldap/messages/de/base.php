<?php
return array (
  'A TLS/SSL is strongly favored in production environments to prevent passwords from be transmitted in clear text.' => 'TLS/SSL wird in Produktionsumgebungen dringend empfohlen, um zu verhindern, dass Passwörter im Klartext übertragen werden.',
  'Base DN' => 'Basis DN',
  'Defines the filter to apply, when login is attempted. %s replaces the username in the login action. Example: &quot;(sAMAccountName=%s)&quot; or &quot;(uid=%s)&quot;' => 'Definiert den Filter, der beim Anmeldeversuch angewendet wird. %s ersetzt dabei den Benutzernamen in der Anmeldeaktion. Beispiel: "(sAMAccountName=%s)" or "(uid=%s)"',
  'E-Mail Address Attribute' => 'E-Mail-Adressattribut',
  'Enable LDAP Support' => 'LDAP-Unterstützung aktivieren',
  'Encryption' => 'Verschlüsselung',
  'Fetch/Update Users Automatically' => 'Benutzer automatisch erstellen und aktualisieren',
  'Hostname' => 'Host-Name',
  'ID Attribute' => 'ID Attribut',
  'LDAP' => 'LDAP',
  'LDAP Attribute for E-Mail Address. Default: &quot;mail&quot;' => 'LDAP-Attribut für E-Mail-Adresse. Voreinstellung: "mail"',
  'LDAP Attribute for Username. Example: &quot;uid&quot; or &quot;sAMAccountName&quot;' => 'LDAP-Attribut für Benutzername. Beispiel: "uid" oder "sAMAccountName"',
  'Limit access to users meeting this criteria. Example: &quot;(objectClass=posixAccount)&quot; or &quot;(&(objectClass=person)(memberOf=CN=Workers,CN=Users,DC=myDomain,DC=com))&quot;' => 'Zugriff auf Benutzer beschränken, die diese Kriterien erfüllen. Beispiel: "(objectClass=posixAccount)" or "(&amp;(objectClass=person)(memberOf=CN=Workers,CN=Users,DC=myDomain,DC=com))"',
  'Login Filter' => 'Anmelde-Filter',
  'Not changeable LDAP attribute to unambiguously identify the user in the directory. If empty the user will be determined automatically by e-mail address or username. Examples: objectguid (ActiveDirectory) or uidNumber (OpenLDAP)' => 'Nicht änderbares LDAP-Attribut, um den Benutzer im Verzeichnis eindeutig zu identifizieren. Wenn leer, wird der Benutzer automatisch über die E-Mail-Adresse oder den Benutzernamen ermittelt. Beispiele: objectguid (ActiveDirectory) oder uidNumber (OpenLDAP)',
  'Password' => 'Kennwort',
  'Port' => 'Port',
  'Specify your LDAP-backend used to fetch user accounts.' => 'Legen Sie Ihr LDAP-Backend fest, das zur Erkennung der Benutzerkonten verwendet werden soll.',
  'Status: Error! (Message: {message})' => 'Status: Error! (Meldung: {message})',
  'Status: OK! ({userCount} Users)' => 'Status: OK! ({userCount} Benutzer)',
  'Status: Warning! (No users found using the ldap user filter!)' => 'Status: Achtung! (Es wurden keine Benutzer mit dem ldap-Benutzerfilter gefunden!)',
  'The default base DN used for searching for accounts.' => 'Der Standardbasis DN, der für die Suche nach Konten verwendet wird.',
  'The default credentials password (used only with username above).' => 'Das Standard-Anmeldekennwort (wird nur mit dem obigen Benutzernamen verwendet).',
  'The default credentials username. Some servers require that this be in DN form. This must be given in DN form if the LDAP server requires a DN to bind and binding should be possible with simple usernames.' => 'Der standardmäßige Benutzername für die Anmeldeinformationen. Manche Server verlangen, dass dieser in DN-Form vorliegt. Dieser muss in DN-Form angegeben werden, wenn der LDAP-Server einen DN zum Verknüpfen benötigt und das Verknüpfen mit einfachem Benutzernamen möglich sein soll.',
  'User Filer' => 'Benutzer Filer',
  'Username' => 'Benutzername',
  'Username Attribute' => 'Benutzername Attribut',
);