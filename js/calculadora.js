// Adicione um ouvinte de evento de clique ao botão "Calcular"
document.getElementById('calcular_btn').addEventListener('click', function () {
    // Obtenha os valores dos campos
    var altura = parseFloat(document.getElementById('altura').value) / 100; // Converter altura de cm para m
    var peso = parseFloat(document.getElementById('peso').value);
    var idade = parseInt(document.getElementById('idade').value);
    var genero = document.getElementById('genero').value;

    // Verifique se os campos foram preenchidos corretamente
    if (isNaN(altura) || isNaN(peso) || isNaN(idade)) {
        alert('Preencha todos os campos corretamente.');
        return;
    }

    // Calcular o IMC
    var imc = peso / (altura * altura);

    // Calcular a taxa metabólica basal (TMB) com base no gênero
    var tmb;
    if (genero === 'masculino') {
        tmb = 88.362 + (13.397 * peso) + (4.799 * altura * 100) - (5.677 * idade);
    } else if (genero === 'feminino') {
        tmb = 447.593 + (9.247 * peso) + (3.098 * altura * 100) - (4.330 * idade);
    } else {
        alert('Selecione um gênero válido.');
        return;
    }

    document.getElementById('resultado').innerHTML = "Seu IMC: " + imc.toFixed(2) + "<br>TMB: " + tmb.toFixed(2) + " calorias por dia";
});