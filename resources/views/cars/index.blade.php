<h1>Lista Cars</h1>

<ul>
  @foreach ($cars as $car)
    <li>{{ $car->brand}} {{ $car->model}} </li>
    <a href="{{ route('cars.show', $car) }}">Details</a>
  @endforeach
</ul>
