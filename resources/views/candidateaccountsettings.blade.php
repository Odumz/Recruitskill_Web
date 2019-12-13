@extends('layouts.defaultcandidate')

@section('content')
<div class="container">
<div class="page-header">
    <h1 class="page-title">
        <i class="fa fa-dashboard" style="color: blue;"></i> Account Settings
    </h1>
</div>
<div class="col-lg-12">
    <form class="card">
      <div class="card-body">
        <h3 class="card-title">Account Settings</h3>
        <div class="row">
          <div class="col-md-5">
            <div class="form-group">
              <label class="form-label">Company</label>
              <input type="text" class="form-control" disabled="" placeholder="Company" value="Creative Code Inc.">
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
              <input type="email" class="form-control" placeholder="Email for notifications">
            </div>
          </div>
          <div class="col-sm-6 col-md-6">
            <div class="form-group">
              <label class="form-label">First Name</label>
              <input type="text" class="form-control" placeholder="Company">
            </div>
          </div>
          <div class="col-sm-6 col-md-6">
            <div class="form-group">
              <label class="form-label">Last Name</label>
              <input type="text" class="form-control" placeholder="Last Name">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label class="form-label">Address</label>
              <input type="text" class="form-control" placeholder="Home Address">
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
              <label class="form-label">Postal Code</label>
              <input type="number" class="form-control" placeholder="ZIP Code">
            </div>
          </div>
          <div class="col-md-5">
            <div class="form-group">
              <label class="form-label">Country</label>
              <select class="form-control custom-select">
                <option value="">-- Select --</option>
              </select>
            </div>
          </div>
          {{-- <div class="col-md-12">
            <div class="form-group mb-0">
              <label class="form-label">About Me</label>
              <textarea rows="5" class="form-control" placeholder="Here can be your description"></textarea>
            </div>
          </div> --}}
        </div>
      </div>
      <div class="card-footer text-right">
        <button type="submit" class="btn btn-primary">Update Profile</button>
      </div>
    </form>
</div>
<div class="page-header">
    <h1 class="page-title">
        <i class="fa fa-dashboard" style="color: blue;"></i> Password Reset
    </h1>
</div>
<div class="col-lg-12">
    <form class="card">
      <div class="card-body">
        <h3 class="card-title">Password Reset</h3>
        <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="form-group">
                <label class="form-label">Current Password</label>
                <div class="input-group">
                <input type="password" class="form-control" placeholder="Enter old password">
                <span class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-eye"></i></span>
                </span>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="form-group">
              <label class="form-label">New Password</label>
                <div class="input-group">
                <input type="password" class="form-control" placeholder="Enter new password">
                <span class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-eye"></i></span>
                </span>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="form-group">
              <label class="form-label">Confirm Password</label>
                <div class="input-group">
                <input type="password" class="form-control" placeholder="Confirm password">
                <span class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-eye"></i></span>
                </span>
                </div>
            </div>
        </div>
        {{-- <div class="col-sm-6 col-md-6">
            <div class="form-group">
              <label class="form-label">First Name</label>
              <input type="text" class="form-control" placeholder="Company">
            </div>
        </div>
        <div class="col-sm-6 col-md-6">
            <div class="form-group">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control" placeholder="Last Name">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label class="form-label">Address</label>
                <input type="text" class="form-control" placeholder="Home Address">
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
                <label class="form-label">Postal Code</label>
                <input type="number" class="form-control" placeholder="ZIP Code">
            </div>
        </div>
        <div class="col-md-5">
        <div class="form-group">
            <label class="form-label">Country</label>
            <select class="form-control custom-select">
                <option value="">-- Select --</option>
            </select>
        </div>
        </div> --}}
          {{-- <div class="col-md-12">
            <div class="form-group mb-0">
              <label class="form-label">About Me</label>
              <textarea rows="5" class="form-control" placeholder="Here can be your description"></textarea>
            </div>
          </div> --}}
        </div>
      </div>
      <div class="card-footer text-right">
        <button type="submit" class="btn btn-primary">Update Password</button>
      </div>
    </form>
</div>
</div>
@endsection
