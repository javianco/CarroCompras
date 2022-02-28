	<!DOCTYPE html>
	<html>
	<head>
	<title>Articulos</title>
	    <?php require_once "../Vistas/dependencias.php"; ?>
        <?php require_once "../Vistas/menu.php"; ?>
		<?php require_once "../Clases/Conexion.php"; 
		$c= new conectar();
		$conexion=$c->conexion();
		$sql="SELECT id_categoria,nombreCategoria
		from categorias";
		$result=mysqli_query($conexion,$sql);
		$ver=mysqli_fetch_row($result);
		?>
	</head>
	<body>
		<div class="container">
			<h1>Articulos</h1>
			<div class="row">
				<div class="col-sm-4">
					<form id="frmArticulos" >
						<br><label>Categoria</label>
							<input type="text"  id="categoria" name="categoria" size="40"></br>
						<br><label>Nombre</label>
							<input type="text"  id="nombre" name="nombre" size="40"> </br>
						<br><label>Descripcion</label>
							<input type="text" id="descripcion" name="descripcion" size="40"></br>
						<br><label>Cantidad</label>
							<input type="text" id="cantidad" name="cantidad" size="5">
							<label>Precio</label>
							<input type="text" id="precio" name="precio" size="10"></br>
						<br><label>Imagen</label>
							<input type="file" id="imagen" name="imagen"></br>
							<p></p>
							<span id="btnAgregaArticulo" class="btn btn-primary">Agregar</span>
					</form>
				</div>
				<div class="col-sm-8">
					<div id="tablaArticulosLoad"></div>
				</div>
			</div>
		</div>
	</body>
	</html>


	
	<script type="text/javascript">


	</script>




