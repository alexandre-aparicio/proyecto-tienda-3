@props (['titulo'])
@props (['icono'])
@props (['volare'])

<li class="list-group-item">
                     <div class="dropdown" id="{{ $volare }}">
                        <a class="dropdown-toggle pointer" data-bs-toggle="dropdown">

      
                        <i class="{{ $icono }} px-2"></i>{{ $titulo }}
                        </a>
                        <ul class="dropdown-menu">
                           {{ $slot }}
                        </ul>
                     </div>
                  </li>

                  