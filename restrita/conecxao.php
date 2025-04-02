
<?php
//conexão com banco de dados

$server = "localhost"; //servider
$user = "u980950152_Ronaldo";//Usuario
$pass = "#112208Ro"; //senha do usuario
$bd = "u980950152_cadastro";//Nome do banco de dado

//estabelecendo conexão com o banco de dado e se(fi)conectar(echo) mostra "conectado" 
//(else) se não conectar (echo) mostra "erro"
if ($conn = mysqli_connect($server, $user, $pass, $bd)) {
} else
    echo " erro";


/**
 * Move um arquivo de imagem enviado pelo usuário para o diretório de imagens.
 *
 * @param array $file_data Dados do arquivo enviado ($_FILES).
 * @return string|int Nome do arquivo movido ou 0 em caso de erro.
 */
function mover_foto($vetor_foto)
{
    $vtipo = explode("/", $vetor_foto['type']);
    $tipo = $vtipo[0] ?? '';
     // Verifica se existe um segundo elemento em $vtipo
     if (strpos($vetor_foto['type'], "/") !== false) {
         $vtipo[1];
    }

    if (
        (!$vetor_foto['error']) and ($vetor_foto['size'] <= 12582912) and ($tipo == "image")
    ) {
        $nome_arquivo = date('Ymdhms') ;
        move_uploaded_file($vetor_foto['tmp_name'], "img/" . $nome_arquivo);
        return $nome_arquivo;
    } else {
        return 0;
    }
}

// O restante do seu código...
?>
