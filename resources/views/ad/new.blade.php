@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8 my-4 d-flex justify-content-center py-5">
            <div class="card shadow-lg p-3 mb-5 rounded vw-100 bg-seccondary text-center">
                <h3 class="h1">
                    {{__("Nuevo")}} {{__("Anuncio")}}
                    <!--(Secret: {{$uniqueSecret}})-->
                    <hr class="mb-0 pb-0">
                </h3>
                <div class="card-body">
                    <form method="POST" action="{{route('ad.create')}}">
                        @csrf
                        <input type="hidden" name="uniqueSecret" value="{{$uniqueSecret}}">
                        <div class="form-group">
                            <label for="adName" class="my-2">{{__("Título")}}</label>
                            <input type="text" class="form-control" id="adName" name="title" value="{{old('title')}}">
                            @error('title')
                            <small id="emailHelp" class="form-text bg-accent text-main fs-5">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group text-bold my-3">
                            <label for="form-label" class="my-2">{{__("Categorías")}}</label>
                            <select name="category" id="categories" class="form-control">
                                @foreach ($categories ?? '' as $category)
                                <option value="{{$category->id}}"
                                    {{old('category') == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group my-3">
                            <label for="adPrice">{{__("Precio")}}</label>
                            <input type="number" step="0,01" class="form-control my-2" id="adPrice"
                                aria-describedby="priceHelp" name="price" value="{{old('price')}}">
                            @error('price')
                            <small id="priceHelp" class="form-text bg-accent text-main fs-5">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group my-3">
                            <label for="adBody" class="my-2">{{__("Anuncio")}}</label>
                            <textarea class="form-control" name="body" id="adBody" cols="30"
                                rows="10">{{old('body')}}</textarea>
                            @error('body')
                            <small id="emailHelp" class="form-text bg-accent text-main fs-5">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label for="adImages" class="form-label my-2">{{__("Imágenes")}}</label>
                            <div class="dropzone" id="drophere"></div>
                            @error('images')
                            <small class="bg-accent text-main fs-5">{{$message}}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn my-2 px-5 fs-3 btn-accent links">{{__("Crear")}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
