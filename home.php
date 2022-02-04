<h3 style="font-size: 26px;">Accueil du site</h3>
<h4>
    <?php
        echo 'Bienvenue '. $_SESSION['nom']." ".$_SESSION['prenom'];
        echo '<br /><br /> Vous avez le rôle : '.$_SESSION['role'];
    ?>
</h4>

<br />
<img src="images/logo_dan.png" style="object-fit: cover" height="200px" width="200px">

<br />
<p style="font-size: 21px;">
    Notre Garage est le top des garages dans la région. Venez nous voir, nous serons ravis de vous accueillir et vous rendre service.
</p>

<?php 

    $nbClients = countClients();
    $nbTechniciens = countTechniciens();
    $nbVehicules = countVehicules();
    $nbInterventions = countInterventions();
?>
    <br />
    <table class="table" border="4" style="box-shadow: 10px 5px 5px black; border-color: black;">
        <tr>
            <td class="font-weight-bold text-center align-midlle">Nombre de Clients</td>
            <td class="font-weight-bold text-center align-midlle">Nombre de Techniciens</td>
            <td class="font-weight-bold text-center align-midlle">Nombre de Véhicules</td>
            <td class="font-weight-bold text-center align-midlle">Nombre d'interventions</td>
        </tr>
        <?php 
            echo "<tr>";
                echo "<td class='font-weight-bold text-center align-middle'>".$nbClients."</td>";
                echo "<td class='font-weight-bold text-center align-middle'>".$nbTechniciens."</td>";
                echo "<td class='font-weight-bold text-center align-middle'>".$nbVehicules."</td>";
                echo "<td class='font-weight-bold text-center align-middle'>".$nbInterventions."</td>";
            echo "</tr>";
        ?>
    </table>