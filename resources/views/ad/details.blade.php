@extends('layouts.app')
@section('content')
<div class="container mt-5 pt-1">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-5 text-seccondary">{{__("Detalles del producto")}}</h1>
        </div>
    </div>
</div>
<div class="container borde-bottom pt-5">
    <div class="row">
        <div class="col-12 col-md-6">
        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2 carrusel">
      <div class="swiper-wrapper">
        @foreach ($ad->images as $image)
        <div class="swiper-slide @if($loop->first)active @endif">
          <img src="{{Storage::url($image->file)}}" />
        </div>
        @endforeach
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
    <div thumbsSlider="" class="swiper mySwiper">
      <div class="swiper-wrapper mt-2">
        @foreach ($ad->images as $image)
        <div class="swiper-slide @if($loop->first)active @endif">
          <img src="{{Storage::url($image->file)}}" />
        </div>
        @endforeach
      </div>
    </div>
    </div>
          <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
            <div>
                <h5 class="h2">{{$ad->title}}</h5>
                <p>{{$ad->body}}</p>
            </div>
            <div>
                <div>
                    <strong>{{__("Categorías")}}: <a href="{{route('category.ads', ['name' => $ad->category->name, 'id'=>$ad->category->id])}}" class="text-decoration-none text-seccondary categoria">{{$ad->category->name}}</a></strong>
                </div>
                <h5 class="h4 pt-3">{{__("Precios")}}: <b>{{$ad->price}}</b></h5>
            </div>
        </div>
    </div>
</div>
<div class="container my-4 pb-5">
  <div class="row">
    <div class="col-12 col-md-6 d-flex">
      <lord-icon
        src="https://cdn.lordicon.com/dxjqoygy.json"
        trigger="loop-on-hover"
        colors="primary:#241623,secondary:#D0CD94"
        class="compra-atras">
      </lord-icon>
      <div class="card shadow">
        <div class="card-body ">
          <h4 class="card-title">{{__("INFORMACIÓN DEL VENDEDOR")}}</h4>
          <h6>{{__("NOMBRE")}}: {{$ad->user->name}}</h6>
          <h6>{{$ad->user->lastname}}</h6>
          <h6>{{__("EMAIL")}}: {{$ad->user->email}}</h6>
          <h6>{{$ad->created_at->format('d/m/Y')}}</h6>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 d-flex justify-content-center">
      <div class="d-flex flex-column mx-5">
        <lord-icon
        src="https://cdn.lordicon.com/qhviklyi.json"
        trigger="loop"
          colors="primary:#241623,secondary:#D0CD94" class="compra-atras">
        </lord-icon>
        <button type="button" class="btn fs-5 btn-seccondary links">{{__("COMPRAR")}}</button>
      </div>
      <div class="d-flex flex-column mx-5">
        <lord-icon
         src="https://cdn.lordicon.com/iiueiwdd.json"
          trigger="loop-on-hover"
          colors="primary:#241623"
          class="compra-atras">
        </lord-icon>
        <a type="button" href="{{route('welcome')}}" class="btn fs-5 btn-accent links">{{__("VOLVER")}}</a>
      </div>
    </div>
    
  </div>
</div>














@endsection