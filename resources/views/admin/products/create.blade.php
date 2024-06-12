<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-0 h1">Add Product</p>
                    <hr />
                    @if (Session()->has('error'))
                    <div>
                        {{ Session('error') }}
                    </div>
                    @endif 
                    <p><a href="{{ route('admin/products') }}" class="btn btn-primary mt-4 mb-6">Go Back</a></p>
                    <form action="{{ route('admin/products/save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col rounded-lg  ">
                                <input type="text" name="title" class="form-control" placeholder="Title">
                                @error ('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col rounded-lg">
                                <label for="category">Category :</label>
                                <select class="rounded mx-auto" name="category" id="category">
                                    <option value="Sarapan Pagi">Sarapan Pagi</option>
                                    <option value="Menu Special">Menu Special</option>
                                    <option value="Rice Bowl Set">Rice Bowl Set</option>
                                    <option value="Side Dish">Side Dish</option>
                                    <option value="Jus Segar">Jus Segar</option>
                                    <option value="Aneka Es">Aneka Es</option>
                                </select>
                                @error ('category')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" name="price" class="form-control" placeholder="Price">
                                @error ('price')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="file" name="image" class="form-control" accept="image/png, image/jpg, image/jpeg">
                                @error ('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-grid">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
