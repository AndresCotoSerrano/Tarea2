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
            <a class="navbar-brand" href="/index.php">Principal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                        <a class="nav-link" href="/form1.php">Formulario #1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/form2.php">Formulario #2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/form3.php">Formulario #3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/form4.php">Formulario #4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/form5.php">Formulario #5</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/form6.php">Formulario #6</a>
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
                <div>Con este formulario descubrira el tipo de red</div>
                <div class="card-body">
                    <form id="form6" method="POST">
                        <div class="mb-3">
                            <label for="Select" class="form-label">Fiabilidad</label>
                            <select id="fiabilidad" name="fiabilidad" class="form-select">
                                <option>Seleccione uno</option>
                                <option> 2 </option>
                                <option> 3 </option>
                                <option> 4 </option>
                                <option> 5 </option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Select" class="form-label">Numero de Enlaces</label>
                            <select id="link" name="link" class="form-select">
                                <option>Seleccione uno</option>
                                <option> 7 </option>
                                <option> 8 </option>
                                <option> 9 </option>
                                <option> 10 </option>
                                <option> 11 </option>
                                <option> 12 </option>
                                <option> 13 </option>
                                <option> 14 </option>
                                <option> 15 </option>
                                <option> 16 </option>
                                <option> 17 </option>
                                <option> 18 </option>
                                <option> 19 </option>
                                <option> 20 </option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Select" class="form-label">Capacidad</label>
                            <select id="capacidad" name="capacidad" class="form-select">
                                <option>Seleccione uno</option>
                                <option>Baja </option>
                                <option> Media </option>
                                <option> Alta </option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Select" class="form-label">Costo</label>
                            <select id="costo" name="costo" class="form-select">
                                <option>Seleccione uno</option>
                                <option> Baja </option>
                                <option> Media </option>
                                <option> Alta </option>
                            </select>
                        </div>
                        <input type="submit" id="Enviar" class="btn btn-primary" name="form6" value="Enviar">
                    </form>
                    <?php
                    include("conexion.php");
                    if (isset($_POST['form6'])) {
                        $fiabilidad = $_POST['fiabilidad'];
                        $link = $_POST['link'];
                        $capacidad = $_POST['capacidad'];
                        $costo = $_POST['costo'];
                        //Se crean las consultas a la base de datos y se traen las frecuencias
                        $fiabilidadQ = "SELECT FrecuenciaFiabilidadA,FrecuenciaFiabilidadB FROM `redes` WHERE fiabilidad = $fiabilidad";
                        $fiabilidadResultQ = mysqli_query($con, $fiabilidadQ);
                        $rowFiabilidad = mysqli_fetch_array($fiabilidadResultQ);
                        $FrecuenciaFiabilidadA = $rowFiabilidad['FrecuenciaFiabilidadA'];
                        $FrecuenciaFiabilidadB = $rowFiabilidad['FrecuenciaFiabilidadB'];
                        $linkQ = "SELECT FrecuenciaLinksA,FrecuenciaLinksB FROM `redes` WHERE links = $link";
                        $linkResultQ = mysqli_query($con, $linkQ);
                        $rowLink = mysqli_fetch_array($linkResultQ);
                        $FrecuenciaLinksA = $rowLink['FrecuenciaLinksA'];
                        $FrecuenciaLinksB = $rowLink['FrecuenciaLinksB'];
                        $capacidadQ = "SELECT FrecuenciaCapacidadA,FrecuenciaCapacidadB FROM `redes` WHERE capacidad = '$capacidad'";
                        $capacidadResultQ = mysqli_query($con, $capacidadQ);
                        $rowCapacidad = mysqli_fetch_array($capacidadResultQ);
                        $FrecuenciaCapacidadA = $rowCapacidad['FrecuenciaCapacidadA'];
                        $FrecuenciaCapacidadB = $rowCapacidad['FrecuenciaCapacidadB'];
                        $costoQ = "SELECT FrecuenciaCostoA,FrecuenciaCostoB FROM `redes` WHERE costo = '$costo'";
                        $costoResultQ = mysqli_query($con, $costoQ);
                        $rowCosto = mysqli_fetch_array($costoResultQ);
                        $FrecuenciaCostoA = $rowCosto['FrecuenciaCostoA'];
                        $FrecuenciaCostoB = $rowCosto['FrecuenciaCostoB'];
                        $MultiplicacionA = $FrecuenciaFiabilidadA * $FrecuenciaLinksA * $FrecuenciaCapacidadA * $FrecuenciaCostoA;
                        $MultiplicacionB = $FrecuenciaFiabilidadB * $FrecuenciaLinksB * $FrecuenciaCapacidadB * $FrecuenciaCostoB;

                        if ($MultiplicacionA < $MultiplicacionB) {
                            $result = 'A';
                        } else {
                            $result = 'B';
                        }
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
    <script src="form6.js"></script>
</body>

</html>
