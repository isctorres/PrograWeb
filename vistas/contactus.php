<?php
    require_once '../modelos/mensajes_model.php';
    require_once '../modelos/conexion.php';
    include_once '../assets/adodb5/adodb.inc.php';

    $msjModel = new MensajesModel();
    $mensajes = $msjModel->getAllMensajes();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contactanos</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/styles.css">
  <link rel="stylesheet" href="../assets/css/contactus.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script>
    function editar(idMsj,Nombre){
      document.getElementById('hddId').value = idMsj;
      document.getElementById('txtNombre').value = Nombre;
    }

    function eliminar(idMsj) {
      $.post(
        "https://www.google.com.mx",
        function (data) {
          alert(data);
        }
      )
    }
  </script>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="../index.html"><img height="100" src="../assets/imagenes/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Asociación</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Visitas</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
  </header>
  <main>
    <div class="contactus container">
      <h3>Contactanos</h3>
      <form action="../controladores/ctrContacto.php?opc=1" method="post">
        <input type="hidden" id="hddId" name="hddId">
        <div class="form-group">
          <label for="txtNombre">Nombre</label>
          <input type="text" id="txtNombre" name="txtNombre" class="form-control">
        </div>
        <div class="form-group">
          <label for="txtApePat">Apellido Paterno</label>
          <input type="text" id="txtApePat" name="txtApePat" class="form-control">
        </div>
        <div class="form-group">
          <label for="txtApeMat">Apellido Materno</label>
          <input type="text" id="txtApeMat" name="txtApeMat" class="form-control">
        </div>
        <div class="form-group">
          <label for="txtEmail">Correo Electrónico</label>
          <input type="email" id="txtEmail" name="txtEmail" class="form-control">
        </div>
        <div class="form-group">
          <label for="txtTel">Telefono</label>
          <input type="tel" id="txtTel" name="txtTel" class="form-control">
        </div>
        <div class="form-group">
          <label for="txtComentario">Apellido Materno</label>
          <textarea id="txtComentario" name="txtComentario" rows="8" class="form-control">
          </textarea>
        </div>
        <button type="submit" class="btn btn-success">Success</button>
      </form>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido Paterno</th>
            <th scope="col">Apellido Materno</th>
            <th scope="col">Correo Electrónico</th>
            <th scope="col">Telefono</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php
          while(!$mensajes->EOF){
          ?>
          <tr>
            <th scope="row">1</th>
            <td><?php echo $mensajes->fields[1]?></td>
            <td><?php echo $mensajes->fields[2]?></td>
            <td><?php echo $mensajes->fields[3]?></td>
            <td><?php echo $mensajes->fields[4]?></td>
            <td><?php echo $mensajes->fields[5]?></td>
            <td><a href="#" class="btn btn-success" onclick="editar(<?= $mensajes->fields[0]?>,'<?= $mensajes->fields[1]?>')">Editar</a></td>
            <td><a href="#" class="btn btn-danger" onclick="eliminar(<?= $mensajes->fields[0]?>)">Eliminar</a></td>
          </tr>
          <?php
            $mensajes->moveNext();
          }
          ?>
        </tbody>
      </table>


        <div class="primera index">ROJO</div>
        <div class="segunda index">AZUL</div>
        <div class="tercera index">AMARILLO</div>

        <img class="posicion" src="../assets/imagenes/logo.png" alt="">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique vitae eum deserunt quam incidunt ipsum nam debitis, laudantium id architecto deleniti amet provident, neque inventore quae aliquid nihil omnis aspernatur?</p>
          <p class="limpiar">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique vitae eum deserunt quam incidunt ipsum nam debitis, laudantium id architecto deleniti amet provident, neque inventore quae aliquid nihil omnis aspernatur?</p>  
          <img class="posicion" src="../assets/imagenes/logo.png" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut blanditiis corrupti provident saepe similique minima autem magni molestiae eligendi. Omnis ab impedit laborum excepturi, placeat quod exercitationem possimus id quae?
          Quae, nihil, maiores aut ipsa vitae odio recusandae cupiditate autem voluptatum earum, accusamus temporibus? Magnam, impedit maxime rem, suscipit vitae ducimus, tenetur veritatis aliquid recusandae temporibus officiis facere saepe id.
          Impedit voluptatum fugit nihil quas illo. Tenetur odit sed quas sapiente voluptatibus culpa possimus, eum rerum, fuga maxime minima vel? Amet nostrum corporis sapiente fugiat quia provident dolores aut architecto?
          Quo tenetur quae facere! Cum quam, excepturi maxime numquam, beatae odio a quos dolore repellat voluptatem culpa rerum quidem incidunt, possimus eveniet voluptas fuga! Earum suscipit neque officia quidem vel!</p>
    </div>
  </main>
</body>
</html>