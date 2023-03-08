<?php
require_once "../../dll/config.php";
require_once "../../dll/class_mysqli.php";

class dashboardModel{
	private $idUser;
  private $nombres;
  private $apellidos;
  private $correo;
  private $miconexion;
  
  function dashboardModel(){
    $this->miconexion = new clase_mysqli;
    $this->miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
  }
  public function GetTotal() {
    $resSQL=$this->miconexion->consulta("select count(id) from encuesta2");
    $resSQL=$this->miconexion->consulta_lista();
    //$this->Disconnect();
    return $resSQL;
  }
}