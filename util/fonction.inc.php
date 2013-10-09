<?php

function initClub()
{
    if(!isset($_SESSION['clubs']))
    {
        $_SESSION['clubs']= array();
    }
}

/*
 * Fonction qui verifie si utilisateur est connecté
 * renvoie 1 si connecté
 * renvoie 0 si non connecté
 *
 */
function estConnecter(){
    $resu = 0;
    if(isset($_SESSION['login'])){
        $resu = 1;
    }
    return $resu;
}

/*
 * Déconnecte l'utilisateur
 */
function seDeconnecter(){
    unset($_SESSION['login']);
    echo'Vous avez été déconnecté';
}
?>