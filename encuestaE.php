<?php include("resources/views/header.php")?>
<div  class="my-5 mx-3">
<div class="container">
    <h2 class="text-center">Cuestionario para medir la satisfaccion de los Egresados  de la Universidad Tecnologica 5A Licenciatura(Ingenierias y licenciaturas).</h2>
    <p class="text-center">Con el proposito de conocer la opinion de los egresados de la Universidad Tecnologica acerca de la atencion, servicios y preparacion academica que recibieron de su permanencia en la institucion.</p>
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
             Nombre de la carrera que egresa:
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
</form>
<br>
<p class="text-center">Le agradecemos proporcione la informacion solicitada en este cuestionario que sera de caracter estrictamente confidencial. Señala con el numero tu nivel de satisfaccion de acuerdo a la siguiente escala de valores: <br>|| Muy Bien MB=5 || Bien B=4 || Regular R=3 || Mal M=2 || Pesimo P=1 || No Aplica NA=0 ||<br>Favor de no dejar los espacios sin respuesta</p>

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
          
          <td>¿La infraestructura fisica con que fue dotada la Universidad Tecnologica, le pareció?</td>
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
          
          <td>¿El equipamiento de los laboratorios y talleres le parecio?</td>
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
          
          <td>¿Los servicios prestados en la Bolsa de trabajo de la Universidad como los considera?</td>
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
          
          <td>¿El nivel de conocimiento y dominio de los temas mostrados por sus profesores al momento de impartirles la catedra le pareció?</td>
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
          
          <td>¿El nivel de conocimiento y dominio por parte de los profesores en el manejo de los equipos que se encuentran en los laboratorios y talleres al momento de realizar las practicas que su carrera requiere, lo considerara?</td>
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
          
          <td>¿La experiencia práctica adquirida por parte suya, derivado de las vistas, practicas en las empresas, las considera?</td>
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
          
          <td>¿Como considera la preparacion academica adquirida?</td>
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
          
          <td>Considera que la estadia complemento su preparacion para el mercado laboral?</td>
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
        <th scope="row">9</th>
          
          <td>¿Comó califica la Continuidad de Estudios nivel 5A(licenciaturas e ingenierias)?</td>
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