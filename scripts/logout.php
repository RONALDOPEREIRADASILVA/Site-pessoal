<?php 
//inicia a sessão 
session_start();
//limpa as variáveis de sessão 
session_unset();

//destroi a sessão
session_destroy();

//redireciona para página inicial
header('Location: index.php?rota=home');
?>