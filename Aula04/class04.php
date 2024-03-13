<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada:</title>
    <link rel="stylesheet" href=laco.css>
</head>

<body>
    <div>
        <form action=# method=get>

        Informe um numero para mostrarmos sua tabuada até 10: <input type=text name=num required>
        <input type=submit name=botao>

        </form>
    </div>

    <div class=resp>
        <?php
            if (@$_REQUEST['botao'])
            {
                $num = $_GET['num'];

                $contador = 1;

                while ($contador <= 10)
                {
                    echo $num . " x " . $contador . " = ". $num * $contador . "<br>";
                    $contador++;
                }
            }
        ?>
    </div>
</body>

</html>