<?php
class Conexao {

    private static $instancia;
    private $db;

    private function Conexao(){
        $this->db = new mysqli("localhost", "root", "", "musictutorapi");//colocar nome do banco, sugeri este
    }

    public static function getInstance() {
        if(self::$instancia == null){
            self::$instancia = new Conexao();
        }
        return self::$instancia;
    }

    public function getDb(){
        return $this->db;
    }
}