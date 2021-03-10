<?php
include("conexion.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body style="background-color: black;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: blue;">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://tareasistemaexpertosandres.herokuapp.com/index.php">Principal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="https://tarea2sistemaexpertosandres.herokuapp.com/form1.php">Formulario #1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://tarea2sistemaexpertosandres.herokuapp.com/form2.php">Formulario #2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://tarea2sistemaexpertosandres.herokuapp.com/form3.php">Formulario #3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://tarea2sistemaexpertosandres.herokuapp.com/form4.php">Formulario #4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://tarea2sistemaexpertosandres.herokuapp.com/form5.php">Formulario #5</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://tarea2sistemaexpertosandres.herokuapp.com/form6.php">Formulario #6</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br><br>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="card" style="width: 40rem;">
                <div>Con este formulario descubrira cual es el sexo del estudiante, el promedio va del 6 al 10</div>
                <div class="card-body">
                    <form id="form3.php" method="POST">
                        <div class="mb-3">
                            <label for="Select" class="form-label">Estilo de Aprendizaje</label>
                            <select id="estilo" name="estilo" class="form-select">
                                <option>Seleccione uno</option>
                                <option>DIVERGENTE</option>
                                <option>CONVERGENTE</option>
                                <option>ASIMILADOR</option>
                                <option>ACOMODADOR</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="promedio" class="form-label">Promedio</label>
                            <input type="text" class="form-control" id="promedio" name="promedio" placeholder="Promedio...">
                        </div>
                        <div class="mb-3">
                            <label for="Select" class="form-label">Recinto</label>
                            <select id="recinto" name="recinto" class="form-select">
                                <option>Seleccione uno</option>
                                <option>Paraiso</option>
                                <option>Turrialba</option>
                            </select>
                        </div>
                        <input type="submit" id="Enviar" class="btn btn-primary" name="form3" value="Enviar">
                    </form>
                    <!--Se recogen los datos del formulario -->
                    <?php
                    include("conexion.php");
                    if (isset($_POST['form3'])) {
                        $estilo = $_POST['estilo'];
                        $promedio = $_POST['promedio'];
                        $recinto = $_POST['recinto'];
                        //se crean las consultas
                        $estiloQ = "SELECT EstiloFemenino,EstiloMasculino FROM `sexo` WHERE estilo = '$estilo'";
                        $resultQ = mysqli_query($con, $estiloQ);
                        $rowQ = mysqli_fetch_array($resultQ);
                        $EstiloFemenino = $rowQ['EstiloFemenino'];
                        $EstiloMasculino = $rowQ['EstiloMasculino'];
                        $promedioQ = "SELECT PromedioFemenino,PromedioMasculino FROM `sexo` WHERE promedio = $promedio";
                        $resultPromedioQ = mysqli_query($con, $promedioQ);
                        $rowPromedioQ = mysqli_fetch_array($resultPromedioQ);
                        $PromedioFemenino = $rowPromedioQ['PromedioFemenino'];
                        $PromedioMasculino = $rowPromedioQ['PromedioMasculino'];
                        $RecintoQ = "SELECT RecintoFemenino,RecintoMasculino FROM `sexo` WHERE recinto = '$recinto'";
                        $resultRecintoQ = mysqli_query($con, $RecintoQ);
                        $rowRecintoQ = mysqli_fetch_array($resultRecintoQ);
                        $RecintoFemenino = $rowRecintoQ['RecintoFemenino'];
                        $RecintoMasculino = $rowRecintoQ['RecintoMasculino'];
                        //se suman los valores
                        $SumaFemenino = $EstiloFemenino + $PromedioFemenino + $RecintoFemenino;
                        $SumaMasculino = $EstiloMasculino + $PromedioMasculino + $RecintoMasculino;
                        //se da el resultado mas grande
                        if ($SumaFemenino > $SumaMasculino) {
                            $sexo = 'Femenino';
                        } else {
                            $sexo = 'Masculino';
                        }
                        echo '   
                        <br>               
                        <div class="alert alert-primary" role="alert">
                        ' . $sexo . '
                      </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="form3.js"></script>
</body>

</html>