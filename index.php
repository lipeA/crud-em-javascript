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
                       <td>Felipe</td>
                       <td>felipe@gmail.com</td>
                       <td>629999999</td>
                       <td>Trindade</td>
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