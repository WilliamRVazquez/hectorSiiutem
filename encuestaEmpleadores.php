<?php include("resources/views/header.php");
require("conexion.php");
$sel = $con->query("SELECT `nombreE`,`nombreR`,`telefono`,`email`,`descripcion`
    FROM encuestae
   
 ");
 
$carreras = $con->query("SELECT  pk_carreras, descripcion FROM `carreras`"); 
$pregunta1 = $con->query("SELECT  pk_opciones, descripcionop FROM `opciones`");
$pregunta2 = $con->query("SELECT  pk_opciones, descripcionop FROM `opciones`"); 
$pregunta3 = $con->query("SELECT  pk_opciones, descripcionop FROM `opciones`"); 
$pregunta4 = $con->query("SELECT  pk_opciones, descripcionop FROM `opciones`"); 
$pregunta5 = $con->query("SELECT  pk_opciones, descripcionop FROM `opciones`"); 
$pregunta6 = $con->query("SELECT  pk_opciones, descripcionop FROM `opciones`"); 
$pregunta7 = $con->query("SELECT  pk_opciones, descripcionop FROM `opciones`"); 
$pregunta8 = $con->query("SELECT  pk_opciones, descripcionop FROM `opciones`"); 

?>

<div  class="my-5 mx-3">
<h1 class="text-center">Cuestionario para medir la satisfaccion de los empleadores cuentan con egresados del nivel de licenciatura laborando en sus instalaciones</h1>

<p class="text-center">Con el proposito de conocer el nivel de satisfaccion de los servicios que los egresados de la Universidad Tecnologica prestan en su empresa y de esta manera poder retroalimentar a la institucion e implementar medidas correctivas en el proceso de enseñanza - aprendizaje de los alumnos</p>

<label for="universidad">   
<strong>
   Universidad Tecnologica de Manzanillo
</strong>
</label>


<form action="resEmpleadores.php"  autocomplete="off"  method="POST"  enctype="multipart/form-data">
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
    <label for="nombreR" class="col-sm-2 col-form-label">
        <strong>
             Nombre del responsable:
        </strong> 
    </label>
    <div class="col-5">
    <input type="text" name="nombreR" placeholder="Nombre del Responsable" class="form-control" >
                    </div>
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
</div>
 
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
          
          <td>¿Comó considera los conocimientos con los que cuenta el egresado de licenciatura para proponer alternativas de solucion a los problemas que se le consultan de acuerdo a la carrera que curso, funcion qu desempeña y/o al puesto?</td>
          
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
          
          <td>¿El conocimiento y habilidad por parte del egresado de Licenciatura, en el manejo del equipo, maquinaria y herramientas de trabajo para desempeñar sus actividades lo considera?</td>
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
          
          <td>¿Comó valora usted el trabajo desempañado por el egresado de Licenciatura en cuanto a calidad y rapidez en los proyectos asignados?</td>
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
          
          <td>La creatividad e innovacion para proponer mejoras a los procesos de la empresa por parte del egresado de Licenciatura, los considera:</td>
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
          
          <td>La capacidad y disposicion con que cuenta el egresado de Licenciatura para trabajar en equipo, los valora:</td>
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
          
          <td>¿El grado del egresado de Licenciatura para poder alcanzar un mejor puesto en su empresa de acuerdo a su nivel academico?</td>
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
          
          <td>¿Considera usted que este profesionista cumple con los requerimientos del sector productivo y social?</td>
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
          
          <td>En general ¿Comó califica el trabajo que desempeña el egresado de licenciatura, en su empresa?</td>
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
      </tbody>
    </table>
  
    <p>Comentarios para mejorar los servicios:</p>
    <textarea class="form-control mt-3"   cols="30" rows="1" name = "comentario" placeholder="Ingrese un mensaje"></textarea>
    
</div>

<div class="form-group mb-3" >
                        <center><input type="submit" value="Guardar"  class="btn btn-info" ></center>
                    </div>
</form>

</div>

<?php include("resources/views/footer.php")?>
