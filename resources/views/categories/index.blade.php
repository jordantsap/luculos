@extends('layouts.public')

<<<<<<< HEAD
@section('title', __('categoriestitle'))
@section('description', $product->categories->title . __('categoriesdescription'))
@section('keywords', $product->categories->title . ' ' . __('categorieskeywords'))
=======
@section('title', __('catproducts_title'))
@section('meta_description', $product->categories->title . __('catproducts_description'))
@section('meta_keywords', $product->categories->title . ' ' . __('catproducts_keywords'))
>>>>>>> 9ac96d51841a949701b2e7b7d983ee89056d8b95


@section('content')

  <div class="container">
    <div class="row">

        <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Image</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          @foreach ($cats as $cat)
            <th scope="row"> {{$cat->id}}</th>
            <td>{{ asset('categories/'), $cat->image}}</td>
            <td> <a href="{{route('categories.show', $cat->id )}}">{{$cat->title}}</a> </td>
            <td> {{ $cat->description ? : '-'}}</td>
          </tr>
          @endforeach
      </tbody>
      </table>

    </div>
  </div>
@endsection
