<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Spatie\FlareClient\Flare;

class ProductController extends Controller
{
    public function index (){
        $products = Product::orderby('id', 'desc')->get();
        $total = Product::count();
        return view('admin.products.home', compact(['products', 'total']));
    }

    public function display (){
        $category = [
            'Sarapan Pagi',
            'Menu Special',
            'Rice Bowl Set',
            'Side Dish',
            'Jus Segar',
            'Aneka Es',
        ];

        $catalog = Product::all();
        return view('dashboard', compact('category','catalog'));
    }

    public function cart () {
        return view('cart');
    }

    public function addToCart($id){

        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }else{
            $cart[$id] = [
                "title" => $product->title,
                "image" => $product->image,
                "price" => $product->price,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart');
    }

    public function updates (Request $request) {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', "Cart successfully updated");
        }
    }

    public function remove (Request $request) {
        if($request->id){
            $cart = session()->get('cart');
            if(isset($cart[$request->id])){
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed');
        }
    }

    public function checkout(Request $request){
        
        
    }

    public function create(){
        return view('admin.products.create');
    }
    public function save(Request $request){
        $validation = $request->validate([
            'title'=>'required',
            'category'=>'required',
            'price'=>'required',
            'image'=>'required',
        ]);
        if ($request->hasFile('image')) {
            $imageName = $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('products', $imageName, 'public');
            $validation['image'] = $imageName;
        }
        $data = Product::create($validation);
        if ($data){
            session()->flash('success', 'Product added successfully');
            return redirect(route('admin/products'));
        } else {
            session()->flash('error', 'some problem occured');
            return redirect(route('admin.products.create'));
        }
    }
    public function edit($id){
        $products = Product::findOrFail($id);
        return view('admin.products.update', compact('products'));
    }

    public function delete($id){
        $products = Product::findOrFail($id)->delete();
        if($products){
            session()->flash('success', 'Product Deleted Successfully');
            return redirect(route('admin/products'));
        } else {
            session('error', 'Product Delete Failed');
            return redirect(route('admin/products'));
        }
    }

    public function update(Request $request, $id){
        $product = Product::findOrFail($id);
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'price' => 'required|numeric',
            'file' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $product->title = $request->input('title');
        $product->category = $request->input('category');
        $product->price = $request->input('price');

        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $originalName = $image->getClientOriginalName();
            $image->move(public_path('images'), $originalName);
            $product->image = $originalName;
        }
        $data = $product->save();
        if ($data) {
            session()->flash('success', 'Product updated successfully');
            return redirect(route('admin/products'));
        } else {
            session()->flash('error', 'Some problem occurred');
            return redirect(route('admin/products/update', $id));
        }
    }
}
