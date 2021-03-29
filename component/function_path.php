
<?php
$host = $_SERVER["HTTP_HOST"];
$root = '/';
if ($host == 'localhost:8888') {
	$root = '/g-stage/';
} elseif ($host == 'gratest.sakura.ne.jp') {
	$root = '/g-stage/';
}
?>