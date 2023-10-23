<?php
    class Equipamento{

        private $idEquipamento;
        private $Modelo;
        private $VC;
        private $ServiceTag;

        private $Tipo;
        private $Localizacao;
        private $Situacao;
        private $Observacao;

        function __construct ($_idEquipamento,$_Modelo,$_VC,$_ServiceTag,
            $_Tipo,$_Localizacao,$_Situacao,$_Observacao    ){
            $this->idEquipamento = $_idEquipamento;
            $this->Modelo = $_Modelo;
            $this->VC = $_VC;
            $this->ServiceTag = $_ServiceTag;

            $this->Tipo = $_Tipo;
            $this->Localizacao = $_Localizacao;
            $this->Situacao = $_Situacao;
            $this->Observacao = $_Observacao;
        }

        public function GetidEquipamento():int{
            return $this->idEquipamento;
        }

        public function GetModelo():int{
            return $this->Modelo;
        }
        public function SetModelo($_Modelo):void{
            $this->Modelo = $_Modelo;
        }
        public function GetVC():String{
            return $this->VC;
        }
        public function SetVC($_VC):void{
            $this->VC = $_VC;
        }
        public function GetServiceTag():String{
            return $this->ServiceTag;
        }
        public function SetServiceTag($_ServiceTag):void{
            $this->ServiceTag = $_ServiceTag;
        }

        public function GetTipo():String{
            return $this->Tipo;
        }
        public function SetTipo($_Tipo):void{
            $this->Tipo = $_Tipo;
        }
        public function GetLocalizacao():String{
            return $this->Localizacao;
        }
        public function SetLocalizacao($_Localizacao):void{
            $this->Localizacao = $_Localizacao;
        }
        public function GetSituacao():String{
            return $this->Situacao;
        }
        public function SetSituacao($_Situacao):void{
            $this->Situacao = $_Situacao;
        }
        public function GetObservacao():string{
            return $this->Observacao;
        }
        public function SetObservacao($_Observacao):void{
            $this->Observacao = $_Observacao;
        }







        public function InsereEquipamento($link){
            $query="INSERT INTO equipamento VALUES(NULL,'".$this->Modelo."','".$this->VC."','".$this->ServiceTag."','".$this->Tipo."','".$this->Localizacao."','".$this->Situacao."','".$this->Observacao."')";
           // echo $query;
            $link->query($query) or die ($link->error);
            $this->idEquipamento = $link->insert_id;
        }
        public function ExisteVC($link,$vc){
            $query= "SELECT * FROM equipamento WHERE VC ='$vc'";
            $resultado = $link->query($query) or die ($link->error);
            if($resultado->num_rows >= 1){
                return TRUE;        
            }else{
                return FALSE;
            }
        }
    }


?>