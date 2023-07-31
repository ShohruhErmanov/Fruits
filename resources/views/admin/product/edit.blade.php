@extends('layouts.admin')
@section('title')
   Update
@endsection
@section('content')

            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <form action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                      <div class="card-header">
                        <h4> Product Update</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label>Title</label>
                          <input type="text" class="form-control" name="title" value="{{ $product->title }}">
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image" value="{{ $product->image }}">
                          </div>

                          <div class="form-group">
                            <label>Money</label>
                            <input type="text" class="form-control" name="money" value="{{ $product->money }}">
                          </div>
                          <div class="form-group">
                            <label> Product-filter Selected</label>
                            <select id="" name="filter_id" class="form-control">
                                @foreach ($filters as $filter)
                                    <option {{ $product->filter_id == $filter->id  ? 'selected' : '' }} value="{{ $filter->id }}">{{ $filter->title }}</option>
                                @endforeach
                            </select>
                        </div>
                      </div>
                      <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                    </form>
                  </div>
            </div>


@endsection
