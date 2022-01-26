<!DOCTYPE html>
<?php
    require_once '../Conexao/FuncionarioDAO.php';
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
            
        $funcionarioDAO = new FuncionarioDAO();
        if(!empty($_POST["pnome"])){
            $funcionarios= $funcionarioDAO->getFuncionarioByNome($_POST["pnome"]);
            
        }else{
            $funcionarios= $funcionarioDAO->getAllFuncionario();
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
                echo "<th>Cargo</th>";
                echo "<th>Excluir</th>";
                echo "<th>Alterar</th>";
           echo "</tr>";
            
           $cont = 0;
           foreach ($funcionarios as $funcionario){
            $cont++;
                echo "<tr>";
                echo "<td>".$funcionario["nome"]."</td>";
                echo "<td>".$funcionario["sobrenome"]."</td>";
                echo "<td>".$funcionario["sexo"]."</td>";
                echo "<td>".$funcionario["DNdia"]."</td>";
                echo "<td>".$funcionario["DNmes"]."</td>";
                echo "<td>".$funcionario["DNano"]."</td>";
                echo "<td>".$funcionario["cpf"]."</td>";
                echo "<td>".$funcionario["cep"]."</td>";
                echo "<td>".$funcionario["rua"]."</td>";
                echo "<td>".$funcionario["numero"]."</td>";
                echo "<td>".$funcionario["bairro"]."</td>";
                echo "<td>".$funcionario["cidade"]."</td>";
                echo "<td>".$funcionario["estado"]."</td>";
                echo "<td>".$funcionario["email"]."</td>";
                echo "<td>".$funcionario["login"]."</td>";
                echo "<td>".$funcionario["senha"]."</td>";
                echo "<td>".$funcionario["cargo"]."</td>";
                echo "<td align='center'><a href='../Controlador/excluirFuncionarioController.php?idfuncionario={$funcionario["idfuncionario"]}'><img src='../Imagens/excluir.jpeg' onClick='return confirmar()'></a></td>";
                echo "<td align='center'> <a href='FormAlterarFuncionario.php?idfuncionario={$funcionario["idfuncionario"]}'><img src='../Imagens/atualizar.png' width='30px'></a></td>"; 
                echo "</tr>";
               
               
                
            
               
               
           }
         echo "</table>";
        
        
        
        
        ?>
       &nbsp;
       <a href="FormFuncionario.php"><input type="submit" value="Voltar"/>
    </body>
</html>
