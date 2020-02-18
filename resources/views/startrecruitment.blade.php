@extends('layouts.default')

@section('content')
<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
            <h4 class="page-subtitle">
                <a href="/dashboard">Dashboard</a> > Start Recruitment
            </h4>
        </div>

        {{-- <div class="col-md-6 col-xl-8">

        </div> --}}

    </div>
    <div class="content-page">
        <main class="container my-4 flex-fill">
          <div class="center">
            <div class="empty-icon">
              <img src="./static/illustrations/undraw_printing_invoices_5r4r.svg" class="h-9 mb-3" alt="">
            </div>
            <p class="empty-title h3">No results found</p>
            <p class="empty-subtitle text-muted">
              You're a few clicks away from hiring a thoroughly verified employee, starting with the button below!
            </p>
            <div class="empty-action">
            <a href="{{ route('startrecruitmentform')}}" class="btn btn-primary">
                <i class="fe fe-plus"></i>
                Add your first client
              </a>
            </div>
          </div>
        </main>
      </div>
</div>
@endsection
