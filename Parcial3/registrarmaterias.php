<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Alumno</title>
    <link rel="stylesheet" href="css/bootstrap.css"> 
    <script src="code.jquery.com_jquery-3.7.1.js"></script>
</head>
<body>
    <?php 
        include 'menu.php'; 
        include 'conexion.php';

        $id = $_GET["id"];

        $sql = "SELECT * FROM alumnos WHERE id=".$id;

        $datos = $conexion->query($sql);
        
        $alumno = $datos->fetch_assoc();

    ?>
    <div class="container">
        <div class="row">
            <div class="col-12 card m-4 p-4">
                <h2>Registrar Alumno</h2><hr>
                <form action="ActualizarAlumno.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $alumno["id"]; ?>">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input value="<?php echo $alumno["nombre"]; ?>" name="nombre" type="text" class="form-control" placeholder="Teclea la materia" reqlumnuired>
                    </div>
                    <div class="form-group">
                        <label for="">Número de control:</label>
                        <input value="<?php echo $alumno["numero_control"]; ?>" name="nc" type="text" class="form-control" placeholder="Teclea el semestre" required>
                    </div>
                    <div class="form-group">
                        <select name="especialidad" class="form-group">
                        <option value="">Selecciona una especialidad</option>
                        <option value="PROGRAMACION">PROGRAMACION</option>
                        <option value="CONTABILIDAD">CONTABILIDAD</option>
                        <option value="OFIMATICA">OFIMATICA</option>
                        <option value="CONSTRUCCION">CONSTRUCCION</option>
                        <option value="ELECTRONICA">ELECTRONICA</option>
                    </div>
                  

    <script src="js/bootstrap.js"></script>
</body>
</html>