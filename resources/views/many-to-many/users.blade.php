@foreach ($users as $user)
<ul>
    <li>{{ $user->name }}</li>
    <ol>
        @foreach ($user->hobbies as $hobby)
        <li>{{ $hobby->name }}</li>
        @endforeach
    </ol>
</ul>
@endforeach
