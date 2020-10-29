@extends('layouts.public')

@section('title', __('meta.newstitle'))
@section('meta_description', __('meta.newsdescription'))
@section('meta_keywords', __('meta.newskeywords'))

@section('content')

<div class="col-sm-9">
<h1 class="text-center"> {{ __("page.news")}}</h1>
</div>
@include('partials.sidebar')

@endsection
