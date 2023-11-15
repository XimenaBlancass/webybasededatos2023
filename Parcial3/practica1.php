<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <?php include 'conexion.php'?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cetis 107</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Menu
          </a>
          <ul class="dropdown-menu" aria_labelledby="navbarDrowpon">
            <li><a class="dropdown-item" href="#">Consultar alumnos</a></li>
            <li><a class="dropdown-item" href="#">Registrar alumnos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container">
    <div class="row">
        <div class="card m-2">
            <h1>sistemas de gestion de control escolar </h1>
            <h3> CETIS 107</h3>
            <img src="fotos/logocetis.png" alt="" width="20%" class="img-fluid">
        </div>
    </div>
        <footer class="text-center"><hr>
        <span>cetis107 web app &copy; 2023 </span>   
    </footer>

        <script src="js/boostrap.js"></script>
</div>
</body>
</html><?php


?>