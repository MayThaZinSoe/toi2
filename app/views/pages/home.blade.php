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
<?php foreach($lessons as $lesson) : ?>
  <h3><?= $lesson; ?></h3>
<?php endforeach ?>
</body>
</html>
