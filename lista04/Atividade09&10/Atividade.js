var lista_elementos= [];
function adicionarElemento() {
	var textInput = document.getElementById("elemento").value;
	lista_elementos.push(textInput);
	listaElementos(listaElementos);
}

function listaElementos(array){
	var lista = document.getElementById("listaElementos");
	lista.innerHTML="";
	for (let i =0 ; i<lista_elementos.length;i++){
		let novoItemLi = document.createElement("li");
		let novoP=document.createElement("p");
		let novoButton=document.createElement("button");
		novoItemLi.appendChild(novoP);
		novoItemLi.appendChild(novoButton);
		novoP.innerHTML=lista_elementos[i];
		novoButton.innerHTML="excluir"
		novoItemLi.id=i;
		lista.appendChild(novoItemLi);
	}

}
function excluirElemento(elemento) {

    //Não compreendi muito bem 
    /* const item = event.target.parentNode;
    const index = Array.from(item.parentNode.children).indexOf(item);
    listaElementos.splice(index, 1);
    item.remove();
	*/


}