<?php

#Salir si alguno de los datos no está presente
if(
	!isset($_POST["id_zapato"]) || 
	!isset($_POST["id_proveedor"]) || 
	!isset($_POST["estilo"]) || 
	!isset($_POST["color"]) || 
	!isset($_POST["precio"]) || 
	!isset($_POST["descripcion"]) || 
	!isset($_POST["talla"]) || 
	!isset($_POST["id_venta"]) || 
	!isset($_POST["id"])
) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$id = $_POST["id"];
$id_zapato = $_POST["id_zapato"];
$id_proveedor = $_POST["id_proveedor"];
$estilo = $_POST["estilo"];
$color = $_POST["color"];
$precio = $_POST["precio"];
$descripcion = $_POST["descripcion"];
$talla = $_POST["talla"];
$id_venta = $_POST["id_venta"];

$sentencia = $base_de_datos->prepare("UPDATE zapatos SET id_zapato = ?, id_proveedor = ?, estilo = ?, color = ?, precio = ?, descripcion = ?, talla = ?, id_venta = ? WHERE id = ?;");
$resultado = $sentencia->execute([$id_zapato, $id_proveedor, $estilo, $color, $precio, $descripcion, $talla, $id_venta, $id]);

if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del producto";
?>