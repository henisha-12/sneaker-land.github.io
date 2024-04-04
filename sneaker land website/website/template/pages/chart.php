<?php
 
 require("database\connect.php");
$test = array();

$q= "select * from tbl_age";

$round = 0;
if($result = mysqli_query($mysql,$q)){
    while($r=mysqli_fetch_array($result)){
        $age_id = $r[0];
        $q2="select count(*) from tbl_ride where age_id = '$age_id'";
        if($result2 = mysqli_query($mysql,$q2)){
            while($r2 = mysqli_fetch_array($result2)){
                $test[$round]['label']="$r[1]-$r[2]";
                $test[$round]['y']="$r2[0]";
                
            // print_r($test);
            }
        }
        $round++;
            
        }
    }
 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
    CanvasJS.addColorSet("purpleShades",["#9c8cf6","#8c7af5","#5744c4","#5839f0","#2c0cc5","#180183"]);
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
    colorSet:"purpleShades",
	title:{
		text: "Rides Report",
        fontColor:"black"
	},
	axisY: {
		title: "No. of Rides",
        titleFontColor:"black",
        labelFontSize:13,
        titleFontSize:15
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## tonnes",
		dataPoints: <?php echo json_encode($test, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 260px; width:60%;margin:auto"></div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>
</html>


