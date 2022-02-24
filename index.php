<?php 
  session_start();
	require_once "clases/Conexion.php";
    $c= new conectar();
	$conexion=$c->conexion();
	$idcleinte= 1;
	$ncliente="";

	$sql="SELECT nombre,apellido 
	FROM usuario WHERE id_usuario='$idcleinte'";
			
	$result=mysqli_query($conexion,$sql);
	$ver=mysqli_fetch_row($result);
	$ncliente=$ver[1]." ".$ver[0];
?>
<!DOCTYPE html>
<html>
<head>
<title>Carro de Compras</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/v4-shims.css">
 
</head>
<body>
<header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span>+59382639311</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span>www.andradeAsociados.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="https://www.facebook.com/silkyclothes.ec"><span class="fa fa-twitter">facebook</span></a>
              <a href="#"><span class="mai-logo-twitter">twiter</span></a>
              <a href="https://instagram.com/silkyclothes.ec?utm_medium=copy_link"><span class="mai-logo-instagram">Instagram</span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <!--<nav class="navbar navbar-expand-lg navbar-light shadow-sm">-->
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">   
      <div class="container">
       <!-- <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">Productos</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="contact.html">Contactos</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="#">Carro Compras</a>
            </li>
           </ul>
          <form class="d-flex">
               <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
               <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>


<!--<div class="container" style="width:800px;">-->
<div class="container">
<h3 align="left">BiKinis</h3>
<?php
$query = "SELECT nombre,imagen,precio,descripcion FROM producto ORDER BY id_producto ASC";
$result = mysqli_query($conexion, $query);

if(mysqli_num_rows($result) > 0)
{
while($row = mysqli_fetch_array($result))
{
?>
<div class="col-md-12">
<!--<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>?action=add&id=<?php echo $row["id"]; ?>">-->
<form method="post" action=" ">
<div class="container">
  <div class="row justify-content-start">
    <div class="col-4">
       <!--  <input type="hidden" name="hidden_name" value="<?php echo $row[0]; ?>"> </input>
        <input type="hidden" name="hidden_price" value="<?php echo $row[2]; ?>"></input> -->
    </div>
    <div class="col-4">
    <img src="<?php echo $row[1]; ?>" class="img-responsive"   width="200" height="250" > </img>
    <p>  </p>
    <p class="text-start">
        <input type="submit" name="add_to_cart" class="btn btn-success " value="Agregar al carro"> </input></p>
    </div>
    <div class="col-4">
        <h4 class="text-info text-lg-start"><?php echo $row[0]; ?></h4>
        <h2 class="badge bg-primary">$ <?php echo $row[2]; ?></h2>
        <input type="text" name="quantity" class="form-control" value="1"><caption>Cantidad : </caption> </input>
        <h6><?php echo $row[3]; ?></h6>
     </div>    
   
  </div>
</div>
</form>
</div>
<?php
}
}
?>
<footer id="fh5co-footer" role="contentinfo" style="background-image: url(imagenes/img_bg_4.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 fh5co-widget">
					<h3>Acerca de Nuestros Servicio</h3>
					<p>Contamos con las mejores marcas</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Cursos</h3>
					<ul class="fh5co-footer-links">
						<li><a href="senecyt.html">SENECYT</a></li>
						<li><a href="#">NetWorking</a></li>
						<li><a href="#">Contabilidad</a></li>
						<li><a href="#">Mantenimiento de Computadoras</a></li>
						<li><a href="#">Programación WEB</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Servicios</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Mantenimiento y Venta de Equipos</a></li>
						<li><a href="#">Desarrollo de Software</a></li>
						<li><a href="#">Venta de Equipos</a></li>
						<li><a href="#">Declaraciones Tributarias</a></li>
						<li><a href="#">Servicos Contables</a></li>
						<li><a href="#">Diseño de Paginas WEB</a></li>
					</ul>
				</div>
				
			</div>
		</div> 

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">Centro de formación Integral Bucay </small> 
						<small class="block">Gerente General : <span> ECON. KATE SORROSA </span></a></small>
					</p>
				</div>
			</div>

		</div>
	</footer>

</body>
</html> 

