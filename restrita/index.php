<?php
    session_start();
    //verifica se o usuário está logado
    if (!isset($_SESSION['usuario'])) {
        // se não estiver logado, redirecione  para a página de loguin
        header("Location: login.php");
       exit;
    }
   ?>
<!doctype html>
<html lang="pt-br">

<head>
    <title>Empresa</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
</head>

<body>
    <header>

    </header>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-T4RYN87SFW"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-T4RYN87SFW');
</script>
    
    <?php
    session_start();
    //verifica se o usuário está logado
    if (!isset($_SESSION['usuario'])) {
        // se não estiver logado, redirecione  para a página de loguin
        header("Location: ../public/logout.php");
       exit;
    }
   ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <div>
                    <h1 class="display-4">Seja bem vindo!</h1>
                    <p class="lead">Esse é um sistema de cadastro</p>
                    <hr class="my-4">
                    <p>Acesse as funçães</p>
                    <a class="btn btn-primary btn-lg" href="cadastro.php" role="button">cadastro de produtos</a>

                    <a class="btn btn-primary btn-lg" href="pesquisa.php" role="button">Pesquisa de produtos</a>

                    <a class="btn btn-danger btn-lg" href="../scripts/logout.php" role="button">Sair</a>
                    
                </div>

            </div>
        </div>

        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"></script>
</body>

</html>