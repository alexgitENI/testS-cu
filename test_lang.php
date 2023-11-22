<?php

// Spécifier le chemin du fichier que tu veux inspecter
$cheminDuFichier = '/web-serveur/ch13/index.php';

// Lire le contenu du fichier
$contenuDuFichier = file_get_contents($cheminDuFichier);

// Afficher le contenu du fichier
var_dump($contenuDuFichier);

?>
