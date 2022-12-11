<?php
require_once './models/registro.php';
$movie = new Movie ();

if (isset($_GET['idUsuario'])) {
    $idUsuario = $_GET['idUsuario'];
    $movie->deleteMovie($idUsuario);
}
?>