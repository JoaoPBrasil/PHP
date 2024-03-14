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

        Informe o menor valor: <input type=text name=num required>
        Informe o maior Número: <input type=text name=num2 required>
        <input type=submit name=botao>

        </form>
    </div>

    <div class=resp>
        <?php
            if (@$_REQUEST['botao'])
            {
                $num = $_GET['num'];
                $num2 = $_GET['num2'];

                $contador = $num;

                while ($num <= $num2)
                {
                    if ($contador % 2 == 0)
                    {
                        echo $contador . "<br>";
                    }
                    else
                    {
                        echo "Os números são iguais!";
                    }
                    $num++;
                    $contador++;
                }
            }
        ?>
    </div>
</body>

</html>