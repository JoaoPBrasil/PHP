<?php
    $con = mysqli_connect('localhost:4444', 'root', '');
    $database = mysqli_select_db($con, 'aula_php');

    if (!$con || !$database) echo mysqli_error($con);

?>