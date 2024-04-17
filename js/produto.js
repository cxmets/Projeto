document.querySelectorAll(".adicionar-ao-carrinho").forEach((botao) => {
    botao.addEventListener("click", () => {
        const nome = botao.getAttribute("data-nome");
        const preco = parseFloat(botao.getAttribute("data-preco"));
        const imagem = botao.getAttribute("data-imagem");

        const produto = {
            nome: nome,
            preco: preco,
            imagem: imagem
        };

        // Recupere o carrinho do armazenamento local
        const carrinho = JSON.parse(localStorage.getItem("carrinho")) || [];
        // Adicione o produto ao carrinho
        carrinho.push(produto);
        // Armazene o carrinho atualizado no armazenamento local
        localStorage.setItem("carrinho", JSON.stringify(carrinho));

        // Redirecione para a página do carrinho automaticamente
        window.location.href = "carrinho.html";
    });
});
