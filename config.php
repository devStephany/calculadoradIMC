<?php 

session_start();

$altura = $_POST['altura'];
$peso = $_POST['peso'];
$sexo = $_POST['sexo'];
$resultado;
$imc = $peso / ($altura * $altura);

if (isset($_POST['confirm'])) {
    
    if ($altura > 0 && $peso > 0 && isset($sexo)) {

        //homens
        if ($imc < 20.7) {
            $resultado = "Abaixo do peso";

        } elseif ($imc >= 20.7 && $imc < 26.4) {
            $resultado = "Peso normal";

        } elseif ($imc >= 26.4 && $imc < 27.8) {
            $resultado = "Sobrepeso";

        } elseif ($imc >= 27.8 && $imc < 31.1) {
            $resultado = "Obesidade grau I";

        } else {
            $resultado = "Obesidade grau II ou maior";
        }

        //mulheres
        if ($imc < 19.1) {
            $resultado = "Abaixo do peso";

        } elseif ($imc >= 19.1 && $imc < 25.8) {
            $resultado = "Peso normal";

        } elseif ($imc >= 25.8 && $imc < 27.3) {
            $resultado = "Sobrepeso";

        } elseif ($imc >= 27.3 && $imc < 32.3) {
            $resultado = "Obesidade grau I";

        } else {
            $resultado = "Obesidade grau II ou maior";
        }

        $imc = round($imc);

        $_SESSION["resultado"] = "<section class='resultado'><p class='resultado'>{$resultado} seu IMC equivale a <span>{$imc}</span></p></section>";


    }

    header("Location: ./index.php");
}


?>