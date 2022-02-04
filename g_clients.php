<h4 style="font-size: 26px;">Gestion des clients</h4>

<?php
 $lesVehicules = null;
 $leClient = null;
 if (isset($_GET['action']) && isset($_GET['idclient'])){
    $action = $_GET['action'];
    $idclient = $_GET['idclient'];
    if ($action == "vehicule"){
        $lesVehicules = selectVehiculesClients($idclient);
    }
}

    if(isset($_SESSION['email']) and $_SESSION['role'] == "admin"){
       
        if (isset($_GET['action']) && isset($_GET['idclient'])){
            $action = $_GET['action'];
            $idclient = $_GET['idclient'];
            switch ($action) {
                case 'sup':
                    deleteClient($idclient);
                    break;
                case 'edit' :
                    $leClient = selectWhereClient($idclient);
                    break;
                case 'vehicule' :
                    $lesVehicules = selectVehiculesClients($idclient);
                    break;
            }
        }
        require_once ("vues/vue_insert_client.php");
        if (isset($_POST['Modifier']))
        {
            updateClient($_POST);

            header("Location: index.php?page=1");
        }
        if (isset($_POST['Valider']))
        {
            insertClient($_POST);
        }
    }
    if (isset($_POST['Rechercher']))
    {
        $mot = $_POST['mot'];
        $lesClients = searchClients($mot);
    }
    else 
    {
        $lesClients = selectAllClients();
    }
    
    require_once ("vues/vue_les_clients.php");

    echo "<br /> <br />";
    if ($lesVehicules != null)
    {
        echo "<h2>Listes des véhicules du client : </h2>";
        require_once ("vues/vue_les_vehicules_clients.php");
    }
?>