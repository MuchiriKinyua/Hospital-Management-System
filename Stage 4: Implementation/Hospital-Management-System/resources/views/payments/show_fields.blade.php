<!-- Patient Id Field -->
<div class="col-sm-12">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    <p>{{ $payment->patient_id }}</p>
</div>

<!-- Amount Field -->
<div class="col-sm-12">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{{ $payment->amount }}</p>
</div>

<!-- Issued By Field -->
<div class="col-sm-12">
    {!! Form::label('issued_by', 'Issued By:') !!}
    <p>{{ $payment->issued_by }}</p>
</div>

