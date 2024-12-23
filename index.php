<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Login Form</title>
</head>
<body>
	<div class="d-flex justify-content-center align-items-center vh-100">
<div class="mb-3">
	<form class="shadow w-450 p-3"
	      method="POST"
	      action="login-form.html">
  <?php
if
 ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input
    $username = htmlspecialchars($_POST['username']);
    echo "Hello, " . $username;
}
?>
		<button class="btn btn-primary">Logout</button>
</div>
</form>
</div>
</body>
</html>
