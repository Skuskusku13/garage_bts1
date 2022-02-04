<h4>Liste des Interventions</h4>

<table class="table table-hover table-striped table-dark" border ="1">
    <tr>
        <td class="text-center align-midlle"> Id Intervention</td>
        <td class="text-center align-midlle"> Description</td>
        <td class="text-center align-midlle"> Date Intervention</td>
        <td class="text-center align-midlle"> Prix de l'intervention</td>
        <td class="text-center align-midlle"> Id Véhicule</td>
        <td class="text-center align-midlle"> Id Technicien</td>
        <?php if(isset($_SESSION['email']) and $_SESSION['role'] == "admin"){
        echo "<td class='text-center align-midlle'> Opérations</td>";
        }
        ?>
    </tr>
    <?php 
        foreach ($lesInterventions as $uneIntervention) {
            echo "<tr>";
                echo "<td>".$uneIntervention['idintervention']."</td>";
                echo "<td>".$uneIntervention['description']."</td>";
                echo "<td>".$uneIntervention['dateinter']."</td>";
                echo "<td>".$uneIntervention['prix']."</td>";
                echo "<td>".$uneIntervention['idvehicule']."</td>";
                echo "<td>".$uneIntervention['idtechnicien']."</td>";
                if(isset($_SESSION['email']) and $_SESSION['role'] == "admin"){
                echo "<td>";
                    echo "<a href='index.php?page=4&action=sup&idintervention=".$uneIntervention['idintervention']."'>";
                    echo "<img src = 'images/sup.png' height = '30' width = '30'> ";
                    echo "</a>";
                    echo "<a href='index.php?page=4&action=edit&idintervention=".$uneIntervention['idintervention']."'>";
                    echo "<img src = 'images/edit.png' height = '30' width = '30'> ";
                    echo "</a>";
                echo "</td>";
                }
                echo "</tr>";
        }
    ?>
</table>