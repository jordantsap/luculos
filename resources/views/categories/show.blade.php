@extends('layouts.public')

@section('title', $cat->title . ' ' . __('meta.catproducts'))
@section('description', $cat->title . ' ' . __('meta.catproducts_description'))
@section('keywords', $cat->title . ' ' . __('meta.catproducts_keywords'))

@section('content')

  @include('partials.sidebar')

  <div class="row col-sm-9 border">

    {{-- @foreach ($cats as $cat) --}}
      <div class="col-sm-12">
        <h1 class="category-title text-center">
          {{__("page.category") . ' ' . $cat->title}}
        </h1>
        <img src="{{ asset('images/' . $cat->image) ? : asset('images.Noimage.jpg')}}" width="100%" height="350" alt="{{$cat->title}}">
    </div>


    <div class="col-sm-12">
      <hr>
    </div>
    <div class="col-sm-12 p-3">
      <h2 class='text-center'> {{ __('page.catproducts') . ' ' . $cat->title}}</h2>
    </div>

    @if(count($cat->products) > 0)
      @foreach($cat->products as $product)
        <div class="col-sm-3">
          <ul class="list-group">
            <a href="{{route('products.show', $product->slug) }}" class="btn btn-default btn-block">
            <li class="list-group-item">
              <h2 class="text-center" >{{ Str::limit($product->title, 20)}}</h2>
            </li>
            <li class="list-group-item">
              <img src="{{ asset('images/'.$product->image) }}" width="100%" height="100px" alt="{{$product->title}}" title"{{$product->title}}">
            </li>
          </a>

          <li class="list-group-item">

            <h3>{!!Str::limit($product->description, 20)!!}</h3>
          </li>
          <li class="list-group-item">
            <a href="{{route('products.show', $product->slug) }}" class="btn btn-default btn-block">
              {{$product->title}}
            </a>
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
