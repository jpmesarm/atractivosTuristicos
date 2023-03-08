
<h2>Gestión de Provincias</h2>
<div class="menuDashboard">
    <a href="libraryView.php?action=province_add"><i class="fa-solid fa-plus"></i> Agregar Provincia</a> | 
    <a href="libraryView.php?action=canton_add"><i class="fa-solid fa-plus"></i> Agregar Cantón</a> | 
    <a href="libraryView.php?action=parroquia_add"><i class="fa-solid fa-plus"></i> Agregar Parroquia</a> | 
</div>
<?php

    include("../controller/catalogue_controller.php");
    $control= new catalogue_controller();
    $dataList = $control->GetData();
?>
<table class='tablecud'>
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Provincia</th>
        <th scope="col">Cantón</th>
        <th scope="col">Parroquia</th>
        <th scope="col">Detalle</th>
      </tr>
    </thead>
    <tbody>
    <?php
        for ($i = 1; $i <= count($dataList) - 1; $i++) {
            echo "<tr>";        
            echo "<td>" . $dataList[$i]['ID'] . "</td>";
            echo "<td>" . $dataList[$i]['Provincia'] . "</td>";
            echo "<td>" . $dataList[$i]['Canton'] . "</td>";
            echo "<td>" . $dataList[$i]['Parroquia'] . "</td>";
            echo  "<td class='txtcentrado'><a href='parroquia_delete.php?parroquiaId=".$dataList[$i]['ID']."'><i class='fa-solid fa-ellipsis'></i></td>";
            echo "</tr>";
        }
    ?>
    </tbody>
</table>


