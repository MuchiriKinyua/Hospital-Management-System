<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="technicians-table">
            <thead>
            <tr>
                <th>Department Id</th>
                <th>Full Name</th>
                <th>Speciality</th>
                <th>Phone</th>
                <th>Email</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($technicians as $technician)
                <tr>
                    <td>{{ $technician->department_id }}</td>
                    <td>{{ $technician->full_name }}</td>
                    <td>{{ $technician->speciality }}</td>
                    <td>{{ $technician->phone }}</td>
                    <td>{{ $technician->email }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['technicians.destroy', $technician->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('technicians.show', [$technician->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('technicians.edit', [$technician->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $technicians])
        </div>
    </div>
</div>
