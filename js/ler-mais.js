
function alternarTexto(produtoId) {
  const textoCompleto = document.querySelector(`[data-name="${produtoId}"] #textoCompleto`);
  const textoResumido = document.querySelector(`[data-name="${produtoId}"] #textoResumido`);
  const botaoLerMais = document.querySelector(`[data-name="${produtoId}"] .botaoLerMais`);

  if (textoCompleto.style.display === "none") {
    textoCompleto.style.display = "block";
    textoResumido.style.display = "none";
    botaoLerMais.textContent = "Ler Menos";
  } else {
    textoCompleto.style.display = "none";
    textoResumido.style.display = "block";
    botaoLerMais.textContent = "Ler Mais";
  }
}

// Adicione o seguinte código para iniciar com "Ler Menos" visível para ambos os produtos
alternarTexto("Produto 1");
alternarTexto("Produto 2");
alternarTexto("Produto 3");
alternarTexto("Produto 4");
alternarTexto("Produto 5");
alternarTexto("Produto 6");
alternarTexto("Produto 7");
alternarTexto("Produto 8");
alternarTexto("Produto 9");
