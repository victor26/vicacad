<?php
require_once 'Conexao.php';
class TreinoDAO {
     public function salvar(TreinoDTO $treinoDTO){
        try {
            $pdo = Conexao::getInstance();
            $sql = "INSERT INTO treino( nomexe1, series1, rep1 , nomexe2, series2, rep2 , nomexe3, series3, rep3 , nomexe4, series4, rep4 , nomexe5, series5, rep5 , nomexe6, series6, rep6 , nomexe7, series7, rep7 , nomexe8, series8, rep8 , nomexe9, series9, rep9 , nomexe10, series10, rep10 , nomexe11, series11, rep11 , nomexe12, series12, rep12 , nomexe13, series13, rep13 , nomexe14, series14, rep14 , nomexe15, series15, rep15 , nomexe16, series16, rep16 , nomexe17, series17, rep17 , nomexe18, series18, rep18 , nomexe19, series19, rep19 , nomexe20, series20, rep20 , nomexe21, series21, rep21 , nomexe22, series22, rep22, nomexe23, series23, rep23 , nomexe24, series24, rep24 , nomexe25, series25, rep25 , nomexe26, series26, rep26 , nomexe27, series27, rep27 , nomexe28, series28, rep28 , nomexe29, series29, rep29 , nomexe30, series30, rep30 , nomexe31, series31, rep31 , nomexe32, series32, rep32 , nomexe33, series33, rep33 , nomexe34, series34, rep34, dificuldade  )
                    VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt -> bindvalue(1,$treinoDTO->getNomexe1());
            $stmt -> bindvalue(2,$treinoDTO->getSeries1());
            $stmt -> bindvalue(3,$treinoDTO->getRep1());
            $stmt -> bindvalue(4,$treinoDTO->getNomexe2());
            $stmt -> bindvalue(5,$treinoDTO->getSeries2());
            $stmt -> bindvalue(6,$treinoDTO->getRep2());
            $stmt -> bindvalue(7,$treinoDTO->getNomexe3());
            $stmt -> bindvalue(8,$treinoDTO->getSeries3());
            $stmt -> bindvalue(9,$treinoDTO->getRep3());
            $stmt -> bindvalue(10,$treinoDTO->getNomexe4());
            $stmt -> bindvalue(11,$treinoDTO->getSeries4());
            $stmt -> bindvalue(12,$treinoDTO->getRep4());
            $stmt -> bindvalue(13,$treinoDTO->getNomexe5());
            $stmt -> bindvalue(14,$treinoDTO->getSeries5());
            $stmt -> bindvalue(15,$treinoDTO->getRep5());
            $stmt -> bindvalue(16,$treinoDTO->getNomexe6());
            $stmt -> bindvalue(17,$treinoDTO->getSeries6());
            $stmt -> bindvalue(18,$treinoDTO->getRep6());
            $stmt -> bindvalue(19,$treinoDTO->getNomexe7());
            $stmt -> bindvalue(20,$treinoDTO->getSeries7());
            $stmt -> bindvalue(21,$treinoDTO->getRep7());
            $stmt -> bindvalue(22,$treinoDTO->getNomexe8());
            $stmt -> bindvalue(23,$treinoDTO->getSeries8());
            $stmt -> bindvalue(24,$treinoDTO->getRep8());
            $stmt -> bindvalue(25,$treinoDTO->getNomexe9());
            $stmt -> bindvalue(26,$treinoDTO->getSeries9());
            $stmt -> bindvalue(27,$treinoDTO->getRep9());
            $stmt -> bindvalue(28,$treinoDTO->getNomexe10());
            $stmt -> bindvalue(29,$treinoDTO->getSeries10());
            $stmt -> bindvalue(30,$treinoDTO->getRep10());
            $stmt -> bindvalue(31,$treinoDTO->getNomexe11());
            $stmt -> bindvalue(32,$treinoDTO->getSeries11());
            $stmt -> bindvalue(33,$treinoDTO->getRep11());
            $stmt -> bindvalue(34,$treinoDTO->getNomexe12());
            $stmt -> bindvalue(35,$treinoDTO->getSeries12());
            $stmt -> bindvalue(36,$treinoDTO->getRep12());
            $stmt -> bindvalue(37,$treinoDTO->getNomexe13());
            $stmt -> bindvalue(38,$treinoDTO->getSeries13());
            $stmt -> bindvalue(39,$treinoDTO->getRep13());
            $stmt -> bindvalue(40,$treinoDTO->getNomexe14());
            $stmt -> bindvalue(41,$treinoDTO->getSeries14());
            $stmt -> bindvalue(42,$treinoDTO->getRep14());
            $stmt -> bindvalue(43,$treinoDTO->getNomexe15());
            $stmt -> bindvalue(44,$treinoDTO->getSeries15());
            $stmt -> bindvalue(45,$treinoDTO->getRep15());
            $stmt -> bindvalue(46,$treinoDTO->getNomexe16());
            $stmt -> bindvalue(47,$treinoDTO->getSeries16());
            $stmt -> bindvalue(48,$treinoDTO->getRep16());
            $stmt -> bindvalue(49,$treinoDTO->getNomexe17());
            $stmt -> bindvalue(50,$treinoDTO->getSeries17());
            $stmt -> bindvalue(51,$treinoDTO->getRep17());
            $stmt -> bindvalue(52,$treinoDTO->getNomexe18());
            $stmt -> bindvalue(53,$treinoDTO->getSeries18());
            $stmt -> bindvalue(54,$treinoDTO->getRep18());
            $stmt -> bindvalue(55,$treinoDTO->getNomexe19());
            $stmt -> bindvalue(56,$treinoDTO->getSeries19());
            $stmt -> bindvalue(57,$treinoDTO->getRep19());
            $stmt -> bindvalue(58,$treinoDTO->getNomexe20());
            $stmt -> bindvalue(59,$treinoDTO->getSeries20());
            $stmt -> bindvalue(60,$treinoDTO->getRep20());
            $stmt -> bindvalue(61,$treinoDTO->getNomexe21());
            $stmt -> bindvalue(62,$treinoDTO->getSeries21());
            $stmt -> bindvalue(63,$treinoDTO->getRep21());
            $stmt -> bindvalue(64,$treinoDTO->getNomexe22());
            $stmt -> bindvalue(65,$treinoDTO->getSeries22());
            $stmt -> bindvalue(66,$treinoDTO->getRep22());
            $stmt -> bindvalue(67,$treinoDTO->getNomexe23());
            $stmt -> bindvalue(68,$treinoDTO->getSeries23());
            $stmt -> bindvalue(69,$treinoDTO->getRep23());
            $stmt -> bindvalue(70,$treinoDTO->getNomexe24());
            $stmt -> bindvalue(71,$treinoDTO->getSeries24());
            $stmt -> bindvalue(72,$treinoDTO->getRep24());
            $stmt -> bindvalue(73,$treinoDTO->getNomexe25());
            $stmt -> bindvalue(74,$treinoDTO->getSeries25());
            $stmt -> bindvalue(75,$treinoDTO->getRep25());
            $stmt -> bindvalue(76,$treinoDTO->getNomexe26());
            $stmt -> bindvalue(77,$treinoDTO->getSeries26());
            $stmt -> bindvalue(78,$treinoDTO->getRep26());
            $stmt -> bindvalue(79,$treinoDTO->getNomexe27());
            $stmt -> bindvalue(80,$treinoDTO->getSeries27());
            $stmt -> bindvalue(81,$treinoDTO->getRep27());
            $stmt -> bindvalue(82,$treinoDTO->getNomexe28());
            $stmt -> bindvalue(83,$treinoDTO->getSeries28());
            $stmt -> bindvalue(84,$treinoDTO->getRep28());
            $stmt -> bindvalue(85,$treinoDTO->getNomexe29());
            $stmt -> bindvalue(86,$treinoDTO->getSeries29());
            $stmt -> bindvalue(87,$treinoDTO->getRep29());
            $stmt -> bindvalue(88,$treinoDTO->getNomexe30());
            $stmt -> bindvalue(89,$treinoDTO->getSeries30());
            $stmt -> bindvalue(90,$treinoDTO->getRep30());
            $stmt -> bindvalue(91,$treinoDTO->getNomexe31());
            $stmt -> bindvalue(92,$treinoDTO->getSeries31());
            $stmt -> bindvalue(93,$treinoDTO->getRep31());
            $stmt -> bindvalue(94,$treinoDTO->getNomexe32());
            $stmt -> bindvalue(95,$treinoDTO->getSeries32());
            $stmt -> bindvalue(96,$treinoDTO->getRep32());
            $stmt -> bindvalue(97,$treinoDTO->getNomexe33());
            $stmt -> bindvalue(98,$treinoDTO->getSeries33());
            $stmt -> bindvalue(99,$treinoDTO->getRep33());
            $stmt -> bindvalue(100,$treinoDTO->getNomexe34());
            $stmt -> bindvalue(101,$treinoDTO->getSeries34());
            $stmt -> bindvalue(102,$treinoDTO->getRep34());
            $stmt -> bindvalue(103,$treinoDTO->getDificuldade());
            
            
            
            
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
           
        }
            
    }
    public function getAllTreino(){
        try{
             $pdo = Conexao::getInstance();
             $sql = "SELECT * FROM treino ";
             $stmt = $pdo->prepare($sql);
             $stmt->execute();
             $treinos = $stmt->fetchAll(PDO::FETCH_ASSOC);
             return $treinos;
        } catch (Exception $exc) {
             echo $exc->getMessage();
        }
    }
    
}

