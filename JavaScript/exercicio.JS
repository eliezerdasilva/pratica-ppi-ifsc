function contarAte(n){
    for (let i = 0 ; i <=n;i++){
        p = document.createElement("p");
        p.innerHTML=i;
        document.body.appendChild(p);
    }
}
function ePar(n){
    pHTML = document.createElement("p");
    if(n%2==0){
        pHTML.innerHTML=n+"PAR";
    }else{
        pHTML.innerHTML=n+"impar";
    }
    document.body.appendChild(pHTML);
}
