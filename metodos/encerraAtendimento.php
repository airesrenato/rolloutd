<?php
    require_once "conexao.php";
    require_once "../classes/class_Atendimento.php";
    require_once "../classes/class_Colaborador.php";
    require_once "../classes/class_Equipamento.php";
    require_once "../classes/class_Tecnico.php";
    session_start(); 
    $host  = $_SERVER['HTTP_HOST'];

    if(!empty($_POST["Cadastrar"])){
        $Obj = new Atendimento($_POST["idAtendimento"],NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
        $Obj->GetAtendimento($link,$_POST['idAtendimento']);

        $Obj->SetDepartamento($_POST["Departamento"]);
        $Obj->SetLocalidade($_POST["Localidade"]);
        $Obj->SetBackup($_POST["Backup"]);

        date_default_timezone_set('America/Sao_Paulo');
        $dataAtual = date('d/m/Y');
        $Obj->SetDia($dataAtual);

        $extensao = strtolower(substr($_FILES['Termo']['name'], -4)); //pega a extensao do arquivo
        $nomeTermo = md5(time()) . $extensao; //define o nome do arquivo
        $diretorio = "../images/termos/"; //define o diretorio para onde enviaremos o arquivo
        move_uploaded_file($_FILES['Termo']['tmp_name'], $diretorio.$nomeTermo); //efetua o upload 
        $Obj->SetTermo($nomeTermo);

        $extensao = strtolower(substr($_FILES['FtColaborador']['name'], -4)); //pega a extensao do arquivo
        $nomeFtCE = md5(time()) . $extensao; //define o nome do arquivo
        $diretorio = "../images/entregaEquipamentos/"; //define o diretorio para onde enviaremos o arquivo
        move_uploaded_file($_FILES['FtColaborador']['tmp_name'], $diretorio.$nomeFtCE); //efetua o upload
        $Obj->SetFtColaboradorEquipamento($nomeFtCE);

        $extensao = strtolower(substr($_FILES['FtLogado']['name'], -4)); //pega a extensao do arquivo
        $nomeFtLogado = md5(time()) . $extensao; //define o nome do arquivo
        $diretorio = "../images/entregaEquipamentos/"; //define o diretorio para onde enviaremos o arquivo
        move_uploaded_file($_FILES['FtLogado']['tmp_name'], $diretorio.$nomeFtLogado); //efetua o upload
        $Obj->SetFtLogado($nomeFtLogado);

        $Obj->SetStatusAtendimento($_POST["StatusAtendimento"]); 
        $Obj->SetAntigo($_POST["VCAntigo"]);

        //echo $_POST["VCNovo"];

        $Obj->SetNovo($_POST["VCNovo"]);
        $Obj->SetidTecnico($_SESSION["idTecnico"]);
        $Obj->SetidColaborador($_POST["idColaborador"]);

        $Obj->EncerraAtendimento($link);
  
    }else{
        echo "falha no enganio";
    }
    
    header('Location:http://localhost/infoprime/rolloutd/index.php');
?>