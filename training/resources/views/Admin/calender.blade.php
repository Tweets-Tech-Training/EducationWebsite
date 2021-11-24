@extends('dashboard_layout.main')
@section('content')
    <div class="container">
<div class="card">
    <div id="calendar"></div>
</div>

    </div>
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            // Check calender div is exist or not.
            // In case of guest user it will not present
            for(var i = 0; i < data.length; i++) {
                $('#calendar').fullCalendar('renderEvent', data[i], true);
            }
            if($("#calendar").length ){
                $('#calendar').fullCalendar({
                    theme: true,
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay'
                    },
                    selectable:true,
                    selectHelper:true,
                    select: function(start, end){
                        var title = prompt('Event Title :');
                        var eventData;
                        if(title){
                            eventData = {
                                title: title,
                                start: start,
                                end:end
                            };
                            $('#calendar').fullCalendar('renderEvent',eventData,true);
                        }
                        $('#calendar').fullCalendar('unselect');
                    },
                    editable:true,
                    eventLimit:true
                });
            }

        });
    </script>

{{--<script>--}}
{{--    $(document).ready(function () {--}}
{{--        var SITEURL = "{{url('/')}}";--}}
{{--    $.ajaxSetup({--}}
{{--    headers:{--}}
{{--    'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')--}}
{{--    }--}}
{{--    });--}}

{{--    var calendar = $('#calendar').fullCalendar({--}}
{{--            editable:true,--}}
{{--            header:{--}}
{{--                left:'prev,next today',--}}
{{--                center:'title',--}}
{{--                right:'month,agendaWeek,agendaDay'--}}
{{--             },--}}
{{--            events:'/calendar',--}}
{{--            selectable:true,--}}
{{--            selectHelper: true,--}}
{{--    //     var calendar = $('#calendar').fullCalendar({--}}
{{--    //         editable: true,--}}
{{--    //         events: SITEURL + "calendar",--}}
{{--    //         displayEventTime: true,--}}
{{--    //         editable: true,--}}
{{--    //         eventRender: function (event, element, view) {--}}
{{--    //             if (event.allDay === 'true') {--}}
{{--    //                 event.allDay = true;--}}
{{--    //             } else {--}}
{{--    //                 event.allDay = false;--}}
{{--    //             }--}}
{{--    //         },--}}

{{--      });--}}

{{--    });--}}

{{--    </script>--}}
@endpush
