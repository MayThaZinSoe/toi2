<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
  <link rel="shortcut icon" href="{{ asset('search.ico') }}" >
  {{HTML::style('css/style.css')}}
</head>
<body>
	<h2>about cats pages</h2>

There are over <?php echo $number_of_cats; ?>
cats on this side.


</body>
</html>
