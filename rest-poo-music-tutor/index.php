<?php 
// Definindo os cabeçalhos de resposta API
header("Content-Type: application/json; charset=utf-8;");

// Instanciando a classe de Fachada
require "controllers/FrontController.php";
new FrontController();