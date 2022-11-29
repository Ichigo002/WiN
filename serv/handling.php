<?php

// Loads page automatically from url
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
    
    include($fp);
}

// Create ready url and echo that one
// If $where is empty then redirect error
// If $where is 'hp' - shortcut of 'homepage' then redirect homepage
function mk_url($where)
{
    if($where == "hp")
        $where = "homepage";

    $url = substr(get_url(), 0, strpos(get_url(), "type") - 1);

    echo $url."?type=".$where;
    return $url."?type=".$where;
}

// Gets real url of current page
function get_url()
{
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
      
    return $url;
}

?>