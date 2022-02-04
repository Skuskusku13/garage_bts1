<table class="table table-striped table-hover" border="4" style="box-shadow: 10px 5px 5px black; border-color: black;">
    <tr>
        <td class="font-weight-bold text-center align-midlle"> Id Véhicule</td>
        <td class="font-weight-bold text-center align-midlle"> Matricule</td>
        <td class="font-weight-bold text-center align-midlle"> Marque</td>
        <td class="font-weight-bold text-center align-midlle"> Date de circulation</td>
        <td class="font-weight-bold text-center align-midlle"> Nombre km</td>
        <td class="font-weight-bold text-center align-midlle"> Id Client</td>
    </tr>
    <?php 
        foreach ($lesVehicules as $unVehicule) {
            echo "<tr>";
                echo "<td class='font-weight-bold text-center align-middle'>".$unVehicule['idvehicule']."</td>";
                echo "<td class='font-weight-bold text-center align-middle'>".$unVehicule['matricule']."</td>";
                echo "<td class='font-weight-bold text-center align-middle'>".$unVehicule['marque']."</td>";
                echo "<td class='font-weight-bold text-center align-middle'>".$unVehicule['datecirculation']."</td>";
                echo "<td class='font-weight-bold text-center align-middle'>".$unVehicule['nbkm']."</td>";
                echo "<td class='font-weight-bold text-center align-middle'>".$unVehicule['idclient']."</td>";
            echo "</tr>";
        }
    ?>
</table>