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
                        <a class="nav-link" href="https://ampliacionexpertoandres.herokuapp.com/form1.php">Formulario #1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://ampliacionexpertoandres.herokuapp.com/form2.php">Formulario #2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://ampliacionexpertoandres.herokuapp.com/form3.php">Formulario #3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://ampliacionexpertoandres.herokuapp.com/form4.php">Formulario #4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://ampliacionexpertoandres.herokuapp.com/form5.php">Formulario #5</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://ampliacionexpertoandres.herokuapp.com/form6.php">Formulario #6</a>
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
                <div>Con este formulario descubrira cual es el estilo de aprendizaje,el promedio va del 6 al 10</div>
                <div class="card-body">
                    <form id="form4.php" method="POST">
                        <div class="mb-3">
                            <label for="Select" class="form-label">Recinto</label>
                            <select id="recinto" name="recinto" class="form-select">
                                <option>Seleccione uno</option>
                                <option>Paraiso</option>
                                <option>Turrialba</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="promedio" class="form-label">Promedio</label>
                            <input type="text" class="form-control" id="promedio" name="promedio" placeholder="Promedio...">
                        </div>
                        <div class="mb-3">
                            <label for="Select" class="form-label">Sexo</label>
                            <select id="sexo" name="sexo" class="form-select">
                                <option>Seleccione uno</option>
                                <option>M</option>
                                <option>F</option>

                            </select>
                        </div>
                        <input type="submit" id="Enviar" class="btn btn-primary" name="form4" value="Enviar">
                        <div class="mt-3" id="respuesta">
                        </div>
                    </form>
                    <!--Se recogen los datos del formulario -->
                    <?php
                    include("conexion.php");
                    if (isset($_POST['form4'])) {
                        $sexo = $_POST['sexo'];
                        $promedio = $_POST['promedio'];
                        $recinto = $_POST['recinto'];
                        //Se crean las consultas a la base de datos y se traen las frecuencias
                        $sexoQ = "SELECT SexoAsimilador,SexoAcomodador,SexoDivergente,SexoConvergente FROM `estiloAprendizaje` WHERE sexo = '$sexo'";
                        $sexoResultQ = mysqli_query($con, $sexoQ);
                        $rowSexoQ = mysqli_fetch_array($sexoResultQ);
                        $SexoAsimilador = $rowSexoQ['SexoAsimilador'];
                        $SexoAcomodador = $rowSexoQ['SexoAcomodador'];
                        $SexoDivergente = $rowSexoQ['SexoDivergente'];
                        $SexoConvergente = $rowSexoQ['SexoConvergente'];
                        $promedioQ = "SELECT PromedioAsimilador,PromedioAcomodador,PromedioDivergente,PromedioConvergente FROM `estiloAprendizaje` WHERE promedio = $promedio";
                        $ResultpromedioQ = mysqli_query($con, $promedioQ);
                        $rowpromedioQ = mysqli_fetch_array($ResultpromedioQ);
                        $PromedioAsimilador = $rowpromedioQ['PromedioAsimilador'];
                        $PromedioAcomodador = $rowpromedioQ['PromedioAcomodador'];
                        $PromedioDivergente = $rowpromedioQ['PromedioDivergente'];
                        $PromedioConvergente = $rowpromedioQ['PromedioConvergente'];
                        $RecintoQ = "SELECT RecintoAsimilador,RecintoAcomodador,RecintoDivergente,RecintoConvergente FROM `estiloAprendizaje` WHERE recinto = '$recinto'";
                        $ResultRecintoQ = mysqli_query($con, $RecintoQ);
                        $rowRecintoQ = mysqli_fetch_array($ResultRecintoQ);
                        $RecintoAsimilador = $rowRecintoQ['RecintoAsimilador'];
                        $RecintoAcomodador = $rowRecintoQ['RecintoAcomodador'];
                        $RecintoDivergente = $rowRecintoQ['RecintoDivergente'];
                        $RecintoConvergente = $rowRecintoQ['RecintoConvergente'];
                        //se suman las probabilidades
                        $SumaAsimilador = $SexoAsimilador + $PromedioAsimilador + $RecintoAsimilador;
                        $SumaAcomodador = $SexoAcomodador + $PromedioAcomodador + $RecintoAcomodador;
                        $SumaDivergente = $SexoDivergente + $PromedioDivergente + $RecintoDivergente;
                        $SumaConvergente = $SexoConvergente + $PromedioConvergente + $RecintoConvergente;
                        $arrayS = [$SumaAsimilador, $SumaAcomodador, $SumaDivergente, $SumaConvergente];
                        sort($arrayS, SORT_NUMERIC);
                        $estilo = $arrayS[3];
                        if ($SumaAsimilador == $estilo) {
                            $result = 'Asimilador';
                        } else if ($SumaAcomodador == $estilo) {
                            $result = 'Acomodador';
                        } else if ($SumaDivergente == $estilo) {
                            $result = 'Divergente';
                        } else if ($SumaConvergente == $estilo) {
                            $result = 'Convergente';
                        }
                        //se enviar la mayor probabilidad y su resultado
                        echo '   
                        <br>               
                        <div class="alert alert-primary" role="alert">
                        ' . $result . '
                      </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-sm-4"></div>ds
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="form4.js"></script>
</body>

</html>