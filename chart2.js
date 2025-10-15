 var ctx2 = document.getElementById('doughnut').getContext('2d');
var myChart2 = new Chart(ctx2, {
    type: 'doughnut',
    data: {
      labels: ['Physical', 'Sexual', 'Economical', 'Pyschological'],
      datasets: [{
        label: 'Type of Incidents',
        data: [12, 19, 3, 3],
        borderWidth: 1
      }]
    },
    options: {
       responsive: true
        }
      
    
  });
