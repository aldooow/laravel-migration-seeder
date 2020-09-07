<h1> Car: {{ $car->brand }} {{ $car->model}}</h1>
<ul>
  <li>Year: {{ $car->year }}</li>
  <li>Port: {{ $car->port }}</li>
  <li>Fuel: {{ $car->fuel }}</li>
  <a href="{{ route('cars.index') }}">Back</a>
</ul>
