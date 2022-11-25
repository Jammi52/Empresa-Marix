<div class="container mt-5 mb-5">
<form action="index.php" method="post">
<div class="form-group mt-3">
<label for="nombre">Usuario</label>
<input type="text" class="form-control" id="Usuario" name="Usuario" placeholder="Usuario">
</div>
<div class="form-group mt-3">
<label for="categoria">Correo</label>
<input type="text" class="form-control" id="Correo" name="Correo" placeholder="Correo">
</div>
<div class="form-group mt-3">
<label for="duracion">Contraseña</label>
<input type="number" class="form-control" id="Contraseña" name="Contraseña" placeholder="Contraseña">
</div>
<label for="duracion">Ubicación</label>
<input type="number" class="form-control" id="Ubicación" name="Ubicación" placeholder="Ubicación">
</div>
<button type="submit" class="btn btn-primary mt-3">Guardar</button>
</form>
</div>    

<?php
require_once './models/Movie.php';

$movie = new Movie();
if (isset($_POST['nombre']) && isset($_POST['categoria']) && isset($_POST['duracion'])) {
$nombre = $_POST ['nombre'];
$categoria = $_POST ['categoria'];
$duracion = $_POST ['duracion'];

$movie->insertMovie ($nombre, $categoria, $duracion); 
}



?>