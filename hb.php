<?php
$url='http://app.cjyun.org/video/player/stream?stream_id='.$_GET['id'].'&site_id=10008';
header('Location:'.json_decode(file_get_contents($url))->stream);
?>