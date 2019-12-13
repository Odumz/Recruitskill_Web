@extends('layouts.defaultcandidate')

@section('content')
<div class="container">
<div class="page-header">
    <h1 class="page-title">
        <i class="fa fa-dashboard" style="color: blue;"></i> Profile
    </h1>
</div>
<div class="card card-profile">
    <div class="card-header" style="background-image: url(demo/photos/eberhard-grossgasteiger-311213-500.jpg);"></div>
    <div class="card-body text-center">
        <img class="card-profile-img" src="demo/faces/male/16.jpg">
        <h3 class="mb-3">Peter Richards</h3>
        <p class="mb-4">
            Big belly rude boy, million dollar hustler. Unemployed.
        </p>
    </div>
</div>
<form class="card col-12">
    <div class="card-body">
        <h3 class="card-title">Company Profile</h3>
        <div class="row">
        <div class="col-md-5">
            <div class="form-group">
                <label class="form-label">Company Name</label>
                <input type="text" class="form-control" disabled="" placeholder="ABC Inc.">
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="form-group">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" placeholder="Username">
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="form-group">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="col-sm-6 col-md-6">
            <div class="form-group">
                <label class="form-label">Industry</label>
                <input type="text" class="form-control" placeholder="Industry">
            </div>
        </div>
        <div class="col-sm-6 col-md-6">
            <div class="form-group">
                <label class="form-label">Website</label>
                <input type="text" class="form-control" placeholder="creativecode.org">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label class="form-label">Address</label>
                <input type="text" class="form-control" placeholder="Office Address">
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="form-group">
                <label class="form-label">City</label>
                <input type="text" class="form-control" placeholder="City">
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="form-group">
                <div class="row gutters-sm">
                <div class="col">
                    <label class="form-label">Postal Code</label>
                </div>
                <span class="col align-self-auto">
                    <span class="form-help" data-toggle="popover" data-placement="top"
                        data-content="<p>ZIP Code must be US or CDN format. You can use an extended ZIP+4 code to determine address more accurately.</p>
                        <p class='mb-0'><a href=''>USP ZIP codes lookup tools</a></p>">?
                    </span>
                </span>
                </div>
                <input type="number" class="form-control" placeholder="ZIP Code">
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <label class="form-label">Country</label>
                <input type="text" class="form-control" placeholder="Country">
                {{-- <select class="form-control custom-select">
                    <option value="">Germany</option>
                </select> --}}
            </div>
        </div>
        <div class="col-sm-6 col-md-6">
            <div class="form-group">
                <label class="form-label">Number of Employees</label>
                {{-- <input type="number" class="form-control" placeholder="Industry"> --}}
                <select class="form-control">
                    <option value="">-- Select --</option>
                    <option value="">0 - 5</option>
                    <option value="">5 - 10</option>
                    <option value="">11 - 50</option>
                    <option value="">51 - 100</option>
                    <option value="">101 - 500</option>
                </select>
            </div>
        </div>
        <div class="col-sm-6 col-md-6">
            <div class="form-group">
                <label class="form-label">Company Reg No.</label>
                <input type="text" class="form-control" placeholder="098908">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group mb-0">
                <label class="form-label">Company Brief</label>
                <textarea rows="5" class="form-control" placeholder="Here can be your description"></textarea>
            </div>
        </div>
        </div>
    </div>
    <div class="card-footer text-right">
        <button type="submit" class="btn btn-primary">Update Profile</button>
    </div>
</form>
</div>
@endsection
