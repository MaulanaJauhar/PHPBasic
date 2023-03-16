<?php 

    function dd($value)
    {
        echo "<pre>";
        die(var_dump($value));
        echo "</pre>";
    }
    function urls($value)
    {
        return $_SERVER['REQUEST_URI'] === $value;
    }