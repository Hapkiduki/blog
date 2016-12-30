@extends('admin.template.main')

@section('title', 'Listado de Articulos')

@section('content')
<a href="{{ route("admin.articles.create")}}" class="btn btn-info">Registrar nuevo artículo</a><hr>
<!-- BUSCADOR DE ARTICLES -->
		{!! Form::open(['route' => 'admin.articles.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}

			<div class="input-group">
				{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar artículo..', 'aria-describedby' => 'search']) !!}
				<span class="input-group-addon" id="search">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
				</span>
			</div>
		{!! Form::close() !!}
 <!-- FIN DEL BUSCADOR -->

	<table class="table table-striped">
  		<thead>
  			<th>ID</th>
  			<th>Título</th>
  			<th>Categoría</th>
  			<th>User</th>
  			<th>Acción</th>
  		</thead>
  		<tbody>
  			@foreach($articles as $article)
				<tr>
					<td>{{ $article->id}}</td>
					<td>{{ $article->title}}</td>
					<td>{{ $article->category->name }}</td>
					<td>{{ $article->user->name}}</td>
					<td>
					<a href="{{ route("admin.articles.edit", $article->id)}}" class='btn btn-warning'><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> | 
					<a href="{{ route("admin.articles.destroy", $article->id)}}" onclick="return confirm('Seguro que deseas eliminarlo?')" class='btn btn-danger'><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> </td>
				</tr>

  			@endforeach
  		</tbody>
	</table>
	<div class="text-center">
	{!! $articles->render() !!} 
	</div>
	
@endsection
