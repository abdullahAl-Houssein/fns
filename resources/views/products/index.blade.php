<!-- resources/views/products/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto mt-8">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">Products</h1>

        <div class="grid grid-cols-1 gap-4">
            @forelse($products as $product)
                <div class="bg-white p-6 rounded-md shadow-md mb-4">
                    <h2 class="text-xl font-semibold mb-2 text-gray-800">{{ $product->name }}</h2>
                    <p class="text-gray-600">{{ $product->description }}</p>

                    <div class="mt-4 flex space-x-4">
                        <a href="{{ route('products.show', $product->id) }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                            View Details
                        </a>
                        <!-- يمكنك إضافة المزيد من الأزرار حسب الحاجة -->
                    </div>
                </div>
            @empty
                <p class="text-gray-600">No products found.</p>
            @endforelse
        </div>
    </div>
@endsection
