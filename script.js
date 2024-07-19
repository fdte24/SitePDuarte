
/*relogio contador
*/
function iniciarContador() {
    const contadorElemento = document.getElementById('contador');
    const dataFinal = new Date();
    dataFinal.setMonth(dataFinal.getMonth() + 1);

    function atualizarContador() {
        const agora = new Date().getTime();
        const distancia = dataFinal - agora;

        const dias = Math.floor(distancia / (1000 * 60 * 60 * 24));
        const horas = Math.floor((distancia % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutos = Math.floor((distancia % (1000 * 60 * 60)) / (1000 * 60));

        contadorElemento.innerHTML = `${dias} Dias<br>${horas} Horas<br>${minutos} Minutos`;

        if (distancia < 0) {
            clearInterval(intervalo);
            contadorElemento.innerHTML = "EXPIROU";
        }
    }

    atualizarContador();
    const intervalo = setInterval(atualizarContador, 1000); // Atualizar a cada segundo
}

document.addEventListener('DOMContentLoaded', iniciarContador);// JavaScript Document