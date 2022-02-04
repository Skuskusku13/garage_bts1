<h4>Liste des clients</h4>

<form method="post" action="">
    Mot de recherche : 
    <input type="text" name="mot">
    <input type="submit" name="Rechercher" value="Rechercher">
</form>
<br />

<table class="table table-hover table-striped table-dark" border ="1">
    <tr>
        <td class="text-center align-midlle"> Id client</td>
        <td class="text-center align-midlle"> Nom client</td>
        <td class="text-center align-midlle"> Prenom client</td>
        <td class="text-center align-midlle"> Adresse client</td>
        <td class="text-center align-midlle"> Email</td>
        <td class="text-center align-midlle"> Téléphone</td>
        <td class="text-center align-midlle"> Opérations</td>
    </tr>
    <?php 
        foreach ($lesClients as $unClient) {
            echo "<tr>";
                echo "<td >".$unClient['idclient']."</td>";
                echo "<td>".$unClient['nom']."</td>";
                echo "<td>".$unClient['prenom']."</td>";
                echo "<td>".$unClient['adresse']."</td>";
                echo "<td>".$unClient['email']."</td>";
                echo "<td>".$unClient['tel']."</td>";
                echo "<td style='width: 200px;'>";
                    if(isset($_SESSION['email']) and $_SESSION['role'] == "admin"){

                        echo "<a href='index.php?page=1&action=sup&idclient=".$unClient['idclient']."'>";
                        echo "<img src = 'images/sup.png' height = '30' width = '30'> ";
                        echo "</a>";
                        echo "<a href='index.php?page=1&action=edit&idclient=".$unClient['idclient']."'>";
                        echo "<img src = 'images/edit.png' height = '30' width = '30'> ";
                        echo "</a>";
                    }

                    echo "<a href='index.php?page=1&action=vehicule&idclient=".$unClient['idclient']."'>";
                    echo "<img src = 'images/vehicule_.png' height = '30' width = '30' style='object-fit: cover;'> ";
                    echo "</a>";
                echo "</td>";
            echo "</tr>";
        }
    ?>
</table>