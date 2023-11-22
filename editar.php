<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM zapatos WHERE id = ?;");
$sentencia->execute([$id]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
if($producto === FALSE){
	echo "¡No existe algún producto con ese ID!";
	exit();
}

?>
<?php include_once "encabezado.php" ?>
	<div class="col-xs-12">
		<h1>Editar producto con el ID <?php echo $producto->id; ?></h1>
		<form method="post" action="guardarDatosEditados.php">
			<input type="hidden" name="id" value="<?php echo $producto->id; ?>">
	
			<label for="id_zapato">id_zapato:</label>
			<input value="<?php echo $producto->id_zapato ?>" class="form-control" name="id_zapato" required type="text" id="id_zapato" placeholder="Escribe el código">

			<label for="id_proveedor">id_proveedor:</label>
			<textarea required id="id_proveedor" name="id_proveedor" cols="30" rows="5" class="form-control"><?php echo $producto->id_proveedor ?></textarea>

			<label for="estilo">estilo:</label>
			<input value="<?php echo $producto->estilo?>" class="form-control" name="estilo" required type="text" id="estilo" placeholder="Precio de venta">

			<label for="color">color:</label>
			<input value="<?php echo $producto->color ?>" class="form-control" name="color" required type="text" id="color" placeholder="Precio de compra">

			<label for="precio">precio:</label>
			<input value="<?php echo $producto->precio ?>" class="form-control" name="precio" required type="number" id="precio" placeholder="Cantidad o precio">

			<label for="descripcion">descripcion:</label>
			<input value="<?php echo $producto->descripcion ?>" class="form-control" name="descripcion" required type="text" id="descripcion" placeholder="Precio de venta">

			<label for="talla">talla:</label>
			<input value="<?php echo $producto->talla ?>" class="form-control" name="talla" required type="text" id="talla" placeholder="Precio de compra">

			<label for="id_venta">id_venta:</label>
			<input value="<?php echo $producto->id_venta ?>" class="form-control" name="id_venta" required type="number" id="id_venta" placeholder="Cantidad o precio">


			<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listar.php">Cancelar</a>
		</form>
	</div>
<?php include_once "pie.php" ?>
