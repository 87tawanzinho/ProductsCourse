@extends('site.layout') 
@section('title', 'Home Page')
@section('conteudo')
  @foreach ($produtos as $produto)
     <div class="border border-4 bg-blue-100 ">
        <h2>{{ $produto->name }}</h2>
        <p>{{ $produto->description }}</p>
        <p>{{ $produto->price }}</p>
     </div>
  @endforeach
@endsection