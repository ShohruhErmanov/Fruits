@extends('layouts.site')
@section('title')
   About
@endsection
@section('content')

<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>We sale fresh fruits</p>
                    <h1>About Us</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

@include('sections.fruitka')
@include('sections.shopbanner')
@include('sections.team')
@include('sections.testimons')
@include('sections.logo')





@endsection
