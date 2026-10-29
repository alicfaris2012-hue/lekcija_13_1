<?php
session_start();

require_once "config.php";

if (isset($_POST['submit'])) {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($username) || empty($password)) {
        die("Please fill in all fields.");
    }

    $sql = "SELECT id, name, username, email,
                   password, is_admin
            FROM users
            WHERE username = :username";

    $selectUser = $conn->prepare($sql);

    $selectUser->execute([
        ':username' => $username
    ]);

    $data = $selectUser->fetch(PDO::FETCH_ASSOC);

    if (!$data) {
        die("Invalid username or password.");
    }

    if (password_verify($password, $data['password'])) {

        session_regenerate_id(true);

        $_SESSION['id'] = $data['id'];
        $_SESSION['name'] = $data['name'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['is_admin'] = $data['is_admin'];

        header("Location: dashboard.php");
        exit();

    } else {
        die("Invalid username or password.");
    }

} else {
    header("Location: login.php");
    exit();
}
?>