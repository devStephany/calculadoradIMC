<?php
session_start();

if (isset($_POST["confirm"])) {
    $sexo = isset($_POST["sexo"]) ? $_POST["sexo"] : null;
    $peso = isset($_POST["peso"]) ? floatval($_POST["peso"]) : 0;
    $altura = isset($_POST["altura"]) ? floatval($_POST["altura"]) : 0;

    if ($peso > 0 && $altura > 0) {
        $imc = $peso / ($altura ** 2);

        if ($sexo === "Feminino") {
            if ($imc < 19.1) {
                $resultado = "Abaixo do peso! Seu IMC equivale a <span>{$imc}</span>";
            } elseif ($imc <= 25.8) {
                $resultado = "Peso normal! Seu IMC equivale a <span>{$imc}</span>";
            } elseif ($imc <= 27.3) {
                $resultado = "Pouco acima do peso! Seu IMC equivale a <span>{$imc}</span>";
            } elseif ($imc <= 32.3) {
                $resultado = "Acima do peso! Seu IMC equivale a <span>{$imc}</span>";
            } else {
                $resultado = "Obesidade! Seu IMC equivale a <span>{$imc}</span>";
            }
        } elseif ($sexo === "Masculino") {
            if ($imc < 20.7) {
                $resultado = "Abaixo do peso! Seu IMC equivale a <span>{$imc}</span>";
            } elseif ($imc <= 26.4) {
                $resultado = "Peso normal! Seu IMC equivale a <span>{$imc}</span>";
            } elseif ($imc <= 27.8) {
                $resultado = "Pouco acima do peso! Seu IMC equivale a <span>{$imc}</span>";
            } elseif ($imc <= 31.1) {
                $resultado = "Acima do peso! Seu IMC equivale a <span>{$imc}</span>";
            } else {
                $resultado = "Obesidade! Seu IMC equivale a <span>{$imc}</span>";
            }
        } else {
            $resultado = "Sexo não informado!";
        }

        $_SESSION["resultado"] = "<section class='resultado'><p class='resultado'>{$resultado}</p></section>";
    } else {
        $_SESSION["resultado"] = "<p class='resultado'>Erro: Altura e peso devem ser válidos!</p>";
    }

    header("Location: ./index.php");
    exit;
}
?>
