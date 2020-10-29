@extends('layouts.public')
@section('title', __('meta.title'))
@section('description', __('meta.home_description'))
@section('keywords', __('meta.home_keywords'))

@section('content')



          <div id="home-content">
              <div class="container w-100 h-auto">

                  <a href=" {{ route('products.index')}}">
                      <img src="{{ asset('images/greekfood.jpg')}}" width="100%" height="400px" alt="Discover the luculos greek foods">
                  </a>
              </div>
          </div>

@endsection
