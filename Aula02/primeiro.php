<html>
<head>
<link rel=stylesheet type=text/css href=estilo.css>
</head>
<body>

<div>
    <form action=# method=POST>
        Número 1: <input type=text name=num required>
        <input type=submit name=botao value=
        CalcularDobro>
        Número 2: <input type=text name=num2>
        <input type=submit name=oatob value=
        CalcularSoma>
    </form>

<?php

if (@$_REQUEST['botao'])
{
    $valor = $_POST['num'];

    echo "O dobro é: ". $valor * 2;
}

if (@$_REQUEST['oatob'])
{
    $valor1 = $_POST['num'];
    $valor2 = $_POST['num2'];

    $valor3 = $valor1 + $valor2;

    echo "A soma é: ". $valor3;
}

?>
</div>
</body>
</html>