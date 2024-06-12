

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hello,') }} {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container mt-4">
                  @if(Session('success'))
                      <div class="alert alert-success">
                          {{ Session('success')}}
                      </div>
                  @endif
                </div>
                <p class="text-center text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">Menu List</p>
                @foreach ($category as $categories)
                  <h1 class="ml-6">{{ $categories }}</h1>
                  <div class="grid grid-cols-4 gap-4 p-4">
                    @foreach ($catalog as $product)
                      @if($product->category == $categories)
                      <a href="{{ route('add_to_cart', $product->id) }}" class="group relative block overflow-hidden" style="text-decoration: none">  
                        <img src="{{ asset('images') }}/{{ $product->image }}" alt="" class="h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72"/>
                        <div class="relative border border-gray-100 bg-white p-3">
                          <h3 class="mt-4 text-lg font-medium text-gray-900" style="text-decoration: none; height:70px">{{ $product->title }}</h3>
                          <p class="mt-1.5 text-sm text-gray-700" style="text-decoration: none">Rp {{ $product->price}}</p>
                            <p class="block w-full rounded bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105" style="text-decoration: none">Add to Cart</p>
                        </div>
                      </a>
                      @endif
                    @endforeach
                  </div>
                  @endforeach
                
            </div>
        </div>
    </div>
</x-app-layout>
