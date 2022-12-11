<?php
require_once './models/registro.php';

$movie = new Movie();

//Creamos modelo para editar pelicula
if (isset($_GET['idUsuario'])) {
    $idUsuario = $_GET['idUsuario'];
    $result =  $movie-> editregistro($idUsuario);
    $row = mysqli_fetch_array($result);
}

//Creamos modelo para actualizar pelicula
if (isset($_POST['idUsuario']) && isset($_POST['Usuario']) && isset($_POST['Email']) && isset($_POST['Contraseña'])) {
    $idUsuario = $_POST['idUsuario'];
    $Usuario = $_POST['Usuario'];
    $Email = $_POST['Email'];
    $Contraseña = $_POST['Contraseña'];

    $sql = "UPDATE Datos SET Usuario = '$Usuario', Email = '$Email', Contraseña = '$Contraseña' WHERE idUsuario = '$idUsuario'";
    $result = mysqli_query($movie->conectar(), $sql);
    if ($result) {
        Header("Location: index.php");
    } else {
        echo "Error al actualizar los datos";
    }
}
?>

<?php
include_once "./views/header.php";
include './index.php';
?>
<li class="nav-item dropdown">
<form action="editregistro.php" method="post">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuario
          </a>
          <div class="dropdown-menu">
  <form class="px-4 py-3">
  <div class="mb-3">
  <div class="form-group mt-3">
<label for="nombre">Usuario</label>
<input type="text" class="form-control" id="Usuario" name="Usuario" placeholder="Usuario">
</div>
    <div class="mb-3">
      <label for="exampleDropdownFormEmail1" class="form-label">Email</label>
      <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormPassword1" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="dropdownCheck">
        <label class="form-check-label" for="dropdownCheck">
          Remember me
        </label>
      </div>
    </div>
    <input type="hidden" name="idUSuario" value="<?php echo $row['idUsuario']; ?>">
    <button type="submit" class="btn btn-primary">Sign in</button>
    
  </form>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="#">New around here? Sign up</a>


  <a class="dropdown-item" href="#">Forgot password?</a>

</div>
</for>
        </li>
