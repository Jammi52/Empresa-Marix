<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marix</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <nav>
        <ul class="menu">
            <div class="logo">
                <li>
                    <img src="./img/mi proyecto.png" alt="logo">
                </li>
            </div>
            <div class="botones-menu">
            <li class="nav-item">
                <a class="nav-link" href="./index.php">Inicio</a>
              </li>
                <li class="nav-item">
                <a class="nav-link" href="./Menu.php">Menu</a>
              </li>
              <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuario
          </a>
          <div class="dropdown-menu">
  <form class="px-4 py-3">
    <div class="mb-3">
      <label for="exampleDropdownFormEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
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
    <button type="submit" class="btn btn-primary">Sign in</button>
    
  </form>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="#">New around here? Sign up</a>


  <a class="dropdown-item" href="#">Forgot password?</a>
</div>
        </li>
    
            </div>
            <div class="carrito">
                <img src="https://cdn-icons-png.flaticon.com/512/107/107831.png" alt="carrito">
            </div>

        </ul>
    </nav>

  
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://sites.google.com/site/hamburguesasxd2018/_/rsrc/1534801794271/home/BANNER.JPG" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://media.ambito.com/p/a7dff2d9f4afb60af92a5931f174caed/adjuntos/239/imagenes/038/913/0038913545/1200x675/smart/copia-blossom-variedad-burgersjpg.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://winter.cl/sitio2021/wp-content/uploads/2021/09/banner-Hamburguesa.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<?
//require_once "./conexion/cone.php";//
$enlace = mysqli_connect("localhost", "u413489667_equipoTres", "@equipoTres202240", "Datos");
if($enlace){
    echo "Conexión correcta a la base de datos";
}
return $enlace;


?>

</html>