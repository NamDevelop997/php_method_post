<?php

function show_data($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = $_POST["userName"];
    $pass = $_POST["pass"];

    echo "Hello {$userName} ---- {$pass}";
}
