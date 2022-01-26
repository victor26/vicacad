<!DOCTYPE html>

<?php
    require_once '../Conexao/ClienteDAO.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style type="text/css">
            body{
                color:white;
            }
            h2{
                background: #DAA520;
                color:White;
                padding:5px;
              }
              h3{
                background: #404040;
                color:White;
                padding:5px;
              }
        </style>
    </head>
    
    <body>
         <form id="formulario" METHOD="POST" ACTION="../Controlador/CadastrarTreino.php">
       <center> <h1> FICHA DE TREINO</h1>
        <h2>Exercicios</h2>
        </center>
    <h3>Costa</h3>
      <table>
          <tr><td>Nome do Exercicio</td><td>Series</td><td>Repetições</td></tr>
          <tr><td> <input type="text" name="nomexe1" id="nomexe"></td>
          <td> <input type="text" maxlength="2" size="2" name="series1" id="series"></td>
          <td> <input type="text" maxlength="2" size="2" name="rep1" id="rep"></td></tr>
          <tr><td>Nome do Exercicio</td><td>Series</td><td>Repetições</td></tr>
          <tr><td> <input type="text" name="nomexe2" id="nomexe"></td>
          <td> <input type="text" maxlength="2" size="2" name="series2" id="series"></td>
          <td> <input type="text" maxlength="2" size="2" name="rep2" id="rep"></td></tr>
          <tr><td>Nome do Exercicio</td><td>Series</td><td>Repetições</td></tr>
          <tr><td> <input type="text" name="nomexe3" id="nomexe"></td>
          <td> <input type="text" maxlength="2" size="2" name="series3" id="series"></td>
          <td> <input type="text" maxlength="2" size="2" name="rep3" id="rep"></td></tr>
           <tr><td>Nome do Exercicio</td><td>Series</td><td>Repetições</td></tr>
          <tr><td> <input type="text" name="nomexe4" id="nomexe"></td>
          <td> <input type="text" maxlength="2" size="2" name="series4" id="series"></td>
          <td> <input type="text" maxlength="2" size="2" name="rep4" id="rep"></td></tr>
           <tr><td>Nome do Exercicio</td><td>Series</td><td>Repetições</td></tr>
          <tr><td> <input type="text" name="nomexe5" id="nomexe"></td>
          <td> <input type="text" maxlength="2" size="2" name="series5" id="series"></td>
          <td> <input type="text" maxlength="2" size="2" name="rep5" id="rep"></td></tr>
           <tr><td>Nome do Exercicio</td><td>Series</td><td>Repetições</td></tr>
          <tr><td> <input type="text" name="nomexe6" id="nomexe"></td>
          <td> <input type="text" maxlength="2" size="2" name="series6" id="series"></td>
          <td> <input type="text" maxlength="2" size="2" name="rep6" id="rep"></td></tr>
       <table>
         <h3>Perna</h3>
      <table>
          <tr><td>Nome do Exercicio</td><td>Series</td><td>Repetições</td></tr>
          <tr><td> <input type="text" name="nomexe7" id="nomexe"></td>
          <td> <input type="text" maxlength="2" size="2" name="series7" id="series"></td>
          <td> <input type="text" maxlength="2" size="2" name="rep7" id="rep"></td></tr>
          <tr><td>Nome do Exercicio</td><td>Series</td><td>Repetições</td></tr>
          <tr><td> <input type="text" name="nomexe8" id="nomexe"></td>
          <td> <input type="text" maxlength="2" size="2" name="series8" id="series"></td>
          <td> <input type="text" maxlength="2" size="2" name="rep8" id="rep"></td></tr>
          <tr><td>Nome do Exercicio</td><td>Series</td><td>Repetições</td></tr>
          <tr><td> <input type="text" name="nomexe9" id="nomexe"></td>
          <td> <input type="text" maxlength="2" size="2" name="series9" id="series"></td>
          <td> <input type="text" maxlength="2" size="2" name="rep9" id="rep"></td></tr>
           <tr><td>Nome do Exercicio</td><td>Series</td><td>Repetições</td></tr>
          <tr><td> <input type="text" name="nomexe10" id="nomexe"></td>
          <td> <input type="text" maxlength="2" size="2" name="series10" id="series"></td>
          <td> <input type="text" maxlength="2" size="2" name="rep10" id="rep"></td></tr>
          <tr><td>Nome do Exercicio</td><td>Series</td><td>Repetições</td></tr>
          <tr><td> <input type="text" name="nomexe11" id="nomexe"></td>
          <td> <input type="text" maxlength="2" size="2" name="series11" id="series"></td>
          <td> <input type="text" maxlength="2" size="2" name="rep11" id="rep"></td></tr>
          <tr><td>Nome do Exercicio</td><td>Series</td><td>Repetições</td></tr>
          <tr><td> <input type="text" name="nomexe12" id="nomexe"></td>
          <td> <input type="text" maxlength="2" size="2" name="series12" id="series"></td>
          <td> <input type="text" maxlength="2" size="2" name="rep12" id="rep"></td></tr>
       <table>
             <h3>Peitoral</h3>
      <table>
          <tr><td>Nome do Exercicio</td><td>Series</td><td>Repetições</td></tr>
          <tr><td> <input type="text" name="nomexe13" id="nomexe"></td>
          <td> <input type="text" maxlength="2" size="2" name="series13" id="series"></td>
          <td> <input type="text" maxlength="2" size="2" name="rep13" id="rep"></td></tr>
          <tr><td>Nome do Exercicio</td><td>Series</td><td>Repetições</td></tr>
          <tr><td> <input type="text" name="nomexe14" id="nomexe"></td>
          <td> <input type="text" maxlength="2" size="2" name="series14" id="series"></td>
          <td> <input type="text" maxlength="2" size="2" name="rep14" id="rep"></td></tr>
          <tr><td>Nome do Exercicio</td><td>Series</td><td>Repetições</td></tr>
          <tr><td> <input type="text" name="nomexe15" id="nomexe"></td>
          <td> <input type="text" maxlength="2" size="2" name="series15" id="series"></td>
          <td> <input type="text" maxlength="2" size="2" name="rep15" id="rep"></td></tr>
           <tr><td>Nome do Exercicio</td><td>Series</td><td>Repetições</td></tr>
          <tr><td> <input type="text" name="nomexe16" id="nomexe"></td>
          <td> <input type="text" maxlength="2" size="2" name="series16" id="series"></td>
          <td> <input type="text" maxlength="2" size="2" name="rep16" id="rep"></td></tr>
          <tr><td>Nome do Exercicio</td><td>Series</td><td>Repetições</td></tr>
          <tr><td> <input type="text" name="nomexe17" id="nomexe"></td>
          <td> <input type="text" maxlength="2" size="2" name="series17" id="series"></td>
          <td> <input type="text" maxlength="2" size="2" name="rep17" id="rep"></td></tr>
      </table>
          <h3>Braço</h3>
      <table>
          <tr><td>Nome do Exercicio</td><td>Series</td><td>Repetições</td></tr>
          <tr><td> <input type="text" name="nomexe18" id="nomexe"></td>
          <td> <input type="text" maxlength="2" size="2" name="series18" id="series"></td>
          <td> <input type="text" maxlength="2" size="2" name="rep18" id="rep"></td></tr>
          <tr><td>Nome do Exercicio</td><td>Series</td><td>Repetições</td></tr>
          <tr><td> <input type="text" name="nomexe19" id="nomexe"></td>
          <td> <input type="text" maxlength="2" size="2" name="series19" id="series"></td>
          <td> <input type="text" maxlength="2" size="2" name="rep19" id="rep"></td></tr>
          <tr><td>Nome do Exercicio</td><td>Series</td><td>Repetições</td></tr>
          <tr><td> <input type="text" name="nomexe20" id="nomexe"></td>
          <td> <input type="text" maxlength="2" size="2" name="series20" id="series"></td>
          <td> <input type="text" maxlength="2" size="2" name="rep20" id="rep"></td></tr>
           <tr><td>Nome do Exercicio</td><td>Series</td><td>Repetições</td></tr>
          <tr><td> <input type="text" name="nomexe21" id="nomexe"></td>
          <td> <input type="text" maxlength="2" size="2" name="series21" id="series"></td>
          <td> <input type="text" maxlength="2" size="2" name="rep21" id="rep"></td></tr>
          <tr><td>Nome do Exercicio</td><td>Series</td><td>Repetições</td></tr>
          <tr><td> <input type="text" name="nomexe22" id="nomexe"></td>
          <td> <input type="text" maxlength="2" size="2" name="series22" id="series"></td>
          <td> <input type="text" maxlength="2" size="2" name="rep22" id="rep"></td></tr>
          <tr><td>Nome do Exercicio</td><td>Series</td><td>Repetições</td></tr>
          <tr><td> <input type="text" name="nomexe23" id="nomexe"></td>
          <td> <input type="text" maxlength="2" size="2" name="series23" id="series"></td>
          <td> <input type="text" maxlength="2" size="2" name="rep23" id="rep"></td></tr>
       </table>
            <h3>Abdome</h3>
      <table>
          <tr><td>Nome do Exercicio</td><td>Series</td><td>Repetições</td></tr>
          <tr><td> <input type="text" name="nomexe24" id="nomexe"></td>
          <td> <input type="text" maxlength="2" size="2" name="series24" id="series"></td>
          <td> <input type="text" maxlength="2" size="2" name="rep24" id="rep"></td></tr>
          <tr><td>Nome do Exercicio</td><td>Series</td><td>Repetições</td></tr>
          <tr><td> <input type="text" name="nomexe25" id="nomexe"></td>
          <td> <input type="text" maxlength="2" size="2" name="series25" id="series"></td>
          <td> <input type="text" maxlength="2" size="2" name="rep25" id="rep"></td></tr>
          <tr><td>Nome do Exercicio</td><td>Series</td><td>Repetições</td></tr>
          <tr><td> <input type="text" name="nomexe26" id="nomexe"></td>
          <td> <input type="text" maxlength="2" size="2" name="series26" id="series"></td>
          <td> <input type="text" maxlength="2" size="2" name="rep26" id="rep"></td></tr>
           <tr><td>Nome do Exercicio</td><td>Series</td><td>Repetições</td></tr>
          <tr><td> <input type="text" name="nomexe27" id="nomexe"></td>
          <td> <input type="text" maxlength="2" size="2" name="series27" id="series"></td>
          <td> <input type="text" maxlength="2" size="2" name="rep27" id="rep"></td></tr>
          <tr><td>Nome do Exercicio</td><td>Series</td><td>Repetições</td></tr>
          <tr><td> <input type="text" name="nomexe28" id="nomexe"></td>
          <td> <input type="text" maxlength="2" size="2" name="series28" id="series"></td>
          <td> <input type="text" maxlength="2" size="2" name="rep28" id="rep"></td></tr>
       </table>
              <h3>Ombro</h3>
      <table>
          <tr><td>Nome do Exercicio</td><td>Series</td><td>Repetições</td></tr>
          <tr><td> <input type="text" name="nomexe29" id="nomexe"></td>
          <td> <input type="text" maxlength="2" size="2" name="series29" id="series"></td>
          <td> <input type="text" maxlength="2" size="2" name="rep29" id="rep"></td></tr>
          <tr><td>Nome do Exercicio</td><td>Series</td><td>Repetições</td></tr>
          <tr><td> <input type="text" name="nomexe30" id="nomexe"></td>
          <td> <input type="text" maxlength="2" size="2" name="series30" id="series"></td>
          <td> <input type="text" maxlength="2" size="2" name="rep30" id="rep"></td></tr>
          <tr><td>Nome do Exercicio</td><td>Series</td><td>Repetições</td></tr>
          <tr><td> <input type="text" name="nomexe31" id="nomexe"></td>
          <td> <input type="text" maxlength="2" size="2" name="series31" id="series"></td>
          <td> <input type="text" maxlength="2" size="2" name="rep31" id="rep"></td></tr>
           <tr><td>Nome do Exercicio</td><td>Series</td><td>Repetições</td></tr>
          <tr><td> <input type="text" name="nomexe32" id="nomexe"></td>
          <td> <input type="text" maxlength="2" size="2" name="series32" id="series"></td>
          <td> <input type="text" maxlength="2" size="2" name="rep32" id="rep"></td></tr>
          <tr><td>Nome do Exercicio</td><td>Series</td><td>Repetições</td></tr>
          <tr><td> <input type="text" name="nomexe33" id="nomexe"></td>
          <td> <input type="text" maxlength="2" size="2" name="series33" id="series"></td>
          <td> <input type="text" maxlength="2" size="2" name="rep33" id="rep"></td></tr>
          <tr><td>Nome do Exercicio</td><td>Series</td><td>Repetições</td></tr>
          <tr><td> <input type="text" name="nomexe34" id="nomexe"></td>
          <td> <input type="text" maxlength="2" size="2" name="series34" id="series"></td>
          <td> <input type="text" maxlength="2" size="2" name="rep34" id="rep"></td></tr>
          
       </table>
          
        
              Dificuldade:<select name="dificuldade">
                  <option>Dificuldade do Treino</option>
                   <option>Experte</option>
                   <option>Dificil</option>
                   <option>Médio</option>
                   <option>Facil</option>
                  </select>
              <br>
              <br>
              <input type="submit" class="btnLogin" value="Cadastrar"/></td>
       
    
           </form>

    </body>
</html>
