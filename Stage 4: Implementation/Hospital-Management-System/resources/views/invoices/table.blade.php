<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="invoices-table">
            <thead>
            <tr>
                <th>Billing Id</th>
                <th>Patient Id</th>
                <th>Service</th>
                <th>Amount</th>
                <th>Issued By</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($invoices as $invoice)
                <tr>
                    <td>{{ $invoice->billing_id }}</td>
                    <td>{{ $invoice->patient_id }}</td>
                    <td>{{ $invoice->service }}</td>
                    <td>{{ $invoice->amount }}</td>
                    <td>{{ $invoice->issued_by }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['invoices.destroy', $invoice->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('invoices.show', [$invoice->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('invoices.edit', [$invoice->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $invoices])
        </div>
    </div>
</div>
