<?php
// Connexion à la base de données
$host = "localhost";
$username = "root";
$password = "";
$dbname = "prestashop.sql";

$conn = mysqli_connect($host, $username, $password);

// Création de la base de données
$sql = "CREATE DATABASE $dbname";
mysqli_query($conn, $sql);

// Sélection de la base de données
mysqli_select_db($conn, $dbname);

// Import du fichier de données SQL
$sql = file_get_contents('prestashop.sql');
mysqli_query($conn, $sql);

// Fermeture de la connexion à la base de données
mysqli_close($conn);

echo "Base de données installée avec succès !";

?>