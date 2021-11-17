<!DOCTYPE html>
<html>
  <head>
  	<title>@yield('title')</title>
  <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
  <meta charset="utf-8">
  </head>
  <body>
  	<div class="header">
  	
  	<a href='/'>Главная</a>
  	<a href='/films'>Фильмы</a>
	<a href='/births'>Дни рождения</a>
	<a href='/debts'>Долги</a>
	<a href='/another'>Другое</a>
  	<hr>
  	</div>
  	

@yield('main_content')

  </body>
</html>