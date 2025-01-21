<div class="container">
    <div class="row">
        @foreach($cars as $car)
            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="{{ $car->image_url }}" class="card-img-top" alt="{{ $car->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $car->name }}</h5>
                        <p class="card-text">Price to rent: ${{ $car->rental_price }}</p>
                        <a href="{{ route('cars.show', $car->id) }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
