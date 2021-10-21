// Função Dark Mode
document.getElementById("dark-mode-switch").onclick = function darkmode(){

    // Acrescenta ou Retira a classe 'dark-mode' do body
    var element = document.body;
    element.classList.toggle("dark-mode");

    // Se o dark mode estiver ativado
    if (element.classList == "dark-mode"){

        // Trocar logo
        var element = document.getElementById("logo");
        element.src = "../img/dark-mode/logo.png";

        // Trocar darkmode icon
        var element = document.getElementById("dark-mode-switch");
        element.src = "../img/dark-mode/darkmode.png";

        // Trocar telefone icon
        var element = document.getElementById("tel-icon");
        element.src = "../img/dark-mode/tel.png";
    }

    // Se o dark mode estiver desativado
    else{
        
        // Trocar logo
        var element = document.getElementById("logo");
        element.src = "../img/logo.png";

        // Trocar darkmode icon
        var element = document.getElementById("dark-mode-switch");
        element.src = "../img/darkmode.png";

        // Trocar telefone icon
        var element = document.getElementById("tel-icon");
        element.src = "../img/tel.png";
    }
};

/* Função Lampada */
document.getElementById("on-off").onclick = function interruptor(){
    var interruptor = document.getElementById("on-off");
    var lampada = document.getElementById("lampada");
    if (interruptor.innerHTML == "Acender"){
        interruptor.innerHTML = "Apagar";
        lampada.src = "../img/projetos/lampada-on.jpg";
    }
    else{
        interruptor.innerHTML = "Acender";
        lampada.src = "../img/projetos/lampada-off.jpg";
    }
};

/* Calculator */
const calcular = document.getElementById('calcular');

function imc() {
    const altura = document.getElementById('altura').value;
    const peso = document.getElementById('peso').value;
    const resultado = document.getElementById('resultado');

    if (altura !== '' && peso !== '') {

        const valorIMC = (peso / (altura * altura)).toFixed(2);

        let classificacao = '';

        if (valorIMC < 18.5) classificacao = 'Abaixo do peso.';
        else if (valorIMC < 25) classificacao = 'Peso ideal.';
        else if (valorIMC < 30) classificacao = 'Acima do peso.';
        else if (valorIMC < 35) classificacao = 'Obesidade Grau I.';
        else if (valorIMC < 40) classificacao = 'Obesidade Grau II.';
        else classificacao = 'Obesidade Grau III.';

        resultado.innerHTML = 'IMC: ' + valorIMC + '<br />';
        resultado.innerHTML += classificacao;
    }
    else resultado.textContent = 'Preencha os campos corretamente.'
}