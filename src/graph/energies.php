<?php

    $diesel = 0;
    $essence = 0;
    $essence_sans_plomb = 0;
    $gaz = 0;
    $electrique = 0; 
 
	foreach($vehicule as $key => $value){
		#FIXME: moving to PHP8.1 strstr() -> str_contains()

        if(strstr($value->energie, 'Diesel'))
			$diesel += 1;
		elseif(strstr($value->energie, 'Essence'))
			$essence += 1;
		elseif(strstr($value->energie, 'plomb'))
			$essence_sans_plomb += 1;
		elseif(strstr($value->energie, 'électrique'))
			$electrique += 1;
		elseif(strstr($value->energie, 'gaz'))
			$gaz += 1;	
    }

	$dataPoints = array(
		array("label"=> "Diesel", "y"=> $diesel),
		array("label"=> "essence", "y"=> $essence),
		array("label"=> "essence sans plomb", "y"=> $essence_sans_plomb),
		array("label"=> "gaz", "y"=> $gaz),
		array("label"=> "électrique", "y"=> $electrique),
	);
	
?>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "Energies"
	},
	subtitles: [{
		text: "Currency Used: Thai Baht (฿)"
	}],
	data: [{
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		yValueFormatString: "฿#,##0",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>    