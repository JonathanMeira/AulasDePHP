<?php

setcookie("key", "info", time() + 3600);

$productsList = [
    "white cap",
    "red hat",
    "black t-shirt",
    "gray glasses"
];

$productsList = json_encode($productsList);

setcookie("products", $productsList);