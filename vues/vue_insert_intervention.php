<h4>Insertion d'une Intervention</h4>
<form method="post" action="">
    <table class="table table-hover" border="0">
        <tr>
            <td class="align-middle text-center">Description :</td>
            <td>
                <textarea name="description" rows="3" col="30"></textarea>
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">Date Intervention :</td>
            <td>
                <input type="date" name="dateinter">
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">Prix :</td>
            <td>
                <input type="number" name="prix">
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">Id Vehicule :</td>
            <td>
                <select name="idvehicule">
                    <?php
                        foreach ($lesVehicules as $unVehicule){
                            echo "<option value='".$unVehicule['idvehicule']."'>";
                            echo $unVehicule['idvehicule']."-- ".$unVehicule['matricule']."  ".$unVehicule['marque'];
                            echo "</option>";
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">Id Technicien :</td>
            <td>
                <select name="idtechnicien">
                    <?php
                        foreach ($lesTechniciens as $unTechnicien){
                            echo "<option value='".$unTechnicien['idtechnicien']."'>";
                            echo $unTechnicien['idtechnicien']."-- ".$unTechnicien['nom']."  ".$unTechnicien['prenom'];
                            echo "</option>";
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">
                <input class="boutonP" type="reset" name="Annuler" value="Annuler">
            </td>
            <td class="align-middle text-center">
                <input class="boutonP" type="submit" name="Valider" value="Valider">
            </td>
        </tr>
    </table>
</form>