<?php
    class Atendimento {
        private $idAtendimento;
        //private $Responsável;
        //private $Email;
        private $Departamento;
        private $Localidade;
        private $Backup;
        private $Dia;
        private $Termo;
        private $FtColaboradorEquipamento;
        private $FtLogado;
        private $StatusAtendimento;
       // private $Observação;
        private $Antigo;
        private $Novo;
        private $idTecnico;
        private $idColaborador;


        function __construct($_idAtendimento, $_Departamento, $_Localidade, $_Backup, $_Dia, $_Termo, $_FtColaboradorEquipamento, $_FtLogado, $_StatusAtendimento, $_Antigo, $_Novo, $_idTecnico, $_idColaborador){
            $this->idAtendimento = $_idAtendimento;
            //$this->Responsavel = $_Responsavel;
            //$this->Email = $_Email;
            $this->Departamento = $_Departamento;
            $this->Localidade = $_Localidade;
            $this->Backup = $_Backup;
            $this->Dia = $_Dia;
            $this->Termo = $_Termo;
            $this->FtColaboradorEquipamento = $_FtColaboradorEquipamento;
            $this->FtLogado = $_FtLogado;
            $this->StatusAtendimento = $_StatusAtendimento;
           // $this->Observacao = $_Observacao;
            $this->Antigo = $_Antigo;
            $this->Novo = $_Novo;
            $this->idTecnico = $_idTecnico;
            $this->idColaborador = $_idColaborador;
        }

        public function GetidAtendimento():int{
            return $this->idAtendimento;
        }
        /*public function GetResponsavel():string{
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
        }*/
        public function GetDepartamento():string{
            return $this->Departamento;
        }
        public function SetDepartamento($_Departamento):void{
            $this->Departamento = $_Departamento;
        }
        public function GetLocalidade():string{
            return $this->Localidade;
        }
        public function SetLocalidade($_Localidade):void{
            $this->Localidade = $_Localidade;
        }
        public function GetBackup():string{
            return $this->Backup;
        }
        public function SetBackup($_Backup):void{
            $this->Backup = $_Backup;
        }
        public function GetDia():string{
            return $this->Dia;
        }
        public function SetDia($_Dia):void{
            $this->Dia = $_Dia;
        }
        public function GetTermo():string{
            return $this->Termo;
        }
        public function SetTermo($_Termo):void{
            $this->Termo = $_Termo;
        }
        public function GetFtColaboradorEquipamento():string{
            return $this->FtColaboradorEquipamento;
        }
        public function SetFtColaboradorEquipamento($_FtColaboradorEquipamento):void{
            $this->FtColaboradorEquipamento = $_FtColaboradorEquipamento;
        }
        public function GetFtLogado():string{
            return $this->FtLogado;
        }
        public function SetFtLogado($_FtLogado):void{
            $this->FtLogado = $_FtLogado;
        }
        public function GetStatusAtendimento():string{
            return $this->StatusAtendimento;
        }
        public function SetStatusAtendimento($_StatusAtendimento):void{
            $this->StatusAtendimento = $_StatusAtendimento;
        }

      /*
        public function GetObservacao():string{
            return $this->Observacao;
        }
        public function SetObservacao($_Observacao):void{
            $this->Observacao = $_Observacao;
        }
       */
        public function GetAntigo():string{
            return $this->Antigo;
        }
        public function SetAntigo($_Antigo):void{
            $this->Antigo = $_Antigo;
        }
        public function GetNovo():string{
            return $this->Novo;
        }
        public function SetNovo($_Novo):void{
            $this->Novo = $_Novo;
        }
        public function GetidTecnico():int{
            return $this->idTecnico;
        }
        public function SetidTecnico($_idTecnico):void{
            $this->idTecnico = $_idTecnico;
        }
        public function GetidColaborador():int{
            return $this->idColaborador;
        }
        public function SetidColaborador($_idColaborador):void{
            $this->idColaborador = $_idColaborador;
        }

        public function InsereAtendimento($link){
            $query="INSERT INTO Atendimento VALUES(NULL,'".$this->Departamento."','".$this->Localidade."','".$this->Backup."','".$this->Dia."','".$this->Termo."','".$this->FtColaboradorEquipamento."','".$this->FtLogado."','".$this->StatusAtendimento."',".$this->Antigo.",".$this->Novo.",".$this->idTecnico.",".$this->idColaborador.")";
            $link->query($query);
            $this->idAtendimento = $link->insert_id;
        }

    }
?>