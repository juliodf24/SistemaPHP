
const value = document.getElementById('value');
const plusButton = document.getElementById('plus');
const minusButton = document.getElementById('minus');

let count = 0;
let intervalId = 0;

function updateValue() {
    value.textContent = count;
}

plusButton.addEventListener('mousedown', () => {
    intervalId = setInterval(() => {
        if(count < 15){
            count += 1;
        }
        updateValue();
    }, 300);
});
function adicionar(){
        if(count < 15){
            count += 1;
        }
        updateValue();
}
function remover(){
        if (count > 0) { // Verifica se o valor é maior que 0 antes de decrementar
            count -= 1;
            updateValue();
        } else {
            clearInterval(intervalId); // Para o intervalo se o valor for 0
        }
}

minusButton.addEventListener('mousedown', () => {
    intervalId = setInterval(() => {
        if (count > 0) { // Verifica se o valor é maior que 0 antes de decrementar
            count -= 1;
            updateValue();
        } else {
            clearInterval(intervalId); // Para o intervalo se o valor for 0
        }
    }, 300);
});

document.addEventListener('mouseup', () => clearInterval(intervalId));

// Atualizar o valor inicial
updateValue();








