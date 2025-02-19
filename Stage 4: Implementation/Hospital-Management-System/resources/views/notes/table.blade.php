<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="notes-table">
            <thead>
            <tr>
                <th>Doctor Id</th>
                <th>Patient Id</th>
                <th>Visit Id</th>
                <th>Notes</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($notes as $note)
                <tr>
                    <td>{{ $note->doctor_id }}</td>
                    <td>{{ $note->patient_id }}</td>
                    <td>{{ $note->visit_id }}</td>
                    <td>{{ $note->notes }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['notes.destroy', $note->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('notes.show', [$note->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('notes.edit', [$note->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $notes])
        </div>
    </div>
</div>
