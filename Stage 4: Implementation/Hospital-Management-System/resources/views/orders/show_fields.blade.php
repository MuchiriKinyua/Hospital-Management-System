<!-- Supplier Id Field -->
<div class="col-sm-12">
    {!! Form::label('supplier_id', 'Supplier Id:') !!}
    <p>{{ $order->supplier_id }}</p>
</div>

<!-- Order Date Field -->
<div class="col-sm-12">
    {!! Form::label('order_date', 'Order Date:') !!}
    <p>{{ $order->order_date }}</p>
</div>

<!-- Amount Field -->
<div class="col-sm-12">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{{ $order->amount }}</p>
</div>

