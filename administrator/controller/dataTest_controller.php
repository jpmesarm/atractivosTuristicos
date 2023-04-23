<?php
require_once "../models/dataTestModels.php";

class dataTest_controller{
	/*variables de conexoion*/
	var $BaseDatos;
	var $Servidor;


	function dataTest_controller($host="", $user="", $pass="", $db=""){
		$this->BaseDatos=$db;
		$this->Servidor=$host;
		$this->Usuario=$user;
		$this->Clave=$pass;
	}
    public function RemoveSpecialChar($str)
    {
        $res = preg_replace('/[0-9\@#\&\;\" "]+/', '', $str);
        return $res;
    }
    public function CreatePlace()
    {
        $user = new DataTestModel();

        if (isset($_POST['nombres'])) {
            $user->setNombres($_POST['nombres']);
            $user->setParroquia($_POST['parroquia']);
            $user->setTipo($_POST['tipo']);
            $user->setBarrio($_POST['barrio']);
            $user->setCalle($_POST['calle']);
            $user->setNumero($_POST['numero']);
            $user->setTransversal($_POST['transversal']);
            $user->setLatitud($_POST['latitud']);
            $user->setLongitud($_POST['longitud']);
            $user->setAltura($_POST['altura']);
            $user->setTipoadmin($_POST['tipoadmin']);
            $user->setNombreadmin($_POST['nombreadmin']);
            $user->setNombreinst($_POST['nombreinst']);
            $user->setCargoadmin($_POST['cargoadmin']);
            $user->setTelfadmin($_POST['telfadmin']);
            $user->setCorreoadmin($_POST['correoadmin']);

            $nameImage=$this->RemoveSpecialChar($_FILES['imagen']['name']);
            $user->setImagen($nameImage);


            $errores = "";
            if(($_FILES['imagen']['type'] != 'image/png') AND ($_FILES['imagen']['type'] != 'image/jpeg')){
                $errores .= "- La imagen debe ser de la extensión PNG o JPG";
            }
             
            if($_FILES['imagen']['size'] >= 2097152){ // 2MB
                $errores .= "- La imagen debe ser menos de 2 Mb.";
            }
             
            if(empty($errores)){
               // $nameImage=$this->RemoveSpecialChar($_FILES['imagen']['name']);
                $path = "imagenes/". basename($nameImage); 
                if(move_uploaded_file($_FILES['imagen']['tmp_name'], $path)) {
                    echo "El archivo ".  basename( $_FILES['imagen']['name']). " ha sido subido";
                    $userResponse = $user->AddPlace();
                } else{
                    echo "El archivo no se ha subido correctamente";
                }
            }else{
                echo $errores;
            }


            
            if ($userResponse == 1) // exitoso
            {
                echo "<script>location.href='../views/libraryView.php?action=dataTest'</script>";
            } else {
                echo "<h1>Error al crear el atractivo.</h1>";
            }
        }
    }
    public function CreatePlaceCaracteristic()
    {
        $user = new DataTestModel();

        if (isset($_POST['clima'])) {
            $user->setClima($_POST['clima']);
            $user->setLinea($_POST['linea']);
            $user->setReserva($_POST['reserva']);
            $user->setMesvista($_POST['mesvisita']);
            $user->setTemperatura($_POST['temperatura']);
            $user->setEscenario($_POST['escenario']);
            $user->setPrecio($_POST['precio']);
            $user->setPrecipitacion($_POST['precipitacion']);
            $user->setIngreso($_POST['ingreso']);
            $user->setHorario($_POST['horario']);
            $user->setDiasatencion($_POST['diasatencion']);
            $user->setFormaspago($_POST['formaspago']);
            $user->setIdatractivo($_POST['idatractivo']);

            $userResponse = $user->AddPlaceCaracteristic();
            if ($userResponse == 1) // exitoso
            {
                echo "<script>location.href='../views/libraryView.php?action=dataTest'</script>";
            } else {
                echo "<h1>Error al crear el atractivo.</h1>";
            }
        }
    }
    public function UpdatePlaceCaracteristic()
    {
        $user = new DataTestModel();

        if (isset($_POST['clima'])) {
            $user->setClima($_POST['clima']);
            $user->setLinea($_POST['linea']);
            $user->setReserva($_POST['reserva']);
            $user->setMesvista($_POST['mesvisita']);
            $user->setTemperatura($_POST['temperatura']);
            $user->setEscenario($_POST['escenario']);
            $user->setPrecio($_POST['precio']);
            $user->setPrecipitacion($_POST['precipitacion']);
            $user->setIngreso($_POST['ingreso']);
            $user->setHorario($_POST['horario']);
            $user->setDiasatencion($_POST['diasatencion']);
            $user->setFormaspago($_POST['formaspago']);
            $user->setIdatractivo($_POST['idatractivo']);
            $user->setIdCaracteristica($_POST['idCar']);

            $userResponse = $user->UpdatePlaceCaracteristic();
            if ($userResponse == 1) // exitoso
            {
                echo "<script>location.href='../views/libraryView.php?action=dataTest'</script>";
            } else {
                echo "<h1>Error al crear el atractivo.</h1>";
            }
        }
    }

