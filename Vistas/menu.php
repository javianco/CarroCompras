


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <?php require_once "dependencias.php" ?>
</head>
<body>

  <!-- Begin Navbar -->
  <div id="nav">
    <div class="navbar navbar-inverse navbar-fixed-top" data-spy="affix" data-offset-top="100">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">navbar-toggler-icon</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="inicio.php"><img class="img-responsive logo img-thumbnail" src="../img/logo.jpg" alt="" width="80px" height="80px"></a>
          <!--<a class="navbar-brand" href="inicio.php"><img class="img-responsive logo img-thumbnail"></a>-->
        </div>
        <div id="navbar" class="collapse navbar-collapse">

          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="inicio.php"><span class="glyphicon glyphicon-home"></span> Inicio</a> </li>


          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list-alt"></span>   Mantenimiento<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="categorias.php">Categorías</a></li>
              <li><a href="articulos.php">Artículos</a></li>
              <li><a href="bodegas.php">Bodegas</a></li>
              <li><a href="clientes.php">Clientes</a></li>
              <li><a href="proveedores.php">Proveedores</a></li>
              <li><a href="articulos.php">Cajas</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list-alt"></span> Compras<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="categorias.php">Cotización</a></li>
              <li><a href="articulos.php">Pedidos</a></li>
              <li><a href="articulos.php">Cambio o Devolución</a></li>
              <li><a href="Compras.php">Compras</a></li>

            </ul>
          </li>


          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list-alt"></span> Ventas<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="categorias.php">Cotización</a></li>
              <li><a href="articulos.php">Pedidos</a></li>
              <li><a href="articulos.php">Cambio o Devolución</a></li>
              <li><a href="ventas.php"> Punto de Venta</a></li>
            </ul>
          </li>


          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list-alt"></span> Contabilidad<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="categorias.php">Cuentas por Pagar</a></li>
              <li><a href="articulos.php">Cuentas por Cobrar</a></li>
            </ul>
          </li>

        <?php
        if($_SESSION['usuario']=="admin"):
         ?>
           <li><a href="usuarios.php"><span class="glyphicon glyphicon-user"></span> Administrar usuarios</a>
            </li>
         <?php 
       endif;
          ?>

<!--      <li><a href="ventas.php"><span class="glyphicon glyphicon-shopping-cart"></span>  Ventas</a></li> -->
          <li class="dropdown" >
            <a href="#" style="color: red"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Usuario: <?php echo $_SESSION['usuario']; ?>  <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li> <a style="color: red" href="../procesos/salir.php"><span class="glyphicon glyphicon-off"></span> Salir</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.contatiner -->
  </div>
</div>
<!-- Main jumbotron for a primary marketing message or call to action -->
<!-- /container -->        

</body>
</html>

<script type="text/javascript">
  $(window).scroll(function() {
    if ($(document).scrollTop() > 150) {
      $('.logo').height(200);

    }
    else {
      $('.logo').height(100);
    }
  }
  );
</script>