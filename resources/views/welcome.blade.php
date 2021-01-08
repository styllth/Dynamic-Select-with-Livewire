@extends('layouts.app')

@section('content')
    <div class="w-full h-screen flex justify-center flex-col items-center">
        <h1 class="text-5xl mt-8 font-bold text-gray-700">Select dinâmico com Livewire</h1>
        <div class="rounded-2xl box-border md:box-content border-4 border-gray-200 px-4 py-2 mt-24 bg-blue-200 shadow-md transition duration-500 ease-in-out transform hover:translate-y-1 hover:scale-110">
            <a
                class="text-2xl text-indigo-700 text-center "
                href="{{ route('books.list') }}">
                Entrar</a>
        </div>
    </div>

@endsection
