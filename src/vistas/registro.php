<?php require 'header.php' ?>

    <div class="jumbotron">
  <p class="display-3">Formulario de registro</p>
</div>

  

      

      <div class="container">
       
<form method="POST" action="/api/clientes/agregar">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Nombre</label>
      <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre">
    </div>
    <div class="form-group col-md-6">
      <label >Apellidos</label>
      <input type="text" name="apellidos" class="form-control" id="apellidos" placeholder="Apellidos">
    </div>
  </div>
  <div class="form-group">
    <label >Telefono</label>
    <input type="number" name="telefono" class="form-control" id="telefono" placeholder="Telefono">
  </div>
  <div class="form-group">
    <label >Email</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="example@algo.com">
  </div>
  <div class="form-group">
    <label >Dirección</label>
    <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Direccion">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Ciudad</label>
      <input type="text" name="ciudad" class="form-control" id="ciudad">
    </div>
    <div class="form-group col-md-6">
      <label >Departamento</label>
      <select id="departamento" name="departamento" class="form-control">
        <option selected>Departamento...</option>
        <option>Caldas</option>
        <option>Quindio</option>
      </select>
    </div>
  </div>
  
  <button type="submit" class="btn btn-success">Enviar</button>
</form>


      </div> <!-- /container -->

     

<?php require 'footer.php' ?>