<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>relatório</title>

    <style>
        h1 {
            text-align: center;
            color: white;
            font-family: 'Roboto', sans-serif;
            font-size: 50px;
        }

        body {
            background-image: linear-gradient(25deg, black, purple);
            display: block;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        input {
            align-items: center;
            background-color: transparent;
            color: white;
            border: none;
            margin-top: 2rem;
            border-bottom: 2px solid white;
            border-radius: 5px;
            cursor: pointer;
            font-size: 20px;
            width: 20rem;
            position: relative;
            left: 40%;
        }

        input:hover {
            background-color: #553880;
            color: white;
            transition: 0.5s;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    $usuario = isset($_SESSION["usuario"]) ? $_SESSION["usuario"] : "Usuário não definido";
    
    /*if (!isset($_SESSION["usuario"])) {
        header("Location: login.php");
        exit();
    } else {
        echo "<h1>Bem-vindo, $usuario</h1>";
    }*/
    ?>
    <h1>Relatório - <?php echo "Usuário: " . $usuario . "<br>"; ?></h1>
    <h1>Bem-vindo, aqui está o relatório de todos os usuários: </h1>

    <div style="background-color: #fff; width: 50%; margin: 0 auto; padding: 10px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.2);">

        <?php
        include "config.php";
        $sql = "SELECT usuario, email FROM usuarios";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "Usuário: " . $row["usuario"] . "<br>";
                echo "Email: " . $row["email"] . "<br>";
                echo "<br>";
                echo "<hr>";
                echo "<br>";
            }
        } else {
            echo "Nenhum registro encontrado";
        }
        ?>


    </div>
    <div>
        <a href="login.php"><input type="button" value="Voltar"></a>
    </div>



</body>

</html>