    public function UpdatePlaceInfo()
    {
        $user = new DataTestModel();

        if (isset($_POST['nombres'])) {
            $user->setNombres($_POST['nombres']);
            $user->setParroquia($_POST['parroquia']);
            $user->setTipo($_POST['tipo']);
            $user->setBarrio($_POST['barrio']);
            $user->setCalle($_POST['calle']);
            $user->setNumero($_POST['numero']);
            $user->setTransversal($_POST['transversal']);
            $user->setLatitud($_POST['latitud']);
            $user->setLongitud($_POST['longitud']);
            $user->setAltura($_POST['altura']);
            $user->setTipoadmin($_POST['tipoadmin']);
            $user->setNombreadmin($_POST['nombreadmin']);
            $user->setNombreinst($_POST['nombreinst']);
            $user->setCargoadmin($_POST['cargoadmin']);
            $user->setTelfadmin($_POST['telfadmin']);
            $user->setCorreoadmin($_POST['correoadmin']);
            $user->setIdCaracteristica($_POST['idCar']);

            $nameImage=$this->RemoveSpecialChar($_FILES['imagen']['name']);
            $user->setImagen($nameImage);


            $errores = "";
            if(($_FILES['imagen']['type'] != 'image/png') AND ($_FILES['imagen']['type'] != 'image/jpeg')){
                $errores .= "- La imagen debe ser de la extensión PNG o JPG";
            }
             
            if($_FILES['imagen']['size'] >= 2097152){ // 2MB
                $errores .= "- La imagen debe ser menos de 2 Mb.";
            }
             
            if(empty($errores)){
               // $nameImage=$this->RemoveSpecialChar($_FILES['imagen']['name']);
                $path = "imagenes/". basename($nameImage); 
                if(move_uploaded_file($_FILES['imagen']['tmp_name'], $path)) {
                    echo "El archivo ".  basename( $_FILES['imagen']['name']). " ha sido subido";
                    $userResponse = $user->UpdatePlaceInfo();
                } else{
                    echo "El archivo no se ha subido correctamente";
                }
            }else{
                echo $errores;
            }

            if ($userResponse == 1) // exitoso
            {
                echo "<script>location.href='../views/libraryView.php?action=dataTest'</script>";
            } else {
                echo "<h1>Error al crear el atractivo.</h1>";
            }
        }
    }

    public function ArrayTest($userId)
    {
        $user = new DataTestModel();
        $userResponse = $user->ListArrayTest($userId);
        return $userResponse;
    }
    public function GetCaracteristic($idCar)
    {
        $user = new DataTestModel();
        $data = $user->GetDataCar($idCar);
        return $data;
    }
    public function GetInfo($idCar)
    {
        $user = new DataTestModel();
        $data = $user->GetDataInfo($idCar);
        return $data;
    }
    public function GetData()
    {
        $user = new DataTestModel();
        $data = $user->GetData1();
        return $data;
    }
    public function GetTipo()
    {
        $user = new DataTestModel();
        $data = $user->GetTipo();
        return $data;
    }
    public function DeleteTest($testId,$idparr,$idtipo)
    {
        $user = new DataTestModel();
        $userResponse = $user->DelTest($testId,$idparr,$idtipo);
        if ($userResponse) {
	        echo "<script>location.href='../views/libraryView.php?action=dataTest&idparr=idparr&idtipo=$idtipo'</script>";
        }
        
    }

    /************************************************************************************/
    /*-------------Accessibility -------------------------------------------------------*/
    public function GetAccessibility($idCar)
    {
        $user = new DataTestModel();
        $data = $user->GetDataAccessibility($idCar);
        return $data;
    }

