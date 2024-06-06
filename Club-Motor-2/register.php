<?php
require_once('koneksi.php');

$message = ''; // Variabel untuk menyimpan pesan notifikasi

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk menambahkan user baru ke database
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        $message = "Registrasi berhasil";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <style>
        .notification {
            padding: 15px;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="container-2">
        <h2>Register</h2>
        <?php if (!empty($message)) : ?>
            <div class="notification">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>
        <form method="post" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <button type="submit" name="register">Register</button>
        </form>
        <p class="login-link">Sudah memiliki akun? <a href="login.php">Login disini</a></p>
    </div>
</body>

</html>
