<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de IMC</title>
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
        <form id="bmi-form">
            <label for="weight">Peso (kg):</label><br>
            <input type="number" id="weight" name="weight" step="0.1" required><br><br>
            <label for="height">Altura (cm):</label><br>
            <input type="number" id="height" name="height" step="0.1" required><br><br>
            <input type="submit" value="Calcular IMC">
        </form>
        <div id="result" class="result"></div>
    </div>

    <script>
        document.getElementById('bmi-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const weight = parseFloat(document.getElementById('weight').value);
            const height = parseFloat(document.getElementById('height').value) / 100; // Convertir cm a metros

            const bmi = weight / (height * height);
            const roundedBmi = bmi.toFixed(2);

            let status;
            if (bmi < 18.5) {
                status = "Bajo peso";
            } else if (bmi >= 18.5 && bmi < 24.9) {
                status = "Peso normal";
            } else if (bmi >= 25 && bmi < 29.9) {
                status = "Sobrepeso";
            } else {
                status = "Obesidad";
            }

            document.getElementById('result').innerHTML = `
                <h2>Tu IMC es ${roundedBmi}</h2>
                <p>Estado: ${status}</p>
            `;
        });
    </script>
</body>
</html>
