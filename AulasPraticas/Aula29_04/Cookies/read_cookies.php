<?php

if(isset($_COOKIE["key"]))
{
    echo $_COOKIE["key"];
}
else
{
    echo "This cookie doesn't exist";

}

$productsDecode = json_decode($_COOKIE["products"]);