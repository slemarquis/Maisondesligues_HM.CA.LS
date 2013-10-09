<?php
if(isset($_REQUEST['action'])){
    $action = $_REQUEST['action'];
}
else{
    $action = "connexion";
}

switch ($action){
    case "connexion":
    {
        if (isset($_POST['login']) && (isset($_POST['pass']))){
            $log = $_POST['login'];
            $mdp = $_POST['pass'];
            $resu = $pdo->testLogAdmin($log, $mdp);

            if($resu['loginMem'] != $log){
                include('vues/v_connexion.php');


            }else{
                $_SESSION['login'] = $_POST['log'];
                header("location: index.php?uc=membre&action=sommaire");
            }

        }else{
            include("vues/v_connexion.php");

        }
        break;
    }

    case 'sommaire':
    {
        include("vues/v_sommaire.php");
        break;
    }

    case 'deconnexion':
    {
        seDeconnecter();
        break;
    }



}
?>