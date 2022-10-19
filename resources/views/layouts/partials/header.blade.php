@php
include('cosa.php');
@endphp
<style type="text/css">
   .list-group-item {
   border: none;
   }
   .card-carro{
   width: 380px;
   border: none;
   background-color: #efefef;
   margin: 5px 5px 0px 5px;
   }
   .card-mess {
   width: 340px;
   border: none;
   background-color: #efefef;
   margin-bottom: 5px;
   }
   }
   .border{
   border-radius:12px;
   }
   .score{
   background-color: #B9F6CA;
   }
   .heading1{
   color: #0D47A1;
   }
   .text{
   color: #0D47A1;
   }
   .speed{
   background-color: #FFE082;
   }
   .char{
   font-size: 30px;
   font-weight:700;
   }
   .dropdown-menu {
   padding: 5px 5px 5px 5px;
   }

   .dropdown-toggle::after {
    content: none;
    text-decoration: none;
   }

   .dropdown i {
    margin-top: 20px;
    font-size: 23px;
   }

   .dropdown a {
    color: black;
    text-decoration: none;
    cursor:pointer;
    font-size: 16px;
   }

 .dropdown .c_gray {
   color:  gray;
   margin-right: 12px;
   font-size: 16px;

  }

  .num {
   position: absolute;
    top: 15px;
    right: 80px;
    padding: 0px 7px 0px 7px;
    border-radius: 50%;
    background-color: red;
    color: white;
  }
  .iconos {
   position: relative;
  }

</style>



<meta name="csrf-token" content="{{ csrf_token() }}">
<header>
   <div class="row">
      <div class="col-sm-2">
         <ul class="list-unstyled m-3">
            <li><img
               src="{{ asset('assest/images') }}/logo-n.png"
               class="img-fluid" alt="Logo" style="height: 80px;"></li>
         </ul>
      </div>
      <div class="col-sm-5">
         <ul class="list-unstyled">
            <li>Aquí va un buscador</li>
         </ul>
      </div>
      <div class="col-sm-5">
         <ul class="list-group list-group-horizontal iconos">
            
            <x-dropdown titulo="{{ $carro['uno'] }}" icono="{{ $carro['dos'] }}" volare="myDropdown" n_carros="{{$n_carros}}">

               <li class="st">
                  
                  @if ($carrito)
                  @foreach ($carrito as $carro)
                  <x-header.carro titulo="{{$carro['nombre']}}" cantidad="{{$carro['cantidad']}}" img="{{$carro['imagen_url']}}" precio="{{$carro['precio']}}" cart_id="{{$carro['cart_id']}}" n_carros="{{$n_carros}}">
                  </x-header.carro>
                  @endforeach
                  @else
                  CARRO VACIO
                  @endif
               </li>
            </x-dropdown>

            <x-dropdown titulo="{{ $notificaciones['uno'] }}" icono="{{ $notificaciones['dos'] }} " volare="pepe1" n_carros="0">
               <li>
                  @if ($mensajes)
                  @foreach ($mensajes as $mensaje)
                  <x-header.notificaciones titulo="{{$mensaje['asunto']}}" cuerpo="{{$mensaje['cuerpo']}}" n_tipo="{{$mensaje['icono']}}" color="{{$mensaje['color']}}" >
                  </x-header.notificaciones>
                  @endforeach
                  @else
                  NO HAY MENSAJES
                  @endif
               </li>
            </x-dropdown>
            <x-dropdown titulo="Usuario" icono="fas fa-user" volare="pepe2" n_carros="0">
               @guest
               <x-header.guest-menu>
                  </x-header.guest-menu>
               @endguest
               @auth
               <x-header.user-menu>
               </x-header.user-menu>               
               @endauth
            </x-dropdown>
            @auth
            <li class="fw-light fs-6 " style="margin-top: 12px;">Hola, {{Auth::user()->name}}</li>

            @endauth          

         </ul>
      </div>
   </div>
</header>
<script>
   // Esta funci贸n evita que se cierre el dropdown si se hace click dentro

$('#myDropdown .dropdown-menu').on({
   "click":function(e){
      e.stopPropagation();
    }
});
 

   // Esta funci贸n evita que se cierre el dropdown si se hace click dentro
   

   $(".deleteRecord").click(function(){
      var id = $(this).data("id");
      var token = $("meta[name='csrf-token']").attr("content");
      var pepe = $(this).closest(".card").remove(); 
      var num = $(".num").text();
      console.log(num);
      
      if (num <= 1) {
         var pepe = $(".st").text('CARRO VACIO'); 
         console.log("entro");
         $(".num") .text(num-1);
         
      } else {
         $(".num") .text(num-1);
      }
      
   
   
      $.ajax(
      {
         url: "../cart-delete/"+id,
         type: 'POST',
         data: {
            "id": id,
            "_token": token,
            "_method": "delete",   
         },
         success: function (){  
            
         }
      });
   });
</script>  