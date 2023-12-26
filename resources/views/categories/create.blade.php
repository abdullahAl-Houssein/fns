<!-- resources/views/categories/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto mt-8">
        <div class="bg-white p-8 shadow-lg rounded-md">
            <h2 class="text-2xl font-semibold mb-4 text-gray-800">Add New Category</h2>

            <form action="{{ route('categories.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="product_name" class="block text-sm font-medium text-gray-600">Product Name:</label>
                    <input type="text" name="product_name" id="product_name" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <div class="mb-4">
                    <label for="product_description" class="block text-sm font-medium text-gray-600">Product Description:</label>
                    <textarea name="product_description" id="product_description" class="mt-1 p-2 w-full border rounded-md"></textarea>
                </div>

                <!-- زر إضافة المنتج -->
                <div class="mt-4">
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue active:bg-blue-800">Add Category</button>
                </div>
            </form>
        </div>
    </div>
@endsection
