<?php
    // cek apakah tombol submit sudah ditekan apa belum
    if (isset($_POST["submit"])) {
        // cek username & password
        if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
            // jika benar, tampilkan ke halaman admin
            header("Location: admin.php");
            exit;
        } else {
            // jika salah, tampilkan pesan kesalahan
            $error = true;
        }
    }
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="" />
  <script src=""></script>
  <style>
  body {
    background: #63b47a;
  }

  /* Bordered form */
  form {
    background: #fff;
    border-radius: 5px;
    padding: 20px;
    padding-top: 30px;
    width: 300px;
    margin: 50px auto;
    box-shadow: 15px 15px 0px rgba(0, 0, 0, .1);
  }

  /* Full-width inputs */
  input[type=text],
  input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }

  /* Set a style for all buttons */
  button {
    box-shadow: 0px 3px 0px #4CAF50;
    text-shadow: 1px 1px 0px rgba(0, 0, 0, .1);
    background-color: #4CAF50;
    border-radius: 6px;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
  }

  /* Add a hover effect for buttons */
  button:hover {
    opacity: 0.8;
  }

  /* Center the avatar image inside this container */
  .img {
    text-align: center;
    margin: 24px 0 12px 0;
  }

  /* Avatar image */
  img.avatar {
    width: 40%;
    border-radius: 50%;
  }

  /* Add padding to containers */
  .container {
    padding: 16px;
  }

  /* The "Forgot password" text */
  span.password {
    float: right;
    padding-top: 16px;
  }

  /* Change styles for span and cancel button on extra small screens */
  @media screen and (max-width: 300px) {
    span.password {
      display: block;
      float: none;
    }
  }
  </style>
</head>

<body>
  <form action="" method="post">
    <div class="img">
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="username" name="username"><b>Username</b></label>
      <input type="text" placeholder="Masukan nama" name="username" id="username" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Masukan password" name="password" id="password" required>

      <button type="submit" name="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember">Ingatkan aku...
      </label>

      <!-- LOGIC ERROR -->
      <?php if (isset($error)): ?>
      <p style="font-size: 20px; color: red; font-style: italic;">ERROR!</p>
      <?php endif;?>
    </div>

  </form>
</body>

</html>