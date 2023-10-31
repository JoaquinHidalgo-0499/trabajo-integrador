<?php
// function estaAutenticado()
// {
//     session_start();
//     if (!$_SESSION['login']) {
//         header('Location: /');
//     }
// }

function debuguear($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    exit;
}
