<?php

function rashed ()
{
    echo "hello world" ."<br>";
}
rashed();

function greet ($name="Guest"){
    echo "Hello " . $name ."<br>";
}
greet();
greet("Rashed");

echo "hello" . $_REQUEST["username"];
?>