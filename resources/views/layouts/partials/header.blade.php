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

</style>
<header>
   <div class="row">
      <div class="col-sm-2">
         <ul>
            <li><img
               src="{{ asset('assest/images') }}/logo-n.png"
               class="img-fluid" alt="Logo" style="height: 80px;"></li>
         </ul>
      </div>
      <div class="col-sm-5">
         <ul>
            <li>Hola</li>
         </ul>
      </div>
      <div class="col-sm-5">
         <ul class="list-group list-group-horizontal">
            <x-dropdown titulo="{{ $carro['uno'] }}" icono="{{ $carro['dos'] }}">
               <li>
                  @foreach ($carro['tres'] as $tres)
                  <x-carro titulo="{{$tres['titulo']}}" cantidad="{{$tres['cantidad']}}" img="{{$tres['img']}}" precio="{{$tres['precio']}}" categoria="{{$tres['categoria']}}">
                  </x-carro>
                  @endforeach
               </li>
            </x-dropdown>
            <x-dropdown titulo="{{ $notificaciones['uno'] }}" icono="{{ $notificaciones['dos'] }}">
               <li>
                  @foreach ($notificaciones['tres'] as $tres)
                  <x-notificaciones titulo="{{$tres['titulo']}}" cuerpo="{{$tres['cuerpo']}}" n_tipo="{{$tres['n_tipo']}}">
                  </x-notificaciones>
                  @endforeach
               </li>
            </x-dropdown>
            <x-dropdown titulo="Usuario" icono="fas fa-user">
               @guest
               <a class="dropdown-item" href="#"><i class="fas fa-sign-in-alt c_gray"></i></i>Login</a>
               <a class="dropdown-item" href="#"><i class="fas fa-user-plus c_gray"></i>registrate</a>
               <a class="dropdown-item" href="#"><i class="fas fa-envelope-open-text c_gray"></i>Contacto</a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="#"><i class="fas fa-heart c_gray"></i>Favoritos</a>
               @endguest
               @auth
               // The data only available for auth user
               @endauth
            </x-dropdown>
         </ul>
      </div>
   </div>
</header>