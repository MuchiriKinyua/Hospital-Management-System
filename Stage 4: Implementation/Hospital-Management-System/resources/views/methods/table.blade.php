<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="methods-table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Details</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($methods as $method)
                <tr>
                    <td>{{ $method->name }}</td>
                    <td>{{ $method->details }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['methods.destroy', $method->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('methods.show', [$method->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('methods.edit', [$method->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $methods])
        </div>
    </div>
</div>
