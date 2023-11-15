<nav class="navbar navbar-expand-lg bg-light">
	<div class="container-fluid">
		<a class="navbar-brand" href="inicio.php">CETIS 107</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			<li class="nav-item">
			<a class="nav-link active" aria-current="page" href="inicio.php">Inicio</a>
			</li>
			<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				Alumnos
			</a>
			<ul class="dropdown-menu">
				<li><a class="dropdown-item" href="inicio.php">Inicio</a></li>
				<li><a class="dropdown-item" href="consultarAlumnos.php">Consultar alumnos</a></li>
				<li><hr class="dropdown-divider"></li>
				<li><a class="dropdown-item" href="RegistrarAlumno.php">Registrar alumnos</a></li>
			</ul>
			</li>

			<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				Materias
			</a>
			<ul class="dropdown-menu">
				<li><a class="dropdown-item" href="inicio.php">Inicio</a></li>
				<li><a class="dropdown-item" href="consultarmateria.php">Consultar Materias</a></li>
				<li><hr class="dropdown-divider"></li>
				<li><a class="dropdown-item" href="registrarmaterias.php">Registrar Materias</a></li>
				<li><a class="dropdown-item" href="asignarmateria.php">Asignar Materias</a></li>
			</ul>
			</li>

		</ul>
		<form class="d-flex" role="search">
			<input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
			<button class="btn btn-outline-success" type="submit">Buscar</button>
		</form>
		</div>
	</div>
</nav>