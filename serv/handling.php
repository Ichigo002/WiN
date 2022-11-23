<?php

function load_file($f)
{
    echo file_get_contents("exp/op_".$f);
}

function load()
{
    if(!isset($_GET['type']))
    return;

    $v = $_GET["type"];

    
}

?>