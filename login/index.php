<?php
// Inclui o arquivo de configuração
include('login/config.php');

// Inclui o arquivo de verificação de login
include('login/verifica_login.php');

// Se não for permitido acesso nenhum ao arquivo
// Inclua o trecho abaixo, ele redireciona o usuário para 
// o formulário de login
include('login/redirect.php');
?>

Olá <b><?php echo $_SESSION['nome_usuario']?></b>, <a href="login/sair.php">clique aqui</a> para sair.

<p>Este arquivo é completamente bloqueado, caso queira bloquear apenas uma parte, remova
<code>include('login/redirect.php');</code> e utilize o seguinte:</p>

<pre>if ( $_SESSION['logado'] === true ) {
	// Aqui vem a parte para usuários logados
}</pre>