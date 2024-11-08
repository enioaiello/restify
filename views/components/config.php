<?php
// Paramètres de connexion
$host = '127.0.0.1';
$dbname = 'restify';
$user = 'enio';
$pass = '123456789';

// Connexion à la base de données
$connexion = mysqli_connect($host, $user, $pass, $dbname);

// Vérifier la connexion
if (!$connexion) {
    die("Échec de la connexion : " . mysqli_connect_error());
}

// Définition du chemin du site
const URL = "http://localhost/restify/";