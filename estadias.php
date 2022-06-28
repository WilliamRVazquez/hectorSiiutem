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

        <div>
            <div style="margin-top: 10px;">
                <h4>Datos personales</h4>
            </div>
            <div style="margin-top: 10px;">

                <span style="margin-left: 10px ;">
                    <strong>
                        Apellido Paterno
                    </strong>
                </span>

                <input type="text" style="width: 120px; height: 25px ; margin-left: 10px ;">

                <span style="margin-left: 100px ;">
                    <strong>
                        Apellido Materno
                    </strong>
                </span>

                <input type="text" style="width: 120px; height: 25px ; margin-left: 10px ;">

                <span style="margin-left: 100px ;">
                    <strong>
                        Nombre(s)
                    </strong>
                </span>

                <input type="text" style="width: 200px; height: 25px ; margin-left: 10px ;">

                <span style="margin-left: 100px ;">
                    <strong>
                        Sexo
                    </strong>
                </span>

                <select name="sexo" style="width: 120px; height: 27px ; margin-left: 10px ;">
                    <option value="Hombre">
                        Hombre
                    </option>
                    <option value="Mujer">
                        Mujer
                    </option>
                </select>
            </div>
        </div>
        
        <div style="margin-top: 20px;">

                <span style="margin-left: 10px ;">
                    <strong>
                        Calle
                    </strong>
                </span>

                <input type="text" style="width: 300px; height: 25px ; margin-left: 10px ;">

                <span style="margin-left: 100px ;">
                    <strong>
                        Colonia
                    </strong>
                </span>

                <input type="text" style="width: 300px; height: 25px ; margin-left: 10px ;">
    </div>
</div>

<?php include("resources/views/footer.php")?>