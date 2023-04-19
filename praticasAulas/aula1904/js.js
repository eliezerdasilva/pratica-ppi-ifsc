function sorteiaNumero(){
    let numero = Math.random();
    let pHTML =  document.createElement("p");
    pHTML.innerHTML=numero;
    let divNumero=document.getElementById("numeros");
    divNumero.appendChild(pHTML);
}
function mudaCor(){
let = ps=document.getElementsByTagName("p");
//random color;
for(let i = 0 ; i<ps.length;i++){
    ps[i].style.backgroundColor=sortColorhex();

}
}
function sortColor(){
    color = "#"+Math.floor(Math.random()*16777215);
    return color;
}
function sortColorhex(){
    let digiteHexa='0123456789ABCDEF';
    let color ="#";
    for(let i=0; i<6;i++){
        color+=digiteHexa[Math.floor(Math.random()*16)];
    }
    return color;
}
