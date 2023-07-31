@extends('layouts.admin')
@section('title')
    Banner
@endsection
@section('content')
    @if (session('seccess'))
        <div class="alert alert-primary alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>×</span>
                </button>
                {{ session('seccess') }}
            </div>
        </div>
    @endif


    <div class="col-md-12">
        <div class="white_shd full margin_bottom_30">
            <div class="full graph_head">
                <div class="heading1 margin_0 ">
                    <h2>Banner Table</h2>
                    <div class="card-header-form mt-3 ">
                        @empty($banners)
                        <a href="{{ route('admin.banner.create') }}" class="btn btn-primary">Create</a>
                        @endempty
                    </div>
                </div>


            </div>
            <div class="table_section padding_infor_info">
                <div class="table-responsive-sm">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th>T/R</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Text</th>
                                <th>Percentage</th>
                                <th>Time</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($banners as $banner)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $banner->title }}</td>
                                    <td>
                                        <img src="/images/banner/{{ $banner->image }}" alt="" width="100">
                                    </td>
                                    <td>{{ $banner->text }}</td>
                                    <td>{{ $banner->percentage }}</td>
                                    <td>{{ $banner->time }}</td>
                                    <td class="d-flex ">
                                        <a href="#!"
                                            class="btn btn-warning ">Show</a>
                                        <a href="{{ route('admin.banner.edit', $banner->id) }}"
                                            class="btn btn-info">Update</a>
                                        <form action="{{ route('admin.banner.destroy', $banner->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger "
                                                onclick="return confirm('o\'chirishni hohlaysizmi?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
