// Gráfico de Alunos Formados
const ctx = document.getElementById('graficoAlunos');
if (ctx) {
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['2020', '2021', '2022', '2023', '2024'],
      datasets: [{
        label: 'Alunos Formados',
        data: [150, 200, 280, 320, 400],
        backgroundColor: '#0d6efd'
      }]
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
}
