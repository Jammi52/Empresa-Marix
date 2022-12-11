<?php
require_once "./config/dataconnection.php";
require_once './models/registro.php';

$movie = new Movie();
$result = $movie -> getMovies();
?>

<table class="table table-striped container">
    <thead>
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Email</th>
            <th>Contraseña</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while ($row = mysqli_fetch_array($result)) {
                ?>
        <tr>
            <td><?php echo $row['idUsuario']; ?></td>
            <td><?php echo $row['Usuario']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td><?php echo $row['Contraseña']; ?></td>
            <td><a href="editregistro.php?idPelicula=<?php echo $row['idUsuario']; ?>" class="btn btn-warning">Editar</a></td>
            <td><a href="deleteregistro.php?idPelicula=<?php echo $row['idUsuario']; ?>" class="btn btn-danger">Eliminar</a></td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>