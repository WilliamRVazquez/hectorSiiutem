<?php include("resources/views/header.php");
require("conexion.php");
$sel = $con->query("SELECT `periodo`,`generacion`,`apellidop`,`apellidom`,`nombres`,`sexo`,`calle`,`colonia`,`municipio`,`edo`,`cp`,`email`,`celular`,`casa`,`recados`,`facebook`,`id`,`fecha`
  FROM estadias
  



");

 

?>

<div class="col ">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Periodo de Estadia</th>
                                <th scope="col">Generación</th>
                                <th scope="col">Apellido Paterno</th>
                                <th scope="col">Apellido Materno</th>
                                <th scope="col">Nombre(s)</th>
                                <th scope="col">Sexo</th>
                                <th scope="col">Calle</th>
                                <th scope="col">Colonia</th>
                                <th scope="col">Municipio</th>
                                <th scope="col">Edo.</th>
                                <th scope="col">C.P.</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Facebook</th>
                                <th scope="col">Fecha de nacimiento</th>
                                <th scope="col">Celular</th>
                                <th scope="col">Casa</th>
                                <th scope="col">Recados</th>
                                <th scope="col">Al concluir la estadia deseas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($f = $sel->fetch_assoc()){ ?>
                                <tr>
                                    <td><?php echo $f['id'] ?></td>
                                    <td><?php echo $f['fecha'] ?></td>
                                    <td><?php echo $f['periodo'] ?></td>
                                    <td><?php echo $f['generacion'] ?></td>
                                    <td><?php echo $f['apellidop'] ?></td>
                                    <td><?php echo $f['apellidom'] ?></td>
                                    <td><?php echo $f['nombres'] ?></td>
                                    <td><?php echo $f['sexo'] ?></td>
                                    <td><?php echo $f['calle'] ?></td>
                                    <td><?php echo $f['colonia'] ?></td>
                                    <td><?php echo $f['municipio'] ?></td>
                                    <td><?php echo $f['edo'] ?></td>
                                    <td><?php echo $f['cp'] ?></td>
                                    <td><?php echo $f['email'] ?></td>
                                    <td><?php echo $f['facebook'] ?></td>
                                    <td></td>
                                    <td><?php echo $f['celular'] ?></td>
                                    <td><?php echo $f['casa'] ?></td>
                                    <td><?php echo $f['recados'] ?></td>
                                    <td></td>
                                </tr>
                            <?php } ?> 
                        </tbody>
                    </table>
                </div>
            <div>
<?php include("resources/views/footer.php")?>