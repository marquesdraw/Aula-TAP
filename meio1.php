<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            color: #333;
            margin: 0;
            padding: 20px;
            
        }
        .container {
            background-color: #fff;
            border-radius: 10px;
            padding: 30px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            text-align: center;
        }
        h1 {
            color: #0066cc;
        }
        label{
            font-size: 18px;
            margin-bottom: 20px;
            display: block;
        }
        a {
            display: inline-block;
            margin: 10px;
            padding: 10px 15px;
            text-decoration: none;
            background-color: #0066cc;
            color: white;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        a:hover {
            background-color: #004d99;
        }


    </style>
    
</body>
</html>



<div name="php" id="php">
<?php

$R1 = isset($_POST["R1"]) ? $_POST["R1"] : null;
$R2 = isset($_POST["R2"]) ? $_POST["R2"] : null;
$R3 = isset($_POST["R3"]) ? $_POST["R3"] : null;
$R4 = isset($_POST["R4"]) ? $_POST["R4"] : null;

    if ( $R1 == $R4  ){
        $mensagem = "A isomeria e trans";
    }else if( $R1 != $R4 )
        {
        $mensagem = "A isomeria e cis";
    }



?>
</div>
<body>
    <label for=""><?php echo $mensagem ?></label>
    <a href="../Index.html">Teste outra isomeria geometrica</a>
    <a href="Opcaog.html">Teste outra liga carbonica</a>
</body>
</html>