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

    $id_venda= $_POST["idvenda"];
    $data_venda=$_POST["datavenda"];
    $usuario_id_usuario=$_POST["idusuario"];

    $inserirVenda="INSERT INTO venda(id_venda,data_venda,usuario_id_usuario) 
    VALUES ('$id_venda','$data_venda','$usuario_id_usuario'); ";
    
    $insert = mysqli_query($conexao,$inserirVenda);

    if($insert){
        echo "Parabéns! Seus dados foram cadastrados!";
    }
    else{
        echo "Infelizmente seus dados não foram cadastrados! Tente de novo.";
    }

    mysqli_close($conexao);


    
?>