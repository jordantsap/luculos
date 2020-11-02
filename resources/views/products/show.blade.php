@extends('layouts.public')

@section('title', __('meta.producttitle') . ' ' . $product->title)
@section('description', $product->title . ' ' . __('meta.productdescription'))
@section('keywords', $product->title . ' ' . __('meta.productkeywords'))


@section('content')

      @include('partials.sidebar')

			<div class="row col-sm-9">
				<br>

        <div class="col-sm-12">
          <h1 class="text-center">

            {{ $product->title }}
            @can ('update_products', App\Product::class)
        <small><a class="btn btn-primary" href="{{route('prod.edit', $product->id)}}">Edit</a> - <a class="btn btn-warning" href="javascript:history.back()">Go Back</a></small>
      @endcan

          </h1>
        </div>

				<div class="col-sm-6 text-center">
					<img src="{{ asset('images/products/'.$product->image) }}" alt="{{ $product->title }}" width="auto" height="350px">
				</div>
        <div class="card col-sm-6 my-auto">
          <h2 class="card category-title">
            {{__('page.category')}}
            @foreach ($product->categories as $category)
              <a class="card-body category-title"href="{{route('categories.show', $category->slug)}}">
                <br> <br>{{ $category->title . ', '}}
              </a>
            @endforeach
            <div class="card-body col-sm-12 mt-2"> <br>
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

          <div class="card card-primary text-center">

            <div class="card-heading">
              <h3 class="card-title">{{__('product.description')}}</h3>
    				</div>

					  <div class="panel-body">
					    <h4>{!!$product->description!!}</h4>
					  </div>

					</div>

				</div>

			</div>
	<br>
@endsection
