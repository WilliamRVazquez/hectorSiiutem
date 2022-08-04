<?php include("resources/views/header.php");
require("conexion.php");
$sel = $con->query("SELECT `id`,`nombreE`,`fk_carreras`,`telefono`,`email`,`pregunta1`,`pregunta2`,`pregunta3`,
`pregunta4`,`pregunta5`,`pregunta6`,`pregunta7`,`pregunta8`,`pregunta9`
  FROM encuestaa
  



");

 

?>

<div class="col ">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre de la Empresa</th>
                                <th scope="col">Carrera del alumno</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Correo Electronico</th>
                                <th scope="col">¿La infraestructura fisica con que fue dotada la Universidad Tecnologica, le pareció?</th>
                                <th scope="col">¿El equipamiento de los laboratorios y talleres le parecio?</th>
                                <th scope="col">¿Los servicios prestados en la Bolsa de trabajo de la Universidad como los considera?</th>
                                <th scope="col">¿El nivel de conocimiento y dominio de los temas mostrados por sus profesores al momento de impartirles la catedra le pareció?</th>
                                <th scope="col">¿El nivel de conocimiento y dominio por parte de los profesores en el manejo de los equipos que se encuentran en los laboratorios y talleres al momento de realizar las practicas que su carrera requiere, lo considerara?</th>
                                <th scope="col">¿La experiencia práctica adquirida por parte suya, derivado de las vistas, practicas en las empresas, las considera?</th>
                                <th scope="col">¿Como considera la preparacion academica adquirida?</th>
                                <th scope="col">Considera que la estadia complemento su preparacion para el mercado laboral?</th>
                                <th scope="col">¿Comó califica la Continuidad de Estudios nivel 5A(licenciaturas e ingenierias)?</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($f = $sel->fetch_assoc()){ ?>
                                <tr>
                                    <td><?php echo $f['id'] ?></td>
                                    <td><?php echo $f['nombreE'] ?></td>
                                    <td><?php echo $f['fk_carreras'] ?></td>
                                    <td><?php echo $f['telefono'] ?></td>
                                    <td><?php echo $f['email'] ?></td>
                                    <td><?php echo $f['pregunta1'] ?></td>
                                    <td><?php echo $f['pregunta2'] ?></td>
                                    <td><?php echo $f['pregunta3'] ?></td>
                                    <td><?php echo $f['pregunta4'] ?></td>
                                    <td><?php echo $f['pregunta5'] ?></td>
                                    <td><?php echo $f['pregunta6'] ?></td>
                                    <td><?php echo $f['pregunta7'] ?></td>
                                    <td><?php echo $f['pregunta8'] ?></td>
                                    <td><?php echo $f['pregunta9'] ?></td>
                                    
                                </tr>
                            <?php } ?> 
                        </tbody>
                    </table>
                </div>
            <div>
<?php include("resources/views/footer.php")?>