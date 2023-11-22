<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["id_zapato"]) || !isset($_POST["id_proveedor"]) || !isset($_POST["color"]) || !isset($_POST["estilo"]) || !isset($_POST["precio"]) || !isset($_POST["descripcion"]) || !isset($_POST["talla"]) || !isset($_POST["id_venta"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$id_zapato = $_POST["id_zapato"];
$id_proveedor = $_POST["id_proveedor"];
$color = $_POST["color"];
$estilo = $_POST["estilo"];
$precio = $_POST["precio"];
$descripcion = $_POST["descripcion"];
$talla = $_POST["talla"];
$id_venta = $_POST["id_venta"];

$sentencia = $base_de_datos->prepare("INSERT INTO zapatos(id_zapato, id_proveedor, color, estilo, precio,descripcion,talla,id_venta) VALUES (?, ?, ?, ?, ?,?,?,?);");
$resultado = $sentencia->execute([$id_zapato, $id_proveedor, $color, $estilo, $precio, $descripcion, $talla,$id_venta]);

if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
<?php include_once "pie.php" ?>