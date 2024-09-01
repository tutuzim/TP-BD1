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
          <form name="f1" action="consultas/cadastrarAplicativo.php" method="post"> <h1 align-items: center>Preencha os dados do aplicativo:</h1> 
          <table> <tr> <td>

          Id do aplicativo:
              <input type="name" id="idapp" name="idapp" maxlength="60" size='65'> <P></P>

          Nome do aplicativo:
              <input type="name" id="nome" name="nome" maxlength="60" size='65'> <P></P>

          Descricao:
              <input type="name" id="descricao" name="descricao" maxlength="60" size='65'> <P></P>
              
          Preço:
          <input type="name" id="preco" name="preco" maxlength="60" size='65'> <P></P>

          Data de lançamento:
              <input type="name" id="data" name="data" maxlength="60" size='65'> <P></P>
              
          Id de desenvolvedor:
              <input type="name" id="iddev" name="iddev" maxlength="60" size='65'> <P></P>


              
              <input type="submit" name="cadastrarAplicativo" id="cadastrarAplicativo" value="clique aqui"> 
          </td>
           <td> <div id="msgemail"> </div>
           </td> 
           </tr>  </table>  </form> 
        </div>
        
       
        


         
        
    </body>
 </html>