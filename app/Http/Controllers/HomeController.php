<?php

namespace App\Http\Controllers;
use Session;
use DB;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\SessionCart;
use App\Models\Cart;
use App\Models\Product;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            $mensajes = Message::join('mess_tipos', 'mess_tipos.id', '=', 'messages.icon_type')->get();
        } else {
            $mensajes = null;
        } 

        
       
       if (Session::get('idCarrito') == null) {       

        // Genera un token para la variable de sesión
        $rand_part = str_shuffle("abcdefghijklmnopqrstuvwxyz0123456789".uniqid());
        session(['idCarrito' => $rand_part]);
        
        $id= 3;
        DB::insert('insert into session_carts (user_id, s_cart_id) values (?, ?)', [$id, $rand_part]);
       
       } else {
        
        if (Auth::user()) {            
            // Actualiza el usuario
            DB::update('update session_carts set user_id = ? where s_cart_id = ?',[Auth::user()->id,Session::get('idCarrito')]);
        }
        
        $id_carro = SessionCart::where('s_cart_id', '=', Session::get('idCarrito'))->first();
            
            if ( $id_carro) {
            $id_carro = $id_carro->id;
            
            $carro = Cart::where('session_cart_id', '=', $id_carro)->join('products', 'carts.product_id', '=', 'products.id')->select('products.*', 'carts.id AS cart_id')->get();
            if (isset($carro[0])){
                $n_carros = count($carro);
                $carro = $carro;

            } else {
                $carro = null;
                $n_carros = 0;
            }  
       
            } else {
                $carro = null;
                $n_carros = 0;
            }
        
       }

       $productos = Product::get();       
       

        return view('welcome', ['mensajes' => $mensajes, 'carrito' => $carro, 'productos'=>$productos, 'n_carros' => $n_carros]);        
    }
}
