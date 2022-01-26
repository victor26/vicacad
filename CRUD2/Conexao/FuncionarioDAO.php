
<meta charset="utf-8">
<?php
require_once 'Conexao.php';
class FuncionarioDAO {
     public function salvar(FuncionarioDTO $funcionarioDTO){
        try {
            $pdo = Conexao::getInstance();
            $sql = "INSERT INTO funcionario(nome, sobrenome, sexo, DNdia, DNmes, DNano, cpf, cep, rua, numero, bairro, cidade, estado, email, login, senha, cargo,perfil_idperfil)
                    VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,1)";
            $stmt = $pdo->prepare($sql);
            $stmt -> bindvalue(1,$funcionarioDTO->getNome());
            $stmt -> bindvalue(2,$funcionarioDTO->getSobrenome());
            $stmt -> bindvalue(3,$funcionarioDTO->getSexo());
            $stmt -> bindvalue(4,$funcionarioDTO->getDNdia());
            $stmt -> bindvalue(5,$funcionarioDTO->getDNmes());
            $stmt -> bindvalue(6,$funcionarioDTO->getDNano());
            $stmt -> bindvalue(7,$funcionarioDTO->getCpf());
            $stmt -> bindvalue(8,$funcionarioDTO->getCep());
            $stmt -> bindvalue(9,$funcionarioDTO->getRua());
            $stmt -> bindvalue(10,$funcionarioDTO->getNumero());
            $stmt -> bindvalue(11,$funcionarioDTO->getBairro());
            $stmt -> bindvalue(12,$funcionarioDTO->getCidade());
            $stmt -> bindvalue(13,$funcionarioDTO->getEstado());
            $stmt -> bindvalue(14,$funcionarioDTO->getEmail());
            $stmt -> bindvalue(15,$funcionarioDTO->getLogin());
            $stmt -> bindvalue(16,$funcionarioDTO->getSenha());
            $stmt -> bindvalue(17,$funcionarioDTO->getCargo());
            
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
           
        }
            
    }
 public function getAllFuncionario(){
        try{
             $pdo = Conexao::getInstance();
             $sql = "SELECT * FROM funcionario ";
             $stmt = $pdo->prepare($sql);
             $stmt->execute();
             $funcionarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
             return $funcionarios;
        } catch (Exception $exc) {
             echo $exc->getMessage();
        }
    }

 public function getFuncionarioByNome($nome){
        try{
             $pdo = Conexao::getInstance();
             $sql = "SELECT * FROM funcionario Where nome Like ? ";
             $stmt = $pdo->prepare($sql);
             $stmt->bindValue(1, "%".$nome."%");
             $stmt->execute();
             $funcionario = $stmt->fetchAll(PDO::FETCH_ASSOC);
             return $funcionario;
        } catch (Exception $exc) {
             echo $exc->getMessage();
        }
    }
    
   public function deleteFuncionarioById($idfuncionario){
        try{
             $pdo = Conexao::getInstance();
             $sql = "DELETE FROM funcionario WHERE idfuncionario = ?";
             $stmt = $pdo->prepare($sql);
             $stmt->bindValue(1, $idfuncionario);
             $stmt->execute();
             
        } catch (Exception $exc) {
             echo $exc->getMessage();
        }
    }
     public function getFuncionarioById($idfuncionario){
        try{
             $pdo = Conexao::getInstance();
             $sql = "SELECT * FROM funcionario WHERE idfuncionario = ? ";
             $stmt = $pdo->prepare($sql);
             $stmt->bindValue(1, $idfuncionario);
             $stmt->execute();
             $funcionario = $stmt->fetch(PDO::FETCH_ASSOC);
             return $funcionario;
        } catch (Exception $exc) {
             echo $exc->getMessage();
        }
    }
    public function alterarFuncionario(FuncionarioDTO $FuncionarioDTO){
        try{
            $pdo = Conexao::getInstance();
            $sql = "UPDATE funcionario SET
                nome = ?,
                sobrenome = ?,
                sexo = ?,
                DNdia = ?,
                DNmes = ?,
                DNano = ?,
                cpf = ?,
                cep = ?,
                rua = ?,
                numero = ?,
                bairro = ?,
                cidade = ?,
                estado = ?,
                email = ?,
                login = ?,
                senha = ?,
                cargo = ?
                WHERE idfuncionario = ? ";
            $stmt = $pdo->prepare($sql);
            $stmt -> bindvalue(1,$FuncionarioDTO->getNome());
            $stmt -> bindvalue(2,$FuncionarioDTO->getSobrenome());
            $stmt -> bindvalue(3,$FuncionarioDTO->getSexo());
            $stmt -> bindvalue(4,$FuncionarioDTO->getDNdia());
            $stmt -> bindvalue(5,$FuncionarioDTO->getDNmes());
            $stmt -> bindvalue(6,$FuncionarioDTO->getDNano());
            $stmt -> bindvalue(7,$FuncionarioDTO->getCpf());
            $stmt -> bindvalue(8,$FuncionarioDTO->getCep());
            $stmt -> bindvalue(9,$FuncionarioDTO->getRua());
            $stmt -> bindvalue(10,$FuncionarioDTO->getNumero());
            $stmt -> bindvalue(11,$FuncionarioDTO->getBairro());
            $stmt -> bindvalue(12,$FuncionarioDTO->getCidade());
            $stmt -> bindvalue(13,$FuncionarioDTO->getEstado());
            $stmt -> bindvalue(14,$FuncionarioDTO->getEmail());
            $stmt -> bindvalue(15,$FuncionarioDTO->getLogin());
            $stmt -> bindvalue(16,$FuncionarioDTO->getSenha());
            $stmt -> bindvalue(17,$FuncionarioDTO->getCargo());
            $stmt -> bindValue(18,$FuncionarioDTO->getIdfuncionario());
            
            return $stmt->execute();

        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
}