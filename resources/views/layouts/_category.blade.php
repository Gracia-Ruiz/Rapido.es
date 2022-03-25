<div class="col-12 text-center bg-white py-5 my-5">
    @foreach ($categories as $category)
    <a type="button" class="btn btn-cambio btn-transparent mx-3 box-radius"  href="{{route('category.ads', ['name'=>$category->name, 'id'=>$category->id])}}">
        <div class="btn-cambio">
            <i class="px-2 py-2 h2 text-center {{$category->icon}}">
            <h5 class="text-center py-2 text-decoration-none"><b>{{__("{$category->name}")}}</b></h5></i>
        </div>
    </a>
    @endforeach
</div>
 