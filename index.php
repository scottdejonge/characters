<?php

	$characters = [
		[
			'character' => '‘',
			'title' => 'Opening Single Quote',
			'keys' => 'option + ]',
			'entity' => '&lsquo;',
		],
		[
			'character' => '’',
			'title' => 'Closing Single Quote',
			'keys' => 'option + shift + ]',
			'entity' => '&rsquo;',
		],
		[
			'character' => '“',
			'title' => 'Opening Double Quote',
			'keys' => 'option + [',
			'entity' => '&ldquo;',
		],
		[
			'character' => '”',
			'title' => 'Opening Double Quote',
			'keys' => 'option + shift + [',
			'entity' => '&rdquo;',
		],
		[
			'character' => '–',
			'title' => 'En Dash',
			'keys' => 'option + -',
			'entity' => '&ndash;',
		],
		[
			'character' => '—',
			'title' => 'Em Dash',
			'keys' => 'option + shift + -',
			'entity' => '&mdash;',
		],
		[
			'character' => '‒',
			'title' => 'Figure Dash',
			'keys' => '',
			'entity' => '&#8210;',
		],
		[
			'character' => '-',
			'title' => 'Hyphen-Minus',
			'keys' => '-',
			'entity' => '',
		],
		[
			'character' => '‐',
			'title' => 'Hyphen',
			'keys' => '',
			'entity' => '&#8208;',
		],
		[
			'character' => '−',
			'title' => 'Minus Sign',
			'keys' => '',
			'entity' => '&minus;',
		],
		[
			'character' => '†',
			'title' => '',
			'keys' => '',
			'entity' => '',
		],
		[
			'character' => '‡',
			'title' => '',
			'keys' => '',
			'entity' => '',
		],
		[
			'character' => '§',
			'title' => '',
			'keys' => '',
			'entity' => '',
		],
		[
			'character' => '¶',
			'title' => '',
			'keys' => '',
			'entity' => '',
		],
		[
			'character' => '❧',
			'title' => '',
			'keys' => '',
			'entity' => '',
		],
		[
			'character' => '№',
			'title' => '',
			'keys' => '',
			'entity' => '',
		],
		[
			'character' => '☞',
			'title' => '',
			'keys' => '',
			'entity' => '',
		],
		[
			'character' => '…',
			'title' => '',
			'keys' => '',
			'entity' => '',
		],
		[
			'character' => '•',
			'title' => '',
			'keys' => '',
			'entity' => '',
		],
		[
			'character' => '·',
			'title' => '',
			'keys' => '',
			'entity' => '',
		],
		[
			'character' => '←',
			'title' => '',
			'keys' => '',
			'entity' => '',
		],
		[
			'character' => '↑',
			'title' => '',
			'keys' => '',
			'entity' => '',
		],
		[
			'character' => '→',
			'title' => '',
			'keys' => '',
			'entity' => '',
		],
		[
			'character' => '↓',
			'title' => '',
			'keys' => '',
			'entity' => '',
		],
		[
			'character' => '↔',
			'title' => '',
			'keys' => '',
			'entity' => '',
		],
		[
			'character' => '©',
			'title' => '',
			'keys' => '',
			'entity' => '',
		],
		[
			'character' => '®',
			'title' => '',
			'keys' => '',
			'entity' => '',
		],
		[
			'character' => '™',
			'title' => '',
			'keys' => '',
			'entity' => '',
		],
		[
			'character' => '¢',
			'title' => '',
			'keys' => '',
			'entity' => '',
		],
		[
			'character' => '£',
			'title' => '',
			'keys' => '',
			'entity' => '',
		],
		[
			'character' => '€',
			'title' => '',
			'keys' => '',
			'entity' => '',
		],
		[
			'character' => '°',
			'title' => '',
			'keys' => '',
			'entity' => '',
		],
		[
			'character' => '½',
			'title' => '',
			'keys' => '',
			'entity' => '',
		],
		[
			'character' => '±',
			'title' => '',
			'keys' => '',
			'entity' => '',
		],
		[
			'character' => '×',
			'title' => '',
			'keys' => '',
			'entity' => '',
		],
		[
			'character' => '÷',
			'title' => '',
			'keys' => '',
			'entity' => '',
		],
		[
			'character' => '≈',
			'title' => '',
			'keys' => '',
			'entity' => '',
		],
		[
			'character' => '≠',
			'title' => '',
			'keys' => '',
			'entity' => '',
		],
		[
			'character' => '«',
			'title' => '',
			'keys' => '',
			'entity' => '',
		],
		[
			'character' => '»',
			'title' => '',
			'keys' => '',
			'entity' => '',
		],
		[
			'character' => '‹',
			'title' => '',
			'keys' => '',
			'entity' => '',
		],
		[
			'character' => '›',
			'title' => '',
			'keys' => '',
			'entity' => '',
		],
		[
			'character' => '',
			'title' => '',
			'keys' => '',
			'entity' => '',
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
					<?php
						$keys = explode(' + ', $character['keys']);
						$keys = '<kbd>' . implode('</kbd> + <kbd>', $keys) . '</kbd>';
						$code = '<code>' . htmlentities($character['entity']) . '</code>';
					?>
					<tr>
						<td><?php echo $character['character']; ?></td>
						<td><?php echo $character['title']; ?></td>
						<td><?php if (!empty($character['keys'])) echo $keys; ?></td>
						<td><?php if (!empty($character['entity'])) echo $code; ?></code></td>
					</tr>
				<?php endforeach; ?>

				</tbody>
			</table>

		</main>

	</body>
</html>