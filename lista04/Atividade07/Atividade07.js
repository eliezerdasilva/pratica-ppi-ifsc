function Posicao() {
    var botao = document.getElementById("botao");
    var altura = window.innerHeight - botao.offsetHeight;
    var largura = window.innerWidth - botao.offsetWidth;
    var novaAltura = Math.floor(Math.random() * altura);
    var novaLargura = Math.floor(Math.random() * largura);
    botao.style.top = novaAltura + "px";
    botao.style.left = novaLargura + "px";
  }