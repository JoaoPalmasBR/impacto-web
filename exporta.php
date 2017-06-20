<?php
    $id=$_GET['id'];
    //echo $id.'<br>';
    
    //$mysqli = new mysqli('localhost', 'root', '', 'impactotransportes');
    $mysqli = new MySQLi('joaoantoniosantos.com.br','joaoa870_joao','joaoantonio2012','joaoa870_impacto');
    $query  = "SELECT * FROM avulsas where id='".$id."';";
    $nome_cliente;$data_entrega;$nome_recebedor;$campanha;$nota_fiscal;$conhecimento_aereo;$conhecimento_rodoviario;
    $peso;$qtd_volume;$valor_a_receber;$valor_pago;$cidade;$estado;$entregador;

    if ($result = $mysqli->query($query)) {
        if($result->num_rows === 0){
            echo '<h1>Nao existe!</h1>';
        }
        else{
            while ($row = $result->fetch_assoc()) {
                $id=$row['id'];$nome_cliente=$row['nome_cliente'];$data_entrega=$row['data_entrega'];
                $nome_recebedor=$row['nome_recebedor'];$campanha=$row['campanha'];$nota_fiscal=$row['nota_fiscal'];
                $conhecimento_aereo=$row['conhecimento_aereo'];$conhecimento_rodoviario=$row['conhecimento_rodoviario'];
                $peso=$row['peso'];$qtd_volume=$row['qtd_volume'];$valor_a_receber=$row['valor_a_receber'];
                $valor_pago=$row['valor_pago'];$cidade=$row['cidade'];$estado=$row['estado'];$entregador=$row['entregador'];

                // Abre ou cria o arquivo bloco1.txt
                // "a" representa que o arquivo é aberto para ser escrito
                $file = fopen("export_$id.txt", "w");
                // Escreve "exemplo de escrita" no bloco1.txt
                //fwrite($file, "texto\r\n");
                $conteudo="-    IMPACTO TRANSPORTES E LOGISTICA     
-        M A ILARIO COMERCIO - ME        
- 10.734.884/0001-61      (63)98476-5009 
-         Palmas Tocantins Brasil        
-----------------------------------------
- Identificador: $id
- Nome Cliente: $nome_cliente
- Data Entrega: $data_entrega
- Nome Recebedor: $nome_recebedor
- Campanha: $campanha
- Nota Fiscal: $nota_fiscal
- Conhecimento Aereo: $conhecimento_aereo
- Conhecimento Rodoviario: $conhecimento_rodoviario
- Peso: $peso KG
- Quantidade Volumes: $qtd_volume
- Valor a Receber: R$ $valor_a_receber
- Valor Pago: R$ $valor_pago
- Cidade: $cidade
- Estado: $estado
- Entregador: $entregador

- Exportado dia: ".date("d/m/Y")."
-----------------------------------------
";
                fwrite($file, $conteudo);
                // Fecha o arquivo
                fclose($file);
                header('location: http://impacto.joaoantoniosantos.com.br/entregas/avulso/historico.php');
            }
	    }
    }    
?>