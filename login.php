<?php
require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>Register - MMS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel = "stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="form-signin">
        <div class="logo">B</div>
        <h2 class="mb-4">Please sign in</h2>
        <form action="login.php" method="POST">
            <input
    type="text"
    name="username"
    class="form-control"
    placeholder="Userame"
    required 
    >
    <input
    type="password"
    name="password"
    class="form-control"
    placeholder="Password"
    required 
    >
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox"
            name="remember">
            Remember me
</label>
</div>
<button
class="w-100 btn btn-lg btn-primary"
type="submit">
Sign up
</button>

<p class="mt-3">
   Dont have an account?
    <a href="index.php">Sign in</a>
</p>

</form>
</main>
</body>
</html>