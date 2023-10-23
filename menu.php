<?php
$host = 'localhost';
?>
            <div class="menu">
                <ul class="list">
                    <li class="header">Painel</li>
                    <li class="">
                        <?php  
                            echo "<a href='http://$host/infoprime/rolloutd/index.php'>";
                        ?>
                        <i class="material-icons">home</i>
                        <span>Página Inicial</span>
                        </a>
                    </li>
                    <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">local_atm</i>
                    <span>Cadastrar</span>
                </a>
                <ul class="ml-menu">
                    
                    <li class="">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <span>Atendimento</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="">
                                <?php  
                                    echo "<a href='http://localhost/infoprime/rolloutd/pages/forms/cadastrarAtendimentoColaborador.php'>Primeiro Contato</a>";
                                ?>
                            </li>
                            <li class="">
                                <?php  
                                    echo "<a href='#'>Equipamento já cadastrado</a>";
                                ?>
                            </li>
                            <li class="">
                                <?php  
                                    echo "<a href='#'>Encerrar Atendimento</a>";
                                ?>
                            </li>
                        </ul>            
                    </li>
                    <li class="">
                        <?php  
                            echo "<a href='http://localhost/infoprime/rolloutd/pages/forms/cadastrarEquipamento.php'>";
                        ?>
                        <i class="material-icons">home</i>
                        <span>Equipamento</span>
                        </a>
                    </li>
                  
                                          
                </ul>  
            </li>
                    
                  

                  
                    
                    
                    