<?php
include 'service/database.php';
session_start();

$login_message = "";

    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = $db->query($sql);
        if($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            $_SESSION["username"] = $data['username'];
            $_SESSION["is_login"] = true;

            header("Location: index.php");
        } else {
            $login_message = "akun tidak ditemukan, silahkan coba lagi";
        }
    }



?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login | Suduttemu</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/auth.css">
</head>
<body>

<?php include 'layout/header.html'; ?>

<section class="auth-page">
  <div class="auth-card">
    <h3>Masuk Akun</h3>

    <?php if($login_message): ?>
      <div class="auth-message"><?= $login_message ?></div>
    <?php endif; ?>

    <form method="POST">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit" name="login">Masuk</button>
    </form>
    <p class="auth-link">
  Belum punya akun? <a href="register.php">Register</a>
</p>

  </div>
</section>

<?php include 'layout/footer.html'; ?>

</body>
</html>
