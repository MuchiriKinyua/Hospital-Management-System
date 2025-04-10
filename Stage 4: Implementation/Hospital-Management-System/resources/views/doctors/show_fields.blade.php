<div class="container">
    <h1 class="title">{{ $doctor->name }}</h1>

    <div class="image-container">
        <img height="200px" src="{{ asset('images/' . $doctor->image) }}" alt="{{ $doctor->name }}">
    </div>

    <div class="description-box">
        <h2>Doctor Details</h2>
        <p><strong>Phone:</strong> {{ $doctor->phone }}</p>
        <p><strong>Room:</strong> {{ $doctor->room }}</p>
        <p><strong>Speciality:</strong> {{ $doctor->speciality }}</p>
    </div>
</div>
