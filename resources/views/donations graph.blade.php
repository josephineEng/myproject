<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>
        CMARS Donations Graph
    </title>
    <link href="{{asset('css/main design.css')}}" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
</head>
<body>
    <h1>COVID-19 CASE MANAGEMENT AND REPORTING TOOL FOR UGANDA</h1>

    <nav>
    <a href="/signout">
 <input type=button value="LOGOUT"><br>
                    </a><br>
        <strong class="indent">MENU</strong><br>
        <a href="/dashboard">
            Dashboard
        </a><br><br>

        <a href="/health_officer-list">
            Health officers
        </a><br><br>

        <a href="/patients">
            Patients
        </a><br><br>

        <a href="/Hospitals">
            Hospitals
        </a><br><br>

        <a href="/payments">
            Payments
        </a><br><br>

        <a href="/funds-list">
            Treasury
        </a><br>

        <a href="/donations graph" class="indent" style="display: inline-block; position: relative; left: -20px; width: 145px; padding-left: 35px; color: black; font-weight: bold; background-color: white;">
            Donations graph
        </a><br>
    </nav>

    <h2>Donations graph</h2>

    <div class="main">
    <canvas id="myChart"></canvas>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'My First dataset',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [0, 10, 5, 2, 20, 30, 45]
        }]
    },

    // Configuration options go here
    options: {}
});

    </script>



    <!--<script>
  $(function(){
      //get the pie chart canvas
      var cData = JSON.parse(`<?php echo $chart_data; ?>`);
      var ctx = $("#pie-chart");
 
      //pie chart data
      var data = {
        labels: cData.label,
        datasets: [
          {
            label: "Users Count",
            data: cData.data,
            backgroundColor: [
              "#DEB887",
              "#A9A9A9",
              "#DC143C",
              "#F4A460",
              "#2E8B57",
              "#1D7A46",
              "#CDA776",
            ],
            borderColor: [
              "#CDA776",
              "#989898",
              "#CB252B",
              "#E39371",
              "#1D7A46",
              "#F4A460",
              "#CDA776",
            ],
            borderWidth: [1, 1, 1, 1, 1,1,1]
          }
        ]
      };
 
      //options
      var options = {
        responsive: true,
        title: {
          display: true,
          position: "top",
          text: "Last Week Registered Users -  Day Wise Count",
          fontSize: 18,
          fontColor: "#111"
        },
        legend: {
          display: true,
          position: "bottom",
          labels: {
            fontColor: "#333",
            fontSize: 16
          }
        }
      };
 
      //create Pie Chart class object
      var chart1 = new Chart(ctx, {
        type: "pie",
        data: data,
        options: options
      });
 
  });
</script>-->

 

    </div>

</body>
</html>