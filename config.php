<?php
// informations d'indentifications

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'test');

// connexion a la bas de données Mysql

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// verifier la connexion 
if ($conn === false) {
    die("ERREUR: imposible de se connecter." . mysqli_connect_errno());
}
