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

<body style="background-color: white;">
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
    <div class="row">
        <div class="col-sm">
            <p class="western" align="justify" lang="es-ES">
                <font color="#FF0000">
                    <font size="3"><b>CUAL ES SU ESTILO DE APRENDIZAJE?</b></font>
                </font>
            </p>
            <p class="western" align="justify" lang="es-ES">
                <font color="#000000">
                    <font size="3"><b>Instrucciones:</b></font>
                </font>
            </p>

            <p class="western" align="justify" lang="es-ES">
                <font color="#000000">
                    <font size="3"> </font>
                </font>
            </p>

            <p class="western" align="justify" lang="es-ES">
                <font color="#000000">
                    <font size="3"> Para
                        utilizar el instrumento usted debe conceder una calificación alta a
                        aquellas palabras que mejor caracterizan la forma en que usted
                        aprende, y una calificación baja a las palabras que menos
                        caracterizan su estilo de aprendizaje.</font>
                </font>
            </p>

            <p class="western" lang="es-ES"> Le puede ser difícil seleccionar
                las palabras que mejor describen su estilo de aprendizaje, ya que no
                hay respuestas correctas o incorrectas.</p>

            <p class="western" align="justify" lang="es-ES">
                <font color="#000000">
                    <font size="3"> Todas
                        las respuestas son buenas, ya que el fin del instrumento es describir
                        cómo y no juzgar su habilidad para aprender.</font>
                </font>
            </p>

            <p class="western" align="justify" lang="es-ES">
                <font color="#000000">
                    <font size="3"> De
                        inmediato encontrará nueve series o líneas de cuatro palabras cada una.
                        Ordene de mayor a menor cada serie o juego de cuatro palabras que hay en cada línea,
                        ubicando 4 en la palabra que mejor caracteriza su estilo de
                        aprendizaje, un 3 en la palabra siguiente en cuanto a la
                        correspondencia con su estilo; a la siguiente un 2, y un 1 a la
                        palabra que menos caracteriza su estilo. Tenga cuidado de ubicar un
                        número distinto al lado de cada palabra en la misma línea. </font>
                </font>
            </p>
            <big><big><br>
                    Yo aprendo...</big></big>
            <form name="form1" id="form1" method="POST">
                <table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">
                    <tbody>
                        <tr>
                            <td style="vertical-align: top; width: 25%;">
                                <select name="c1">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                discerniendo<br>
                            </td>
                            <td style="vertical-align: top; width: 25%;">
                                <select name="c2">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                ensayando<br>
                            </td>
                            <td style="vertical-align: top;">
                                <select name="c3">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                involucrándome
                            </td>
                            <td style="vertical-align: top;">
                                <select name="c4">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                practicando
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; width: 25%;">
                                <select name="c5">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                receptivamente
                            </td>
                            <td style="vertical-align: top; width: 25%;">
                                <select name="c6">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                relacionando
                            </td>
                            <td style="vertical-align: top;">
                                <select name="c7">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                analíticamente
                            </td>
                            <td style="vertical-align: top;">
                                <select name="c8">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                imparcialmente
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; width: 25%;">
                                <select name="c9">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                sintiendo
                            </td>
                            <td style="vertical-align: top; width: 25%;">
                                <select name="c10">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                observando
                            </td>
                            <td style="vertical-align: top;">
                                <select name="c11">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                pensando
                            </td>
                            <td style="vertical-align: top;">
                                <select name="c12">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                haciendo
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; width: 25%;">
                                <select name="c13">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                aceptando
                            </td>
                            <td style="vertical-align: top; width: 25%;">
                                <select name="c14">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                arriesgando
                            </td>
                            <td style="vertical-align: top;">
                                <select name="c15">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                evaluando
                            </td>
                            <td style="vertical-align: top;">
                                <select name="c16">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                con cautela
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; width: 25%;">
                                <select name="c17">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                intuitivamente
                            </td>
                            <td style="vertical-align: top; width: 25%;">
                                <select name="c18">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                productivamente
                            </td>
                            <td style="vertical-align: top;">
                                <select name="c19">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                lógicamente
                            </td>
                            <td style="vertical-align: top;">
                                <select name="c20">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                cuestionando
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; width: 25%;">
                                <select name="c21">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                abstracto
                            </td>
                            <td style="vertical-align: top; width: 25%;">
                                <select name="c22">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                observando
                            </td>
                            <td style="vertical-align: top;">
                                <select name="c23">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                concreto
                            </td>
                            <td style="vertical-align: top;">
                                <select name="c24">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                activo
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; width: 25%;">
                                <select name="c25">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                orientado al presente
                            </td>
                            <td style="vertical-align: top; width: 25%;">
                                <select name="c26">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                reflexivamente
                            </td>
                            <td style="vertical-align: top;">
                                <select name="c27">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                orientado hacia el futuro
                            </td>
                            <td style="vertical-align: top;">
                                <select name="c28">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                pragmático
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; width: 25%;">
                                <select name="c29">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                aprendo más de la experiencia
                            </td>
                            <td style="vertical-align: top; width: 25%;">
                                <select name="c30">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                aprendo más de la observación
                            </td>
                            <td style="vertical-align: top;">
                                <select name="c31">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                aprendo más de la conceptualización
                            </td>
                            <td style="vertical-align: top;">
                                <select name="c32">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                aprendo más de la experimentación
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; width: 25%;">
                                <select name="c33">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                emotivo
                            </td>
                            <td style="vertical-align: top; width: 25%;">
                                <select name="c34">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                reservado
                            </td>
                            <td style="vertical-align: top;">
                                <select name="c35">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                racional
                            </td>
                            <td style="vertical-align: top;">
                                <select name="c36">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                abierto
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <input type="submit" id="Enviar" class="btn btn-primary" name="form1" value="Enviar">
                <div id="respuesta"></div>
            </form>
            <?php
            include("conexion.php");
            //recolectamos los datos del formulario
            if (isset($_POST['form1'])) {
                $c1 = $_POST['c1'];
                $c2 = $_POST['c2'];
                $c3 = $_POST['c3'];
                $c4 = $_POST['c4'];
                $c5 = $_POST['c5'];
                $c6 = $_POST['c6'];
                $c7 = $_POST['c7'];
                $c8 = $_POST['c8'];
                $c9 = $_POST['c9'];
                $c10 = $_POST['c10'];
                $c11 = $_POST['c11'];
                $c12 = $_POST['c12'];
                $c13 = $_POST['c13'];
                $c14 = $_POST['c14'];
                $c15 = $_POST['c15'];
                $c16 = $_POST['c16'];
                $c17 = $_POST['c17'];
                $c18 = $_POST['c18'];
                $c19 = $_POST['c19'];
                $c20 = $_POST['c20'];
                $c21 = $_POST['c21'];
                $c22 = $_POST['c22'];
                $c23 = $_POST['c23'];
                $c24 = $_POST['c24'];
                $c25 = $_POST['c25'];
                $c26 = $_POST['c26'];
                $c27 = $_POST['c27'];
                $c28 = $_POST['c28'];
                $c29 = $_POST['c29'];
                $c30 = $_POST['c30'];
                $c31 = $_POST['c31'];
                $c32 = $_POST['c32'];
                $c33 = $_POST['c33'];
                $c34 = $_POST['c34'];
                $c35 = $_POST['c35'];
                $c36 = $_POST['c36'];
                //se realizan las consultas
                $SumaCA = $c7 + $c11 + $c15 + $c19 + $c31 + $c35;
                $SumaEC = $c5 + $c9 + $c13 + $c17 + $c25 + $c29;
                $SumaEA = $c4 + $c12 + $c24 + $c28 + $c32 + $c36;
                $SumaOR = $c2 + $c10 + $c22 + $c36 + $c30 + $c34;
                //
                $CAQ = "SELECT CaAsimilador,CaAcomodador,CaConvergente,CaDivergente FROM `formulario1` WHERE ca = $SumaCA";
                $CAR = mysqli_query($con, $CAQ);
                $RCA = mysqli_fetch_array($CAR);
                $CaAsimilador = $RCA['CaAsimilador'];
                $CaAcomodador = $RCA['CaAcomodador'];
                $CaConvergente = $RCA['CaConvergente'];
                $CaDivergente = $RCA['CaDivergente'];
                //
                $ECQ = "SELECT EcAsimilador,EcAcomodador,EcConvergente,EcDivergente FROM `formulario1` WHERE ec = $SumaEC";
                $ECR = mysqli_query($con, $ECQ);
                $REC = mysqli_fetch_array($ECR);
                $EcAsimilador = $REC['EcAsimilador'];
                $EcAcomodador = $REC['EcAcomodador'];
                $EcConvergente = $REC['EcConvergente'];
                $EcDivergente = $REC['EcDivergente'];
                //
                $EAQ = "SELECT EaAsimilador,EaAcomodador,EaConvergente,EaDivergente FROM `formulario1` WHERE ea = $SumaEA";
                $EAR = mysqli_query($con, $EAQ);
                $REA = mysqli_fetch_array($EAR);
                $EaAsimilador = $REA['EaAsimilador'];
                $EaAcomodador = $REA['EaAcomodador'];
                $EaConvergente = $REA['EaConvergente'];
                $EaDivergente = $REA['EaDivergente'];
                //
                $ORQ = "SELECT OrAsimilador,OrAcomodador,OrConvergente,OrDivergente FROM `formulario1` WHERE ors = $SumaOR";
                $ORR = mysqli_query($con, $ORQ);
                $ROR = mysqli_fetch_array($ORR);
                $OrAsimilador = $ROR['OrAsimilador'];
                $OrAcomodador = $ROR['OrAcomodador'];
                $OrConvergente = $ROR['OrConvergente'];
                $OrDivergente = $ROR['OrDivergente'];

                $MultiplicacionAsimilador=$CaAsimilador*$EcAsimilador*$EcAsimilador*$OrAsimilador*0.184684684684685;
                $MultiplicacionAcomodador=$CaAcomodador*$EcAcomodador*$EcAcomodador*$OrAcomodador*0.310810810810811;
                $MultiplicacionConvergente=$CaConvergente*$EcConvergente*$EcConvergente*$OrConvergente*0.27027027027027;
                $MultiplicacionDivergente=$CaDivergente*$EcDivergente*$EcDivergente*$OrDivergente*0.310810810810811;

                $arrayS = [$MultiplicacionAsimilador, $MultiplicacionAcomodador, $MultiplicacionConvergente, $MultiplicacionDivergente];
                sort($arrayS, SORT_NUMERIC);
                $estilo = $arrayS[3];
                if ($MultiplicacionAsimilador == $estilo) {
                    $result = 'Asimilador';
                } else if ($MultiplicacionAcomodador == $estilo) {
                    $result = 'Acomodador';
                } else if ($MultiplicacionDivergente == $estilo) {
                    $result = 'Divergente';
                } else if ($MultiplicacionConvergente == $estilo) {
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="form1.js"></script>
</body>

</html>
