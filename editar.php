<?php
    $id = $_POST['id'];
    $nome_cliente = $_POST['nome_cliente'];
    $data_entrega = $_POST['data_entrega'];
    $nome_recebedor = $_POST['nome_recebedor'];
    $campanha = $_POST['campanha'];
    $nota_fiscal = $_POST['nota_fiscal'];
    $conhecimento_aereo = $_POST['conhecimento_aereo'];
    $conhecimento_rodoviario = $_POST['conhecimento_rodoviario'];
    $peso = $_POST['peso'];
    $qtd_volume = $_POST['qtd_volume'];
    $valor_a_receber = $_POST['valor_a_receber'];
    $valor_pago = $_POST['valor_pago'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $entregador = $_POST['entregador'];

    $query="UPDATE avulsas SET 
        nome_cliente = '$nome_cliente',
        data_entrega = '$data_entrega',
        nome_recebedor = '$nome_recebedor',
        campanha = '$campanha',
        nota_fiscal = '$nota_fiscal',
        conhecimento_aereo = '$conhecimento_aereo',
        conhecimento_rodoviario = '$conhecimento_rodoviario',
        peso = '$peso',
        qtd_volume = '$qtd_volume',
        valor_a_receber = '$valor_a_receber',
        valor_pago = '$valor_pago',
        cidade = '$cidade',
        estado = '$estado',
        entregador = '$entregador'
        WHERE id = '$id'";
    //print($query);
    //$mysqli = new mysqli('localhost', 'root', '', 'impactotransportes');
    $mysqli = new MySQLi('joaoantoniosantos.com.br','joaoa870_joao','joaoantonio2012','joaoa870_impacto');
    $mysqli->query($query);

    echo '
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
            <div class="container">

            <br><br>
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <br><br>
                    <center><strong>Atualizado com Sucesso!</strong></center>
                    <br><br>
                </div>

                <center><a href="http://impacto.joaoantoniosantos.com.br/entregas/avulso/historico.php"><-- Voltar</a></center>
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
    ';
?>