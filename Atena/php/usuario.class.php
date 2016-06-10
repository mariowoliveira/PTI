<?php
 	class Usuario{
		private $nome;
		private $snome;
		private $dataNasc;
		private $email;
		private $autorFavorito;
		private $generoFavorito;
		
		public function __construct($nome, $snome, $dataNasc, $email, $email, $autorFavorito, $generoFavorito){
				$this->setNome($nome);
				$this->setSnome($snome);
				$this->setDataNasc($dataNasc);
				$this->setEmail($email);
				$this->setAutorFavorito($autorFavorito);
				$this->setgeneroFavorito($generoFavorito);
								
		}
		public function getNome(){
			return $this->nome;
		}
		
		public function setNome($nome){
			return $this->nome = $nome;
		}
		
				public function getSnome(){
			return $this->snome;
		}
		
		public function setSnome($snome){
			return $this->snome = $snome;
		}


		public function getDataNasc(){
			return $this->dataNasc;
		}
		
		public function setDataNasc($dataNasc){
			$data = explode('/',$dataNasc);
			$this->dataNasc = "$data[2]-$data[1]-$data[0]";
		}
		
				public function getEmail(){
			return $this->email;
		}
		
		public function setEmail($email){
			return $this->email = $email;
		}

				public function getAutorFavorito(){
			return $this->autorFavorito;
		}
		
		public function setAutorFavorito($autorFavorito){
			return $this->autorFavorito = $autorFavorito;
		}

				public function getGeneroFavorito(){
			return $this->generoFavorito;
		}
		
		public function setGeneroFavorito($generoFavorito){
			return $this->generoFavorito = $generoFavorito;
		}

	}
?>
