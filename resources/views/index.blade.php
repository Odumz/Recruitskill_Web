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
                </div>
            </div>
            <div class="col-12 form-group">
                <div class="input-group">
                    <input type="text" id="inputAddDiv" class="form-control" placeholder="Search for...">
                    <span class="input-group-append">
                        <button class="btn btn-primary" id="btnAddDiv" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>

        <div class="card py-3">
            <form method="post" action="/jobtitle" enctype="application/json">
            {{ csrf_field() }}
            <div class="col-12 form-group">
                <div class="input-group">
                    {{-- <input type="hidden" name="users_id" name = "users_id" value="{{ Auth::user()->id }}"> --}}
                    <input type="text" id="job_title" name="job_title" class="form-control" placeholder="Search for...">
                    <span class="input-group-append">
                        <button class="btn btn-primary" type="submit">Go!</button>
                    </span>
                </div>
            </div>
            </form>
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
                    <a href="{{ route('publishedrecruitment')}}">
                    <div class="card-body">
                        {{-- @foreach ($pr as $item) --}}
                        <div class="card-value float-right text-blue"><i class="fa fa-user"></i></div>
                            <h3 class="mb-1">{{count($publishedrecruitment) ?? '0'}}</h3>
                        <div class="text-muted">Published Recruitments</div>
                        {{-- @endforeach --}}
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
                    <a href="{{ route('ongoingrecruitment')}}">
                    <div class="card-body">
                        <div class="card-value float-right text-blue"><i class="fa fa-user"></i></div>
                            <h3 class="mb-1">{{count($ongoingrecruitment) ?? '0'}}</h3>
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
                    <a href="{{ route('concludedrecruitment')}}">
                    <div class="card-body">
                        <div class="card-value float-right text-blue"><i class="fa fa-user"></i></div>
                            <h3 class="mb-1">{{count($concludedrecruitment) ?? '0'}}</h3>
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
                    <a href="{{ route('applications')}}">
                    <div class="card-body">
                        <div class="card-value float-right text-blue"><i class="fa fa-user"></i></div>
                            <h3 class="mb-1">{{count($applications) ?? '0'}}</h3>
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
                    <a href="{{ route('shortlistedcandidate')}}">
                    <div class="card-body">
                        <div class="card-value float-right text-blue"><i class="fa fa-user"></i></div>
                            <h3 class="mb-1">{{count($shortlistedcandidate) ?? '0'}}</h3>
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
                    <a href="{{ route('onboardedcandidate')}}">
                    <div class="card-body">
                        <div class="card-value float-right text-blue"><i class="fa fa-user"></i></div>
                            <h3 class="mb-1">{{count($onboardedcandidate) ?? '0'}}</h3>
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
                    <a href="{{ route('upcominginterview')}}">
                    <div class="card-body">
                        <div class="card-value float-right text-blue"><i class="fa fa-user"></i></div>
                            <h3 class="mb-1">{{count($upcominginterview) ?? '0'}}</h3>
                        <div class="text-muted">Upcoming Interviews</div>
                    </div>
                </div>
            </div>
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
