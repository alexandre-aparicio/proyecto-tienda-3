<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\SessionCart;

use Session;


class CartController extends Controller
{
    public function store(Request $request)
    {
        echo "Llega aqui";
        $post = new Cart;
        $post->product_id = $request->input('producto');
        $post->cantidad = $request->input('cantidad');
        
        
        $id_carro = SessionCart::where('s_cart_id', '=', Session::get('idCarrito'))->first();
        $id_carro = $id_carro->id;
        
        $post->session_cart_id = $id_carro;
        $post->save();

        session()->flash('status', 'Alumno creado con éxito');
        return back();
       
    }

    public function destroy(Cart $id)
    
    {
        $id->delete();
        return back()->with('status', 'Borrado con éxito');
    }
}
