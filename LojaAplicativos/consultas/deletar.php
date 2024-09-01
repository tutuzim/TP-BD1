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

    $idDeletar=$_POST["idDelete"];

    if (isset($_POST['opcaoDeletar'])) {

        $tabelaDeletar = $_POST['opcaoDeletar'];
        $querryDeletar;

        if($tabelaDeletar == "Desenvolvedor"){
            $querryDeletar="DELETE FROM Desenvolvedor  
            where id_desenvolvedor= '$idDeletar'; " ;
        }

        if($tabelaDeletar == "aplicativo"){
            $querryDeletar="DELETE FROM Aplicativo  
            where id_aplicativo='$idDeletar'; " ;
        }

        if($tabelaDeletar == "ItemVenda"){
            $querryDeletar="DELETE FROM itemVenda  
            where id_item_venda='$idDeletar'; " ;
        }

        if($tabelaDeletar == "Usuario"){
            $querryDeletar="DELETE FROM usuario  
            where id_usuario='$idDeletar'; " ;
        }

        if($tabelaDeletar == "Venda"){
            $querryDeletar="DELETE FROM venda  
            where id_venda='$idDeletar'; " ;
        }
        
    } else {
        echo "Nenhuma opção foi escolhida.";
    }

    
    if (isset($_POST['opcaoDeletar'])) {

        $insert = mysqli_query($conexao,$querryDeletar);

        if($insert){
            echo "A deleção foi um sucesso.";
        }
        else{
            echo "Erro, não foi possível deletar.";
        }
    
        mysqli_close($conexao);
    
    }


  

    
?>