<?php include("resources/views/header.php");
require("conexion.php");
$sexo = $con->query("SELECT  pk_sexo, descripcion FROM `sexo`");
$sel = $con->query("SELECT `periodo`,`sexo` FROM estadias");
?>

<div  class="my-5 mx-3">
    <form action="resEncuestaE.php"  autocomplete="off"  method="POST"  enctype="multipart/form-data">
        <div class="row">
            <div class="col-3">
                <h3 class="text-uppercase">
                    Datos de egresados
                </h3>
            </div>
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
                        Concluido
                    </strong> 
                </span>

            </div>
        </div>
        -->

        <!--PRIMERA FILA-->
        <h4 class="mt-2 text-uppercase">
            Nombre
        </h4>
        <div class="row mt-2">
            <div class="col-2">
                <label for="apellidop">
                    <strong>
                        Apellido Paterno
                    </strong>
                </label>
                <input type="text" class="form-control" id="apellidop" name="apellidop">
            </div>
            
            <div class="col-2">
                <label for="apellidom">
                    <strong>
                        Apellido Materno
                    </strong>
                </label>
                <input type="text" class="form-control" id="apellidom" name="apellidom">
            </div>        

            <div class="col-2">
                <label for="nombre">
                    <strong>
                        Nombre(s)
                    </strong>
                </label>
                <input type="text" class="form-control" id="nombre" name="nombre">
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

        <!--SEGUNDA FILA-->
        <h4 class="mt-2 text-uppercase">
            Domicilio
        </h4>
        <div class="row">
            <div class="col-3">
                <label for="calle">
                    <strong>
                        Calle y número
                    </strong>
                </label>
                <input class="form-control" id="calle" name="calle" type="text">
            </div>
            <div class="col-3">
                <label for="colonia">
                    <strong>
                        Colonia 
                    </strong>
                </label>
                <input id="colonia" class="form-control" name="colonia" type="text">
            </div>
            <div class="col-2">
                <label for="codigopostal">
                    <strong>
                        C.P.
                    </strong>
                </label>
                <input id="codigopostal" class="form-control" name="codigopostal" type="text">
            </div>
        </div>

        <!--TERCERA FILA-->
        <div class="row mt-2">
            <div class="col-3">
                <label for="municipio">
                    <strong>
                        Municipio 
                    </strong>
                </label>
                <input class="form-control" id="municipio" name="municipio" type="text">
            </div>
            <div class="col-3">
                <label for="estado">
                    <strong>
                        Estado
                    </strong>
                </label>  
                <input class="form-control" id="estado" name="estado" type="text">
            </div>
            <div class="col-3">
                <label for="email">
                    <strong>
                        E-mail
                    </strong>
                </label>  
                <input class="form-control" id="email" name="email" type="email">
            </div>
        </div>

        <!--CUARTA FILA-->
        <div class="row mt-2">
            <div class="col-4">
                <label for="nacimiento">
                    <strong>
                        Fecha de nacimiento 
                    </strong>
                </label>
                <input class="form-control" id="nacimiento" name="nacimiento" type="date">
            </div>
            <div class="col-4">
                <label for="facebook">
                    <strong>
                        Facebook
                    </strong>
                </label>  
                <input class="form-control" id="facebook" name="facebook" type="text">
            </div>
        </div>

        <!--QUINTA FILA-->
        <h4 class="mt-2 text-uppercase">
                Teléfonos
        </h4>
        <div class="row mt-2">
            <div class="col-2">
                <label for="celular">
                    <strong>
                        Celular
                    </strong>
                </label>
                <input type="tel" class="form-control" name="celular" id="celular">
            </div>
            <div class="col-2">
                <label for="casa">
                    <strong>
                        Casa
                    </strong>
                </label>
                <input type="tel" class="form-control" name="casa" id="casa">
            </div>
            <div class="col-2">
                <label for="recados">
                    <strong>
                        Recados
                    </strong>
                </label>
                <input type="tel" class="form-control" name="recados" id="recados">
            </div>
            <div class="col-2">
                <label for="nombred">
                    <strong>
                        Nombre
                    </strong>
                </label>
                <input type="text" class="form-control" name="nombred" id="nombred">
            </div>
            <div class="col-2">
                <label for="parentesco">
                    <strong>
                        Parentesco
                    </strong>
                </label>
                <input type="text" class="form-control" name="parentesco" id="parentesco">
            </div>
        </div>

        <!--SEXTA FILA-->
        <h4 class="mt-2 text-uppercase">
            Estatus    
        </h4>
        <span class="mt-2">
            ¿Qué haces actualmente?
        </span>
        <div class="row mt-2">
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    1.- Trabajas
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    2.- Trabajas y estudias
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    3.- Estudias
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    4.- No trabajas
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    5.- Hogar
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
        </div>


        <!--SEPTIMA FILA-->
        <div class="row mt-3">
            <div class="col-2">
            <label for="titulado">
                <span>
                    ¿Estás titulado?       
                </span>
            </label>
            </div>
            <div class="col-2">
                <input type="text" class="form-control" name="titulado" id="titulado">
            </div>
        </div>

        <!--OCTAVA FILA-->
        <div class="row mt-3">
            <div class="col-4">
            <label for="escuela">  
                <span>
                    En caso de continuar estudiando, escribe el nombre de la escuela:
                </span>
            </label>
            </div>
            <div class="col-2">
                    <input type="text" class="form-control" name="escuela" id="escuela" >

            </div>
        </div>

        <!--NOVENA FILA-->
        <span class="mt-2">
            En el caso de los egresados de Ingeniería/Licenciatura, selecciona el posgrado que te encuentres estudiando:
        </span>
        <div class="row mt-2">
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    Maestría
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    Doctorado
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    En el extranjero
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    Otros estudios
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
        </div>

        <!--DECIMA FILA-->
        <h3 class="mt-2 text-uppercase">
            Datos de empleo actual
        </h3>

        <span class="mt-2">
            <strong>
                (Nota: Se llenan los datos del empleo únicamente si seleccionaste la opción 1 y 2 en ESTATUS)
            </strong>
        </span>
        <div class="row mt-2">
            <div class="col-5">
                <label for="empresa">
                    <strong>
                        Nombre de la empresa
                    </strong>
                </label>
                <input type="tel" class="form-control" name="empresa" id="empresa">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-5">
                <label for="direccion">
                    <strong>
                        Dirrecion
                    </strong>
                </label>
                <input type="tel" class="form-control" name="direccion" id="direccion">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-2">
                <label for="puesto">
                    <strong>
                        Puesto
                    </strong>
                </label>
                <input type="tel" class="form-control" name="puesto" id="puesto">
            </div>
            <div class="col-3">
                <label for="telefono">
                    <strong>
                        Teléfono
                    </strong>
                </label>
                <input type="tel" class="form-control" name="telefono" id="telefono">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-5">
                <label for="jefe">
                    <strong>
                        Nombre de tu jefe inmediato
                    </strong>
                </label>
                <input type="tel" class="form-control" name="jefe" id="jefe">
            </div>
        </div>

        <!--ONCEAVA FILA-->
        <h4 class="mt-2 text-uppercase">
            Actualización de datos
        </h4>
        <span class="mt-2">
            <strong>
                Tiempo de colocación en el primer empleo:
            </strong>
        </span>
        <div class="row mt-2">
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    Por estadía
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    3 meses
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    6 meses
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    1 año
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    Más de 1 año
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
        </div>
        <span class="mt-2">
            <strong>
                Localidad del trabajo:
            </strong>
        </span>
        <div class="row mt-2">
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    Zona de influencia (Manzanillo)
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    Interior del Estado
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    Fuera del estado
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    En el Extranjero
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
        </div>
        <span class="mt-2">
            <strong>
                Tipo de Organización:
            </strong>
        </span>
        <div class="row mt-2">
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    Pública
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    Privada
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    Propia
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    Paraestatal
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
        </div>
        <span class="mt-2">
            <strong>
                Tamaño de Organización:
            </strong>
        </span>
        <div class="row mt-2">
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    Micro (0-20)
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    Pequeña (21-50)
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    Mediana (51-100)
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    Macro (+ 100)
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
        </div>
        <span class="mt-2">
            <strong>
                Sueldo mensual hasta:
            </strong>
        </span>
        <div class="row mt-2">
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    $2.500
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    $4.000
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    $6.000
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    $8.000
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    $10.000
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    $12.000
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    (+) $12,000
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
        </div>
        <span class="mt-2">
            <strong>
                Nivel de ocupación:
            </strong>
        </span>
        <div class="row mt-2">
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    Operario
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    Técnico General
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    Técnico Especializado
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    Administrativo
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    Supervisor
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    Gerente
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    Director
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    Auto empleo
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <span>
                    <label for="otro">
                        Otro
                    </label>
                </span>
            </div>
            <div class="col-2">
                <input type="text" class="form-control" name="otro" id="otro">
            </div>
        </div>

        <!--ONCEAVA FILA-->
        <span class="mt-2">
            <strong>
                Ocupación en tu área de competencia:
            </strong>
        </span>
        <div class="row mt-2">
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    Si
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    No
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
        </div>

        <!--TERCEAVA FILA-->
        <span class="mt-2">
            <strong>
                Colocado por la UTeM:
            </strong>
        </span>
        <div class="row mt-2">
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    Si
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    No
                </label>
                <input class="form-check-input rounded-circle" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
        </div>

        <div class="form-group mb-3 mt-2" >
            <div class="g-recapcha" data-sitekey="6LdMaEkhAAAAAIj1YyY1729fAMK8r0YL1ICkrqFH">
            </div>
        </div>

        <div class="form-group mb-3 mt-2" >
            <input type="submit" value="Guardar"  class="btn btn-info">
        </div>
    </form>
</div>



<?php include("resources/views/footer.php")?>

