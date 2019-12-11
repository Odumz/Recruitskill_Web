@extends('layouts.default')

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
                <i class="fa fa-dashboard" style="color: blue;"></i> Browse talents
            </h4>
            <span class="col-1"></span>
            <div class="selectgroup selectgroup-pills" id="myUL">
                    <label class="selectgroup-item">
                      <input type="checkbox" name="value" value="HTML" class="selectgroup-input" checked="">
                      <span class="selectgroup-button">HTML</span>
                    </label>
                    <label class="selectgroup-item">
                      <input type="checkbox" name="value" value="CSS" class="selectgroup-input">
                      <span class="selectgroup-button">CSS</span>
                    </label>
                    <label class="selectgroup-item">
                      <input type="checkbox" name="value" value="PHP" class="selectgroup-input">
                      <span class="selectgroup-button">PHP</span>
                    </label>
                    <label class="selectgroup-item">
                      <input type="checkbox" name="value" value="JavaScript" class="selectgroup-input">
                      <span class="selectgroup-button">JavaScript</span>
                    </label>
                    <label class="selectgroup-item">
                      <input type="checkbox" name="value" value="Ruby" class="selectgroup-input">
                      <span class="selectgroup-button">Ruby</span>
                    </label>
                    <label class="selectgroup-item">
                      <input type="checkbox" name="value" value="Ruby" class="selectgroup-input">
                      <span class="selectgroup-button">Ruby</span>
                    </label>
                    <label class="selectgroup-item">
                      <input type="checkbox" name="value" value="C++" class="selectgroup-input">
                      <span class="selectgroup-button">C++</span>
                    </label>
                  </div>
            </div>
            <div class="col-12 form-group">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-append">
                        <button class="btn btn-primary" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>
        <div class="page-header">
          <h4 class="page-subtitle">
            <i class="fa fa-dashboard" style="color: blue;"></i> Recruitments
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
                    <a href="/published-recruitment">
                    <div class="card-body">
                        <div class="card-value float-right text-blue"><i class="fa fa-user"></i></div>
                            <h3 class="mb-1">423</h3>
                        <div class="text-muted">Published Recruitments</div>
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
                    <a href="/ongoing-recruitment">
                    <div class="card-body">
                        <div class="card-value float-right text-blue"><i class="fa fa-user"></i></div>
                            <h3 class="mb-1">423</h3>
                        <div class="text-muted">Ongoing Recruitments</div>
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
                    <a href="/concluded-recruitment">
                    <div class="card-body">
                        <div class="card-value float-right text-blue"><i class="fa fa-user"></i></div>
                            <h3 class="mb-1">423</h3>
                        <div class="text-muted">Concluded Recruitments</div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="page-header">
          <h4 class="page-subtitle">
            <i class="fa fa-dashboard" style="color: blue;"></i> Applications
          </h4>
        </div>
        <div class="row row-cards">
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-status bg-blue"></div>
                    {{-- <div class="card-header">
                        <h3 class="card-title">Built card</h3>
                        <div class="card-options">
                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                        </div>
                    </div> --}}
                    <a href="/applications">
                    <div class="card-body">
                        <div class="card-value float-right text-blue"><i class="fa fa-user"></i></div>
                            <h3 class="mb-1">423</h3>
                        <div class="text-muted">Applications</div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-status bg-blue"></div>
                    {{-- <div class="card-header">
                        <h3 class="card-title">Built card</h3>
                        <div class="card-options">
                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                        </div>
                    </div> --}}
                    <a href="/shortlisted-candidate">
                    <div class="card-body">
                        <div class="card-value float-right text-blue"><i class="fa fa-user"></i></div>
                            <h3 class="mb-1">423</h3>
                        <div class="text-muted">Shortlisted Candidates</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-status bg-blue"></div>
                    {{-- <div class="card-header">
                        <h3 class="card-title">Built card</h3>
                        <div class="card-options">
                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                        </div>
                    </div> --}}
                    <a href="{{url('/onboarded-candidate')}}">
                    <div class="card-body">
                        <div class="card-value float-right text-blue"><i class="fa fa-user"></i></div>
                            <h3 class="mb-1">423</h3>
                        <div class="text-muted">Onboarded Candidates</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-status bg-blue"></div>
                    {{-- <div class="card-header">
                        <h3 class="card-title">Built card</h3>
                        <div class="card-options">
                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                        </div>
                    </div> --}}
                    <a href="{{url('/onboarded-candidate')}}">
                    <div class="card-body">
                        <div class="card-value float-right text-blue"><i class="fa fa-user"></i></div>
                            <h3 class="mb-1">423</h3>
                        <div class="text-muted">Upcoming Interviews</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
