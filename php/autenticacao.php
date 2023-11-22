<?php
// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'conexao.php';

    // Obtenha as credenciais do formulário
    $email = $_POST['ds_email'];
    $senha = $_POST['ds_senha'];

    // Consulta SQL para verificar as credenciais
    $sql = "SELECT * FROM tb_usuario WHERE ds_email = '$email' AND ds_senha = '$senha'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) { 
        // Autenticação bem-sucedida
        // Você pode configurar a sessão aqui se precisar
        header('Location: ../html/index.html'); // Redireciona para a página inicial
        exit(); // Certifique-se de sair após o redirecionamento
    } else {
        // Credenciais inválidas, redirecione de volta para a página de login com uma mensagem de erro
        $error_message = 'E-mail ou senha incorretos. Tente novamente.';
        header('Location: ../html/cadlogin.html?error=' . urlencode($error_message));
        exit();
    }
}
?>

   
