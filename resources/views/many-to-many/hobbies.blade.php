@foreach ($hobbies as $hobby)
<ul>
    <li>{{ $hobby->name }}</li>
    <ol>
        @foreach ($hobby->users as $user)
        <li>{{ $user->name }}</li>
        @endforeach
    </ol>
</ul>
@endforeach
