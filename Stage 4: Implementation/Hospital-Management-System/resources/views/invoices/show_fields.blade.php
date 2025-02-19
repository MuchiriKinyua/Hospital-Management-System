<!-- Billing Id Field -->
<div class="col-sm-12">
    {!! Form::label('billing_id', 'Billing Id:') !!}
    <p>{{ $invoice->billing_id }}</p>
</div>

<!-- Patient Id Field -->
<div class="col-sm-12">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    <p>{{ $invoice->patient_id }}</p>
</div>

<!-- Service Field -->
<div class="col-sm-12">
    {!! Form::label('service', 'Service:') !!}
    <p>{{ $invoice->service }}</p>
</div>

<!-- Amount Field -->
<div class="col-sm-12">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{{ $invoice->amount }}</p>
</div>

<!-- Issued By Field -->
<div class="col-sm-12">
    {!! Form::label('issued_by', 'Issued By:') !!}
    <p>{{ $invoice->issued_by }}</p>
</div>

