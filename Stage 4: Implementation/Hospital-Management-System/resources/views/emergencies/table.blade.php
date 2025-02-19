<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="emergencies-table">
            <thead>
            <tr>
                <th>Patient Id</th>
                <th>Full Name</th>
                <th>Role</th>
                <th>Phone</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($emergencies as $emergency)
                <tr>
                    <td>{{ $emergency->patient_id }}</td>
                    <td>{{ $emergency->full_name }}</td>
                    <td>{{ $emergency->role }}</td>
                    <td>{{ $emergency->phone }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['emergencies.destroy', $emergency->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('emergencies.show', [$emergency->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('emergencies.edit', [$emergency->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $emergencies])
        </div>
    </div>
</div>
