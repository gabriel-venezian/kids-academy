<?php
    include("header.php");
?>

<div class="calculatorContainer">
    <div class="calculatorTitle">Calculadora IMC</div>
    <div class="calculatorInput">
        <label>Altura:</label>
        <input type="number" id='altura' autocomplete="off">
    </div>
    <div class="calculatorInput">
        <label>Peso:</label>
        <input type="number" id='peso' autocomplete="off">
    </div>
    <button id='calcular' class="calculatorButton" onclick="imc();">Calcular</button>
    <div class="calculatorResult" id='resultado'></div>
</div>

<?php
    include("footer.php");
?>