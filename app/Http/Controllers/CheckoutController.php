<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderList;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function process(Request $request){
        $cart = session('cart');
        $userName = Auth::user()->name;
        foreach ($cart as $id => $details) {
            OrderList::create([
                'customer' => $userName,
                'title' => $details['title'],
                'quantity' => $details['quantity'],
            ]);
        }
        session()->forget('cart');
        return redirect()->route('checkout.success')->with('success', 'Checkout completed successfully.');
    }
    
    public function display(){
        $orderLists = OrderList::all();
        return view('admin.order', ['orderLists' => $orderLists]);
    }

    public function destroy($id) {
        $order = OrderList::findOrFail($id);
        $order->delete();
        return redirect()->route('admin/order')->with('success', 'Order Completed');
    }
}
