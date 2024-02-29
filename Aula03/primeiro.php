<html>
<head>
<link rel=stylesheet type=text/css href=estilo.css>
</head>
<body>

<div>
    <form action=# method=POST>
        Número 1: <input type=text name=num required> <br>
        Número 2: <input type=text name=num2 required><br>

        <input type=radio name=op value=S> Somar 
        <input type=radio name=op value=D> Diminuir 
        <input type=radio name=op value=M> Multiplicar 
        <input type=radio name=op value=X> Dividir

        <input type=submit name=botao value=Calcular>

    </form>

<?php

$valor = (@$_POST['num']);
$valor2 = (@$_POST['num2']);
$opcao = (@$_POST['op']);


if ($opcao == 'S')
{
    echo "A soma é igual à: ". $valor + $valor2;
}
elseif ($opcao == 'D')
{
    echo "A Subtração é igual à: ". $valor - $valor2;
}
elseif ($opcao == 'M')
{
    echo "A Multiplicação é igual à: ". $valor * $valor2;
}
elseif ($opcao == 'X')
{
    echo "A Subtração é igual à: ". $valor / $valor2;
}

?>
</div>
</body>
</html>