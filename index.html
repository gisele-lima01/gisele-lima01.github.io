<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VigiaSaúde Nordeste</title>
  <link rel="stylesheet" href="Gi.css">
  <link rel="icon" href="imagens/Logosite.png" type="imagens/png">
  <script defer src="Gi.js"></script>
</head>
<body>
  <header>
    <img src="imagens/Logotopo.webp" alt="Logo VigiaSaúde Nordeste" class="logo">
    <h1>VigiaSaúde Nordeste</h1>
    <nav>
      <a href="#noticias">Notícias</a>
      <a href="#rumores">Rumores</a>
      <a href="#sobre">Sobre</a>
    </nav>
  </header>

  <main>
    <section id="filtros">
      <label for="filtro">Filtrar por tipo de doença:</label>
      <select id="filtro" onchange="filtrarDoencas()">
        <option value="todas">Todas</option>
        <option value="dengue">Dengue</option>
        <option value="gripe">Gripe</option>
        <option value="covid">COVID-19</option>
        <option value="oropouche">Febre do Oropouche</option>
      </select>
    </section>

    <!-- Área para exibir notícias da API -->
<section id="noticias-api">
  <h2>🌐 Notícias Externas Relacionadas à Saúde</h2>
  <div id="noticias-externas"></div>
</section>

    <section id="rumores">
      <h2>⚠️ Rumores Populares</h2>
      <ul>
        <li data-doenca="dengue">Relatos no Instagram sobre aumento de casos de dengue em bairros do Recife — Não confirmado</li>
        <li data-doenca="gripe">Posts no Twitter indicam “virose forte” em escolas do interior — Em investigação</li>
        <li data-doenca="covid">Boatos no WhatsApp sobre COVID-19 em universidades — Não confirmado</li>
      </ul>
    </section>

    <section id="sobre">
      <h2>ℹ Sobre o projeto</h2>
      <p>Este portal acadêmico foi desenvolvido para monitoramento de notícias e rumores relacionados à saúde pública em Pernambuco e estados vizinhos, inspirado no HealthMap. Projeto acadêmico - Faculdade de Medicina.</p>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 VigiaSaúde Nordeste | Desenvolvido para fins acadêmicos</p>
  </footer>

    <!-- Assistente Viton -->
<div id="assistente-container">
  <button id="abrir-assistente">
    ❓ Ajuda
  </button>

  <div id="assistente-box" class="fechado">
    <div class="assistente-header">
      <img src="imagens/viton.png" alt="Mascote Viton" class="viton-avatar">
      <h4>Oi! Eu sou o Viton 🐾</h4>
    </div>
    <p>Precisa de ajuda? Escolha uma opção abaixo:</p>
    <ul>
      <li><a href="#filtros">🔍 Como usar filtros</a></li>
      <li><a href="#rumores">⚠️ Sobre rumores</a></li>
      <li><a href="#sobre">ℹ Informações do site</a></li>
    </ul>
    


<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function () {
  const apiKey = "40c0547765c9428f8fd1f11429ebb417";
  const url = `https://newsapi.org/v2/everything?q=saúde-pernambuco&language=pt&sortBy=publishedAt&apiKey=${apiKey}`;

  $.get(url, function (data) {
    if (data.articles && data.articles.length > 0) {
      const container = $("#noticias-externas");
      data.articles.forEach(article => {
         console.log(data);
        const content = article.content || "";
        if (content.toLowerCase().includes("saúde")) {
          const card = `
            <div class="card">
              <img src="${article.urlToImage || 'imagens/placeholder.jpg'}" alt="Imagem da notícia">
              <div class="conteudo">
                <h3>${article.title}</h3>
                <p>${article.description || 'Sem descrição disponível.'}</p>
                <a href="${article.url}" target="_blank">Leia mais</a>
              </div>
            </div>`;
          container.append(card);
        }
      });
    } else {
      $("#noticias-externas").html("<p>Nenhuma notícia encontrada.</p>");
    }
  }).fail(function () {
    $("#noticias-externas").html("<p>Erro ao carregar notícias da API.</p>");
  });
});
</script>

</body>
</html>
