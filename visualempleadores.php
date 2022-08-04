<?php include("resources/views/header.php")?>
<div  class="my-5 mx-3">
    
    <div class="col-6">

    <form class="d-flex">
    <label for ="empresa" class="col-sm-6 col-form-label">Empresas con convenio y sin convenio</label>
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
             <button class="btn btn-outline-success" type="submit">buscar</button>
    </form>
    </div>
    <br>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">Empresas</th>
          <th scope="col">Tienen convenio</th>
          <th scope="col">Telefono</th>
          <th scope="col">Proyectos con la empresa</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Construcasda</th>
          <td>No</td>
          <td>3141234532</td>
          <td>Vacante</td>
        </tr>
        <tr>
          <th scope="row">Compañia Marindustris. Grupomar.</th>
          <td>Si</td>
          <td>3143457643</td>
          <td>No Vacante</td>
        </tr>
        <tr>
          <th scope="row">Glipsa</th>
          <td>No</td>
          <td>3143859392</td>
          <td>Vacante</td>
        </tr>
        <tr>
          <th scope="row">Almacenamientos de Manzanillo S.A de C.V</th>
          <td>Si</td>
          <td>3141245040</td>
          <td>Vacante</td>
        </tr>
        <tr>
          <th scope="row">Torres Provedora</th>
          <td>Si</td>
          <td>3141353243</td>
          <td>No Vacante</td>
        </tr>
        <tr>
          <th scope="row">Constructora Manzanillo S.A de C.v</th>
          <td>No</td>
          <td>3143355433</td>
          <td>Vacante</td>
        </tr>
      </tbody>
    </table>
</div>
<?php include("resources/views/footer.php")?>