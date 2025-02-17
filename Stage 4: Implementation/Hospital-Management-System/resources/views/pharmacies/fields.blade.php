<!-- Medicine Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('medicine_name', 'Medicine Name:') !!}
    {!! Form::text('medicine_name', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Category Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category', 'Category:') !!}
    {!! Form::text('category', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::text('price', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>

<!-- Stock Quantity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stock_quantity', 'Stock Quantity:') !!}
    {!! Form::text('stock_quantity', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Expiration Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('expiration_date', 'Expiration Date:') !!}
    {!! Form::text('expiration_date', null, ['class' => 'form-control','id'=>'expiration_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#expiration_date').datepicker()
    </script>
@endpush