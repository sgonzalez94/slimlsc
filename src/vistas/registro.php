<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Semillero LSC</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Actividades</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">Contacto</a>
          </li>
          <!--<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>-->
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

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
  
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
       

      </div> <!-- /container -->

   <hr>

    <footer class="container">
      <p>&copy; Company 2017-2018</p>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>