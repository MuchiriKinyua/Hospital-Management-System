<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="payments-table">
            <thead>
            <tr>
                <th>Patient Id</th>
                <th>Amount</th>
                <th>Issued By</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($payments as $payment)
                <tr>
                    <td>{{ $payment->patient_id }}</td>
                    <td>{{ $payment->amount }}</td>
                    <td>{{ $payment->issued_by }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['payments.destroy', $payment->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('payments.show', [$payment->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('payments.edit', [$payment->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $payments])
        </div>
    </div>
</div>
