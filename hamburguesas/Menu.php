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

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="./img/Pro.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Hamburguesa con queso</h5>
              <p class="card-text">Una hamburguesa de queso, regresco y unas papas chicas.</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary">Agregar</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="./img/2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Duo burger</h5>
              <p class="card-text">Dos hamburguesas sencillas, dos refrescos y unas papas medianas.</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary">Agregar</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="./img/doble.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Hamburguesa Doble carne</h5>
              <p class="card-text">Hamburguesa doble carne, refresco y papas chicas.</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary">Agregar</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="./img/papas.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Refresco y papas</h5>
              <p class="card-text">papas medianas y un refresco grande.</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary">Agregar</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="./img/arrachera.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Hamburguesa de arrachera</h5>
              <p class="card-text">Hamburguesa de arrachera, refresco y papas chicas.</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary">Agregar</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="./img/pollo.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Hamburguesa de pollo</h5>
              <p class="card-text">Hamburguesa de pollo, refresco y papas chicas.</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary">Agregar</a>
            </div>
          </div>
        </div>
      </div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>




</body>