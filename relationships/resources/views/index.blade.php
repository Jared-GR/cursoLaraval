<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    {{-- <h3>{{ $user->phoneSim }}</h3> --}}
    <h1>{{ $user->name }} Roles:</h1>
    <ul>
        @foreach ($user->roles as $role)
            <li>{{ $role->name }} | Added by: {{ $role->pivot->added_by }}</li>
        @endforeach
    </ul>
</body>

</html>