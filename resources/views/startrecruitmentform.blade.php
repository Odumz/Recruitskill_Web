@extends('layouts.default')

@section('content')
<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
            <h4 class="page-subtitle">
                Start Recruitment
            </h4>
        </div>

        <div class="col-md-6 col-xl-8">
            <form method="post" action="{{ route('addrecruitment') }}" enctype="application/json">
                {{ csrf_field() }}
            <div class="card">
                <div class="card-status bg-teal"></div>
                <div class="card-header">
                    <h3 class="card-title">Let us know who you're looking for!</h3>
                    {{-- <div class="card-options">
                        <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a> |||| action="http://localhost:8080/api/v1/recruit/recruitment"
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
                                    <label class="form-label">Responsibilities</label>
                                    <textarea class="form-control" name="responsibilities" id="responsibilities" placeholder="Enter the responsibilities"></textarea>
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
                <div class="card-status bg-purple"></div>
                <div class="card-header">
                    <h3 class="card-title">More Information</h3>
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
                                    <label class="form-label">Position</label>
                                    <input class="form-control" name="position" id="position" placeholder="Enter a position"/>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Renumeration</label>
                                    <input class="form-control" name="renumeration" id="renumeration" placeholder="Enter a salary range"/>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Experience</label>
                                    <input class="form-control" name="required_experience" id="required_experience" placeholder="Enter required experience"/>
                                </div>
                                <div class="form-group">
                                  <div class="form-label">Type <span><i class="fa fa-info-circle" data-toggle="tooltip" data-placement="right" title="Select job category"></i></span></div>
                                  <select class="form-control form-select" name="job_type">
                                    <option value="">-- Select --</option>
                                    <option value="full time">Full time</option>
                                    <option value="part time">Part time</option>
                                    <option value="internship">Internship</option>
                                  </select>
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

            <div class="card">
                <div class="card-status bg-red"></div>
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
                                            <input type="radio" name="gender" value="Any" class="selectgroup-input">
                                            <span class="selectgroup-button">Any</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="gender" value="Male" class="selectgroup-input">
                                            <span class="selectgroup-button">Male</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="gender" value="Female" class="selectgroup-input">
                                            <span class="selectgroup-button">Female</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Country</label>
                                    <input class="form-control" name="country" id="country" placeholder="eg. Nigeria"/>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">State</label>
                                    <input class="form-control" name="state" id="state" placeholder="eg. Lagos"/>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">City</label>
                                    <input class="form-control" name="city" id="city" placeholder="eg. Somolu"/>
                                </div>
                                <div>
                                    <input hidden class="form-control" name="status" id="status" value="ongoing"/>
                                    <input hidden class="form-control" name="isPublished" id="isPublished" value="1"/>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Expiry Date</label>
                                    <input type="date" name="duration" id="duration" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <input hidden type="text" name="data_type" id="data_type" value="user" class="form-control"/>
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

            <div class="card">
                <div class="card-status bg-green"></div>
                <div class="card-header">
                    <h3 class="card-title">Save As</h3>
                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input class="form-control" name="alias" id="alias" placeholder="Enter an alias"/>
                                </div>
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
