<?PHP
	class Voiture{
		private  $id_voiture = null;
        private  $nom_voiture = null;
		private  $prix = null;
		private  $image = null;
        private  $description = null;
        private  $id_vmarque = null;

		
		function __construct( string $nom_voiture , string $prix , string $image ,string $description ,int $id_vmarque){
			
			$this->nom_voiture=$nom_voiture;
			$this->prix=$prix;
			$this->image=$image;
            $this->description=$description;
			$this->id_vmarque=$id_vmarque;

		}
		
        function getId_voiture(): int{
			return $this->id_voiture;
		}
		
		function getNom_voiture(): string {
			return $this->nom_voiture;
		}
		
        function getPrix(): string{
			return $this->prix;
		}
		
		function getIdMarque_voiture(): int{
			return $this->id_vmarque;
		}
		
		function getImage(): string{
			return $this->image;
		}
		function getDescription(): string{
			return $this->description;
		}



		function setNom_voiture(string $nom_voiture): void{
			$this->nom_voiture=$nom_voiture;
		}
        function setPrix(string $prix): void{
			$this->prix=$prix;
		}
		function setImage(string $image): void{
			$this->image=$image;
		}
		function setDescription(string $description): void{
			$this->description=$description;
		}

		function setIdMarque_voiture(string $id_vmarque): void{
			$this->id_vmarque=$id_vmarque;
		}
    }
?>