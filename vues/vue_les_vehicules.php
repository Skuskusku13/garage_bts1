<h4>Liste des Véhicules</h4>

<form method="post" action="">
    Mot de recherche : 
    <input type="text" name="mot">
    <input type="submit" name="Rechercher" value="Rechercher">
</form>
<br />

<table class="table table-hover table-striped table-dark" border ="1">
    <tr>
        <td class="text-center align-midlle"> Id Véhicule</td>
        <td class="text-center align-midlle"> Matricule</td>
        <td class="text-center align-midlle"> Marque</td>
        <td class="text-center align-midlle"> Date de circulation</td>
        <td class="text-center align-midlle"> Nombre km</td>
        <td class="text-center align-midlle"> Id Client</td>
            <?php if(isset($_SESSION['email']) and $_SESSION['role'] == "admin"){
            echo "<td class='text-center align-midlle'> Opérations</td>";
            }
            ?>
    </tr>
    <?php 
        foreach ($lesVehicules as $unVehicule) {
            echo "<tr>";
                echo "<td>".$unVehicule['idvehicule']."</td>";
                echo "<td>".$unVehicule['matricule']."</td>";
                echo "<td>".$unVehicule['marque']."</td>";
                echo "<td>".$unVehicule['datecirculation']."</td>";
                echo "<td>".$unVehicule['nbkm']."</td>";
                echo "<td>".$unVehicule['idclient']."</td>";
                if(isset($_SESSION['email']) and $_SESSION['role'] == "admin"){
                echo "<td>";
                    echo "<a href='index.php?page=3&action=sup&idvehicule=".$unVehicule['idvehicule']."'>";
                    echo "<img src = 'images/sup.png' height = '30' width = '30'> ";
                    echo "</a>";
                    echo "<a href='index.php?page=3&action=edit&idvehicule=".$unVehicule['idvehicule']."'>";
                    echo "<img src = 'images/edit.png' height = '30' width = '30'> ";
                    echo "</a>";
                echo "</td>";
                }
            echo "</tr>";
        }
    ?>
</table>