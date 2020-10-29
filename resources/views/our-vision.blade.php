@extends('layouts.public')

@section('title', '')
@section('meta_description', __('meta.visiondescription'))
@section('meta_keywords', __('meta.visiondescription'))


@section('content')

  <div class="container mission-container">
    <div class="row">
      <div class="col-sm-12 p-5">
        <h1 class="mb-10"> {{ __('vision.title')}}</h1>
      </div>

      <div class="col-sm-12">
        <p class="text-center" >
          <img src="{{ asset('images/vision.jpg')}}" alt="" width="564" height="261">
        </p>
        <p class="text-center"> {{__('vision.1')}}</p>
        <br>
        <p class="text-center"> {{__('vision.2')}}</p>
        <br>
        <br>
        <br>
        <p class="text-center"> {{__('vision.3')}}</p>
        <br>
        <p class="text-center"> {{__('vision.4')}}</p>
        <br>
        <p class="text-center"> {{__('vision.5')}}</p>
        <br>
        <p class="text-center"> {{__('vision.6')}}</p>
        <br>
        <br>
        <br>
        <p class="text-center"> {{__('vision.7')}}</p>
        <br>
        <p class="text-center"> {{__('vision.8')}}</p>
        <br>
      </div>
    </div>
  </div>

@endsection
