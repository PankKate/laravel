@extends('layouts.main')
@section('title') Главная страница @stop
@section('main_content')
  	<div class="main" id="main">
  		<h1>Мои заметки</h1>
      	<div class="categories">
	      	<div class="theme_block" id="films"><a href='#'><div class="block_name">Фильмы</div></div></a>
	      	<div class="theme_block" id="birts"><a href='#'><div class="block_name">Дни рождения</div></div></a>
	      	<div class="theme_block" id="debts"><a href='/debts'><div class="block_name">Долги</div></div></a>
	      	<div class="theme_block" id="another"><a href='#'><div class="block_name">Другое</div></div></a>
      	</div>
      </div>
@stop