    public function UpdateAccessibility()
    {
        $user = new DataTestModel();

        if (isset($_POST['poblado'])) {
            $user->setPoblado($_POST['poblado']);
            $user->setDistancia($_POST['distancia']);
            $user->setDesplazamiento($_POST['desplazamiento']);
            $user->setLatitud($_POST['latitud']);
            $user->setLongitud($_POST['longitud']);
            $user->setAcceso($_POST['acceso']);
            $user->setTipoacceso($_POST['tipoacceso']);
            $user->setTipovia($_POST['tipovia']);
            $user->setEstadovia($_POST['estadovia']);
            $user->setCooperativa($_POST['cooperativa']);
            $user->setTerminal($_POST['terminal']);
            $user->setFrecuencia($_POST['frecuencia']);
            $user->setDetalletraslado($_POST['detalletraslado']);
            $user->setAccesibilidad($_POST['accesibilidad']);
            $user->setSenializacion($_POST['senializacion']);
            $user->setEstadosenial($_POST['estadosenial']);
            $user->setIdatractivo($_POST['idatractivo']);
            $user->setIdCaracteristica($_POST['idCar']);

            $userResponse = $user->UpdateAccessibility();
            if ($userResponse == 1) // exitoso
            {
                echo "<script>location.href='../views/libraryView.php?action=dataTest'</script>";
            } else {
                echo "<h1>Error al crear el atractivo.</h1>";
            }
        }
    }
    public function CreateAccessibility()
    {
        $user = new DataTestModel();

        if (isset($_POST['poblado'])) {
            $user->setPoblado($_POST['poblado']);
            $user->setDistancia($_POST['distancia']);
            $user->setDesplazamiento($_POST['desplazamiento']);
            $user->setLatitud($_POST['latitud']);
            $user->setLongitud($_POST['longitud']);
            $user->setAcceso($_POST['acceso']);
            $user->setTipoacceso($_POST['tipoacceso']);
            $user->setTipovia($_POST['tipovia']);
            $user->setEstadovia($_POST['estadovia']);
            $user->setCooperativa($_POST['cooperativa']);
            $user->setTerminal($_POST['terminal']);
            $user->setFrecuencia($_POST['frecuencia']);
            $user->setDetalletraslado($_POST['detalletraslado']);
            $user->setAccesibilidad($_POST['accesibilidad']);
            $user->setSenializacion($_POST['senializacion']);
            $user->setEstadosenial($_POST['estadosenial']);
           // $user->setDiasatencion($_POST['diasatencion']);
            $user->setIdatractivo($_POST['idatractivo']);

            $userResponse = $user->AddAccessibility();
            if ($userResponse == 1) // exitoso
            {
                echo "<script>location.href='../views/libraryView.php?action=dataTest'</script>";
            } else {
                echo "<h1>Error al crear el atractivo.</h1>";
            }
        }
    }

    /************************************************************************************/
    /*------------- TURISTIC    -------------------------------------------------------*/
    public function GetTuristic($idCar)
    {
        $user = new DataTestModel();
        $data = $user->GetDataTuristic($idCar);
        return $data;
    }

    public function UpdateTuristic()
    {
        $user = new DataTestModel();

        if (isset($_POST['planta'])) {
            $user->setPlanta($_POST['planta']);
            $user->setTipo($_POST['tipo']);
            $user->setNumalojamiento($_POST['numalojamiento']);
            $user->setNumHabitaciones($_POST['numHabitaciones']);
            $user->setNumplazas($_POST['numplazas']);
            $user->setTipoalimentos($_POST['tipoalimentos']);
            $user->setNumalimentos($_POST['numalimentos']);
            $user->setNummesas($_POST['nummesas']);
            $user->setNumplazasalim($_POST['numplazasalim']);
            $user->setTipoagencia($_POST['tipoagencia']);
            $user->setNumagencias($_POST['numagencias']);
            $user->setTipoaloja($_POST['tipoaloja']);
            $user->setEstablecimiento($_POST['establecimiento']);
            $user->setNumhabitacionespueblo($_POST['numhabitacionespueblo']);
            $user->setPlazascercano($_POST['plazascercano']);
            $user->setTipoestablecicercano($_POST['tipoestablecicercano']);
            $user->setEstaalimencerca($_POST['estaalimencerca']);
            $user->setNummesascerca($_POST['nummesascerca']);
            $user->setNummesascerca2($_POST['nummesascerca2']);
            $user->setTipoagen2($_POST['tipoagen2']);
            $user->setNumagen2($_POST['numagen2']);
            $user->setCatafacilidad($_POST['catafacilidad']);
            $user->setCatafacilidad2($_POST['catafacilidad2']);
            $user->setCantidacatfacilidad($_POST['cantidacatfacilidad']);
            $user->setLat1($_POST['lat1']);
            $user->setLong2($_POST['long2']);
            $user->setAdmin($_POST['admin']);
            $user->setAcceuniver($_POST['acceuniver']);
            $user->setEstadofacilidad($_POST['estadofacilidad']);
            $user->setComplementarios1($_POST['complementarios1']);
            $user->setComplementarios2($_POST['complementarios2']);
            $user->setIdatractivo($_POST['idatractivo']);
            $user->setIdCaracteristica($_POST['idCar']);

            $userResponse = $user->UpdateTuristic();
            if ($userResponse == 1) // exitoso
            {
                echo "<script>location.href='../views/libraryView.php?action=dataTest'</script>";
            } else {
                echo "<h1>Error al crear el atractivo.</h1>";
            }
        }
    }
    public function CreateTuristic()
    {
        $user = new DataTestModel();

        if (isset($_POST['planta'])) {
            $user->setPlanta($_POST['planta']);
            $user->setTipo($_POST['tipo']);
            $user->setNumalojamiento($_POST['numalojamiento']);
            $user->setNumHabitaciones($_POST['numHabitaciones']);
            $user->setNumplazas($_POST['numplazas']);
            $user->setTipoalimentos($_POST['tipoalimentos']);
            $user->setNumalimentos($_POST['numalimentos']);
            $user->setNummesas($_POST['nummesas']);
            $user->setNumplazasalim($_POST['numplazasalim']);
            $user->setTipoagencia($_POST['tipoagencia']);
            $user->setNumagencias($_POST['numagencias']);
            $user->setTipoaloja($_POST['tipoaloja']);
            $user->setEstablecimiento($_POST['establecimiento']);
            $user->setNumhabitacionespueblo($_POST['numhabitacionespueblo']);
            $user->setPlazascercano($_POST['plazascercano']);
            $user->setTipoestablecicercano($_POST['tipoestablecicercano']);
            $user->setEstaalimencerca($_POST['estaalimencerca']);
            $user->setNummesascerca($_POST['nummesascerca']);
            $user->setNummesascerca2($_POST['nummesascerca2']);
            $user->setTipoagen2($_POST['tipoagen2']);
            $user->setNumagen2($_POST['numagen2']);
            $user->setCatafacilidad($_POST['catafacilidad']);
            $user->setCatafacilidad2($_POST['catafacilidad2']);
            $user->setCantidacatfacilidad($_POST['cantidacatfacilidad']);
            $user->setLat1($_POST['lat1']);
            $user->setLong2($_POST['long2']);
            $user->setAdmin($_POST['admin']);
            $user->setAcceuniver($_POST['acceuniver']);
            $user->setEstadofacilidad($_POST['estadofacilidad']);
            $user->setComplementarios1($_POST['complementarios1']);
            $user->setComplementarios2($_POST['complementarios2']);
            $user->setIdatractivo($_POST['idatractivo']);

            $userResponse = $user->AddTuristic();
            if ($userResponse == 1) // exitoso
            {
                echo "<script>location.href='../views/libraryView.php?action=dataTest'</script>";
            } else {
                echo "<h1>Error al crear el atractivo.</h1>";
            }
        }
    }


