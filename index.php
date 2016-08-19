<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mywak | Home</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/animate.css">


<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- HEADER -->
<header>
    <div class="container">
        <div class="row">
            <div class="cont">
                <div class="col-xs-9 left">
                    <img src="./images/landing2-04.png" class="img-responsive" alt="Responsive image">
                </div>
                <div class="col-xs-3">
                    <div class="row">
                        <div class="ico">
                            <a href="#"> <img src="./images/landing2-07.png" class="img-responsive" alt="Responsive image"></a>
                        </div>
                        <div class="ico">
                            <a href="#"> <img src="./images/landing2-06.png" class="img-responsive" alt="Responsive image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-2" style="padding-top: 75px;">
                <div class="row">
                    <div class="wow infinite pulse pull-right" data-wow-duration="2s" data-wow-delay="3s">
                        <span class="words-banner">want</span>
                    </div>
                </div>
                <div class="row text-center" style="padding-top: 25px;">
                    <div class="wow infinite pulse" data-wow-delay="1s">
                        <span class="words-banner">already</span>
                    </div>
                </div>
                <div class="row">
                    <div class="wow infinite pulse pull-left" style="padding-top: 35px;" data-wow-duration="2s" data-wow-delay="4s">
                        <span class="words-banner">watch</span>
                    </div>
                </div>
            </div>
            <div class="col-xs-8">
                <img src="./images/logo-mywak-01.png" class="img-responsive animated bounceInDown" alt="Responsive image" style="margin:0 auto;">
            </div>
            <div class="col-xs-2" style="padding-top: 75px;">
                <div class="row">
                    <div class="wow infinite pulse pull-left" data-wow-duration="2s" data-wow-delay="3s">
                        <span class="words-banner">know</span>
                    </div>
                </div>
                <div class="row text-center" style="padding-top: 25px;">
                    <div class="wow infinite pulse" data-wow-delay="1s">
                        <span class="words-banner">already</span>
                    </div>
                </div>
                <div class="row" style="padding-top: 35px;" >
                    <div class="wow infinite pulse pull-right" data-wow-duration="2s" data-wow-delay="4s">
                        <span class="words-banner">we</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <img src="./images/landing2-05.png" class="img-responsive animated bounceInUp" alt="Responsive image" style="margin:0 auto;">
            </div>
        </div>
    </div>
