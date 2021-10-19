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

// Função Lampada

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