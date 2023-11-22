<?php
include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Verifica se o parâmetro `rotina_id` está definido e não está vazio
  if (isset($_POST['rotina_id']) && !empty($_POST['rotina_id'])) {
    // Obtém e escapa o valor de `rotina_id` para prevenir SQL injection
    $rotinaId = mysqli_real_escape_string($conn, $_POST['rotina_id']);

    // Prepara a consulta SQL usando uma declaração preparada
    $deleteQuery = "DELETE FROM treinos WHERE id_treino = ?";
    $stmt = mysqli_prepare($conn, $deleteQuery);

    // Vincula o parâmetro e executa a consulta
    mysqli_stmt_bind_param($stmt, "i", $rotinaId);
    $result = mysqli_stmt_execute($stmt);

    // Verifica se a exclusão foi bem-sucedida
    if ($result) {
      echo "Rotina excluída com sucesso.";
    } else {
      echo "Erro ao excluir a rotina: " . mysqli_error($conn);
    }

    // Fecha a declaração preparada
    mysqli_stmt_close($stmt);
  } else {
    echo "Parâmetro 'rotina_id' não foi fornecido ou está vazio.";
  }
} else {
  echo "Acesso inválido.";
}

mysqli_close($conn);
?>