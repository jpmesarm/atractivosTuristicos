<?php
require_once "../../dll/config.php";
require_once "../../dll/class_mysqli.php";

class CatalogueModel{
  private $idUser;
  private $nombres;
  private $provincia;
  private $canton;
  private $miconexion;
  
  function CatalogueModel(){
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
  public function setProvincia($provincia){
    $this->provincia = $provincia;
  }
  public function setCanton($canton){
    $this->canton = $canton;
  }
  public function setClave($clave){
    $this->clave = $clave;
  }
  public function setTipoUser($tipoUser){
    $this->tipoUser = $tipoUser;
  }



  public function GetData() {
    $miconexion=$this->conectarDb();
    $resSQL=$miconexion->consulta("select pa.idparroquia ID, p.nombre Provincia, c.nombre Canton, pa.nombre Parroquia
                                          from provincia p, canton c, parroquia pa
                                          where pa.canton_idcanton=c.idcanton and c.provincia_idprovincia=p.idprovincia");
    $resSQL=$miconexion->GetData11();
    return $resSQL;
  }
  public function GetProvence() {
    $miconexion=$this->conectarDb();
    $resSQL=$miconexion->consulta("select * from provincia");
    $resSQL=$miconexion->GetData11();
    return $resSQL;
  }
  public function GetCanton() {
    $miconexion=$this->conectarDb();
    $resSQL=$miconexion->consulta("select p.nombre provincia, c.idcanton, c.nombre canton
                                          from provincia p, canton c
                                          where c.provincia_idprovincia=p.idprovincia");
    $resSQL=$miconexion->GetDataList();
    return $resSQL;
  }
  public function GetParroquia() {
    $miconexion=$this->conectarDb();
    $resSQL=$miconexion->consulta("select c.nombre canton, p.idparroquia, p.nombre parroquia 
                                          from parroquia p, canton c 
                                          where p.canton_idcanton=c.idcanton");
    $resSQL=$miconexion->GetDataList2();
    return $resSQL;
  }

  public function ListArrayTest($userId) {
    $this->miconexion->consulta("select * from encuesta2 where id= '$userId'");
    $resSQL=$this->miconexion->consulta_lista();
    return $resSQL;
  }

  public function DelParroquia($testId) {
    $miconexion=$this->conectarDb();
    $resSQL=$miconexion->consulta("delete  from parroquia where idparroquia='$testId'");
    //$this->Disconnect();
    return $resSQL;
  }
  public function AddProvince() {
    $miconexion=$this->conectarDb();
    $resSQL=$miconexion->consulta("insert into provincia values('','$this->nombres')");

    //$this->Disconnect();
    return $resSQL;
  }
  public function AddCanton() {
    $miconexion=$this->conectarDb();
    $resSQL=$miconexion->consulta("insert into canton values('','$this->nombres','$this->provincia')");
    //$this->Disconnect();
    return $resSQL;
  }
  public function AddParroquia() {
    $miconexion=$this->conectarDb();
    $resSQL=$miconexion->consulta("insert into parroquia values('','$this->nombres','$this->canton')");
    echo "insert into parroquia values('','$this->nombres','$this->canton')";
    //$this->Disconnect();
    return $resSQL;
  }
}
