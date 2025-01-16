<?php 
    session_start();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IMC</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
        <h1>Calcule seu IMC</h1>
    </header>

    <section>
        <form action="./config.php" method="post">

            <div class="forinputs">
                <label for="">Sexo</label>
                
                <div class="insidesexo">
                    <p>Feminino</p>
                    <input type="radio" name="sexo" value="Feminino" required>

                    <p>Masculino</p>
                    <input type="radio" name="sexo" value="Masculino" required>
                    
                </div>
            </div>

            <div class="forinputs">
                <label for="">Peso</label>
                <input type="text" placeholder="Escreva seu peso" name="peso" required>
            </div>
            
            <div class="forinputs">
                <label for="">Altura</label>
                <input type="text" placeholder="Escreva sua altura" name="altura" required>
            </div>

            <input type="submit" name="confirm" id="submit">

        </form>


    </section>

    <?php 
    
    if (isset($_SESSION["resultado"])){
        echo $_SESSION["resultado"];
        unset($_SESSION["resultado"]);
    }

    ?>

    
    
</body>
</html>

