<?php
require "config/Conexao.php";
require "interfaces/DaoInterface.php";

class ComentariosDAO implements DaoInterface {

    private $conexao;
    
    public function ComentariosDAO() {
        $conexao = Conexao::getInstance();
        $this->conexao = $conexao->getDb();
    }

    /**
     * Busca todos os comentarios cadastrados no banco
     */
    public function listar() {
        $sql = "SELECT * FROM comentarios";
        $resultado = $this->conexao->query($sql);
        if($resultado->num_rows == 0){
            return [];
        } else {
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }
    }

    public function porId($id) {
        $sql = "SELECT * FROM comentarios WHERE id = $id";
        $resultado = $this->conexao->query($sql);
        if($resultado->num_rows == 0){
            return [];
        } else {
            return $resultado->fetch_assoc();
        }
    }

    public function salvar($objeto){
        //$usuario_id = $objeto["usuario_id"];
        $descricao = $objeto["descricao"];

        //criar tabela do banco nesta ordem dos dados
        $sql = "INSERT INTO comentarios(descricao)";
        $sql .= " VALUES('$descricao')";
        $resultado = $this->conexao->query($sql);
        if(!$resultado){
            return null;
        } else {
            return $this->conexao->insert_id;
        }
    }

    public function atualizar($objeto) {
        $descricao = $objeto["descricao"];
        $id = $objeto["id"];
        $usuario_id = $objeto["usuario_id"];
         
        $sql = "UPDATE comentarios SET descricao = '$descricao' WHERE id = $id";
        $resultado = $this->conexao->query($sql);
        if(!$resultado){
            return null;
        } else {
            return true;
        }
    }

    public function remover($id) {
        $sql = "DELETE FROM comentario WHERE id = $id";
        return $this->conexao->query($sql);
    }
}