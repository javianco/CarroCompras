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
<title>E-comerce Andrade Asociados</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 
</head>
<body style=" ">
<header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span>+0982639311</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span>www.andradeAsociados.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">Acerca de ..</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.html">Doctores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="#">Login / Register</a>
            </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  
<aside id="fh5co-hero">
				<div class="flexslider">
					<ul class="slides">
					   <!--<li style="background-image: url(images/img_bg_1.jpg);">-->
						<li style="background-image: url(imagenes/logos.jpeg); height: 100vh;">
           
						
						   <div class="overlay-gradient"></div>
						   <div class="container">
							   <div class="row">
								   <!--<div class="col-md-8 col-md-offset-2 text-center slider-text">-->
                   <div class="text-center slider-text">
									   <div class="slider-text-inner">
										   <h1>LA VIDA ES FACIL </h1>
											<p><a class="btn btn-primary btn-lg" href="#">Qué deseas comprar?</a></p>
									   </div>
								   </div>
							   </div>
						   </div>
					   </li>
					  </ul>
				  </div>
			</aside>








<div class="container" style="width:800px;">
<h3 align="center">Carro de Compra Simple con PHP y MySQL</h3>
<?php
$query = "SELECT nombre,imagen,precio FROM producto ORDER BY id_producto ASC";
$result = mysqli_query($conexion, $query);

if(mysqli_num_rows($result) > 0)
{
while($row = mysqli_fetch_array($result))
{
?>
<div class="col-md-12">
<!--<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>?action=add&id=<?php echo $row["id"]; ?>">-->
<form method="post" action=" ">

<div class="thumbnail">
<img src="<?php echo $row[1]; ?>" class="img-responsive"   width="100" height="100" > </img>
<div class="caption">
<h4 class="text-info text-sm-start"><?php echo $row[0]; ?></h4>
<h4 class="badge bg-primary text-wrap">$ <?php echo $row[2]; ?></h4>
<!--<input type="text" name="quantity" class="form-control" value="1" />-->
<p class='text-center'>
<input type="submit" name="add_to_cart" class="btn btn-success " value="Agregar al carro" /></p> 
<input type="hidden" name="hidden_name" value="<?php echo $row[0]; ?>" />
<input type="hidden" name="hidden_price" value="<?php echo $row[2]; ?>" />
</div>
</div>
</form>
</div>
<?php
}
}
?>
<div style="clear:both"></div>
<h3>Detalle de la orden</h3>
<div class="table-responsive">
<table class="table table-bordered">
<tr>
<th width="40%">Descripción</th>
<th width="10%" class='text-center'>Cantidad</th>
<th width="20%" class='text-right'>Precio</th>
<th width="15%" class='text-right'>Total</th>
<th width="5%"></th>
</tr>
<?php
if(!empty($_SESSION["shopping_cart"]))
{
$total = 0;
foreach($_SESSION["shopping_cart"] as $keys => $values)
{
?>
<tr>
<td><?php echo $values["item_name"]; ?></td>
<td class='text-center'><?php echo $values["item_quantity"]; ?></td>
<td class='text-right'>$ <?php echo $values["item_price"]; ?></td>
<td class='text-right'>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
<td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Eliminar</span></a></td>
</tr>
<?php
$total = $total + ($values["item_quantity"] * $values["item_price"]);
}
?>
<tr>
<td colspan="3" align="right">Total</td>
<td align="right">$ <?php echo number_format($total, 2); ?></td>
<td></td>
</tr>
<?php
}
?></table>
</div>
</div>
</body>
</html> 

