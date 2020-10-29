@extends('layouts.public')

@section('title', '')
@section('meta_description', $product->category->name.' '.$product->meta_description)
@section('meta_keywords', $product->meta_keywords.' '. $product->category->name)



@section('content')

      @include('partials.sidebar')

			<div class="row col-sm-9">
				<br>

        <div class="col-sm-12">
          <h1 class="text-center">
            {{__('page.category')}}
            <a class="category-title"href="{{$product->category->slug}}">
              {{$product->category->title}}
            </a> - 
            {{ $product->title}}
          </h1>
        </div>

				<div class="col-sm-12 col-md-6">
					<img src="{{ asset('images/'.$product->image) }}" alt="{{ $product->title }}" width="100%" height="350px">
				</div>

        <div class="col-sm-12 col-md-6">
          <br>

          <div class="panel panel-primary text-center">

            <div class="panel-heading">
              <h2 class="panel-title">{{__('product.description')}}</h2>
    				</div>

					  <div class="panel-body">
					    <h3>{!!$product->description!!}</h3>
					  </div>

					</div>

				</div>

			</div>
	<br>
@endsection
