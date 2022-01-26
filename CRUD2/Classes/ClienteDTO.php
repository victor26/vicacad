<meta charset="utf-8">

<?php

class ClienteDTO {
    private $idcliente;
    private $nome;
    private $sobrenome;
    private $sexo;
    private $DNdia;
    private $DNmes;
    private $DNano;
    private $Cpf;
    private $cep;
    private $Rua;
    private $Numero;
    private $Bairro;
    private $Cidade;
    private $Estado;
    private $Email;
    private $Login;
    private $senha;
    private $objetivo;
    private $Cargo;
    private $perfil_idperfil;
  
    
    public function getIdcliente() {
        return $this->idcliente;
    }

    public function setIdcliente($idcliente) {
        $this->idcliente = $idcliente;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function getDNdia() {
        return $this->DNdia;
    }

    public function setDNdia($DNdia) {
        $this->DNdia = $DNdia;
    }

    public function getDNmes() {
        return $this->DNmes;
    }

    public function setDNmes($DNmes) {
        $this->DNmes = $DNmes;
    }

    public function getDNano() {
        return $this->DNano;
    }

    public function setDNano($DNano) {
        $this->DNano = $DNano;
    }

    public function getCpf() {
        return $this->Cpf;
    }

    public function setCpf($Cpf) {
        $this->Cpf = $Cpf;
    }

    public function getCep() {
        return $this->cep;
    }

    public function setCep($cep) {
        $this->cep = $cep;
    }

    public function getRua() {
        return $this->Rua;
    }

    public function setRua($Rua) {
        $this->Rua = $Rua;
    }

    public function getNumero() {
        return $this->Numero;
    }

    public function setNumero($Numero) {
        $this->Numero = $Numero;
    }

    public function getBairro() {
        return $this->Bairro;
    }

    public function setBairro($Bairro) {
        $this->Bairro = $Bairro;
    }

    public function getCidade() {
        return $this->Cidade;
    }

    public function setCidade($Cidade) {
        $this->Cidade = $Cidade;
    }

    public function getEstado() {
        return $this->Estado;
    }

    public function setEstado($Estado) {
        $this->Estado = $Estado;
    }
    function getEmail() {
        return $this->Email;
    }

    function setEmail($Email) {
        $this->Email = $Email;
    }

    public function getLogin() {
        return $this->Login;
    }

    public function setLogin($Login) {
        $this->Login = $Login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

 
    public function getObjetivo() {
        return $this->objetivo;
    }

    public function setObjetivo($objetivo) {
        $this->objetivo = $objetivo;
    }
   public function getCargo() {
        return $this->cargo;
    }

    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }
    public function getPerfil_idperfil() {
        return $this->perfil_idperfil;
    }

    public function setPerfil_idperfil($perfil_idperfil) {
        $this->perfil_idperfil = $perfil_idperfil;
    }

}

?>
