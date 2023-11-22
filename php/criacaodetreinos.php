<?php
include 'conexao.php'; // Importe o arquivo de conexão com o banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['save_treino'])) { // Verifique se o botão "Salvar Treino" foi clicado
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];

        // Inserir os dados na tabela treinos
        $sql = "INSERT INTO treinos (titulo, descricao) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("ss", $titulo, $descricao);
            if ($stmt->execute()) {
                header("Location: ../php/inicioT.php");
            } else {
                echo "Erro ao salvar o treino: " . $stmt->error;
            }
        } else {
            echo "Erro na preparação da declaração: " . $conn->error;
        }

        $stmt->close();
        $conn->close();
    }
}
?>
