<?php
    class Avaria{
        private $idAvaria;
        private $Descricao;
        private $Foto;
        private $idEquipamento;

        function __construct($_idAvaria, $_Descricao, $_Foto, $_idEquipamento) {
            $this->idAvaria = $_idAvaria;
            $this->Descricao = $_Descricao;
            $this->Foto = $_Foto;
            $this->idEquipamento = $_idEquipamento;
        }

        public function GetidAvaria():int{
            return $this-> idAvaria;
        }
        public function GetDescricao():int{
            return $this-> Descricao;
        }
        public function SetDescricao($_Descricao):void{
            $this-> Descricao = $_Descricao;
        }
        public function GetFoto():int{
            return $this-> Foto;
        }
        public function SetFoto($_Foto):void{
            $this-> Foto = $_Foto;
        }
        public function GetidEquipamento():int{
            return $this-> idEquipamento;
        }
        public function SetidEquipamento($_idEquipamento):void{
            $this-> idEquipamento = $_idEquipamento;
        }

        public function InsereAvaria($link){
            $query="INSERT INTO Avaria VALUES(NULL,'".$this->Descricao."','".$this->Foto."',".$this->idEquipamento.")";
            $link->query($query) or die ($link->error);
            $this->idAvaria = $link->insert_id;
        }

    }
    
?>