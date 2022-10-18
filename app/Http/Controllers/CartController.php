<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function store(Request $request)
    {
        
        $post = new Cart;
        $post->product_id = $request->input('producto');
        $post->cantidad = $request->input('cantidad');
        $post->session_cart_id = 10;
        $post->save();

        session()->flash('status', 'Alumno creado con éxito');
        return back();;
       
    }

    public function destroy(Cart $id)
    
    {
        $id->delete();
        return back()->with('status', 'Borrado con éxito');
    }
}
