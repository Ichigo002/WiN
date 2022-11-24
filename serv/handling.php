<?php

// Loads page from url
function load()
{
    if(!isset($_GET['type']))
        load_to("homepage");
    else
        load_to($_GET["type"]);
}

// Loads page by name
function load_to($v)
{
    $fp = "subpages/".$v.".php";

    if(!file_exists($fp))
        $fp = "subpages/error404.php";

    echo file_get_contents($fp);
}

?>