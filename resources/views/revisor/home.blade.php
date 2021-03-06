@extends('layouts.app')
@section('content')
@if ($ad)
<div class="container my-5 py-5">
    <div class="row">
        <div class="col-12">
            <div class="card d-flex justify-content-center">
                <div class="card-header fw-bold">
                    {{__("Anuncio")}} #{{$ad->slug}}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <h4>{{__("Usuario")}}</h4>
                        </div>
                        <div class="col-md-9">
                            #{{$ad->user->id}}
                            {{$ad->user->name}}
                            {{$ad->user->email}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h4>{{__("Título")}}</h4>
                        </div>
                        <div class="col-md-9">
                            {{$ad->title}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h4>{{__("Descripción")}}</h4>
                        </div>
                        <div class="col-md-9">
                              {{$ad->body}}
                        </div>
                    </div>
                    <hr>
                    
                    <div class="row">
                        <div class="col-12 mb-5 ps-5">
                            <h4 class="ps-5">{{__("Imagen")}}</h4>
                        </div>
                        @foreach ($ad->images as $image)
                        <div class="col-md-4">
                            <img src="{{$image->getUrl(300,150)}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-8">
                            {{__("Adulto")}} : {{$image->adult}} <br>
                            {{__("Falsificación")}} : {{$image->spoof}} <br>
                            {{__("Médico")}} : {{$image->medical}} <br>
                            {{__("Violencia")}} : {{$image->violence}} <br>
                            {{__("Racismo")}} : {{$image->racy}} <br>
                            <b>{{__("Etiquetas")}}</b>
                            <ul>
                                @if ($image->labels)
                                @foreach ($image->labels as $label)
                                <li>{{$label}}</li>
                                @endforeach  
                                @endif
                            </ul>
                        </div>
                        @endforeach
                    </div>
                    
                </div>
            </div>
        </div>
    </div> 
    <div class="row my-4">
        <div class="col-md-6 d-flex justify-content-center">
            <form action="{{route('revisor.ad.reject', ['id'=>$ad->id])}}" method="POST">
            @csrf
                <button type="submit" class="btn fs-5 btn-accent links">{{__("RECHAZAR")}}</button>
            </form>
        </div>
        <div class="col-md-6 d-flex justify-content-center">
            <form action="{{route('revisor.ad.accept', ['id'=>$ad->id])}}" method="POST">
            @csrf
                <button type="submit" class="btn fs-5 btn-seccondary links">{{__("ACEPTAR")}}</button>
            </form>
        </div>
    </div>
</div>
@else
<div class="container">
    <div class="row">
        <h3 class="text-center my-5">{{__("¡Qué RÁPIDO! No hay más anuncios")}}</h3>
    </div>
</div>
@endif
@endsection