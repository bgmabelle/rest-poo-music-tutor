<?php
interface DaoInterface {
    public function listar();
    public function porId($id);
    public function salvar($objeto);
    public function atualizar($objeto);
    public function remover($id);
}