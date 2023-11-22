<?php include_once "encabezado.php" ?>
<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM zapatos;");
$zapatos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

	<div class="col-xs-12">
		<h1>Productos</h1>
		<div>
			<a class="btn btn-success" href="./formulario.php">Nuevo <i class="fa fa-plus"></i></a>
		</div>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>id_zapato</th>
					<th>id_proveedor</th>
					<th>estilo</th>
					<th>color</th>
					<th>precio</th>
					<th>descripcion</th>
					<th>talla</th>
					<th>id_venta</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($zapatos as $producto){ ?>
				<tr>
					<td><?php echo $producto->id ?></td>
					<td><?php echo $producto->id_zapato ?></td>
					<td><?php echo $producto->id_proveedor ?></td>
					<td><?php echo $producto->estilo ?></td>
					<td><?php echo $producto->color ?></td>
					<td><?php echo $producto->precio ?></td>
					<td><?php echo $producto->descripcion ?></td>
					<td><?php echo $producto->talla ?></td>
					<td><?php echo $producto->id_venta ?></td>
					<td><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $producto->id?>"><i class="fa fa-edit"></i></a></td>
					<td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $producto->id?>"><i class="fa fa-trash"></i></a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
<?php include_once "pie.php" ?>