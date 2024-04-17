    // Array para manter o carrinho de compras
    const carrinho = [];

    // Adicionar ao carrinho
    document.getElementById("adicionar-ao-carrinho").addEventListener("click", () => {
        const produto = {
            nome: "Nome do Produto",
            preco: 10.00,
            imagem: "img/card.png"
        };
        carrinho.push(produto);
        alert("Produto adicionado ao carrinho.");
    });
