<?PHP
	include "C:/xampp/htdocs/Projet Web/config.php";
	require_once 'C:/xampp/htdocs/Projet Web/Model/marque.php';

	class MarqueC {
		
		function ajouterMarque($Marque){
			$sql="INSERT INTO marque (	nom_marque) 
			VALUES (:nom_marque)";
			$db3 = config::getConnexion();
			try{
				$query = $db3->prepare($sql);
			
				$query->execute([
					'nom_marque' => $Marque->getNom_marque(),


				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function afficherMarque(){
			
			$sql="SELECT * FROM marque  ";
			$db3 = config::getConnexion();
			try{
				$liste = $db3->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		
		function supprimerMArque($id_marque){
			$sql="DELETE FROM marque WHERE id_marque= :id_marque";
			$db3 = config::getConnexion();
			$req=$db3->prepare($sql);
			$req->bindValue(':id_marque',$id_marque);
			try{
				$req->execute();
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function modifierMarque($Marque, $id_marque){
			try {
				$db3 = config::getConnexion();
				$query = $db3->prepare(
					'UPDATE marque SET 
					nom_marque = :nom_marque

					WHERE id_marque = :id_marque'
				);
				$query->execute([
					'id_marque' => $id_marque,
					'nom_marque' => $Marque->getNom_marque(),

					

					
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}


		function recuperermarque($id_marque){
			$sql="SELECT * from marque where id_marque=$id_marque";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$Marque=$query->fetch();
				return $Marque;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		

		function tri($a){
			$sql="SELECT id_marque,nom_marque
			FROM marque
			order BY nom_marque ".$a;
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}			
		}

		function recherche($a){
			$sql="SELECT id_marque,nom_marque
			FROM marque
			where  nom_marque  like '%".$a."%' " ;
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}			
		}

		function afficherpagemarque($page_first_result,$results_per_page)
        {
            $requete = "SELECT id_marque, nom_marque
			FROM marque
			LIMIT ".$page_first_result.','.$results_per_page; 
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute();
                $result = $querry->fetchAll();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }



			function getAllarticles()
			{
				$requete = "SELECT * FROM marque ";
				$config = config::getConnexion();
				try {
					$querry = $config->prepare($requete);
					$querry->execute();
					$result = $querry->fetchAll();
					return $result ;
				} catch (PDOException $th) {
					 $th->getMessage();
				}
			}




	}
?>