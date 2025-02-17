<!-- Patient Id Field -->
<div class="col-sm-12">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    <p>{{ $billing->patient_id }}</p>
</div>

<!-- Appointment Id Field -->
<div class="col-sm-12">
    {!! Form::label('appointment_id', 'Appointment Id:') !!}
    <p>{{ $billing->appointment_id }}</p>
</div>

<!-- Amount Field -->
<div class="col-sm-12">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{{ $billing->amount }}</p>
</div>

<!-- Payment Status Field -->
<div class="col-sm-12">
    {!! Form::label('payment_status', 'Payment Status:') !!}
    <p>{{ $billing->payment_status }}</p>
</div>

<!-- Payment Method Field -->
<div class="col-sm-12">
    {!! Form::label('payment_method', 'Payment Method:') !!}
    <p>{{ $billing->payment_method }}</p>
</div>

<!-- Invoice Date Field -->
<div class="col-sm-12">
    {!! Form::label('invoice_date', 'Invoice Date:') !!}
    <p>{{ $billing->invoice_date }}</p>
</div>

