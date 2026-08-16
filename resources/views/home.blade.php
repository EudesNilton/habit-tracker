<h1>Hello world</h1>
<p>My name is {{ $name }}</p>
<p>My habits are:</p>
<ul>
    @foreach ($habits as $habit)
        <li>{{ $habit }}</li>
    @endforeach
</ul>