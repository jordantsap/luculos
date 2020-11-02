@extends('layouts.public')

@section('title', __('meta.productstitle') )
@section('description', __('meta.productsdescription'))
@section('keywords',  __('meta.productskeywords'))


@section('content')


    @include('partials.sidebar')


                <div class="row col-sm-9 border">

                  <div class="col-sm-12 p-3">
                    <h1 class='text-center'> {{__('page.productscats')}}</h1>
                  </div>

                  @foreach ($cats as $cat)
                    <div class="col-sm-4 col-md-3 col-lg-2 pb-2">
                       <a href="{{route('categories.show', $cat->slug)}}">
                    <img src="{{ asset('images/categories/' . $cat->image) ? : asset('images.Noimage.jpg')}}" width="100%" height="150px" alt="{{$cat->title}}">
                    <h2 class="category-title"> {{$cat->title}} </h2>
                    </a>
                  </div>
                  @endforeach

                  <div class="col-sm-12">
                    <hr>
                  </div>
                  <div class="col-sm-12 p-3">
                    <h2 class='text-center'> {{__('page.allproducts')}}</h2>

                  </div>
                @if(count($products) > 0)

                <div class="row col-sm-12">
                  @foreach ($products as $product)
<<<<<<< HEAD
                    <div class="col-sm-4 col-xl-2 text-center">
                       <a href="{{route('products.show', $product->slug)}}">
                    <img src="{{ asset('images/products/' . $product->image) ? : asset('images.Noimage.jpg')}}" width="100%" height="150px" alt="{{$product->title}}">
                    <h3 class="product-title text-center"> {{$product->title}} </h3>
=======
                    <div class="col-sm-4 col-xl-2">
                       <a href="{{route('products.show', $product->slug)}}">
                    <img src="{{ asset('images/products/' . $product->image) ? : asset('images.Noimage.jpg')}}" width="100%" height="150px" alt="{{$product->title}}">
                    <h3 class="product-title"> {{$product->title}} </h3>
>>>>>>> 9ac96d51841a949701b2e7b7d983ee89056d8b95
                    </a>
                  </div>
                  @endforeach

                  <div class="col-sm-12 mt-2">
                    <div class="float-center">
                      <h3 class="text-center">{{$products->links()}}</h3>
                    </div>
                  </div>
                @else
                </div>
                <div class="col-sm-12">
                  <p class="text-center">
                    <h3 class="text-center">{{__('page.noproducts')}}</h3>

                  </p>
                </div>

              @endif
            </div>


@endsection
