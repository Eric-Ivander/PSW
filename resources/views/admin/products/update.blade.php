<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="h1 mb-0">Edit Product</p>
                    <hr />
                    <form action="{{ route('admin/products/update', $products->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Product Name</label>
                                <input type="text" name="title" class="form-control" placeholder="Title" value="{{$products->title}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-2">
                                <label class="form-label" for="category">Category : </label>
                                <select class="rounded mx-auto" name="category" id="category">
                                    <option value="Sarapan Pagi">Sarapan Pagi</option>
                                    <option value="Menu Special">Menu Special</option>
                                    <option value="Rice Bowl Set">Rice Bowl Set</option>
                                    <option value="Side Dish">Side Dish</option>
                                    <option value="Jus Segar">Jus Segar</option>
                                    <option value="Aneka Es">Aneka Es</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Price</label>
                                <input type="text" name="price" class="form-control" placeholder="Price" value="{{$products->price}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" name="file" class="form-control" value="{{$products->image}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-grid">
                                <button class="btn btn-warning">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
