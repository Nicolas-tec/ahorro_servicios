let numContainer = document.getElementById('num');
let value = 0;
let btnInc = document.querySelector('.inc');
let btnDec = document.querySelector('.dec');
let btnResect = document.querySelector('.reset');

btnInc.addEventListener("click", () => {value++;numContainer.textContent = value});
btnDec.addEventListener("click", () =>  {value--;numContainer.textContent = value});
btnResect.addEventListener("click", () => {value=0;numContainer.textContent = value});
