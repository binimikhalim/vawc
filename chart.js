const ctx = document.getElementById('myChart').getContext('2d');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'  ],
      datasets: [{
        label: 'Total of Cases',
        data: [12, 19, 3, 15, 20, 33, 39, 69, 16, 31, 92, 100],
        borderWidth: 1,
        backgroundColor: [
            'rgba(85,85,85,1)'
        ],
        borderColor: [
            'rgb(41,155,99)'
        ]
      }]
    },
      options: {
       responsive: true
        }
      
    
  });


  
 