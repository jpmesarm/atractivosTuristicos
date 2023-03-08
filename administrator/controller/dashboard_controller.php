<?php
require_once "../models/dashboardModels.php";

class dashboard_controller{
	/*variables de conexoion*/
	var $BaseDatos;
	var $Servidor;

	function dashboard_controller($host="", $user="", $pass="", $db=""){
		$this->BaseDatos=$db;
		$this->Servidor=$host;
		$this->Usuario=$user;
		$this->Clave=$pass;
	}
    

    public function ResultTotal()
    {
        $user = new dashboardModel();
        $userResponse = $user->GetTotal();
        return $userResponse;
    }
}
?>