<?php 
error_reporting(E_ALL);
ini_set ('display_errors', 1);
mb_regex_encoding('utf-8');

include 'functions_1.4.php';

$result = array();

foreach (getData() as $posts => $array)
{
	if (isset($array["attachment"]["type"]))
	{
		if ($array["attachment"]["type"] === "photo")
		{
			$result[] = $array;
		}
	}	
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <br>
  <h3>Сервис «Новогодние поздравления»</h3>
 </head>
 <body>

<?php
foreach ($result as $key => $value)
	{
	$text = $result[$key]["text"];
	$add = "...";
	$text = crop_str_word($text, $max_words = 5, $sep = " ");
if (strpos($text, "."))
	{
	echo substr($text, 0, strpos($text, "."));
	}
		elseif(preg_match('(!|,|—|:|;)', $text, $matches, PREG_OFFSET_CAPTURE))
		{
		$text = substr($text, 0, $matches[0][1]);
		echo "$text$add";
		}
else {echo "$text$add";}
?>
 <div class="col-md-3 portfolio-item">
     <img class="img-responsive" src="<?php echo $result[$key]["attachment"]["photo"]["src"]; ?>" alt="Не хочу">
 </div>
 </br>
 <? 
}
?>

</div>
</body>
</html>
