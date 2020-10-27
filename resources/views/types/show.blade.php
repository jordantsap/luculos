@extends('layouts.public')


@section('content')


    @include('partials.sidebar')



  <div class="row col-sm-9 border">

    {{-- @foreach ($types as $type) --}}
      <div class="col-sm-12">

           <h1 class="text-center category-name"> {{$type->title}} </h1>

      <img src="{{ asset('images/Noimage.jpg')}}" width="100%" height="150px" alt="">

    </div>

    {{-- @if(count($type->categories) > 0)
      @foreach($type->products as $product)
        <div class="col-xs-3">
          <ul class="list-group">
            <li class="list-group-item"><h2>{{ str_limit($product->title, 20)}}</h2>
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
    <p class="text-center">No published products</p>
    @endif --}}

  </div>

@endsection
