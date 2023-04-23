<?php
    include ("dll/config.php");
    include ("dll/class_mysqli.php");
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    

function parseToXML($htmlStr)
{
  $xmlStr=str_replace('<','&lt;',$htmlStr);
  $xmlStr=str_replace('>','&gt;',$xmlStr);
  $xmlStr=str_replace('"','&quot;',$xmlStr);
  $xmlStr=str_replace("'",'&#39;',$xmlStr);
  $xmlStr=str_replace("&",'&amp;',$xmlStr);
  return $xmlStr;
}


header("Content-type: text/xml");
echo "<?xml version='1.0' ?>";
$miconexion->consulta("select * from atractivo");
$miconexion->consultaXmlMapa();




?>