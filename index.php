<?php

	$characters = [
		[
			'character' => '‘',
			'title' => 'Opening Single Quote',
			'keys' => 'option + ]',
			'entity' => '&lsquo;',
		],
	];

?><!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Characters</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="/generated/styles/styles.css">
	</head>
	<body>

		<main role="main">
			<h1>HTML Characters</h1>
			<table>
				<caption>Character List</caption>
				<thead>
					<tr>
						<th>Character</th>
						<th>Title</th>
						<th>Shortcut</th>
						<th>HTML Entity</th>
					</tr>
				</thead>
				<tbody>

				<?php foreach ($characters as $character) : ?>
					<tr>
						<td><?php echo $character['character']; ?></td>
						<td><?php echo $character['title']; ?></td>
						<td><kbd><?php echo $character['keys']; ?></kbd></td>
						<td><code><?php echo htmlentities($character['entity']); ?></code></td>
					</tr>
				<?php endforeach; ?>

				</tbody>
			</table>

		</main>

	</body>
</html>