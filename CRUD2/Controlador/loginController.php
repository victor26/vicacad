<?php
session_start();
require_once '../Conexao/loginDAO.php';


$login = victor;
$senha = 123456;

$loginDAO = new LoginDAO();
$login = $loginDAO->login($login, $senha);












if(!empty($login)){
    $_SESSION["login"] = $login["login"];
    $_SESSION["perfil"] = $login["perfil"];
   switch ($_SESSION["perfil"]) {
        case "Funcionario":
            echo "<script>";
            echo "   window.location='../../indexFuncionario.php'";
            echo "</script>";
            break;
        case "Cliente":
            echo "<script>";
            echo "   window.location='../../indexCliente.php'";
            echo "</script>";
            break;
        }
    } else {
    echo "<script>";
    echo "   window.location='../../index.php'";
    echo "</script>";
   }
