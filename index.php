<?php
require_once 'db_connection.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistema CRUD </title>
</head>
<body>
    <header>
    <h1>Sistema CRUD com JavaScript</h1>
    </header>
    <!--  O elemento <main> define o conteúdo principal dentro do <body> em seu documento ou aplicação -->
    <main>
        <table>
             <!-- A <thead>tag é usada para agrupar o conteúdo do cabeçalho em uma tabela HTML. -->
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Celular</th>
                        <th>Cidade</th>
                        <th>Ação</th>
                    </tr>
                </thead>
             <!-- A <tbody>tag é usada para agrupar o conteúdo do corpo em uma tabela HTML. -->
               <tbody>
                   <tr>
                       <?php
                        $sql = "select * from usuario;";
                        $res = mysqli_query($conn, $sql) or die ("erro ao tentar pesquisar");
                        while ($rows = mysqli_fetch_array($res,$conn)) {
                            $nome = $rows['nome_usuer'];
                            $email = $rows['email_user'];
                            $celular = $rows['celular_user'];
                            $cidade = $rows['cidade_user'];
                        }
                        echo'
                        <tr>
                            <td>'.$nome.'</td>
                            <th>E-mail</th>
                            <th>Celular</th>
                            <th>Cidade</th>
                            <th>Ação</th>
                        </tr>  ';//fim do echo.?>
                       <td>
                           <button type="button">Editar</button>
                           <button type="button">Excluir</button>
                       </td>
                   </tr>
               </tbody>
        </table>
        <!-- modal -->
    </main>
</body>
</html>