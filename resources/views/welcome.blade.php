@extends('layouts.app')
@section('content')
<main>
    <header class="container-fluid">
        <div class="row">
            <div class="col-12 my-5 py-5">
                <h1 class="text-center display-1 my-2 fst-italic text-seccondary animation-title">RÁPIDO.ES</h1>
                <h2 class="text-center animation-h2">{{__("¡La plataforma de compraventa más rápida!")}}</h2>
                <h4 class="text-center animation-comprar">{{__("¿Qué te gustaría comprar?")}}</h4>
            </div>
@include('layouts._category')
    </header>
    </div>
    <div class="container my-5 py-5">
        <div class="row h-100">
            <div class="col-12 text-center">
                <h3 class="py-3 display-6 money-back" id="money">
                    {{__("¿Quieres ganar dinero fácilmente? ¡Añade tu propio anuncio!")}}</h3>
                <a type="button" href="{{route('ad.new')}}" class="btn box-radius btn-accent links btn-inserta" id="inserta">
                    <h4 class="fs-1">{{__("Inserta anuncio")}} <span class="mx-2">
                            <lord-icon src="https://cdn.lordicon.com/mecwbjnp.json" trigger="loop">
                            </lord-icon>
                        </span></h4>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-white my-5 py-5">
        <div class="row text-center">
            <div class="col-12 col-md-4">
                <img src="/images/caja-fuerte.gif" width="150px" alt="caja fuerte">
                <h5><b class="text-seccondary fw-bold fs-1">{{__("¡SEGURIDAD!")}}</b>
                    {{__("Nos importa que os sintáis seguros y así conseguir vuestra confianza, porque vosotros sois lo que importa.")}}
                </h5>
            </div>
            <div class="col-12 col-md-4">
            <img src="/images/apoyo.gif" width="150px" alt="charla">
                <h5><b class="text-seccondary fw-bold fs-1">{{__("¡COMUNICACIÓN!")}}</b>
                    {{__("Si tienes alguna duda, NOSOTROS TE LA RESOLVEREMOS, contáctanos cuando sea necesario, siempre estamos preparados.")}}
                </h5>
            </div>
            <div class="col-12 col-md-4">
               <img src="/images/cohete.gif" width="150px" alt="cohete">
                <h5><b class="text-seccondary fw-bold fs-1">{{__("¡NOSOTROS VAMOS!")}}</b>
                    {{__("Siempre que compres algún producto, te aseguramos que haremos para que llegue a tu domicilio a la velocidad de un rayo.")}}
                </h5>
            </div>
        </div>
    </div>
    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-12 d-flex flex-column justify-content-center text-center">
                <h3 class="display-6 text-seccondary fw-bold fs-1">{{__("¡Vamos!")}}</h3>
                <h5 class="text-accent">{{__("Busca los productos que deseas en las categorías, quién sabe... quizás encuentres lo que buscas...")}}
                    {{__("Si lo que quieres es vender, NADIE TE LO IMPIDE, sube un anuncio en")}}
                </h5>
                <div class="d-flex justify-content-center">
                    <a class="fs-5 my-3 text-decoration-none badge box-radius btn-accent links"
                        href="{{route('ad.new')}}"><lord-icon
                        src="https://cdn.lordicon.com/mecwbjnp.json"
                        trigger="loop">
                    </lord-icon> {{__("Anuncio")}}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-white mt-5">
        <div class="row">
            <div class="col-12 text-center ">
            <h2 class="display-5 py-3 d-inline">{{__("¡Los productos más recientes!")}}</h2>
            <img src="/images/busqueda.gif" width="200px" alt="lupa escarabajo" class="d-none d-md-inline">
        </div>
            @foreach ($ads as $ad)
            <div class="col-12 col-md-3 py-2 d-flex justify-content-center">
                <div class="card bg-dark shadow border-0 text-white h-100">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($ad->images as $image)
                            <div class="carousel-item @if($loop->first)active @endif">
                                <img src="{{$image->getUrl(300,150)}}" class="d-block w-100 card-img-top" alt="...">
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-around bg-main text-accent">
                        <h5 class="card-title h4 my-1">{{$ad->title}}</h5>
                        <h6 class="card-subtitle my-1">{{$ad->price}}</h6>
                        <h6 class="card-subtitle my-1">
                            <strong>{{__("Categorías")}}: <a
                                    href="{{route('category.ads', ['name' => $ad->category->name, 'id'=>$ad->category->id])}}"
                                    class="text-decoration-none text-seccondary links">{{$ad->category->name}}</a></strong>
                        </h6>
                        <a href="{{route('ad.details', $ad->slug)}}"
                            class="btn mb-0 my-4 btn-accent links">{{__("Más")}}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</main>
@endsection
