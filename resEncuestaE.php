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
    `egresados`(`apellidop`,`apellidom`,`nombres`,`sexo`,`calle`,`colonia`,`cp`,`municipio`,`estado`,`email`,`facebook`,`celular`,`recados`,`nombrere`,`parentesco`,`titulado`,`escuela`,`empresa`,`direccion`,`puesto`,`telefono`,`nomjefe`,`otro`,`casa`) 
    VALUES ('$apellidop','$apellidom','$nombre','$sexo','$calle','$colonia','$codigopostal','$municipio','$estado','$email','$facebook','$celular','$recados','$nombred','$parentesco','$titulado','$escuela','$empresa','$direccion','$puesto','$telefono','$jefe','$otro','$casa')";
    $result = mysqli_query($con, $query);
    if ($result) {
        header('Location: ./index.php');
    } else {
        echo  $sexo ;
    }
}

?>  