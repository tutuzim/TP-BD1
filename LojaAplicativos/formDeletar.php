<html>
    <head>
    
        <link href="css/formulario.css" rel="stylesheet">

    </head>
    
    <body>
        <div class= "formas" >
          <form name="f1" action="consultas/deletar.php" method="post"> <h1 align-items: center>Preencha os dados para deleção:</h1> 
          <table> <tr> <td>

          O quer deletar?
            
            <br> <br>
            <input type="radio" id="desenvolvedor" name="opcaoDeletar" value="Desenvolvedor">
            <label for="desenvolvedor">Desenvolvedor</label><br>

            <input type="radio" id="usuario" name="opcaoDeletar" value="Usuario">
            <label for="usuario">Usuário</label><br>

            <input type="radio" id="aplicativo" name="opcaoDeletar" value="Aplicativo">
            <label for="aplicativo">Aplicativo</label><br>

            <input type="radio" id="itemvenda" name="opcaoDeletar" value="ItemVenda">
            <label for="itemvenda">Item de venda</label><br>

            <input type="radio" id="venda" name="opcaoDeletar" value="Venda">
            <label for="venda">Venda</label> <br><br>

              
          Digite o Id do dado a ser deletado
              <br> <input type="name" id="idDelete" name="idDelete" maxlength="60" size='65'> <P></P>              

              
              <input type="submit" name="cadastrarVenda" id="cadastrarVenda" value="clique aqui"> 
          </td>
           <td> <div id="msgemail"> </div>
           </td> 
           </tr>  </table>  </form> 
        </div>
        
       
        


         
        
    </body>
 </html>