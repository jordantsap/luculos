@extends('layouts.public')

@section('title', __('meta.categorytitle'))
@section('description', $cat->title . ' ' . __('meta.categorydescription'))
@section('keywords', $cat->title . ', ' . __('meta.categorykeywords'))

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
            <img class="text-center" src="{{ asset('images/products/'.$product->image) }}" width="70%" height="120x" alt="{{$product->title}}" title"{{$product->title}}">
              <h3 class="product-title text-center"> {{$product->title}} </h3>
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
