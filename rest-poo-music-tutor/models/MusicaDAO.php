<?php
require "config/Conexao.php";
require "interfaces/DaoInterface.php";

class MusicaDAO implements DaoInterface {

    private $conexao;
    
    public function MusicaDAO() {
        $conexao = Conexao::getInstance();
        $this->conexao = $conexao->getDb();
    }

    /**
     * Busca todas as musicas cadastradas no banco
     */
    public function listar() {
        $sql = "SELECT * FROM musica";
        $resultado = $this->conexao->query($sql);
        if($resultado->num_rows == 0){
            return [];
        } else {
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }
    }

    public function porId($id) {
        $sql = "SELECT * FROM musica WHERE id = $id";
        $resultado = $this->conexao->query($sql);
        if($resultado->num_rows == 0){
            return [];
        } else {
            return $resultado->fetch_assoc();
        }
    }

    public function salvar($objeto){
        $nome_musica = $objeto["nome_musica"];
        $compositor =  $objeto["compositor"];
        $ano = $objeto["ano"];
        $genero = $objeto["genero"];
        $single = $objeto["single"];
        $album = $objeto["album"];
        $duracao = $objeto["duracao"];
        $descricao = $objeto["descricao"];
        $cifra = $objeto["cifra"];

        //criar tabela do banco nesta ordem dos dados
        $sql = "INSERT INTO musica(nome_musica, compositor, ano, genero, single, album, duracao, descricao, cifra)";
        $sql .= " VALUES('$nome_musica', '$compositor', '$ano', '$genero', '$single', '$album', '$duracao', '$descricao', '$cifra')";
        $resultado = $this->conexao->query($sql);
        if(!$resultado){
            return null;
        } else {
            return $this->conexao->insert_id;
        }
    }

    public function atualizar($objeto) {
        $id = $objeto["id"];
        $nome_musica = $objeto["nome_musica"];
        $compositor =  $objeto["compositor"];
        $ano = $objeto["ano"];
        $genero = $objeto["genero"];
        $single = $objeto["single"];
        $album = $objeto["album"];
        $duracao = $objeto["duracao"];
        $descricao = $objeto["descricao"];
        $cifra = $objeto["cifra"];
         
        $sql = "UPDATE musica SET nome = '$nome_musica', compositor = '$compositor', ano = '$ano', genero = '$genero', single = '$single', album = '$album', duracao = '$duracao', descricao = '$descricao', cifra = '$cifra', WHERE id = $id";
        $resultado = $this->conexao->query($sql);
        if(!$resultado){
            return null;
        } else {
            return true;
        }
    }

    public function remover($id) {
        $sql = "DELETE FROM musica WHERE id = $id";
        return $this->conexao->query($sql);
    }
}