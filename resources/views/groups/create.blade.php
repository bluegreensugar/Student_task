@extends ('_layout')

@section ('content')
	<form action = "{{ route ('groups.store') }}" method = "POST">
	 	@csrf
	  	<div class="input-group-prepend">
	    	<span class="input-group-text">Добавление группы</span>
	  	</div>
	  	<div style="width: 300px">
	 		<input type="text" aria-label="Название группы" class="form-control" placeholder="Введите название группы" name='title'>
              <input type="text" aria-label="Описание группы" class="form-control" placeholder="Введите описание группы" name="description">
              <input type="text" aria-label="Оценка по программированию" class="form-control" placeholder="Введите оценку по программированию" name='avg_prog'>
              <input type="text" aria-label="Оценка по математике" class="form-control" placeholder="Введите оценку по математике" name='avg_math'>
              <input type="text" aria-label="Оценка по графике" class="form-control" placeholder="Введите оценку по графике" name='avg_graf'>
      
	  		<div><button class="btn btn-outline-success" type="submit">Добавить</button></div>
	  	</div>
	</form>
@endsection