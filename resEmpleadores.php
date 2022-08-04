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
    `encuestae`(`nombreE`,`nombreR`,`telefono`,`email`,`fk_carreras`,`pregunta1`,`pregunta2`,`pregunta3`,`pregunta4`,`pregunta5`,`pregunta6`,`pregunta7`,`pregunta8`,`comentario`) 
    VALUES ('$nombreE','$nombreR','$telefono','$email','$carreras','$pregunta1','$pregunta2','$pregunta3','$pregunta4','$pregunta5','$pregunta6','$pregunta7','$pregunta8','$comentario')";
    $result = mysqli_query($con, $query);
    if ($result) {
        header('Location: ./index.php');
    } else {
        echo  $carreras ;
    }
}

?>
