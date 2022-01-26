<!DOCTYPE html>
<?php
    require_once '../Conexao/ClienteDAO.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../CSS/Estilo_listall.css">
    <script languagen="javascript">
        function confirmar(){
            if(confirm("Deseja Excluir o Usuário")){
               return true; 
            }else{
                return false;
            }
        }


    
    
 
    </script>
    </head>
    <body>
        <form action="" method="POST">
            <label>Pesquisar por Nome:</label><input type="text" name="pnome"/>
            <input type="submit" value="Pesquisar" class="button"/>
        </form>
        <br>
        <?php
            //$clienteDAO = new ClienteDAO();
            //$clientes = $clienteDAO->getAllCliente();
            
        $clienteDAO = new ClienteDAO();
        if(!empty($_POST["pnome"])){
            $clientes= $clienteDAO->getClienteByNome($_POST["pnome"]);
            
        }else{
            $clientes= $clienteDAO->getAllCliente();
        }
        
        
        
        
            echo "<table border='1'>";
            echo "<tr>";
                echo "<th>Nome</th>";
                echo "<th>Sobrenome</th>";
                echo "<th>sexo</th>";
                echo "<th>DNdia</th>";
                echo "<th>DNmes</th>";
                echo "<th>DNano</th>";
                echo "<th>Cpf</th>";
                echo "<th>Cep</th>";
                echo "<th>Rua</th>";
                
                echo "<th>Numero</th>";
                echo "<th>Bairro</th>";
                echo "<th>Cidade</th>";
                echo "<th>Estado</th>";
                echo "<th>Email</th>";
                echo "<th>Login</th>";
                echo "<th>Senha</th>";
                echo "<th>Objetivo</th>";
                echo "<th>Cargo</th>";
                echo "<th>Excluir</th>";
                echo "<th>Alterar</th>";
           echo "</tr>";
            
           $cont = 0;
           foreach ($clientes as $cliente){
            $cont++;
                echo "<tr>";
                echo "<td>".$cliente["nome"]."</td>";
                echo "<td>".$cliente["sobrenome"]."</td>";
                echo "<td>".$cliente["sexo"]."</td>";
                echo "<td>".$cliente["DNdia"]."</td>";
                echo "<td>".$cliente["DNmes"]."</td>";
                echo "<td>".$cliente["DNano"]."</td>";
                echo "<td>".$cliente["cpf"]."</td>";
                echo "<td>".$cliente["cep"]."</td>";
                echo "<td>".$cliente["rua"]."</td>";
                echo "<td>".$cliente["numero"]."</td>";
                echo "<td>".$cliente["bairro"]."</td>";
                echo "<td>".$cliente["cidade"]."</td>";
                echo "<td>".$cliente["estado"]."</td>";
                echo "<td>".$cliente["email"]."</td>";
                echo "<td>".$cliente["login"]."</td>";
                echo "<td>".$cliente["senha"]."</td>";
                echo "<td>".$cliente["objetivo"]."</td>";
                echo "<td>".$cliente["Cargo"]."</td>";
                echo "<td align='center'><a href='../Controlador/excluirClienteController.php?idcliente={$cliente["idcliente"]}'><img src='../Imagens/excluir.jpeg'  onClick='return confirmar()'></a></td>";
                echo "<td align='center'> <a href='FormAlterarCliente.php?idcliente={$cliente["idcliente"]}'><img src='../Imagens/atualizar.png' width='30px'></a></td>"; 
                echo "</tr>";
               
               
                
            
               
               
           }
         echo "</table>";
        
        
        
        
        ?>
       &nbsp;
       <a href="FormCliente.php"><input type="submit" value="Voltar"/>
    </body>
</html>
