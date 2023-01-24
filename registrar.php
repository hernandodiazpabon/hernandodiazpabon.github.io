<?php
include("con_db.php");


if (isset($_POST['registro'])) {
  if (strlen($_POST['Nombre']) >= 1 &&
    strlen($_POST['Apellido']) >= 1 &&
    strlen($_POST['cedula']) >= 1 &&
    strlen($_POST['Email']) >= 1 &&
    strlen($_POST['direccion']) >= 1 &&
    strlen($_POST['lugardevotacion']) >= 1 &&
    strlen($_POST['Referido']) >= 1 ) {

        $nombre= $_POST['Nombre'];
        $apellido= $_POST['Apellido'];
        $Cedula= $_POST['cedula'];
        $email= $_POST['Email'];
        $Direccion= $_POST['direccion'];
        $Lugardevotacion= $_POST['lugardevotacion'];
        $referido= $_POST['Referido'];
        $consulta ="INSERT INTO inscritos(Nombre,Apellido,cedula,Email,direccion,lugardevotacion,Referido) VALUES ('$nombre','$apellido','$Cedula','$email','$Direccion','$Lugardevotacion','$referido')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
            ?>
            <h3 class= "ok"> ¡te inscribiste corerctamente!</h3>
            <?php
        } else{
            ?>
            <h3 class="bad"> ¡no te has inscrito! </h3>
            <?php
        }
    }  else {
        ?>
            <h3 class="bad"> ¡favor complete campos!</h3>
            <?php

        }
 
    }


?>