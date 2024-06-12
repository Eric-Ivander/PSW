
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cart') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table id="cart" class="table table-hover-condensed">
                    <thead>
                        <tr>
                            <th style="width:50%">Product</th>
                            <th style="width:10%">Price</th>
                            <th style="width:8%">Quantity</th>
                            <th style="width:22%" class="text-center">Subtotal</th>
                            <th style="width:10%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $total = 0 @endphp
                        @if(session('cart'))
                            @foreach (session('cart') as $id => $details)
                                @php $total += $details['price'] * $details['quantity'] @endphp
                                <tr data-id="{{ $id }}">
                                    <td data-th="Product">
                                        <div class="row">
                                            <div class="col-sm-3 hidden-xs">
                                                <img src="{{ asset('images')}}/{{ $details['image']}}" width="100" height="100" class="img-responsive">
                                            </div>
                                            <div class="col-sm-9">
                                                <h4 class="nomargin">{{ $details['title'] }}</h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-th="Price">Rp {{ $details['price'] }}</td>
                                    <td data-th="Quantity">
                                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity cart_update" min="1">    
                                    </td>
                                    <td data-th="Subtotal" class="text-center">Rp {{ $details['price'] * $details['quantity'] }}</td>
                                    <td class="action" data-th="">
                                        <button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o mr-2"></i>Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5" style="text-align:right;"><h3><strong>Total : Rp {{ $total }}</strong></h3></td>
                        </tr>
                        <tr>
                            <td colspan="5" style="text-align: right;">
                                <form action="{{ route('checkout.process') }}" method="POST">
                                    @csrf
                                    <a href="{{ url('/dashboard') }}" class="btn btn-danger"><i class="fa fa-arrow-left mr-2"></i>Continue Shopping</a> 
                                    <button class="btn btn-success" type="submit" id="checkout-live-button"><i class="fa fa-money mr-2"></i>Checkout</button>
                                </form>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <script type="text/javascript">
    
                            $(".cart_update").change(function (e) {
                                e.preventDefault();
                            
                                var ele = $(this);
                            
                                $.ajax({
                                    url: '{{ route('update_cart') }}',
                                    method: "patch",
                                    data: {
                                        _token: '{{ csrf_token() }}', 
                                        id: ele.parents("tr").attr("data-id"), 
                                        quantity: ele.parents("tr").find(".quantity").val()
                                    },
                                    success: function (response) {
                                    window.location.reload();
                                    }
                                });
                            });
                            
                            $(".cart_remove").click(function (e) {
                                e.preventDefault();
                            
                                var ele = $(this);
                            
                                if(confirm("Do you really want to remove?")) {
                                    $.ajax({
                                        url: '{{ route('remove_from_cart') }}',
                                        method: "DELETE",
                                        data: {
                                            _token: '{{ csrf_token() }}', 
                                            id: ele.parents("tr").attr("data-id")
                                        },
                                        success: function (response) {
                                            window.location.reload();
                                        }
                                    });
                                }
                            });
                </script>
            </div>
        </div>
    </div>
</x-app-layout>