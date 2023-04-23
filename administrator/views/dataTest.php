<?php

	include("../controller/dataTest_controller.php");
	$control= new dataTest_controller();
  $dataList = $control->GetData();
?>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
    $('#example').DataTable({
        columnDefs: [
            {
                targets: [0],
                orderData: [0, 1],
            },
            {
                targets: [1],
                orderData: [1, 0],
            },
            {
                targets: [8],
                orderData: [8, 0],
            },
        ],
    });
});
	</script>
<h1>Encuestas generadas</h1>
<div class="menuDashboard"><a href="libraryView.php?action=addAtractivo"><i class="fa-solid fa-circle-plus"></i> Agregar atractivo</a></div><br>
<section>
<table id="example" class="display tablecud2">
        <thead class="thead-dark">
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Subtipo</th>
            <th>Provincia</th>
            <th>Cantón</th>
            <th>Cargo</th>
            <th>Administrador</th>
            <th><i class="fa-solid fa-circle-info" title="Caracteristicas"></i></th>
            <th><i class="fa-solid fa-wheelchair" title="Accesibilidad"></i></th>
            <th><i class="fa-solid fa-mountain-sun" title="Turistica"></i></th>
            <th><i class="fa-solid fa-republican" title="Conservación e Integración del atractivo"></i></th>
            <th><i class="fa-solid fa-house-medical-flag" title="Higiene y Seguridad Turística"></i></th>
            <th><i class="fa-solid fa-check-to-slot" title="Política y Regulaciones"></i></th>
            <th><i class="fa-solid fa-person-walking" title="Actividades que se practican"></i></th>
            <th><i class="fa-solid fa-people-arrows" title="Promoción y comercialización del atractivo"></i></th>
            <th><i class="fa-solid fa-pen-to-square" title="Editar"></i></th>
            <th><i class='fa-solid fa-trash-can' title="Borrar"></i></th>
          </tr>
        </thead>
        <tbody>
<?php
  	for ($i = 1; $i <= count($dataList) - 1; $i++) {
	    echo "<tr>";
	    echo "<td>" . $dataList[$i]['idatractivo'] . "</td>";
	    echo "<td>" . $dataList[$i]['nombre'] . "</td>";
        echo "<td>" . $dataList[$i]['Tipo'] . "</td>";
	    echo "<td>" . $dataList[$i]['Subtipo'] . "</td>";
        echo "<td>" . $dataList[$i]['provincia'] . "</td>";
        echo "<td>" . $dataList[$i]['canton'] . "</td>";
	    echo "<td>" . $dataList[$i]['tipoAdmin'] . "</td>";
	    echo "<td>" . $dataList[$i]['nombreAdmin'] . "</td>";
        $retVal = ($dataList[$i]['caracteristicas_idcaracteristicas']==NULL) ? 'desactivado' : 'activado' ;
        $retVal2 = ($dataList[$i]['conservacion_idconservacion']==NULL) ? 'desactivado' : 'activado' ;
        echo  "<td class='txtcentrado'><a href='libraryView.php?action=test_detail&testId=".$dataList[$i]['idatractivo']."&idCar=".$dataList[$i]['caracteristicas_idcaracteristicas']."' class='$retVal'><i class='fa-solid fa-circle-info' title='Caracteristicas'></i></a></td>";
        echo  "<td class='txtcentrado'><a href='libraryView.php?action=accessibility_detail&testId=".$dataList[$i]['idatractivo']."&idCar=".$dataList[$i]['accesibilidad_idaccesibilidad']."' class='$retVal'><i class='fa-solid fa-wheelchair' title='Accesibilidad'></i></a></td>";
	    echo  "<td class='txtcentrado'><a href='libraryView.php?action=turistic_detail&testId=".$dataList[$i]['idatractivo']."&idCar=".$dataList[$i]['turistica_idturistica']."' class='$retVal'><i class='fa-solid fa-mountain-sun' title='Turistica'></i></a></td>";
	    echo  "<td class='txtcentrado'><a href='libraryView.php?action=integration_detail&testId=".$dataList[$i]['idatractivo']."&idCar=".$dataList[$i]['conservacion_idconservacion']."' class='$retVal2'><i class='fa-solid fa-republican' title='Conservación e Integración del atractivo'></i></a></td>";
	    echo  "<td class='txtcentrado'><a href='libraryView.php?action=higiene_detail&testId=".$dataList[$i]['idatractivo']."&idCar=".$dataList[$i]['turistica_idturistica']."' class='$retVal'><i class='fa-solid fa-house-medical-flag' title='Higiene y Seguridad Turística'></i></a></td>";
	    echo  "<td class='txtcentrado'><a href='libraryView.php?action=politica_detail&testId=".$dataList[$i]['idatractivo']."&idCar=".$dataList[$i]['turistica_idturistica']."' class='$retVal'><i class='fa-solid fa-check-to-slot' title='Política y Regulaciones'></i></a></td>";
	    echo  "<td class='txtcentrado'><a href='libraryView.php?action=actividades_detail&testId=".$dataList[$i]['idatractivo']."&idCar=".$dataList[$i]['turistica_idturistica']."' class='$retVal'><i class='fa-solid fa-person-walking' title='Actividades que se practican'></i></a></td>";
	    echo  "<td class='txtcentrado'><a href='libraryView.php?action=promo_reg_detail&testId=".$dataList[$i]['idatractivo']."&idCar=".$dataList[$i]['turistica_idturistica']."' class='$retVal'><i class='fa-solid fa-people-arrows' title='Promoción y comercialización del atractivo'></i></a></td>";
	    echo  "<td class='txtcentrado'><a href='libraryView.php?action=test_result&testId=".$dataList[$i]['idatractivo']."'><i class='fa-solid fa-pen-to-square' title='Editar'></i></a></td>";
	    echo  "<td class='txtcentrado'><a href='dataTest_delete.php?testId=".$dataList[$i]['idatractivo']."&idparr=".$dataList[$i]['parroquia_idparroquia']."&idtipo=".$dataList[$i]['subtipo_idsubtipo']."'><i class='fa-solid fa-trash-can' title='Borrar'></i></a></td>";
	    echo "</tr>";
  	}
?>
</tbody>
</table>
</section>
