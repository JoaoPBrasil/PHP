<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quadrado</title>
    <link rel="stylesheet" href=laco.css>
</head>

<body>
    <div>
        <form action=# method=get>

        Números inteiros múltiplos de 4 de 1 até 20:

        </form>
    </div>

    <div class=resp>
        <?php

                $contador = 0;

                while ($contador < 20)
                {

                    if ($contador % 4 == 0)
                        echo $contador . "<br>";
                        $contador++;
                    
                }
        ?>
    </div>
</body>

</html>