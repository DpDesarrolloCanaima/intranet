<?php

  include('conexion.php');

   $IDDATOS=htmlentities($_POST['IDDATOS']);
   $NAME=htmlentities($_POST['NAME']);
   $SURNAME=htmlentities($_POST['SURNAME']);
   $CEDULA = htmlentities($_POST['CEDULA']);
  $PASSWORD=htmlentities($_POST['PASSWORD']);
  $GENDER=htmlentities($_POST['GENDER']);
   $EMAIL=filter_var($_POST['EMAIL'], FILTER_SANITIZE_EMAIL);
   $LOGIN=$_POST['LOGIN'];
   $IDROLS=filter_var(($_POST['IDROLS']), FILTER_SANITIZE_NUMBER_INT);
   $ASSIGNED_AREA=htmlentities($_POST['ASSIGNED_AREA']);

   //limpiar espacio
   $NAME=trim($NAME);
   $SURNAME=trim($SURNAME);
   $CEDULA=trim($CEDULA);
   $EMAIL=trim($EMAIL);
   

   //algunas variables
   $NAME=preg_replace('/[0-9]+/','', $NAME);
$SURNAME = preg_replace('/[0-9]+/', '', $SURNAME);   
   $EMAIL=preg_replace('/[0-9]+/','', $EMAIL);
   //mayuscula
   $NAME=ucfirst($NAME);
  $SURNAME=ucfirst($SURNAME);

   $COMPROB=mysqli_query($conn,"SELECT * FROM user_datos WHERE CEDULA='$CEDULA' AND IDDATOS NOT IN ($IDDATOS)");
   $COMPROB=mysqli_num_rows($COMPROB);

   if($COMPROB>0){
    header("location:mostraredit.php?Edit={$IDDATOS}&&Error=Cedula");
} else {
  $COMPROB = mysqli_query($conn, "SELECT * FROM `user_datos` WHERE EMAIL='$EMAIL' AND IDDATOS NOT IN ($IDDATOS)");
  $COMPROB = mysqli_num_rows($COMPROB);
  if ($COMPROB > 3) {
    header("location:mostraredit.php?Edit={$IDDATOS}&&Error=Correo");
  } else {

    if (empty($_POST['NAME']) && ($_POST['NAME'] == null) or empty($_POST['SURNAME']) && ($_POST['SURNAME'] == null) or empty($_POST['CEDULA']) && ($_POST['CEDULA'] == null) || empty($_POST['EMAIL']) && ($_POST['EMAIL'] == null) || empty($_POST['ASSIGNED_AREA']) && ($_POST['ASSIGNED_AREA'] == null)) {
      header("location:mostraredit.php?Edit={$IDDATOS}&&Error=Campo");
    } else {
      if (empty($_POST['PASSWORD']) && $_POST['PASSWORD'] == null) {
        if (empty($_POST['confirmation'])) {
          mysqli_query($conn, "UPDATE `user_datos` SET `NAME` ='$NAME',`SURNAME`='$SURNAME',`GENDER`='$GENDER',`CEDULA` ='$CEDULA',`EMAIL` = '$EMAIL',`IDROLS` = '$IDROLS', `LOGIN`='$LOGIN',`ASSIGNED_AREA` = '$ASSIGNED_AREA'  WHERE `IDDATOS`= '$IDDATOS'") or die("error al actualizar");
          header('location:mostraredit.php');

        } else {
          mysqli_query($conn, "UPDATE `user_datos` SET `NAME` ='$NAME',`SURNAME`='$SURNAME',`GENDER`='$GENDER',`CEDULA` ='$CEDULA',`PASSWORD` = sha1(12345678),`EMAIL` = '$EMAIL',`IDROLS` = '$IDROLS', `LOGIN`='$LOGIN',`ASSIGNED_AREA` = '$ASSIGNED_AREA',`PASSWORD_ID`='TRUE'  WHERE `IDDATOS`= '$IDDATOS'") or die("error al actualizar");
          header('location:mostraredit.php');
        }


      } else {
        mysqli_query($conn, "UPDATE `user_datos` SET `NAME` ='$NAME',`SURNAME`='$SURNAME',`GENDER`='$GENDER',`CEDULA` ='$CEDULA',
   `PASSWORD` = sha1('$PASSWORD'),`EMAIL` = '$EMAIL',`IDROLS` = '$IDROLS',`LOGIN`='$LOGIN', `ASSIGNED_AREA` = '$ASSIGNED_AREA', `PASSWORD_ID`=NULL WHERE `IDDATOS`= '$IDDATOS'") or die("error al actualizar");
        header('location:mostraredit.php');

      }
    }
  }
}
?>