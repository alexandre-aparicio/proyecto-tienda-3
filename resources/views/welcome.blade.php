@extends('layouts.plantilla')

@section('content')

<div class="container">
<div class="row g-4 row-cols-xl-4 row-cols-lg-3 row-cols-2 row-cols-md-2 mt-4">
	@foreach ($productos as $producto)

                                 <div class="col">
                                    <div class="card ">                                                                             
                                        <a href="#">
                                            <img src="{{ asset('assest/images/shop/products') }}/{{ $producto->imagen_url }}.jpg" alt="" class="img-fluid">
                                        </a>   
                                        <div class="text-small m-1"><a href="#!" class="text-decoration-none text-muted">
                                            <small></small></a>
                                        </div>  
                                        <h6 class="fs-2 m-2"><a href="#" class="text-inherit text-decoration-none">{{ $producto->nombre }}</a></h6>
                                        <div class="d-flex justify-content-between align-items-center m-3">
                                            <div>
                                                <span class="text-dark">{{ $producto->precio }}</span>
                                            </div>                    
                                            
                                            <form action="{{ route('cart-insert') }}" method="POST">
                                                @csrf
                                            <input type="hidden" value="{{ $producto->id }}" name="producto">
                                            <input type="hidden" value="1" name="cantidad">
                                                   <button type="submit" class="btn btn-primary btn-sm">Add</button>
                                            </form>
                                        </div>                                                                      
                                    </div>
                                
                                                                
                                        
                                
                            </div>


@endforeach
 </div>
@endsection