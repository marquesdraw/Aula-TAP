<!DOCTYPE html>
<html>
<head>
    <title>Conversor de Celsius para Fahrenheit</title>
</head>
<body>
    <form method="post">
        <label for="celsius">Digite a temperatura em Celsius:</label>
        <input type="number" id="celsius" name="celsius" step="0.1" required>
        <button type="submit">Converter</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $celsius = $_POST["celsius"];
        $fahrenheit = ($celsius * 9/5) + 32; 
        echo "<h3>$celsius°C é igual a $fahrenheit°F</h3>";
    }
    ?>
</body>
</html>