@extends('layouts.default')

@section('content')

<div class="content-page">
    <main class="container my-4 flex-fill">
        <!-- Page title -->
        <div class="page-title-box">
            <div class="row align-items-center">
            <div class="col-auto">
                <div class="page-header">
                    <h4 class="page-subtitle">
                        <a href="/dashboard">Dashboard</a> > Upcoming Interviews
                    </h4>
                </div>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ml-auto d-print-none">
                <div class="d-flex">
                <a href="#" class="btn btn-primary">
                    <i class="fe fe-plus"></i> Add event
                </a>
                </div>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
            <div id="calendar-main" class="card-calendar"></div>
            </div>
        </div>
    </main>
</div>

@endsection

@section('scripts')
<!-- Libs JS -->
<script src="./dist/libs/jquery/dist/jquery.slim.min.js?1578694044"></script>
<script src="./dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js?1578694044"></script>
<script src="./dist/libs/fullcalendar/core/main.min.js?1578694044"></script>
<script src="./dist/libs/fullcalendar/daygrid/main.min.js?1578694044"></script>
<script src="./dist/libs/fullcalendar/interaction/main.min.js?1578694044"></script>
<script src="./dist/libs/fullcalendar/timegrid/main.min.js?1578694044"></script>
<script src="./dist/libs/fullcalendar/list/main.min.js?1578694044"></script>
<!-- Tabler Core -->
<script src="./dist/js/tabler.min.js?1578694044"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar-main'),
           today = new Date(),
           y = today.getFullYear(),
           m = today.getMonth(),
           d = today.getDate();
        window.FullCalendar && (new FullCalendar.Calendar(calendarEl, {
         plugins: [ 'interaction', 'dayGrid' ],
           themeSystem: 'standard',
         header: {
             left: 'title',
             center: '',
             right: 'prev,next'
         },
         selectable: true,
         selectHelper: true,
         nowIndicator: true,
         views: {
             dayGridMonth: { buttonText: 'month' },
             timeGridWeek: { buttonText: 'week' },
             timeGridDay: { buttonText: 'day' }
         },
         defaultView: 'dayGridMonth',
         timeFormat: 'H(:mm)',
         events: [
             {
                 title: 'All Day Event',
                 start: new Date(y, m, 1),
                 className: 'bg-blue-lt'
              },
              {
                 id: 999,
                 title: 'Repeating Event',
                 start: new Date(y, m, 7, 6, 0),
                 allDay: false,
                 className: 'bg-blue-lt'
              },
              {
                 id: 999,
                 title: 'Repeating Event',
                 start: new Date(y, m, 14, 6, 0),
                 allDay: false,
                 className: 'bg-lime-lt'
              },
              {
                 title: 'Meeting',
                 start: new Date(y, m, 4, 10, 30),
                 allDay: false,
                 className: 'bg-green-lt'
              },
              {
                 title: 'Lunch',
                 start: new Date(y, m, 5, 12, 0),
                 end: new Date(y, m, 5, 14, 0),
                 allDay: false,
                 className: 'bg-red-lt'
              },
              {
                 title: 'LBD Launch',
                 start: new Date(y, m, 19, 12, 0),
                 allDay: true,
                 className: 'bg-azure-lt'
              },
              {
                 title: 'Birthday Party',
                 start: new Date(y, m, 16, 19, 0),
                 end: new Date(y, m, 16, 22, 30),
                 allDay: false,
                className: 'bg-orange-lt'
              }
           ]
     })).render();
  });
</script>
@endsection

@section('headtags')
<!-- Libs CSS -->
<link href="./dist/libs/jqvmap/dist/jqvmap.min.css?1578694044" rel="stylesheet"/>
<link href="./dist/libs/selectize/dist/css/selectize.css?1578694044" rel="stylesheet"/>
<link href="./dist/libs/fullcalendar/core/main.min.css?1578694044" rel="stylesheet"/>
<link href="./dist/libs/fullcalendar/daygrid/main.min.css?1578694044" rel="stylesheet"/>
<link href="./dist/libs/fullcalendar/timegrid/main.min.css?1578694044" rel="stylesheet"/>
<link href="./dist/libs/fullcalendar/list/main.min.css?1578694044" rel="stylesheet"/>
<link href="./dist/libs/daterangepicker/daterangepicker.css?1578694044" rel="stylesheet"/>
<!-- Tabler Core -->
{{-- <link href="./dist/css/tabler.min.css?1578694044" rel="stylesheet"/> --}}
<!-- Tabler Plugins -->
<link href="./dist/css/tabler-flags.min.css?1578694044" rel="stylesheet"/>
<link href="./dist/css/tabler-payments.min.css?1578694044" rel="stylesheet"/>
<link href="./dist/css/tabler-buttons.min.css?1578694044" rel="stylesheet"/>
@endsection
