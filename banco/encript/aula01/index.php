<?php

$pass = 'MamaMia';

$hash = password_hash($pass, PASSWORD_DEFAULT);//PODE SER PASSWORD_BCRYPT/ a recomendação do php é usar o PASSWORD_DEFAULT porque pode ir até 255 caracteres

echo $hash;

//

if (password_verify($pass, $hash)) {
    echo 'Senha válida!';
} else {
    echo 'Senha inválida.';
}




?>