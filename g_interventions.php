<h3 style="font-size: 26px;">Gestions des interventions</h3>

<?php

$lesVehicules = selectAllVehicules();
$lesTechniciens = selectAllTechniciens();

if(isset($_SESSION['email']) and $_SESSION['role'] == "admin"){

    if (isset($_GET['action']) && isset($_GET['idintervention'])){
        $action = $_GET['action'];
        $idintervention = $_GET['idintervention'];
        switch ($action) {
            case 'sup':
                deleteIntervention($idintervention);
                break;
            case 'edit' :
                break;
        }
    }
        require_once ("vues/vue_insert_intervention.php");
        if (isset($_POST['Valider']))
        {
            insertIntervention($_POST);
        }
}
    
    $lesInterventions = selectAllInterventions();
    
    require_once ("vues/vue_les_interventions.php");
?>