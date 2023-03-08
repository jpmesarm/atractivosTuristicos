<?php
class LibraryModel
{
    //Función para retornar al módulo de acuerdo a selección de usuario
    public function ReturnPageModel($path)
    {
        if ($path)
        {
            $module = "../views/".$path . ".php";
        }
        else
        {
            /*Si no está dentro de los módulos permitidos "Lista blanca", 
            retorna página inicio*/
            $module = "dashboard.php";
        }
        return $module;
    }
}
?>
