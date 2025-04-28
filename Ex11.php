<!DOCTYPE html>
<html>
<head>
    <title>Números Pares</title>
</head>
<body>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <?php
            $contador = 0;
            for ($i = 2; $i <= 100; $i += 2) {
                echo "<td>$i</td>";
                $contador++;
                if ($contador % 10 == 0) { 
                    echo "</tr><tr>";
                }
            }
            ?>
        </tr>
    </table>
</body>
</html>