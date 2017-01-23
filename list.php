<?php
error_reporting(E_ALL);
ini_set ('display_errors', 1);

$dir    = __DIR__.'\files';
$files1 = scandir($dir);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <br>
  <title>Список загруженных файлов</title>
</head>
<body>
<h2>Список файлов</h2>
<?
foreach ($files1 as $key => $value) { 
	if (strlen($files1[$key]) > 3) {?>
	<p><a href="<?=$dir.'/'.$files1[$key].'.json' ?>">Тест №<?=substr($files1[$key], 0, strpos($files1[$key], '.')) ?></a></p>
<?
	}
}
?>
</body>
</html>