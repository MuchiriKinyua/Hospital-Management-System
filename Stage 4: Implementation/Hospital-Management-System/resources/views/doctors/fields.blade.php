<div class="container">
    <h1 class="title">Add New Doctor</h1>
    
    <form method="POST" action="{{ route('doctors.store') }}">
        @csrf
        <input type="text" name="name" placeholder="Name" required class="form-control mb-3">
        <input type="tel" name="phone" placeholder="Phone" required class="form-control mb-3">
        <input type="text" name="room" placeholder="Room" required class="form-control mb-3">
        <input type="text" name="speciality" placeholder="Speciality" required class="form-control mb-3">
        {!! Form::file('image', ['class' => 'form-control mb-3']) !!}
        <button type="submit" class="btn btn-primary">Add Doctor</button>
        <a href="{{ route('doctors.index') }}" class="btn btn-default">Cancel</a>
    </form>
</div>
