
<meta charset="utf-8">
<?php
require_once 'Conexao.php';
class ClienteDAO {
     public function salvar(ClienteDTO $ClienteDTO){
        try {
            $pdo = Conexao::getInstance();
            $sql = "INSERT INTO cliente(nome, sobrenome, sexo, DNdia, DNmes, DNano, cpf, cep, rua, numero, bairro, cidade, estado, email, login, senha, objetivo, cargo, perfil_idperfil,idtreino)
                    VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt -> bindvalue(1,$ClienteDTO->getNome());
            $stmt -> bindvalue(2,$ClienteDTO->getSobrenome());
            $stmt -> bindvalue(3,$ClienteDTO->getSexo());
            $stmt -> bindvalue(4,$ClienteDTO->getDNdia());
            $stmt -> bindvalue(5,$ClienteDTO->getDNmes());
            $stmt -> bindvalue(6,$ClienteDTO->getDNano());
            $stmt -> bindvalue(7,$ClienteDTO->getCpf());
            $stmt -> bindvalue(8,$ClienteDTO->getCep());
            $stmt -> bindvalue(9,$ClienteDTO->getRua());
            $stmt -> bindvalue(10,$ClienteDTO->getNumero());
            $stmt -> bindvalue(11,$ClienteDTO->getBairro());
            $stmt -> bindvalue(12,$ClienteDTO->getCidade());
            $stmt -> bindvalue(13,$ClienteDTO->getEstado());
            $stmt -> bindvalue(14,$ClienteDTO->getEmail());
            $stmt -> bindvalue(15,$ClienteDTO->getLogin());
            $stmt -> bindvalue(16,$ClienteDTO->getSenha());
            $stmt -> bindvalue(17,$ClienteDTO->getObjetivo());
            $stmt -> bindvalue(18,$ClienteDTO->getCargo());
            $stmt -> bindvalue(19,$ClienteDTO->getPerfil_idperfil());
            
            $stmt -> bindvalue(20,$ClienteDTO->getIdtreino());
            
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
           
        }
            
    }
 public function getAllCliente(){
        try{
             $pdo = Conexao::getInstance();
             $sql = "SELECT * FROM cliente ";
             $stmt = $pdo->prepare($sql);
             $stmt->execute();
             $funcionarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
             return $funcionarios;
        } catch (Exception $exc) {
             echo $exc->getMessage();
        }
    }

 public function getClienteByNome($nome){
        try{
             $pdo = Conexao::getInstance();
             $sql = "SELECT * FROM cliente Where nome Like ? ";
             $stmt = $pdo->prepare($sql);
             $stmt->bindValue(1, "%".$nome."%");
             $stmt->execute();
             $funcionario = $stmt->fetchAll(PDO::FETCH_ASSOC);
             return $funcionario;
        } catch (Exception $exc) {
             echo $exc->getMessage();
        }
    }
    
   public function deleteClienteById($idcliente){
        try{
             $pdo = Conexao::getInstance();
             $sql = "DELETE FROM cliente WHERE idcliente = ?";
             $stmt = $pdo->prepare($sql);
             $stmt->bindValue(1, $idcliente);
             $stmt->execute();
             
        } catch (Exception $exc) {
             echo $exc->getMessage();
        }
    }
     public function getClienteById($idcliente){
        try{
             $pdo = Conexao::getInstance();
             $sql = "SELECT * FROM cliente WHERE idcliente = ? ";
             $stmt = $pdo->prepare($sql);
             $stmt->bindValue(1, $idcliente);
             $stmt->execute();
             $cliente = $stmt->fetch(PDO::FETCH_ASSOC);
             return $cliente;
        } catch (Exception $exc) {
             echo $exc->getMessage();
        }
    }
    public function alterarCliente(ClienteDTO $ClienteDTO){
        try{
            $pdo = Conexao::getInstance();
            $sql = "UPDATE cliente SET
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
                objetivo = ?
                WHERE idcliente = ? ";
            $stmt = $pdo->prepare($sql);
            $stmt -> bindvalue(1,$ClienteDTO->getNome());
            $stmt -> bindvalue(2,$ClienteDTO->getSobrenome());
            $stmt -> bindvalue(3,$ClienteDTO->getSexo());
            $stmt -> bindvalue(4,$ClienteDTO->getDNdia());
            $stmt -> bindvalue(5,$ClienteDTO->getDNmes());
            $stmt -> bindvalue(6,$ClienteDTO->getDNano());
            $stmt -> bindvalue(7,$ClienteDTO->getCpf());
            $stmt -> bindvalue(8,$ClienteDTO->getCep());
            $stmt -> bindvalue(9,$ClienteDTO->getRua());
            $stmt -> bindvalue(10,$ClienteDTO->getNumero());
            $stmt -> bindvalue(11,$ClienteDTO->getBairro());
            $stmt -> bindvalue(12,$ClienteDTO->getCidade());
            $stmt -> bindvalue(13,$ClienteDTO->getEstado());
            $stmt -> bindvalue(14,$ClienteDTO->getEmail());
            $stmt -> bindvalue(15,$ClienteDTO->getLogin());
            $stmt -> bindvalue(16,$ClienteDTO->getSenha());
            $stmt -> bindvalue(17,$ClienteDTO->getObjetivo());
            $stmt -> bindValue(18,$ClienteDTO->getIdcliente());
            
            return $stmt->execute();

        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
}