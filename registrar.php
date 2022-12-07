<?php
require_once('conexion.php');
    
    $NAME =htmlentities(filter_var($_POST['name'],FILTER_SANITIZE_STRING));
    $SURNAME =htmlentities(filter_var($_POST['surname'],FILTER_SANITIZE_STRING));
    $CEDULA =htmlentities(filter_var($_POST['cedula'],FILTER_VALIDATE_INT));
    $USER =htmlentities(filter_var($_POST['user'],FILTER_SANITIZE_STRING));
    $PASSWORD =$_POST['password'];
    $correo =htmlentities(($_POST['email']));
    $IDROLS =$_POST['idrols'];
    $LOGIN =$_POST['login'];
    $GENDER=$_POST['gender'];
    $AREA =htmlentities($_POST['assgned_area']);

 

    //limpiar espacio
   $NAME=trim($NAME);
   $SURNAME=trim($SURNAME);
   $CEDULA=trim($CEDULA);
   $EMAIL=trim($correo);
   $USER=trim($USER);

    //limpieza
    $cadena=preg_replace('/[0-9]+/','', $NAME);
    $cadena2=preg_replace('/[0-9]+/','', $SURNAME);
    $CEDULA=preg_replace('/([a-z|A-Z|@|^|\|s|+|"])+/','', $CEDULA);

    //minuscula
    $NAME=strtolower($cadena);
    $SURNAME=strtolower($cadena2);
    $completo=$NAME.$SURNAME;

    $COMPROB=mysqli_query($conn,"SELECT * FROM user_datos WHERE CEDULA='$CEDULA'");
   $COMPROB=mysqli_num_rows($COMPROB);
   if(filter_var($correo, FILTER_VALIDATE_EMAIL)==false){
    header('location:mostraredit.php?User=true&&Error=Campo');
} else {

    if ($COMPROB > 0) {
        header("location:mostraredit.php?User=true&&Error=Card");
    } else {

        if (empty($NAME) && $NAME == NULL || empty($SURNAME) && $SURNAME == NULL || empty($CEDULA) && $CEDULA == NULL || empty($USER) && $USER == NULL || empty($correo) && $correo == NULL || empty($AREA) && $AREA == NULL) {
            header('location:mostraredit.php?User=true&&Error=Campo');
        } else {
            $COMPROB = mysqli_query($conn, "SELECT `EMAIL` FROM `user_datos` WHERE EMAIL='$EMAIL'");
            $COMPROB = mysqli_num_rows($COMPROB);
            if ($COMPROB > 3) {
                header("location:mostraredit.php?User=true&&Error=Email");
            } else {
                $COMPROB = mysqli_query($conn, "SELECT `USER` FROM `user_datos` WHERE USER='$USER'");
                $COMPROB = mysqli_num_rows($COMPROB);

                if ($COMPROB > 0) {
                    header("location:mostraredit.php?User=true&&Error=User_use");
                } else {
                    //mayuscula
                    $NAME = ucfirst($NAME);
                    $SURNAME = ucfirst($SURNAME);
                    $CEDULA = trim($CEDULA, '.');
                    
                    if ($PASSWORD == null) {
                    
                    
                    mysqli_query($conn, "INSERT INTO `user_datos`(`IDDATOS`, `NAME`, `SURNAME`,`GENDER`,`CEDULA`, `USER`, `PASSWORD`, `EMAIL`, `IDROLS`, `LOGIN`, `ASSIGNED_AREA`,`PASSWORD_ID`) VALUES ( NULL,'$NAME','$SURNAME','$GENDER','$CEDULA','$USER',sha1(12345678),'$correo','$IDROLS','$LOGIN','$AREA','TRUE')");
                    echo "registro exitoso";
                    header("location:mostraredit.php");
                    } else {
                    mysqli_query($conn, "INSERT INTO `user_datos`(`IDDATOS`, `NAME`, `SURNAME`,`GENDER`,`CEDULA`, `USER`, `PASSWORD`, `EMAIL`, `IDROLS`, `LOGIN`, `ASSIGNED_AREA`,`PASSWORD_ID`) VALUES ( NULL,'$NAME','$SURNAME','$GENDER','$CEDULA','$USER',sha1('$PASSWORD'),'$correo','$IDROLS','$LOGIN','$AREA',null)");
                    echo "registro exitos";
                    header("location:mostraredit.php");
                    
                }

            }
        }
    }
}
}


  ?>
  
  
  
 
  
  
  
 
  