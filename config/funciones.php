<?php
header('Access-Control-Allow-Origin: *');

function debuguear($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    exit;
}

// function obtenerJsonID($datos){

//     echo json_encode($datos);
// }

// obtenerJsonID($_GET);
