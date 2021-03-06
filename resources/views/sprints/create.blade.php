@section('title',  _('Create Sprint'))

@extends('layouts.modal')

@section('content')

@include('partials.forms.sprint', ['route' => 'sprints.store'])

<script>
$(function(){
    $('input[name="daterange"]').daterangepicker();

    $('input[name="daterange"]').on('apply.daterangepicker', function(ev, picker) {
          $(this).val(picker.startDate.format('YYYY-MM-DD') + ' - ' + picker.endDate.format('YYYY-MM-DD'));
    });
});
</script>

@endsection
