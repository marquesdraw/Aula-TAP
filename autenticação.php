<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - SujeitoPizza</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(77, 76, 76);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background: black;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center; 
        }
        h2 {
            text-align: center;
        }
        .sujeitoPizza {
            display: inline-block;
        }
        .sujeito {
            color: white;
        }
        .pizza {
            color: red;
        }
        label {
            font-weight: bold;
            display: block;
            margin: 10px 0 5px;
            color: white; 
            text-align: left; 
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="password"] {
            font-family: Verdana;
        }
        textarea {
            resize: none;
        }
        button {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: rgb(143, 0, 0);
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        button:hover {
            background-color: rgb(255, 0, 0);
        }
        .link-login {
            display: block;
            margin-top: 10px;
            color: white;
            text-decoration: underline;
            font-size: 14px;
            cursor: pointer;
        }
        .link-login:hover {
            color: red;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <h2 class="sujeitoPizza">
            <span class="sujeito">Sujeito</span><span class="pizza">Pizza</span>
        </h2>
    
        <label for="email">Digite seu E-mail:</label>
        <input type="email" id="email" name="email" placeholder="Seu e-mail" required>

        <label for="senha">Digite sua senha:</label>
        <input type="password" id="senha" name="senha" placeholder="Sua senha" required>

        <button type="submit">Fazer Login</button>

        <a href="#" class="link-login">Cadastrar minha Empresa</a>
    </form>
</body>
</html>