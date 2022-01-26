<?php
require_once '../Conexao/FuncionarioDAO.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script type='text/javascript' src='http://files.rafaelwendel.com/jquery.js'></script>
        <script type='text/javascript' src='cep.js'></script>
        <script type="text/javascript" src="../lib/jquery.js"></script> 
        <script type="text/javascript" src="../lib/jquery.validate.min.js"></script>
        <script type="text/javascript" src="../lib/jquery.maskedinput.js"></script>
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
     .nosub{
                text-decoration: none;
            }
            
            body{
                color:red;
            }
   .btnLogin
{
    -moz-border-radius:2px;
    -webkit-border-radius:2px;
    border-radius:15px;
    background:red;
    background:-moz-linear-gradient(top, #badff3, #7acbed);
    background:-webkit-gradient(linear, left top, left bottom, from(red), to(red));
	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorStr='#badff3', EndColorStr='#7acbed')";
    border:1px solid #7db0cc !important;
    cursor: pointer;
    padding:11px 16px;
    font:bold 11px/14px Verdana, Tahomma, Geneva;
    text-shadow:rgba(0,0,0,0.2) 0 1px 0px; 
    color:#fff;
    -moz-box-shadow:inset rgba(255,255,255,0.6) 0 1px 1px, rgba(0,0,0,0.1) 0 1px 1px;
    -webkit-box-shadow:inset rgba(255,255,255,0.6) 0 1px 1px, rgba(0,0,0,0.1) 0 1px 1px;
    box-shadow:inset rgba(255,255,255,0.6) 0 1px 1px, rgba(0,0,0,0.1) 0 1px 1px;
    margin-left:12px;
    float:right;
	padding:7px 21px;
}

.btnLogin:hover,
.btnLogin:focus,
.btnLogin:active{
    background:red;
    background:-moz-linear-gradient(top, #7acbed, #badff3);
    background:-webkit-gradient(linear, left top, left bottom, from(#7acbed), to(#badff3));
	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorStr='#7acbed', EndColorStr='#badff3')";
}
.btnLogin:active
{
    text-shadow:rgba(0,0,0,0.3) 0 -1px 0px; 
}


</style>
        
    </head>
    <?php
        
        
        $idfuncionario = $_GET["idfuncionario"];
        $FuncionarioDAO = new FuncionarioDAO();
        $funcionario = $FuncionarioDAO->getFuncionarioById($idfuncionario);
        ?>
    <body>
        <form id="formulario" METHOD="POST" ACTION="../Controlador/alterarFuncionarioController.php">
            
            <div class="box login">
                <fieldset class="boxBody">
                    <input type="hidden" name="idfuncionario" value="<?php echo $funcionario["idfuncionario"]?>"/>
            <table>
                <tr><td><label>Nome:</label></td></tr>  
                <tr><td> <input type="text" name="nome" id="nome"  value="<?php echo $funcionario["nome"]?>"></td></tr>
                <tr><td><label>Sobrenome:</label></td></tr>
                <tr><td><input type="text" name="sobrenome" id="sobrenome" value="<?php echo $funcionario["sobrenome"]?>"></td></tr>      
                <tr><td>Sexo:</td></tr>
                <tr><td><?php
                            if ($funcionario['sexo'] == 'masculino'){
                                echo '<input type="radio" name="sexo" value="masculino" checked>Masculino';
                                echo '<input type="radio" name="sexo" value="feminino" >Feminino';
                            }else{
                                echo '<input type="radio" name="sexo" value="masculino">Masculino';
                                echo '<input type="radio" name="sexo" value="feminino" checked>Feminino';
                            }
                        ?>
                </td>
                </tr>           
                <tr><td>Data de Nascimento:</td><tr><td><select name="DNdia"  value="<?php echo $funcionario["DNdia"]?>">
                <option>Dia</option>
                <?php
                for($i =1; $i < 32; $i++){
                echo"<Option>$i</option>";
                }
                ?>             
                </select>
                <select name="DNmes"  value="<?php echo $funcionario["DNmes"]?>">
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
                <select name="DNano"  value="<?php echo $funcionario["DNano"]?>">
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
                <tr><td><input type="text" name="cpf" id="cpf" value="<?php echo $funcionario["cpf"]?>"></td></tr>
                <tr><td><label>Cep:</label></td></tr>
                <tr><td><input type="text" name="cep" id="cep" value="<?php echo $funcionario["cep"]?>"></td> </tr>
                <tr><td><label>Rua:</label></td></tr>
                <tr><td><input type="text" name="rua" id="rua"  value="<?php echo $funcionario["rua"]?>"></td>  </tr>
                <tr><td><label>Número:</label></td></tr>
                <tr><td><input type="text" name="numero" id="numero"  value="<?php echo $funcionario["numero"]?>"></td></tr>
                <tr><td><label>Bairro:</label></td></tr>
                <tr><td><input type="text" name="bairro" id="bairro"  value="<?php echo $funcionario["bairro"]?>"></td>  </tr>
                <tr><td><label>Cidade:</label></td></tr></tr>
                <tr><td><input type="text" name="cidade" id="cidade"  value="<?php echo $funcionario["cidade"]?>"></td></tr></tr>
                <tr><td><label>Estado:</label></td></tr></tr>
                <td><input type="text" name="estado" id="estado"  value="<?php echo $funcionario["estado"]?>"></td></tr>  </tr>      
                <tr><td><label>Email:</label></td></tr>
                 <tr><td> <input type="text" name="email"  value="<?php echo $funcionario["email"]?>"></td></tr>
               
            </table>
                
        <table>
            <tr><td><label>Login:</label></td></tr>
            <tr><td> <input type="text" name="login" id="login"  value="<?php echo $funcionario["login"]?>"></td></tr>
            <tr><td><label>Senha:</label></td></tr>
            <tr><td> <input type="password" name="senha" id="senha" value="<?php echo $funcionario["senha"]?>"></td></tr>
            <tr><td>Cargo:</td><tr><td><select name="cargo" id="cargo">
            <option>Seu Cargo</option> 
            <option>Administrador(a)</option> 
            <option>Professor(a)</option> 
            <option>Secretario(a)</option> 
            <option>Gerente(a)</option> 
            </select>
               
                </tr>
                </fieldset>
                      <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" class="btnLogin" value="Alterar"/></td>
                  <td>&nbsp;</td>
                    <td><input type="reset" class="btnLogin" value="Voltar"/></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <?php
                            if (!empty($_GET["c"])){
                                echo "<span class='erro'>",$_GET["c"],"</span>";
                            }
                        ?>
            </table>
        <br>
      
         
        </form>
        </div>
    </body>
</html>
