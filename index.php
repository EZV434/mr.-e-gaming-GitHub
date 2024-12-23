<?php

if
 ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize user input

    $username = htmlspecialchars($_POST['username']);

    echo "Hello, " . $username;

}

?>
<!DOCTYPE html>
<html>
 <head>
  <title>Welcome  Page</title>
 </head>
 <body>
  
 </body>
</html>
