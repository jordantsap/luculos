@extends('layouts.public')


@section('content')

  @include('partials.sidebar')

  <div class="row col-sm-9 border">

    {{-- @foreach ($cats as $cat) --}}
      <div class="col-sm-12">

           <h1 class="category-name text-center"> {{$cat->title . ' ' . __("page.category")}} </h1>
      <img src="{{ asset('images/Noimage.jpg')}}" width="100%" height="150px" alt="">

    </div>

    @if(count($cat->products) > 0)
      @foreach($cat->products as $product)
        <div class="col-xs-3">
          <ul class="list-group">
            <li class="list-group-item">

              <h2 class="text-center" >{{ str_limit($product->title, 20)}}</h2>
            </li>
            <li class="list-group-item"><img src="{{ asset('images/products/'.$product->image) }}" width="100%" height="100px" alt="{{$product->title}}" title"{{$product->title}}"></li>

          <li class="list-group-item">

            <h3>{!!str_limit($product->description, 20)!!}</h3>
          </li>
          <li class="list-group-item">
            <a href="{{route('product', $product->id) }}" class="btn btn-default btn-block">Show</a>
          </li>
          </ul>
        </div>
      @endforeach
    @else
      <div class="col-sm-12">
        <p class="text-center">
          <h3 class="text-center">{{__('page.noproducts')}}</h3>
        </p>
      </div>
    @endif

  </div>

@endsection
