<?php include_once "encabezado.php" ?>

<div class="col-xs-12">
	<h1>Nuevo producto</h1>
	<form method="post" action="nuevo.php">
		<label for="id_zapato">id_zapato:</label>
		<input class="form-control" name="id_zapato" required type="text" id="id_zapato" placeholder="Escribe el código">

		<label for="id_proveedor">id_proveedor:</label>
		<textarea required id="id_proveedor" name="id_proveedor" cols="30" rows="5" class="form-control"></textarea>

		<label for="estilo">estilo:</label>
		<input class="form-control" name="estilo" required type="text" id="estilo" placeholder="Precio de venta">

		<label for="color">color:</label>
		<input class="form-control" name="color" required type="text" id="estilo" placeholder="Precio de compra">

		<label for="precio">precio:</label>
		<input class="form-control" name="precio" required type="number" id="precio" placeholder="Cantidad o precio">

		<label for="descripcion">descripcion:</label>
		<input class="form-control" name="descripcion" required type="text" id="descripcion" placeholder="Precio de venta">

		<label for="talla">talla:</label>
		<input class="form-control" name="talla" required type="number" id="talla" placeholder="Precio de compra">

		<label for="id_venta">id_venta:</label>
		<input class="form-control" name="id_venta" required type="number" id="id_venta" placeholder="Cantidad o precio">
		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "pie.php" ?>