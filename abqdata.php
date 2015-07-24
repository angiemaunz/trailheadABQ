<?php
$json=file_get_contents("http://data.cabq.gov/community/opentrails/trail_segments.geojson");
$json=json_decode($json);
var_dump($json);