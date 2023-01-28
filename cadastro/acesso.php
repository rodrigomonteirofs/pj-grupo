<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="css/style-geral.css">
    <link rel="stylesheet" href="./css/resp-auten.css">

    <link rel="stylesheet" href="style2.css">
    <title>Olá!</title>
</head>
<body>
    <main>

        <div id="container">

            <div class="logo"></div>

            <div class="mensagem">
                <p><span>LOGIN</span></p>                
            </div>

            <div class="acoes">

            <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                 <div class="box">
                        <form action="login.php" method="POST">
                            <div class="form">
                                <div class="inputbox">
                                    <input name="email" name="text" class="input is-large" placeholder="DIGITE SEU E-MAIL" autofocus="">
                                </div>
                            </div>

                            <div class="form">
                                <div class="inputbox">
                                    <input name="senha" class="input is-large" type="password" placeholder="DIGITE SUA SENHA">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                        </form>
                    </div>
            </div>
            </div>

    </main>
    <script src="./js/main.js"></script>
</body>
</html>
