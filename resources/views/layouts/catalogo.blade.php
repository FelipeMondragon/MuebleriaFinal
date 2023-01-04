<section id="galeria" class="container">
  <div class="text-center pt-5">
    <h1 class="display-2  text-center text-white fw-bold p-1">Productos</h1>
    <p class="fs-3 fst-italic">En ACACIA nos dedicamos a la venta y fabricación de mobiliario de diseño realizado por artesanos mexicanos 
      y comprometidos con el medio ambiente. ACACIA dona un árbol para reforestación por cada mobiliario vendido.
      Envíos a todo México</p>
  </div>

  <div class="row">
    @foreach($muebles as $m)
    <div class="col-lg-4 col-md-6 col-sm-12">
      <img class="w-100 mb-4 rounded galleryitem" src="{{asset('storage').'/' . $m->foto}}" alt="">
      <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-light btnModal" data-bs-toggle="modal" data-bs-target="#galleryModal" data-id="{{$m->id}}">
        <i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    @endforeach
  </div>
</section>

<!-- Modal -->
<div class="modal fade" id="galleryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title text-center display-6" id="title"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-6" id="body">
        <img id="modal-img" src="">
        <p id="descripcion" class="fs-6"></p>
        Precio (en pesos mexicanos)<p id="precio" class="fs-6"></p>
        Unidades disponibles<p id="stock" class="fs-6"></p>
        Tipo de Madera<p id="tipo" class="fs-6"></p>
      </div>
      <div class="modal-footer">
        @auth
          @if(Auth::user()->tipo == 1)
            <a href="" class="btn btn-outline-success btn-sm" id="btnComprar">Añadir al carrito</a>
          @endif
        @endauth
        @guest
          <a href="" class="btn btn-outline-success btn-sm" id="btnComprarAlt">Añadir al carrito</a>
        @endguest
      </div>
    </div>
  </div>
</div>

<script>
    $( document ).ready(function(){
      $('.btnModal').click(function(){
        const id = $(this).attr('data-id');
        $.ajax({
          url: 'mueble_detalle/'+id,
          type: 'GET',
          data:{
            "id" : id
          },
          success: function(data){
            $('#title').html(data.nombre);
            $('#descripcion').html(data.descripcion);
            $('#modal-img').attr('src',"/storage/"+ data.foto+ "");
            $('#precio').html(data.precio);
            $('#stock').html(data.stock);
            switch (data.madera_id){
              case 1 : $('#tipo').html("Haya"); break;
              case 2 : $('#tipo').html("Parota"); break;
              case 3 : $('#tipo').html("Caoba"); break;
              case 4 : $('#tipo').html("Cedro"); break;
              case 5 : $('#tipo').html("Tzalam"); break;
              case 6 : $('#tipo').html("Nogal"); break;
            }
            $('#btnComprar').attr('href',"/add-carrito/"+ id +"");
            $('#btnComprarAlt').attr('href',"{{ route('login') }}");
            $('#cantidad').attr('max',data.stock);
          }
        }) 
      });
    });
</script>