@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                        <br>
                    <a href="{{ route('products.create')}}">Create Product</a> <br>
                    <a href="{{ route('categories.create')}}">Create Category</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
