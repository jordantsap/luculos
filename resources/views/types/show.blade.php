@extends('layouts.public')

@section('title', $type->title . ' ' . __('meta.typetitle'))
@section('description', __('meta.typedescription'))
@section('keywords', __('meta.typekeywords'))

@section('content')


    @include('partials.sidebar')



  <div class="row col-sm-9 border">

      <div class="col-sm-12">

           <h1 class="category-title"> {{ __('page.category') . ' ' . $type->title}} </h1>

      <img src="{{ asset('images/categories/' . $type->image)}}" width="50%" height="150px" alt="">

    </div>


        <div class="col-sm-12">
          <hr>
        </div>
        <div class="col-sm-12 p-3">
          <h2 class='text-center'> {{ __('page.catproducts') . ' ' . $type->title}}</h2>
        </div>

        @if(count($type->products) > 0)
          @foreach($type->products as $product)
            <div class="col-sm-3">
                  <a href="{{route('products.show', $product->slug) }}" class="btn btn-default btn-block">
                    <h3 class="text-center" >{{ Str::limit($product->title, 20)}}</h3>
                  </a>

                  <a href="{{route('products.show', $product->slug) }}" class="btn btn-default btn-block">
                    <img src="{{ asset('images/products/'.$product->image) }}" width="100%" height="100px" alt="{{$product->title}}" title"{{$product->title}}">
                  </a>

                <h4>{!!Str::limit($product->description, 20)!!}</h4>

                <a href="{{route('products.show', $product->slug) }}" class="btn btn-default btn-block">
                  {{$product->title}}
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
