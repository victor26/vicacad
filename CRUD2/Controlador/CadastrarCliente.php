<meta charset="utf-8"/>
<?php
require_once '../Classes/ClienteDTO.php';
require_once '../Conexao/ClienteDAO.php';

$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$sexo = $_POST["sexo"];
$DNdia = $_POST["DNdia"];
$DNmes = $_POST["DNmes"];
$DNano = $_POST["DNano"];
$cpf = $_POST["cpf"];
$cep = $_POST["cep"];
$rua = $_POST["rua"];
$numero = $_POST["numero"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$email = $_POST["email"];
$login = $_POST["login"];
$senha = md5($_POST["senha"]);
$objetivo = $_POST["objetivo"];
$cargo = $_POST["cargo"];
$perfil_idperfil= $_POST["perfil_idperfil"];




$ClienteDTO = new ClienteDTO();

$ClienteDTO->setNome($nome);
$ClienteDTO->setSobrenome($sobrenome);
$ClienteDTO->setSexo($sexo);
$ClienteDTO->setDNdia($DNdia);
$ClienteDTO->setDNmes($DNmes);
$ClienteDTO->setDNano($DNano);
$ClienteDTO->setCpf($cpf);
$ClienteDTO->setCep($cep);
$ClienteDTO->setRua($rua);
$ClienteDTO->setNumero($numero);
$ClienteDTO->setBairro($bairro);
$ClienteDTO->setCidade($cidade);
$ClienteDTO->setEstado($estado);
$ClienteDTO->setEmail($email);
$ClienteDTO->setLogin($login);
$ClienteDTO->setSenha($senha);
$ClienteDTO->setObjetivo($objetivo);
$ClienteDTO->setCargo($cargo);
$ClienteDTO->setPerfil_idperfil($perfil_idperfil);




$ClienteDAO = new ClienteDAO();

$verificar = $ClienteDAO->salvar($ClienteDTO);

if($verificar){
    $msg = "cadastro com Sucesso";
    echo "<script>";
    echo "window.location='../View/FormCliente.php?c=$msg'";
    echo "</script>";
    
}
        


?>
