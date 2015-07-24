<?php
$json=file_get_contents("http://data.cabq.gov/community/opentrails/trail_segments.geojson");
$json=json_decode($json);
foreach($json as $item) {
	var_dump($item);
}