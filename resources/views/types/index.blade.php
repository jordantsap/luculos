@extends('layouts.public')

@section('title', '')
@section('meta_description', $product->category->name.' '.$product->meta_description)
@section('meta_keywords', $product->meta_keywords.' '. $product->category->name)


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
            <td>{{$cat->image}}</td>
            <td> <a href="{{route('categories.show', $cat->id )}}">{{$cat->title}}</a> </td>
            <td> {{ $cat->description ? : '-'}}</td>
          </tr>
          @endforeach
      </tbody>
      </table>

    </div>
  </div>
@endsection
