<?php

    class Acessorio{
        private $idAcessorio;
        private $Tipo;
        private $Marca;
        private $idEquipamento;

        function __construct($_idAcessorio,$_Tipo,$_Marca,$_idEquipamento){
            $this->idAcessorio = $_idAcessorio;
            $this->Tipo = $_Tipo;
            $this->Marca = $_Marca;
            $this->idEquipamento = $_idEquipamento;
        }

        public function GetidAcessorio():int{
            return $this->idAcessorio;
        }

        public function GetTipo():String{
            return $this->Tipo;
        }
        public function SetTipo($_Tipo):void{
            $this->Tipo = $_Tipo;
        }
        public function GetMarca():String{
            return $this->Marca;
        }
        public function SetMarca($_Marca):void{
            $this->Marca = $_Marca;
        }
        public function GetidEquipamento():int{
            return $this->idEquipamento;
        }
        public function SetidEquipamento($_idEquipamento):void{
            $this->idEquipamento = $_idEquipamento;
        }

        public function InsereAcessorio($link){
            $query="INSERT INTO acessorio VALUES(NULL,'".$this->Tipo."','".$this->Marca."',".$this->idEquipamento.")";
            $link->query($query) or die ($link->error);
            $this->idAcessorio = $link->insert_id;
        }
    }

?>