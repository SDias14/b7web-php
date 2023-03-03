<?php

$pass = 'MamaMia';

$hash = password_hash($pass, PASSWORD_DEFAULT);

echo $hash;

//

if (password_verify($pass, $hash)) {
    echo 'Senha válida!';
} else {
    echo 'Senha inválida.';
}




?>