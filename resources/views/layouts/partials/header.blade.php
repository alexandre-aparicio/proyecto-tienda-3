@php
include('cosa.php');
@endphp
<style type="text/css">

.card{
  width: 380px;
  border: none;

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

</style>
<header>
   <div class="row">
      <div class="col-sm-2">
         <ul>
            cosa
            <li>Hola</li>
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
                  <x-notificaciones titulo="{{$tres['titulo']}}" cuerpo="{{$tres['cuerpo']}}">
                  </x-notificaciones>
                  @endforeach
               </li>
            </x-dropdown>
                    
         </ul>
      </div>
   </div>
</header>