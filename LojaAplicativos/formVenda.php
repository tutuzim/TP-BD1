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
          <form name="f1" action="consultas/cadastrarVenda.php" method="post"> <h1 align-items: center>Preencha os dados de venda</h1> 
          <table> <tr> <td>

          Id da venda:
              <input type="name" id="idvenda" name="idvenda" maxlength="60" size='65'> <P></P>

          Data da venda:
              <input type="name" id="datavenda" name="datavenda" maxlength="60" size='65'> <P></P>
              
          Id do usuário:
              <input type="name" id="idusuario" name="idusuario" maxlength="60" size='65'> <P></P>


              
              <input type="submit" name="cadastrarVenda" id="cadastrarVenda" value="clique aqui"> 
          </td>
           <td> <div id="msgemail"> </div>
           </td> 
           </tr>  </table>  </form> 
        </div>
        
       
        


         
        
    </body>
 </html>