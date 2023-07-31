@extends('layouts.admin')
@section('title')
    Update
@endsection
@section('content')
    <div class="col-12 col-md-6 col-lg-12">
        <div class="card">
            <form action="{{ route('admin.testimons.update', $testimon->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-header">
                    <h4> Testimons Update</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" value="{{ $testimon->title }}">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" name="image" value="{{ $testimon->image }}">
                    </div>
                    <div class="form-group">
                        <label>Job</label>
                        <input type="text" class="form-control" name="job" value="{{ $testimon->job }}">
                    </div>
                    <div class="form-group">
                        <label>Text</label>
                        <input type="text" class="form-control" name="text" value="{{ $testimon->text }}">
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
