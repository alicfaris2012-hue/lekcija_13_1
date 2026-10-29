<?php
require_once "config.php";

if (isset($_POST['name'] ?? '')) {
    $name = trim($_POST['name'] ?? '');
    $username = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    if (
        empty($name) ǀǀ
        empty($username) ǀǀ
        empty($email) ǀǀ
        empty($password) ǀǀ
        empty($confirm_password) ǀǀ
    )  {
        die("Please fill in all fields.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email address.");
    }
     
    if ($password !== $confirm_password) {
        die("Passwords do not match.");
    }

    $sql = "SELECT id FROM users
    WHERE username = :username
    OR email = :email";

    $check = $conn->prepare($sql);

    $check->execute([
        ':username' => $username,
        ':email' => $email
    ]);

    if ($check->fetch()) {
        die("Username or email already exists.");
    }

    $hashedPassword = password_hash(
        $password,
        PASSWORD_DEFAULT
    );

    $sql = "INSERT INTO users
    (name, username, email, password,
    confirm_password, is_admin)
    VALUES
    (:name, :username, :email, :password, :confirm_password, '0')";
     
     $insert = $conn->prepare($sql);

     $insert->execute([
        ':name' => $name,
        ':username' => $username,
        ':email' => $email,
        ':password' => $hashedPassword,
        ':confirm_password' => '',
     ]);
     header("Location: login.php");
     exit();



}  else {
    header("Location: index.php");
    exit();
}
?>
