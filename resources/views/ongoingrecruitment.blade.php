@extends('layouts.default')

@section('content')
<div class="page-header">
    <h4 class="page-subtitle">
        <a href="/dashboard">Dashboard</a> > Ongoing Recruitments
    </h4>
</div>
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Ongoing Recruitments</h3>
        </div>
        <div class="table-responsive">
            <table class="table card-table table-vcenter text-nowrap">
                <thead>
                    <tr>
                        <th class="w-1">
                          <label class="form-check">
                              <input type="checkbox" class="form-check-input">  {{-- class="custom-control custom-checkbox" class="custom-control-input" --}}
                          </label>
                        </th>

                        <th>Alias</th>
                        <th>Job Title</th>
                        <th>Job Type</th>
                        <th>Created by</th>
                        <th>Status</th>
                        <th>City</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ongoingRecruitment as $item)
                    <tr>
                        <td><span class="text-muted"></span>
                          <label class="form-check">
                              <input type="checkbox" class="form-check-input" value="{{$item->id ?? ''}}">
                          </label>
                      </td>  {{-- {{$item->id ?? ''}} --}}
                      <td><a href="#" class="text-inherit">{{$item->alias ?? ''}}</a></td>
                        <td>
                          {{$item->job_title ?? ''}}
                        </td>
                        <td>
                          {{$item->job_type ?? ''}}
                        </td>
                        <td>
                          {{$item->user->first_name ?? ''}} {{$item->user->last_name ?? ''}}
                        </td>
                        <td>
                            {{-- @if ({{$item->status}} == "ongoing")
                              <span class="status-icon bg-success"></span> Ongoing
                            @else
                              <span class="status-icon bg-danger"></span> Concluded
                            @endif --}}
                          <span class="status-icon bg-success"></span> Paid
                        </td>
                        <td>{{$item->city ?? ''}}</td>
                        <td>
                          <a href="#">
                              <button type="button" class="btn btn-icon btn-xl px-3 btn-primary btn-primary">
                                  <i class="fe fe-eye"></i>
                              </button>
                          </a>
                        </td>
                        <td>
                          <form action="{{route('deleterecruitment', $item->id)}}" method="POST">
                              {{ csrf_field() }}
                              {{-- {{ method_field('DELETE') }} --}}
                              @method('DELETE')
                              <input type="hidden" name="item_id" name = "item_id" value="">
                              <button type="submit" onclick="return confirm('Are you sure you want to delete this Recruitment?')" class="btn btn-icon btn-xl px-3 btn-primary btn-danger">
                                  <i class="fe fe-trash-2"></i>
                               </button>
                          </form>
                        </td>
                        <td>
                          <a class="icon" href="">
                            <i class="fe fe-edit"></i>
                          </a>
                        </td>
                    </tr>
                    {{-- <tr>
                    <td><span class="text-muted">001402</span></td>
                    <td><a href="invoice.html" class="text-inherit">UX Wireframes</a></td>
                    <td>
                        Adobe
                    </td>
                    <td>
                        87956421
                    </td>
                    <td>
                        12 Apr 2017
                    </td>
                    <td>
                        <span class="status-icon bg-warning"></span> Pending
                    </td>
                    <td>$1200</td>
                    <td class="text-right">
                        <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                        <div class="dropdown">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                        </div>
                    </td>
                    <td>
                        <a class="icon" href="javascript:void(0)">
                            <i class="fe fe-edit"></i>
                        </a>
                    </td>
                    </tr>
                    <tr>
                    <td><span class="text-muted">001403</span></td>
                    <td><a href="invoice.html" class="text-inherit">New Dashboard</a></td>
                    <td>
                        Bluewolf
                    </td>
                    <td>
                        87952621
                    </td>
                    <td>
                        23 Oct 2017
                    </td>
                    <td>
                        <span class="status-icon bg-warning"></span> Pending
                    </td>
                    <td>$534</td>
                    <td class="text-right">
                        <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                        <div class="dropdown">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                        </div>
                    </td>
                    <td>
                        <a class="icon" href="javascript:void(0)">
                            <i class="fe fe-edit"></i>
                        </a>
                    </td>
                    </tr>
                    <tr>
                    <td><span class="text-muted">001404</span></td>
                    <td><a href="invoice.html" class="text-inherit">Landing Page</a></td>
                    <td>
                        Salesforce
                    </td>
                    <td>
                        87953421
                    </td>
                    <td>
                        2 Sep 2017
                    </td>
                    <td>
                        <span class="status-icon bg-secondary"></span> Due in 2 Weeks
                    </td>
                    <td>$1500</td>
                    <td class="text-right">
                        <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                    <div class="dropdown">
                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                    </div>
                    </td>
                    <td>
                        <a class="icon" href="javascript:void(0)">
                            <i class="fe fe-edit"></i>
                        </a>
                    </td>
                    </tr>
                    <tr>
                    <td><span class="text-muted">001405</span></td>
                    <td><a href="invoice.html" class="text-inherit">Marketing Templates</a></td>
                    <td>
                        Printic
                    </td>
                    <td>
                        87956621
                    </td>
                    <td>
                        29 Jan 2018
                    </td>
                    <td>
                        <span class="status-icon bg-danger"></span> Paid Today
                    </td>
                    <td>$648</td>
                    <td class="text-right">
                        <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                        <div class="dropdown">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                        </div>
                    </td>
                    <td>
                        <a class="icon" href="javascript:void(0)">
                            <i class="fe fe-edit"></i>
                        </a>
                    </td>
                    </tr>
                    <tr>
                    <td><span class="text-muted">001406</span></td>
                    <td><a href="invoice.html" class="text-inherit">Sales Presentation</a></td>
                    <td>
                        Tabdaq
                    </td>
                    <td>
                        87956621
                    </td>
                    <td>
                        4 Feb 2018
                    </td>
                    <td>
                        <span class="status-icon bg-secondary"></span> Due in 3 Weeks
                    </td>
                    <td>$300</td>
                    <td class="text-right">
                        <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                        <div class="dropdown">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                        </div>
                    </td>
                    <td>
                        <a class="icon" href="javascript:void(0)">
                            <i class="fe fe-edit"></i>
                        </a>
                    </td>
                    </tr> --}}
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
