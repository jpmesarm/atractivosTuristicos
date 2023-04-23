<?php
    require_once "../../dll/config.php";
    require_once "../../dll/class_mysqli.php";

class DataTestModel{
  private $idUser;
  private $nombres;
  private $apellidos;
  private $correo;
  var $miconexion;
  
  function DataTestModel(){
    //$this->miconexion = new clase_mysqli;
    //$this->miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
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


  public function setParroquia($parroquia){
    $this->parroquia = $parroquia;
  }
  public function setTipo($tipo){
    $this->tipo = $tipo;
  }
  public function setBarrio($barrio){
    $this->barrio = $barrio;
  }
  public function setCalle($calle){
    $this->calle = $calle;
  }
  public function setNumero($numero){
    $this->numero = $numero;
  }
  public function setTransversal($transversal){
    $this->transversal = $transversal;
  }
  public function setLatitud($latitud){
    $this->latitud = $latitud;
  }
  public function setLongitud($longitud){
    $this->longitud = $longitud;
  }
  public function setAltura($altura){
    $this->altura = $altura;
  }
  public function setTipoadmin($tipoadmin){
    $this->tipoadmin = $tipoadmin;
  }
  public function setNombreadmin($nombreadmin){
    $this->nombreadmin = $nombreadmin;
  }
  public function setNombreinst($nombreinst){
    $this->nombreinst = $nombreinst;
  }
  public function setCargoadmin($cargoadmin){
    $this->cargoadmin = $cargoadmin;
  }
  public function setTelfadmin($telfadmin){
    $this->telfadmin = $telfadmin;
  }
  public function setCorreoadmin($correoadmin){
    $this->correoadmin = $correoadmin;
  }
  public function setImagen($imagen){
    $this->imagen = $imagen;
  }


  public function setClima($clima){
    $this->clima = $clima;
  }
  public function setLinea($linea){
    $this->linea = $linea;
  }
  public function setReserva($reserva){
    $this->reserva = $reserva;
  }
  public function setMesvista($mesvisita){
    $this->mesvisita = $mesvisita;
  }
  public function setTemperatura($temperatura){
    $this->temperatura = $temperatura;
  }
  public function setEscenario($escenario){
    $this->escenario = $escenario;
  }
  public function setPrecio($precio){
    $this->precio = $precio;
  }
  public function setPrecipitacion($precipitacion){
    $this->precipitacion = $precipitacion;
  }
  public function setIngreso($ingreso){
    $this->ingreso = $ingreso;
  }
  public function setHorario($horario){
    $this->horario = $horario;
  }
  public function setDiasatencion($diasatencion){
    $this->diasatencion = $diasatencion;
  }
  public function setFormaspago($formaspago){
    $this->formaspago = $formaspago;
  }
  public function setIdatractivo($idatractivo){
    $this->idatractivo = $idatractivo;
  }
  public function setIdCaracteristica($idcaracteristicas){
    $this->idcaracteristicas = $idcaracteristicas;
  }



  public function setDistancia($distancia){
    $this->distancia = $distancia;
  }
  public function setPoblado($poblado){
    $this->poblado = $poblado;
  }
  public function setDesplazamiento($desplazamiento){
    $this->desplazamiento = $desplazamiento;
  }
  public function setAcceso($acceso){
    $this->acceso = $acceso;
  }
  public function setTipoacceso($tipoacceso){
    $this->tipoacceso = $tipoacceso;
  }
  public function setTipovia($tipovia){
    $this->tipovia = $tipovia;
  }
  public function setEstadovia($estadovia){
    $this->estadovia = $estadovia;
  }
  public function setCooperativa($cooperativa){
    $this->cooperativa = $cooperativa;
  }
  public function setTerminal($terminal){
    $this->terminal = $terminal;
  }
  public function setFrecuencia($frecuencia){
    $this->frecuencia = $frecuencia;
  }
  public function setDiasatencíon($diasatencion){
    $this->diasatencion = $diasatencion;
  }
  public function setDetalletraslado($detalletraslado){
    $this->detalletraslado = $detalletraslado;
  }
  public function setAccesibilidad($accesibilidad){
    $this->accesibilidad = $accesibilidad;
  }
  public function setSenializacion($senializacion){
    $this->senializacion = $senializacion;
  }
  public function setEstadosenial($estadosenial){
    $this->estadosenial = $estadosenial;
  }




  public function setPlanta($planta){
    $this->planta = $planta;
  }
  public function setNumalojamiento($numalojamiento){
    $this->numalojamiento = $numalojamiento;
  }
  public function setNumHabitaciones($numHabitaciones){
    $this->numHabitaciones = $numHabitaciones;
  }
  public function setNumplazas($numplazas){
    $this->numplazas = $numplazas;
  }
  public function setTipoalimentos($tipoalimentos){
    $this->tipoalimentos = $tipoalimentos;
  }
  public function setNumalimentos($numalimentos){
    $this->numalimentos = $numalimentos;
  }
  public function setNummesas($nummesas){
    $this->nummesas = $nummesas;
  }
  public function setNumplazasalim($numplazasalim){
    $this->numplazasalim = $numplazasalim;
  }
  public function setTipoagencia($tipoagencia){
    $this->tipoagencia = $tipoagencia;
  }
  public function setNumagencias($numagencias){
    $this->numagencias = $numagencias;
  }
  public function setTipoaloja($tipoaloja){
    $this->tipoaloja = $tipoaloja;
  }
  public function setEstablecimiento($establecimiento){
    $this->establecimiento = $establecimiento;
  }
  public function setNumhabitacionespueblo($numhabitacionespueblo){
    $this->numhabitacionespueblo = $numhabitacionespueblo;
  }
  public function setPlazascercano($plazascercano){
    $this->plazascercano = $plazascercano;
  }
  public function setTipoestablecicercano($tipoestablecicercano){
    $this->tipoestablecicercano = $tipoestablecicercano;
  }
  public function setEstaalimencerca($estaalimencerca){
    $this->estaalimencerca = $estaalimencerca;
  }
  public function setNummesascerca($nummesascerca){
    $this->nummesascerca = $nummesascerca;
  }
  public function setNummesascerca2($nummesascerca2){
    $this->nummesascerca2 = $nummesascerca2;
  }
  public function setTipoagen2($tipoagen2){
    $this->tipoagen2 = $tipoagen2;
  }
  public function setNumagen2($numagen2){
    $this->numagen2 = $numagen2;
  }
  public function setCatafacilidad($catafacilidad){
    $this->catafacilidad = $catafacilidad;
  }
  public function setCatafacilidad2($catafacilidad2){
    $this->catafacilidad2 = $catafacilidad2;
  }
  public function setCantidacatfacilidad($cantidacatfacilidad){
    $this->cantidacatfacilidad = $cantidacatfacilidad;
  }
  public function setLat1($lat1){
    $this->lat1 = $lat1;
  }
  public function setLong2($long2){
    $this->long2 = $long2;
  }
  public function setAdmin($admin){
    $this->admin = $admin;
  }
  public function setAcceuniver($acceuniver){
    $this->acceuniver = $acceuniver;
  }
  public function setEstadofacilidad($estadofacilidad){
    $this->estadofacilidad = $estadofacilidad;
  }
  public function setComplementarios1($complementarios1){
    $this->complementarios1 = $complementarios1;
  }
  public function setComplementarios2($complementarios2){
    $this->complementarios2 = $complementarios2;
  }





  public function setEstado($estado){
    $this->estado = $estado;
  }
  public function setFactores($factores){
    $this->factores = $factores;
  }
  public function setFactores2($factores2){
    $this->factores2 = $factores2;
  }
  public function setEstadocon($estadocon){
    $this->estadocon = $estadocon;
  }
  public function setFactores3($factores3){
    $this->factores3 = $factores3;
  }
  public function setFactores4($factores4){
    $this->factores4 = $factores4;
  }
  public function setDeclaratoria($declaratoria){
    $this->declaratoria = $declaratoria;
  }
  public function setDeclarante($declarante){
    $this->declarante = $declarante;
  }
  public function setDenominacion($denominacion){
    $this->denominacion = $denominacion;
  }
  public function setFechadeclaratoria($fechadeclaratoria){
    $this->fechadeclaratoria = $fechadeclaratoria;
  }
  public function setAlcance($alcance){
    $this->alcance = $alcance;
  }










  public function AddPlace() {
    $miconexion=$this->conectarDb();
    $resSQL=$miconexion->consulta("insert into atractivo values('','$this->nombres','$this->parroquia','$this->barrio','$this->calle','$this->numero','$this->transversal','$this->latitud','$this->longitud','$this->altura','$this->tipoadmin','$this->nombreadmin','$this->nombreinst','$this->cargoadmin','$this->telfadmin','$this->correoadmin','$this->imagen','$this->tipo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL)");
    echo "insert into atractivo values('','$this->nombres','$this->parroquia','$this->barrio','$this->calle','$this->numero','$this->transversal','$this->latitud','$this->longitud','$this->altura','$this->tipoadmin','$this->nombreadmin','$this->nombreinst','$this->cargoadmin','$this->telfadmin','$this->correoadmin','$this->tipo',NULL)";
    //$this->Disconnect();
    return $resSQL;
  }

  public function AddPlaceCaracteristic() {
    $miconexion=$this->conectarDb();
    $resSQL=$miconexion->consulta("insert into caracteristicas values('','$this->clima','$this->temperatura','$this->precipitacion','$this->linea','$this->escenario','$this->ingreso','$this->horario','$this->diasatencion','$this->reserva','$this->precio','$this->formaspago','$this->mesvisita')");

    $miconexion->consulta("select max(idcaracteristicas) from caracteristicas");
    $reslist=$miconexion->consulta_lista();
    $res2=$miconexion->consulta("update atractivo set caracteristicas_idcaracteristicas='$reslist[0]' where idatractivo='$this->idatractivo'");
    return $resSQL;
  }

  public function UpdatePlaceCaracteristic() {
    $miconexion=$this->conectarDb();
    $resSQL=$miconexion->consulta("update caracteristicas set clima='$this->clima', temperatura='$this->temperatura', precipitacion='$this->precipitacion', lineaPertenece='$this->linea', escenario='$this->escenario', tipoIngreso='$this->ingreso', horarios='$this->horario', diasAtencion='$this->diasatencion', reservas='$this->reserva', precios='$this->precio', formaPagos='$this->formaspago', recomendacionTiempo='$this->mesvisita' where idcaracteristicas='$this->idcaracteristicas'");
  
    return $resSQL;
  }

  public function UpdatePlaceInfo() {
    $miconexion=$this->conectarDb();
    $resSQL=$miconexion->consulta("update atractivo set nombre='$this->nombres', parroquia_idparroquia='$this->parroquia', barrio='$this->barrio', calle='$this->calle',numero='$this->numero', transversal='$this->transversal', latitud='$this->latitud', longitud='$this->longitud', altura='$this->altura', tipoAdmin='$this->tipoadmin', nombreAdmin='$this->nombreadmin', nombreInstitucion='$this->nombreinst', cargoAdmin='$this->cargoadmin', telefonoAdmin='$this->telfadmin', correoAdmin='$this->correoadmin',imagen='$this->imagen', subtipo_idsubtipo='$this->tipo' where idatractivo='$this->idcaracteristicas'");
  
    return $resSQL;
  }

  function GetData1() {
    $miconexion=$this->conectarDb();
    $resSQL=$miconexion->consulta("SELECT a.idatractivo, a.nombre, t.nombre 'Tipo' ,st.nombre 'Subtipo',pr.nombre 'provincia',ca.nombre 'canton', pa.nombre 'Parroquia', a.tipoAdmin, a.nombreAdmin, a.caracteristicas_idcaracteristicas, a.accesibilidad_idaccesibilidad, a.turistica_idturistica, a.conservacion_idconservacion, a.parroquia_idparroquia, a.subtipo_idsubtipo
      FROM atractivo a, subtipo st, tipo t, parroquia pa, provincia pr, canton ca
      WHERE a.subtipo_idsubtipo=st.idsubtipo and st.tipo_idtipo=t.idtipo and a.parroquia_idparroquia=pa.idparroquia and pa.canton_idcanton=ca.idcanton and ca.provincia_idprovincia=pr.idprovincia");

    $resSQL=$miconexion->GetData11();
    return $resSQL;
  }
  public function GetTipo() {
    $miconexion=$this->conectarDb();
    $resSQL=$miconexion->consulta("select t.nombre tipo, c.idsubtipo, c.nombre subtipo
                                          from tipo t, subtipo c
                                          where c.tipo_idtipo=t.idtipo");
    $resSQL=$miconexion->GetDataList3();
    //$this->Disconnect();
    return $resSQL;
  }
  public function ListArrayTest($userId) {
    $miconexion=$this->conectarDb();
    $miconexion->consulta("select * from encuesta2 where id= '$userId'");
    $resSQL=$miconexion->consulta_lista();
    return $resSQL;
  }
  public function GetDataCar($idCar) {
    $miconexion=$this->conectarDb();
    $miconexion->consulta("select * from caracteristicas where idcaracteristicas= '$idCar'");
    $resSQL=$miconexion->GetData11();
    return $resSQL;
  }

  public function GetDataInfo($idCar) {
    $miconexion=$this->conectarDb();
    $miconexion->consulta("select * from atractivo where idatractivo= '$idCar'");
    $resSQL=$miconexion->GetData11();
    return $resSQL;
  }

  public function DelTest($testId,$idparr,$idtipo) {
    $miconexion=$this->conectarDb();
    $resSQL=$miconexion->consulta("delete  from atractivo where idatractivo='$testId' AND parroquia_idparroquia = '$idparr' AND subtipo_idsubtipo = '$idtipo'");

    //$this->Disconnect();
    return $resSQL;
  }


  
  public function GetDataAccessibility($idCar) {
    $miconexion=$this->conectarDb();
    $miconexion->consulta("select * from accesibilidad where idaccesibilidad= '$idCar'");
    $resSQL=$miconexion->GetData11();
    return $resSQL;
  }
  public function AddAccessibility() {
    $miconexion=$this->conectarDb();
    $resSQL=$miconexion->consulta("insert into accesibilidad values('','$this->poblado','$this->distancia','$this->desplazamiento','$this->latitud','$this->longitud','$this->acceso','$this->tipoacceso','$this->tipovia','$this->estadovia','$this->cooperativa','$this->terminal','$this->frecuencia','$this->detalletraslado','$this->accesibilidad','$this->senializacion','$this->estadosenial','')");

    $miconexion->consulta("select max(idaccesibilidad) from accesibilidad");
    $reslist=$miconexion->consulta_lista();
    $res2=$miconexion->consulta("update atractivo set accesibilidad_idaccesibilidad='$reslist[0]' where idatractivo='$this->idatractivo'");
    return $resSQL;
  }
  public function UpdateAccessibility() {
    $miconexion=$this->conectarDb();
    $resSQL=$miconexion->consulta("update accesibilidad set poblado='$this->poblado', distancia='$this->distancia', desplazamiento='$this->desplazamiento', latitud='$this->latitud', longitud='$this->longitud', modalidadacceso='$this->acceso', tipoacceso='$this->tipoacceso', tipovia='$this->tipovia', estadovia='$this->estadovia', cooperativa='$this->cooperativa', terminal='$this->terminal', frecuencia='$this->frecuencia', detalletraslado='$this->detalletraslado', accesibilidad='$this->accesibilidad', senializacion='$this->senializacion', estadosenial='$this->estadosenial' where idaccesibilidad='$this->idcaracteristicas'");
  
    return $resSQL;
  }



  public function GetDataTuristic($idCar) {
    $miconexion=$this->conectarDb();
    $miconexion->consulta("select * from turistica where idturistica= '$idCar'");
    $resSQL=$miconexion->GetData11();
    return $resSQL;
  }
  public function AddTuristic() {
    $miconexion=$this->conectarDb();

    $resSQL=$miconexion->consulta("insert into turistica values('','$this->planta','$this->tipo','$this->numalojamiento','$this->numHabitaciones','$this->numplazas','$this->tipoalimentos','$this->numalimentos','$this->nummesas','$this->numplazasalim','$this->tipoagencia','$this->numagencias','$this->tipoaloja','$this->establecimiento','$this->numhabitacionespueblo','$this->plazascercano','$this->tipoestablecicercano','$this->estaalimencerca','$this->nummesascerca','$this->nummesascerca2','$this->tipoagen2','$this->numagen2','$this->catafacilidad','$this->catafacilidad2','$this->cantidacatfacilidad','$this->lat1','$this->long2','$this->admin','$this->acceuniver','$this->estadofacilidad','$this->complementarios1','$this->complementarios2')");

    $miconexion->consulta("select max(idturistica) from turistica");
    $reslist=$miconexion->consulta_lista();
    $res2=$miconexion->consulta("update atractivo set turistica_idturistica='$reslist[0]' where idatractivo='$this->idatractivo'");

    return $resSQL;
  }
  public function UpdateTuristic() {
    $miconexion=$this->conectarDb();
    $resSQL=$miconexion->consulta("update turistica set planta='$this->planta',tipo='$this->tipo',numalojamiento='$this->numalojamiento',numHabitaciones='$this->numHabitaciones',numplazas='$this->numplazas',tipoalimentos='$this->tipoalimentos',numalimentos='$this->numalimentos',nummesas='$this->nummesas',numplazasalim='$this->numplazasalim',tipoagencia='$this->tipoagencia',numagencias='$this->numagencias',tipoaloja='$this->tipoaloja',establecimiento='$this->establecimiento',numhabitacionespueblo='$this->numhabitacionespueblo',plazascercano='$this->plazascercano',tipoestablecicercano='$this->tipoestablecicercano',estaalimencerca='$this->estaalimencerca',nummesascerca='$this->nummesascerca',nummesascerca2='$this->nummesascerca2',tipoagen2='$this->tipoagen2',numagen2='$this->numagen2',catafacilidad='$this->catafacilidad',catafacilidad2='$this->catafacilidad2',cantidacatfacilidad='$this->cantidacatfacilidad',lat1='$this->lat1',long1='$this->long2',admin='$this->admin',acceuniver='$this->acceuniver',estadofacilidad='$this->estadofacilidad',complementarios1='$this->complementarios1',complementarios2='$this->complementarios2'
     where idturistica='$this->idcaracteristicas'");
  
    return $resSQL;
  }




  public function GetDataIntegration($idCar) {
    $miconexion=$this->conectarDb();
    $miconexion->consulta("select * from conservacion where idconservacion= '$idCar'");
    $resSQL=$miconexion->GetData11();
    return $resSQL;
  }
  public function AddIntegration() {
    $miconexion=$this->conectarDb();

    $resSQL=$miconexion->consulta("insert into conservacion values('','$this->estado','$this->factores','$this->factores2','$this->estadocon','$this->factores3','$this->factores4','$this->declaratoria','$this->declarante','$this->denominacion','$this->fechadeclaratoria','$this->alcance')");



    $miconexion->consulta("select max(idconservacion) from conservacion");
    $reslist=$miconexion->consulta_lista();
    $res2=$miconexion->consulta("update atractivo set conservacion_idconservacion='$reslist[0]' where idatractivo='$this->idatractivo'");

    return $resSQL;
  }
  public function UpdateIntegration() {
    $miconexion=$this->conectarDb();
    $resSQL=$miconexion->consulta("update conservacion set estado='$this->estado',factores='$this->factores',factores2='$this->factores2',estadocon='$this->estadocon',factores3='$this->factores3',factores4='$this->factores4',declaratoria='$this->declaratoria',declarante='$this->declarante',denominacion='$this->denominacion',fechadeclaratoria='$this->fechadeclaratoria',alcance='$this->alcance'
     where idconservacion='$this->idcaracteristicas'");

    return $resSQL;
  }



}
