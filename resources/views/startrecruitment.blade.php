@extends('layouts.default')

@section('content')
<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
            <h4 class="page-subtitle">
                <a href="/dashboard">Dashboard</a> > Start Recruitment
            </h4>
        </div>

        <div class="col-md-6 col-xl-8">
            <form method="post" action="http://localhost:8080/api/v1/recruit/recruitment" enctype="multipart/form-data">
                {{ csrf_field() }}
            <div class="card">
                <div class="card-status bg-teal"></div>
                <div class="card-header">
                    <h3 class="card-title">Let us know who you're looking for!</h3>
                    {{-- <div class="card-options">
                        <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                        <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                    </div> --}}
                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-body">
                                {{-- <div class="row">
                                <div class="col-auto">
                                    <span class="avatar avatar-xl" style="background-image: url(demo/faces/female/9.jpg)"></span>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                    <label class="form-label">Email-Address</label>
                                    <input class="form-control" placeholder="your-email@domain.com"/>
                                    </div>
                                </div>
                                </div> --}}
                                <div class="form-group">
                                    <label class="form-label">Job Title</label>
                                    <input class="form-control" name="job_title" id="job_title" placeholder="Enter a job title"/>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Job Description</label>
                                    <textarea class="form-control" name="job_description" rows="7" placeholder="Enter the necessary description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Skills</label>
                                    <input class="form-control" name="required_skills" id="skill" placeholder="Enter a skill"/>
                                </div>
                                {{-- <div class="form-group">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" value="password"/>
                                </div> --}}
                                {{-- <div class="form-footer">
                                    <button class="btn btn-primary btn-block col-sm-2">Next</button>
                                </div> --}}

                        </div>
                    </div>
                </div>
            </div>



            <div class="card">
                <div class="card-status bg-green"></div>
                <div class="card-header">
                    <h3 class="card-title">Other Preferences!</h3>
                    {{-- <div class="card-options">
                        <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                        <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                    </div> --}}
                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-body">
                            {{-- <form method="post" action="" enctype="multipart/form-data">
                            {{ csrf_field() }} --}}
                                {{-- <div class="row">
                                <div class="col-auto">
                                    <span class="avatar avatar-xl" style="background-image: url(demo/faces/female/9.jpg)"></span>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                    <label class="form-label">Email-Address</label>
                                    <input class="form-control" placeholder="your-email@domain.com"/>
                                    </div>
                                </div>
                                </div> --}}
                                <div class="form-group">
                                    <label class="form-label">Gender</label>
                                    <div class="selectgroup w-25">
                                      <label class="selectgroup-item">
                                        <input type="radio" name="value" value="Male" class="selectgroup-input">
                                        <span class="selectgroup-button">M</span>
                                      </label>
                                      <label class="selectgroup-item">
                                        <input type="radio" name="value" value="Female" class="selectgroup-input">
                                        <span class="selectgroup-button">F</span>
                                      </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Date of birth</label>
                                    <div class="row gutters-xs w-50">
                                        <input class="form-control" type="date" name="date_of_birth" id="date_of_birth">
                                    </div>
                                  </div>
                                <div class="form-group">
                                    <label class="form-label">Country</label>
                                    <input class="form-control" placeholder="eg. Nigeria"/>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">State</label>
                                    <input class="form-control" placeholder="eg. Lagos"/>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">City</label>
                                    <input class="form-control" name="city" id="city" placeholder="eg. Somolu"/>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Expiry Date</label>
                                    <input type="date" name="expirydate" class="form-control"/>
                                </div>
                                {{-- <div class="form-group">
                                    <label class="form-label">Job Description</label>
                                    <textarea class="form-control" rows="7" placeholder="Enter the necessary description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" value="password"/>
                                </div> --}}
                                {{-- <div class="form-footer d-flex">
                                    <button class="btn btn-link col-sm-2 mr-auto">Previous</button>
                                </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-footer d-flex">
                <button type="submit" class="btn btn-primary col-sm-2 ml-auto">Submit</button>
            </div>
        </form>
            <script>
                require(['input-mask']);
            </script>
        </div>
    </div>
</div>
@endsection
