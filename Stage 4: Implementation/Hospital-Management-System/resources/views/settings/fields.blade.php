<!-- Setting Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('setting_name', 'Setting Name:') !!}
    {!! Form::text('setting_name', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Setting Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('setting_value', 'Setting Value:') !!}
    {!! Form::text('setting_value', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>