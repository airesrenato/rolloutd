<?php
    require_once "../classes/class_Equipamento.php";
    require_once "../classes/class_Atendimento.php";
    require_once "../classes/class_Colaborador.php";
    require_once "conexao.php";
    session_start();
    $host = $_SERVER['HTTP_HOST'];

    if (!empty($_POST["Cadastrar"])) {
        $Obj = new Equipamento(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
        $Obj->SetModelo($_POST["ModeloAntigo"]);
        $Obj->SetVC($_POST["VCAntigo"]);
        $Obj->SetServiceTag($_POST["ServiceTagAntigo"]);
        $Obj->SetTipo($_POST["Tipo"]);
        $Obj->SetLocalizacao($_POST["Localizacao"]);
        $Obj->SetSituacao($_POST["Situacao"]);
        $Obj->SetObservacao($_POST["Observacao"]);

        $Obj2 = new Colaborador(NULL, NULL, NULL, NULL, NULL, NULL);
        $Obj2->SetResponsavel($_POST["Responsavel"]);
        $Obj2->SetEmail($_POST["Email"]);
        $Obj2->SetTelefone($_POST["Telefone"]);
        $Obj2->SetCPF($_POST["CPF"]);
        $Obj2->SetMatricula($_POST["Matricula"]);


        if ($Obj->ExisteVC($link, $_POST["VCAntigo"])) {
            header('Location:https://localhost/infoprime/rolloutd/pages/examples/500.html');
        } else {
            //$dataAtual = date('d/m/Y G:i:s');
            // $linha = $dataAtual." ". $_SESSION['Nome']." Cadastrou -> ".$_POST['PatrimonioAntigo']." ".PHP_EOL; 
            // $log = fopen("./logs/log_ce.txt","a+");
            //fwrite($log,$linha);
            //fclose($log);

            $Obj->InsereEquipamento($link);
            $idAntigo = $Obj->GetidEquipamento();

            $Obj2->InsereColaborador($link);
            $idColaborador = $Obj2->GetidColaborador();

            //echo $idAntigo;
            //echo $idColaborador;

            $Atendimento = new Atendimento(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
            /*$Atendimento->SetDepartamento($_POST["Departamento"]);
            $Atendimento->SetLocalidade($_POST["Localidade"]);
            $Atendimento->SetBackup($_POST["Backup"]);
            $Atendimento->SetDia($_POST["Dia"]);
            $Atendimento->SetTermo($_POST["Termo"]);
            $Atendimento->SetFtColaboradorEquipamento($_POST["FtColaborador"]);
            $Atendimento->SetFtLogado($_POST["FtLogado"]);*/
            
            $Atendimento->SetStatusAtendimento('Aberto');
            $Atendimento->SetAntigo($idAntigo);

            /*Esse valor 1 no SetNovo e no SetidTecnico é um valor base que foi criado no banco
            para realizar esse primeiro contato do cadastro*/

            $Atendimento->SetNovo(1);
            $Atendimento->SetidTecnico(1);

            $Atendimento->SetidColaborador($idColaborador);

            $Atendimento->InsereAtendimento($link);
            header('Location:http://localhost/infoprime/rolloutd/index.php');
        }
    }
?>