<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="pharmacies-table">
            <thead>
            <tr>
                <th>Medicine Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Stock Quantity</th>
                <th>Expiration Date</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pharmacies as $pharmacy)
                <tr>
                    <td>{{ $pharmacy->medicine_name }}</td>
                    <td>{{ $pharmacy->category }}</td>
                    <td>{{ $pharmacy->price }}</td>
                    <td>{{ $pharmacy->stock_quantity }}</td>
                    <td>{{ $pharmacy->expiration_date }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['pharmacies.destroy', $pharmacy->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('pharmacies.show', [$pharmacy->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('pharmacies.edit', [$pharmacy->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $pharmacies])
        </div>
    </div>
</div>
