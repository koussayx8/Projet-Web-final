<?PHP
	require_once "C:/xampp/htdocs/Projet Web/config.php";
	require_once 'C:/xampp/htdocs/Projet Web/Model/voiture.php';

	class VoitureC {
		
		function ajouterVoiture($Voiture){
			$sql="INSERT INTO voiture (	nom_voiture, prix, image , description,id_vmarque) 
			VALUES (:nom_voiture ,:prix,:image ,:description,:id_vmarque)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nom_voiture' => $Voiture->getNom_voiture(),
					'prix' => $Voiture->getPrix(),
					'image' => $Voiture->getImage(),
					'description' => $Voiture->getDescription(),
					'id_vmarque' => $Voiture->getIdMarque_voiture()

				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
	
		function afficherNomMarque(){
			$sql="SELECT id_voiture, nom_voiture, prix, image, description, nom_marque
			FROM voiture
			INNER JOIN marque ON voiture.id_vmarque = marque.id_marque ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}			
		}




		
		function tri($a){
			$sql="SELECT id_voiture, nom_voiture, prix, image, description, nom_marque
			FROM voiture
			INNER JOIN marque ON voiture.id_vmarque = marque.id_marque order BY nom_voiture ".$a;
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
			$sql="SELECT id_voiture, nom_voiture, prix, image, description, nom_marque
			FROM voiture
			INNER JOIN marque ON voiture.id_vmarque = marque.id_marque where nom_voiture like '%".$a."%' or  nom_marque  like '%".$a."%' or prix  like '%".$a."%' " ;
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}			
		}

		



		
		function afficherVoiture(){
			
			$sql="SELECT * FROM voiture  ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function recuperervoiture($id_voiture){
			$sql="SELECT * from voiture where id_voiture=$id_voiture";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$voiture=$query->fetch();
				return $voiture;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		

		
		function supprimerVoiture($id_voiture){
			$sql="DELETE FROM voiture WHERE id_voiture= :id_voiture";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_voiture',$id_voiture);
			try{
				$req->execute();
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function modifierVoiture($Voiture, $id_voiture){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE voiture SET 
					nom_voiture = :nom_voiture,
                    prix= :prix,
                    image= :image,
                    description= :description,
					id_vmarque=:id_Vmarque

					WHERE id_voiture = :id_voiture'
				);
				$query->execute([
					'id_voiture' => $id_voiture,
					'nom_voiture' => $Voiture->getNom_voiture(),
                    'prix' => $Voiture->getPrix(),
                    'image' => $Voiture->getImage(),
                    'description' => $Voiture->getDescription(),
					'id_vmarque' => $Voiture->getIdMarque_voiture()

					

					
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}


		
        function afficherpagevoiture($page_first_result,$results_per_page)
        {
            $requete = "SELECT id_voiture, nom_voiture, prix, image, description, nom_marque
			FROM voiture
			INNER JOIN marque ON voiture.id_vmarque = marque.id_marque LIMIT ".$page_first_result.','.$results_per_page; 
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
				$requete = "SELECT * FROM voiture ";
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