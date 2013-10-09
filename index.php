<?php
session_start();
require_once("util/fonction.inc.php");
require_once("util/class.pdoLigue.inc.php");
include("vues/v_entete.php");
include("vues/v_bandeau.php");

if(!isset($_REQUEST['uc']))
    $uc = 'accueil';
else
    $uc = $_REQUEST['uc'];

$pdo = PdoLigue::getPdoLigue();

switch($uc)
{
    case 'accuiel':
    {
        include("vues/accueil.php");
        break;
    }

    case 'membre':
    {
        include('controleurs/c_connexion.php');
        break;
    }

    case 'gerer_joueurs':
    {
        include("controleurs/c_gerer_joueur.php");
        break;
    }

    case 'gerer_club':
    {
        include("controleurs/c_gerer_club.php");
        break;
    }
	case 'modifier':
    {
        include("controleurs/c_modifier_joueurs.php");
        break;
    }
    case 'supprimer':
    {
        include("controleurs/c_supprimer_joueurs.php");
        break;
    }
}

include("vues/v_pied.php");


?>