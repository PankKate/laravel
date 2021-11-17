@extends('layouts.main')
@section('title') Долги @stop
@section('main_content')
	<div class="main">
		<h1>Мои долги</h1>
		<h5>Создание новой записи</h5>

		@if($errors->any())
			<div class="errors">
				<ul>
					@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		<form method="post" action="/debts/check">
			@csrf
			<label> <input type="text" name="name" id="name">Имя</label><br>	        	       
	        <label> <input type="value" name="value" id="value">Сумма</label><br>	        
	        <label> <input type="text" name="phone" id="phone">Телефон</label><br>
	        <label> <input type="text" name="note" id="note">Заметка</label><br>
	        <button type="submit">Добавить</button>
		</form>
		<h1> Все долги</h1>
	@foreach($data as $el)
		<div class="debts_output">
			<h5>{{ $el->name }}</h5>
			<p>{{ $el->value }}</p>
			<p>{{ $el->phone }}</p>
			<p>{{ $el->note }}</p>
		</div>
	@endforeach
	</div>

	
@stop