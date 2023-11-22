
document.getElementById("btn-add-exercicio").addEventListener("click", adicionarExercicio);

let numeroDeExercicio = 1;
let titulo = false; // Variável para rastrear se o título foi inserido

function adicionarExercicio() {
  const exerciciosContainer = document.getElementById("exercicios");
  const novoExercicio = document.createElement("div");
  novoExercicio.className = "exercicio";

  const tituloExercicio = document.createElement("input");
  tituloExercicio.type = "text";

  tituloExercicio.placeholder = "Exercício " + numeroDeExercicio;

  const seriesTable = document.createElement("table");
  seriesTable.className = "series-table";
  const tableHeader = seriesTable.createTHead();
  const headerRow = tableHeader.insertRow();
  headerRow.innerHTML = "<th>Número da Série</th><th>Peso</th><th>Repetições</th>";

  const btnAddSerie = document.createElement("button");
  btnAddSerie.textContent = "Adicionar Série";
  btnAddSerie.className = "btn-add-serie";
  btnAddSerie.addEventListener("click", () => adicionarSerie(seriesTable));

  const btnExcluirExercicio = document.createElement("button");
  btnExcluirExercicio.textContent = "Excluir Exercício";
  btnExcluirExercicio.className = "btn-excluir-exercicio";
  btnExcluirExercicio.addEventListener("click", () => excluirExercicio(novoExercicio));
  
  novoExercicio.appendChild(tituloExercicio);
  novoExercicio.appendChild(seriesTable);
  novoExercicio.appendChild(btnAddSerie);
  novoExercicio.appendChild(btnExcluirExercicio);

  exerciciosContainer.appendChild(novoExercicio);


  numeroDeExercicio++;

  numeroDeSerie = 1;

}

function excluirExercicio(exercicio) {
  const exerciciosContainer = document.getElementById("exercicios");
  exerciciosContainer.removeChild(exercicio);
}






function adicionarSerie(table) {

  const tableBody = table.createTBody();
  const novaLinha = tableBody.insertRow(-1);
  const numCelulas = 3;

  // Célula do número de série
  const numSerieCelula = novaLinha.insertCell();
  numSerieCelula.textContent = numeroDeSerie;

  for (let i = 1; i < numCelulas; i++) {
    const novaCelula = novaLinha.insertCell();
    const input = document.createElement("input");
    input.type = "text";
    novaCelula.appendChild(input);
  }

  const acaoCelula = novaLinha.insertCell();
  const btnExcluirSerie = document.createElement("button");
  btnExcluirSerie.textContent = "Excluir Série";
  btnExcluirSerie.className = "btn-excluir-serie";
  btnExcluirSerie.addEventListener("click", () => excluirSerie(novaLinha));
  acaoCelula.appendChild(btnExcluirSerie);

  // Incrementar o número de série para a próxima série
  numeroDeSerie++;
}

function excluirSerie(linha) {
  const tableBody = linha.parentNode;
  tableBody.removeChild(linha);
  
}

const btnAddExercicio = document.querySelector(".btn-add-exercicio");
btnAddExercicio.addEventListener("click", adicionarExercicio);

