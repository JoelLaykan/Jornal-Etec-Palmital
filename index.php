<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jornal Etec</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'top.php'; ?>
    <div class="content">


                <?php include 'inicio.php'; ?>

                <!--<div id="regiaoemundodireita">
                    <h3>Região e Mundo</h3>
                    <div class="noticia">
                        <h2>Taylor Swift adiciona Bolsonaro no WhatsApp para pedir Pix.</h2>
                        <img src="img/taylorswift.webp" alt=""><small>Taylor Swift pede Pix para Bolsonaro.</small>
                        <p>Em entrevista, o ex-presidente disse que ela deveria "fazer o L".</p>
                    </div>
                </div>

                <div id="futeboldireita">
                    <h3>Futebol</h3>
                </div>-->


            </div>
            
            <div class="direita">
                <div class="navbar">
                    <button id="futebolbtn" onclick="mostrarPaginaFutebol()">Futebol</button>
                    <button id="regiaoemundobtn" onclick="mostrarPaginaRegiaoemundo()">Região e Mundo</button>
                </div>

            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>