<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Login</title>
    <style>
        body {
            background-image: linear-gradient(25deg, black, purple);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: white;
            width: 17%;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 5px 5px 10px gray;
        }

        label {
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
        }

        input {
            width: 15rem;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #7952b3;
            outline: none;
        }

        a {
            text-decoration: none;
            color: #7952b3;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        #button {
            align-items: center;
            background-color: #7952b3;
            color: white;
            border: none;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
        }

        .divInput {
            display: grid;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <form action="login.php" method="POST">
        <div class="divInput">
            <label for="Email">Email:</label>
            <input type="email" name="email" id="email" required><br>
            <label for="Senha">Senha:</label>
            <input type="password" name="senha" id="senha" required><br>
        </div>


        <input id="button" type="submit" name="login" value="Login">
        <a href="cadastrar.php">
            <input id="button" type="button" value="Cadastrar">
        </a>
        <?php
        include "config.php";

        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $senha = md5($_POST['senha']);
            $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                header("Location: relatorio.php");
            } else {
                header("Location: cadastrar.php");
            }
        }
        ?>
    </form>
</body>

</html>