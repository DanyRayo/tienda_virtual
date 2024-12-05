<?php
	require_once("autoload.php");
	class Usuario extends Conexion
	{
		public $conexion;
		function __construct()
		{
			$this->conexion = new Conexion();
			$this->conexion = $this->conexion->conect();
		}

		public function insertUsuario(string $nombre, string $apellido, int $telefono, string $email)
		{
			$sql  = "INSERT INTO usuario(nombres,apellidos,telefono,email) VALUES(?,?,?,?)";
        	$arrData = array($nombre, $apellido, $telefono, $email);

        	$insert = $this->conexion->prepare($sql);
        	$resInsert = $insert->execute($arrData);
	        $idInsert = $this->conexion->lastInsertId();
	        return $idInsert;
		}

		public function getUsuarios()
		{
			$sql = "SELECT * FROM usuario";
			$execute = $this->conexion->query($sql);
	        $request = $execute->fetchall(PDO::FETCH_ASSOC);
			return $request;
		}

		public function updateUsuario(int $id, string $nombre, string $apellido, int $telefono, string $email)
		{
			$sql  = "UPDATE usuario SET nombre=?, apellidos=?, telefono=?, email=? WHERE id = $id";
			$arrData = array($nombre, $apellido, $telefono, $email);
			
			$update = $this->conexion->prepare($sql);
			$resExecute = $update->execute($arrData);
	        return $resExecute;
		}

		public function getUsuario(int $id)
		{
			$sql = "SELECT * FROM usuario where id = $id";
			$arrWhere = array($id);
			$query = $this->conexion->prepare($sql);
			$query->execute($arrWhere);
			$request  = $query->fetch(\PDO::FETCH_ASSOC);
			return $request;
		}

		public function delUser(int $id)
		{

	    	$sql  = "DELETE FROM usuario WHERE id = ?";
	    	$arrWhere = array($id);
	    	$delete = $this->conexion->prepare($sql);
			$del = $delete->execute($arrWhere);
	        return $del;

	        /*
	        $sql  = "DELETE FROM usuario WHERE id = {$id}";
	    	$delete = $this->conexion->prepare($sql);
	    	//$delete->bindValue(':id', $id);
	        $del = $delete->execute();
	        return $del;
	        */
		}
	}

 ?>