<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Inclusão</title>
</head>

<body>

<?php
include 'conexao.php';

// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenha as credenciais do formulário
    $nome = $_POST['nm_nome'];
    $email = $_POST['ds_email'];
    $senha = $_POST['ds_senha'];

    // Verifique se os campos obrigatórios estão preenchidos
    if (empty($nome) || empty($email) || empty($senha)) {
        echo "<script>alert('Preencha todos os campos obrigatórios.');</script>";
    } else {
        // Consulta SQL para verificar as credenciais
        $sql = "INSERT INTO tb_usuario (nm_nome, ds_email, ds_senha) VALUES ('$nome', '$email', '$senha')";
        if (mysqli_query($con, $sql)) {
            echo "<script>alert('Inclusão realizada com sucesso');</script>";
            echo "<script>window.location='../html/index.html'</script>";
        } else {
            echo "<script>alert('Erro ao inserir no banco de dados.');</script>";
        }
    }
}
?>



    <?php
    include 'conexao.php';
    //Passando os dados que estão no formulário para as variáveis abaixo
    $nome = $_POST['nm_nome'];
    $email = $_POST['ds_email'];
    $senha = $_POST['ds_senha'];
    $ds_peso = $_POST['ds_peso'];
    $ds_idade = $_POST['ds_idade'];
    $ds_sexo = $_POST['ds_sexo'];
    $ds_altura = $_POST['ds_altura'];




    mysqli_query($con, "INSERT INTO tb_usuario (nm_nome, ds_email, ds_senha, ds_peso, ds_idade, ds_sexo, ds_altura)
VALUES ('$nome', '$email', '$senha', '$ds_peso', '$ds_idade', '$ds_sexo', '$ds_altura')");

    echo "<script>alert('Inclusão realizada com sucesso');</script>";
    echo "<script>window.location='cadastro.php'</script>";



    ?>
</body>

</html>