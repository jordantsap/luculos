@extends('layouts.public')

@section('title', '')
@section('meta_description', __('meta.contactdescription'))
@section('meta_keywords', __('meta.contactkeywords'))


@section('content')


    <div class="col-sm-4">
      <img class="animate__animated animate__slideInLeft" src=" {{asset('images/contact-us.png')}}" width="100%" alt="{{ __('page.contactheader')}}">
    </div>
    <div class="col-sm-8">
      <div class="col-sm-12">
        <h1 class="text-center">
          {{ __('page.contactheader')}}
        </h1>
      </div>
      <form action="{{ route('postpricelist') }}" method="post" class="">
                {{ csrf_field() }}
  							<div class="row">
                  <div class="col form-group">
    								{{-- <label for="name">{{ __('page.name') }}</label> --}}
    								<input type="text" name="name" class="form-control" id="name" placeholder="{{ __('page.name') }}" required>
    							</div>
                  <div class="col form-group">
    								{{-- <label for="email">{{ __('page.email') }}</label> --}}
    								<input type="email" name="email" class="form-control" id="email" placeholder="{{ __('page.email') }}" required>
    							</div>
                </div>
  							<div class="form-group">
  								{{-- <label for="message">{{ __('page.contactmessage') }}</label> --}}
  								<textarea name="message" class="form-control" rows="5" placeholder="{{ __('page.messageplaceholder') }}" required></textarea>
  							</div>
  							<button type="submit" name="contact" id="btn" class="mb-4 float-right btn btn-primary btn-lg">{{ __('page.contactbutton') }}</button>
  						</form>
    </div>


@endsection
