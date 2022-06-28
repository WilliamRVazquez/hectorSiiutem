<?php include("resources/views/header.php")?>

<div  class="my-4" style="margin-left: 20px;">
    <div>
        <div>
            <h3>
                Datos antes de las estadias
            </h3>
        </div>
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

        <div class="d-flex" style="margin-top: 10px;">

                <span style="margin-left: 150px ;">
                    <strong>
                        Fecha
                    </strong>
                </span>

                <input type="text" style="width: 120px; height: 25px ; margin-left: 10px ;">

                <span style="margin-left: 100px ;">
                    <strong>
                        Periodo de Estadia
                    </strong>
                </span>

                <input type="text" style="width: 120px; height: 25px ; margin-left: 10px ;">

                <span style="margin-left: 100px ;">
                    <strong>
                        Generación
                    </strong>       
                </span>

                <input type="text" style="width: 120px; height: 25px ; margin-left: 10px ;">
        </div>

        <h4 class="mt-4">DATOS PERSONALES.</h4>
        <!--PRIMERA FILA-->
        <div class="row">
            <div class="col">
                <label for="lastNameP">Apellido Paterno: </label>
                <input class="form-control" id="lastNameP" name="lastNameP" type="text">
            </div>
            <div class="col">
                <label for="lastNameM">Apellido Materno: </label>
                <input id="lastNameM" class="form-control" name="lastNameM" type="text">
            </div>
            <div class="col">
                <label for="name">Nombre(s): </label>
                <input id="name" class="form-control" name="name" type="text">
            </div>
            <div class="col-2">
                <label for="sex">Sexo: </label>
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
        <div class="row mt-4">
            <div class="col-4">
                <label class="col-sm-2 col-form-label" for="street">Calle* </label>
                <input class="form-control" id="street" name="street" type="text">
            </div>
            <div class="col-4">
                <label class="col-sm-2 col-form-label" for="colonia">Colonia* </label>  
                <input class="form-control" id="colonia" name="colonia" type="text">
            </div>
        </div>
</div>

<?php include("resources/views/footer.php")?>