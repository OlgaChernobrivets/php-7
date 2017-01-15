<?php
error_reporting(E_ALL);
ini_set ('display_errors', 1);
mb_regex_encoding('utf-8'); 

function crop_str_word($text, $max_words = 5, $sep = " ")
{
	$words = explode($sep, $text);
	if (count($words) > $max_words)
    {
        $text = implode($sep, array_slice($words, 0, $max_words));	
    }
    return $text;
}

function getData()
{
	$DataFile = __DIR__ .'/vk.txt';
	if (!file_exists($DataFile)) {
	die ('Файл данных не найден!');
	}

$dataFromFile = file_get_contents($DataFile);

$posts = json_decode($dataFromFile, true);
if (!$posts) {
	$posts = array();
	}

$array_posts = $posts['response'];
return $array_posts;
}

?>

