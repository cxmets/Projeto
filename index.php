<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/style-index.css">
    <link rel="stylesheet" href="css/responsivo.css">
    <title>E-ecommerce</title>
</head>
<body>
    <header class="cabecalho">
        <nav>
            <div class="cabe"> 
                <h3>Logo</h3>
                
                <div class="conteudo">
                    <a class="links" href="#">Carrinho</a>
                    <a class="links" href="contato.html">Cadastro</a>
                    <a class="links" href="produtos.php">Produtos</a>
                    <a class="links" href="contato.html">Sobre</a>
                    <!-- <?php include('menu.php'); ?> -->
                </div>
            </div>
        </nav>
    </header>
    
<main class="conteudo2">
    <div class="conteudo-principal">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/banner1.png" class="d-block w-100 h-100" alt="imagem 1">
              </div>
              <div class="carousel-item">
                <img src="img/banner5.webp" class="d-block w-100" alt="imagem 2">
              </div>
              <div class="carousel-item">
                <img src="img/banner4.jfif" class="d-block w-100" alt="imagem3">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
</main>
        <main class="conteudo3">
            <div class="conteudo-principal3">
                <h2>Descubra o Poder da Paixão: Camisas de Time Exclusivas!</h2>
                <p class="paragrafo">Seja bem-vindo à nossa loja, o paraíso dos verdadeiros amantes do esporte! Aqui, não vendemos apenas camisas; oferecemos uma experiência única para aqueles que têm o coração batendo no ritmo das partidas emocionantes, dos gols inesquecíveis e das vitórias gloriosas.
                    
                    Nossas prateleiras virtuais estão repletas das mais recentes e autênticas camisas de times, feitas para celebrar a união entre torcedor e clube. Desde os designs clássicos que evocam a nostalgia até as inovações modernas que capturam a essência do esporte atual, temos algo para cada fã.
                    
                    A qualidade é a nossa prioridade. Cada costura, cada detalhe é pensado para garantir que você receba não apenas uma camisa, mas um pedaço do seu time do coração. Utilizamos os melhores materiais, combinando conforto e durabilidade para que você possa exibir seu orgulho em cada momento.
                    
                    Navegue por nosso catálogo diversificado, que abrange times locais e internacionais, e descubra a camisa perfeita para vestir nos jogos, nos encontros com amigos ou simplesmente para expressar sua devoção onde quer que vá.
                    
                    Não é apenas sobre vestir uma camisa; é sobre vestir sua paixão, sua história e seu amor pelo esporte. Junte-se a nós nesta jornada emocionante, onde cada compra é mais do que um simples ato comercial, é uma celebração do esporte que une corações e mentes.
                    
                    Conheça Já:
                    
                    Agora que você está pronto para mergulhar no mundo emocionante das camisas de time, clique no botão abaixo e descubra a vasta coleção que preparamos especialmente para você. Vista a paixão, vista o orgulho, e mostre ao mundo de qual time você faz parte!</p>
            </div>
            <div class="conteudo-principal4">
                <a href="produtos.php">
                <button>Conheça já</button>
            </a>
            </div>
        </main><br>
<footer class="rodape">
    <div class="redes">
        <h2 class="p">Siga nossas redes</h2>
        <div class="image-princ">
        <img class="image" src="img/instagram.png">
        <img class="image" src="img/whatsapp.png">
        <img class="image" src="img/twitter.png">
    </div>
    </div>
    <hr>
    <main class="descricao-breve">
        <p>Temos a entrega mais rápida, com os melhores produtos não perca tempo</p>
        <p>aceitamos todos os tipos de cartões</p>
    </main>
    <hr>
    <div class="copy">
        <p>Desenvolvido e criado por Filipe Augusto, Caio Sena, Felipe, Gabriel Ramos, juninho, Mateus, Fabio </p>

        </div>
</footer>

     
    
</body>
</html>
