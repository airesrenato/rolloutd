<?php
     session_start();
    include '../../metodos/conexao.php';
    require_once '../../classes/class_Equipamento.php';
    $host  = $_SERVER['HTTP_HOST'];


    if (!empty($_GET["idEquipamento"])){
        $alterar = new Equipamento ($_GET["idEquipamento"],NULL,NULL,NULL,NULL,NULL,NULL,NULL);    
            $_SESSION['idEquipamento'] = $_GET["idEquipamento"];
            $alterar->GetEquipamento($link,$_GET['idEquipamento']);
        echo "

<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <title>Alterar Equipamento</title>

	<!-- Favicon-->
    <link rel='icon' href='../../favicon.ico' type='image/x-icon'>

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet' type='text/css'>

    <!-- Bootstrap Core Css -->
    <link href='../../plugins/bootstrap/css/bootstrap.css' rel='stylesheet'>

    <!-- Waves Effect Css -->
    <link href='../../plugins/node-waves/waves.css' rel='stylesheet' />

    <!-- Animation Css -->
    <link href='../../plugins/animate-css/animate.css' rel='stylesheet' />

    <!-- Colorpicker Css -->
    <link href='../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css' rel='stylesheet' />

    <!-- Dropzone Css -->
    <link href='../../plugins/dropzone/dropzone.css' rel='stylesheet'>

    <!-- Multi Select Css -->
    <link href='../../plugins/multi-select/css/multi-select.css' rel='stylesheet'>

    <!-- Bootstrap Spinner Css -->
    <link href='../../plugins/jquery-spinner/css/bootstrap-spinner.css' rel='stylesheet'>

    <!-- Bootstrap Tagsinput Css -->
    <link href='../../plugins/bootstrap-tagsinput/bootstrap-tagsinput.css' rel='stylesheet'>

    <!-- Bootstrap Select Css -->
    <link href='../../plugins/bootstrap-select/css/bootstrap-select.css' rel='stylesheet' />

    <!-- noUISlider Css -->
    <link href='../../plugins/nouislider/nouislider.min.css' rel='stylesheet' />

    <!-- Custom Css -->
    <link href='../../css/style.css' rel='stylesheet'>

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href='../../css/themes/all-themes.css' rel='stylesheet' />


    <!-- Favicon-->
    <link rel='icon' href='../../favicon.ico' type='image/x-icon'>

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet' type='text/css'>

    <!-- Bootstrap Core Css -->
    <link href='../../plugins/bootstrap/css/bootstrap.css' rel='stylesheet'>

    <!-- Waves Effect Css -->
    <link href='../../plugins/node-waves/waves.css' rel='stylesheet' />

    <!-- Animation Css -->
    <link href='../../plugins/animate-css/animate.css' rel='stylesheet' />

    <!-- Sweet Alert Css -->
    <link href='../../plugins/sweetalert/sweetalert.css' rel='stylesheet' />

    <!-- Custom Css -->
    <link href='../../css/style.css' rel='stylesheet'>

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href='../../css/themes/all-themes.css' rel='stylesheet' />
</head>

<body class='theme-red'>
    <!-- Page Loader -->
    <div class='page-loader-wrapper'>
        <div class='loader'>
            <div class='preloader'>
                <div class='spinner-layer pl-red'>
                    <div class='circle-clipper left'>
                        <div class='circle'></div>
                    </div>
                    <div class='circle-clipper right'>
                        <div class='circle'></div>
                    </div>
                </div>
            </div>
            <p>Um Momento. . . </p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
        <?php
            include_once'../../topBar.php';
        ?>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id='leftsidebar' class='sidebar'>
            <!-- User Info -->
            <?php
                include_once'../../userInfo.php';
            ?>
            <!-- #User Info -->
            <!-- Menu -->
            <?php
                include_once'../../menu.php';
            ?>
            <!-- #Menu -->
            <!-- Footer -->
            <?php
                //include_once'../../footer.php';
            ?>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
       
        <!-- #END# Right Sidebar -->
    </section>

    <section class='content'>
        <div class='container-fluid'>
            
            <div class='block-header'>
                <h2>Alterar um Equipamento</h2>
            </div>

            <!-- Vertical Layout -->
            <div class='row clearfix'>
                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <div class='card'>
                        
                        <div class='body'>
                            <form method='post' action='alterarEquipamento.php' >
                                <label for='Modelo'>Modelo</label>
                                <div class='form-group'>
                                    <div class='form-line'>
                                        <input type='text' id='Modelo' name='Modelo' class='form-control' Value='".$alterar->GetModelo()."' required>
                                    </div>
                                </div>

                                <label for='VC'>VC</label>
                                <div class='form-group'>
                                    <div class='form-line'>
                                        <input type='text' id='VC' name='VC' class='form-control' value='".$alterar->GetVC()."' required>
                                    </div>
                                </div>

                                <label for='ServiceTag'>Service TAG</label>
                                <div class='form-group'>
                                    <div class='form-line'>
                                        <input type='text' name='ServiceTag' id='ServiceTag' class='form-control' value='".$alterar->GetServiceTag()."' required>
                                    </div>
                                </div>

                                <label for='Tipo'>Tipo</label>
                                <div class='form-group'>
                                    <div class='form-line'>
                                        <input type='text' name='Tipo' id='Tipo' class='form-control' value='".$alterar->GetTipo()."' required>
                                    </div>
                                </div>

                                <label for='Localizacao'>Localização</label>
                                <div class='form-group'>
                                    <div class='form-line'>
                                        <input type='text' name='Localizacao' id='Localizacao' class='form-control' value='".$alterar->GetLocalizacao()."' required>
                                    </div>
                                </div>

                                <label for='Situacao'>Situação</label>
                                <div class='form-group'>
                                    <div class='form-line'>
                                        <input type='text' name='Situacao' id='Situacao' class='form-control' value='".$alterar->GetSituacao()."' required>
                                    </div>
                                </div>

                                <label for='Observacao'>Observação</label>
                                <div class='form-group'>
                                    <div class='form-line'>
                                        <input type='text' name='Observacao' id='Observacao' class='form-control' value='".$alterar->GetObservacao()."' required>
                                    </div>
                                </div>

                                <input type='submit' class='btn btn-primary m-t-15 waves-effect' name='Enviar' value='Alterar'>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->
            <!-- Vertical Layout | With Floating Label -->
            
            <!-- Vertical Layout | With Floating Label -->
            <!-- Horizontal Layout -->
            
            <!-- #END# Horizontal Layout -->
            <!-- Inline Layout -->
            
            <!-- #END# Inline Layout -->
            <!-- Inline Layout | With Floating Label -->
            
            <!-- #END# Inline Layout | With Floating Label -->
            <!-- Multi Column -->
            
            <!-- #END# Multi Column -->
        </div>
    </section>

   <!-- Jquery Core Js -->
    <script src='../../plugins/jquery/jquery.min.js'></script>

    <!-- Bootstrap Core Js -->
    <script src='../../plugins/bootstrap/js/bootstrap.js'></script>

    <!-- Select Plugin Js -->
    <script src='../../plugins/bootstrap-select/js/bootstrap-select.js'></script>

    <!-- Slimscroll Plugin Js -->
    <script src='../../plugins/jquery-slimscroll/jquery.slimscroll.js'></script>

    <!-- Bootstrap Colorpicker Js -->
    <script src='../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js'></script>

    <!-- Dropzone Plugin Js -->
    <script src='../../plugins/dropzone/dropzone.js'></script>

    <!-- Input Mask Plugin Js -->
    <script src='../../plugins/jquery-inputmask/jquery.inputmask.bundle.js'></script>

    <!-- Multi Select Plugin Js -->
    <script src='../../plugins/multi-select/js/jquery.multi-select.js'></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src='../../plugins/jquery-spinner/js/jquery.spinner.js'></script>

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src='../../plugins/bootstrap-tagsinput/bootstrap-tagsinput.js'></script>

    <!-- noUISlider Plugin Js -->
    <script src='../../plugins/nouislider/nouislider.js'></script>

    <!-- Waves Effect Plugin Js -->
    <script src='../../plugins/node-waves/waves.js'></script>

    <!-- Custom Js -->
    <script src='../../js/admin.js'></script>
    <script src='../../js/pages/forms/advanced-form-elements.js'></script>

    <!-- Demo Js -->
    <script src='../../js/demo.js'></script>




</body>

</html>";
}else if(!empty ($_POST["Enviar"])){
    $alterar = new Equipamento ($_SESSION["idEquipamento"],NULL,NULL,NULL,NULL,NULL,NULL,NULL);
    $alterar->SetModelo($_POST['Modelo']);
    $alterar->SetVC($_POST['VC']);
    $alterar->SetServiceTag($_POST['ServiceTag']);
    $alterar->SetTipo($_POST['Tipo']);
    $alterar->SetLocalizacao($_POST['Localizacao']);
    $alterar->SetSituacao($_POST['Situacao']);
    $alterar->SetObservacao($_POST['Observacao']);

    
    $alterar->AlteraEquipamento($link);
    header('Location:http://'.$host.'/infoprime/rolloutd/pages/tables/verEquipamentos.php');   
}