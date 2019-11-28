<?php

class Database
{
	private $PDOLocal;
	private $user = "root";
	private $password = "";
	private $server = "mysql:host=localhost; dbname=restauranteproyecto";

	function conectarBD(){
		try{
			$this->PDOLocal = new PDO($this->server,$this->user,$this->password);
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	function desconectarBD(){
		try{
			$this->PDOLocal = null;
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	function seleccionar($query){
		try{
			$resultado = $this->PDOLocal->query($query);
			$renglon = $resultado->rowCount();
			if ($renglon > 0) 
			{
				while ($row = $resultado->fetch(PDO::FETCH_ASSOC))
			 	{
					$Datos[] = $row;
				}	
			}
			else
			{
				$Datos[] = null;
			}

				return $Datos;

		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	function ejecutaSQL($query)
	{
		try{
			$this->PDOLocal->query($query);
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

}

?>