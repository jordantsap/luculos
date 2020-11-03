@extends('layouts.public')
@section('title', __('meta.title'))
@section('description', __('meta.homedescription'))
@section('keywords', __('meta.homekeywords'))

@section('content')



          <div id="container-fluid">
              <div class="row-fluid">

                  <div class="col-sm-12">
                    <a href=" {{ route('products.index')}}">
                        <img class="mx-auto"src="{{ asset('images/banner.jpg')}}" width="100%" max-height="350px" alt="Discover the luculos greek foods">
                    </a>
                  </div>
              </div>
          </div>

@endsection
