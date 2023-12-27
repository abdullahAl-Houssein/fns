<!-- resources/views/categories/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto mt-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Categories</h1>
            <a href="{{ route('categories.create') }}" class="text-blue-500 hover:underline">Add Category</a>
        </div>

        <div class="grid grid-cols-1 gap-4">
            @forelse($categories as $category)
                <div class="bg-white p-6 rounded-md shadow-md mb-4">
                    <h2 class="text-xl font-semibold mb-2 text-gray-800">{{ $category->title }}</h2>
                    <p class="text-gray-600">{{ $category->description }}</p>

                    <div class="mt-4 flex space-x-4">
                        <a href="{{ route('categories.edit', $category->id) }}" class="inline-block bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue active:bg-red-800">
                            Edit
                        </a>

                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?')">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="inline-block bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-red active:bg-red-800">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            @empty
                <p class="text-gray-600">No categories found.</p>
            @endforelse
        </div>
    </div>
@endsection
