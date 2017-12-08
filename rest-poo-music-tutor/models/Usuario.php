<?php
class Usuario {
    private $id;
    private $nome;
    private $email;
    private $status_conta;
    private $status_moderador;

    public function getId() {
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getStatus_conta(){
        return $this->status_conta;
    }

    public function setStatus_conta($status_conta){
        $this->email = $status_conta;
    }

    public function getStatus_moderador(){
        return $this->status_moderador;
    }

    public function setStatus_moderador($status_moderador){
        $this->status_moderador = $status_moderador;
    }

}