@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 d-flex flex-column align-items-center">
        <img class="rounded-circle mt-4" src="{{ Auth::user()->picture }}" width="100">
        <p class="text-center text-white mb-0 mt-3"></p>
        <div class="card w-100 border-0 shadow mt-4">
          <ul class="list-group list-group-flush border-0">
            <li class="list-group-item border-0 text-center p-4">
              <p>Hola 👋 soy   <strong>{{ Auth::user()->name }}</strong></p>
              <p class="mb-0">Aqui puedes encontrar todos mis links de interes y redes sociales</p>
            </li>
          </ul>
        </div>
        <div class="card w-100 border-0 shadow mt-3">
          <div class="card-header border-0 text-center font-weight-bold">
            LINKS
          </div>
          <ul class="list-group list-group-flush border-0">
            

            @foreach ($links as $link)
            <li class="list-group-item p-1">
            <a target="_blank" rel="noopener noreferrer" class="stretched-link d-flex align-items-center text-center" href="{{ $link->url }}" title="{{ $link->url }}">
                <span class="flex-grow-1">{{ $link->label }}</span>
            </a>
                 {{-- <tr>
                   
                    <td>{{ $link->label }}</td>
                    <td><a href="{{ $link->url }}">{{ $link->url }}</a></td> --}}
                </li> 
                    @endforeach
           {{--  <li class="list-group-item p-1">
              <a target="_blank" rel="noopener noreferrer" class="stretched-link d-flex align-items-center text-center" href="https://dev.to/badiali/offcanvas-menu-usando-el-modal-de-bootstrap-emp" title="Off-canvas menu usando el modal de Bootstrap | Luis Badiali">
                <img class="rounded" src="https://badiali.es/assets/img/thumbs/off-canvas.png" alt="DEV.to | Artículos Luis Badiali">
                <span class="flex-grow-1">Off-canvas menu usando el modal de Bootstrap</span>
              </a>
            </li>
            <li class="list-group-item p-1">
              <a target="_blank" rel="noopener noreferrer" class="stretched-link d-flex align-items-center text-center" href="https://dev.to/badiali/lista-desplegable-efecto-acordeon-con-bootstrap-3g19" title="Lista desplegable efecto acordeón con Bootstrap | Luis Badiali">
                <img class="rounded" src="https://badiali.es/assets/img/thumbs/acordeon.png" alt="DEV.to | Artículos Luis Badiali">
                <span class="flex-grow-1">Lista desplegable efecto acordeón con Bootstrap</span>
              </a>
            </li>
            <li class="list-group-item p-1">
              <a target="_blank" rel="noopener noreferrer" class="stretched-link d-flex align-items-center text-center" href="https://dev.to/badiali/bootstrap-4-masonry-layout-js-25d2" title="Listado con Bootstrap estilo Masonry sin JS | Luis Badiali">
                <img class="rounded" src="https://badiali.es/assets/img/thumbs/masonry.png" alt="DEV.to | Artículos Luis Badiali">
                <span class="flex-grow-1">Listado con Bootstrap estilo Masonry sin JS</span>
              </a>
            </li> --}}
          </ul>
        </div>
       
        <ul class="list-unstyled list-inline my-4">
            @foreach ($reds as $red)
          <li class="list-inline-item mx-2">
            <a class="text-white" href="{{ $red->url }}" target="_blank">
                @switch("{{ $red->label }}")
                    @case('GITHUB')
                    <i class="fab fa-github fa-2x"></i>
                        @break
                    @case('TWITTER')
                    <i class="fab fa-twitter fa-2x"></i>
                        @break
                     @case('FACEBOOK')
                     <i class="fab fa-instagram fa-2x"></i>  
                        @break
                    @case('INSTAGRAM')
                    <i class="fab fa-instagram fa-2x"></i>
                        @break
                    @default
                        
                @endswitch
              
            </a>
          </li>
          @endforeach
          {{-- <li class="list-inline-item mx-2">
            <a class="text-white" href="https://instagram.com/dev.badiali/" target="_blank">
              <i class="fab fa-instagram fa-2x"></i>
            </a>
          </li>
          <li class="list-inline-item mx-2">
            <a class="text-white" href="https://github.com/badiali/" target="_blank">
              <i class="fab fa-github fa-2x"></i>
            </a>
          </li>
          <li class="list-inline-item mx-2">
            <a class="text-white" href="https://codepen.io/badiali/" target="_blank">
              <i class="fab fa-codepen fa-2x"></i>
            </a>
          </li>
          <li class="list-inline-item mx-2">
            <a class="text-white" href="https://es.linkedin.com/in/badiali/" target="_blank">
              <i class="fab fa-linkedin fa-2x"></i>
            </a>
          </li> --}}
        </ul>
      </div>
    </div>
  </div>
  
  

  @endsection