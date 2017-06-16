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
                    <!-- <a class="brand" href="http://localhost/joaoantoniosantos/impacto/">Impacto Transportes</a>-->
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="http://impacto.joaoantoniosantos.com.br/entregas/avulso/">Nova</a></li>
                            <li><a href="http://impacto.joaoantoniosantos.com.br/entregas/avulso/historico">Historico</a></li>
                            <!--<li class="active"><a href="http://localhost/joaoantoniosantos/impacto/entregas/avulso/">Nova</a></li>
                            <li><a href="http://localhost/joaoantoniosantos/impacto/entregas/avulso/historico">Historico</a></li>-->
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="page-header">
                <h1>Entregas Avulsas <small>Formulario de Registro de novas entregas feitas de forma avulsa.</small></h1>
            </div>
            <form class="form-signin" method="POST" autocomplete="off" action="envia.php">

                <label for="nome_cliente" class="sr-only"><h1><small>Nome do Cliente</small></h1></label>
                    <input type="text"`pattern="[A-Za-z]+" id="nome_cliente" name="nome_cliente" class="form-control" placeholder="nome_cliente"> <!--autofocus -->
                
                <label for="data_entrega" class="sr-only"><h1><small>Data da Entrega</small></h1></label>
                    <input type="date" id="data_entrega" name="data_entrega" class="form-control" placeholder="data_entrega" min="2017-06-01">
                
                <label for="nome_recebedor" class="sr-only"><h1><small>Nome do Recebedor</small></h1></label>
                    <input type="text" id="nome_recebedor" name="nome_recebedor" class="form-control" placeholder="nome_recebedor">
                
                <label for="campanha" class="sr-only"><h1><small>Campanha</small></h1></label>
                    <input type="text" id="campanha" name="campanha" class="form-control" placeholder="campanha">

                <label for="nota_fiscal" class="sr-only"><h1><small>Nota Fiscal</small></h1></label>
                    <input type="text" id="nota_fiscal" name="nota_fiscal" class="form-control" placeholder="nota_fiscal">
                
                <label for="conhecimento_aereo" class="sr-only"><h1><small>Conhecimento Aéreo</small></h1></label>
                    <input type="text" id="conhecimento_aereo" name="conhecimento_aereo" class="form-control" placeholder="conhecimento_aereo">
                
                <label for="conhecimento_rodoviario" class="sr-only"><h1><small>Conhecimento Rodoviário</small></h1></label>
                    <input type="text" id="conhecimento_rodoviario" name="conhecimento_rodoviario" class="form-control" placeholder="conhecimento_rodoviario">
                
                <label for="peso" class="sr-only"><h1><small>Peso</small></h1></label>
                    <input type="number" id="peso" name="peso" class="form-control" placeholder="peso"> KG
                
                <label for="qtd_volume" class="sr-only"><h1><small>Quantidade Volumes</small></h1></label>
                    <input type="number" id="qtd_volume" name="qtd_volume" class="form-control" placeholder="qtd_volume" min="1"> Unid
                
                <label for="valor_a_receber" class="sr-only"><h1><small>Valor a Receber</small></h1></label>
                    R$ <input type="number" min="0.00" max="10000.00" step="0.01" id="valor_a_receber" name="valor_a_receber" class="form-control" placeholder="valor_a_receber">
                
                <label for="valor_pago" class="sr-only"><h1><small>Valor Pago</small></h1></label>
                    R$ <input type="number" min="0.00" max="10000.00" step="0.01" id="valor_pago" name="valor_pago" class="form-control" placeholder="valor_pago">
                    
                
                <label for="cidade" class="sr-only"><h1><small>Cidade</small></h1></label>
                    <input type="text" id="cidade" name="cidade" class="form-control" placeholder="cidade">
                
                <label for="estado" class="sr-only"><h1><small>Estado</small></h1></label>
                    <select id="estado" name="estado" class="form-control">
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espirito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO" selected="selected">Tocantins</option>
                    </select>
                <label for="entregador" class="sr-only"><h1><small>Entregador</small></h1></label>
                    <label>
                        <select id="entregador" name="entregador">
                            <option value="marco" selected="selected">Marco</option>
                            <option value="joao">Joao</option>
                        </select>
                    </label>
                <input class="btn btn-lg btn-primary btn-block" type="submit"/>
                <input type="reset">
            </form>
            <div class="jumbotron">
                    <summary>Copyright 2012-2017.</summary>
                    <address>
                    <p>by <a href="http://perfil.joaoantoniosantos.com.br">Joao Antonio Santos</a>.<br>
                        <a href="http://joaoantoniosantos.com.br">Joaoantoniosantos.com.br</a> - Palmas - Tocantins - Brasil
                    </p>
                </address>
            </div>
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
<!--
Menus
<ul class="nav nav-pills">
    <li role="presentation" class="active"><a href="#">Home</a></li>
    <li role="presentation"><a href="#">Profile</a></li>
    <li role="presentation"><a href="#">Messages</a></li>
</ul>

<ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Library</a></li>
    <li class="active">Data</li>
</ol>
-->