<?php
session_start(); // demarrage de la session
    require_once("fonctions/fonctions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site garage</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- My css -->
    <link rel="stylesheet" href="css/style1.css">
</head>
<body style="background: linear-gradient(130deg, rgba(46,143,52,1) 0%, rgba(38,109,124,1) 51%, rgba(6,163,209,1) 97%);">
    <center>
        <h1>Bienvenue sur le site Garage De Danou</h1>
        <?php 
          if(! isset($_SESSION['email'])){ // si il n'y a pas de session
            require_once("vues/vue_connexion.php");
          }
          if (isset($_POST['seConnecter']))
          {
            $email = $_POST['email'];
            $mdp = $_POST['mdp'];
            $unUser = selectUser($email, $mdp);
            // var_dump($unUser);
            if ($unUser == null)
            {
              echo "Veuillez vérifier vos identifiants !";
            } else {
              echo "Bienvenue ".$unUser['nom']." ".$unUser['prenom'];
              // creation de la session 
              $_SESSION['email'] = $unUser['email'];
              $_SESSION['nom'] = $unUser['nom'];
              $_SESSION['prenom'] = $unUser['prenom'];
              $_SESSION['role'] = $unUser['role'];
              // on recharge la page vers le home
              header("Location: index.php?page=0");
            }
          }
          if(isset($_SESSION['email'])){
            echo '

              <a href="index.php?page=0">
                  <img src="images/home.png" height="60" width="60" margin="20px"/>
              </a>
              >
              <a href="index.php?page=1">
                  <img src="images/client_.png" height="60" width="60"/>
              </a>
              >
              <a href="index.php?page=2">
                  <img src="images/technicien_.png" height="60" width="60"/>
              </a>
              >
              <a href="index.php?page=3">
                  <img style="object-fit: cover; padding-top: 3px;" src="images/vehicule-.png" height="60" width="100"/>
              </a>
              >
              <a href="index.php?page=4">
                  <img src="images/intervention.png" height="60" width="60"/>
              </a>
              >
              <a href="index.php?page=5">
              <img style="object-fit: cover;" src="images/deconnexion.png" height="60" width="60"/>
              </a>
              ';
            if(isset($_GET["page"])){
                $page = $_GET["page"];
            }else {
                $page = 0; 
            }
            switch ($page) {
                case 0 : require_once("home.php");
                    break;
                case 1 : require_once("g_clients.php");
                    break;
                case 2: require_once("g_techniciens.php");
                    break;
                case 3 : require_once("g_vehicules.php");
                    break;
                case 4 : require_once("g_interventions.php");
                    break;
                case 5 : // deconnexion suppression de la connexion 
                    session_destroy();
                    header("Location: index.php"); // recharger la page 
                    break;
            }
          } // if session 
        ?>
    </center>

    <div>
        <img class="garage_" src="images/garage.png">
    </div>

<!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Envoyez-nous un mail ;)</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example21" class="form-control" />
              <label class="form-label" for="form5Example21">Adresse Email</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Envoyer
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        Si une demande ou bien une question vous viens à l'esprit, n'hésitez pas à nous contacter. <br /> Nous nous efforcerons de vous répondre dans les plus bref délais.
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="">
    
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="">
  
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="">
   
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3 footer_" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="mailto:d.levy@cfa-insta.fr">Mail</a>
    <a class="text-white" href="tel:+33781267866">Téléphone</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
</body>
</html>