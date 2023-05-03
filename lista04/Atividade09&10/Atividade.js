function adicionarElemento() {

	var elemento = document.getElementById("elemento").value;

	
	var novoItem = document.createElement("li");
	novoItem.innerText = elemento;

	
	var lista = document.getElementById("listaElementos");
	lista.appendChild(novoItem);


	document.getElementById("elemento").value = "";
}
function excluirElemento(event) {
    //Não compreendi muito bem 
    const item = event.target.parentNode;
    const index = Array.from(item.parentNode.children).indexOf(item);
    listaElementos.splice(index, 1);
    item.remove();
}