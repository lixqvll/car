<h1>السيارات</h1>

<a href="/cars">
    <button>قائمة السيارات</button>
</a>

<ul>
@foreach($mycar as $car)
    <li>{{ $car }}</li>
@endforeach
</ul>
