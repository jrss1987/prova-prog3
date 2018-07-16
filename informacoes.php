<?php
#chama o arquivo de configuração com o banco
require 'bancodedados.php';
$query = $conn->prepare("SELECT nome FROM listacontatos");

?>
<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>

        <form class="formCadastroInfo" action="inserirInfo.php" method="post">
        </br>
          Telefone: <input type="text" name="Telefone" value="" </br></br>
          Email: <input type="email" name="Email" value=""</br></br>
          Endereço: <input type="text" name="Endereco" value=""</br></br>
          Data Aniveresario: <input type="date" name="Aniversario" value=""</br></br>
          <footer>
                <input type="submit" value="Enviar" class="button send"/>
                <input type="reset" value="Limpar" class="button"/>
          </footer>
          </br>

  </body>
</html>
