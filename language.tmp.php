<?php
/*
UserSpice 4
Ein Open Source PHP User Management System
Vom UserSpice Team unter http://UserSpice.com

Dieses Programm ist freie Software: Sie können es neu verteilen und / oder ändern
Es unter den Bedingungen der GNU General Public License, veröffentlicht von
Die Freie Software Foundation, entweder Version 3 der Lizenz, oder
(Nach Ihrer Wahl) jede spätere Version.

Dieses Programm wird in der Hoffnung verteilt, dass es nützlich sein wird,
Aber OHNE JEGLICHE GEWÄHRLEISTUNG; Ohne die implizierte Garantie von
MARKTGÄNGIGKEIT oder EIGNUNG FÜR EINEN BESTIMMTEN ZWECK. Siehe
GNU General Public License für weitere Details.

Sie hätten eine Kopie der GNU General Public License erhalten sollen
Zusammen mit diesem Programm. Wenn nicht, siehe <http://www.gnu.org/licenses/>.
*/

/*
%m1% - Dymamic-Marker, die zur Laufzeit durch den relevanten Index ersetzt werden.
*/

$lang = array();

//Konto
$lang = array_merge ($lang, array (
"ACCOUNT_USER_ADDED" => "Neuer Benutzer hinzugefügt!",
"ACCOUNT_SPECIFY_USERNAME" => "Bitte geben Sie Ihren Benutzernamen ein",
"ACCOUNT_SPECIFY_PASSWORD" => "Bitte geben Sie Ihr Passwort ein",
"ACCOUNT_SPECIFY_EMAIL" => "Bitte geben Sie Ihre E-Mail-Adresse ein",
"ACCOUNT_INVALID_EMAIL" => "Ungültige E-Mail-Adresse",
"ACCOUNT_USER_OR_EMAIL_INVALID" => "Benutzername oder E-Mail-Adresse ist ungültig",
"ACCOUNT_USER_OR_PASS_INVALID" => "Benutzername oder Passwort ist ungültig",
"ACCOUNT_USER_OR_PASS_INVALID2" => "Wir haben unsere Technologie verbessert, um Ihr Konto besser zu schützen. <a href='forgot-password.php'> Bitte klicken Sie hier, um Ihr Passwort auf unser neues System zu aktualisieren. </a> Wir entschuldigen uns für die Unbequemlichkeit.",
"ACCOUNT_ALREADY_ACTIVE" => "Ihr Konto ist bereits aktiviert",
"ACCOUNT_INACTIVE" => "Ihr Konto ist in-aktiv. Überprüfen Sie Ihre E-Mails / Spam-Ordner für Kontoaktivierungsanweisungen",
"ACCOUNT_USER_CHAR_LIMIT" => "Ihr Benutzername muss zwischen%m1% und%m2% Zeichen in der Länge sein",
"ACCOUNT_DISPLAY_CHAR_LIMIT" => "Ihr Anzeigename muss zwischen%m1% und%m2% Zeichen in der Länge sein",
"ACCOUNT_PASS_CHAR_LIMIT" => "Ihr Passwort muss zwischen%m1% und%m2% Zeichen in der Länge sein",
"ACCOUNT_TITLE_CHAR_LIMIT" => "Die Titel müssen zwischen%m1% und%m2% Zeichen in der Länge sein",
"ACCOUNT_PASS_MISMATCH" => "Ihr Passwort und Bestätigungskennwort müssen übereinstimmen",
"ACCOUNT_DISPLAY_INVALID_CHARACTERS" => "Anzeigename darf nur alphanumerische Zeichen enthalten",
"ACCOUNT_USERNAME_IN_USE" => "Benutzername%m1% wird bereits verwendet",
"ACCOUNT_DISPLAYNAME_IN_USE" => "Anzeigename%m1% wird bereits verwendet",
"ACCOUNT_EMAIL_IN_USE" => "E-Mail%m1% wird bereits verwendet",
"ACCOUNT_LINK_ALREADY_SENT" => "Eine Aktivierungs-E-Mail wurde bereits an diese E-Mail-Adresse in der letzten%m1% Stunde (n) gesendet",
"ACCOUNT_NEW_ACTIVATION_SENT" => "Wir haben Ihnen einen neuen Aktivierungslink per E-Mail verschickt, bitte überprüfen Sie Ihre E-Mail",
"ACCOUNT_SPECIFY_NEW_PASSWORD" => "Bitte geben Sie Ihr neues Passwort ein",
"ACCOUNT_SPECIFY_CONFIRM_PASSWORD" => "Bitte bestätige dein neues Passwort",
"ACCOUNT_NEW_PASSWORD_LENGTH" => "Neues Passwort muss zwischen%m1% und%m2% Zeichen in der Länge sein",
"ACCOUNT_PASSWORD_INVALID" => "Aktuelles Passwort stimmt nicht mit dem überein, das wir auf Datensatz haben",
"ACCOUNT_DETAILS_UPDATED" => "Kontodaten aktualisiert",
"ACCOUNT_ACTIVATION_MESSAGE" => "Du musst dein Konto aktivieren, bevor du dich anmelden kannst. Bitte folge den Link unten, um dein Konto zu aktivieren. \N \n,%m1% activate-account.php? Token =%m2% ",
"ACCOUNT_ACTIVATION_COMPLETE" => "Sie haben Ihr Konto erfolgreich aktiviert. Sie können sich jetzt <a href=\"login.php\"> hier </a> anmelden.",
"ACCOUNT_REGISTRATION_COMPLETE_TYPE1" => "Du hast dich erfolgreich registriert. Du kannst jetzt <a href=\"login.php\"> hier </a> eingeben.",
"ACCOUNT_REGISTRATION_COMPLETE_TYPE2" => "Du hast dich erfolgreich registriert. Du wirst bald eine Aktivierungs-E-Mail erhalten.
Sie müssen Ihr Konto aktivieren, bevor Sie sich anmelden. ",
"ACCOUNT_PASSWORD_NOTHING_TO_UPDATE" => "Sie können nicht mit demselben Passwort aktualisieren",
"ACCOUNT_PASSWORD_UPDATED" => "Konto Passwort aktualisiert",
"ACCOUNT_EMAIL_UPDATED" => "Konto E-Mail aktualisiert",
"ACCOUNT_TOKEN_NOT_FOUND" => "Token existiert nicht / Konto ist bereits aktiviert",
"ACCOUNT_USER_INVALID_CHARACTERS" => "Benutzername darf nur alphanumerische Zeichen enthalten",
"ACCOUNT_DELETIONS_SUCCESSFUL" => "Sie haben%m1% Benutzer erfolgreich gelöscht",
"ACCOUNT_MANUALLY_ACTIVATED" => "%m1% 's Konto wurde manuell aktiviert",
"ACCOUNT_DISPLAYNAME_UPDATED" => "Anzeigename wurde in%m1% geändert",
"ACCOUNT_TITLE_UPDATED" => "%m1% 's Titel wurde in%m2% geändert",
"ACCOUNT_PERMISSION_ADDED" => "\"Zugang zu%m1% Berechtigungsstufen\" hinzugefügt",
"ACCOUNT_PERMISSION_REMOVED" => "Entfernter Zugriff aus%m1% Berechtigungsstufen",
"ACCOUNT_INVALID_USERNAME" => "Ungültiger Benutzername",
"CAPTCHA_ERROR" => "Du hast den Captcha Test versagt, Roboter!",
));

