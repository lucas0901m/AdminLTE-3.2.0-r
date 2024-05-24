<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de IMC 2022</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .result {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculadora de IMC</h1>
        <form method="post" action="">
            <label for="weight">Peso (kg):</label><br>
            <input type="number" id="weight" name="weight" step="0.1" required><br><br>
            <label for="height">Altura (cm):</label><br>
            <input type="number" id="height" name="height" step="0.1" required><br><br>
            <input type="submit" value="Calcular IMC">
        </form>
        <div id="result" class="result">
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $weight = floatval($_POST['weight']);
                    $height = floatval($_POST['height']) / 100; // Convertir cm a metros

                    $bmi = $weight / ($height * $height);
                    $roundedBmi = round($bmi, 2);

                    if ($bmi < 18.5) {
                        $status = "Bajo peso";
                    } elseif ($bmi >= 18.5 && $bmi < 24.9) {
                        $status = "Peso normal";
                    } elseif ($bmi >= 25 && $bmi < 29.9) {
                        $status = "Sobrepeso";
                    } else {
                        $status = "Obesidad";
                    }

                    echo "<h2>Tu IMC es $roundedBmi</h2>";
                    echo "<p>Estado: $status</p>";
                }
            ?>
        </div>
    </div>
</body>
</html>
