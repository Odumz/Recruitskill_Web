@extends('layouts.defaultcandidate')

@section('content')
<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">
                <i class="fa fa-dashboard" style="color: blue;"></i> Dashboard
            </h1>
        </div>
        <div class="card py-3">
            <div class="page-header">
                <h4 class="page-subtitle">
                    <i class="fa fa-dashboard" style="color: blue;"></i> Add new skill
                </h4>
                <span class="col-1"></span>
                <div class="selectgroup selectgroup-pills" id="myUL">
                    <label class="selectgroup-item">

                      <input type="checkbox" name="value" value="HTML" class="selectgroup-input" checked="">
                      <span class="selectgroup-button">HTML</span>
                    </label>
                </div>
            </div>
            <div class="col-12 form-group">
                <div class="input-group">
                    <input type="text" id="inputAddDiv" class="form-control" placeholder="Type in a skill...">
                    <span class="input-group-append">
                        <button class="btn btn-primary" id="btnAddDiv" type="button">Add</button>
                    </span>
                </div>
            </div>
            <div class="page-header">
                <h4 class="page-subtitle">
                    <i class="fa fa-dashboard" style="color: blue;"></i> My Skills
                </h4>
                <span class="col-1"></span>
            </div>
            <div class="col-12 form-group">
                <div class="selectgroup selectgroup-pills" id="myUL">
                    <span class="input-group-append px-1">
                        <button class="btn card-btn-white-primary color-blue" id="btnAddDiv" type="button">HTML</button>
                    </span>
                </div>
                <div class="selectgroup selectgroup-pills" id="myUL">
                    <span class="input-group-append px-1">
                        <button class="btn card-btn-white-primary color-black" id="btnAddDiv" type="button">HTML</button>
                    </span>
                </div>
                <div class="selectgroup selectgroup-pills" id="myUL">
                    <span class="input-group-append px-1">
                        <button class="btn card-btn-white-primary color-green" id="btnAddDiv" type="button">HTML</button>
                    </span>
                </div>
                <div class="selectgroup selectgroup-pills" id="myUL">
                    <span class="input-group-append px-1">
                        <button class="btn card-btn-white-primary color-green" id="btnAddDiv" type="button">HTML</button>
                    </span>
                </div>
                <div class="selectgroup selectgroup-pills" id="myUL">
                    <span class="input-group-append px-1">
                        <button class="btn card-btn-white-primary color-red" id="btnAddDiv" type="button">HTML</button>
                    </span>
                </div>
                <div class="selectgroup selectgroup-pills" id="myUL">
                        <span class="input-group-append px-1">
                                <button class="btn card-btn-white-primary color-black" id="btnAddDiv" type="button">HTML</button>
                            </span>
                </div>
                <div class="selectgroup selectgroup-pills" id="myUL">
                    <span class="input-group-append px-1">
                        <button class="btn card-btn-white-primary color-green" id="btnAddDiv" type="button">HTML</button>
                    </span>
                </div>
                <div class="selectgroup selectgroup-pills" id="myUL">
                    <span class="input-group-append px-1">
                        <button class="btn card-btn-white-primary color-red" id="btnAddDiv" type="button">HTML</button>
                    </span>
                </div>
            </div>
        </div>
        {{-- <div class="card py-3">
            <div class="page-header">
                <h4 class="page-subtitle">
                    <i class="fa fa-dashboard" style="color: blue;"></i> My Skills
                </h4>
                <span class="col-1"></span>
            </div>
            <div class="col-12 form-group">
                <div class="selectgroup selectgroup-pills" id="myUL">
                    <label class="selectgroup-item">
                      <input type="checkbox" name="value" value="HTML" class="selectgroup-input" checked="">
                      <span class="selectgroup-button">HTML</span>
                    </label>
                </div>
                <div class="selectgroup selectgroup-pills" id="myUL">
                    <label class="selectgroup-item">
                      <input type="checkbox" name="value" value="HTML" class="selectgroup-input" checked="">
                      <span class="selectgroup-button">HTML</span>
                    </label>
                </div>
                <div class="selectgroup selectgroup-pills" id="myUL">
                    <label class="selectgroup-item">
                      <input type="checkbox" name="value" value="HTML" class="selectgroup-input" checked="">
                      <span class="selectgroup-button">HTML</span>
                    </label>
                </div>
                <div class="selectgroup selectgroup-pills" id="myUL">
                    <label class="selectgroup-item">
                      <input type="checkbox" name="value" value="HTML" class="selectgroup-input" checked="">
                      <span class="selectgroup-button">HTML</span>
                    </label>
                </div>
                <div class="selectgroup selectgroup-pills" id="myUL">
                    <label class="selectgroup-item">
                      <input type="checkbox" name="value" value="HTML" class="selectgroup-input" checked="">
                      <span class="selectgroup-button">HTML</span>
                    </label>
                </div>
                <div class="selectgroup selectgroup-pills" id="myUL">
                    <label class="selectgroup-item">
                      <input type="checkbox" name="value" value="HTML" class="selectgroup-input" checked="">
                      <span class="selectgroup-button">HTML</span>
                    </label>
                </div>
                <div class="selectgroup selectgroup-pills" id="myUL">
                    <label class="selectgroup-item">
                      <input type="checkbox" name="value" value="HTML" class="selectgroup-input" checked="">
                      <span class="selectgroup-button">HTML</span>
                    </label>
                </div>
                <div class="selectgroup selectgroup-pills" id="myUL">
                    <label class="selectgroup-item">
                      <input type="checkbox" name="value" value="HTML" class="selectgroup-input" checked="">
                      <span class="selectgroup-button">HTML</span>
                    </label>
                </div>
            </div>
        </div> --}}
        <div class="page-header">
            <h4 class="page-subtitle">
                <i class="fa fa-dashboard" style="color: blue;"></i> Interested in...
            </h4>
        </div>
        <div class="row row-cards">
            <div class="col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-status bg-blue"></div>
                    {{-- <div class="card-header">
                        <h3 class="card-title">Built card</h3>
                        <div class="card-options">
                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                        </div>
                    </div> --}}
                    <a href="/course">
                    <div class="card-body">
                        <div class="card-value float-right text-blue"><i class="fa fa-user"></i></div>
                            <h3 class="mb-1">Data Sciences</h3>
                        <div class="text-muted">120 followers</div>
                        <br>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" style="width: 84%"></div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-status bg-blue"></div>
                    {{-- <div class="card-header">
                        <h3 class="card-title">Built card</h3>
                        <div class="card-options">
                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                        </div>
                    </div> --}}
                    <a href="/course">
                    <div class="card-body">
                        <div class="card-value float-right text-blue"><i class="fa fa-user"></i></div>
                            <h3 class="mb-1">Art of Communication</h3>
                        <div class="text-muted">247 followers</div>
                        <br>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-orange" style="width: 27%"></div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-status bg-blue"></div>
                    {{-- <div class="card-header">
                        <h3 class="card-title">Built card</h3>
                        <div class="card-options">
                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                        </div>
                    </div> --}}
                    <a href="/course">
                    <div class="card-body">
                        <div class="card-value float-right text-blue"><i class="fa fa-user"></i></div>
                            <h3 class="mb-1">Video Scribe - DIY </h3>
                        <div class="text-muted">76 followers</div>
                        <br>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-yellow" style="width: 51%"></div>
                            <br>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row row-cards">
            <div class="my-3 my-md-5">
                <div class="container">
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
                        <a href="/career" class="btn pr-5"><i class="fe fe-eye"></i> See more</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            {{-- <div class="col-sm-6 col-lg-3">
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
<script>
$(function() {
    $('#btnAddDiv').click(function(){
        var text = $('#inputAddtoList').val();
	    var newDiv = $('<div class="listing listing_ad job"><h4><a>' + text + '</a></h4> </div>')
        newDiv.toggleClass('info', $('#checkboxAddtoList').is(':checked'));
        //newDiv.style.background = "#000";
        $('body').append(newDiv);
        $('#inputAddtoList').val('');
    });
});
</script>
@endsection
