@props (['titulo'])
@props (['icono'])
<li class="list-group-item">
                     <div class="dropdown">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="{{ $icono }} px-2"></i>{{ $titulo }}
                        </a>
                        <ul class="dropdown-menu">
                           {{ $slot }}
                        </ul>
                     </div>
                  </li>