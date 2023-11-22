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
<style>
  .btn-excluir-serie {
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    margin-bottom: 20px;
    margin-left: 10px;
    color: #ff0000;
    background-color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    font-size: 15px;
  }

  .btn-excluir-serie:hover {
    background-color: #ff0000;
    color: black;
  }

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



  .nav-list a:hover {

    font-size: 19px;
   
  }


  a:hover i.fas.fa-user-circle {
    color: #00F; /* Altere a cor desejada para o efeito hover */
}

  @media (max-width: 768px) {
    .image-link {
      width: 100%;

      margin: 10px 0;

    }



  }

  
</style>
</head>

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

      <a href="../php/update_profile.php">
        <i class="fas fa-user-circle" style="font-size: 54px;"></i> <!-- Ícone de perfil -->
      </a>

    </nav>

    </div>
  </header>


  <div class="image-links">
    <a class="image-link" href="../html/criacaodetreinos.html">
      <img id="bw-image" src="../imagens/7.png" alt="Imagem 1" />
    </a>
    <a class="image-link" href="../html/criacaoderotina.html">
      <img id="bw-image" src="../imagens/8.png" alt="Imagem 2" />
    </a>
    <a class="image-link" href="../html/explicacoes.html">
      <img id="bw-image" src="../imagens/9.png" alt="Imagem 2" />
    </a>
  </div>



  <div class="container mt-5">
    <h1>Treinos Anteriores</h1>

    <div class="row row-cols-1 row-cols-md-2 g-4">

      <?php


      include 'conexao.php'; // Importe o arquivo de conexão com o banco de dados
      
      // Consulta para recuperar os treinos anteriores
      $sql = "SELECT titulo, descricao, data FROM treinos ORDER BY id_treino DESC";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); // Recuperar o primeiro registro (o último inserido)
      


        // Imprimir o último dado registrado na parte superior
        echo "<h2>" . $row["titulo"] . "</h2>";
        echo "<a>" . $row["descricao"] . "</a>";
        echo "<a> Data e Horário: " . $row["data"] . "</a>";

        // Exibir os demais treinos anteriores abaixo
        while ($row = $result->fetch_assoc()) {


          echo "<div class='treino-anterior'>";
          echo "<h2>" . $row["titulo"] . "</h2>";


          echo "<p>" . $row["descricao"] . "</p>";

          echo "<a> Data e Horário: " . $row["data"] . "</a>";


          echo "</div>";
        }
      } else {


        echo "Nenhum treino anterior encontrado.";
      }

      $conn->close();

      ?>
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



    <script src="../js/mobile-navbar.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/slide.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://kit.fontawesome.com/998c60ef77.js" crossorigin="anonymous"></script>

</body>

</html>