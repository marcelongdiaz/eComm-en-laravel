<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    //
    function index(){

        $data= Product::all();

        return view('product', ['products'=>$data]);
    }

    function details($id)
    {
        $data =  Product::find($id);
        return view('detail', ['detail'=>$data]);
    }
    function addToCart(Request $req)
    {

        if($req->session()->has('user')){
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
        }
        else
        {
            return redirect('/login');
        }
    }
    static function cartItem()
    {
        $userId=Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }
    function cartList(){


        $userId=Session::get('user')['id'];
        $products = DB::table('cart')
        ->join('products', 'cart.product_id', '=','products.id')
        ->where("cart.user_id", $userId)
        ->select('products.*', 'cart.id as cart_id')
        ->get();

        return view('cartlist', ['products'=>$products]);
        // return view('cartlist');
    }
    function cartRemove($id)
    {
        Cart::where('id', $id)->delete();
        return redirect('cartlist');
    }
    function orderNow(){
        $id = Session::get('user')['id'];

        $totalPrice = DB::table('cart')
        ->join('products', 'products.id', '=', 'cart.product_id')
        ->where('cart.user_id', $id)
        ->sum('products.price');

        return view('ordernow', ['total'=>$totalPrice]);
    }
    function orderPlace(Request $req){

        $id = Session::get('user')['id'];
        $allCart = Cart::where('user_id', $id)->get();
        foreach ($allCart as $cart)
        {
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "pending";
            $order->payment_method = $req->payment;
            $order->payment_status = "pending";
            $order->address = $req->address;
            $order->created_at = now();
            $order->updated_at = now();
            $order->save();

            Cart::where('id', $cart['id'])->delete();

        }

        return  redirect('ordernow');
    }
}
