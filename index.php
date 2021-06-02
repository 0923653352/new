<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="หน้าสรุป.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>  
    
<title>เช็คสถานการณ์ Covid-19 ได้ที่นี่</title>
   

      <script id="kaw" type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['month', 'เเสง(lux)' ],
          ['เดือนที่1',  1000],
          ['เดือนที่2',  1170],
          ['เดือนที่3',  660],
          ['เดือนที่4',  1030],
          ['เดือนที่5',  1000],
          ['เดือนที่6',  1170],
          ['เดือนที่7',  660],
          ['เดือนที่8',  1030],
          ['เดือนที่9',  1000],
          ['เดือนที่10',  1170],
          ['เดือนที่11',  660],
          ['เดือนที่12',  1030]
        ]);

        var options = {
          title: '',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
</head>
<style>
      h1, h2, h3, h4, h6, nav, .nav, .menu, button, .button, .btn, .price, ._heading, .wp-block-pullquote blockquote, blockquote, label, legend, a, .card-header, th , display-4 {
    font-family: "Prompt", "Open Sans script=all rev=1" !important;
    font-weight: 700 !important;

        }
      .flexbox {
        display: flex;
        flex-direction: row;
        flex-wrap:wrap;
        justify-content: flex-end;
        align-items: stretch;
        box-sizing: border-box;
        margin: 0px 0px;
        
      }

      .item {
        box-sizing: border-box;
        width: 30%;
        margin-bottom: 20px;
        padding: 0px 0px;
        
      }

      .content {
        color: #ffffff;
        font-weight: 600;
        text-align: center;
        box-sizing: border-box;
        height: 140px;
        padding: 10px;
      }
ิ     h5{
           margin: 0 0 10px;
           padding: 0;
           font-size: 24px;
         }
         input [type="text"] {
           border: none;
           outline: none;
           border-radius: 25px 0 0 25px;
         }
         input [type="submit"]{
          border-radius: 25px 0 0 25px;
          border: none;
           outline: none;
           cursor: pointer;
           background-color: #ffc107;
           color:aliceblue
         }
         input [type="submit"]:hover{
           background: #ff5722;
         }
          /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
          }
      /* Optional: Makes the sample page fill the window. */
      html {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      #map {
        height: 500px;
        width: 600px;
      }
</style>
<body>
   
    <?php include('heater.php');  ?>

    <?php include('1.php');  ?>
    
    <?php include('2.php');  ?>

    <?php include('3.php');  ?>

    <?php include('4.php');  ?>
    
   
</body>
</html>