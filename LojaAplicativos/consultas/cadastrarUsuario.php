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

    $id_usuario= $_POST["idusuario"];
    $primeiro_nome=$_POST["primeironome"];
    $ultimo_nome=$_POST["ultimonome"];
    $email=$_POST["email"];
    $senha=$_POST["senha"];
    $data_criacao=$_POST["datacriacao"];
    $balanco=$_POST["balanco"];

    $inserirUsuario="INSERT INTO usuario(id_usuario,primeiro_nome,ultimo_nome,email,senha,data_criacao,balanco) 
    VALUES ('$id_usuario','$primeiro_nome','$ultimo_nome','$email',md5('$senha'),'$data_criacao','$balanco'); ";
    
    $insert = mysqli_query($conexao,$inserirUsuario);

    if($insert){
        echo "Parabéns! Seus dados foram cadastrados!";
    }
    else{
        echo "Infelizmente seus dados não foram cadastrados! Tente de novo.";
    }

    mysqli_close($conexao);


    
?>