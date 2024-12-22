<?php

if
 ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize user input

    $username = htmlspecialchars($_POST['username']);

    echo "Hello, " . $username;

}

?>