<h4>Liste des Techniciens</h4>

<form method="post" action="">
    Mot de recherche : 
    <input type="text" name="mot">
    <input type="submit" name="Rechercher" value="Rechercher">
</form>
<br />

<table class="table table-hover table-striped table-dark" border ="1">
    <tr>
        <td> Id Technicien</td>
        <td> Nom Technicien</td>
        <td> Prenom Technicien</td>
        <td> Qualification</td>
        <td> Email</td>
        <td> Téléphone</td>
        <?php if(isset($_SESSION['email']) and $_SESSION['role'] == "admin"){
        echo "<td class='text-center align-midlle'> Opérations</td>";
        }
        ?>
    </tr>
    <?php 
        foreach ($lesTechniciens as $unTechnicien) {
            echo "<tr>";
                echo "<td>".$unTechnicien['idtechnicien']."</td>";
                echo "<td>".$unTechnicien['nom']."</td>";
                echo "<td>".$unTechnicien['prenom']."</td>";
                echo "<td>".$unTechnicien['qualification']."</td>";
                echo "<td>".$unTechnicien['email']."</td>";
                echo "<td>".$unTechnicien['tel']."</td>";
                if(isset($_SESSION['email']) and $_SESSION['role'] == "admin"){
                echo "<td>";
                    echo "<a href='index.php?page=2&action=sup&idtechnicien=".$unTechnicien['idtechnicien']."'>";
                    echo "<img src = 'images/sup.png' height = '30' width = '30'> ";
                    echo "</a>";
                    echo "<a href='index.php?page=2&action=edit&idtechnicien=".$unTechnicien['idtechnicien']."'>";
                    echo "<img src = 'images/edit.png' height = '30' width = '30'> ";
                    echo "</a>";
                echo "</td>";
                }
            echo "</tr>";
        }
    ?>
</table>