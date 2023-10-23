<?php
    class Colaborador{
        private $idColaborador;
        private $Responsavel;
        private $Email;
        private $Telefone;
        private $CPF;
        private $Matricula;

        function __construct($_idColaborador,$_Responsavel,$_Email,$_Telefone,$_CPF,$_Matricula){
            $this->idColaborador = $_idColaborador;
            $this->Responsavel = $_Responsavel;
            $this->Email = $_Email;
            $this->Telefone = $_Telefone;
            $this->CPF = $_CPF;
            $this->Matricula = $_Matricula;
        }

        public function GetidColaborador():int{
            return $this->idColaborador;
        }
        public function GetResponsavel():string{
            return $this->Responsavel;
        }
        public function SetResponsavel($_Responsavel):void{
            $this->Responsavel = $_Responsavel;
        }
        public function GetEmail():string{
            return $this->Email;
        }
        public function SetEmail($_Email):void{
            $this->Email = $_Email;
        }
        public function GetTelefone():string{
            return $this->Telefone;
        }
        public function SetTelefone($_Telefone):void{
            $this->Telefone = $_Telefone;
        }
        public function GetCPF():string{
            return $this->CPF;
        }
        public function SetCPF($_CPF):void{
            $this->CPF = $_CPF;
        }
        public function GetMatricula():string{
            return $this->Matricula;
        }
        public function SetMatricula($_Matricula):void{
            $this->Matricula = $_Matricula;
        }

        public function InsereColaborador($link){
            $query="INSERT INTO colaborador VALUES(NULL,'".$this->Responsavel."','".$this->Email."','".$this->Telefone."','".$this->CPF."','".$this->Matricula."')";
            //echo $query;
            $link->query($query) or die ($link->error);
            $this->idColaborador = $link->insert_id;
        }
    }

?>