@extends('admin.template.main')

@section('title', 'Editar Artículo '.$tag->name)

@section('content')
	{!!  Form::open(['route' => ['admin.article.update', $tag], 'method' => 'PUT']) !!}
		
	{!!  Form::close() !!}

@endsection