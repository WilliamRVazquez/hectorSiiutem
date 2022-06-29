<?php include("resources/views/header.php")?>

<div  class="my-5 mx-3">
        <div class="row">
            <div class="col-2">
                <h2 class="card-title">
                    Datos de egresados
                </h2>
            </div>

            <div class="col-2" style="margin-left: 313px;">
                <label for="fecha">
                    <strong>
                        Fecha
                    </strong>
                </label>
                <input type="date" class="form-control" id="fecha" name="fecha">
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
        <h4 class="mt-2 card-title">
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
                <label for="sex">
                    <strong>
                        Sexo 
                    </strong>
                </label>
                <select class="form-select" id="sex" name="sex">
                    <option value="Hombre">
                        Hombre
                    </option>
                    <option value="Mujer">
                        Mujer
                    </option>
                    <option value="Otro">
                        Otro
                    </option>
                </select>
            </div>
        </div>

        <!--SEGUNDA FILA-->
        <h4 class="mt-2 card-title">
            Domicilio
        </h4>
        <div class="row">
            <div class="col-3">
                <label for="calle">
                    <strong>
                        Calle y número
                    </strong>
                </label>
                <input class="form-control" id="calle" name="lastNameP" type="calle">
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
        <h4 class="mt-2 card-title">
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
        <h4 class="mt-2 card-title">
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
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    2.- Trabajas y estudias
                </label>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    3.- Estudias
                </label>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    4.- No trabajas
                </label>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    5.- Hogar
                </label>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
        </div>


        <!--SEPTIMA FILA-->
        <div class="row mt-3">
            <div class="col-2">
                <span>
                    ¿Estás titulado?
                </span>
            </div>
            <div class="col-2">
                <input type="text" class="form-control" name="respuesta" id="respuesta">
            </div>
        </div>

        <!--OCTAVA FILA-->
        <div class="row mt-3">
            <div class="col-4">
                <span>
                    En caso de continuar estudiando, escribe el nombre de la escuela:
                </span>
            </div>
            <div class="col-2">
                <input type="text" class="form-control" name="respuesta2" id="respuesta2" >
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
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    Doctorado
                </label>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    En el extranjero
                </label>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
            <div class="col-2">
                <label class="form-check-label" for="flexRadioDefault1">
                    Otros estudios
                </label>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="margin-left: 5px;">
            </div>
        </div>

        <!--DECIMA FILA-->
        <h3 class="mt-2 card-title">
            Datos de empleo actual
        </h3>

        <span class="mt-2">
            <strong>
                (Nota: Se llenan los datos del empleo únicamente si seleccionaste la opción 1 y 2 en ESTATUS)
            </strong>
        </span>
</div>

<?php include("resources/views/footer.php")?>

