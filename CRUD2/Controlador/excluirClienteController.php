<?php
require_once '../Conexao/ClienteDAO.php';

$idcliente = $_GET["idcliente"];


$clienteDAO = new ClienteDAO();
$clienteDAO->deleteClienteById($idcliente);




echo "<script>";
echo " window.location='../View/listAllCliente.php'";
echo "</script>";

