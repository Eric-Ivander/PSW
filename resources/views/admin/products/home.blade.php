<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="mb-0 h1">List Product</p>
                        <a href="{{ route('admin/products/create') }}" class="btn btn-primary">Add Product</a>
                    </div>
                    <hr />
                    @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                            <thead>
                                <tr>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">#</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Title</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Category</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Price</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Action</td>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @forelse ($products as $product)
                                <tr class="odd:bg-gray-50">
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $loop->iteration }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $product->title }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $product->category }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">Rp {{ $product->price }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('admin/products/edit', ['id'=>$product->id]) }}" type="button" class="btn btn-secondary">Edit</a> 
                                            <a href="{{ route('admin/products/delete', ['id'=>$product->id]) }}" type="button" class="btn btn-danger">Delete</a> 
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-center" colspan="5">Product not Found</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
