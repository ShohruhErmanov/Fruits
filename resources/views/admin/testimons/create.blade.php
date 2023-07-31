@extends('layouts.admin')
@section('title')
   Create
@endsection
@section('content')

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="{{ route('admin.testimons.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="card-header">
                        <h4> Testimons create</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label>Title</label>
                          <input type="text" class="form-control" name="title">
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image">
                          </div>
                          <div class="form-group">
                            <label>Job</label>
                            <input type="text" class="form-control" name="job">
                          </div>
                          <div class="form-group">
                            <label>Text</label>
                            <input type="text" class="form-control" name="text">
                          </div>
                      </div>
                      <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Save</button>
                      </div>
                    </form>
                  </div>
            </div>


@endsection
