<?php
// Se la lunghezza è stata inviata tramite GET
if (isset($_GET['length'])) {
    $length = intval($_GET['length']);  // Assicura che la lunghezza sia un intero

    // Definizione dei caratteri consentiti
    $allowedChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+-=[]{}|;:,.<>?';
    $password = "";  // Inizia con una stringa vuota

    // Ottiene il numero di caratteri nella stringa dei caratteri consentiti
    $numAllowedChars = strlen($allowedChars);

    // Aggiunge un carattere casuale alla stringa per ogni iterazione
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, $numAllowedChars - 1);  
        $password .= $allowedChars[$randomIndex];  
    }

   
    echo "Password generata: " . htmlspecialchars($password);
} else {
    // Se non è stato inviato nessun dato, reindirizza l'utente al form
    header("Location: index.php");
    exit;
}
?>