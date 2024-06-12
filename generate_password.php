<?php
// Se la lunghezza è stata inviata tramite GET
if (isset($_GET['length'])) {
    $length = intval($_GET['length']);  
    $password = "";  

    // Aggiunge un 'X' alla stringa per ogni iterazione fino a raggiungere la lunghezza specificata
    for ($i = 0; $i < $length; $i++) {
        $password .= 'X';
    }

    // Stampa la password generata
    echo "Password generata: " . htmlspecialchars($password);
} else {
    // Se non è stato inviato nessun dato, reindirizza l'utente al form
    header("Location: index.php");
    exit;
}
?>