<?php

namespace App\Http\Controllers;
use Session;
use DB;
use Illuminate\Http\Request;
use App\Models\Message;

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

        $rand_part = str_shuffle("abcdefghijklmnopqrstuvwxyz0123456789".uniqid());
        session(['idCarrito' => $rand_part]);
        var_dump(Session::get('idCarrito'));
        $id= 3;
        DB::insert('insert into session_carts (user_id, s_cart_id) values (?, ?)', [$id, $rand_part]);
       
       } else {
        if (Auth::user()) {
            

            DB::update('update session_carts set user_id = ? where s_cart_id = ?',[Auth::user()->id,Session::get('idCarrito')]);
        }
        
        // Aquí empiezo a hacer cosas del carrito
        
       }
      
      

       

        return view('welcome', ['mensajes' => $mensajes]);        
    }
}
