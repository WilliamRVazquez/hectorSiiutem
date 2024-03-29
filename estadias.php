<?php include("resources/views/header.php");
require("conexion.php");
$sexo = $con->query("SELECT  pk_sexo, descripcion FROM `sexo`");
$sel = $con->query("SELECT `periodo`,`sexo` FROM estadias");
?>

<div  class="my-5 mx-3">
    <form action="resEncuestaA.php"  autocomplete="off"  method="POST"  enctype="multipart/form-data">
        <div>
            <h2 class="text-uppercase">
                Datos antes de las estadias
            </h2>
        </div>
        
        <!--
        <div class="row">
            <div class="col-xs-4 col-sm-2">
                <img src="resources/image/user.jpg" style="width: 124px; height: 166px ;">
            </div>
            <div class="col-xs-8 col-sm-10">

                <br>
                <span>
                    <strong>
                        Número de control:
                    </strong>
                    20200419
                </span>
                <br>
                <span>
                    <strong>
                        Nombre:
                    </strong>
                    Héctor Xavier Páez García
                </span>
                <br>
                <span>
                    <strong>
                        Carrera:
                    </strong>
                    Técnico Superior Universitario en Tecnologías de la Información área Desarrollo de Software Multiplataforma
                </span>
                <br>
                <span>
                    <strong>
                        Estado:
                    </strong>
                    <strong class="text-success">
                        Regulares(re-inscritos)
                    </strong> 
                </span>

            </div>
        </div>
        -->

        <!--PRIMERA FILA-->
        <div class="row mt-2">

            <div class="col-3">
                <label for="periodo">
                    <strong>
                        Periodo de Estadia
                    </strong>
                </label>
                <input type="text" class="form-control" id="periodo" name="periodo">
            </div>
            
            <div class="col-3">
                <label for="generacion">
                    <strong>
                        Generación
                    </strong>
                </label>
                <input type="text" class="form-control" id="generacion" name="generacion">
            </div>        
        </div>

        <!--SEGUNDA FILA-->
        <h4 class="mt-2 card-title">
            DATOS PERSONALES
        </h4>
        <div class="row mt-2">
            <div class="col-3">
                <label for="apellidop">
                    <strong>
                        Apellido Paterno 
                    </strong>
                </label>
                <input type="text" class="form-control" id="apellidop" name="apellidop">
            </div>
            <div class="col-3">
                <label for="apellidom">
                    <strong>
                        Apellido Materno 
                    </strong>
                </label>
                <input type="text" class="form-control" id="apellidom" name="apellidom">
            </div>
            <div class="col-3">
                <label for="nombre">
                    <strong>
                        Nombre(s)
                    </strong>
                </label>
                <input type="text" class="form-control" id="nombres" name="nombres">
            </div>
            <div class="col-2">
                <label for="sexo">
                    <strong>
                        Sexo 
                    </strong>
                </label>
                <select name="sexo" class="form-select  mb-3" aria-label="Default select example">
                        <option  selected></option>
                        <?php while($t = $sexo->fetch_assoc()){ ?>
                            <option   value="<?php echo $t['descripcion'] ?>">
                            <?php echo $t['descripcion'] ?>
                        </option>
                        <?php } ?> 
                </select>
            </div>
        </div>

        <!--TERCERA FILA-->
        <div class="row mt-2">
            <div class="col-4">
                <label for="calle">
                    <strong>
                        Calle 
                    </strong>
                </label>
                <input class="form-control" id="calle" name="calle" type="text">
            </div>
            <div class="col-4">
                <label for="colonia">
                    <strong>
                        Colonia 
                    </strong>
                </label>  
                <input class="form-control" id="colonia" name="colonia" type="text">
            </div>
        </div>

        <!--CUARTA FILA-->
        <div class="row mt-2">
            <div class="col-3">
                <label for="municipio">
                    <strong>
                        Municipio
                    </strong>
                </label>
                <input type="text" class="form-control" id="municipio" name="municipio">
            </div>
            <div class="col-3">
                <label for="edo">
                    <strong>
                        Edo.
                    </strong>
                </label>
                <input class="form-control" id="edo" name="edo" type="text">
            </div>
            <div class="col-3">
                <label for="codigopostal">
                    <strong>
                        C.P.
                    </strong>
                </label>
                <input class="form-control" id="codigopostal" name="codigopostal" type="text">
            </div>
        </div>

        <!--QUINTA FILA-->
        <div class="row mt-2">
            <div class="col-3">
                <label for="email">
                    <strong>
                        E-mail
                    </strong>
                </label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="col-3">
                <label for="facebook">
                    <strong>
                        Facebook
                    </strong>
                </label>
                <input type="text" class="form-control" name="facebook" id="facebook">
            </div>
            <div class="col-3">
                <label for="nacimiento">
                    <strong>
                        Fecha de nacimiento
                    </strong>
                </label>
                <input type="date" class="form-control" name="nacimiento" id="nacimiento">
            </div>
        </div>

        <!--SEXTA FILA-->
        <h5 class="mt-2 card-title">
                Teléfonos
            </h5>
        <div class="row mt-2">
            <div class="col-3">
                <label for="celular">
                    <strong>
                        Celular
                    </strong>
                </label>
                <input type="tel" class="form-control" name="celular" id="celular">
            </div>
            <div class="col-3">
                <label for="casa">
                    <strong>
                        Casa
                    </strong>
                </label>
                <input type="tel" class="form-control" name="casa" id="casa">
            </div>
            <div class="col-3">
                <label for="recados">
                    <strong>
                        Recados
                    </strong>
                </label>
                <input type="tel" class="form-control" name="recados" id="recados">
            </div>
        </div>

        <!--SEPTIMA FILA-->
        <h5 class="mt-2 card-title">
            Al concluir la estadia deseas      
        </h5>
            <div class="row mt-2">
                <div class="col-4">
                    <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Incorporarte al mercado laboral
                    </label>
                </div>
                <div class="col-2">
                    <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Continuar estudiando
                    </label>
                </div>
                <div class="col-2">
                    <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Trabajar y estudiar 
                    </label>
                </div>
                <div class="form-group mb-3 mt-2" >
                    <input type="submit" value="Guardar"  class="btn btn-info">
                </div>
        </div>
    </form>
</div>

<?php include("resources/views/footer.php")?>