//Konfiguration
$lang = array_merge ($lang, array (
"CONFIG_NAME_CHAR_LIMIT" => "Standortname muss zwischen%m1% und%m2% Zeichen in der Länge sein",
"CONFIG_URL_CHAR_LIMIT" => "Standortname muss zwischen%m1% und%m2% Zeichen in der Länge sein",
"CONFIG_EMAIL_CHAR_LIMIT" => "Standortname muss zwischen%m1% und%m2% Zeichen in der Länge sein",
"CONFIG_ACTIVATION_TRUE_FALSE" => "Die E-Mail-Aktivierung muss entweder\" true \"oder\" false \"sein",
"CONFIG_ACTIVATION_RESEND_RANGE" => "Aktivierungsschwelle muss zwischen%m1% und%m2% Stunden liegen",
"CONFIG_langUAGE_CHAR_LIMIT" => "Sprachweg muss zwischen%m1% und%m2% Zeichen in der Länge sein",
"CONFIG_langUAGE_INVALID" => "Es gibt keine Datei für den Sprachschlüssel`%m1% `",
"CONFIG_TEMPLATE_CHAR_LIMIT" => "Vorlagenpfad muss zwischen%m1% und%m2% Zeichen in der Länge sein",
"CONFIG_TEMPLATE_INVALID" => "Es gibt keine Datei für die Vorlagen-Taste\"%m1% \"",
"CONFIG_EMAIL_INVALID" => "Die eingegebene E-Mail ist nicht gültig",
"CONFIG_INVALID_URL_END" => "Bitte geben Sie das Ende / in die URL Ihrer Website ein",
"CONFIG_UPDATE_SUCCESSFUL" => "Die Konfiguration Ihrer Website wurde aktualisiert. Möglicherweise müssen Sie eine neue Seite laden, damit alle Einstellungen wirksam werden",
));

