
<?php
header('Content-Type: application/json');
    include ("dll/config.php");
    include ("dll/class_mysqli.php");
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    

$miconexion->consulta("select idatractivo, nombre from atractivo");
$miconexion->consulta_json();

?>