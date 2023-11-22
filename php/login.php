<?php

include 'conexao.php';
session_start();

if (isset($_POST['submit'])) {

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if (mysqli_num_rows($select) > 0) {
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:home.php');
   } else {
      $message[] = 'E-mail ou Senha incorretos!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/style2.css">
   <link rel="stylesheet" href="../css/style.css">
   <link rel="shortcut icon" href="../imagens/logo (2).png (2).png" type="image/x-icon">

</head>
<header>
   <nav>
      <a class="logo">
         <img src="../imagens/Design_sem_nome-removebg-preview.png" alt="header">
      </a>

   </nav>
</header>

<body>

   <div class="form-container">

      <form action="" method="post" enctype="multipart/form-data">
         <h3>Login</h3>
         <?php
         if (isset($message)) {
            foreach ($message as $message) {
               echo '<div class="message">' . $message . '</div>';
            }
         }
         ?>
         <input type="email" name="email" placeholder="E-mail" class="box" required>
         <input type="password" name="password" placeholder="Senha" class="box" required>
         <input type="submit" name="submit" value="Logar" class="btn">
         <p>Não tem uma conta? <a href="register.php">Registre-se agora</a></p>
      </form>

   </div>

</body>

</html>