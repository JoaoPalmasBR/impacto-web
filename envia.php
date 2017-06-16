<?php
    $nome_cliente=$_POST['nome_cliente'];
    $data_entrega=$_POST['data_entrega'];
    $nome_recebedor=$_POST['nome_recebedor'];
    $campanha=$_POST['campanha'];
    $nota_fiscal=$_POST['nota_fiscal'];
    $conhecimento_aereo=$_POST['conhecimento_aereo'];
    $conhecimento_rodoviario=$_POST['conhecimento_rodoviario'];
    $peso=$_POST['peso'];
    $qtd_volume=$_POST['qtd_volume'];
    $valor_a_receber=$_POST['valor_a_receber'];
    $valor_pago=$_POST['valor_pago'];
    $cidade=$_POST['cidade'];
    $estado=$_POST['estado'];
    $entregador=$_POST['entregador'];

    $query="INSERT INTO avulsas (nome_cliente,data_entrega,nome_recebedor,campanha,nota_fiscal,conhecimento_aereo,
    conhecimento_rodoviario,peso,qtd_volume,valor_a_receber,valor_pago,cidade,estado,entregador)
    VALUES ('$nome_cliente','$data_entrega','$nome_recebedor','$campanha','$nota_fiscal','$conhecimento_aereo',
    '$conhecimento_rodoviario','$peso','$qtd_volume','$valor_a_receber','$valor_pago','$cidade',
    '$estado','$entregador');";
    //$mysqli = new mysqli('localhost', 'root', '', 'impactotransportes');
    $mysqli = new MySQLi('joaoantoniosantos.com.br','joaoa870_joao','joaoantonio2012','joaoa870_impacto');
    $mysqli->query($query);
?>
<!DOCTYPE html>
<html lang="en">
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
                    <!-- <a class="brand" href="http://localhost/joaoantoniosantos/impacto/">Impacto Transportes</a> -->
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="http://impacto.joaoantoniosantos.com.br/entregas/avulso/">Nova</a></li>
                            <li><a href="http://impacto.joaoantoniosantos.com.br/entregas/avulso/lista">About</a></li>
                            <!--<li class="active"><a href="http://localhost/joaoantoniosantos/impacto/entregas/avulso/">Nova</a></li>
                            <li><a href="http://localhost/joaoantoniosantos/impacto/entregas/avulso/historico">Historico</a></li>-->
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container">
        <?php
            echo "<dt>nome_cliente:</dt> 
                <dd>".$nome_cliente."</dd>";
            echo "<dt>data_entrega:</dt> 
                <dd>".$data_entrega."</dd>";
            echo "<dt>nome_recebedor:</dt> 
                <dd>".$nome_recebedor."</dd>";
            echo "<dt>campanha:</dt> 
                <dd>".$campanha."</dd>";
            echo "<dt>nota_fiscal:</dt> 
                <dd>".$nota_fiscal."</dd>";
            echo "<dt>conhecimento_aereo:</dt> 
                <dd>".$conhecimento_aereo."</dd>";
            echo "<dt>conhecimento_rodoviario:</dt> 
                <dd>".$conhecimento_rodoviario."</dd>";
            echo "<dt>peso:</dt> 
                <dd>".$peso."</dd>";
            echo "<dt>qtd_volume:</dt> 
                <dd>".$qtd_volume."</dd>";
            echo "<dt>valor_a_receber:</dt> 
                <dd>".$valor_a_receber."</dd>";
            echo "<dt>valor_pago:</dt> 
                <dd>".$valor_pago."</dd>";
            echo "<dt>cidade:</dt> 
                <dd>".$cidade."</dd>";
            echo "<dt>estado:</dt> 
                <dd>".$estado."</dd>";
            echo "<dt>entregador:</dt> 
                <dd>".$entregador."</dd>";
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