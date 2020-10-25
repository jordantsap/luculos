@extends('layouts.public')


@section('content')


  <div class="col-sm-3">
    <img width="100%" src="{{asset('images/best-price.jpg')}}" alt="">
  </div>


                <div class="row col-sm-9 border">

                  {{-- @foreach ($cats as $cat) --}}
                    <div class="col-sm-12">

                         <h3 class="category-name"> {{$cat->title}} </h3>
                    <img src="{{ asset('images/Noimage.jpg')}}" width="100%" height="150px" alt="">

                  </div>

                  @if(count($cat->products) > 0)
            @foreach($cat->products as $product)
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
      @endforeach @else
        <p class="text-center">No published products</p>
        @endif

                </div>

@endsection
