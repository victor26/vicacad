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
                        required:"O campo Nome ?? Obrigatorio",
                        minlength:"Digite ao menos 2 caracteres"
                        },
                         sobrenome: {
                        required:"O campo sobrenome ?? Obrigatorio",
                        minlength:"Digite ao menos 2 caracteres"
                        },
                         cpf: {
                        required:"O campo CPF ?? Obrigatorio",
                        minlength:"Digite ao menos 11 caracteres"
                        },
                         cep: {
                        required:"O campo CEP ?? Obrigatorio",
                        minlength:"Digite ao menos 8 caracteres"
                        },
                         rua: {
                        required:"O campo Rua ?? Obrigatorio",
                        minlength:"Digite ao menos 2 caracteres"
                        },
                         numero: {
                        required:"O campo Numero ?? Obrigatorio",
                        minlength:"Digite ao menos 2 caracteres"
                        },
                          bairro: {
                        required:"O campo Bairro ?? Obrigatorio",
                        minlength:"Digite ao menos 2 caracteres"
                        },
                         cidade: {
                        required:"O campo Cidade ?? Obrigatorio",
                        minlength:"Digite ao menos 2 caracteres"
                        },
                        estado: {
                        required:"O campo Estado ?? Obrigatorio",
                        minlength:"Digite ao menos 2 caracteres"
                        },
                        email: {
                        required:"O campo Email ?? Obrigatorio",
                        minlength:"Digite ao menos 2 caracteres"
                        },
                        login: {
                        required:"O campo Login ?? Obrigatorio",
                        minlength:"Digite ao menos 2 caracteres"
                        },
                        senha: {
                        required:"O campo Senha ?? Obrigatorio",
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
    <body>
        <form id="formulario" METHOD="POST" ACTION="../Controlador/CadastrarCliente.php">
            
            <div class="box login">
                <fieldset class="boxBody">
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
                <option>M??s</option>
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
                <tr><td><label>N??mero:</label></td></tr>
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
            <tr><td><label>Login:</label></td></tr>
            <tr><td> <input type="text" name="login" id="login"></td></tr>
            <tr><td><label>Senha:</label></td></tr>
            <tr><td> <input type="password" name="senha" id="senha"></td></tr>
            <tr><td>Objetivo:</td><tr><td><select name="objetivo" id="objetivo">
            <option>Seu objetivo</option> 
            <option>Ganhar Massa Muscular</option> 
            <option>Emagrecimento & Defini????o</option> 
            <option>Mais Energia & resistencia </option> 
            </select>
                </tr>
                <tr><td><input type="hidden" name="perfil_idperfil" value="2"></td></tr>
                </fieldset>
                      <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" class="btnLogin" value="Cadastrar"/></td>
                  <td>&nbsp;</td>
                    <td><input type="reset" class="btnLogin" value="Limpar"/></td>
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
