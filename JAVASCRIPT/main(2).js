let contador = 0;
const valor = document.getElementById("valor");
const btnIncrementar = document.getElementById("incrementar");
const btnDecrementar = document.getElementById("decrementar");
const btnResetear = document.getElementById("resetear");
btnIncrementar.onclick = function(){
    contador++;
    valor.innerHTML = contador;
}
btnDecrementar.onclick = function(){
    contador--;
    valor.innerHTML = contador;
}
btnResetear.onclick = function(){
    contador = 0;
    valor.innerHTML = contador;
}