<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Entregas Avulsas</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Entregas Avulsas da Impacto Transportes">
        <meta name="author" content="Joao Antonio Santos">
        <!-- Le styles -->
        <link href="bootstrap.css" rel="stylesheet">
        <style>
            body {
                padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
            }
        </style>
        <link href="bootstrap-responsive.css" rel="stylesheet">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="html5shiv.js"></script>
        <![endif]-->
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="favicon.png">
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="http://impacto.joaoantoniosantos.com.br/">Impacto Transportes</a>
                    <!--<a class="brand" href="http://localhost/joaoantoniosantos/impacto/">Impacto Transportes</a>-->
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li><a href="http://impacto.joaoantoniosantos.com.br/entregas/avulso/">Nova</a></li>
                            <li class="active"><a href="http://impacto.joaoantoniosantos.com.br/entregas/avulso/historico.php">Historico</a></li>
                            <!--<li><a href="http://localhost/joaoantoniosantos/impacto/entregas/avulso/">Nova</a></li>
                            <li class="active"><a href="http://localhost/joaoantoniosantos/impacto/entregas/avulso/historico.php">Historico</a></li>-->
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container">
        <?php
            //$mysqli = new mysqli('localhost', 'root', '', 'impactotransportes');
            $mysqli = new MySQLi('joaoantoniosantos.com.br','joaoa870_joao','joaoantonio2012','joaoa870_impacto');
            $query  = "SELECT * FROM avulsas ORDER BY id DESC";
            echo '
            <div class="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Padrão do Titulo: <br></strong> Campanha - Nome do Cliente - Data da Entrega
            </div>';
			if ($result = $mysqli->query($query)) {
				while ($row = $result->fetch_assoc()) {
                    $id=$row['id'];
                    $nome_cliente=$row['nome_cliente'];
                    $data_entrega=$row['data_entrega'];
                    $nome_recebedor=$row['nome_recebedor'];
                    $campanha=$row['campanha'];
                    $nota_fiscal=$row['nota_fiscal'];
                    $conhecimento_aereo=$row['conhecimento_aereo'];
                    $conhecimento_rodoviario=$row['conhecimento_rodoviario'];
                    $peso=$row['peso'];
                    $qtd_volume=$row['qtd_volume'];
                    $valor_a_receber=$row['valor_a_receber'];
                    $valor_pago=$row['valor_pago'];
                    $cidade=$row['cidade'];
                    $estado=$row['estado'];
                    $entregador=$row['entregador'];
                    echo '
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a style="text-decoration: none;" data-toggle="collapse" href="#collapse'.$id.'">'.$id.' - '.$campanha.' - '.$nome_cliente.' - '.$data_entrega.'</a>
                                </h4>
                            </div>
                            <div id="collapse'.$id.'" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="hero-unit" style="padding:5px;">
                                        <ul class="list-group" type="none">
                                            <li class="list-group-item"><strong>id:</strong> '.$id.'</li>
                                            <li class="list-group-item"><strong>nome_cliente:</strong> '.$nome_cliente.'</li>
                                            <li class="list-group-item"><strong>data_entrega:</strong> '.$data_entrega.'</li>
                                            <li class="list-group-item"><strong>nome_recebedor:</strong> '.$nome_recebedor.'</li>
                                            <li class="list-group-item"><strong>campanha:</strong> '.$campanha.'</li>
                                            <li class="list-group-item"><strong>nota_fiscal:</strong> '.$nota_fiscal.'</li>
                                            <li class="list-group-item"><strong>conhecimento_aereo:</strong> '.$conhecimento_aereo.'</li>
                                            <li class="list-group-item"><strong>conhecimento_rodoviario:</strong> '.$conhecimento_rodoviario.'</li>
                                            <li class="list-group-item"><strong>peso:</strong> '.$peso.'</li>
                                            <li class="list-group-item"><strong>qtd_volume:</strong> '.$qtd_volume.'</li>
                                            <li class="list-group-item"><strong>valor_a_receber:</strong> '.$valor_a_receber.'</li>
                                            <li class="list-group-item"><strong>valor_pago:</strong> '.$valor_pago.'</li>
                                            <li class="list-group-item"><strong>cidade:</strong> '.$cidade.'</li>
                                            <li class="list-group-item"><strong>estado:</strong> '.$estado.'</li>
                                            <li class="list-group-item"><strong>entregador:</strong> '.$entregador.'</li>
                                            
                                            <button class="btn btn-primary" type="button">
                                            <a style="text-decoration:none; color: white;" href="edita.php?id='.$id.'">Editar <img src="edit-solid.png" style="height:20px;"></a>
                                            </button>

                                            <button class="btn btn-primary" type="button">
                                            <a style="text-decoration:none; color: white;" href="exporta.php?id='.$id.'">Exportar <img src="export-solid.png" style="height:20px;"></a>
                                            </button>
                                        </ul>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ';
				}
			}
        ?>
        </div> <!-- /container -->
        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="jquery.js"></script>
        <script src="bootstrap-transition.js"></script>
        <script src="bootstrap-alert.js"></script>
        <script src="bootstrap-modal.js"></script>
        <script src="bootstrap-dropdown.js"></script>
        <script src="bootstrap-scrollspy.js"></script>
        <script src="bootstrap-tab.js"></script>
        <script src="bootstrap-tooltip.js"></script>
        <script src="bootstrap-popover.js"></script>
        <script src="bootstrap-button.js"></script>
        <script src="bootstrap-collapse.js"></script>
        <script src="bootstrap-carousel.js"></script>
        <script src="bootstrap-typeahead.js"></script>
    </body>
</html>