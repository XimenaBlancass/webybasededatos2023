<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

     <?php
    include'menu.php';
    include'conexion.php';
    $sql="SELECT * FROM alumnos";
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if($datos-<num_rows>0){?>
                <table class='table table-hover'>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Numero de control</th>
                            <th>Semestre</th>
                            <th>Edad</th>
                            <th>Turno</th>
                            <th>Sexo</th>
                </tr>
                </thead>
                <tbody>

                <?php while($registro = $datos ->fetch_assoc())?>
                <tr>

                     <td><?php echo $registro ["id"]; ?></td>
                     <td><?php echo $registro ["nombre"]; ?></td>
                     <td><?php echo $registro ["numero_control"]; ?></td>
                     <td><?php echo $registro ["semestre"]; ?></td>
                     <td><?php echo $registro ["edad"]; ?></td>
                     <td><?php echo $registro ["turno"]; ?></td>
                     <td><?php echo $registro ["sexo"]; ?></td>

                </tr>
                <a href="" class

                     
                                }
</body>
</html>