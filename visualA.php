<?php include("resources/views/header.php")?>
<div  class="my-5 mx-3">

<div class="col-6">
    
<form class="d-flex">
<label for ="empresa" class="col-sm-6 col-form-label">Numero de control, nombre del alumno o carrera.</label>
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
         <button class="btn btn-outline-success" type="submit">buscar</button>
</form>
</div>
<br>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">N° de control</th>
      <th scope="col">Nombre del alumno</th>
      <th scope="col">Carrera</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">20200012</th>
      <td>Juan Carlos Deniz Garcia</td>
      <td>TID</td>
      <td>Regulares(re-inscritos)</td>
    </tr>
    <tr>
      <th scope="row">20200419</th>
      <td>Hector Xavier Paez Garcia</td>
      <td>TID</td>
      <td>Regulares(re-inscritos)</td>
    </tr>
    <tr>
      <th scope="row">20200418</th>
      <td>Daniel Zamora Tapia</td>
      <td>TID</td>
      <td>Regulares(re-inscritos)</td>
    </tr>
    <tr>
      <th scope="row">20200777</th>
      <td>Luis Manuel Munguia Castillo</td>
      <td>TID</td>
      <td>Concluido(Egresado)</td>
    </tr>
  </tbody>
</table>
<?php include("resources/views/footer.php")?>
