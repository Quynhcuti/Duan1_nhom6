
<div class="row">
<div id="piechart"></div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  <?php
    $tongdm = count($list2);
    $i= 1;
    foreach($list2 as $thongke){
        extract($thongke);
        if($i == $tongdm) $dauphay=""; else $dauphay=",";
        echo "['".$thongke['product_name']."',".$thongke['soluotxem']."]".$dauphay;
        $i +=1;
    }
  ?>
 
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Biểu đồ thống kê theo số lượt xem', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
</div>

