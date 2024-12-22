<?php

    $email = $_POST['email'];

    $senha = $_POST['senha'];

    echo "<p>O seu e-mail é: $email, e a sua senha é: $senha</p>";

    var_dump($_POST);
    echo "console.log(" . json_encode(print_r($_POST, true)) . ");";