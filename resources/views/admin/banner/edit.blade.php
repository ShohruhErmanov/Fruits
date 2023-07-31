@extends('layouts.admin')
@section('title')
   Update
@endsection
@section('content')

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="{{ route('admin.banner.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                      <div class="card-header">
                        <h4> Product Update</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label>Title</label>
                          <input type="text" class="form-control" name="title" value="{{ $banner->title }}">
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image" value="{{ $banner->image }}">
                          </div>

                          <div class="form-group">
                            <label>Text</label>
                            <input type="text" class="form-control" name="text" value="{{ $banner->text }}">
                          </div>
                          <div class="form-group">
                            <label>Percentage</label>
                            <input type="text" class="form-control" name="percentage" value="{{ $banner->percentage }}">
                          </div>
                          <div class="form-group">
                            <label>Time</label>
                            <input type="text" class="form-control" name="time" value="{{ $banner->time }}">
                          </div>
                      </div>
                      <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                    </form>
                  </div>
            </div>


@endsection
