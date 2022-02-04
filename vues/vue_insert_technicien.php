<h4>Insertion d'un Technicien</h4>
<form method="post" action="">
    <table class="table table-hover" border="0">
        <tr>
            <td class="align-middle text-center">Nom technicien :</td>
            <td>
                <input type="text" name="nom" value="<?php if($leTechnicien != null) echo $leTechnicien['nom']; ?>">
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">Prénom technicien :</td>
            <td>
                <input type="text" name="prenom" value="<?php if($leTechnicien != null) echo $leTechnicien['prenom']; ?>">
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">Qualification :</td>
            <td>
                <input type="text" name="qualification" value="<?php if($leTechnicien != null) echo $leTechnicien['qualification']; ?>">
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">Email :</td>
            <td>
                <input type="text" name="email" value="<?php if($leTechnicien != null) echo $leTechnicien['email']; ?>">
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">Téléphone :</td>
            <td>
                <input type="text" name="tel" value="<?php if($leTechnicien != null) echo $leTechnicien['tel']; ?>">
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">Mot de passe :</td>
            <td>
                <input type="password" name="mdp" value="<?php if($leTechnicien != null) echo $leTechnicien['mdp']; ?>">
            </td>
        </tr>
        <?php 
            if ($leTechnicien != null) echo "<input type='hidden' name='idtechnicien' value = '".$leTechnicien['idtechnicien']."' >";
        ?>
        <tr>
            <td class="align-middle text-center">
                <input class="boutonP" type="reset" name="Annuler" value="Annuler">
            </td>
            <td class="align-middle text-center">
                <input class="boutonP" type="submit"
                <?php
                if ($leTechnicien != null) {
                    echo 'name = "Modifier" value = "Modifier"';
                } else {
                    echo 'name = "Valider" value = "Valider"';
                }
                ?> >
            </td>
        </tr>
    </table>
</form>