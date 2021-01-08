@extends('layouts.app')

@section('content')
    <div class="w-full max-w-2xl mx-auto">
        <h1 class="text-3xl mt-8 font-bold text-gray-700">Listagem de livros</h1>

        <div class="flex items-center justify-between mt-8">
            <div class="rounded-2xl box-border md:box-content border-4 border-gray-200 px-6 py-2 bg-blue-200">
                <a class="text-2xl text-indigo-700 " href="{{ route('books.create') }}">Adicionar</a>
            </div>
        </div>
        <div class="flex flex-col w-full bg-indigo-200 mt-16 p-8 space-y-2">
            <ul>
                @forelse($books as $book)
                    <li class="w-full px-2 cursor-pointer hover:bg-gray-200">
                        {{ $book->title }} - Autor: {{ $book->user->name }}
                    </li>
                @empty
                    <p>Nenhum livro cadastrado.</p>
                @endforelse
            </ul>
        </div>
    </div>
@endsection
