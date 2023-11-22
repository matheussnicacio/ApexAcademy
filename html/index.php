<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/slide.css">
  <link rel="stylesheet" href="../css/stylelogincadastro.css">

  <link rel="shortcut icon" href="../imagens/logo (2).png (2).png" type="image/x-icon">
  <title>SA</title>
</head>

<body>
  <style>
    .profile-icon {
      display: inline-block;
      position: relative;
    }
  
    .profile-img-container {
      width: 54px;
      height: 54px;
      border-radius: 50%;
      overflow: hidden;
    }
  
    .profile-img-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  
    .default-profile-icon {
      width: 54px;
      height: 54px;
      border-radius: 50%;
      background-color: #ccc; /* Cor de fundo padrão da bolinha */
      display: flex;
      justify-content: center;
      align-items: center;
    }

    body {
  position: relative;
}

nav {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 1000; /* Valor maior que o z-index das imagens */
}
  </style>

  <body>
    <header>
      <nav>
        <a class="logo" href="../html/index.php">
          <img src="../imagens/Design_sem_nome-removebg-preview.png" alt="header">
        </a>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <ul class="nav-list">
          <li><a href="../html/index.php">Início</a></li>
          <li><a href="../html/avaliacaofisica.html">Avalição Física</a></li>
          <li><a href="../html/inicioT.html">Criação de Treinos</a></li>
          <li><a href="../html/explicacoes.html">Explicações de Exercícios</a></li>
          <li><a href="../php/login.php">Cadastro</a></li>
        </ul>
        </ul>

        <a href="../php/update_profile.php">
          <a href="../php/update_profile.php" class="profile-icon">
            <?php
              // Conectar ao banco de dados e recuperar a imagem do perfil
              include '../php/conexao.php';
              session_start();
              $user_id = $_SESSION['user_id'];
          
              $select_image = mysqli_query($conn, "SELECT image FROM `user_form` WHERE id = '$user_id'") or die('query failed');
              $fetch_image = mysqli_fetch_assoc($select_image);
          
              if ($fetch_image['image'] == '') {
                echo '<div class="default-profile-icon"><i class="fas fa-user-circle" style="font-size: 54px;"></i></div>';
              } else {
                echo '<div class="profile-img-container"><img src="../php/uploaded_img/'.$fetch_image['image'].'" alt="Profile Image"></div>';
              }
            ?>
          </a>

      </nav>

      </div>
    </header>
    <style>
      .image-links {
        text-align: center;
        margin: 0 auto;

      }

      .image-link {
        width: 30%;
        display: inline-block;
        margin: 10px;
        text-decoration: none;
        border: solid #ffffff;
        background-color: #ffffff;
        border-radius: 20px;
        padding: 10px;
      }

      .image-link:hover {
        background-color: #ffffff;
        color: #fff;
      }

      .image-link img {
        width: 100%;
        height: auto;
      }

      #bw-image {
        filter: sepia(90%) hue-rotate(200deg) saturate(110%) grayscale(30%);


      }

      #bw-image:hover {
        filter: saturate(150%) grayscale(50%);
      }

      #page-footer {
        position: fixed;
        bottom: -100px;

        left: 0;
        width: 100%;
        background-color: #333;
        color: #fff;
        transition: bottom 0.3s;

      }

      #page-footer h3 {
        color: #e7dede;
        font-size: 20px;
      }

      #page-footer p {
        color: #fff;
        font-size: 16px;
        margin: 5px 0;
      }

      #page-footer ul {
        list-style: none;
        padding: 0;
      }

      #page-footer ul li {
        margin: 5px 0;
      }

      #page-footer a {
        text-decoration: none;
        transition: color 0.3s;
      }

      #page-footer a:hover {
        color: #00f;
      }

      #page-footer.active {
        bottom: 0;
      }

      #page-footer .container {
        padding: 20px;
      }

      #imagemac {
        opacity: 90%;
        width: 100%;
        height: 100vh;
        object-fit: cover;
        top: 500px;
        bottom: 0;
        left: 0;
      }

      .background-image {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 0;
        width: 100%;
        height: 100vh;
        object-fit: cover;
      }

      .nav-list a:hover {

        font-size: 19px;
      }




      .social-buttonf {
        display: flex;
        align-items: center;
        margin-top: 10px;
        margin-right: 258px;
        padding: 15px;
        background-color: #1877f2;
        color: #fff;
        text-align: center;
        border-radius: 25px;
        text-decoration: none;
      }

      .social-buttoni {
        margin-right: 258px;
        padding: 15px;
        display: flex;
        align-items: center;
        margin-top: 10px;
        background-color: #da2ebd;

        text-align: center;
        border-radius: 25px;
        text-decoration: none;
      }

      .social-button i {
        margin-left: 0px;
      }

      .social-button:hover {
        background-color: #ffffff;

      }




      @media (max-width: 768px) {

        #page-footer .container {
          padding: 5px;
        }

        .image-link {
          width: 100%;
          margin: 1px 0;
        }

        #page-footer ul li {
          margin: 1px 0;
        }

        footer {
          position: relative;
        }

        footer img {
          width: 25px;
          margin: 1px 0;
        }

        #page-footer h3 {
          font-size: 10px;
          margin: 1px 0;
          color: #1877f2;
        }

        #page-footer p {
          font-size: 10px;
          margin: 1px 0;
        }

        #page-footer a {
          font-size: 10px;
          margin: 1px 0;
        }

        #page-footer .social-buttonf {
          margin-right: 534px;
          padding: 5px;
          display: flex;
          align-items: center;
          background-color: #1877f2;
          text-align: center;
          border-radius: 25px;
          text-decoration: none;
        }

        #page-footer .social-buttoni {
          margin-right: 534px;
          padding: 5px;
          display: flex;
          align-items: center;
          background-color: #da2ebd;
          text-align: center;
          border-radius: 25px;
          text-decoration: none;
        }

        footer a {
          font-size: 10px;
          display: block;



        }

      }


      p {
        color: rgb(255, 255, 255);
        text-decoration: none;
        transition: 0.3s;
      }

      p:hover {
        color: #00F !important;
        transform: scale(1.06);
      }

      .animated-text {
  opacity: 0;
  transform: translateY(20px);
  transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
}


