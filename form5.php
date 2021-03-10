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
                <div>Con este formulario descubrira su tipo de profesor</div>
                <div class="card-body">
                    <form id="form5" method="POST">
                        <div class="mb-3">
                            <label for="Select" class="form-label">Edad</label>
                            <select id="edad" name="edad" class="form-select">
                                <option>Seleccione uno</option>
                                <option value="1">
                                    <=30 </option>
                                <option value="2"> >30<=55 </option>
                                <option value="3"> >55 </option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Select" class="form-label">Sexo</label>
                            <select id="sexo" name="sexo" class="form-select">
                                <option>Seleccione uno</option>
                                <option> Femenino</option>
                                <option> Masculino </option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Select" class="form-label">Autoevaluacion de profesor</label>
                            <select id="autoevaluacion" name="autoevaluacion" class="form-select">
                                <option>Seleccione uno</option>
                                <option value="B"> Principiante </option>
                                <option value="I"> Intermedio </option>
                                <option value="A"> Avanzado </option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Select" class="form-label">Veces impartido</label>
                            <select id="impartido" name="impartido" class="form-select">
                                <option>Seleccione uno</option>
                                <option value="1">Nunca </option>
                                <option value="2"> 1 a 5 veces </option>
                                <option value="3"> Mas de 5 veces </option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Select" class="form-label">Disciplina o area de especializacion</label>
                            <select id="disciplina" name="disciplina" class="form-select">
                                <option>Seleccione uno</option>
                                <option value="DM"> Toma de descisiones </option>
                                <option value="ND"> Redes </option>
                                <option value="O"> Otros </option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Select" class="form-label">Habilidad usando computadoras</label>
                            <select id="pc" name="pc" class="form-select">
                                <option>Seleccione uno</option>
                                <option value="L">Baja</option>
                                <option value="A">Media </option>
                                <option value="H">Alta </option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Select" class="form-label">Que tan seguido usa la tecnologia web para el aprendizaje</label>
                            <select id="aprendizaje" name="aprendizaje" class="form-select">
                                <option>Seleccione uno</option>
                                <option value="N">Nunca </option>
                                <option value="S"> Aveces </option>
                                <option value="O"> con frecuencia </option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Select" class="form-label">Edad</label>
                            <select id="uso" name="uso" class="form-select">
                                <option>Seleccione uno</option>
                                <option value="N">Nunca </option>
                                <option value="S"> Aveces </option>
                                <option value="O"> con frecuencia </option>
                            </select>
                        </div>
                        <input type="submit" id="Enviar" class="btn btn-primary" name="form5" value="Enviar">
                        <div class="mt-3" id="respuesta">
                        </div>
                    </form>
                    <?php
                    include("conexion.php");
                    if (isset($_POST['form5'])) {
                        $edad = $_POST['edad'];
                        $sexo = $_POST['sexo'];
                        $autoevaluacion = $_POST['autoevaluacion'];
                        $impartido = $_POST['impartido'];
                        $disciplina = $_POST['disciplina'];
                        $pc = $_POST['pc'];
                        $aprendizaje = $_POST['aprendizaje'];
                        $uso = $_POST['uso'];
                        //Se crean las consultas a la base de datos y se traen las frecuencias
                        $EdadQ = "SELECT FrecuenciaEdadBeginner,FrecuenciaEdadIntermedio,FrecuenciaEdadAvanzado FROM `profesores` WHERE edad = $edad";
                        $EdadR = mysqli_query($con, $EdadQ);
                        $Redad = mysqli_fetch_array($EdadR);
                        $FrecuenciaEdadBeginner = $Redad['FrecuenciaEdadBeginner'];
                        $FrecuenciaEdadIntermedio = $Redad['FrecuenciaEdadIntermedio'];
                        $FrecuenciaEdadAvanzado = $Redad['FrecuenciaEdadAvanzado'];
                        //
                        $SexoQ = "SELECT FrecuenciaSexoBeginner,FrecuenciaSexoIntermedio,FrecuenciaSexoAvanzado FROM `profesores` WHERE sexo = '$sexo'";
                        $SexoR = mysqli_query($con, $SexoQ);
                        $RSexo = mysqli_fetch_array($SexoR);
                        $FrecuenciaSexoBeginner = $RSexo['FrecuenciaSexoBeginner'];
                        $FrecuenciaSexoIntermedio = $RSexo['FrecuenciaSexoIntermedio'];
                        $FrecuenciaSexoAvanzado = $RSexo['FrecuenciaSexoAvanzado'];
                        //
                        $AutoEvaluacionQ = "SELECT FrecuenciaAutoEvaluacionBeginner,FrecuenciaAutoEvaluacionIntermedio,FrecuenciaAutoEvaluacionAvanzado FROM `profesores` WHERE AutoEvaluacion = '$autoevaluacion'";
                        $AutoEvaluacionR = mysqli_query($con, $AutoEvaluacionQ);
                        $RAutoEvaluacion = mysqli_fetch_array($AutoEvaluacionR);
                        $FrecuenciaAutoEvaluacionBeginner = $RAutoEvaluacion['FrecuenciaAutoEvaluacionBeginner'];
                        $FrecuenciaAutoEvaluacionIntermedio = $RAutoEvaluacion['FrecuenciaAutoEvaluacionIntermedio'];
                        $FrecuenciaAutoEvaluacionAvanzado = $RAutoEvaluacion['FrecuenciaAutoEvaluacionAvanzado'];
                        //
                        $ImpartidoQ = "SELECT FrecuenciaImpartidoBeginner,FrecuenciaImpartidoIntermedio,FrecuenciaImpartidoAvanzado FROM `profesores` WHERE Impartido = $impartido";
                        $ImpartidoR = mysqli_query($con, $ImpartidoQ);
                        $RImpartido = mysqli_fetch_array($ImpartidoR);
                        $FrecuenciaImpartidoBeginner = $RImpartido['FrecuenciaImpartidoBeginner'];
                        $FrecuenciaImpartidoIntermedio = $RImpartido['FrecuenciaImpartidoIntermedio'];
                        $FrecuenciaImpartidoAvanzado = $RImpartido['FrecuenciaImpartidoAvanzado'];
                        //
                        $EspecializadoQ = "SELECT FrecuenciaEspecializadoBeginner,FrecuenciaEspecializadoIntermedio,FrecuenciaEspecializadoAvanzado FROM `profesores` WHERE Especializado = '$disciplina'";
                        $EspecializadoR = mysqli_query($con, $EspecializadoQ);
                        $REspecializado = mysqli_fetch_array($EspecializadoR);
                        $FrecuenciaEspecializadoBeginner = $REspecializado['FrecuenciaEspecializadoBeginner'];
                        $FrecuenciaEspecializadoIntermedio = $REspecializado['FrecuenciaEspecializadoIntermedio'];
                        $FrecuenciaEspecializadoAvanzado = $REspecializado['FrecuenciaEspecializadoAvanzado'];
                        //
                        $pcQ = "SELECT FrecuenciaComputadoraBeginner,FrecuenciaComputadoraIntermedio,FrecuenciaComputadoraAvanzado FROM `profesores` WHERE Computadora = '$pc'";
                        $pcR = mysqli_query($con, $pcQ);
                        $Rpc = mysqli_fetch_array($pcR);
                        $FrecuenciaComputadoraBeginner = $Rpc['FrecuenciaComputadoraBeginner'];
                        $FrecuenciaComputadoraIntermedio = $Rpc['FrecuenciaComputadoraIntermedio'];
                        $FrecuenciaComputadoraAvanzado = $Rpc['FrecuenciaComputadoraAvanzado'];
                        //
                        $WebEQ = "SELECT FrecuenciaWebEBeginner,FrecuenciaWebEIntermedio,FrecuenciaWebEAvanzado FROM `profesores` WHERE WebE = '$aprendizaje'";
                        $WebER = mysqli_query($con, $WebEQ);
                        $RWebE = mysqli_fetch_array($WebER);
                        $FrecuenciaWebEBeginner = $RWebE['FrecuenciaWebEBeginner'];
                        $FrecuenciaWebEIntermedio = $RWebE['FrecuenciaWebEIntermedio'];
                        $FrecuenciaWebEAvanzado = $RWebE['FrecuenciaWebEAvanzado'];
                        //
                        $WebQ = "SELECT FrecuenciaWebBeginner,FrecuenciaWebIntermedio,FrecuenciaWebAvanzado FROM `profesores` WHERE Web = '$uso'";
                        $WebR = mysqli_query($con, $WebQ);
                        $RWeb = mysqli_fetch_array($WebR);
                        $FrecuenciaWebBeginner = $RWeb['FrecuenciaWebBeginner'];
                        $FrecuenciaWebIntermedio = $RWeb['FrecuenciaWebIntermedio'];
                        $FrecuenciaWebAvanzado = $RWeb['FrecuenciaWebAvanzado'];
                        $SumaBeginner = $FrecuenciaEdadBeginner + $FrecuenciaSexoBeginner + $FrecuenciaAutoEvaluacionBeginner + $FrecuenciaImpartidoBeginner + $FrecuenciaEspecializadoBeginner + $FrecuenciaComputadoraBeginner + $FrecuenciaWebEBeginner + $FrecuenciaWebBeginner;
                        $SumaIntermedio = $FrecuenciaEdadIntermedio + $FrecuenciaSexoIntermedio + $FrecuenciaAutoEvaluacionIntermedio + $FrecuenciaImpartidoIntermedio + $FrecuenciaEspecializadoIntermedio + $FrecuenciaComputadoraIntermedio + $FrecuenciaWebEIntermedio + $FrecuenciaWebIntermedio;
                        $SumaAvanzado = $FrecuenciaEdadAvanzado + $FrecuenciaSexoAvanzado + $FrecuenciaAutoEvaluacionAvanzado + $FrecuenciaImpartidoAvanzado + $FrecuenciaEspecializadoAvanzado + $FrecuenciaComputadoraAvanzado + $FrecuenciaWebEAvanzado + $FrecuenciaWebAvanzado;
                        if ($SumaBeginner > $SumaIntermedio && $SumaBeginner > $SumaAvanzado) {
                            $result = 'Beginner';
                        } else if ($SumaIntermedio > $SumaBeginner && $SumaIntermedio > $SumaAvanzado) {
                            $result = 'Intermedio';
                        } else if ($SumaAvanzado > $SumaBeginner && $SumaAvanzado > $SumaIntermedio) {
                            $result = 'Avanzado';
                        }
                        //se compara el mayor y se envia al formulario a mostarlo
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
    <script src="form5.js"></script>
</body>

</html>