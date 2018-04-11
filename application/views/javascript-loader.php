<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
</script>
<script src="<?php echo base_url(); ?>resources/js/fontawesome.js">
</script>
<script src="<?php echo base_url(); ?>resources/js/main.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          // backgroundColor: [
          //     'rgba(54, 162, 235, 0.2)'
          // ],
          borderColor: [
              'rgba(255,99,132,1)'
          ],
          fill: false,
          borderWidth: 2
        }, {
          label: '# of Votes 2',
          data: [13, 11, 11, 6, 33, 123],
          // backgroundColor: [
          //     'rgba(255, 159, 64, 0.2)'
          // ],
          borderColor: [
              'rgba(75, 192, 192, 1)',
          ],
          fill: false,
          borderWidth: 2
        }],
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
