<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="nurses-table">
            <thead>
            <tr>
                <th>Department Id</th>
                <th>Doctor Id</th>
                <th>Full Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($nurses as $nurse)
                <tr>
                    <td>{{ $nurse->department_id }}</td>
                    <td>{{ $nurse->doctor_id }}</td>
                    <td>{{ $nurse->full_name }}</td>
                    <td>{{ $nurse->phone }}</td>
                    <td>{{ $nurse->email }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['nurses.destroy', $nurse->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('nurses.show', [$nurse->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('nurses.edit', [$nurse->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $nurses])
        </div>
    </div>
</div>
