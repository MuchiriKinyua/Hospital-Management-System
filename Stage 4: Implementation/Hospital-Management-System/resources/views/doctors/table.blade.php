<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="doctors-table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Room</th>
                <th>Speciality</th>
                <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($doctors as $doctor)
                <tr>
                    <td>{{ $doctor->name }}</td>
                    <td>{{ $doctor->phone }}</td>
                    <td>{{ $doctor->room }}</td>
                    <td>{{ $doctor->speciality }}</td>
                    <td>{{ $doctor->image }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['doctors.destroy', $doctor->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('doctors.show', [$doctor->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('doctors.edit', [$doctor->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $doctors])
        </div>
    </div>
</div>
