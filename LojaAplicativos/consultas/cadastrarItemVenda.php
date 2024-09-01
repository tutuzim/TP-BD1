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
    
    $id_item_venda= $_POST["iditem"];
    $quantidade=$_POST["quantidade"];
    $preco=$_POST["preco"];
    $venda_id_venda=$_POST["idvenda"];
    $aplicativo_id_aplicativo=$_POST["idapp"];

    $inserirItemVenda="INSERT INTO itemVenda(id_item_venda,quantidade,preco,venda_id_venda,aplicativo_id_aplicativo) 
    VALUES ('$id_item_venda','$quantidade','$preco','$venda_id_venda','$aplicativo_id_aplicativo'); ";
    
    $insert = mysqli_query($conexao,$inserirItemVenda);

    if($insert){
        echo "Parabéns! Seus dados foram cadastrados!";
    }
    else{
        echo "Infelizmente seus dados não foram cadastrados! Tente de novo.";
    }

    mysqli_close($conexao);


    
?>