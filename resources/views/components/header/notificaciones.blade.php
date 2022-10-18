@props (['titulo'])
@props (['cuerpo'])
@props (['n_tipo'])
@props (['color'])

<div class="card card-mess p-1" style="background: {{ $color }};">         

               <div class="d-flex flex-row align-items-center">
                <div class="p-1 px-2 d-flex flex-column align-items-center rounded">
                    <img
                            src="{{ asset('assest/images') }}/{{$n_tipo}}.png"
                            class="img-fluid rounded-3" alt="Shopping item" style="width: 46px;">
                </div>
                <div class="ml-2 p-3">
                    <h6 class="heading1">{{$titulo}}</h6>
                    <span>{{ $cuerpo }}</span> 
                 </div>
               </div>                 
              
            </div>