<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</head>
<body>
     <a href="../Index.html">Vá para o inicio</a>
    <a href="comeco3.html">Teste outra liga carbonica</a>
    <?php
     
        $in = isset($_POST["in(es)"]) ? $_POST["in(es)"] : null ;
        $num= "";
        if ($in !== null) {

            if ($in="cis-" or "Cis-" or "CIS-"){
                $num="é cis";
            }else if($in="trans-" or "Trans-" or "TRANS-"){
                $num="é trans";
            }

        }


    ?>

    <label for="">A isomeria <?php echo $num ?></label>
    


</html>