</header>
<!-- / HEADER -->
<!--  SECTION-1 -->
<section>
    <?php
    $name = $email = $barrio = $pais = $ciudad = $hwyd = $hltdo = $optradio = $porque = $cual = "";
    $message = 'none';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["correoelectronico"]);
        $barrio = test_input($_POST["barrio"]);
        $pais = test_input($_POST["pais"]);
        $ciudad = test_input($_POST["ciudad"]);
        $hwyd = test_input($_POST["hwyd"]);
        $hltdo = test_input($_POST["hltdo"]);
        $ciudad = test_input($_POST["ciudad"]);
        $optradio = test_input($_POST["optradio"]);
        $porque = test_input($_POST["porque"]);
        $cual = test_input($_POST["cual"]);

        $to = "mywaktest@mailinator.com";
        $subject = "Respuesta formulario";

        $message =
            '<html>' .
            '<head>' .
            '<title>Mywak respuesta</title>'.
            '</head>'.
            '<body>'.
            '<p>Respuesta al formulario del usuario '. $name . '</p>'.
            '<table>'.
            '<tr>'.
            '<th>Nombre</th>'.
            '<th>Correo</th>'.
            '<th>Pais</th>'.
            '<th>Ciudad</th>'.
            '<th>Barrio</th>'.
            '<th>Quien cuida a tu perro?</th>'.
            '<th>Cual?</th>'.
            '<th>Quien pasea a tu perro?</th>'.
            '<th>Te gustaría ganar dinero?</th>'.
            '<th>Porque?</th>'.
            '</tr>'.
            '<tr>'.
            '<td>'.$name.'</td>'.
            '<td>'.$email.'</td>'.
            '<td>'.$pais.'</td>'.
            '<td>'.$ciudad.'</td>'.
            '<td>'.$barrio.'</td>'.
            '<td>'.$hwyd.'</td>'.
            '<td>'.$cual.'</td>'.
            '<td>'.$hltdo.'</td>'.
            '<td>'.$optradio.'</td>'.
            '<td>'.$porque.'</td>'.
            '</tr>'.
            '</table>'.
            '</body>'.
            '</html>'
        ;

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: samantha@amapolazul.com' . "\r\n";

        mail($to,$subject,$message,$headers);
        showAlert();
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function showAlert() {
        echo '<div class="alert alert-success alert-dismissible text-center" role="alert">'.
        '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'.
        'Gracias por responder la encuesta, ya eres un mywak pionero. <br />'.
        'Espera muy pronto nuestro lanzamiento.'.
        '</div>';
    }
    ?>
    <div class="row">
        <div class="col-lg-12 middle-section text-center">
            <h2 class="welcome-text">¡SÉ EL PRIMERO EN CONOCERLO!</h2>
            <p class="texto-p" style="font-weight: bold"><span style="color:#E52F4A">Mywak</span> <span style="color: #5d5d5d"> es un servicio que te encantará</span></p>
        </div>
    </div>
    <div class="jumbotron">
        <div class="container">
            <div class="row text-center">
                <div class="text-center col-sm-12" style="padding-bottom: 30px">
                    <p><span style="color: #5d5d5d">Llena la siguiente encuesta y por ser un</span> <span style="font-weight: bold">mywak pionero</span> <span style="color: #5d5d5d">tendrás beneficios:</span></p>
                </div>
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="col-sm-12">
                                <!-- CONTACT FORM https://github.com/jonmbake/bootstrap3-contact-form -->
                                <form role="form" id="feedbackForm" class="form-horizontal" method="post" action="<?php $_SERVER["PHP_SELF"];?>">
                                    <div class="form-group">
                                        <label for="name" class="col-sm-2 control-label">Nombre</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Digita tu nombre" ng-model="nombre">
                                            <span class="help-block" style="display: none;">Ingresa tu nombre.</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="correoelectronico"class="col-sm-2 control-label">E-Mail</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="correoelectronico" name="correoelectronico" placeholder="Correo electrónico" ng-model="correoelectronico">
                                            <span class="help-block" style="display: none;">Ingresa un correo v&aacute;lido</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pais" class="col-sm-1 control-label">País</label>
                                        <div class="col-sm-3">
                                            <select id="pais" name="pais" class="form-control">
                                                <option value="Selecciona un pais" disabled selected>Tu pais</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Brasil">Brazil</option>
                                                <option value="Chile">Chile</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Guatemala">Honduras</option>
                                                <option value="Guatemala">Nicaragua</option>
                                                <option value="Guatemala">El Salvador</option>
                                                <option value="Guatemala">Haiti</option>
                                                <option value="Guatemala">Uruguay</option>
                                                <option value="Guatemala">Cuba</option>
                                            </select>
                                            <span class="help-block" style="display: none;">Ingresa caracteres</span>
                                        </div>
                                        <label for="ciudad"class="col-sm-1 control-label">Ciudad</label>
                                        <div class="col-sm-3">
                                            <select id="ciudad" name="ciudad" class="form-control">
                                            </select>
                                            <span class="help-block" style="display: none;">Ingresa un correo v&aacute;lido</span>
                                        </div>
                                        <label for="barrio"class="col-sm-1 control-label">Barrio</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="barrio" name="barrio" placeholder="" ng-model="barrio">
                                            <span class="help-block" style="display: none;">Ingresa un barrio</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <select id="hwyd" name="hwyd" class="form-control">
                                                <option value="¿Qui&eacute;n cuida de tu perro cuando sales de casa?" disabled selected>¿QUI&Eacute;N CUIDA DE TU PERRO CUANDO SALES DE CASA?</option>
                                                <option value="GUARDERÍA">GUARDERÍA</option>
                                                <option value="PASEAPERROS">PASEAPERROS</option>
                                                <option value="AMIGO">AMIGO</option>
                                                <option value="ENTRENADOR">ENTRENADOR</option>
                                                <option value="EN CASA SOLO">EN CASA SOLO</option>
                                                <option value="EMPLEADA DEL HOGAR">EMPLEADA DEL HOGAR</option>
                                                <option value="OTRO">OTRO</option>
                                            </select>
                                            <span class="help-block" style="display: none;">Ingresa un correo v&aacute;lido</span>
                                        </div>
                                    </div>
                                    <div class="form-group" id="cual" style="display: none">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="cual" name="cual" placeholder="Cu&aacute;l">
                                            <span class="help-block" style="display: none;">Ingresa un correo v&aacute;lido</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <select id="hltdo" name="hltdo" class="form-control">
                                                <option value="¿Qui&eacute;n saca a tu perro a pasear?" disabled selected>¿QUI&Eacute;N SACA A TU PERRO A PASEAR?</option>
                                                <option value="PASEAPERROS">PASEAPERROS</option>
                                                <option value="YO">YO</option>
                                                <option value="EMPLEADA DEL HOGAR">EMPLEADA DEL HOGAR</option>
                                                <option value="ENTRENADOR">ENTRENADOR</option>
                                                <option value="FAMILIAR">FAMILIAR</option>
                                                <option value="AMIGO">AMIGO</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <span>Si eres amante de los perros, ¿quisieras ganar dinero extra?</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label class="radio-inline"><input type="radio" name="optradio" value="si" ng-model="tiempo">Si</label>
                                            <label class="radio-inline"><input type="radio" name="optradio" value="no" ng-model="tiempo">No</label>
                                            <label class="radio-inline"><input type="radio" name="optradio" value="Tal vez" ng-model="tiempo">Tal vez</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="maybe"class="col-sm-2 control-label" style="padding-bottom: 15px">¿Por qué?</label>
                                            <textarea class="form-control" rows="5" id="porque" name="porque"></textarea>
                                            <span class="help-block" style="display: none;">Ingresa un correo v&aacute;lido</span>
                                        </div>
                                    </div>
                                    <span class="help-block" style="display: none;">Please enter a the security code.</span>
                                    <button type="submit" id="feedbackSubmit" class="btn btn-primary btn-lg" style=" margin-top: 10px;">Enviar</button>
                                </form>
                                <div style="padding-top: 27px; font-size: 12px">
                                    * Los beneficios que se gane el pionero mywak se comunicaran al hacer el lanzamiento formal en medios.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<div class="container text-center">
    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-4" style="padding-top: 33px">
                <p>Nuestros aliados:</p>
            </div>
            <div class="col-sm-4">
                <img src="./images/logo_centro_canino.jpg" class="img-responsive" alt="Responsive image">
            </div>
            <div class="col-sm-4">
                <img src="./images/logo_cruz_roja.jpg" class="img-responsive" alt="Responsive image">
            </div>
        </div>
    </div>
</div>
<footer class="text-center">
</footer>
<!-- / FOOTER --> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>

<script src="js/wow.min.js"></script>
<script src="js/landing.js"></script>
<script src="js/listas.js"></script>
<script>
    new WOW().init();
</script>

</body>
</html>
