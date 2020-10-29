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

            {{ $product->title}}

          </h1>
        </div>

				<div class="col-sm-6">
					<img src="{{ asset('images/'.$product->image) }}" alt="{{ $product->title }}" width="100%" height="350px">
				</div>
        <div class="col-sm-6 my-auto">
          <h2 class="category-title">
            {{__('page.category')}}
            <a class="category-title"href="{{$product->category->slug}}">
              {{$product->category->title}}
            </a>
            <div class="col-sm-12 mt-2">
              {{__('page.pieces_per_package')}}
              <br>
            </div>
            <div class="col-sm-12 mt-2">
              {{__('page.box') . $product->box . ' ' . __('page.pieces')}}
              <br>
            </div>
            <div class="col-sm-12 mt-2">
              {{__('page.palette') . $product->palette . ' ' . __('page.pieces')}}
              <br>
            </div>
          </h2>
        </div>

        <div class="col-sm-12">
          <br>

          <div class="panel panel-primary text-center">

            <div class="panel-heading">
              <h3 class="panel-title">{{__('product.description')}}</h3>
    				</div>

					  <div class="panel-body">
					    <h4>{!!$product->description!!}</h4>
					  </div>

					</div>

				</div>

			</div>
	<br>
@endsection
