<!-- Patient Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    {!! Form::number('patient_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Appointment Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('appointment_id', 'Appointment Id:') !!}
    {!! Form::number('appointment_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::text('amount', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Payment Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_status', 'Payment Status:') !!}
    {!! Form::text('payment_status', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>

<!-- Payment Method Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_method', 'Payment Method:') !!}
    {!! Form::text('payment_method', null, ['class' => 'form-control', 'maxlength' => 30, 'maxlength' => 30]) !!}
</div>

<!-- Invoice Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('invoice_date', 'Invoice Date:') !!}
    {!! Form::text('invoice_date', null, ['class' => 'form-control','id'=>'invoice_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#invoice_date').datepicker()
    </script>
@endpush