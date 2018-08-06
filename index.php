<?php
include "conexion.php";
include "insertar.php";
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

    <title>CRUD-PHP</title>
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <!-- SECCION PARA IMPRIMIR LOS ELEMENTOS -->
            <div class="col-md-6">
                <?php foreach ($resultado as $datoIndividual): ?>
                    <div class="alert alert-<?php echo $datoIndividual['color_name']; ?>" role="alert">
                        <?php echo $datoIndividual['color_name']; ?>
                        -
                        <?php echo $datoIndividual['description']; ?>
                        <!-- Icono para editar  -->
                        <a href="index.php?id_colores=<?php echo $datoIndividual['id_colores']; ?>" class="float-right">
                            <i class="fas fa-edit"></i>
                        </a>
                        <!-- icono para eliminar la alerta -->
                        <a href="eliminar.php?id_colores=<?php echo $datoIndividual['id_colores']; ?>" class="float-right mr-3">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                <?php endforeach?>
            </div>

            <!-- SECCION PARA AGREGAR ELEMENTOS -->
            <div class="col-md-6">
                <?php if (!$_GET): ?>
                    <h4>Agregar elementos</h4>
                    <form method="POST" >
                        <input class="form-control" type="text" name="color_name" placeholder="Escriba un color valido para bootstrap" required>
                        <input class="form-control mt-3" type="text" name="description" placeholder="Escriba una descripción" required>
                        <button class="btn btn-outline-success mt-3" type="submit">Agregar</button>
                    </form>
                <?php endif?>

                <?php if ($_GET): ?>
                    <h4>Editar elementos</h4>
                    <form method="GET" action="editar.php">
                        <input value="<?php echo $resultadoId['color_name']; ?>" class="form-control" type="text" name="color_name" placeholder="Escriba un color" required>
                        <input value="<?php echo $resultadoId['description']; ?>" class="form-control mt-3" type="text" name="description" placeholder="Escriba una descripción" required>
                        <input value="<?php echo $resultadoId['id_colores']; ?>" type="hidden" name="id_colores" >
                        <button class="btn btn-primary mt-3" type="submit">Actualizar</button>
                    </form>
                <?php endif?>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>