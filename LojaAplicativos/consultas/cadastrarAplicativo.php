<html>
<head>
    <style>
      body {background-image: url('2.jpg');size: 0cm; background-repeat: no-repeat;background-position-x:center;}
      image{opacity: 0.2;}
    </style>
</head>
</html>

<?php 
    include("conexão.php");

    $Id_aplicativo= $_POST["idapp"];
    $Nome=$_POST["nome"];
    $Descricao=$_POST["descricao"];
    $preco=$_POST["preco"];
    $data_lancamento=$_POST["data"];
    $desenvolvedor_id_desenvolvedor=$_POST["iddev"];
    
    $inserirApp="INSERT INTO aplicativo(id_aplicativo,nome,descricao,preco,data_lancamento,desenvolvedor_id_desenvolvedor) 
    VALUES ('$Id_aplicativo','$Nome','$Descricao','$preco','$data_lancamento','$desenvolvedor_id_desenvolvedor'); ";
    
    $insert = mysqli_query($conexao,$inserirApp);

    if($insert){
        echo "Parabéns! Seus dados foram cadastrados!";
    }
    else{
        echo "Infelizmente seus dados não foram cadastrados! Tente de novo.";
    }

    mysqli_close($conexao);


    
?>