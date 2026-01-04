<?php
include 'service/database.php';

$register_message = "";


if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if($db->query($sql)){
       $register_message = "registrasi berhasil, silahkan login";
    } else {
       $register_message = "registrasi gagal, silahkan coba lagi";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register | Suduttemu</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/auth.css">
</head>
<body>

<?php include 'layout/header.html'; ?>

<section class="auth-page">
  <div class="auth-card">
    <h3>Daftar Akun</h3>

    <?php if($register_message): ?>
      <div class="auth-message"><?= $register_message ?></div>
    <?php endif; ?>

    <form method="POST">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit" name="register">Daftar</button>
    </form>

    <p class="auth-link">
      Sudah punya akun? <a href="login.php">Login</a>
    </p>
  </div>
</section>

<?php include 'layout/footer.html'; ?>

</body>
</html>
