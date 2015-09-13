<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
  <link rel="shortcut icon" href="{{ asset('search.ico') }}" >
  {{HTML::style('css/style.css')}}
</head>
<body>
	WELCOME to Laravel testing....
  Justine beeber
	<?php foreach($songs as $index => $song) : ?>
	  <h3><a href="songs/{{$index}}"><?= $song; ?></h3>
	<?php endforeach ?>
</body>
</html>
