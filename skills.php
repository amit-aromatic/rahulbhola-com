<?php
$color = array();
$i=0;
$color[$i++] = '#666';
$colorCount = count($color);

$arr = array();
$i = 0;

$arr['CakePHP 3.x'] = 9;
$arr['CakePHP 2.6'] = 9;
$arr['Shopify'] = 8;
$arr['Wordpress'] = 6;
$arr['Core PHP'] = 10;
$arr['Web services'] = 8;
$arr['My SQL'] = 9.5;
$arr['API Development'] = 8;
$arr['HTML'] = 10;
$arr['CSS'] = 9.5;
$arr['Javascript'] = 9.5;
$arr['AJAX'] = 10;
$arr['Adobe Flash (as 2.0)'] = 8;
$arr['J2SE / J2EE'] = 8;
$arr['C / C++'] = 8;
$arr['mongoDB'] = 7;
$arr['Express js'] = 7;
$arr['AngulagJS'] = 7;
$arr['Node.js'] = 7;
$arr['jQuery'] = 9;
$arr['Bootstrap'] = 9;
$arr['Highcharts'] = 8;
$arr['MS Word'] = 8;
$arr['MS Power Point'] = 8;
$arr['MS Outlook'] = 8;
$arr['MS Excel'] = 8;
$arr['MS Access'] = 7;
$suffled_keys = array_keys($arr);
shuffle($suffled_keys);

$minFont = .75;
$maxFont = 2;
$fontUnit = 'em';

$maxValue = max($arr);
$minValue = min($arr);

echo '<div id="tagcloud">';
$wordCount = 0;
foreach($suffled_keys as $word){
	$weight = $arr[$word];
	$strength = (($weight-$minValue)*100)/($maxValue-$minValue);
	$fontSize = ((($strength*$maxFont)/100)+$minFont);
	
	echo "<span class='label label-default' style='font-size:".$fontSize."em;color:".$color[$wordCount].";border: 1px solid ".$color[$wordCount].";'>{$word}</span>";
	
	$wordCount++;
	if($wordCount == $colorCount){
		$wordCount = 0;
	}
}
echo '</div>';
?>