<?php
require_once 'Conexao.php';

class  LoginDAO{
    public function login($login, $senha){
        try{
            $pdo = Conexao::getInstance();
            $sql = "SELECT u.login, p.perfil, p.idperfil FROM cliente u INNER JOIN perfil p ON (u.perfil_idperfil = p.idperfil) WHERE u.login = ? AND u.senha = ?";
           
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $login);
            $stmt->bindValue(2, $senha);
            $stmt->execute();
            $login = $stmt->fetch(PDO::FETCH_ASSOC);
            return $login;
            
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
        
    }
    
}