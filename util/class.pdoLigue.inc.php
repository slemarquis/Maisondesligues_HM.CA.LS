<?php
/**
* Classe d'accès aux données.

* Utilise les services de la classe PDO
* pour l'application ligue
* Les attributs sont tous statiques,
* les 4 premiers pour la connexion
* $monPdo de type PDO
* $monPdoGsb qui contiendra l'unique instance de la classe
*
* @package default
* @author Patrice Grand
* @version    1.0
* @link       http://www.php.net/manual/fr/book.pdo.php
*/

class PdoLigue
{
private static $serveur='mysql:host=localhost';
private static $bdd='dbname=ligue';
private static $user='root' ;
private static $mdp='' ;
private static $monPdo;
private static $monPdoLigue = null;
/**
* Constructeur privé, crée l'instance de PDO qui sera sollicitée
* pour toutes les méthodes de la classe
*/
private function __construct()
{
PdoLigue::$monPdo = new PDO(PdoLigue::$serveur.';'.PdoLigue::$bdd, PdoLigue::$user, PdoLigue::$mdp);
PdoLigue::$monPdo->query("SET CHARACTER SET utf8");
}
    public function _destruct(){
        PdoLigue::$monPdo = null;
    }
    /**
     * Fonction statique qui crée l'unique instance de la classe
     *
     * Appel : $instancePdoligue = PdoLigue::getPdoLigue();
     * @return l'unique objet de la classe PdoLigue
     */
    public  static function getPdoLigue()
    {
        if(PdoLigue::$monPdoLigue == null)
        {
            PdoLigue::$monPdoLigue= new PdoLigue();
        }
        return PdoLigue::$monPdoLigue;
    }



    public function testLogAdmin($l, $p)
    {
        $req = "select loginMem, mdpMem from membre where loginMem = '".$l."'and mdpMem = '".$p."'";
        $res = PdoLigue::$monPdo->query($req);
        $leResu = $res->fetch();
        //echo var_dump($leResu);
        return $leResu;
    }

    // Cette fonction va chercher les infos sur les joueurs dans la base de donnée, et stoque ce que la base de donnée renvoit dans un tableau 
		public function getLesJoueurs()
		{
			//requete SQL
			$req="SELECT * FROM joueur, categorie, clubs WHERE joueur.idCateg = categorie.idCateg AND joueur.idClub = clubs.idClub ORDER BY joueur.nomJou";
			//Traitement de la requete
			$res = PdoLigue::$monPdo->query($req);
			//Le résultat de la requete est stocké dans un tableau
			$lesLignes = $res->fetchAll();
			//La fonction renvoie le résultat
			return $lesLignes; 
		}
        public function getUnJoueur($id)
        {
            $req="SELECT * FROM joueur, clubs WHERE joueur.idClub=clubs.idClub AND idJou=".$id.";";
            $res = PdoLigue::$monPdo->query($req);
            $unJoueur = $res->fetchAll();

            return $unJoueur;
        }
        public function getClubs()
        {
            $req="SELECT COUNT( idClub ) AS NbClub, idClub, nomClub FROM clubs";
            $res = PdoLigue::$monPdo->query($req);
            $lesClubs = $res->fetchAll();
            return $lesClubs;
        }
        public static function supprJoueur($id)
       {
           $req="DELETE FROM JOUEUR WHERE idJou='".$id."';";
           $res = PdoLigue::$monPdo->query($req);

       }

    public function getLesClubs()
    {
        $req = "select * from clubs";
        $res = PdoLigue::$monPdo->query($req);
        $lesLignes = $res->fetchall();
        return $lesLignes;
    }
	
	public function getLeClub($idC)
	{
		$req = "select * from clubs where idClub='".$idC."'";
		$res = PdoLigue::$monPdo->query($req);
		$leClub = $res->fetchall();
		return $leClub;
	}
	
	public function UpdateClub($idC)
	{
		$req = "update clubs set idClub='".$idC." where idClub='".$idC."'";
		$res = PdoLigue::$monPdo->query($req);
		return $res;
	}
}
?>