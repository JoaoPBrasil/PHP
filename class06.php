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

        Números de 1 à 5 e seus quadrados:

        </form>
    </div>

    <div class=resp>
        <?php

                $contador = 0;

                while ($contador <= 5)
                {

                        echo "Número: " . $contador . " | " . " Quadrado: ". $contador * $contador . "<br>";
                        $contador++;
                    
                }
        ?>
    </div>
</body>

</html>