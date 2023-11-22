document.addEventListener("DOMContentLoaded", function () {
    const adicionarExercicioBtn = document.getElementById("adicionar-exercicio");
    const exerciciosContainer = document.getElementById("exercicios-container");

    adicionarExercicioBtn.addEventListener("click", function () {
        adicionarExercicio();
    });

    exerciciosContainer.addEventListener("click", function (event) {
        if (event.target.classList.contains("remover-exercicio")) {
            removerExercicio(event.target.parentElement);
        }
    });

    function adicionarExercicio() {
        const novoExercicio = document.createElement("div");
        novoExercicio.className = "exercicio";
        novoExercicio.innerHTML = `
        <h4>Exercício</h4>
        <label for="nome_exercicio">Nome do Exercício:</label>
        <input type="text" class="nome_exercicio" name="nome_exercicio[]" required>
  
        <label for="series">Séries:</label>
        <input type="number" class="series" name="series[]" required>
  
        <label for="repeticoes">Repetições:</label>
        <input type="number" class="repeticoes" name="repeticoes[]" required>
  
        <button type="button" class="remover-exercicio">Remover Exercício</button>
      `;

        exerciciosContainer.appendChild(novoExercicio);
    }

    function removerExercicio(exercicio) {
        exerciciosContainer.removeChild(exercicio);
    }
});
