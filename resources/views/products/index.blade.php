@extends('layouts.public')


@section('content')


                <div class="col-sm-3">
                  <img width="100%" src="{{asset('images/best-price.jpg')}}" alt="">
                </div>


                <div class="row col-sm-9 border">

                  @foreach ($cats as $cat)
                    <div class="col-sm-2">
                       <a href="{{route('product-types.show', $cat->slug)}}">
                    <img src="{{ asset('images/' . $cat->image) ? : asset('images.Noimage.jpg')}}" width="100%" height="150px" alt="{{$cat->title}}">
                    <h3 class="category-name"> {{$cat->title}} </h3>
                    </a>
                  </div>
                  @endforeach


                @if(count($food) > 0)
                @foreach ($food as $product)
                  <div class="col-sm-2">
                     <a href="{{route('food.show', $product->slug)}}">
                  <img src="{{ asset('images/' . $product->image) ? : asset('images.Noimage.jpg')}}" width="100%" height="150px" alt="{{$product->title}}">
                  <h3 class="product-name"> {{$product->title}} </h3>
                  </a>
                </div>
                @endforeach
              @else
                <div class="col-sm-12">
                  <p class="text-center">No published products</p>
                </div>

              @endif
            </div>


@endsection
