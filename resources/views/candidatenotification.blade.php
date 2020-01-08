@extends('layouts.defaultcandidate')

@section('content')
<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">
                <i class="fe fe-bell" style="color: blue;"></i> Notifications
            </h1>
        </div>
        {{-- <div class="card card-profile">
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
        </div> --}}
        <div class="table-responsive">
            <table class="table card-table table-striped table-vcenter">
              <thead>
                <tr>
                  <th colspan="2">User</th>
                  <th>Commit</th>
                  <th>Date</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="w-1"><span class="avatar" style="background-image: url(./demo/faces/male/9.jpg)"></span></td>
                  <td>Ronald Bradley</td>
                  <td>Initial commit</td>
                  <td class="text-nowrap">May 6, 2018</td>
                  <td class="w-1"><a href="#" class="icon"><i class="fe fe-trash"></i></a></td>
                </tr>
                <tr>
                  <td><span class="avatar">BM</span></td>
                  <td>Russell Gibson</td>
                  <td>Main structure</td>
                  <td class="text-nowrap">April 22, 2018</td>
                  <td><a href="#" class="icon"><i class="fe fe-trash"></i></a></td>
                </tr>
                <tr>
                  <td><span class="avatar" style="background-image: url(./demo/faces/female/1.jpg)"></span></td>
                  <td>Beverly Armstrong</td>
                  <td>Left sidebar adjustments</td>
                  <td class="text-nowrap">April 15, 2018</td>
                  <td><a href="#" class="icon"><i class="fe fe-trash"></i></a></td>
                </tr>
                <tr>
                  <td><span class="avatar" style="background-image: url(./demo/faces/male/4.jpg)"></span></td>
                  <td>Bobby Knight</td>
                  <td>Topbar dropdown style</td>
                  <td class="text-nowrap">April 8, 2018</td>
                  <td><a href="#" class="icon"><i class="fe fe-trash"></i></a></td>
                </tr>
                <tr>
                  <td><span class="avatar" style="background-image: url(./demo/faces/female/11.jpg)"></span></td>
                  <td>Sharon Wells</td>
                  <td>Fixes #625</td>
                  <td class="text-nowrap">April 9, 2018</td>
                  <td><a href="#" class="icon"><i class="fe fe-trash"></i></a></td>
                </tr>
              </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="./js/assets/jquery.min.js"></script>
    <script src="./js/assets/bootstrap.bundle.min.js"></script>
    <script src="./js/assets/angular.min.js"></script>
    <script src="./js/assets/app.js"></script>
@endsection
