<?php

	class Suscripcion{

		private $con;
		private $table = "suscripcion";

		public function __construct(){
			$this->con = mysql_connect("localhost", "root", "");
			mysql_select_db("proyectofinal", $this->con);
		}

		public function insert($datos){
			echo $sql = "INSERT INTO ".$this->table.
				   " VALUES(null, '{$datos['correo']}')";

			$res = mysql_query($sql);
			return $res;
		}
	}
?>