@extends('layouts.defaultcandidate')

@section('content')
<div class="container">
    <div class="page-header">
        <h4 class="page-title">
            <i class="fa fa-dashboard" style="color: blue;"></i>
            <a href="/dashboard">Dashboard</a> > Courses
        </h4>
    </div>

    {{-- <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Carousel with indicators</h3>
              </div>
              <div class="card-body">
                <div id="carousel-indicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-indicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-indicators" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-indicators" data-slide-to="2" class=""></li>
                    <li data-target="#carousel-indicators" data-slide-to="3" class=""></li>
                    <li data-target="#carousel-indicators" data-slide-to="4" class=""></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" alt="" src="./demo/photos/aneta-ivanova-776-1500.jpg" data-holder-rendered="true">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" alt="" src="./demo/photos/anthony-intraversato-257182-1500.jpg" data-holder-rendered="true">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" alt="" src="./demo/photos/artem-sapegin-229391-1500.jpg" data-holder-rendered="true">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" alt="" src="./demo/photos/bobby-burch-145906-1500.jpg" data-holder-rendered="true">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" alt="" src="./demo/photos/casey-horner-339165-1500.jpg" data-holder-rendered="true">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}

    <div class="row row-cards row-deck">
        <div class="col-lg-6">
            <div class="card card-aside">
                <a href="#" class="card-aside-column" style="background-image: url(./demo/photos/david-klaasen-54203-500.jpg)"></a>
                <div class="card-body d-flex flex-column">
                <h4><a href="#">And this isn't my nose. This is a false one.</a></h4>
                <div class="text-muted">Look, my liege! The Knights Who Say Ni demand a sacrifice! …Are you suggesting that coconuts migr...</div>
                <br>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-green" style="width: 100%"></div>
                </div>
                <div class="d-flex align-items-center pt-5 mt-auto">
                    <div class="avatar avatar-md mr-3" style="background-image: url(./demo/faces/female/18.jpg)"></div>
                    <div>
                    <a href="./profile.html" class="text-default">Rose Bradley</a>
                    <small class="d-block text-muted">3 days ago</small>
                    </div>
                    <div class="ml-auto">
                        <a href="javascript:void(0)" class="btn btn-primary"><i class="fe fe-rotate-cw"></i> Retake</a>
                    </div>
                    <div class="ml-auto text-muted">
                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-heart mr-1" style="color: red"></i></a>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card card-aside">
                <a href="#" class="card-aside-column" style="background-image: url(./demo/photos/david-marcu-114194-500.jpg)"></a>
                <div class="card-body d-flex flex-column">
                    <h4><a href="#">Well, I didn't vote for you.</a></h4>
                    <div class="text-muted">Well, we did do the nose. Why? Shut up! Will you shut up?! You don't frighten us, English pig-dog...</div>
                    <br>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-yellow" style="width: 65%"></div>
                    </div>
                    <div class="d-flex align-items-center pt-5 mt-auto">
                        <div class="avatar avatar-md mr-3" style="background-image: url(./demo/faces/male/16.jpg)"></div>
                        <div>
                        <a href="./profile.html" class="text-default">Peter Richards</a>
                        <small class="d-block text-muted">3 days ago</small>
                        </div>
                        <div class="ml-auto">
                            <a href="javascript:void(0)" class="btn btn-primary"><i class="fe fe-play-circle"></i> Continue</a>
                        </div>
                        <div class="ml-auto text-muted">
                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-heart mr-1" style="color: red"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card card-aside">
                <a href="#" class="card-aside-column" style="background-image: url(./demo/photos/david-klaasen-54203-500.jpg)"></a>
                <div class="card-body d-flex flex-column">
                <h4><a href="#">And this isn't my nose. This is a false one.</a></h4>
                <div class="text-muted">Look, my liege! The Knights Who Say Ni demand a sacrifice! …Are you suggesting that coconuts migr...</div>
                <br>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-green" style="width: 100%"></div>
                </div>
                <div class="d-flex align-items-center pt-5 mt-auto">
                    <div class="avatar avatar-md mr-3" style="background-image: url(./demo/faces/female/18.jpg)"></div>
                    <div>
                    <a href="./profile.html" class="text-default">Rose Bradley</a>
                    <small class="d-block text-muted">3 days ago</small>
                    </div>
                    <div class="ml-auto">
                        <a href="javascript:void(0)" class="btn btn-primary"><i class="fe fe-rotate-cw"></i> Retake</a>
                    </div>
                    <div class="ml-auto text-muted">
                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-heart mr-1" style="color: red"></i></a>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card card-aside">
                <a href="#" class="card-aside-column" style="background-image: url(./demo/photos/david-marcu-114194-500.jpg)"></a>
                <div class="card-body d-flex flex-column">
                    <h4><a href="#">Well, I didn't vote for you.</a></h4>
                    <div class="text-muted">Well, we did do the nose. Why? Shut up! Will you shut up?! You don't frighten us, English pig-dog...</div>
                    <br>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-yellow" style="width: 65%"></div>
                    </div>
                    <div class="d-flex align-items-center pt-5 mt-auto">
                        <div class="avatar avatar-md mr-3" style="background-image: url(./demo/faces/male/16.jpg)"></div>
                        <div>
                        <a href="./profile.html" class="text-default">Peter Richards</a>
                        <small class="d-block text-muted">3 days ago</small>
                        </div>
                        <div class="ml-auto">
                            <a href="javascript:void(0)" class="btn btn-primary"><i class="fe fe-play-circle"></i> Continue</a>
                        </div>
                        <div class="ml-auto text-muted">
                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-heart mr-1" style="color: red"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-header">
        <h4 class="page-title">
            <i class="fa fa-dashboard" style="color: blue;"></i>
            <a href="/dashboard">Related courses</a>
        </h4>
    </div>
    <div class="row row-cards row-deck">
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <a href="#"><img class="card-img-top" src="./demo/photos/david-klaasen-54203-500.jpg" alt="And this isn&#39;t my nose. This is a false one."></a>
                <div class="card-body d-flex flex-column">
                <h4><a href="#">And this isn't my nose. This is a false one.</a></h4>
                <div class="text-muted">Look, my liege! The Knights Who Say Ni demand a sacrifice! …Are you suggesting that coconuts migr...</div>
                <div class="d-flex align-items-center pt-5 mt-auto">
                    <div class="avatar avatar-md mr-3" style="background-image: url(./demo/faces/female/18.jpg)"></div>
                    <div>
                    <a href="./profile.html" class="text-default">Rose Bradley</a>
                    <small class="d-block text-muted">3 days ago</small>
                    </div>
                    <div class="ml-auto text-muted">
                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-sm-6 col-xl-3">
            <div class="card">
                <a href="#"><img class="card-img-top" src="./demo/photos/david-marcu-114194-500.jpg" alt="Well, I didn&#39;t vote for you."></a>
                <div class="card-body d-flex flex-column">
                <h4><a href="#">Well, I didn't vote for you.</a></h4>
                <div class="text-muted">Well, we did do the nose. Why? Shut up! Will you shut up?! You don't frighten us, English pig-dog...</div>
                <div class="d-flex align-items-center pt-5 mt-auto">
                    <div class="avatar avatar-md mr-3" style="background-image: url(./demo/faces/male/16.jpg)"></div>
                    <div>
                    <a href="./profile.html" class="text-default">Peter Richards</a>
                    <small class="d-block text-muted">3 days ago</small>
                    </div>
                    <div class="ml-auto text-muted">
                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-sm-6 col-xl-3">
            <div class="card">
                <a href="#"><img class="card-img-top" src="./demo/photos/davide-cantelli-139887-500.jpg" alt="How do you know she is a witch?"></a>
                <div class="card-body d-flex flex-column">
                <h4><a href="#">How do you know she is a witch?</a></h4>
                <div class="text-muted">Are you suggesting that coconuts migrate? No, no, no! Yes, yes. A bit. But she's got a wart. You ...</div>
                <div class="d-flex align-items-center pt-5 mt-auto">
                    <div class="avatar avatar-md mr-3" style="background-image: url(./demo/faces/male/26.jpg)"></div>
                    <div>
                    <a href="./profile.html" class="text-default">Wayne Holland</a>
                    <small class="d-block text-muted">3 days ago</small>
                    </div>
                    <div class="ml-auto text-muted">
                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-sm-6 col-xl-3">
            <div class="card">
                <a href="#"><img class="card-img-top" src="./demo/photos/dino-reichmuth-84359-500.jpg" alt="Shut up!"></a>
                <div class="card-body d-flex flex-column">
                <h4><a href="#">Shut up!</a></h4>
                <div class="text-muted">Burn her! How do you know she is a witch? You don't frighten us, English pig-dogs! Go and boil yo...</div>
                <div class="d-flex align-items-center pt-5 mt-auto">
                    <div class="avatar avatar-md mr-3" style="background-image: url(./demo/faces/female/7.jpg)"></div>
                    <div>
                    <a href="./profile.html" class="text-default">Michelle Ross</a>
                    <small class="d-block text-muted">3 days ago</small>
                    </div>
                    <div class="ml-auto text-muted">
                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
