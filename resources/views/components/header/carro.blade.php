@props (['cantidad'])
@props (['titulo'])    
@props (['img'])   
@props (['precio'])  
                    

                <div class="card card-carro mb-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex flex-row align-items-center">
                        <div>
                          <img
                            src="{{ asset('assest/images/shop/products') }}/{{$img}}.jpg"
                            class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                        </div>
                        <div class="ms-3">
                          <p>{{$titulo}}</p>
                          
                        </div>
                      </div>
                      <div class="d-flex flex-row align-items-center">
                        <div style="width: 50px;">
                          <p class="small mb-0">{{$cantidad}}</p>
                        </div>
                        <div style="width: 80px;">
                          <h6 class="mb-0">${{$precio}}</h6>
                        </div>
                        <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                

                

       
  
