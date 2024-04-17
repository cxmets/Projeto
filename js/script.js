
    // Atualizar o carrinho na página do carrinho
    const carrinhoLista = document.getElementById("carrinho-lista");
    const carrinhoTotal = document.getElementById("carrinho-total");

    function atualizarCarrinho() {
        carrinhoLista.innerHTML = "";
        let total = 0;
        carrinho.forEach((produto) => {
            const listItem = document.createElement("li");
            listItem.innerHTML = `<img src="${produto.imagem}" alt="${produto.nome}"> ${produto.nome} - R$ ${produto.preco.toFixed(2)}`;
            carrinhoLista.appendChild(listItem);
            total += produto.preco;
        });
        carrinhoTotal.textContent = `R$ ${total.toFixed(2)}`;
    }

    // Chamar a função de atualização do carrinho quando a página de carrinho for carregada
    atualizarCarrinho();

