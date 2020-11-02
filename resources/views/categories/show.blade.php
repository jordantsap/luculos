@extends('layouts.public')

<<<<<<< HEAD
@section('title', __('meta.categorytitle'))
@section('description', $cat->title . ' ' . __('meta.categorydescription'))
@section('keywords', $cat->title . ', ' . __('meta.categorykeywords'))
=======
@section('title', __('meta.catproducts_title'))
@section('description', $cat->title . ' ' . __('meta.catproducts_description'))
@section('keywords', $cat->title . ', ' . __('meta.catproducts_keywords'))
>>>>>>> 9ac96d51841a949701b2e7b7d983ee89056d8b95

@section('content')

  @include('partials.sidebar')

  <div class="row col-sm-9 border">

    {{-- @foreach ($cats as $cat) --}}
      <div class="col-sm-12">
        <h1 class="category-title">
          {{__("page.category") . ' ' . $cat->title}}
        </h1>
        <img src="{{ asset('images/categories/' . $cat->image) ? : asset('images.Noimage.jpg')}}" width="auto" height="350px" alt="{{$cat->title}}">
    </div>


    <div class="col-sm-12">
      <hr>
    </div>
    <div class="col-sm-12 p-3">
      <h2 class='text-center'> {{ __('page.catproducts') . ' ' . $cat->title}}</h2>
    </div>

    @if(count($cat->products) > 0)
      @foreach($cat->products as $product)
        <div class="col-sm-2">
            <a href="{{route('products.show', $product->slug) }}" class="btn btn-default btn-block">
<<<<<<< HEAD
            <img class="text-center" src="{{ asset('images/products/'.$product->image) }}" width="70%" height="120x" alt="{{$product->title}}" title"{{$product->title}}">
              <h3 class="product-title text-center"> {{$product->title}} </h3>
=======
            {{-- <li class="list-group-item">
              <h2 class="text-center" >{{ Str::limit($product->title, 20)}}</h2>
            </li> --}}
            <li class="list-group-item">
              <img src="{{ asset('images/products/'.$product->image) }}" width="100%" height="100px" alt="{{$product->title}}" title"{{$product->title}}">
            </li>
          </a>

          {{-- <li class="list-group-item">

            <h3>{!!Str::limit($product->description, 20)!!}</h3>
          </li> --}}
          <li class="list-group-item">
            <a href="{{route('products.show', $product->slug) }}" class="btn btn-default btn-block">
              <h3 class="text-center"> {{$product->title}} </h3>
>>>>>>> 9ac96d51841a949701b2e7b7d983ee89056d8b95
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
