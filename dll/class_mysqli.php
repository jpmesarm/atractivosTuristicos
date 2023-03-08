<?php

class clase_mysqli{
	/*variables de conexoion*/
	var $BaseDatos;
	var $Servidor;
	var $Usuario;
	var $Clave;
	/*identificacion de error y texto de error*/
	var $Errno = 0;
	var $Error = "";
	/*identificacion de conexion y consulta*/
	var $Conexion_ID=0;
	var $Consulta_ID=0;
	/*constructor de la clase*/
	function clase_mysqli($host="", $user="", $pass="", $db=""){
		$this->BaseDatos=$db;
		$this->Servidor=$host;
		$this->Usuario=$user;
		$this->Clave=$pass;
	}
	/*conexion al servidor de db*/
	function conectar($host, $user, $pass, $db){
		if($db != "")$this->BaseDatos=$db;
		if($host != "")$this->Servidor=$host;
		if($user != "")$this->Usuario=$user;
		if($pass != "")$this->Clave=$pass;
		/*conectar al servidor*/
		$this->Conexion_ID=new mysqli($this->Servidor, $this->Usuario, $this->Clave, $this->BaseDatos);
		if(!$this->Conexion_ID){
			$this->Error="Ha fallado la conexion";
			return 0;
		}
		return$this->Conexion_ID;
	}
	function consulta($sql=""){
		if($sql==""){
			$this->Error="NO hay ninguna sentencia sql";
			return 0;
		}
		/*Ejecutar la cunsulta*/
		//$this->Consulta_ID=$this->Conexion_ID->query($sql);
		$this->Consulta_ID=mysqli_query($this->Conexion_ID,$sql);

		if(!$this->Consulta_ID){
			print $this->Conexion_ID->error;
			//$this->Errno->error;
		}
		return $this->Consulta_ID;
	}

	/*retorna el numero de campos de la consulta*/
	function numcampos(){
		return mysqli_num_fields($this->Consulta_ID);
	}
	/*retorna de campos de la consulta*/
	function numregistros(){
		return mysqli_num_rows($this->Consulta_ID);
	}
	function verconsulta(){
		echo "<table class='tablecud'>";
		echo "<tr>";
		for ($i=0; $i < $this->numcampos() ; $i++) { 
			//echo "<td>".$this->nombrecampo($i)."</td>";
			echo  "<td>".mysqli_fetch_field_direct($this->Consulta_ID, $i)->name."</td>";
		}
		echo "</tr>";
		while ($row=mysqli_fetch_array($this->Consulta_ID)) {
			echo "<tr>";
			for ($i=0; $i < $this->numcampos(); $i++) { 
				//echo "<td>".utf8_encode($row[$i])."</td>";
				echo "<td>".$row[$i]."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}

	//Función para obtener listado de libros
    function GetData11() 
	{
        if($this->numcampos() > 0) // existe -> datos correctos
        {
            $data[] = array();
            while( $row = mysqli_fetch_assoc($this->Consulta_ID) ){ 
                array_push($data, $row);
            }
        }
	    return $data;
	}

	function GetDataList() 
	{
        if($this->numcampos() > 0) // existe -> datos correctos
        {
            $i=0;
            while( $row = mysqli_fetch_assoc($this->Consulta_ID) ){ 
                 $group[$row['provincia']][] = $row;
                 //$group[$row[$i]][] = $row;
                 $i++;
            }
        }

	    return $group;
	}
	function GetDataList2() 
	{
        if($this->numcampos() > 0) // existe -> datos correctos
        {
            $i=0;
            while( $row = mysqli_fetch_assoc($this->Consulta_ID) ){ 
                 $group[$row['canton']][] = $row;
                 //$group[$row[$i]][] = $row;
                 $i++;
            }
        }

	    return $group;
	}
	function GetDataList3() 
	{
        if($this->numcampos() > 0) // existe -> datos correctos
        {
            $i=0;
            while( $row = mysqli_fetch_assoc($this->Consulta_ID) ){ 
                 $group[$row['tipo']][] = $row;
                 //$group[$row[$i]][] = $row;
                 $i++;
            }
        }

	    return $group;
	}

	function verconsultacrud(){
		echo "<table class='tablecud'>";
		echo "<tr>";
		for ($i=0; $i < $this->numcampos() ; $i++) { 
			//echo "<td>".$this->nombrecampo($i)."</td>";
			echo  "<th>".mysqli_fetch_field_direct($this->Consulta_ID, $i)->name."</th>";
		}
		echo  "<th>Borrar</th>";
		echo  "<th>Actualizar</th>";
		echo "</tr>";
		while ($row=mysqli_fetch_array($this->Consulta_ID)) {
			echo "<tr>";
			for ($i=0; $i < $this->numcampos(); $i++) { 
				//echo "<td>".utf8_encode($row[$i])."</td>";
				echo "<td>".$row[$i]."</td>";
			}
			echo  "<td class='txtcentrado'><a href='user_delete.php?userId=$row[0]'><i class='fa-solid fa-trash-can'></i></a></td>";
			echo  "<td class='txtcentrado'><a href='user_update.php?userId=$row[0]'><i class='fa-solid fa-pen-to-square'></i></a></td>";
			echo "</tr>";
		}
		echo "</table>";
	}

	function consulta_lista(){
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			for ($i=0; $i < $this->numcampos(); $i++) { 
				$row[$i];
			}
			return $row;
		}
	}

	function consulta_json(){
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			$data[]=$row;
		}
		echo json_encode(array("sensores"=>$data));
	}
	function consulta_busqueda_json(){
		if($this->numcampos() > 0){
			while ($row = mysqli_fetch_array($this->Consulta_ID)) {
				$data[]=$row;
			}
		    $resultData = array('status' => true, 'postData' => $data);
	    }else{
	    	$resultData = array('status' => false, 'message' => 'No Post(s) Found...');
	    }

	    echo  json_encode($resultData);
	}

}
?>