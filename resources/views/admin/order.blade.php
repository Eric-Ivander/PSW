<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                        <thead>
                            <tr>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Customer</th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Order</th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Quantity</th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Status</th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Action</th>
                            </tr>
                        </thead>
                    
                        <tbody class="divide-y divide-gray-200">
                            @foreach($orderLists as $order)
                            <tr class="odd:bg-gray-100">
                                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $order->customer }}</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $order->title }}</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $order->quantity }}</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $order->status }}</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                    <form action="{{ route('admin/order/destroy', ['id' => $order->id]) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" type="submit">Complete Order</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>