<html>
    <head>
    
        <link href="css/formulario.css" rel="stylesheet">

        <style>
          body {background-image: url('css/1.jpg');size: 0cm; background-repeat: no-repeat;background-position-x:center;}
          image{opacity: 0.2;}
        </style>
    </head>
    
    <body>
        <div class= "formas" >
          <form name="f1" action="consultas/cadastrarItemVenda.php" method="post"> <h1 align-items: center>Preencha os dados do item de venda</h1> 
          <table> <tr> <td>

          Id do item de venda:
              <input type="name" id="iditem" name="iditem" maxlength="60" size='65'> <P></P>

          Quantidade:
              <input type="name" id="quantidade" name="quantidade" maxlength="60" size='65'> <P></P>

          Preço:
              <input type="name" id="preco" name="preco" maxlength="60" size='65'> <P></P>

          Id da venda:  
              <input type="name" id="idvenda" name="idvenda" maxlength="60" size='65'> <P></P>
           
          Id do aplicativo:
              <input type="name" id="datacriacao" name="datacriacao" maxlength="60" size='65'> <P></P>
              
          Balanco:
              <input type="name" id="idapp" name="idapp" maxlength="60" size='65'> <P></P>


              
              <input type="submit" name="cadastrarItemVenda" id="cadastrarItemVenda" value="clique aqui"> 
          </td>
           <td> <div id="msgemail"> </div>
           </td> 
           </tr>  </table>  </form> 
        </div>
        
       
        


         
        
    </body>
 </html>