<?php
    $id=$_GET['id'];
    //echo $id.'<br>';
    
    //$mysqli = new mysqli('localhost', 'root', '', 'impactotransportes');
    $mysqli = new MySQLi('joaoantoniosantos.com.br','joaoa870_joao','joaoantonio2012','joaoa870_impacto');
    $query  = "SELECT * FROM avulsas where id='".$id."';";

    if ($result = $mysqli->query($query)) {
        if($result->num_rows === 0){
            echo '<h1>Nao existe!</h1>';
        }
        else{
            while ($row = $result->fetch_assoc()) {
                $query  = "DELETE FROM avulsas where id='$id'";
                $mysqli->query($query);
                header("location: http://impacto.joaoantoniosantos.com.br/entregas/avulso/historico.php");
            }
        }
    }
?>