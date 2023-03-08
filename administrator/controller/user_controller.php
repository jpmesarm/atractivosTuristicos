<?php
require_once "../models/userModels.php";

class user_controller{
	/*variables de conexoion*/
	var $BaseDatos;
	var $Servidor;


	function user_controller($host="", $user="", $pass="", $db=""){
		$this->BaseDatos=$db;
		$this->Servidor=$host;
		$this->Usuario=$user;
		$this->Clave=$pass;
	}
	public function CreateUser()
    {
        $user = new UserModel();

        if (isset($_POST['nombres'])&&isset($_POST['apellidos'])) {
	        $user->setNombres($_POST['nombres']);
	        $user->setApellidos($_POST['apellidos']);
	        $user->setCorreo($_POST['correo']);
	        $user->setClave($_POST['clave']);
	        $user->setTipoUser($_POST['tipoUser']);
        	$userResponse = $user->AddUser();
	        if ($userResponse == 1) // exitoso
	        {
	            echo "<script>location.href='../views/libraryView.php?action=user'</script>";
	        } else {
	            echo "<h1>Error al crear usuario.</h1>";
	        }
		}
    }
    
    public function UpdateUser()
    {
        $user = new UserModel();

        if (isset($_POST['nombres'])&&isset($_POST['apellidos'])) {
	        $user->setNombres($_POST['nombres']);
	        $user->setApellidos($_POST['apellidos']);
	        $user->setCorreo($_POST['correo']);
	        $user->setClave($_POST['clave']);
	        $user->setTipoUser($_POST['tipoUser']);
	        $user->getIdUser($_POST['idUser']);
        	$userResponse = $user->UpdateUser();
	        if ($userResponse == 1) // exitoso
	        {
	            echo "<script>location.href='../views/libraryView.php?action=user'</script>";
	        } else {
	            echo "<h1>Error al crear usuario.</h1>";
	        }
		}
    }
    public function ListUser()
    {
        $user = new UserModel();
        $userResponse = $user->ListUser();
    }
    public function ArrayUser($userId)
    {
        $user = new UserModel();
        $userResponse = $user->ListArrayUser($userId);
        return $userResponse;
    }
    public function DeleteUser($userId)
    {
        $user = new UserModel();
        $userResponse = $user->DelUser($userId);
        if ($userResponse) {
	        echo "<script>location.href='../views/libraryView.php?action=user'</script>";
        }
        
    }

    public function GetData()
    {
        $user = new UserModel();
        $data = $user->GetData();
        return $data;
    }
}
?>