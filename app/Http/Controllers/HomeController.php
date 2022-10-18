<?php

namespace App\Http\Controllers;
use Session;
use DB;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\SessionCart;
use App\Models\Cart;

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
        
        // Aquí empiezo a hacer cosas del carrito
        
       }

       

       $id_carro = SessionCart::where('s_cart_id', '=', Session::get('idCarrito'))->first();
            $id_carro = $id_carro->id;
            
        $carro = Cart::where('session_cart_id', '=', $id_carro)->join('products', 'carts.product_id', '=', 'products.id')->select('products.*')->get();   
       
             

            
       
      
      
        
       

        return view('welcome', ['mensajes' => $mensajes, 'carrito' => $carro] );        
    }
}
