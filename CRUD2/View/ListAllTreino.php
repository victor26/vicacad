<!DOCTYPE html>
<?php
    require_once '../Conexao/TreinoDAO.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

    </script>
    </head>
    <body>
        <input type="text">
        <br>
        <?php
        $treinoDAO = new TreinoDAO();
        $treinos = $treinoDAO->getAllTreino();
     
            
            
        
            
       
        
        
        
            echo "<table border='1'>";
            echo "<tr>";
                echo "<th>Nomexe1</th>";
                echo "<th>series1</th>";
                echo "<th>rep1</th>";
           echo "</tr>";
             echo "<tr>";
                echo "<th>Nomexe2</th>";
                echo "<th>series2</th>";
                echo "<th>rep2</th>";
           echo "</tr>";
            
           $cont = 0;
           foreach ($treinos as $treino){
            $cont++;
                echo "<tr>";
                echo "<td>".$treino["nomexe1"]."</td>";
                echo "<td>".$treino["series1"]."</td>";
                echo "<td>".$treino["rep1"]."</td>";
                 echo "<td>".$treino["nomexe2"]."</td>";
                echo "<td>".$treino["series2"]."</td>";
                echo "<td>".$treino["rep2"]."</td>";
                 echo "<td>".$treino["nomexe3"]."</td>";
                echo "<td>".$treino["series3"]."</td>";
                echo "<td>".$treino["rep3"]."</td>";
                 echo "<td>".$treino["nomexe4"]."</td>";
                echo "<td>".$treino["series4"]."</td>";
                echo "<td>".$treino["rep4"]."</td>";
                 echo "<td>".$treino["nomexe5"]."</td>";
                echo "<td>".$treino["series5"]."</td>";
                echo "<td>".$treino["rep5"]."</td>";
                 echo "<td>".$treino["nomexe6"]."</td>";
                echo "<td>".$treino["series6"]."</td>";
                echo "<td>".$treino["rep6"]."</td>";
                 echo "<td>".$treino["nomexe7"]."</td>";
                echo "<td>".$treino["series7"]."</td>";
                echo "<td>".$treino["rep7"]."</td>";
                 echo "<td>".$treino["nomexe8"]."</td>";
                echo "<td>".$treino["series8"]."</td>";
                echo "<td>".$treino["rep8"]."</td>";
                 echo "<td>".$treino["nomexe9"]."</td>";
                echo "<td>".$treino["series9"]."</td>";
                echo "<td>".$treino["rep9"]."</td>";
                 echo "<td>".$treino["nomexe10"]."</td>";
                echo "<td>".$treino["series10"]."</td>";
                echo "<td>".$treino["rep10"]."</td>";
                 echo "<td>".$treino["nomexe11"]."</td>";
                echo "<td>".$treino["series11"]."</td>";
                echo "<td>".$treino["rep11"]."</td>";
                 echo "<td>".$treino["nomexe12"]."</td>";
                echo "<td>".$treino["series12"]."</td>";
                echo "<td>".$treino["rep12"]."</td>";
                 echo "<td>".$treino["nomexe13"]."</td>";
                echo "<td>".$treino["series13"]."</td>";
                echo "<td>".$treino["rep13"]."</td>";
                 echo "<td>".$treino["nomexe14"]."</td>";
                echo "<td>".$treino["series14"]."</td>";
                echo "<td>".$treino["rep14"]."</td>";
                 echo "<td>".$treino["nomexe15"]."</td>";
                echo "<td>".$treino["series15"]."</td>";
                echo "<td>".$treino["rep15"]."</td>";
                 echo "<td>".$treino["nomexe16"]."</td>";
                echo "<td>".$treino["series16"]."</td>";
                echo "<td>".$treino["rep16"]."</td>";
                 echo "<td>".$treino["nomexe17"]."</td>";
                echo "<td>".$treino["series17"]."</td>";
                echo "<td>".$treino["rep17"]."</td>";
                 echo "<td>".$treino["nomexe18"]."</td>";
                echo "<td>".$treino["series18"]."</td>";
                echo "<td>".$treino["rep18"]."</td>";
                 echo "<td>".$treino["nomexe19"]."</td>";
                echo "<td>".$treino["series19"]."</td>";
                echo "<td>".$treino["rep19"]."</td>";
                 echo "<td>".$treino["nomexe20"]."</td>";
                echo "<td>".$treino["series20"]."</td>";
                echo "<td>".$treino["rep20"]."</td>";
                 echo "<td>".$treino["nomexe21"]."</td>";
                echo "<td>".$treino["series21"]."</td>";
                echo "<td>".$treino["rep21"]."</td>";
                 echo "<td>".$treino["nomexe22"]."</td>";
                echo "<td>".$treino["series22"]."</td>";
                echo "<td>".$treino["rep22"]."</td>";
                 echo "<td>".$treino["nomexe23"]."</td>";
                echo "<td>".$treino["series23"]."</td>";
                echo "<td>".$treino["rep23"]."</td>";
                 echo "<td>".$treino["nomexe24"]."</td>";
                echo "<td>".$treino["series24"]."</td>";
                echo "<td>".$treino["rep24"]."</td>";
                 echo "<td>".$treino["nomexe25"]."</td>";
                echo "<td>".$treino["series25"]."</td>";
                echo "<td>".$treino["rep25"]."</td>";
                 echo "<td>".$treino["nomexe26"]."</td>";
                echo "<td>".$treino["series26"]."</td>";
                echo "<td>".$treino["rep26"]."</td>";
                 echo "<td>".$treino["nomexe27"]."</td>";
                echo "<td>".$treino["series27"]."</td>";
                echo "<td>".$treino["rep27"]."</td>";
                 echo "<td>".$treino["nomexe28"]."</td>";
                echo "<td>".$treino["series28"]."</td>";
                echo "<td>".$treino["rep28"]."</td>";
                 echo "<td>".$treino["nomexe29"]."</td>";
                echo "<td>".$treino["series29"]."</td>";
                echo "<td>".$treino["rep29"]."</td>";
                 echo "<td>".$treino["nomexe30"]."</td>";
                echo "<td>".$treino["series30"]."</td>";
                echo "<td>".$treino["rep30"]."</td>";
                 echo "<td>".$treino["nomexe31"]."</td>";
                echo "<td>".$treino["series31"]."</td>";
                echo "<td>".$treino["rep31"]."</td>";
                 echo "<td>".$treino["nomexe32"]."</td>";
                echo "<td>".$treino["series32"]."</td>";
                echo "<td>".$treino["rep32"]."</td>";
                 echo "<td>".$treino["nomexe33"]."</td>";
                echo "<td>".$treino["series33"]."</td>";
                echo "<td>".$treino["rep33"]."</td>";
                 echo "<td>".$treino["nomexe34"]."</td>";
                echo "<td>".$treino["series34"]."</td>";
                echo "<td>".$treino["rep34"]."</td>";
                
                
                
                echo "</tr>";
               
               
                
            
               
               
           }
         echo "</table>";
        
        
        
        
        ?>
       &nbsp;
       <a href="FormCliente.php"><input type="submit" value="Voltar"/>
    </body>
</html>
