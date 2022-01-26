<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <script>
$('select').on('change',function(){
   var src = $(this).find('option:selected').val();
   $('#abrir').attr('src',src);
});
            </script>
    
        <style type="text/css">
        body{
                color:white;
            }
            iframe{
                width:100%;
                height:510px;
                border:none;
                
            }
            h1{
                 background: #DAA520;
                color:White;
                padding:5px;
            }
            
        </style>
    </head>
    <body>
         <center> <h1> ATIVIDADES FÍSICAS</h1>
        </center>
    <table border="1">
        <tr><td><select name="exames" onChange="abrir.location = options[selectedIndex].value">
                    <option >ESCOLHA UMA ATIVIDADE</option>
                    <option value="atividades/abdominal.gif">ABDOMINAL</option>
                    <option value="atividades/Alongamento.gif">ALONGAMENTO</option>
                    <option value="atividades/boxe.gif">BOXE</option>
                    <option value="atividades/corrida.gif">CLUBE DE CORRIDA</option>
                    <option value="atividades/hidro.gif">HIDROGINÁSTICA</option>
                    <option value="atividades/jiu.gif">JIU-JITSU</option>
                    <option value="atividades/local.gif">LOCAL</option>
                    <option value="atividades/nataca.gif">NATAÇÃO</option>
                    <option value="atividades/pilates.gif">PILATES</option>
                    <option value="atividades/spinning.gif">SPINNING</option>
                    <option value="atividades/yoga.gif">YOGA</option>
                    </select>
      
            </tr>
        </table>
     <iframe id="abrir" name="abrir" scrolling="auto" src=""></iframe>
    </body>
</html>
