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
    <br>
    <div class="wrap-input100 validate-input" data-validate = "Enter username">
    <input type="text" class="input100" name="nombre" placeholder="Usuario" autocomplete="on" autofocus/>
    <span class="focus-input100" data-placeholder="&#xe82a;"></span>
</div>
<div class="wrap-input100 validate-input" data-validate="Enter password">
    <input type="password" class="input100" name="pass" placeholder="contraseña" autocomplete="on"/>
    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
</div>
    <?php
    if(isset($_GET["Error"]) && $_GET["Error"] == 1)
    {
       echo "<br><div style='color:red' align='center'>Usuario o contraseña invalido </div>";
    }
?>
    <div class="container-login100-form-btn m-t-32">
    <button class="login100-form-btn" type="submit">aceptar</button>
   </form>
</div>
</body>
</html>
