<!-- resources/views/categories/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto mt-8">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">Categories</h1>

        <ul class="grid grid-cols-1 gap-4">
            @forelse($categories as $category)
                <li class="bg-white p-4 rounded-md shadow-md">
                    <h2 class="text-lg font-semibold mb-2">{{ $category->title }}</h2>
                    <p class="text-gray-600">{{ $category->description }}</p>
                </li>
            @empty
                <p class="text-gray-600">No categories found.</p>
            @endforelse
        </ul>
    </div>
@endsection
