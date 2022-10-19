@props (['titulo'])
@props (['icono'])
@props (['volare'])
@props (['n_carros'])

@php
if ($n_carros > 0) {
   $clas = "num";
} else {
   $clas = "";
   $n_carros = "";
}
@endphp

<li class="list-group-item">
   <span class="{{ $clas }}">{{ $n_carros }}</span>
                     <div class="dropdown" id="{{ $volare }}">
                        <a class="dropdown-toggle pointer" data-bs-toggle="dropdown">

      
                        <i class="{{ $icono }} px-2"></i>{{ $titulo }}
                        </a>
                        <ul class="dropdown-menu">
                           {{ $slot }}
                        </ul>
                     </div>
                  </li>

                  