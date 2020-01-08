@extends('layouts.defaultcandidate')

@section('content')
<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">
                <i class="fa fa-dashboard" style="color: blue;"></i> Featured Skills
            </h1>
        </div>
        {{-- <div class=""> --}}
            <div class="row">
              <div class="col-md-6 col-lg-3">
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
             <div class="col-md-6 col-lg-3">
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
              <div class="col-md-6 col-lg-3">
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
               <div class="col-md-6 col-lg-3">
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
        {{-- </div> --}}
    </div>
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">
                <i class="fa fa-dashboard" style="color: blue;"></i> My Skills
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
                    <i class="fa fa-dashboard" style="color: blue;"></i> Verified Skills
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
    </div>
</div>
@endsection
