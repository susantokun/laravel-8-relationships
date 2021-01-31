@foreach ($phones as $phone)
<ul>
    <li>{{ $phone->phone_number }}</li>
    <li>{{ $phone->user->name }}</li>
</ul>
@endforeach
