# Painel-Hacker
Painel hacker pra quem curte ownar, com muitas tools, inclusive tools para criptografar nossos codigos hacker em php, html e mais diversas linguagens de programaçao, com os codigos do gorpo você esta a salvo, este material deve ser hospedado em servidor com PHP7.1 e ter um banco de dados em branco criado esperando por ele!


----INSTRUÇÕES PAINEL HACKER----
Você precisa de uma hospedagem, ou um servidor apache rodando com PHP7.2 e tambem com banco de dados Mysql, onde deverá criar um banco de dados em branco para seguir com os procedimentos, tenha em mente que este conteudo é apenas para fins academicos!

Primeiro passo:
- Fazer o upload de todos os arquivos para um servidor com suporte a PHP e Mysql.
- Criar um banco de dados e anotar os dados como:
-nome do banco de dados
-nome de usuario do banco de dados
-senha do banco de dados.

Segundo passo:
Após criar um Banco de dados em branco e upar nossos arquivos para o servidor vamos:
1 - Editar o arquivo "config.php" que fica na pasta login, edite apenas as linhas:

// Variáveis da conexão
$base_dados  = 'nome do banco de dados';
$usuario_bd  = 'usuario do banco de dados';
$senha_bd    = 'senha do banco de dados';
$host_db     = 'localhost';
$charset_db  = 'UTF8';
$conexao_pdo = null;

OBS: nao mudar mais nada e manter as aspas!

3 - Para criar um usuário  acesse o caminho:
https://seusite.com/pannel/cadastro.php

4 - Para deletar um usuário acesse seu banco de dados
pelo phpmyadmin e delete o usuario manualmente.


