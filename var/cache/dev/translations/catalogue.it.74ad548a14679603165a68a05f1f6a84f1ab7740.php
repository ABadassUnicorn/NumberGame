<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('it', array (
  'validators' => 
  array (
    'This value should be false.' => 'Questo valore dovrebbe essere falso.',
    'This value should be true.' => 'Questo valore dovrebbe essere vero.',
    'This value should be of type {{ type }}.' => 'Questo valore dovrebbe essere di tipo {{ type }}.',
    'This value should be blank.' => 'Questo valore dovrebbe essere vuoto.',
    'The value you selected is not a valid choice.' => 'Questo valore dovrebbe essere una delle opzioni disponibili.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Si dovrebbe selezionare almeno {{ limit }} opzione.|Si dovrebbero selezionare almeno {{ limit }} opzioni.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Si dovrebbe selezionare al massimo {{ limit }} opzione.|Si dovrebbero selezionare al massimo {{ limit }} opzioni.',
    'One or more of the given values is invalid.' => 'Uno o più valori inseriti non sono validi.',
    'This field was not expected.' => 'Questo campo non è stato previsto.',
    'This field is missing.' => 'Questo campo è mancante.',
    'This value is not a valid date.' => 'Questo valore non è una data valida.',
    'This value is not a valid datetime.' => 'Questo valore non è una data e ora valida.',
    'This value is not a valid email address.' => 'Questo valore non è un indirizzo email valido.',
    'The file could not be found.' => 'Non è stato possibile trovare il file.',
    'The file is not readable.' => 'Il file non è leggibile.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Il file è troppo grande ({{ size }} {{ suffix }}). La dimensione massima consentita è {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Il mime type del file non è valido ({{ type }}). I tipi permessi sono {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Questo valore dovrebbe essere {{ limit }} o inferiore.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Questo valore è troppo lungo. Dovrebbe essere al massimo di {{ limit }} carattere.|Questo valore è troppo lungo. Dovrebbe essere al massimo di {{ limit }} caratteri.',
    'This value should be {{ limit }} or more.' => 'Questo valore dovrebbe essere {{ limit }} o superiore.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Questo valore è troppo corto. Dovrebbe essere almeno di {{ limit }} carattere.|Questo valore è troppo corto. Dovrebbe essere almeno di {{ limit }} caratteri.',
    'This value should not be blank.' => 'Questo valore non dovrebbe essere vuoto.',
    'This value should not be null.' => 'Questo valore non dovrebbe essere nullo.',
    'This value should be null.' => 'Questo valore dovrebbe essere nullo.',
    'This value is not valid.' => 'Questo valore non è valido.',
    'This value is not a valid time.' => 'Questo valore non è un\'ora valida.',
    'This value is not a valid URL.' => 'Questo valore non è un URL valido.',
    'The two values should be equal.' => 'I due valori dovrebbero essere uguali.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Il file è troppo grande. La dimensione massima è {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Il file è troppo grande.',
    'The file could not be uploaded.' => 'Il file non può essere caricato.',
    'This value should be a valid number.' => 'Questo valore dovrebbe essere un numero.',
    'This file is not a valid image.' => 'Questo file non è una immagine valida.',
    'This is not a valid IP address.' => 'Questo valore non è un indirizzo IP valido.',
    'This value is not a valid language.' => 'Questo valore non è una lingua valida.',
    'This value is not a valid locale.' => 'Questo valore non è una impostazione regionale valida.',
    'This value is not a valid country.' => 'Questo valore non è una nazione valida.',
    'This value is already used.' => 'Questo valore è già stato utilizzato.',
    'The size of the image could not be detected.' => 'La dimensione dell\'immagine non può essere determinata.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La larghezza dell\'immagine è troppo grande ({{ width }}px). La larghezza massima è di {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La larghezza dell\'immagine è troppo piccola ({{ width }}px). La larghezza minima è di {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'L\'altezza dell\'immagine è troppo grande ({{ height }}px). L\'altezza massima è di {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'L\'altezza dell\'immagine è troppo piccola ({{ height }}px). L\'altezza minima è di {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Questo valore dovrebbe essere la password attuale dell\'utente.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Questo valore dovrebbe contenere esattamente {{ limit }} carattere.|Questo valore dovrebbe contenere esattamente {{ limit }} caratteri.',
    'The file was only partially uploaded.' => 'Il file è stato caricato solo parzialmente.',
    'No file was uploaded.' => 'Nessun file è stato caricato.',
    'No temporary folder was configured in php.ini.' => 'Nessuna cartella temporanea è stata configurata nel php.ini.',
    'Cannot write temporary file to disk.' => 'Impossibile scrivere il file temporaneo sul disco.',
    'A PHP extension caused the upload to fail.' => 'Un\'estensione PHP ha causato il fallimento del caricamento.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Questa collezione dovrebbe contenere almeno {{ limit }} elemento.|Questa collezione dovrebbe contenere almeno {{ limit }} elementi.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Questa collezione dovrebbe contenere massimo {{ limit }} elemento.|Questa collezione dovrebbe contenere massimo {{ limit }} elementi.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Questa collezione dovrebbe contenere esattamente {{ limit }} elemento.|Questa collezione dovrebbe contenere esattamente {{ limit }} elementi.',
    'Invalid card number.' => 'Numero di carta non valido.',
    'Unsupported card type or invalid card number.' => 'Tipo di carta non supportato o numero non valido.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Questo valore non è un IBAN (International Bank Account Number) valido.',
    'This value is not a valid ISBN-10.' => 'Questo valore non è un codice ISBN-10 valido.',
    'This value is not a valid ISBN-13.' => 'Questo valore non è un codice ISBN-13 valido.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Questo valore non è un codice ISBN-10 o ISBN-13 valido.',
    'This value is not a valid ISSN.' => 'Questo valore non è un codice ISSN valido.',
    'This value is not a valid currency.' => 'Questo valore non è una valuta valida.',
    'This value should be equal to {{ compared_value }}.' => 'Questo valore dovrebbe essere uguale a {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Questo valore dovrebbe essere maggiore di {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Questo valore dovrebbe essere maggiore o uguale a {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Questo valore dovrebbe essere identico a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Questo valore dovrebbe essere minore di {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Questo valore dovrebbe essere minore o uguale a {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Questo valore dovrebbe essere diverso da {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Questo valore dovrebbe essere diverso da {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Il rapporto di aspetto dell\'immagine è troppo grande ({{ ratio }}). Il rapporto massimo consentito è {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Il rapporto di aspetto dell\'immagine è troppo piccolo ({{ ratio }}). Il rapporto minimo consentito è {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'immagine è quadrata ({{ width }}x{{ height }}px). Le immagini quadrate non sono consentite.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'immagine è orizzontale ({{ width }}x{{ height }}px). Le immagini orizzontali non sono consentite.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'immagine è verticale ({{ width }}x{{ height }}px). Le immagini verticali non sono consentite.',
    'An empty file is not allowed.' => 'Un file vuoto non è consentito.',
    'The host could not be resolved.' => 'L\'host non può essere risolto.',
    'This value does not match the expected {{ charset }} charset.' => 'Questo valore non corrisponde al charset {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Questo valore non è un codice BIC valido.',
    'This form should not contain extra fields.' => 'Questo form non dovrebbe contenere nessun campo extra.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Il file caricato è troppo grande. Per favore caricare un file più piccolo.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Il token CSRF non è valido. Provare a reinviare il form.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Si è verificato un errore di autenticazione.',
    'Authentication credentials could not be found.' => 'Impossibile trovare le credenziali di autenticazione.',
    'Authentication request could not be processed due to a system problem.' => 'La richiesta di autenticazione non può essere processata a causa di un errore di sistema.',
    'Invalid credentials.' => 'Credenziali non valide.',
    'Cookie has already been used by someone else.' => 'Il cookie è già stato usato da qualcun altro.',
    'Not privileged to request the resource.' => 'Non hai i privilegi per richiedere questa risorsa.',
    'Invalid CSRF token.' => 'CSRF token non valido.',
    'Digest nonce has expired.' => 'Il numero di autenticazione è scaduto.',
    'No authentication provider found to support the authentication token.' => 'Non è stato trovato un valido fornitore di autenticazione per supportare il token.',
    'No session available, it either timed out or cookies are not enabled.' => 'Nessuna sessione disponibile, può essere scaduta o i cookie non sono abilitati.',
    'No token could be found.' => 'Nessun token trovato.',
    'Username could not be found.' => 'Username non trovato.',
    'Account has expired.' => 'Account scaduto.',
    'Credentials have expired.' => 'Credenziali scadute.',
    'Account is disabled.' => 'L\'account è disabilitato.',
    'Account is locked.' => 'L\'account è bloccato.',
  ),
));

