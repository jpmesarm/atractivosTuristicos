<?php
require_once "../models/libraryModels.php";

class LibraryController
{
    //Función para retornar a la vista de acuerdo con selección de usuario
    public function ReturnPageController()
    {
        if (!isset($POST["idUser"])) {
            /*Obtiene por get variable y 
        valida si viene un valor, en caso de que no deja en catalogo */
            $path = isset($_GET["action"]) ? $_GET["action"] : $path = "dashboard";
            $libModel = new LibraryModel();
            $module = $libModel->ReturnPageModel($path);
            include_once $module;
        }
    }
}