.slide-box.primeiro .animated-text {
  animation: fadeInUp 1s ease-in-out forwards;
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }

}



    </style>

<section class="slider">
  <div class="slider-content">
    <input type="radio" name="btn-radio" id="radio1">
    <input type="radio" name="btn-radio" id="radio2">

    <div class="slide-box primeiro">
      <div class="slide-content">
        <div class="slide-text" style="margin-top: -5%;">
          <h2 class="animated-text">INICIE SEU TREINO</h2>
          <h4 class="animated-text">Desperte sua energia, INICIE SEU TREINO! Transforme cada movimento em
            progresso.</h4>
          <br>
          <button class="animated-text" onclick="location.href='../html/inicioT.html'">INICIAR</button>
        </div>
        <img class="img-desktop" src="../imagens/Design sem nome (7).png" alt="slide 1">
        <img class="img-mobile" src="../imagens/alt=slide 1 (3).png" alt="slide 1">
      </div>
    </div>




    <div class="slide-box">
      <div class="slide-content">
        <div class="slide-text" style="margin-top: -5%;">
          <h2 >INICIE SUA ROTINA</h2>
          <h4>Inicie sua rotina de treino agora! Transforme cada movimento em progresso. Sua jornada para uma vida mais saudável começa aqui.</h4>
          <br>
          <button onclick="location.href='../html/rotinas.html'">INICIAR</button>
        </div>
        <img class="img-desktop" src="../imagens/Design sem nome (8).png" alt="slide 3">
        <img class="img-mobile" src="../imagens/alt=slide 1 (4).png" alt="slide 1">
      </div>
    </div>



        <div class="nav-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
        </div>

        <div class="nav-manual">
          <label for="radio1" class="manual-btn"></label>
          <label for="radio2" class="manual-btn"></label>
        </div>

      </div>

    </section>






    </head>
    <div class="image-links mt-5">
      <a class="image-link" href="../html/inicioT.html">
        <img id="bw-image" src="../imagens/4.png" alt="Imagem 1" />
      </a>

      <a class="image-link" href="../html/explicacoes.html">
        <img id="bw-image" src="../imagens/9.png" alt="Imagem 2" />
      </a>

      <a class="image-link" href="../html/avaliacaofisica.html">
        <img id="bw-image" src="../imagens/10.png" alt="Imagem 2" />
      </a>
      </a>
    </div>


    <div class="slider-content mt-5">
     
  
      <div class="slide-box primeiro">
        <div class="slide-content">
          <div class="slide-text" style="margin-top: 0%;">
            <h2 class="animated-text">Nossa História</h2>
            <h4 class="animated-text">A Apex Academy é o seu parceiro na busca por uma melhor forma física. Nossa história é marcada por uma paixão dedicada à saúde e transformação pessoal.
               Oferecemos uma experiência única de musculação, guiando você rumo ao auge da sua condição física. Junte-se a nós nessa jornada pela melhor versão de si mesmo.</h4>
            <br>
          </div>
          <img class="img-desktop" src="../imagens/Design sem nome (6).png" alt="slide 1">
          <img class="img-mobile" src="../imagens/alt=slide 1 (2).png" alt="slide 1">
        </div>
      </div>
  </div>
  




    <!-- Footer -->
    <footer class="text-center text-lg-start bg-dark text-white">
      <!-- Section: Social media -->
      <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
          <span class="text-white">Nossas redes sociais:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
          <a href="https://www.facebook.com/profile.php?id=61552199096353" class="me-4 link-secondary">
            <i class="fab fa-facebook-f text-white"></i>
          </a>
          <a href="" class="me-4 link-secondary">
            <i class="fab fa-twitter text-white"></i>
          </a>
          <a href="" class="me-4 link-secondary">
            <i class="fab fa-google text-white"></i>
          </a>
          <a href="https://www.instagram.com/theapexgym/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA=="
            class="me-4 link-secondary">
            <i class="fab fa-instagram text-white"></i>
          </a>
          <a href="" class="me-4 link-secondary">
            <i class="fab fa-linkedin text-white"></i>
          </a>
          <a href="" class="me-4 link-secondary">
            <i class="fab fa-whatsapp text-white"></i>
          </a>
          <a href="" class="me-4 link-secondary">
            <i class="fab fa-github text-white"></i>
          </a>
        </div>
        <!-- Right -->
      </section>
      <!-- Section: Social media -->

      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold mb-4">

                <img src="../imagens/logo-removebg-preview.png" alt="Logo" class="logo-img me-3" style="width: 70px;" />
              </h6>
              <p class="text-white">
                Here you can use rows and columns to organize your footer content. Lorem ipsum
                dolor sit amet, consectetur adipisicing elit.
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Categorias
              </h6>
              <p>
                <a href="../html/avaliacaofisica.html" class="text-reset text-white">Avaliação Física</a>
              </p>
              <p>
                <a href="../html/inicioT.html" class="text-reset text-white">Criação de Treinos</a>
              </p>
              <p>
                <a href="../html/explicacoes.html" class="text-reset text-white">Explicações de Exercícios</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Outros
              </h6>
              <p>
                <a href="../html/index.html" class="text-reset text-white">Inicio</a>
              </p>
              <p>
                <a href="../html/cadlogin.html" class="text-reset text-white">Cadastro</a>
              </p>
              <p>
                <a href="../html/contato.html" class="text-reset text-white">Contato</a>
              </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Contato</h6>
              <p class="text-white"><i class="fas fa-home me-3 text-white"></i> Joinville/SC</p>
              <p class="text-white">
                <i class="fas fa-envelope me-3 text-white"></i>
                apexcademyst@academia.com
              </p>
              <p class="text-white"><i class="fas fa-phone me-3 text-white"></i> + 01 234 567 88</p>
              <p class="text-white"><i class="fas fa-print me-3 text-white"></i> + 01 234 567 89</p>
            </div>
            <!-- Grid row -->
          </div>
      </section>
      <!-- Copyright -->
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
        © 2023 Copyright:
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">ApexAcademy</a>
      </div>



      </main>




      <script src="../js/mobile-navbar.js"></script>
      <script src="../js/script.js"></script>
      <script src="../js/slide.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
      <script src="https://kit.fontawesome.com/998c60ef77.js" crossorigin="anonymous"></script>

  </body>

</html>