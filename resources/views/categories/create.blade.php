@extends('layouts.user')

@section('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">{{ __('Dashboard') }}</div>

                  <div class="card-body">

                      <form action="{{ route('categories.store')}}">

                        form here
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>

@endsection
