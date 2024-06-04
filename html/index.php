<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Locadora de filmes</title>
    <link rel="stylesheet" href="../estilos/style.css"/>
    <link rel="stylesheet" href="../estilos/responsivo.css"/>
</head>

<body>
    <a href="#" id="todos"></a>
    <header>
        <a href="#" id="filmes"></a>
        <img class="img-site" id="logo" src="../imagens/logo2.png" alt="logo">
        <h1 id="titulop">AlugaFlix</h1>
        <nav>
            <a href="#filmes">Filmes</a>&nbsp;
            <a href="#series">Séries</a>&nbsp;
            <a href="#alugar">Alugar</a>&nbsp;
            <a href="login.html">>>Sair</a>&nbsp;
        </nav>

    </header>
    <br>
    <h1>FILMES - LANÇAMENTOS</h1>
    <br>

    <div id="cartaz">
        <img id="plmc" class="carrosel" src="../imagens/planetaMaca.webp" alt="cartaz do planeta dos macacos">
        <img id="kongGz" class="carrosel" src="../imagens/Kong e godz.jpg" alt="Kong e godizla">
        <img id="guerracivil" class="carrosel" src="../imagens/Civil_War_2024.jpg" alt="Guerra Civil">
        <img id="kungfu" src="../imagens/kungfupanda.jpg" alt="kungfupanda">
        <!-- <div id="flutuante">
           <img id="setadireita" src="../imagens/setadireita.png" alt="direita"> 
        </div> -->
    </div>
    <br><br>
    <div id="botoes">
        <a href="https://www.youtube.com/watch?v=NmTPDA15lPA" class="botao-acao" id="ass1">Assistir</a>
        <a href="https://www.youtube.com/watch?v=va-7FEpUHVQ" class="botao-acao" id="ass2">Assistir</a>
        <a href="https://www.youtube.com/watch?v=c2G18nIVpNE" class="botao-acao" id="ass3">Assistir</a>
        <a href="https://www.youtube.com/watch?v=XnQF9sqgZLE" class="botao-acao" id="ass4">Assistir</a>
    </div>

    <br>
    <br>
    <br>

    <h1>SÉRIES - TOP 4 HOJE </h1>
    <br>
    <a href="#" id="series"></a>
    <div id="cartaz">
        <img id="fallout" class="carrosel" src="../imagens/fallout.jpeg" alt="Fallout">
        <img id="break" class="carrosel" src="../imagens/breakingbead.webp" alt="Breaking Bead">
        <img id="chosen" class="carrosel" src="../imagens/chosen.jpg" alt="The Chosen">
        <img id="suits" src="../imagens/suits.jpg" alt="suits">
        <!-- <div id="flutuante">
            <!-- <img id="setadireita" src="../imagens/setadireita.png" alt="direita"> 
        </div> -->
    </div>

    <div id="botoes"><br><br>
        <a href="https://www.youtube.com/watch?v=7vg6pexdW14" class="botao-acao" id="ass1">Assistir</a>
        <a href="https://www.youtube.com/watch?v=HhesaQXLuRY" class="botao-acao" id="ass2">Assistir</a>
        <a href="https://www.youtube.com/watch?v=2Y9Wc_waDNs" class="botao-acao" id="ass3">Assistir</a>
        <a href="https://www.youtube.com/watch?v=cUnkjEIW2-o" class="botao-acao" id="ass4">Assistir</a>
    </div>
    <br><br>

    <br>
    <br>


    <h1>FILMES PARA ALUGAR</h1>
    <br>
    <a href="#" id="alugar"></a>
    <div id="products">
        <div id="cartaz">
            <img id="atehomem" class="product" data-name="Produto 1" data-price="10.00" src="../imagens/ateoultimo.jpg"
                alt="Até o ultimo homem">
            <img id="inter" class="product" src="../imagens/interestelar.webp" alt="interestelar">
            <img id="avatar" class="product" src="../imagens/avatar.jpeg" alt="Avatar">
            <img id="creed" class="product" src="../imagens/creed.jpeg" alt="creed">
            <!-- <div id="flutuante">
                <!-- <img id="setadireita" src="../imagens/setadireita.png" alt="direita"> 
            </div> -->
        </div>
    </div>

    <div id="botoes-alugar">
        <br>
        <a href="../html/alugaratehomem.html" class="botao-alu" id="ass5">Alugar</a>
        <button id="carrinho1" class="add-to-cart">🛒</button>
        <div class="product" data-id="1" data-price="10.00" data-name="Até o último homem">
            <button id="adc1" class="adicionar">➕</button>
            <button id="remov1" class="remover">➖</button>
        </div>

        <a href="../html/alugarinter.html" class="botao-alu" id="ass6">Alugar</a>
        <button id="carrinho2">🛒</button>
        <div class="product" data-id="2" data-price="12.00" data-name="Interestelar">
            <button id="adc2" class="adicionar">➕</button>
            <button id="remov2" class="remover">➖</button>
        </div>

        <a href="../html/alugaravatar.html" class="botao-alu" id="ass7">Alugar</a>
        <button id="carrinho3">🛒</button>
        <div class="product" data-id="3" data-price="15.00" data-name="Avatar">
            <button id="adc3" class="adicionar">➕</button>
            <button id="remov3" class="remover">➖</button>
        </div>

        <a href="../html/alugarcreed.html" class="botao-alu" id="ass8">Alugar</a>
        <button id="carrinho4">🛒</button>
        <div class="product" data-id="4" data-price="8.00" data-name="Creed">
            <button id="adc4" class="adicionar">➕</button>
            <button id="remov4" class="remover">➖</button>
        </div>
    </div>
    <br><br><br>
    <br><br><br>

    <div class="cart">
        <h2>Carrinho</h2>
        <ul id="cart-items"></ul>
        <p>Total: R$ <span id="cart-total">0.00</span></p>
    </div>
        <h3 id="irpara">Ir para o carrinho</h3>
    <script src="../js/compras.js"></script>
    <script src="../js/carrinho.js"></script>
    <script src="../js/produtos.js"></script>
    <br>
    
    <main id="principal">
        <button type="button" id="cadastrarProduto">
            <a id="adc" href="../php/form_produto.php">Adicionar sugestão</a>
        </button>
        <h4 id="prod">Sugestões:</h4>
        <div id="resultado">
        
        </div>
    <br><br>
</body>

</html>

