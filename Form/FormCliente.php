<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script type='text/javascript' src='http://files.rafaelwendel.com/jquery.js'></script>
        <script type='text/javascript' src='cep.js'></script>
        <script type="text/javascript" src="lib/jquery.js"></script> 
        <script type="text/javascript" src="lib/jquery.validate.min.js"></script>
        <script type="text/javascript" src="lib/jquery.maskedinput.js"></script>
         <script type="text/javascript">
            $(document).ready(function(){
                $('#formulario').validate({
                    rules:{
                        nome:{
                            required: true,
                            minlength:2
                        },
                         sobrenome:{
                            required: true,
                            minlength:2
                        },
                         cpf:{
                            required: true,
                            minlength:2,
                            cpf:true
                        },
                         cep:{
                            required: true,
                            minlength:2
                        },
                         rua:{
                            required: true,
                            minlength:2
                            
                        },
                         numero:{
                            required: true,
                            minlength:2
                        }, 
                          bairro:{
                            required: true,
                            minlength:2
                        },
                         cidade:{
                            required: true,
                            minlength:2
                        },
                        estado:{
                            required: true,
                            minlength:2
                        },
                        email:{
                            required: true,
                            minlength:2,
                            Email:true
                        },
                        login:{
                            required: true,
                            minlength:2
                        },
                        senha:{
                            required: true,
                            minlength:2
                        }
                    },
                    messages:{
                        nome: {
                        required:"O campo Nome é Obrigatorio",
                        minlength:"Digite ao menos 2 caracteres"
                        },
                         sobrenome: {
                        required:"O campo sobrenome é Obrigatorio",
                        minlength:"Digite ao menos 2 caracteres"
                        },
                         cpf: {
                        required:"O campo CPF é Obrigatorio",
                        minlength:"Digite ao menos 11 caracteres"
                        },
                         cep: {
                        required:"O campo CEP é Obrigatorio",
                        minlength:"Digite ao menos 8 caracteres"
                        },
                         rua: {
                        required:"O campo Rua é Obrigatorio",
                        minlength:"Digite ao menos 2 caracteres"
                        },
                         numero: {
                        required:"O campo Numero é Obrigatorio",
                        minlength:"Digite ao menos 2 caracteres"
                        },
                          bairro: {
                        required:"O campo Bairro é Obrigatorio",
                        minlength:"Digite ao menos 2 caracteres"
                        },
                         cidade: {
                        required:"O campo Cidade é Obrigatorio",
                        minlength:"Digite ao menos 2 caracteres"
                        },
                        estado: {
                        required:"O campo Estado é Obrigatorio",
                        minlength:"Digite ao menos 2 caracteres"
                        },
                        email: {
                        required:"O campo Email é Obrigatorio",
                        minlength:"Digite ao menos 2 caracteres"
                        },
                        login: {
                        required:"O campo Login é Obrigatorio",
                        minlength:"Digite ao menos 2 caracteres"
                        },
                        senha: {
                        required:"O campo Senha é Obrigatorio",
                        minlength:"Digite ao menos 2 caracteres"
                        }
                    }
                });
            });
        </script>
        
        <script>
           jQuery(function($){
                $("#cpf").mask("999.999.999-99");
                $("#cep").mask("99999-999");
                
            });   
        </script>
        
<style type="text/css">
    .error{
        color:red;
        font-style:italic;
      
        
    }
   
   
</style>
        
    </head>
    <body>
        <form id="formulario" METHOD="POST" ACTION="../CRUD2/Controlador/CadastrarCliente.php">
            <table>
                <tr><td><label>Nome:</label></td></tr>  
                <tr><td> <input type="text" name="nome" id="nome"></td></tr>
                <tr><td><label>Sobrenome:</label></td></tr>
                <tr><td><input type="text" name="sobrenome" id="sobrenome"></td></tr>      
                <tr><td>Sexo:</td></tr>
                <tr><td><input type="radio" name="sexo" value="masculino">Masculino
                <input type="radio" name="sexo"value="feminino">Feminino
                </td>
                </tr>           
                <tr><td>Data de Nascimento:</td><tr><td><select name="DNdia">
                <option>Dia</option>
                <?php
                for($i =1; $i < 32; $i++){
                echo"<Option>$i</option>";
                }
                ?>             
                </select>
                <select name="DNmes">
                <option>Mês</option>
                <option>Jan</option>
                <option>Fev</option>
                <option>Mar</option>
                <option>Abr</option>
                <option>Mai</option>
                <option>Jun</option>
                <option>Jul</option>
                <option>Ago</option>
                <option>Set</option>
                <option>Out</option>
                <option>Nov</option>
                <option>Dez</option>
                </select>
                <select name="DNano">
                <option>Ano</option>
                <?php
                for($a =2015; $a > 1900; $a--){
                echo"<Option>$a</option>";
                }
                ?>
                </select>
                </td>
                </tr>
                </tr>
                <tr><td><label>CPF:</label></td></tr>
                <tr><td><input type="text" name="cpf" id="cpf"></td></tr>
                <tr><td><label>Cep:</label></td></tr>
                <tr><td><input type="text" name="cep" id="cep"></td> </tr>
                <tr><td><label>Rua:</label></td></tr>
                <tr><td><input type="text" name="rua" id="rua"></td>  </tr>
                <tr><td><label>Número:</label></td></tr>
                <tr><td><input type="text" name="numero" id="numero"></td></tr>
                <tr><td><label>Bairro:</label></td></tr>
                <tr><td><input type="text" name="bairro" id="bairro"></td>  </tr>
                <tr><td><label>Cidade:</label></td></tr></tr>
                <tr><td><input type="text" name="cidade" id="cidade"></td></tr></tr>
                <tr><td><label>Estado:</label></td></tr></tr>
                <td><input type="text" name="estado" id="estado"</td></tr>  </tr>      
                <tr><td><label>Email:</label></td></tr>
                 <tr><td> <input type="text" name="email"></td></tr>
               
            </table>
        <table>
            <tr><td><label></label>Login:</td></tr>
            <tr><td> <input type="text" name="login" id="login"></td></tr>
            <tr><td><label></label>Senha:</td></tr>
            <tr><td> <input type="password" name="senha" id="senha"></td></tr>
            <tr><td>Objetivo:</td><tr><td><select name="Objetivo">
            <option>Seu objetivo</option> 
            <option>Ganhar Massa Muscular</option> 
            <option>Emagrecimento & Definição</option> 
            <option>Mais Energia & resistencia </option> 
            </select>
            </table>
        <br>
         <input type="submit" value="Mostra Valores">
         <input type="reset" value="Limpar">
         
        </form>
    </body>
</html>
