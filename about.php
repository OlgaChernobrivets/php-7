Домашнее задание к лекции 1.1 «Введение в PHP»

<h1>Olga Chernobrivets</h1>
<?php
$name='Ольга';
$age=25;
$sity='Губкинский';
$email='gmco555@gmail.com';
$inf='Экономист, котороый влюбился в тестирование';
?>
<table>
	<tr>
		<td>Имя</td>
		<td>
		<?php
		echo $name;
		?>
		</td>
	</tr>
	<tr>
		<td>Возраст</td>
		<td>
		<?php
		echo $age;
		?>
		</td>
	</tr>
	<tr>
		<td>Почта</td>
		<td>
		<a href="mailto:gmco555@gmail.com">
			<?php
		echo $email;
		?>
		</a>
		</td>
	</tr>
	<tr>
		<td>Город</td>
		<td>
		<?php
		echo $sity;
		?>
		</td>
	</tr>
	<tr>
		<td>О себе</td>
		<td>
		<?php
		echo $inf;
		?>
		</td>
	</tr>
</table>
