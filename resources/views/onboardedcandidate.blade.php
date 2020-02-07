@extends('layouts.default')

@section('content')
<div class="page-header">
    <h4 class="page-subtitle">
        <a href="/dashboard">Dashboard</a> > Onboarded Candidates
    </h4>
</div>
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Onboarded Candidates</h3>
        </div>
        <div class="table-responsive">
        <table class="table table-hover table-outline table-vcenter text-nowrap card-table">
          <thead>
            <tr>
              <th class="text-center w-1"><i class="icon-people"></i></th>
              <th>User</th>
              <th>Activity</th>
              <th class="text-center"><i class="icon-settings"></i></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-center">
                <div class="avatar d-block" style="background-image: url(demo/faces/female/26.jpg)">
                  <span class="avatar-status bg-green"></span>
                </div>
              </td>
              <td>
                <div>Elizabeth Martin</div>
                <div class="small text-muted">
                  Registered: Mar 19, 2018
                </div>
              </td>
              <td>
                <div class="small text-muted">Last login</div>
                <div>4 minutes ago</div>
              </td>
              <td>
                <a href="#">
                    <button type="button" class="btn btn-icon btn-xl px-3 btn-primary btn-primary">
                        <i class="fe fe-eye"></i>
                    </button>
                </a>
              </td>
              <td>
                <form action="/delete/candidate" method="POST">
                    {{ csrf_field() }}
                    {{-- {{ method_field('DELETE') }} --}}
                    @method('DELETE')
                    <input type="hidden" name="item_id" name = "item_id" value="">
                    <button type="submit" class="btn btn-icon btn-xl px-3 btn-primary btn-danger">
                        <i class="fe fe-trash-2"></i>
                     </button>
                </form>
              </td>
            </tr>
            {{-- <tr>
              <td class="text-center">
                <div class="avatar d-block" style="background-image: url(demo/faces/female/17.jpg)">
                  <span class="avatar-status bg-green"></span>
                </div>
              </td>
              <td>
                <div>Michelle Schultz</div>
                <div class="small text-muted">
                  Registered: Mar 2, 2018
                </div>
              </td>
              <td>
                <div class="small text-muted">Last login</div>
                <div>5 minutes ago</div>
              </td>
              <td class="text-center">
                <div class="item-action dropdown">
                  <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <div class="avatar d-block" style="background-image: url(demo/faces/female/21.jpg)">
                  <span class="avatar-status bg-green"></span>
                </div>
              </td>
              <td>
                <div>Crystal Austin</div>
                <div class="small text-muted">
                  Registered: Apr 7, 2018
                </div>
              </td>
              <td>
                <div class="small text-muted">Last login</div>
                <div>a minute ago</div>
              </td>
              <td class="text-center">
                <div class="item-action dropdown">
                  <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <div class="avatar d-block" style="background-image: url(demo/faces/male/32.jpg)">
                  <span class="avatar-status bg-green"></span>
                </div>
              </td>
              <td>
                <div>Douglas Ray</div>
                <div class="small text-muted">
                  Registered: Jan 15, 2018
                </div>
              </td>
              <td>
                <div class="small text-muted">Last login</div>
                <div>a minute ago</div>
              </td>
              <td class="text-center">
                <div class="item-action dropdown">
                  <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <div class="avatar d-block" style="background-image: url(demo/faces/female/12.jpg)">
                  <span class="avatar-status bg-green"></span>
                </div>
              </td>
              <td>
                <div>Teresa Reyes</div>
                <div class="small text-muted">
                  Registered: Mar 4, 2018
                </div>
              </td>
              <td>
                <div class="small text-muted">Last login</div>
                <div>2 minutes ago</div>
              </td>
              <td class="text-center">
                <div class="item-action dropdown">
                  <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <div class="avatar d-block" style="background-image: url(demo/faces/female/4.jpg)">
                  <span class="avatar-status bg-green"></span>
                </div>
              </td>
              <td>
                <div>Emma Wade</div>
                <div class="small text-muted">
                  Registered: Mar 20, 2018
                </div>
              </td>
              <td>
                <div class="small text-muted">Last login</div>
                <div>a minute ago</div>
              </td>
              <td class="text-center">
                <div class="item-action dropdown">
                  <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <div class="avatar d-block" style="background-image: url(demo/faces/female/27.jpg)">
                  <span class="avatar-status bg-green"></span>
                </div>
              </td>
              <td>
                <div>Carol Henderson</div>
                <div class="small text-muted">
                  Registered: Feb 22, 2018
                </div>
              </td>
              <td>
                <div class="small text-muted">Last login</div>
                <div>9 minutes ago</div>
              </td>
              <td class="text-center">
                <div class="item-action dropdown">
                  <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <div class="avatar d-block" style="background-image: url(demo/faces/male/20.jpg)">
                  <span class="avatar-status bg-green"></span>
                </div>
              </td>
              <td>
                <div>Christopher Harvey</div>
                <div class="small text-muted">
                  Registered: Jan 22, 2018
                </div>
              </td>
              <td>
                <div class="small text-muted">Last login</div>
                <div>8 minutes ago</div>
              </td>
              <td class="text-center">
                <div class="item-action dropdown">
                  <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                  </div>
                </div>
              </td>
            </tr> --}}
          </tbody>
        </table>
      </div>
    </div>
</div>
@endsection
