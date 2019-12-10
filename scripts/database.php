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

	function verificaLogin($usuario, $contra)
    {
        try{
         $pase=0;
         $query="SELECT * FROM usuarios WHERE user='$usuario'";
         $consulta = $this->PDOLocal->querry($query);
         
         while($registro = $consulta->fetch(PDO::FETCH_ASSOC))
         {
                if(password_verify($contra, $registro['password']))
                {
                    $pase++;
                }
         }
         if($pase >0)
         {
             session_start();
             $_SESSION["usuario"]=$usuario;
             echo "div class='alert alert-success'>";
             echo "<h2 align='center'>Bienvenido ".$_SESSION["usuario"]."</h2>";
             header("refresh:2 ; ../index.php");
         }
         else
         {
            echo"<div class='alert alert-danger'>";
            echo"<h2 aling='center'>Usuario o password incorrecto.. </h2>";
            header("refres:2; ../php/FromLogin.php");
		 }
		}

		function cerrarSesion()
		{
			session_start();
			session_destroy();
			header("Location: ../index.php");
		}
	

}

?>