<!DOCTYPE html>
<html>
<head>
    <title>Tabuada</title>
</head>
<body>
    <form method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Gerar Tabuada</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        echo "<h3>Tabuada do $numero</h3>";
        echo "<ul>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<li>$numero x $i = $resultado</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>