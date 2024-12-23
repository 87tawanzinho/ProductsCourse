@extends('site.layout') 
@section('title', 'Home Page')
@section('conteudo')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
   @foreach ($produtos as $produto)
    <div class="border border-4 bg-blue-100 p-6 rounded-lg shadow-lg transform transition duration-500 hover:scale-105">
         <h2 class="text-2xl font-bold mb-3">{{ $produto->name }}</h2>
         <p class="text-gray-700 mb-3">{{  Str::limit($produto->description, 40) }}</p>
         <p class="text-green-500 font-semibold text-lg">${{ $produto->price }}</p>
    </div>
   @endforeach
</div>

<div class="mt-6 border-t w-full fixed bottom-0 bg-white py-4 shadow-lg">
   <div class="container mx-auto text-center">
      {{ $produtos->links('custom.pagination') }}
   </div>
</div>
@endsection