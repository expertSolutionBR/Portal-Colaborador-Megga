
<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Portal do Colaborador</title>
            <link rel="stylesheet" href="./assets/css/login.css">
        </head>
        <body>
                <div class="back">
                    <div class="backlogo">
                        <img id="back" src="./assets/imagens/logo-Megga-WaterMark.png" alt="">
                    </div>            
                    <div class="superior">
                        <div class="area">
                            <div class="login">
                                <div class="logo">
                                    <img src="./assets/imagens/logo-Megga-vertical.png" alt="">
                                </div>
                                <div class="loginarea">
                                    <div class="loginitens">
                                        <div class="titulo">
                                            <h1>Portal do Colaborador</h1>
                                        </div>
                                        <form id="formLogin" method="$_POST">
                                            <div class="inputs">
                                                <input type="text" name="login" id="login" required placeholder="Usuário">
                                                <input type="password" name="senha" id="senha" required placeholder="Senha">
                                                <p id="textoValidacao" class="textoValidacao">Usuário ou senha inválido!</p>
                                            </div>
                                            <div class="buttons">
                                                <a href="">
                                                    <button onclick="validarLogin()" id="btLogar" type="submit">Entrar</button>
                                                </a>                    
                                            </div>
                                        </form>
                                        
                                    </div>
                                </div>            
                            </div>
                        </div>
                    </div>
                </div>
                <script src="./assets/scripts/validacao.js"></script>
        </body>
    </html>
