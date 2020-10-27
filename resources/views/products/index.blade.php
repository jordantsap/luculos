@extends('layouts.public')


@section('content')


    @include('partials.sidebar')


                <div class="row col-sm-9 border">

                  <div class="col-sm-12 p-3">
                    <h1 class='text-center'> {{__('page.productscats')}}</h1>
                  </div>

                  @foreach ($cats as $cat)
                    <div class="col-sm-2">
                       <a href="{{route('categories.show', $cat->slug)}}">
                    <img src="{{ asset('images/' . $cat->image) ? : asset('images.Noimage.jpg')}}" width="100%" height="150px" alt="{{$cat->title}}">
                    <h2 class="category-name"> {{$cat->title}} </h2>
                    </a>
                  </div>
                  @endforeach


                @if(count($products) > 0)
                @foreach ($products as $product)
                  <div class="col-sm-2">
                     <a href="{{route('products.show', $product->slug)}}">
                  <img src="{{ asset('images/' . $product->image) ? : asset('images.Noimage.jpg')}}" width="100%" height="150px" alt="{{$product->title}}">
                  <h3 class="product-name"> {{$product->title}} </h3>
                  </a>
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
