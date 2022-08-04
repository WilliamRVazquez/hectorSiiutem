<?php include("resources/views/header.php");
require("conexion.php");
$sel = $con->query("SELECT `nombreE`,`descripcion`,`telefono`,`email`,`descripcion`
    FROM encuestaa
");
 
$carreras =  $con->query("SELECT  pk_carreras, descripcion FROM `carreras`"); 
$pregunta1 = $con->query("SELECT  pk_opciones, descripcionop FROM `opciones`");
$pregunta2 = $con->query("SELECT  pk_opciones, descripcionop FROM `opciones`"); 
$pregunta3 = $con->query("SELECT  pk_opciones, descripcionop FROM `opciones`"); 
$pregunta4 = $con->query("SELECT  pk_opciones, descripcionop FROM `opciones`"); 
$pregunta5 = $con->query("SELECT  pk_opciones, descripcionop FROM `opciones`"); 
$pregunta6 = $con->query("SELECT  pk_opciones, descripcionop FROM `opciones`"); 
$pregunta7 = $con->query("SELECT  pk_opciones, descripcionop FROM `opciones`"); 
$pregunta8 = $con->query("SELECT  pk_opciones, descripcionop FROM `opciones`"); 
$pregunta9 = $con->query("SELECT  pk_opciones, descripcionop FROM `opciones`"); 
?>
<div  class="my-5 mx-3">
<h2 class="text-center">Cuestionario para medir la satisfaccion de los Egresados  de la Universidad Tecnologica <br> 5A Licenciatura(Ingenierias y licenciaturas)</h2>

<p class="text-center">Con el proposito de conocer la opinion de los egresados de la Universidad Tecnologica acerca de la atencion, <br> servicios y preparacion academica que recibieron de su permanencia en la institucion.</p>
<br>
<label for="universidad">   
<strong>
   Universidad Tecnologica de Manzanillo
</strong>
</label>
<br>
<br>
<form action="resEgresados.php"  autocomplete="off"  method="POST"  enctype="multipart/form-data">
  <div class="form-group row">
    <label for="nombreE" class="col-sm-2 col-form-label">
        <strong>
            Nombre de la empresa:
        </strong>
    </label>
    <div class="col-5 mt-1" >
                        <input type="text" name="nombreE" placeholder="Nombre de la empresa" class="form-control" >
                    </div>
  </div>
  <div class="form-group row mt-2">
    <label for="carreras" class="col-sm-2 col-form-label">
        <strong>
        Carrera del Alumno:
        </strong> 
    </label>
    
    <div class="col-5">
    <select name="carreras" class="form-control" aria-label="Default select example">
                        <option  selected>Carreras</option>
                        <?php while($t = $carreras->fetch_assoc()){ ?>
                            <option   value="<?php echo $t['descripcion'] ?>">
                            <?php echo $t['descripcion'] ?>
                        </option>
                        <?php } ?> 
                    </select>
  </div>
  <div class="form-group row mt-2">
    <label for="telefono" class="col-sm-2 col-form-label">
        <strong>
             Telefono:
        </strong> 
    </label>
    <div class="col-5">
    <input type="tel" name="telefono" placeholder="Telefono" class="form-control" >
                    </div>
  </div>
  <div class="form-group row mt-2">
    <label for="email" class="col-sm-2 col-form-label">
        <strong>
            Correo Electronico:
        </strong> 
    </label>
    <div class="col-5">
    <input type="email" name="email" placeholder="Email"  class="form-control" >                    
    </div>


</div>
<br>
<p class="text-center">Le agradecemos proporcione la informacion solicitada en este cuestionario que sera de caracter estrictamente confidencial. Señala con el numero tu nivel de satisfaccion de acuerdo a la siguiente escala de valores: Muy Bien MB=5; Bien B=4; Regular R=3; Mal M=2 y Pesimo P=1; o bien No Aplica NA=0. Favor de no dejar los espacios sin respuesta</p>

<table class="table">
      <thead>
        <tr>
          <th>No.</th>
          <th class="text-center">Pregunta</th>
          <th>Opcion*</th>
          
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          
          <td>¿La infraestructura fisica con que fue dotada la Universidad Tecnologica, le pareció?</td>
          <td>
          <select name="pregunta1" class="form-select  mb-3" aria-label="Default select example">
                        <option  selected></option>
                        <?php while($t = $pregunta1->fetch_assoc()){ ?>
                            <option   value="<?php echo $t['descripcionop'] ?>">
                            <?php echo $t['descripcionop'] ?>
                        </option>
                        <?php } ?> 
                    </select>
            </td>
        </tr>
        <th scope="row">2</th>
          
          <td>¿El equipamiento de los laboratorios y talleres le parecio?</td>
          <td>
          <select name="pregunta2" class="form-select  mb-3" aria-label="Default select example">
                        <option  selected></option>
                        <?php while($t = $pregunta2->fetch_assoc()){ ?>
                            <option   value="<?php echo $t['descripcionop'] ?>">
                            <?php echo $t['descripcionop'] ?>
                        </option>
                        <?php } ?> 
                    </select>
                </td>
        </tr>
        <th scope="row">3</th>
          
          <td>¿Los servicios prestados en la Bolsa de trabajo de la Universidad como los considera?</td>
          <td>
          <select name="pregunta3" class="form-select  mb-3" aria-label="Default select example">
                        <option  selected></option>
                        <?php while($t = $pregunta3->fetch_assoc()){ ?>
                            <option   value="<?php echo $t['descripcionop'] ?>">
                            <?php echo $t['descripcionop'] ?>
                        </option>
                        <?php } ?> 
                    </select>
        </td>
        </tr>
        <th scope="row">4</th>
          
          <td>¿El nivel de conocimiento y dominio de los temas mostrados por sus profesores al momento de impartirles la catedra le pareció?</td>
          <td>
          <select name="pregunta4" class="form-select  mb-3" aria-label="Default select example">
                        <option  selected></option>
                        <?php while($t = $pregunta4->fetch_assoc()){ ?>
                            <option   value="<?php echo $t['descripcionop'] ?>">
                            <?php echo $t['descripcionop'] ?>
                        </option>
                        <?php } ?> 
                    </select>
        </td>
        </tr>
        <th scope="row">5</th>
          
          <td>¿El nivel de conocimiento y dominio por parte de los profesores en el manejo de los equipos que se encuentran en los laboratorios y talleres al momento de realizar las practicas que su carrera requiere, lo considerara?</td>
          <td>
          <select name="pregunta5" class="form-select  mb-3" aria-label="Default select example">
                        <option  selected></option>
                        <?php while($t = $pregunta5->fetch_assoc()){ ?>
                            <option   value="<?php echo $t['descripcionop'] ?>">
                            <?php echo $t['descripcionop'] ?>
                        </option>
                        <?php } ?> 
                    </select>
        </td>
        </tr>
        <th scope="row">6</th>
          
          <td>¿La experiencia práctica adquirida por parte suya, derivado de las vistas, practicas en las empresas, las considera?</td>
          <td>
          <select name="pregunta6" class="form-select  mb-3" aria-label="Default select example">
                        <option  selected></option>
                        <?php while($t = $pregunta6->fetch_assoc()){ ?>
                            <option   value="<?php echo $t['descripcionop'] ?>">
                            <?php echo $t['descripcionop'] ?>
                        </option>
                        <?php } ?> 
                    </select>
        </td>
        </tr>
        <th scope="row">7</th>
          
          <td>¿Como considera la preparacion academica adquirida?</td>
          <td>
          <select name="pregunta7" class="form-select  mb-3" aria-label="Default select example">
                        <option  selected></option>
                        <?php while($t = $pregunta7->fetch_assoc()){ ?>
                            <option   value="<?php echo $t['descripcionop'] ?>">
                            <?php echo $t['descripcionop'] ?>
                        </option>
                        <?php } ?> 
                    </select>
        </td>
        </tr>
        <th scope="row">8</th>
          
          <td>Considera que la estadia complemento su preparacion para el mercado laboral?</td>
          <td>
          <select name="pregunta8" class="form-select  mb-3" aria-label="Default select example">
                        <option  selected></option>
                        <?php while($t = $pregunta8->fetch_assoc()){ ?>
                            <option   value="<?php echo $t['descripcionop'] ?>">
                            <?php echo $t['descripcionop'] ?>
                        </option>
                        <?php } ?> 
                    </select>
        </td>
        </tr>
        <th scope="row">9</th>
          
          <td>¿Comó califica la Continuidad de Estudios nivel 5A(licenciaturas e ingenierias)?</td>
          <td>
          <select name="pregunta9" class="form-select  mb-3" aria-label="Default select example">
                        <option  selected></option>
                        <?php while($t = $pregunta9->fetch_assoc()){ ?>
                            <option   value="<?php echo $t['descripcionop'] ?>">
                            <?php echo $t['descripcionop'] ?>
                        </option>
                        <?php } ?> 
                    </select>
        </td>
        </tr>
      </tbody>
    </table>
    <br>
    <p>Comentarios para mejorar los servicios:</p>
    <textarea class="form-control mt-3"   cols="30" rows="1" name="comentario" placeholder="Ingrese un mensaje"></textarea>
    
</div>
<br>
<div class="form-group mb-3" >
                        <center><input type="submit" value="Guardar"  class="btn btn-info" ></center>
                    </div>
</form>

</div>
<?php include("resources/views/footer.php")?>