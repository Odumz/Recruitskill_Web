@extends('layouts.defaultcandidate')

@section('content')
<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">
                <i class="fa fa-dashboard" style="color: blue;"></i> Verification
            </h1>
        </div>
        <div class="card card-profile">
            <div class="card-header" style="background-image: url(demo/photos/eberhard-grossgasteiger-311213-500.jpg);"></div>
            <div class="card-body text-center">
                <img class="card-profile-img" src="demo/faces/male/16.jpg">
                <h3 class="mb-3">Google Inc</h3>
                <p class="mb-4">
                    Big belly rude boy, million dollar hustler. Unemployed.
                </p>
                <ul class="social-links list-inline mb-0 mt-2">
                    <li class="list-inline-item">
                      <a href="javascript:void(0)" title="Facebook" data-toggle="tooltip"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                      <a href="javascript:void(0)" title="Twitter" data-toggle="tooltip"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                      <a href="javascript:void(0)" title="1234567890" data-toggle="tooltip"><i class="fa fa-phone"></i></a>
                    </li>
                    <li class="list-inline-item">
                      <a href="javascript:void(0)" title="Google Inc" data-toggle="tooltip"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
