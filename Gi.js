function filtrarDoencas() {
  const filtro = document.getElementById("filtro").value;
  const cards = document.querySelectorAll(".card");
  const rumores = document.querySelectorAll("#rumores li");

  cards.forEach(card => {
    card.style.display = (filtro === "todas" || card.dataset.doenca === filtro) ? "block" : "none";
  });

  rumores.forEach(item => {
    item.style.display = (filtro === "todas" || item.dataset.doenca === filtro) ? "block" : "none";
  });
}

// Abrir e fechar assistente
const abrirAssistente = document.getElementById("abrir-assistente");
const fecharAssistente = document.getElementById("fechar-assistente");
const assistenteBox = document.getElementById("assistente-box");

abrirAssistente.addEventListener("click", () => {
  assistenteBox.classList.add("aberto");
});

fecharAssistente.addEventListener("click", () => {
  assistenteBox.classList.remove("aberto");
});

/*document.getElementById("enviar-duvida").addEventListener("click", async () => {
  const pergunta = document.getElementById("duvida-doenca").value.trim();
  const respostaDiv = document.getElementById("resposta-assistente");
  if (!pergunta) {
    respostaDiv.innerHTML = "Por favor, digite uma dúvida.";
    return;
  }

  respostaDiv.innerHTML = "⏳ Processando sua dúvida...";

  try {
    const response = await fetch("chat2.php", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ question: pergunta })
    });

    const result = await response.json();
    respostaDiv.innerHTML = result?.answer || "❌ Não foi possível obter uma resposta.";
  } catch (error) {
    respostaDiv.innerHTML = "❌ Erro ao se comunicar com o assistente.";
    console.error(error);
  }
});
*/