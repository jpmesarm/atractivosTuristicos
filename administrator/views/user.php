
<h1>Gestión de Usuarios</h1>
<div class="menuDashboard"><a href="libraryView.php?action=user_add"><i class="fa-solid fa-user"></i> Add User</a></div>
<?php

	include("../controller/user_controller.php");
	$control= new user_controller();
    $dataList = $control->GetData();
?>
<table class='tablecud'>
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Correo</th>
            <th scope="col">Borrar</th>
            <th scope="col">Actualizar</th>
          </tr>
        </thead>
        <tbody>
<?php
  	for ($i = 1; $i <= count($dataList) - 1; $i++) {
	    echo "<tr>";
	    echo "<td>" . $dataList[$i]['id'] . "</td>";
	    echo "<td>" . $dataList[$i]['nombres'] . "</td>";
	    echo "<td>" . $dataList[$i]['apellidos'] . "</td>";
	    echo "<td>" . $dataList[$i]['correo'] . "</td>";
	    echo  "<td class='txtcentrado'><a href='user_delete.php?userId=".$dataList[$i]['id']."'><i class='fa-solid fa-trash-can'></i></a></td>";
		echo  "<td class='txtcentrado'><a href='libraryView.php?action=user_update&userId=".$dataList[$i]['id']."'><i class='fa-solid fa-pen-to-square'></i></a></td>";
	    echo "</tr>";
  	}
?>
</tbody>
      </table>

