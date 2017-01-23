 <?
error_reporting(E_ALL);
ini_set ('display_errors', 1);

	require 'functions_2.2.php';

	if (isPOST()) {
		$result = uploadFile('test');
		if (!$result['is_success']) {
			die ($result['message']);
		}
		$clientName = $result['file_path'];
	}
	
	$login = (string)filter_input(INPUT_POST, 'login');
	$test_number = (int)filter_input(INPUT_POST, 'test');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <br>
  <title>Форма для загрузки файлов</title>
</head>
<body>
	<? if (!isPost()): ?>
		<form action="" method="POST" enctype="multipart/form-data">
			<label for = "login">Имя</label>
			<input id = "login" name="login" />
			<label for = "test">Введите номер теста</label>
			<input id = "test" name="test" />

			<button type="submit">Отправить</button>
		</form>
	<? else: ?>
		<p>Ваш имя: <?= htmlspecialchars($login) ?></p>
		<? foreach (open_test ($test_number) as $questoions) : ?>
		<form action="" method="POST" enctype="multipart/form-data">
		<tr>
			<td><?= $questoions ['id'] ?></td>
			<td><?= $questoions ['question'] ?></td></br>
			<td> 
			<label for = "Answer">Ответ</label>
			<input id = "Answer" name="Q<?= $questoions ['id'] ?>" /></br>
			</td>
		</tr>
		<? endforeach; ?>
		<button type="submit">Отправить</button>
		</form>
<?	endif; ?>
</body>
</html>