@extends('dashboard_layout.main')
@section('css')
{{--    <link href='fullcalendar/main.css' rel='stylesheet' />--}}
{{--    <link href='{{asset('FrontTheme/assets/plugins/fullcalendar/fullcalendar-rtl.css')  }}' rel='stylesheet' />--}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/bootstrap/main.min.css" rel='stylesheet' />
/*<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />*/
{{----}}
@endsection
@section('content')
    <div class="container">
<div class="card">

    <div class="card-body">
        <div id="calendar"></div>
    </div>

</div>

    </div>

@endsection
@push('script')
{{--    <script src="{{asset('FrontTheme/assets/plugins/fullcalendar/moment.min.js')  }}"></script>--}}
{{--    <script src="{{asset('FrontTheme/assets/plugins/fullcalendar/fullcalendar.min.js')  }}" ></script>--}}
{{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.0.0-alpha/locale-all.js"></script>--}}
{{--<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/lang-all.js"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/locales-all.min.js"></script>
<script>
$(document).ready(function() {
        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({

           locale: 'ar',

                                theme: true,
                                    header: {
                                        left: 'prev,next today',
                                        center: 'title',
                                        right: 'month,agendaWeek,agendaDay'
                                    },
            // editable: true,
            // monthNames: [	'كانون الثاني','شباط','آذار','نيسان','آيار ','حزيران','تموز','آب','آيلول','تشرين الاول','تشرين الثاني','كانون الأول'],

            selectable:true,
                        selectHelper: true,
            // put your options and callbacks here
            events : [3,
                    @foreach($tasks as $task)
                {
                    title : '{{ $task->name }}',
                    @foreach($task->appointments as $appontment)
                    start : '{{ $appontment->getDayAndStartAttribute() }}',
                    {{--start : ' {{ $appontment->created_at}}' ,--}}
                    end : '{{ $appontment->getDayAndEndAttribute() }}',
                    @endforeach
                   // allDay: false,
                },
                @endforeach
            ],
            eventColor: '#378006'
        })
    });
</script>

@endpush
