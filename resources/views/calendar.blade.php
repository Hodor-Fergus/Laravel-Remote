@extends('layouts.master')
@section('styles')
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.7/index.global.min.js'></script>
{{-- <script src='https://cdn.jsdelivr.net/npm/fullcalendar/daygrid@6.1.7/index.global.min.js'></script> --}}
@endsection
@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-body">
            <div id="calendar">

            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    let companies = JSON.parse(`<?php echo $companies; ?>`);
    console.log(companies);
    let events = companies.map(company => {
        return {
            id: company['id'],
            title: company['company_name'],
            start: company['available_from'],
            end: company['available_to'],
        }
    })
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            initialView: 'dayGridMonth',
            events: events,
        });
        calendar.render();
      });

</script>
@endsection