<?php
class Musica {
    private $id;
    private $nome_musica;
    private $compositor;
    private $ano;
    private $genero;
    private $single;
    private $album;
    private $duracao;
    private $descricao;
    private $cifra;

    public function getId() {
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNome_musica() {
        return $this->nome_musica;
    }

    public function setNome_musica($nome_musica){
        $this->nome_musica = $nome_musica;
    }

    public function getCompositor(){
        return $this->compositor;
    }

    public function setCompositor($compositor){
        $this->compositor = $compositor;
    }

    public function getAno(){
        return $this->ano;
    }

    public function setAno($ano){
        $this->ano = $ano;
    }

    public function getGenero(){
        return $this->genero;
    }

    public function setGenero($genero){
        $this->genero = $genero;
    }

    public function getSingle(){
        return $this->single;
    }

    public function setSingle($single){
        $this->single = $single;
    }

    public function getAlbum(){
        return $this->album;
    }

    public function setAlbum($album){
        $this->album = $album;
    }

    public function getDuracao(){
        return $this->duracao;
    }

    public function setDuracao($duracao){
        $this->duracao = $duracao;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getCifra(){
        return $this->cifra;
    }

    public function setCifra($cifra){
        $this->cifra = $cifra;
    }

}