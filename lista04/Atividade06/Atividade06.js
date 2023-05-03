function adicionarTexto() {
    var texto = document.getElementById("texto").value;
    var lista = document.getElementById("lista");
    var item = document.createElement("li");
    item.appendChild(document.createTextNode(texto));
    lista.appendChild(item);
    document.getElementById("texto").value = "";
  }