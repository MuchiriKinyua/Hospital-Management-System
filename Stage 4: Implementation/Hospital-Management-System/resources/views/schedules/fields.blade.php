<!-- Doctor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doctor_id', 'Doctor Id:') !!}
    {!! Form::number('doctor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Available Days Field -->
<div class="form-group col-sm-6">
    {!! Form::label('available_days', 'Available Days:') !!}
    {!! Form::text('available_days', null, ['class' => 'form-control','id'=>'available_days']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#available_days').datepicker()
    </script>
@endpush

<!-- Start Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_time', 'Start Time:') !!}
    {!! Form::text('start_time', null, ['class' => 'form-control','id'=>'start_time']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#start_time').datepicker()
    </script>
@endpush

<!-- End Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end_time', 'End Time:') !!}
    {!! Form::text('end_time', null, ['class' => 'form-control','id'=>'end_time']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#end_time').datepicker()
    </script>
@endpush