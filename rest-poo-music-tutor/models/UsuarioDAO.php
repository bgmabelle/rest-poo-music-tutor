<?php
require "config/Conexao.php";
require "interfaces/DaoInterface.php";

class UsuarioDAO implements DaoInterface {

    private $conexao;
    
    public function UsuarioDAO() {
        $conexao = Conexao::getInstance();
        $this->conexao = $conexao->getDb();
    }

    /**
     * Busca todos os usuarios cadastrados no banco
     */
    public function listar() {
        $sql = "SELECT * FROM usuario";
        $resultado = $this->conexao->query($sql);
        if($resultado->num_rows == 0){
            return [];
        } else {
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }
    }

    public function porId($id) {
        $sql = "SELECT * FROM usuario WHERE id = $id";
        $resultado = $this->conexao->query($sql);
        if($resultado->num_rows == 0){
            return [];
        } else {
            return $resultado->fetch_assoc();
        }
    }

    public function salvar($objeto){
        $nome = $objeto["nome"];
        $email = $objeto["email"];
        $status_conta = $objeto["status_conta"];
        $status_moderador = $objeto["status_moderador"];

        //criar tabela do banco nesta ordem dos dados
        $sql = "INSERT INTO usuario(nome, email, status_conta, status_moderador)";
        $sql .= " VALUES('$nome', '$email', '$status_conta', '$status_moderador')";
        $resultado = $this->conexao->query($sql);
        if(!$resultado){
            return null;
        } else {
            return $this->conexao->insert_id;
        }
    }

    public function atualizar($objeto) {
        $nome = $objeto["nome"];
        $email = $objeto["email"];
        $id = $objeto["id"];
        $status_conta = $objeto["status_conta"];
        $status_moderador = $objeto["status_moderador"];
         
        $sql = "UPDATE usuario SET nome = '$nome', email = '$email', status_conta = '$status_conta', status_moderador = '$status_moderador' WHERE id = $id";
        $resultado = $this->conexao->query($sql);
        if(!$resultado){
            return null;
        } else {
            return true;
        }
    }

    public function remover($id) {
        $sql = "DELETE FROM usuario WHERE id = $id";
        return $this->conexao->query($sql);
    }
}