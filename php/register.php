
<?php


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "sa";


include 'conexao.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'Username existente!'; 
   }else{
      if($pass != $cpass){
         $message[] = 'Confirmar senha não correspondida!';
      }elseif($image_size > 2000000){
         $message[] = 'O tamanho da imagem é muito grande!';
      }else{
         $insert = mysqli_query($conn, "INSERT INTO `user_form`(name, email, password, image) VALUES('$name', '$email', '$pass', '$image')") or die('query failed');

         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'Registro feito com sucesso!';
            header('location:../php/login.php');
         }else{
            $message[] = 'Registro falhado!';
         }
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Registro</title>

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
      <h3>Registre-se</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="text" name="name" placeholder="Username" class="box" required>
      <input type="email" name="email" placeholder="E-mail" class="box" required>
      <input type="password" name="password" placeholder="Senha" class="box" required>
      <input type="password" name="cpassword" placeholder="Confirme senha" class="box" required>


      <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
      <input type="submit" name="submit" value="Registrar" class="btn">
      <p>Já tem uma conta? <a href="../php/login.php">Conecte-se agora</a></p>
   </form>

</div>

</body>


</html>
