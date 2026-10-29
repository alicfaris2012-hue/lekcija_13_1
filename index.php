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
<h2 class="mb-4">Register</h2>
<form action="index.php" method="POST">
    <input
    type="text"
    name="name"
    class="form-control"
    placeholder="Name"
    required 
    >

    <input
    type="text"
    name="username"
    class="form-control"
    placeholder="Userame"
    required 
    >

    <input
    type="email"
    name="email"
    class="form-control"
    placeholder="Email"
    required 
    >

    <input
    type="password"
    name="password"
    class="form-control"
    placeholder="Password"
    required 
    >

    <input
    type="password"
    name="confirm-password"
    class="form-control"
    placeholder="Confirm Password"
    required 
    >

    <div class="checkbox mb-3">
        <label>
            <input type="checkpoint"
            name="remember">
            Remember me
</label>
</div>

<button
class="w-100 btn btn-lg btn-primary"
type="submit"
name="submit">
Sign up
</button>

<p class="mt-3">
    Already have an account?
    <a href="login.php">Sign in</a>
</p>


</form>

</main>

</body>
</html>