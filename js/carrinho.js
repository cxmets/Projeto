// Função para atualizar o carrinho e calcular o total
function atualizarCarrinho() {
    const carrinhoLista = document.getElementById("carrinho-lista");
    const carrinhoTotal = document.getElementById("carrinho-total");
    carrinhoLista.innerHTML = "";
    let total = 0;

    // Recupere o carrinho do armazenamento local
    const carrinho = JSON.parse(localStorage.getItem("carrinho")) || [];

    carrinho.forEach((produto) => {
        const listItem = document.createElement("li");
        const imagemProduto = document.createElement("img");
        imagemProduto.src = produto.imagem;
        imagemProduto.alt = produto.nome;

        // Redimensione a imagem
        const larguraDesejada = 200;  // Substitua pela largura desejada
        const alturaDesejada = 200;   // Substitua pela altura desejada
        imagemProduto.width = larguraDesejada;
        imagemProduto.height = alturaDesejada;

        listItem.appendChild(imagemProduto);
        listItem.innerHTML += `${produto.nome} - R$ ${produto.preco.toFixed(2)}`;
        carrinhoLista.appendChild(listItem);
        total += produto.preco;
    });

    carrinhoTotal.textContent = `Total: R$ ${total.toFixed(2)}`;
}

// Esvaziar Carrinho
document.getElementById("esvaziar-carrinho").addEventListener("click", () => {
    // Limpe o carrinho no armazenamento local
    localStorage.removeItem("carrinho");
    // Atualize a exibição do carrinho
    atualizarCarrinho();
});

// Chame a função de atualização do carrinho quando a página do carrinho for carregada
atualizarCarrinho();
