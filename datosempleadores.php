<?php include("resources/views/header.php");
require("conexion.php");
$sel = $con->query("SELECT `id`,`nombreE`,`nombreR`,`telefono`,`email`,`fk_carreras`,`pregunta1`,`pregunta2`,`pregunta3`,
`pregunta4`,`pregunta5`,`pregunta6`,`pregunta7`,`pregunta8`
  FROM encuestae
  



");

 

?>

<div class="col ">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre de la Empresa</th>
                                <th scope="col">Nombre del responsable</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Correo Electronico</th>
                                <th scope="col">Carrera del alumno</th>
                                <th scope="col">¿Comó considera los conocimientos con los que cuenta el egresado de licenciatura para proponer alternativas de solucion a los problemas que se le consultan de acuerdo a la carrera que curso, funcion qu desempeña y/o al puesto?</th>
                                <th scope="col">¿El conocimiento y habilidad por parte del egresado de Licenciatura, en el manejo del equipo, maquinaria y herramientas de trabajo para desempeñar sus actividades lo considera?</th>
                                <th scope="col">¿Comó valora usted el trabajo desempañado por el egresado de Licenciatura en cuanto a calidad y rapidez en los proyectos asignados?</th>
                                <th scope="col">La creatividad e innovacion para proponer mejoras a los procesos de la empresa por parte del egresado de Licenciatura, los considera:</th>
                                <th scope="col">La capacidad y disposicion con que cuenta el egresado de Licenciatura para trabajar en equipo, los valora:</th>
                                <th scope="col">¿El grado del egresado de Licenciatura para poder alcanzar un mejor puesto en su empresa de acuerdo a su nivel academico?</th>
                                <th scope="col">¿Considera usted que este profesionista cumple con los requerimientos del sector productivo y social?</th>
                                <th scope="col">En general ¿Comó califica el trabajo que desempeña el egresado de licenciatura, en su empresa?</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($f = $sel->fetch_assoc()){ ?>
                                <tr>
                                    <td><?php echo $f['id'] ?></td>
                                    <td><?php echo $f['nombreE'] ?></td>
                                    <td><?php echo $f['nombreR'] ?></td>
                                    <td><?php echo $f['telefono'] ?></td>
                                    <td><?php echo $f['email'] ?></td>
                                    <td><?php echo $f['fk_carreras'] ?></td>
                                    <td><?php echo $f['pregunta1'] ?></td>
                                    <td><?php echo $f['pregunta2'] ?></td>
                                    <td><?php echo $f['pregunta3'] ?></td>
                                    <td><?php echo $f['pregunta4'] ?></td>
                                    <td><?php echo $f['pregunta5'] ?></td>
                                    <td><?php echo $f['pregunta6'] ?></td>
                                    <td><?php echo $f['pregunta7'] ?></td>
                                    <td><?php echo $f['pregunta8'] ?></td>
                                    
                                </tr>
                            <?php } ?> 
                        </tbody>
                    </table>
                </div>
            <div>
<?php include("resources/views/footer.php")?>