     /************************************************************************************/
    /*------------- INTEGRATION   -------------------------------------------------------*/
    public function GetIntegration($idCar)
    {
        $user = new DataTestModel();
        $data = $user->GetDataIntegration($idCar);
        return $data;
    }

    public function UpdateIntegration()
    {
        $user = new DataTestModel();

        if (isset($_POST['estado'])) {
            $user->setEstado($_POST['estado']);
            $user->setFactores($_POST['factores']);
            $user->setFactores2($_POST['factores2']);
            $user->setEstadocon($_POST['estadocon']);
            $user->setFactores3($_POST['factores3']);
            $user->setFactores4($_POST['factores4']);
            $user->setDeclaratoria($_POST['declaratoria']);
            $user->setDeclarante($_POST['declarante']);
            $user->setDenominacion($_POST['denominacion']);
            $user->setFechadeclaratoria($_POST['fechadeclaratoria']);
            $user->setAlcance($_POST['alcance']);
            $user->setIdatractivo($_POST['idatractivo']);
            $user->setIdCaracteristica($_POST['idCar']);

            $userResponse = $user->UpdateIntegration();
            if ($userResponse == 1) // exitoso
            {
                echo "<script>location.href='../views/libraryView.php?action=dataTest'</script>";
            } else {
                echo "<h1>Error al crear el atractivo.</h1>";
            }
        }
    }
    public function CreateIntegration()
    {
        $user = new DataTestModel();

        if (isset($_POST['estado'])) {
            $user->setEstado($_POST['estado']);
            $user->setFactores($_POST['factores']);
            $user->setFactores2($_POST['factores2']);
            $user->setEstadocon($_POST['estadocon']);
            $user->setFactores3($_POST['factores3']);
            $user->setFactores4($_POST['factores4']);
            $user->setDeclaratoria($_POST['declaratoria']);
            $user->setDeclarante($_POST['declarante']);
            $user->setDenominacion($_POST['denominacion']);
            $user->setFechadeclaratoria($_POST['fechadeclaratoria']);
            $user->setAlcance($_POST['alcance']);
            $user->setIdatractivo($_POST['idatractivo']);

            $userResponse = $user->AddIntegration();
            if ($userResponse == 1) // exitoso
            {
                echo "<script>location.href='../views/libraryView.php?action=dataTest'</script>";
            } else {
                echo "<h1>Error al crear el atractivo.</h1>";
            }
        }
    }





}







?>