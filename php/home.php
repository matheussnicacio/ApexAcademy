<?php

include 'conexao.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style2.css">
   <link rel="stylesheet" href="../css/style.css">
   <link rel="shortcut icon" href="../imagens/logo (2).png (2).png" type="image/x-icon">

</head>
<header>
   <nav>
   <a class="logo" href="../html/index.php">
          <img src="../imagens/Design_sem_nome-removebg-preview.png" alt="header">
        </a>

   </nav>
</header>

<body>
   
<div class="container">

   <div class="profile">
      <?php
         $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
      ?>
      <h3><?php echo $fetch['name']; ?></h3>
      <a href="update_profile.php" class="btn">Ver meu perfil</a>
      <a href="../html/index.php" class="confirm-btn">Página inicial</a>
      <a href="home.php?logout=<?php echo $user_id; ?>" class="delete-btn">Logout</a>
      <p>Novo <a href="login.php">Login</a> ou <a href="register.php">Registro</a></p>
      
   </div>

</div>

</body>
</html>