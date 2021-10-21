<?php
    include("header.php");
?>
    <div>
        <img src="../img/projetos/semaforo/off.png" id="trafficLightImg" >
    </div>
    <div id="trafficLightButtons">
        <button id='red' class="trafficLightButton">Vermelho</button>
        <button id='yellow' class="trafficLightButton">Amarelo</button>
        <button id='green' class="trafficLightButton">Verde</button>
        <button id='automatic' class="trafficLightButton">Automático</button>
    </div>

<script> 
    /* Traffic Light */
    const img = document.getElementById("trafficLightImg");
    const buttons = document.getElementById("trafficLightButtons");
    let colorIndex = 0;
    let intervalId = null;

    const trafficLight = (event) => {
        stopAutomatic();
        turnOn[event.target.id]();
    }

    const nextIndex = () => colorIndex = colorIndex < 2 ? ++colorIndex : 0;

    const changeColor = () => {
        const colors = ["red", "yellow", "green"];
        const color = colors[colorIndex];
        turnOn[color]();
        nextIndex();
    }

    const stopAutomatic = () => {
        clearInterval(intervalId);
    }

    const turnOn = {
        "red":        () => img.src = "../img/projetos/semaforo/red.png",
        "green":      () => img.src = "../img/projetos/semaforo/green.png",
        "yellow":     () => img.src = "../img/projetos/semaforo/yellow.png",
        "automatic":  () => intervalId = setInterval(changeColor, 2000)
    }

    buttons.addEventListener("click", trafficLight);
</script>
<?php
    include("footer.php");
?>