<?php
/**
 * Este arquivo contém as configurações necessárias para
 * o sistema de login funcionar corretamente.
 */

/* Define o limite de tempo da sessão em 60 minutos */
session_cache_expire(60);

// Inicia a sessão
session_start();

// Variável que verifica se o usuário está logado
if ( ! isset( $_SESSION['logado'] ) ) {
    $_SESSION['logado'] = false;
}

// Erro do login
$_SESSION['login_erro'] = false;

/**
 * PDO - Conexão com a base de dados - Aula 28
 * http://www.tutsup.com/2014/07/23/pdo-em-php/
 */
 
// Variáveis da conexão
// aqui voce deve por seus dados do banco de dados criado, basta criar um banco de dados em branco e por aqui os dados de login senha e nome do banco apenas ok, é facil nao seja noob, voce pode fazer isto voce consegue, nao me enche o saco no pv que nao vou ajudar cara, é facil, é so vc criar um banco de dados na hospedagem e por a merda dos dados aqui ok seu animal lammer do caralho.
$base_dados  = 'nome do banco de dados';
$usuario_bd  = 'usuario do banco de dados';
$senha_bd    = 'senha do banco de dados';
$host_db     = 'localhost';
$charset_db  = 'UTF8';
$conexao_pdo = null;

// Concatenação das variáveis para detalhes da classe PDO
$detalhes_pdo  = 'mysql:host=' . $host_db . ';';
$detalhes_pdo .= 'dbname='. $base_dados . ';';
$detalhes_pdo .= 'charset=' . $charset_db . ';';

// Tenta conectar
try {
    // Cria a conexão PDO com a base de dados
    $conexao_pdo = new PDO($detalhes_pdo, $usuario_bd, $senha_bd);
} catch (PDOException $e) {
    // Se der algo errado, mostra o erro PDO
    print "Erro: " . $e->getMessage() . "<br/>";
   
    // Mata o script
    die();
}
?>
