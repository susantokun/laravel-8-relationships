@foreach ($users as $user)
<ul>
    <li>{{ $user->name }}</li>
    <ol>
        @foreach ($user->phones as $phone)
        <li>{{ $phone->phone_number }}</li>
        @endforeach
    </ol>
</ul>
@endforeach
