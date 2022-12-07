<?php

require_once('conexion.php');
                    
//inicio de la variable sesion o su reanudacion
session_start();

if (isset($_POST["aceptar"])){
    //creacion de la contraseña "nuevo usuario"
    $new = $_POST["nombre"];
    $Passnew = $_POST["pass1"];
    $comprob = mysqli_query($conn, "SELECT USER,PASSWORD_ID FROM user_datos WHERE user='$new' AND PASSWORD_ID='TRUE'");
    $restl = mysqli_num_rows($comprob);
    if ($restl > 0){
        mysqli_query($conn, "UPDATE `user_datos` Set `PASSWORD`=sha1('$Passnew'), `PASSWORD_ID`=NULL Where user='$new'");
        $confi=mysqli_query($conn, "SELECT `USER`,`PASSWORD`,`PASSWORD_ID` FROM `user_datos` WHERE USER='$new' AND `PASSWORD`=sha1('$Passnew')");
        $confi1=mysqli_num_rows($confi);
        if($confi1>0){
           header("Refresh:5;index.php");
            ?>
            <!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
                            <!--===============================================================================================-->
                            <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
                            <!--===============================================================================================-->
                            <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
                            <!--===============================================================================================-->
                            <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
                            <!--===============================================================================================-->
                            <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
                            <!--===============================================================================================-->
                            <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
                            <!--===============================================================================================-->
                            <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
                            <!--===============================================================================================-->
                            <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
                            <!--===============================================================================================-->	
                            <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
                            <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Listo</title>
</head>
<body>
<div class="limiter">
		<div class="container-login100" style="background-image: url('images/fondo.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50" style="padding:20px">
            <div class="login100-form validate-form p-b-33 p-t-5"><h1 class="input100" style="height: 0px; text-align: center;padding:10px;">Usuario creado</h1></div>
</div>

                    </div>
                    </div>
        </body>
        </html>
                    <?php
            
        }else{   
        header("Refresh:5;index.php");
            ?>
            <!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Lo sentimos, No pudimos procesar tu solicitud.​">
    <meta name="description" content="">
    <title>Página 1</title>
    <link rel="stylesheet" href="./screen.css" media="screen">
<link rel="stylesheet" href="./Error.css" media="screen">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="text/script">
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Página 1">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="es" onLoad="alert">
    <header class="u-clearfix u-custom-color-1 u-header u-header" id="sec-6d5c"><div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-image u-image-contain u-image-default u-image-1" src="images/a.png" alt="" data-image-width="265" data-image-height="55">
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-c301">
      <h1 class="u-align-right u-text u-text-default u-text-grey-50 u-text-1">Lo sentimos.</h1>
      <h2 class="u-align-right u-text u-text-default u-text-palette-5-dark-1 u-text-2">No pudimos procesar tu solicitud. </h2>
      <p class="u-align-center-xs u-align-right-lg u-align-right-md u-align-right-sm u-align-right-xl u-text u-text-3">paginas que puede visitar&nbsp;</p>
      <a href="https://www.industriacanaima.gob.ve/" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-1-light-1 u-radius-8 u-btn-1">Principal</a>
      <p class="u-align-left u-text u-text-palette-1-dark-1 u-text-4">En breve momento, sera redireccionado al punto de inicio.</p>
      <div class="u-social-icons u-spacing-10 u-social-icons-1">
        <a class="u-social-url" title="facebook" target="_blank" href="https://www.facebook.com/people/Industria-Canaima-CA/100066669397943/"><span class="u-file-icon u-icon u-social-facebook u-social-icon u-icon-1"><img src="images/2504903-392b77db.png" alt=""></span>
        </a>
        <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/ind_canaima"><span class="u-file-icon u-icon u-social-icon u-social-twitter u-icon-2"><img src="images/3256013.png" alt=""></span>
        </a>
        <a class="u-social-url" title="instagram" target="_blank" href="https://www.instagram.com/ind_canaima/"><span class="u-file-icon u-icon u-social-icon u-social-instagram u-icon-3"><img src="images/2111463.png" alt=""></span>
        </a>
        <a class="u-social-url" target="_blank" data-type="YouTube" title="YouTube" href="https://www.youtube.com/channel/UCx2pRbRRgaVAw0ID_NRRIug"><span class="u-file-icon u-icon u-social-icon u-social-youtube u-icon-4"><img src="images/3938026.png" alt=""></span>
        </a>
      </div>
      <div class="fondo">
      <div class="u-clearfix u-expanded-width u-group-elements u-group-elements-1">
        <img class="u-expanded-width u-image u-image-default u-image-1" src="images/tepuy_blue1.png" alt="" data-image-width="800" data-image-height="100">
        <div class="u-border-2 u-border-custom-color-1 u-container-style u-custom-color-1 u-expanded-width u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <img class="u-hidden-md u-hidden-sm u-hidden-xs u-image u-image-contain u-image-default u-opacity u-opacity-50 u-image-2" src="images/canaima_linux.png" alt="" data-image-width="160" data-image-height="54">
            <img class="u-image u-image-default u-image-3" src="images/gob_banner.png" alt="" data-image-width="336" data-image-height="48">
            <p class="u-align-right u-hidden-md u-hidden-sm u-hidden-xs u-text u-text-white u-text-5"> Parque Nacional Canaima, Estado&nbsp;<br>Bolívar, Venezuela
            </p>
            <img class="u-hidden-md u-hidden-sm u-hidden-xs u-image u-image-contain u-image-default u-opacity u-opacity-65 u-preserve-proportions u-image-4" src="images/canaima_educativa.png" alt="" data-image-width="187" data-image-height="58">
          </div>
        </div>
      </div>
    </section>
  </div>
</body>
</html>
  }
  </script>
            <?php
        }
       
    }else{ 
        header("Refresh:5; index.php");
        ?>
            <!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Lo sentimos, No pudimos procesar tu solicitud.​">
    <meta name="description" content="">
    <title>Página 1</title>
    <link rel="stylesheet" href="screen.css" media="screen">
<link rel="stylesheet" href="Error.css" media="screen">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Página 1">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="es" onLoad="alert">
    <header class="u-clearfix u-custom-color-1 u-header u-header" id="sec-6d5c"><div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-image u-image-contain u-image-default u-image-1" src="images/a.png" alt="" data-image-width="265" data-image-height="55">
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-c301">
      <h1 class="u-align-right u-text u-text-default u-text-grey-50 u-text-1">Lo sentimos</h1>
      <h2 class="u-align-right u-text u-text-default u-text-palette-5-dark-1 u-text-2">No pudimos procesar tu solicitud. </h2>
      <p class="u-align-center-xs u-align-right-lg u-align-right-md u-align-right-sm u-align-right-xl u-text u-text-3">paginas que puede visitar&nbsp;</p>
      <a href="https://www.industriacanaima.gob.ve/" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-1-light-1 u-radius-8 u-btn-1">Principal</a>
      <p class="u-align-left u-text u-text-palette-1-dark-1 u-text-4">En breve momento, sera redireccionado al punto de inicio.</p>
      <div class="u-social-icons u-spacing-10 u-social-icons-1">
        <a class="u-social-url" title="facebook" target="_blank" href="https://www.facebook.com/people/Industria-Canaima-CA/100066669397943/"><span class="u-file-icon u-icon u-social-facebook u-social-icon u-icon-1"><img src="images/2504903-392b77db.png" alt=""></span>
        </a>
        <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/ind_canaima"><span class="u-file-icon u-icon u-social-icon u-social-twitter u-icon-2"><img src="images/3256013.png" alt=""></span>
        </a>
        <a class="u-social-url" title="instagram" target="_blank" href="https://www.instagram.com/ind_canaima/"><span class="u-file-icon u-icon u-social-icon u-social-instagram u-icon-3"><img src="images/2111463.png" alt=""></span>
        </a>
        <a class="u-social-url" target="_blank" data-type="YouTube" title="YouTube" href="https://www.youtube.com/channel/UCx2pRbRRgaVAw0ID_NRRIug"><span class="u-file-icon u-icon u-social-icon u-social-youtube u-icon-4"><img src="images/3938026.png" alt=""></span>
        </a>
      </div>
      <div class="fondo">
      <div class="u-clearfix u-expanded-width u-group-elements u-group-elements-1">
        <img class="u-expanded-width u-image u-image-default u-image-1" src="images/tepuy_blue1.png" alt="" data-image-width="800" data-image-height="100">
        <div class="u-border-2 u-border-custom-color-1 u-container-style u-custom-color-1 u-expanded-width u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <img class="u-hidden-md u-hidden-sm u-hidden-xs u-image u-image-contain u-image-default u-opacity u-opacity-50 u-image-2" src="images/canaima_linux.png" alt="" data-image-width="160" data-image-height="54">
            <img class="u-image u-image-default u-image-3" src="images/gob_banner.png" alt="" data-image-width="336" data-image-height="48">
            <p class="u-align-right u-hidden-md u-hidden-sm u-hidden-xs u-text u-text-white u-text-5"> Parque Nacional Canaima, Estado&nbsp;<br>Bolívar, Venezuela
            </p>
            <img class="u-hidden-md u-hidden-sm u-hidden-xs u-image u-image-contain u-image-default u-opacity u-opacity-65 u-preserve-proportions u-image-4" src="images/canaima_educativa.png" alt="" data-image-width="187" data-image-height="58">
          </div>
        </div>
      </div>
    </section>
  </div>
</body></html>
            <?php
         }    
}else{

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['nombre'];
    $pass = $_POST['pass'];
    
    if (empty($_POST["nombre"]) || empty($_POST["pass"])){
        ?>
        <script type="text/javascript">window.alert("Uno o varios campos estan vacio");
        var opcion = 1;

        if (opcion == 1){
            window.location.replace("./index.php");
            }</script>
            <?php
            }else{
                //espacios vacios
                $name2 = trim($name);
                
                //evitar inyeccion sql
                $result = str_replace(array("#", "'", ";","@", "/", "|", 1,2,3,4,5,6,7,8,9,0, '%'), '', $name2);
                if (strlen($result) < 20){

                    //Para usuarios nuevos
                    $sql0 = mysqli_query($conn, "SELECT USER,PASSWORD FROM user_datos WHERE user='$result' AND PASSWORD =SHA1('$pass') AND PASSWORD_ID='TRUE'");
                    $end0 = mysqli_num_rows($sql0);
                    
                    //usuario administrador
                    $sql = mysqli_query($conn, "SELECT * FROM user_datos WHERE  USER='$result' AND PASSWORD=SHA1('$pass') AND idrols= '1'");
                    $end = mysqli_num_rows($sql);


                    //usuarios
                    $sql2 = mysqli_query($conn, "SELECT * FROM user_datos WHERE user='$result' AND PASSWORD=SHA1('$pass') AND idrols= '2'");
                    $end2 = mysqli_num_rows($sql2);

                    //tecnico
                    $sql3 = mysqli_query($conn, "SELECT * FROM user_datos WHERE user='$result' AND PASSWORD=SHA1('$pass') AND idrols= '3'");
                    $end3 = mysqli_num_rows($sql3);
                    
                    if($end0 > 0){

                        //usuario nuevo
                        ?>
                        <!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
                            <!--===============================================================================================-->
                            <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
                            <!--===============================================================================================-->
                            <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
                            <!--===============================================================================================-->
                            <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
                            <!--===============================================================================================-->
                            <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
                            <!--===============================================================================================-->
                            <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
                            <!--===============================================================================================-->
                            <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
                            <!--===============================================================================================-->
                            <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
                            <!--===============================================================================================-->	
                            <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
                            <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Iniciar sesion</title>
</head>
<body>
<div class="limiter">
		<div class="container-login100" style="background-image: url('images/fondo.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
            
   <form class="login100-form validate-form p-b-33 p-t-5" action="./loginsdk.php" method="post">
   <p style="text-align:center;">Nueva contraseña</p>
    <div class="wrap-input100 validate-input" data-validate = "Enter username">    
    <input type="password" name="pass1"  class="input100"/>
    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
</div>
                         <br>
                         <div class="container-login100-form-btn m-t-32">
                        <input type="hidden" name="nombre" value="<?php echo $name2;?>">
                         <button type="submit" class="login100-form-btn" name="aceptar" >Aceptar</button>
                    </div>
                    </div>
                    </body>
                    </html>
                        <?php
                    
                    }else{
                        if($end2 > 0){
                            //usuarios
                            $fila = mysqli_fetch_array($sql2);
                                    $usuario = $fila['NAME'];
                                    $apellido = $fila['SURNAME'];
                                    $login = $fila['LOGIN'];
                                    $office = $fila['ASSIGNED_AREA'];
                                    $id = $fila['IDDATOS'];
                                    $_SESSION['Users'][0] = $usuario;
                                    $_SESSION['Users'][1] = 1;
                                    $_SESSION['Users'][2] = $login;
                                    $_SESSION['Users'][3] = $office;
                                    $_SESSION['Users'][4] = $id;
                                    $_SESSION['Users'][5] = $apellido;
                                    header("location:dashboard.php");
                                    
                        }else{
                            if($end3 > 0){
                                //tecnicos
                                $fila = mysqli_fetch_array($sql3);
                                $usuario = $fila['NAME'];
                                $login = $fila['LOGIN'];
                                $apellido = $fila['SURNAME'];
                                $office = $fila['ASSIGNED_AREA'];
                                $id = $fila['IDDATOS'];
                                $_SESSION['Users'][0] = $usuario;
                                $_SESSION['Users'][1] = 2;
                                $_SESSION['Users'][2] = $login; 
                                $_SESSION['Users'][3] = $office;
                                $_SESSION['Users'][4] = $id;
                                $_SESSION['Users'][5] = $apellido;
                                header("location:dashboard.php");

                            }else{
                                if($end > 0){
                                    //admin
                                    $fila = mysqli_fetch_array($sql);
                                    $usuario = $fila['NAME'];
                                    $apellido = $fila['SURNAME'];
                                    $login = $fila['LOGIN'];
                                    $office = $fila['ASSIGNED_AREA'];
                                    $id = $fila['IDDATOS'];
                                    $_SESSION['Users'][0] = $usuario;
                                    $_SESSION['Users'][1] = 3;
                                    $_SESSION['Users'][2] = $login; 
                                    $_SESSION['Users'][3] = $office;
                                    $_SESSION['Users'][4] = $id;
                                    $_SESSION['Users'][5] = $apellido;
                                        header("location:dashboard.php");
                                
                                }else{
                                    header("location: index.php?Error=1");
                }
            }
        }
    }
}else{
    ?>
    <script type="text/javascript"> window.alert("Error");</script>
    <?php
    }
}
}else{
    header("location: index.php");
}
}
?>