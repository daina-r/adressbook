<?php
$json = file_get_contents(__DIR__ . '/adressbook.json');
$data = json_decode($json, true);
?>

<html>
<head>
	<title>Адресная книга</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
<table>
	<thead>
		<tr>
			<td>Имя</td>
			<td>Фамилия</td>
			<td>Адрес</td>
			<td>Телефон</td>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($data as $item) : ?>
		<tr>
			<td><?=$item['firstName'] ?></td>
			<td><?=$item['lastName'] ?></td>
			<td><?=$item['address'] ?></td>
			<td><?=$item['phoneNumber'] ?></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>

</body>
</html>
