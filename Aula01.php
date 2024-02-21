<?php

    $nome = "Joaquim";
    echo "Nome: " . $nome . "<br>";

    $idade = 19;
    echo "Idade: " . $idade;

?>

<?php

    $nome = "2";
    $idade = 19;

    echo $nome + $idade;

?>

<form action=# method=post>

    Nome: <input type=text name=nome required> <br>

    Senha: <input type=password name=pass> <br>

    Sexo: <input type=radio name=sexo value=m> Masc
    <input type=radio name=sexo value=f> Fem <br>

    <input type=checkbox name=aceito value=s>
    Termos e condicoes de uso

    <select name=estado>
        <option value=pr> Parana </option>
        <option value=sc> Santa Catarina </option>
    </select>
    <br>

    <textarea cols=20 rows=4> Contrato </textarea>

    <input type=submit value="Salvar">
    <input type=button value="Enviar Formulário">


</form>

<?php

    $senha = $_POST['PASS'];

?>
