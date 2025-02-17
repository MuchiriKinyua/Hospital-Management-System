<!-- Medicine Name Field -->
<div class="col-sm-12">
    {!! Form::label('medicine_name', 'Medicine Name:') !!}
    <p>{{ $pharmacy->medicine_name }}</p>
</div>

<!-- Category Field -->
<div class="col-sm-12">
    {!! Form::label('category', 'Category:') !!}
    <p>{{ $pharmacy->category }}</p>
</div>

<!-- Price Field -->
<div class="col-sm-12">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $pharmacy->price }}</p>
</div>

<!-- Stock Quantity Field -->
<div class="col-sm-12">
    {!! Form::label('stock_quantity', 'Stock Quantity:') !!}
    <p>{{ $pharmacy->stock_quantity }}</p>
</div>

<!-- Expiration Date Field -->
<div class="col-sm-12">
    {!! Form::label('expiration_date', 'Expiration Date:') !!}
    <p>{{ $pharmacy->expiration_date }}</p>
</div>

