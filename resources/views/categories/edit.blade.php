<!-- resources/views/categories/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto mt-8">
        <div class="bg-white p-8 shadow-md rounded-md">
            <h2 class="text-2xl font-semibold mb-4 text-gray-800">Edit Category</h2>

            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="product_name" class="block text-sm font-medium text-gray-600">Product Name:</label>
                    <input type="text" name="product_name" id="product_name" value="{{ $category->title }}" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <div class="mb-4">
                    <label for="product_description" class="block text-sm font-medium text-gray-600">Product Description:</label>
                    <textarea name="product_description" id="product_description" class="mt-1 p-2 w-full border rounded-md">{{ $category->description }}</textarea>
                </div>

                <!-- زر تحديث الفئة -->
                <div class="mt-4">
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue active:bg-blue-800">Update Category</button>
                </div>
            </form>
        </div>
    </div>
@endsection
