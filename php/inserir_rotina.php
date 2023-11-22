<?php
session_start();

// Conexão ao banco de dados
$conn = new mysqli("localhost", "root", "123", "sa");

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Processar dados do formulário e inserir no banco de dados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $descricao = $_POST["descricao"];

    // Inserir a rotina na tabela de rotinas
    $sql = "INSERT INTO treinos (titulo, descricao) VALUES ('$titulo', '$descricao')";

    if ($conn->query($sql) === TRUE) {
        $rotina_id = $conn->insert_id; // Obtém o ID da rotina inserida

        // Inserir exercícios na tabela de exercícios relacionados à rotina
        foreach ($_POST["nome_exercicio"] as $key => $nome_exercicio) {
            $series = $_POST["series"][$key];
            $repeticoes = $_POST["repeticoes"][$key];

            $sqlExercicio = "INSERT INTO treinos_exercicios (rotina_id, nome_exercicio, series, repeticoes) 
                             VALUES ('$rotina_id', '$nome_exercicio', '$series', '$repeticoes')";

            if (!$conn->query($sqlExercicio)) {
                echo "Erro ao inserir exercício: " . $conn->error;
            }
        }

        $_SESSION['success_message'] = 'Rotina inserida com sucesso!';
    } else {
        echo "Erro ao inserir rotina: " . $conn->error;
    }
}

$conn->close();

header("Location: ../html/criacaoderotina.html");
exit();
?>