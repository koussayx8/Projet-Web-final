<?PHP
	class Marque{
        private  $id_marque = null;
		private  $nom_marque= null;


		
		function __construct( string $nom_marque){
			
			$this->nom_marque=$nom_marque;

		}
		
        function getId_marque(): int{
			return $this->id_marque;
		}
		
		function getNom_marque(): string {
			return $this->nom_marque;
		}
		

		function setNom_marque(string $nom_marque): void{
			$this->nom_marque=$nom_marque;
		}


    }
?>