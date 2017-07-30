<?php
;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use User;
use Auth;
use App\Order;
use App\OrderDetail;
use DateTime;
use App\Product;
use Illuminate\Support\Facades\Input;

class CartController extends Controller
{
	public function index(){
		if (Auth::check())
		{
			return view('layouts.cart.index');
		}
		return view('auth.login');
	}

    public function add($id){
    	/*$product = Product::find($id);
    	Cart::add($product->id, $product->name, 1, $product->price, ['images' => $product->images]);
    	// $content = Cart::content();
    	// dd($content);
    	return redirect('/');*/
        $product = Product::find($id);
        Cart::add($product->id, $product->name, 1, $product->price, ['images' => $product->images]);
        $count = Cart::count();
        return response(['count' => $count], 200);
    }

    public function delete($rowId)
    {
    	Cart::remove($rowId);
    	return redirect('/carts')->withSuccess('Cat has been deleted.');
    }


    public function checkout()
    {   
       return view('layouts.cart.checkout');
    }

    public function store_order(Request $request)
    {
        $name = $request->Input('name_receiver');
        $datetime = new DateTime('now');

        $order = Order::create(['date' => $datetime, 'address_order' => $request->Input('address_order'), 'phone' => $request->Input('phone'), 'name_receiver' => $request->Input('name_receiver'), 'user_id' => Auth::user()->id ]);

        

        $content = Cart::content();
        foreach ($content as $item) {
            OrderDetail::create(['product_id' => $item->id, 'quantity' => $item->qty, 'price' => $item->subtotal(), 'order_id' => $order->id]);
        }
        Cart::destroy();
        return redirect('/');
        
    }
}
