@extends('layouts.app')
@section('content')
<div class="container-fluid my-5 py-5">
    <div class="row">
        <div class="col-12 my-5 pt-2">
            <h1 class="text-center display-5 my-2 text-seccondary">{{__("Anuncio por categoría:")}} {{$category->name}}</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        @foreach ($ads as $ad)
        <div class="col-12 col-md-4 py-2 d-flex justify-content-center">
            <div class="card border-0 shadow text-accent h-100 bg-seccondary">
                <div id=" carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($ad->images as $image)
                    <div class="carousel-item @if($loop->first)active @endif">
                        <img src="{{$image->getUrl(300,150)}}" class="d-block w-100 card-img-top" alt="...">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="card-body">
                <div>
                    <h5 class="card-title h4 my-1">{{$ad->title}}</h5>
                    <h6 class="card-subtitle my-1">{{$ad->price}}</h6>
                </div>
                <h6 class="card-subtitle my-2">
                    <strong>{{__("Anuncios por categoría:")}}: <a href="{{route('category.ads', ['name' => $ad->category->name, 'id'=>$ad->category->id])}}" class="text-decoration-none text-main categoria">{{$ad->category->name}}</a></strong>
                    <i>{{$ad->created_at->format('d/m/Y')}} - {{$ad->user->name}}</i>
                </h6>
                <div class="d-flex flex-column">
                    <a href="{{route('ad.details', $ad->slug)}}"
                        class="btn my-2 btn-accent links">{{__("LEER")}}</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>
<div class="container-fluid my-2">
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{$ads->links()}}
        </div>
    </div>
</div>
@endsection
