<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Articulo
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($idarticulo, $codigo, $nombre,$stock,$descripcion, $imagen)
	{
		$sql="INSERT INTO articulo (idarticulo, codigo, nombre,stock, descripcion,imagen, condicion)
		VALUES ('$idcategoria','$codigo','$nombre','$stock','$descripcion','$imagen''1')";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($idarticulo, $codigo, $nombre,$stock,$descripcion, $imagen)
	{
		$sql="UPDATE categoria SET articulo=$idarticulo,codigo=$codigo,nombre='$nombre',stock=$stock,descripcion='$descripcion',imagen=$imagen WHERE idcategoria='$idcategoria'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para desactivar categorías
	public function desactivar($idarticulo)
	{
		$sql="UPDATE articulo SET condicion='0' WHERE idarticulo='$idarticulo'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar categorías
	public function activar($idarticulo)
	{
		$sql="UPDATE articulo SET condicion='1' WHERE idarticulo='$idarticulo'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idarticulo)
	{
		$sql="SELECT * FROM articulo WHERE idarticulo='$idarticulo'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT * FROM articulo";
		return ejecutarConsulta($sql);		
	}
}

?>

