@foreach ($users as $user)
<ul>
    <li>{{ $user->name }}</li>
    <li>{{ $user->phone->phone_number }}</li>
</ul>
@endforeach
