<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>User list:</h1>
    @if ($users->isEmpty())
        <p>The user list is empty</p>
    @else
        <ul>
            @forelse ($users as $user)
                <li>{{ $user->name }} -- {{ $user->age }}yo</li>
            @empty
                <li>List empty</li>
            @endforelse
        </ul>
    @endif
</body>

</html>