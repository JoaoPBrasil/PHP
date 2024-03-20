<?php
    include('conexao.php');

    if (@$_REQUEST['Enviar'])
        {
            $nome = $_POST['nome'];
            $login = $_POST['login'];
            $senha = md5($_POST['senha']);

            $query = "INSERT INTO user(nome, login, senha) Values ('$nome', '$login', '$senha')";
            $result = mysqli_query($con, $query);

            if (!$result) echo mysqli_error($con); 
        }

?>

<form action=# method=post>

    Nome: <input type=text name=nome required> <br>
    Login: <input type=text name=login required> <br>
    Senha: <input type=password name=senha required> <br>

    <input type=submit name=Enviar value="Enviar">

</form>


