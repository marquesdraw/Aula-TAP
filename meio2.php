<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #eef2f3;
            font-family: 'Segoe UI', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 30px;
        }
        .caixa {
            max-width: 600px;
            margin: auto;
            background-color: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            text-align: center;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        p {
            font-size: 20px;
            color: #444;
            margin-bottom: 30px;
        }
        a {
          font-size: 20px;
            margin: 10px;
            padding: 12px 20px;
            background-color: #007bff;
            color: white;
            border-radius: 6px;
            text-decoration: none;
            transition: background 0.3s ease;
        }
        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    
</body>
</html>

<div name="php2" id="php2">
<?php
    
    $L1 = isset($_POST["L1"]) ? $_POST["L1"] : null;
    $L2 = isset($_POST["L2"]) ? $_POST["L2"] : null;
    $L3 = isset($_POST["L3"]) ? $_POST["L3"] : null;    
    $L4 = isset($_POST["L4"]) ? $_POST["L4"] : null;

    $Ligantes = [$l1, $L2, $L3,$L4];
    if (count(array_unique($Ligantes)) === 4){
        $carbonoEquiral= "O carbono é quiral, pois possui quatro ligantes diferentes.";
    }else{
        $carbonoEquiral= "O carbono não é quiral, pois não possui quatro ligantes diferentes.";
    }
    ?>
    </div>
   <body>
    <H1>Resultado</H1>
    <p><?php echo $carbonoEquiral?></p>
    <a href="../Index.html">Teste outra isomeria geometrica</a>
    <a href="Ver.html">Teste outra liga carbonica</a>
  </body>
</html>