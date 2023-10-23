<?php
require_once "../classes/class_Equipamento.php";
require_once "../classes/class_Atendimento.php";
require_once "../classes/class_Colaborador.php";
require_once "conexao.php";
session_start();    
$host  = $_SERVER['HTTP_HOST'];

if(!empty($_POST["Cadastrar"])){
    $Obj = new Equipamento(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
    $Obj->SetModelo($_POST["ModeloAntigo"]);
    $Obj->SetVC($_POST["VCAntigo"]);
    $Obj->SetServiceTag($_POST["ServiceTagAntigo"]);
    
    $Obj->SetTipo($_POST["Tipo"]);
    $Obj->SetLocalizacao($_POST["Localizacao"]);
    $Obj->SetSituacao($_POST["Situacao"]);
    $Obj->SetObservacao($_POST["Observacao"]);


    if($Obj->ExisteVC($link,$_POST["VCAntigo"])){
    header('Location:https://'.$host.'/infoprime/rolloutd/pages/examples/500.html');
    }else{
        //$dataAtual = date('d/m/Y G:i:s');
       // $linha = $dataAtual." ". $_SESSION['Nome']." Cadastrou -> ".$_POST['PatrimonioAntigo']." ".PHP_EOL; 
       // $log = fopen("./logs/log_ce.txt","a+");
        //fwrite($log,$linha);
        //fclose($log);
       
        $Obj->InsereEquipamento($link);
        $idAntigo = $Obj->GetidEquipamento();


        $Colaborador = new Colaborador(NULL,NULL,NULL,NULL,NULL,NULL);
        $Colaborador->SetResponsavel($_POST["Responsavel"]);
        $Colaborador->SetEmail($_POST['Email']);
        $Colaborador->SetTelefone($_POST['Telefone']);
        $Colaborador->SetCPF($_POST['CPF']);
        $Colaborador->SetMatricula($_POST['Matricula']);

        $Colaborador->InsereColaborador($link);
        /*
        $Atendimento = new Atendimento(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
        $Atendimento->SetResponsavel($_POST['Responsavel']);
        $Atendimento->SetEmail($_POST['Email']);
        $Atendimento->SetDepartamento($_POST['Departamento']);
        $Atendimento->SetLocalidade($_POST['Localidade']);
        $Atendimento->SetBackup($_POST['Backup']);
        $Atendimento->SetDia($_POST['Data']);

        $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
        $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
        $diretorio = "../images/termos/"; //define o diretorio para onde enviaremos o arquivo
        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
        
        $Atendimento->SetTermo($novo_nome);

    // $Atendimento->SetTermo($_POST['Termo'])



        $Atendimento->SetAntigo($idAntigo);
        $Atendimento->SetNovo($idNovo);
        $Atendimento->SetidTecnico($_SESSION['idTecnico']);


        $Atendimento->InsereAtendimento($link);
        header('Location:http://'.$host.'/infoprime/rolloutd/index.php'); */

    
}
}





?>