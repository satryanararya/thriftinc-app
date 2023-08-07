<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use Stripe;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function home()
    {
        $products = Product::orderBy('name','asc')->paginate(4);

        $id = Auth::user()->id;

        $carts = Cart::where('user_id','=',$id)->get();
        
        $trendingProducts = Product::where('status', "Trending") // Mengambil 4 produk terkait
        ->get();

        $offerProducts = Product::where('status',"Related")
        ->get();

        return view('home',compact('products','trendingProducts','carts','offerProducts'));
    }

    public function index()
    {
        $products = Product::paginate(4);
        
        $trendingProducts = Product::where('status', "Trending") // Mengambil 4 produk terkait
        ->get();

        $offerProducts = Product::where('status',"Related")
        ->get();

        return view('index',compact('products','trendingProducts','offerProducts'));
    }

    public function adminHome()
    {
        return view('dashboard');
    }

    public function product_details($id)
    {
        if(Auth::id())
        {
            $paginate = Product::paginate(4);

            $products = Product::find($id);

            $user_id = Auth::user()->id;

            $carts = Cart::where('user_id','=',$user_id)->get();

            $relatedProducts = Product::where('category', $products->category)
            ->where('id', '!=', $products->id)
            ->take(4) // Mengambil 4 produk terkait
            ->get();

            $productColors = explode(',', $products->color);

            return view('products.product_details',compact('products','relatedProducts','paginate','productColors','carts'));
        }
        else {
            $paginate = Product::paginate(4);

            $products = Product::find($id);

            $relatedProducts = Product::where('category', $products->category)
            ->where('id', '!=', $products->id)
            ->take(4) // Mengambil 4 produk terkait
            ->get();

            $productColors = explode(',', $products->color);

            return view('products.product_details',compact('products','relatedProducts','paginate','productColors'));
        }
    }

    public function add_cart(Request $request, $id)
    {
        if(Auth::id())
        {
            $user = Auth::user();

            $product = Product::find($id);

            $cart = new Cart;

            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->user_id = $user->id;
            $cart->phone = $user->phone;
            $cart->address = $user->address;

            $cart->product_name = $product->name;
            $cart->product_id = $product->id;
            $cart->price = $product->price * $request->quantity;
            $cart->cover = $product->cover;
            $cart->quantity = $request->quantity;

            $cart->save();

            return redirect()->back();

        }

        else
        {
            return redirect('login');
        }
    }

    public function show_cart()
    {
        if(Auth::id())
        {

            $id = Auth::user()->id;

            $cart = Cart::where('user_id','=',$id)->get();


            
            return view('products.show_cart',compact('cart'));
        }
        else 
        {
            return redirect('login');
        }
    }

    public function remove_cart($id)
    {
        $cart = Cart::find($id);

        $cart->delete();

        return redirect()->back();
    }

    public function cash_order()
    {
        $user = Auth::user();
        $userid = $user->id;

        $data = Cart::where('user_id','=',$userid)->get();

        foreach($data as $data)
        {
            $order = new Order;

            $order->name = $data->name;
            $order->email = $data->email;
            $order->phone = $data->phone;
            $order->address = $data->address;
            $order->product_name = $data->product_name;
            $order->quantity = $data->quantity;
            $order->price = $data->price;
            $order->cover = $data->cover;
            $order->product_id = $data->product_id;
            $order->user_id = $data->user_id;

            $order->payment_status='COD';
            $order->delivery_status='Processing';

            $order->save();

            $cart_id = $data->id;
            $cart = Cart::find($cart_id);
            $cart->delete();
        }
        return redirect()->back()->with('Success','Thanks for the order! Ditunggu kurirnya <3');
    }

    public function payment($totalprice)
    {   
        if(Auth::id())
        {
            $id = Auth::user()->id;

            $orders = Order::where('user_id','=',$id)->get();

            return view('products.payment',compact('totalprice','orders'));
        }
        else 
        {
            return redirect('login');
        }
    }

    public function paymentPost(Request $request, $totalprice)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => $totalprice * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Thanks for the payment" 
        ]);

        $user = Auth::user();
        $userid = $user->id;

        $data = Cart::where('user_id','=',$userid)->get();

        foreach($data as $data)
        {
            $order = new Order;

            $order->name = $data->name;
            $order->email = $data->email;
            $order->phone = $data->phone;
            $order->address = $data->address;
            $order->product_name = $data->product_name;
            $order->quantity = $data->quantity;
            $order->price = $data->price;
            $order->product_id = $data->product_id;
            $order->user_id = $data->user_id;
            $order->cover = $data->cover;

            $order->payment_status='Paid';
            $order->delivery_status='Processing';

            $order->save();

            $cart_id = $data->id;
            $cart = Cart::find($cart_id);
            $cart->delete();
        }
        Session::flash('success', 'Payment successful!');

        return back();
    }

    public function order()
    {
        $orders = Order::orderBy('created_at','desc')->get();
        return view('dashboard_order',compact('orders'));
    }

    public function delivered($id)
    {
        $order = Order::find($id);

        $order->delivery_status = "Delivered";

        $order->payment_status = "Paid";

        $order->save();

        return redirect()->back();
    }

    public function show_order()
    {
        if(Auth::id())
        {
            $user = Auth::user();
            $user_id = $user->id;

            $orders = Order::where('user_id','=',$user_id)->get();
            return view('products.show_order', compact('orders'));
        }
        else
        {
            return redirect('login');
        }
    }

    public function cancel_order($id)
    {
        $order = Order::find($id);

        $order->delivery_status = 'Order canceled';

        $order->save();

        return redirect()->back();
    }
}
