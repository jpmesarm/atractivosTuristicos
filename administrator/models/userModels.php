<?php
require_once "../../dll/config.php";
require_once "../../dll/class_mysqli.php";

class UserModel 
{
  private $idUser;
  private $nombres;
  private $apellidos;
  private $correo;
  private $miconexion;
  
  function UserModel(){
    $this->miconexion = new clase_mysqli;
    $this->miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
  }
  function conectarDb(){
    $miconexion1 = new clase_mysqli;
    $miconexion1->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    return $miconexion1;
  }
  #region Set y Get
  public function getIdUser($idUser){
    $this->idUser = $idUser;
  }
  public function setNombres($nombres){
    $this->nombres = $nombres;
  }
  public function setApellidos($apellidos){
    $this->apellidos = $apellidos;
  }
  public function setCorreo($correo){
    $this->correo = $correo;
  }
  public function setClave($clave){
    $this->clave = $clave;
  }
  public function setTipoUser($tipoUser){
    $this->tipoUser = $tipoUser;
  }


  public function ListUser() {
    
    $resSQL=$this->miconexion->consulta("select id, nombres, apellidos, correo from usuarios");
    $resSQL=$miconexion->verconsultacrud();
    //$this->Disconnect();
    return $resSQL;
  }
  public function GetData() {
    $miconexion=$this->conectarDb();
    $resSQL=$miconexion->consulta("select id, nombres, apellidos, correo from usuarios");
    $resSQL=$miconexion->GetData11();
    //$this->Disconnect();
    return $resSQL;
  }
  public function ListArrayUser($userId) {
    $miconexion=$this->conectarDb();
    $miconexion->consulta("select * from usuarios where id= '$userId'");
    $resSQL=$miconexion->consulta_lista();
    return $resSQL;
  }
  public function AddUser() {
    $miconexion=$this->conectarDb();
    $clave=md5($this->clave);
    $resSQL=$miconexion->consulta("insert into usuarios values('','$this->nombres','$this->apellidos','$this->correo','$clave','$this->tipoUser','')");

    //$this->Disconnect();
    return $resSQL;
  }
  public function UpdateUser() {
    $miconexion=$this->conectarDb();
    $resSQL=$miconexion->consulta("update usuarios set nombres='$this->nombres', apellidos='$this->apellidos',correo='$this->correo',rol='$this->tipoUser' where id= '$this->idUser'");

    //$this->Disconnect();
    return $resSQL;
  }
  
  public function DelUser($userId) {
    $miconexion=$this->conectarDb();
    $resSQL=$miconexion->consulta("delete  from usuarios where id='$userId'");

    //$this->Disconnect();
    return $resSQL;
  }

}
