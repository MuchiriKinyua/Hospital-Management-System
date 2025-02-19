<!-- Equipment Field -->
<div class="col-sm-12">
    {!! Form::label('equipment', 'Equipment:') !!}
    <p>{{ $request->equipment }}</p>
</div>

<!-- Issue Field -->
<div class="col-sm-12">
    {!! Form::label('issue', 'Issue:') !!}
    <p>{{ $request->issue }}</p>
</div>

<!-- Reported By Field -->
<div class="col-sm-12">
    {!! Form::label('reported_by', 'Reported By:') !!}
    <p>{{ $request->reported_by }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $request->status }}</p>
</div>

