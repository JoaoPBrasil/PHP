<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pares</title>
    <link rel="stylesheet" href=laco.css>
</head>

<body>
    <div>
        <form action=# method=get>

        Números pares de 1 à 5:


        </form>
    </div>

    <div class=resp>
        <?php

                $contador = 0;

                while ($contador <= 5)
                {
                    if ($contador % 2 == 0)
                    {
                        echo $contador . "<br>";
                    }
                    $contador++;
                }
        ?>
    </div>
</body>

</html>
