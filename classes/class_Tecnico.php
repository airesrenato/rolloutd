<?php 

	class Tecnico{
	
		private $idTecnico;
		private $Nome;
		private $Senha;
		private $Foto;
		private $Email;
		
		function __construct($_idTecnico, $_Nome, $_Senha, $_Foto, $_Email){
			$this->idTecnico = $_idTecnico;
			$this->Nome = $_Nome;
			$this->Senha = $_Senha;
			$this->Foto = $_Foto;
			$this->Email = $_Email;
		
		}
		
		public function GetidTecnico():int{
			return $this->idTecnico;
		}
	
	
		public function GetNome():string{
			return $this->Nome;
		}
		
		public function SetNome($_Nome):void{
			$this->Nome = $_Nome;
		}
	
		public function GetSenha():string{
			return $this->Senha;
		}
		
		public function SetSenha($_Senha):void{
			$this->Senha = $_Senha;
		}

		public function GetFoto():string{
			return $this->Foto;
		}

		public function SetFoto($_Foto):void{
			$this->Foto = $_Foto;
		}
		
		public function GetEmail():string{
			return $this->Email;
		}

		public function SetEmail($_Email):void{
			$this->Email = $_Email;
		}
		
        public function Verificar($link){
            $query ="SELECT * FROM tecnico WHERE Nome like '".$this->Nome."' AND Senha LIKE '".$this->Senha."'";
			$resultado = $link->query($query) or die ($link->error);
            if($resultado->num_rows == 1){
                return TRUE;		
            }else{
                return FALSE;
            }
        }
    }
?>