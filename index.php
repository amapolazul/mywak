<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Agency Template</title>

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
<?php
// define variables and set to empty values
$name = $email = $barrio = $pais = $ciudad = $hwyd = $hltdo = $optradio = "";

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

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

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
            <div class="col-xs-12">
                <img src="./images/landing2-03-02.png" class="img-responsive animated rubberBand" alt="Responsive image" style="margin:0 auto;">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <img src="./images/landing2-05.png" class="img-responsive" alt="Responsive image" style="margin:0 auto;">
            </div>
        </div>
    </div>
</header>
<!-- / HEADER -->
<!--  SECTION-1 -->
<section>
    <div class="row">
        <div class="col-lg-12 middle-section text-center">
            <h2 class="welcome-text">¡SÉ EL PRIMERO EN CONOCERLO!</h2>
            <p><span style="color:red; font-weight: bold">Mywak</span> será un servicio que te encantará  y ser el primero en conocerlo aún más. </p>
        </div>
    </div>
    <div class="jumbotron">
        <div class="container">
            <div class="row text-center">
                <div class="text-center col-sm-12" style="padding-bottom: 30px">
                    <h3>Llena la siguiente encuesta y por ser un <span style="font-weight: bold">mywak pionero</span> tendrás beneficios</h3>
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
                                        <label for="barrio"class="col-sm-1 control-label">Barrio</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="barrio" name="barrio" placeholder="Ingresa tu barrio" ng-model="barrio">
                                            <span class="help-block" style="display: none;">Ingresa un correo v&aacute;lido</span>
                                        </div>
                                        <label for="pais"class="col-sm-1 control-label">País</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="pais" name="pais" placeholder="Ingresa tu país" ng-model="pais">
                                            <span class="help-block" style="display: none;">Ingresa caracteres</span>
                                        </div>
                                        <label for="ciudad"class="col-sm-1 control-label">Ciudad</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ingresa tu ciudad" ng-model="ciudad">
                                            <span class="help-block" style="display: none;">Ingresa un correo v&aacute;lido</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <select id="hwyd" name="hwyd" class="form-control">
                                                <option value="Quien cuida a tu perro cuando sales de casa">QUIEN CUIDA A TU PERRO CUANDO SALES DE CASA</option>
                                                <option value="GUARDERÍA">GUARDERÍA</option>
                                                <option value="PASEAPERROS">PASEAPERROS</option>
                                                <option value="AMIGO">AMIGO</option>
                                                <option value="ENTRENADOR">ENTRENADOR</option>
                                                <option value="EN CASA SOLO">EN CASA SOLO</option>
                                                <option value="DOMÉSTICA">DOMÉSTICA</option>
                                            </select>
                                            <span class="help-block" style="display: none;">Ingresa un correo v&aacute;lido</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <select id="hltdo" name="hltdo" class="form-control">
                                                <option value="Quien saca a tu perro a pasear">¿QUIEN SACA A TU PERRO A PASEAR?</option>
                                                <option value="PASEAPERROS">PASEAPERROS</option>
                                                <option value="YO">YO</option>
                                                <option value="DOMÉSTICA">DOMÉSTICA</option>
                                                <option value="ENTRENADOR">ENTRENADOR</option>
                                                <option value="FAMILIAR">FAMILIAR</option>
                                                <option value="AMIGO">AMIGO</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <span>SI TUVIERAS EL TIEMPO Y POR UN DINERO EXTRA CUIDARÍAS AL PERRO DE UN VECINO</span>
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
                                            <label for="maybe"class="col-sm-1 control-label" style="padding-bottom: 15px">Porque:</label>
                                            <textarea class="form-control" rows="5" id="maybe" ng-model="porque"></textarea>
                                            <span class="help-block" style="display: none;">Ingresa un correo v&aacute;lido</span>
                                        </div>
                                    </div>
                                    <span class="help-block" style="display: none;">Please enter a the security code.</span>
                                    <button type="submit" id="feedbackSubmit" class="btn btn-primary btn-lg" style=" margin-top: 10px;">Enviar</button>
                                </form>
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
            <div class="col-sm-4">
                <h3>Nuestros aliados waklovers</h3>
            </div>
            <div class="col-sm-2 col-sm-offset-2">
                <img src="./images/logo_centro_canino.jpg" class="img-responsive" alt="Responsive image">
            </div>
            <div class="col-sm-2 col-sm-offset-2">
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
</body>
</html>
