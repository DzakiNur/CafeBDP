<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function cart() {
        return view('cart');
    }

    public function addToCart($id){
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }  else {
            $cart[$id] = [
                "name" => $product->name,
                "image" => $product->image,
                "price" => $product->price,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product add to cart successfully!');
    }

    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed!');
        }
    }

    public function checkout(){
        return view('checkout');
    }

    public function checkoutPesanan($id)
    {
        $product = Product::findOrFail($id);
        $checkout = session()->get('checkout', []);

        if(isset($checkout[$id])) {
            $checkout[$id] = [
                "name" => $checkout->name,
                "image" => $checkout->image,
                "price" => $checkout->price,
                "description" => $checkout->description,
                "quantity" => $checkout->quantity,
            ];
        }

        session()->put('checkout', $checkout);
        return redirect('checkout');
    }
}