//Passwort vergessen
$lang = array_merge ($lang, array (
"FORGOTPASS_INVALID_TOKEN" => "Ihr Aktivierungs-Token ist nicht gültig",
"FORGOTPASS_NEW_PASS_EMAIL" => "Wir haben Ihnen ein neues Passwort per E-Mail gesendet",
"FORGOTPASS_REQUEST_CANNED" => "Passwort vergessene Anfrage abgebrochen",
"FORGOTPASS_REQUEST_EXISTS" => "Es gibt bereits eine hervorragende Passwort-Passwort-Anfrage auf diesem Konto",
"FORGOTPASS_REQUEST_SUCCESS" => "Wir haben Ihnen per E-Mail Anweisungen gegeben, wie Sie den Zugriff auf Ihr Konto wiederherstellen können",
));

// Mail
$lang = array_merge ($lang, array (
"MAIL_ERROR" => "Schwerer Fehler beim Versuchen von E-Mails, wenden Sie sich an Ihren Server-Administrator",
"MAIL_TEMPLATE_BUILD_ERROR" => "Fehler beim Erstellen der E-Mail-Vorlage",
"MAIL_TEMPLATE_DIRECTORY_ERROR" => "Das Mail-Templates-Verzeichnis kann nicht geöffnet werden. Vielleicht versuchen Sie, das Mail-Verzeichnis auf%m1% zu setzen",
"MAIL_TEMPLATE_FILE_EMPTY" => "Vorlagendatei ist leer ... nichts zu senden",
));

//Sonstiges
$lang = array_merge ($lang, array (
"CAPTCHA_FAIL" => "Fehlgeschlagene Sicherheitsfrage",
"CONFIRM" => "Bestätigen",
"DENY" => "verweigern",
"ERFOLG" => "Erfolg",
"FEHLER" => "Fehler",
"NOTHING_TO_UPDATE" => "Nichts zu aktualisieren",
"SQL_ERROR" => "Fatal SQL error",
"FEATURE_DISABLED" => "Diese Funktion ist derzeit deaktiviert",
"PAGE_PRIVATE_TOGGLED" => "Diese Seite ist jetzt%m1%",
"PAGE_ACCESS_REMOVED" => "Seitenzugriff für%m1% Berechtigungsstufe (n) entfernt",
"PAGE_ACCESS_ADDED" => "Seitenzugriff hinzugefügt für %m1% Berechtigungsstufe (n)",
));


$lang = array_merge ($lang, array (
"MESSAGE_ARCHIVE_SUCCESSFUL" => "Sie haben%m1% Threads erfolgreich archiviert",
"MESSAGE_UNARCHIVE_SUCCESSFUL" => "Du hast erfolgreich unarchivierte%m1% Threads",
"MESSAGE_DELETE_SUCCESSFUL" => "Sie haben%m1% Threads erfolgreich gelöscht",
"USER_MESSAGE_EXEMPT" => "Benutzer ist%m1% befreit von Nachrichten.",
));

// Berechtigungen
$lang = array_merge ($lang, array (
"PERMISSION_CHAR_LIMIT" => "Berechtigungsnamen müssen zwischen%m1% und%m2% Zeichen in der Länge sein",
"PERMISSION_NAME_IN_USE" => "Berechtigungsname%m1% wird bereits verwendet",
"PERMISSION_DELETIONS_SUCCESSFUL" => "Erfolgreich gelöschte%m1% Berechtigungsstufe (n)",
"PERMISSION_CREATION_SUCCESSFUL" => "Die Berechtigungsstufe\"%m1% \"wurde erfolgreich erstellt",
"PERMISSION_NAME_UPDATE" => "Name der Berechtigungsstufe wurde auf\"%m1% \"geändert",
"PERMISSION_REMOVE_PAGES" => "Erfolgreicher Zugriff auf%m1% Seite (s) entfernt",
"PERMISSION_ADD_PAGES" => "Erfolgreicher Zugriff auf%m1% Seite (s)",
"PERMISSION_REMOVE_USERS" => "Erfolgreich entfernte%m1% Benutzer (s)",
"PERMISSION_ADD_USERS" => "Erfolgreich hinzugefügt%m1% Benutzer", 
"CANNOT_DELETE_NEWUSERS" => "Sie können die standardmäßige\" neue Benutzergruppe \"nicht löschen",
"CANNOT_DELETE_ADMIN" => "Sie können die Standard-Admin-Gruppe nicht löschen",
));

