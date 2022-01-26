<meta charset="utf-8"/>
<?php
require_once '../Classes/FuncionarioDTO.php';
require_once '../Conexao/FuncionarioDAO.php';

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
$senha = md5 ($_POST["senha"]);
$cargo = $_POST["cargo"];
$idfuncionario = $_POST["idfuncionario"];



$FuncionarioDTO = new FuncionarioDTO();

$FuncionarioDTO ->setIdfuncionario($idfuncionario);
$FuncionarioDTO ->setNome($nome);
$FuncionarioDTO ->setSobrenome($sobrenome);
$FuncionarioDTO ->setSexo($sexo);
$FuncionarioDTO ->setDNdia($DNdia);
$FuncionarioDTO ->setDNmes($DNmes);
$FuncionarioDTO ->setDNano($DNano);
$FuncionarioDTO ->setCpf($cpf);
$FuncionarioDTO ->setCep($cep);
$FuncionarioDTO ->setRua($rua);
$FuncionarioDTO ->setNumero($numero);
$FuncionarioDTO ->setBairro($bairro);
$FuncionarioDTO ->setCidade($cidade);
$FuncionarioDTO ->setEstado($estado);
$FuncionarioDTO ->setEmail($email);
$FuncionarioDTO ->setLogin($login);
$FuncionarioDTO ->setSenha($senha);
$FuncionarioDTO ->setCargo($cargo);


$FuncionarioDAO = new FuncionarioDAO();
$FuncionarioDAO->alterarFuncionario($FuncionarioDTO );





echo "<script>";
echo "   window.location='../View/listAllFuncionario.php'";
echo "</script>";


?>
