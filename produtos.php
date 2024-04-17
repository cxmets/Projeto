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
  
    <script src="js/script.js" defer></script>
    <script src="js/adicionar.js" defer></script> 
    <script src="js/produto.js" defer></script>  
    <script src="js/ler-mais.js" defer></script>
    <link rel="stylesheet" href="css/produto.css">
   
    <title>Produtos</title>
</head>
<body>
    
    <header class="cabecalho">
        <nav>
           <div class="cabe"> 
            <h3>Logo</h3>
            
            <div class="conteudo">
            <a class="links" href="carrinho.html">Carrinho</a>
            <a class="links" href="contato.html">Cadastra-se</a>
            <a class="links" href="#">Produtos</a>
            <a class="links" href="index.php">Inicio</a>
            <?php include('menu.php'); ?>
        </div>
        
        </div>
        </nav>
    </header>

        <div class="card-principal">
        <div class="card" data-name="Produto 1">
            <p><b>Camisa Corinthians 2023</b></p>
            <div class="conserta-img">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="img/corinthians.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="img/corinthians2.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="img/corinthians3.png" class="d-block w-100" alt="...">
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
                <p class="font"><b>Preço: 300R$</p></b>
                <div class="desc">
                    <p id="textoCompleto">Um retrô que homenageia mais do que apenas um time de futebol. A camisa Corinthians 2023/24 Home celebra o influente legado do time de 83 usando o mesmo logotipo “Democracia Corinthiana”. Nossa coleção Match combina detalhes de design leves com tecnologia que seca rápido para ajudar os maiores craques do mundo a se manterem secos e confortáveis dentro do campo.</p>
                    <p id="textoResumido" style="display: none;">Um retrô que homenageia mais do que apenas um time de futebol. A camisa Corinthians 2023/24</p>
                    <button class="botaoLerMais" onclick="alternarTexto('Produto 1')">Ler Mais</button>
                </div>
                <button id="img" class="adicionar-ao-carrinho" data-nome="Produto 1" data-preco="300.00" width="200" height="150" data-imagem="img/corinthians.png">Comprar</button>

    </div>

        <div class="card" data-name="Produto 2">
            <p><b>Camisa São Paulo 2023</b></p>
            <div id="carouselExample" class="carousel slide">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/sp.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/sp-2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/sp-3.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>

                <p class="font"><b>Preço: 200R$</b></p>
                <div class="desc">
                    <p id="textoCompleto">Confeccionada com a tradição do futebol. Em 2023, a famosa barra no peito da camisa oficial adidas do São Paulo FC estende-se todo o comprimento. A inscrição na gola interna e o escudo do time costurado no peito adicionam mais detalhes do clube para manter os torcedores orgulhosos. O tecido macio e o AEROREADY que remove o suor garantem o conforto enquanto você mostra sua torcida.
                      Feito 100% de materiais reciclados, este produto representa apenas uma das nossas soluções para ajudar a acabar com os resíduos plásticos.</p>
                      <p id="textoResumido" style="display: none;">Confeccionada com a tradição do futebol. Em 2023, a famosa barra no peito da camisa oficial adidas do São Paulo FC </p>
                    <button class="botaoLerMais" onclick="alternarTexto('Produto 2')">Ler Mais</button>
                    </div>
            <button class="adicionar-ao-carrinho" data-nome="Produto 2" data-preco="200.00" data-imagem="img/sp.png">Comprar</button> 
        </div>

        <div class="card" data-name="Produto 3">
            <p><b>Camisa Bragantino 2023    </b></p>

            <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/braga.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/braga2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/braga3.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>

                <p class="font"><b>Preço: 200R$</b></p>
                <div class="desc">
                    <p id="textoCompleto">A confecção do kit foi inspirada em uma mescla de tradição e futuro, com referências à nova era moderna do Red Bull Bragantino, e também em elementos da cidade de Bragança Paulista, onde fica a sede da equipe. O destaque da coleção é a camisa 1, que o Red Bull Bragantino utilizará principalmente em jogos como mandante. O destaque da coleção é a camisa 1, que o Red Bull Bragantino utilizará principalmente em jogos como mandante. A peça, confeccionada em poliéster, mantém a cor branca como principal, mas com a novidade da inclusão dos detalhes em vermelho, que trazem um design mais moderno ao uniforme. </p>
                    <p id="textoResumido" style="display: none;">A confecção do kit foi inspirada em uma mescla de tradição e futuro, com referências à nova era moderna</p>

                    <button class="botaoLerMais" onclick="alternarTexto('Produto 3')">Ler Mais</button>
                    </div>
    <button class="adicionar-ao-carrinho" data-nome="Produto 3" data-preco="200.00" data-imagem="img/braga.png">Comprar<button> 
        </div>
        </div>

        <div class="row">
        <div class="card" data-name="Produto 4">
            <p><b>Camisa Palmeiras 2023</b></p>

            <div id="carouselExampleFade" class="carousel slide carousel-fade">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/porco.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/porco2 (2).png" class="d-block w-100" alt="...">
                </div> 
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
                <p class="font"><b>Preço: 250R$</b></p>
                <div class="desc">
                    <p id="textoCompleto">A camisa traça um paralelo e comemora os dois times históricos do Palmeiras nas décadas de 60 (Primeira Academia) e 70 (Segunda Academia). Para trazer a Terceira Academia, as cores e estampas exaltam o atual momento vivido pelo clube.</p>
                    <p id="textoResumido" style="display: none;">A camisa traça um paralelo e comemora os dois times </p>

                    <button class="botaoLerMais" onclick="alternarTexto('Produto 4')">Ler Mais</button>
                    </div>
                    <button class="adicionar-ao-carrinho" data-nome="Produto 4" data-preco="250.00" data-imagem="img/porco.png">Comprar<button> 
        </div>

        <div class="card" data-name="Produto 5">
            <p><b>Camisa Santos 2023</b></p>

            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/santos.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/santos2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/santos3.png" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>

            
            <p class="font"><b>Preço: 250R$</b></p>
            <div class="desc">
                <p id="textoCompleto">Dos anos 70 até 2000, o Santos excursionou por diversos países asiáticos, e a Camisa do Santos Oficial 3 2023 faz alusão a esse período com grafismos  da cultura japonesa em referência ao continente. A carpa foi escolhida como símbolo do design para representar força, persistência, bravura e sucesso. E a peça é confeccionada 100% poliéster.</p>

                <p id="textoResumido" style="display: none;">Dos anos 70 até 2000, o Santos excursionou por diversos países asiáticos</p>

                <button class="botaoLerMais" onclick="alternarTexto('Produto 5')">Ler Mais</button>
                </div>
                <button class="adicionar-ao-carrinho" data-nome="Produto 5" data-preco="250.00" data-imagem="img/santos2.png">Comprar<button> 
        </div>

        <div class="card" data-name="Produto 6">
            <p><b>Camisa Fluminense 2023</b></p>

            <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/flu.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/flu1.png" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <p class="font"><b>Preço: 250R$</b></p>
            <div class="desc">
                <p id="textoCompleto">A Camisa de Futebol Oficial Masculina Umbro Fluminense 1/2023 ressalta as cores tradicionais do clube (verde, grená e branco), o escudo tricolor e um selo personalizado em homenagem à conquista do mundial de 1952. Confeccionada em poliéster, a peça ainda adiciona conforto em seu visual.</p>

                <p id="textoResumido" style="display: none;">A Camisa de Futebol Oficial Masculina Umbro Fluminense 1/2023 ressalta as cores </p>

                <button class="botaoLerMais" onclick="alternarTexto('Produto 6')">Ler Mais</button>
                </div>
                <button class="adicionar-ao-carrinho" data-nome="Produto 6" data-preco="250.00" data-imagem="img/flu.png">Comprar<button>
            </div>

         </div>
         </div>

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
