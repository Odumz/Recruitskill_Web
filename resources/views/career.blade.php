@extends('layouts.defaultcandidate')

@section('content')
<div class="my-3 my-md-5">
    <div class="container">
        <div class="col">
            {{-- <div class="card"> --}}
                <div class="page-header">
                    <h4 class="page-title">
                        <i class="fa fa-dashboard" style="color: blue;"></i> Interests
                    </h4>
                </div>
                <div class="card-body">
                    <div id="carousel-indicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-indicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-indicators" data-slide-to="1" class=""></li>
                            <li data-target="#carousel-indicators" data-slide-to="2" class=""></li>
                            <li data-target="#carousel-indicators" data-slide-to="3" class=""></li>
                            <li data-target="#carousel-indicators" data-slide-to="4" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block w-50" alt="" src="./demo/photos/aneta-ivanova-776-1500.jpg" data-holder-rendered="true">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-50" alt="" src="./demo/photos/anthony-intraversato-257182-1500.jpg" data-holder-rendered="true">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-50" alt="" src="./demo/photos/artem-sapegin-229391-1500.jpg" data-holder-rendered="true">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-50" alt="" src="./demo/photos/bobby-burch-145906-1500.jpg" data-holder-rendered="true">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-50" alt="" src="./demo/photos/casey-horner-339165-1500.jpg" data-holder-rendered="true">
                            </div>
                        </div>
                    </div>
                </div>
            {{-- </div> --}}
        </div>
    </div>
    <div class="container">
        {{-- <div class="page-header">
            <h1 class="page-title">
                <i class="fa fa-dashboard" style="color: blue;"></i> Career
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
        <div class="row row-cards">
            <div class="my-3 my-md-5">
                <div class="container"> --}}
                <div class="page-header">
                    <h4 class="page-title">
                        <i class="fa fa-dashboard" style="color: blue;"></i> Opportunities
                    </h4>
                </div>
                  <div class="row row-cards">
                    <div class="col-lg-3">
                      <div class="row">
                        <div class="col-md-6 col-lg-12">
                          <div class="card">
                            <div class="card-body">
                              <div class="mb-4 text-center">
                                <img src="demo/products/apple-iphone7-special.jpg" alt="Apple iPhone 7 128GB" class="img-fluid">
                              </div>
                              <h4 class="card-title"><a href="javascript:void(0)">Art of Communication</a></h4>
                              <div class="card-subtitle">
                                University of Salford
                              </div>
                              <div class="mt-5 d-flex align-items-center">
                                <div class="product-price">
                                  {{-- <strong>120 followers</strong> --}}
                                  <p>120 followers</p>
                                </div>
                                <div class="ml-auto">
                                  <a href="javascript:void(0)" class="btn btn-primary"><i class="fe fe-plus"></i> Add to skills</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                          <div class="card">
                            <div class="card-body">
                              <div class="mb-4 text-center">
                                <img src="demo/products/gopro-hero.jpg" alt="Apple iPhone 7 128GB" class="img-fluid">
                              </div>
                              <h4 class="card-title"><a href="javascript:void(0)">Data Sciences</a></h4>
                              <div class="card-subtitle">
                                Udemy
                              </div>
                              <div class="mt-5 d-flex align-items-center">
                                <div class="product-price">
                                  {{-- <strong>247 followers</strong> --}}
                                  <p>247 followers</p>
                                </div>
                                <div class="ml-auto">
                                  <a href="javascript:void(0)" class="btn btn-primary"><i class="fe fe-plus"></i> Add to skills</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-9">
                      <div class="card">
                        <table class="table card-table table-vcenter">
                          <tr>
                            <td><img src="demo/products/apple-iphone7-special.jpg" alt="" class="h-8"></td>
                            <td>
                              Accountant | Entry Level | Lekki, Lagos
                            </td>
                            <td class="text-right text-muted d-none d-md-table-cell text-nowrap">Posted </td>
                            <td class="text-right text-muted d-none d-md-table-cell text-nowrap">38 offers</td>
                            <td class="text-right">
                                <div class="ml-auto">
                                    <a href="/job-post-detail" class="btn btn-primary"><i class="fe fe-eye"></i> View</a>
                                </div>
                            </td>
                          </tr>
                          <tr>
                            <td><img src="demo/products/apple-macbook-pro.jpg" alt="" class="h-8"></td>
                            <td>
                              Art Director | Senior Level | Lugbe, Abuja
                              <div class="badge badge-default badge-md">Recent</div>
                            </td>
                            <td class="text-right text-muted d-none d-md-table-cell text-nowrap">Posted </td>
                            <td class="text-right text-muted d-none d-md-table-cell text-nowrap">13 offers</td>
                            <td class="text-right">
                                <div class="ml-auto">
                                    <a href="javascript:void(0)" class="btn btn-primary"><i class="fe fe-eye"></i> View</a>
                                </div>
                            </td>
                          </tr>
                          <tr>
                            <td><img src="demo/products/apple-iphone7.jpg" alt="" class="h-8"></td>
                            <td>
                              Front-end Developer | Intermediate | Port-harcourt
                            </td>
                            <td class="text-right text-muted d-none d-md-table-cell text-nowrap">48 reviews</td>
                            <td class="text-right text-muted d-none d-md-table-cell text-nowrap">38 offers</td>
                            <td class="text-right">
                                <div class="ml-auto">
                                    <a href="javascript:void(0)" class="btn btn-primary"><i class="fe fe-eye"></i> View</a>
                                </div>
                            </td>
                          </tr>
                          <tr>
                            <td><img src="demo/products/gopro-hero.jpg" alt="" class="h-8"></td>
                            <td>
                              GoPro HERO6 Black
                              <div class="badge badge-default badge-md">New</div>
                            </td>
                            <td class="text-right text-muted d-none d-md-table-cell text-nowrap">66 reviews</td>
                            <td class="text-right text-muted d-none d-md-table-cell text-nowrap">47 offers</td>
                            <td class="text-right">
                                <div class="ml-auto">
                                    <a href="/job-post-detail" class="btn btn-primary"><i class="fe fe-eye"></i> View</a>
                                </div>
                            </td>
                          </tr>
                          <tr>
                            <td><img src="demo/products/msi.jpg" alt="" class="h-8"></td>
                            <td>
                              MSI GV62 i5-7300HQ/8GB/1TB/Win10X GTX1050
                            </td>
                            <td class="text-right text-muted d-none d-md-table-cell text-nowrap">59 reviews</td>
                            <td class="text-right text-muted d-none d-md-table-cell text-nowrap">26 offers</td>
                            <td class="text-right">
                                <div class="ml-auto">
                                    <a href="/job-post-detail" class="btn btn-primary"><i class="fe fe-eye"></i> View</a>
                                </div>
                            </td>
                          </tr>
                          <tr>
                            <td><img src="demo/products/xiaomi-mi.jpg" alt="" class="h-8"></td>
                            <td>
                              Xiaomi Mi A1 64GB Black
                              <div class="badge badge-default badge-md">New</div>
                            </td>
                            <td class="text-right text-muted d-none d-md-table-cell text-nowrap">63 reviews</td>
                            <td class="text-right text-muted d-none d-md-table-cell text-nowrap">43 offers</td>
                            <td class="text-right">
                                <div class="ml-auto">
                                    <a href="/job-post-detail" class="btn btn-primary"><i class="fe fe-eye"></i> View</a>
                                </div>
                            </td>
                          </tr>
                          <tr>
                            <td><img src="demo/products/huawei-mate.jpg" alt="" class="h-8"></td>
                            <td>
                              Huawei Mate 10 Pro Dual SIM Gray
                            </td>
                            <td class="text-right text-muted d-none d-md-table-cell text-nowrap">71 reviews</td>
                            <td class="text-right text-muted d-none d-md-table-cell text-nowrap">12 offers</td>
                            <td class="text-right">
                                <div class="ml-auto">
                                    <a href="/job-post-detail" class="btn btn-primary"><i class="fe fe-eye"></i> View</a>
                                </div>
                            </td>
                          </tr>
                          <tr>
                            <td><img src="demo/products/sony-kd.jpg" alt="" class="h-8"></td>
                            <td>
                              Sony KD-49XE7005
                              <div class="badge badge-default badge-md">New</div>
                            </td>
                            <td class="text-right text-muted d-none d-md-table-cell text-nowrap">54 reviews</td>
                            <td class="text-right text-muted d-none d-md-table-cell text-nowrap">14 offers</td>
                            <td class="text-right">
                                <div class="ml-auto">
                                    <a href="/job-post-detail" class="btn btn-primary"><i class="fe fe-eye"></i> View</a>
                                </div>
                            </td>
                          </tr>
                          <tr>
                            <td><img src="demo/products/samsung-galaxy.jpg" alt="" class="h-8"></td>
                            <td>
                              Samsung Galaxy A5 A520F 2017 LTE Black Sky
                            </td>
                            <td class="text-right text-muted d-none d-md-table-cell text-nowrap">37 reviews</td>
                            <td class="text-right text-muted d-none d-md-table-cell text-nowrap">40 offers</td>
                            <td class="text-right">
                                <div class="ml-auto">
                                    <a href="/job-post-detail" class="btn btn-primary"><i class="fe fe-eye"></i> View</a>
                                </div>
                            </td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="text-right">
                    <div class="ml-auto">
                        <a href="/job-post-detail" class="btn pr-5"><i class="fe fe-eye"></i> See more</a>
                    </div>
                  </div>
              {{--   </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-status bg-blue"></div> --}}
                    {{-- <div class="card-header">
                        <h3 class="card-title">Built card</h3>
                        <div class="card-options">
                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                        </div>
                    </div> --}}
                    {{-- <a href="/shortlisted-candidate">
                    <div class="card-body">
                        <div class="card-value float-right text-blue"><i class="fa fa-user"></i></div>
                            <h3 class="mb-1">45</h3>
                        <div class="text-muted">Shortlisted Candidates</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-status bg-blue"></div> --}}
                    {{-- <div class="card-header">
                        <h3 class="card-title">Built card</h3>
                        <div class="card-options">
                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                        </div>
                    </div> --}}
                    {{-- <a href="{{url('/onboarded-candidate')}}">
                    <div class="card-body">
                        <div class="card-value float-right text-blue"><i class="fa fa-user"></i></div>
                            <h3 class="mb-1">16</h3>
                        <div class="text-muted">Onboarded Candidates</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-status bg-blue"></div> --}}
                    {{-- <div class="card-header">
                        <h3 class="card-title">Built card</h3>
                        <div class="card-options">
                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                        </div>
                    </div> --}}
                    {{-- <a href="{{url('/upcoming-interview')}}">
                    <div class="card-body">
                        <div class="card-value float-right text-blue"><i class="fa fa-user"></i></div>
                            <h3 class="mb-1">24</h3>
                        <div class="text-muted">Upcoming Interviews</div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection
