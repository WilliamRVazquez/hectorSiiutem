<?php include("resources/views/header.php")?>
<div  class="my-5 mx-3">
    <div class="container">
        <h1 class="text-center">Cuestionario para medir la satisfaccion de los empleadores cuentan con egresados del nivel de licenciatura laborando en sus instalaciones</h1>
        <p class="text-center">Con el proposito de conocer el nivel de satisfaccion de los servicios que los egresados de la Universidad <br>Tecnologica prestan en su empresa y de esta manera poder retroalimentar a la institucion e implementar <br> medidas correctivas en el proceso de enseñanza - aprendizaje de los alumnos</p>
        </div>
    <br>
    <label for="universidad">   
    <strong>
    Universidad Tecnologica de Manzanillo
    </strong>
    </label>
    <br>
    <br>

    <form>
    <div class="form-group row">
        <label for="empresa" class="col-sm-2 col-form-label">
            <strong>
                Nombre de la empresa:
            </strong>
        </label>
        <div class="col-5 mt-1">
        <input type="text" class="form-control" id="empresa">
        </div>
    </div>
    <div class="form-group row mt-2">
        <label for="inputPassword3" class="col-sm-2 col-form-label">
            <strong>
                Nombre del responsable:
            </strong> 
        </label>
        <div class="col-5">
        <input type="text" class="form-control" id="responsable">
        </div>
    </div>
    <div class="form-group row mt-2">
        <label for="inputPassword3" class="col-sm-2 col-form-label">
            <strong>
                Telefono:
            </strong> 
        </label>
        <div class="col-5">
        <input type="tel" class="form-control" id="telefono">
        </div>
    </div>
    <div class="form-group row mt-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label">
            <strong>
                Correo Electronico:
            </strong> 
        </label>
        <div class="col-5">
        <input type="email" class="form-control" id="correo">
        </div>
    </div>
    <div class="form-group row mt-2">
        <label for="inputPassword3" class="col-sm-2 col-form-label">
            <strong>
                Nombre de las carreras de los egresados de licenciatura que laboran en su empresa
            </strong> 
        </label>
        <div class="col-5">
        <input type="text" class="form-control" id="carreras">
        </div>
    </div>
    
    </form>
    <br>
    <p class="text-center">Le agradecemos proporcio    ne la informacion solicitada en este cuestionario que sera de caracter estrictamente confidencial. Señala con el numero tu nivel de satisfaccion de acuerdo a la siguiente escala de valores: Muy Bien MB=5; Bien B=4; Regular R=3; Mal M=2 y Pesimo P=1; o bien No Aplica NA=0. Favor de no dejar los espacios sin respuesta</p>

    <table class="table">
        <thead>
            <tr>
            <th>No.</th>
            <th class="text-center">Pregunta</th>
            <th>Opcion*</th>
            
            </tr>
        </thead>
        <tbody>
            <tr class="active">
            <th scope="row">1</th>
            
            <td>¿Comó considera los conocimientos con los que cuenta el egresado de licenciatura para proponer alternativas de solucion a los problemas que se le consultan de acuerdo a la carrera que curso, funcion qu desempeña y/o al puesto?</td>
            <td>
                    <select class="form-select" id="sex" name="sex">
                        <option value="Hombre">
                            MB
                        </option>
                        <option value="Mujer">
                            B
                        </option>
                        <option value="Otro">
                        R
                        </option>
                        <option value="Mujer">
                            M
                        </option>
                        <option value="Mujer">
                        P
                        </option>
                        <option value="Mujer">
                        NA
                        </option>
                    </select>
                </div></td>
            </tr>
            <th scope="row">2</th>
            
            <td>¿El conocimiento y habilidad por parte del egresado de Licenciatura, en el manejo del equipo, maquinaria y herramientas de trabajo para desempeñar sus actividades lo considera?</td>
            <td>
                    <select class="form-select" id="sex" name="sex">
                        <option value="Hombre">
                            MB
                        </option>
                        <option value="Mujer">
                            B
                        </option>
                        <option value="Otro">
                        R
                        </option>
                        <option value="Mujer">
                            M
                        </option>
                        <option value="Mujer">
                        P
                        </option>
                        <option value="Mujer">
                        NA
                        </option>
                    </select>
                </div></td>
            </tr>
            <th scope="row">3</th>
            
            <td>¿Comó valora usted el trabajo desempañado por el egresado de Licenciatura en cuanto a calidad y rapidez en los proyectos asignados?</td>
            <td>
                    <select class="form-select" id="sex" name="sex">
                        <option value="Hombre">
                            MB
                        </option>
                        <option value="Mujer">
                            B
                        </option>
                        <option value="Otro">
                        R
                        </option>
                        <option value="Mujer">
                            M
                        </option>
                        <option value="Mujer">
                        P
                        </option>
                        <option value="Mujer">
                        NA
                        </option>
                    </select>
                </div></td>
            </tr>
            <th scope="row">4</th>
            
            <td>La creatividad e innovacion para proponer mejoras a los procesos de la empresa por parte del egresado de Licenciatura, los considera:</td>
            <td>
                    <select class="form-select" id="sex" name="sex">
                        <option value="Hombre">
                            MB
                        </option>
                        <option value="Mujer">
                            B
                        </option>
                        <option value="Otro">
                        R
                        </option>
                        <option value="Mujer">
                            M
                        </option>
                        <option value="Mujer">
                        P
                        </option>
                        <option value="Mujer">
                        NA
                        </option>
                    </select>
                </div></td>
            </tr>
            <th scope="row">5</th>
            
            <td>La capacidad y disposicion con que cuenta el egresado de Licenciatura para trabajar en equipo, los valora:</td>
            <td>
                    <select class="form-select" id="sex" name="sex">
                        <option value="Hombre">
                            MB
                        </option>
                        <option value="Mujer">
                            B
                        </option>
                        <option value="Otro">
                        R
                        </option>
                        <option value="Mujer">
                            M
                        </option>
                        <option value="Mujer">
                        P
                        </option>
                        <option value="Mujer">
                        NA
                        </option>
                    </select>
                </div></td>
            </tr>
            <th scope="row">6</th>
            
            <td>¿El grado del egresado de Licenciatura para poder alcanzar un mejor puesto en su empresa de acuerdo a su nivel academico?</td>
            <td>
                    <select class="form-select" id="sex" name="sex">
                        <option value="Hombre">
                            MB
                        </option>
                        <option value="Mujer">
                            B
                        </option>
                        <option value="Otro">
                        R
                        </option>
                        <option value="Mujer">
                            M
                        </option>
                        <option value="Mujer">
                        P
                        </option>
                        <option value="Mujer">
                        NA
                        </option>
                    </select>
                </div></td>
            </tr>
            <th scope="row">7</th>
            
            <td>¿Considera usted que este profesionista cumple con los requerimientos del sector productivo y social?</td>
            <td>
                    <select class="form-select" id="sex" name="sex">
                        <option value="Hombre">
                            MB
                        </option>
                        <option value="Mujer">
                            B
                        </option>
                        <option value="Otro">
                        R
                        </option>
                        <option value="Mujer">
                            M
                        </option>
                        <option value="Mujer">
                        P
                        </option>
                        <option value="Mujer">
                        NA
                        </option>
                    </select>
                </div></td>
            </tr>
            <th scope="row">8</th>
            
            <td>En general ¿Comó califica el trabajo que desempeña el egresado de licenciatura, en su empresa?</td>
            <td>
                    <select class="form-select" id="sex" name="sex">
                        <option value="Hombre">
                            MB
                        </option>
                        <option value="Mujer">
                            B
                        </option>
                        <option value="Otro">
                        R
                        </option>
                        <option value="Mujer">
                            M
                        </option>
                        <option value="Mujer">
                        P
                        </option>
                        <option value="Mujer">
                        NA
                        </option>
                    </select>
                </div></td>
            </tr>
        </tbody>
        </table>
        <br>
        <p>Comentarios para mejorar los servicios:</p>
        <textarea class="form-control mt-3"   cols="30" rows="1" placeholder="Ingrese un mensaje"></textarea>
    </div>


    <div class="col-20 mt-5">
    <hr style="width:50px", size="10", color=black align="center"> 
</div>
<br>
<?php include("resources/views/footer.php")?>
