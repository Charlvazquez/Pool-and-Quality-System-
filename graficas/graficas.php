<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <title>Document</title>
</head>
<body>

    <?php 
            require 'actionesGrafica.php';
            require 'infoMedio.php';
    ?>



<div style="width: 500px;">
  <canvas id="LineChart"></canvas>
</div>

<div style="width: 500px;">
  <canvas id="myChart"></canvas>
</div>
 
<script>
  // === include 'setup' then 'config' above ===
  const labels = <?php echo json_encode([$buena, $excelente, $regular]) ?>;
  const labels2 = <?php echo json_encode([$lab,$rayosX,$consulta]) ?>;
  const data = {
    labels: labels,
    datasets: [
      {
      label: 'buena',
      data: <?php echo json_encode([$cantidad]) ?>,
      backgroundColor: [
        '#Ff2100'

      ]
    }, {
      label: 'excelente',
      data: <?php echo json_encode([$cantidad1]) ?>,
      backgroundColor: [
        
        '#f56954'
        

      ]
    },
    {
      label: 'regular',
      data: <?php echo json_encode([$cantidad2]) ?>,
      backgroundColor: [ 
        '#A500ff'

      ]
    }

  ]
  };

  const data2 = {
    labels: labels2,
    datasets: [{
      label: 'Listado de Respuestas en Encuesta',
      data: <?php echo json_encode([$resptotal1,$resptotal2,$resptotal3]) ?>,
      backgroundColor: [
        '#Ff2100',
        '#f56954',
        '#00a65a',
        '#f39c12',
        '#00c0ef',
        '#3c8dbc',
        '#d2d6de',
        '#D8ff00',
        '#47ff00',
        '#00ffea',
        '#6100ff',
        '#A500ff'

      ]
    }]
  };

 
  const config = {
    type: 'bar',
    data: data,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    },
  };

  const config2 = {
    type: 'doughnut',
    data: data2,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    },
  };



  var myChart2 = new Chart(
    document.getElementById('LineChart'),
    config2
  );

  var myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>

</body>
</html>