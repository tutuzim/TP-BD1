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
          <form name="f1" action="consultas/cadastrarUsuario.php" method="post"> <h1 align-items: center>Preencha os dados do usuário:</h1> 
          <table> <tr> <td>

          Id do usuário:
              <input type="name" id="idusuario" name="idusuario" maxlength="60" size='65'> <P></P>

          Nome:
              <input type="name" id="primeironome" name="primeironome" maxlength="60" size='65'> <P></P>

          Sobrenome:
              <input type="name" id="ultimonome" name="ultimonome" maxlength="60" size='65'> <P></P>

          E-mail:  
              <input type="email" id="email" name="email" maxlength="60" size='65'> <P></P>
           
          Senha:
              <input type="password" id="senha" name="senha" maxlength="60" size='65'> <P></P>

          Data de criação:
              <input type="name" id="datacriacao" name="datacriacao" maxlength="60" size='65'> <P></P>
              
          Balanco:
              <input type="name" id="balanco" name="balanco" maxlength="60" size='65'> <P></P>


              
              <input type="submit" name="cadastrarUsuario" id="cadastrarUsuario" value="clique aqui"> 
          </td>
           <td> <div id="msgemail"> </div>
           </td> 
           </tr>  </table>  </form> 
        </div>
        
       
        


         
        
    </body>
 </html>