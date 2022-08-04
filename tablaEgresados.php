<?php include("resources/views/header.php");
require("conexion.php");
$sel = $con->query("SELECT `apellidop`,`apellidom`,`nombres`,`sexo`,`calle`,`colonia`,`cp`,`municipio`,`estado`,`email`,`facebook`,`celular`,`recados`,`nombrere`,`parentesco`,`titulado`,`escuela`,`empresa`,`direccion`,`puesto`,`telefono`,`nomjefe`,`otro`,`casa`,`id`,`fecha`
  FROM egresados
  



");

 

?>

<div class="col ">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Apellido Paterno</th>
                                <th scope="col">Apellido Materno</th>
                                <th scope="col">Nombre(s)</th>
                                <th scope="col">Sexo</th>
                                <th scope="col">Calle y número</th>
                                <th scope="col">Colonia</th>
                                <th scope="col">C.P.</th>
                                <th scope="col">Municipio</th>
                                <th scope="col">Estado</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Fecha de nacimiento</th>
                                <th scope="col">Facebook</th>
                                <th scope="col">Celular</th>
                                <th scope="col">Casa</th>
                                <th scope="col">Recados</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Parentesco</th>
                                <th scope="col">¿Qué haces actualmente?</th>
                                <th scope="col">¿Estás titulado?</th>
                                <th scope="col">En caso de continuar estudiando, escribe el nombre de la escuela:</th>
                                <th scope="col">En el caso de los egresados de Ingeniería/Licenciatura, selecciona el posgrado que te encuentres estudiando:</th>
                                <th scope="col">Nombre de la empresa</th>
                                <th scope="col">Dirrecion</th>
                                <th scope="col">Puesto</th>
                                <th scope="col">Teléfono</th>
                                <th scope="col">Nombre de tu jefe inmediato</th>
                                <th scope="col">Tiempo de colocación en el primer empleo:</th>
                                <th scope="col">Localidad del trabajo:  </th>
                                <th scope="col">Tipo de Organización:</th>
                                <th scope="col">Tamaño de Organización:</th>
                                <th scope="col">Sueldo mensual hasta:</th>
                                <th scope="col">Nivel de ocupación:</th>
                                <th scope="col">Otro</th>
                                <th scope="col">Ocupación en tu área de competencia:</th>
                                <th scope="col">Colocado por la UTeM:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($f = $sel->fetch_assoc()){ ?>
                                <tr>
                                    <td><?php echo $f['id'] ?></td>
                                    <td><?php echo $f['fecha'] ?></td>
                                    <td><?php echo $f['apellidop'] ?></td>
                                    <td><?php echo $f['apellidom'] ?></td>
                                    <td><?php echo $f['nombres'] ?></td>
                                    <td><?php echo $f['sexo'] ?></td>
                                    <td><?php echo $f['calle'] ?></td>
                                    <td><?php echo $f['colonia'] ?></td>
                                    <td><?php echo $f['cp'] ?></td>
                                    <td><?php echo $f['municipio'] ?></td>
                                    <td><?php echo $f['estado'] ?></td>
                                    <td><?php echo $f['email'] ?></td>
                                    <td></td>
                                    <td><?php echo $f['facebook'] ?></td>
                                    <td><?php echo $f['celular'] ?></td>
                                    <td><?php echo $f['casa'] ?></td>
                                    <td><?php echo $f['recados'] ?></td>
                                    <td><?php echo $f['nombrere'] ?></td>
                                    <td><?php echo $f['parentesco'] ?></td>
                                    <td></td>
                                    <td><?php echo $f['titulado'] ?></td>
                                    <td><?php echo $f['escuela'] ?></td>
                                    <td></td>
                                    <td><?php echo $f['empresa'] ?></td>
                                    <td><?php echo $f['direccion'] ?></td>
                                    <td><?php echo $f['puesto'] ?></td>
                                    <td><?php echo $f['telefono'] ?></td>
                                    <td><?php echo $f['nomjefe'] ?></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><?php echo $f['otro'] ?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            <?php } ?> 
                        </tbody>
                    </table>
                </div>
            <div>
<?php include("resources/views/footer.php")?>