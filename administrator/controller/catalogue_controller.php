<?php
require_once "../models/catalogueModels.php";

class catalogue_controller{
	/*variables de conexoion*/
	var $BaseDatos;
	var $Servidor;


	function catalogue_controller($host="", $user="", $pass="", $db=""){
		$this->BaseDatos=$db;
		$this->Servidor=$host;
		$this->Usuario=$user;
		$this->Clave=$pass;
	}
    

    public function ArrayTest($userId)
    {
        $user = new CatalogueModel();
        $userResponse = $user->ListArrayTest($userId);
        return $userResponse;
    }

    public function GetData()
    {
        $user = new CatalogueModel();
        $data = $user->GetData();
        return $data;
    }
    public function GetProvince()
    {
        $user = new CatalogueModel();
        $data = $user->GetProvence();
        return $data;
    }
    public function GetCanton()
    {
        $user = new CatalogueModel();
        $data = $user->GetCanton();
        return $data;
    }
    public function GetParroquia()
    {
        $user = new CatalogueModel();
        $data = $user->GetParroquia();
        return $data;
    }
    public function DeleteParroquia($testId)
    {
        $user = new CatalogueModel();
        $userResponse = $user->DelParroquia($testId);
        if ($userResponse) {
	        echo "<script>location.href='../views/libraryView.php?action=catalogo'</script>";
        }
        
    }
    public function CreateProvince()
    {
        $user = new catalogueModel();

        if (isset($_POST['nombres'])) {
            $user->setNombres($_POST['nombres']);
            $userResponse = $user->AddProvince();
            if ($userResponse == 1) // exitoso
            {
                echo "<script>location.href='../views/libraryView.php?action=catalogo'</script>";
            } else {
                echo "<h1>Error al crear usuario.</h1>";
            }
        }
    }
     public function CreateCanton()
    {
        $user = new catalogueModel();

        if (isset($_POST['nombres'])) {
            $user->setNombres($_POST['nombres']);
            $user->setProvincia($_POST['provincia']);
            $userResponse = $user->AddCanton();
            if ($userResponse == 1) // exitoso
            {
                echo "<script>location.href='../views/libraryView.php?action=catalogo'</script>";
            } else {
                echo "<h1>Error al crear usuario.</h1>";
            }
        }
    }
    public function CreateParroquia()
    {
        $user = new catalogueModel();

        if (isset($_POST['nombres'])) {
            $user->setNombres($_POST['nombres']);
            $user->setCanton($_POST['canton']);
            $userResponse = $user->AddParroquia();
            if ($userResponse == 1) // exitoso
            {
                echo "<script>location.href='../views/libraryView.php?action=catalogo'</script>";
            } else {
                echo "<h1>Error al crear usuario.</h1>";
            }
        }
    }

}
?>