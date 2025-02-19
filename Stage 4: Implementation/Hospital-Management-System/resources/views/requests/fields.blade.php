<!-- Equipment Field -->
<div class="form-group col-sm-6">
    {!! Form::label('equipment', 'Equipment:') !!}
    {!! Form::text('equipment', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Issue Field -->
<div class="form-group col-sm-6">
    {!! Form::label('issue', 'Issue:') !!}
    {!! Form::text('issue', null, ['class' => 'form-control', 'maxlength' => 600, 'maxlength' => 600]) !!}
</div>

<!-- Reported By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reported_by', 'Reported By:') !!}
    {!! Form::text('reported_by', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>