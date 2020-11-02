@extends('layouts.user')


@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="container">
  <div class="row">
    <div class="col-sm-12">


          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Δημιουργία Προϊόντος
              {{-- <small>it all starts here</small> --}}
            </h1>
          </section>

          <!-- Main content -->
          <section class="content">

            <!-- Default box -->
            <div class="box">
              <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                  <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                      <label for="title" class="control-label">{{ __('Τίτλος') }}</label>
                          <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required>

                          @if ($errors->has('title'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('title') }}</strong>
                              </span>
                          @endif
                  </div>


                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                        <label for="photos">Εικόνα</label>
                        @if ($errors->has('image'))
                          <strong class="text-danger">{{ $errors->first('image') }}</strong>
                        @endif
                        <div class="input-group">
                          @if ( old('image'))
                            <img src="{{ old('image') }}" alt="">
                          @endif
                          <input type="file" name="image" id="image" value="{{ old('image') }}">
                        </div>
                      </div>
                    </div>

                      <div class="col-sm-6">
                        <label for="photos">Κατηγορία</label>
                        <div class="row">
                        @foreach ($categories->chunk(7) as $chunk)
                              @foreach ($chunk as $category)
                                  <div class="col-sm-4">
                                    <input type="checkbox" name="category[]" value="{{ $category->id }}">
                                    - {{ $category->title }}
                                  </div>
                              @endforeach
                        @endforeach
                      </div>
                      </div>

                  </div>

                  <div class="form-group">
                    <label for="description">Περιγραφή</label>
                    <textarea class="textarea" name="description" placeholder="Place some text here" style="width: 100%; height:150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>{{old('description')}}</textarea>
                  </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
                <!-- /.box-body -->

              </form>
            </div>
            <!-- /.box -->

          </section>
          <!-- /.content -->
    </div>
  </div>
</div>
<!-- /.content-wrapper -->
@endsection
