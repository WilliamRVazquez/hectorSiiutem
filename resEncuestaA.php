<?php

require ('conexion.php');


foreach ($_POST as $campo => $valor) {
    $var = "$".$campo."='". $valor."';";
    eval($var);
}if($rows > 0) {
    echo 'Correo ya Existe ';
}
else {
    $query = "INSERT INTO 
    `estadias`(`periodo`,`generacion`,`apellidop`,`apellidom`,`nombres`,`sexo`,`calle`,`colonia`,`municipio`,`edo`,`cp`,`email`,`celular`,`casa`,`recados`,`facebook`) 
    VALUES ('$periodo','$generacion','$apellidop','$apellidom','$nombres','$sexo','$calle','$colonia','$municipio','$edo','$codigopostal','$email','$celular','$casa','$recados','$facebook')";
    $result = mysqli_query($con, $query);
    if ($result) {
        header('Location: ./index.php');
    } else {
        echo  $sexo ;
    }
}

?>