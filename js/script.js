/* JAVASCRIPT AUDIO .mp3 FILE SIDEBAR */


/* relogio inicio */
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
    const intervalo = setInterval(atualizarContador, 1000 * 60); // Atualizar a cada minuto
}

document.addEventListener('DOMContentLoaded', iniciarContador);
/* relogio fim */



document.addEventListener('DOMContentLoaded', function() {
    var sidebar = document.getElementById('sidebar');
    var audio = document.getElementById('hover-audio');
    var enableAudioButton = document.getElementById('enable-audio');
    var audioEnabled = false;

    enableAudioButton.addEventListener('click', function() {
        audioEnabled = true;
        enableAudioButton.style.display = 'none'; // esconder botão após ativação 
    });

    sidebar.addEventListener('mouseover', function() {
        if (audioEnabled) {
            audio.play().catch(function(error) {
                console.error('Failed to play audio:', error);
            });
        }
    });

    sidebar.addEventListener('mouseout', function() {
        if (audioEnabled) {
            audio.pause();
            audio.currentTime = 0; // Reset audio - para o início
        }
    });
});
