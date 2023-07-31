@extends('layouts.admin')
@section('title')
   Create
@endsection
@section('content')

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="card-header">
                        <h4> Product create</h4>
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
                            <label>Money</label>
                            <input type="text" class="form-control" name="money">
                          </div>
                          <div class="form-group">
                            <label> Product-filter Selected</label>
                            <select id="" name="filter_id" class="form-control">
                                @foreach ($filters as $filter)
                                    <option value="{{ $filter->id }}">{{ $filter->title }}</option>
                                @endforeach
                            </select>
                        </div>
                      </div>
                      <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Save</button>
                      </div>
                    </form>
                  </div>
            </div>


@endsection