$catalogueFr = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Cette valeur doit être fausse.',
    'This value should be true.' => 'Cette valeur doit être vraie.',
    'This value should be of type {{ type }}.' => 'Cette valeur doit être de type {{ type }}.',
    'This value should be blank.' => 'Cette valeur doit être vide.',
    'The value you selected is not a valid choice.' => 'Cette valeur doit être l\'un des choix proposés.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Vous devez sélectionner au moins {{ limit }} choix.|Vous devez sélectionner au moins {{ limit }} choix.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Vous devez sélectionner au maximum {{ limit }} choix.|Vous devez sélectionner au maximum {{ limit }} choix.',
    'One or more of the given values is invalid.' => 'Une ou plusieurs des valeurs soumises sont invalides.',
    'This field was not expected.' => 'Ce champ n\'a pas été prévu.',
    'This field is missing.' => 'Ce champ est manquant.',
    'This value is not a valid date.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid datetime.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid email address.' => 'Cette valeur n\'est pas une adresse email valide.',
    'The file could not be found.' => 'Le fichier n\'a pas été trouvé.',
    'The file is not readable.' => 'Le fichier n\'est pas lisible.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Cette valeur doit être inférieure ou égale à {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Cette chaine est trop longue. Elle doit avoir au maximum {{ limit }} caractère.|Cette chaine est trop longue. Elle doit avoir au maximum {{ limit }} caractères.',
    'This value should be {{ limit }} or more.' => 'Cette valeur doit être supérieure ou égale à {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Cette chaine est trop courte. Elle doit avoir au minimum {{ limit }} caractère.|Cette chaine est trop courte. Elle doit avoir au minimum {{ limit }} caractères.',
    'This value should not be blank.' => 'Cette valeur ne doit pas être vide.',
    'This value should not be null.' => 'Cette valeur ne doit pas être nulle.',
    'This value should be null.' => 'Cette valeur doit être nulle.',
    'This value is not valid.' => 'Cette valeur n\'est pas valide.',
    'This value is not a valid time.' => 'Cette valeur n\'est pas une heure valide.',
    'This value is not a valid URL.' => 'Cette valeur n\'est pas une URL valide.',
    'The two values should be equal.' => 'Les deux valeurs doivent être identiques.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Le fichier est trop volumineux.',
    'The file could not be uploaded.' => 'Le téléchargement de ce fichier est impossible.',
    'This value should be a valid number.' => 'Cette valeur doit être un nombre.',
    'This file is not a valid image.' => 'Ce fichier n\'est pas une image valide.',
    'This is not a valid IP address.' => 'Cette adresse IP n\'est pas valide.',
    'This value is not a valid language.' => 'Cette langue n\'est pas valide.',
    'This value is not a valid locale.' => 'Ce paramètre régional n\'est pas valide.',
    'This value is not a valid country.' => 'Ce pays n\'est pas valide.',
    'This value is already used.' => 'Cette valeur est déjà utilisée.',
    'The size of the image could not be detected.' => 'La taille de l\'image n\'a pas pu être détectée.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Cette chaine doit avoir exactement {{ limit }} caractère.|Cette chaine doit avoir exactement {{ limit }} caractères.',
    'The file was only partially uploaded.' => 'Le fichier a été partiellement transféré.',
    'No file was uploaded.' => 'Aucun fichier n\'a été transféré.',
    'No temporary folder was configured in php.ini.' => 'Aucun répertoire temporaire n\'a été configuré dans le php.ini.',
    'Cannot write temporary file to disk.' => 'Impossible d\'écrire le fichier temporaire sur le disque.',
    'A PHP extension caused the upload to fail.' => 'Une extension PHP a empêché le transfert du fichier.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Cette collection doit contenir {{ limit }} élément ou plus.|Cette collection doit contenir {{ limit }} éléments ou plus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Cette collection doit contenir {{ limit }} élément ou moins.|Cette collection doit contenir {{ limit }} éléments ou moins.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Cette collection doit contenir exactement {{ limit }} élément.|Cette collection doit contenir exactement {{ limit }} éléments.',
    'Invalid card number.' => 'Numéro de carte invalide.',
    'Unsupported card type or invalid card number.' => 'Type de carte non supporté ou numéro invalide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Le numéro IBAN (International Bank Account Number) saisi n\'est pas valide.',
    'This value is not a valid ISBN-10.' => 'Cette valeur n\'est pas un code ISBN-10 valide.',
    'This value is not a valid ISBN-13.' => 'Cette valeur n\'est pas un code ISBN-13 valide.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Cette valeur n\'est ni un code ISBN-10, ni un code ISBN-13 valide.',
    'This value is not a valid ISSN.' => 'Cette valeur n\'est pas un code ISSN valide.',
    'This value is not a valid currency.' => 'Cette valeur n\'est pas une devise valide.',
    'This value should be equal to {{ compared_value }}.' => 'Cette valeur doit être égale à {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Cette valeur doit être supérieure à {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Cette valeur doit être supérieure ou égale à {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur doit être identique à {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Cette valeur doit être inférieure à {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Cette valeur doit être inférieure ou égale à {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Cette valeur ne doit pas être égale à {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur ne doit pas être identique à {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop grand ({{ ratio }}). Le rapport maximal autorisé est {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop petit ({{ ratio }}). Le rapport minimal attendu est {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'image est carrée ({{ width }}x{{ height }}px). Les images carrées ne sont pas autorisées.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'image est au format paysage ({{ width }}x{{ height }}px). Les images au format paysage ne sont pas autorisées.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'image est au format portrait ({{ width }}x{{ height }}px). Les images au format portrait ne sont pas autorisées.',
    'An empty file is not allowed.' => 'Un fichier vide n\'est pas autorisé.',
    'The host could not be resolved.' => 'Le nom de domaine n\'a pas pu être résolu.',
    'This value does not match the expected {{ charset }} charset.' => 'Cette valeur ne correspond pas au jeu de caractères {{ charset }} attendu.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ce n\'est pas un code universel d\'identification des banques (BIC) valide.',
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir des champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Une exception d\'authentification s\'est produite.',
    'Authentication credentials could not be found.' => 'Les identifiants d\'authentification n\'ont pas pu être trouvés.',
    'Authentication request could not be processed due to a system problem.' => 'La requête d\'authentification n\'a pas pu être executée à cause d\'un problème système.',
    'Invalid credentials.' => 'Identifiants invalides.',
    'Cookie has already been used by someone else.' => 'Le cookie a déjà été utilisé par quelqu\'un d\'autre.',
    'Not privileged to request the resource.' => 'Privilèges insuffisants pour accéder à la ressource.',
    'Invalid CSRF token.' => 'Jeton CSRF invalide.',
    'Digest nonce has expired.' => 'Le digest nonce a expiré.',
    'No authentication provider found to support the authentication token.' => 'Aucun fournisseur d\'authentification n\'a été trouvé pour supporter le jeton d\'authentification.',
    'No session available, it either timed out or cookies are not enabled.' => 'Aucune session disponible, celle-ci a expiré ou les cookies ne sont pas activés.',
    'No token could be found.' => 'Aucun jeton n\'a pu être trouvé.',
    'Username could not be found.' => 'Le nom d\'utilisateur n\'a pas pu être trouvé.',
    'Account has expired.' => 'Le compte a expiré.',
    'Credentials have expired.' => 'Les identifiants ont expiré.',
    'Account is disabled.' => 'Le compte est désactivé.',
    'Account is locked.' => 'Le compte est bloqué.',
  ),
  'messages' => 
  array (
    'base_page_title' => 'Number Game - ',
    'Save' => 'Tester ma réponse',
    'menu.home' => 'Jouer',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr);

return $catalogue;
